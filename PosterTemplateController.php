<?php

namespace Restaurant\Groups\Http\Controllers;

use App\Http\Controllers\ResourceController as BaseController;
use Restaurant\Groups\Http\Requests\GroupRequest;
use Restaurant\Restaurant\Interfaces\RestaurantRepositoryInterface;
use Restaurant\Restaurant\Models\Templates;
use Restaurant\Restaurant\Models\Restaurantimages;
use Restaurant\Groups\Models\FormatImages;
use Restaurant\Restaurant\Models\ContentFormat;
use Restaurant\Groups\Models\TemplateGenerationQueue;
use Restaurant\Groups\Services\TemplateGenerationService;
use Restaurant\Groups\Support\PosterDesigns;
use App\Jobs\ProcessTemplateGenerationJob;
use DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

/**
 * Campaign poster design, menu image modal, generate-templates flow, and preview.
 */
class PosterTemplateController extends BaseController
{
    /**
     * @var \Restaurant\Restaurant\Interfaces\RestaurantRepositoryInterface
     */
    protected $restaurant;

    /**
     * @var TemplateGenerationService
     */
    protected $generationService;

    public function __construct(
        RestaurantRepositoryInterface $restaurant,
        TemplateGenerationService $generationService
    ) {
        parent::__construct();
        $this->restaurant = $restaurant;
        $this->generationService = $generationService;
    }

    /**
     * Enqueue template generation jobs (processed in background, one menu at a time).
     */
    public function generateTemplates(GroupRequest $request)
    {
        try {
            $restaurantId = user()->id;

            if (!isset($request->toprated) || !is_array($request->toprated)) {
                return response(['status' => 'fail', 'data' => 'No Menu Item Selected']);
            }

            $batchId = (string) Str::uuid();
            $queued = [];
            $skipped = [];
            $failed = [];
            $menuNames = $this->fetchMenuNameMap($restaurantId);
            $formats = ContentFormat::get()->keyBy('id');

            foreach ($request->toprated as $menuId => $selectedData) {
                if (empty($selectedData['is_checked'])) {
                    continue;
                }

                $menuId = (int) $menuId;
                $formatId = (int) ($selectedData['format'] ?? 0);
                $themeDesign = (string) ($selectedData['template'] ?? '');
                $posterDesign = (string) ($selectedData['poster_design'] ?? $selectedData['posterDesign'] ?? '');
                $posterImage = $selectedData['poster_image'] ?? null;
                $posterImageRef = $selectedData['poster_image_ref'] ?? null;
                if (!empty($posterImageRef)) {
                    if (!$this->generationService->isValidPosterStoragePath($posterImageRef)) {
                        $failed[] = [
                            'menu_id' => $menuId,
                            'menu_name' => $menuNames[$menuId] ?? 'Menu #' . $menuId,
                            'message' => 'Invalid poster image reference.',
                        ];
                        continue;
                    }
                    $posterImage = 'ref:' . $posterImageRef;
                }

                if (!$formatId || !$themeDesign) {
                    $failed[] = [
                        'menu_id' => $menuId,
                        'menu_name' => $menuNames[$menuId] ?? 'Menu #' . $menuId,
                        'message' => 'Format and email design are required.',
                    ];
                    continue;
                }

                if ($this->generationService->templateExists($restaurantId, $menuId, $formatId, $themeDesign)) {
                    $skipped[] = [
                        'menu_id' => $menuId,
                        'menu_name' => $menuNames[$menuId] ?? 'Menu #' . $menuId,
                        'message' => 'Same template already exists.',
                    ];
                    continue;
                }

                if (empty($posterImage)) {
                    $failed[] = [
                        'menu_id' => $menuId,
                        'menu_name' => $menuNames[$menuId] ?? 'Menu #' . $menuId,
                        'message' => 'Poster image is required. Generate the poster preview first.',
                    ];
                    continue;
                }

                $format = $formats->get($formatId);
                $row = TemplateGenerationQueue::create([
                    'restaurant_id' => $restaurantId,
                    'batch_id' => $batchId,
                    'menu_id' => $menuId,
                    'format_id' => $formatId,
                    'theme_design' => $themeDesign,
                    'poster_design' => $posterDesign ?: null,
                    'menu_name' => $menuNames[$menuId] ?? null,
                    'format_name' => $format ? $format->format_name : null,
                    'poster_image' => $posterImage,
                    'status' => 'pending',
                ]);

                $queued[] = [
                    'id' => $row->id,
                    'menu_id' => $menuId,
                    'menu_name' => $row->menu_name,
                ];

                ProcessTemplateGenerationJob::dispatch($row->id);
            }

            if (empty($queued) && empty($skipped) && empty($failed)) {
                return response(['status' => 'fail', 'data' => 'No Menu Item Selected']);
            }

            $this->kickQueueProcessor();

            $message = count($queued) > 0
                ? count($queued) . ' template(s) queued. They will finish in the background — you can close this page.'
                : 'No new templates were queued.';

            return response([
                'status' => 'success',
                'data' => $message,
                'batch_id' => $batchId,
                'queued' => $queued,
                'skipped' => $skipped,
                'failed' => $failed,
            ]);
        } catch (\Exception $e) {
            Log::error('generateTemplates enqueue failed', ['message' => $e->getMessage()]);

            return response(['status' => 'fail', 'data' => $e->getMessage() ?: 'Something went wrong. Try again.']);
        }
    }

    /**
     * Upload one captured poster before enqueue (keeps generate-templates POST small).
     */
    public function uploadQueuePosterImage(GroupRequest $request)
    {
        try {
            $restaurantId = user()->id;
            $menuId = (int) $request->input('menu_id');
            $formatId = (int) $request->input('format_id');
            $themeDesign = (string) $request->input('theme_design', 'design1');
            $dataUrl = $request->input('poster_image');

            if (!$menuId || !$formatId) {
                return response()->json(['status' => 'error', 'data' => 'Menu and format are required.']);
            }

            $result = $this->generationService->uploadPosterFromDataUrl(
                $restaurantId,
                $formatId,
                $menuId,
                $themeDesign,
                $dataUrl
            );

            if (!$result['ok']) {
                return response()->json(['status' => 'error', 'data' => $result['message'] ?? 'Poster upload failed.']);
            }

            $path = $result['img_array'][0]['path'] ?? null;
            if (!$path || !$this->generationService->isValidPosterStoragePath($path)) {
                return response()->json(['status' => 'error', 'data' => 'Poster upload did not return a valid path.']);
            }

            return response()->json([
                'status' => 'success',
                'poster_ref' => $path,
                'poster_design' => $result['poster_design'] ?? null,
            ]);
        } catch (\Exception $e) {
            Log::error('uploadQueuePosterImage failed', ['message' => $e->getMessage()]);

            return response()->json(['status' => 'error', 'data' => $e->getMessage() ?: 'Poster upload failed.']);
        }
    }

    /**
     * Poll generation status; also nudges the queue processor when idle.
     */
    public function templateGenerationStatus(GroupRequest $request)
    {
        $restaurantId = user()->id;
        $this->generationService->processNext($restaurantId);

        $active = TemplateGenerationQueue::where('restaurant_id', $restaurantId)
            ->active()
            ->orderBy('created_at', 'asc')
            ->get();

        $recent = TemplateGenerationQueue::where('restaurant_id', $restaurantId)
            ->whereIn('status', ['completed', 'failed', 'skipped'])
            ->where('completed_at', '>=', now()->subMinutes(30))
            ->orderBy('completed_at', 'desc')
            ->limit(20)
            ->get();

        return response()->json([
            'status' => 'success',
            'active' => $active->map(function ($row) {
                return $this->formatQueueRow($row);
            }),
            'recent' => $recent->map(function ($row) {
                return $this->formatQueueRow($row);
            }),
            'has_active' => $active->isNotEmpty(),
        ]);
    }

    protected function formatQueueRow(TemplateGenerationQueue $row)
    {
        return [
            'id' => $row->id,
            'menu_id' => $row->menu_id,
            'menu_name' => $row->menu_name,
            'format_name' => $row->format_name,
            'theme_design' => $row->theme_design,
            'theme_design_label' => TemplateGenerationService::formatThemeDesignLabel($row->theme_design),
            'poster_design' => $row->poster_design,
            'poster_design_label' => TemplateGenerationService::formatPosterDesignLabel($row->poster_design),
            'status' => $row->status,
            'error_message' => $row->error_message,
            'campaign_template_id' => $row->campaign_template_id,
        ];
    }

    protected function fetchMenuNameMap($restaurantId)
    {
        $map = [];
        try {
            $restaurantKey = hashids_encode($restaurantId);
            $client = new \GuzzleHttp\Client();
            $response = $client->get(env('ZING_URL') . '/api/topratedmenu/' . $restaurantKey);
            $apiResponse = json_decode($response->getBody()->getContents(), true);
            if (!empty($apiResponse['topRatedMenu'])) {
                foreach ($apiResponse['topRatedMenu'] as $m) {
                    $map[(int) $m['id']] = $m['name'] ?? '';
                }
            }
        } catch (\Exception $e) {
        }

        return $map;
    }

    protected function kickQueueProcessor()
    {
        if (config('queue.default') === 'sync') {
            try {
                \Artisan::call('template-generation:process', ['--limit' => 1]);
            } catch (\Exception $e) {
                Log::warning('template-generation:process failed', ['message' => $e->getMessage()]);
            }
        }
    }

    protected function uploadPosterFromDataUrl($restaurantId, $formatId, $menuId, $themeDesign, $dataUrl)
    {
        return $this->generationService->uploadPosterFromDataUrl(
            $restaurantId,
            $formatId,
            $menuId,
            $themeDesign,
            $dataUrl
        );
    }

    public function menuImageModal(GroupRequest $request, $menuId)
    {
        try {
            $context = $this->resolveMenuImageModalContext($request, $menuId);
            if ($context === null) {
                return response()->json(['status' => 'false', 'data' => 'Menu not found']);
            }

            $html = view('groups::templates.menu_image_modal', $context)->render();

            return response()->json(['status' => 'success', 'html' => $html]);
        } catch (\Exception $e) {
            return response()->json(['status' => 'false', 'data' => 'Something went wrong! Try again']);
        }
    }

    /**
     * Lazy-load a single poster design preview (menu image modal + batch capture).
     */
    public function posterDesignPreview(GroupRequest $request, $menuId, $designKey)
    {
        try {
            if (!PosterDesigns::isValid($designKey)) {
                return response()->json(['status' => 'fail', 'data' => 'Invalid poster design']);
            }

            $context = $this->resolveMenuImageModalContext($request, $menuId);
            if ($context === null) {
                return response()->json(['status' => 'false', 'data' => 'Menu not found']);
            }

            $posterDesignKey = PosterDesigns::normalize($designKey);
            $html = view('groups::default.templates.partials.poster_design_single', array_merge($context, [
                'posterDesignKey' => $posterDesignKey,
                'visible' => false,
            ]))->render();

            return response()->json([
                'status' => 'success',
                'html' => $html,
                'design' => $posterDesignKey,
            ]);
        } catch (\Exception $e) {
            return response()->json(['status' => 'false', 'data' => 'Something went wrong! Try again']);
        }
    }

    /**
     * @return array<string, mixed>|null
     */
    protected function resolveMenuImageModalContext(GroupRequest $request, $menuId): ?array
    {
        $restaurantId = user()->id;
        $restaurant = $this->restaurant->findByField('id', $restaurantId)->first();
        if (!$restaurant) {
            return null;
        }

        $formatId = $request->get('format_id');
        $themeData = $this->getWebsiteTheme($restaurantId);
        $themeColor = $themeData['theme_color'];
        $bgColor = $themeData['bg_color'];
        $footerFontcolor = $themeData['footer_font_color'];
        $restaurantKey = hashids_encode($restaurantId);
        $client = new \GuzzleHttp\Client();
        $response = $client->get(env('ZING_URL') . '/api/topratedmenu/' . $restaurantKey);
        $apiResponse = json_decode($response->getBody()->getContents(), true);

        if (empty($apiResponse['status']) || $apiResponse['status'] !== 'success' || empty($apiResponse['topRatedMenu'])) {
            return null;
        }

        $menu = collect($apiResponse['topRatedMenu'])->firstWhere('id', (int) $menuId);
        if (empty($menu)) {
            return null;
        }

        $menuImageUrl = $this->resolveMenuImageUrl($menuId, $menu, $formatId, true);
        $menuImageFallbackUrl = $this->resolveMenuImageUrl($menuId, $menu, $formatId, true, false);
        $campaigntTemplates = Templates::where('restaurant_id', (int) $restaurantId)
            ->where('format_id', (int) $formatId)
            ->where('menu_id', (int) $menuId)
            ->get();

        $formatImages = FormatImages::firstOrCreate([
            'restaurant_id' => (int) $restaurantId,
            'format_id' => (int) $formatId,
            'menu_id' => (int) $menuId,
        ]);

        $logourl = $this->menuImageUrlForDisplay(url($restaurant->defaultImage('logo')), true);
        $templateId = $campaigntTemplates->isNotEmpty() ? $campaigntTemplates->first()->id : null;
        $contentFormat = $formatId ? ContentFormat::where('id', (int) $formatId)->first() : null;
        $savedPosterDesign = $formatImages->poster_design ?? null;

        if ($savedPosterDesign && PosterDesigns::isValid($savedPosterDesign)) {
            $currentPosterDesign = PosterDesigns::normalize($savedPosterDesign);
        } else {
            $fromFormat = $contentFormat ? ($contentFormat->poster_design ?? null) : null;
            $currentPosterDesign = PosterDesigns::isValid($fromFormat)
                ? PosterDesigns::normalize($fromFormat)
                : PosterDesigns::defaultKey();
        }

        return compact(
            'logourl',
            'restaurant',
            'menu',
            'menuId',
            'menuImageUrl',
            'menuImageFallbackUrl',
            'campaigntTemplates',
            'formatImages',
            'templateId',
            'themeColor',
            'bgColor',
            'footerFontcolor',
            'currentPosterDesign'
        );
    }

    // public function uploadMenuImage(GroupRequest $request)
    // {
    //     try {
    //         $restaurantId = user()->id;
    //         $formatImages = FormatImages::firstOrCreate([
    //             'restaurant_id' => (int) $restaurantId,
    //             'format_id' => (int) $request->input('format_id'),
    //             'menu_id' => (int) $request->input('menu_id'),
    //         ]);

    //         $imageInput = $request->input('image');
    //         if (is_array($imageInput) && !empty($imageInput)) {
    //             $formatImages->image = $imageInput;
    //         } else {
    //             $formatImages->image = null;
    //         }

    //         $formatImages->fill($request->only(['menu_id', 'format_id', 'menu_name']));

    //         $posterDesign = $request->input('template') ?: $request->input('poster_design');
    //         if (PosterDesigns::isValid($posterDesign)) {
    //             $formatImages->poster_design = PosterDesigns::normalize($posterDesign);
    //         }
    //         if ($request->filled('template_id')) {
    //             $formatImages->template_id = (int) $request->input('template_id');
    //         }

    //         $formatImages->save();

    //         $imageUrl = null;
    //         if (!empty($formatImages->image) && is_array($formatImages->image)) {
    //             $first = reset($formatImages->image);
    //             if (is_array($first) && !empty($first['path'])) {
    //                 $imageUrl = url('image/original/' . $first['path']);
    //             }
    //         } else {
    //             $menuId = (int) $request->input('menu_id');
    //             $formatId = $request->filled('format_id') ? (int) $request->input('format_id') : null;
    //             try {
    //                 $restaurantKey = hashids_encode($restaurantId);
    //                 $client = new \GuzzleHttp\Client();
    //                 $response = $client->get(env('ZING_URL') . '/api/topratedmenu/' . $restaurantKey);
    //                 $apiResponse = json_decode($response->getBody()->getContents(), true);
    //                 if (!empty($apiResponse['topRatedMenu'])) {
    //                     $menu = collect($apiResponse['topRatedMenu'])->firstWhere('id', $menuId);
    //                     if (!empty($menu)) {
    //                         $imageUrl = $this->resolveMenuImageUrl($menuId, $menu, $formatId, true);
    //                     }
    //                 }
    //             } catch (\Exception $e) {
    //             }
    //         }

    //         return response()->json([
    //             'status' => 'success',
    //             'data' => 'Image saved successfully.',
    //             'image_url' => $imageUrl,
    //             'poster_design' => $formatImages->poster_design,
    //             'format_id' => (int) $formatImages->format_id,
    //             'menu_id' => (int) $formatImages->menu_id,
    //         ]);
    //     } catch (\Exception $e) {
    //         return response()->json(['status' => 'error', 'data' => 'Failed to save image.']);
    //     }
    // }
    
  public function uploadMenuImage(GroupRequest $request)
{
    try {
        $restaurantId = user()->id;

        $formatImages = FormatImages::firstOrCreate([
            'restaurant_id' => (int) $restaurantId,
            'format_id'     => (int) $request->input('format_id'),
            'menu_id'       => (int) $request->input('menu_id'),
        ]);

        $imageInput = $request->input('image');
        $imageValue = ($imageInput && is_array($imageInput) && !empty($imageInput))
            ? json_encode(array_values($imageInput))
            : null;

        // Build all update fields — no menu_name (column does not exist)
        $updateData = [
            'image'     => $imageValue,
            'menu_id'   => (int) $request->input('menu_id'),
            'format_id' => (int) $request->input('format_id'),
        ];

        $posterDesign = $request->input('template') ?: $request->input('poster_design');
        if (PosterDesigns::isValid($posterDesign)) {
            $updateData['poster_design'] = PosterDesigns::normalize($posterDesign);
        }

        if ($request->filled('template_id')) {
            $updateData['template_id'] = (int) $request->input('template_id');
        }

        // Single raw update — bypasses all model magic/__set overloading
        \DB::connection($formatImages->getConnectionName())
            ->table('campaign_format_images')
            ->where('id', $formatImages->id)
            ->update($updateData);

        // Refresh to read saved values
        $formatImages->refresh();

        // Build image URL — handle both local and website gallery paths
        $imageUrl  = null;
        $imageAttr = $formatImages->getRawOriginal('image');
        $imageArr  = is_string($imageAttr)
            ? json_decode($imageAttr, true)
            : (is_array($imageAttr) ? $imageAttr : null);

        if (!empty($imageArr) && is_array($imageArr)) {
            $first = reset($imageArr);
            if (is_array($first) && !empty($first['path'])) {
                $path = $first['path'];
                if (str_starts_with($path, 'website/')) {
                    $imageUrl = rtrim(env('SITE_URL'), '/') . '/image/original/' . $path;
                } else {
                    $imageUrl = url('image/original/' . $path);
                }
            }
            // Fallback: use preview_url passed from gallery selector
            if (!$imageUrl && !empty($first['preview_url'])) {
                $imageUrl = $first['preview_url'];
            }
        } else {
            // No image stored — fall back to menu's own image from API
            $menuId   = (int) $request->input('menu_id');
            $formatId = $request->filled('format_id') ? (int) $request->input('format_id') : null;
            try {
                $restaurantKey = hashids_encode($restaurantId);
                $client        = new \GuzzleHttp\Client();
                $response      = $client->get(env('ZING_URL') . '/api/topratedmenu/' . $restaurantKey);
                $apiResponse   = json_decode($response->getBody()->getContents(), true);
                if (!empty($apiResponse['topRatedMenu'])) {
                    $menu = collect($apiResponse['topRatedMenu'])->firstWhere('id', $menuId);
                    if (!empty($menu)) {
                        $imageUrl = $this->resolveMenuImageUrl($menuId, $menu, $formatId, true);
                    }
                }
            } catch (\Exception $e) {
                \Log::error('uploadMenuImage resolveUrl error: ' . $e->getMessage());
            }
        }

        return response()->json([
            'status'        => 'success',
            'data'          => 'Image saved successfully.',
            'image_url'     => $imageUrl,
            'poster_design' => $formatImages->getRawOriginal('poster_design'),
            'format_id'     => (int) $request->input('format_id'),
            'menu_id'       => (int) $request->input('menu_id'),
        ]);

    } catch (\Exception $e) {
        \Log::error('uploadMenuImage failed: ' . $e->getMessage() . ' | ' . $e->getTraceAsString());
        return response()->json([
            'status' => 'error',
            'data'   => 'Failed to save image.',
            'debug'  => config('app.debug') ? $e->getMessage() : null,
        ]);
    }
}
public function galleryImages(GroupRequest $request)
{
    try {
        $restaurantId  = user()->id;
                $restaurantId  = 638;

        $restaurantKey = hashids_encode($restaurantId);
        $client        = new \GuzzleHttp\Client();
//DD($restaurantKey);
        $response = $client->get(env('SITE_URL') . '/api/website-gallery/' . $restaurantKey, [
            'headers' => [
                'X-API-KEY'        => env('ZING_API_KEY'),
                'Accept'           => 'application/json',
                'X-Requested-With' => 'XMLHttpRequest',
            ],
            'timeout' => 10,
        ]);
         
         
        $data = json_decode($response->getBody()->getContents(), true);

        return response()->json([
            'status' => 'success',
            'images' => is_array($data) && !empty($data['images']) ? $data['images'] : (is_array($data) ? $data : []),
        ]);
    } catch (\GuzzleHttp\Exception\ClientException $e) {
        $status = $e->getResponse() ? $e->getResponse()->getStatusCode() : 0;
        if ($status === 401 || $status === 403) {
            return response()->json(['status' => 'error', 'message' => 'Unauthorized.', 'images' => []]);
        }
        return response()->json(['status' => 'error', 'images' => []]);
    } catch (\Exception $e) {
        return response()->json(['status' => 'error', 'images' => []]);
    }
}
    /**
     * Resolved display URL for the menu's saved or fallback image (used by "processed" preview in generate modal).
     */
    public function processMenuImage(GroupRequest $request, $menuId)
    {      
        try {
            $restaurantId = user()->id;
            $restaurantKey = hashids_encode($restaurantId);
            $client = new \GuzzleHttp\Client();
            $response = $client->get(env('ZING_URL') . '/api/topratedmenu/' . $restaurantKey);
            $apiResponse = json_decode($response->getBody()->getContents(), true);
            if (empty($apiResponse['status']) || $apiResponse['status'] !== 'success' || empty($apiResponse['topRatedMenu'])) {
                return response()->json(['status' => 'success', 'data' => 'Menu list unavailable']);
            }
            $menu = collect($apiResponse['topRatedMenu'])->firstWhere('id', (int) $menuId);
            if (empty($menu)) {
                return response()->json(['status' => 'success', 'data' => 'Menu not found']);
            }
            $url = $this->resolveMenuImageUrl($menuId, $menu, null);
            if ($url) {
                return response()->json(['status' => 'success', 'image_url' => $url]);
            }

            return response()->json(['status' => 'success', 'data' => 'Processed image not available']);
        } catch (\Exception $e) {
            return response()->json(['status' => 'success', 'data' => 'Processed image not available']);
        }
    }

    protected function getWebsiteTheme($restaurantId)
    {
        $themeColor = null;
        $bgColor = null;
        $footerFontcolor = null;

        try {
            $client = new \GuzzleHttp\Client();
            $response = $client->get('https://site.zingmyorder.com/domain/get-theme/' . (int) $restaurantId);
            $apiResponse = json_decode($response->getBody()->getContents(), true);
            if (!empty($apiResponse) && !empty($apiResponse['status'])) {
                $themeColor = $apiResponse['theme_color'] ?? null;
                $bgColor = $apiResponse['bg_color'] ?? null;
                $footerFontcolor = $apiResponse['footer_font_color'] ?? null;
            }
        } catch (\Exception $e) {
        }

        return [
            'theme_color' => $themeColor,
            'bg_color' => $bgColor,
            'footer_font_color' => $footerFontcolor,
        ];
    }

    protected function getMenuImageOverride($menuId)
    {
        $menuImage = Restaurantimages::where('menu_id', $menuId)
            ->where(function ($query) {
                $query->whereNull('tags')
                    ->orWhere('tags', 'not like', '%Deleted%');
            })
            ->orderBy('id', 'desc')
            ->first();
        if ($menuImage && !empty($menuImage->seo_image)) {
            return $menuImage->seo_image;
        }

        return [];
    }

    /**
     * Image array for email/poster preview (same priority as resolveMenuImageUrl).
     */
    protected function getMenuImageForPreview($menuId, $menu = null, $formatId = null)
    {
        $restaurantId = user()->id;

        $formatQuery = FormatImages::where('menu_id', $menuId)
            ->where('restaurant_id', $restaurantId)
            ->whereNotNull('image');
        if ($formatId !== null) {
            $formatQuery->where('format_id', $formatId);
        }
        $formatImage = $formatQuery->orderBy('id', 'desc')->first();
        if ($formatImage && !empty($formatImage->image)) {
            $imageData = is_string($formatImage->image)
                ? json_decode($formatImage->image, true)
                : $formatImage->image;
            if (is_array($imageData) && !empty($imageData)) {
                return $imageData;
            }
        }

        $override = $this->getMenuImageOverride($menuId);
        if (!empty($override)) {
            return $override;
        }

        $imgArray = [];
        if (!empty($menu['image']) && is_array($menu['image'])) {
            foreach ($menu['image'] as $image) {
                $imgArray[] = $image;
            }
        }

        return $imgArray;
    }

    /**
     * @param  bool  $sameOriginForCanvas  When true, skip CDN rewrite so image URLs match the app origin (required for html2canvas / canvas.toDataURL).
     */
    protected function resolveMenuImageUrl($menuId, $menu = null, $formatId = null, $sameOriginForCanvas = false, $includeFormatUpload = true)
    {
        $restaurantId = user()->id;

        if ($includeFormatUpload) {
            $formatQuery = FormatImages::where('menu_id', $menuId)
                ->where('restaurant_id', $restaurantId)
                ->whereNotNull('image');
            if ($formatId !== null) {
                $formatQuery->where('format_id', $formatId);
            }
            $formatImage = $formatQuery->orderBy('id', 'desc')->first();
            if ($formatImage && !empty($formatImage->image)) {
                $imageData = is_string($formatImage->image)
                    ? json_decode($formatImage->image, true)
                    : $formatImage->image;
                if (is_array($imageData)) {
                    $first = reset($imageData);
                    if (is_array($first) && !empty($first['path'])) {
                        return $this->menuImageUrlForDisplay(url('image/original/' . $first['path']), true);
                    }
                }
            }
        }

        $menuImage = Restaurantimages::where('menu_id', $menuId)
            ->where(function ($query) {
                $query->whereNull('tags')
                    ->orWhere('tags', 'not like', '%Deleted%');
            })
            ->orderBy('id', 'desc')
            ->first();
        if ($menuImage && !empty($menuImage->seo_image)) {
            return $this->menuImageUrlForDisplay(url($menuImage->defaultImage('seo_image')), true);
        }

        if (!empty($menu) && !empty($menu['image'])) {
            $firstImage = $menu['image'][0] ?? null;
            if (is_array($firstImage)) {
                $path = $firstImage['path'] ?? $firstImage['url'] ?? null;
                if ($path) {
                    if (Str::startsWith($path, ['http://', 'https://'])) {
                        $path = parse_url($path, PHP_URL_PATH);
                    }
                    $path = ltrim($path, '/');
                    return $this->menuImageUrlForDisplay(url('image/original/' . $path), true);
                }
            }
            if (is_string($firstImage)) {
                $path = $firstImage;
                if (Str::startsWith($path, ['http://', 'https://'])) {
                    $path = parse_url($path, PHP_URL_PATH);
                }
                $path = ltrim($path, '/');
                return $this->menuImageUrlForDisplay(url('image/original/' . $path), true);
            }
        }

        return null;
    }

    /**
     * @param  bool  $useCdn  When false, return the app URL unchanged (see resolveMenuImageUrl sameOriginForCanvas).
     */
    protected function menuImageUrlForDisplayforLive($url, $useCdn = true)
    {
      
        if (!$useCdn || empty($url) || !is_string($url)) {
            return $url;
        }
    
        $cdn = rtrim(env('CDN_URL'), '/');
        
        if (empty($cdn)) {
            return $url;
        }
      
        // Extract path if full URL
        if (Str::startsWith($url, ['http://', 'https://'])) {
            $path = parse_url($url, PHP_URL_PATH);
        } else {
            $path = $url;
        }
        
        // Convert old path to CDN path
        $path = str_replace('/image/original/', '/uploads/', $path);
        $url = $cdn . '/' . ltrim($path, '/');
        return $url;
    }
    
    protected function menuImageUrlForDisplay($url, $useCdn = true)
    {
      
        if (!$useCdn || empty($url) || !is_string($url)) {
            return $url;
        }
    
        $cdn = rtrim(env('CDN_URL'), '/');
        
        if (empty($cdn)) {
            return $url;
        }
      
        // Extract path if full URL
        if (Str::startsWith($url, ['http://', 'https://'])) {
            $path = parse_url($url, PHP_URL_PATH);
        } else {
            $path = $url;
        }
        
        // Normalize source path across environments (e.g. test has /marketing_hub/public prefix).
        // We only need the file path segment after /image/original/ for CDN uploads.
        $needle = '/image/original/';
        $pos = strpos($path, $needle);
        if ($pos !== false) {
            $relative = substr($path, $pos + strlen($needle));
            $path = 'uploads/' . ltrim($relative, '/');
        } else {
            // Fallback: keep previous behavior if expected segment is absent.
            $path = ltrim($path, '/');
        }
        $url = $cdn . '/' . $path;
        return $url;
    }

    public function uploadPosterAndCreateTemplate(GroupRequest $request)
    {
        try {
            $restaurantId = user()->id;
            $formatId = (int) $request->input('format_id');
            $menuId = (int) $request->input('menu_id');
            $themeDesign = $request->input('theme_design');
            $allContentFormats = ContentFormat::where('id', $formatId)->first();
            $formatImage = FormatImages::where('restaurant_id', $restaurantId)
                ->where('format_id', $formatId)
                ->where('menu_id', $menuId)
                ->whereNotNull('poster_design')
                ->orderBy('id', 'desc')
                ->first();
            $posterDesign = ($formatImage && !empty($formatImage->poster_design))
                ? $formatImage->poster_design
                : ($allContentFormats->poster_design ?? 'design1');
            $dataUrl = $request->input('poster_image');
            if (empty($dataUrl) || !preg_match('/^data:image\/(\w+);base64,/', $dataUrl, $m)) {
                return response()->json(['status' => 'error', 'data' => 'Invalid image data.']);
            }

            $extension = $m[1] === 'jpeg' ? 'jpg' : $m[1];
            $binary = base64_decode(preg_replace('/^data:image\/\w+;base64,/', '', $dataUrl), true);
            if ($binary === false || strlen($binary) < 100) {
                return response()->json(['status' => 'error', 'data' => 'Invalid image data.']);
            }

            $datePath = date('Y/m/d');
            $uid = uniqid();
            $filename = 'poster-' . $uid . '.' . $extension;
            $folderPath = 'groups/schedulemail/' . $datePath . '/' . $uid . '/image';
            $pathForDb = $folderPath . '/' . $filename;
            $s3Key = 'uploads/' . $pathForDb;

            $uploaded = \Illuminate\Support\Facades\Storage::disk('s3')->put($s3Key, $binary, 'public');
            if (!$uploaded) {
                return response()->json(['status' => 'error', 'data' => 'Failed to upload image.']);
            }

            $imgArray = [
                [
                    'title' => $filename,
                    'caption' => $filename,
                    'url' => $filename,
                    'desc' => null,
                    'folder' => $folderPath,
                    'time' => date('Y-m-d H:i:s'),
                    'path' => $pathForDb,
                    'file' => $filename,
                ],
            ];

            $themeDesign = in_array($themeDesign, ['design1', 'design2', 'design3'], true) ? $themeDesign : 'design1';

            if ($request->input('update_existing')) {
                $existing = Templates::where('restaurant_id', $restaurantId)
                    ->where('format_id', $formatId)
                    ->where('menu_id', $menuId)
                    ->first();
                if ($existing) {
                    $existing->image = $imgArray;
                    $existing->converted_img = $imgArray;
                    $existing->save();
                    DB::table('campaign_templates')->where('id', $existing->id)->update(['image' => json_encode($imgArray)]);

                    return response()->json([
                        'status' => 'success',
                        'data' => 'Poster saved to template.',
                        'template_id' => $existing->id,
                    ]);
                }
            }

            $template = new Templates;
            $template->restaurant_id = $restaurantId;
            $template->format_id = $formatId;
            $template->menu_id = $menuId;
            $template->email_type = 'Choose Design';

            $updateFormatImage = function ($templateId) use ($restaurantId, $formatId, $menuId, $posterDesign) {
                $formatImage = FormatImages::firstOrCreate(
                    [
                        'restaurant_id' => $restaurantId,
                        'format_id' => $formatId,
                        'menu_id' => $menuId,
                    ]
                );
                $formatImage->poster_design = $posterDesign;
                $formatImage->template_id = (int) $templateId;
                $formatImage->save();
            };

            if ($request->input('update_existing')) {
                $existing = Templates::where('restaurant_id', $restaurantId)
                    ->where('format_id', $formatId)
                    ->where('menu_id', $menuId)
                    ->first();
                if ($existing) {
                    $existing->image = $imgArray;
                    $existing->save();
                    DB::table('campaign_templates')->where('id', $existing->id)->update(['image' => json_encode($imgArray)]);
                    $updateFormatImage($existing->id);

                    return response()->json([
                        'status' => 'success',
                        'data' => 'Poster saved to template.',
                        'template_id' => $existing->id,
                    ]);
                }
            }
            $template->subject = '';
            $template->title = '';
            $template->content = '';
            $template->user_id = $restaurantId;
            $template->user_type = 'App\Restaurant';
            $template->image = $imgArray;
            $template->save();

            DB::table('campaign_templates')->where('id', $template->id)->update(['image' => json_encode($imgArray)]);
            $updateFormatImage($template->id);

            return response()->json([
                'status' => 'success',
                'data' => 'Poster saved to template.',
                'template_id' => $template->id,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'data' => $e->getMessage() ?: 'Something went wrong. Try again.',
            ]);
        }
    }

    public function generateTemplatesModal()
    {
        $restaurantId = user_id();
        try {
            $restaurantId = user()->id;
            $restaurantKey = hashids_encode($restaurantId);
            $client = new \GuzzleHttp\Client();
            $response = $client->get(env('ZING_URL') . '/api/topratedmenu/' . $restaurantKey);
            $apiResponse = json_decode($response->getBody()->getContents(), true);
            if ($apiResponse['status'] == 'success') {
                $topRatedMenu = $apiResponse['topRatedMenu'];
                if (!empty($topRatedMenu)) {
                    $allContentFormats = ContentFormat::select('id', 'format_name', 'poster_design')->get();
                    $menuIds = collect($topRatedMenu)->pluck('id')->map(function ($id) {
                        return (int) $id;
                    })->filter()->values()->all();
                    $savedPosterByMenuFormat = [];
                    if (!empty($menuIds)) {
                        $formatImageRows = FormatImages::where('restaurant_id', $restaurantId)
                            ->whereIn('menu_id', $menuIds)
                            ->get(['menu_id', 'format_id', 'poster_design']);
                        foreach ($formatImageRows as $fiRow) {
                            if ($fiRow->poster_design !== null && $fiRow->poster_design !== '') {
                                $savedPosterByMenuFormat[(int) $fiRow->menu_id][(int) $fiRow->format_id] = $fiRow->poster_design;
                            }
                        }
                    }
                    $html = view('groups::templates.templatesmodal', compact('allContentFormats', 'topRatedMenu', 'savedPosterByMenuFormat'))->render();
                    return response()->json(['status' => 'success', 'html' => $html]);
                } else {
                    return response()->json(['status' => 'false', 'data' => 'No toprated Menu exists!']);
                }
            } else {
                return response()->json(['status' => 'false', 'data' => 'API response failed. Try again']);
            }
        } catch (\Exception $e) {
            return response()->json(['status' => 'false', 'data' => 'Something went wrong! Try again']);
        }
    }

    public function viewGenerateTemplate(GroupRequest $request)
    {
        try {
            $restaurantId = user()->id;

            if (isset($request->toprated)) {
                $selectedMenu = [];
                $selectedMenuData = [];
                $viewMenuId = $request->menu_id;

                $allMenuTemplates = Templates::where('restaurant_id', $restaurantId)->get();
                $collection = collect($allMenuTemplates);

                $allContentFormats = ContentFormat::get();
                $collectionFormats = collect($allContentFormats);
                foreach ($request->toprated as $menuId => $selectedData) {
                    array_push($selectedMenu, $menuId);
                    $menuTemplatesExists = $collection->where('menu_id', @$menuId)->where('format_id', @$selectedData['format'])->where('theme_design', $selectedData['template']);
                    if ($menuTemplatesExists->isNotEmpty()) {
                        return response(['status' => 'fail', 'data' => 'Same Template Exists!', 'menu_id' => @$menuId]);
                    }
                    $selectedMenuData[$menuId]['menu_id'] = $menuId;
                    $selectedMenuData[$menuId]['format_id'] = $selectedData['format'];
                    $selectedMenuData[$menuId]['design'] = $selectedData['template'];
                }
                if (!empty($selectedMenu)) {
                    $restaurantName = @user()->name;
                    $restaurantPhone = @user()->phone;
                    $restaurantAddress = @user()->address;
                    $restaurantId = @user()->id;
                    $restaurantCuisine = @user()->type;
                    if (isset($restaurantCuisine) && $restaurantCuisine != '') {
                        $restaurantCuisine = explode(',', user()->type);
                        $restaurantCuisine = @$restaurantCuisine[0];
                    }
                    $restaurantCity = explode(',', $restaurantAddress);

                    $specialKeysArray = ['Restaurant_Name', 'Restaurant_Address', 'Restaurant_Phone', 'Dish_Name', 'Dish_Price', 'Menu_Description', 'Restaurant_Cuisine', 'Restaurant_City'];

                    $restaurantKey = hashids_encode($restaurantId);
                    $client = new \GuzzleHttp\Client();
                    $response = $client->get(env('ZING_URL') . '/api/topratedmenu/' . $restaurantKey);
                    $apiResponse = json_decode($response->getBody()->getContents(), true);
                    if ($apiResponse['status'] == 'success') {
                        $topRatedMenu = $apiResponse['topRatedMenu'];
                        if (!empty($topRatedMenu)) {
                            foreach ($topRatedMenu as $key => $menu) {
                                $menuID = $menu['id'];
                                if ($viewMenuId == $menuID) {
                                    $specialKeys = [];

                                    $specialKeys['Restaurant_Name'] = @$restaurantName;
                                    $specialKeys['Restaurant_Address'] = @$restaurantAddress;
                                    $specialKeys['Restaurant_Phone'] = @$restaurantPhone;
                                    $specialKeys['Dish_Name'] = @$menu['name'];
                                    $specialKeys['Dish_Price'] = @$menu['price'];
                                    $specialKeys['Menu_Description'] = @$menu['description'];
                                    $specialKeys['Restaurant_Cuisine'] = @$restaurantCuisine;
                                    $specialKeys['Restaurant_City'] = @$restaurantCity[1];

                                    $collectionFormat = $collectionFormats->where('id', $selectedMenuData[$menuID]['format_id'])->first();

                                    $email_subject = $collectionFormat->email_subject;
                                    $content_title = $collectionFormat->content_title;
                                    $content = $collectionFormat->content;

                                    $data = [];

                                    foreach ($specialKeysArray as $index => $replaceKey) {
                                        $content_title = str_replace($replaceKey, $specialKeys[$replaceKey], $content_title);
                                        $email_subject = str_replace($replaceKey, $specialKeys[$replaceKey], $email_subject);
                                        $content = str_replace($replaceKey, $specialKeys[$replaceKey], $content);
                                    }

                                    $previewFormatId = (int) $selectedMenuData[$menuID]['format_id'];
                                    $imgArray = $this->getMenuImageForPreview($menuID, $menu, $previewFormatId);
                                    $data['title'] = $content_title;
                                    $data['content'] = $content;
                                    $data['image'] = $imgArray;
                                    $view = $selectedMenuData[$menuID]['design'];
                                    $themeData = $this->getWebsiteTheme($restaurantId);
                                    $themeColor = $themeData['theme_color'];
                                    $bgColor = $themeData['bg_color'];
                                    $footerFontcolor = $themeData['footer_font_color'];
                                    $restaurant = user();

                                    $formatImage = FormatImages::where('restaurant_id', $restaurantId)
                                        ->where('format_id', $selectedMenuData[$menuID]['format_id'])
                                        ->where('menu_id', $menuID)
                                        ->whereNotNull('poster_design')
                                        ->orderBy('id', 'desc')
                                        ->first();
                                    $posterDesign = ($formatImage && !empty($formatImage->poster_design))
                                        ? $formatImage->poster_design
                                        : ($collectionFormat->poster_design ?? 'design1');

                                    $html = view('groups::templates.view.' . $view, compact('data', 'menu', 'restaurant', 'themeColor', 'bgColor', 'footerFontcolor', 'posterDesign'))->render();
                                    return response(['status' => 'success', 'html' => $html]);
                                }
                            }
                            return response(['status' => 'success', 'data' => 'Templates Created Successfully!']);
                        }
                    }
                }
            } else {
                return response(['status' => 'fail', 'data' => 'No Menu Item Selected']);
            }
        } catch (\Exception $e) {
            return response(['status' => 'fail', 'data' => 'Something Wrong!. Try again']);
        }
    }
}

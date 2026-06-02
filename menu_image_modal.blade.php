{!! Form::vertical_open()->id('menu-image-form')->method('POST')->enctype('multipart/form-data')->addClass('modal-content mim-modal')->action(guard_url('groups/menu-image-upload')) !!}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@include('groups::default.templates.partials.menu_image_modal_styles')

<style>
/* ── Gallery panel ───────────────────────────────────────────── */
.mim-source-tabs{display:flex;gap:0;border-bottom:2px solid #e9ecef;margin-bottom:14px;}
.mim-source-tab{flex:1;padding:8px 0;background:none;border:none;border-bottom:3px solid transparent;margin-bottom:-2px;font-size:13px;font-weight:600;color:#6c757d;cursor:pointer;transition:color .18s,border-color .18s;}
.mim-source-tab.active{color:#212529;border-bottom-color:#212529;}
.mim-source-tab:hover:not(.active){color:#343a40;}

.mim-gallery-panel{display:none;}
.mim-gallery-panel.active{display:block;}
.mim-upload-panel{display:block;}
.mim-upload-panel.hidden{display:none;}

.mim-gallery-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:8px;max-height:220px;overflow-y:auto;padding:2px;}
.mim-gallery-item{position:relative;aspect-ratio:1;border-radius:6px;overflow:hidden;cursor:pointer;border:2px solid transparent;transition:border-color .15s,box-shadow .15s;}
.mim-gallery-item img{width:100%;height:100%;object-fit:cover;display:block;}
.mim-gallery-item:hover{border-color:#6c757d;box-shadow:0 0 0 2px #6c757d33;}
.mim-gallery-item.selected{border-color:#212529;box-shadow:0 0 0 3px #21252944;}
.mim-gallery-item .mim-gallery-check{position:absolute;top:5px;right:5px;width:22px;height:22px;background:#212529;border-radius:50%;display:flex;align-items:center;justify-content:center;opacity:0;transition:opacity .15s;}
.mim-gallery-item.selected .mim-gallery-check{opacity:1;}
.mim-gallery-check svg{width:13px;height:13px;fill:none;stroke:#fff;stroke-width:2.5;stroke-linecap:round;stroke-linejoin:round;}

.mim-gallery-empty{text-align:center;padding:32px 16px;color:#adb5bd;font-size:13px;}
.mim-gallery-loading{text-align:center;padding:28px;color:#6c757d;font-size:13px;}
.mim-gallery-error{text-align:center;padding:20px;color:#dc3545;font-size:13px;}

.mim-gallery-actions{display:flex;align-items:center;justify-content:space-between;margin-top:10px;gap:8px;}
.mim-gallery-select-btn{padding:7px 18px;background:#212529;color:#fff;border:none;border-radius:5px;font-size:13px;font-weight:600;cursor:pointer;transition:background .15s;}
.mim-gallery-select-btn:disabled{background:#adb5bd;cursor:not-allowed;}
.mim-gallery-select-btn:not(:disabled):hover{background:#343a40;}
.mim-gallery-selected-label{font-size:12px;color:#6c757d;}
</style>

<div class="modal-header">
    <h5 class="modal-title">
        <span class="mim-header-icon" aria-hidden="true"><i class="fas fa-image"></i></span>
        <span>Menu image — {{ @$menu['name'] }}</span>
    </h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="flaticon-cancel"></i></button>
</div>

<div class="modal-body" id="menuImageModalBody">
    <div class="mim-layout">
        <aside class="mim-controls">
            <div class="mim-menu-thumb">
                <div class="mim-menu-thumb__frame">
                    @if(!empty($menuImageUrl))
                        <img id="menuImagePreview" src="{{ $menuImageUrl }}" alt="Menu image">
                    @else
                        <div id="menuImageEmpty" class="text-muted">No image</div>
                        <img id="menuImagePreview" src="" class="d-none" alt="Menu image">
                    @endif
                </div>
                <div class="mim-menu-thumb__meta">
                    <span class="mim-menu-thumb__label">Current menu</span>
                    <p class="mim-menu-thumb__name">{{ @$menu['name'] }}</p>
                </div>
            </div>

            @include('groups::default.templates.partials.menu_poster_design_picker', [
                'selectedPosterDesign' => $currentPosterDesign ?? null,
                'selectId' => 'menuTemplateSelect',
                'selectName' => 'template',
            ])
        </aside>

        <section class="mim-preview-col">
            <div class="mim-preview-head">
                <h6 class="mim-preview-head__title">Live poster preview</h6>
                <span class="mim-preview-live">
                    <span class="mim-preview-live__dot" aria-hidden="true"></span>
                    Real-time
                </span>
            </div>
            <div class="mim-preview-stage">
                <div class="mim-preview-viewport" id="mimPreviewViewport">
                    @include('groups::default.templates.partials.poster_design_preview_host')
                </div>
            </div>

            {{-- ── Source tabs ─────────────────────────────────── --}}
            <div class="mim-dropzone-wrap">
                <div class="mim-source-tabs">
                    <button type="button" class="mim-source-tab active" data-tab="upload">
                        <i class="fa fa-upload" style="margin-right:5px;"></i>Upload Image
                    </button>
                    <button type="button" class="mim-source-tab" data-tab="gallery">
                        <i class="fa fa-th" style="margin-right:5px;"></i>Select from Gallery
                    </button>
                </div>

                {{-- Upload panel --}}
                <div class="mim-upload-panel" id="mimUploadPanel">
                    <div class="form-group">
                        <div class="dropzone dropzone-previews mb-15">
                            <div class="row">
                                <div class='col-lg-12'>
                                    {!! $formatImages->files('image')->url($formatImages->getUploadUrl('image'))->mime(config('filer.image_extensions'))->dropzone() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="mim-upload-note">Note: Only JPEG and PNG images are allowed. Maximum file size is 2MB.</p>
                </div>

                {{-- Gallery panel --}}
                <div class="mim-gallery-panel" id="mimGalleryPanel">
                    <div class="mim-gallery-loading" id="mimGalleryLoading">
                        <i class="fa fa-spinner fa-spin"></i> Loading gallery…
                    </div>
                    <div class="mim-gallery-error" id="mimGalleryError" style="display:none;">
                        Could not load gallery. <a href="#" id="mimGalleryRetry">Retry</a>
                    </div>
                    <div class="mim-gallery-grid" id="mimGalleryGrid" style="display:none;"></div>
                    <div class="mim-gallery-empty" id="mimGalleryEmpty" style="display:none;">
                        No images found in your gallery.
                    </div>
                    <div class="mim-gallery-actions">
                        <span class="mim-gallery-selected-label" id="mimGallerySelectedLabel"></span>
                        <button type="button" class="mim-gallery-select-btn" id="mimGallerySelectBtn" disabled>
                            Use Selected Image
                        </button>
                    </div>
                </div>
            </div>

            <p class="mim-preview-foot">Preview updates as you upload or switch designs.</p>
            <img id="menuImageProcessedPreview" style="display:none;" src="" class="img-fluid d-none" alt="Processed menu image">
        </section>
    </div>

    <input type="hidden" name="menu_id" value="{{ @$menu['id'] }}">
    <input type="hidden" name="menu_name" value="{{ @$menu['name'] }}">
    <input type="hidden" name="format_id" value="{{ request('format_id') }}">
    <input type="hidden" name="template_id" value="{{ $templateId ?? '' }}">
    <input type="hidden" name="poster_design" id="menuPosterDesignHidden" value="{{ \Restaurant\Groups\Support\PosterDesigns::normalize($currentPosterDesign ?? null) }}">
</div>

<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    <button type="submit" id="menuImageSaveButton" class="btn btn-dark">Save</button>
    <button style="pointer-events:none;display:none;" class="btn btn-dark" id="menuImageSaveSpinner">Saving...<i class="las la-arrow-circle-right"></i>
        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
    </button>
</div>
{!! Form::close() !!}

<script>
    @include('groups::default.templates.partials.poster_designs_script')
    window.posterUploadUrl = "{{ guard_url('groups/poster-upload-template') }}";
    window.menuThemeColor = @json($themeColor ?? null);
    window.menuBgColor = @json($bgColor ?? null);
    window.menuImageModalMenuId = @json((int) $menuId);
    window.menuImageModalFormatId = @json(request('format_id') ? (string) request('format_id') : '');
    window.menuImageFallbackUrl = @json(!empty($menuImageFallbackUrl) ? $menuImageFallbackUrl : null);
    window.menuImageBaselineUrl = @json(!empty($menuImageUrl) ? $menuImageUrl : null);
    window.menuImageOriginalUrl = window.menuImageFallbackUrl || window.menuImageBaselineUrl;
    window.menuImageCurrentUrl = null;
    window.menuGalleryApiUrl = "{{ guard_url('groups/menu-image-gallery') }}";

    /* ─────────────────────────────────────────────────────────────────
       Core preview helpers (unchanged from original)
    ───────────────────────────────────────────────────────────────── */
    (function () {
        function normalizeMenuImageUrl(u) {
            if (!u || typeof u !== 'string') return u;
            var m = u.match(/^(.*?\/image\/original)([^?#]*)$/i);
            if (!m) return u;
            var rest = m[2];
            if (rest && rest.charAt(0) !== '/') return m[1] + '/' + rest;
            return u;
        }
        function buildMenuImageUrlFromFiler(res) {
            if (!res) return null;
            var base = "{{ rtrim(url('image/original'), '/') }}";
            if (res.path) return base + '/' + String(res.path).replace(/^\//, '');
            if (res.url)  return normalizeMenuImageUrl(res.url);
            return null;
        }
        function cssBackgroundUrl(url) {
            var safe = String(url).replace(/\\/g, '\\\\').replace(/"/g, '\\"');
            return 'url("' + safe + '")';
        }
        function invalidatePosterDesignPreviewCache() {
            var host = document.getElementById('posterDesignPreviewRoot');
            if (!host || !window.posterDesignPreviewCache) return;
            var prefix = String(host.getAttribute('data-menu-id') || '') + '|' + String(host.getAttribute('data-format-id') || '') + '|';
            Object.keys(window.posterDesignPreviewCache).forEach(function (key) {
                if (key.indexOf(prefix) === 0) delete window.posterDesignPreviewCache[key];
            });
        }
        function applyMenuImageToPosterWrap(wrap, url) {
            if (!wrap || !url) return;
            wrap.querySelectorAll('img.js-poster-menu-image').forEach(function (img) {
                img.removeAttribute('crossorigin'); img.src = url;
            });
            wrap.querySelectorAll('.js-poster-menu-image').forEach(function (el) {
                if (el.tagName === 'IMG') return;
                el.style.backgroundImage = cssBackgroundUrl(url);
                if (!el.style.backgroundSize)    el.style.backgroundSize    = 'cover';
                if (!el.style.backgroundPosition) el.style.backgroundPosition = 'center';
            });
            wrap.querySelectorAll('[class*="menu-image-inner"], [class*="menu-img-bg"]').forEach(function (el) {
                if (el.classList.contains('js-poster-menu-image') && el.tagName !== 'IMG') return;
                if (el.querySelector('img.js-poster-menu-image')) return;
                el.style.backgroundImage = cssBackgroundUrl(url);
                if (!el.style.backgroundSize)    el.style.backgroundSize    = 'cover';
                if (!el.style.backgroundPosition) el.style.backgroundPosition = 'center';
            });
            wrap.querySelectorAll('[class*="menu-image"] img, [class*="pizza-wrap"] img, [class*="plate-circle"] img').forEach(function (img) {
                if (img.classList.contains('js-poster-menu-image')) return;
                if (img.closest('[class*="logo"]')) return;
                img.removeAttribute('crossorigin'); img.src = url;
            });
        }
        function applyMenuImageToAllPosterPreviews(url) {
            var root = document.getElementById('menuImageModalBody') || document.body;
            var host = root.querySelector('#posterDesignPreviewRoot');
            if (host) {
                host.querySelectorAll('.poster-design-preview-wrap').forEach(function (wrap) {
                    applyMenuImageToPosterWrap(wrap, url);
                });
            }
            (window.PosterDesignRegistry.menuImageSelectors || []).forEach(function (sel) {
                var container = root.querySelector(sel);
                if (!container) return;
                applyMenuImageToPosterWrap(container.closest('.poster-design-preview-wrap') || container, url);
            });
        }
        function getOriginalMenuImageUrl() {
            return window.menuImageFallbackUrl || window.menuImageOriginalUrl || '';
        }
        function applyMenuImageToLeftPreview(url) {
            var prev  = document.getElementById('menuImagePreview');
            var empty = document.getElementById('menuImageEmpty');
            if (url) {
                if (prev)  { prev.src = url; prev.removeAttribute('srcset'); prev.classList.remove('d-none'); }
                if (empty) { empty.classList.add('d-none'); }
                return;
            }
            if (prev)  { prev.removeAttribute('src'); prev.classList.add('d-none'); }
            if (empty) { empty.classList.remove('d-none'); }
        }
        function dedupePosterDesignWraps() {
            var host = document.getElementById('posterDesignPreviewRoot');
            if (!host) return;
            var seen = {};
            host.querySelectorAll('.poster-design-preview-wrap[id]').forEach(function (wrap) {
                if (!wrap.id) return;
                if (seen[wrap.id]) wrap.remove(); else seen[wrap.id] = true;
            });
        }
        function reloadVisiblePosterDesignPreview(restoredUrl) {
            var sel  = document.getElementById('menuTemplateSelect');
            var root = document.getElementById('posterDesignPreviewRoot');
            if (!sel || !sel.value || !root || root.getAttribute('data-lazy-load') !== '1') {
                if (restoredUrl && typeof window.updateMenuImagePreviewsInMenuModal === 'function')
                    window.updateMenuImagePreviewsInMenuModal(restoredUrl);
                return;
            }
            var key      = sel.value;
            var num      = window.posterDesignNumberFromKey(key);
            var menuId   = root.getAttribute('data-menu-id')   || '';
            var formatId = root.getAttribute('data-format-id') || '';
            var cacheKey = menuId + '|' + formatId + '|' + key;
            if (window.posterDesignPreviewCache) delete window.posterDesignPreviewCache[cacheKey];
            var el = document.getElementById('template-design' + num);
            if (el) el.remove();
            if (typeof window.loadAndShowPosterDesign !== 'function') {
                if (restoredUrl && typeof window.updateMenuImagePreviewsInMenuModal === 'function')
                    window.updateMenuImagePreviewsInMenuModal(restoredUrl);
                return;
            }
            var loadPromise = window.loadAndShowPosterDesign(key);
            if (restoredUrl && loadPromise && typeof loadPromise.then === 'function') {
                loadPromise.then(function () { window.updateMenuImagePreviewsInMenuModal(restoredUrl); });
            } else if (restoredUrl) {
                window.updateMenuImagePreviewsInMenuModal(restoredUrl);
            }
        }
        function clearPosterMenuImageDom() {
            var root = document.getElementById('menuImageModalBody') || document.body;
            var host = root.querySelector('#posterDesignPreviewRoot');
            if (!host) return;
            host.querySelectorAll('.poster-design-preview-wrap').forEach(function (wrap) {
                wrap.querySelectorAll('img.js-poster-menu-image, [class*="menu-image"] img, [class*="pizza-wrap"] img, [class*="plate-circle"] img').forEach(function (img) {
                    if (!img.closest('[class*="logo"]')) img.remove();
                });
                wrap.querySelectorAll('.js-poster-menu-image:not(img), [class*="menu-image-inner"], [class*="menu-img-bg"]').forEach(function (el) {
                    el.style.backgroundImage = '';
                });
            });
        }
        function updateMenuImagePreviews(url) {
            if (!url) return;
            url = normalizeMenuImageUrl(url);
            window.menuImageCurrentUrl = url;
            invalidatePosterDesignPreviewCache();
            applyMenuImageToLeftPreview(url);
            applyMenuImageToAllPosterPreviews(url);
            if (typeof window.fitMenuImagePosterPreview === 'function')
                requestAnimationFrame(window.fitMenuImagePosterPreview);
        }
        function restoreMenuImageFromBaseline(overrideUrl) {
            var url = overrideUrl || getOriginalMenuImageUrl() || '';
            url = url ? normalizeMenuImageUrl(url) : '';
            window.menuImageCurrentUrl = null;
            invalidatePosterDesignPreviewCache();
            if (url) {
                window.menuImageBaselineUrl = url;
                applyMenuImageToLeftPreview(url);
                dedupePosterDesignWraps();
                reloadVisiblePosterDesignPreview(url);
                return;
            }
            window.menuImageBaselineUrl = null;
            applyMenuImageToLeftPreview('');
            clearPosterMenuImageDom();
            dedupePosterDesignWraps();
            reloadVisiblePosterDesignPreview(null);
        }
        window.updateMenuImagePreviewsInMenuModal      = updateMenuImagePreviews;
        window.buildMenuImageUrlFromFilerForMenuModal  = buildMenuImageUrlFromFiler;
        window.restoreMenuImageFromBaseline            = restoreMenuImageFromBaseline;
    })();

    window.showTemplate = window.showPosterDesign;

    /* ─── poster-design select sync ───────────────────────────────── */
    function syncPosterDesignToGenerateTemplateModal(posterDesign) {
        var form = document.getElementById('menu-image-form');
        if (!form || typeof window.syncPosterDesignInGenerateModal !== 'function') return;
        var mid = form.querySelector('input[name="menu_id"]');
        var fid = form.querySelector('input[name="format_id"]');
        if (!mid || !fid || !mid.value || !fid.value || !posterDesign) return;
        window.syncPosterDesignInGenerateModal(String(mid.value), String(fid.value), posterDesign);
    }
    var menuTemplateSelectEl = document.getElementById('menuTemplateSelect');
    if (menuTemplateSelectEl) {
        menuTemplateSelectEl.addEventListener('change', function () {
            showPosterDesign(this.value);
            syncPosterDesignToGenerateTemplateModal(this.value);
        });
    }

    /* ─────────────────────────────────────────────────────────────────
       Dropzone auto-save (unchanged from original)
    ───────────────────────────────────────────────────────────────── */
    (function () {
        var saveImageUrl = "{{ guard_url('groups/menu-image-upload') }}";

        function getToken() {
            var m = document.querySelector('meta[name="csrf-token"]');
            return m ? m.getAttribute('content') : '';
        }
        function postMenuImageForm(fd, options) {
            options = options || {};
            var token = getToken();
            if (!token) {
                if (!options.silent) toastr.warning('Session expired. Please refresh.');
                return Promise.resolve(null);
            }
            return fetch(saveImageUrl, {
                method: 'POST', body: fd, credentials: 'same-origin',
                headers: { 'X-Requested-With': 'XMLHttpRequest', 'Accept': 'application/json', 'X-CSRF-TOKEN': token }
            }).then(function (r) {
                return r.text().then(function (text) {
                    var data = null;
                    try { data = text ? JSON.parse(text) : null; } catch (e) {
                        return { parseError: true, status: r.status, ok: r.ok };
                    }
                    return { ok: r.ok, status: r.status, data: data };
                });
            });
        }
        function clearSavedFormatImage(options) {
            options = options || {};
            var form  = document.getElementById('menu-image-form');
            if (!form) return Promise.resolve(null);
            var token = getToken();
            if (!token) return Promise.resolve(null);
            var fd = new FormData();
            fd.append('_token', token);
            fd.append('format_id', form.querySelector('input[name="format_id"]').value || '');
            fd.append('menu_id',   form.querySelector('input[name="menu_id"]').value   || '');
            fd.append('menu_name', form.querySelector('input[name="menu_name"]').value || '');
            var tplSel = form.querySelector('#menuTemplateSelect');
            var tpl    = tplSel && tplSel.value ? tplSel.value : '';
            if (tpl) { fd.append('template', tpl); fd.append('poster_design', tpl); }
            return postMenuImageForm(fd, options);
        }
        function saveImageToTable(imageData) {
            var form  = document.getElementById('menu-image-form');
            if (!form) return;
            var token = getToken();
            if (!token) { toastr.warning('Session expired. Please refresh.'); return; }
            var path   = imageData.path   || (imageData.data && imageData.data.path);
            var folder = imageData.folder || (imageData.data && imageData.data.folder) || '';
            var file   = imageData.file   || (imageData.data && imageData.data.file)   || (path ? path.split('/').pop() : '');
            if (!path) { toastr.warning('Invalid upload response.'); return; }
            var fd = new FormData();
            fd.append('_token',    token);
            fd.append('format_id', form.querySelector('input[name="format_id"]').value || '');
            fd.append('menu_id',   form.querySelector('input[name="menu_id"]').value   || '');
            fd.append('menu_name', form.querySelector('input[name="menu_name"]').value || '');
            fd.append('image[0][path]',   path);
            fd.append('image[0][folder]', folder);
            fd.append('image[0][file]',   file);
            var tplSel = form.querySelector('#menuTemplateSelect');
            var tpl    = tplSel && tplSel.value ? tplSel.value : '';
            if (tpl) { fd.append('template', tpl); fd.append('poster_design', tpl); }
            postMenuImageForm(fd).then(function (result) {
                if (!result) return;
                if (typeof toastr !== 'undefined' && typeof toastr.clear === 'function') toastr.clear();
                if (result.parseError) {
                    if (result.status === 419 || result.status === 403)
                        toastr.warning('Session expired or blocked. Please refresh the page.');
                    else
                        toastr.error('Could not read server response. If this persists, refresh and try again.');
                    return;
                }
                var data = result.data || {};
                if (!result.ok) { toastr.warning(data.data || data.message || ('Request failed (' + (result.status || '') + ').')); return; }
                if (data.status === 'success') {
                    toastr.success(data.data || 'Image saved to poster.');
                    if (data.image_url && typeof window.updateMenuImagePreviewsInMenuModal === 'function')
                        window.updateMenuImagePreviewsInMenuModal(data.image_url);
                    if (data.poster_design && typeof window.syncPosterDesignInGenerateModal === 'function') {
                        var f   = document.getElementById('menu-image-form');
                        if (f) {
                            var mid = f.querySelector('input[name="menu_id"]');
                            var fid = f.querySelector('input[name="format_id"]');
                            if (mid && fid) window.syncPosterDesignInGenerateModal(mid.value, fid.value, data.poster_design);
                        }
                    }
                }
            }).catch(function () {
                if (typeof toastr !== 'undefined' && typeof toastr.clear === 'function') toastr.clear();
                toastr.error('Network error. Please try again.');
            });
        }
        function sortableHasUploadPreview(wrapper) {
            var sortable = wrapper.querySelector('#sortable_image');
            if (!sortable) return false;
            return !!sortable.querySelector('.img-box, .file-box');
        }
        function handleUploadRemoved(wrapper) {
            if (sortableHasUploadPreview(wrapper)) return;
            clearSavedFormatImage({ silent: true }).then(function (result) {
                var url = null;
                if (result && result.ok && result.data && result.data.image_url) url = result.data.image_url;
                if (typeof window.restoreMenuImageFromBaseline === 'function')
                    window.restoreMenuImageFromBaseline(url);
            });
        }
        function attachUploadRemoveHandler(wrapper) {
            if (!wrapper || wrapper.getAttribute('data-menu-image-remove-bound') === '1') return;
            wrapper.setAttribute('data-menu-image-remove-bound', '1');
            wrapper.addEventListener('click', function (e) {
                if (!e.target.closest('.remove-image, .remove-file')) return;
                setTimeout(function () { handleUploadRemoved(wrapper); }, 0);
            });
        }
        function clearMenuImageSortableThumbnails(wrapper) {
            var sortable = wrapper.querySelector('#sortable_image');
            if (!sortable) return;
            sortable.querySelectorAll('.img-box, .file-box').forEach(function (b) { b.parentNode.removeChild(b); });
        }
        function isAllowedMenuImageType(file) {
            if (!file) return false;
            var mime = String(file.type || '').toLowerCase();
            var name = String(file.name || '').toLowerCase();
            return mime === 'image/jpeg' || mime === 'image/png' || /\.jpe?g$/.test(name) || /\.png$/.test(name);
        }
        function isAllowedMenuImageSize(file) {
            return file && typeof file.size === 'number' && file.size <= (2 * 1024 * 1024);
        }
        var menuImageValidationToastState = { key: null, time: 0 };
        function showMenuImageValidationError(message, file) {
            if (typeof toastr === 'undefined') return;
            var fileKey = file ? [file.name || '', file.size || '', file.type || ''].join('|') : '';
            var key = String(message || '') + '|' + fileKey;
            var now = Date.now();
            if (menuImageValidationToastState.key === key && (now - menuImageValidationToastState.time) < 1200) return;
            menuImageValidationToastState.key  = key;
            menuImageValidationToastState.time = now;
            toastr.error(message);
        }

        /* expose saveImageToTable so gallery can reuse it */
        window._mimSaveImageToTable = saveImageToTable;
        window._mimPostMenuImageForm = postMenuImageForm;

        function attachDropzoneSave() {
            var wrapper = document.getElementById('menuImageModalBody') || document.body;
            var el = wrapper.querySelector ? wrapper.querySelector('#image') : document.getElementById('image');
            if (!el || typeof Dropzone === 'undefined') return false;
            var dz = Dropzone.forElement ? Dropzone.forElement(el) : (Dropzone.getInstance && Dropzone.getInstance(el));
            if (!dz) return false;
            dz.options.maxFiles       = 1;
            dz.options.acceptedFiles  = 'image/jpeg,image/png';
            dz.options.maxFilesize    = 2;
            dz.on('maxfilesexceeded', function (file) {
                clearMenuImageSortableThumbnails(wrapper);
                dz.removeAllFiles(true); dz.addFile(file);
            });
            dz.on('addedfile', function (file) {
                if (!isAllowedMenuImageType(file)) { dz.removeFile(file); showMenuImageValidationError('Invalid file type. Please upload only JPEG or PNG images.', file); return; }
                if (!isAllowedMenuImageSize(file)) { dz.removeFile(file); showMenuImageValidationError('File is too large. Please upload an image up to 2MB.', file); return; }
                clearMenuImageSortableThumbnails(wrapper);
                while (dz.files.length > 1) dz.removeFile(dz.files[0]);
            });
            dz.on('error', function (file, message) {
                var msg = String(message || '').toLowerCase();
                if (msg.indexOf('file is too big') !== -1 || msg.indexOf('too big') !== -1)
                    showMenuImageValidationError('File is too large. Please upload an image up to 2MB.', file);
                else if (msg.indexOf('file type') !== -1 || msg.indexOf('upload files of this type') !== -1)
                    showMenuImageValidationError('Invalid file type. Please upload only JPEG or PNG images.', file);
                if (file) dz.removeFile(file);
            });
            dz.on('success', function (file, response) {
                var res = typeof response === 'string'
                    ? (function () { try { return JSON.parse(response); } catch (e) { return {}; } })()
                    : (response || {});
                var immediateUrl = typeof window.buildMenuImageUrlFromFilerForMenuModal === 'function'
                    ? window.buildMenuImageUrlFromFilerForMenuModal(res) : null;
                if (immediateUrl && typeof window.updateMenuImagePreviewsInMenuModal === 'function')
                    window.updateMenuImagePreviewsInMenuModal(immediateUrl);
                if (res.path || (res.data && res.data.path)) saveImageToTable(res);
            });
            return true;
        }

        if (window.__menuImageDropzoneInterval) {
            clearInterval(window.__menuImageDropzoneInterval);
            window.__menuImageDropzoneInterval = null;
        }
        var tries = 0;
        var menuImageModalRoot = document.getElementById('menuImageModalBody');
        if (menuImageModalRoot) attachUploadRemoveHandler(menuImageModalRoot);
        window.__menuImageDropzoneInterval = setInterval(function () {
            if (attachDropzoneSave()) {
                clearInterval(window.__menuImageDropzoneInterval);
                window.__menuImageDropzoneInterval = null;
            } else {
                tries++;
                if (tries > 80) { clearInterval(window.__menuImageDropzoneInterval); window.__menuImageDropzoneInterval = null; }
            }
        }, 150);
    })();

    /* ─────────────────────────────────────────────────────────────────
       Gallery panel logic
    ───────────────────────────────────────────────────────────────── */
    (function () {
        var galleryLoaded   = false;
        var selectedImage   = null; // { path, folder, file, previewUrl }

        var tabUpload    = document.querySelector('.mim-source-tab[data-tab="upload"]');
        var tabGallery   = document.querySelector('.mim-source-tab[data-tab="gallery"]');
        var uploadPanel  = document.getElementById('mimUploadPanel');
        var galleryPanel = document.getElementById('mimGalleryPanel');
        var grid         = document.getElementById('mimGalleryGrid');
        var loading      = document.getElementById('mimGalleryLoading');
        var errorEl      = document.getElementById('mimGalleryError');
        var emptyEl      = document.getElementById('mimGalleryEmpty');
        var selectBtn    = document.getElementById('mimGallerySelectBtn');
        var selectedLbl  = document.getElementById('mimGallerySelectedLabel');
        var retryLink    = document.getElementById('mimGalleryRetry');

        /* ── Tab switching ─────────────────────────────────────────── */
        function showTab(tab) {
            if (tab === 'gallery') {
                tabUpload.classList.remove('active');
                tabGallery.classList.add('active');
                uploadPanel.classList.add('hidden');
                galleryPanel.classList.add('active');
                if (!galleryLoaded) loadGallery();
            } else {
                tabGallery.classList.remove('active');
                tabUpload.classList.add('active');
                galleryPanel.classList.remove('active');
                uploadPanel.classList.remove('hidden');
            }
        }
        tabUpload.addEventListener('click',  function () { showTab('upload'); });
        tabGallery.addEventListener('click', function () { showTab('gallery'); });

        /* ── Fetch gallery images ──────────────────────────────────── */
        function loadGallery() {
            loading.style.display  = '';
            errorEl.style.display  = 'none';
            emptyEl.style.display  = 'none';
            grid.style.display     = 'none';
            grid.innerHTML         = '';
            selectedImage          = null;
            selectBtn.disabled     = true;
            selectedLbl.textContent = '';

            var token = (function () {
                var m = document.querySelector('meta[name="csrf-token"]');
                return m ? m.getAttribute('content') : '';
            })();

            fetch(window.menuGalleryApiUrl, {
                method: 'GET',
                credentials: 'same-origin',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': token
                }
            })
            .then(function (r) { return r.json(); })
            .then(function (data) {
                loading.style.display = 'none';
                if (!data || data.status !== 'success') {
                    errorEl.style.display = ''; return;
                }
                var images = data.images || {};
                var keys   = Object.keys(images);
                if (!keys.length) { emptyEl.style.display = ''; return; }
                keys.forEach(function (k) { renderGalleryItem(images[k]); });
                grid.style.display = '';
                galleryLoaded = true;
            })
            .catch(function () {
                loading.style.display = 'none';
                errorEl.style.display = '';
            });
        }

        /* ── Render one gallery thumbnail ──────────────────────────── */
        function buildPreviewUrl(img) {
            /* Images are served from WEBSITE_URL — use path directly via your app's image proxy
               OR construct the full URL. Adjust the base URL to match your setup. */
            var base = "{{ rtrim(url('image/original'), '/') }}";
            return base + '/' + String(img.path).replace(/^\//, '');
        }

        function renderGalleryItem(img) {
            var previewUrl = buildPreviewUrl(img);
            var item = document.createElement('div');
            item.className = 'mim-gallery-item';
            item.innerHTML =
                '<img src="' + previewUrl + '" alt="' + (img.title || '').replace(/"/g, '&quot;') + '" loading="lazy">' +
                '<span class="mim-gallery-check">' +
                    '<svg viewBox="0 0 14 14"><polyline points="2,7 6,11 12,3"/></svg>' +
                '</span>';

            item.addEventListener('click', function () {
                /* deselect previous */
                var prev = grid.querySelector('.mim-gallery-item.selected');
                if (prev) prev.classList.remove('selected');

                item.classList.add('selected');
                selectedImage = {
                    path:       img.path,
                    folder:     img.folder,
                    file:       img.file,
                    previewUrl: previewUrl,
                    title:      img.title || ''
                };
                selectBtn.disabled      = false;
                selectedLbl.textContent = selectedImage.title
                    ? '✓ ' + selectedImage.title.substring(0, 40) + (selectedImage.title.length > 40 ? '…' : '')
                    : '✓ Image selected';

                /* live preview */
                if (typeof window.updateMenuImagePreviewsInMenuModal === 'function')
                    window.updateMenuImagePreviewsInMenuModal(previewUrl);
            });

            grid.appendChild(item);
        }

        /* ── "Use Selected Image" button ───────────────────────────── */
        selectBtn.addEventListener('click', function () {
            if (!selectedImage) return;
            if (typeof window._mimSaveImageToTable === 'function') {
                window._mimSaveImageToTable({
                    path:   selectedImage.path,
                    folder: selectedImage.folder,
                    file:   selectedImage.file
                });
            }
        });

        /* ── Retry link ────────────────────────────────────────────── */
        if (retryLink) {
            retryLink.addEventListener('click', function (e) {
                e.preventDefault();
                galleryLoaded = false;
                loadGallery();
            });
        }
    })();

    /* ─────────────────────────────────────────────────────────────────
       Poster preview scaling (unchanged from original)
    ───────────────────────────────────────────────────────────────── */
    (function () {
        var PREVIEW_DESIGN_WIDTH = 340;
        var mimPreviewResizeObserver = null;

        function getVisiblePosterWrap() {
            var viewport = document.getElementById('mimPreviewViewport');
            if (!viewport) return null;
            var wraps = viewport.querySelectorAll('.poster-design-preview-wrap');
            for (var i = 0; i < wraps.length; i++) {
                var w = wraps[i];
                if (w.style.display === 'none') continue;
                if (window.getComputedStyle(w).display === 'none') continue;
                return w;
            }
            return wraps.length ? wraps[0] : null;
        }

        window.fitMenuImagePosterPreview = function () {
            var stage    = document.querySelector('.mim-preview-stage');
            var viewport = document.getElementById('mimPreviewViewport');
            var active   = getVisiblePosterWrap();
            if (!stage || !viewport || !active) return;
            active.style.transform  = 'none';
            active.style.marginBottom = '';
            viewport.style.height   = '';
            viewport.style.minHeight = '';
            var pad        = 24;
            var availableW = Math.max(8, stage.clientWidth  - pad);
            var availableH = Math.max(8, stage.clientHeight - pad);
            var scaleW     = availableW / PREVIEW_DESIGN_WIDTH;
            var unscaledH  = active.offsetHeight;
            if (unscaledH < 8) unscaledH = Math.round(PREVIEW_DESIGN_WIDTH * 1.25);
            var scaleH = availableH / unscaledH;
            var scale  = Math.min(1, scaleW, scaleH);
            if (scale < 0.999) {
                active.style.transform       = 'scale(' + scale + ')';
                active.style.transformOrigin = 'top center';
                viewport.style.height        = Math.ceil(unscaledH * scale) + 'px';
            } else {
                viewport.style.height = unscaledH + 'px';
            }
        };

        function bindMimPreviewResize() {
            if (mimPreviewResizeObserver) mimPreviewResizeObserver.disconnect();
            var stage = document.querySelector('.mim-preview-stage');
            if (!stage || typeof ResizeObserver === 'undefined') return;
            mimPreviewResizeObserver = new ResizeObserver(function () { window.fitMenuImagePosterPreview(); });
            mimPreviewResizeObserver.observe(stage);
        }

        var origShowPosterDesign = window.showPosterDesign;
        if (typeof origShowPosterDesign === 'function') {
            window.showPosterDesign = function (designKey) {
                var result = origShowPosterDesign(designKey);
                return Promise.resolve(result).then(function (key) {
                    requestAnimationFrame(function () {
                        requestAnimationFrame(function () {
                            window.fitMenuImagePosterPreview();
                            bindMimPreviewResize();
                        });
                    });
                    var viewport = document.getElementById('mimPreviewViewport');
                    if (viewport) {
                        viewport.querySelectorAll('img').forEach(function (img) {
                            if (!img.complete) img.addEventListener('load', window.fitMenuImagePosterPreview, { once: true });
                        });
                    }
                    return key;
                });
            };
        }
    })();

    /* ─────────────────────────────────────────────────────────────────
       Init (unchanged from original)
    ───────────────────────────────────────────────────────────────── */
    (function initMenuImageTemplatePreview() {
        if (typeof window.initMenuPosterDesignPicker === 'function') window.initMenuPosterDesignPicker();
        if (window.menuImageBaselineUrl && typeof window.updateMenuImagePreviewsInMenuModal === 'function')
            window.updateMenuImagePreviewsInMenuModal(window.menuImageBaselineUrl);
        else if (typeof window.restoreMenuImageFromBaseline === 'function')
            window.restoreMenuImageFromBaseline();
        var sel = document.getElementById('menuTemplateSelect');
        if (sel && sel.value) {
            showPosterDesign(sel.value);
            syncPosterDesignToGenerateTemplateModal(sel.value);
        } else {
            requestAnimationFrame(window.fitMenuImagePosterPreview);
        }
        requestAnimationFrame(function () { requestAnimationFrame(window.fitMenuImagePosterPreview); });
    })();
</script>
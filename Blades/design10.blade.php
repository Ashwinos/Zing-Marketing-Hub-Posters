<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Oswald:wght@700;800&family=Poppins:wght@400;600;700;800&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Water+Brush&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<style>
    /*
     * BACKEND FIXES
     * ─────────────────────────────────────────────────────────────
     * FIX 1: aspect-ratio: 4/5  → width:340px; height:425px (explicit)
     * FIX 2: SVG width/height CSS 100% → added width="340" height="425"
     *         directly on <svg> tag. CSS % on SVG height is ignored by
     *         most headless renderers without a known parent px height.
     * FIX 3: aspect-ratio:1/1 on plate → width:218px; height:218px
     * FIX 4: wrapper width:100% → width:340px
     * FIX 5: bottom-area bottom:12px unconstrained → explicit height+overflow
     * FIX 6: order-btn padding:1.5% 4% → explicit px padding
     */

    .design10-wrapper {
        width: 340px;               /* FIX 4 */
        display: flex;
        flex-direction: column;
        align-items: center;
        font-family: 'Poppins', sans-serif;
    }

    .design10-wrapper .design10-card {
        width: 340px;               /* FIX 1 */
        height: 425px;              /* FIX 1: 340 × 5/4 = 425 */
        /* aspect-ratio: 4/5 ← REMOVED */
        background: #ffffff;
        border: none;
        overflow: hidden;
        position: relative;
        box-sizing: border-box;
        box-shadow: 0 20px 60px rgba(0,0,0,0.25);
    }

    /* FIX 2: CSS-only 100% is unreliable in headless for SVG height.
       Width/height are set as HTML attributes on the <svg> tag instead.
       Keep position/inset to layer it correctly. */
    .design10-wrapper .design10-texture-bg {
        position: absolute;
        top: 0;
        left: 0;
        z-index: 0;
        display: block;
    }

    /* Green diagonal band — % values resolve correctly now that card = 425px */
    .design10-wrapper .design10-green-band {
        position: absolute;
        left: -60px;
        right: -60px;
        top: 50%;
        transform: translateY(-50%) rotate(-8deg);
        height: 144px;              /* FIX: was 34% of unknown → 34% of 425 = 144px */
        background: {{ $themeColor ?? '#5a8a2a' }};
        z-index: 2;
    }
    .design10-wrapper .design10-green-band::before,
    .design10-wrapper .design10-green-band::after {
        content: '';
        position: absolute;
        left: 0;
        right: 0;
        height: 0;
        border-top: 2px dashed rgba(255,255,255,0.55);
    }
    .design10-wrapper .design10-green-band::before { top: 7px; }
    .design10-wrapper .design10-green-band::after {
        bottom: 7px;
        border-top: none;
        border-bottom: 2px dashed rgba(255,255,255,0.55);
    }

    .design10-wrapper .design10-logo {
        width: 34px;
        height: 34px;
        border-radius: 50%;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
        position: absolute;
        top: 11px;                  /* FIX: was 2.5% of 425 = ~11px */
        left: 10px;                 /* FIX: was 3% of 340 = ~10px */
        z-index: 8;
        border: 2px solid {{ $themeColor ?? '#5a8a2a' }};
    }
    .design10-wrapper .design10-logo img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    .design10-wrapper .design10-header-area {
        position: absolute;
        top: 25px;                  /* FIX: was 6% of 425 = ~25px */
        left: 0;
        right: 0;
        text-align: center;
        z-index: 5;
    }
    .design10-wrapper .design10-food-menu-text {
        font-family: "Water Brush", cursive;
        font-size: 45px;
        font-style: italic;
        font-weight: 800;
        color: {{ $themeColor ?? '#5a8a2a' }};
        letter-spacing: 2px;
        line-height: 1;
        display: block;
        padding-top: 24px;
    }

    /* FIX 3: plate circle was aspect-ratio:1/1 which collapses in headless.
       64% of 340px = 217.6 → 218px square.                                */
    .design10-wrapper .design10-plate-wrap {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -48%);
        width: 218px;               /* FIX 3: was 64% */
        height: 218px;              /* FIX 3: was aspect-ratio:1/1 */
        z-index: 4;
    }
    .design10-wrapper .design10-plate-circle {
        width: 218px;               /* FIX 3: explicit px */
        height: 218px;              /* FIX 3: explicit px */
        border-radius: 50%;
        overflow: hidden;
        background: #222;
        border: 4px solid rgb(255 255 255 / 92%);
        box-sizing: border-box;
    }
    .design10-wrapper .design10-plate-circle img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    .design10-wrapper .design10-arrow-tl {
        position: absolute;
        top: 110px;                 /* FIX: was 26% of 425 = ~110px */
        left: 20px;                 /* FIX: was 6% of 340 = ~20px */
        z-index: 5;
        width: 44px;                /* FIX: was 13% of 340 = ~44px */
        height: 44px;
    }
    .design10-wrapper .design10-arrow-tl svg { width: 44px; height: 44px; }

    .design10-wrapper .design10-arrow-br {
        position: absolute;
        bottom: 102px;              /* FIX: was 24% of 425 = ~102px */
        right: 20px;                /* FIX: was 6% of 340 = ~20px */
        z-index: 5;
        width: 44px;                /* FIX: was 13% of 340 = ~44px */
        height: 44px;
    }
    .design10-wrapper .design10-arrow-br svg { width: 44px; height: 44px; }

    /* FIX 5: bottom-area given explicit height so text can't push card taller */
    .design10-wrapper .design10-bottom-area {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 90px;               /* FIX 5: explicit — prevents overflow */
        z-index: 5;
        display: flex;
        align-items: flex-end;
        justify-content: flex-end;
        padding: 0 17px 10px;       /* FIX: was % padding */
        flex-direction: column;
        /*gap: 3px;*/
        box-sizing: border-box;
        overflow: hidden;           /* FIX 5: clip any overflow */
        line-height: 22px !important;
    }
    .design10-wrapper .design10-bottom-row {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: flex-end;
    }
    .design10-wrapper .design10-order-btn {
        background: {{ $themeColor ?? '#5a8a2a' }} !important;
        color: #fff !important;
        font-family: 'Poppins', sans-serif;
        font-size: 8.5px !important;
        font-weight: 700 !important;
        text-transform: uppercase !important;
        letter-spacing: 0.1em;
        padding: 2px 10px;          /* FIX 6: was 1.5% 4% → explicit px */
        border-radius: 4px;
        border: 2px solid rgba(255,255,255,0.4);
        white-space: nowrap;
        flex-shrink: 0;
    }
    .design10-wrapper .design10-phone-number {
        font-family: 'Oswald', sans-serif;
        font-size: 21px;
        font-weight: 700;
        color: #1a1a1a;
        letter-spacing: 1px;
        text-align: right;
        width: 100%;
        white-space: nowrap;        /* single line — card is fixed 340px */
        overflow: hidden;
        text-overflow: ellipsis;
        text-transform: capitalize;
    }
    .design10-wrapper .design10-phone-address {
        font-size: 7px;
        font-weight: 400;
        color: #555;
        letter-spacing: 0.05em;
        text-align: right;
        width: 100%;
        white-space: nowrap;        /* single line — clip with ellipsis */
        overflow: hidden;
        text-overflow: ellipsis;
        text-transform: capitalize;
    }

    .design10-wrapper .design10-download-btn {
        margin-top: 10px;
        background: {{ $themeColor ?? '#5a8a2a' }};
        color: #fff;
        border: none;
        padding: 8px 16px;
        font-size: 12px;
        font-weight: 600;
        border-radius: 6px;
        cursor: pointer;
        font-family: 'Poppins', sans-serif;
        display: flex;
        align-items: center;
        gap: 8px;
        letter-spacing: 0.04em;
        transition: background 0.2s, transform 0.1s;
        box-shadow: 0 4px 16px rgba(90,138,42,0.4);
    }
    .design10-wrapper .design10-download-btn:hover   { background: #4a7520; transform: translateY(-1px); }
    .design10-wrapper .design10-download-btn:active  { transform: translateY(0); }
    .design10-wrapper .design10-download-btn:disabled { opacity: 0.7; cursor: not-allowed; transform: none; }
</style>

<div class="design10-wrapper">

    <div class="design10-card" id="posterCard10">

        {{-- FIX 2: width="340" height="425" as HTML attributes on the SVG tag.
             CSS width/height:100% is unreliable for SVG height in headless renderers.
             The attributes give the SVG an absolute pixel size it always respects. --}}
        <svg class="design10-texture-bg"
             width="340" height="425"
             xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="d10DiamondTile" x="0" y="0" width="24" height="24" patternUnits="userSpaceOnUse">
                    <line x1="0"  y1="0"  x2="24" y2="24" stroke="rgba(0,0,0,0.045)" stroke-width="0.7"/>
                    <line x1="24" y1="0"  x2="0"  y2="24" stroke="rgba(0,0,0,0.045)" stroke-width="0.7"/>
                    <circle cx="12" cy="12" r="1.1" fill="rgba(90,138,42,0.10)"/>
                    <circle cx="0"  cy="0"  r="0.8" fill="rgba(0,0,0,0.04)"/>
                    <circle cx="24" cy="0"  r="0.8" fill="rgba(0,0,0,0.04)"/>
                    <circle cx="0"  cy="24" r="0.8" fill="rgba(0,0,0,0.04)"/>
                    <circle cx="24" cy="24" r="0.8" fill="rgba(0,0,0,0.04)"/>
                </pattern>
                <pattern id="d10OuterDiamond" x="0" y="0" width="48" height="48" patternUnits="userSpaceOnUse">
                    <polygon points="24,2 46,24 24,46 2,24"   fill="none" stroke="rgba(90,138,42,0.07)" stroke-width="0.9"/>
                    <polygon points="24,10 38,24 24,38 10,24" fill="none" stroke="rgba(0,0,0,0.04)"     stroke-width="0.7"/>
                    <line x1="24" y1="2"  x2="24" y2="10" stroke="rgba(0,0,0,0.035)" stroke-width="0.6"/>
                    <line x1="46" y1="24" x2="38" y2="24" stroke="rgba(0,0,0,0.035)" stroke-width="0.6"/>
                    <line x1="24" y1="46" x2="24" y2="38" stroke="rgba(0,0,0,0.035)" stroke-width="0.6"/>
                    <line x1="2"  y1="24" x2="10" y2="24" stroke="rgba(0,0,0,0.035)" stroke-width="0.6"/>
                    <circle cx="24" cy="24" r="2"   fill="none" stroke="rgba(90,138,42,0.09)" stroke-width="0.8"/>
                    <circle cx="24" cy="24" r="0.8" fill="rgba(90,138,42,0.12)"/>
                </pattern>
                <pattern id="d10Hatch" x="0" y="0" width="8" height="8" patternUnits="userSpaceOnUse">
                    <line x1="0" y1="8" x2="8" y2="0" stroke="rgba(0,0,0,0.028)" stroke-width="0.5"/>
                </pattern>
            </defs>
            <rect width="340" height="425" fill="url(#d10Hatch)"/>
            <rect width="340" height="425" fill="url(#d10DiamondTile)"/>
            <rect width="340" height="425" fill="url(#d10OuterDiamond)"/>
        </svg>

        <div class="design10-green-band"></div>

        @if(isset($logourl) && $logourl)
            <div class="design10-logo">
                    <img src="{{ $logourl }}" alt="logo" crossorigin="anonymous">
            </div>
        @endif

        <div class="design10-header-area">
            <span class="design10-food-menu-text">Crave More</span>
        </div>

        <div class="design10-arrow-tl">
            <svg viewBox="0 0 55 55" xmlns="http://www.w3.org/2000/svg">
                <path d="M 10 10 Q 8 35 30 44" fill="none" stroke="#1a1a1a" stroke-width="2.5" stroke-linecap="round"/>
                <path d="M 22 44 L 30 44 L 28 36" fill="none" stroke="#1a1a1a" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </div>

        <div class="design10-arrow-br">
            <svg viewBox="0 0 55 55" xmlns="http://www.w3.org/2000/svg">
                <path d="M 45 10 Q 48 36 25 44" fill="none" stroke="#1a1a1a" stroke-width="2.5" stroke-linecap="round"/>
                <path d="M 33 44 L 25 44 L 27 36" fill="none" stroke="#1a1a1a" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </div>

        <div class="design10-plate-wrap">
            <div class="design10-plate-circle">
                @if(isset($menuImageUrl) && $menuImageUrl)
                    <img src="{{ $menuImageUrl }}" alt="{{ @$menu['name'] ?? 'Menu Item' }}" crossorigin="anonymous">
                @else
                    <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?w=600&q=85" crossorigin="anonymous" alt="Menu Item">
                @endif
            </div>
        </div>

        <div class="design10-bottom-area">
            <div class="design10-bottom-row">
                <div class="design10-order-btn"><span style="color: #ffffff !important; font-weight:700 !important ; font-size:8px !important;">ORDER NOW</span> </div>
            </div>
            <div class="design10-phone-number">{{ @user()->name ?? ' ' }}</div>
            <div class="design10-phone-address">{{ @user()->website_domain ?? ' ' }} | {{ @user()->phone ?? ' ' }} | {{ @user()->address ?? ' ' }}</div>
        </div>

    </div>

    <button type="button" class="design10-download-btn" onclick="downloadPoster10()">
        <i class="bi bi-download"></i>
        Download Poster
    </button>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

<script>
    function downloadPoster10() {
        var card   = document.getElementById('posterCard10');
        var button = document.querySelector('.design10-download-btn');

        button.innerHTML = '<i class="bi bi-hourglass-split"></i> Generating...';
        button.disabled  = true;

        var exportW = 1080;
        var scale   = exportW / card.offsetWidth;   /* 1080 / 340 = ~3.18 */

        html2canvas(card, {
            scale:           scale,
            backgroundColor: null,
            logging:         false,
            useCORS:         true,
            allowTaint:      true,
            imageTimeout:    0,
            onclone: function(clonedDoc) {
                var images = clonedDoc.querySelectorAll('img');
                return Promise.all(Array.from(images).map(function(img) {
                    return new Promise(function(resolve) {
                        if (img.complete) { resolve(); }
                        else { img.onload = resolve; img.onerror = resolve; }
                    });
                }));
            }
        }).then(function(canvas) {
            var link      = document.createElement('a');
            link.download = 'menu-poster-instagram.png';
            link.href     = canvas.toDataURL('image/png', 1.0);
            link.click();

            button.innerHTML = '<i class="bi bi-download"></i> Download Poster';
            button.disabled  = false;
        }).catch(function(error) {
            console.error('Error generating image:', error);
            alert('Failed to generate image. Please try again.');
            button.innerHTML = '<i class="bi bi-download"></i> Download Poster';
            button.disabled  = false;
        });
    }
</script>
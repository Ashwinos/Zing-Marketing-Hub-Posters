<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Oswald:wght@700;800&family=Poppins:wght@400;600;700;800&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Water+Brush&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<style>
    /* ══════════════════════════════
       DESIGN10 WRAPPER
    ══════════════════════════════ */
    .design10-wrapper {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        font-family: 'Poppins', sans-serif;
    }

    /* ── Card: Instagram square-ish ratio 4/5 ── */
    .design10-wrapper .design10-card {
        width: 100%;
        aspect-ratio: 4 / 5;
        max-width: 340px;
        background: #ffffff;
        border: none;
        overflow: hidden;
        position: relative;
        box-sizing: border-box;
        container-type: inline-size;
        box-shadow: 0 20px 60px rgba(0,0,0,0.25);
    }

    /* ══════════════════════════════
       SVG TEXTURE BACKGROUND
    ══════════════════════════════ */
    .design10-wrapper .design10-texture-bg {
        position: absolute;
        inset: 0;
        z-index: 0;
        width: 100%;
        height: 100%;
    }

    /* ══════════════════════════════
       GREEN DIAGONAL BAND
    ══════════════════════════════ */
    .design10-wrapper .design10-green-band {
        position: absolute;
        left: -60px;
        right: -60px;
        top: 50%;
        transform: translateY(-50%) rotate(-8deg);
        height: 34%;
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

    /* ══════════════════════════════
       LOGO – top left
    ══════════════════════════════ */
    .design10-wrapper .design10-logo {
        width: 10cqw;
        height: 10cqw;
        border-radius: 50%;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
        position: absolute;
        top: 2.5%;
        left: 3%;
        z-index: 8;
        border: 2px solid {{ $themeColor ?? '#5a8a2a' }};
    }
    .design10-wrapper .design10-logo img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    /* ══════════════════════════════
       HEADER TEXT
    ══════════════════════════════ */
    .design10-wrapper .design10-header-area {
        position: absolute;
        top: 6%;
        left: 0;
        right: 0;
        text-align: center;
        z-index: 5;
    }
    .design10-wrapper .design10-food-menu-text {
        font-family: "Water Brush", cursive;
        font-size: 45PX;
        font-style: italic;
        font-weight: 800;
        color: {{ $themeColor ?? '#5a8a2a' }};
        letter-spacing: 2px;
        line-height: 1;
        display: block;
        padding-top: 24px;
    }

    /* ══════════════════════════════
       CIRCULAR FOOD IMAGE
    ══════════════════════════════ */
    .design10-wrapper .design10-plate-wrap {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -48%);
        width: 64%;
        aspect-ratio: 1 / 1;
        z-index: 4;
    }
    .design10-wrapper .design10-plate-circle {
        width: 100%;
        height: 100%;
        border-radius: 50%;
        overflow: hidden;
        background: #222;
        border: 4px solid rgb(255 255 255 / 92%);
    }
    .design10-wrapper .design10-plate-circle img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    /* ══════════════════════════════
       ARROWS
    ══════════════════════════════ */
    .design10-wrapper .design10-arrow-tl {
        position: absolute;
        top: 26%;
        left: 6%;
        z-index: 5;
        width: 13%;
        height: auto;
    }
    .design10-wrapper .design10-arrow-tl svg { width: 100%; height: 100%; }

    .design10-wrapper .design10-arrow-br {
        position: absolute;
        bottom: 24%;
        right: 6%;
        z-index: 5;
        width: 13%;
        height: auto;
    }
    .design10-wrapper .design10-arrow-br svg { width: 100%; height: 100%; }

    /* ══════════════════════════════
       BOTTOM AREA
    ══════════════════════════════ */
    .design10-wrapper .design10-bottom-area {
        position: absolute;
        bottom: 12px;
        left: 0;
        right: 0;
        z-index: 5;
        display: flex;
        align-items: center;
        justify-content: flex-end;
        padding: 0 5% 3%;
        flex-direction: column;
        gap: 0;
    }
    .design10-wrapper .design10-bottom-row {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: flex-end;
        gap: 4%;
    }
    .design10-wrapper .design10-order-btn {
        background: {{ $themeColor ?? '#5a8a2a' }};
        color: #fff;
        font-family: 'Poppins', sans-serif;
        font-size: 8.5px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.1em;
        padding: 1.5% 4%;
        border-radius: 4px;
        border: 2px solid rgba(255,255,255,0.4);
        white-space: nowrap;
    }
    .design10-wrapper .design10-phone-number {
        font-family: 'Oswald', sans-serif;
        font-size: 21px;
        font-weight: 700;
        color: #1a1a1a;
        letter-spacing: 1px;
        text-align: right;
        width: 100%;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    .design10-wrapper .design10-phone-address {
        font-size: 7px;
        font-weight: 400;
        color: #555;
        letter-spacing: 0.05em;
        text-align: right;
        width: 100%;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    /* ── Download button ── */
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
    .design10-wrapper .design10-download-btn:hover  { background: #4a7520; transform: translateY(-1px); }
    .design10-wrapper .design10-download-btn:active  { transform: translateY(0); }
    .design10-wrapper .design10-download-btn:disabled { opacity: 0.7; cursor: not-allowed; transform: none; }
</style>

<div class="design10-wrapper">

    <div class="design10-card" id="posterCard10">

        {{-- SVG Texture Background: Thai silk diamond weave --}}
        <svg class="design10-texture-bg" xmlns="http://www.w3.org/2000/svg">
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
                    <polygon points="24,2 46,24 24,46 2,24" fill="none" stroke="rgba(90,138,42,0.07)" stroke-width="0.9"/>
                    <polygon points="24,10 38,24 24,38 10,24" fill="none" stroke="rgba(0,0,0,0.04)" stroke-width="0.7"/>
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
            <rect width="100%" height="100%" fill="url(#d10Hatch)"/>
            <rect width="100%" height="100%" fill="url(#d10DiamondTile)"/>
            <rect width="100%" height="100%" fill="url(#d10OuterDiamond)"/>
        </svg>

        {{-- Diagonal band --}}
        <div class="design10-green-band"></div>

        {{-- Logo --}}
        <div class="design10-logo">
            @if(isset($logourl) && $logourl)
                <img src="{{ $logourl }}" alt="logo" crossorigin="anonymous">
            @else
                <img src="https://static.vecteezy.com/system/resources/thumbnails/014/664/003/small_2x/cafe-and-resto-logo-vector.jpg" alt="logo" crossorigin="anonymous">
            @endif
        </div>

        {{-- Header text --}}
        <div class="design10-header-area">
            <span class="design10-food-menu-text">Crave More</span>
        </div>

        {{-- Arrow top-left --}}
        <div class="design10-arrow-tl">
            <svg viewBox="0 0 55 55" xmlns="http://www.w3.org/2000/svg">
                <path d="M 10 10 Q 8 35 30 44"
                    fill="none" stroke="#1a1a1a" stroke-width="2.5"
                    stroke-linecap="round"/>
                <path d="M 22 44 L 30 44 L 28 36"
                    fill="none" stroke="#1a1a1a" stroke-width="2.5"
                    stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </div>

        {{-- Arrow bottom-right --}}
        <div class="design10-arrow-br">
            <svg viewBox="0 0 55 55" xmlns="http://www.w3.org/2000/svg">
                <path d="M 45 10 Q 48 36 25 44"
                    fill="none" stroke="#1a1a1a" stroke-width="2.5"
                    stroke-linecap="round"/>
                <path d="M 33 44 L 25 44 L 27 36"
                    fill="none" stroke="#1a1a1a" stroke-width="2.5"
                    stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </div>

        {{-- Circular food plate --}}
        <div class="design10-plate-wrap">
            <div class="design10-plate-circle">
                @if(isset($menuImageUrl) && $menuImageUrl)
                    <img src="{{ $menuImageUrl }}" alt="{{ @$menu['name'] ?? 'Menu Item' }}" crossorigin="anonymous">
                @else
                    <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?w=600&q=85" crossorigin="anonymous" alt="Menu Item">
                @endif
            </div>
        </div>

        {{-- Bottom: ORDER NOW + name + address --}}
        <div class="design10-bottom-area">
            <div class="design10-bottom-row">
                <div class="design10-order-btn">ORDER NOW</div>
            </div>
            <div class="design10-phone-number">{{ @user()->name ?? ' ' }}</div>
            <div class="design10-phone-address">{{ @user()->website_domain ?? ' ' }} | {{ @user()->phone ?? ' ' }} | {{ @user()->address ?? ' ' }}</div>
        </div>

    </div>{{-- /.design10-card --}}

    {{-- Download button --}}
    <button type="button" class="design10-download-btn" onclick="downloadPoster10()">
        <i class="bi bi-download"></i>
        Download Poster
    </button>

</div>{{-- /.design10-wrapper --}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

<script>
    function downloadPoster10() {
        var card   = document.getElementById('posterCard10');
        var button = document.querySelector('.design10-download-btn');

        button.innerHTML = '<i class="bi bi-hourglass-split"></i> Generating...';
        button.disabled  = true;

        var exportW = 1080;
        var scale   = exportW / card.offsetWidth;

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
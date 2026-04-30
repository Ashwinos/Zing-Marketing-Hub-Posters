<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<style>
    .design9-wrapper {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        font-family: 'Poppins', sans-serif;
    }

    /* ── Card: Instagram square-ish ratio 4/5 ── */
    .design9-wrapper .design9-card {
        width: 100%;
        aspect-ratio: 4 / 5;
        max-width: 340px;
        background: #1a1a1a;
        border: none;
        overflow: hidden;
        position: relative;
        box-sizing: border-box;
        container-type: inline-size;
    }

    /* ── Diagonal texture overlay ── */
    .design9-wrapper .design9-card::before {
        content: '';
        position: absolute;
        inset: 0;
        background-image: repeating-linear-gradient(
            -45deg,
            transparent,
            transparent 3px,
            rgba(255,255,255,0.012) 3px,
            rgba(255,255,255,0.012) 6px
        );
        z-index: 0;
        pointer-events: none;
    }

    /* ── Red diagonal slashes LEFT ── */
    .design9-wrapper .slash-left-1,
    .design9-wrapper .slash-left-2,
    .design9-wrapper .slash-left-3 {
        position: absolute;
        left: -40px;
        background: {{ $themeColor ?? '#cc1111' }};
        z-index: 2;
    }
    .design9-wrapper .slash-left-1 { top: 14.5%; width: 30%; height: 6.5%; transform: skewY(-40deg); }
    .design9-wrapper .slash-left-2 { top: 21%;   width: 28%; height: 6%;   transform: skewY(-40deg); }
    .design9-wrapper .slash-left-3 { top: 27%;   width: 23%; height: 5%;   transform: skewY(-40deg); }

    /* ── Red diagonal slashes RIGHT ── */
    .design9-wrapper .slash-right-1,
    .design9-wrapper .slash-right-2,
    .design9-wrapper .slash-right-3 {
        position: absolute;
        right: -40px;
        background: {{ $themeColor ?? '#cc1111' }};
        z-index: 2;
    }
    .design9-wrapper .slash-right-1 { top: 14.5%; width: 30%; height: 6.5%; transform: skewY(-40deg); }
    .design9-wrapper .slash-right-2 { top: 21%;   width: 28%; height: 6%;   transform: skewY(-40deg); }
    .design9-wrapper .slash-right-3 { top: 27%;   width: 23%; height: 5%;   transform: skewY(-40deg); }

    /* ── Halftone dot pattern – bottom left ── */
    .design9-wrapper .dot-pattern-bl {
        position: absolute;
        bottom: 23%;
        left: 0;
        z-index: 1;
        width: 26%;
        height: auto;
        pointer-events: none;
    }
    .design9-wrapper .dot-pattern-bl svg { width: 100%; height: 100%; display: block; }

    /* ── Halftone dot pattern – top right ── */
    .design9-wrapper .dot-pattern-tr {
        position: absolute;
        top: 0;
        right: 0;
        z-index: 1;
        width: 26%;
        height: auto;
        pointer-events: none;
    }
    .design9-wrapper .dot-pattern-tr svg { width: 100%; height: 100%; display: block; }

    /* ── Logo box ── */
    .design9-wrapper .d9-logo-box {
        width: 8.7cqw;
        height: 8.7cqw;
        background: {{ $themeColor ?? '#cc1111' }};
        border-radius: 5px;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
        position: absolute;
        top: 2.5%;
        left: 3.5%;
        z-index: 8;
    }
    .design9-wrapper .d9-logo-box img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    /* ── HEADING area ── */
    .design9-wrapper .d9-heading-area {
        position: absolute;
        top: 9%;
        left: 0;
        right: 0;
        text-align: center;
        z-index: 3;
        line-height: 1;
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
    }
    .design9-wrapper .d9-txt-white {
        font-family: 'Bebas Neue', sans-serif;
        font-size: 72px;
        color: #ffffff;
        letter-spacing: 2px;
        display: block;
        line-height: 0.9;
        text-shadow: 4px 4px 0 rgba(0,0,0,0.55);
    }
    .design9-wrapper .d9-txt-red {
        font-family: 'Bebas Neue', sans-serif;
        font-size: 72px;
        color: {{ $themeColor ?? '#cc1111' }};
        letter-spacing: 2px;
        display: block;
        line-height: 0.9;
        text-shadow: 4px 4px 0 rgba(0,0,0,0.55);
    }

    /* ── Circular food plate ── */
    .design9-wrapper .d9-plate-wrap {
        position: absolute;
        top: 24%;
        left: 50%;
        transform: translateX(-50%);
        width: 64%;
        aspect-ratio: 1 / 1;
        z-index: 4;
    }
    .design9-wrapper .d9-plate-circle {
        width: 100%;
        height: 100%;
        border-radius: 50%;
        overflow: hidden;
        border: 4px solid #1a1a1a;
        box-shadow:
            0 0 0 2px #333,
            0 10px 40px rgba(0,0,0,0.8),
            0 4px 12px rgba(204,17,17,0.2);
        background: #222;
    }
    .design9-wrapper .d9-plate-circle img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    /* ── Dark bottom strip ── */
    .design9-wrapper .d9-bottom-strip {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 28%;
        background: #0e0e0e;
        z-index: 3;
    }

    /* ── Bottom content ── */
    .design9-wrapper .d9-bottom-content {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        z-index: 6;
        text-align: center;
        padding: 0 4.6% 3%;
    }
    .design9-wrapper .d9-restaurant-label {
        font-size: 7px;
        font-weight: 600;
        color: #ffffff;
        letter-spacing: 0.28em;
        text-transform: uppercase;
        margin-bottom: 1.5%;
        padding-top: 1.5%;
    }
    .design9-wrapper .d9-red-line {
        width: 100%;
        height: 2px;
        background: {{ $themeColor ?? '#cc1111' }};
        margin-bottom: 2%;
    }
    .design9-wrapper .d9-delivery-label {
        font-size: 7.5px;
        color: #888;
        letter-spacing: 0.18em;
        text-transform: uppercase;
        margin-bottom: 1%;
    }
    .design9-wrapper .d9-phone-number {
        font-family: 'Bebas Neue', sans-serif;
        font-size: 32px;
        color: #ffffff;
        letter-spacing: 2px;
        line-height: 1.1;
        margin-bottom: 1%;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    .design9-wrapper .d9-website-url {
        font-size: 8px;
        color: #999;
        letter-spacing: 0.06em;
    }

    /* ── Download button ── */
    .design9-wrapper .d9-download-btn {
        margin-top: 10px;
        background: {{ $themeColor ?? '#cc1111' }};
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
        box-shadow: 0 4px 16px rgba(204,17,17,0.4);
    }
    .design9-wrapper .d9-download-btn:hover  { background: #aa0d0d; transform: translateY(-1px); }
    .design9-wrapper .d9-download-btn:active  { transform: translateY(0); }
    .design9-wrapper .d9-download-btn:disabled { opacity: 0.7; cursor: not-allowed; transform: none; }
</style>

<div class="design9-wrapper">

    <div class="design9-card" id="posterCard9">

        {{-- Red slashes left --}}
        <div class="slash-left-1"></div>
        <div class="slash-left-2"></div>
        <div class="slash-left-3"></div>

        {{-- Red slashes right --}}
        <div class="slash-right-1"></div>
        <div class="slash-right-2"></div>
        <div class="slash-right-3"></div>

        {{-- Halftone dot pattern – bottom left --}}
        <div class="dot-pattern-bl">
            <svg viewBox="0 0 110 110" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <radialGradient id="dotFadeBL9" cx="0%" cy="100%" r="100%">
                        <stop offset="0%"   stop-color="white" stop-opacity="1"/>
                        <stop offset="60%"  stop-color="white" stop-opacity="0.5"/>
                        <stop offset="100%" stop-color="white" stop-opacity="0"/>
                    </radialGradient>
                    <mask id="dotMaskBL9">
                        <rect width="110" height="110" fill="url(#dotFadeBL9)"/>
                    </mask>
                </defs>
                <g mask="url(#dotMaskBL9)">
                    <circle cx="10"  cy="100" r="5.5" fill="{{ $themeColor ?? '#cc1111' }}"/>
                    <circle cx="26"  cy="100" r="5.0" fill="{{ $themeColor ?? '#cc1111' }}"/>
                    <circle cx="42"  cy="100" r="4.5" fill="{{ $themeColor ?? '#cc1111' }}"/>
                    <circle cx="58"  cy="100" r="4.0" fill="{{ $themeColor ?? '#cc1111' }}"/>
                    <circle cx="74"  cy="100" r="3.2" fill="{{ $themeColor ?? '#cc1111' }}"/>
                    <circle cx="90"  cy="100" r="2.4" fill="{{ $themeColor ?? '#cc1111' }}"/>
                    <circle cx="106" cy="100" r="1.6" fill="{{ $themeColor ?? '#cc1111' }}"/>
                    <circle cx="10"  cy="84"  r="5.0" fill="{{ $themeColor ?? '#cc1111' }}"/>
                    <circle cx="26"  cy="84"  r="4.5" fill="{{ $themeColor ?? '#cc1111' }}"/>
                    <circle cx="42"  cy="84"  r="4.0" fill="{{ $themeColor ?? '#cc1111' }}"/>
                    <circle cx="58"  cy="84"  r="3.3" fill="{{ $themeColor ?? '#cc1111' }}"/>
                    <circle cx="74"  cy="84"  r="2.6" fill="{{ $themeColor ?? '#cc1111' }}"/>
                    <circle cx="90"  cy="84"  r="1.8" fill="{{ $themeColor ?? '#cc1111' }}"/>
                    <circle cx="10"  cy="68"  r="4.4" fill="{{ $themeColor ?? '#cc1111' }}"/>
                    <circle cx="26"  cy="68"  r="3.9" fill="{{ $themeColor ?? '#cc1111' }}"/>
                    <circle cx="42"  cy="68"  r="3.3" fill="{{ $themeColor ?? '#cc1111' }}"/>
                    <circle cx="58"  cy="68"  r="2.6" fill="{{ $themeColor ?? '#cc1111' }}"/>
                    <circle cx="74"  cy="68"  r="1.9" fill="{{ $themeColor ?? '#cc1111' }}"/>
                    <circle cx="10"  cy="52"  r="3.7" fill="{{ $themeColor ?? '#cc1111' }}"/>
                    <circle cx="26"  cy="52"  r="3.1" fill="{{ $themeColor ?? '#cc1111' }}"/>
                    <circle cx="42"  cy="52"  r="2.5" fill="{{ $themeColor ?? '#cc1111' }}"/>
                    <circle cx="58"  cy="52"  r="1.8" fill="{{ $themeColor ?? '#cc1111' }}"/>
                    <circle cx="10"  cy="36"  r="2.8" fill="{{ $themeColor ?? '#cc1111' }}"/>
                    <circle cx="26"  cy="36"  r="2.2" fill="{{ $themeColor ?? '#cc1111' }}"/>
                    <circle cx="42"  cy="36"  r="1.5" fill="{{ $themeColor ?? '#cc1111' }}"/>
                    <circle cx="10"  cy="20"  r="1.8" fill="{{ $themeColor ?? '#cc1111' }}"/>
                    <circle cx="26"  cy="20"  r="1.2" fill="{{ $themeColor ?? '#cc1111' }}"/>
                </g>
            </svg>
        </div>

        {{-- Halftone dot pattern – top right --}}
        <div class="dot-pattern-tr">
            <svg viewBox="0 0 110 110" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <radialGradient id="dotFadeTR9" cx="100%" cy="0%" r="100%">
                        <stop offset="0%"   stop-color="white" stop-opacity="1"/>
                        <stop offset="60%"  stop-color="white" stop-opacity="0.5"/>
                        <stop offset="100%" stop-color="white" stop-opacity="0"/>
                    </radialGradient>
                    <mask id="dotMaskTR9">
                        <rect width="110" height="110" fill="url(#dotFadeTR9)"/>
                    </mask>
                </defs>
                <g mask="url(#dotMaskTR9)">
                    <circle cx="100" cy="10"  r="5.5" fill="{{ $themeColor ?? '#cc1111' }}"/>
                    <circle cx="84"  cy="10"  r="5.0" fill="{{ $themeColor ?? '#cc1111' }}"/>
                    <circle cx="68"  cy="10"  r="4.5" fill="{{ $themeColor ?? '#cc1111' }}"/>
                    <circle cx="52"  cy="10"  r="4.0" fill="{{ $themeColor ?? '#cc1111' }}"/>
                    <circle cx="36"  cy="10"  r="3.2" fill="{{ $themeColor ?? '#cc1111' }}"/>
                    <circle cx="20"  cy="10"  r="2.4" fill="{{ $themeColor ?? '#cc1111' }}"/>
                    <circle cx="4"   cy="10"  r="1.6" fill="{{ $themeColor ?? '#cc1111' }}"/>
                    <circle cx="100" cy="26"  r="5.0" fill="{{ $themeColor ?? '#cc1111' }}"/>
                    <circle cx="84"  cy="26"  r="4.5" fill="{{ $themeColor ?? '#cc1111' }}"/>
                    <circle cx="68"  cy="26"  r="4.0" fill="{{ $themeColor ?? '#cc1111' }}"/>
                    <circle cx="52"  cy="26"  r="3.3" fill="{{ $themeColor ?? '#cc1111' }}"/>
                    <circle cx="36"  cy="26"  r="2.6" fill="{{ $themeColor ?? '#cc1111' }}"/>
                    <circle cx="20"  cy="26"  r="1.8" fill="{{ $themeColor ?? '#cc1111' }}"/>
                    <circle cx="100" cy="42"  r="4.4" fill="{{ $themeColor ?? '#cc1111' }}"/>
                    <circle cx="84"  cy="42"  r="3.9" fill="{{ $themeColor ?? '#cc1111' }}"/>
                    <circle cx="68"  cy="42"  r="3.3" fill="{{ $themeColor ?? '#cc1111' }}"/>
                    <circle cx="52"  cy="42"  r="2.6" fill="{{ $themeColor ?? '#cc1111' }}"/>
                    <circle cx="36"  cy="42"  r="1.9" fill="{{ $themeColor ?? '#cc1111' }}"/>
                    <circle cx="100" cy="58"  r="3.7" fill="{{ $themeColor ?? '#cc1111' }}"/>
                    <circle cx="84"  cy="58"  r="3.1" fill="{{ $themeColor ?? '#cc1111' }}"/>
                    <circle cx="68"  cy="58"  r="2.5" fill="{{ $themeColor ?? '#cc1111' }}"/>
                    <circle cx="52"  cy="58"  r="1.8" fill="{{ $themeColor ?? '#cc1111' }}"/>
                    <circle cx="100" cy="74"  r="2.8" fill="{{ $themeColor ?? '#cc1111' }}"/>
                    <circle cx="84"  cy="74"  r="2.2" fill="{{ $themeColor ?? '#cc1111' }}"/>
                    <circle cx="68"  cy="74"  r="1.5" fill="{{ $themeColor ?? '#cc1111' }}"/>
                    <circle cx="100" cy="90"  r="1.8" fill="{{ $themeColor ?? '#cc1111' }}"/>
                    <circle cx="84"  cy="90"  r="1.2" fill="{{ $themeColor ?? '#cc1111' }}"/>
                </g>
            </svg>
        </div>

        {{-- Logo box --}}
        <div class="d9-logo-box">
            @if(isset($logourl) && $logourl)
                <img src="{{ $logourl }}" alt="logo" crossorigin="anonymous">
            @else
                <img src="https://static.vecteezy.com/system/resources/thumbnails/014/664/003/small_2x/cafe-and-resto-logo-vector.jpg" alt="logo" crossorigin="anonymous">
            @endif
        </div>

        {{-- Heading: menu item name repeating stack --}}
        <div class="d9-heading-area">
            <span class="d9-txt-white">DELICIOUS </span>
            <span class="d9-txt-red">DELICIOUS</span>
            <span class="d9-txt-red">DELICIOUS</span>
            <span class="d9-txt-red">DELICIOUS</span>
            <span class="d9-txt-red">DELICIOUS</span>
            <span class="d9-txt-red">DELICIOUS</span>
            <span class="d9-txt-red">DELICIOUS</span>
        </div>

        {{-- Circular food plate --}}
        <div class="d9-plate-wrap">
            <div class="d9-plate-circle">
                @if(isset($menuImageUrl) && $menuImageUrl)
                    <img src="{{ $menuImageUrl }}" alt="{{ @$menu['name'] ?? 'Menu Item' }}" crossorigin="anonymous">
                @else
                    <img src="https://images.unsplash.com/photo-1544025162-d76694265947?w=700&q=85" crossorigin="anonymous" alt="Menu Item">
                @endif
            </div>
        </div>

        {{-- Dark bottom strip --}}
        <div class="d9-bottom-strip"></div>

        {{-- Bottom content --}}
        <div class="d9-bottom-content">
            <div class="d9-restaurant-label">{{ @user()->website_domain ?? ' ' }}</div>
            <div class="d9-red-line"></div>
            <div class="d9-delivery-label">Order Online</div>
            <div class="d9-phone-number">{{ @user()->name ?? ' ' }}</div>
            <div class="d9-website-url">{{ @user()->address ?? ' ' }} | {{ @user()->phone ?? ' ' }}</div>
        </div>

    </div>{{-- /.design9-card --}}

    {{-- Download button --}}
    <button type="button" class="d9-download-btn" onclick="downloadPoster9()">
        <i class="bi bi-download"></i>
        Download Poster
    </button> 

</div>{{-- /.design9-wrapper --}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

<script>
    function downloadDesign9() {
        var card   = document.getElementById('posterCard9');
        var button = document.querySelector('.d9-download-btn');

        button.innerHTML = '<i class="bi bi-hourglass-split"></i> Generating...';
        button.disabled  = true;

        var exportW = 1080;
        var scale   = exportW / card.offsetWidth;

        html2canvas(card, {
            scale: scale,
            backgroundColor: null,
            logging: false,
            useCORS: true,
            allowTaint: true,
            imageTimeout: 0,
            onclone: function (clonedDoc) {
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
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,300;1,400&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<style>

    /* ── Wrapper: fills modal column ── */
    .design3-wrapper {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        font-family: 'DM Sans', sans-serif;
    }

    /* ── Card: 4:5 Instagram ratio ──
       FIX: Replaced `aspect-ratio: 4/5` with the padding-top hack.
       padding-top: 125% = 5÷4 ratio, works in ALL headless renderers
       (wkhtmltoimage, older Puppeteer/WebKit) unlike aspect-ratio.
    ── */
    .design3-wrapper .design3-card {
        width: 100%;
        max-width: 340px;
        /* aspect-ratio: 4 / 5; ← REMOVED: breaks backend renderers */
        height: 0;                  /* FIX: collapse own height */
        padding-top: 125%;          /* FIX: 5÷4 = 125% → enforces 4:5 ratio */
        position: relative;         /* FIX: required for absolute children */
        border: none;
        background-color: {{ $bgColor ?? '#fffef9' }};
        box-shadow:
            0 0 0 1px rgba(180, 160, 130, 0.2),
            0 8px 32px rgba(0,0,0,0.07),
            0 2px 8px rgba(0,0,0,0.04);
        overflow: hidden;
        box-sizing: border-box;
    }

    /* Thin themed top border line */
    .design3-wrapper .design3-card::after {
        content: '';
        position: absolute;
        top: 0; left: 0; right: 0;
        height: 3px;
        background: linear-gradient(
            90deg,
            {{ $themeColor ?? '#b33a06' }} 0%,
            rgba(179, 58, 6, 0.15) 100%
        );
        z-index: 1;
    }

    /* ── Inner layout container ──
       FIX: Wraps all card content. Must be position:absolute and fill
       the padded card area so header + body + footer stack correctly.
       Previously the card itself was a flex column — now this div is.
    ── */
    .design3-wrapper .d3-inner {
        position: absolute;         /* FIX: fill the padded card box */
        inset: 0;                   /* FIX: top:0; right:0; bottom:0; left:0 */
        display: flex;
        flex-direction: column;
        width: 100%;
        height: 100%;
        box-sizing: border-box;
    }

    /* ── Header ── */
    .design3-wrapper .d3-header {
        background: transparent;
        padding: 0.7rem 1rem 0;
        display: flex;
        justify-content: space-between;
        align-items: center;
        position: relative;
        z-index: 2;
        flex-shrink: 0;             /* FIX: header must never compress */
    }

    .design3-wrapper .d3-logo img {
        width: 2rem;
        height: 2rem;
        border-radius: 50%;
        object-fit: cover;
        display: block;
        border: 2px solid {{ $themeColor ?? '#b72e37' }};
    }

    /* ── Body ── */
    .design3-wrapper .d3-body {
        flex: 1;
        padding: 0.5rem 1rem 0.4rem;
        position: relative;
        z-index: 2;
        display: flex;
        flex-direction: column;
        min-height: 0;              /* FIX: allows body to shrink in flex context */
    }

    /* ── Headings ── */
    .design3-wrapper .d3-heading1 {
        font-family: 'Cormorant Garamond', serif;
        font-style: italic;
        font-weight: 300;
        font-size: 0.75rem !important;
        color: {{ $footerFontcolor ?? '#b72e37' }};
        letter-spacing: 0.04em;
        margin-bottom: 2px;
        flex-shrink: 0;
    }

    .design3-wrapper .d3-heading2 {
        font-family: 'Cormorant Garamond', serif;
        font-weight: 600;
        font-size: 32px !important;
        line-height: 0.95;
        color: {{ $themeColor ?? '#b33a06' }};
        margin-bottom: 0.5rem;
        letter-spacing: -0.01em;
        flex-shrink: 0;
    }

    /* ── Divider ── */
    .design3-wrapper .d3-divider {
        height: 1px;
        background: linear-gradient(90deg, {{ $themeColor ?? '#b33a06' }} 0%, {{ $themeColor ?? '#b33a06' }} 60%);
        margin-bottom: 0.5rem;
        opacity: 0.4;
        flex-shrink: 0;             /* FIX: divider must never compress */
    }

    /* ── Description ── */
    .design3-wrapper .d3-description {
        margin-bottom: 0.4rem;
        flex-shrink: 0;
    }

    .design3-wrapper .d3-description p {
        font-size: 7px !important;
        font-weight: 400;
        text-transform: uppercase;
        color: {{ $footerFontcolor ?? '#b72e37' }};
        margin: 0;
        line-height: 1.6;
        word-break: break-word;
        overflow-wrap: break-word;
        white-space: normal;
    }

    /* ── Menu Image ──
       FIX: flex:1 + min-height:0 lets the image fill all remaining
       space between the fixed header/footer sections without overflow.
    ── */
    .design3-wrapper .d3-menu-image {
        flex: 1;
        min-height: 0;              /* FIX: allows flex child to shrink correctly */
        overflow: hidden;
        border-radius: 10px;
        margin-bottom: 0.4rem;
        position: relative;
    }

    .design3-wrapper .d3-menu-image img {
        width: 100%;
        height: 100%;               /* FIX: explicit 100% fills the flex container */
        object-fit: cover;
        object-position: center;
        display: block;
    }

    /* ── Order Button ── */
    .design3-wrapper .d3-order-now {
        flex-shrink: 0;             /* FIX: button must never compress */
        margin-bottom: 0.4rem;
    }

    .design3-wrapper .d3-order-btn {
        background: {{ $themeColor ?? '#b33a06' }};
        color: {{ $bgColor ?? '#fff' }};
        font-family: 'DM Sans', sans-serif;
        font-size: 0.55rem !important;
        font-weight: 600;
        letter-spacing: 0.12em;
        text-transform: uppercase;
        padding: 7px 14px;
        border-radius: 6px;
        border: none;
        width: 100%;
        cursor: default;
    }

    /* ── Restaurant Details ── */
    .design3-wrapper .d3-restaurant-details {
        text-align: center;
        flex-shrink: 0;             /* FIX: must never compress */
        padding-bottom: 0.2rem;
    }

    .design3-wrapper .d3-restaurant-name {
        font-family: 'DM Sans', sans-serif;
        font-size: 0.6rem !important;
        font-weight: 600;
        letter-spacing: 0.12em;
        text-transform: uppercase;
        color: {{ $footerFontcolor ?? '#b72e37' }};
        margin-bottom: 2px;
    }

    .design3-wrapper .d3-restaurant-address {
        font-size: 0.55rem !important;
        color: {{ $footerFontcolor ?? '#b72e37' }};
        font-weight: 300;
    }

    /* ── Footer ── */
    .design3-wrapper .d3-footer {
        border-top: 1px solid #e8e8e8;
        padding: 0.45rem 1rem;
        position: relative;
        z-index: 2;
        flex-shrink: 0;             /* FIX: footer must never compress */
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .design3-wrapper .d3-contact-number,
    .design3-wrapper .d3-website {
        font-size: 0.55rem !important;
        font-weight: 400;
        color: {{ $footerFontcolor ?? '#b72e37' }};
        display: flex;
        align-items: center;
        gap: 4px;
    }

    .design3-wrapper .d3-contact-number i,
    .design3-wrapper .d3-website i {
        color: {{ $themeColor ?? '#b33a06' }};
        font-size: 0.6rem;
    }

    /* ── Download Button ── */
    .design3-wrapper .d3-download-btn {
        margin-top: 10px;
        background-color: #111;
        color: #fff;
        border: none;
        padding: 8px 16px;
        font-size: 12px;
        font-weight: 600;
        border-radius: 8px;
        cursor: pointer;
        display: flex;
        align-items: center;
        gap: 8px;
        transition: all 0.25s ease;
        font-family: 'DM Sans', sans-serif;
        letter-spacing: 0.04em;
    }

    .design3-wrapper .d3-download-btn:hover {
        background-color: #222;
        transform: translateY(-1px);
    }

    .design3-wrapper .d3-download-btn:active {
        transform: translateY(0);
    }

</style>

<div class="design3-wrapper">

    <div class="design3-card" id="posterCard3">

        {{-- FIX: d3-inner wraps all content and fills the padded card area --}}
        <div class="d3-inner">

            {{-- Header --}}
            <div class="d3-header">
                @if(isset($logourl) && $logourl)
                <div class="d3-logo">
                        <img src="{{ $logourl }}" alt="logo-image" crossorigin="anonymous">
                </div>
                @endif
            </div>

            {{-- Body --}}
            <div class="d3-body">

                {{-- Headings --}}
                <div class="d3-heading1">Chef's Choice</div>
                @if(strlen(@$menu['name']) <= 20)
                <div class="d3-heading2">{{ @$menu['name'] }}</div>
                @endif

                {{-- Divider --}}
                <div class="d3-divider"></div>

                {{-- Description --}}
                <div class="d3-description">
                    <p>
                        {{ \Illuminate\Support\Str::limit($menu['description'] ?? '', 150, '...') }}
                    </p>
                </div>

                {{-- Menu Image --}}
                <div class="d3-menu-image">
                    @if(isset($menuImageUrl) && $menuImageUrl)
                        <img src="{{ $menuImageUrl }}" alt="food image" class="js-poster-menu-image">
                    @endif
                </div>

                {{-- Order Button --}}
                <div class="d3-order-now">
                    <button type="button" class="d3-order-btn">Order Now</button>
                </div>

                {{-- Restaurant Details --}}
                <div class="d3-restaurant-details">
                    <div class="d3-restaurant-name">{{ @user()->name ?? ' ' }}</div>
                    <div class="d3-restaurant-address">{{ @user()->address ?? ' ' }}</div>
                </div>

            </div>{{-- /.d3-body --}}

            {{-- Footer --}}
            <div class="d3-footer">
                <div class="d3-contact-number">
                    <i class="bi bi-telephone-fill"></i>
                    {{ @user()->phone ?? ' ' }}
                </div>
                <div class="d3-website">
                    <i class="bi bi-globe"></i>
                    {{ @user()->website_domain ?? ' ' }}
                </div>
            </div>

        </div>{{-- /.d3-inner --}}

    </div>{{-- /.design3-card --}}

    {{-- Download button --}}
    <!--<button type="button" class="d3-download-btn" onclick="downloadDesign3()">-->
    <!--    <i class="bi bi-download"></i>-->
    <!--    Download Poster-->
    <!--</button>-->

</div>{{-- /.design3-wrapper --}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

<script>
    function downloadDesign3() {
        var card   = document.getElementById('posterCard3');
        var button = document.querySelector('.d3-download-btn');

        button.innerHTML = '<i class="bi bi-hourglass-split"></i> Generating...';
        button.disabled  = true;

        var exportW = 1080;
        var scale   = exportW / card.offsetWidth;

        html2canvas(card, {
            scale: scale,
            backgroundColor: '#ffffff',
            logging: false,
            useCORS: true,
            allowTaint: false,
            imageTimeout: 15000,
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
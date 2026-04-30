<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton&family=Sacramento&display=swap" rel="stylesheet">

<style>

    /* ── Wrapper: fills modal column ── */
    .design2-wrapper {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        font-family: sans-serif;
    }

    /* ── Card: 4:5 Instagram ratio, fits inside column ── */
    .design2-wrapper .design2-card {
        width: 100%;
        aspect-ratio: 4 / 5;
        max-width: 340px;
        background: {{ $themeColor ?? '#b33a06' }};
        border: 1px solid #dadada;
        color: #fff;
        overflow: hidden;
        box-sizing: border-box;
        display: flex;
        flex-direction: column;
    }

    /* ── Card body ── */
    .design2-wrapper .d2-body {
        flex: 1;
        padding: 0.6rem 0.8rem 0.4rem;
        display: flex;
        flex-direction: column;
        min-height: 0;
    }

    /* ── Headings ── */
    .design2-wrapper .d2-headings {
        text-align: center;
        position: relative;
        flex-shrink: 0;
    }

    .design2-wrapper .d2-heading1 {
        font-family: "Anton", sans-serif;
        line-height: 1.1;
        color: {{ $bgColor ?? '#fff' }};
        font-size: 42px !important;
        text-transform: uppercase;
        /*margin-top: 0.4rem;*/
        margin: 0.2rem 0.5rem;
    }

    /* ── Description ── */
    .design2-wrapper .d2-description {
        text-align: center;
        margin: 0.3rem 0.5rem 0.4rem;
    }

    .design2-wrapper .d2-description p {
        font-size: 6px !important;
        font-weight: 400;
        text-transform: uppercase;
        color: {{ $footerFontcolor ?? '#b72e37' }};
        margin: 0;
        line-height: 1.6;
        word-break: break-word;
        overflow-wrap: break-word;
        white-space: normal;
    }

    /* ── Menu image ── */
    .design2-wrapper .d2-menu-image {
        flex: 1;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 0;
        padding: 0.3rem 0.5rem;
    }

    .design2-wrapper .d2-menu-image img {
        width: 80% !important;
        height: 100% !important;
        border-radius: 0.8rem;
        object-fit: cover;
        display: block;
        max-height: 160px;
    }

    /* ── Restaurant details band ── */
    .design2-wrapper .d2-restaurant-details-wrapper {
        position: relative;
        background: {{ $bgColor ?? '#fff' }};
        color: {{ $footerFontcolor ?? '#b72e37' }};
        text-align: center;
        padding-top: 2rem;
        padding-bottom: 0.5rem;
        border-top: 4px solid {{ $bgColor ?? '#fff' }};
        flex-shrink: 0;
    }

    /* ── Overlapping logo ── */
    .design2-wrapper .d2-logo {
        position: absolute;
        top: 0;
        left: 50%;
        transform: translate(-50%, -50%);
        background: {{ $bgColor ?? '#fff' }};
        border-radius: 50%;
        padding: 4px;
        z-index: 3;
    }

    .design2-wrapper .d2-logo img {
        width: 2.4rem !important;
        height: 2.4rem !important;
        border-radius: 50%;
        object-fit: cover;
        display: block;
    }

    .design2-wrapper .d2-restaurant-name {
        font-size: 0.65rem !important;
        font-weight: 700;
        padding-top: 0.2rem;
        color: {{ $footerFontcolor ?? '#b72e37' }};
    }

    .design2-wrapper .d2-restaurant-address {
        font-size: 0.6rem !important;
        padding-bottom: 0.3rem;
        color: {{ $footerFontcolor ?? '#b72e37' }};
    }

    /* ── Card footer ── */
    .design2-wrapper .d2-footer {
        color: {{ $footerFontcolor ?? '#b72e37' }};
        background: {{ $bgColor ?? '#fff' }};
        padding: 0.35rem 0.8rem;
        border-top: 1px solid {{ $themeColor ?? '#dee2e6' }};
        flex-shrink: 0;
    }

    .design2-wrapper .d2-footer-inner {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .design2-wrapper .d2-contact-number,
    .design2-wrapper .d2-website {
        font-weight: 200;
        font-size: 0.55rem !important;
        display: flex;
        align-items: center;
        gap: 4px;
        color: {{ $footerFontcolor ?? '#b72e37' }};
    }

    .design2-wrapper .icon {
        width: 11px;
        height: 11px;
        fill: currentColor;
        flex-shrink: 0;
    }

    /* ── Download button ── */
    .design2-wrapper .d2-download-btn {
        margin-top: 10px;
        background-color: #343a40;
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
        transition: all 0.3s ease;
    }

    .design2-wrapper .d2-download-btn:hover {
        background-color: #2a2d2f;
        transform: translateY(-1px);
    }

    .design2-wrapper .d2-download-btn:active {
        transform: translateY(0);
    }

</style>

<div class="design2-wrapper">

    <div class="design2-card" id="posterCard2">

        {{-- Body --}}
        <div class="d2-body">

            {{-- Heading --}}
            <div class="d2-headings">
                @if(strlen(@$menu['name']) <= 20)
                <div class="d2-heading1">{{ @$menu['name'] }}</div>
                @endif
            </div>

            {{-- Description --}}
            <div class="d2-description">
                <p>
                    {{ \Illuminate\Support\Str::limit($menu['description'] ?? '', 150, '...') }}
                </p>
                </div>

            {{-- Menu image --}}
            <div class="d2-menu-image">
                @if(isset($menuImageUrl) && $menuImageUrl)
                    <img src="{{ $menuImageUrl }}" alt="food image" class="js-poster-menu-image">
                @endif
            </div>

        </div>

        {{-- Restaurant details with overlapping logo --}}
        <div class="d2-restaurant-details-wrapper">
            <div class="d2-logo">
                @if(isset($logourl) && $logourl)
                    <img src="{{ $logourl }}" alt="logo" crossorigin="anonymous">
                @endif
            </div>
            <div class="d2-restaurant-name">{{ @user()->name ?? ' ' }}</div>
            <div class="d2-restaurant-address">{{ @user()->address ?? ' ' }}</div>
        </div>

        {{-- Footer --}}
        <div class="d2-footer">
            <div class="d2-footer-inner">
                <div class="d2-contact-number">
                    <svg class="icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58z"/>
                    </svg>
                    {{ @user()->phone ?? ' ' }}
                </div>
                <div class="d2-website">
                    <svg class="icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m7.5-6.923c-.67.204-1.335.82-1.887 1.855A8 8 0 0 0 5.145 4H7.5zM4.09 4a9.3 9.3 0 0 1 .64-1.539 7 7 0 0 1 .597-.933A7.03 7.03 0 0 0 2.255 4zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a7 7 0 0 0-.656 2.5zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5zM8.5 5v2.5h2.99a12.5 12.5 0 0 0-.337-2.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5zM5.145 12q.208.58.468 1.068c.552 1.035 1.218 1.65 1.887 1.855V12zm.182 2.472a7 7 0 0 1-.597-.933A9.3 9.3 0 0 1 4.09 12H2.255a7 7 0 0 0 3.072 2.472M3.82 11a13.7 13.7 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5zm6.853 3.472A7 7 0 0 0 13.745 12H11.91a9.3 9.3 0 0 1-.64 1.539 7 7 0 0 1-.597.933M8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855q.26-.487.468-1.068zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.7 13.7 0 0 1-.312 2.5m2.802-3.5a7 7 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7 7 0 0 0-3.072-2.472c.218.284.418.598.597.933M10.855 4a8 8 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4z"/>
                    </svg>
                    {{ @user()->website_domain ?? ' ' }}
                </div>
            </div>
        </div>

    </div>{{-- /.design2-card --}}

    {{-- Download button --}}
    
  <!--<button type="button" class="d2-download-btn" onclick="downloadDesign2()">-->
  <!--      <i class="bi bi-download"></i>-->
  <!--      Download Poster-->
  <!--  </button>-->

</div>{{-- /.design2-wrapper --}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

<script>
    function downloadDesign2() {
        var card   = document.getElementById('posterCard2');
        var button = document.querySelector('.d2-download-btn');

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
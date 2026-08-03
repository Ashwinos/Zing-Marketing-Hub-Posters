<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;0,900;1,400&family=Poppins:wght@300;400;600;700&display=swap"
    rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<style>
    /* ── Wrapper: fills modal column ── */
    .design5-wrapper {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        font-family: 'Poppins', sans-serif;
    }

    /* ── Card: 4:5 Instagram ratio ── */
    .design5-wrapper .design5-card {
        width: 100%;
        aspect-ratio: 4 / 5;
        max-width: 340px;
        background-color: {{ $themeColor ?? '#1a1a2e' }};
        border: none;
        overflow: hidden;
        display: flex;
        flex-direction: column;
        position: relative;
        box-sizing: border-box;
    }

    /* ── SVG texture ── */
    .design5-wrapper .d5-texture {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        z-index: 0;
        pointer-events: none;
        overflow: hidden;
    }

    .design5-wrapper .d5-texture img {
        width: 100%;
        height: 100%;
        display: block;
        opacity: 0.5;
    }

    /* ── Content layer ── */
    .design5-wrapper .d5-content {
        position: relative;
        z-index: 1;
        display: flex;
        flex-direction: column;
        flex: 1;
        width: 100%;
        height: 100%;
    }

    /* ── Header ── */
    .design5-wrapper .d5-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0.55rem 0.75rem 0.3rem;
    }

    .design5-wrapper .d5-logo-area {
        display: flex;
        align-items: center;
        gap: 0.45rem;
    }

    .design5-wrapper .d5-logo {
        width: auto;
        height: 2rem;
        flex-shrink: 0;
    }

    .design5-wrapper .d5-logo img {
        width: 100%;
        height: 100%;
        /* object-fit: cover; */
        /* border-radius: 50%;
        border: 1.5px solid {{ $bgColor ?? '#e2b96f' }}; */
        display: block;
    }

    .design5-wrapper .d5-restaurant-name {
        font-size: 0.56rem;
        font-weight: 700;
        color: {{ $bgColor ?? '#e2b96f' }};
        text-transform: uppercase;
        letter-spacing: 0.04em;
        text-align: start !important;
    }

    .design5-wrapper .d5-restaurant-address {
        font-size: 0.42rem;
        font-weight: 400;
        color: {{ $footerFontcolor ?? '#b72e37' }};
        text-transform: uppercase;
        letter-spacing: 0.03em;
    }

    /* ── Top tag ── */
    .design5-wrapper .d5-top-tag {
        display: flex;
        align-items: center;
    }

    .design5-wrapper .top-tag-text {
        background: rgba(13, 12, 16, 0.85);
        color: {{ $bgColor ?? '#e2b96f' }};
        font-size: 6px;
        font-weight: 700;
        text-transform: uppercase;
        padding: 5px 9px;
        border-radius: 10px;
        letter-spacing: 0.04em;
        display: flex;
        align-items: center;
        gap: 3px;
    }

    .design5-wrapper .top-tag-icon {
        font-size: 8px;
        line-height: 1;
    }

    /* ── Title section ── */
    .design5-wrapper .d5-title-section {
        text-align: center;
        padding: 0.15rem 0 0.1rem;
    }

    .design5-wrapper .d5-subtitle {
        font-family: 'Playfair Display', serif;
        font-size: 45px;
        font-style: italic;
        color: {{ $bgColor ?? '#e2b96f' }};
        line-height: 1.3;
    }

    .design5-wrapper .d5-menu-name {
        font-family: 'Playfair Display', serif;
        font-size: 26px;
        font-weight: 900;
        color: #fff;
        text-transform: uppercase;
        line-height: 1.15;
        letter-spacing: 0.02em;
    }

    /* ── Divider ── */
    .design5-wrapper .d5-divider {
        display: flex;
        align-items: center;
        gap: 6px;
        padding: 0.2rem 0.75rem;
    }

    .design5-wrapper .d5-divider-line {
        flex: 1;
        height: 1px;
        background: {{ $bgColor ?? '#e2b96f' }};
        opacity: 0.7;
    }

    .design5-wrapper .d5-divider-dot {
        width: 4px;
        height: 4px;
        border-radius: 50%;
        background: {{ $bgColor ?? '#e2b96f' }};
        flex-shrink: 0;
    }

    /* ── Menu image ── */
    .design5-wrapper .d5-menu-image {
        flex: 1;
        margin: 0.6rem 0.75rem;
        border-radius: 10px;
        overflow: hidden;
        position: relative;
        min-height: 0;
    }

    .design5-wrapper .d5-menu-img-bg {
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        border-radius: 10px;
    }

    .design5-wrapper .d5-menu-img-bg img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    /* ── Price / Order badge ── */
    .design5-wrapper .d5-price-badge {
        position: absolute;
        top: 8px;
        right: 8px;
        background: {{ $themeColor ?? '#e2b96f' }};
        color: {{ $bgColor ?? '#e2b96f' }};
        font-size: 6px;
        padding: 4px 10px;
        border-radius: 50px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.05em;
    }

    /* ── Description ── */
    .design5-wrapper .d5-description {
        text-align: center;
        padding: 0.2rem 1rem 0.25rem;
    }

    .design5-wrapper .d5-description p {
        font-size: 8px;
        color: rgba(255, 255, 255, 0.55);
        line-height: 1.5;
    }

    /* ── Footer ── */
    .design5-wrapper .d5-footer {
        padding: 0.45rem 1rem;
        border-top: 1px solid rgba(255, 255, 255, 0.1);
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .design5-wrapper .d5-contact,
    .design5-wrapper .d5-website {
        font-size: 0.46rem;
        color: {{ $footerFontcolor ?? '#b72e37' }};
        display: flex;
        align-items: center;
        gap: 3px;
    }

    /* ── Download button ── */
    .design5-wrapper .d5-download-btn {
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

    .design5-wrapper .d5-download-btn:hover {
        background-color: #2a2d2f;
        transform: translateY(-1px);
    }

    .design5-wrapper .d5-download-btn:active {
        transform: translateY(0);
    }
</style>

<div class="design5-wrapper">

    <div class="design5-card" id="posterCard5">

        {{-- SVG Texture Background --}}
        <div class="d5-texture">
            <img src="{{ asset('svg/bg-design5.svg') }}" alt="">

        </div>

        <div class="d5-content">

            {{-- Header --}}
            <div class="d5-header">
                <div class="d5-logo-area">
                    @if (isset($logourl) && $logourl)
                        <div class="d5-logo">
                            <img src="{{ $logourl }}" alt="logo" crossorigin="anonymous">
                        </div>
                    @endif
                    <div>
                        <div class="d5-restaurant-name">
                            {{ @user()->name ?? ' ' }}
                        </div>
                        <div class="d5-restaurant-address">
                            {{ @user()->address ?? ' ' }}
                        </div>
                    </div>
                </div>
                <!--<div class="d5-top-tag">-->
                <!--    <span class="top-tag-text">-->
                <!--        <span class="top-tag-icon">★</span> Popular-->
                <!--    </span>-->
                <!--</div>-->
            </div>

            {{-- Title --}}
            <div class="d5-title-section">
                <div class="d5-subtitle">Delicious</div>
                <!--@if (strlen(@$menu['name']) <= 20)
-->
                <!--    <div class="d5-menu-name">{{ @$menu['name'] }}</div>-->
                <!--
@endif-->
            </div>

            {{-- Divider --}}
            <div class="d5-divider">
                <div class="d5-divider-line"></div>
                <div class="d5-divider-dot"></div>
                <div class="d5-divider-line"></div>
            </div>

            {{-- Menu Image --}}
            <div class="d5-menu-image">
                @if (isset($menuImageUrl) && $menuImageUrl)
                    <div class="d5-menu-img-bg js-poster-menu-image"
                        style="background-image: url('{{ $menuImageUrl }}')"></div>
                @endif
                <div class="d5-price-badge">Order Now</div>
            </div>

            {{-- Description --}}
            <!--@if (!empty($menu['description']))
-->
            <!--    <div class="d5-description">-->
            <!--        <p>{{ \Illuminate\Support\Str::limit($menu['description'] ?? '', 150, '...') }}</p>-->
            <!--    </div>-->
            <!--
@endif-->

            {{-- Footer --}}
            <div class="d5-footer">
                @if(!empty(@user()->phone))
                    <div class="d5-contact">
                        <i class="bi bi-telephone-fill"></i>
                        {{ @user()->phone }}
                    </div>
                @endif

                @if(!empty(@user()->website_domain))
                    <div class="d5-website">
                        <i class="bi bi-globe"></i>
                        {{ @user()->website_domain }}
                    </div>
                @endif
            </div>

        </div>{{-- /.d5-content --}}

    </div>{{-- /.design5-card --}}

    {{-- Download button --}}
    {{-- <button type="button" class="d5-download-btn" onclick="downloadDesign5()">
        <i class="bi bi-download"></i>
        Download Poster
    </button> --}}

</div>{{-- /.design5-wrapper --}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

<script>
    function downloadDesign5() {
        var card = document.getElementById('posterCard5');
        var button = document.querySelector('.d5-download-btn');

        button.innerHTML = '<i class="bi bi-hourglass-split"></i> Generating...';
        button.disabled = true;

        var exportW = 1080;
        var scale = exportW / card.offsetWidth;

        html2canvas(card, {
            scale: scale,
            backgroundColor: null,
            logging: false,
            useCORS: true,
            allowTaint: true,
            imageTimeout: 0,
            onclone: function(clonedDoc) {
                var images = clonedDoc.querySelectorAll('img');
                return Promise.all(Array.from(images).map(function(img) {
                    return new Promise(function(resolve) {
                        if (img.complete) {
                            resolve();
                        } else {
                            img.onload = resolve;
                            img.onerror = resolve;
                        }
                    });
                }));
            }
        }).then(function(canvas) {
            var link = document.createElement('a');
            link.download = 'menu-poster-instagram.png';
            link.href = canvas.toDataURL('image/png', 1.0);
            link.click();

            button.innerHTML = '<i class="bi bi-download"></i> Download Poster';
            button.disabled = false;
        }).catch(function(error) {
            console.error('Error generating image:', error);
            alert('Failed to generate image. Please try again.');
            button.innerHTML = '<i class="bi bi-download"></i> Download Poster';
            button.disabled = false;
        });
    }
</script>

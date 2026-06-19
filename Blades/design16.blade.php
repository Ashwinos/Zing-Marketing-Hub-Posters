<link
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;800;900&family=Dancing+Script:wght@600;700&display=swap"
    rel="stylesheet">

<style>
    .design16-wrapper {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        font-family: 'Montserrat', sans-serif;
    }

    /* ── Card: Instagram 4:5 ratio ── */
    .design16-wrapper .design16-card {
        width: 100%;
        aspect-ratio: 4 / 5;
        max-width: 340px;
        background: #f1ede7;
        /*border-radius: 10px;*/
        overflow: hidden;
        position: relative;
        box-sizing: border-box;
        box-shadow: 0 16px 50px rgba(0, 0, 0, 0.22);
        container-type: inline-size;
        text-align: start !important;
    }

    /* texture */
    .design16-wrapper .design16-card::before {
        content: "";
        position: absolute;
        inset: 0;
        background-image: repeating-linear-gradient(-60deg,
                transparent,
                transparent 22px,
                rgba(0, 0, 0, 0.03) 22px,
                rgba(0, 0, 0, 0.03) 23px);
        z-index: 0;
        pointer-events: none;
    }

    /* ── BRAND ── */
    .design16-wrapper .d16-brand {
        position: relative;
        z-index: 5;
        display: flex;
        align-items: center;
        justify-content: flex-start;
        gap: 8px;
        padding-top: 5cqw;
        padding-left: 7cqw;
        color: #555;
        font-size: 2.5cqw;
        font-weight: 700;
        letter-spacing: 1px;
        text-transform: uppercase;
    }

    .design16-wrapper .d16-brand img {
        width: auto;
        height: 2rem;
        /* border-radius: 50%; */
        object-fit: cover;
        display: block;
    }

    /* ── HEADLINE ── */
    .design16-wrapper .d16-headline-wrap {
        position: relative;
        z-index: 5;
        padding: 5.5cqw 7.5cqw;
    }

    .design16-wrapper .d16-headline {
        font-family: 'Montserrat', sans-serif;
        font-size: 13.5cqw;
        line-height: 0.95;
        font-weight: 900;
        color: {{ $themeColor ?? '#8cc63f' }};
        margin-bottom: 3.5cqw;

    }

    .design16-wrapper .d16-subheadline {
        font-size: 3.3cqw !important;
        font-weight: 800 !important;
        letter-spacing: 4px !important;
        color: #333 !important;
    }

    /* ── GREEN BANNER ── */
    .design16-wrapper .d16-banner {
        position: absolute;
        bottom: 66px;
        left: 0;
        width: 100%;
        height: 136px;
        z-index: 4;
    }

    .design16-wrapper .d16-banner-bg {
        position: absolute;
        left: 6cqw;
        right: 18cqw;
        top: 0;
        bottom: 0;
        background: {{ $themeColor ?? '#8cc63f' }};
        border-radius: 21cqw 0 0 0;
    }

    /* order button */
    .design16-wrapper .d16-order-btn {
        position: absolute;
        top: 6.5cqw;
        left: 11.5cqw;
        border: 1px solid rgba(255, 255, 255, 0.9);
        border-radius: 30px;
        padding: 2cqw 5cqw;
        color: #fff;
        font-family: 'Dancing Script', cursive;
        font-size: 4.5cqw;
        font-weight: 700;
    }

    /* location */
    .design16-wrapper .d16-location {
        position: absolute;
        top: 21.5cqw;
        left: 10cqw;
        display: flex;
        align-items: flex-start;
        gap: 6px;
        color: #fff;
        font-size: 2.5cqw;
        line-height: 1.5;
        max-width: 114px;
    }

    .design16-wrapper .d16-location svg {
        width: 3.5cqw;
        height: 3.5cqw;
        fill: #fff;
        flex-shrink: 0;
        margin-top: 2px;
    }

    /* ── FOOD IMAGE ── */
    .design16-wrapper .d16-food-wrap {
        position: absolute;
        bottom: 53px;
        right: -12px;
        width: 207px;
        height: 207px;
        border-radius: 50%;
        overflow: hidden;
        z-index: 8;
        box-shadow: -4px 4px 22px rgba(0, 0, 0, 0.25);
    }

    .design16-wrapper .d16-food-wrap img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    /* ── FOOTER ── */
    .design16-wrapper .d16-footer {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 13.5cqw;
        background: {{ $themeColor ?? '#8cc63f' }};
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 5cqw;
        z-index: 10;
    }

    .design16-wrapper .d16-footer-item {
        display: flex;
        align-items: center;
        gap: 6px;
        color: #fff;
        font-size: 2.5cqw;
        font-weight: 600;
    }

    .design16-wrapper .d16-footer-item svg {
        width: 3.5cqw;
        height: 3.5cqw;
        fill: #fff;
    }

    .design16-wrapper .d16-divider {
        width: 1px;
        height: 6cqw;
        background: rgba(255, 255, 255, 0.25);
    }

    /* ── Download button ── */
    .design16-wrapper .d16-download-btn {
        margin-top: 10px;
        background: {{ $themeColor ?? '#8cc63f' }};
        color: #fff;
        border: none;
        padding: 8px 16px;
        font-size: 12px;
        font-weight: 700;
        border-radius: 30px;
        cursor: pointer;
        font-family: 'Montserrat', sans-serif;
        display: flex;
        align-items: center;
        gap: 8px;
        letter-spacing: 0.04em;
        transition: opacity 0.2s, transform 0.15s;
        box-shadow: 0 4px 16px rgba(47, 129, 25, 0.4);
    }

    .design16-wrapper .d16-download-btn:hover {
        opacity: .88;
        transform: translateY(-2px);
    }

    .design16-wrapper .d16-download-btn:active {
        transform: translateY(0);
    }

    .design16-wrapper .d16-download-btn:disabled {
        opacity: 0.5;
        cursor: not-allowed;
        transform: none;
    }
</style>

<div class="design16-wrapper">

    <div class="design16-card" id="posterCard16">

        {{-- BRAND --}}
        <div class="d16-brand">
            @if (isset($logourl) && $logourl)
                <img src="{{ $logourl }}" alt="logo" crossorigin="anonymous">
            @endif
            | {{ @user()->name ?? ' ' }}
        </div>

        {{-- HEADLINE --}}
        <div class="d16-headline-wrap">
            <div class="d16-headline">
                Deeply<br>
                Satisfying
            </div>
            <div class="d16-subheadline">FAN FAVORITE</div>
        </div>

        {{-- GREEN BANNER --}}
        <div class="d16-banner">
            <div class="d16-banner-bg"></div>
            <div class="d16-order-btn">Order now</div>
            <div class="d16-location">
                <svg viewBox="0 0 24 24">
                    <path
                        d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5S10.62 6.5 12 6.5s2.5 1.12 2.5 2.5S13.38 11.5 12 11.5z" />
                </svg>
                {{ @user()->address ?? ' ' }}
            </div>
        </div>

        {{-- FOOD IMAGE --}}
        <div class="d16-food-wrap">
            @if (isset($menuImageUrl) && $menuImageUrl)
                <img src="{{ $menuImageUrl }}" alt="{{ @$menu['name'] ?? 'Menu Item' }}" class="js-poster-menu-image"
                    crossorigin="anonymous">
            @endif
        </div>

        {{-- FOOTER --}}
        <div class="d16-footer">

            <div class="d16-footer-item">
                <svg viewBox="0 0 24 24">
                    <path
                        d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z" />
                </svg>
                {{ @user()->website_domain ?? ' ' }}
            </div>

            <div class="d16-divider"></div>

            <div class="d16-footer-item">
                <svg viewBox="0 0 24 24">
                    <path
                        d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1C10.33 21 3 13.67 3 4c0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.24 1.02l-2.21 2.2z" />
                </svg>
                {{ @user()->phone ?? ' ' }}
            </div>

        </div>{{-- /.d16-footer --}}

    </div>{{-- /.design16-card --}}

    {{-- Download button --}}
    {{-- <button type="button" class="d16-download-btn" onclick="downloadDesign16()">
        Download Poster
    </button> --}}

</div>{{-- /.design16-wrapper --}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

<script>
    function downloadDesign16() {
        var card = document.getElementById('posterCard16');
        var button = document.querySelector('.d16-download-btn');

        button.innerHTML = 'Generating...';
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
            link.download = 'menu-poster-design16.png';
            link.href = canvas.toDataURL('image/png', 1.0);
            link.click();

            button.innerHTML = 'Download Poster';
            button.disabled = false;
        }).catch(function(error) {
            console.error('Error generating image:', error);
            alert('Failed to generate image. Please try again.');
            button.innerHTML = 'Download Poster';
            button.disabled = false;
        });
    }
</script>

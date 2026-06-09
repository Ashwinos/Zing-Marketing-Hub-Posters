<link
    href="https://fonts.googleapis.com/css2?family=Anton&family=Lato:wght@400;700;900&family=Dancing+Script:wght@700&family=Playfair+Display:wght@700;900&family=Chelsea+Market&display=swap"
    rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Water+Brush&display=swap" rel="stylesheet">

<style>
    .design24-wrapper {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        font-family: 'Lato', sans-serif;
    }

    .design24-wrapper .design24-card {
        width: 100%;
        max-width: 340px;
        aspect-ratio: 4/5;
        background: #fdf0d5;
        overflow: hidden;
        position: relative;
        box-sizing: border-box;
        box-shadow: 0 20px 60px rgba(0,0,0,0.18);
        container-type: inline-size;
        display: flex;
        flex-direction: column;
    }

    /* ══ TOP SECTION (cream bg) ══ */
    .design24-wrapper .d24-top {
        flex: 0 0 62cqw;
        position: relative;
        overflow: visible;
        background-color: #fdf0d5;
        background-image:
            url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='300'%3E%3Cfilter id='t'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.65' numOctaves='4' stitchTiles='stitch'/%3E%3CfeColorMatrix type='saturate' values='0'/%3E%3CfeBlend in='SourceGraphic' mode='multiply'/%3E%3C/filter%3E%3Crect width='300' height='300' filter='url(%23t)' opacity='0.055'/%3E%3C/svg%3E"),
            linear-gradient(155deg, #fef6e0 0%, #fdecd0 50%, #fce4b8 100%);
    }

    /* ── LOGO top-left ── */
    .design24-wrapper .d24-logo-area {
        position: absolute;
        top: 4cqw;
        left: 5cqw;
        z-index: 10;
        display: flex;
        align-items: center;
    }

    .design24-wrapper .d24-logo-img {
        height: 2rem;
        width: auto;
        display: block;
    }

    .design24-wrapper .d24-logo-text {
        font-family: 'Anton', sans-serif;
        font-size: 5cqw;
        color: #1a1a1a;
        letter-spacing: 1px;
        line-height: 1;
    }

    /* ── "New Menu!" badge top-right ── */
    .design24-wrapper .d24-new-badge {
        position: absolute;
        top: 3cqw;
        right: 4cqw;
        z-index: 10;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .design24-wrapper .d24-new-badge-text {
        font-family: 'Dancing Script', cursive;
        font-size: 4.5cqw;
        font-weight: 700;
        color: #cc2222;
        line-height: 1.1;
        white-space: nowrap;
    }

    .design24-wrapper .d24-new-badge-line {
        width: 100%;
        height: 2px;
        background: #cc2222;
        border-radius: 2px;
        margin-top: 0.5cqw;
        position: relative;
    }

    /* curved swoosh underline via SVG */
    .design24-wrapper .d24-swoosh {
        position: absolute;
        top: 3cqw;
        right: 3cqw;
        z-index: 10;
        width: 22cqw;
        height: 10cqw;
    }

    /* ── DECORATIVE SPLATS (dark brown blobs) ── */
    .design24-wrapper .d24-splat {
        position: absolute;
        z-index: 2;
        pointer-events: none;
        border-radius: 50%;
        background: #2b1505;
    }

    /* top-left splat */
    .design24-wrapper .d24-splat-tl {
        top: 30cqw;
        left: 2cqw;
        width: 5cqw;
        height: 3.5cqw;
        border-radius: 60% 40% 55% 45%;
        transform: rotate(-20deg);
    }

    /* top-right splat */
    .design24-wrapper .d24-splat-tr {
        top: 24cqw;
        right: 3cqw;
        width: 4cqw;
        height: 3cqw;
        border-radius: 50% 60% 40% 55%;
        transform: rotate(30deg);
    }

    /* mid-left splat */
    .design24-wrapper .d24-splat-ml {
        top: 43cqw;
        left: 5cqw;
        width: 3cqw;
        height: 2cqw;
        border-radius: 55% 45% 50% 50%;
        transform: rotate(10deg);
    }

    /* mid-right tiny splat */
    .design24-wrapper .d24-splat-mr {
        top: 48cqw;
        right: 6cqw;
        width: 2.5cqw;
        height: 1.8cqw;
        border-radius: 50%;
        transform: rotate(-15deg);
    }

    /* orange organic blob bottom-right */
    .design24-wrapper .d24-blob-orange {
        position: absolute;
        bottom: -4cqw;
        left: 7cqw;
        width: 16cqw;
        height: 14cqw;
        background: #f0a500;
        border-radius: 60% 40% 55% 45% / 50% 55% 45% 50%;
        z-index: 2;
        pointer-events: none;
        opacity: 0.9;
    }

    /* ── CIRCULAR FOOD IMAGE ── */
    .design24-wrapper .d24-food-circle-wrap {
        position: absolute;
        top: 3px;
        right: -30px;
        z-index: 5;
        width: 70cqw;
        height: 70cqw;
    }

    /* Outer orange ring */
    .design24-wrapper .d24-food-ring-outer {
        position: absolute;
        inset: 0;
        border-radius: 50%;
        border: 3cqw solid #f0a500;
        z-index: 5;
    }

    /* Food image clipped to circle */
    .design24-wrapper .d24-food-circle {
        position: absolute;
        inset: 3cqw;
        border-radius: 50%;
        overflow: hidden;
        z-index: 4;
        background: #c8a060;
    }

    .design24-wrapper .d24-food-circle img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        display: block;
    }

    .design24-wrapper .d24-food-placeholder {
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, #c8a060 0%, #8a5a20 100%);
    }

    /* ── PRICE BADGE (red circle, top-left of food) ── */
    .design24-wrapper .d24-price-badge {
        position: absolute;
        top: 8cqw;
        left: 4cqw;
        z-index: 8;
        width: 18cqw;
        height: 18cqw;
        border-radius: 50%;
        background: #cc1f1f;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        box-shadow: 0 3px 10px rgba(0,0,0,0.25);
    }

    .design24-wrapper .d24-price-only {
        font-size: 2.2cqw;
        font-weight: 700;
        color: rgba(255,255,255,0.9);
        letter-spacing: 0.5px;
        line-height: 1;
        margin-bottom: 0.3cqw;
        font-family: 'Lato', sans-serif;
    }

    .design24-wrapper .d24-price-val {
        font-family: 'Anton', sans-serif;
        font-size: 7cqw;
        color: #fff;
        line-height: 1;
        letter-spacing: 0;
    }

    /* ══ DARK BROWN BAND ══ */
    .design24-wrapper .d24-brown-band {
        flex: 0 0 28cqw;
        position: relative;
        z-index: 3;
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding: 3cqw 5cqw 2cqw;
        overflow: hidden;
        background-color: #3a1a05;
        background-image:
            url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='300'%3E%3Cfilter id='t'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.7' numOctaves='4' stitchTiles='stitch'/%3E%3CfeColorMatrix type='saturate' values='0'/%3E%3CfeBlend in='SourceGraphic' mode='overlay'/%3E%3C/filter%3E%3Crect width='300' height='300' filter='url(%23t)' opacity='0.07'/%3E%3C/svg%3E");
    }

    .design24-wrapper .d24-band-wave {
        position: absolute;
        top: -3cqw;
        left: 0;
        right: 0;
        height: 6cqw;
        background: #3a1a05;
        border-radius: 50% 50% 0 0 / 100% 100% 0 0;
    }

    .design24-wrapper .d24-item-name-bold {
        font-family: 'Playfair Display', serif;
        font-size: 7.5cqw;
        font-weight: 900;
        color: #f5c842;
        line-height: 1.05;
        margin: 0;
        letter-spacing: 0;
    }

    /* ── MENU NAME: Chelsea Market ── */
    .design24-wrapper .d24-item-name-script {
         font-family: "Water Brush", cursive;
        font-size: 8.5cqw;
        font-weight: 400;
        color: #f5c842;
        line-height: 1.05;
        margin: 0;
        letter-spacing: 0.5px;
    }

    .design24-wrapper .d24-desc {
        font-size: 8px;
        color: rgba(255,255,255,0.5);
        line-height: 1.55;
        margin: 1.5cqw 0 0;
        font-weight: 400;
    }

    /* ══ FOOTER (cream strip) ══ */
    .design24-wrapper .d24-footer {
        flex: 1;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 2cqw 5cqw;
        position: relative;
        overflow: hidden;
        min-height: 0;
        background-color: #fdf0d5;
        background-image:
            url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='300'%3E%3Cfilter id='t'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.65' numOctaves='4' stitchTiles='stitch'/%3E%3CfeColorMatrix type='saturate' values='0'/%3E%3CfeBlend in='SourceGraphic' mode='multiply'/%3E%3C/filter%3E%3Crect width='300' height='300' filter='url(%23t)' opacity='0.05'/%3E%3C/svg%3E"),
            linear-gradient(90deg, #fef6e0 0%, #fdecd0 100%);
        border-top: 1px solid rgba(0,0,0,0.06);
    }

    /* yellow brush stroke behind left content */
    .design24-wrapper .d24-brush {
        position: absolute;
        left: 3cqw;
        top: 50%;
        transform: translateY(-50%);
        width: 45cqw;
        height: 60%;
        background: #f5c842;
        border-radius: 2px 30px 30px 2px;
        opacity: 0.35;
        z-index: 0;
        clip-path: polygon(0 20%, 100% 0%, 100% 80%, 0% 100%);
    }

    .design24-wrapper .d24-footer-left {
        display: flex;
        align-items: center;
        gap: 2cqw;
        z-index: 1;
        position: relative;
    }

    /* orange circle phone icon */
    .design24-wrapper .d24-phone-circle {
        width: 9cqw;
        height: 9cqw;
        border-radius: 50%;
        background: #f0a500;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .design24-wrapper .d24-phone-circle svg {
        width: 4.5cqw;
        height: 4.5cqw;
        fill: #fff;
    }

    .design24-wrapper .d24-delivery-label {
        font-size: 1.8cqw;
        font-weight: 700;
        color: #3a1a05;
        letter-spacing: 0.5px;
        text-transform: uppercase;
        line-height: 1;
        margin-bottom: 0.5cqw;
    }

    .design24-wrapper .d24-phone-num {
        font-family: 'Anton', sans-serif;
        font-size: 4.5cqw;
        color: #1a1a1a;
        letter-spacing: 0.5px;
        line-height: 1;
    }

    /* right side: restaurant info */
    .design24-wrapper .d24-footer-right {
        text-align: right;
        z-index: 1;
        position: relative;
    }

    .design24-wrapper .d24-rest-name {
        font-size: 2.5cqw;
        font-weight: 900;
        color: #1a1a1a;
        line-height: 1;
        margin-bottom: 0.5cqw;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        max-width: 32cqw;
    }

    .design24-wrapper .d24-rest-address {
        font-size: 1.8cqw;
        color: #666;
        line-height: 1.4;
        max-width: 32cqw;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .design24-wrapper .d24-rest-web {
        font-size: 1.8cqw;
        color: #666;
        line-height: 1.2;
        white-space: nowrap;
    }

    /* download btn */
    .design24-wrapper .d24-download-btn {
        margin-top: 10px;
        background: #f0a500;
        color: #fff;
        border: none;
        padding: 8px 16px;
        font-size: 12px;
        font-weight: 700;
        border-radius: 30px;
        cursor: pointer;
        font-family: 'Lato', sans-serif;
        display: flex;
        align-items: center;
        gap: 8px;
        letter-spacing: 0.04em;
        transition: opacity 0.2s, transform 0.15s;
        box-shadow: 0 4px 16px rgba(0,0,0,0.2);
    }
    .design24-wrapper .d24-download-btn:hover  { opacity:.88; transform:translateY(-2px); }
    .design24-wrapper .d24-download-btn:active  { transform:translateY(0); }
    .design24-wrapper .d24-download-btn:disabled{ opacity:.5; cursor:not-allowed; transform:none; }
</style>

<div class="design24-wrapper">
    <div class="design24-card" id="posterCard24">

        {{-- ══ TOP CREAM SECTION ══ --}}
        <div class="d24-top">

            {{-- LOGO --}}
            <div class="d24-logo-area">
                @if (isset($logourl) && $logourl)
                    <img src="{{ $logourl }}" alt="logo" class="d24-logo-img" crossorigin="anonymous">
                
                @endif
            </div>

            {{-- NEW MENU BADGE --}}
            <div class="d24-swoosh">
                
            </div>

            {{-- DECORATIVE SPLATS --}}
            <div class="d24-splat d24-splat-tl"></div>
            <div class="d24-splat d24-splat-tr"></div>
            <div class="d24-splat d24-splat-ml"></div>
            <div class="d24-splat d24-splat-mr"></div>

            {{-- ORANGE BLOB bottom-right --}}
            <div class="d24-blob-orange"></div>

            {{-- CIRCULAR FOOD IMAGE --}}
            <div class="d24-food-circle-wrap">
                <div class="d24-food-ring-outer"></div>
                <div class="d24-food-circle">
                    @if (isset($menuImageUrl) && $menuImageUrl)
                        <img src="{{ $menuImageUrl }}" alt="{{ @$menu['name'] ?? 'Menu Item' }}" class="js-poster-menu-image" crossorigin="anonymous">
                    @else
                        <div class="d24-food-placeholder"></div>
                    @endif
                </div>
            </div>

            

        </div>{{-- /.d24-top --}}

        {{-- ══ DARK BROWN BAND ══ --}}
        <div class="d24-brown-band">
            <!--<p class="d24-item-name-bold">Hot Spicy</p>-->
            <p class="d24-item-name-script">{{ @$menu['name'] ?? 'Special Burger' }}</p>
            @if (!empty($menu['description']))
                <p class="d24-desc">{{ Str::limit($menu['description'], 100, '...') }}</p>
            @endif
        </div>

        {{-- ══ FOOTER ══ --}}
        <div class="d24-footer">
            <div class="d24-brush"></div>

            {{-- Left: phone --}}
            <div class="d24-footer-left">
                <div class="d24-phone-circle">
                    <svg viewBox="0 0 24 24">
                        <path d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1C10.33 21 3 13.67 3 4c0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.24 1.02l-2.21 2.2z"/>
                    </svg>
                </div>
                <div>
                    <div class="d24-delivery-label">Contact Us</div>
                    <div class="d24-phone-num">{{ @user()->phone ?? '+123 456 789' }}</div>
                </div>
            </div>

            {{-- Right: restaurant info --}}
            <div class="d24-footer-right">
                <div class="d24-rest-name">{{ @user()->name ?? 'Your Restaurant' }}</div>
                <div class="d24-rest-address">{{ @user()->address ?? '123 Street, Malaga, Spain.' }}</div>
                <div class="d24-rest-web">{{ @user()->website_domain ?? 'www.yourweb.com' }}</div>
            </div>
        </div>

    </div>{{-- /.design24-card --}}

    {{-- <button type="button" class="d24-download-btn" onclick="downloadDesign24()">⬇ Download Poster</button> --}}

</div>{{-- /.design24-wrapper --}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<script>
    function downloadDesign24() {
        var card = document.getElementById('posterCard24');
        var button = document.querySelector('.d24-download-btn');
        button.innerHTML = 'Generating...';
        button.disabled = true;

        var exportW = 1080;
        var scale = exportW / card.offsetWidth;

        var images = card.querySelectorAll('img');
        var imagePromises = Array.from(images).map(function(img) {
            return new Promise(function(resolve) {
                if (img.complete && img.naturalWidth > 0) { resolve(); }
                else { img.onload = resolve; img.onerror = resolve; }
            });
        });

        Promise.all(imagePromises).then(function() {
            return html2canvas(card, {
                scale: scale,
                backgroundColor: '#fdf0d5',
                logging: false,
                useCORS: true,
                allowTaint: true,
                imageTimeout: 15000,
            });
        }).then(function(canvas) {
            var link = document.createElement('a');
            link.download = 'menu-poster-design24.png';
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
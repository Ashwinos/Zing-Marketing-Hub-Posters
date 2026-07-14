<!-- ============================================================
     DESIGN 37 — Full-Bleed Background, Left-Aligned Editorial Text
     Font pairing: Bodoni Moda (title) + Manrope (everything else)
     Logo: top-left overlay
     Footer: no background, phone + website at opposite ends, white text
     Border: single thin white hairline frame
     ============================================================ -->
<style>
    .design37-wrapper {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        font-family: 'Manrope', sans-serif;
    }

    .design37-wrapper .design37-card {
        width: 100%;
        max-width: 340px;
        aspect-ratio: 4 / 5;
        position: relative;
        overflow: hidden;
        background: {{ $themeColor ?? '#1f3a2e' }};
        box-shadow: 0 20px 60px rgba(0,0,0,0.25);
        container-type: inline-size;
        box-sizing: border-box;
    }

    /* Grain texture via SVG filter — established platform fix,
       avoids CSS background-image tiling issues in html2canvas */
    .d37-grain-svg {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        opacity: 0.05;
        pointer-events: none;
        z-index: 3;
    }

    /* Decorative border frame — single thin white hairline,
       drawn as literal SVG rect (no pattern/url refs, per platform fix) */
    .d37-frame-svg {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        pointer-events: none;
        z-index: 5;
    }

    .d37-content {
        position: absolute;
        top: 0; left: 0;
        width: 100%;
        height: 100%;
        box-sizing: border-box;
        padding: 8cqw 8cqw 7cqw;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        z-index: 4;
    }

    .d37-logo-wrap {
        position: absolute;
        top: 6cqw;
        left: 8cqw;
        z-index: 6;
    }

    .d37-logo-wrap img {
        max-height: 1.8rem;
        height: auto;
        width: auto;
        max-width: 100%;
        display: block;
    }

    /* ---------- FULL-BLEED BACKGROUND IMAGE ---------- */
    .d37-bg {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        z-index: 1;
    }

    /* Real <img> kept only for preloading/decoding, never shown visually.
       Hidden in the onclone callback — established platform fix, since
       html2canvas is unreliable with object-fit: cover on <img> tags. */
    .d37-bg-preload {
        position: absolute;
        width: 1px; height: 1px;
        opacity: 0;
        pointer-events: none;
    }

    .d37-scrim-top {
        position: absolute;
        top: 0; left: 0; right: 0;
        height: 42%;
        background: linear-gradient(180deg, rgba(15,26,20,0.72) 0%, rgba(15,26,20,0) 100%);
        z-index: 2;
    }

    .d37-scrim-bottom {
        position: absolute;
        bottom: 0; left: 0; right: 0;
        height: 48%;
        background: linear-gradient(0deg, rgba(15,26,20,0.85) 0%, rgba(15,26,20,0.4) 60%, rgba(15,26,20,0) 100%);
        z-index: 2;
    }

    /* ---------- TITLE ---------- */
    .d37-title {
        font-family: 'Bodoni Moda', serif;
        font-weight: 600;
        font-style: italic;
        font-size: 9.2cqw;
        line-height: 1.04;
        letter-spacing: 0.005em;
        color: #f7f1e3;
        text-align: left;
        margin: 0 0 2.6cqw;
        text-shadow: 0 3px 16px rgba(0,0,0,0.4);
    }

    .d37-rule {
        width: 14cqw;
        height: 1.5px;
        background: {{$themeColor}};
        margin-bottom: 2.6cqw;
        flex-shrink: 0;
    }

    .d37-desc {
        font-family: 'Manrope', sans-serif;
        font-size: 2.3cqw;
        font-weight: 500;
        letter-spacing: 0.01em;
        color: #d9d2bf;
        text-align: left;
        max-width: 84%;
        margin: 0;
    }

    .d37-spacer { flex: 1 1 auto; }

    /* ---------- FOOTER (no background, phone + website at opposite ends, white) ---------- */
    .d37-footer {
        display: flex;
        align-items: center;
        justify-content: space-between;
        width: 100%;
        gap: 2.6cqw;
        padding: 0;
        background: none;
        margin-top: 4cqw;
    }

    .d37-footer-phone,
    .d37-footer-site {
        font-family: 'Manrope', sans-serif;
        font-size: 2.3cqw;
        font-weight: 700;
        letter-spacing: 0.03em;
        color: #ffffff;
        margin: 0;
        white-space: nowrap;
        text-shadow: 0 2px 8px rgba(0,0,0,0.4);
    }

    .d37-download-btn {
        margin-top: 16px;
        padding: 10px 22px;
        font-family: 'Manrope', sans-serif;
        font-weight: 700;
        font-size: 14px;
        background: #1f3a2e;
        color: #f7f1e3;
        border: none;
        border-radius: 6px;
        cursor: pointer;
    }
    .d37-download-btn:disabled { opacity: 0.6; cursor: default; }
</style>

<div class="design37-wrapper">
    <div class="design37-card" id="posterCard37" style="background: {{ $themeColor ?? '#1f3a2e' }};">

        <div class="d37-bg js-photo-zone" style="background-image:url('{{ $menuImageUrl ?? '' }}')"></div>
        <img class="d37-bg-preload js-poster-menu-image" src="{{ $menuImageUrl ?? '' }}" alt="{{ $menu['name'] ?? 'Menu item' }}" crossorigin="anonymous">

        <div class="d37-scrim-top"></div>
        <div class="d37-scrim-bottom"></div>

        <svg class="d37-grain-svg" width="340" height="425" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 340 425" preserveAspectRatio="none">
            <filter id="d37Grain">
                <feTurbulence type="fractalNoise" baseFrequency="0.85" numOctaves="2" stitchTiles="stitch"/>
                <feColorMatrix type="matrix" values="0 0 0 0 1  0 0 0 0 1  0 0 0 0 1  0 0 0 0.9 0"/>
            </filter>
            <rect width="340" height="425" filter="url(#d37Grain)"/>
        </svg>

        <!-- Decorative border frame: single thin white hairline -->
        <svg class="d37-frame-svg" width="340" height="425" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 340 425" preserveAspectRatio="none">
            <rect x="14" y="14" width="312" height="397" fill="none" stroke="#ffffff" stroke-width="1" opacity="0.85"/>
        </svg>

        @if(!empty($logourl))
            <div class="d37-logo-wrap">
                <img src="{{ $logourl }}" alt="Logo" crossorigin="anonymous">
            </div>
        @endif

        <div class="d37-content">

            <div class="d37-spacer"></div>

            <h1 class="d37-title">{{ $menu['name']  }}</h1>
            <div class="d37-rule"></div>
            @if(!empty($menu['description']))
                <p class="d37-desc">{{ $menu['description'] }}</p>
            @endif

            <div class="d37-footer">
                @if(!empty(@user()->phone))
                    <span class="d37-footer-phone">{{ @user()->phone }}</span>
                @endif
                @if(!empty(@user()->website_domain))
                    <span class="d37-footer-site">{{ @user()->website_domain }}</span>
                @endif
            </div>

        </div>

    </div>

    {{-- <button type="button" class="d37-download-btn" onclick="downloadDesign37()">&#8595; Download Poster</button> --}}
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<script>
    function downloadDesign37() {
        var card   = document.getElementById('posterCard37');
        var button = document.querySelector('.d37-download-btn');
        if (!card) return;
        if (button) { button.innerHTML = 'Generating...'; button.disabled = true; }

        var exportW = 1080;
        var scale   = exportW / card.offsetWidth;

        Promise.all(Array.from(card.querySelectorAll('img')).map(function(img) {
            return new Promise(function(resolve) {
                if (img.complete && img.naturalWidth > 0) resolve();
                else { img.onload = resolve; img.onerror = resolve; }
            });
        })).then(function() {
            return html2canvas(card, {
                scale: scale,
                backgroundColor: '{{ $themeColor ?? "#1f3a2e" }}',
                logging: false,
                useCORS: true,
                allowTaint: true,
                imageTimeout: 15000,
                onclone: function(clonedDoc) {
                    var zones = clonedDoc.querySelectorAll('.js-photo-zone');
                    zones.forEach(function(zone) {
                        zone.style.backgroundSize = 'cover';
                        zone.style.backgroundPosition = 'center';
                        zone.style.backgroundRepeat = 'no-repeat';
                    });
                    var preloads = clonedDoc.querySelectorAll('.d37-bg-preload');
                    preloads.forEach(function(img) { img.style.display = 'none'; });
                }
            });
        }).then(function(canvas) {
            var link = document.createElement('a');
            link.download = 'menu-poster-design37.png';
            link.href = canvas.toDataURL('image/png', 1.0);
            link.click();
            if (button) { button.innerHTML = 'Download Poster'; button.disabled = false; }
        }).catch(function(error) {
            console.error('Error:', error);
            alert('Failed to generate image.');
            if (button) { button.innerHTML = 'Download Poster'; button.disabled = false; }
        });
    }
</script>
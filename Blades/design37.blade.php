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

    .d37-bg-canvas {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        display: block;
        z-index: 1;
    }

    .d37-bg-preload {
        position: absolute;
        width: 1px; height: 1px;
        opacity: 0;
        pointer-events: none;
    }

    .d37-scrim {
        position: absolute;
        inset: 0;
        background: linear-gradient(
            180deg,
            rgba(15,26,20,0.72) 0%,
            rgba(15,26,20,0) 24%,
            rgba(15,26,20,0) 46%,
            rgba(15,26,20,0.4) 68%,
            rgba(15,26,20,0.85) 100%
        );
        z-index: 2;
    }

    .d37-heading-block {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        max-width: 82%;
    }

    .d37-title-line1 {
        font-family: 'Bodoni Moda', serif;
        font-weight: 400;
        font-style: italic;
        font-size: 4.6cqw;
        line-height: 1;
        letter-spacing: 0.06em;
        color: #f7f1e3;
        opacity: 0.92;
        text-align: left;
        margin: 0 0 1cqw;
        text-shadow: 0 2px 10px rgba(0,0,0,0.4);
    }

    .d37-title-line2 {
        font-family: 'Bodoni Moda', serif;
        font-weight: 700;
        font-style: normal;
        font-size: 7.6cqw;
        line-height: 1.02;
        letter-spacing: -0.005em;
        color: #d9b872;
        text-align: left;
        margin: 0;
        text-shadow: 0 4px 18px rgba(0,0,0,0.5);
    }

    .d37-rule-wrap {
        display: flex;
        align-items: center;
        gap: 1.4cqw;
        margin: 3cqw 0 2.6cqw;
    }

    .d37-rule-line {
        width: 10cqw;
        height: 1.5px;
        background: #f7f1e3;
        opacity: 0.9;
        flex-shrink: 0;
    }

    .d37-rule-diamond {
        width: 1.6cqw;
        height: 1.6cqw;
        flex-shrink: 0;
        display: block;
    }
    .d37-rule-diamond svg { width: 100%; height: 100%; display: block; }

    .d37-spacer { flex: 1 1 auto; }

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

    .d37-footer-phone {
        font-family: 'Manrope', sans-serif;
        font-size: 2.3cqw;
        font-weight: 700;
        letter-spacing: 0.03em;
        color: #ffffff;
        margin: 0;
        white-space: nowrap;
        text-shadow: 0 2px 8px rgba(0,0,0,0.4);
        flex-shrink: 0;
    }

    .d37-footer-site {
        font-family: 'Manrope', sans-serif;
        font-size: 2.3cqw;
        font-weight: 700;
        letter-spacing: 0.03em;
        color: #ffffff;
        margin: 0;
        text-shadow: 0 2px 8px rgba(0,0,0,0.4);
        text-align: right;
        max-width: 50cqw;
        white-space: normal;
        word-break: break-word;
        overflow-wrap: break-word;
        line-height: 1.3;
        overflow: hidden;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        text-overflow: ellipsis;
        min-width: 0;
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
        <canvas class="d37-bg-canvas js-photo-canvas" id="posterBgCanvas37"></canvas>
        <img class="d37-bg-preload js-poster-menu-image" src="{{ $menuImageUrl ?? '' }}" alt="{{ $menu['name'] ?? 'Menu item' }}" crossorigin="anonymous">

        <div class="d37-scrim"></div>

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

            <div class="d37-heading-block">
                <h1 class="d37-title-line1">Made with Love,</h1>
                <h1 class="d37-title-line2">Tastes Like Home.</h1>
            </div>

            <div class="d37-rule-wrap">
                <span class="d37-rule-line"></span>
                <span class="d37-rule-diamond">
                    <svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <rect x="4" y="4" width="12" height="12" fill="none" stroke="#f7f1e3" stroke-width="1.5" transform="rotate(45 10 10)"/>
                    </svg>
                </span>
                <span class="d37-rule-line"></span>
            </div>

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
                        zone.style.visibility = 'hidden';
                    });

                    var preloads = clonedDoc.querySelectorAll('.d37-bg-preload');
                    preloads.forEach(function(img) { img.style.display = 'none'; });

                    var canvas = clonedDoc.getElementById('posterBgCanvas37');
                    var img    = clonedDoc.querySelector('.js-poster-menu-image');
                    if (canvas && img && img.naturalWidth > 0) {
                        var targetW = 1080, targetH = 1350;
                        canvas.width = targetW;
                        canvas.height = targetH;
                        var ctx = canvas.getContext('2d');
                        var iw = img.naturalWidth, ih = img.naturalHeight;
                        var ir = iw / ih, tr = targetW / targetH;
                        var sx, sy, sw, sh;
                        if (ir > tr) {
                            sh = ih; sw = ih * tr; sx = (iw - sw) / 2; sy = 0;
                        } else {
                            sw = iw; sh = iw / tr; sx = 0; sy = (ih - sh) / 2;
                        }
                        ctx.drawImage(img, sx, sy, sw, sh, 0, 0, targetW, targetH);
                    }
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
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&family=Oswald:wght@500;600;700&display=swap" rel="stylesheet">

<style>
    .design35-wrapper {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        font-family: 'Poppins', sans-serif;
    }

    .design35-wrapper .design35-card {
        width: 100%;
        max-width: 340px;
        aspect-ratio: 4 / 5;
        position: relative;
        overflow: hidden;
        background: #d3b17f;
        box-shadow: 0 20px 60px rgba(0,0,0,0.22);
        container-type: inline-size;
        box-sizing: border-box;
    }

    /* ══ Paper texture layer (SVG grain, html2canvas-safe) ══ */
    .d35-paper-texture {
        position: absolute;
        top: 0; left: 0; right: 0; bottom: 0;
        z-index: 1;
        pointer-events: none;
        mix-blend-mode: multiply;
        opacity: 0.5;
    }
    .d35-paper-texture svg {
        width: 100%;
        height: 100%;
        display: block;
    }

    .d35-border-svg {
        position: absolute;
        top: 0; left: 0;
        pointer-events: none;
        z-index: 5;
    }

    .d35-content {
        position: absolute;
        top: 0; left: 0;
        width: 100%;
        height: 100%;
        box-sizing: border-box;
        padding: 9cqw 8cqw 6cqw;
        display: flex;
        flex-direction: column;
        align-items: center;
        z-index: 2;
    }

    .d35-logo {
        height: 2rem;
        width: auto;
        display: block;
        position: absolute;
        top: 6cqw;
        right: 7cqw;
        z-index: 6;
    }

    .d35-header {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 2.2cqw;
        margin-bottom: 3.5cqw;
    }

    .d35-title {
        font-family: 'Poppins', sans-serif;
        font-weight: 900;
        font-size: 27px;
        line-height: 1.02;
        letter-spacing: 0.01em;
        color: #3d2415;
        text-align: center;
        text-transform: uppercase;
        margin: 0 0 2.4cqw;
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        margin-top: 25px;
    }

    .d35-address {
        font-size: 2.2cqw;
        font-weight: 600;
        letter-spacing: 0.03em;
        color: #3d2415;
        text-align: center;
        margin: 0 0 1.6cqw;
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
    }

    .d35-photo-zone {
        position: relative;
        width: 100%;
        flex: 1;
        margin-top: auto;
    }

    .d35-photo-rect {
        position: absolute;
        left: 0;
        right: 0;
        bottom: 0;
        width: 100%;
        height: 68cqw;
        overflow: hidden;
        background-color: #2a2015;
        border-radius: 6px;
    }

    .d35-photo-rect img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    .d35-photo-placeholder {
        width: 100%;
        height: 100%;
        background: {{ $themeColor ?? '#3d2415' }};
    }

    .d35-footer {
        position: relative;
        z-index: 4;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-top: 3cqw;
    }

    .d35-footer-phone {
        font-size: 2.6cqw;
        font-weight: 600;
        letter-spacing: 0.05em;
        color: #3d2415;
        white-space: nowrap;
    }

    .d35-footer-site {
        font-size: 2.6cqw;
        font-weight: 600;
        letter-spacing: 0.08em;
        color: #3d2415;
        margin-left: auto;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        max-width: 55%;
    }

    .d35-download-btn {
        margin-top: 16px;
        padding: 10px 22px;
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
        font-size: 14px;
        background: #3d2415;
        color: #f3e4c8;
        border: none;
        border-radius: 6px;
        cursor: pointer;
    }
    .d35-download-btn:disabled { opacity: 0.6; cursor: default; }
</style>

<div class="design35-wrapper">
    <div class="design35-card" id="posterCard35" style="background: #d3b17f;">

        {{-- ══ Paper texture — SVG feTurbulence grain (html2canvas-safe) ══ --}}
        <div class="d35-paper-texture" aria-hidden="true">
            <svg width="340" height="425" viewBox="0 0 340 425" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                <filter id="d35PaperGrain">
                    <feTurbulence type="fractalNoise" baseFrequency="0.85" numOctaves="3" stitchTiles="stitch" result="noise"/>
                    <feColorMatrix in="noise" type="matrix"
                        values="0 0 0 0 0
                                0 0 0 0 0
                                0 0 0 0 0
                                0 0 0 0.45 0"/>
                </filter>
                <rect width="100%" height="100%" filter="url(#d35PaperGrain)"/>
            </svg>
        </div>

        <svg class="d35-border-svg" width="340" height="425" viewBox="0 0 340 425" xmlns="http://www.w3.org/2000/svg" style="width:100%;height:100%;">
            <rect x="14" y="14" width="312" height="397" fill="none" stroke="#3d2415" stroke-width="1.5" stroke-dasharray="5,4"/>
            <g stroke="#3d2415" stroke-width="1.5">
                <line x1="14" y1="30" x2="14" y2="14"/><line x1="14" y1="14" x2="30" y2="14"/>
                <line x1="326" y1="30" x2="326" y2="14"/><line x1="326" y1="14" x2="310" y2="14"/>
                <line x1="14" y1="395" x2="14" y2="411"/><line x1="14" y1="411" x2="30" y2="411"/>
                <line x1="326" y1="395" x2="326" y2="411"/><line x1="326" y1="411" x2="310" y2="411"/>
            </g>
            <g stroke="#3d2415" stroke-width="1.5">
                <line x1="24" y1="24" x2="34" y2="24"/><line x1="29" y1="19" x2="29" y2="29"/>
                <line x1="306" y1="24" x2="316" y2="24"/><line x1="311" y1="19" x2="311" y2="29"/>
            </g>
        </svg>

        <div class="d35-content">

            @if (!empty($logourl))
                <img src="{{ $logourl }}" alt="logo" class="d35-logo" crossorigin="anonymous">
            @endif

            <h1 class="d35-title">{{ $menu['name']  }}</h1>

            <p class="d35-address">{{ @user()->address }}</p>

            <div class="d35-photo-zone">

                <div class="d35-photo-rect">
                    @if (!empty($menuImageUrl))
                        <img src="{{ $menuImageUrl }}"
                             alt="{{ $menu['name'] ?? 'Menu item' }}"
                             class="js-poster-menu-image"
                             crossorigin="anonymous">
                    @else
                        <div class="d35-photo-placeholder"></div>
                    @endif
                </div>

            </div>

            <div class="d35-footer">
                @if (!empty(@user()->phone))
                    <span class="d35-footer-phone">{{ @user()->phone }}</span>
                @endif
                @if (!empty(@user()->website_domain))
                    <span class="d35-footer-site">{{ @user()->website_domain }}</span>
                @endif
            </div>

        </div>

    </div>{{-- /.design35-card --}}

    {{-- <button type="button" class="d35-download-btn" onclick="downloadDesign35()">&#8595; Download Poster</button> --}}

</div>{{-- /.design35-wrapper --}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<script>
    function downloadDesign35() {
        var card   = document.getElementById('posterCard35');
        var button = document.querySelector('.d35-download-btn');
        if (!card || !button) return;
        button.innerHTML = 'Generating...';
        button.disabled  = true;
        var exportW = 1080;
        var scale   = exportW / card.offsetWidth;
        Promise.all(Array.from(card.querySelectorAll('img')).map(function(img) {
            return new Promise(function(resolve) {
                if (img.complete && img.naturalWidth > 0) resolve();
                else { img.onload = resolve; img.onerror = resolve; }
            });
        })).then(function() {
            return html2canvas(card, {
                scale: scale, backgroundColor: '#d3b17f',
                logging: false, useCORS: true, allowTaint: true, imageTimeout: 15000
            });
        }).then(function(canvas) {
            var link = document.createElement('a');
            link.download = 'menu-poster-design35.png';
            link.href = canvas.toDataURL('image/png', 1.0);
            link.click();
            button.innerHTML = 'Download Poster';
            button.disabled = false;
        }).catch(function(error) {
            console.error('Error:', error);
            alert('Failed to generate image.');
            button.innerHTML = 'Download Poster';
            button.disabled = false;
        });
    }
</script>
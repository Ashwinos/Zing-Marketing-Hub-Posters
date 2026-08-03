<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Open+Sans:wght@400;600;700;800;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Hanalei+Fill&display=swap" rel="stylesheet">

<style>
    .design32-wrapper {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        font-family: 'Open Sans', sans-serif;
    }

    .design32-wrapper .design32-card {
        width: 100%;
        max-width: 340px;
        aspect-ratio: 4 / 5;
        position: relative;
        overflow: hidden;
        background-color: #1c1a1a;
        background-image:
            repeating-linear-gradient(
                0deg,
                rgba(255,255,255,0.018) 0px,
                rgba(255,255,255,0.018) 1px,
                transparent 1px,
                transparent 5px
            ),
            repeating-linear-gradient(
                90deg,
                rgba(255,255,255,0.018) 0px,
                rgba(255,255,255,0.018) 1px,
                transparent 1px,
                transparent 5px
            );
        box-shadow: 0 20px 60px rgba(0,0,0,0.5);
        container-type: inline-size;
        box-sizing: border-box;
    }

    /* ══ Grain noise — fine + dense for matte look ══ */
    .design32-wrapper .d32-texture {
        position: absolute;
        top: 0; left: 0; right: 0; bottom: 0;
        z-index: 0;
        pointer-events: none;
        mix-blend-mode: soft-light;
        opacity: 0.65;
    }
    .design32-wrapper .d32-texture svg {
        width: 100%; height: 100%;
        display: block;
    }

    /* ══ Extra mat dust layer ══ */
    .design32-wrapper .d32-mat-dust {
        position: absolute;
        top: 0; left: 0; right: 0; bottom: 0;
        z-index: 0;
        pointer-events: none;
        mix-blend-mode: overlay;
        opacity: 0.25;
    }
    .design32-wrapper .d32-mat-dust svg {
        width: 100%; height: 100%;
        display: block;
    }

    /* ══ Doodle icon decorations ══ */
    .design32-wrapper .d32-doodle {
        position: absolute;
        z-index: 1;
        opacity: 0.35;
        pointer-events: none;
    }
    .design32-wrapper .d32-doodle svg { display: block; }

    /* ══ Logo badge — top-center ══ */
    .design32-wrapper .d32-logo {
        position: relative;
        z-index: 5;
        display: flex;
        justify-content: center;
        padding-top: 4cqw;
    }
    .design32-wrapper .d32-logo img {
        height: 2rem;
        width: auto;
        display: block;
    }

    /* ══ Headline — Hanalei Fill font ══ */
    .design32-wrapper .d32-headline {
        position: relative;
        z-index: 5;
        text-align: center;
        padding: 2cqw 5cqw 0;
    }
    .design32-wrapper .d32-headline h1 {
        margin: 0;
        line-height: 1.05;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        font-family: "Hanalei Fill", system-ui;
        font-size: 10cqw;
        color: {{ $themeColor }};
        letter-spacing: 0.5px;
    }

    /* ══ Photo wrap — centers the frame ══ */
    .design32-wrapper .d32-photo-wrap {
        position: relative;
        z-index: 4;
        display: flex;
        justify-content: center;
        margin-top: 4cqw;
    }

    /* ══ Decorative frame ══ */
    .design32-wrapper .d32-photo-frame {
        position: relative;
        display: inline-flex;
        /* gap between outer frame border and image */
        padding: 1.2cqw;
        border: 1.5px solid {{ $themeColor }};
        /* faint inner rim for depth */
        box-shadow:
            inset 0 0 0 1px rgba(255,255,255,0.07),
            0 14px 36px rgba(0,0,0,0.55),
            0 0 18px rgba(0,0,0,0.3);
        box-sizing: border-box;
    }

    /* ── Corner bracket ornaments ── */
    .design32-wrapper .d32-corner {
        position: absolute;
        width: 5cqw;
        height: 5cqw;
        z-index: 2;
        pointer-events: none;
    }
    .design32-wrapper .d32-corner svg {
        width: 100%;
        height: 100%;
        display: block;
        overflow: visible;
    }
    /* position each corner so the bracket sits exactly at the frame border */
    .design32-wrapper .d32-corner-tl { top:  -1.5cqw; left:  -1.5cqw; }
    .design32-wrapper .d32-corner-tr { top:  -1.5cqw; right: -1.5cqw; transform: scaleX(-1); }
    .design32-wrapper .d32-corner-bl { bottom: -1.5cqw; left:  -1.5cqw; transform: scaleY(-1); }
    .design32-wrapper .d32-corner-br { bottom: -1.5cqw; right: -1.5cqw; transform: scale(-1, -1); }

    /* ══ Image container ══ */
    .design32-wrapper .d32-photo-circle {
        width: 88cqw;
        height: 49cqw;
        background: #2b2b2b;
        overflow: hidden;
        box-sizing: border-box;
        display: block;
        flex-shrink: 0;
    }
    .design32-wrapper .d32-photo-circle img {
        width: 100%; height: 100%;
        object-fit: cover; object-position: center;
        display: block;
    }
    .design32-wrapper .d32-photo-placeholder {
        width: 100%; height: 100%;
        background: {{$themeColor}};
    }

    /* ══ Description ══ */
    .design32-wrapper .d32-desc {
        position: relative;
        z-index: 5;
        text-align: center;
        padding: 2.5cqw 9cqw 0;
    }
    .design32-wrapper .d32-desc p {
        font-family: 'Open Sans', sans-serif;
        font-size: 2.8cqw;
        font-weight: 400;
        color: rgba(255,255,255,0.5);
        line-height: 1.5;
        margin: 0;
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
    }

    /* ══ Order section ══ */
    .design32-wrapper .d32-order {
        position: relative;
        z-index: 5;
        text-align: center;
        padding: 3.5cqw 6cqw 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 1.5cqw;
    }

    /* ── Order now pill button ── */
    .design32-wrapper .d32-order-btn {
        display: inline-flex;
        align-items: center;
        gap: 1.8cqw;
        background: {{ $themeColor }};
       
        padding: 2cqw 6.5cqw;
        
    }
    .design32-wrapper .d32-order-btn svg {
        width: 3.2cqw; height: 3.2cqw;
        fill: #ffffff;
        flex-shrink: 0;
    }
    .design32-wrapper .d32-order-btn span {
        font-family: 'Open Sans', sans-serif;
        font-size: 3cqw;
        font-weight: 800;
        color: #ffffff;
        text-transform: uppercase;
        letter-spacing: 1.5px;
        white-space: nowrap;
    }

    /* ── Address row below button ── */
    .design32-wrapper .d32-order-address {
        display: flex;
        align-items: flex-start;
        justify-content: center;
        gap: 1cqw;
        padding: 0 3cqw;
        margin-top: 6px;
    }
    .design32-wrapper .d32-order-address svg {
        width: 2.8cqw; height: 2.8cqw;
        fill: rgba(255,255,255,0.5);
        flex-shrink: 0;
        margin-top: 0.3cqw;
    }
    .design32-wrapper .d32-order-address span {
        font-family: 'Open Sans', sans-serif;
        font-size: 2.5cqw;
        font-weight: 400;
        color: rgba(255,255,255,0.5);
        letter-spacing: 0.2px;
        line-height: 1.4;
        text-align: left;
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
    }

    /* ══ FOOTER — website left, phone right ══ */
    .design32-wrapper .d32-footer {
        position: absolute;
        bottom: 0; left: 0; right: 0;
        height: 9cqw;
        z-index: 6;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 4.5cqw;
        box-sizing: border-box;
    }
    .design32-wrapper .d32-footer-website {
        font-family: 'Open Sans', sans-serif;
        font-size: 1.9cqw;
        font-weight: 600;
        color: rgba(255,255,255,0.6);
        letter-spacing: 0.2px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        max-width: 55%;
    }
    .design32-wrapper .d32-footer-phone {
        display: flex;
        align-items: center;
        gap: 1cqw;
        flex-shrink: 0;
    }
    .design32-wrapper .d32-footer-phone svg {
        width: 2.2cqw; height: 2.2cqw;
        fill: rgba(255,255,255,0.6);
        flex-shrink: 0;
    }
    .design32-wrapper .d32-footer-phone span {
        font-family: 'Open Sans', sans-serif;
        font-size: 1.9cqw;
        font-weight: 600;
        color: rgba(255,255,255,0.6);
        letter-spacing: 0.3px;
        white-space: nowrap;
    }

    /* ── Download btn ── */
    .design32-wrapper .d32-download-btn {
        margin-top: 10px;
        background: {{ $themeColor }};
        color: #ffffff;
        border: none;
        padding: 8px 18px;
        font-size: 12px;
        font-weight: 700;
        border-radius: 30px;
        cursor: pointer;
        font-family: 'Open Sans', sans-serif;
        transition: opacity 0.2s;
    }
    .design32-wrapper .d32-download-btn:hover    { opacity: .88; }
    .design32-wrapper .d32-download-btn:disabled { opacity: .5; cursor: not-allowed; }
</style>

<div class="design32-wrapper">
    <div class="design32-card" id="posterCard32">

        {{-- ══ Fine grain — matte finish ══ --}}
        <div class="d32-texture" aria-hidden="true">
            <svg width="340" height="425" viewBox="0 0 340 425" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                <filter id="d32Grain">
                    <feTurbulence type="fractalNoise" baseFrequency="0.75" numOctaves="4" stitchTiles="stitch" result="noise"/>
                    <feColorMatrix in="noise" type="matrix"
                        values="0 0 0 0 0
                                0 0 0 0 0
                                0 0 0 0 0
                                0 0 0 0.55 0"/>
                </filter>
                <rect width="100%" height="100%" filter="url(#d32Grain)"/>
            </svg>
        </div>

        {{-- ══ Coarser dust layer for depth ══ --}}
        <div class="d32-mat-dust" aria-hidden="true">
            <svg width="340" height="425" viewBox="0 0 340 425" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                <filter id="d32Dust">
                    <feTurbulence type="turbulence" baseFrequency="0.35" numOctaves="2" seed="8" stitchTiles="stitch" result="noise"/>
                    <feColorMatrix in="noise" type="matrix"
                        values="0 0 0 0 0
                                0 0 0 0 0
                                0 0 0 0 0
                                0 0 0 0.3 0"/>
                </filter>
                <rect width="100%" height="100%" filter="url(#d32Dust)"/>
            </svg>
        </div>

        {{-- ══ Doodle decorations ══ --}}
        <div class="d32-doodle" style="top: 14cqw; left: 4cqw;">
            <svg width="26" height="26" viewBox="0 0 26 26" fill="none" stroke="#ffffff" stroke-width="1" xmlns="http://www.w3.org/2000/svg">
                <path d="M13 2 L16 9 L23 10 L18 15 L19 22 L13 18 L7 22 L8 15 L3 10 L10 9 Z"/>
            </svg>
        </div>
        <div class="d32-doodle" style="top: 10cqw; right: 5cqw; transform: rotate(20deg);">
            <svg width="22" height="32" viewBox="0 0 22 32" fill="none" stroke="#ffffff" stroke-width="1" xmlns="http://www.w3.org/2000/svg">
                <path d="M11 2 C16 7 18 13 16 19 L11 30 L6 19 C4 13 6 7 11 2Z"/>
                <circle cx="11" cy="11" r="3"/>
            </svg>
        </div>
        <div class="d32-doodle" style="top: 32cqw; left: 3cqw;">
            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" stroke="#ffffff" stroke-width="1" xmlns="http://www.w3.org/2000/svg">
                <circle cx="11" cy="11" r="9"/>
                <circle cx="8" cy="8" r="1" fill="#ffffff" stroke="none"/>
                <circle cx="14" cy="9" r="1" fill="#ffffff" stroke="none"/>
                <circle cx="10" cy="14" r="1" fill="#ffffff" stroke="none"/>
            </svg>
        </div>
        <div class="d32-doodle" style="top: 30cqw; right: 4cqw;">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="1" xmlns="http://www.w3.org/2000/svg">
                <path d="M4 16c0-6 4-12 8-12s8 6 8 12" />
                <path d="M3 16h18v2a2 2 0 01-2 2H5a2 2 0 01-2-2v-2Z"/>
            </svg>
        </div>
        <div class="d32-doodle" style="bottom: 30cqw; left: 4cqw;">
            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" stroke="#ffffff" stroke-width="1" xmlns="http://www.w3.org/2000/svg">
                <path d="M11 2 L13 8 L19 8 L14 12 L16 18 L11 14 L6 18 L8 12 L3 8 L9 8Z"/>
            </svg>
        </div>
        <div class="d32-doodle" style="bottom: 28cqw; right: 4cqw; transform: rotate(-15deg);">
            <svg width="22" height="30" viewBox="0 0 22 30" fill="none" stroke="#ffffff" stroke-width="1" xmlns="http://www.w3.org/2000/svg">
                <path d="M11 2 L20 22 H2 Z"/>
                <path d="M5 22 L11 28 L17 22"/>
            </svg>
        </div>

        {{-- ══ Logo ══ --}}
        @if (!empty($logourl))
            <div class="d32-logo">
                <img src="{{ $logourl }}" alt="logo" crossorigin="anonymous">
            </div>
        @endif

        {{-- ══ Headline ══ --}}
        <div class="d32-headline">
            <h1>Craving Satisfied</h1>
        </div>

        {{-- ══ Photo with decorative frame ══ --}}
        <div class="d32-photo-wrap">
            <div class="d32-photo-frame">

                {{-- ── Corner bracket ornaments ── --}}
                {{-- Top-left --}}
                <span class="d32-corner d32-corner-tl" aria-hidden="true">
                    <svg viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18 2 L2 2 L2 18" stroke="{{ $themeColor }}" stroke-width="2.5" stroke-linecap="square" stroke-linejoin="miter"/>
                        <circle cx="2" cy="2" r="1.5" fill="{{ $themeColor }}"/>
                    </svg>
                </span>
                {{-- Top-right --}}
                <span class="d32-corner d32-corner-tr" aria-hidden="true">
                    <svg viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18 2 L2 2 L2 18" stroke="{{ $themeColor }}" stroke-width="2.5" stroke-linecap="square" stroke-linejoin="miter"/>
                        <circle cx="2" cy="2" r="1.5" fill="{{ $themeColor }}"/>
                    </svg>
                </span>
                {{-- Bottom-left --}}
                <span class="d32-corner d32-corner-bl" aria-hidden="true">
                    <svg viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18 2 L2 2 L2 18" stroke="{{ $themeColor }}" stroke-width="2.5" stroke-linecap="square" stroke-linejoin="miter"/>
                        <circle cx="2" cy="2" r="1.5" fill="{{ $themeColor }}"/>
                    </svg>
                </span>
                {{-- Bottom-right --}}
                <span class="d32-corner d32-corner-br" aria-hidden="true">
                    <svg viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18 2 L2 2 L2 18" stroke="{{ $themeColor }}" stroke-width="2.5" stroke-linecap="square" stroke-linejoin="miter"/>
                        <circle cx="2" cy="2" r="1.5" fill="{{ $themeColor }}"/>
                    </svg>
                </span>

                {{-- ── Image ── --}}
                <div class="d32-photo-circle">
                    @if (!empty($menuImageUrl))
                        <img src="{{ $menuImageUrl }}"
                             alt="{{ $menu['name'] ?? 'Food' }}"
                             class="js-poster-menu-image"
                             crossorigin="anonymous">
                    @else
                        <div class="d32-photo-placeholder"></div>
                    @endif
                </div>

            </div>
        </div>

        {{-- ══ Description ══ --}}
        @if (!empty($menu['description']))
            <div class="d32-desc">
                <p>{{ Str::limit($menu['description'], 90, '…') }}</p>
            </div>
        @endif

        {{-- ══ Order now button + address ══ --}}
        <div class="d32-order">
            <div class="d32-order-btn">
                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7 18c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zM5.17 5H20l-1.68 8.39a2 2 0 0 1-1.97 1.61H8.32a2 2 0 0 1-1.97-1.69L5.17 5zM3 3H1M5.17 5 4 1H1"/>
                </svg>
                <span>Order Now</span>
            </div>

            @if (!empty(@user()->address))
                <div class="d32-order-address">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                    </svg>
                    <span>{{ @user()->address }}</span>
                </div>
            @endif
        </div>

        {{-- ══ Footer — website left, phone right ══ --}}
        <div class="d32-footer">
            @if (!empty(@user()->website_domain))
                <span class="d32-footer-website">{{ @user()->website_domain }}</span>
            @else
                <span class="d32-footer-website">&nbsp;</span>
            @endif

            @if (!empty(@user()->phone))
                <div class="d32-footer-phone">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1C10.33 21 3 13.67 3 4c0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.24 1.02l-2.21 2.2z"/>
                    </svg>
                    <span>{{ @user()->phone }}</span>
                </div>
            @endif
        </div>

    </div>{{-- /.design32-card --}}

    {{-- <button type="button" class="d32-download-btn" onclick="downloadDesign32()">&#8595; Download Poster</button> --}}

</div>{{-- /.design32-wrapper --}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<script>
    function downloadDesign32() {
        var card   = document.getElementById('posterCard32');
        var button = document.querySelector('.d32-download-btn');
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
                scale: scale, backgroundColor: '#1c1a1a',
                logging: false, useCORS: true, allowTaint: true, imageTimeout: 15000
            });
        }).then(function(canvas) {
            var link = document.createElement('a');
            link.download = 'menu-poster-design32.png';
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
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton&family=Lato:wght@400;700;900&family=Water+Brush&display=swap" rel="stylesheet">

<style>
    /* ── CSS Variables ── */
    .design24-wrapper {
        --d24-cream:      #fdf0d5;
        --d24-cream-deep: #f5e4c0;
        --d24-brown:      #3a1a05;
        --d24-accent:     {{ $themeColor }};
        --d24-gold:       #f5c842;
        --d24-texture-linen: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M0 8 L8 0 M-2 2 L2 -2 M6 10 L10 6' stroke='%23c4a574' stroke-width='0.35' opacity='0.22'/%3E%3C/svg%3E");
        --d24-texture-grain: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='280' height='280'%3E%3Cfilter id='ng'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.75' numOctaves='4' stitchTiles='stitch'/%3E%3CfeColorMatrix type='saturate' values='0'/%3E%3C/filter%3E%3Crect width='280' height='280' filter='url(%23ng)' opacity='0.09'/%3E%3C/svg%3E");
        --d24-texture-star: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='56' height='56'%3E%3Ccircle cx='28' cy='28' r='3' fill='%23b8860b' opacity='0.1'/%3E%3C/svg%3E");
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        font-family: 'Lato', sans-serif;
    }

    /* ── CARD ── */
    .design24-wrapper .design24-card {
        width: 100%;
        max-width: 340px;
        aspect-ratio: 4 / 5;
        overflow: hidden;
        position: relative;
        box-sizing: border-box;
        box-shadow: 0 22px 50px rgba(58,26,5,0.22), 0 0 0 1px rgba(58,26,5,0.08);
        container-type: inline-size;
        display: flex;
        flex-direction: column;
    }

    /* ── CARD BG LAYER (export-safe, real div) ── */
    .design24-wrapper .d24-card-bg {
        position: absolute;
        inset: 0;
        z-index: 0;
        background-color: var(--d24-cream);
        background-image:
            var(--d24-texture-grain),
            var(--d24-texture-star),
            var(--d24-texture-linen);
        background-size: 280px 280px, 56px 56px, 8px 8px;
    }

    /* dashed inner frame (real div, not ::before) */
    .design24-wrapper .d24-card-frame {
        position: absolute;
        inset: 5px;
        border: 1px dashed rgba(58,26,5,0.18);
        pointer-events: none;
        z-index: 20;
    }

    /* ══ TOP SECTION ══ */
    .design24-wrapper .d24-top {
        flex: 0 0 62cqw;
        position: relative;
        overflow: hidden;
        z-index: 2;
    }

    /* top section bg — separate div so no pseudo-element needed */
    .design24-wrapper .d24-top-bg {
        position: absolute;
        inset: 0;
        z-index: 0;
        background-color: transparent;
        background-image:
            var(--d24-texture-grain),
            var(--d24-texture-star),
            var(--d24-texture-linen);
        background-size: 260px 260px, 48px 48px, 8px 8px;
    }

    /* subtle grid lines */
    .design24-wrapper .d24-top-grid {
        position: absolute;
        inset: 0;
        pointer-events: none;
        z-index: 1;
        background-image:
            repeating-linear-gradient(0deg,   transparent, transparent 23px, rgba(180,140,80,0.045) 23px, rgba(180,140,80,0.045) 24px),
            repeating-linear-gradient(90deg,  transparent, transparent 23px, rgba(180,140,80,0.035) 23px, rgba(180,140,80,0.035) 24px);
    }

    /* ── LOGO ── */
    .design24-wrapper .d24-logo-area {
        position: absolute;
        top: 4cqw;
        left: 5cqw;
        z-index: 10;
        display: flex;
        align-items: center;
        gap: 2cqw;
        max-width: 42cqw;
    }

    .design24-wrapper .d24-logo-img {
        height: 2rem;
        width: auto;
        display: block;
        flex-shrink: 0;
    }

    .design24-wrapper .d24-logo-fallback {
        width: 10cqw;
        height: 10cqw;
        border-radius: 50%;
        background: var(--d24-accent);
        color: #fff;
        font-family: 'Anton', sans-serif;
        font-size: 5cqw;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        box-shadow: 0 3px 10px rgba(0,0,0,0.15);
    }

    /* ── DECORATIVE SPLATS ── */
    .design24-wrapper .d24-splat {
        position: absolute;
        z-index: 3;
        pointer-events: none;
        background: var(--d24-accent);
        opacity: 0.5;
    }

    .design24-wrapper .d24-splat-tl {
        top: 28cqw; left: 3cqw;
        width: 5cqw; height: 3.5cqw;
        border-radius: 60% 40% 55% 45%;
        transform: rotate(-20deg);
    }

    .design24-wrapper .d24-splat-tr {
        top: 22cqw; right: 4cqw;
        width: 4cqw; height: 3cqw;
        border-radius: 50% 60% 40% 55%;
        transform: rotate(30deg);
    }

    .design24-wrapper .d24-splat-ml {
        top: 40cqw; left: 6cqw;
        width: 3cqw; height: 2cqw;
        border-radius: 55% 45% 50% 50%;
    }

    /* ══ ACCENT BAND ══ */
    /* Band sits in normal flow. Circle overlaps it from above via absolute+z-index on card level */
    .design24-wrapper .d24-brown-band {
        flex: 0 0 34cqw;
        position: relative;
        z-index: 3;
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        padding: 4cqw 5.5cqw 2.5cqw;
        overflow: hidden;
    }

    /* band solid bg */
    .design24-wrapper .d24-band-bg {
        position: absolute;
        inset: 0;
        z-index: 0;
        background-color: var(--d24-accent);
        background-image:
            var(--d24-texture-grain),
            var(--d24-texture-linen);
        background-size: 220px 220px, 8px 8px;
    }

    /* wave curve at top of band — real SVG, export-safe */
    .design24-wrapper .d24-band-wave-svg {
        position: absolute;
        top: -1px;
        left: -1px;
        right: -1px;
        width: calc(100% + 2px);
        height: 8cqw;
        z-index: 1;
        display: block;
    }

    /* top border line on band */
    .design24-wrapper .d24-band-border {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 3px;
        background: rgba(255,255,255,0.28);
        z-index: 2;
    }

    /* menu name */
    .design24-wrapper .d24-item-name-script {
        font-family: 'Water Brush', cursive;
        font-size: 9cqw;
        font-weight: 400;
        color: #ffffff;
        line-height: 1.1;
        margin: 0;
        letter-spacing: 0.5px;
        position: relative;
        z-index: 4;
        text-align: center !important;
    }

    .design24-wrapper .d24-item-name-script--long {
        font-size: 8cqw;
        text-align: center !important;
    }

    .design24-wrapper .d24-desc {
        font-size: 8px;
        color: rgba(255,255,255,0.65);
        line-height: 1.55;
        margin: 1.5cqw 0 0;
        font-weight: 400;
        position: relative;
        z-index: 4;
        text-align: center !important;
    }

    /* ══ FOOD CIRCLE — positioned on card level to overlap band ══ */
    /* Parent is .design24-card (position:relative, overflow:hidden) */
    .design24-wrapper .d24-food-circle-wrap {
        position: absolute;
        top: 13cqw;
        left: 50%;
        transform: translateX(-50%);
        z-index: 8;
        width: 62cqw;
        height: 62cqw;
        pointer-events: none;
    }

    /* pink/accent outer ring */
    .design24-wrapper .d24-food-ring-outer {
        position: absolute;
        inset: 0;
        border-radius: 50%;
        border: 3.5cqw solid var(--d24-accent);
        box-shadow: 0 8px 28px rgba(58,26,5,0.18);
        z-index: 2;
    }

    /* dashed inner ring */
    .design24-wrapper .d24-food-ring-inner {
        position: absolute;
        inset: 2cqw;
        border-radius: 50%;
        border: 1px dashed rgba(255,255,255,0.6);
        z-index: 3;
    }

    /* food image clip */
    .design24-wrapper .d24-food-circle {
        position: absolute;
        inset: 3.5cqw;
        border-radius: 50%;
        overflow: hidden;
        z-index: 1;
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

    /* ORDER NOW badge — right side of circle, at band level */
    .design24-wrapper .d24-order-badge {
        position: absolute;
        bottom: 10cqw;
        right: -1cqw;
        z-index: 5;
        background: var(--d24-accent);
        color: #fff;
        font-size: 7px;
        font-weight: 900;
        letter-spacing: 0.18em;
        text-transform: uppercase;
        padding: 5px 10px;
        border: 1.5px solid rgba(255,255,255,0.5);
        white-space: nowrap;
        box-shadow: 0 4px 12px rgba(0,0,0,0.25);
        pointer-events: auto;
    }

    /* ══ FOOTER ══ */
    .design24-wrapper .d24-footer {
        flex: 1;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 2.5cqw 5cqw;
        position: relative;
        overflow: hidden;
        min-height: 0;
        z-index: 2;
    }

    /* footer bg — real div */
    .design24-wrapper .d24-footer-bg {
        position: absolute;
        inset: 0;
        z-index: 0;
        background-color: var(--d24-cream);
        background-image:
            var(--d24-texture-grain),
            var(--d24-texture-star),
            var(--d24-texture-linen);
        background-size: 240px 240px, 44px 44px, 8px 8px;
        border-top: 1px solid rgba(58,26,5,0.1);
    }

    /* yellow brush stroke */
    .design24-wrapper .d24-brush {
        position: absolute;
        left: 3cqw;
        top: 50%;
        transform: translateY(-50%);
        width: 46cqw;
        height: 62%;
        background: var(--d24-gold);
        border-radius: 2px 28px 28px 2px;
        opacity: 0.28;
        z-index: 1;
        clip-path: polygon(0 18%, 100% 0%, 100% 82%, 0% 100%);
    }

    /* ── FOOTER LEFT ── */
    .design24-wrapper .d24-footer-left {
        display: flex;
        align-items: center;
        gap: 2cqw;
        z-index: 2;
        position: relative;
        min-width: 0;
    }

    .design24-wrapper .d24-phone-circle {
        width: 9.5cqw;
        height: 9.5cqw;
        border-radius: 50%;
        background: var(--d24-accent);
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        box-shadow: 0 3px 10px rgba(0,0,0,0.15);
    }

    .design24-wrapper .d24-phone-circle svg {
        width: 4.5cqw;
        height: 4.5cqw;
        fill: #fff;
    }

    .design24-wrapper .d24-delivery-label {
        font-size: 7px;
        font-weight: 700;
        color: var(--d24-brown);
        letter-spacing: 0.12em;
        text-transform: uppercase;
        line-height: 1;
        margin-bottom: 0.5cqw;
    }

    .design24-wrapper .d24-phone-num {
        font-family: 'Anton', sans-serif;
        font-size: 4.2cqw;
        color: #1a1a1a;
        letter-spacing: 0.5px;
        line-height: 1;
        white-space: nowrap;
    }

    /* ── FOOTER RIGHT ── */
    .design24-wrapper .d24-footer-right {
        text-align: right;
        z-index: 2;
        position: relative;
        min-width: 0;
    }

    .design24-wrapper .d24-rest-name {
        font-size: 8px;
        font-weight: 900;
        color: #1a1a1a;
        line-height: 1.2;
        margin-bottom: 0.4cqw;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        max-width: 34cqw;
    }

    .design24-wrapper .d24-rest-address {
        font-size: 7px;
        color: #666;
        line-height: 1.35;
        max-width: 34cqw;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .design24-wrapper .d24-rest-web {
        font-size: 7px;
        color: #888;
        line-height: 1.2;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        max-width: 34cqw;
    }

    /* ── DOWNLOAD BTN ── */
    .design24-wrapper .d24-download-btn {
        margin-top: 10px;
        background: var(--d24-accent);
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
    .design24-wrapper .d24-download-btn:hover   { opacity: .88; transform: translateY(-2px); }
    .design24-wrapper .d24-download-btn:active   { transform: translateY(0); }
    .design24-wrapper .d24-download-btn:disabled { opacity: .5; cursor: not-allowed; transform: none; }
</style>

<div class="design24-wrapper">
    <div class="design24-card" id="posterCard24">

        {{-- CARD BACKGROUND (export-safe real div) --}}
        <div class="d24-card-bg"></div>
        <div class="d24-card-frame"></div>

        {{-- ══ TOP SECTION ══ --}}
        <div class="d24-top">
            <div class="d24-top-bg"></div>
            <div class="d24-top-grid"></div>

            {{-- LOGO --}}
            <div class="d24-logo-area">
                @if (isset($logourl) && $logourl)
                    <img src="{{ $logourl }}" alt="logo" class="d24-logo-img" crossorigin="anonymous">
                @else
                    <div class="d24-logo-fallback">{{ strtoupper(substr(@user()->name ?? 'R', 0, 1)) }}</div>
                @endif
            </div>

            {{-- SPLATS --}}
            <div class="d24-splat d24-splat-tl"></div>
            <div class="d24-splat d24-splat-tr"></div>
            <div class="d24-splat d24-splat-ml"></div>
        </div>{{-- /.d24-top --}}

        {{-- ══ FOOD CIRCLE — on card level so it overlaps band ══ --}}
        <div class="d24-food-circle-wrap">
            <div class="d24-food-ring-outer"></div>
            <div class="d24-food-ring-inner"></div>
            <div class="d24-food-circle">
                @if (isset($menuImageUrl) && $menuImageUrl)
                    <img src="{{ $menuImageUrl }}" alt="{{ @$menu['name'] ?? 'Menu Item' }}" class="js-poster-menu-image" crossorigin="anonymous">
                @else
                    <div class="d24-food-placeholder"></div>
                @endif
            </div>
            <div class="d24-order-badge">Order Now</div>
        </div>

        {{-- ══ ACCENT BAND ══ --}}
        <div class="d24-brown-band">
            <div class="d24-band-bg"></div>
            <div class="d24-band-border"></div>

            {{-- Wave curve at top — inline SVG, export-safe --}}
            <svg class="d24-band-wave-svg" viewBox="0 0 340 27" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 27 Q85 0 170 0 Q255 0 340 27 Z" fill="{{ $themeColor }}"/>
            </svg>

            <p class="d24-item-name-script{{ !empty($menu['name']) && strlen($menu['name']) > 14 ? ' d24-item-name-script--long' : '' }}">
              @if (strlen(@$menu['name']) <= 20)

                   {{ @$menu['name'] }}
             @else
             Zest Quest
            @endif

            </p>

            @if (!empty($menu['description']))
                <p class="d24-desc">{{ Str::limit($menu['description'], 100, '...') }}</p>
            @endif
        </div>{{-- /.d24-brown-band --}}

        {{-- ══ FOOTER ══ --}}
        <div class="d24-footer">
            <div class="d24-footer-bg"></div>
            <div class="d24-brush"></div>

            {{-- LEFT: phone --}}
            @if(!empty(@user()->phone))
                <div class="d24-footer-left">
                    <div class="d24-phone-circle">
                        <svg viewBox="0 0 24 24">
                            <path d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1C10.33 21 3 13.67 3 4c0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.24 1.02l-2.21 2.2z"/>
                        </svg>
                    </div>
                    <div>
                        <div class="d24-delivery-label">Contact Us</div>
                        <div class="d24-phone-num">{{ @user()->phone }}</div>
                    </div>
                </div>
            @endif

            {{-- RIGHT: restaurant info --}}
            <div class="d24-footer-right">
                <div class="d24-rest-name">{{ @user()->name ?? '' }}</div>

                @if(!empty(@user()->address))
                    <div class="d24-rest-address">{{ @user()->address }}</div>
                @endif

                @if(!empty(@user()->website_domain))
                    <div class="d24-rest-web">{{ @user()->website_domain }}</div>
                @endif
            </div>
        </div>{{-- /.d24-footer --}}

    </div>{{-- /.design24-card --}}

    {{-- <button type="button" class="d24-download-btn" onclick="downloadDesign24()">⬇ Download Poster</button> --}}

</div>{{-- /.design24-wrapper --}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<script>
    function downloadDesign24() {
        var card   = document.getElementById('posterCard24');
        var button = document.querySelector('.d24-download-btn');
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
                scale:           scale,
                backgroundColor: '#fdf0d5',
                logging:         false,
                useCORS:         true,
                allowTaint:      true,
                imageTimeout:    15000
            });
        }).then(function(canvas) {
            var link      = document.createElement('a');
            link.download = 'menu-poster-design24.png';
            link.href     = canvas.toDataURL('image/png', 1.0);
            link.click();
            button.innerHTML = 'Download Poster';
            button.disabled  = false;
        }).catch(function(error) {
            console.error('Error generating image:', error);
            alert('Failed to generate image. Please try again.');
            button.innerHTML = 'Download Poster';
            button.disabled  = false;
        });
    }
</script>
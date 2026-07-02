<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Spicy+Rice&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Anton&family=Open+Sans:ital,wght@0,400;0,600;0,700;0,800;1,400&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Matemasie&display=swap" rel="stylesheet">

<style>
    /* ═══════════════════════════════════════════════════════
       design30 — PREMIUM REDESIGN
       Layout reference (container-query units, 4:5 card):
         Card height  = 125cqw
         Top section  = 0–62cqw   (theme colour + dark overlay)
         Gold divider = 62cqw
         Bottom section = 62–125cqw (warm parchment)
         Food board   = top 17cqw, h 52cqw → bottom 69cqw
         Menu heading = top 72cqw
         Art divider  = top 88cqw
         Desc strip   = top 94cqw
         Tagline pills= top 102cqw
         Footer bar   = bottom 0, h 16cqw → top 109cqw
    ═══════════════════════════════════════════════════════ */

    .design30-wrapper {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        font-family: 'Open Sans', sans-serif;
    }

    .design30-wrapper .design30-card {
        width: 100%;
        max-width: 380px;
        aspect-ratio: 4 / 5;
        position: relative;
        overflow: hidden;
        box-shadow:
            0 32px 80px rgba(0,0,0,0.45),
            0 0 0 1px rgba(201,168,76,0.3);
        container-type: inline-size;
        box-sizing: border-box;
        background: #f0ece1;
    }

    /* ══ L0: Top theme-colour section ══ */
    .design30-wrapper .d30-bg-top {
        position: absolute;
        top: 0; left: 0; right: 0;
        height: 62cqw;
        background-color: {{ $themeColor }};
        z-index: 0;
    }

    /* Deep luxury gradient overlay */
    .design30-wrapper .d30-bg-top-overlay {
        position: absolute;
        top: 0; left: 0; right: 0;
        height: 62cqw;
        background: linear-gradient(155deg,
            rgba(0,0,0,0.58) 0%,
            rgba(0,0,0,0.10) 48%,
            rgba(0,0,0,0.46) 100%);
        z-index: 1;
        pointer-events: none;
    }

    /* Subtle radial halo from top-center */
    .design30-wrapper .d30-top-halo {
        position: absolute;
        top: -8cqw; left: 15cqw; right: 15cqw;
        height: 45cqw;
        background: radial-gradient(ellipse at center top,
            rgba(255,255,255,0.13) 0%, transparent 72%);
        z-index: 2;
        pointer-events: none;
    }

    /* ══ L0b: Bottom parchment section ══ */
    .design30-wrapper .d30-bg-bottom {
        position: absolute;
        top: 62cqw; left: 0; right: 0; bottom: 0;
        background: linear-gradient(180deg, #e3ddd2 0%, #f2ede3 28%, #f2ede3 100%);
        z-index: 0;
    }

    /* ══ Diamond lattice texture (top section only) ══ */
    .design30-wrapper .d30-diamond-tex {
        position: absolute;
        top: 0; left: 0; right: 0;
        height: 62cqw;
        z-index: 2;
        pointer-events: none;
    }
    .design30-wrapper .d30-diamond-tex svg {
        width: 100%; height: 100%; display: block;
    }

    /* ══ Grain noise texture (top section) ══ */
    .design30-wrapper .d30-grain-tex {
        position: absolute;
        top: 0; left: 0; right: 0;
        height: 62cqw;
        z-index: 3;
        pointer-events: none;
        mix-blend-mode: overlay;
        opacity: 0.38;
    }
    .design30-wrapper .d30-grain-tex svg {
        width: 100%; height: 100%; display: block;
    }

    /* ══ Repeating name watermark (top section) ══ */
    .design30-wrapper .d30-watermark {
        position: absolute;
        top: -3cqw; right: -18cqw;
        width: 128cqw; height: 70cqw;
        z-index: 2;
        display: flex;
        flex-direction: column;
        gap: 1.8cqw;
        transform: rotate(-10deg);
        pointer-events: none;
        overflow: hidden;
    }
    .design30-wrapper .d30-watermark-row {
        display: flex;
        gap: 2cqw;
        flex-shrink: 0;
    }
    .design30-wrapper .d30-watermark-row span {
        font-family: 'Anton', sans-serif;
        font-size: 8.5cqw;
        line-height: 1;
        color: rgba(255,255,255,0.07);
        text-transform: uppercase;
        letter-spacing: 1px;
        white-space: nowrap;
        flex-shrink: 0;
    }

    /* ══ Gold inner card frame ══ */
    .design30-wrapper .d30-inner-frame {
        position: absolute;
        top: 2.8cqw; left: 2.8cqw;
        right: 2.8cqw; bottom: 2.8cqw;
        border: 0.5px solid rgba(201,168,76,0.42);
        z-index: 20;
        pointer-events: none;
    }

    /* ══ Decorative rosette badge (top-left) ══ */
    .design30-wrapper .d30-badge {
        position: absolute;
        top: 3.8cqw; left: 4cqw;
        width: 9cqw; height: 9cqw;
        z-index: 12;
    }
    .design30-wrapper .d30-badge svg {
        width: 100%; height: 100%; display: block;
    }

    /* ══ Logo (top-right) ══ */
    .design30-wrapper .d30-logo {
        position: absolute;
        top: 4cqw; right: 4cqw;
        z-index: 12;
    }
    .design30-wrapper .d30-logo img {
        height: 1.8rem; width: auto; display: block;
    }

    .design30-wrapper .d30-eyebrow span {
        font-family: 'Open Sans', sans-serif;
        font-size: 2cqw;
        font-weight: 700;
        letter-spacing: 3.5px;
        text-transform: uppercase;
        color: rgba(255,255,255,0.6);
    }

    /* ══ Food image board ══ */
    .design30-wrapper .d30-food-board {
        position: absolute;
        top: 17cqw;
        left: 8cqw; right: 8cqw;
        height: 52cqw;
        z-index: 6;
        border-radius: 1.5cqw;
        overflow: hidden;
    }
    .design30-wrapper .d30-food-board img {
        width: 100%; height: 100%;
        object-fit: cover; object-position: center;
        display: block;
    }
    .design30-wrapper .d30-food-placeholder {
        width: 100%; height: 100%;
        background: {{ $themeColor }};
    }

    /* Radial vignette over food image — SVG-based (html2canvas-safe) */
    .design30-wrapper .d30-food-vignette {
        position: absolute;
        top: 17cqw;
        left: 8cqw; right: 8cqw;
        height: 52cqw;
        z-index: 7;
        border-radius: 1.5cqw;
        overflow: hidden;
        pointer-events: none;
    }
    .design30-wrapper .d30-food-vignette svg {
        width: 100%; height: 100%; display: block;
    }

    /* ══ Corner ornament brackets (4 corners of food image) ══ */
    .design30-wrapper .d30-corner-orn {
        position: absolute;
        width: 6cqw; height: 6cqw;
        z-index: 9;
        pointer-events: none;
    }
    /* TL = default; TR = mirror X; BL = mirror Y; BR = mirror both */
    .design30-wrapper .d30-co-tl { top: 16.3cqw; left: 7.3cqw; }
    .design30-wrapper .d30-co-tr { top: 16.3cqw; right: 7.3cqw; transform: scaleX(-1); }
    .design30-wrapper .d30-co-bl { top: 68.3cqw; left: 7.3cqw; transform: scaleY(-1); }
    .design30-wrapper .d30-co-br { top: 68.3cqw; right: 7.3cqw; transform: scale(-1, -1); }

    /* ══ Menu name heading ══ */
    .design30-wrapper .d30-menu-heading {
        position: absolute;
        top: 72cqw;
        left: 6cqw; right: 6cqw;
        z-index: 6;
        text-align: center;
    }
    .design30-wrapper .d30-menu-heading h2 {
        font-family: "Matemasie", sans-serif;
        font-weight: 400;
        font-size: 9cqw;
        color: #49473c;
        line-height: 1.0;
        text-transform: uppercase;
        margin: 0;
        letter-spacing: 0.4px;
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
    }

    /* ══ Art deco ornamental divider ══ */
    .design30-wrapper .d30-art-divider {
        position: absolute;
        top: 84cqw;
        left: 10cqw; right: 10cqw;
        height: 5cqw;
        z-index: 6;
    }
    .design30-wrapper .d30-art-divider svg {
        width: 100%; height: 100%; display: block;
        overflow: visible;
    }

    /* ══ Description strip ══ */
    .design30-wrapper .d30-desc-strip {
        position: absolute;
        top: 94cqw;
        left: 9cqw; right: 9cqw;
        z-index: 6;
        text-align: center;
    }
    .design30-wrapper .d30-desc-strip p {
        font-family: 'Open Sans', sans-serif;
        font-size: 2.2cqw;
        font-weight: 400;
        font-style: italic;
        color: #6b6050;
        line-height: 1.45;
        margin: 0;
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
    }

    /* ══ Tagline pills (gold accent, not theme colour) ══ */
    .design30-wrapper .d30-tagline-pills {
        position: absolute;
        top: 98cqw;
        left: 4cqw; right: 4cqw;
        z-index: 6;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 1.5cqw;
        flex-wrap: nowrap;
    }
    .design30-wrapper .d30-pill-outline {
        display: inline-block;
        text-align: center;
        background: transparent;
        border: 0.4cqw solid #c9a84c;
        border-radius: 30px;
        padding: 0.9cqw 2.8cqw;
        flex-shrink: 0;
        line-height: 0;
    }
    .design30-wrapper .d30-pill-outline span {
        font-family: 'Open Sans', sans-serif;
        font-size: 1.9cqw;
        font-weight: 800;
        color: #8a6c1e;
        letter-spacing: 0.6px;
        text-transform: uppercase;
        line-height: 1;
        display: inline-block;
        vertical-align: middle;
        white-space: nowrap;
    }
    .design30-wrapper .d30-pill-filled {
        display: inline-block;
        text-align: center;
        background: #c9a84c;
        border-radius: 30px;
        padding: 0.9cqw 2.8cqw;
        flex-shrink: 0;
        line-height: 0;
    }
    .design30-wrapper .d30-pill-filled span {
        font-family: 'Open Sans', sans-serif;
        font-size: 1.9cqw;
        font-weight: 800;
        color: #fff;
        letter-spacing: 0.6px;
        text-transform: uppercase;
        line-height: 1;
        display: inline-block;
        vertical-align: middle;
        white-space: nowrap;
    }

    /* ══ Footer bar ══ */
    .design30-wrapper .d30-footer {
        position: absolute;
        bottom: 0; left: 0; right: 0;
        height: 16cqw;
        z-index: 6;
        border-top: 0.5px solid #c9a84c;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 4.5cqw;
        box-sizing: border-box;
        gap: 3cqw;
    }
    .design30-wrapper .d30-footer-left {
        flex-shrink: 1;
        min-width: 0;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        gap: 0.7cqw;
    }
    .design30-wrapper .d30-restaurant-name {
        font-family: 'Anton', sans-serif;
        font-size: 3.6cqw;
        color: #1c1a16;
        line-height: 1.0;
        text-transform: uppercase;
        margin: 0;
        letter-spacing: 0.2px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        max-width: 100%;
    }
    .design30-wrapper .d30-website-row {
        display: flex;
        align-items: center;
        gap: 0.8cqw;
    }
    .design30-wrapper .d30-website-row svg {
        width: 2.4cqw; height: 2.4cqw; flex-shrink: 0;
    }
    .design30-wrapper .d30-website-row span {
        font-family: 'Open Sans', sans-serif;
        font-size: 1.9cqw;
        font-weight: 700;
        color: #4a4030;
        text-transform: lowercase;
        letter-spacing: 0.2px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    .design30-wrapper .d30-footer-right {
        flex-shrink: 0;
        display: flex;
        flex-direction: column;
        align-items: flex-end;
        gap: 0.7cqw;
        max-width: 42cqw;
    }
    .design30-wrapper .d30-phone-row {
        display: flex;
        align-items: center;
        gap: 0.8cqw;
    }
    .design30-wrapper .d30-phone-row svg {
        width: 2.4cqw; height: 2.4cqw; flex-shrink: 0;
    }
    .design30-wrapper .d30-phone-row span {
        font-family: 'Open Sans', sans-serif;
        font-size: 2.1cqw;
        font-weight: 700;
        color: #1c1a16;
        letter-spacing: 0.2px;
        white-space: nowrap;
    }
    .design30-wrapper .d30-address-row {
        display: flex;
        align-items: flex-start;
        gap: 0.8cqw;
        text-align: right;
    }
    .design30-wrapper .d30-address-row svg {
        width: 2.2cqw; height: 2.2cqw;
        flex-shrink: 0;
        margin-top: 0.2cqw;
    }
    .design30-wrapper .d30-address-row span {
        font-family: 'Open Sans', sans-serif;
        font-size: 1.7cqw;
        font-weight: 600;
        color: #7a7060;
        line-height: 1.35;
        text-align: right;
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
    }

    /* ── Download button ── */
    .design30-wrapper .d30-download-btn {
        margin-top: 10px;
        background: #c9a84c;
        color: #ffffff;
        border: none;
        padding: 8px 20px;
        font-size: 12px;
        font-weight: 700;
        border-radius: 30px;
        cursor: pointer;
        font-family: 'Open Sans', sans-serif;
        transition: opacity 0.2s;
        letter-spacing: 0.5px;
    }
    .design30-wrapper .d30-download-btn:hover    { opacity: .85; }
    .design30-wrapper .d30-download-btn:disabled { opacity: .5; cursor: not-allowed; }
</style>

<div class="design30-wrapper">
    <div class="design30-card" id="posterCard30">

        {{-- ══════════════════════════════════════════
             LAYER STACK — bottom → top:
             0  bg-top (theme colour solid)
             1  bg-top-overlay (dark luxury gradient)
             2  diamond-tex + watermark + top-halo
             3  grain-tex
             0  bg-bottom (cream)
             6  food-board
             7  food-vignette
             8  section-line + eyebrow
             9  corner ornaments
             12 badge, logo
             20 inner-frame (always on top)
        ══════════════════════════════════════════ --}}

        {{-- ══ L0: Backgrounds ══ --}}
        <div class="d30-bg-top" style="background-color: {{ $themeColor }};"></div>
        <div class="d30-bg-top-overlay" aria-hidden="true"></div>
        <div class="d30-bg-bottom" aria-hidden="true"></div>

        {{-- ══ Diamond lattice SVG texture ══ --}}
        <div class="d30-diamond-tex" aria-hidden="true">
            <svg width="400" height="240" viewBox="0 0 400 240"
                 xmlns="http://www.w3.org/2000/svg"
                 preserveAspectRatio="xMidYMid slice">
                <defs>
                    <pattern id="d30Diamond" x="0" y="0"
                             width="20" height="20"
                             patternUnits="userSpaceOnUse">
                        <!-- Diamond outline -->
                        <path d="M10 0 L20 10 L10 20 L0 10 Z"
                              fill="none"
                              stroke="rgba(255,255,255,0.16)"
                              stroke-width="0.45"/>
                        <!-- Inner cross-hair -->
                        <line x1="10" y1="4" x2="10" y2="16"
                              stroke="rgba(255,255,255,0.06)"
                              stroke-width="0.4"/>
                        <line x1="4"  y1="10" x2="16" y2="10"
                              stroke="rgba(255,255,255,0.06)"
                              stroke-width="0.4"/>
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#d30Diamond)"/>
            </svg>
        </div>

        {{-- ══ Grain noise texture ══ --}}
        <div class="d30-grain-tex" aria-hidden="true">
            <svg width="400" height="240" viewBox="0 0 400 240"
                 xmlns="http://www.w3.org/2000/svg"
                 preserveAspectRatio="none">
                <filter id="d30GrainF">
                    <feTurbulence type="fractalNoise"
                                  baseFrequency="0.78"
                                  numOctaves="3"
                                  stitchTiles="stitch"
                                  result="noise"/>
                    <feColorMatrix in="noise" type="matrix"
                        values="0 0 0 0 0
                                0 0 0 0 0
                                0 0 0 0 0
                                0 0 0 0.38 0"/>
                </filter>
                <rect width="100%" height="100%" filter="url(#d30GrainF)"/>
            </svg>
        </div>

        {{-- ══ Radial halo (top-center soft light) ══ --}}
        <div class="d30-top-halo" aria-hidden="true"></div>

        {{-- ══ Watermark — repeating restaurant name ══ --}}
        <div class="d30-watermark" aria-hidden="true">
            @php $d30WName = Str::upper(@user()->name ?? ''); @endphp
            @for ($i = 0; $i < 6; $i++)
                <div class="d30-watermark-row">
                    <span>{{ $d30WName }}</span>
                    <span>{{ $d30WName }}</span>
                    <span>{{ $d30WName }}</span>
                </div>
            @endfor
        </div>

        {{-- ══ Gold inner frame (full card) ══ --}}
        <div class="d30-inner-frame" aria-hidden="true"></div>

        {{-- ══ Decorative rosette badge (top-left) ══ --}}
        <div class="d30-badge" aria-hidden="true">
            <svg viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg" fill="none">
                <!-- Dashed outer ring -->
                <circle cx="18" cy="18" r="15"
                        stroke="rgba(201,168,76,0.65)"
                        stroke-width="0.55"
                        stroke-dasharray="2.4 1.6"/>
                <!-- Solid inner ring -->
                <circle cx="18" cy="18" r="10.5"
                        stroke="rgba(201,168,76,0.85)"
                        stroke-width="0.6"/>
                <!-- Vertical & horizontal axis lines -->
                <line x1="18" y1="7.5"  x2="18" y2="10.5"  stroke="#c9a84c" stroke-width="0.7" opacity="0.7"/>
                <line x1="18" y1="25.5" x2="18" y2="28.5"  stroke="#c9a84c" stroke-width="0.7" opacity="0.7"/>
                <line x1="7.5"  y1="18" x2="10.5"  y2="18" stroke="#c9a84c" stroke-width="0.7" opacity="0.7"/>
                <line x1="25.5" y1="18" x2="28.5" y2="18"  stroke="#c9a84c" stroke-width="0.7" opacity="0.7"/>
                <!-- Diagonal axis lines -->
                <line x1="11" y1="11" x2="13" y2="13" stroke="#c9a84c" stroke-width="0.5" opacity="0.45"/>
                <line x1="25" y1="11" x2="23" y2="13" stroke="#c9a84c" stroke-width="0.5" opacity="0.45"/>
                <line x1="11" y1="25" x2="13" y2="23" stroke="#c9a84c" stroke-width="0.5" opacity="0.45"/>
                <line x1="25" y1="25" x2="23" y2="23" stroke="#c9a84c" stroke-width="0.5" opacity="0.45"/>
                <!-- Center diamond -->
                <path d="M18 14 L21 18 L18 22 L15 18 Z"
                      fill="rgba(201,168,76,0.3)"
                      stroke="#c9a84c"
                      stroke-width="0.55"/>
                <!-- Cardinal dots (outer ring) -->
                <circle cx="18" cy="2.5" r="1.1" fill="#c9a84c" opacity="0.7"/>
                <circle cx="33.5" cy="18" r="1.1" fill="#c9a84c" opacity="0.7"/>
                <circle cx="18" cy="33.5" r="1.1" fill="#c9a84c" opacity="0.7"/>
                <circle cx="2.5" cy="18" r="1.1" fill="#c9a84c" opacity="0.7"/>
            </svg>
        </div>

        {{-- ══ Logo (top-right, optional) ══ --}}
        @if (!empty($logourl))
            <div class="d30-logo">
                <img src="{{ $logourl }}" alt="logo" crossorigin="anonymous">
            </div>
        @endif

        {{-- ══ Food image ══ --}}
        <div class="d30-food-board">
            @if (!empty($menuImageUrl))
                <img src="{{ $menuImageUrl }}"
                     alt="{{ $menu['name'] ?? 'Food' }}"
                     class="js-poster-menu-image"
                     crossorigin="anonymous">
            @else
                <div class="d30-food-placeholder"></div>
            @endif
        </div>

        {{-- ══ Food image radial vignette (SVG-based, html2canvas-safe) ══ --}}
        <div class="d30-food-vignette" aria-hidden="true">
            <svg width="100%" height="100%" viewBox="0 0 400 240" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <radialGradient id="d30VignetteGrad" cx="50%" cy="50%" r="70%">
                        <stop offset="50%" stop-color="#000000" stop-opacity="0"/>
                        <stop offset="100%" stop-color="#000000" stop-opacity="0.32"/>
                    </radialGradient>
                </defs>
                <rect width="100%" height="100%" fill="url(#d30VignetteGrad)"/>
            </svg>
        </div>

        {{-- ══ Menu name heading ══ --}}
        <div class="d30-menu-heading">
            @if (!empty($menu['name']) && strlen($menu['name']) <= 19)
            <h2>{{ $menu['name'] }}</h2>
             @else
             <h2>The Flavor Express</h2>
              @endif
        </div>

        {{-- ══ Art deco ornamental divider ══ --}}
        <!--<div class="d30-art-divider" aria-hidden="true">-->
        <!--    {{-- viewBox is 200×18; preserveAspectRatio stretches to full width --}}-->
        <!--    <svg viewBox="0 0 200 18"-->
        <!--         xmlns="http://www.w3.org/2000/svg"-->
        <!--         preserveAspectRatio="xMidYMid meet">-->
                <!-- Left main line -->
        <!--        <line x1="0"  y1="9" x2="72" y2="9"-->
        <!--              stroke="#c9a84c" stroke-width="0.65" opacity="0.62"/>-->
                <!-- Left secondary line -->
        <!--        <line x1="0"  y1="5.5" x2="60" y2="5.5"-->
        <!--              stroke="#c9a84c" stroke-width="0.35" opacity="0.32"/>-->
                <!-- Left dot -->
        <!--        <circle cx="74.5" cy="9" r="1.8"-->
        <!--                fill="#c9a84c" opacity="0.8"/>-->
                <!-- Center diamond -->
        <!--        <path d="M100 1 L113 9 L100 17 L87 9 Z"-->
        <!--              fill="#c9a84c" opacity="0.92"/>-->
                <!-- Center diamond inner highlight -->
        <!--        <path d="M100 4.5 L109 9 L100 13.5 L91 9 Z"-->
        <!--              fill="none"-->
        <!--              stroke="rgba(255,255,255,0.45)"-->
        <!--              stroke-width="0.5"/>-->
                <!-- Right dot -->
        <!--        <circle cx="125.5" cy="9" r="1.8"-->
        <!--                fill="#c9a84c" opacity="0.8"/>-->
                <!-- Right main line -->
        <!--        <line x1="128" y1="9"   x2="200" y2="9"-->
        <!--              stroke="#c9a84c" stroke-width="0.65" opacity="0.62"/>-->
                <!-- Right secondary line -->
        <!--        <line x1="140" y1="5.5" x2="200" y2="5.5"-->
        <!--              stroke="#c9a84c" stroke-width="0.35" opacity="0.32"/>-->
        <!--    </svg>-->
        <!--</div>-->

        {{-- ══ Description strip ══ --}}
        <!--@if (!empty($menu['description']))-->
        <!--    <div class="d30-desc-strip">-->
        <!--        <p>{{ Str::limit($menu['description'], 80, '…') }}</p>-->
        <!--    </div>-->
        <!--@endif-->

        {{-- ══ Tagline pills (gold palette) ══ --}}
        <div class="d30-tagline-pills">
            <div class="d30-pill-outline">
                <span>Made with Love</span>
            </div>
            <div class="d30-pill-filled">
                <span>Tastes Like Home</span>
            </div>
        </div>

        {{-- ══ Footer: restaurant name/website LEFT · address/phone RIGHT ══ --}}
        <div class="d30-footer">

            <div class="d30-footer-left">
                <p class="d30-restaurant-name">{{ Str::limit(@user()->name ?? '', 26) }}</p>
                @if (!empty(@user()->website_domain))
                    <div class="d30-website-row">
                        <svg viewBox="0 0 24 24" fill="#c9a84c" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/>
                        </svg>
                        <span>{{ @user()->website_domain }}</span>
                    </div>
                @endif
            </div>

            <div class="d30-footer-right">
                @if (!empty(@user()->phone))
                    <div class="d30-phone-row">
                        <svg viewBox="0 0 24 24" fill="#c9a84c" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1C10.33 21 3 13.67 3 4c0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.24 1.02l-2.21 2.2z"/>
                        </svg>
                        <span>{{ @user()->phone }}</span>
                    </div>
                @endif
                @if (!empty(@user()->address))
                    <div class="d30-address-row">
                        <svg viewBox="0 0 24 24" fill="#c9a84c" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5S10.62 6.5 12 6.5s2.5 1.12 2.5 2.5S13.38 11.5 12 11.5z"/>
                        </svg>
                        <span>{{ Str::limit(@user()->address, 48, '') }}</span>
                    </div>
                @endif
            </div>

        </div>{{-- /.d30-footer --}}

    </div>{{-- /.design30-card --}}

    {{-- <button type="button" class="d30-download-btn" onclick="downloadDesign30()">&#8595; Download Poster</button> --}}

</div>{{-- /.design30-wrapper --}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<script>
    function downloadDesign30() {
        var card   = document.getElementById('posterCard30');
        var button = document.querySelector('.d30-download-btn');
        if (!card || !button) return;
        button.innerHTML = 'Generating…';
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
                scale: scale, backgroundColor: '#f2ede3',
                logging: false, useCORS: true, allowTaint: true, imageTimeout: 15000
            });
        }).then(function(canvas) {
            var link = document.createElement('a');
            link.download = 'menu-poster-design30.png';
            link.href = canvas.toDataURL('image/png', 1.0);
            link.click();
            button.innerHTML = '↓ Download Poster';
            button.disabled = false;
        }).catch(function(err) {
            console.error('design30 export error:', err);
            alert('Failed to generate image.');
            button.innerHTML = '↓ Download Poster';
            button.disabled = false;
        });
    }
</script>
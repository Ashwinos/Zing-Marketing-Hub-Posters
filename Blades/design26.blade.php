<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton&family=Bangers&family=Lato:wght@400;700;900&display=swap" rel="stylesheet">

<style>
    .design26-wrapper {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        font-family: 'Lato', sans-serif;
    }
    .design26-wrapper .design26-card {
        width: 100%;
        max-width: 340px;
        aspect-ratio: 4 / 5;
        position: relative;
        overflow: hidden;
        box-shadow: 0 20px 60px rgba(0,0,0,0.28);
        container-type: inline-size;
        box-sizing: border-box;
    }
    .design26-wrapper .d26-download-btn {
        margin-top: 10px;
        background: {{ $themeColor ?? '#e67e22' }};
        color: #fff;
        border: none;
        padding: 8px 18px;
        font-size: 12px;
        font-weight: 700;
        border-radius: 30px;
        cursor: pointer;
        font-family: 'Lato', sans-serif;
        transition: opacity 0.2s;
    }
    .design26-wrapper .d26-download-btn:hover    { opacity: .88; }
    .design26-wrapper .d26-download-btn:disabled { opacity: .5; cursor: not-allowed; }

    /* ===== L0: Orange background ===== */
    .design26-wrapper .d26-bg {
        position: absolute;
        top: 0; left: 0; right: 0; bottom: 0;
        background: {{ $themeColor ?? '#e8691e' }};
        z-index: 0;
    }

    /* ===== L1: Scattered food texture SVG ===== */
    .design26-wrapper .d26-texture-svg {
        position: absolute;
        top: 0; left: 0;
        width: 100%;
        height: 100%;
        z-index: 1;
        pointer-events: none;
        opacity: 0.11;
    }

    /* ===== L2: Top Aztec zigzag border ===== */
    .design26-wrapper .d26-border-svg {
        position: absolute;
        top: 0; left: 0;
        width: 100%;
        height: 7cqw;
        z-index: 5;
        pointer-events: none;
    }

    /* ===== L4: Headline block ===== */
    .design26-wrapper .d26-headline {
        position: absolute;
        top: 8cqw; left: 0; right: 0;
        z-index: 6;
        text-align: center;
        padding-top: 1cqw;
    }
    .design26-wrapper .d26-headline-main {
        font-family: 'Bangers', cursive;
        font-size: 27cqw;
        color: #fff5e0;
        line-height: 0.88;
        margin: 0;
        letter-spacing: 3px;
        text-transform: uppercase;
        text-shadow: 3px 3px 0 rgba(0,0,0,0.2), 1px 1px 0 #7a1a00;
    }
    .design26-wrapper .d26-headline-sub {
        display: inline-block;
        background: #2d5a1b;
        padding: 0.6cqw 4cqw;
        margin-top: -1cqw;
    }
    .design26-wrapper .d26-headline-sub-text {
        font-family: 'Anton', sans-serif;
        font-size: 4.8cqw;
        color: #f5c518;
        letter-spacing: 4px;
        text-transform: uppercase;
        line-height: 1.3;
    }

    /* ===== L5: Food photo band ===== */
    .design26-wrapper .d26-photo-band {
        position: absolute;
        top: 34cqw; left: 0; right: 0;
        height: 46cqw;
        z-index: 4;
        overflow: hidden;
    }
    .design26-wrapper .d26-photo-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        display: block;
    }
    .design26-wrapper .d26-photo-placeholder {
        width: 100%;
        height: 100%;
       
    }
    .design26-wrapper .d26-photo-fade-top {
        position: absolute;
        top: 0; left: 0; right: 0;
        height: 10cqw;
        background: linear-gradient(to bottom, rgba(0,0,0,0.2), transparent);
    }
    .design26-wrapper .d26-photo-fade-bottom {
        position: absolute;
        bottom: 0; left: 0; right: 0;
        height: 12cqw;
        background: linear-gradient(to top, rgba(0,0,0,0.28), transparent);
    }

    /* ===== L6: ORDER NOW button ===== */
    .design26-wrapper .d26-order-btn {
        position: absolute;
        top: 75cqw;
        left: 50%;
        width: 42cqw;
        margin-left: -21cqw;
        z-index: 8;
        background: #2d5a1b;
        color: #fff;
        font-family: 'Anton', sans-serif;
        font-size: 3.8cqw;
        letter-spacing: 2px;
        text-transform: uppercase;
        padding: 2.2cqw 0;
        text-align: center;
        box-shadow: 0 4px 18px rgba(0,0,0,0.3);
    }

    /* ===== L7: Lower info section ===== */
    .design26-wrapper .d26-info {
        position: absolute;
        top: 90cqw; left: 0; right: 0;
        z-index: 6;
        text-align: center;
        padding: 0 4cqw;
    }
    .design26-wrapper .d26-menu-name {
        font-family: 'Bangers', cursive;
        font-size: 6.5cqw;
        color: #ffffff;
        line-height: 1;
        margin: 0 0 1cqw 0;
        letter-spacing: 2px;
        text-transform: uppercase;
        text-shadow: 1px 1px 3px rgba(0,0,0,0.3);
    }
    .design26-wrapper .d26-menu-desc {
        font-family: 'Lato', sans-serif;
        font-size: 2.3cqw;
        color: rgba(255,255,255,0.85);
        line-height: 1.6;
        font-weight: 400;
        margin: 0 0 2cqw 0;
    }
    .design26-wrapper .d26-address {
        font-family: 'Lato', sans-serif;
        font-size: 1.9cqw;
        font-weight: 900;
        color: #ffffff;
        letter-spacing: 2px;
        text-transform: uppercase;
        margin: 0 0 0.6cqw 0;
        text-shadow: 1px 1px 2px rgba(0,0,0,0.2);
    }
    .design26-wrapper .d26-phone {
        font-family: 'Lato', sans-serif;
        font-size: 1.9cqw;
        font-weight: 700;
        color: rgba(255,255,255,0.88);
        letter-spacing: 1.5px;
        text-transform: uppercase;
        margin: 0;
        text-shadow: 1px 1px 2px rgba(0,0,0,0.2);
    }

    /* ===== L8: Dark green footer bar ===== */
    .design26-wrapper .d26-footer {
        position: absolute;
        bottom: 0; left: 0; right: 0;
        height: 10cqw;
        background: #2d5a1b;
        z-index: 9;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 4cqw;
        box-sizing: border-box;
    }
    .design26-wrapper .d26-footer-site {
        font-family: 'Lato', sans-serif;
        font-size: 2.1cqw;
        color: rgba(255,255,255,0.8);
        letter-spacing: 0.5px;
    }
    .design26-wrapper .d26-footer-logo-wrap {
        display: flex;
        align-items: center;
        flex-shrink: 0;
    }
    .design26-wrapper .d26-footer-logo {
        height: 6cqw;
        width: auto;
        max-width: 22cqw;
        display: block;
        object-fit: contain;
    }
</style>

<div class="design26-wrapper">
    <div class="design26-card" id="posterCard26">

        {{-- ============================================================
             L0: Orange background
        ============================================================ --}}
        <div class="d26-bg"></div>

        {{-- ============================================================
             L1: Scattered food-item SVG texture across entire card
             All strokes, no fills except small accent dots — stays light
        ============================================================ --}}
        <svg class="d26-texture-svg"
             viewBox="0 0 340 425" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="#7a2800" stroke-width="1.3">

            {{-- Taco top-left --}}
            <g transform="translate(12,14)">
                <path d="M0 28 Q24 4 48 28"/>
                <path d="M4 28 Q24 40 44 28"/>
                <circle cx="18" cy="20" r="2.5" fill="#7a2800" stroke="none"/>
                <circle cx="26" cy="15" r="2"   fill="#7a2800" stroke="none"/>
                <circle cx="33" cy="22" r="2"   fill="#7a2800" stroke="none"/>
            </g>

            {{-- Sombrero top-right --}}
            <g transform="translate(265,8)">
                <ellipse cx="34" cy="34" rx="32" ry="9"/>
                <ellipse cx="34" cy="28" rx="15" ry="20"/>
                <line x1="2"  y1="34" x2="66" y2="34"/>
                <path d="M20 34 Q28 38 34 39 Q40 38 48 34" stroke-width="0.9"/>
            </g>

            {{-- Lime wedge upper-left --}}
            <g transform="translate(72,56)">
                <path d="M0 0 A20 20 0 0 1 28 28 L0 0 Z"/>
                <line x1="4"  y1="4"  x2="14" y2="20"/>
                <line x1="9"  y1="2"  x2="22" y2="15"/>
                <line x1="2"  y1="9"  x2="11" y2="24"/>
            </g>

            {{-- Jalapeño upper mid --}}
            <g transform="translate(194,64)">
                <path d="M2 5 Q14 0 24 8 Q34 16 30 26 Q26 32 18 26 Q8 18 2 5 Z"/>
                <path d="M0 4 Q-4 0 2 -3"/>
            </g>

            {{-- Chili right side --}}
            <g transform="translate(304,78)">
                <path d="M5 0 Q0 16 8 32 Q16 48 12 64"/>
                <path d="M12 0 Q18 16 14 32"/>
                <ellipse cx="9" cy="2" rx="5" ry="3"/>
            </g>

            {{-- Avocado half left-mid --}}
            <g transform="translate(7,122)">
                <path d="M16 0 Q32 8 30 28 Q28 46 16 48 Q4 46 2 28 Q0 8 16 0 Z"/>
                <circle cx="16" cy="29" r="8"/>
            </g>

            {{-- Bowl upper-center --}}
            <g transform="translate(124,46)">
                <path d="M0 18 Q42 44 84 18"/>
                <ellipse cx="42" cy="18" rx="42" ry="11"/>
            </g>

            {{-- Corn cob right-lower-mid --}}
            <g transform="translate(300,192)">
                <ellipse cx="11" cy="22" rx="9" ry="22"/>
                <line x1="11" y1="2"  x2="11" y2="42"/>
                <line x1="5"  y1="5"  x2="5"  y2="39"/>
                <line x1="17" y1="5"  x2="17" y2="39"/>
                <path d="M3 42 Q-4 50 2 58 M19 42 Q26 50 20 58"/>
            </g>

            {{-- Maracas right-mid --}}
            <g transform="translate(304,182)">
                <circle cx="13" cy="12" r="11"/>
                <line x1="13" y1="23" x2="8"  y2="50"/>
            </g>

            {{-- Cactus left --}}
            <g transform="translate(8,276)">
                <line x1="20" y1="72" x2="20" y2="10"/>
                <path d="M20 26 Q8 26 8 16 Q8 9 14 9"/>
                <path d="M20 38 Q32 38 32 27 Q32 20 26 20"/>
                <line x1="20" y1="72" x2="10" y2="72"/>
                <line x1="20" y1="72" x2="30" y2="72"/>
            </g>

            {{-- Tomato right lower --}}
            <g transform="translate(308,264)">
                <circle cx="14" cy="18" r="13"/>
                <path d="M14 5 L11 0 M14 5 L17 0 M14 5 L14 -2 M14 5 L8 2 M14 5 L20 2"/>
            </g>

            {{-- Guitar bottom-right --}}
            <g transform="translate(278,326)">
                <circle cx="17" cy="55" r="14"/>
                <circle cx="21" cy="22" r="10"/>
                <line x1="17" y1="8"  x2="17" y2="41"/>
                <line x1="11" y1="30" x2="23" y2="30"/>
            </g>

            {{-- Tortilla stack bottom-left --}}
            <g transform="translate(48,362)">
                <ellipse cx="28" cy="8"  rx="28" ry="7"/>
                <ellipse cx="28" cy="16" rx="28" ry="7"/>
                <ellipse cx="28" cy="24" rx="28" ry="7"/>
            </g>

            {{-- Onion bottom-center --}}
            <g transform="translate(148,368)">
                <circle cx="16" cy="20" r="14"/>
                <path d="M16 6 Q12 0 16 -4 Q20 0 16 6"/>
                <path d="M8 13 Q16 21 24 13" stroke-width="0.9"/>
                <path d="M6 21 Q16 29 26 21" stroke-width="0.9"/>
            </g>

            {{-- Fork & knife bottom right-center --}}
            <g transform="translate(228,362)">
                <line x1="6"  y1="0"  x2="6"  y2="44"/>
                <line x1="2"  y1="0"  x2="2"  y2="12"/>
                <line x1="10" y1="0"  x2="10" y2="12"/>
                <path d="M2 12 Q6 16 10 12"/>
                <path d="M22 0 Q28 14 24 24 L24 44"/>
            </g>

            {{-- Accent dots & sparkles --}}
            <circle cx="115" cy="104" r="2"   fill="#7a2800" stroke="none"/>
            <circle cx="252" cy="122" r="2.5" fill="#7a2800" stroke="none"/>
            <circle cx="60"  cy="242" r="2"   fill="#7a2800" stroke="none"/>
            <circle cx="288" cy="350" r="2"   fill="#7a2800" stroke="none"/>
            <circle cx="110" cy="398" r="2.5" fill="#7a2800" stroke="none"/>
            <path d="M172 30 L172 38 M169 34 L175 34"/>
            <path d="M54  96 L54  102 M51 99 L57 99"/>
            <path d="M268 286 L268 292 M265 289 L271 289"/>
        </svg>

        {{-- ============================================================
             L2: Top Aztec / tribal zigzag border
             Green strip, red upper triangles, yellow lower triangles
        ============================================================ --}}
        <svg class="d26-border-svg"
             viewBox="0 0 340 24" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
            <rect width="340" height="24" fill="#2d5a1b"/>
            {{-- Red upper zigzag --}}
            <path d="M0 0 L9 12 L18 0 L27 12 L36 0 L45 12 L54 0 L63 12 L72 0 L81 12 L90 0 L99 12 L108 0 L117 12 L126 0 L135 12 L144 0 L153 12 L162 0 L171 12 L180 0 L189 12 L198 0 L207 12 L216 0 L225 12 L234 0 L243 12 L252 0 L261 12 L270 0 L279 12 L288 0 L297 12 L306 0 L315 12 L324 0 L333 12 L340 5 L340 0 L0 0 Z" fill="{{$themeColor}}"/>
            {{-- Yellow lower zigzag --}}
            <path d="M0 24 L9 12 L18 24 L27 12 L36 24 L45 12 L54 24 L63 12 L72 24 L81 12 L90 24 L99 12 L108 24 L117 12 L126 24 L135 12 L144 24 L153 12 L162 24 L171 12 L180 24 L189 12 L198 24 L207 12 L216 24 L225 12 L234 24 L243 12 L252 24 L261 12 L270 24 L279 12 L288 24 L297 12 L306 24 L315 12 L324 24 L333 12 L340 19 L340 24 L0 24 Z" fill="#f5c518"/>
        </svg>

        {{-- ============================================================
             L3: Logo — top-center yellow circle
        ============================================================ --}}


        {{-- ============================================================
             L4: Headline block
             "TASTE" — large Bangers, cream/white
             "PERFECTION" — Anton, yellow-on-green pill
        ============================================================ --}}
        <div class="d26-headline">
            {{-- Main large word --}}
            <p class="d26-headline-main">TASTE</p>
            {{-- Sub label — green bg strip --}}
            <div class="d26-headline-sub">
                <span class="d26-headline-sub-text">PERFECTION</span>
            </div>
        </div>

        {{-- ============================================================
             L5: Food photo — full width, middle band
        ============================================================ --}}
        <div class="d26-photo-band">
            @if (!empty($menuImageUrl))
                <img src="{{ $menuImageUrl }}"
                     alt="{{ $menu['name'] ?? 'Menu Item' }}"
                     class="js-poster-menu-image d26-photo-img"
                     crossorigin="anonymous">
            @else
                <div class="d26-photo-placeholder"></div>
            @endif
            {{-- Top + bottom photo fades --}}
            <div class="d26-photo-fade-top"></div>
            <div class="d26-photo-fade-bottom"></div>
        </div>

        {{-- ============================================================
             L6: ORDER NOW button — overlapping photo bottom
        ============================================================ --}}
        <div class="d26-order-btn">ORDER NOW!</div>

        {{-- ============================================================
             L7: Lower info section on orange bg
        ============================================================ --}}
        <div class="d26-info">

            {{-- Menu name --}}
            <p class="d26-menu-name">
                @if (strlen(@$menu['name']) <= 20)

                   {{ strtoupper($menu['name']) }}
             @else
             Eat. Love. Repeat.
            @endif
               
            </p>

            {{-- Description --}}
            <p class="d26-menu-desc">
                @if (!empty($menu['description']))
                    {{ Str::limit($menu['description'], 110, '...') }}
                @endif
            </p>

            {{-- Address --}}
            <p class="d26-address">{{ @user()->address ?? 'L' }}</p>

            {{-- Phone --}}
            @if (@user()->phone)
            <p class="d26-phone">Call Us: {{ @user()->phone ?? '' }}</p>
            @endif
        </div>{{-- /info --}}

        {{-- ============================================================
             L8: Dark green footer bar
        ============================================================ --}}
        <div class="d26-footer">
             @if (@user()->website_domain)
            {{-- Website left --}}
            <div class="d26-footer-site">{{ @user()->website_domain ?? '' }}</div>
             @endif
            {{-- Logo right --}}
            <div class="d26-footer-logo-wrap">
                @if (!empty($logourl))
                    <img src="{{ $logourl }}" alt="logo" crossorigin="anonymous" class="d26-footer-logo">
                @endif
            </div>

        </div>{{-- /footer --}}

    </div>{{-- /.design26-card --}}

    {{-- <button type="button" class="d26-download-btn" onclick="downloadDesign26()">&#8595; Download Poster</button> --}}

</div>{{-- /.design26-wrapper --}}


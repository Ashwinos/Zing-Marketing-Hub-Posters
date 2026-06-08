<link href="https://fonts.googleapis.com/css2?family=Anton&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">

<style>
    /* ═══════════════════════════════════════════
       DESIGN 25 — BOLD PROMO
       Dark wave · Circle food image · Checkerboard
       ═══════════════════════════════════════════ */

    .design25-wrapper {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        font-family: 'DM Sans', sans-serif;
    }

    .design25-wrapper .design25-card {
        width: 100%;
        max-width: 400px;
        aspect-ratio: 4 / 5;
        max-height: 500px;
        background: #F2EBE0;
        overflow: hidden;
        position: relative;
        box-sizing: border-box;
        container-type: inline-size;
        display: flex;
        flex-direction: column;
        box-shadow: 0 24px 48px rgba(0,0,0,0.15), 0 8px 16px rgba(0,0,0,0.08);
    }

    /* ── DOT PATTERN BG ── */
    .design25-wrapper .d25-dot-bg {
        position: absolute;
        inset: 0;
        z-index: 0;
        pointer-events: none;
        background-image: radial-gradient(circle, #c8b89a 1px, transparent 1px);
        background-size: 12px 12px;
        opacity: 0.5;
    }

    /* ── TOP BAR ── */
    .design25-wrapper .d25-top-bar {
        flex-shrink: 0;
        height: 1.6cqw;
        background: {{ $themeColor }};
        position: relative;
        z-index: 10;
    }

    /* ── HEADER ── */
    .design25-wrapper .d25-header {
        flex-shrink: 0;
        padding: 2.5cqw 3.5cqw 2cqw;
        display: flex;
        align-items: center;
        justify-content: space-between;
        position: relative;
        z-index: 10;
    }

    .design25-wrapper .d25-logo-wrap {
        display: flex;
        align-items: center;
        gap: 2cqw;
    }

    .design25-wrapper .d25-logo-img {
        height: 8cqw;
        width: auto;
        display: block;
        flex-shrink: 0;
    }

    .design25-wrapper .d25-logo-fallback {
        width: 8.5cqw;
        height: 8.5cqw;
        border-radius: 50%;
        background: {{ $themeColor }};
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .design25-wrapper .d25-logo-fallback svg {
        width: 4.5cqw;
        height: 4.5cqw;
        fill: #F2EBE0;
    }

    .design25-wrapper .d25-brand-name {
        font-size: 3.2cqw;
        font-weight: 600;
        color: #1a0a0a;
        line-height: 1.1;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .design25-wrapper .d25-brand-addr {
        font-size: 2cqw;
        color: {{ $themeColor }};
        margin-top: 0.3cqw;
        letter-spacing: 0.03em;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    /* ── IMAGE SECTION ── */
    .design25-wrapper .d25-image-section {
            flex-shrink: 0;
    position: relative;
    height: 49cqw;
    z-index: 5;
    top: 84px;
    }

    .design25-wrapper .d25-wave-svg {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        z-index: 1;
    }

    /* ── FOOD CIRCLE ── */
    .design25-wrapper .d25-food-circle {
            position: absolute;
    top: -5cqw;
    right: -7cqw;
    width: 60cqw;
    height: 60cqw;
    border-radius: 50%;
    overflow: hidden;
    z-index: 8;
    border: 1cqw solid #F2EBE0;
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2);
    }

    .design25-wrapper .d25-food-circle img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        display: block;
    }

    .design25-wrapper .d25-food-placeholder {
        width: 100%;
        height: 100%;
        background: #b5501a;
    }

    /* ── DISH TITLE (on wave) ── */
    .design25-wrapper .d25-title-block {
        position: absolute;
        bottom: 2.5cqw;
        left: 3.5cqw;
        z-index: 9;
    }

    .design25-wrapper .d25-dish-title {
        font-family: 'Anton', sans-serif;
        font-size: 13cqw;
        color: #F2EBE0;
        line-height: 0.92;
        letter-spacing: 0.01em;
        text-transform: uppercase;
        word-break: break-word;
        max-width: 55cqw;
    }

    .design25-wrapper .d25-dish-title--long {
        font-size: 10cqw;
    }

    /* ── PROMO BADGE ── */
    .design25-wrapper .d25-promo-badge {
        position: absolute;
        bottom: 3.5cqw;
        right: 3.5cqw;
        z-index: 9;
        background: #F2EBE0;
        padding: 1.5cqw 2.5cqw;
        text-align: center;
        border-radius: 3px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.2);
    }

    .design25-wrapper .d25-promo-line {
        font-size: 2.5cqw;
        font-weight: 800;
        color: {{ $themeColor }};
        letter-spacing: 0.05em;
        line-height: 1.3;
        white-space: nowrap;
    }

    /* ── BODY ── */
    .design25-wrapper .d25-body {
            flex: 1;
    min-height: 0;
    padding: 2.5cqw 3.5cqw 0;
    position: relative;
    top: 93px;
    z-index: 5;
    display: flex;
    flex-direction: column;
    gap: 2cqw;
    }

    .design25-wrapper .d25-desc {
        font-size: 2.6cqw;
        font-weight: 400;
        color: #3d1a0a;
        line-height: 1.5;
        max-width: 62%;
        margin: 0;
    }

    .design25-wrapper .d25-order-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background: #F2EBE0;
        border: 2px solid {{ $themeColor }};
        color: {{ $themeColor }};
        font-size: 2.4cqw;
        font-weight: 700;
        letter-spacing: 0.15em;
        text-transform: uppercase;
        padding: 1.8cqw 5cqw;
        border-radius: 20cqw;
        width: fit-content;
        cursor: default;
    }

    /* Decorative zigzag doodle */
    .design25-wrapper .d25-doodle {
    position: relative;
    left: 79.5cqw;
    bottom: 14cqw;
    z-index: 6;
    opacity: 0.7;
    width: 14cqw;
    height: 14cqw;
    }

    /* ── CHECKERBOARD STRIP ── */
    .design25-wrapper .d25-checker-strip {
        flex-shrink: 0;
        height: 4cqw;
        position: relative;
        z-index: 5;
        overflow: hidden;
        background: #F2EBE0;
    }

    .design25-wrapper .d25-checker-strip svg {
        display: block;
        width: 100%;
        height: 100%;
    }

    /* ── FOOTER ── */
    .design25-wrapper .d25-footer {
        flex-shrink: 0;
        background: {{ $themeColor }};
        padding: 1.8cqw 3.5cqw 2cqw;
        display: flex;
        align-items: center;
        justify-content: space-between;
        position: relative;
        z-index: 5;
        gap: 2cqw;
    }

    .design25-wrapper .d25-footer-divider {
        width: 1px;
        height: 4cqw;
        background: rgba(242,235,224,0.3);
        flex-shrink: 0;
    }

    .design25-wrapper .d25-contact {
        display: flex;
        align-items: center;
        gap: 1.4cqw;
        font-size: 2.4cqw;
        font-weight: 500;
        color: #F2EBE0;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        min-width: 0;
        flex: 1;
    }

    .design25-wrapper .d25-contact svg {
        width: 2.8cqw;
        height: 2.8cqw;
        fill: #F2EBE0;
        flex-shrink: 0;
    }
</style>

<div class="design25-wrapper">
    <div class="design25-card" id="posterCard25">

        <div class="d25-dot-bg"></div>
        <div class="d25-top-bar"></div>

        {{-- Header --}}
        <div class="d25-header">
            <div class="d25-logo-wrap">
                @if (isset($logourl) && $logourl)
                    <img src="{{ $logourl }}" alt="logo" class="d25-logo-img" crossorigin="anonymous">
                @else
                    <div class="d25-logo-fallback">
                        <svg viewBox="0 0 24 24"><path d="M12 3C7 3 3 7 3 12s4 9 9 9 9-4 9-9-4-9-9-9zm0 2c1.5 0 2.9.4 4.1 1.1L5.1 16.1C4.4 14.9 4 13.5 4 12c0-4.4 3.6-8 8-8zm0 14c-1.5 0-2.9-.4-4.1-1.1l11-11c.7 1.2 1.1 2.6 1.1 4.1 0 4.4-3.6 8-8 8z"/></svg>
                    </div>
                @endif
                <div>
                    <div class="d25-brand-name">{{ @user()->name ?? 'Restaurant Name' }}</div>
                    <div class="d25-brand-addr">{{ @user()->city ?? @user()->address ?? 'Your City' }}</div>
                </div>
            </div>
        </div>

        {{-- Image section --}}
        <div class="d25-image-section">

            {{-- Wave shape — self-contained SVG --}}
            <svg class="d25-wave-svg" viewBox="0 0 400 160" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 38 Q60 8 120 33 Q180 58 240 28 Q290 5 340 22 L400 20 L400 160 L0 160 Z" fill="{{ $themeColor }}"/>
            </svg>

            {{-- Food image circle --}}
            <div class="d25-food-circle">
                @if (isset($menuImageUrl) && $menuImageUrl)
                    <img src="{{ $menuImageUrl }}" alt="{{ @$menu['name'] ?? 'Menu Item' }}" class="js-poster-menu-image" crossorigin="anonymous">
                @else
                    <div class="d25-food-placeholder"></div>
                @endif
            </div>

            {{-- Dish title --}}
            <div class="d25-title-block">
                <div class="d25-dish-title{{ !empty($menu['name']) && strlen($menu['name']) > 12 ? ' d25-dish-title--long' : '' }}">
                    @if (!empty($menu['name']))
                        {!! nl2br(wordwrap(strtoupper($menu['name']), 8, "\n", false)) !!}
                    @else
                        SHAHI<br>PANEER
                    @endif
                </div>
            </div>

            {{-- Promo badge --}}
            

        </div>

        {{-- Body --}}
        <div class="d25-body">
            <p class="d25-desc">
                @if (!empty($menu['description']))
                    {{ Str::limit($menu['description'], 80, '...') }}
                @else
                    Savor the perfect blend of flavors with our premium ingredients.
                @endif
            </p>
            <div class="d25-order-btn">ORDER NOW</div>

            {{-- Zigzag doodle --}}
            <svg class="d25-doodle" viewBox="0 0 55 55" xmlns="http://www.w3.org/2000/svg">
                <path d="M42 8 L48 18 L38 28 L48 38 L38 48" fill="none" stroke="{{ $themeColor }}" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M32 8 L38 18 L28 28 L38 38 L28 48" fill="none" stroke="{{ $themeColor }}" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" opacity="0.4"/>
            </svg>
        </div>

        {{-- Checkerboard strip — self-contained SVG, no pattern refs --}}
        <div class="d25-checker-strip">
            <svg viewBox="0 0 400 16" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="400" height="16" fill="#F2EBE0"/>
                @php $cols = 25; $w = 16; @endphp
                @for ($i = 0; $i < $cols; $i++)
                    <rect x="{{ $i * $w }}" y="0"  width="{{ $w }}" height="8" fill="{{ $i % 2 === 0 ? $themeColor : '#F2EBE0' }}"/>
                    <rect x="{{ $i * $w }}" y="8"  width="{{ $w }}" height="8" fill="{{ $i % 2 === 0 ? '#F2EBE0' : $themeColor }}"/>
                @endfor
            </svg>
        </div>

        {{-- Footer --}}
        <div class="d25-footer">
            @if (@user()->phone)
                <span class="d25-contact">
                    <svg viewBox="0 0 24 24"><path d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1C10.33 21 3 13.67 3 4c0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.24 1.02l-2.21 2.2z"/></svg>
                    {{ @user()->phone }}
                </span>
            @endif
            @if (@user()->phone && @user()->website_domain)
                <div class="d25-footer-divider"></div>
            @endif
            @if (@user()->website_domain)
                <span class="d25-contact">
                    <svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/></svg>
                    {{ @user()->website_domain }}
                </span>
            @endif
        </div>

    </div>{{-- /.design25-card --}}
</div>
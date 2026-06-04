<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;1,9..40,400&display=swap" rel="stylesheet">

<style>
    /* ═══════════════════════════════════════
       DESIGN 24 — ENHANCED MOROCCAN ZELLIGE
       ═══════════════════════════════════════ */
    .design24-wrapper {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        font-family: 'DM Sans', sans-serif;
    }

    .design24-wrapper .design24-card {
        width: 100%;
        max-width: 400px;
        aspect-ratio: 4 / 5;
        background: #F7F2EC;
        overflow: hidden;
        position: relative;
        box-sizing: border-box;
        /* Layered, realistic shadow for a premium print feel */
        box-shadow: 0 24px 48px rgba(0, 0, 0, 0.12), 0 8px 16px rgba(0, 0, 0, 0.06), 0 0 0 1px rgba(0, 0, 0, 0.05);
        container-type: inline-size;
        display: flex;
        flex-direction: column;
        border: 2px solid {{ $themeColor }};
        padding: 1.5cqw;
    }

    /* Moroccan tile background (Softened) */
    .design24-wrapper .d24-tile-bg {
        position: absolute;
        inset: 0;
        z-index: 0;
        pointer-events: none;
        opacity: 0.15; /* Reduced opacity for more subtle elegance */
    }

    /* Outer border strips */
    .design24-wrapper .d24-frame-strip {
        position: absolute;
        z-index: 25;
        pointer-events: none;
        overflow: hidden;
    }

    .design24-wrapper .d24-frame-strip--top,
    .design24-wrapper .d24-frame-strip--bottom {
        left: 0; right: 0; height: 3.5cqw;
    }
    .design24-wrapper .d24-frame-strip--top { top: 0; }
    .design24-wrapper .d24-frame-strip--bottom { bottom: 0; }

    .design24-wrapper .d24-frame-strip--left,
    .design24-wrapper .d24-frame-strip--right {
        top: 3.5cqw; bottom: 3.5cqw; width: 3.5cqw;
    }
    .design24-wrapper .d24-frame-strip--left { left: 0; }
    .design24-wrapper .d24-frame-strip--right { right: 0; }

    /* Inner Container */
    .design24-wrapper .d24-inner {
        position: relative;
        z-index: 5;
        flex: 1;
        min-height: 0;
        display: flex;
        flex-direction: column;
        background: #FDFBF7;
        border: 1px solid {{ $themeColor }}88;
        box-shadow: inset 0 0 0 4px #FDFBF7, inset 0 0 0 5px {{ $themeColor }}33; /* Double inner border */
        overflow: hidden;
    }

    /* Corner medallions */
    .design24-wrapper .d24-medallion {
        position: absolute;
        width: 12cqw;
        height: 12cqw;
        z-index: 8;
        pointer-events: none;
        opacity: 0.45;
    }
    .design24-wrapper .d24-medallion--tl { top: 1.5cqw; left: 1.5cqw; }
    .design24-wrapper .d24-medallion--tr { top: 1.5cqw; right: 1.5cqw; transform: scaleX(-1); }
    .design24-wrapper .d24-medallion--bl { bottom: 1.5cqw; left: 1.5cqw; transform: scaleY(-1); }
    .design24-wrapper .d24-medallion--br { bottom: 1.5cqw; right: 1.5cqw; transform: scale(-1, -1); }

    /* ── BRAND BAR ── */
    .design24-wrapper .d24-brand-bar {
        flex-shrink: 0;
        z-index: 10;
        background: transparent;
        padding: 4cqw 5cqw 3cqw;
        display: flex;
        align-items: center;
        gap: 3.5cqw;
        border-bottom: 1px solid {{ $themeColor }}44;
        position: relative;
    }

    .design24-wrapper .d24-brand-bar::after {
        content: '✦';
        position: absolute;
        bottom: -1.2cqw;
        left: 50%;
        transform: translateX(-50%);
        font-size: 2cqw;
        color: {{ $themeColor }};
        background: #FDFBF7;
        padding: 0 2cqw;
        line-height: 1;
    }

    .design24-wrapper .d24-logo-img {
        height: 2rem;
        width: auto;
        display: block;
        flex-shrink: 0;
    }

    .design24-wrapper .d24-logo-fallback {
        width: 11cqw;
        height: 11cqw;
        border-radius: 50%; /* Circle looks more elegant */
        background: #F7F2EC;
        border: 1px solid {{ $themeColor }};
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: 'Cormorant Garamond', serif;
        font-size: 5.5cqw;
        font-weight: 600;
        color: {{ $themeColor }};
        flex-shrink: 0;
    }

    .design24-wrapper .d24-brand-text {
        min-width: 0;
        flex: 1;
    }

    .design24-wrapper .d24-brand-name {
        font-family: 'Cormorant Garamond', serif;
        font-size: 13px;
        font-weight: 600;
        color: #1A1815;
        line-height: 1.1;
        letter-spacing: 0.03em;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .design24-wrapper .d24-brand-addr {
        font-size: 1.9cqw;
        font-weight: 400;
        color: #8C8273;
        margin-top: 0.6cqw;
        letter-spacing: 0.06em;
        text-transform: uppercase;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    /* ── FOOD IMAGE ── */
    .design24-wrapper .d24-image-wrap {
        flex-shrink: 0;
        padding: 4.5cqw 5cqw 1cqw;
        position: relative;
        z-index: 4;
    }

    .design24-wrapper .d24-image-frame {
        position: relative;
        width: 100%;
        aspect-ratio: 5 / 4;
        background: #FDFBF7;
        padding: 4px; /* Inner white border effect */
        border: 1px solid {{ $themeColor }}66;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.08);
    }

    .design24-wrapper .d24-image-frame img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        display: block;
    }

    .design24-wrapper .d24-image-placeholder {
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, #E6E0D5 0%, #D1C8BA 100%);
    }

    .design24-wrapper .d24-badge {
        position: absolute;
        bottom: -2cqw;
        right: 4cqw;
        z-index: 7;
        background: {{ $themeColor }};
        color: #fff;
        font-size: 1.8cqw;
        font-weight: 500;
        letter-spacing: 0.25em;
        text-transform: uppercase;
        padding: 1.5cqw 3cqw;
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    }

    /* ── CONTENT ── */
    .design24-wrapper .d24-content {
        flex: 1;
        min-height: 0;
        padding: 3cqw 5cqw 4cqw;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        gap: 1.5cqw;
        position: relative;
        z-index: 5;
    }

    .design24-wrapper .d24-eyebrow {
        display: flex;
        align-items: center;
        gap: 2cqw;
        margin-bottom: 0.5cqw;
    }

    .design24-wrapper .d24-eyebrow-label {
        font-size: 1.8cqw;
        font-weight: 600;
        letter-spacing: 0.3em;
        text-transform: uppercase;
        color: {{ $themeColor }};
        white-space: nowrap;
    }

    .design24-wrapper .d24-title {
        font-family: 'Cormorant Garamond', serif;
        font-size: 9cqw;
        font-weight: 600;
        color: #1A1815;
        line-height: 1.05;
        letter-spacing: -0.01em;
        margin: 0;
        word-break: break-word;
    }

    .design24-wrapper .d24-title--long {
        font-size: 7.5cqw;
    }

    .design24-wrapper .d24-title em {
        font-style: italic;
        font-weight: 400;
        color: {{ $themeColor }};
        padding-right: 0.1em;
    }

    /* ── FOOTER ── */
    .design24-wrapper .d24-footer {
        flex-shrink: 0;
        padding: 3cqw 5cqw 4cqw;
        position: relative;
        z-index: 6;
        border-top: 1px solid {{ $themeColor }}33;
    }

    .design24-wrapper .d24-footer-inner {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 1.5cqw;
    }

    .design24-wrapper .d24-contacts {
        display: flex;
        flex-wrap: wrap;
        gap: 3cqw;
        justify-content: center;
        width: 100%;
    }

    .design24-wrapper .d24-contact {
        display: inline-flex;
        align-items: center;
        gap: 1.2cqw;
        font-size: 2.6cqw;
        font-weight: 400;
        color: #4A443A;
        white-space: nowrap;
    }

    .design24-wrapper .d24-contact svg {
        width: 2.6cqw;
        height: 2.6cqw;
        fill: {{ $themeColor }};
        opacity: 0.8;
    }

    .design24-wrapper .d24-download-btn {
        margin-top: 20px;
        background: #1A1815;
        color: #fff;
        border: none;
        padding: 12px 28px;
        font-size: 14px;
        font-weight: 500;
        cursor: pointer;
        border-radius: 4px;
        font-family: 'DM Sans', sans-serif;
        display: flex;
        align-items: center;
        gap: 10px;
        letter-spacing: 0.06em;
        text-transform: uppercase;
        transition: all 0.3s ease;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }

    .design24-wrapper .d24-download-btn:hover {
        background: {{ $themeColor }};
        transform: translateY(-2px);
        box-shadow: 0 6px 16px rgba(0,0,0,0.15);
    }
</style>

<div class="design24-wrapper">
    <div class="design24-card" id="posterCard24">

        {{-- Subtle Zellige tile background --}}
        <svg class="d24-tile-bg" width="100%" height="100%" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="d24ZelligeBg" x="0" y="0" width="48" height="48" patternUnits="userSpaceOnUse">
                    <rect width="48" height="48" fill="none"/>
                    <path d="M24 4 L28 20 L44 24 L28 28 L24 44 L20 28 L4 24 L20 20 Z" fill="{{ $themeColor }}" opacity="0.3"/>
                    <path d="M24 10 L26 20 L36 24 L26 28 L24 38 L22 28 L12 24 L22 20 Z" fill="#fff" opacity="0.4"/>
                    <circle cx="24" cy="24" r="2.5" fill="{{ $themeColor }}" opacity="0.5"/>
                    <rect x="0.5" y="0.5" width="47" height="47" fill="none" stroke="{{ $themeColor }}" stroke-width="0.3" opacity="0.1"/>
                </pattern>
                <pattern id="d24BorderTile" x="0" y="0" width="14" height="14" patternUnits="userSpaceOnUse">
                    <rect width="14" height="14" fill="{{ $themeColor }}"/>
                    <path d="M7 1.5 Q7 7 1.5 7 Q7 7 7 12.5 Q7 7 12.5 7 Q7 7 7 1.5Z" fill="#F7F2EC" opacity="0.95"/>
                    <circle cx="7" cy="7" r="1.5" fill="#fff" opacity="0.8"/>
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#d24ZelligeBg)"/>
        </svg>

        {{-- Outer frame tile strips --}}
        <div class="d24-frame-strip d24-frame-strip--top">
            <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"><rect width="100%" height="100%" fill="url(#d24BorderTile)"/></svg>
        </div>
        <div class="d24-frame-strip d24-frame-strip--bottom">
            <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"><rect width="100%" height="100%" fill="url(#d24BorderTile)"/></svg>
        </div>
        <div class="d24-frame-strip d24-frame-strip--left">
            <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"><rect width="100%" height="100%" fill="url(#d24BorderTile)"/></svg>
        </div>
        <div class="d24-frame-strip d24-frame-strip--right">
            <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"><rect width="100%" height="100%" fill="url(#d24BorderTile)"/></svg>
        </div>

        <div class="d24-inner">

            {{-- Corner medallions --}}
            <svg class="d24-medallion d24-medallion--tl" viewBox="0 0 80 80" xmlns="http://www.w3.org/2000/svg">
                <circle cx="40" cy="40" r="36" fill="none" stroke="{{ $themeColor }}" stroke-width="0.75"/>
                <circle cx="40" cy="40" r="28" fill="none" stroke="{{ $themeColor }}" stroke-width="0.5"/>
                <path d="M40 8 L43 33 L68 40 L43 47 L40 72 L37 47 L12 40 L37 33 Z" fill="{{ $themeColor }}" opacity="0.4"/>
                <circle cx="40" cy="40" r="4" fill="{{ $themeColor }}"/>
            </svg>
            <svg class="d24-medallion d24-medallion--tr" viewBox="0 0 80 80" xmlns="http://www.w3.org/2000/svg">
                <circle cx="40" cy="40" r="36" fill="none" stroke="{{ $themeColor }}" stroke-width="0.75"/>
                <circle cx="40" cy="40" r="28" fill="none" stroke="{{ $themeColor }}" stroke-width="0.5"/>
                <path d="M40 8 L43 33 L68 40 L43 47 L40 72 L37 47 L12 40 L37 33 Z" fill="{{ $themeColor }}" opacity="0.4"/>
                <circle cx="40" cy="40" r="4" fill="{{ $themeColor }}"/>
            </svg>
            <svg class="d24-medallion d24-medallion--bl" viewBox="0 0 80 80" xmlns="http://www.w3.org/2000/svg">
                <circle cx="40" cy="40" r="36" fill="none" stroke="{{ $themeColor }}" stroke-width="0.75"/>
                <circle cx="40" cy="40" r="28" fill="none" stroke="{{ $themeColor }}" stroke-width="0.5"/>
                <path d="M40 8 L43 33 L68 40 L43 47 L40 72 L37 47 L12 40 L37 33 Z" fill="{{ $themeColor }}" opacity="0.4"/>
                <circle cx="40" cy="40" r="4" fill="{{ $themeColor }}"/>
            </svg>
            <svg class="d24-medallion d24-medallion--br" viewBox="0 0 80 80" xmlns="http://www.w3.org/2000/svg">
                <circle cx="40" cy="40" r="36" fill="none" stroke="{{ $themeColor }}" stroke-width="0.75"/>
                <circle cx="40" cy="40" r="28" fill="none" stroke="{{ $themeColor }}" stroke-width="0.5"/>
                <path d="M40 8 L43 33 L68 40 L43 47 L40 72 L37 47 L12 40 L37 33 Z" fill="{{ $themeColor }}" opacity="0.4"/>
                <circle cx="40" cy="40" r="4" fill="{{ $themeColor }}"/>
            </svg>

            {{-- Brand bar --}}
            <div class="d24-brand-bar">
                @if (isset($logourl) && $logourl)
                    <img src="{{ $logourl }}" alt="logo" class="d24-logo-img" crossorigin="anonymous">
                @else
                    <div class="d24-logo-fallback">{{ strtoupper(substr(@user()->name ?? 'R', 0, 1)) }}</div>
                @endif
                <div class="d24-brand-text">
                    <div class="d24-brand-name">{{ @user()->name ?? 'Restaurant Name' }}</div>
                    <div class="d24-brand-addr">{{ @user()->address ?? '123 Culinary Lane, Food City' }}</div>
                </div>
            </div>

            {{-- Clean food image --}}
            <div class="d24-image-wrap">
                <div class="d24-image-frame">
                    @if (isset($menuImageUrl) && $menuImageUrl)
                        <img src="{{ $menuImageUrl }}" alt="{{ @$menu['name'] ?? 'Menu Item' }}" class="js-poster-menu-image" crossorigin="anonymous">
                    @else
                        <div class="d24-image-placeholder"></div>
                    @endif
                </div>
                <div class="d24-badge">Order Now</div>
            </div>

            {{-- Menu content --}}
            <div class="d24-content">
                <div class="d24-eyebrow">
                    <span class="d24-eyebrow-label">Zest Quest</span>
                </div>

                <h2 class="d24-title{{ !empty($menu['name']) && strlen($menu['name']) > 18 ? ' d24-title--long' : '' }}">
                    @if (!empty($menu['name']))
                        {{ $menu['name'] }}
                    @else
                        <em>Exquisite</em> Taste
                    @endif
                </h2>
            </div>

            {{-- Footer contacts --}}
            <div class="d24-footer">
                <div class="d24-footer-inner">
                    <div class="d24-contacts">
                        @if (@user()->phone)
                            <span class="d24-contact">
                                <svg viewBox="0 0 24 24"><path d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1C10.33 21 3 13.67 3 4c0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.24 1.02l-2.21 2.2z"/></svg>
                                {{ @user()->phone }}
                            </span>
                        @endif
                        @if (@user()->website_domain)
                            <span class="d24-contact">
                                <svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/></svg>
                                {{ @user()->website_domain }}
                            </span>
                        @endif
                    </div>
                </div>
            </div>

        </div>{{-- /.d24-inner --}}
    </div>{{-- /.design24-card --}}

    {{-- Download Button --}}
   
</div>


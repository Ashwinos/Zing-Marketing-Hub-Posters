<link href="https://fonts.googleapis.com/css2?family=Anton&family=DM+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
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
        background: #F5EFE4;
        overflow: hidden;
        position: relative;
        box-sizing: border-box;
        container-type: inline-size;
        display: flex;
        flex-direction: column;
        box-shadow: 0 24px 48px rgba(0,0,0,0.15), 0 8px 16px rgba(0,0,0,0.08);
    }

    .design25-wrapper .d25-dot-bg {
        position: absolute;
        inset: 0;
        z-index: 0;
        pointer-events: none;
        display: block;
    }

    /* ── TOP BAR ── */
    .design25-wrapper .d25-top-bar {
        flex-shrink: 0;
        height: 1.2cqw;
        background: {{ $themeColor }};
        position: relative;
        z-index: 10;
    }

    /* ── HEADER ── */
    .design25-wrapper .d25-header {
        flex-shrink: 0;
        padding: 2.2cqw 3.5cqw 1.5cqw;
        display: flex;
        align-items: center;
        position: relative;
        z-index: 10;
    }

    .design25-wrapper .d25-logo-wrap {
        display: flex;
        align-items: center;
        gap: 2cqw;
    }

    .design25-wrapper .d25-logo-img {
        height: 7cqw;
        width: auto;
        display: block;
        flex-shrink: 0;
    }

    .design25-wrapper .d25-logo-fallback {
        width: 7.5cqw;
        height: 7.5cqw;
        border-radius: 50%;
        background: {{ $themeColor }};
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .design25-wrapper .d25-logo-fallback svg {
        width: 4cqw;
        height: 4cqw;
        fill: #F5EFE4;
    }

    .design25-wrapper .d25-brand-name {
        font-size: 2.8cqw;
        font-weight: 600;
        color: #1a0a0a;
        line-height: 1.1;
        text-align: left;
    }

    .design25-wrapper .d25-brand-addr {
        font-size: 1.8cqw;
        color: {{ $themeColor }};
        margin-top: 0.3cqw;
        letter-spacing: 0.03em;
    }

    /* ── BIG HEADLINE ── */
    .design25-wrapper .d25-headline-wrap {
        flex-shrink: 0;
        padding: 4.5cqw 3.5cqw 2.5cqw;
        position: relative;
        z-index: 10;
    }

    .design25-wrapper .d25-headline-eyebrow {
        font-size: 1.8cqw;
        font-weight: 500;
        color: #8b5e3c;
        letter-spacing: 0.18em;
        text-transform: uppercase;
        margin-bottom: 0.8cqw;
    }

    .design25-wrapper .d25-headline-main {
        font-family: 'Anton', sans-serif;
        font-size: 9cqw;
        color: #1a0a0a;
        line-height: 0.92;
        letter-spacing: 0.01em;
        text-transform: uppercase;
        word-break: break-word;
        text-align: left;
    }

    .design25-wrapper .d25-headline-main span {
        font-family: 'Anton', sans-serif;
        font-size: 9cqw;
        color: #1a0a0a;
        line-height: 0.92;
        letter-spacing: 0.01em;
        text-transform: uppercase;
        word-break: break-word;
        color: {{ $themeColor }};
    }

    /* ── IMAGE SECTION ── */
    .design25-wrapper .d25-image-section {
        flex-shrink: 0;
        position: relative;
        height: 50cqw;
        z-index: 5;
    }

    .design25-wrapper .d25-wave-svg {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        z-index: 1;
    }

    .design25-wrapper .d25-food-circle {
        position: absolute;
        top: -4cqw;
        right: -5cqw;
        width: 56cqw;
        height: 56cqw;
        border-radius: 50%;
        overflow: hidden;
        z-index: 8;
        border: 1cqw solid #F5EFE4;
        box-shadow: 0 8px 24px rgba(0,0,0,0.2);
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
        background: {{$themeColor}};
    }

    /* ── DISH LABEL (on wave) ── */
    .design25-wrapper .d25-dish-label {
        position: absolute;
        bottom: 2.5cqw;
        left: 3.5cqw;
        z-index: 9;
        text-align: start;
    }

    .design25-wrapper .d25-dish-sup {
        font-size: 1.7cqw;
        font-weight: 600;
        letter-spacing: 0.2em;
        color: rgba(245,239,228,0.7);
        text-transform: uppercase;
        margin-bottom: 0.5cqw;
    }

    .design25-wrapper .d25-dish-name {
        font-family: 'Anton', sans-serif;
        font-size: 9cqw;
        color: #F5EFE4;
        line-height: 1.0;
        letter-spacing: 0.01em;
        text-transform: uppercase;
        max-width: 45cqw;
        word-break: break-word;
    }

    /* ── PROMO BADGE ── */
    .design25-wrapper .d25-promo-badge {
        position: absolute;
        bottom: 2.5cqw;
        right: 2.5cqw;
        z-index: 9;
        background: #F5EFE4;
        padding: 1.5cqw 2.2cqw;
        text-align: center;
        border-radius: 3px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.2);
    }

    .design25-wrapper .d25-promo-line {
        font-size: 2.3cqw;
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
        padding: 2.2cqw 3.5cqw 0;
        position: relative;
        z-index: 5;
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
        gap: 2cqw;
    }

    .design25-wrapper .d25-desc {
        font-size: 2.4cqw;
        font-weight: 400;
        color: #3d1a0a;
        line-height: 1.5;
        max-width: 55%;
        margin: 0;
        text-align: start;
    }

    .design25-wrapper .d25-order-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background: transparent;
        border: 1.5px solid {{ $themeColor }};
        color: {{ $themeColor }};
        font-size: 2cqw;
        font-weight: 700;
        letter-spacing: 0.15em;
        text-transform: uppercase;
        padding: 1.8cqw 4cqw;
        border-radius: 20cqw;
        white-space: nowrap;
        cursor: default;
    }

    /* ── CHECKERBOARD STRIP ── */
    .design25-wrapper .d25-checker-strip {
        flex-shrink: 0;
        height: 4cqw;
        position: relative;
        z-index: 5;
        overflow: hidden;
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
        justify-content: flex-start;
        position: relative;
        z-index: 5;
        gap: 2cqw;
    }

    .design25-wrapper .d25-contact.d25-contact-right {
        margin-left: auto;
        flex: 0 1 auto;
    }

    .design25-wrapper .d25-footer-divider {
        width: 1px;
        height: 4cqw;
        background: rgba(245,239,228,0.3);
        flex-shrink: 0;
    }

    .design25-wrapper .d25-contact {
        display: flex;
        align-items: center;
        gap: 1.4cqw;
        font-size: 2.2cqw;
        font-weight: 500;
        color: #F5EFE4;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        min-width: 0;
    }

    .design25-wrapper .d25-contact svg {
        width: 2.6cqw;
        height: 2.6cqw;
        fill: #F5EFE4;
        flex-shrink: 0;
    }
</style>


    @php
    
      
       $addressParts = array_map('trim', explode(',', user()->address));
    
        $city = null;
        
        switch (count($addressParts)) {
            case 3:
                $city = $addressParts[0];
                break;
        
            case 4:
                $city = $addressParts[1];
                break;
        
            case 5:
                $city = $addressParts[2];
                break;
        }
    
    
    @endphp



<div class="design25-wrapper">
    <div class="design25-card" id="posterCard25">

        {{-- Dot background — self-contained SVG pattern, unique id scoped to Design 25, explicit width/height attributes so html2canvas paints it on clone --}}
        <svg class="d25-dot-bg" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
            <defs>
                <pattern id="d25-dots-pattern" patternUnits="userSpaceOnUse" width="10" height="10">
                    <circle cx="1" cy="1" r="1" fill="#c4a882" />
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#d25-dots-pattern)" opacity="0.35" />
        </svg>

        <div class="d25-top-bar"></div>

        {{-- Header --}}
        <div class="d25-header">
            <div class="d25-logo-wrap">
                @if (isset($logourl) && $logourl)
                    <img src="{{ $logourl }}" alt="logo" class="d25-logo-img" crossorigin="anonymous">
                
                @endif
                <div>
                    <div class="d25-brand-name">{{ @user()->name ?? '' }}</div>
                    <div class="d25-brand-addr">{{ @user()->address ?? '' }}</div>
                </div>
            </div>
        </div>

        {{-- BIG HEADLINE: "Discover [City]'s Hidden Gem" --}}
        <div class="d25-headline-wrap">
            
            <div class="d25-headline-main">
                Discover<br>
                <span>
                    {{ !empty(@user()->address) && !empty($city) && strlen($city) < 40 ? $city : 'Your City' }}
                </span>'s<br>
                Hidden Gem
            </div>
        </div>

        {{-- Image section --}}
        <div class="d25-image-section">

            <svg class="d25-wave-svg" viewBox="0 0 400 148" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 45 Q60 15 120 38 Q180 60 240 32 Q290 10 340 28 L400 24 L400 148 L0 148 Z" fill="{{ $themeColor }}"/>
            </svg>

            {{-- Food image circle --}}
            <div class="d25-food-circle">
                @if (isset($menuImageUrl) && $menuImageUrl)
                    <img src="{{ $menuImageUrl }}" alt="{{ @$menu['name'] ?? 'Menu Item' }}" class="js-poster-menu-image" crossorigin="anonymous">
                @else
                    <div class="d25-food-placeholder"></div>
                @endif
            </div>

            {{-- Dish label on wave --}}
            <div class="d25-dish-label">
                
                <div class="d25-dish-name">
                    @if (strlen(@$menu['name']) <= 20)

                   {{ @$menu['name'] }}
             @else
             Happiness in Every Bite
            @endif
                </div>
            </div>

    

        </div>

        {{-- Body --}}
        <div class="d25-body">
            <p class="d25-desc">
                @if (!empty($menu['description']))
                    {{ Str::limit($menu['description'], 75, '...') }}
                
                @endif
            </p>
            <div class="d25-order-btn">ORDER NOW</div>
        </div>

        {{-- Checkerboard strip — self-contained SVG --}}
        <div class="d25-checker-strip">
            <svg viewBox="0 0 400 16" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="400" height="16" fill="#F5EFE4"/>
                @php $cols = 25; $w = 16; @endphp
                @for ($i = 0; $i < $cols; $i++)
                    <rect x="{{ $i * $w }}" y="0"  width="{{ $w }}" height="8" fill="{{ $i % 2 === 0 ? $themeColor : '#F5EFE4' }}"/>
                    <rect x="{{ $i * $w }}" y="8"  width="{{ $w }}" height="8" fill="{{ $i % 2 === 0 ? '#F5EFE4' : $themeColor }}"/>
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
                <span class="d25-contact d25-contact-right">
                    <svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/></svg>
                    {{ @user()->website_domain }}
                </span>
            @endif
        </div>

    </div>
</div>
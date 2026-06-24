<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton&family=Lato:wght@400;700;900&display=swap" rel="stylesheet">

<style>
    .design29-wrapper {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        font-family: 'Lato', sans-serif;
    }

    .design29-wrapper .design29-card {
        width: 100%;
        max-width: 340px;
        aspect-ratio: 4 / 5;
        position: relative;
        overflow: hidden;
        box-shadow: 0 20px 60px rgba(0,0,0,0.25);
        container-type: inline-size;
        box-sizing: border-box;
    }

    /* ── L0: Split background — yellow left / black right ── */
    .design29-wrapper .d29-bg-left {
        position: absolute;
        top: 0; left: 0;
        width: 52%; height: 100%;
        background-color: {{ $bgColor }};
        z-index: 0;
    }

    .design29-wrapper .d29-bg-right {
        position: absolute;
        top: 0; right: 0;
        width: 48%; height: 100%;
        background-color: #1a1a1a;
        z-index: 0;
    }

    /* ── Faded decoration SVGs ── */
    .design29-wrapper .d29-decor-left {
        position: absolute;
        inset: 0; width: 52%; height: 100%;
        z-index: 1; pointer-events: none;
    }

    /* ── Right side CSS shape decorations (no SVG) ── */
    .design29-wrapper .d29-r-onion-stem {
        position: absolute; top: 22cqw; left: 88.3cqw;
        width: 0.9cqw; height: 11cqw;
        background: #6a9a30; border-radius: 1cqw;
        z-index: 2; pointer-events: none; opacity: 0.9;
    }
    .design29-wrapper .d29-r-onion-bulb {
        position: absolute; top: 32.5cqw; left: 87cqw;
        width: 3cqw; height: 4.4cqw;
        background: #ffffff; border-radius: 50%;
        z-index: 2; pointer-events: none; opacity: 0.85;
    }
    .design29-wrapper .d29-r-chili-cap {
        position: absolute; top: 49cqw; left: 91cqw;
        width: 2.4cqw; height: 2.2cqw;
        background: #5a8a30; border-radius: 50%;
        z-index: 2; pointer-events: none; opacity: 0.9;
    }
    .design29-wrapper .d29-r-chili-body {
        position: absolute; top: 50.5cqw; left: 91.6cqw;
        width: 1.1cqw; height: 18.5cqw;
        background: #d94030; border-radius: 0.6cqw 0.6cqw 2cqw 2cqw;
        z-index: 2; pointer-events: none; opacity: 0.9;
    }
    .design29-wrapper .d29-r-leaf {
        position: absolute; top: 72.8cqw; left: 58.8cqw;
        width: 6.5cqw; height: 9cqw;
        background: #6a9a30; border-radius: 50% 10% 50% 10%;
        z-index: 2; pointer-events: none; opacity: 0.85;
    }
    .design29-wrapper .d29-r-chili2-cap {
        position: absolute; top: 90cqw; left: 83.6cqw;
        width: 2cqw; height: 1.8cqw;
        background: #5a8a30; border-radius: 50%;
        z-index: 2; pointer-events: none; opacity: 0.85;
    }
    .design29-wrapper .d29-r-chili2-body {
        position: absolute; top: 91.5cqw; left: 84cqw;
        width: 0.9cqw; height: 8cqw;
        background: #d94030; border-radius: 0.5cqw 0.5cqw 1.5cqw 1.5cqw;
        z-index: 2; pointer-events: none; opacity: 0.85;
    }

    /* ── Dotted vertical line — far right edge ── */
    .design29-wrapper .d29-dots-edge {
        position: absolute;
        top: 3cqw; right: 2.5cqw;
        width: 2cqw; height: 18cqw;
        z-index: 4; pointer-events: none;
    }

    /* ── LOGO — top-left ── */
    .design29-wrapper .d29-logo {
        position: absolute;
        top: 3cqw; left: 4cqw;
        z-index: 10;
    }

    .design29-wrapper .d29-logo img {
        height: 2rem;
        width: auto;
        display: block;
    }

    .design29-wrapper .d29-logo-fallback {
        width: 9cqw; height: 9cqw;
        border-radius: 50%;
        background: #1a1a1a;
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: 'Anton', sans-serif;
        font-size: 4cqw;
        color: #f5d020;
    }

    /* ── VEGETARIAN PIZZA headline — top-right ── */
    .design29-wrapper .d29-headline {
        position: absolute;
        top: 4cqw; right: 6cqw;
        z-index: 5; text-align: right;
    }

    .design29-wrapper .d29-headline-top {
        font-family: 'Anton', sans-serif;
        font-size: 6.5cqw;
        color: #ffffff;
        line-height: 1;
        margin: 0;
        letter-spacing: 0.5px;
        text-transform: uppercase;
    }

    .design29-wrapper .d29-headline-bottom {
        font-family: 'Anton', sans-serif;
        font-size: 6.5cqw;
        color: {{ $themeColor }};
        line-height: 1;
        margin: 0;
        letter-spacing: 0.5px;
        text-transform: uppercase;
    }

    /* ── Circular food image — center, straddling divide ── */
    .design29-wrapper .d29-food-ring {
        position: absolute;
        top: 18cqw;
        left: calc(50% - 29cqw);
        width: 58cqw; height: 58cqw;
        z-index: 6;
        border-radius: 50%;
        border: 3.5cqw solid {{ $themeColor }};
        box-sizing: border-box;
        box-shadow: 0 10px 32px rgba(0,0,0,0.35);
        overflow: hidden;
    }

    .design29-wrapper .d29-food-ring img {
        width: 100%; height: 100%;
        object-fit: cover; object-position: center;
        display: block;
    }

    .design29-wrapper .d29-food-placeholder {
        width: 100%; height: 100%;
        background: {{$themeColor}};
    }

    /* ── Date badge — overlapping center of photo ── */
    .design29-wrapper .d29-date-badge {
        position: absolute;
        top: 33cqw;
        left: calc(50% - 12cqw);
        z-index: 8;
        width: 24cqw; height: 24cqw;
        border-radius: 50%;
        background: rgba(20,20,20,0.55);
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .design29-wrapper .d29-date-num {
        font-family: 'Anton', sans-serif;
        font-size: 9cqw;
        color: #ffffff;
        line-height: 1;
        margin: 0;
    }

    .design29-wrapper .d29-date-month {
        font-family: 'Lato', sans-serif;
        font-size: 2.6cqw;
        font-weight: 700;
        color: #ffffff;
        letter-spacing: 2px;
        text-transform: uppercase;
        margin: 0;
    }

    /* ── Bottom-left yellow content ── */
    .design29-wrapper .d29-lower-left {
        position: absolute;
        bottom: 15cqw; left: 5cqw;
        width: 45%;
        z-index: 5;
        text-align: start;
    }

    .design29-wrapper .d29-eyebrow {
        font-family: 'Lato', sans-serif;
        font-size: 2.6cqw;
        font-weight: 700;
        color: rgba(26,26,26,0.65);
        letter-spacing: 1px;
        text-transform: lowercase;
        margin: 0 0 0.8cqw 0;
    }

    .design29-wrapper .d29-main-title {
        font-family: 'Anton', sans-serif;
        font-size: 10.5cqw;
        color: #ffffff;
        line-height: 1.05;
        margin: 0 0 1.5cqw 0;
        letter-spacing: 0.3px;
        text-transform: uppercase;
    }

    .design29-wrapper .d29-desc {
        font-family: 'Lato', sans-serif;
        font-size: 2.3cqw;
        color: rgba(26,26,26,0.75);
        line-height: 1.5;
        font-weight: 400;
        margin: 0;
    }

    /* ── Address — below description, yellow area ── */
    .design29-wrapper .d29-address {
        display: flex;
        align-items: flex-start;
        gap: 1cqw;
        margin-top: 1.5cqw;
    }

    .design29-wrapper .d29-address svg {
        width: 2.6cqw; height: 2.6cqw;
        flex-shrink: 0; margin-top: 0.2cqw;
    }

    .design29-wrapper .d29-address p {
        font-family: 'Lato', sans-serif;
        font-size: 1.9cqw;
        color: rgba(26,26,26,0.7);
        line-height: 1.4;
        font-weight: 600;
        margin: 0;
    }

    /* ── Bottom-right black content ── */
    .design29-wrapper .d29-lower-right {
        position: absolute;
        bottom: 5cqw; right: 5cqw;
        z-index: 5;
        text-align: right;
        display: flex;
        flex-direction: column;
        align-items: flex-end;
        gap: 1.2cqw;
    }

    .design29-wrapper .d29-socials {
        display: flex;
        align-items: center;
        gap: 1.8cqw;
    }

    .design29-wrapper .d29-social-icon {
        width: 3.6cqw; height: 3.6cqw;
        fill: #ffffff; display: block;
    }

    .design29-wrapper .d29-handle {
        font-family: 'Lato', sans-serif;
        font-size: 2.2cqw;
        font-weight: 900;
        color: #ffffff;
        letter-spacing: 0.5px;
        margin: 0;
    }

    .design29-wrapper .d29-website {
        font-family: 'Lato', sans-serif;
        font-size: 1.7cqw;
        font-weight: 400;
        color: rgba(255,255,255,0.55);
        letter-spacing: 1px;
        text-transform: uppercase;
    }

    /* ── Address in black footer column ── */
    .design29-wrapper .d29-address-right {
        display: flex;
        align-items: flex-start;
        gap: 1cqw;
        max-width: 32cqw;
    }

    .design29-wrapper .d29-address-right svg {
        width: 2.6cqw; height: 2.6cqw;
        flex-shrink: 0; margin-top: 0.2cqw;
    }

    .design29-wrapper .d29-address-right span {
        font-family: 'Lato', sans-serif;
        font-size: 1.9cqw;
        font-weight: 600;
        color: rgba(255,255,255,0.7);
        line-height: 1.4;
        text-align: right;
    }

    /* ── Phone — below handle, black area ── */
    .design29-wrapper .d29-phone {
        display: flex;
        align-items: center;
        gap: 1cqw;
    }

    .design29-wrapper .d29-phone svg {
        width: 2.6cqw; height: 2.6cqw;
        fill: {{ $themeColor }};
        flex-shrink: 0;
    }

    .design29-wrapper .d29-phone span {
        font-family: 'Lato', sans-serif;
        font-size: 2cqw;
        font-weight: 700;
        color: #ffffff;
        letter-spacing: 0.3px;
    }

    /* ── Download btn ── */
    .design29-wrapper .d29-download-btn {
        margin-top: 10px;
        background: {{ $themeColor }};
        color: #1a1a1a;
        border: none;
        padding: 8px 18px;
        font-size: 12px;
        font-weight: 700;
        border-radius: 30px;
        cursor: pointer;
        font-family: 'Lato', sans-serif;
        transition: opacity 0.2s;
    }
    .design29-wrapper .d29-download-btn:hover    { opacity: .88; }
    .design29-wrapper .d29-download-btn:disabled { opacity: .5; cursor: not-allowed; }
</style>

<div class="design29-wrapper">
    <div class="design29-card" id="posterCard29">

        {{-- L0: Split background --}}
        <div class="d29-bg-left"></div>
        <div class="d29-bg-right"></div>

        {{-- L1: Left side decoration — food icon outlines --}}
        <svg class="d29-decor-left" width="177" height="340" viewBox="0 0 177 340" xmlns="http://www.w3.org/2000/svg" fill="none" preserveAspectRatio="none">
            {{-- Avocado top --}}
            <g transform="translate(25,15)" stroke="#1a1a1a" stroke-width="1.4" opacity="0.85">
                <ellipse cx="20" cy="22" rx="16" ry="20"/>
                <ellipse cx="20" cy="22" rx="7" ry="9" fill="#7a4a2a" stroke="none"/>
                <ellipse cx="20" cy="22" rx="16" ry="20" fill="#8aab3a" opacity="0.3" stroke="none"/>
            </g>
            {{-- Knife --}}
            <!--<g transform="translate(110,20) rotate(25)" stroke="#1a1a1a" stroke-width="1.3" opacity="0.8">-->
            <!--    <path d="M0 0 L25 0 L30 8 L0 8 Z"/>-->
            <!--    <line x1="0" y1="4" x2="-15" y2="4"/>-->
            <!--</g>-->
            {{-- Cheese wedge --}}
            <g transform="translate(15,140)" stroke="#1a1a1a" stroke-width="1.3" opacity="0.8">
                <path d="M0 30 L20 0 L40 30 Z"/>
                <circle cx="20" cy="22" r="1.5" fill="#1a1a1a" stroke="none"/>
                <circle cx="14" cy="26" r="1.2" fill="#1a1a1a" stroke="none"/>
                <circle cx="26" cy="26" r="1.2" fill="#1a1a1a" stroke="none"/>
            </g>
            {{-- Small leaf top-right of left side --}}
            <g transform="translate(140,120) rotate(15)" stroke="#1a1a1a" stroke-width="1.2" opacity="0.7">
                <path d="M0 0 Q15 5 10 20 Q-5 15 0 0Z" fill="#6a9a30" opacity="0.4"/>
            </g>
            {{-- Small dot/herb leaf mid --}}
            <g transform="translate(20,210)" stroke="#1a1a1a" stroke-width="1.2" opacity="0.7">
                <path d="M0 0 Q12 4 8 16 Q-4 12 0 0Z" fill="#6a9a30" opacity="0.4"/>
            </g>
            {{-- Squiggle line top --}}
            <path d="M60 8 Q70 2 80 8 Q90 14 100 8" stroke="#1a1a1a" stroke-width="1.5" opacity="0.5"/>
        </svg>

        {{-- L1b: Right side decorations — pure CSS divs, no SVG, no transforms --}}
        <div class="d29-r-onion-stem"></div>
        <div class="d29-r-onion-bulb"></div>
        <div class="d29-r-chili-cap"></div>
        <div class="d29-r-chili-body"></div>
        <div class="d29-r-leaf"></div>
        <div class="d29-r-chili2-cap"></div>
        <div class="d29-r-chili2-body"></div>

        {{-- L2: Dotted vertical line edge --}}
        <svg class="d29-dots-edge" width="8" height="70" viewBox="0 0 8 70" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
            <circle cx="4" cy="4"  r="1.6" fill="{{ $themeColor }}"/>
            <circle cx="4" cy="14" r="1.6" fill="{{ $themeColor }}"/>
            <circle cx="4" cy="24" r="1.6" fill="{{ $themeColor }}"/>
            <circle cx="4" cy="34" r="1.6" fill="{{ $themeColor }}"/>
            <circle cx="4" cy="44" r="1.6" fill="{{ $themeColor }}"/>
            <circle cx="4" cy="54" r="1.6" fill="{{ $themeColor }}"/>
            <circle cx="4" cy="64" r="1.6" fill="{{ $themeColor }}"/>
        </svg>

        {{-- LOGO — top-left --}}
        <div class="d29-logo">
            @if (isset($logourl) && $logourl)
                <img src="{{ $logourl }}" alt="logo" crossorigin="anonymous">
            
            @endif
        </div>

        {{-- L3: VEGETARIAN PIZZA headline --}}
        <div class="d29-headline">
            <p class="d29-headline-top">Culinary </p>
            <p class="d29-headline-bottom">Perfection</p>
        </div>

        {{-- L4: Circular food image --}}
        <div class="d29-food-ring">
            @if (isset($menuImageUrl) && $menuImageUrl)
                <img src="{{ $menuImageUrl }}"
                     alt="{{ @$menu['name'] ?? 'Menu Item' }}"
                     class="js-poster-menu-image"
                     crossorigin="anonymous">
            @else
                <div class="d29-food-placeholder"></div>
            @endif
        </div>

        {{-- L6: Bottom-left yellow content --}}
        <div class="d29-lower-left">
            @if (!empty($menu['name']) && strlen($menu['name']) <= 20)
                <p class="d29-main-title">{{ @$menu['name'] }}</p>
             @else
               <p class="d29-main-title">Next-Level Flavor</p>
                    
            @endif
            <p class="d29-desc">
                @if (!empty($menu['description']))
                    {{ Str::limit($menu['description'], 80, '...') }}
                @endif
            </p>

        </div>

        {{-- L7: Bottom-right black content --}}
        <div class="d29-lower-right">

            @if (!empty(@user()->website_domain))
                <div class="d29-phone">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/>
                    </svg>
                    <span>{{ @user()->website_domain }}</span>
                </div>
            @endif

            {{-- PHONE --}}
            @if (!empty(@user()->phone))
                <div class="d29-phone">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1C10.33 21 3 13.67 3 4c0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.24 1.02l-2.21 2.2z"/>
                    </svg>
                    <span>{{ @user()->phone }}</span>
                </div>
            @endif

            {{-- ADDRESS --}}
            <!--@if (!empty(@user()->address))-->
            <!--    <div class="d29-address-right">-->
            <!--        <svg viewBox="0 0 24 24" fill="{{ $themeColor }}" xmlns="http://www.w3.org/2000/svg">-->
            <!--            <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5S10.62 6.5 12 6.5s2.5 1.12 2.5 2.5S13.38 11.5 12 11.5z"/>-->
            <!--        </svg>-->
            <!--        <span>{{ @user()->address }}</span>-->
            <!--    </div>-->
            <!--@endif-->
        </div>

    </div>{{-- /.design29-card --}}

    {{-- <button type="button" class="d29-download-btn" onclick="downloadDesign29()">&#8595; Download Poster</button> --}}

</div>{{-- /.design29-wrapper --}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<script>
    function downloadDesign29() {
        var card   = document.getElementById('posterCard29');
        var button = document.querySelector('.d29-download-btn');
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
                scale: scale, backgroundColor: '#f5d020',
                logging: false, useCORS: true, allowTaint: true, imageTimeout: 15000
            });
        }).then(function(canvas) {
            var link = document.createElement('a');
            link.download = 'menu-poster-design29.png';
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
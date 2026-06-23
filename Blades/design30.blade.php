<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton&family=Open+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">

<style>
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
        box-shadow: 0 20px 60px rgba(0,0,0,0.25);
        container-type: inline-size;
        box-sizing: border-box;
        background: #ffffff;
    }

    /* ══ L0: Split background — green top half / cream bottom half ══ */
    .design30-wrapper .d30-bg-green {
        position: absolute;
        top: 0; left: 0; right: 0;
        height: 50%;
        background-color: {{ $themeColor }};
        z-index: 0;
    }

    .design30-wrapper .d30-bg-cream {
        position: absolute;
        bottom: 0; left: 0; right: 0;
        height: 50%;
        background-color: #f4f1ea;
        z-index: 0;
    }

    /* ══ Noise/grain texture overlay on the theme-color upper half ══ */
    .design30-wrapper .d30-bg-texture {
        position: absolute;
        top: 0; left: 0; right: 0;
        height: 50%;
        z-index: 0;
        pointer-events: none;
        mix-blend-mode: overlay;
    }

    .design30-wrapper .d30-bg-texture svg {
        width: 100%; height: 100%;
        display: block;
    }

    /* ══ L1: Repeating word watermark, right side, rotated card grid ══ */
    .design30-wrapper .d30-watermark {
         position: absolute;
    top: -4cqw;
    right: -20cqw;
    width: 134cqw;
    height: 70cqw;
    z-index: 1;
    display: flex;
    flex-direction: column;
    gap: 1.5cqw;
    transform: rotate(-12deg);
    pointer-events: none;
    overflow: hidden;
    }

    .design30-wrapper .d30-watermark-row {
        display: flex;
        gap: 1.5cqw;
        flex-shrink: 0;
    }

    .design30-wrapper .d30-watermark-row span {
        font-family: 'Anton', sans-serif;
        font-size: 9cqw;
        line-height: 1;
        color: rgba(255,255,255,0.14);
        text-transform: uppercase;
        letter-spacing: 0.5px;
        white-space: nowrap;
        flex-shrink: 0;
    }

    /* ══ Statue of Liberty line-art, lower-left of green area ══ */
    .design30-wrapper .d30-landmark {
        position: absolute;
        bottom: 2cqw; left: 2cqw;
        width: 26cqw; height: 32cqw;
        z-index: 1;
        opacity: 0.22;
        pointer-events: none;
    }

    /* ══ Back button (top-left) ══ */
    .design30-wrapper .d30-back-btn {
        position: absolute;
        top: 4cqw; left: 4cqw;
        width: 9cqw; height: 9cqw;
        border-radius: 50%;
        background: rgba(255,255,255,0.18);
        z-index: 10;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .design30-wrapper .d30-back-btn svg {
        width: 4cqw; height: 4cqw;
    }

    /* ══ Logo badge (top-right, optional) ══ */
    .design30-wrapper .d30-logo {
        position: absolute;
        top: 4cqw; right: 4cqw;
        z-index: 10;
    }

    .design30-wrapper .d30-logo img {
        height: 2rem;
        width: auto;
        display: block;
    }

    /* ══ L4: Rectangular food image ══ */
    .design30-wrapper .d30-food-board {
        position: absolute;
       top: 21cqw;
    left: 8cqw;
    right: 8cqw;
    height: 57cqw;
        z-index: 5;
        border-radius: 3cqw;
        background: #c89456;
        border: 1cqw solid #ffffff;
        box-sizing: border-box;
        box-shadow: 0 14px 36px rgba(0,0,0,0.4);
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .design30-wrapper .d30-food-ring {
        width: 100%; height: 100%;
        border-radius: 1.6cqw;
        overflow: hidden;
    }

    .design30-wrapper .d30-food-ring img {
        width: 100%; height: 100%;
        object-fit: cover; object-position: center;
        display: block;
    }

    .design30-wrapper .d30-food-placeholder {
        width: 100%; height: 100%;
        background: linear-gradient(135deg, #e0c068 0%, #c8902a 55%, #9a5c10 100%);
    }

    /* ══ Menu name — heading, below food image ══ */
    .design30-wrapper .d30-menu-heading {
        position: absolute;
        top: 83cqw;
        left: 6cqw; right: 6cqw;
        z-index: 6;
        text-align: center;
    }

    .design30-wrapper .d30-menu-heading h2 {
        font-family: 'Anton', sans-serif;
        font-size: 8.5cqw;
        color: {{$themeColor}};
        line-height: 1.05;
        text-transform: uppercase;
        margin: 0;
        letter-spacing: 0.3px;
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
    }

    /* ══ Description strip — below heading ══ */
    .design30-wrapper .d30-desc-strip {
        position: absolute;
        top: 92cqw;
        left: 7cqw; right: 7cqw;
        z-index: 6;
        text-align: center;
    }

    .design30-wrapper .d30-desc-strip p {
        font-family: 'Open Sans', sans-serif;
        font-size: 2cqw;
        font-weight: 600;
        color: #4a4a4a;
        line-height: 1.4;
        margin: 0;
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
    }

    /* ══ Tagline pills — centered row, above footer ══ */
    .design30-wrapper .d30-tagline-pills {
        position: absolute;
        top: 99cqw;
        left: 4cqw; right: 4cqw;
        z-index: 6;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 1.2cqw;
        flex-wrap: nowrap;
    }

    .design30-wrapper .d30-pill-outline {
        display: inline-block;
        text-align: center;
        background: #f4f1ea;
        border: 0.35cqw solid {{ $themeColor }};
        border-radius: 30px;
        padding: 0.7cqw 2.6cqw;
        width: fit-content;
        line-height: 0;
        flex-shrink: 0;
    }

    .design30-wrapper .d30-pill-outline span {
        font-family: 'Open Sans', sans-serif;
        font-size: 1.9cqw;
        font-weight: 800;
        color: {{ $themeColor }};
        letter-spacing: 0.4px;
        text-transform: uppercase;
        line-height: 1;
        display: inline-block;
        vertical-align: middle;
        white-space: nowrap;
    }

    .design30-wrapper .d30-pill-filled {
        display: inline-block;
        text-align: center;
        background: {{ $themeColor }};
        border-radius: 30px;
        padding: 0.7cqw 2.6cqw;
        width: fit-content;
        line-height: 0;
        flex-shrink: 0;
    }

    .design30-wrapper .d30-pill-filled span {
        font-family: 'Open Sans', sans-serif;
        font-size: 1.9cqw;
        font-weight: 800;
        color: #ffffff;
        letter-spacing: 0.4px;
        text-transform: uppercase;
        line-height: 1;
        display: inline-block;
        vertical-align: middle;
        white-space: nowrap;
    }

    /* ══ Footer bar — restaurant name/website LEFT, address/phone RIGHT ══ */
    .design30-wrapper .d30-footer {
        position: absolute;
        bottom: 0; left: 0; right: 0;
        height: 16cqw;
        z-index: 6;
        border-top: 1.5px solid rgba(0,0,0,0.1);
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 4cqw;
        box-sizing: border-box;
        gap: 3cqw;
    }

    .design30-wrapper .d30-footer-left {
        flex-shrink: 1;
        min-width: 0;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        gap: 0.6cqw;
    }

    .design30-wrapper .d30-restaurant-name {
        font-family: 'Anton', sans-serif;
        font-size: 3.4cqw;
        color: #1a1a1a;
        line-height: 1.05;
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
        gap: 0.7cqw;
    }

    .design30-wrapper .d30-website-row svg {
        width: 2.3cqw; height: 2.3cqw;
        flex-shrink: 0;
    }

    .design30-wrapper .d30-website-row span {
        font-family: 'Open Sans', sans-serif;
        font-size: 1.8cqw;
        font-weight: 700;
        color: #1a1a1a;
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
        gap: 0.6cqw;
        max-width: 42cqw;
    }

    .design30-wrapper .d30-phone-row {
        display: flex;
        align-items: center;
        gap: 0.7cqw;
    }

    .design30-wrapper .d30-phone-row svg {
        width: 2.3cqw; height: 2.3cqw;
        flex-shrink: 0;
    }

    .design30-wrapper .d30-phone-row span {
        font-family: 'Open Sans', sans-serif;
        font-size: 2cqw;
        font-weight: 700;
        color: #1a1a1a;
        letter-spacing: 0.2px;
        white-space: nowrap;
    }

    .design30-wrapper .d30-address-row {
        display: flex;
        align-items: flex-start;
        gap: 0.7cqw;
        text-align: right;
    }

    .design30-wrapper .d30-address-row svg {
        width: 2.1cqw; height: 2.1cqw;
        flex-shrink: 0;
        margin-top: 0.2cqw;
    }

    .design30-wrapper .d30-address-row span {
        font-family: 'Open Sans', sans-serif;
        font-size: 1.6cqw;
        font-weight: 600;
        color: #555555;
        line-height: 1.35;
        text-align: right;
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
    }

    /* ── Download btn ── */
    .design30-wrapper .d30-download-btn {
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
    .design30-wrapper .d30-download-btn:hover    { opacity: .88; }
    .design30-wrapper .d30-download-btn:disabled { opacity: .5; cursor: not-allowed; }
</style>

<div class="design30-wrapper">
    <div class="design30-card" id="posterCard30">

        {{-- ══ L0: Split background ══ --}}
        <div class="d30-bg-green" style="background-color: {{ $themeColor }};"></div>
        <div class="d30-bg-cream" style="background-color: #f4f1ea;"></div>

        {{-- ══ Noise/grain texture overlay ══ --}}
        <div class="d30-bg-texture" aria-hidden="true">
            <svg width="380" height="190" viewBox="0 0 380 190" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                <filter id="d30Grain">
                    <feTurbulence type="fractalNoise" baseFrequency="0.85" numOctaves="2" stitchTiles="stitch" result="noise"/>
                    <feColorMatrix in="noise" type="matrix"
                        values="0 0 0 0 0
                                0 0 0 0 0
                                0 0 0 0 0
                                0 0 0 0.5 0"/>
                </filter>
                <rect width="100%" height="100%" filter="url(#d30Grain)"/>
            </svg>
        </div>

        {{-- ══ L1: Repeating menu-name watermark ══ --}}
        @php
            $wmWord = !empty($menu['name']) ? mb_strtoupper(mb_substr(trim($menu['name']), 0, 20)) : 'DELICIOUS';
        @endphp
        <div class="d30-watermark" aria-hidden="true">
            @for ($row = 0; $row < 10; $row++)
                <div class="d30-watermark-row">
                    <span>{{ $wmWord }}</span>
                    <span>{{ $wmWord }}</span>
                    <span>{{ $wmWord }}</span>
                    <span>{{ $wmWord }}</span>
                    <span>{{ $wmWord }}</span>
                </div>
            @endfor
        </div>

        {{-- ══ Statue of Liberty line-art ══ --}}
        <svg class="d30-landmark" width="120" height="160" viewBox="0 0 120 160" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" preserveAspectRatio="xMidYMax meet">
            {{-- Base pedestal --}}
            <rect x="38" y="142" width="44" height="12"/>
            <rect x="42" y="130" width="36" height="12"/>
            <rect x="46" y="118" width="28" height="12"/>
            {{-- Robe body --}}
            <path d="M50 118 L48 90 Q47 70 52 55 L60 40 L68 55 Q73 70 72 90 L70 118 Z"/>
            {{-- Arm raised holding torch --}}
            <path d="M68 60 L82 35 L86 20"/>
            {{-- Torch flame --}}
            <path d="M86 20 Q83 13 86 6 Q89 13 86 20Z"/>
            {{-- Other arm holding tablet --}}
            <path d="M52 70 L42 78 L40 96"/>
            <rect x="34" y="78" width="10" height="16"/>
            {{-- Crown spikes --}}
            <path d="M48 40 L52 28 L55 40"/>
            <path d="M55 40 L60 26 L63 40"/>
            <path d="M63 40 L67 28 L70 40"/>
            {{-- Head --}}
            <circle cx="60" cy="44" r="7"/>
        </svg>

       

        {{-- ══ Logo (optional, top-right) ══ --}}
        @if (!empty($logourl))
            <div class="d30-logo">
                <img src="{{ $logourl }}" alt="logo" crossorigin="anonymous">
            </div>
        @endif

        {{-- ══ L4: Rectangular food image ══ --}}
        <div class="d30-food-board">
            <div class="d30-food-ring">
                @if (!empty($menuImageUrl))
                    <img src="{{ $menuImageUrl }}"
                         alt="{{ $menu['name'] ?? 'Food' }}"
                         class="js-poster-menu-image"
                         crossorigin="anonymous">
                @else
                    <div class="d30-food-placeholder"></div>
                @endif
            </div>
        </div>

        {{-- ══ Menu name — heading ══ --}}
        @if (!empty($menu['name']))
            <div class="d30-menu-heading">
                <h2>{{ $menu['name'] }}</h2>
            </div>
        @endif

        {{-- ══ Description strip ══ --}}
        @if (!empty($menu['description']))
            <div class="d30-desc-strip">
                <p>{{ Str::limit($menu['description'], 80, '…') }}</p>
            </div>
        @endif

        {{-- ══ Tagline pills — centered row ══ --}}
        <div class="d30-tagline-pills">
            <div class="d30-pill-outline" style="background: #f4f1ea; border-color: {{ $themeColor }};">
                <span style="color: {{ $themeColor }};">Savor The Melt</span>
            </div>
            <div class="d30-pill-filled" style="background: {{ $themeColor }};">
                <span style="color: #ffffff;">Taste The Magic</span>
            </div>
        </div>

        {{-- ══ Footer — restaurant name/website LEFT, address/phone RIGHT ══ --}}
        <div class="d30-footer">

            <div class="d30-footer-left">
                <p class="d30-restaurant-name">{{ Str::limit(@user()->name ?? 'Our Restaurant', 22, '') }}</p>
                @if (!empty(@user()->website_domain))
                    <div class="d30-website-row">
                        <svg viewBox="0 0 24 24" fill="{{ $themeColor }}" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/>
                        </svg>
                        <span>{{ @user()->website_domain }}</span>
                    </div>
                @endif
            </div>

            <div class="d30-footer-right">
                @if (!empty(@user()->phone))
                    <div class="d30-phone-row">
                        <svg viewBox="0 0 24 24" fill="{{ $themeColor }}" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1C10.33 21 3 13.67 3 4c0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.24 1.02l-2.21 2.2z"/>
                        </svg>
                        <span>{{ @user()->phone }}</span>
                    </div>
                @endif
                @if (!empty(@user()->address))
                    <div class="d30-address-row">
                        <svg viewBox="0 0 24 24" fill="#999999" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5S10.62 6.5 12 6.5s2.5 1.12 2.5 2.5S13.38 11.5 12 11.5z"/>
                        </svg>
                        <span>{{ Str::limit(@user()->address, 48, '') }}</span>
                    </div>
                @endif
            </div>

        </div>

    </div>{{-- /.design30-card --}}

    {{-- <button type="button" class="d30-download-btn" onclick="downloadDesign30()">&#8595; Download Poster</button> --}}

</div>{{-- /.design30-wrapper --}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<script>
    function downloadDesign30() {
        var card   = document.getElementById('posterCard30');
        var button = document.querySelector('.d30-download-btn');
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
                scale: scale, backgroundColor: '#ffffff',
                logging: false, useCORS: true, allowTaint: true, imageTimeout: 15000
            });
        }).then(function(canvas) {
            var link = document.createElement('a');
            link.download = 'menu-poster-design30.png';
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
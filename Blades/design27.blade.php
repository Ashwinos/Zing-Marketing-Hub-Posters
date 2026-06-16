<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Dancing+Script:wght@600;700&family=Lato:wght@400;700;900&family=Playfair+Display:ital,wght@1,500&display=swap" rel="stylesheet">

<style>
    /* ── Wrapper ── */
    .design27-wrapper {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        font-family: 'Lato', sans-serif;
    }

    /* ── Card ── */
    .design27-wrapper .design27-card {
        width: 100%;
        max-width: 340px;
        aspect-ratio: 4 / 5;
        position: relative;
        overflow: hidden;
        box-shadow: 0 20px 60px rgba(0,0,0,0.2);
        container-type: inline-size;
        box-sizing: border-box;
    }

    /* ── L0: Cream background ── */
    .design27-wrapper .d27-bg {
        position: absolute;
        inset: 0;
        z-index: 0;
        background-color: #faf5ee;
    }

    /* ── Subtle linen texture ── */
    .design27-wrapper .d27-texture {
        position: absolute;
        inset: 0;
        z-index: 1;
        pointer-events: none;
        background-image:
            repeating-linear-gradient(0deg, transparent, transparent 9px, rgba(180,130,60,0.03) 9px, rgba(180,130,60,0.03) 10px),
            repeating-linear-gradient(90deg, transparent, transparent 9px, rgba(180,130,60,0.025) 9px, rgba(180,130,60,0.025) 10px);
    }

    /* ── Right Aztec pattern strip ── */
    .design27-wrapper .d27-aztec-strip {
        position: absolute;
        top: 0;
        right: 0;
        width: 18cqw;
        height: 100%;
        z-index: 6;
        pointer-events: none;
    }

    /* ── Food image area — top-left, circular crop ── */
    .design27-wrapper .d27-food-wrap {
        position: absolute;
        top: -2cqw;
        left: -3cqw;
        width: 76cqw;
        height: 52cqw;
        z-index: 3;
        border-radius: 0 0 50% 0;
        overflow: hidden;
        box-shadow: 0 8px 28px rgba(0,0,0,0.22);
    }

    .design27-wrapper .d27-food-wrap img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        display: block;
    }

    .design27-wrapper .d27-food-placeholder {
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, #c8a060, #8a5a20);
    }

    /* ── 20% OFF badge ── */
    .design27-wrapper .d27-badge {
        position: absolute;
        top: 6cqw;
        right: 21cqw;
        z-index: 8;
        width: 16cqw;
        height: 16cqw;
        border-radius: 50%;
        background: #ffffff;
        border: 2.5px solid {{ $themeColor }};
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        box-shadow: 0 4px 14px rgba(0,0,0,0.18);
        gap: 0;
    }

    .design27-wrapper .d27-badge-pct {
        font-family: 'Lato', sans-serif;
        font-size: 5cqw;
        font-weight: 900;
        color: {{ $themeColor }};
        line-height: 1;
    }

    .design27-wrapper .d27-badge-off {
        font-family: 'Lato', sans-serif;
        font-size: 3cqw;
        font-weight: 700;
        color: #1a1a1a;
        line-height: 1;
        letter-spacing: 1px;
        text-transform: uppercase;
    }

    /* ── Logo — top-left ── */
    .design27-wrapper .d27-logo {
        position: absolute;
        top: 3cqw;
        left: 3cqw;
        z-index: 10;
    }

    .design27-wrapper .d27-logo img {
        height: 2rem;
        width: auto;
        display: block;
    }

    /* ── Orange diamond deco shape ── */
    .design27-wrapper .d27-diamond-svg {
        position: absolute;
        top: 51cqw;
        left: 3cqw;
        width: 10cqw;
        height: 10cqw;
        z-index: 4;
    }

    /* ── Main text block ── */
    .design27-wrapper .d27-text-block {
        position: absolute;
        top: 49cqw;
        left: 13cqw;
        right: 20cqw;
        z-index: 5;
    }

    .design27-wrapper .d27-brand-name {
        font-family: 'Pacifico', cursive;
        font-size: 10cqw;
        color: #1a1a1a;
        line-height: 1.1;
        margin: 0 0 1cqw 0;
        letter-spacing: 0.5px;
    }

    .design27-wrapper .d27-tagline {
        font-family: 'Lato', sans-serif;
        font-size: 2.4cqw;
        font-weight: 900;
        color: #333;
        letter-spacing: 3px;
        text-transform: uppercase;
        margin: 0;
        line-height: 1;
    }

    /* ── Divider ── */
    .design27-wrapper .d27-divider {
        position: absolute;
        top: 73cqw;
        left: 5cqw;
        right: 20cqw;
        height: 1px;
        background: rgba(0,0,0,0.15);
        z-index: 4;
    }

    /* ── Lower content ── */
    .design27-wrapper .d27-lower {
        position: absolute;
        top: 75cqw;
        left: 5cqw;
        right: 21cqw;
        z-index: 5;
        text-align: center;
    }

    .design27-wrapper .d27-section-title {
        font-family: 'Playfair Display', serif;
        font-style: italic;
        font-size: 5cqw;
        font-weight: 500;
        color: #1a1a1a;
        margin: 0 0 1.5cqw 0;
        line-height: 1.2;
    }

    .design27-wrapper .d27-desc {
        font-family: 'Lato', sans-serif;
        font-size: 2.1cqw;
        color: #777;
        line-height: 1.65;
        font-weight: 400;
        margin: 0 0 2cqw 0;
        text-align: center;
    }

    /* ── Social icons row ── */
    .design27-wrapper .d27-socials {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 3cqw;
        margin-bottom: 2.5cqw;
    }

    .design27-wrapper .d27-social-icon {
        width: 4.5cqw;
        height: 4.5cqw;
        fill: {{ $themeColor }};
        display: block;
    }

    /* ── Footer contact ── */
    .design27-wrapper .d27-come-visit {
        font-family: 'Lato', sans-serif;
        font-size: 2.2cqw;
        font-weight: 900;
        letter-spacing: 2.5px;
        text-transform: uppercase;
        color: #555;
        margin: 0 0 0.8cqw 0;
        text-align: center;
    }

    .design27-wrapper .d27-address {
        font-family: 'Dancing Script', cursive;
        font-size: 5cqw;
        font-weight: 600;
        color: #1a1a1a;
        margin: 0;
        text-align: center;
        line-height: 1.2;
    }

    /* ── Download btn ── */
    .design27-wrapper .d27-download-btn {
        margin-top: 10px;
        background: {{ $themeColor }};
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
    .design27-wrapper .d27-download-btn:hover    { opacity: .88; }
    .design27-wrapper .d27-download-btn:disabled { opacity: .5; cursor: not-allowed; }
</style>

<div class="design27-wrapper">
    <div class="design27-card" id="posterCard27">

        {{-- L0: Cream background --}}
        <div class="d27-bg"></div>
        <div class="d27-texture"></div>

        {{-- L1: Right Aztec pattern strip (full height) --}}
        <svg class="d27-aztec-strip" viewBox="0 0 60 340" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
            <rect width="60" height="340" fill="{{ $themeColor }}"/>
            {{-- Repeating diamond/geometric Aztec pattern --}}
            <defs>
                <pattern id="d27aztec" x="0" y="0" width="30" height="30" patternUnits="userSpaceOnUse">
                    {{-- Diamond outline --}}
                    <polygon points="15,2 28,15 15,28 2,15" fill="none" stroke="#fff" stroke-width="1.2" opacity="0.6"/>
                    {{-- Inner diamond --}}
                    <polygon points="15,7 23,15 15,23 7,15" fill="none" stroke="#fff" stroke-width="0.8" opacity="0.4"/>
                    {{-- Center dot --}}
                    <circle cx="15" cy="15" r="2" fill="#fff" opacity="0.5"/>
                    {{-- Corner marks --}}
                    <rect x="0"  y="0"  width="4" height="4" fill="#fff" opacity="0.25"/>
                    <rect x="26" y="0"  width="4" height="4" fill="#fff" opacity="0.25"/>
                    <rect x="0"  y="26" width="4" height="4" fill="#fff" opacity="0.25"/>
                    <rect x="26" y="26" width="4" height="4" fill="#fff" opacity="0.25"/>
                </pattern>
                {{-- Secondary color overlay pattern --}}
                <pattern id="d27aztec2" x="0" y="15" width="30" height="30" patternUnits="userSpaceOnUse">
                    <polygon points="15,2 28,15 15,28 2,15" fill="#c0392b" opacity="0.35"/>
                </pattern>
            </defs>
            <rect width="60" height="340" fill="url(#d27aztec)"/>
            <rect width="60" height="340" fill="url(#d27aztec2)"/>
            {{-- Left edge accent line --}}
            <line x1="0" y1="0" x2="0" y2="340" stroke="#fff" stroke-width="2" opacity="0.4"/>
            <line x1="4" y1="0" x2="4" y2="340" stroke="#fff" stroke-width="0.5" opacity="0.2"/>
        </svg>

        {{-- L2: Food image — top-left organic crop --}}
        <div class="d27-food-wrap">
            @if (isset($menuImageUrl) && $menuImageUrl)
                <img src="{{ $menuImageUrl }}"
                     alt="{{ @$menu['name'] ?? 'Menu Item' }}"
                     class="js-poster-menu-image"
                     crossorigin="anonymous">
            @else
                <div class="d27-food-placeholder"></div>
            @endif
        </div>

        {{-- L3: 20% OFF badge --}}
        <div class="d27-badge">
            <span class="d27-badge-pct">20%</span>
            <span class="d27-badge-off">OFF</span>
        </div>

        {{-- L4: Logo top-left --}}
        <div class="d27-logo">
            @if (isset($logourl) && $logourl)
                <img src="{{ $logourl }}" alt="logo" crossorigin="anonymous">
            @endif
        </div>

        {{-- L5: Orange diamond decorative shape --}}
        <svg class="d27-diamond-svg" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
            <polygon points="20,0 40,20 20,40 0,20" fill="{{ $themeColor }}"/>
            <polygon points="20,6 34,20 20,34 6,20" fill="none" stroke="#fff" stroke-width="1.5" opacity="0.6"/>
        </svg>

        {{-- L6: Main brand text --}}
        <div class="d27-text-block">
            <p class="d27-brand-name">{{ @$menu['name'] ?? 'Taco Bistro' }}</p>
            <p class="d27-tagline">Authentic Mexican Cuisine</p>
        </div>

        {{-- Divider line --}}
        <div class="d27-divider"></div>

        {{-- L7: Lower content --}}
        <div class="d27-lower">
            <p class="d27-section-title">Traditional recipes</p>

            @if (!empty($menu['description']))
                <p class="d27-desc">{{ Str::limit($menu['description'], 100, '...') }}</p>
            @else
                <p class="d27-desc">The passion experienced a surge in popularity during the 1990s when chefs first used it on their dishes.</p>
            @endif

            {{-- Social icons --}}
            <div class="d27-socials">
                <svg class="d27-social-icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                </svg>
                <svg class="d27-social-icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-4.714-6.231-5.401 6.231H2.744l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                </svg>
                <svg class="d27-social-icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                </svg>
            </div>

            {{-- Come visit us --}}
            <p class="d27-come-visit">Come Visit Us</p>
            <p class="d27-address">{{ @user()->address ?? '22nd Street / Brighton' }}</p>
        </div>

    </div>{{-- /.design27-card --}}

    {{-- <button type="button" class="d27-download-btn" onclick="downloadDesign27()">&#8595; Download Poster</button> --}}

</div>{{-- /.design27-wrapper --}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<script>
    function downloadDesign27() {
        var card   = document.getElementById('posterCard27');
        var button = document.querySelector('.d27-download-btn');
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
                scale: scale, backgroundColor: '#faf5ee',
                logging: false, useCORS: true, allowTaint: true, imageTimeout: 15000
            });
        }).then(function(canvas) {
            var link = document.createElement('a');
            link.download = 'menu-poster-design27.png';
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
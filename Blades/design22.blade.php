<link
    href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,700&family=Lato:wght@400;700;900&display=swap"
    rel="stylesheet">

<style>
    .design22-wrapper {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        font-family: 'Lato', sans-serif;
    }

    /* ── Card: Instagram 4:5 ratio ── */
    .design22-wrapper .design22-card {
        width: 100%;
        max-width: 340px;
        aspect-ratio: 4 / 5;
        background: #ffffff;
        overflow: hidden;
        position: relative;
        box-sizing: border-box;
        box-shadow: 0 16px 50px rgba(0, 0, 0, 0.22);
        container-type: inline-size;
        text-align: start !important;
        display: flex;
        flex-direction: column;
    }

    /* ── Warm golden radial glow — top-right quadrant ── */
    .design22-wrapper .d22-bg-glow {
        position: absolute;
        top: 0;
        right: 0;
        width: 65%;
        height: 50%;
background: radial-gradient(
    ellipse at 80% 20%,
    {{ $themeColor }} 0%,
    {{ $themeColor }}B3 30%,
    {{ $themeColor }}4D 50%,
    rgba(255,255,255,0.2) 70%,
    rgba(255,255,255,0.7) 90%,
    #ffffff 100%
);
        z-index: 0;
        pointer-events: none;
    }

    /* ── Mandala SVG — top-right corner ── */
    .design22-wrapper .d22-mandala-tr {
        position: absolute;
        top: 0;
        right: 0;
        width: 28cqw;
        height: 28cqw;
        opacity: 0.13;
        z-index: 1;
        pointer-events: none;
    }

    /* ── Mandala SVG — bottom-left corner ── */
    .design22-wrapper .d22-mandala-bl {
        position: absolute;
        bottom: 12cqw;
        left: 0;
        width: 22cqw;
        height: 22cqw;
        opacity: 0.1;
        z-index: 1;
        pointer-events: none;
    }

    /* ══════════════════════════
       TOP HEADER
    ══════════════════════════ */
    .design22-wrapper .d22-header {
        position: relative;
        z-index: 10;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 4cqw 5cqw 2cqw;
        gap: 2cqw;
    }

    /* logo image */
    .design22-wrapper .d22-logo-img {
        width: auto;
        height: 2rem;
        display: block;
        flex-shrink: 0;
    }

    /* Fan Favorite badge */
    .design22-wrapper .d22-badge {
        background: {{ $themeColor }};
        color: #fff;
        font-size: 2cqw;
        font-weight: 700;
        letter-spacing: 1.5px;
        text-transform: uppercase;
        padding: 0.8cqw 2.5cqw;
        border-radius: 30px;
        white-space: nowrap;
    }

    /* ══════════════════════════
       HEADLINE BLOCK
    ══════════════════════════ */
    .design22-wrapper .d22-headline-block {
        position: relative;
        z-index: 10;
        padding: 1cqw 5cqw 2cqw;
    }

    .design22-wrapper .d22-title-italic {
        font-family: 'Playfair Display', serif;
        font-style: italic;
        font-weight: 700;
        font-size: 13cqw;
        color: #1a1a1a;
        line-height: 1;
        margin: 0 0 1cqw;
    }

    /* Orange divider line */
    .design22-wrapper .d22-divider {
        width: 8cqw;
        height: 2px;
        background: {{ $themeColor }};
        margin: 0 0 2cqw;
        border: none;
    }

    .design22-wrapper .d22-desc {
        font-size: 2.3cqw;
        color: #777;
        line-height: 1.6;
        margin: 0;
        max-width: 58%;
    }

    /* ══════════════════════════
       FOOD IMAGE — full width
    ══════════════════════════ */
    .design22-wrapper .d22-food-section {
        position: relative;
        z-index: 5;
        flex: 1;
        min-height: 0;
        overflow: hidden;
    }

    .design22-wrapper .d22-food-section img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center center;
        display: block;
    }

    .design22-wrapper .d22-food-placeholder {
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, #c8a060 0%, #8a5a20 100%);
    }

    /* ── Price tag overlaid on food image bottom-right ── */
    .design22-wrapper .d22-price-tag {
        position: absolute;
        bottom: 3cqw;
        right: 3cqw;
        z-index: 8;
        background: #1a1a1a;
        color: #fff;
        padding: 1.5cqw 3cqw;
        border-radius: 30px;
        font-size: 3.2cqw;
        font-weight: 900;
        letter-spacing: 0.5px;
    }

    .design22-wrapper .d22-price-tag span {
        color: {{ $themeColor }};
    }

    /* ══════════════════════════
       INFO STRIP
    ══════════════════════════ */
    .design22-wrapper .d22-info-strip {
        position: relative;
        z-index: 10;
        display: flex;
        align-items: stretch;
        flex-shrink: 0;
    }

    /* Orange delivery block */
    .design22-wrapper .d22-delivery {
        background: {{ $themeColor }};
        padding: 2.5cqw 5cqw;
        flex: 0 0 52%;
    }

    .design22-wrapper .d22-delivery-label {
        font-size: 2.2cqw;
        font-weight: 700;
        color: #fff;
        text-transform: uppercase;
        letter-spacing: 0.8px;
        margin-bottom: 0.8cqw;
    }

    .design22-wrapper .d22-delivery-phone {
        font-size: 3.2cqw;
        font-weight: 900;
        color: #fff;
        letter-spacing: 0.5px;
    }

    /* Address + name block */
    .design22-wrapper .d22-address-block {
        background: #fff;
        border-top: 2px solid {{ $themeColor }};
        flex: 1;
        padding: 2cqw 3cqw;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .design22-wrapper .d22-address-name {
        font-size: 2.8cqw;
        font-weight: 700;
        color: #1a1a1a;
        margin: 0 0 0.5cqw;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .design22-wrapper .d22-address-text {
        font-size: 2.2cqw;
        color: #777;
        line-height: 1.4;
        margin: 0;
    }

    /* ══════════════════════════
       FOOTER BAR — dark
    ══════════════════════════ */
    .design22-wrapper .d22-footer {
        position: relative;
        z-index: 10;
        background: #1a1a1a;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 5cqw;
        height: 10cqw;
        flex-shrink: 0;
    }

    .design22-wrapper .d22-footer-website {
        display: flex;
        align-items: center;
        gap: 1.5cqw;
        font-size: 2.2cqw;
        color: #fff;
    }

    .design22-wrapper .d22-footer-website svg {
        width: 3cqw;
        height: 3cqw;
        fill: {{ $themeColor }};
        flex-shrink: 0;
    }

    /* ── QR code replacing social icons ── */
    .design22-wrapper .d22-qr {
        width: 7cqw;
        height: 7cqw;
        background: #fff;
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        gap: 0.5px;
        padding: 0.8cqw;
        box-sizing: border-box;
        border-radius: 1cqw;
    }

    .design22-wrapper .d22-qr-cell {
        background: #1a1a1a;
        border-radius: 0.2cqw;
    }

    .design22-wrapper .d22-qr-cell.off {
        background: transparent;
    }

    /* ── Download button ── */
    .design22-wrapper .d22-download-btn {
        margin-top: 10px;
        background: {{ $themeColor }};
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
        box-shadow: 0 4px 16px rgba(232, 145, 10, 0.4);
    }

    .design22-wrapper .d22-download-btn:hover { opacity: .88; transform: translateY(-2px); }
    .design22-wrapper .d22-download-btn:active { transform: translateY(0); }
    .design22-wrapper .d22-download-btn:disabled { opacity: 0.5; cursor: not-allowed; transform: none; }
</style>

<div class="design22-wrapper">

    <div class="design22-card" id="posterCard22">

        {{-- Warm golden glow top-right --}}
        <div class="d22-bg-glow"></div>

        {{-- Mandala top-right --}}
        <svg class="d22-mandala-tr" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" fill="none">
            <circle cx="100" cy="100" r="94" stroke="#b07010" stroke-width="1"/>
            <circle cx="100" cy="100" r="78" stroke="#b07010" stroke-width="0.7"/>
            <circle cx="100" cy="100" r="62" stroke="#b07010" stroke-width="0.7"/>
            <circle cx="100" cy="100" r="46" stroke="#b07010" stroke-width="0.7"/>
            <circle cx="100" cy="100" r="30" stroke="#b07010" stroke-width="0.7"/>
            <circle cx="100" cy="100" r="14" stroke="#b07010" stroke-width="0.7"/>
            <line x1="100" y1="6"  x2="100" y2="194" stroke="#b07010" stroke-width="0.5"/>
            <line x1="6"   y1="100" x2="194" y2="100" stroke="#b07010" stroke-width="0.5"/>
            <line x1="27"  y1="27"  x2="173" y2="173" stroke="#b07010" stroke-width="0.5"/>
            <line x1="173" y1="27"  x2="27"  y2="173" stroke="#b07010" stroke-width="0.5"/>
            <line x1="100" y1="6"   x2="127" y2="173" stroke="#b07010" stroke-width="0.3"/>
            <line x1="100" y1="6"   x2="73"  y2="173" stroke="#b07010" stroke-width="0.3"/>
            <line x1="6"   y1="100" x2="173" y2="127" stroke="#b07010" stroke-width="0.3"/>
            <line x1="6"   y1="100" x2="173" y2="73"  stroke="#b07010" stroke-width="0.3"/>
            <ellipse cx="100" cy="22" rx="4"  ry="8"  fill="#b07010" opacity="0.5"/>
            <ellipse cx="100" cy="22" rx="4"  ry="8"  fill="#b07010" opacity="0.5" transform="rotate(45  100 100)"/>
            <ellipse cx="100" cy="22" rx="4"  ry="8"  fill="#b07010" opacity="0.5" transform="rotate(90  100 100)"/>
            <ellipse cx="100" cy="22" rx="4"  ry="8"  fill="#b07010" opacity="0.5" transform="rotate(135 100 100)"/>
            <ellipse cx="100" cy="22" rx="4"  ry="8"  fill="#b07010" opacity="0.5" transform="rotate(180 100 100)"/>
            <ellipse cx="100" cy="22" rx="4"  ry="8"  fill="#b07010" opacity="0.5" transform="rotate(225 100 100)"/>
            <ellipse cx="100" cy="22" rx="4"  ry="8"  fill="#b07010" opacity="0.5" transform="rotate(270 100 100)"/>
            <ellipse cx="100" cy="22" rx="4"  ry="8"  fill="#b07010" opacity="0.5" transform="rotate(315 100 100)"/>
        </svg>

        {{-- Mandala bottom-left --}}
        <svg class="d22-mandala-bl" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" fill="none">
            <circle cx="100" cy="100" r="94" stroke="#b07010" stroke-width="1"/>
            <circle cx="100" cy="100" r="72" stroke="#b07010" stroke-width="0.7"/>
            <circle cx="100" cy="100" r="50" stroke="#b07010" stroke-width="0.7"/>
            <circle cx="100" cy="100" r="28" stroke="#b07010" stroke-width="0.7"/>
            <line x1="100" y1="6"  x2="100" y2="194" stroke="#b07010" stroke-width="0.5"/>
            <line x1="6"   y1="100" x2="194" y2="100" stroke="#b07010" stroke-width="0.5"/>
            <line x1="27"  y1="27"  x2="173" y2="173" stroke="#b07010" stroke-width="0.5"/>
            <line x1="173" y1="27"  x2="27"  y2="173" stroke="#b07010" stroke-width="0.5"/>
            <ellipse cx="100" cy="22" rx="4"  ry="8"  fill="#b07010" opacity="0.45"/>
            <ellipse cx="100" cy="22" rx="4"  ry="8"  fill="#b07010" opacity="0.45" transform="rotate(45  100 100)"/>
            <ellipse cx="100" cy="22" rx="4"  ry="8"  fill="#b07010" opacity="0.45" transform="rotate(90  100 100)"/>
            <ellipse cx="100" cy="22" rx="4"  ry="8"  fill="#b07010" opacity="0.45" transform="rotate(135 100 100)"/>
            <ellipse cx="100" cy="22" rx="4"  ry="8"  fill="#b07010" opacity="0.45" transform="rotate(180 100 100)"/>
            <ellipse cx="100" cy="22" rx="4"  ry="8"  fill="#b07010" opacity="0.45" transform="rotate(225 100 100)"/>
            <ellipse cx="100" cy="22" rx="4"  ry="8"  fill="#b07010" opacity="0.45" transform="rotate(270 100 100)"/>
            <ellipse cx="100" cy="22" rx="4"  ry="8"  fill="#b07010" opacity="0.45" transform="rotate(315 100 100)"/>
        </svg>

        {{-- ══ HEADER ══ --}}
        <div class="d22-header">
            @if (isset($logourl) && $logourl)
                <img src="{{ $logourl }}" alt="logo" class="d22-logo-img" crossorigin="anonymous">
            @endif
            <div class="d22-badge">Fan Favorite</div>
        </div>

        {{-- ══ HEADLINE ══ --}}
        <div class="d22-headline-block">
            <div class="d22-title-italic">Always Fresh</div>
            <hr class="d22-divider">
            <p class="d22-desc">
                @if (!empty($menu['description']))
                    {{ Str::limit($menu['description'], 90, '...') }}
                @endif
            </p>
        </div>

        {{-- ══ FOOD IMAGE ══ --}}
        <div class="d22-food-section">
            @if (isset($menuImageUrl) && $menuImageUrl)
                <img src="{{ $menuImageUrl }}" alt="{{ @$menu['name'] ?? 'Menu Item' }}"
                    class="js-poster-menu-image" crossorigin="anonymous">
            @else
                <div class="d22-food-placeholder"></div>
            @endif
            
        </div>

        {{-- ══ INFO STRIP ══ --}}
        <div class="d22-info-strip">

            @if(!empty(@user()->phone))
                <div class="d22-delivery">
                    <div class="d22-delivery-label">Contact Now</div>
                    <div class="d22-delivery-phone">{{ @user()->phone }}</div>
                </div>
            @endif

            @if(!empty(@user()->address))
                <div class="d22-address-block">
                    <div class="d22-address-name">{{ @user()->name ?? '' }}</div>
                    <div class="d22-address-text">{{ @user()->address }}</div>
                </div>
            @endif

        </div>

        {{-- ══ FOOTER BAR ══ --}}
     <div class="d22-footer">

        @if(!empty(@user()->website_domain))
            <div class="d22-footer-website">
                <svg viewBox="0 0 24 24">
                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/>
                </svg>
                {{ @user()->website_domain }}
            </div>
        @endif

        {{-- QR code replacing social icons --}}
        <div class="d22-badge">Order Now</div>

    </div>

    </div>{{-- /.design22-card --}}

    {{-- Download button --}}
    {{-- <button type="button" class="d22-download-btn" onclick="downloadDesign22()">
        Download Poster
    </button> --}}

</div>{{-- /.design22-wrapper --}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

<script>
    function downloadDesign22() {
        var card = document.getElementById('posterCard22');
        var button = document.querySelector('.d22-download-btn');
        button.innerHTML = 'Generating...';
        button.disabled = true;
        var exportW = 1080;
        var scale = exportW / card.offsetWidth;
        html2canvas(card, {
            scale: scale,
            backgroundColor: null,
            logging: false,
            useCORS: true,
            allowTaint: true,
            imageTimeout: 0,
            onclone: function(clonedDoc) {
                var images = clonedDoc.querySelectorAll('img');
                return Promise.all(Array.from(images).map(function(img) {
                    return new Promise(function(resolve) {
                        if (img.complete) { resolve(); } else { img.onload = resolve; img.onerror = resolve; }
                    });
                }));
            }
        }).then(function(canvas) {
            var link = document.createElement('a');
            link.download = 'menu-poster-design22.png';
            link.href = canvas.toDataURL('image/png', 1.0);
            link.click();
            button.innerHTML = 'Download Poster';
            button.disabled = false;
        }).catch(function(error) {
            console.error('Error generating image:', error);
            alert('Failed to generate image. Please try again.');
            button.innerHTML = 'Download Poster';
            button.disabled = false;
        });
    }
</script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton&family=Open+Sans:wght@400;600;700;800;900&display=swap" rel="stylesheet">

<style>
    .design31-wrapper {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        font-family: 'Open Sans', sans-serif;
    }

    .design31-wrapper .design31-card {
        width: 100%;
        max-width: 340px;
        aspect-ratio: 4 / 5;
        position: relative;
        overflow: hidden;
        background: #161616;
        box-shadow: 0 20px 60px rgba(0,0,0,0.35);
        container-type: inline-size;
        box-sizing: border-box;
    }

    /* ══ TOP-LEFT LOGO ══ */
    .design31-wrapper .d31-logo {
        position: absolute;
        top: 3cqw; left: 4cqw;
        z-index: 10;
    }

    .design31-wrapper .d31-logo img {
        height: 2rem;
        width: auto;
        display: block;
    }

    .design31-wrapper .d31-logo-fallback {
        font-family: 'Anton', sans-serif;
        font-size: 3.6cqw;
        color: #ffffff;
        letter-spacing: 0.5px;
        text-transform: uppercase;
    }

    /* ══ Circular food photo area ══ */
    .design31-wrapper .d31-photo-circle {
        position: absolute;
        top: 2cqw;
        left: calc(50% - 46cqw);
        width: 92cqw; height: 92cqw;
        z-index: 1;
        border-radius: 50%;
        background: #1a1a1a;
        overflow: hidden;
        box-sizing: border-box;
    }

    /* Dashed ring outline, slightly inset */
    .design31-wrapper .d31-photo-dashring {
        position: absolute;
        top: 2cqw;
        left: calc(50% - 46cqw);
        width: 92cqw; height: 92cqw;
        z-index: 4;
        border-radius: 50%;
        border: 1.5px dashed rgba(255,255,255,0.35);
        box-sizing: border-box;
        pointer-events: none;
    }

    .design31-wrapper .d31-photo-circle img {
        width: 100%; height: 100%;
        object-fit: cover; object-position: center;
        display: block;
    }

    .design31-wrapper .d31-photo-placeholder {
        width: 100%; height: 100%;
        background: radial-gradient(circle at center, #e0a040 0%, #a85a10 60%, #5a2e08 100%);
    }

    /* ══ Red circular phone badge — overlapping photo, upper-right ══ */
    .design31-wrapper .d31-call-badge {
        position: absolute;
        top: 14cqw;
        right: 3cqw;
        width: 27cqw; height: 27cqw;
        z-index: 6;
        border-radius: 50%;
        background: {{ $themeColor }};
        border: 1.2cqw solid #161616;
        box-sizing: border-box;
        box-shadow: 0 6px 18px rgba(0,0,0,0.45);
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        padding: 1.5cqw;
        transform: rotate(-8deg);
    }

    .design31-wrapper .d31-call-label {
        font-family: 'Open Sans', sans-serif;
        font-size: 2.4cqw;
        font-weight: 800;
        color: #ffffff;
        letter-spacing: 1px;
        text-transform: uppercase;
        line-height: 1;
        margin: 0 0 0.6cqw;
    }

    .design31-wrapper .d31-call-sub {
        font-family: 'Open Sans', sans-serif;
        font-size: 1.5cqw;
        font-weight: 600;
        color: rgba(255,255,255,0.85);
        letter-spacing: 0.3px;
        line-height: 1.2;
        margin: 0 0 0.8cqw;
    }

    .design31-wrapper .d31-call-phone {
        font-family: 'Anton', sans-serif;
        font-size: 2.6cqw;
        color: #ffffff;
        letter-spacing: 0.3px;
        line-height: 1.1;
    }

    /* ══ Torn-paper ribbon banner — "MOST DELICIOUS" ══ */
    .design31-wrapper .d31-ribbon-top {
        position: absolute;
        top: 60cqw;
        left: 0; right: 0;
        z-index: 5;
        display: flex;
        justify-content: center;
    }

    .design31-wrapper .d31-ribbon-top span {
        display: inline-block;
        background: {{ $themeColor }};
        color: #ffffff;
        font-family: 'Open Sans', sans-serif;
        font-size: 2.2cqw;
        font-weight: 800;
        letter-spacing: 2px;
        text-transform: uppercase;
        padding: 0.9cqw 6cqw;
        line-height: 1;
        clip-path: polygon(0% 0%, 100% 0%, 97% 50%, 100% 100%, 0% 100%, 3% 50%);
    }

    /* ══ PIZZA headline ══ */
    .design31-wrapper .d31-pizza-heading {
        position: absolute;
        top: 64cqw;
        left: 0; right: 0;
        z-index: 4;
        text-align: center;
    }

    .design31-wrapper .d31-pizza-heading h1 {
        font-family: 'Anton', sans-serif;
        font-size: 17cqw;
        color: #ffffff;
        line-height: 0.85;
        margin: 0;
        letter-spacing: 1px;
        text-transform: uppercase;
        -webkit-text-stroke: 1.5px {{ $themeColor }};
    }

    .design31-wrapper .d31-pizza-sub {
        font-family: 'Open Sans', sans-serif;
        font-size: 2.6cqw;
        font-weight: 700;
        color: #ffffff;
        letter-spacing: 4px;
        text-transform: uppercase;
        margin: 0.8cqw 0 0;
    }

    /* ══ Lower content row: tagline left / checklist right ══ */
    .design31-wrapper .d31-lower-row {
        position: absolute;
        top: 84cqw;
        left: 5cqw; right: 5cqw;
        z-index: 4;
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
        gap: 3cqw;
    }

    .design31-wrapper .d31-lower-left {
        flex: 1;
        min-width: 0;
    }

    .design31-wrapper .d31-lower-eyebrow {
        font-family: 'Open Sans', sans-serif;
        font-size: 1.9cqw;
        font-weight: 700;
        color: {{ $themeColor }};
        letter-spacing: 0.3px;
        margin: 0 0 0.6cqw;
        line-height: 1.3;
    }

    .design31-wrapper .d31-lower-eyebrow strong {
        color: #ffffff;
    }

    .design31-wrapper .d31-restaurant-name {
        font-family: 'Anton', sans-serif;
        font-size: 3.4cqw;
        color: #ffffff;
        text-transform: uppercase;
        letter-spacing: 0.3px;
        margin: 0.6cqw 0 0;
        line-height: 1.1;
    }

    .design31-wrapper .d31-stars {
        color: {{ $themeColor }};
        font-size: 2.2cqw;
        letter-spacing: 0.2cqw;
        margin-top: 0.6cqw;
    }

    .design31-wrapper .d31-lower-right {
        flex-shrink: 0;
        text-align: right;
        max-width: 42cqw;
    }

    .design31-wrapper .d31-checklist-title {
        font-family: 'Open Sans', sans-serif;
        font-size: 1.9cqw;
        font-weight: 800;
        color: #ffffff;
        letter-spacing: 0.3px;
        text-transform: uppercase;
        margin: 0 0 1cqw;
        line-height: 1.15;
    }

    .design31-wrapper .d31-checklist {
        list-style: none;
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        align-items: flex-end;
        gap: 0.8cqw;
    }

    .design31-wrapper .d31-checklist li {
        display: flex;
        align-items: center;
        justify-content: flex-end;
        gap: 0.8cqw;
        font-family: 'Open Sans', sans-serif;
        font-size: 1.9cqw;
        font-weight: 600;
        color: #ffffff;
        white-space: nowrap;
    }

    .design31-wrapper .d31-checklist li svg {
        width: 2.4cqw; height: 2.4cqw;
        flex-shrink: 0;
    }

    /* ══ Description strip ══ */
    .design31-wrapper .d31-desc {
        position: absolute;
        top: 95cqw;
        left: 5cqw; right: 5cqw;
        z-index: 4;
    }

    .design31-wrapper .d31-desc p {
        font-family: 'Open Sans', sans-serif;
        font-size: 1.7cqw;
        font-weight: 400;
        color: rgba(255,255,255,0.55);
        line-height: 1.4;
        margin: 0;
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
    }

    /* ══ FOOTER BAR — green, contact row ══ */
    .design31-wrapper .d31-footer {
        position: absolute;
        bottom: 0; left: 0; right: 0;
        height: 9cqw;
        z-index: 6;
        background: #1e6b3e;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 4cqw;
        box-sizing: border-box;
        gap: 2cqw;
    }

    .design31-wrapper .d31-footer-item {
        display: flex;
        align-items: center;
        gap: 0.8cqw;
        min-width: 0;
    }

    .design31-wrapper .d31-footer-item svg {
        width: 2.6cqw; height: 2.6cqw;
        flex-shrink: 0;
    }

    .design31-wrapper .d31-footer-item span {
        font-family: 'Open Sans', sans-serif;
        font-size: 1.7cqw;
        font-weight: 600;
        color: #ffffff;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        letter-spacing: 0.2px;
    }

    /* ── Download btn ── */
    .design31-wrapper .d31-download-btn {
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
    .design31-wrapper .d31-download-btn:hover    { opacity: .88; }
    .design31-wrapper .d31-download-btn:disabled { opacity: .5; cursor: not-allowed; }
</style>

<div class="design31-wrapper">
    <div class="design31-card" id="posterCard31">

        {{-- ══ LOGO ══ --}}
        <div class="d31-logo">
            @if (!empty($logourl))
                <img src="{{ $logourl }}" alt="logo" crossorigin="anonymous">
            @else
                <span class="d31-logo-fallback">{{ strtoupper(substr(@user()->name ?? 'Restaurant', 0, 10)) }}</span>
            @endif
        </div>

        {{-- ══ Circular food photo ══ --}}
        <div class="d31-photo-circle">
            @if (!empty($menuImageUrl))
                <img src="{{ $menuImageUrl }}"
                     alt="{{ $menu['name'] ?? 'Food' }}"
                     class="js-poster-menu-image"
                     crossorigin="anonymous">
            @else
                <div class="d31-photo-placeholder"></div>
            @endif
        </div>
        <div class="d31-photo-dashring"></div>

        {{-- ══ Red call badge ══ --}}
        @if (!empty(@user()->phone))
            <div class="d31-call-badge" style="background: {{ $themeColor }};">
                <p class="d31-call-label">Call Now!</p>
                <p class="d31-call-sub">For Reservation</p>
                <p class="d31-call-phone">{{ @user()->phone }}</p>
            </div>
        @endif

        {{-- ══ Torn-paper ribbon ══ --}}
        <div class="d31-ribbon-top">
            <span style="background: {{ $themeColor }};">Most Delicious</span>
        </div>

        {{-- ══ PIZZA headline ══ --}}
        <div class="d31-pizza-heading">
            <h1 style="-webkit-text-stroke-color: {{ $themeColor }};">Pizza</h1>
            <p class="d31-pizza-sub">In Town</p>
        </div>

        {{-- ══ Lower row: tagline left / checklist right ══ --}}
        <div class="d31-lower-row">
            <div class="d31-lower-left">
                <p class="d31-lower-eyebrow"><strong>Come and experience</strong><br>the best pizza in town!</p>
                <p class="d31-restaurant-name">{{ Str::limit(@user()->name ?? 'Our Restaurant', 18, '') }}</p>
                <div class="d31-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
            </div>
            <div class="d31-lower-right">
                <p class="d31-checklist-title">Why Choose Us</p>
                <ul class="d31-checklist">
                    <li>
                        <span>Wide Selection</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="{{ $themeColor }}" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 6L9 17l-5-5"/>
                        </svg>
                    </li>
                    <li>
                        <span>Daily Special</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="{{ $themeColor }}" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 6L9 17l-5-5"/>
                        </svg>
                    </li>
                    <li>
                        <span>Take Away</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="{{ $themeColor }}" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 6L9 17l-5-5"/>
                        </svg>
                    </li>
                </ul>
            </div>
        </div>

        {{-- ══ Description ══ --}}
        @if (!empty($menu['description']))
            <div class="d31-desc">
                <p>{{ Str::limit($menu['description'], 70, '…') }}</p>
            </div>
        @endif

        {{-- ══ FOOTER BAR ══ --}}
        <div class="d31-footer" style="background: #1e6b3e;">
            @if (!empty(@user()->website_domain))
                <div class="d31-footer-item">
                    <svg viewBox="0 0 24 24" fill="#ffffff" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/>
                    </svg>
                    <span>{{ @user()->website_domain }}</span>
                </div>
            @endif
            @if (!empty(@user()->address))
                <div class="d31-footer-item">
                    <svg viewBox="0 0 24 24" fill="#ffffff" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5S10.62 6.5 12 6.5s2.5 1.12 2.5 2.5S13.38 11.5 12 11.5z"/>
                    </svg>
                    <span>{{ Str::limit(@user()->address, 30, '') }}</span>
                </div>
            @endif
        </div>

    </div>{{-- /.design31-card --}}

    {{-- <button type="button" class="d31-download-btn" onclick="downloadDesign31()">&#8595; Download Poster</button> --}}

</div>{{-- /.design31-wrapper --}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<script>
    function downloadDesign31() {
        var card   = document.getElementById('posterCard31');
        var button = document.querySelector('.d31-download-btn');
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
                scale: scale, backgroundColor: '#161616',
                logging: false, useCORS: true, allowTaint: true, imageTimeout: 15000
            });
        }).then(function(canvas) {
            var link = document.createElement('a');
            link.download = 'menu-poster-design31.png';
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
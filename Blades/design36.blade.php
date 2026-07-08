<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,600;1,700&family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<style>
    .design36-wrapper {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        font-family: 'Poppins', sans-serif;
    }

    .design36-wrapper .design36-card {
        width: 100%;
        max-width: 340px;
        aspect-ratio: 4 / 5;
        position: relative;
        overflow: hidden;
        background: #1a1613;
        box-shadow: 0 20px 60px rgba(0,0,0,0.3);
        container-type: inline-size;
        box-sizing: border-box;
    }

    /* ══ Background photo — full bleed ══ */
    .d36-photo-bg {
        position: absolute;
        top: 0; left: 0;
        width: 100%;
        height: 65%;
        z-index: 0;
        overflow: hidden;
        background-color: #2b2620;
    }
    .d36-photo-bg img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        display: block;
    }
    .d36-photo-placeholder {
        width: 100%;
        height: 100%;
        background: {{ $themeColor ?? '#e07a1f' }};
    }

    /* ══ Vertical website text along right edge ══ */
    .d36-vertical-site {
        position: absolute;
        top: 6cqw;
        right: 3.5cqw;
        z-index: 3;
        writing-mode: vertical-rl;
        transform: rotate(180deg);
        font-size: 2cqw;
        font-weight: 600;
        letter-spacing: 3px;
        color: rgba(255,255,255,0.85);
        text-transform: uppercase;
        white-space: nowrap;
    }

    /* ══ Orange blob overlay (SVG, html2canvas-safe) ══ */
    .d36-blob-svg {
        position: absolute;
        top: 0; left: 0;
        width: 100%;
        height: 100%;
        z-index: 2;
        pointer-events: none;
    }

    /* ══ Text content over blob ══ */
    .d36-text-block {
        position: absolute;
        top: 77cqw;
        left: 7cqw;
        right: 18cqw;
        z-index: 4;
    }

    .d36-headline {
        font-family: 'Playfair Display', serif;
        font-style: italic;
        font-weight: 700;
        font-size: 10.5cqw;
        line-height: 1.05;
        color: #ffffff;
        margin: 0 0 2.6cqw;
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
    }
    .d36-description {
        font-size: 2.1cqw;
        font-weight: 400;
        line-height: 1.55;
        color: rgba(255,255,255,0.75);
        margin: 0;
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
    }

    /* ══ Footer: contact info left, QR right ══ */
    .d36-footer {
        position: absolute;
        bottom: 5cqw;
        left: 7cqw;
        right: 7cqw;
        z-index: 5;
        display: flex;
        align-items: flex-end;
        justify-content: space-between;
    }
    .d36-contact-info {
        display: flex;
        flex-direction: column;
        gap: 1.4cqw;
        max-width: 65%;
    }
    .d36-contact-row {
        display: flex;
        align-items: flex-start;
        gap: 1.4cqw;
    }
    .d36-contact-row svg {
        width: 3cqw;
        height: 3cqw;
        flex-shrink: 0;
        margin-top: 0.2cqw;
    }
    .d36-contact-row span {
        font-size: 2.1cqw;
        font-weight: 600;
        color: #ffffff;
        line-height: 1.4;
    }
    .d36-contact-row.d36-phone-row span {
        white-space: nowrap;
    }
    .d36-contact-row.d36-address-row span {
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
    }
    .d36-qr {
        position: relative;
        left: 15px;
        top: 7px;
        width: 15cqw;
        height: 15cqw;
        background: #ffffff;
        border-radius: 1.5cqw;
        padding: 1cqw;
        box-sizing: border-box;
        flex-shrink: 0;
    }
    .d36-qr img {
        width: 100%;
        height: 100%;
        display: block;
        object-fit: contain;
    }

    /* ── Logo (optional, top-left over photo) ── */
    .d36-logo {
        position: absolute;
        top: 5cqw;
        left: 6cqw;
        height: 2rem;
        width: auto;
        z-index: 5;
        display: block;
    }

    .d36-download-btn {
        margin-top: 16px;
        padding: 10px 22px;
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
        font-size: 14px;
        background: #e07a1f;
        color: #ffffff;
        border: none;
        border-radius: 6px;
        cursor: pointer;
    }
    .d36-download-btn:disabled { opacity: 0.6; cursor: default; }
</style>

<div class="design36-wrapper">
    <div class="design36-card" id="posterCard36">

        {{-- ══ Background photo ══ --}}
        <div class="d36-photo-bg">
            @if (!empty($menuImageUrl))
                <img src="{{ $menuImageUrl }}"
                     alt="{{ $menu['name'] ?? 'Menu item' }}"
                     class="js-poster-menu-image"
                     crossorigin="anonymous">
            @else
                <div class="d36-photo-placeholder"></div>
            @endif
        </div>

        {{-- ══ Logo (optional) ══ --}}
        @if (!empty($logourl))
            <img src="{{ $logourl }}" alt="logo" class="d36-logo" crossorigin="anonymous">
        @endif

        {{-- ══ Vertical website text ══ --}}
        @if (!empty(@user()->website_domain))
            <div class="d36-vertical-site">{{ @user()->website_domain }}</div>
        @endif

        {{-- ══ Orange organic blob overlay ══ --}}
        <svg class="d36-blob-svg" viewBox="0 0 340 425" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0,235
                     C 60,205 100,262 150,236
                     C 200,210 232,178 272,196
                     C 302,208 322,222 340,206
                     L340,340
                     C 320,358 300,344 276,364
                     C 252,384 262,410 232,425
                     L0,425
                     Z"
                  fill="{{ $themeColor ?? '#e07a1f' }}"/>
        </svg>

        {{-- ══ Text content ══ --}}
        <div class="d36-text-block">
           
            <h1 class="d36-headline">{{ $menu['name'] ?? 'Eat Healthy' }}</h1>
            @if (!empty($menu['description']))
                <p class="d36-description">{{ Str::limit($menu['description'], 110, '…') }}</p>
            @endif
        </div>

        {{-- ══ Footer: phone + address left, QR right ══ --}}
        <div class="d36-footer">
            <div class="d36-contact-info">
                @if (!empty(@user()->phone))
                    <div class="d36-contact-row d36-phone-row">
                        <svg viewBox="0 0 24 24" fill="#ffffff" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1C10.33 21 3 13.67 3 4c0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.24 1.02l-2.21 2.2z"/>
                        </svg>
                        <span>{{ @user()->phone }}</span>
                    </div>
                @endif
                @if (!empty(@user()->address))
                    <div class="d36-contact-row d36-address-row">
                        <svg viewBox="0 0 24 24" fill="#ffffff" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5S10.62 6.5 12 6.5s2.5 1.12 2.5 2.5S13.38 11.5 12 11.5z"/>
                        </svg>
                        <span>{{ @user()->address }}</span>
                    </div>
                @endif
            </div>

            @if (!empty(@user()->website_domain))
                <div class="d36-qr">
                    <img src="https://api.qrserver.com/v1/create-qr-code/?size=200x200&data={{ urlencode('https://' . @user()->website_domain) }}"
                         alt="QR code"
                         crossorigin="anonymous">
                </div>
            @endif
        </div>

    </div>{{-- /.design36-card --}}

    {{-- <button type="button" class="d36-download-btn" onclick="downloadDesign36()">&#8595; Download Poster</button> --}}

</div>{{-- /.design36-wrapper --}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<script>
    function downloadDesign36() {
        var card   = document.getElementById('posterCard36');
        var button = document.querySelector('.d36-download-btn');
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
                scale: scale, backgroundColor: '#1a1613',
                logging: false, useCORS: true, allowTaint: true, imageTimeout: 15000
            });
        }).then(function(canvas) {
            var link = document.createElement('a');
            link.download = 'menu-poster-design36.png';
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
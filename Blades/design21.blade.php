<link
    href="https://fonts.googleapis.com/css2?family=Anton&family=Dancing+Script:wght@700&family=DM+Sans:wght@400;500;600&display=swap"
    rel="stylesheet">

<style>
    .design21-wrapper {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        font-family: 'DM Sans', sans-serif;
    }

    /* ── Card: Instagram 4:5 ratio ── */
    .design21-wrapper .design21-card {
        position: relative;
        width: 100%;
        max-width: 380px;
        aspect-ratio: 4 / 5;
        background: #fdf5ea;
        overflow: hidden;
        box-shadow: 0 16px 50px rgba(0, 0, 0, 0.22);
        outline: 2px dashed {{ $themeColor }} !important;
        outline-offset: -8px;
        container-type: inline-size;
        box-sizing: border-box;
    }

    /* ── Linen texture ── */
    .design21-wrapper .design21-card::before {
        content: "";
        position: absolute;
        inset: 0;
        background-image:
            repeating-linear-gradient(0deg, transparent, transparent 3px, rgba(180, 120, 60, .07) 3px, rgba(180, 120, 60, .07) 4px),
            repeating-linear-gradient(90deg, transparent, transparent 3px, rgba(180, 120, 60, .05) 3px, rgba(180, 120, 60, .05) 4px),
            repeating-linear-gradient(-45deg, transparent, transparent 6px, rgba(160, 100, 40, .04) 6px, rgba(160, 100, 40, .04) 7px);
        z-index: 1;
        pointer-events: none;
    }

    /* ── Grain noise ── */
    .design21-wrapper .design21-card::after {
        content: "";
        position: absolute;
        inset: 0;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='300'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.68' numOctaves='4' stitchTiles='stitch'/%3E%3CfeColorMatrix type='saturate' values='0'/%3E%3C/filter%3E%3Crect width='300' height='300' filter='url(%23n)' opacity='0.09'/%3E%3C/svg%3E");
        background-size: 300px 300px;
        z-index: 2;
        pointer-events: none;
    }

    /* ── BG food image ── */
    .design21-wrapper .d21-bg-image {
        position: absolute;
        inset: 0;
        z-index: 0;
    }

    .design21-wrapper .d21-bg-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        opacity: 0.11;
        filter: grayscale(25%);
        display: block;
    }

    /* ── Text wallpaper ── */
    .design21-wrapper .d21-text-wallpaper {
        position: absolute;
        top: -30%;
        left: -20%;
        width: 145%;
        height: 165%;
        transform: rotate(-26deg);
        z-index: 3;
        pointer-events: none;
        overflow: hidden;
    }

    .design21-wrapper .d21-text-row {
        font-family: 'Anton', sans-serif;
        font-size: 11cqw;
        line-height: 1.2;
        color: #1a1a1a;
        opacity: 0.07;
        white-space: nowrap;
        letter-spacing: 1px;
        user-select: none;
    }

    /* ── Deco icon ── */
    .design21-wrapper .d21-deco-icon {
        position: absolute;
        top: 3.5cqw;
        left: 3.5cqw;
        z-index: 6;
        font-size: 4.5cqw;
        color: #1a1a1a;
        transform: rotate(-20deg);
        line-height: 1;
    }

    /* ── Menu badge ── */
     .design21-wrapper .d21-menu-badge {
        position: absolute;
        top: 24px;
        left: 50%;
        transform: translateX(-50%);
        z-index: 6;
        background: {{ $themeColor }} !important;
        color: #fff !important;
        font-size: 6px !important;
        font-weight: 700 !important;
        letter-spacing: 2.5px !important;
        text-transform: uppercase;
        padding: 2.7px 10px !important;
        border-radius: 30px;
        white-space: nowrap;
    }

    /* ── Menu name ── */
    .design21-wrapper .d21-menu-name {
        position: absolute;
        top: 68.5cqw;
        left: 0;
        right: 58%;
        z-index: 6;
        font-family: 'Anton', sans-serif;
        font-size: 13cqw;
        line-height: 1;
        color: #373737;
        text-transform: uppercase;
        letter-spacing: 5.5px;
        padding: 0 3cqw;
        transform: rotate(-90deg);
    }

    /* ── Menu description ── */
    .design21-wrapper .d21-menu-desc {
        position: absolute;
        top: 15cqw;
        left: 0;
        right: 0;
        text-align: center;
        z-index: 6;
        font-size: 8px !important;
        color: #666 !important;
        line-height: 1.6 !important;
        padding: 0 9cqw !important;
        font-style: italic !important;
    }

    /* ── Instagram card ── */
    .design21-wrapper .d21-insta-card {
        position: absolute;
        top: 31cqw;
        left: 80%;
        width: 62%;
        background: #fff;
        border-radius: 2.5cqw;
        overflow: hidden;
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.18);
        z-index: 8;
        transform: translateX(-50%) rotate(-17deg);
    }

    .design21-wrapper .d21-insta-header {
        display: flex;
        align-items: center;
        gap: 1.8cqw;
        padding: 1.6cqw 2.4cqw;
    }

    /* ── Insta avatar: first-letter circle ── */
    .design21-wrapper .d21-insta-avatar {
        width: 6cqw;
        height: 6cqw;
        border-radius: 50%;
        border: 1.5px solid #ddd;
        flex-shrink: 0;
        background: {{ $themeColor }};
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: 'Anton', sans-serif;
        font-size: 3.2cqw;
        color: #fff;
        line-height: 1;
        text-transform: uppercase;
    }

    .design21-wrapper .d21-insta-name {
        font-size: 2.4cqw;
        font-weight: 600;
        color: #1a1a1a;
    }

    .design21-wrapper .d21-insta-photo {
        width: 100%;
        height: 44cqw;
        overflow: hidden;
    }

    .design21-wrapper .d21-insta-photo img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    .design21-wrapper .d21-insta-footer {
        padding: 1.5cqw 2.5cqw 2cqw;
        display: flex;
        align-items: center;
        gap: 1.2cqw;
    }

    .design21-wrapper .d21-heart-icon {
        font-size: 5cqw;
        color: #e0143c;
        line-height: 1;
    }

    .design21-wrapper .d21-insta-likes {
        font-size: 2.2cqw;
        color: #666;
        font-weight: 500;
    }

    /* ── Info strip ── */
    .design21-wrapper .d21-info-strip {
        position: absolute;
        bottom: 14cqw;
        left: 0;
        right: 0;
        z-index: 9;
        background: rgba(253, 245, 234, 0.94);
        border-top: 1px solid rgba(201, 58, 26, 0.18);
        border-bottom: 1px solid rgba(201, 58, 26, 0.18);
        padding: 2cqw 5cqw;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 2cqw;
    }

    .design21-wrapper .d21-info-item {
        display: flex;
        align-items: center;
        gap: 1cqw;
        font-size: 2.1cqw;
        font-weight: 500;
        color: #444;
        overflow: hidden;
        white-space: nowrap;
    }

    .design21-wrapper .d21-info-item svg {
        width: 2.8cqw;
        height: 2.8cqw;
        fill: {{ $themeColor }};
        flex-shrink: 0;
    }

    .design21-wrapper .d21-info-sep {
        width: 1px;
        height: 3.5cqw;
        background: rgba(201, 58, 26, 0.25);
        flex-shrink: 0;
    }

    /* ── Bottom bar ── */
    .design21-wrapper .d21-bottom-bar {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 14cqw;
        background: #1a1a1a;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 5cqw;
        z-index: 10;
    }

    /* ── Footer left: logo + order btn grouped ── */
    .design21-wrapper .d21-bottom-left {
        display: flex;
        align-items: center;
        gap: 2cqw;
    }

    /* ── Footer logo: height 2rem, width auto, no object-fit, no border-radius ── */
    .design21-wrapper .d21-footer-logo {
        height: 2rem;
        width: auto;
        display: block;
    }

    .design21-wrapper .d21-order-btn {
        background: {{ $themeColor }};
        color: #fff;
        font-family: 'Anton', sans-serif;
        font-size: 3cqw;
        letter-spacing: 1.5px;
        padding: 2cqw 5.5cqw;
        border-radius: 30px;
        text-transform: uppercase;
    }

    .design21-wrapper .d21-call-block {
        display: flex;
        flex-direction: column;
        align-items: flex-end;
        gap: 0.4cqw;
    }

    .design21-wrapper .d21-call-label {
        font-size: 1.9cqw;
        font-weight: 700;
        letter-spacing: 1.5px;
        text-transform: uppercase;
        color: rgba(255, 255, 255, 0.5);
    }

    .design21-wrapper .d21-call-number {
        display: flex;
        align-items: center;
        gap: 1cqw;
        font-size: 2.6cqw;
        font-weight: 600;
        color: #fff;
    }

    .design21-wrapper .d21-call-number svg {
        width: 2.6cqw;
        height: 2.6cqw;
        fill: {{ $themeColor }};
    }

    /* ── Download button ── */
    .design21-wrapper .d21-download-btn {
        margin-top: 10px;
        background: {{ $themeColor }};
        color: #fff;
        border: none;
        padding: 8px 16px;
        font-size: 12px;
        font-weight: 700;
        border-radius: 30px;
        cursor: pointer;
        font-family: 'DM Sans', sans-serif;
        display: flex;
        align-items: center;
        gap: 8px;
        letter-spacing: 0.04em;
        transition: opacity 0.2s, transform 0.15s;
        box-shadow: 0 4px 20px rgba(201, 58, 26, 0.4);
    }

    .design21-wrapper .d21-download-btn:hover {
        opacity: .88;
        transform: translateY(-2px);
    }

    .design21-wrapper .d21-download-btn:active {
        transform: translateY(0);
    }

    .design21-wrapper .d21-download-btn:disabled {
        opacity: 0.5;
        cursor: not-allowed;
        transform: none;
    }
</style>

<div class="design21-wrapper">

    <div class="design21-card" id="posterCard21">

        {{-- Background food image --}}
        <div class="d21-bg-image">
            @if (isset($menuImageUrl) && $menuImageUrl)
                <img src="{{ $menuImageUrl }}" alt="{{ @$menu['name'] ?? 'Menu Item' }}" crossorigin="anonymous">
            
            @endif
        </div>

        {{-- Text wallpaper --}}

        {{-- Deco icon --}}
        <div class="d21-deco-icon">🍽</div>

        {{-- Menu badge --}}
        <div class="d21-menu-badge">Fan Favorite</div>

        {{-- Menu name --}}
        <div class="d21-menu-name">
            Simply<br>Delicious
        </div>

        {{-- Menu description --}}
        <div class="d21-menu-desc">
            @if (!empty($menu['description']))
                {{ Str::limit($menu['description'], 120, '...') }}
            @endif
        </div>

        {{-- Instagram-style photo card --}}
        <div class="d21-insta-card">
            <div class="d21-insta-header">
                {{-- First letter of name instead of logo image --}}
                <div class="d21-insta-avatar" id="instaAvatar">
                    {{ strtoupper(substr(@user()->name ?? 'Restaurant', 0, 1)) }}
                </div>
                <div class="d21-insta-name" id="instaName">{{ @user()->name ?? ' ' }}</div>
            </div>
            <div class="d21-insta-photo">
                @if (isset($menuImageUrl) && $menuImageUrl)
                    <img src="{{ $menuImageUrl }}" alt="{{ @$menu['name'] ?? 'Menu Item' }}"
                        class="js-poster-menu-image" crossorigin="anonymous">
                @endif
            </div>
            <div class="d21-insta-footer">
                <div class="d21-heart-icon">♥</div>
                <div class="d21-insta-likes">2,847 likes</div>
            </div>
        </div>

        {{-- Info strip --}}
        <div class="d21-info-strip">
            <div class="d21-info-item">
                <svg viewBox="0 0 24 24">
                    <path
                        d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z" />
                </svg>
                {{ @user()->website_domain ?? ' ' }}
            </div>
            <div class="d21-info-sep"></div>
            <div class="d21-info-item">
                <svg viewBox="0 0 24 24">
                    <path
                        d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5S10.62 6.5 12 6.5s2.5 1.12 2.5 2.5S13.38 11.5 12 11.5z" />
                </svg>
                {{ @user()->address ?? ' ' }}
            </div>
        </div>

        {{-- Bottom bar --}}
        <div class="d21-bottom-bar">
            {{-- Logo + Order button grouped on the left --}}
            <div class="d21-bottom-left">
                @if (isset($logourl) && $logourl)
                    <img src="{{ $logourl }}" alt="logo" class="d21-footer-logo" crossorigin="anonymous">
                @endif
                <!--<div class="d21-order-btn">ORDER NOW</div>-->
            </div>
            <div class="d21-call-block">
                <div class="d21-call-label">Call Us</div>
                <div class="d21-call-number">
                    <svg viewBox="0 0 24 24">
                        <path
                            d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1C10.33 21 3 13.67 3 4c0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.24 1.02l-2.21 2.2z" />
                    </svg>
                    {{ @user()->phone ?? ' ' }}
                </div>
            </div>
        </div>

    </div>{{-- /.design21-card --}}

    {{-- Download button --}}
    {{-- <button type="button" class="d21-download-btn" onclick="downloadDesign21()">
        Download Poster
    </button> --}}

</div>{{-- /.design21-wrapper --}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

<script>
    function downloadDesign21() {
        var card = document.getElementById('posterCard21');
        var button = document.querySelector('.d21-download-btn');

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
                        if (img.complete) {
                            resolve();
                        } else {
                            img.onload = resolve;
                            img.onerror = resolve;
                        }
                    });
                }));
            }
        }).then(function(canvas) {
            var link = document.createElement('a');
            link.download = 'menu-poster-design21.png';
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
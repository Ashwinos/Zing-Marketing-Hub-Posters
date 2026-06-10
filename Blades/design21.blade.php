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

    /* ── Card ── */
    .design21-wrapper .design21-card {
        position: relative;
        width: 100%;
        max-width: 380px;
        aspect-ratio: 4 / 5;
        background: #fdf5ea;
        overflow: hidden;
        box-shadow: 0 16px 50px rgba(0,0,0,0.22);
        container-type: inline-size;
        box-sizing: border-box;
    }

    /* ── BG food image — opacity on wrapper ── */
    .design21-wrapper .d21-bg-image {
        position: absolute;
        inset: 0;
        z-index: 0;
        opacity: 0.11;
    }

    .design21-wrapper .d21-bg-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    /* ── Linen texture (real div) ── */
    .design21-wrapper .d21-texture-linen {
        position: absolute;
        inset: 0;
        z-index: 1;
        pointer-events: none;
        background-image:
            repeating-linear-gradient(0deg,   transparent, transparent 3px, rgba(180,120,60,.07) 3px, rgba(180,120,60,.07) 4px),
            repeating-linear-gradient(90deg,  transparent, transparent 3px, rgba(180,120,60,.05) 3px, rgba(180,120,60,.05) 4px),
            repeating-linear-gradient(-45deg, transparent, transparent 6px, rgba(160,100,40,.04) 6px, rgba(160,100,40,.04) 7px);
    }

    /* ── Grain noise (real div) ── */
    .design21-wrapper .d21-texture-grain {
        position: absolute;
        inset: 0;
        z-index: 2;
        pointer-events: none;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='300'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.68' numOctaves='4' stitchTiles='stitch'/%3E%3CfeColorMatrix type='saturate' values='0'/%3E%3C/filter%3E%3Crect width='300' height='300' filter='url(%23n)' opacity='0.09'/%3E%3C/svg%3E");
        background-size: 300px 300px;
    }

    /* ── Dashed outline frame (real div) ── */
    .design21-wrapper .d21-outline-frame {
        position: absolute;
        inset: 8px;
        border: 1px dashed {{ $themeColor }};
        pointer-events: none;
        z-index: 19;
        box-sizing: border-box;
    }

    /* ── Deco icon ── */
    .design21-wrapper .d21-deco-icon {
        position: absolute;
        top: 3.5cqw;
        left: 3.5cqw;
        z-index: 6;
        width: 5cqw;
        height: 5cqw;
        transform: rotate(-20deg);
        display: block;
    }

    /* ── Menu badge ── */
    .design21-wrapper .d21-menu-badge {
        position: absolute;
        top: 24px;
        left: 50%;
        transform: translateX(-50%);
        z-index: 6;
        background: {{ $themeColor }};
        color: #fff;
        font-size: 6px;
        font-weight: 700;
        letter-spacing: 2.5px;
        text-transform: uppercase;
        padding: 2.7px 10px;
        border-radius: 30px;
        white-space: nowrap;
    }

    /* ── Menu description ── */
    .design21-wrapper .d21-menu-desc {
        position: absolute;
        top: 15cqw;
        left: 0;
        right: 0;
        text-align: center;
        z-index: 6;
        font-size: 8px;
        color: #666;
        line-height: 1.6;
        padding: 0 9cqw;
        font-style: italic;
    }

    /* ── Menu name (rotated vertical text) ── */
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

    /* ── Instagram outer wrapper — holds rotation, NO overflow:hidden ── */
    /* html2canvas silently drops transform on elements that have overflow:hidden */
    .design21-wrapper .d21-insta-outer {
        position: absolute;
        top: 32cqw;
        left: 36%;
        width: 220px;
        z-index: 19;
        transform: rotate(-12deg);
        transform-origin: top left;
    }

    /* ── Instagram card inner — clips content, NO transform ── */
    .design21-wrapper .d21-insta-card {
        width: 100%;
        background: #fff;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 6px 20px rgba(0,0,0,0.18);
    }

    /* ── Insta header ── */
    .design21-wrapper .d21-insta-header {
        display: flex;
        align-items: center;
        gap: 7px;
        padding: 7px 10px;
        background: #fff;
    }

    .design21-wrapper .d21-insta-avatar {
        width: 24px;
        height: 24px;
        border-radius: 50%;
        border: 1.5px solid #ddd;
        flex-shrink: 0;
        background: {{ $themeColor }};
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: 'Anton', sans-serif;
        font-size: 11px;
        color: #fff;
        line-height: 1;
        text-transform: uppercase;
    }

    .design21-wrapper .d21-insta-name {
        font-size: 10px;
        font-weight: 600;
        color: #1a1a1a;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        max-width: 150px;
    }

    /* ── Insta photo — fixed px height ── */
    .design21-wrapper .d21-insta-photo {
        width: 100%;
        height: 160px;
        overflow: hidden;
        display: block;
        position: relative;
    }

    .design21-wrapper .d21-insta-photo img {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    /* ── Insta footer — all px, no cqw ── */
    .design21-wrapper .d21-insta-footer {
        padding: 7px 10px 9px;
        display: flex;
        align-items: center;
        gap: 5px;
        background: #fff;
    }

    /* heart: inline SVG with fill attr directly on element */
    .design21-wrapper .d21-heart-icon {
        width: 16px;
        height: 16px;
        flex-shrink: 0;
        display: block;
    }

    .design21-wrapper .d21-insta-likes {
        font-size: 9px;
        color: #666;
        font-weight: 500;
        font-family: 'DM Sans', sans-serif;
    }

    /* ── Info strip ── */
    .design21-wrapper .d21-info-strip {
        position: absolute;
        bottom: 14cqw;
        left: 0;
        right: 0;
        z-index: 9;
        background: rgba(253,245,234,0.94);
        border-top: 1px solid rgba(201,58,26,0.18);
        border-bottom: 1px solid rgba(201,58,26,0.18);
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
        background: rgba(201,58,26,0.25);
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

    .design21-wrapper .d21-bottom-left {
        display: flex;
        align-items: center;
        gap: 2cqw;
    }

    .design21-wrapper .d21-footer-logo {
        height: 2rem;
        width: auto;
        display: block;
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
        color: rgba(255,255,255,0.5);
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
        box-shadow: 0 4px 20px rgba(201,58,26,0.4);
    }
    .design21-wrapper .d21-download-btn:hover   { opacity: .88; transform: translateY(-2px); }
    .design21-wrapper .d21-download-btn:active   { transform: translateY(0); }
    .design21-wrapper .d21-download-btn:disabled { opacity: 0.5; cursor: not-allowed; transform: none; }
</style>

<div class="design21-wrapper">
    <div class="design21-card" id="posterCard21">

        {{-- ── BG food image ── --}}
        <div class="d21-bg-image">
            @if (isset($menuImageUrl) && $menuImageUrl)
                <img src="{{ $menuImageUrl }}" alt="{{ @$menu['name'] ?? 'Menu Item' }}" crossorigin="anonymous">
            @endif
        </div>

        {{-- ── Texture layers ── --}}
        <div class="d21-texture-linen"></div>
        <div class="d21-texture-grain"></div>

        {{-- ── Dashed outline frame ── --}}
        <div class="d21-outline-frame"></div>

        {{-- ── Deco icon (inline SVG, no emoji) ── --}}
        <!--<svg class="d21-deco-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">-->
        <!--    <circle cx="12" cy="12" r="9" stroke="#1a1a1a" stroke-width="1.5" fill="none"/>-->
        <!--    <path d="M8 12 Q12 7 16 12" stroke="#1a1a1a" stroke-width="1.2" fill="none" stroke-linecap="round"/>-->
        <!--    <path d="M7 14 Q12 18 17 14" stroke="#1a1a1a" stroke-width="1.2" fill="none" stroke-linecap="round"/>-->
        <!--</svg>-->

        {{-- ── Menu badge ── --}}
        <div class="d21-menu-badge">Fan Favorite</div>

        {{-- ── Menu name (rotated) ── --}}
        <div class="d21-menu-name">
            Simply<br>Delicious
        </div>

        {{-- ── Menu description ── --}}
        <div class="d21-menu-desc">
            @if (!empty($menu['description']))
                {{ Str::limit($menu['description'], 120, '...') }}
            @endif
        </div>

        {{-- ── Instagram card ── --}}
        {{-- Outer div handles rotation (no overflow:hidden) --}}
        {{-- Inner div handles clipping (no transform) --}}
        {{-- html2canvas drops transform on overflow:hidden elements --}}
        <div class="d21-insta-outer">
        <div class="d21-insta-card">
            <div class="d21-insta-header">
                <div class="d21-insta-avatar">
                    {{ strtoupper(substr(@user()->name ?? 'R', 0, 1)) }}
                </div>
                <div class="d21-insta-name">{{ @user()->name ?? '' }}</div>
            </div>
            <div class="d21-insta-photo">
                @if (isset($menuImageUrl) && $menuImageUrl)
                    <img src="{{ $menuImageUrl }}" alt="{{ @$menu['name'] ?? 'Menu Item' }}" class="js-poster-menu-image" crossorigin="anonymous">
                @endif
            </div>
            <div class="d21-insta-footer">
                {{-- fill attr directly on <svg> — CSS fill class unreliable in html2canvas --}}
                <svg class="d21-heart-icon" viewBox="0 0 24 24" fill="#e0143c" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                </svg>
                <div class="d21-insta-likes">2,847 likes</div>
            </div>
        </div>
        </div>

        {{-- ── Info strip ── --}}
        <div class="d21-info-strip">
            <div class="d21-info-item">
                <svg viewBox="0 0 24 24" fill="{{ $themeColor }}"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/></svg>
                {{ @user()->website_domain ?? '' }}
            </div>
            <div class="d21-info-sep"></div>
            <div class="d21-info-item">
                <svg viewBox="0 0 24 24" fill="{{ $themeColor }}"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5S10.62 6.5 12 6.5s2.5 1.12 2.5 2.5S13.38 11.5 12 11.5z"/></svg>
                {{ @user()->address ?? '' }}
            </div>
        </div>

        {{-- ── Bottom bar ── --}}
        <div class="d21-bottom-bar">
            <div class="d21-bottom-left">
                @if (isset($logourl) && $logourl)
                    <img src="{{ $logourl }}" alt="logo" class="d21-footer-logo" crossorigin="anonymous">
                @endif
            </div>
            <div class="d21-call-block">
                <div class="d21-call-label">Call Us</div>
                <div class="d21-call-number">
                    <svg viewBox="0 0 24 24" fill="{{ $themeColor }}"><path d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1C10.33 21 3 13.67 3 4c0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.24 1.02l-2.21 2.2z"/></svg>
                    {{ @user()->phone ?? '' }}
                </div>
            </div>
        </div>

    </div>{{-- /.design21-card --}}

    {{-- <button type="button" class="d21-download-btn" onclick="downloadDesign21()">Download Poster</button> --}}

</div>{{-- /.design21-wrapper --}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<script>
    function downloadDesign21() {
        var card   = document.getElementById('posterCard21');
        var button = document.querySelector('.d21-download-btn');
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
                scale:           scale,
                backgroundColor: '#fdf5ea',
                logging:         false,
                useCORS:         true,
                allowTaint:      true,
                imageTimeout:    15000
            });
        }).then(function(canvas) {
            var link      = document.createElement('a');
            link.download = 'menu-poster-design21.png';
            link.href     = canvas.toDataURL('image/png', 1.0);
            link.click();
            button.innerHTML = 'Download Poster';
            button.disabled  = false;
        }).catch(function(error) {
            console.error('Error generating image:', error);
            alert('Failed to generate image. Please try again.');
            button.innerHTML = 'Download Poster';
            button.disabled  = false;
        });
    }
</script>
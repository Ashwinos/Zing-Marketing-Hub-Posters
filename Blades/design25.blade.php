 <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,600;0,700;0,800;1,600;1,700&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;1,9..40,400&display=swap" rel="stylesheet">

<style>
    /* ═══════════════════════════════════════════
       DESIGN 25 — CITY'S HIDDEN GEM
       Premium travel-stamp · clean editorial
       ═══════════════════════════════════════════ */

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
        background: #f8f5f0;
        overflow: hidden;
        position: relative;
        box-sizing: border-box;
        container-type: inline-size;
        display: flex;
        flex-direction: column;
        box-shadow: 0 28px 56px rgba(0, 0, 0, 0.14), 0 8px 20px rgba(0, 0, 0, 0.06);
        border: 2px solid {{ $themeColor }};
    }

    /* subtle map-grid texture */
    .design25-wrapper .d25-bg-pattern {
        position: absolute;
        inset: 0;
        z-index: 0;
        pointer-events: none;
        opacity: 0.35;
        background-image:
            linear-gradient(rgba(0, 0, 0, 0.04) 1px, transparent 1px),
            linear-gradient(90deg, rgba(0, 0, 0, 0.04) 1px, transparent 1px);
        background-size: 18px 18px;
    }

    .design25-wrapper .d25-inner {
        position: relative;
        z-index: 2;
        flex: 1;
        min-height: 0;
        display: flex;
        flex-direction: column;
        margin: 2cqw;
        background: #fff;
        border: 1px solid rgba(0, 0, 0, 0.08);
        overflow: hidden;
    }

    /* ── BRAND BAR ── */
    .design25-wrapper .d25-brand-bar {
        flex-shrink: 0;
        padding: 3.2cqw 4.5cqw;
        display: flex;
        align-items: center;
        gap: 2.8cqw;
        background: #fff;
        border-bottom: 2px solid {{ $themeColor }};
        position: relative;
    }

    .design25-wrapper .d25-brand-bar::after {
        content: '';
        position: absolute;
        bottom: -1px;
        left: 4.5cqw;
        right: 4.5cqw;
        height: 1px;
        background: repeating-linear-gradient(
            90deg,
            {{ $themeColor }} 0,
            {{ $themeColor }} 8px,
            transparent 8px,
            transparent 14px
        );
        opacity: 0.45;
    }

    .design25-wrapper .d25-logo-img {
        height: 10cqw;
        width: auto;
        display: block;
        flex-shrink: 0;
        border-radius: 4px;
    }

    .design25-wrapper .d25-logo-fallback {
        width: 10cqw;
        height: 10cqw;
        border-radius: 6px;
        background: {{ $themeColor }};
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: 'Playfair Display', serif;
        font-size: 5cqw;
        font-weight: 700;
        color: #fff;
        flex-shrink: 0;
    }

    .design25-wrapper .d25-brand-text {
        min-width: 0;
        flex: 1;
    }

    .design25-wrapper .d25-brand-name {
        font-family: 'Playfair Display', serif;
        font-size: 4.8cqw;
        font-weight: 700;
        color: #1a1714;
        line-height: 1.1;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .design25-wrapper .d25-brand-addr {
        font-size: 2cqw;
        font-weight: 400;
        color: #7a7268;
        margin-top: 0.6cqw;
        letter-spacing: 0.03em;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    /* ── FOOD IMAGE (clean, no blend) ── */
    .design25-wrapper .d25-image-wrap {
        flex-shrink: 0;
        padding: 3.5cqw 4.5cqw 0;
        background: #fff;
    }

    .design25-wrapper .d25-image-frame {
        position: relative;
        width: 100%;
        aspect-ratio: 5 / 4;
        overflow: hidden;
        border: 2px solid {{ $themeColor }};
        box-shadow: 0 8px 28px rgba(0, 0, 0, 0.1);
    }

    .design25-wrapper .d25-image-frame img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        display: block;
    }

    .design25-wrapper .d25-image-placeholder {
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, #e8e2d8 0%, #d4cdc2 100%);
    }

    .design25-wrapper .d25-image-corner {
        position: absolute;
        width: 4.5cqw;
        height: 4.5cqw;
        z-index: 2;
        pointer-events: none;
        border-color: #fff;
        border-style: solid;
        opacity: 0.9;
    }

    .design25-wrapper .d25-image-corner--tl { top: 1.5cqw; left: 1.5cqw; border-width: 2px 0 0 2px; }
    .design25-wrapper .d25-image-corner--tr { top: 1.5cqw; right: 1.5cqw; border-width: 2px 2px 0 0; }
    .design25-wrapper .d25-image-corner--bl { bottom: 1.5cqw; left: 1.5cqw; border-width: 0 0 2px 2px; }
    .design25-wrapper .d25-image-corner--br { bottom: 1.5cqw; right: 1.5cqw; border-width: 0 2px 2px 0; }

    /* ── LOCATION STAMP BADGE ── */
    .design25-wrapper .d25-stamp-wrap {
        flex-shrink: 0;
        padding: 2.5cqw 4.5cqw 0;
        background: #fff;
        display: flex;
        justify-content: center;
    }

    .design25-wrapper .d25-stamp {
        position: relative;
        width: 100%;
        max-width: 88%;
        background: #fff;
        border: 2px solid {{ $themeColor }};
        padding: 2.2cqw 3.5cqw 2.5cqw;
        text-align: center;
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
    }

    .design25-wrapper .d25-stamp::before {
        content: '';
        position: absolute;
        inset: 3px;
        border: 1px dashed {{ $themeColor }}66;
        pointer-events: none;
    }

    .design25-wrapper .d25-stamp-pin {
        position: absolute;
        top: -3.2cqw;
        left: 50%;
        transform: translateX(-50%);
        width: 6.5cqw;
        height: 6.5cqw;
        background: {{ $themeColor }};
        border-radius: 50% 50% 50% 0;
        transform: translateX(-50%) rotate(-45deg);
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    }

    .design25-wrapper .d25-stamp-pin svg {
        width: 3.2cqw;
        height: 3.2cqw;
        fill: #fff;
        transform: rotate(45deg);
    }

    .design25-wrapper .d25-stamp-label {
        font-size: 1.7cqw;
        font-weight: 600;
        letter-spacing: 0.32em;
        text-transform: uppercase;
        color: {{ $themeColor }};
        margin-bottom: 0.8cqw;
    }

    .design25-wrapper .d25-stamp-headline {
        font-family: 'Playfair Display', serif;
        font-size: 5.8cqw;
        font-weight: 800;
        color: #1a1714;
        line-height: 1.05;
        letter-spacing: -0.02em;
    }

    .design25-wrapper .d25-stamp-headline em {
        font-style: italic;
        color: {{ $themeColor }};
        font-weight: 700;
    }

    .design25-wrapper .d25-stamp-sub {
        font-size: 1.8cqw;
        font-weight: 500;
        letter-spacing: 0.22em;
        text-transform: uppercase;
        color: #8a8278;
        margin-top: 1cqw;
    }

    /* perforated stamp edge */
    .design25-wrapper .d25-stamp-edge {
        display: flex;
        justify-content: center;
        gap: 1.2cqw;
        margin-top: 1.5cqw;
    }

    .design25-wrapper .d25-stamp-edge span {
        width: 1.2cqw;
        height: 1.2cqw;
        border-radius: 50%;
        background: {{ $themeColor }};
        opacity: 0.35;
    }

    /* ── MENU CONTENT ── */
    .design25-wrapper .d25-content {
        flex: 1;
        min-height: 0;
        padding: 2.8cqw 4.5cqw 2.5cqw;
        display: flex;
        flex-direction: column;
        gap: 1.8cqw;
        background: #fff;
    }

    .design25-wrapper .d25-eyebrow {
        display: flex;
        align-items: center;
        gap: 2cqw;
    }

    .design25-wrapper .d25-eyebrow-line {
        flex: 1;
        height: 1px;
        background: rgba(0, 0, 0, 0.1);
    }

    .design25-wrapper .d25-eyebrow-text {
        font-size: 1.8cqw;
        font-weight: 600;
        letter-spacing: 0.24em;
        text-transform: uppercase;
        color: {{ $themeColor }};
        white-space: nowrap;
    }

    .design25-wrapper .d25-dish-name {
        font-family: 'Playfair Display', serif;
        font-size: 9.5cqw;
        font-weight: 700;
        color: #1a1714;
        line-height: 0.98;
        letter-spacing: -0.02em;
        margin: 0;
        word-break: break-word;
    }

    .design25-wrapper .d25-dish-name--long {
        font-size: 7cqw;
        line-height: 1.05;
    }

    .design25-wrapper .d25-dish-desc {
        font-size: 2.6cqw;
        font-weight: 400;
        color: #5c554c;
        line-height: 1.65;
        margin: 0;
    }

    /* ── FOOTER ── */
    .design25-wrapper .d25-footer {
        flex-shrink: 0;
        padding: 2.5cqw 4.5cqw 3.5cqw;
        background: #faf8f5;
        border-top: 1px solid rgba(0, 0, 0, 0.08);
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 2cqw;
        flex-wrap: wrap;
    }

    .design25-wrapper .d25-footer-tag {
        font-size: 1.7cqw;
        font-weight: 600;
        letter-spacing: 0.2em;
        text-transform: uppercase;
        color: {{ $themeColor }};
        flex-shrink: 0;
    }

    .design25-wrapper .d25-contacts {
        display: flex;
        flex-wrap: wrap;
        gap: 1.5cqw;
        justify-content: flex-end;
        flex: 1;
        min-width: 0;
    }

    .design25-wrapper .d25-contact {
        display: inline-flex;
        align-items: center;
        gap: 1.2cqw;
        font-size: 2cqw;
        font-weight: 500;
        color: #3d3830;
        white-space: nowrap;
        max-width: 100%;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .design25-wrapper .d25-contact svg {
        width: 2.6cqw;
        height: 2.6cqw;
        fill: {{ $themeColor }};
        flex-shrink: 0;
    }

    /* corner marks on outer card */
    .design25-wrapper .d25-outer-corner {
        position: absolute;
        width: 5cqw;
        height: 5cqw;
        z-index: 3;
        pointer-events: none;
    }

    .design25-wrapper .d25-outer-corner--tl { top: 0.8cqw; left: 0.8cqw; border-top: 2px solid {{ $themeColor }}; border-left: 2px solid {{ $themeColor }}; }
    .design25-wrapper .d25-outer-corner--tr { top: 0.8cqw; right: 0.8cqw; border-top: 2px solid {{ $themeColor }}; border-right: 2px solid {{ $themeColor }}; }
    .design25-wrapper .d25-outer-corner--bl { bottom: 0.8cqw; left: 0.8cqw; border-bottom: 2px solid {{ $themeColor }}; border-left: 2px solid {{ $themeColor }}; }
    .design25-wrapper .d25-outer-corner--br { bottom: 0.8cqw; right: 0.8cqw; border-bottom: 2px solid {{ $themeColor }}; border-right: 2px solid {{ $themeColor }}; }

    .design25-wrapper .d25-download-btn {
        margin-top: 16px;
        background: #1a1714;
        color: #fff;
        border: none;
        padding: 11px 26px;
        font-size: 13px;
        font-weight: 500;
        cursor: pointer;
        font-family: 'DM Sans', sans-serif;
        display: flex;
        align-items: center;
        gap: 8px;
        letter-spacing: 0.04em;
        transition: all 0.2s ease;
    }

    .design25-wrapper .d25-download-btn:hover {
        background: {{ $themeColor }};
        transform: translateY(-1px);
    }

    .design25-wrapper .d25-download-btn:disabled {
        opacity: 0.5;
        cursor: not-allowed;
        transform: none;
    }
</style>

@php
    $d25City = @user()->city ?? null;
    if (!$d25City && !empty(@user()->address)) {
        $d25AddrParts = array_map('trim', explode(',', @user()->address));
        $d25City = $d25AddrParts[count($d25AddrParts) - 2] ?? ($d25AddrParts[0] ?? 'Your City');
    }
    $d25City = $d25City ?: 'Your City';
@endphp

<div class="design25-wrapper">
    <div class="design25-card" id="posterCard25">

        <div class="d25-bg-pattern"></div>
        <div class="d25-outer-corner d25-outer-corner--tl"></div>
        <div class="d25-outer-corner d25-outer-corner--tr"></div>
        <div class="d25-outer-corner d25-outer-corner--bl"></div>
        <div class="d25-outer-corner d25-outer-corner--br"></div>

        <div class="d25-inner">

            {{-- Brand bar (above image, separate from menu) --}}
            <div class="d25-brand-bar">
                @if (isset($logourl) && $logourl)
                    <img src="{{ $logourl }}" alt="logo" class="d25-logo-img" crossorigin="anonymous">
                @else
                    <div class="d25-logo-fallback">{{ strtoupper(substr(@user()->name ?? 'R', 0, 1)) }}</div>
                @endif
                <div class="d25-brand-text">
                    <div class="d25-brand-name">{{ @user()->name ?? 'Restaurant Name' }}</div>
                    <div class="d25-brand-addr">{{ @user()->address ?? '123 Culinary Lane, Food City' }}</div>
                </div>
            </div>

            {{-- Clean food image --}}
            <div class="d25-image-wrap">
                <div class="d25-image-frame">
                    @if (isset($menuImageUrl) && $menuImageUrl)
                        <img src="{{ $menuImageUrl }}" alt="{{ @$menu['name'] ?? 'Menu Item' }}" class="js-poster-menu-image" crossorigin="anonymous">
                    @else
                        <div class="d25-image-placeholder"></div>
                    @endif
                    <span class="d25-image-corner d25-image-corner--tl"></span>
                    <span class="d25-image-corner d25-image-corner--tr"></span>
                    <span class="d25-image-corner d25-image-corner--bl"></span>
                    <span class="d25-image-corner d25-image-corner--br"></span>
                </div>
            </div>

            {{-- Location stamp badge (below image, not overlapping) --}}
            <div class="d25-stamp-wrap">
                <div class="d25-stamp">
                    <div class="d25-stamp-pin">
                        <svg viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                    </div>
                    <div class="d25-stamp-label">Hidden Gem</div>
                    <div class="d25-stamp-headline"><em>{{ $d25City }}</em>'s Best</div>
                    <div class="d25-stamp-sub">Discover · Local · Legendary</div>
                    <div class="d25-stamp-edge">
                        <span></span><span></span><span></span><span></span><span></span>
                    </div>
                </div>
            </div>

            {{-- Menu content --}}
            <div class="d25-content">
                <div class="d25-eyebrow">
                    <span class="d25-eyebrow-line"></span>
                    <span class="d25-eyebrow-text">Now Serving</span>
                    <span class="d25-eyebrow-line"></span>
                </div>

                <h2 class="d25-dish-name{{ !empty($menu['name']) && strlen($menu['name']) > 16 ? ' d25-dish-name--long' : '' }}">
                    @if (!empty($menu['name']))
                        {{ $menu['name'] }}
                    @else
                        Chef's Special
                    @endif
                </h2>

                <p class="d25-dish-desc">
                    @if (!empty($menu['description']))
                        {{ Str::limit($menu['description'], 100, '...') }}
                    @else
                        A local favorite crafted with fresh ingredients and bold flavors — the dish everyone keeps coming back for.
                    @endif
                </p>
            </div>

            {{-- Footer --}}
            <div class="d25-footer">
                <span class="d25-footer-tag">Visit Us</span>
                <div class="d25-contacts">
                    @if (@user()->phone)
                        <span class="d25-contact">
                            <svg viewBox="0 0 24 24"><path d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1C10.33 21 3 13.67 3 4c0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.24 1.02l-2.21 2.2z"/></svg>
                            {{ @user()->phone }}
                        </span>
                    @endif
                    @if (@user()->website_domain)
                        <span class="d25-contact">
                            <svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/></svg>
                            {{ @user()->website_domain }}
                        </span>
                    @endif
                </div>
            </div>

        </div>{{-- /.d25-inner --}}

    </div>{{-- /.design25-card --}}

    {{-- <button type="button" class="d25-download-btn" onclick="downloadDesign25()">
        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
        Download Poster
    </button> --}}
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<script>
    function downloadDesign25() {
        var card = document.getElementById('posterCard25');
        var button = document.querySelector('.d25-download-btn');
        if (!card || !button) return;
        var orig = button.innerHTML;
        button.innerHTML = 'Generating...';
        button.disabled = true;
        var scale = 1080 / card.offsetWidth;
        var imgs = card.querySelectorAll('img');
        Promise.all(Array.from(imgs).map(function(img) {
            return new Promise(function(res) {
                if (img.complete && img.naturalWidth > 0) res();
                else { img.onload = res; img.onerror = res; }
            });
        })).then(function() {
            return html2canvas(card, {
                scale: scale,
                backgroundColor: '#f8f5f0',
                logging: false,
                useCORS: true,
                allowTaint: true,
                imageTimeout: 15000
            });
        }).then(function(canvas) {
            var a = document.createElement('a');
            a.download = 'menu-poster-design25.png';
            a.href = canvas.toDataURL('image/png', 1.0);
            a.click();
            button.innerHTML = orig;
            button.disabled = false;
        }).catch(function(e) {
            console.error(e);
            alert('Failed to generate. Please try again.');
            button.innerHTML = orig;
            button.disabled = false;
        });
    }
</script>

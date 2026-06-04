<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,700;0,800;1,700&family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
    /* ═══════════════════════════════════════
       DESIGN 26 — TEXTURED EDITORIAL POSTER
       ═══════════════════════════════════════ */
    .d26-wrap {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        font-family: 'Outfit', sans-serif;
    }

    .d26-card {
        width: 100%;
        max-width: 380px;
        background: #f5f0e8;
        overflow: hidden;
        position: relative;
        box-sizing: border-box;
        box-shadow: 0 40px 80px rgba(0,0,0,0.18), 0 8px 24px rgba(0,0,0,0.08);
        container-type: inline-size;
        display: flex;
        flex-direction: column;
        border: 1px solid rgba(0,0,0,0.08);
    }

    /* ── GLOBAL PAPER TEXTURE (entire card) ── */
    .d26-card::before {
        content: '';
        position: absolute;
        inset: 0;
        pointer-events: none;
        z-index: 1;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='300'%3E%3Cfilter id='f'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.65' numOctaves='3' stitchTiles='stitch'/%3E%3CfeColorMatrix type='saturate' values='0'/%3E%3C/filter%3E%3Crect width='300' height='300' filter='url(%23f)' opacity='0.07'/%3E%3C/svg%3E");
        background-size: 300px 300px;
        mix-blend-mode: multiply;
    }

    /* ══════════════════════════════
       HEADER — brand bar
    ══════════════════════════════ */
    .d26-header {
        position: relative;
        z-index: 10;
        background: #1a1208;
        padding: 4.5cqw 5cqw 4cqw;
        display: flex;
        align-items: center;
        justify-content: space-between;
        overflow: hidden;
    }

    /* diagonal stripe texture on header */
    .d26-header::before {
        content: '';
        position: absolute;
        inset: 0;
        background-image: repeating-linear-gradient(
            -45deg,
            rgba(255,255,255,0.03) 0px,
            rgba(255,255,255,0.03) 1px,
            transparent 1px,
            transparent 8px
        );
        pointer-events: none;
    }

    /* warm glow circle accent */
    .d26-header::after {
        content: '';
        position: absolute;
        right: -6cqw;
        top: -6cqw;
        width: 28cqw;
        height: 28cqw;
        border-radius: 50%;
        background: {{ $themeColor }};
        opacity: 0.12;
        pointer-events: none;
    }

    .d26-hd-left {
        position: relative;
        z-index: 1;
        display: flex;
        align-items: center;
        gap: 3cqw;
    }

    .d26-logo-img {
        height: 8cqw;
        width: auto;
        border-radius: 6px;
        display: block;
    }

    .d26-logo-monogram {
        width: 10cqw;
        height: 10cqw;
        border-radius: 8px;
        background: {{ $themeColor }};
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: 'Playfair Display', serif;
        font-size: 5cqw;
        font-weight: 700;
        color: #fff;
        flex-shrink: 0;
        letter-spacing: -0.02em;
    }

    .d26-hd-brand {
        display: flex;
        flex-direction: column;
        gap: 0.5cqw;
    }

    .d26-hd-name {
        font-family: 'Playfair Display', serif;
        font-size: 5cqw;
        font-weight: 700;
        color: #fff;
        line-height: 1.1;
        letter-spacing: 0.01em;
    }

    .d26-hd-addr {
        font-size: 2cqw;
        color: rgba(255,255,255,0.5);
        font-weight: 400;
        max-width: 48cqw;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .d26-hd-right {
        position: relative;
        z-index: 1;
        display: flex;
        /*flex-direction: column;*/
        /*align-items: flex-end;*/
        gap: 1.5cqw;
    }
    
    
    .design23-wrapper .d26-hd-right:first-child {
    justify-content: flex-start;
    flex: 1;
    }
    
    .design23-wrapper .d26-hd-right:last-child {
        justify-content: flex-end;
        flex: 1;
        text-align: right;
    }

    .d26-contact-pill {
        display: flex;
        align-items: center;
        gap: 1.5cqw;
        background: rgba(255,255,255,0.08);
        border: 1px solid rgba(255,255,255,0.12);
        border-radius: 20px;
        padding: 1cqw 2.5cqw;
        font-size: 2cqw;
        color: rgba(255,255,255,0.75);
        font-weight: 500;
    }

    .d26-contact-pill svg {
        width: 2.5cqw;
        height: 2.5cqw;
        fill: {{ $themeColor }};
        flex-shrink: 0;
    }



    .d26-band::before {
        content: '';
        position: absolute;
        inset: 0;
        background-image: repeating-linear-gradient(
            90deg,
            rgba(255,255,255,0.06) 0px,
            rgba(255,255,255,0.06) 1px,
            transparent 1px,
            transparent 18px
        );
    }

    .d26-band-line {
        flex: 1;
        height: 1px;
        background: rgba(255,255,255,0.3);
    }

    .d26-band-label {
        font-size: 2.2cqw;
        font-weight: 700;
        letter-spacing: 0.25em;
        text-transform: uppercase;
        color: rgba(255,255,255,0.9);
        white-space: nowrap;
        position: relative;
        z-index: 1;
    }

    .d26-band-diamond {
        width: 2cqw;
        height: 2cqw;
        background: rgba(255,255,255,0.6);
        transform: rotate(45deg);
        flex-shrink: 0;
    }

    /* ══════════════════════════════
       IMAGE — rectangular, full-width
    ══════════════════════════════ */
    .d26-img-section {
        position: relative;
        z-index: 8;
        width: 100%;
        padding: 4cqw 5cqw;
        box-sizing: border-box;
        background: #f5f0e8;
    }

    .d26-img-frame {
        position: relative;
        width: 100%;
        aspect-ratio: 6/3;
        overflow: hidden;
        /*box-shadow: 0 8px 32px rgba(0,0,0,0.2), 0 2px 8px rgba(0,0,0,0.1);*/
    }

    /* corner bracket decorations */
    .d26-img-frame::before,
    .d26-img-frame::after {
        content: '';
        position: absolute;
        width: 5cqw;
        height: 5cqw;
        z-index: 3;
        pointer-events: none;
    }

    .d26-img-frame::before {
        top: 2cqw;
        left: 2cqw;
        border-top: 2px solid rgba(255,255,255,0.7);
        border-left: 2px solid rgba(255,255,255,0.7);
    }

    .d26-img-frame::after {
        bottom: 2cqw;
        right: 2cqw;
        border-bottom: 2px solid rgba(255,255,255,0.7);
        border-right: 2px solid rgba(255,255,255,0.7);
    }

    .d26-img-frame img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        display: block;
        /*border: 15px solid black;*/
    }

    .d26-img-placeholder {
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, #d4cac0 0%, #bfb5a8 50%, #ccc4b8 100%);
    }

    /* Floating price or badge on image corner */
    .d26-img-badge {
        position: absolute;
        top: 3cqw;
        right: 3cqw;
        z-index: 4;
        background: {{ $themeColor }};
        color: #fff;
        font-size: 2.2cqw;
        font-weight: 700;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        padding: 1.5cqw 3cqw;
        border: 2px solid rgba(255,255,255,0.6);
    }

    /* ══════════════════════════════
       CONTENT BODY
    ══════════════════════════════ */
    .d26-body {
        position: relative;
        z-index: 8;
        padding: 0cqw 5cqw 5cqw;
        display: flex;
        flex-direction: column;
        background: #f5f0e8;
    }

    /* Crosshatch texture on body */
    .d26-body::before {
        content: '';
        position: absolute;
        inset: 0;
        background-image:
            repeating-linear-gradient(0deg, rgba(0,0,0,0.015) 0px, rgba(0,0,0,0.015) 1px, transparent 1px, transparent 24px),
            repeating-linear-gradient(90deg, rgba(0,0,0,0.015) 0px, rgba(0,0,0,0.015) 1px, transparent 1px, transparent 24px);
        pointer-events: none;
    }

    .d26-meta-row {
        position: relative;
        display: flex;
        align-items: center;
        gap: 2cqw;
        margin-bottom: 3cqw;
    }

    .d26-meta-tag {
        background: {{ $themeColor }};
        color: #fff;
        font-size: 2cqw;
        font-weight: 700;
        letter-spacing: 0.18em;
        text-transform: uppercase;
        padding: 1cqw 3cqw;
    }

    .d26-meta-line {
        flex: 1;
        height: 1px;
        background: rgba(0,0,0,0.12);
    }

    .d26-meta-dots {
        display: flex;
        gap: 1cqw;
    }

    .d26-meta-dot {
        width: 1.5cqw;
        height: 1.5cqw;
        border-radius: 50%;
        background: {{ $themeColor }};
        opacity: 0.4;
    }

    .d26-menu-name {
        font-family: 'Playfair Display', serif;
        font-size: 11cqw;
        font-weight: 800;
        color: #1a1208;
        line-height: 1.0;
        letter-spacing: -0.02em;
        margin: 0 0 3cqw;
        position: relative;
    }

    /* decorative quote mark behind title */
    .d26-menu-name::before {
        content: '"';
        position: absolute;
        top: -3cqw;
        left: -1.5cqw;
        font-size: 20cqw;
        color: {{ $themeColor }};
        opacity: 0.07;
        font-family: 'Playfair Display', serif;
        line-height: 1;
        pointer-events: none;
    }

    .d26-desc-row {
        display: flex;
        gap: 4cqw;
        align-items: flex-start;
        position: relative;
    }

    .d26-desc-accent {
        width: 3px;
        align-self: stretch;
        background: {{ $themeColor }};
        flex-shrink: 0;
        min-height: 8cqw;
        opacity: 0.7;
    }

    .d26-desc {
        font-size: 2.8cqw;
        color: #5a4e3c;
        line-height: 1.65;
        font-weight: 300;
        flex: 1;
    }

    /* ══════════════════════════════
       FOOTER STRIP
    ══════════════════════════════ */
   .d26-footer {
    position: relative;
    z-index: 9;
    background: #1a1208;
    padding: 2cqw 3cqw;
    display: flex;
    align-items: center;
}

.d26-hd-right {
    display: flex;
    align-items: center;
    width: 100%;
    gap: 1.5cqw;
}

.d26-hd-right .d26-contact-pill:last-child {
    margin-left: auto;
}
    .d26-footer::before {
        content: '';
        position: absolute;
        inset: 0;
        background-image: repeating-linear-gradient(
            90deg,
            rgba(255,255,255,0.025) 0px,
            rgba(255,255,255,0.025) 1px,
            transparent 1px,
            transparent 14px
        );
        pointer-events: none;
    }

    .d26-footer-tagline {
        font-size: 2.2cqw;
        font-weight: 300;
        letter-spacing: 0.2em;
        text-transform: uppercase;
        color: rgba(255,255,255,0.45);
        position: relative;
        z-index: 1;
    }

    .d26-footer-ornament {
        display: flex;
        align-items: center;
        gap: 1.5cqw;
        position: relative;
        z-index: 1;
    }

    .d26-orn-dash {
        width: 5cqw;
        height: 1px;
        background: {{ $themeColor }};
        opacity: 0.5;
    }

    .d26-orn-diamond {
        width: 2.5cqw;
        height: 2.5cqw;
        background: {{ $themeColor }};
        transform: rotate(45deg);
        opacity: 0.8;
    }

    /* ── DOWNLOAD BUTTON ── */
    .d26-download-btn {
        margin-top: 16px;
        background: #1a1208;
        color: #fff;
        border: none;
        padding: 11px 26px;
        font-size: 13px;
        font-weight: 500;
        cursor: pointer;
        font-family: 'Outfit', sans-serif;
        display: flex;
        align-items: center;
        gap: 8px;
        letter-spacing: 0.04em;
        transition: all 0.2s ease;
        border: 1px solid rgba(255,255,255,0.08);
    }

    .d26-download-btn:hover {
        background: {{ $themeColor }};
        transform: translateY(-1px);
    }

    .d26-download-btn:disabled {
        opacity: 0.5;
        cursor: not-allowed;
        transform: none;
    }
</style>

<div class="d26-wrap">
    <div class="d26-card" id="posterCard26">

        {{-- ══ HEADER: Logo + Brand + Contacts ══ --}}
        <div class="d26-header">
            <div class="d26-hd-left">
                @if (isset($logourl) && $logourl)
                    <img src="{{ $logourl }}" alt="logo" class="d26-logo-img" crossorigin="anonymous">
                
                @endif
                <div class="d26-hd-brand">
                    <div class="d26-hd-name">{{ @user()->name ?? 'Restaurant Name' }}</div>
                    <div class="d26-hd-addr">{{ @user()->address ?? '123 Culinary Lane, Food City' }}</div>
                </div>
            </div>
            
        </div>

      

        {{-- ══ RECTANGULAR FOOD IMAGE ══ --}}
        <div class="d26-img-section">
            <div class="d26-img-frame">
                @if (isset($menuImageUrl) && $menuImageUrl)
                    <img src="{{ $menuImageUrl }}" alt="{{ @$menu['name'] ?? 'Menu Item' }}" class="js-poster-menu-image" crossorigin="anonymous">
                @else
                    <div class="d26-img-placeholder"></div>
                @endif
                <div class="d26-img-badge">Chef's Pick</div>
            </div>
        </div>

        {{-- ══ CONTENT BODY ══ --}}
        <div class="d26-body">


            <h2 class="d26-menu-name">
                @if (!empty($menu['name']))
                    {{ $menu['name'] }}
                @else
                    Exquisite Taste
                @endif
            </h2>

            <div class="d26-desc-row">
                <div class="d26-desc-accent"></div>
                <p class="d26-desc">
                    @if (!empty($menu['description']))
                        {{ Str::limit($menu['description'], 100, '...') }}
                    @else
                        Discover a bold blend of rich flavors and fresh ingredients, crafted to absolute perfection by our head chef.
                    @endif
                </p>
            </div>
        </div>

        {{-- ══ FOOTER STRIP ══ --}}
        <div class="d26-footer">
           <div class="d26-hd-right">
                @if (@user()->phone)
                <div class="d26-contact-pill">
                    <svg viewBox="0 0 24 24"><path d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1C10.33 21 3 13.67 3 4c0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.24 1.02l-2.21 2.2z"/></svg>
                    {{ @user()->phone }}
                </div>
                @endif
                @if (@user()->website_domain)
                <div class="d26-contact-pill">
                    <svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/></svg>
                    {{ @user()->website_domain }}
                </div>
                @endif
            </div>
        </div>

    </div>{{-- /.d26-card --}}

    {{-- <button type="button" class="d26-download-btn" onclick="downloadDesign26()">
        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
        Download Poster
    </button> --}}

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<script>
    function downloadDesign26() {
        var card = document.getElementById('posterCard26');
        var button = document.querySelector('.d26-download-btn');
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
                scale: scale, backgroundColor: '#f5f0e8',
                logging: false, useCORS: true, allowTaint: true, imageTimeout: 15000
            });
        }).then(function(canvas) {
            var a = document.createElement('a');
            a.download = 'menu-poster-design26.png';
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
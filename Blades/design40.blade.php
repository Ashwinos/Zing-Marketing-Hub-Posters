<!-- ============================================================
     DESIGN 40 — Full-Bleed Photo, Left-Anchored Promo Copy
     Chevron corner decorations (inline SVG) top-left & bottom-right
     Font pairing: Archivo Black (heading) + Yellowtail (script line)
     + Poppins (body / button / website)
     ============================================================ -->
<style>
    .design40-wrapper {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        font-family: 'Poppins', sans-serif;
    }

    .design40-wrapper .design40-card {
        width: 100%;
        max-width: 340px;
        aspect-ratio: 4 / 5;
        position: relative;
        overflow: hidden;
        background-color: {{ $themeColor ?? '#2b2420' }}; /* fallback while image loads */
        box-shadow: 0 20px 60px rgba(0,0,0,0.22);
        container-type: inline-size;
        box-sizing: border-box;
    }

    /* ---------- FULL-BLEED BACKGROUND IMAGE ---------- */
    /* background-image div, not <img> — html2canvas ignores
       object-fit: cover on <img> tags; this is the platform's
       established fix for reliable full-bleed photo rendering. */
    .d40-bg {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        z-index: 1;
    }

    /* Real <img> kept only for preloading/decoding, never shown. */
    .d40-bg-preload {
        position: absolute;
        width: 1px; height: 1px;
        opacity: 0;
        pointer-events: none;
    }

    /* Dark scrim over the left ~2/3 so copy reads over any photo,
       photo stays fully open on the right side */
    .d40-scrim-left {
        position: absolute;
        inset: 0;
        background: linear-gradient(100deg, rgba(10,8,6,0.82) 0%, rgba(10,8,6,0.62) 42%, rgba(10,8,6,0.1) 68%, rgba(10,8,6,0) 82%);
        z-index: 2;
    }

    .d40-content {
        position: absolute;
        top: 0; left: 0;
        width: 100%;
        height: 100%;
        box-sizing: border-box;
        padding: 7cqw 8cqw;
        z-index: 3;
        display: flex;
        flex-direction: column;
    }

    /* ---------- CHEVRON DECORATIONS ---------- */
    .d40-chevrons { display: flex; gap: 1.6cqw; }
    .d40-chevrons-top { margin-bottom: 4cqw; }
    .d40-chevrons-bottom {
        position: absolute;
        bottom: 5cqw;
        right: 6cqw;
        transform: rotate(180deg);
        z-index: 3;
    }
    .d40-chevron-icon {
        width: 13cqw;
        height: auto;
        display: block;
    }
    .d40-chevron-icon svg { width: 100%; height: 100%; display: block; }

    /* ---------- TEXT BLOCK ---------- */
    .d40-heading {
        font-family: 'Archivo Black', sans-serif;
        font-weight: 400;
        font-size: 9.4cqw;
        line-height: 1.05;
        color: #ffffff;
        text-align: left;
        margin: 0;
        max-width: 60%;
        text-shadow: 0 2px 10px rgba(0,0,0,0.4);
    }

    .d40-script {
        font-family: 'Yellowtail', cursive;
        font-weight: 400;
        font-size: 7.6cqw;
        line-height: 1;
        color: #ffffff;
        text-align: left;
        margin: 1.4cqw 0 0;
        text-shadow: 0 2px 10px rgba(0,0,0,0.4);
    }

    .d40-desc {
        font-family: 'Poppins', sans-serif;
        font-weight: 400;
        font-size: 2.9cqw;
        line-height: 1.5;
        color: rgba(255,255,255,0.92);
        text-align: left;
        max-width: 62%;
        margin: 3.4cqw 0 0;
    }

    .d40-spacer { flex: 1 1 auto; }

    /* ---------- CTA + WEBSITE ---------- */
    .d40-cta {
        align-self: flex-start;
        background: transparent;
        border: 1.5px solid #ffffff;
        color: #ffffff;
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
        font-size: 2.7cqw;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        padding: 3cqw 6cqw;
        text-decoration: none;
        display: inline-block;
        margin-bottom: 2.6cqw;
    }

    .d40-website {
        font-family: 'Poppins', sans-serif;
        font-weight: 500;
        font-size: 2.6cqw;
        color: #ffffff;
        margin: 0;
        text-align: left;
    }

    .d40-download-btn {
        margin-top: 16px;
        padding: 10px 22px;
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
        font-size: 14px;
        background: #2b2420;
        color: #ffffff;
        border: none;
        border-radius: 6px;
        cursor: pointer;
    }
    .d40-download-btn:disabled { opacity: 0.6; cursor: default; }
</style>

<div class="design40-wrapper">
    <div class="design40-card" id="posterCard40" style="background-color: {{ $themeColor ?? '#2b2420' }};">

        <div class="d40-bg js-photo-zone" style="background-image:url('{{ $menuImageUrl ?? '' }}')"></div>
        <img class="d40-bg-preload js-poster-menu-image" src="{{ $menuImageUrl ?? '' }}" alt="{{ $menu['name'] ?? 'Menu item' }}" crossorigin="anonymous">

        <div class="d40-scrim-left"></div>

        <div class="d40-content">

            <div class="d40-chevrons d40-chevrons-top">
                <span class="d40-chevron-icon">
                    <svg width="60" height="46" viewBox="0 0 60 46" xmlns="http://www.w3.org/2000/svg">
                        <polyline points="4,4 20,23 4,42" fill="none" stroke="#ffffff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                        <polyline points="22,4 38,23 22,42" fill="none" stroke="#ffffff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" opacity="0.8"/>
                        <polyline points="40,4 56,23 40,42" fill="none" stroke="#ffffff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" opacity="0.55"/>
                    </svg>
                </span>
            </div>

            @if(!empty(@user()->business_name))
                <h1 class="d40-heading">{{ @user()->business_name }}</h1>
            @endif

            @if(!empty($menu['name']))
                <p class="d40-script">{{ $menu['name'] }}</p>
            @endif

            @if(!empty($menu['description']))
                <p class="d40-desc">{{ $menu['description'] }}</p>
            @endif

            <div class="d40-spacer"></div>

            <a class="d40-cta" href="{{ !empty(@user()->website_domain) ? 'https://'.@user()->website_domain : '#' }}">Order Now</a>

            @if(!empty(@user()->website_domain))
                <p class="d40-website">{{ @user()->website_domain }}</p>
            @endif

        </div>

        <div class="d40-chevrons-bottom">
            <span class="d40-chevron-icon">
                <svg width="60" height="46" viewBox="0 0 60 46" xmlns="http://www.w3.org/2000/svg">
                    <polyline points="4,4 20,23 4,42" fill="none" stroke="#ffffff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                    <polyline points="22,4 38,23 22,42" fill="none" stroke="#ffffff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" opacity="0.8"/>
                    <polyline points="40,4 56,23 40,42" fill="none" stroke="#ffffff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" opacity="0.55"/>
                </svg>
            </span>
        </div>

    </div>

    {{-- <button type="button" class="d40-download-btn" onclick="downloadDesign40()">&#8595; Download Poster</button> --}}
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<script>
    function downloadDesign40() {
        var card   = document.getElementById('posterCard40');
        var button = document.querySelector('.d40-download-btn');
        if (!card) return;
        if (button) { button.innerHTML = 'Generating...'; button.disabled = true; }

        var exportW = 1080;
        var scale   = exportW / card.offsetWidth;

        Promise.all(Array.from(card.querySelectorAll('img')).map(function(img) {
            return new Promise(function(resolve) {
                if (img.complete && img.naturalWidth > 0) resolve();
                else { img.onload = resolve; img.onerror = resolve; }
            });
        })).then(function() {
            return html2canvas(card, {
                scale: scale,
                backgroundColor: '{{ $themeColor ?? "#2b2420" }}',
                logging: false,
                useCORS: true,
                allowTaint: true,
                imageTimeout: 15000,
                onclone: function(clonedDoc) {
                    var zones = clonedDoc.querySelectorAll('.js-photo-zone');
                    zones.forEach(function(zone) {
                        zone.style.backgroundSize = 'cover';
                        zone.style.backgroundPosition = 'center';
                        zone.style.backgroundRepeat = 'no-repeat';
                    });
                    var preloads = clonedDoc.querySelectorAll('.d40-bg-preload');
                    preloads.forEach(function(img) { img.style.display = 'none'; });
                }
            });
        }).then(function(canvas) {
            var link = document.createElement('a');
            link.download = 'menu-poster-design40.png';
            link.href = canvas.toDataURL('image/png', 1.0);
            link.click();
            if (button) { button.innerHTML = 'Download Poster'; button.disabled = false; }
        }).catch(function(error) {
            console.error('Error:', error);
            alert('Failed to generate image.');
            if (button) { button.innerHTML = 'Download Poster'; button.disabled = false; }
        });
    }
</script>
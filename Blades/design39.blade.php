<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Asimovian&display=swap" rel="stylesheet">
<style>
    .design39-wrapper {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        font-family: 'Poppins', sans-serif;
    }

    .design39-wrapper .design39-card {
        width: 100%;
        max-width: 340px;
        aspect-ratio: 4 / 5;
        position: relative;
        overflow: hidden;
        background-color: {{ $themeColor ?? '#151210' }}; /* fallback while image loads */
        box-shadow: 0 20px 60px rgba(0,0,0,0.22);
        container-type: inline-size;
        box-sizing: border-box;
    }

    /* ---------- FULL-BLEED BACKGROUND IMAGE ---------- */
    /* background-image div, not <img> — html2canvas ignores
       object-fit: cover on <img> tags; this is the platform's
       established fix for reliable full-bleed photo rendering. */
    .d39-bg {   
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
    .d39-bg-preload {
        position: absolute;
        width: 1px; height: 1px;
        opacity: 0;
        pointer-events: none;
    }

    /* Single full-height scrim covering both the top corner-info zone
       and the bottom heading/footer zone. Two separate partial-height
       divs (d39-scrim-top / d39-scrim-bottom) each leave a hard box
       edge mid-photo that html2canvas rasterizes as a visible seam
       line. One inset:0 element with the fades baked into the
       gradient stops removes both edges. */
    .d39-scrim {
        position: absolute;
        inset: 0;
        background: linear-gradient(
            180deg,
            rgba(8,6,4,0.68) 0%,
            rgba(8,6,4,0) 20%,
            rgba(8,6,4,0) 66%,
            rgba(8,6,4,0.5) 78%,
            rgba(8,6,4,0.86) 100%
        );
        z-index: 2;
    }

    .d39-content {
        position: absolute;
        top: 0; left: 0;
        width: 100%;
        height: 100%;
        box-sizing: border-box;
        z-index: 3;
        display: flex;
        flex-direction: column;
    }

    /* ---------- TOP CORNERS: website (left) / phone (right) ---------- */
    .d39-top-row {
        padding: 5.5cqw 6cqw 0;
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
        gap: 2cqw;
    }

    .d39-top-item {
        display: flex;
        flex-direction: column;
        min-width: 0;
        text-align: start;
    }

    .d39-top-item.d39-top-right { align-items: flex-end; text-align: right; }

    .d39-top-label {
        font-family: 'Manrope', sans-serif;
        font-size: 1.9cqw;
        font-weight: 600;
        letter-spacing: 0.16em;
        text-transform: uppercase;
        color: rgba(255,255,255,0.7);
        margin: 0 0 0.3cqw;
    }

    .d39-top-value {
        font-family: 'Manrope', sans-serif;
        font-size: 2.6cqw;
        font-weight: 700;
        color: #ffffff;
        margin: 0;
        white-space: nowrap;
        text-shadow: 0 2px 8px rgba(0,0,0,0.5);
    }

    .d39-spacer { flex: 1 1 auto; }

    /* ---------- FOOTER ---------- */
    .d39-footer {
        padding: 0 7cqw 6.5cqw;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .d39-heading {
        font-family: "Asimovian", sans-serif;
        font-weight: 600;
        font-style: italic;
        font-size: 11.4cqw;
        line-height: 1.08;
        color: #ffffff;
        text-align: center;
        margin: 0 0 6cqw;
        text-shadow: 0 3px 12px rgba(0, 0, 0, 0.5);
        text-transform: uppercase;
    }

    .d39-footer-row {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 2.4cqw;
    }

    .d39-footer-logo {
        display: flex;
        align-items: center;
        flex: none;
    }

    .d39-footer-logo img {
        height: 2rem;
        width: auto;
        display: block;
    }

    .d39-footer-divider {
        width: 1px;
        height: 3.4cqw;
        background: rgba(255,255,255,0.4);
        flex: none;
    }

    .d39-address {
        font-family: 'Manrope', sans-serif;
        font-size: 2.3cqw;
        font-weight: 500;
        color: rgba(255,255,255,0.9);
        text-align: center;
        margin: 0;
        max-width: 70%;
    }

    .d39-download-btn {
        margin-top: 16px;
        padding: 10px 22px;
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
        font-size: 14px;
        background: #221a0d;
        color: #f3e4c8;
        border: none;
        border-radius: 6px;
        cursor: pointer;
    }
    .d39-download-btn:disabled { opacity: 0.6; cursor: default; }
    

</style>

<div class="design39-wrapper">
    <div class="design39-card" id="posterCard39" style="background-color: {{ $themeColor ?? '#151210' }};">

        <div class="d39-bg js-photo-zone" style="background-image:url('{{ $menuImageUrl ?? '' }}')"></div>
        <img class="d39-bg-preload js-poster-menu-image" src="{{ $menuImageUrl ?? '' }}" alt="{{ $menu['name'] ?? 'Menu item' }}" crossorigin="anonymous">

        <div class="d39-scrim"></div>

        <div class="d39-content">

            <div class="d39-top-row">
                <div class="d39-top-item d39-top-left">
                    @if(!empty(@user()->website_domain))
                        <span class="d39-top-label">Website</span>
                        <span class="d39-top-value">{{ @user()->website_domain }}</span>
                    @endif
                </div>
                <div class="d39-top-item d39-top-right">
                    @if(!empty(@user()->phone))
                        <span class="d39-top-label">Call Us</span>
                        <span class="d39-top-value">{{ @user()->phone }}</span>
                    @endif
                </div>
            </div>

            <div class="d39-spacer"></div>

            <div class="d39-footer">
                <h1 class="d39-heading">Flavor First</h1>
                
                <div class="d39-footer-row">
                    @if(!empty($logourl))
                        <div class="d39-footer-logo">
                            <img src="{{ $logourl }}" alt="Logo" crossorigin="anonymous">
                        </div>
                    @endif
                    @if(!empty($logourl) && !empty(@user()->address))
                        <div class="d39-footer-divider"></div>
                    @endif
                    @if(!empty(@user()->address))
                        <p class="d39-address">{{ @user()->address }}</p>
                    @endif
                </div>
            </div>

        </div>

    </div>

    {{-- <button type="button" class="d39-download-btn" onclick="downloadDesign39()">&#8595; Download Poster</button> --}}
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<script>
    function downloadDesign39() {
        var card   = document.getElementById('posterCard39');
        var button = document.querySelector('.d39-download-btn');
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
                backgroundColor: '{{ $themeColor ?? "#151210" }}',
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
                    var preloads = clonedDoc.querySelectorAll('.d39-bg-preload');
                    preloads.forEach(function(img) { img.style.display = 'none'; });
                }
            });
        }).then(function(canvas) {
            var link = document.createElement('a');
            link.download = 'menu-poster-design39.png';
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
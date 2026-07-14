<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Caveat+Brush&display=swap" rel="stylesheet">
<style>
    .design38-wrapper {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        font-family: 'Poppins', sans-serif;
    }

    .design38-wrapper .design38-card {
        width: 100%;
        max-width: 340px;
        aspect-ratio: 4 / 5;
        position: relative;
        overflow: hidden;
        background-color: {{ $themeColor ?? '#14100c' }}; /* fallback while image loads */
        box-shadow: 0 20px 60px rgba(0,0,0,0.22);
        container-type: inline-size;
        box-sizing: border-box;
    }

    /* ---------- FULL-BLEED BACKGROUND IMAGE ---------- */
    /* background-image div, not <img> — html2canvas ignores
       object-fit: cover on <img> tags; this is the platform's
       established fix for reliable full-bleed photo rendering. */
    .d38-bg {
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
    .d38-bg-preload {
        position: absolute;
        width: 1px; height: 1px;
        opacity: 0;
        pointer-events: none;
    }

    /* Scrim behind the title so it reads over any photo */
    .d38-scrim-top {
        position: absolute;
        top: 0; left: 0; right: 0;
        height: 48%;
        background: linear-gradient(180deg, rgba(8,6,4,0.75) 0%, rgba(8,6,4,0.32) 55%, rgba(8,6,4,0) 100%);
        z-index: 2;
    }

    .d38-content {
        position: absolute;
        top: 0; left: 0;
        width: 100%;
        height: 100%;
        box-sizing: border-box;
        z-index: 3;
        display: flex;
        flex-direction: column;
    }

    /* ---------- TITLE BLOCK ---------- */
    .d38-logo-topleft {
        position: absolute;
        top: 5cqw;
        left: 5cqw;
        z-index: 4;
    }

    .d38-logo-topleft img {
        height: 2rem;
        width: auto;
        display: block;
    }

    .d38-title-block {
        padding: 17cqw 6cqw 0;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .d38-title {
        font-family: "Caveat Brush", cursive;
        font-weight: 400;
        font-style: normal;
        font-size: 11cqw;
        line-height: 1.15;
        letter-spacing: 0.01em;
        color: #ffffff;
        text-align: center;
        margin: 0;
        text-shadow: 0 3px 10px rgba(0,0,0,0.55);
    }

    .d38-subtitle {
        font-family: 'Cinzel', serif;
        font-weight: 600;
        font-size: 6.4cqw;
        letter-spacing: 0.32em;
        color: #ffffff;
        text-align: center;
        text-transform: uppercase;
        margin: 0.6cqw 0 0;
        text-shadow: 0 2px 10px rgba(0,0,0,0.5);
    }

    .d38-spacer { flex: 1 1 auto; }

    /* ---------- BOTTOM INFO BAR ---------- */
    .d38-bar {
        width: 100%;
        background: rgba(10,8,6,0.82);
        padding: 4.2cqw 4cqw;
        box-sizing: border-box;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 2cqw;
    }

    .d38-bar-side {
        display: flex;
        align-items: center;
        gap: 1.6cqw;
        flex: 1 1 0;
        min-width: 0;
    }

    .d38-bar-side.d38-bar-right { justify-content: flex-end; }

    .d38-icon-badge {
        flex: none;
        width: 5.4cqw;
        height: 5.4cqw;
        border-radius: 50%;
        border: 1px solid {{$themeColor}};
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .d38-icon-badge svg { width: 2.8cqw; height: 2.8cqw; display: block; }

    .d38-bar-text {
        display: flex;
        flex-direction: column;
        line-height: 1.25;
        min-width: 0;
    }

    .d38-bar-label {
        font-family: 'Jost', sans-serif;
        font-size: 1.9cqw;
        font-weight: 500;
        letter-spacing: 0.14em;
        color: {{$themeColor}};
        text-transform: uppercase;
        margin: 0;
    }

    .d38-bar-value {
        font-family: 'Jost', sans-serif;
        font-size: 2.3cqw;
        font-weight: 500;
        color: #ffffff;
        margin: 0;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .d38-bar-right .d38-bar-text { align-items: flex-end; text-align: right; }

    .d38-cta {
        flex: none;
        background: {{$themeColor}};
        color: #221a0d;
        font-family: 'Jost', sans-serif;
        font-weight: 600;
        font-size: 2.4cqw;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        padding: 2.4cqw 4.4cqw;
        border-radius: 999px;
        text-decoration: none;
        display: inline-block;
        white-space: nowrap;
    }

    .d38-download-btn {
        margin-top: 16px;
        padding: 10px 22px;
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
        font-size: 14px;
        background: #221a0d;
        color: {{$themeColor}};
        border: none;
        border-radius: 6px;
        cursor: pointer;
    }
    .d38-download-btn:disabled { opacity: 0.6; cursor: default; }
    .d38-desc {
               font-family: 'Manrope', sans-serif;
            font-weight: 400;
            font-size: 2.9cqw;
            line-height: 1.5;
            color: rgba(255, 255, 255, 0.92);
            text-align: center;
             max-width: 92%; 
           
        }
</style>

<div class="design38-wrapper">
    <div class="design38-card" id="posterCard38" style="background-color: {{ $themeColor ?? '#14100c' }};">

        <div class="d38-bg js-photo-zone" style="background-image:url('{{ $menuImageUrl ?? '' }}')"></div>
        <img class="d38-bg-preload js-poster-menu-image" src="{{ $menuImageUrl ?? '' }}" alt="{{ $menu['name'] ?? 'Menu item' }}" crossorigin="anonymous">

        <div class="d38-scrim-top"></div>

        @if(!empty($logourl))
            <div class="d38-logo-topleft">
                <img src="{{ $logourl }}" alt="Logo" crossorigin="anonymous">
            </div>
        @endif

        <div class="d38-content">

            <div class="d38-title-block">
                <h1 class="d38-title">{{ $menu['name']  }}</h1>
                @if(!empty(@user()->business_name))
                    <p class="d38-subtitle">{{ @user()->business_name }}</p>
                @endif
                @if(!empty($menu['description']))
                    <p class="d38-desc">{{ $menu['description'] }}</p>
                @endif
            </div>

            <div class="d38-spacer"></div>

            <div class="d38-bar">

                <div class="d38-bar-side d38-bar-left">
                    @if(!empty(@user()->website_domain))
                        <span class="d38-icon-badge">
                            <svg viewBox="0 0 24 24" width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="12" cy="12" r="9" stroke="{{$themeColor}}" stroke-width="1.6"/>
                                <line x1="3" y1="12" x2="21" y2="12" stroke="{{$themeColor}}" stroke-width="1.6"/>
                                <path d="M12 3c2.6 2.4 4 5.6 4 9s-1.4 6.6-4 9c-2.6-2.4-4-5.6-4-9s1.4-6.6 4-9z" stroke="{{$themeColor}}" stroke-width="1.6"/>
                            </svg>
                        </span>
                        <span class="d38-bar-text">
                            <span class="d38-bar-label">Our Website</span>
                            <span class="d38-bar-value">{{ @user()->website_domain }}</span>
                        </span>
                    @endif
                </div>

                <a class="d38-cta" href="{{ !empty(@user()->website_domain) ? 'https://'.@user()->website_domain : '#' }}">Order Now</a>

                <div class="d38-bar-side d38-bar-right">
                    @if(!empty(@user()->phone))
                        <span class="d38-bar-text">
                            <span class="d38-bar-label">Call Us</span>
                            <span class="d38-bar-value">{{ @user()->phone }}</span>
                        </span>
                        <span class="d38-icon-badge">
                            <svg viewBox="0 0 24 24" width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 3.5c.7 1.5 1.5 2.8 2.5 3.8-1 1-1.3 1.8-.9 2.6.9 1.9 2.9 3.9 4.8 4.8.8.4 1.6.1 2.6-.9 1 1 2.3 1.8 3.8 2.5v2.3c0 1-.9 1.7-1.9 1.5C11.9 19.2 5.8 13.1 4.8 6.4 4.6 5.4 5.3 4.5 6.3 4.5H7z" stroke="{{$themeColor}}" stroke-width="1.4" stroke-linejoin="round"/>
                            </svg>
                        </span>
                    @endif
                </div>

            </div>

        </div>

    </div>

    {{-- <button type="button" class="d38-download-btn" onclick="downloadDesign38()">&#8595; Download Poster</button> --}}
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<script>
    function downloadDesign38() {
        var card   = document.getElementById('posterCard38');
        var button = document.querySelector('.d38-download-btn');
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
                backgroundColor: '{{ $themeColor ?? "#14100c" }}',
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
                    var preloads = clonedDoc.querySelectorAll('.d38-bg-preload');
                    preloads.forEach(function(img) { img.style.display = 'none'; });
                }
            });
        }).then(function(canvas) {
            var link = document.createElement('a');
            link.download = 'menu-poster-design38.png';
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
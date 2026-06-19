<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,700;0,900;1,700;1,900&family=DM+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
    .design14-wrapper {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        font-family: 'DM Sans', sans-serif;
    }

    .design14-wrapper .design14-card {
        width: 100%;
        aspect-ratio: 4 / 5;
        max-width: 340px;
        background: #0c1608;
        overflow: hidden;
        position: relative;
        box-sizing: border-box;
        flex-shrink: 0;
        display: flex;
        flex-direction: column;
        container-type: inline-size;
    }

    /* ── TOP BAR ── */
    .design14-wrapper .d14-top-bar {
        flex-shrink: 0;
        padding: 4% 5%;
        display: flex;
        align-items: center;
        justify-content: space-between;
        z-index: 10;
        position: relative;
    }

    .design14-wrapper .d14-logo {
        display: flex;
        align-items: center;
        gap: 9px;
        background: rgba(255,255,255,0.07);
        border: 0.5px solid rgba(255,255,255,0.18);
        border-radius: 40px;
        padding: 5px 12px 5px 6px;
    }

    .design14-wrapper .d14-logo-icon {
        width: auto;
        height: 2rem;
        overflow: hidden;
        flex-shrink: 0;
    }

    .design14-wrapper .d14-logo-icon img {
        width: auto;
        height: 100%;
        display: block;
    }

    .design14-wrapper .d14-logo-text {
        display: flex;
        flex-direction: column;
        line-height: 1.15;
    }

    .design14-wrapper .d14-logo-name {
        font-size: 2.8cqw;
        font-weight: 700;
        color: #fff;
        letter-spacing: 0.2px;
    }

    /* ── IMAGE BOX ── */
    .design14-wrapper .d14-image-box {
        flex-shrink: 0;
        margin: 0 5%;
        /* border-radius: 12px; */
        overflow: hidden;
        height: 45cqw;
        width: auto;
        position: relative;
        border: 2px solid rgba(140, 198, 63, 0.25);
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.5);
    }

    .design14-wrapper .d14-image-box img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        display: block;
    }

    /* ── DECO RINGS ── */
    .design14-wrapper .d14-ring {
        position: absolute;
        border-radius: 50%;
        border: 1px solid rgba(140,198,63,0.14);
        pointer-events: none;
        z-index: 4;
    }
    .design14-wrapper .d14-ring-1 { width: 40cqw; height: 40cqw; bottom: 18%; right: -10%; }
    .design14-wrapper .d14-ring-2 { width: 24cqw; height: 24cqw; bottom: 22%; right: -4%; }

    /* ── MAIN CONTENT ── */
    .design14-wrapper .d14-content {
        flex: 1;
        padding: 4% 6%;
        z-index: 5;
        position: relative;
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: start;
    }

    .design14-wrapper .d14-promo-label {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 3%;
    }
    .design14-wrapper .d14-promo-line {
        height: 1px;
        width: 5cqw;
        background: {{ $themeColor ?? '#8cc63f' }};
        flex-shrink: 0;
    }
    .design14-wrapper .d14-promo-text {
        font-size: 2.2cqw;
        font-weight: 600;
        color: {{ $themeColor ?? '#8cc63f' }};
        letter-spacing: 2.8px;
        text-transform: uppercase;
    }

    .design14-wrapper .d14-headline {
        font-family: 'Playfair Display', serif;
        font-weight: 900;
        font-size: 11cqw;
        line-height: 0.91;
        color: #f4ede0;
        margin-bottom: 3%;
        letter-spacing: -0.5px;
    }
    .design14-wrapper .d14-headline em {
        font-style: italic;
        font-size: inherit;
        font-weight: inherit;
        font-family: inherit;
        color: {{ $themeColor ?? '#8cc63f' }};
    }

    .design14-wrapper .d14-desc {
        font-size: 2.4cqw;
        color: rgba(255,255,255,0.46);
        line-height: 1.72;
        font-weight: 400;
        max-width: 80%;
        margin: 0;
    }

    /* ── FOOTER ── */
    .design14-wrapper .d14-footer {
        flex-shrink: 0;
        background: rgba(255,255,255,0.04);
        border-top: 0.5px solid rgba(255,255,255,0.07);
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 1.5%;
        padding: 2.5% 4%;
        z-index: 9;
        position: relative;
    }

    .design14-wrapper .d14-f-address {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 6px;
        color: rgba(255,255,255,0.55);
        font-size: 2.1cqw;
        font-weight: 500;
        letter-spacing: 0.2px;
    }
    .design14-wrapper .d14-f-address svg {
        width: 2.5cqw;
        height: 2.5cqw;
        fill: {{ $themeColor ?? '#8cc63f' }};
        flex-shrink: 0;
    }

    .design14-wrapper .d14-f-contact {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 3%;
    }
    .design14-wrapper .d14-f-item {
        display: flex;
        align-items: center;
        gap: 5px;
        color: rgba(255,255,255,0.34);
        font-size: 2cqw;
        font-weight: 400;
        letter-spacing: 0.1px;
    }
    .design14-wrapper .d14-f-item svg {
        width: 2.3cqw;
        height: 2.3cqw;
        fill:{{ $themeColor ?? '#8cc63f' }};
        flex-shrink: 0;
    }
    .design14-wrapper .d14-f-sep {
        width: 1px;
        height: 3.5cqw;
        background: rgba(255,255,255,0.12);
        flex-shrink: 0;
    }

    .design14-wrapper .d14-download-btn {
        margin-top: 10px;
        background: {{ $themeColor ?? '#8cc63f' }};
        color: #0c1608;
        border: none;
        padding: 8px 16px;
        font-size: 12px;
        font-weight: 700;
        border-radius: 40px;
        cursor: pointer;
        font-family: 'DM Sans', sans-serif;
        display: flex;
        align-items: center;
        gap: 8px;
        letter-spacing: 0.04em;
        transition: opacity 0.2s, transform 0.15s;
        box-shadow: 0 6px 28px rgba(140,198,63,0.38);
    }
    .design14-wrapper .d14-download-btn:hover   { opacity: .88; transform: translateY(-2px); }
    .design14-wrapper .d14-download-btn:active   { transform: translateY(0); }
    .design14-wrapper .d14-download-btn:disabled { opacity: 0.5; cursor: not-allowed; transform: none; }
</style>

<div class="design14-wrapper">

    <div class="design14-card" id="posterCard14">

        {{-- DECO RINGS --}}
        <div class="d14-ring d14-ring-1"></div>
        <div class="d14-ring d14-ring-2"></div>

        {{-- TOP BAR --}}
        <div class="d14-top-bar">
            <div class="d14-logo">
                <div class="d14-logo-icon">
                    @if(isset($logourl) && $logourl)
                        <img src="{{ $logourl }}" alt="logo" crossorigin="anonymous">
                    
                    @endif
                </div>
                <div class="d14-logo-text">
                    <span class="d14-logo-name">{{ @user()->name ?? ' ' }}</span>
                </div>
            </div>
        </div>

        {{-- IMAGE BOX --}}
        <div class="d14-image-box">
            @if(isset($menuImageUrl) && $menuImageUrl)
                <img src="{{ $menuImageUrl }}" alt="{{ @$menu['name'] ?? '' }}" class="js-poster-menu-image" crossorigin="anonymous">
            
            @endif
        </div>

        {{-- MAIN CONTENT --}}
        <div class="d14-content">

            <div class="d14-promo-label">
                @if(strlen(@$menu['name']) <= 20)
                    <div class="d14-promo-line"></div>
                    <span class="d14-promo-text">{{ @$menu['name'] ?? ' ' }}</span>
                @endif
            </div>

            <div class="d14-headline">
                Richly <br><em>Crafted</em>
            </div>

            <p class="d14-desc">{{ \Illuminate\Support\Str::limit($menu['description'] ?? '', 150, '...') }}</p>

        </div>

        {{-- FOOTER --}}
        <div class="d14-footer">

            @if(!empty(@user()->address))
                <div class="d14-f-address">
                    <svg viewBox="0 0 24 24">
                        <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5S10.62 6.5 12 6.5s2.5 1.12 2.5 2.5S13.38 11.5 12 11.5z"/>
                    </svg>
                    {{ @user()->address }}
                </div>
            @endif

            <div class="d14-f-contact">

                @if(!empty(@user()->phone))
                    <div class="d14-f-item">
                        <svg viewBox="0 0 24 24">
                            <path d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1C10.33 21 3 13.67 3 4c0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.24 1.02l-2.21 2.2z"/>
                        </svg>
                        {{ @user()->phone }}
                    </div>
                @endif

                @if(!empty(@user()->phone) && !empty(@user()->website_domain))
                    <div class="d14-f-sep"></div>
                @endif

                @if(!empty(@user()->website_domain))
                    <div class="d14-f-item">
                        <svg viewBox="0 0 24 24">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/>
                        </svg>
                        {{ @user()->website_domain }}
                    </div>
                @endif

            </div>

        </div>{{-- /.d14-footer --}}

    </div>{{-- /.design14-card --}}

    {{-- <button type="button" class="d14-download-btn" onclick="downloadDesign14()">
        Download Poster
    </button> --}}

</div>{{-- /.design14-wrapper --}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

<script>
    function downloadDesign14() {
        var card   = document.getElementById('posterCard14');
        var button = document.querySelector('.d14-download-btn');
        button.innerHTML = 'Generating...';
        button.disabled  = true;
        var exportW = 1080;
        var scale   = exportW / card.offsetWidth;
        html2canvas(card, {
            scale: scale,
            backgroundColor: '#0c1608',
            logging: false,
            useCORS: true,
            allowTaint: true,
            imageTimeout: 0,
            onclone: function (clonedDoc) {
                var images = clonedDoc.querySelectorAll('img');
                return Promise.all(Array.from(images).map(function(img) {
                    return new Promise(function(resolve) {
                        if (img.complete) { resolve(); }
                        else { img.onload = resolve; img.onerror = resolve; }
                    });
                }));
            }
        }).then(function(canvas) {
            var link      = document.createElement('a');
            link.download = 'menu-poster-design14.png';
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
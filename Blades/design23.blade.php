<link
    href="https://fonts.googleapis.com/css2?family=Anton&family=Playfair+Display:ital,wght@1,700&family=Dancing+Script:wght@700&family=Lato:wght@400;700;900&display=swap"
    rel="stylesheet">

<style>
    .design23-wrapper {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        font-family: 'Lato', sans-serif;
    }

    .design23-wrapper .design23-card {
        width: 100%;
        max-width: 340px;
        aspect-ratio: 4/5;
        background: #f7f7f2;
        overflow: hidden;
        position: relative;
        box-sizing: border-box;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.2);
        container-type: inline-size;
        display: flex;
        flex-direction: column;
    }

    /* ── TOP BAR ── */
    .design23-wrapper .d23-top-bar {
        flex-shrink: 0;
        height: 3cqw;
        z-index: 10;
        position: relative;
        background: {{$themeColor}};
    }

    /* ── FOOD IMAGE ── */
    .design23-wrapper .d23-food {
        position: relative;
        width: 100%;
        height: 52cqw;
        flex-shrink: 0;
        overflow: hidden;
        z-index: 4;
    }

    .design23-wrapper .d23-food img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        display: block;
    }

    .design23-wrapper .d23-food-placeholder {
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, #c8a060 0%, #8a5a20 100%);
    }

    /* Header bar over image */
    .design23-wrapper .d23-img-header {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        z-index: 9;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 3cqw 4cqw;
        background: linear-gradient(180deg, rgba(0, 0, 0, 0.45) 0%, transparent 100%);
    }

    .design23-wrapper .d23-img-header-left {
        display: flex;
        align-items: center;
        gap: 1.5cqw;
    }

    .design23-wrapper .d23-logo-img {
        height: 2rem;
        width: auto;
        display: block;
        flex-shrink: 0;
    }

    .design23-wrapper .d23-logo-avatar {
        height: 2rem;
        width: 2rem;
        border-radius: 50%;
        background: {{ $themeColor }};
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: 'Anton', sans-serif;
        font-size: 3.8cqw;
        color: #fff;
        border: 2px solid rgba(255, 255, 255, 0.8);
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.3);
        flex-shrink: 0;
    }

    .design23-wrapper .d23-brand-name-img {
        font-size: 3cqw;
        font-weight: 900;
        color: #fff;
        text-shadow: 0 1px 4px rgba(0, 0, 0, 0.5);
        white-space: nowrap;
    }

    .design23-wrapper .d23-img-badge {
        background: {{ $themeColor }};
        color: #fff;
        font-size: 2cqw;
        font-weight: 700;
        letter-spacing: 1.2px;
        text-transform: uppercase;
        padding: 1cqw 2.5cqw;
        /*clip-path: polygon(6% 0%, 100% 0%, 94% 100%, 0% 100%);*/
        white-space: nowrap;
    }

    /* ── BOTTOM CONTENT ── */
    .design23-wrapper .d23-content {
        flex: 1;
        min-height: 0;
        background: #f7f7f2;
        position: relative;
        z-index: 5;
        padding: 3.5cqw 5cqw 3cqw;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .design23-wrapper .d23-dot-tr {
        position: absolute;
        top: 2cqw;
        right: 2cqw;
        z-index: 0;
        pointer-events: none;
        width: 9cqw;
        height: 9cqw;
        background-image: radial-gradient(circle, {{ $themeColor }} 1.3px, transparent 1.3px);
        background-size: 5px 5px;
        opacity: 0.4;
    }

    /* ── HEADLINE STYLE ── */
    .design23-wrapper .d23-headline-block {
        position: relative;
        z-index: 2;
        text-align: left;
    }

    .design23-wrapper .d23-script {
        font-family: 'Playfair Display', serif;
        font-style: italic;
        font-weight: 700;
        font-size: 10cqw;
        color: {{ $themeColor }};
        line-height: 1;
        margin: 0;
        letter-spacing: 1px;
        text-transform: uppercase;
    }

    .design23-wrapper .d23-bold-line {
        font-family: 'Anton', sans-serif;
        font-size: 9cqw;
        color: transparent;
        -webkit-text-stroke: 2px {{ $themeColor }};
        line-height: 0.88;
        letter-spacing: 3px;
        text-transform: uppercase;
        margin: 0;
    }

    .design23-wrapper .d23-bold-line-solid {
        font-family: 'Anton', sans-serif;
        font-size: 16cqw;
        color: #1a1a1a;
        line-height: 1;
        letter-spacing: 2px;
        text-transform: uppercase;
        margin: 0;
    }

    .design23-wrapper .d23-underline {
        width: 14cqw;
        height: 3px;
        background: {{ $themeColor }};
        margin: 1.5cqw 0 0;
    }

    /* ── Description ── */
    .design23-wrapper .d23-desc {
        position: relative;
        z-index: 2;
        border-left: 3px solid {{ $themeColor }};
        padding-left: 2.5cqw;
        font-size: 2.4cqw;
        color: #555;
        line-height: 1.65;
        margin: 0;
        font-weight: 400;
            text-align: left;
    }

    /* ══ FOOTER ══ */
    .design23-wrapper .d23-footer {
        position: relative;
        z-index: 2;
        background: #1a1a1a;
        margin: 0 -5cqw -3cqw;
        padding: 2.5cqw 5cqw;
        display: flex;
        flex-direction: column;
        gap: 1.5cqw;
    }

    .design23-wrapper .d23-footer-top {
        display: flex;
        align-items: center;
        gap: 2cqw;
        border-bottom: 1px solid rgba(255, 255, 255, 0.08);
        padding-bottom: 1.5cqw;
    }

    .design23-wrapper .d23-footer-logo-img {
        height: 1.8rem;
        width: auto;
        display: block;
        flex-shrink: 0;
    }

    .design23-wrapper .d23-footer-logo-avatar {
        width: 7cqw;
        height: 7cqw;
        border-radius: 50%;
        background: {{ $themeColor }};
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: 'Anton', sans-serif;
        font-size: 3.2cqw;
        color: #fff;
        flex-shrink: 0;
    }

    .design23-wrapper .d23-footer-info {
        flex: 1;
        min-width: 0;
        text-align: end;
    }

    .design23-wrapper .d23-footer-name {
        font-size: 2.8cqw;
        font-weight: 900;
        color: #fff;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        line-height: 1;
        margin-bottom: 0.4cqw;
    }

    .design23-wrapper .d23-footer-address {
        font-size: 2cqw;
        color: rgba(255, 255, 255, 0.55);
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        line-height: 1;
    }

   .design23-wrapper .d23-footer-bottom {
    display: flex;
    align-items: center;
    width: 100%;
}

.design23-wrapper .d23-footer-item {
    display: flex;
    align-items: center;
    gap: 1.2cqw;
    font-size: 2.1cqw;
    color: rgba(255, 255, 255, 0.75);
    font-weight: 600;
    min-width: 0;
    overflow: hidden;
    white-space: nowrap;
}

.design23-wrapper .d23-footer-item:first-child {
    justify-content: flex-start;
    flex: 1;
}

.design23-wrapper .d23-footer-item:last-child {
    justify-content: flex-end;
    flex: 1;
    text-align: right;
}

.design23-wrapper .d23-footer-sep {
    margin: 0 2cqw;
}

    .design23-wrapper .d23-footer-item svg {
        width: 2.8cqw;
        height: 2.8cqw;
        fill: {{ $themeColor }};
        flex-shrink: 0;
    }

    .design23-wrapper .d23-footer-sep {
        width: 1px;
        height: 3.5cqw;
        background: rgba(255, 255, 255, 0.15);
        flex-shrink: 0;
    }

    /* ── BOTTOM BAR ── */
    .design23-wrapper .d23-bottom-bar {
        flex-shrink: 0;
        height: 3cqw;
        z-index: 10;
        position: relative;
        background: {{$themeColor}};
    }

    .design23-wrapper .d23-download-btn {
        margin-top: 10px;
        background: {{ $themeColor }};
        color: #fff;
        border: none;
        padding: 8px 16px;
        font-size: 12px;
        font-weight: 700;
        border-radius: 30px;
        cursor: pointer;
        font-family: 'Lato', sans-serif;
        display: flex;
        align-items: center;
        gap: 8px;
        letter-spacing: 0.04em;
        transition: opacity 0.2s, transform 0.15s;
        box-shadow: 0 4px 16px rgba(74, 140, 28, 0.4);
    }

    .design23-wrapper .d23-download-btn:hover { opacity: .88; transform: translateY(-2px); }
    .design23-wrapper .d23-download-btn:active { transform: translateY(0); }
    .design23-wrapper .d23-download-btn:disabled { opacity: .5; cursor: not-allowed; transform: none; }
</style>

<div class="design23-wrapper">
    <div class="design23-card" id="posterCard23">

        <div class="d23-top-bar"></div>

        {{-- FOOD IMAGE --}}
        <div class="d23-food">
            @if (isset($menuImageUrl) && $menuImageUrl)
                <img src="{{ $menuImageUrl }}" alt="{{ @$menu['name'] ?? 'Menu Item' }}" class="js-poster-menu-image" crossorigin="anonymous">
            @else
                <div class="d23-food-placeholder"></div>
            @endif

            <div class="d23-img-header">
                <div class="d23-img-badge">Fan Favorite</div>
            </div>
        </div>

        {{-- CONTENT --}}
        <div class="d23-content">
            <div class="d23-dot-tr"></div>

            {{-- HEADLINE --}}
            <div class="d23-headline-block">
                <p class="d23-script">Simply</p>
                <p class="d23-bold-line-solid">Delicious</p>
                <div class="d23-underline"></div>
            </div>

            {{-- Description --}}
            <p class="d23-desc">
                @if (!empty($menu['description']))
                    {{ Str::limit($menu['description'], 100, '...') }}
                @endif
            </p>

            {{-- FOOTER --}}
           <div class="d23-footer">
            {{-- Top row --}}
            <div class="d23-footer-top">
                @if (isset($logourl) && $logourl)
                    <img src="{{ $logourl }}" alt="logo" class="d23-footer-logo-img" crossorigin="anonymous">
                @else
                    <div class="d23-footer-logo-avatar">{{ strtoupper(substr(@user()->name ?? 'R', 0, 1)) }}</div>
                @endif

                <div class="d23-footer-info">
                    <div class="d23-footer-name">{{ @user()->name ?? '' }}</div>

                    @if(!empty(@user()->address))
                        <div class="d23-footer-address">{{ @user()->address }}</div>
                    @endif
                </div>
            </div>

            {{-- Bottom row --}}
            <div class="d23-footer-bottom">

                @if(!empty(@user()->phone))
                    <div class="d23-footer-item">
                        <svg viewBox="0 0 24 24">
                            <path d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1C10.33 21 3 13.67 3 4c0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.24 1.02l-2.21 2.2z"/>
                        </svg>
                        {{ @user()->phone }}
                    </div>
                @endif

                @if(!empty(@user()->phone) && !empty(@user()->website_domain))
                    <div class="d23-footer-sep"></div>
                @endif

                @if(!empty(@user()->website_domain))
                    <div class="d23-footer-item">
                        <svg viewBox="0 0 24 24">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/>
                        </svg>
                        {{ @user()->website_domain }}
                    </div>
                @endif

               </div>
            </div>

        </div>

        <div class="d23-bottom-bar"></div>

    </div>{{-- /.design23-card --}}

    {{-- <button type="button" class="d23-download-btn" onclick="downloadDesign23()">⬇ Download Poster</button> --}}

</div>{{-- /.design23-wrapper --}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

<script>
    function downloadDesign23() {
        var card = document.getElementById('posterCard23');
        var button = document.querySelector('.d23-download-btn');
        button.innerHTML = 'Generating...';
        button.disabled = true;

        var exportW = 1080;
        var scale = exportW / card.offsetWidth;

        // Pre-load all images before calling html2canvas
        var images = card.querySelectorAll('img');
        var imagePromises = Array.from(images).map(function(img) {
            return new Promise(function(resolve) {
                if (img.complete && img.naturalWidth > 0) {
                    resolve();
                } else {
                    img.onload = resolve;
                    img.onerror = resolve;
                }
            });
        });

        Promise.all(imagePromises).then(function() {
            return html2canvas(card, {
                scale: scale,
                backgroundColor: '#f7f7f2',
                logging: false,
                useCORS: true,
                allowTaint: true,
                imageTimeout: 15000,
            });
        }).then(function(canvas) {
            var link = document.createElement('a');
            link.download = 'menu-poster-design23.png';
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
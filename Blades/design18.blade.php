<link
    href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Cormorant+Garamond:wght@400;600;700&family=Dancing+Script:wght@700&display=swap"
    rel="stylesheet">

<style>
    .design18-wrapper {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        font-family: 'Cormorant Garamond', serif;
    }

    /* ── Card: Instagram 4:5 ratio ── */
    .design18-wrapper .design18-card {
        width: 100%;
        aspect-ratio: 4 / 5;
        max-width: 340px;
        background: #f0e6d3;
        overflow: hidden;
        position: relative;
        display: flex;
        flex-direction: column;
        box-sizing: border-box;
        box-shadow: 0 18px 60px rgba(0, 0, 0, 0.3);
        container-type: inline-size;
        text-align: start !important;
    }

    /* ── Outer tile strips (full height, left & right) ── */
    .design18-wrapper .d18-outer-tile {
        position: absolute;
        top: 0;
        bottom: 0;
        width: 13px;
        z-index: 20;
        pointer-events: none;
        overflow: hidden;
    }

    .design18-wrapper .d18-outer-tile.left {
        left: 0;
    }

    .design18-wrapper .d18-outer-tile.right {
        right: 0;
    }

    /* ── Headline area ── */
    .design18-wrapper .d18-hl-wrap {
        flex-shrink: 0;
        background: #f0e6d3;
        padding: 12px 28px;
        text-align: center;
        position: relative;
    }

    .design18-wrapper .d18-hl-wrap::before {
        content: '';
        position: absolute;
        top: 0;
        left: 28px;
        right: 28px;
        height: 1px;
        background: linear-gradient(90deg, transparent, #c9973a, transparent);
    }

    .design18-wrapper .d18-headline {
        font-family: 'Playfair Display', serif;
        font-size: 6.5cqw;
        line-height: 1.02;
        color: #1a2744;
        letter-spacing: 0;
        margin: 0;
    }

    /* ── Food image ── */
    .design18-wrapper .d18-food {
        flex: 1;
        min-height: 0;
        overflow: hidden;
        position: relative;
    }

    .design18-wrapper .d18-food img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    .design18-wrapper .d18-food-bg {
        width: 100%;
        height: 100%;
        background: linear-gradient(170deg, #b0a882 0%, #8a7850 60%, #6a5830 100%);
    }

    /* ── Tagline ── */
    .design18-wrapper .d18-tagline-wrap {
        flex-shrink: 0;
        background: #f0e6d3;
        padding: 5px 22px 5px;
        text-align: center;
        border-top: 1.5px solid rgba(201, 151, 58, 0.4);
        border-bottom: 2px solid #1a2744;
    }

    .design18-wrapper .d18-tagline {
        font-family: 'Dancing Script', cursive;
        font-weight: 700;
        font-size: 3.8cqw;
        color: #1a2744;
        margin: 0;
        line-height: 1.3;
    }

    /* ── Info row ── */
    .design18-wrapper .d18-info-row {
        flex-shrink: 0;
        display: flex;
        align-items: stretch;
        background: #ede0cc;
        min-height: 66px;
    }

    .design18-wrapper .d18-tile-col-wide {
        flex-shrink: 0;
        width: 72px;
        overflow: hidden;
    }

    .design18-wrapper .d18-info-center {
        flex: 1;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 4px 6px;
        text-align: center;
        font-family: 'Cormorant Garamond', serif;
    }

    .design18-wrapper .d18-r-name {
        font-family: 'Playfair Display', serif;
        font-size: 4.5cqw;
        color: #1a2744;
        letter-spacing: 0.5px;
        line-height: 1.1;
        margin: 0 0 2px;
    }

    .design18-wrapper .d18-r-addr {
        font-size: 2.5cqw;
        color: #333;
        margin: 0;
    }

    .design18-wrapper .d18-r-phone {
        font-family: 'Cormorant Garamond', serif;
        font-size: 2.5cqw;
        color: #333;
        margin: 0;
    }

    .design18-wrapper .d18-r-email {
        font-family: 'Cormorant Garamond', serif;
        font-size: 2.5cqw;
        color: #333;
        margin: 0;
    }

    /* ── Download button ── */
    .design18-wrapper .d18-download-btn {
        margin-top: 10px;
        background: #1a2744;
        color: #fff;
        border: none;
        padding: 8px 16px;
        font-size: 12px;
        font-weight: 700;
        border-radius: 30px;
        cursor: pointer;
        font-family: 'Montserrat', sans-serif;
        display: flex;
        align-items: center;
        gap: 8px;
        letter-spacing: 0.04em;
        transition: opacity 0.2s, transform 0.15s;
        box-shadow: 0 4px 16px rgba(26, 39, 68, 0.4);
    }

    .design18-wrapper .d18-download-btn:hover {
        opacity: .88;
        transform: translateY(-2px);
    }

    .design18-wrapper .d18-download-btn:active {
        transform: translateY(0);
    }

    .design18-wrapper .d18-download-btn:disabled {
        opacity: 0.5;
        cursor: not-allowed;
        transform: none;
    }
</style>

<div class="design18-wrapper">

    <div class="design18-card" id="posterCard18">

        {{-- OUTER TILE STRIPS --}}
        <div class="d18-outer-tile left">
            <svg width="13" height="100%" style="display:block;">
                <defs>
                    <pattern id="d18ots" x="0" y="0" width="13" height="13" patternUnits="userSpaceOnUse">
                        <rect width="13" height="13" fill="#3a6ea5" />
                        <path d="M6.5 1.2 Q6.5 6.5 1.2 6.5 Q6.5 6.5 6.5 11.8 Q6.5 6.5 11.8 6.5 Q6.5 6.5 6.5 1.2Z"
                            fill="#e8c87a" opacity="0.75" />
                        <circle cx="6.5" cy="6.5" r="1.6" fill="#fff" opacity="0.65" />
                    </pattern>
                </defs>
                <rect width="13" height="100%" fill="url(#d18ots)" />
            </svg>
        </div>
        <div class="d18-outer-tile right">
            <svg width="13" height="100%" style="display:block;">
                <defs>
                    <pattern id="d18ots2" x="0" y="0" width="13" height="13" patternUnits="userSpaceOnUse">
                        <rect width="13" height="13" fill="#3a6ea5" />
                        <path d="M6.5 1.2 Q6.5 6.5 1.2 6.5 Q6.5 6.5 6.5 11.8 Q6.5 6.5 11.8 6.5 Q6.5 6.5 6.5 1.2Z"
                            fill="#e8c87a" opacity="0.75" />
                        <circle cx="6.5" cy="6.5" r="1.6" fill="#fff" opacity="0.65" />
                    </pattern>
                </defs>
                <rect width="13" height="100%" fill="url(#d18ots2)" />
            </svg>
        </div>

        {{-- HEADLINE --}}
        <div class="d18-hl-wrap">
            <p class="d18-headline">Craving Greek<br>Belair Cafe Food?</p>
        </div>

        {{-- FOOD IMAGE --}}
        <div class="d18-food">
            @if (isset($menuImageUrl) && $menuImageUrl)
                <img src="{{ $menuImageUrl }}" alt="{{ @$menu['name'] ?? 'Menu Item' }}" class="js-poster-menu-image"
                    crossorigin="anonymous">
            @else
                <div class="d18-food-bg"></div>
            @endif
        </div>

        {{-- TAGLINE --}}
        <div class="d18-tagline-wrap">
            @if (!empty($menu['description']))
                <p class="d18-tagline">{{ Str::limit($menu['description'], 55, '...') }}</p>
            @else
                <p class="d18-tagline">Still haven't tried our delicious Tacos?</p>
            @endif
        </div>

        {{-- INFO ROW --}}
        <div class="d18-info-row">

            {{-- Left tile column --}}
            <div class="d18-tile-col-wide">
                <svg width="72" height="100%" viewBox="0 0 72 68" preserveAspectRatio="xMidYMid slice">
                    <defs>
                        <pattern id="d18tA" x="0" y="0" width="36" height="34" patternUnits="userSpaceOnUse">
                            <rect width="36" height="34" fill="#3a6ea5" />
                            <rect x="1" y="1" width="34" height="32" rx="1.5" fill="#2a5090" opacity="0.4" />
                            <ellipse cx="18" cy="7" rx="4.5" ry="6.5" fill="#e8c87a" opacity="0.85" />
                            <ellipse cx="18" cy="27" rx="4.5" ry="6.5" fill="#e8c87a" opacity="0.85" />
                            <ellipse cx="7" cy="17" rx="6.5" ry="4.5" fill="#e8c87a" opacity="0.85" />
                            <ellipse cx="29" cy="17" rx="6.5" ry="4.5" fill="#e8c87a" opacity="0.85" />
                            <ellipse cx="10" cy="9" rx="4" ry="5.5" fill="#c9973a" opacity="0.7"
                                transform="rotate(45 10 9)" />
                            <ellipse cx="26" cy="9" rx="4" ry="5.5" fill="#c9973a" opacity="0.7"
                                transform="rotate(-45 26 9)" />
                            <ellipse cx="10" cy="25" rx="4" ry="5.5" fill="#c9973a" opacity="0.7"
                                transform="rotate(-45 10 25)" />
                            <ellipse cx="26" cy="25" rx="4" ry="5.5" fill="#c9973a" opacity="0.7"
                                transform="rotate(45 26 25)" />
                            <circle cx="18" cy="17" r="5.5" fill="#fff" opacity="0.92" />
                            <circle cx="18" cy="17" r="3" fill="#c9973a" />
                            <rect x="0.5" y="0.5" width="35" height="33" rx="1.5" fill="none"
                                stroke="#e8c87a" stroke-width="0.7" />
                        </pattern>
                        <pattern id="d18tB" x="0" y="34" width="36" height="34" patternUnits="userSpaceOnUse">
                            <rect width="36" height="34" fill="#2a5090" />
                            <rect x="1" y="1" width="34" height="32" rx="1.5" fill="#1e3d6e" opacity="0.5" />
                            <path d="M18 3 L33 17 L18 31 L3 17 Z" fill="none" stroke="#e8c87a"
                                stroke-width="1.2" />
                            <path d="M18 8 L28 17 L18 26 L8 17 Z" fill="#3a6ea5" stroke="#c9973a"
                                stroke-width="0.7" />
                            <circle cx="18" cy="17" r="4.5" fill="#e8c87a" opacity="0.85" />
                            <circle cx="18" cy="17" r="2" fill="#2a5090" />
                            <circle cx="3" cy="3" r="2.5" fill="#c9973a" opacity="0.65" />
                            <circle cx="33" cy="3" r="2.5" fill="#c9973a" opacity="0.65" />
                            <circle cx="3" cy="31" r="2.5" fill="#c9973a" opacity="0.65" />
                            <circle cx="33" cy="31" r="2.5" fill="#c9973a" opacity="0.65" />
                            <rect x="0.5" y="0.5" width="35" height="33" rx="1.5" fill="none"
                                stroke="#c9973a" stroke-width="0.7" />
                        </pattern>
                    </defs>
                    <rect width="72" height="34" fill="url(#d18tA)" />
                    <rect y="34" width="72" height="34" fill="url(#d18tB)" />
                </svg>
            </div>

            {{-- Center restaurant info --}}
            <div class="d18-info-center">
                <div class="d18-r-name">{{ @user()->name ?? 'Greek Belair Cafe' }}</div>
                <div class="d18-r-addr">{{ @user()->address ?? '327 5th Ave S, Naples, FL 34102, USA' }}</div>
                <div class="d18-r-phone">Phone: {{ @user()->phone ?? '(239) 262-1234' }}</div>
                <div class="d18-r-email">Email: {{ @user()->email ?? 'support@greekbelaircafe.com' }}</div>
            </div>

            {{-- Right tile column --}}
            <div class="d18-tile-col-wide">
                <svg width="72" height="100%" viewBox="0 0 72 68" preserveAspectRatio="xMidYMid slice">
                    <defs>
                        <pattern id="d18tC" x="0" y="0" width="36" height="34" patternUnits="userSpaceOnUse">
                            <rect width="36" height="34" fill="#3a6ea5" />
                            <rect x="1" y="1" width="34" height="32" rx="1.5" fill="#2a5090" opacity="0.3" />
                            <circle cx="18" cy="8" r="7" fill="#1e3d6e" />
                            <circle cx="18" cy="26" r="7" fill="#1e3d6e" />
                            <circle cx="8" cy="17" r="7" fill="#1e3d6e" />
                            <circle cx="28" cy="17" r="7" fill="#1e3d6e" />
                            <circle cx="18" cy="17" r="7" fill="#e8c87a" opacity="0.85" />
                            <circle cx="18" cy="17" r="3.5" fill="#3a6ea5" />
                            <circle cx="18" cy="8" r="3" fill="none" stroke="#e8c87a" stroke-width="0.8"
                                opacity="0.6" />
                            <circle cx="18" cy="26" r="3" fill="none" stroke="#e8c87a" stroke-width="0.8"
                                opacity="0.6" />
                            <circle cx="8" cy="17" r="3" fill="none" stroke="#e8c87a" stroke-width="0.8"
                                opacity="0.6" />
                            <circle cx="28" cy="17" r="3" fill="none" stroke="#e8c87a" stroke-width="0.8"
                                opacity="0.6" />
                            <rect x="0.5" y="0.5" width="35" height="33" rx="1.5" fill="none"
                                stroke="#e8c87a" stroke-width="0.7" />
                        </pattern>
                        <pattern id="d18tD" x="0" y="34" width="36" height="34" patternUnits="userSpaceOnUse">
                            <rect width="36" height="34" fill="#2a5090" />
                            <rect x="1" y="1" width="34" height="32" rx="1.5" fill="#1e3d6e" opacity="0.4" />
                            <polygon
                                points="18,4 20,14 27,8 21,16 31,17 21,18 27,26 20,20 18,30 16,20 9,26 15,18 5,17 15,16 9,8 16,14"
                                fill="#c9973a" opacity="0.8" />
                            <circle cx="18" cy="17" r="5" fill="#e8c87a" opacity="0.9" />
                            <circle cx="18" cy="17" r="2.5" fill="#2a5090" />
                            <rect x="0.5" y="0.5" width="35" height="33" rx="1.5" fill="none"
                                stroke="#c9973a" stroke-width="0.7" />
                        </pattern>
                    </defs>
                    <rect width="72" height="34" fill="url(#d18tC)" />
                    <rect y="34" width="72" height="34" fill="url(#d18tD)" />
                </svg>
            </div>

        </div>{{-- /.d18-info-row --}}

    </div>{{-- /.design18-card --}}

    {{-- Download button --}}
    {{-- <button type="button" class="d18-download-btn" onclick="downloadDesign18()">
        Download Poster
    </button> --}}

</div>{{-- /.design18-wrapper --}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

<script>
    function downloadDesign18() {
        var card = document.getElementById('posterCard18');
        var button = document.querySelector('.d18-download-btn');

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
            link.download = 'menu-poster-design18.png';
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
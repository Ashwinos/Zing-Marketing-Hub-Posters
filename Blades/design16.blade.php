<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;800;900&family=Dancing+Script:wght@600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        /* ══════════════════════════════
           DESIGN16 WRAPPER
        ══════════════════════════════ */
        .design16-wrapper {
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            font-family: 'Montserrat', sans-serif;
        }

        /* ── Card: 4:5 ratio ── */
        .design16-wrapper .design16-card {
            width: 100%;
            aspect-ratio: 4 / 5;
            max-width: 360px;
            position: relative;
            overflow: hidden;
            flex-shrink: 0;
            box-sizing: border-box;
            background: #f1ede7;
            border-radius: 10px;
            container-type: inline-size;
        }

        /* ── Diagonal line texture ── */
        .design16-wrapper .design16-card::before {
            content: "";
            position: absolute;
            inset: 0;
            background-image: repeating-linear-gradient(
                -60deg,
                transparent,
                transparent 22px,
                rgba(0,0,0,0.03) 22px,
                rgba(0,0,0,0.03) 23px
            );
            z-index: 0;
            pointer-events: none;
        }

        /* ══════════════════════════════
           BRAND – top left
        ══════════════════════════════ */
        .design16-wrapper .design16-brand {
            position: relative;
            z-index: 5;
            display: flex;
            align-items: center;
            justify-content: flex-start;
            gap: 8px;
            padding-top: 4%;
            padding-left: 6.5%;
            color: #555;
            font-size: 2.5cqw;
            font-weight: 700;
            letter-spacing: 1px;
            text-transform: uppercase;
        }
        .design16-wrapper .design16-brand img {
            width: 7.5cqw;
            height: 7.5cqw;
            border-radius: 50%;
            object-fit: cover;
            display: block;
        }

        /* ══════════════════════════════
           HEADLINE
        ══════════════════════════════ */
        .design16-wrapper .design16-headline-wrap {
            position: relative;
            z-index: 5;
            padding: 4% 7%;
        }
        .design16-wrapper .design16-headline {
            font-size: 13.5cqw;
            line-height: 0.95;
            font-weight: 900;
            color: {{ $themeColor }};
            margin-bottom: 3%;
        }
        .design16-wrapper .design16-subheadline {
            font-size: 3.3cqw;
            font-weight: 800;
            letter-spacing: 4px;
            color: #333;
            text-transform: uppercase;
        }

        /* ══════════════════════════════
           GREEN BANNER
        ══════════════════════════════ */
        .design16-wrapper .design16-banner {
            position: absolute;
            bottom: 10.5%;
            left: 0;
            width: 100%;
            height: 31.5%;
            z-index: 4;
        }
        .design16-wrapper .design16-banner-bg {
            position: absolute;
            left: 6%;
            right: 18%;
            top: 0; bottom: 0;
            background: {{ $themeColor }};
            border-radius: 75px 0 0 0;
        }

        /* Order button */
        .design16-wrapper .design16-order-btn {
            position: absolute;
            top: 17%;
            left: 11.5%;
            border: 1px solid rgba(255,255,255,0.9);
            border-radius: 30px;
            padding: 1.8% 5%;
            color: #fff;
            font-family: 'Dancing Script', cursive;
            font-size: 4.5cqw;
            font-weight: 700;
        }

        /* Location */
        .design16-wrapper .design16-location {
            position: absolute;
            top: 54%;
            left: 10%;
            display: flex;
            align-items: flex-start;
            gap: 6px;
            color: #fff;
            font-size: 2.5cqw;
            line-height: 1.5;
        }
        .design16-wrapper .design16-location svg {
            width: 3.5cqw;
            height: 3.5cqw;
            fill: #fff;
            flex-shrink: 0;
            margin-top: 1px;
        }

        /* ══════════════════════════════
           FOOD IMAGE – circular
        ══════════════════════════════ */
        .design16-wrapper .design16-food-wrap {
            position: absolute;
            bottom: 15%;
            right: -3.5%;
            width: 61%;
            aspect-ratio: 1 / 1;
            border-radius: 50%;
            overflow: hidden;
            z-index: 8;
            box-shadow: -4px 4px 22px rgba(0,0,0,0.25);
        }
        .design16-wrapper .design16-food-wrap img {
            width: 100%; height: 100%;
            object-fit: cover;
            display: block;
        }

        /* ══════════════════════════════
           FOOTER
        ══════════════════════════════ */
        .design16-wrapper .design16-footer {
            position: absolute;
            bottom: 0; left: 0; right: 0;
            height: 10.5%;
            background: {{ $themeColor }};
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 5%;
            z-index: 10;
        }
        .design16-wrapper .design16-footer-item {
            display: flex;
            align-items: center;
            gap: 6px;
            color: #fff;
            font-size: 2.5cqw;
            font-weight: 600;
        }
        .design16-wrapper .design16-footer-item svg {
            width: 3.5cqw;
            height: 3.5cqw;
            fill: #fff;
            flex-shrink: 0;
        }
        .design16-wrapper .design16-footer-divider {
            width: 1px;
            height: 22px;
            background: rgba(255,255,255,0.25);
            flex-shrink: 0;
        }

        /* ── Download button ── */
        .design16-wrapper .design16-download-btn {
            margin-top: 10px;
            background: {{ $themeColor }};
            color: #fff;
            border: none;
            padding: 8px 20px;
            font-size: 12px;
            font-weight: 700;
            border-radius: 30px;
            cursor: pointer;
            font-family: 'Montserrat', sans-serif;
            display: flex;
            align-items: center;
            gap: 8px;
            letter-spacing: 1px;
            transition: opacity 0.2s, transform 0.15s;
            box-shadow: 0 4px 20px rgba(0,0,0,0.25);
        }
        .design16-wrapper .design16-download-btn:hover   { opacity: 0.88; transform: translateY(-2px); }
        .design16-wrapper .design16-download-btn:active  { transform: translateY(0); }
        .design16-wrapper .design16-download-btn:disabled { opacity: 0.55; cursor: not-allowed; transform: none; }
    </style>

    <div class="design16-wrapper">

        <div class="design16-card" id="posterCard16">

            {{-- Brand --}}
            <div class="design16-brand">
                @if(isset($logourl) && $logourl)
                    <img src="{{ $logourl }}" alt="logo" crossorigin="anonymous">
                @else
                    <img src="https://static.vecteezy.com/system/resources/thumbnails/014/664/003/small_2x/cafe-and-resto-logo-vector.jpg" alt="logo" crossorigin="anonymous">
                @endif
                | <span>{{ @user()->name ?? ' ' }}</span>
            </div>

            {{-- Headline --}}
            <div class="design16-headline-wrap">
                <div class="design16-headline">
                    {{ @$menu['headline_line1'] ?? 'Deeply' }}<br>
                    {{ @$menu['headline_line2'] ?? 'Satisfying' }}
                </div>
                <div class="design16-subheadline">{{ @$menu['tag'] ?? 'Fan Favorite' }}</div>
            </div>

            {{-- Green banner --}}
            <div class="design16-banner">
                <div class="design16-banner-bg"></div>

                <div class="design16-order-btn">Order now</div>

                <div class="design16-location">
                    <svg viewBox="0 0 24 24">
                        <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5S10.62 6.5 12 6.5s2.5 1.12 2.5 2.5S13.38 11.5 12 11.5z"/>
                    </svg>
                    <span>{{ @user()->address ?? ' ' }}</span>
                </div>
            </div>

            {{-- Food image --}}
            <div class="design16-food-wrap">
                @if(isset($menuImageUrl) && $menuImageUrl)
                    <img src="{{ $menuImageUrl }}" alt="{{ @$menu['name'] ?? 'Menu Item' }}" crossorigin="anonymous">
                @else
                    <img src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?w=800" alt="Menu Item" crossorigin="anonymous">
                @endif
            </div>

            {{-- Footer --}}
            <div class="design16-footer">

                <div class="design16-footer-item">
                    <svg viewBox="0 0 24 24">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/>
                    </svg>
                    <span>{{ @user()->website_domain ?? ' ' }}</span>
                </div>

                <div class="design16-footer-divider"></div>

                <div class="design16-footer-item">
                    <svg viewBox="0 0 24 24">
                        <path d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1C10.33 21 3 13.67 3 4c0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.24 1.02l-2.21 2.2z"/>
                    </svg>
                    <span>{{ @user()->phone ?? ' ' }}</span>
                </div>

            </div>{{-- /.design16-footer --}}

        </div>{{-- /.design16-card --}}

        {{-- Download button --}}
        {{-- <button type="button" class="design16-download-btn" onclick="downloadPoster16()">
            <i class="bi bi-download"></i>
            Download Poster
        </button> --}}

    </div>{{-- /.design16-wrapper --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

    <script>
        function downloadPoster16() {
            var card   = document.getElementById('posterCard16');
            var button = document.querySelector('.design16-download-btn');

            button.innerHTML = '<i class="bi bi-hourglass-split"></i> Generating...';
            button.disabled  = true;

            var exportW = 1080;
            var scale   = exportW / card.offsetWidth;

            html2canvas(card, {
                scale:           scale,
                backgroundColor: null,
                logging:         false,
                useCORS:         true,
                allowTaint:      true,
                imageTimeout:    0,
                onclone: function(clonedDoc) {
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
                link.download = 'menu-poster-instagram.png';
                link.href     = canvas.toDataURL('image/png', 1.0);
                link.click();

                button.innerHTML = '<i class="bi bi-download"></i> Download Poster';
                button.disabled  = false;
            }).catch(function(error) {
                console.error('Error generating image:', error);
                alert('Failed to generate image. Please try again.');
                button.innerHTML = '<i class="bi bi-download"></i> Download Poster';
                button.disabled  = false;
            });
        }
    </script>
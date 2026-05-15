<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&family=Jost:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        /* ══════════════════════════════
           DESIGN17 WRAPPER
        ══════════════════════════════ */
        .design17-wrapper {
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            font-family: 'Jost', sans-serif;
        }

        /* ── Card: 4:5 ratio ── */
        .design17-wrapper .design17-card {
            width: 100%;
            aspect-ratio: 4 / 5;
            max-width: 430px;
            position: relative;
            overflow: hidden;
            flex-shrink: 0;
            box-sizing: border-box;
            background: #faf7f2;
            border: 1px solid rgba(139,104,69,0.15);
            display: flex;
            flex-direction: column;
            container-type: inline-size;
        }

        /* ── Dot pattern bg ── */
        .design17-wrapper .design17-card::before {
            content: "";
            position: absolute;
            inset: 0;
            background-image: radial-gradient(rgba(139,104,69,0.08) 1px, transparent 1px);
            background-size: 20px 20px;
            opacity: .4;
            pointer-events: none;
            z-index: 0;
        }

        /* ══════════════════════════════
           HEADER – dark
        ══════════════════════════════ */
        .design17-wrapper .design17-header {
            position: relative;
            z-index: 2;
            background: #2c1f14;
            padding: 6% 7% 4.5%;
            flex-shrink: 0;
        }
        .design17-wrapper .design17-logo-wrap {
            display: flex;
            align-items: center;
            gap: 3.5%;
        }
        .design17-wrapper .design17-logo-ring {
            width: 13.5cqw;
            height: 13.5cqw;
            border-radius: 50%;
            overflow: hidden;
            border: 2px solid rgba(210,175,110,0.5);
            flex-shrink: 0;
        }
        .design17-wrapper .design17-logo-ring img {
            width: 100%; height: 100%;
            object-fit: cover;
            display: block;
        }
        .design17-wrapper .design17-restaurant-name {
            font-family: 'Cormorant Garamond', serif;
            color: #f4e7d1;
            font-size: 7cqw;
            letter-spacing: 3px;
            text-transform: uppercase;
            line-height: 1;
        }
        .design17-wrapper .design17-tagline {
            color: {{ $themeColor }};
            font-size: 2.3cqw;
            letter-spacing: 3px;
            text-transform: uppercase;
            margin-top: 1.5%;
        }
        .design17-wrapper .design17-gold-line {
            margin-top: 4%;
            height: 1px;
            background: linear-gradient(to right, transparent, {{ $themeColor }}, transparent);
        }

        /* ══════════════════════════════
           HERO
        ══════════════════════════════ */
        .design17-wrapper .design17-hero {
            position: relative;
            z-index: 2;
            padding: 5.5% 7% 4.5%;
            border-bottom: 1px solid rgba(139,104,69,0.15);
            flex: 1;
        }
        .design17-wrapper .design17-badge {
            display: inline-block;
            border: 1px solid {{ $themeColor }};
            padding: 1% 3%;
            color: #8b6845;
            font-size: 2.1cqw;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 3.5%;
        }
        .design17-wrapper .design17-title {
            font-family: 'Cormorant Garamond', serif;
            font-size: 12cqw;
            line-height: .95;
            color: #2c1f14;
        }
        .design17-wrapper .design17-title em {
            font-style: italic;
            color: #8b6845;
            font-weight: 400;
        }
        .design17-wrapper .design17-description {
            margin-top: 3.5%;
            color: #7a6550;
            font-size: 2.6cqw;
            line-height: 1.8;
            max-width: 70%;
        }
        .design17-wrapper .design17-price-row {
            margin-top: 4.5%;
            display: flex;
            align-items: center;
        }
        .design17-wrapper .design17-order-btn {
            margin-left: auto;
            background: #2c1f14;
            color: #f4e7d1;
            border: none;
            padding: 2.5% 5%;
            font-size: 2.3cqw;
            letter-spacing: 2px;
            text-transform: uppercase;
            border-left: 3px solid {{ $themeColor }};
            cursor: pointer;
            font-family: 'Jost', sans-serif;
        }

        /* ══════════════════════════════
           SVG ILLUSTRATION
        ══════════════════════════════ */
        .design17-wrapper .design17-food-svg-wrap {
            position: relative;
            z-index: 2;
            padding: 3.5% 5.5% 2.5%;
            border-bottom: 1px solid rgba(139,104,69,0.15);
            flex-shrink: 0;
        }
        .design17-wrapper .design17-food-svg-wrap svg {
            width: 100%;
            display: block;
        }

        /* ══════════════════════════════
           FOOTER – dark
        ══════════════════════════════ */
        .design17-wrapper .design17-footer {
            position: relative;
            z-index: 2;
            background: #2c1f14;
            padding: 3% 5.5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 2.5%;
            flex-shrink: 0;
        }
        .design17-wrapper .design17-footer-item {
            display: flex;
            align-items: center;
            gap: 6px;
            color: {{ $themeColor }};
            font-size: 2.2cqw;
        }
        .design17-wrapper .design17-footer-item svg {
            flex-shrink: 0;
            width: 2.8cqw;
            height: 2.8cqw;
        }

        /* ── Download button ── */
        .design17-wrapper .design17-download-btn {
            margin-top: 10px;
            background: #2c1f14;
            color: #f4e7d1;
            border: none;
            padding: 8px 20px;
            font-size: 12px;
            font-weight: 600;
            border-radius: 4px;
            cursor: pointer;
            font-family: 'Jost', sans-serif;
            display: flex;
            align-items: center;
            gap: 8px;
            letter-spacing: 2px;
            text-transform: uppercase;
            transition: opacity 0.2s, transform 0.15s;
            border-left: 3px solid {{ $themeColor }};
        }
        .design17-wrapper .design17-download-btn:hover   { opacity: 0.88; transform: translateY(-2px); }
        .design17-wrapper .design17-download-btn:active  { transform: translateY(0); }
        .design17-wrapper .design17-download-btn:disabled { opacity: 0.55; cursor: not-allowed; transform: none; }
    </style>

    <div class="design17-wrapper">

        <div class="design17-card" id="posterCard17">

            {{-- HEADER --}}
            <div class="design17-header">
                <div class="design17-logo-wrap">
                    <div class="design17-logo-ring">
                        @if(isset($logourl) && $logourl)
                            <img src="{{ $logourl }}" alt="logo" crossorigin="anonymous">
                        @else
                            <img src="https://static.vecteezy.com/system/resources/thumbnails/014/664/003/small_2x/cafe-and-resto-logo-vector.jpg" alt="logo" crossorigin="anonymous">
                        @endif
                    </div>
                    <div>
                        <div class="design17-restaurant-name">{{ @user()->name ?? ' ' }}</div>
                        @if(@user()->tagline)
                            <div class="design17-tagline">{{ @user()->tagline }}</div>
                        @endif
                    </div>
                </div>
                <div class="design17-gold-line"></div>
            </div>

            {{-- HERO --}}
            <div class="design17-hero">
                <div class="design17-badge">{{ @$menu['tag'] ?? "Chef's Special" }}</div>

                <div class="design17-title">
                    {!! @$menu['headline_line1'] ?? 'Our' !!} <em>{!! @$menu['headline_line2'] ?? 'Signature' !!}</em><br>
                    {!! @$menu['headline_line3'] ?? 'Dish' !!}
                </div>

                <div class="design17-description">
                    {{ @$menu['description'] ?? 'Crafted with the finest ingredients and aromatic spices, finished with love.' }}
                </div>

                <div class="design17-price-row">
                    <button class="design17-order-btn">Order Now</button>
                </div>
            </div>

            {{-- SVG FOOD ILLUSTRATION --}}
            <div class="design17-food-svg-wrap">
                @if(isset($menuImageUrl) && $menuImageUrl)
                    {{-- When a real image is available, show it in a contained strip --}}
                    <div style="width:100%;height:22cqw;overflow:hidden;border-radius:4px;">
                        <img src="{{ $menuImageUrl }}" alt="{{ @$menu['name'] ?? 'Menu Item' }}" crossorigin="anonymous"
                             style="width:100%;height:100%;object-fit:cover;display:block;">
                    </div>
                @else
                    {{-- Decorative SVG fallback --}}
                    <svg viewBox="0 0 432 120" xmlns="http://www.w3.org/2000/svg">
                        <ellipse cx="216" cy="80" rx="120" ry="20" fill="none" stroke="{{ $themeColor }}" stroke-width="1.2"/>
                        <path d="M140 45 Q216 105 292 45" fill="none" stroke="#2c1f14" stroke-width="3"/>
                        <path d="M185 20 Q175 10 185 0" fill="none" stroke="#8b6845" stroke-width="2" stroke-linecap="round"/>
                        <path d="M216 25 Q206 12 216 0" fill="none" stroke="#8b6845" stroke-width="2" stroke-linecap="round"/>
                        <path d="M247 20 Q237 10 247 0" fill="none" stroke="#8b6845" stroke-width="2" stroke-linecap="round"/>
                        <line x1="300" y1="20" x2="340" y2="70" stroke="{{ $themeColor }}" stroke-width="3" stroke-linecap="round"/>
                        <ellipse cx="292" cy="13" rx="10" ry="14" fill="none" stroke="{{ $themeColor }}" stroke-width="2"/>
                    </svg>
                @endif
            </div>

            {{-- FOOTER --}}
            <div class="design17-footer">

                <div class="design17-footer-item">
                    <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 1.5C2 1.5 3 1 3.5 2.5C4 4 3 4.5 3.5 5.5C4 6.5 5.5 8 6.5 8.5C7.5 9 8 8 8 8L9.5 9C9.5 9 9 10.5 7.5 10C5 9 2 5.5 1.5 3.5C1 1.5 2 1.5 2 1.5Z" stroke="{{ $themeColor }}" stroke-width="0.7"/>
                    </svg>
                    <span>{{ @user()->phone ?? ' ' }}</span>
                </div>

                <div class="design17-footer-item">
                    <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="1" y="2.5" width="9" height="6.5" rx="1" stroke="{{ $themeColor }}" stroke-width="0.7"/>
                        <path d="M1 4L5.5 7L10 4" stroke="{{ $themeColor }}" stroke-width="0.7"/>
                    </svg>
                    <span>{{ @user()->website_domain ?? ' ' }}</span>
                </div>

                <div class="design17-footer-item">
                    <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.5 1 C4 1 3 2.2 3 3.5 C3 5.5 5.5 10 5.5 10 S8 5.5 8 3.5 C8 2.2 7 1 5.5 1Z" stroke="{{ $themeColor }}" stroke-width="0.7"/>
                        <circle cx="5.5" cy="3.5" r="1" stroke="{{ $themeColor }}" stroke-width="0.6"/>
                    </svg>
                    <span>{{ @user()->address ?? ' ' }}</span>
                </div>

            </div>{{-- /.design17-footer --}}

        </div>{{-- /.design17-card --}}

        {{-- Download button --}}
        {{-- <button type="button" class="design17-download-btn" onclick="downloadPoster17()">
            <i class="bi bi-download"></i>
            Download Poster
        </button> --}}

    </div>{{-- /.design17-wrapper --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

    <script>
        function downloadPoster17() {
            var card   = document.getElementById('posterCard17');
            var button = document.querySelector('.design17-download-btn');

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
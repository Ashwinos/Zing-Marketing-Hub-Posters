<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Barlow+Condensed:wght@400;700;900&family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        /* ══════════════════════════════
           DESIGN13 WRAPPER
        ══════════════════════════════ */
        .design13-wrapper {
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            font-family: 'Montserrat', sans-serif;
        }

        /* ── Card: 4:5 ratio ── */
        .design13-wrapper .design13-card {
            width: 100%;
            aspect-ratio: 4 / 5;
            max-width: 400px;
            position: relative;
            overflow: hidden;
            flex-shrink: 0;
            box-sizing: border-box;
            background: #fdfaf4;
            border-radius: 8px;
            box-shadow: 0 24px 80px rgba(0,0,0,0.55);
            display: flex;
            flex-direction: column;
            container-type: inline-size;
        }

        /* ── Left accent bar ── */
        .design13-wrapper .design13-card::before {
            content: '';
            position: absolute;
            left: 0; top: 0; bottom: 0;
            width: 2.5%;
            background: {{ $themeColor }};
            z-index: 20;
        }

        /* ── Warm paper texture overlay ── */
        .design13-wrapper .design13-card::after {
            content: '';
            position: absolute;
            inset: 0;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='300'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.72' numOctaves='4' stitchTiles='stitch'/%3E%3CfeColorMatrix type='saturate' values='0'/%3E%3C/filter%3E%3Crect width='300' height='300' filter='url(%23n)' opacity='0.055'/%3E%3C/svg%3E");
            background-size: 300px 300px;
            z-index: 1;
            pointer-events: none;
        }

        /* ── BG circle behind food ── */
        .design13-wrapper .design13-bg-circle {
            position: absolute;
            top: -8%;
            right: -15%;
            width: 75%;
            aspect-ratio: 1 / 1;
            background: #f0e8d8;
            border-radius: 50%;
            z-index: 2;
        }

        /* ── SVG chevron arrow pattern ── */
        .design13-wrapper .design13-arrow-pattern {
            position: absolute;
            left: 2.5%;
            top: 0;
            width: 40%;
            height: 100%;
            z-index: 3;
        }

        /* ── Food image ── */
        .design13-wrapper .design13-food-wrap {
            position: absolute;
            right: -10%;
            top: -2%;
            width: 75%;
            aspect-ratio: 1 / 1;
            z-index: 8;
        }
        .design13-wrapper .design13-food-wrap img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 50%;
            border: 6px solid #fff;
            box-shadow: 0 12px 40px rgba(0,0,0,0.22);
            display: block;
        }

        /* ══════════════════════════════
           TOP CONTENT AREA
        ══════════════════════════════ */
        .design13-wrapper .design13-top-area {
            position: relative;
            top: 41%;
            flex: 1;
            z-index: 5;
            padding: 7% 5.5% 0 7%;
            display: flex;
            flex-direction: column;
            gap: 0;
        }

        .design13-wrapper .design13-brand-tag {
            font-family: 'Barlow Condensed', sans-serif;
            font-weight: 700;
            font-size: 2.8cqw;
            letter-spacing: 3.5px;
            text-transform: uppercase;
            color: {{ $themeColor }};
            margin-bottom: 2%;
            display: flex;
            align-items: center;
            gap: 7px;
        }
        .design13-wrapper .design13-brand-tag::before {
            content: '';
            display: inline-block;
            width: 20px;
            height: 2px;
            background: {{ $themeColor }};
            border-radius: 2px;
            flex-shrink: 0;
        }

        .design13-wrapper .design13-headline {
            font-family: 'Anton', sans-serif;
            font-size: 13.5cqw;
            line-height: 0.9;
            color: #1a1a1a;
            text-transform: uppercase;
            margin-bottom: 3.5%;
            max-width: 50%;
        }
        .design13-wrapper .design13-headline .design13-accent {
            color: {{ $themeColor }};
        }

        .design13-wrapper .design13-description {
            font-size: 2.6cqw;
            font-family: 'Montserrat', sans-serif;
            color: #776654;
            line-height: 1.6;
            margin-bottom: 5%;
            font-weight: 400;
            max-width: 52%;
        }

        /* ══════════════════════════════
           DIVIDER
        ══════════════════════════════ */
        .design13-wrapper .design13-divider {
            position: relative;
            z-index: 10;
            height: 1px;
            background: rgba(10,61,1,0.15);
            margin: 0 2.5% 0 7%;
        }

        /* ══════════════════════════════
           FOOTER STRIP
        ══════════════════════════════ */
        .design13-wrapper .design13-footer {
            background: #2c2e2b;
            padding: 3.25% 4.5% 3.25% 7%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            z-index: 20;
            flex-shrink: 0;
            gap: 2.5%;
        }

        /* ── Logo ── */
        .design13-wrapper .design13-footer-logo {
            width: 10cqw;
            height: 10cqw;
            border-radius: 50%;
            border: 2px solid rgba(201,58,26,0.6);
            overflow: hidden;
            flex-shrink: 0;
            background: #2a1a10;
        }
        .design13-wrapper .design13-footer-logo img {
            width: 100%; height: 100%;
            object-fit: cover;
            display: block;
        }

        /* ── Info ── */
        .design13-wrapper .design13-footer-info {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 0.5%;
        }
        .design13-wrapper .design13-footer-name {
            font-family: 'Anton', sans-serif;
            font-size: 3.5cqw;
            letter-spacing: 2px;
            color: #fff;
            text-transform: uppercase;
            line-height: 1;
        }
        .design13-wrapper .design13-footer-divider {
            width: 100%;
            height: 0.5px;
            background: rgba(255,255,255,0.12);
            margin: 0.75% 0;
        }
        .design13-wrapper .design13-footer-contact {
            display: flex;
            flex-direction: column;
            gap: 0.4%;
        }
        .design13-wrapper .design13-footer-row {
            display: flex;
            align-items: center;
            gap: 5px;
        }
        .design13-wrapper .design13-footer-dot {
            width: 4px; height: 4px;
            border-radius: 50%;
            background: {{ $themeColor }};
            flex-shrink: 0;
        }
        .design13-wrapper .design13-footer-text {
            font-family: 'Barlow Condensed', sans-serif;
            font-weight: 600;
            font-size: 2.4cqw;
            color: rgba(255,255,255,0.65);
            letter-spacing: 0.3px;
        }

        /* ── Website ── */
        .design13-wrapper .design13-footer-website {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            gap: 1%;
            flex-shrink: 0;
        }
        .design13-wrapper .design13-website-label {
            font-family: 'Barlow Condensed', sans-serif;
            font-weight: 700;
            font-size: 1.8cqw;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            color: rgba(255,255,255,0.4);
        }
        .design13-wrapper .design13-website-url {
            font-family: 'Barlow Condensed', sans-serif;
            font-weight: 700;
            font-size: 2.5cqw;
            color: {{ $themeColor }};
            letter-spacing: 0.5px;
            text-decoration: underline;
            text-underline-offset: 2px;
            text-decoration-color: rgba(87,144,56,0.45);
        }

        /* ── Download button ── */
        .design13-wrapper .design13-download-btn {
            margin-top: 10px;
            background: {{ $themeColor }};
            color: #fff;
            border: none;
            padding: 8px 20px;
            font-size: 12px;
            font-weight: 700;
            border-radius: 30px;
            cursor: pointer;
            font-family: 'Anton', sans-serif;
            display: flex;
            align-items: center;
            gap: 8px;
            letter-spacing: 2px;
            text-transform: uppercase;
            transition: opacity 0.2s, transform 0.15s;
            box-shadow: 0 4px 20px rgba(0,0,0,0.25);
        }
        .design13-wrapper .design13-download-btn:hover   { opacity: 0.88; transform: translateY(-2px); }
        .design13-wrapper .design13-download-btn:active  { transform: translateY(0); }
        .design13-wrapper .design13-download-btn:disabled { opacity: 0.55; cursor: not-allowed; transform: none; }
    </style>

    <div class="design13-wrapper">

        <div class="design13-card" id="posterCard13">

            {{-- BG circle --}}
            <div class="design13-bg-circle"></div>

            {{-- SVG Chevron Arrow Pattern --}}
            <svg class="design13-arrow-pattern" viewBox="0 0 160 520" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice">
                <defs>
                    <pattern id="arrowPat13" x="0" y="0" width="32" height="28" patternUnits="userSpaceOnUse">
                        <polyline points="4,4 16,14 4,24"
                            fill="none" stroke="{{ $themeColor }}" stroke-width="1.8"
                            stroke-linecap="round" stroke-linejoin="round" opacity="0.18"/>
                        <polyline points="16,4 28,14 16,24"
                            fill="none" stroke="{{ $themeColor }}" stroke-width="1.8"
                            stroke-linecap="round" stroke-linejoin="round" opacity="0.10"/>
                    </pattern>
                    <linearGradient id="fadeMask13" x1="0" y1="0" x2="1" y2="0">
                        <stop offset="0%"   stop-color="white" stop-opacity="1"/>
                        <stop offset="75%"  stop-color="white" stop-opacity="0.5"/>
                        <stop offset="100%" stop-color="white" stop-opacity="0"/>
                    </linearGradient>
                    <mask id="fadeOut13">
                        <rect width="160" height="520" fill="url(#fadeMask13)"/>
                    </mask>
                </defs>
                <rect width="160" height="520" fill="url(#arrowPat13)" mask="url(#fadeOut13)"/>
            </svg>

            {{-- Food image --}}
            <div class="design13-food-wrap">
                @if(isset($menuImageUrl) && $menuImageUrl)
                    <img src="{{ $menuImageUrl }}" alt="{{ @$menu['name'] ?? 'Menu Item' }}" crossorigin="anonymous">
                @else
                    <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?w=600&q=90" alt="Menu Item" crossorigin="anonymous">
                @endif
            </div>

            {{-- Left content --}}
            <div class="design13-top-area">
                <div class="design13-brand-tag">{{ @$menu['tag'] ?? 'Fan Favorite' }}</div>

                <h1 class="design13-headline">
                    Taste <br>
                    <span class="design13-accent">Perfection</span>
                </h1>

                <p class="design13-description">
                    {{ @$menu['description'] ?? 'Farm-fresh ingredients — crafted with love.' }}
                </p>
            </div>

            {{-- Divider --}}
            <div class="design13-divider"></div>

            {{-- Footer strip --}}
            <div class="design13-footer">

                <div class="design13-footer-logo">
                    @if(isset($logourl) && $logourl)
                        <img src="{{ $logourl }}" alt="logo" crossorigin="anonymous">
                    @else
                        <img src="https://static.vecteezy.com/system/resources/thumbnails/014/664/003/small_2x/cafe-and-resto-logo-vector.jpg" alt="logo" crossorigin="anonymous">
                    @endif
                </div>

                <div class="design13-footer-info">
                    <div class="design13-footer-name">{{ @user()->name ?? ' ' }}</div>
                    <div class="design13-footer-divider"></div>
                    <div class="design13-footer-contact">
                        <div class="design13-footer-row">
                            <div class="design13-footer-dot"></div>
                            <div class="design13-footer-text">{{ @user()->phone ?? ' ' }}</div>
                        </div>
                        <div class="design13-footer-row">
                            <div class="design13-footer-dot"></div>
                            <div class="design13-footer-text">{{ @user()->address ?? ' ' }}</div>
                        </div>
                    </div>
                </div>

                <div class="design13-footer-website">
                    <div class="design13-website-label">Visit Us</div>
                    <div class="design13-website-url">{{ @user()->website_domain ?? ' ' }}</div>
                </div>

            </div>{{-- /.design13-footer --}}

        </div>{{-- /.design13-card --}}

        {{-- Download button --}}
        {{-- <button type="button" class="design13-download-btn" onclick="downloadPoster13()">
            <i class="bi bi-download"></i>
            Download Poster
        </button> --}}

    </div>{{-- /.design13-wrapper --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

    <script>
        function downloadPoster13() {
            var card   = document.getElementById('posterCard13');
            var button = document.querySelector('.design13-download-btn');

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
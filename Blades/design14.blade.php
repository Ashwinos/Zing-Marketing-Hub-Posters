<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Playfair+Display:ital,wght@1,700&family=Barlow+Condensed:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        /* ══════════════════════════════
           DESIGN14 WRAPPER
        ══════════════════════════════ */
        .design14-wrapper {
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            font-family: sans-serif;
        }

        /* ── Card: 4:5 ratio ── */
        .design14-wrapper .design14-card {
            width: 100%;
            aspect-ratio: 4 / 5;
            max-width: 360px;
            position: relative;
            overflow: hidden;
            flex-shrink: 0;
            box-sizing: border-box;
            background: #f5f0ea;
            border-radius: 6px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.35);
            display: flex;
            flex-direction: column;
            container-type: inline-size;
        }

        /* ══════════════════════════════
           BRAND HEADER – top-left pill
        ══════════════════════════════ */
        .design14-wrapper .design14-brand-header {
            position: absolute;
            top: 4.5%;
            left: 5.5%;
            display: flex;
            align-items: center;
            gap: 3px;
            z-index: 10;
            background: #3633339c;
            padding: 0 2% 0 0;
            border-radius: 27px;
        }
        .design14-wrapper .design14-brand-header img {
            width: 7cqw;
            height: 7cqw;
            object-fit: contain;
            border-radius: 50%;
        }
        .design14-wrapper .design14-brand-name {
            font-family: 'Barlow Condensed', sans-serif;
            font-weight: 600;
            font-size: 2.5cqw;
            letter-spacing: 3px;
            text-transform: uppercase;
            color: #ffffff;
        }

        /* ══════════════════════════════
           MIDDLE SECTION
        ══════════════════════════════ */
        .design14-wrapper .design14-middle {
            position: relative;
            flex: 1;
            display: flex;
            align-items: stretch;
        }

        /* ── Food image column ── */
        .design14-wrapper .design14-food-col {
            position: absolute;
            left: 0; top: 0; bottom: 0;
            width: 52%;
            z-index: 4;
            overflow: hidden;
        }
        .design14-wrapper .design14-food-col img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            clip-path: ellipse(90% 100% at 10% 50%);
        }

        /* ── Fade overlay ── */
        .design14-wrapper .design14-overlay-tint {
            position: absolute;
            left: 40%; top: 0; right: 0; bottom: 0;
            background: linear-gradient(to right, transparent 0%, #f5f0ea 30%);
            z-index: 3;
            pointer-events: none;
        }

        /* ── Headline column ── */
        .design14-wrapper .design14-headline-col {
            position: absolute;
            right: -17.5%;
            top: 0; bottom: 0;
            width: 60%;
            z-index: 5;
            display: flex;
            align-items: center;
            justify-content: flex-end;
            padding-right: 4.5%;
        }
        .design14-wrapper .design14-headline {
            font-family: 'Anton', sans-serif;
            font-size: 18cqw;
            line-height: 0.91;
            color: {{ $themeColor }};
            text-transform: uppercase;
            text-align: right;
            letter-spacing: -1px;
            text-shadow: 3px 3px 0 rgba(0,0,0,0.08);
            transform: rotate(90deg);
        }

        /* ══════════════════════════════
           BOTTOM CONTENT
        ══════════════════════════════ */
        .design14-wrapper .design14-bottom {
            background: #f5f0ea;
            padding: 3% 5.5% 3.5%;
            z-index: 10;
            text-align: center;
            border-top: 1.5px solid rgba(180,140,80,0.2);
        }
        .design14-wrapper .design14-price {
            font-family: 'Playfair Display', serif;
            font-style: italic;
            font-weight: 700;
            font-size: 7cqw;
            color: {{ $themeColor }};
            margin-bottom: 1%;
        }
        .design14-wrapper .design14-tagline {
            font-family: 'Barlow Condensed', sans-serif;
            font-style: italic;
            font-size: 2.8cqw;
            color: #7a6a58;
            letter-spacing: 0.3px;
            margin-bottom: 2.5%;
            line-height: 1.4;
        }

        /* ══════════════════════════════
           FOOTER BAR
        ══════════════════════════════ */
        .design14-wrapper .design14-footer {
            background: #2b1f0e;
            padding: 1% 5.5%;
            z-index: 10;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 2.5%;
            flex-shrink: 0;
        }
        .design14-wrapper .design14-footer-item {
            display: flex;
            align-items: center;
            gap: 6px;
            color: #f5f0ea;
            font-family: 'Barlow Condensed', sans-serif;
            font-size: 2.5cqw;
            letter-spacing: 0.5px;
        }
        .design14-wrapper .design14-footer-icon {
            width: 3cqw;
            height: 3cqw;
            fill: {{ $themeColor }};
            flex-shrink: 0;
        }
        .design14-wrapper .design14-footer-divider {
            width: 1px;
            height: 22px;
            background: rgba(245,240,234,0.2);
            flex-shrink: 0;
        }

        /* ── Download button ── */
        .design14-wrapper .design14-download-btn {
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
        .design14-wrapper .design14-download-btn:hover   { opacity: 0.88; transform: translateY(-2px); }
        .design14-wrapper .design14-download-btn:active  { transform: translateY(0); }
        .design14-wrapper .design14-download-btn:disabled { opacity: 0.55; cursor: not-allowed; transform: none; }
    </style>

    <div class="design14-wrapper">

        <div class="design14-card" id="posterCard14">

            {{-- Brand header pill --}}
            <div class="design14-brand-header">
                @if(isset($logourl) && $logourl)
                    <img src="{{ $logourl }}" alt="logo" crossorigin="anonymous">
                @else
                    <img src="https://static.vecteezy.com/system/resources/thumbnails/014/664/003/small_2x/cafe-and-resto-logo-vector.jpg" alt="logo" crossorigin="anonymous">
                @endif
                <div class="design14-brand-name">{{ @user()->name ?? ' ' }}</div>
            </div>

            {{-- Middle section --}}
            <div class="design14-middle">

                {{-- Food image --}}
                <div class="design14-food-col">
                    @if(isset($menuImageUrl) && $menuImageUrl)
                        <img src="{{ $menuImageUrl }}" alt="{{ @$menu['name'] ?? 'Menu Item' }}" crossorigin="anonymous">
                    @else
                        <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?w=600&q=85" alt="Menu Item" crossorigin="anonymous">
                    @endif
                </div>

                {{-- Fade tint --}}
                <div class="design14-overlay-tint"></div>

                {{-- Rotated headline --}}
                <div class="design14-headline-col">
                    <h1 class="design14-headline">{{ @$menu['headline_line1'] ?? 'Deeply' }}<br>{{ @$menu['headline_line2'] ?? 'Satisfying' }}</h1>
                </div>

            </div>{{-- /.design14-middle --}}

            {{-- Bottom content --}}
            <div class="design14-bottom">
                <div class="design14-price">{{ @$menu['name'] ?? 'Signature Dish' }}</div>
                <div class="design14-tagline">{{ @$menu['description'] ?? 'Delicious food that makes you feel good from the inside out.' }}</div>
            </div>

            {{-- Footer bar --}}
            <div class="design14-footer">

                <div class="design14-footer-item">
                    <svg class="design14-footer-icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm6.93 6h-2.95c-.32-1.25-.82-2.43-1.46-3.47A8.03 8.03 0 0 1 18.93 8zM12 4c.83 1.2 1.48 2.57 1.87 4h-3.74C10.52 6.57 11.17 5.2 12 4zM4.26 14a7.93 7.93 0 0 1 0-4h3.08a16.6 16.6 0 0 0 0 4H4.26zm.81 2h2.95c.32 1.25.82 2.43 1.46 3.47A8.03 8.03 0 0 1 5.07 16zM8.02 8H5.07a8.03 8.03 0 0 1 4.41-3.47C8.84 5.57 8.34 6.75 8.02 8zM12 20c-.83-1.2-1.48-2.57-1.87-4h3.74c-.39 1.43-1.04 2.8-1.87 4zm2.3-6H9.7a14.6 14.6 0 0 1 0-4h4.6a14.6 14.6 0 0 1 0 4zm.22 5.47c.64-1.04 1.14-2.22 1.46-3.47h2.95a8.03 8.03 0 0 1-4.41 3.47zM16.66 14a16.6 16.6 0 0 0 0-4h3.08a7.93 7.93 0 0 1 0 4h-3.08z"/>
                    </svg>
                    <span>{{ @user()->website_domain ?? ' ' }}</span>
                </div>

                <div class="design14-footer-divider"></div>

                <div class="design14-footer-item">
                    <svg class="design14-footer-icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1C10.33 21 3 13.67 3 4c0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.24 1.02l-2.21 2.2z"/>
                    </svg>
                    <span>{{ @user()->phone ?? ' ' }}</span>
                </div>

            </div>{{-- /.design14-footer --}}

        </div>{{-- /.design14-card --}}

        {{-- Download button --}}
        {{-- <button type="button" class="design14-download-btn" onclick="downloadPoster14()">
            <i class="bi bi-download"></i>
            Download Poster
        </button> --}}

    </div>{{-- /.design14-wrapper --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

    <script>
        function downloadPoster14() {
            var card   = document.getElementById('posterCard14');
            var button = document.querySelector('.design14-download-btn');

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
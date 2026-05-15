<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=DM+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        /* ══════════════════════════════
           DESIGN15 WRAPPER
        ══════════════════════════════ */
        .design15-wrapper {
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            font-family: 'DM Sans', sans-serif;
        }

        /* ── Card: 4:5 ratio ── */
        .design15-wrapper .design15-card {
            width: 100%;
            aspect-ratio: 4 / 5;
            max-width: 340px;
            position: relative;
            overflow: hidden;
            flex-shrink: 0;
            box-sizing: border-box;
            background: #f0ece6;
            border-radius: 12px;
            box-shadow: 0 16px 50px rgba(0,0,0,0.22);
            container-type: inline-size;
        }

        /* ── Faded BG collage ── */
        .design15-wrapper .design15-bg-collage {
            position: absolute;
            inset: 0;
            z-index: 0;
            overflow: hidden;
        }
        .design15-wrapper .design15-bg-collage img {
            width: 100%; height: 100%;
            object-fit: cover;
            opacity: 0.13;
            filter: grayscale(30%);
        }

        /* ── Dot patterns ── */
        .design15-wrapper .design15-dots {
            position: absolute;
            z-index: 1;
            display: grid;
            grid-template-columns: repeat(4, 6px);
            gap: 5px;
            pointer-events: none;
        }
        .design15-wrapper .design15-dots span {
            width: 4px; height: 4px;
            background: rgba(0,0,0,0.15);
            border-radius: 50%;
            display: block;
        }
        .design15-wrapper .design15-dots.tl { top: 13%; left: 4%; }
        .design15-wrapper .design15-dots.tr { top: 13%; right: 4%; }
        .design15-wrapper .design15-dots.bl { bottom: 17%; left: 4%; }
        .design15-wrapper .design15-dots.br { bottom: 17%; right: 4%; }

        /* ── Brand name ── */
        .design15-wrapper .design15-brand {
            position: absolute;
            top: 3%;
            left: 0; right: 0;
            text-align: center;
            font-size: 2cqw;
            font-weight: 500;
            letter-spacing: 1.5px;
            color: #444;
            z-index: 10;
            text-transform: uppercase;
        }

        /* ── Arch photo frame ── */
        .design15-wrapper .design15-arch-wrap {
            position: absolute;
            top: 8%;
            left: 50%;
            transform: translateX(-50%);
            width: 64%;
            height: 54%;
            z-index: 6;
            border-radius: 32% 32% 0 0 / 50% 50% 0 0;
            overflow: hidden;
            border: 4px solid #1a1a1a;
            background: #1a1a1a;
        }
        .design15-wrapper .design15-arch-wrap img {
            width: 100%; height: 100%;
            object-fit: cover;
            object-position: center 30%;
            display: block;
        }

        /* ── Dark info card ── */
        .design15-wrapper .design15-info-card {
            position: absolute;
            bottom: 11%;
            left: 5%; right: 5%;
            background: #1a1a1a;
            border-radius: 14px;
            padding: 4.5% 5% 4%;
            z-index: 7;
        }

        /* ── Logo circle (top-right of card) ── */
        .design15-wrapper .design15-logo-tag {
            position: absolute;
            top: -9%;
            right: 5%;
            width: 13cqw;
            height: 13cqw;
            background: #f0ece6;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
            border: 2px solid #1a1a1a;
            overflow: hidden;
        }
        .design15-wrapper .design15-logo-tag img {
            width: 100%; height: 100%;
            object-fit: contain;
        }

        .design15-wrapper .design15-dish-name {
            font-family: 'Anton', sans-serif;
            font-size: 6.5cqw;
            color: #ffffff;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            margin-bottom: 2%;
            padding-right: 22%;
            line-height: 1.1;
        }
        .design15-wrapper .design15-divider {
            height: 1px;
            background: rgba(255,255,255,0.15);
            margin-bottom: 2.5%;
        }
        .design15-wrapper .design15-dish-desc {
            font-size: 2.6cqw;
            color: rgba(255,255,255,0.65);
            line-height: 1.6;
            margin-bottom: 3%;
            max-width: 75%;
        }
        .design15-wrapper .design15-badge {
            font-size: 2cqw;
            color: #f5a623;
            font-weight: 800;
            text-transform: uppercase;
        }

        /* ── Footer ── */
        .design15-wrapper .design15-footer {
            position: absolute;
            bottom: 0; left: 6%; right: 6%;
            height: 10%;
            background: #f0ece6;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 7%;
            z-index: 8;
            border-top: 1px solid rgba(0,0,0,0.08);
        }
        .design15-wrapper .design15-f-item {
            display: flex;
            align-items: center;
            gap: 5px;
            font-size: 2.4cqw;
            color: #333;
            font-weight: 500;
        }
        .design15-wrapper .design15-f-dot {
            width: 4.5cqw;
            height: 4.5cqw;
            border-radius: 50%;
            background: #1a1a1a;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }
        .design15-wrapper .design15-f-dot svg {
            width: 2.5cqw; height: 2.5cqw;
            fill: #fff;
        }

        /* ── Download button ── */
        .design15-wrapper .design15-download-btn {
            margin-top: 10px;
            background: #1a1a1a;
            color: #fff;
            border: none;
            padding: 8px 20px;
            font-size: 12px;
            font-weight: 700;
            border-radius: 32px;
            cursor: pointer;
            font-family: 'DM Sans', sans-serif;
            display: flex;
            align-items: center;
            gap: 8px;
            letter-spacing: 1px;
            transition: opacity 0.2s, transform 0.15s;
            box-shadow: 0 4px 20px rgba(0,0,0,0.3);
        }
        .design15-wrapper .design15-download-btn:hover   { opacity: 0.85; transform: translateY(-2px); }
        .design15-wrapper .design15-download-btn:active  { transform: translateY(0); }
        .design15-wrapper .design15-download-btn:disabled { opacity: 0.5; cursor: not-allowed; transform: none; }
    </style>

    <div class="design15-wrapper">

        <div class="design15-card" id="posterCard15">

            {{-- Faded BG collage --}}
            <div class="design15-bg-collage">
                @if(isset($menuImageUrl) && $menuImageUrl)
                    <img src="{{ $menuImageUrl }}" alt="" crossorigin="anonymous">
                @else
                    <img src="https://images.unsplash.com/photo-1547592180-85f173990554?w=700&q=60" alt="" crossorigin="anonymous">
                @endif
            </div>

            {{-- Dot patterns --}}
            <div class="design15-dots tl">
                @for($i = 0; $i < 16; $i++)<span></span>@endfor
            </div>
            <div class="design15-dots tr">
                @for($i = 0; $i < 16; $i++)<span></span>@endfor
            </div>
            <div class="design15-dots bl">
                @for($i = 0; $i < 16; $i++)<span></span>@endfor
            </div>
            <div class="design15-dots br">
                @for($i = 0; $i < 16; $i++)<span></span>@endfor
            </div>

            {{-- Brand name --}}
            <div class="design15-brand">{{ @user()->name ?? ' ' }}</div>

            {{-- Arch food photo --}}
            <div class="design15-arch-wrap">
                @if(isset($menuImageUrl) && $menuImageUrl)
                    <img src="{{ $menuImageUrl }}" alt="{{ @$menu['name'] ?? 'Menu Item' }}" crossorigin="anonymous">
                @else
                    <img src="https://images.unsplash.com/photo-1567188040759-fb8a883dc6d8?w=500&q=85" alt="Menu Item" crossorigin="anonymous">
                @endif
            </div>

            {{-- Info card --}}
            <div class="design15-info-card">

                {{-- Logo circle --}}
                <div class="design15-logo-tag">
                    @if(isset($logourl) && $logourl)
                        <img src="{{ $logourl }}" alt="logo" crossorigin="anonymous">
                    @else
                        <img src="https://static.vecteezy.com/system/resources/thumbnails/014/664/003/small_2x/cafe-and-resto-logo-vector.jpg" alt="logo" crossorigin="anonymous">
                    @endif
                </div>

                <div class="design15-dish-name">{{ @$menu['name'] ?? 'Signature Dish' }}</div>
                <div class="design15-divider"></div>
                <div class="design15-dish-desc">{{ @$menu['description'] ?? 'A delicious dish made with the finest ingredients and aromatic spices.' }}</div>
                <div class="design15-badge">{{ @$menu['tag'] ?? 'Fan Favorite ★' }}</div>

            </div>{{-- /.design15-info-card --}}

            {{-- Footer --}}
            <div class="design15-footer">

                <div class="design15-f-item">
                    <div class="design15-f-dot">
                        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm6.93 6h-2.95c-.32-1.25-.82-2.43-1.46-3.47A8.03 8.03 0 0 1 18.93 8zM12 4c.83 1.2 1.48 2.57 1.87 4h-3.74C10.52 6.57 11.17 5.2 12 4zM4.26 14a7.93 7.93 0 0 1 0-4h3.08a16.6 16.6 0 0 0 0 4H4.26zm.81 2h2.95c.32 1.25.82 2.43 1.46 3.47A8.03 8.03 0 0 1 5.07 16zM8.02 8H5.07a8.03 8.03 0 0 1 4.41-3.47C8.84 5.57 8.34 6.75 8.02 8zM12 20c-.83-1.2-1.48-2.57-1.87-4h3.74c-.39 1.43-1.04 2.8-1.87 4zm2.3-6H9.7a14.6 14.6 0 0 1 0-4h4.6a14.6 14.6 0 0 1 0 4zm.22 5.47c.64-1.04 1.14-2.22 1.46-3.47h2.95a8.03 8.03 0 0 1-4.41 3.47zM16.66 14a16.6 16.6 0 0 0 0-4h3.08a7.93 7.93 0 0 1 0 4h-3.08z"/>
                        </svg>
                    </div>
                    <span>{{ @user()->website_domain ?? ' ' }}</span>
                </div>

                <div class="design15-f-item">
                    <div class="design15-f-dot">
                        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1C10.33 21 3 13.67 3 4c0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.24 1.02l-2.21 2.2z"/>
                        </svg>
                    </div>
                    <span>{{ @user()->phone ?? ' ' }}</span>
                </div>

            </div>{{-- /.design15-footer --}}

        </div>{{-- /.design15-card --}}

        {{-- Download button --}}
        {{-- <button type="button" class="design15-download-btn" onclick="downloadPoster15()">
            <i class="bi bi-download"></i>
            Download Poster
        </button> --}}

    </div>{{-- /.design15-wrapper --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

    <script>
        function downloadPoster15() {
            var card   = document.getElementById('posterCard15');
            var button = document.querySelector('.design15-download-btn');

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
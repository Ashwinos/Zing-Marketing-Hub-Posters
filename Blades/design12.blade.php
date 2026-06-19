<link
    href="https://fonts.googleapis.com/css2?family=Anton&family=Playfair+Display:ital,wght@1,700&family=Barlow+Condensed:wght@400;600;700;800;900&family=Lato:ital,wght@0,400;0,700;1,400;1,700&display=swap"
    rel="stylesheet">

<style>
    .design12-wrapper {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        font-family: 'Barlow Condensed', sans-serif;
    }

    /* ── Card: Instagram 4:5 ratio ── */
    .design12-wrapper .design12-card {
        width: 100%;
        aspect-ratio: 4 / 5;
        max-width: 340px;
        background: #f5f0e6;
        overflow: hidden;
        position: relative;
        box-sizing: border-box;
        box-shadow: 0 12px 50px rgba(0, 0, 0, 0.32);
        display: flex;
        flex-direction: column;
    }

    /* ══════════════════════════════════════
       TOP SECTION  (main content area)
    ══════════════════════════════════════ */
    .design12-wrapper .d12-top-section {
        position: relative;
        flex: 1;
        display: flex;
        overflow: hidden;
    }

    /* ── RED VERTICAL STRIPE with drips ── */
    .design12-wrapper .d12-stripe {
        position: absolute;
        top: 0;
        left: 78px;
        width: 64px;
        bottom: -32px;
        background: {{ $themeColor ?? '#c93a1a' }} ;
        z-index: 2;
    }

    .design12-wrapper .d12-stripe-drips-svg {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        overflow: visible;
        z-index: 3;
    }

    /* ── PIZZA / FOOD IMAGE ── */
    .design12-wrapper .d12-pizza-wrap {
        position: absolute;
        top: 15%;
        left: 8%;
        width: 84%;
        height: 55%;
        overflow: hidden;
        z-index: 6;
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.42);
        border: 6px solid #fff;
        flex-shrink: 0;
    }

    .design12-wrapper .d12-pizza-wrap img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    /* ── RIGHT CONTENT ── */
    .design12-wrapper .d12-right-col {
        position: absolute;
        top: -64px;
        bottom: 0;
        left: 126px;
        right: 0;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        z-index: 5;
    }

    /* heading block */
    .design12-wrapper .d12-heading-block {
        margin-bottom: 2px;
    }

    .design12-wrapper .d12-heading-pizza {
        font-family: 'Playfair Display', serif;
        font-style: italic;
        font-size: 57px;
        color: #cbcbcd;
        line-height: 0.9;
        transform: rotate(-33deg);
        opacity: 70%;
    }

    /* badge */
    .design12-wrapper .d12-badge-wrap {
        position: relative;
        bottom: 251px;
        left: 0;
    }

    .design12-wrapper .d12-badge {
        position: relative;
        color: {{ $themeColor ?? '#c93a1a' }} !important;
        border-radius: 14px;
        padding: 8px 16px 10px;
        text-align: center;
        min-width: 100px;
    }

    .design12-wrapper .d12-badge-label {
        font-family: 'Barlow Condensed', sans-serif;
        font-weight: 800;
        font-size: 10.5px;
        letter-spacing: 1.5px;
        text-transform: uppercase;
        color: {{ $themeColor ?? '#c93a1a' }};
        position: relative;
        z-index: 2;
        display: block;
    }

    .design12-wrapper .d12-badge-value {
        font-family: 'Anton', sans-serif;
        font-size: 40px;
        color: {{ $themeColor ?? '#c93a1a' }};
        line-height: 1.05;
        position: relative;
        z-index: 2;
        white-space: nowrap;
        display: block;
        text-transform: uppercase;
    }

    /* ══════════════════════════════════════
       RESTAURANT DETAILS  –  bottom strip
    ══════════════════════════════════════ */
    .design12-wrapper .d12-restaurant-strip {
        position: relative;
        background:{{ $themeColor ?? '#c93a1a' }};
        padding: 10px 14px 10px 14px;
        display: flex;
        align-items: center;
        gap: 10px;
        z-index: 10;
        flex-shrink: 0;
    }

    /* Logo */
    .design12-wrapper .d12-resto-logo {
        width: auto;
        height: 2rem;
        /* border-radius: 50%; */
        overflow: hidden;
        border: 2.5px solid rgba(255, 255, 255, 0.6);
        flex-shrink: 0;
        background: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 10;
        /* padding: 0; */
        position: relative;
        top: 10px;
        left: 24px;
    }

    .design12-wrapper .d12-resto-logo img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        /*border-radius: 50%;*/
    }

    /* Name + divider + contacts */
    .design12-wrapper .d12-resto-info {
        display: flex;
        flex-direction: column;
        justify-content: center;
        gap: 3px;
        flex: 1;
    }

    .design12-wrapper .d12-resto-name {
        font-family: 'Anton', sans-serif;
        font-size: 16px;
        color: #fff;
        letter-spacing: 1.5px;
        text-transform: uppercase;
        line-height: 1;
    }

    .design12-wrapper .d12-resto-divider {
        width: 100%;
        height: 1px;
        background: rgba(255, 255, 255, 0.35);
        margin: 2px 0;
    }

    .design12-wrapper .d12-resto-contacts {
        display: flex;
        flex-direction: column;
        gap: 2px;
    }

    .design12-wrapper .d12-resto-contact-row {
        display: flex;
        align-items: center;
        gap: 5px;
    }

    .design12-wrapper .d12-icon-circle {
        width: 14px;
        height: 14px;
        background: rgba(255, 255, 255, 0.2);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .design12-wrapper .d12-icon-circle svg {
        width: 7px;
        height: 7px;
        fill: #fff;
    }

    .design12-wrapper .d12-resto-contact-text {
        font-family: 'Barlow Condensed', sans-serif;
        font-weight: 600;
        font-size: 8px;
        color: rgba(255, 255, 255, 0.92);
        letter-spacing: 0.5px;
    }

    /* Website on right */
    .design12-wrapper .d12-resto-website {
        display: flex;
        flex-direction: column;
        align-items: flex-end;
        justify-content: center;
        gap: 3px;
        flex-shrink: 0;
    }

    .design12-wrapper .d12-website-label {
        font-family: 'Barlow Condensed', sans-serif;
        font-weight: 700;
        font-size: 8px;
        letter-spacing: 1.5px;
        text-transform: uppercase;
        color: rgba(255, 255, 255, 0.6);
    }

    .design12-wrapper .d12-website-url {
        font-family: 'Barlow Condensed', sans-serif;
        font-weight: 700;
        font-size: 8px;
        color: #fff;
        letter-spacing: 0.5px;
        text-decoration: underline;
        text-underline-offset: 2px;
        text-decoration-color: rgba(255, 255, 255, 0.4);
    }

    /* ── Download button ── */
    .design12-wrapper .d12-download-btn {
        margin-top: 10px;
        background: #c93a1a;
        color: #fff;
        border: none;
        padding: 8px 16px;
        font-size: 12px;
        font-weight: 600;
        border-radius: 6px;
        cursor: pointer;
        font-family: 'Barlow Condensed', sans-serif;
        display: flex;
        align-items: center;
        gap: 8px;
        letter-spacing: 0.04em;
        transition: background 0.2s, transform 0.1s;
        box-shadow: 0 4px 16px rgba(201, 58, 26, 0.4);
    }

    .design12-wrapper .d12-download-btn:hover {
        background: #a82f14;
        transform: translateY(-1px);
    }

    .design12-wrapper .d12-download-btn:active {
        transform: translateY(0);
    }

    .design12-wrapper .d12-download-btn:disabled {
        opacity: 0.7;
        cursor: not-allowed;
        transform: none;
    }
</style>

<div class="design12-wrapper">

    <div class="design12-card" id="posterCard12">

        {{-- ════ TOP MAIN SECTION ════ --}}
        <div class="d12-top-section">

            {{-- Red stripe with SVG drips --}}
            <div class="d12-stripe">
                <svg class="d12-stripe-drips-svg" viewBox="0 0 64 80" preserveAspectRatio="none"
                    xmlns="http://www.w3.org/2000/svg"
                    style="position:absolute;bottom:67px;left:0;width:100%;height:80px;">
                    <path d="M0,0 L64,0 L64,20
                      Q58,20 58,35 Q58,52 52,52 Q46,52 46,35 Q46,20 40,20
                      Q34,20 34,30 Q34,48 28,48 Q22,48 22,30 Q22,20 16,20
                      Q10,20 10,42 Q10,58 4,58 Q0,58 0,42 Z" fill="#f5f0e6" />
                </svg>
            </div>

            <div class="d12-resto-logo">
                @if (isset($logourl) && $logourl)
                    <img src="{{ $logourl }}" alt="logo" crossorigin="anonymous">
                @endif
            </div>

            {{-- Food image --}}
            <div class="d12-pizza-wrap">
                @if (isset($menuImageUrl) && $menuImageUrl)
                    <img src="{{ $menuImageUrl }}" alt="{{ @$menu['name'] ?? 'Menu Item' }}"
                        class="js-poster-menu-image" crossorigin="anonymous">
                
                @endif
            </div>

            {{-- Right content --}}
            <div class="d12-right-col">

                {{-- Heading --}}
                <div class="d12-heading-block">
                    <div class="d12-heading-pizza">DELICIOUS</div>
                    <div class="d12-heading-pizza">DELICIOUS</div>
                    <div class="d12-heading-pizza">DELICIOUS</div>
                    <div class="d12-heading-pizza">DELICIOUS</div>
                    <div class="d12-heading-pizza">DELICIOUS</div>
                    <div class="d12-heading-pizza">DELICIOUS</div>
                    <div class="d12-heading-pizza">DELICIOUS</div>
                    <div class="d12-heading-pizza">DELICIOUS</div>
                    <div class="d12-heading-pizza">DELICIOUS</div>
                    <div class="d12-heading-pizza">DELICIOUS</div>
                    <div class="d12-heading-pizza">DELICIOUS</div>
                </div>

                {{-- Badge --}}
                <div class="d12-badge-wrap">
                    <div class="d12-badge">
                        <span class="d12-badge-label">Hurry Up!!</span>
                        <span class="d12-badge-value">Order Now</span>
                    </div>
                </div>

            </div>{{-- /.d12-right-col --}}
        </div>{{-- /.d12-top-section --}}

        {{-- ════ RESTAURANT DETAILS STRIP ════ --}}
        <div class="d12-restaurant-strip">

            {{-- Logo --}}


            {{-- Name + contacts --}}
            <div class="d12-resto-info">
                <div class="d12-resto-name">{{ @user()->name ?? ' ' }}</div>
                <div class="d12-resto-divider"></div>

                <div class="d12-resto-contacts">

                    @if(!empty(@user()->phone))
                        <div class="d12-resto-contact-row">
                            <div class="d12-icon-circle">
                                <svg viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 1.5 Q2 3 4 5 Q6 7 7.5 8 L8.5 7 Q9 6.5 8.5 6 L7 4.5 Q6.5 4 6 4.5 L5.5 5 Q4.5 4.5 3.5 3 L4 2.5 Q4.5 2 4 1.5 L2.5 0.5 Q2 0 2 1.5Z" />
                                </svg>
                            </div>
                            <div class="d12-resto-contact-text">{{ @user()->phone }}</div>
                        </div>
                    @endif

                    @if(!empty(@user()->address))
                        <div class="d12-resto-contact-row">
                            <div class="d12-icon-circle">
                                <svg viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 0.5 C3 0.5 1.5 2 1.5 3.8 C1.5 6.5 5 9.5 5 9.5 C5 9.5 8.5 6.5 8.5 3.8 C8.5 2 7 0.5 5 0.5Z" />
                                    <circle cx="5" cy="3.8" r="1.2" fill="#c93a1a" />
                                </svg>
                            </div>
                            <div class="d12-resto-contact-text">
                                {{ @user()->address }}
                            </div>
                        </div>
                    @endif

                </div>
            </div>

            {{-- Website --}}
            @if(!empty(@user()->website_domain))
                <div class="d12-resto-website">
                    <div class="d12-website-label">Visit Us</div>
                    <div class="d12-website-url">{{ @user()->website_domain }}</div>
                </div>
            @endif

        </div>{{-- /.d12-restaurant-strip --}}

    </div>{{-- /.design12-card --}}

    {{-- Download button --}}
    {{-- <button type="button" class="d12-download-btn" onclick="downloadDesign12()">
        Download Poster
    </button> --}}

</div>{{-- /.design12-wrapper --}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

<script>
    function downloadDesign12() {
        var card = document.getElementById('posterCard12');
        var button = document.querySelector('.d12-download-btn');

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
            link.download = 'menu-poster-design12.png';
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

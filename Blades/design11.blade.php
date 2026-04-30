<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Pacifico&family=Poppins:wght@300;400;600;700;800;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<style>
    /* ══════════════════════════════
       DESIGN11 WRAPPER
    ══════════════════════════════ */
    .design11-wrapper {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        font-family: 'Poppins', sans-serif;
    }

    /* ── Card: Instagram 4/5 ratio ── */
    .design11-wrapper .design11-card {
        width: 100%;
        aspect-ratio: 4 / 5;
        max-width: 340px;
        position: relative;
        overflow: hidden;
        flex-shrink: 0;
        box-sizing: border-box;
        container-type: inline-size;
    }

    /* ── Deep black gradient background ── */
    .design11-wrapper .design11-bg-base {
        position: absolute;
        inset: 0;
        background: linear-gradient(160deg, #0a0a0a 0%, #111111 30%, #1a1a1a 60%, #080808 100%);
        z-index: 0;
    }

    /* ── Radial glow center ── */
    .design11-wrapper .design11-bg-glow-center {
        position: absolute;
        top: 30%; left: 50%;
        transform: translate(-50%, -50%);
        width: 100%; height: 100%;
        background: radial-gradient(circle, {{ $themeColor }}38 0%, {{ $themeColor }}1f 40%, transparent 70%);
        z-index: 1;
        border-radius: 50%;
    }

    /* ── Top glow ── */
    .design11-wrapper .design11-bg-glow-top {
        position: absolute;
        top: -10%; left: 50%;
        transform: translateX(-50%);
        width: 70%; height: 35%;
        background: radial-gradient(ellipse, {{ $themeColor }}2e 0%, transparent 70%);
        z-index: 1;
    }

    /* ── Outer decorative arc rings ── */
    .design11-wrapper .design11-outer-ring {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -52%);
        width: 103%;
        height: 83%;
        border-radius: 50%;
        border: 1px solid {{ $themeColor }}33;
        z-index: 2;
    }
    .design11-wrapper .design11-outer-ring-2 {
        position: absolute;
        top: 50%; left: 50%;
        transform: translate(-50%, -52%);
        width: 112%; height: 112%;
        border-radius: 50%;
        border: 1px solid {{ $themeColor }}1a;
        z-index: 2;
    }

    /* ── Scattered dots ── */
    .design11-wrapper .design11-dots-layer {
        position: absolute;
        inset: 0;
        z-index: 2;
        pointer-events: none;
    }
    .design11-wrapper .design11-dot {
        position: absolute;
        border-radius: 50%;
        background: {{ $themeColor }}b3;
    }

    /* ── Tech ring SVG ── */
    .design11-wrapper .design11-tech-ring {
        position: absolute;
        top: 50%; left: 50%;
        transform: translate(-50%, -52%);
        width: 99%; height: 99%;
        z-index: 2;
        pointer-events: none;
    }
    .design11-wrapper .design11-tech-ring svg {
        width: 100%; height: 100%;
    }

    /* ── Plate / food image ── */
    .design11-wrapper .design11-plate-wrap {
        position: absolute;
        top: 50%; left: 50%;
        transform: translate(-50%, -54%);
        width: 74%;
        aspect-ratio: 1 / 1;
        z-index: 5;
    }
    .design11-wrapper .design11-plate-circle {
        width: 100%; height: 100%;
        border-radius: 50%;
        overflow: hidden;
        background: #fff;
        box-shadow:
            0 0 0 6px {{ $themeColor }}1a,
            0 0 0 12px {{ $themeColor }}1f,
            0 15px 50px rgba(0,0,0,0.85);
    }
    .design11-wrapper .design11-plate-circle img {
        width: 100%; height: 100%;
        object-fit: cover; display: block;
    }
    .design11-wrapper .design11-plate-shadow {
        position: absolute;
        bottom: -4%; left: 50%;
        transform: translateX(-50%);
        width: 85%; height: 8%;
        background: radial-gradient(ellipse, rgba(0,0,0,0.6) 0%, transparent 70%);
        z-index: 4;
    }

    /* ══════════════════════════════
       HEADER AREA
    ══════════════════════════════ */
    .design11-wrapper .design11-header-area {
        position: absolute;
        bottom: 6%;
        left: 0; right: 0;
        text-align: center;
        z-index: 8;
        padding: 0 6%;
        transform: rotate(-16deg);
    }
    .design11-wrapper .design11-special-text {
        font-family: 'Pacifico', cursive;
        font-size: 55px;
        color: {{ $themeColor }};
        line-height: 0.95;
        display: block;
        letter-spacing: 1px;
        text-shadow: 0 0 30px {{ $themeColor }}80, 2px 2px 0 rgba(0,0,0,0.5);
    }
    .design11-wrapper .design11-food-menu-text {
        font-family: 'Dancing Script', cursive;
        font-size: 33px;
        color: #fff;
        line-height: 1.1;
        display: block;
        letter-spacing: 2px;
        position: relative;
        transform: translateY(-20px);
        left: 23%;
    }

    /* ══════════════════════════════
       RESTAURANT DETAILS – top-left
    ══════════════════════════════ */
    .design11-wrapper .design11-restaurant-details {
        position: absolute;
        top: 2.5%; left: 3.5%;
        z-index: 9;
    }
    .design11-wrapper .design11-restaurant-name {
        font-size: 2.8cqw;
        font-weight: 800;
        color: #fff;
        letter-spacing: 1px;
        text-transform: uppercase;
    }
    .design11-wrapper .design11-restaurant-address {
        font-size: 2cqw;
        font-weight: 400;
        color: #d7d7d7;
        letter-spacing: 1px;
        text-transform: uppercase;
    }

    /* ══════════════════════════════
       LOGO WRAP – top-right
    ══════════════════════════════ */
    .design11-wrapper .design11-logo-wrap {
        position: absolute;
        top: 2.5%; right: 3.5%;
        z-index: 9;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 2%;
        background: rgba(255,255,255,0.06);
        padding: 1.5% 3%;
        border-radius: 30px;
        border: 1px solid {{ $themeColor }}73;
        backdrop-filter: blur(4px);
    }
    .design11-wrapper .design11-top-logo {
        width: 8cqw; height: 8cqw;
        border-radius: 50%;
        object-fit: cover;
        border: 2px solid {{ $themeColor }};
    }

    /* ══════════════════════════════
       FOOTER BAR
    ══════════════════════════════ */
    .design11-wrapper .design11-footer-bar {
        position: absolute;
        bottom: 0; left: 0; right: 0;
        height: 8%;
        background: linear-gradient(90deg, #0a0a0a 0%, #181818 50%, #0a0a0a 100%);
        border-top: 1px solid {{ $themeColor }}40;
        z-index: 8;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 4%;
    }
    .design11-wrapper .design11-footer-contact {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
    }
    .design11-wrapper .design11-footer-contact .design11-fc-label {
        font-size: 1.6cqw;
        color: #aaa;
        text-transform: uppercase;
        letter-spacing: 0.12em;
    }
    .design11-wrapper .design11-footer-contact .design11-fc-value {
        font-size: 2cqw;
        font-weight: 600;
        color: #fff;
        letter-spacing: 0.04em;
    }
    .design11-wrapper .design11-footer-website {
        display: flex;
        flex-direction: column;
        align-items: flex-end;
    }
    .design11-wrapper .design11-footer-website .design11-fw-label {
        font-size: 1.6cqw;
        color: #aaa;
        text-transform: uppercase;
        letter-spacing: 0.12em;
    }
    .design11-wrapper .design11-footer-website .design11-fw-value {
        font-size: 2cqw;
        font-weight: 600;
        color: #fff;
    }

    /* ── Download button ── */
    .design11-wrapper .design11-download-btn {
        margin-top: 10px;
        background: linear-gradient(135deg, {{ $themeColor }} 0%, {{ $themeColor }}aa 100%);
        color: #000;
        border: none;
        padding: 8px 16px;
        font-size: 12px;
        font-weight: 700;
        border-radius: 6px;
        cursor: pointer;
        font-family: 'Poppins', sans-serif;
        display: flex;
        align-items: center;
        gap: 8px;
        letter-spacing: 0.04em;
        transition: opacity 0.2s, transform 0.1s;
        box-shadow: 0 4px 16px {{ $themeColor }}66;
    }
    .design11-wrapper .design11-download-btn:hover   { opacity: 0.92; transform: translateY(-1px); }
    .design11-wrapper .design11-download-btn:active   { transform: translateY(0); }
    .design11-wrapper .design11-download-btn:disabled { opacity: 0.6; cursor: not-allowed; transform: none; }
</style>

<div class="design11-wrapper">

    <div class="design11-card" id="posterCard11">

        {{-- Backgrounds --}}
        <div class="design11-bg-base"></div>
        <div class="design11-bg-glow-center"></div>
        <div class="design11-bg-glow-top"></div>
        <div class="design11-outer-ring"></div>
        <div class="design11-outer-ring-2"></div>

        {{-- SVG Tech Ring --}}
        <div class="design11-tech-ring">
            <svg viewBox="0 0 410 410" xmlns="http://www.w3.org/2000/svg">
                <circle cx="205" cy="205" r="190" fill="none" stroke="{{ $themeColor }}4d" stroke-width="1.5" stroke-dasharray="6 4"/>
                <circle cx="205" cy="205" r="175" fill="none" stroke="{{ $themeColor }}26" stroke-width="1"/>
                <circle cx="205" cy="205" r="155" fill="none" stroke="{{ $themeColor }}1a" stroke-width="0.8"/>

                <g stroke="{{ $themeColor }}80" stroke-width="1.5">
                    <line x1="205" y1="15"  x2="205" y2="25"/>
                    <line x1="205" y1="385" x2="205" y2="395"/>
                    <line x1="15"  y1="205" x2="25"  y2="205"/>
                    <line x1="385" y1="205" x2="395" y2="205"/>
                    <line x1="61"  y1="61"  x2="68"  y2="68"/>
                    <line x1="342" y1="342" x2="349" y2="349"/>
                    <line x1="342" y1="61"  x2="349" y2="68"/>
                    <line x1="61"  y1="342" x2="68"  y2="349"/>
                </g>

                <circle cx="205" cy="15"  r="3" fill="{{ $themeColor }}"/>
                <circle cx="395" cy="205" r="3" fill="{{ $themeColor }}"/>
                <circle cx="15"  cy="205" r="3" fill="{{ $themeColor }}80"/>
                <circle cx="205" cy="395" r="3" fill="{{ $themeColor }}80"/>

                <circle cx="205" cy="205" r="140" fill="rgba(20,15,0,0.25)" stroke="{{ $themeColor }}33" stroke-width="1"/>
            </svg>
        </div>

        {{-- Scattered decorative dots --}}
        <div class="design11-dots-layer">
            <div class="design11-dot" style="width:4px;height:4px;top:15%;left:18%;"></div>
            <div class="design11-dot" style="width:3px;height:3px;top:12%;left:72%;opacity:0.5;"></div>
            <div class="design11-dot" style="width:5px;height:5px;top:22%;right:22%;opacity:0.6;"></div>
            <div class="design11-dot" style="width:3px;height:3px;top:68%;left:8%;opacity:0.5;"></div>
            <div class="design11-dot" style="width:4px;height:4px;top:72%;right:10%;opacity:0.7;"></div>
            <div class="design11-dot" style="width:3px;height:3px;top:40%;left:5%;background:{{ $themeColor }}99;"></div>
            <div class="design11-dot" style="width:3px;height:3px;top:35%;right:5%;background:{{ $themeColor }}99;"></div>
        </div>

        {{-- Restaurant details – top-left --}}
        <div class="design11-restaurant-details">
            <div class="design11-restaurant-name">{{ @user()->name ?? ' ' }}</div>
            <div class="design11-restaurant-address">{{ @user()->address ?? ' ' }}</div>
        </div>

        {{-- Logo – top-right --}}
        <div class="design11-logo-wrap">
            @if(isset($logourl) && $logourl)
                <img src="{{ $logourl }}" alt="logo" class="design11-top-logo" crossorigin="anonymous">
            @else
                <img src="https://static.vecteezy.com/system/resources/thumbnails/014/664/003/small_2x/cafe-and-resto-logo-vector.jpg" alt="logo" class="design11-top-logo" crossorigin="anonymous">
            @endif
        </div>

        {{-- Header text --}}
        <div class="design11-header-area">
            <span class="design11-special-text">Taste </span>
            <span class="design11-food-menu-text">Perfection</span>
        </div>

        {{-- Food plate image --}}
        <div class="design11-plate-wrap">
            <div class="design11-plate-circle">
                @if(isset($menuImageUrl) && $menuImageUrl)
                    <img src="{{ $menuImageUrl }}" alt="{{ @$menu['name'] ?? 'Menu Item' }}" crossorigin="anonymous">
                @else
                    <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?w=600&q=85" crossorigin="anonymous" alt="Menu Item">
                @endif
            </div>
            <div class="design11-plate-shadow"></div>
        </div>

        {{-- Footer bar --}}
        <div class="design11-footer-bar">
            <div class="design11-footer-contact">
                <div class="design11-fc-label">Contact Us</div>
                <div class="design11-fc-value">{{ @user()->phone ?? ' ' }}</div>
            </div>
            <div class="design11-footer-website">
                <div class="design11-fw-label">Visit Our Website</div>
                <div class="design11-fw-value">{{ @user()->website_domain ?? ' ' }}</div>
            </div>
        </div>

    </div>{{-- /.design11-card --}}

    {{-- Download button --}}
    {{-- <button type="button" class="design11-download-btn" onclick="downloadPoster11()">
        <i class="bi bi-download"></i>
        Download Poster
    </button> --}}

</div>{{-- /.design11-wrapper --}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

<script>
    function downloadPoster11() {
        var card   = document.getElementById('posterCard11');
        var button = document.querySelector('.design11-download-btn');

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
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;0,900;1,400&family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Permanent+Marker&family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Karantina:wght@300;400;700&family=Splash&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<style>
    .design6-wrapper {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        font-family: 'Poppins', sans-serif;
    }

    /* ── Card: matches Design 5 sizing exactly ── */
    .design6-wrapper .design6-card {
        width: 100%;
        aspect-ratio: 4 / 5;
        max-width: 340px;
        background-color: {{ $bgColor ?? '#fffef9' }};
        border: none;
        overflow: hidden;
        position: relative;
        box-sizing: border-box;
        container-type: inline-size;
    }

    /* ── Background texture ── */
    .design6-wrapper .d6-bg-texture {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: 0;
        pointer-events: none;
    }

    /* ── Dark inner card ──
         Original: top:124px, left:82px, w:228px, h:272px on a 390×490 card
         As %:     top:25.3%,  left:21%,  w:58.5%, h:55.5%
    ── */
    .design6-wrapper .d6-card-inner {
        position: absolute;
        top: 25.3%;
        left: 21%;
        width: 58.5%;
        height: 55.5%;
        background: {{ $themeColor ?? '#b33a06' }};
        border-radius: 10px;
        z-index: 2;
    }

    /* ── Circular menu image ──
         Original: top:32px, w:230px on 390 card
         As %:     top:6.5%, w:59%
    ── */
    .design6-wrapper .d6-pizza-wrap {
        position: absolute;
        top: 6.5%;
        left: 50%;
        transform: translateX(-50%);
        width: 200px;
        height: 200px;
        border-radius: 50%;
        z-index: 3;
        box-shadow: 0 15px 20px rgba(0, 0, 0, .18);
    }

    .design6-wrapper .d6-pizza-wrap img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 50%;
        display: block;
        border: solid 5px white;
    }

    /* ── Title ──
         Original: bottom:120px on 490 = 24.5%
         font-size scales with container width
    ── */
    .design6-wrapper .d6-title {
        position: absolute;
        bottom: 24.5%;
        left: 50%;
        transform: translateX(-50%) rotate(-15deg);
        font-family: 'Bebas Neue', sans-serif;
        font-size: 18cqw;
        color: #fff;
        letter-spacing: 1px;
        z-index: 4;
        text-shadow: 0 3px 0 rgba(0, 0, 0, .15);
        white-space: nowrap;
    }

    /* ── Subtitle ──
         Original: bottom:132px = 26.9%, left:66%
    ── */
    .design6-wrapper .d6-subtitle {
        position: absolute;
        bottom: 26.9%;
        left: 66%;
        transform: translateX(-50%) rotate(-15deg);
        font-family: "Splash", cursive;
        font-size: 4.5cqw;
        color: {{ $bgColor ?? '#fffef9' }};
        z-index: 4;
        white-space: nowrap;
    }

    /* ── Shared deco shape ── */
    .design6-wrapper .d6-shape {
        position: absolute;
        object-fit: contain;
        display: block;
        z-index: 1;
    }

    /* leaf one:    top:-12/490=-2.4%, right:-40/390=-10.3%, w:111/390=28.5% */
    .design6-wrapper .d6-leaf-one {
         top: -7.4%;
        right: -18.3%;
        width: 37.5%;
        height: auto;
        transform: rotate(-112deg);
    }

    /* leaf two:    bottom:90/490=18.4%, left:-15/390=-3.8%, w:133/390=34.1% */
    .design6-wrapper .d6-leaf-two {
        bottom: 18.4%;
        left: -3.8%;
        width: 34.1%;
        height: auto;
        transform: rotate(-40deg);
        z-index: 10;
    }

    /* tomato:      bottom:97/490=19.8%, right:2/390=0.5%, w:111/390=28.5% */
    .design6-wrapper .d6-leaf-tomato {
            bottom: 21.8%;
            right: 11.5%;
            width: 28.5%;
            height: auto;
            z-index: 10;
    }

    /* chilli one:  top:240/490=49%, right:35/390=9%, w:60/390=15.4% */
    .design6-wrapper .d6-chilli-one {
           top: 49%;
            right: 11%;
            width: 15.4%;
            height: auto;
            transform: rotate(-172deg);
    }

    /* chilli two:  top:-23/490=-4.7%, left:-64/390=-16.4%, w:162/390=41.5% */
    .design6-wrapper .d6-chilli-two {
            top: -5.7%;
            left: -20.4%;
            width: 41.5%;
            height: auto;
            transform: rotate(-117deg);
    }

    /* chilli three: top:130/490=26.5%, left:20/390=5.1%, w:115/390=29.5% */
    .design6-wrapper .d6-chilli-three {
          top: 26.5%;
        left: 2.1%;
        width: 33.5%;
        height: auto;
        transform: rotate(-18deg);
    }

    /* ── Footer ── */
    .design6-wrapper .d6-footer {
        position: absolute;
        bottom: 2.9%;
        left: 0;
        width: 100%;
        padding: 0 4.6%;
        z-index: 5;
        color: {{ $footerFontcolor ?? '#b72e37' }};
        font-size: 3cqw;
        font-weight: 400;
    }

    /* restaurant-details is positioned on the card directly, not inside footer
       Original centre ~102px from bottom of 490px card = bottom: 20.8%          */
    .design6-wrapper .d6-restaurant-details {
        position: absolute;
        bottom: 9.8%;
        left: 50%;
        transform: translateX(-50%);
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 5px;
        max-width: 250px;
        width: max-content;
        z-index: 5;
    }

    .design6-wrapper .d6-logo {
        width: 8.7cqw;
        height: 8.7cqw;
        border-radius: 50%;
        overflow: hidden;
        flex-shrink: 0;
    }

    .design6-wrapper .d6-logo img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    .design6-wrapper .d6-restaurant-info {
        line-height: 1.1;
        text-align: center;
        color: {{ $footerFontcolor ?? '#b72e37' }};
    }

    .design6-wrapper .d6-restaurant-name {
        font-size: 3.6cqw;
        font-weight: 700;
        white-space: nowrap;
    }

    .design6-wrapper .d6-restaurant-address {
        font-size: 3cqw;
        white-space: nowrap;
    }

    .design6-wrapper .d6-phone   { position: absolute; left: 4.6%; bottom: 0; font-size: 3cqw; }
    .design6-wrapper .d6-website { position: absolute; right: 4.6%; bottom: 0; font-size: 3cqw; }

    /* ── Download button ── */
    .design6-wrapper .d6-download-btn {
        margin-top: 10px;
        background-color: #343a40;
        color: #fff;
        border: none;
        padding: 8px 16px;
        font-size: 12px;
        font-weight: 600;
        border-radius: 8px;
        cursor: pointer;
        display: flex;
        align-items: center;
        gap: 8px;
        transition: all 0.3s ease;
    }

    .design6-wrapper .d6-download-btn:hover {
        background-color: #2a2d2f;
        transform: translateY(-1px);
    }

    .design6-wrapper .d6-download-btn:active {
        transform: translateY(0);
    }
</style>

<div class="design6-wrapper">

    <div class="design6-card" id="posterCard6">

        {{-- Background Texture --}}
        <img src="{{ asset('img/posters/design6/texxture3.png') }}" class="d6-bg-texture" alt="Background Texture">

        <img src="{{ asset('img/posters/design6/spoon-wooden.png') }}" class="d6-shape d6-leaf-one"     alt="leaf">
        <!--<img src="{{ asset('img/posters/design6/5.png') }}" class="d6-shape d6-leaf-two"     alt="leaf">-->
        <img src="{{ asset('img/posters/design6/spoon.png') }}" class="d6-shape d6-leaf-tomato"  alt="tomato">
        <img src="{{ asset('img/posters/design6/spoon-wooden.png') }}" class="d6-shape d6-chilli-one"   alt="chilli">
        <img src="{{ asset('img/posters/design6/plate-face.png') }}" class="d6-shape d6-chilli-two"   alt="chilli">
        <img src="{{ asset('img/posters/design6/fork.png') }}" class="d6-shape d6-chilli-three" alt="chilli">

        {{-- Dark card background --}}
        <div class="d6-card-inner"></div>

        {{-- Menu Image (circular) --}}
        <div class="d6-pizza-wrap">
            <img 
                src="{{ $menuImageUrl ?? '' }}" 
                alt="{{ @$menu['name'] ?? 'Menu Item' }}" 
                class="js-poster-menu-image" 
                crossorigin="anonymous"
            >
        </div>

        {{-- Title --}}
        <div class="d6-title">DELICIOUS!!</div>
        <div class="d6-subtitle">Order Now</div>

        {{-- Restaurant details: positioned directly on card --}}
        <div class="d6-restaurant-details">
            @if(isset($logourl) && $logourl)
                <div class="d6-logo">
                    <img src="{{ $logourl }}" alt="logo" crossorigin="anonymous">
                </div>
            @endif
            <div class="d6-restaurant-info">
                <div class="d6-restaurant-name">
                    {{ @user()->name ?? ' ' }}
                </div>
                <div class="d6-restaurant-address">
                    {{ @user()->address ?? ' ' }}
                </div>
            </div>
        </div>

        {{-- Footer: phone + website only --}}
        <div class="d6-footer">
            <div class="d6-phone">
                {{ @user()->phone ?? ' ' }}
            </div>
            <div class="d6-website">
                {{ @user()->website_domain ?? ' ' }}
            </div>
        </div>{{-- /.d6-footer --}}

    </div>{{-- /.design6-card --}}

    {{-- Download button --}}
    <!--<button type="button" class="d6-download-btn" onclick="downloadPoster6()">-->
    <!--    <i class="bi bi-download"></i>-->
    <!--    Download Poster-->
    <!--</button> -->

</div>{{-- /.design6-wrapper --}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

<script>
    function downloadPoster6() {
        var card   = document.getElementById('posterCard6');
        var button = document.querySelector('.d6-download-btn');

        button.innerHTML = '<i class="bi bi-hourglass-split"></i> Generating...';
        button.disabled  = true;

        var exportW = 1080;
        var scale   = exportW / card.offsetWidth;

        html2canvas(card, {
            scale: scale,
            backgroundColor: null,
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
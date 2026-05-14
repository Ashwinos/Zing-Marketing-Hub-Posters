<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<style>

    /* ── Wrapper: fills modal column ── */
    .design4-wrapper {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        font-family: sans-serif;
    }

    /* ── Card: 4:5 Instagram ratio ── */
    .design4-wrapper .design4-card {
        width: 100%;
        aspect-ratio: 4 / 5;
        max-width: 340px;
        background-color: {{ $themeColor ?? '#bb3c0d' }};
        border: none;
        color: #fff;
        overflow: hidden;
        box-sizing: border-box;
        display: flex;
        flex-direction: column;
        position: relative;
    }

    /* ── Logo ── */
    .design4-wrapper .d4-logo {
        display: flex;
        justify-content: center;
        align-items: center;
        padding-top: 0.6rem;
        flex-shrink: 0;
    }

    .design4-wrapper .d4-logo img {
        width: 2.2rem;
        height: 2.2rem;
        border-radius: 50%;
        object-fit: cover;
        display: block;
    }

    /* ── Restaurant details ── */
    .design4-wrapper .d4-restaurant-details {
        text-align: center;
        color: {{ $footerFontcolor ?? '#b72e37' }};
        flex-shrink: 0;
        padding: 0.2rem 0.5rem 0;
    }

    .design4-wrapper .d4-restaurant-name {
        font-size: 0.6rem;
        font-weight: 700;
        letter-spacing: 0.5px;
    }

    .design4-wrapper .d4-restaurant-address {
        font-size: 0.5rem;
        text-transform: uppercase;
    }

    /* ── Card body ── */
    .design4-wrapper .d4-body {
        flex-shrink: 0;
        padding: 0.3rem 0.8rem 0.2rem;
    }

    /* ── Headings ── */
    .design4-wrapper .d4-heading1 {
        font-family: "Lora", serif;
        font-weight: 900;
        font-size: clamp(28px, 12vw, 48px);
        margin: 0;
        line-height: 1.1;
        color: {{ $bgColor ?? '#f3bc40' }};
        text-transform: uppercase;
        text-align: center;
    }

    .design4-wrapper .d4-heading2 {
        font-family: "Lora", serif;
        font-size: clamp(18px, 7vw, 28px);
        font-weight: 900;
        line-height: 1;
        margin-top: -4px;
        letter-spacing: 2px;
        color: {{ $bgColor ?? '#f3bc40' }};
        text-transform: uppercase;
        text-align: center;
    }

    /* ── Description ── */
    .design4-wrapper .d4-description {
        margin: 0.3rem 0.5rem 0.2rem;
        text-align: center;
        flex-shrink: 0;
    }

    .design4-wrapper .d4-description p {
        font-size: 8px;
        font-weight: 400;
        color: #000000;
        margin: 0;
        line-height: 1.6;
        word-break: break-word;
        overflow-wrap: break-word;
        white-space: normal;
        text-transform: uppercase;
    }

    /* ── Order Now button ── */
    .design4-wrapper .d4-order-now {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 0.3rem;
        flex-shrink: 0;
    }

    .design4-wrapper .d4-order-btn {
        background-color: #f3bc40;
        color: #fff;
        font-size: 8px;
        font-weight: 700;
        padding: 5px 16px;
        border: none;
        border-radius: 0;
        cursor: default;
        text-transform: uppercase;
    }

    /* ── Menu image (fills remaining space) ── */
    .design4-wrapper .d4-menu-image {
        /*flex: 1;*/
        position: relative;
        border-top: 4px solid #dca843;
        /*min-height: 0;*/ 
        height: 55%;
        overflow: hidden;
    }

    .design4-wrapper .d4-menu-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        display: block;
        border-radius: 0 0 10px 10px;
    }

    /* ── Contact pill overlay on image ── */
    .design4-wrapper .d4-card-contact {
        position: absolute;
        bottom: 5%;
        left: 50%;
        transform: translateX(-50%);
        width: 90%;
        background: rgba(255, 255, 255, 1);
        padding: 4px 10px;
        border-radius: 25px;
        font-size: 0.5rem;
        font-weight: 700;
        color: #111;
        box-sizing: border-box;
    }

    .design4-wrapper .d4-card-contact .d4-footer-inner {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .design4-wrapper .d4-contact-number,
    .design4-wrapper .d4-website {
        display: flex;
        align-items: center;
        gap: 4px;
        color: #111;
        font-size: 0.5rem;
    }

    .design4-wrapper .d4-contact-number i,
    .design4-wrapper .d4-website i {
        font-size: 0.55rem;
    }

    /* ── Download button ── */
    .design4-wrapper .d4-download-btn {
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

    .design4-wrapper .d4-download-btn:hover {
        background-color: #2a2d2f;
        transform: translateY(-1px);
    }

    .design4-wrapper .d4-download-btn:active {
        transform: translateY(0);
    }
    .design4-wrapper .d4-menu-img-bg {
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        border-radius: 0 0 10px 10px;
    }

</style>

<div class="design4-wrapper">

    <div class="design4-card" id="posterCard4">

        {{-- Logo --}}
        <div class="d4-logo">
            @if(isset($logourl) && $logourl)
                <img src="{{ $logourl }}" alt="logo" crossorigin="anonymous">
            @endif
        </div>

        {{-- Restaurant details --}}
        <div class="d4-restaurant-details">
            <div class="d4-restaurant-name fw-bold">
                {{ @user()->name ?? ' ' }}
            </div>
            <div class="d4-restaurant-address">
                {{ @user()->address ?? ' ' }}
            </div>
        </div>

        {{-- Body: headings + description + order btn --}}
        <div class="d4-body">
            <div class="d4-heading1">Yummy</div>
            @if(strlen(@$menu['name']) <= 20)
            <div class="d4-heading2">{{ @$menu['name'] }}</div>
            @endif
        </div>

        <div class="d4-description">
            <p>
                 {{ \Illuminate\Support\Str::limit($menu['description'] ?? '', 150, '...') }}
            </p>
         </div>

        <div class="d4-order-now">
            <button type="button" class="d4-order-btn">Order Now</button>
        </div>

        {{-- Menu image with contact pill overlay --}}
        <div class="d4-menu-image">
            @if(isset($menuImageUrl) && $menuImageUrl)
               <div class="d4-menu-img-bg js-poster-menu-image" style="background-image: url('{{ $menuImageUrl }}')"></div>
            @endif

            <div class="d4-card-contact">
                <div class="d4-footer-inner">
                    <div class="d4-contact-number">
                        <i class="bi bi-telephone-fill"></i>
                        {{ @user()->phone ?? ' ' }}
                    </div>
                    <div class="d4-website">
                        <i class="bi bi-globe"></i>
                        {{ @user()->website_domain ?? ' ' }}
                    </div>
                </div>
            </div>
        </div>

    </div>{{-- /.design4-card --}}

    {{-- Download button --}}
    <!--<button type="button" class="d4-download-btn" onclick="downloadDesign4()">-->
    <!--    <i class="bi bi-download"></i>-->
    <!--   Download Poster-->
    <!--</button> -->

</div>{{-- /.design4-wrapper --}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

<script>
    function downloadDesign4() {
        var card   = document.getElementById('posterCard4');
        var button = document.querySelector('.d4-download-btn');

        button.innerHTML = '<i class="bi bi-hourglass-split"></i> Generating...';
        button.disabled  = true;

        var exportW = 1080;
        var scale   = exportW / card.offsetWidth;

        html2canvas(card, {
            scale: scale,
            backgroundColor: null,
            logging: false,
            useCORS: true,
            allowTaint: false,
            imageTimeout: 15000,
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
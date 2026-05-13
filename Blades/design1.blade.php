<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<style>

    /* ── Wrapper: fills the modal column, no overflow ── */
    .design1-wrapper {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        font-family: sans-serif;
    }

    /* ── Card: scales to column width while keeping 4:5 ratio ── */
    .design1-wrapper .design1-card {
        width: 100%;
        aspect-ratio: 4 / 5;
        max-width: 340px;
        background: linear-gradient(160deg, {{ $themeColor ?? '#b72e37' }} 50%, {{ $bgColor ?? '#feefce' }} 50%);
        border: none;
        display: flex;
        flex-direction: column;
        overflow: hidden;
        box-sizing: border-box;
    }

    /* ── Logo ── */
    .design1-wrapper .d1-logo {
        display: flex;
        justify-content: flex-start;
        align-items: center;
        padding: 0.6rem 0.8rem 0.2rem;
        flex-shrink: 0;
    }

  .design1-wrapper .d1-logo img {
        width: auto;
        height: 2rem;
        display: block;
        flex-shrink: 0;
    }

    /* ── Headings ── */
    .design1-wrapper .d1-headings {
        text-align: center;
        flex-shrink: 0;
        padding: 0 0.8rem;
    }

    .design1-wrapper .d1-heading1 {
        font-family: "Oswald", sans-serif;
        font-weight: 900;
        font-size: 18px !important; 
        margin: 0;
        line-height: 1.3;
        color: {{ $bgColor ?? '#feefce' }};
        text-transform: uppercase;
    }

    .design1-wrapper .d1-heading2 {
        font-family: "Oswald", sans-serif;
        font-size: 36px !important;
        font-weight: 900;
        line-height: 1.1;
        margin-top: -3px;
        letter-spacing: 1.5px;
        text-transform: uppercase;
        color: {{ $bgColor ?? '#feefce' }};
        padding: 0 8px;
    }

    /* ── Body ── */
    .design1-wrapper .d1-body {
        flex: 1;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-evenly;
        padding: 0 0.8rem;
        min-height: 0;
    }

    /* ── Menu image ── */
    .design1-wrapper .d1-menu-image {
        display: flex;
        justify-content: center;
        flex-shrink: 0;
    }

    .design1-wrapper .d1-menu-image-inner {
            width: 170px !important;
            height: 170px !important; 
            border-radius: 50%;
            overflow: hidden;
            border: 4px solid #fff;
        }

    .design1-wrapper .d1-menu-image-inner img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    /* ── Description ── */
    .design1-wrapper .d1-description {
        text-align: center;
        padding: 0 0.3rem;
    }

  .design1-wrapper .d1-description p {
        font-size: 8px;
        font-weight: 400;
        text-transform: uppercase;
        color: {{ $footerFontcolor ?? '#b72e37' }};
        margin: 0;
        line-height: 1.6;
        word-break: break-word;
        overflow-wrap: break-word;
        white-space: normal;
    }

    /* ── Restaurant details ── */
    .design1-wrapper .d1-restaurant-details {
        text-align: center;
    }

    .design1-wrapper .d1-restaurant-name {
        font-size: 11px !important;
        font-weight: 700;
        color: {{ $footerFontcolor ?? '#b72e37' }};
    }

    .design1-wrapper .d1-restaurant-address {
        font-size: 9px !important;
        color: {{ $footerFontcolor ?? '#b72e37' }};
    }

    /* ── Footer ── */
    .design1-wrapper .d1-footer {
        flex-shrink: 0;
        padding: 0.4rem 0.8rem 0.6rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
        color: {{ $footerFontcolor ?? '#b72e37' }};
        gap: 4px;
    }

    .design1-wrapper .d1-footer-item {
        display: flex;
        align-items: center;
        gap: 4px;
        font-weight: 300;
        font-size: 9px !important;
    }

    .design1-wrapper .d1-footer-item i {
        font-size: 10px !important;
    }

    /* ── Download button ── */
    .design1-wrapper .d1-download-btn {
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

    .design1-wrapper .d1-download-btn:hover {
        background-color: #2a2d2f;
        transform: translateY(-1px);
    }

    .design1-wrapper .d1-download-btn:active {
        transform: translateY(0);
    }

</style>

<div class="design1-wrapper">

    {{-- Card --}}
    <div class="design1-card" id="posterCard1">

        {{-- Logo --}}
        <div class="d1-logo">
            @if(isset($logourl) && $logourl)
                <img src="{{ $logourl }}" alt="logo">
            @endif
        </div>

        {{-- Headings --}}
        <div class="d1-headings">
            <div class="d1-heading1">CHEF'S CHOICE</div>
            @if(strlen(@$menu['name']) <= 20)
                <div class="d1-heading2">{{ @$menu['name'] }}</div>
            @endif
        </div>

        {{-- Body --}}
        <div class="d1-body">

            {{-- Menu image --}}
            <div class="d1-menu-image">
                <div class="d1-menu-image-inner">
                    @if(isset($menuImageUrl) && $menuImageUrl)
                        <img src="{{ $menuImageUrl }}" alt="menu-image" class="js-poster-menu-image">
                    @endif
                </div>
            </div>

            {{-- Description --}}
            <div class="d1-description">
                <p>
                    {{ \Illuminate\Support\Str::limit($menu['description'] ?? '', 150, '...') }}
                </p>
            </div>

            {{-- Restaurant details --}}
            <div class="d1-restaurant-details">
                <div class="d1-restaurant-name fw-bold">
                    {{ @user()->name ?? ' ' }}
                </div>
                <div class="d1-restaurant-address">
                    {{ @user()->address ?? ' ' }}
                </div>
            </div>

        </div>

        {{-- Footer --}}
        <div class="d1-footer">
            <div class="d1-footer-item">
                <i class="bi bi-telephone-fill"></i>
                {{ @user()->phone ?? ' ' }}
            </div>
            <div class="d1-footer-item">
                <i class="bi bi-globe"></i>
                {{ @user()->website_domain ?? ' ' }}
            </div>
        </div>

    </div>{{-- /.design1-card --}}

    {{-- Download button (inside modal column, below card) --}}
    
  {{-- <button type="button" class="d1-download-btn" onclick="downloadDesign1()">
       <i class="bi bi-download"></i>
       Download Poster
    </button>  --}}

</div>{{-- /.design1-wrapper --}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

<script>
    function downloadDesign1() {
        var card   = document.getElementById('posterCard1');
        var button = document.querySelector('.d1-download-btn');

        button.innerHTML = '<i class="bi bi-hourglass-split"></i> Generating...';
        button.disabled  = true;

        /*
         * Export at 1080 × 1350 px (Instagram 4:5).
         * card.offsetWidth is the rendered column width (≤340px).
         * scale = 1080 / card.offsetWidth  →  exact pixel-perfect export.
         */
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
            var link    = document.createElement('a');
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
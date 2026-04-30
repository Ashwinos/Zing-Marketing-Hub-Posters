<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
<style>
    /* ── Configuration: Design Variables ── */
    :root {
        /* Colors */
        --primary-theme: white;
        /* Red area */
        --accent-bg: white;
        /* Cream area */
        --text-on-theme:{{ $themeColor }};
        --text-on-accent: {{ $themeColor }};
        --btn-bg: #343a40;
        --white: #ffffff;

        /* Border Radii */
        --radius-card: 0px;
        --radius-image: 50%;
        --radius-logo: 50%;
        --radius-button: 8px;

        /* font Family */
        --primary-font: 'Sanely';
    }
body{
    font-family: "Quicksand", sans-serif;
    font-weight: 400;
}
    /* ── Wrapper ── */
    .design8-wrapper {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        font-family: "Playfair Display", serif;
        padding: 20px 0;
        font-family: "Quicksand", sans-serif;
    }

    /* ── The Poster Card ── */
    .design8-wrapper .design8-card {
        width: 100%;
        max-width: 340px;
        aspect-ratio: 4 / 5;
        border-radius: var(--radius-card);
        background: linear-gradient(160deg, var(--primary-theme) 50%, var(--accent-bg) 50%);
        border: none;
        display: flex;
        flex-direction: column;
        overflow: hidden;
        box-sizing: border-box;
        position: relative;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        text-align: center;

    }

    /* ── Logo ── */
    .design8-wrapper .d8-logo {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 3px;
        flex-shrink: 0;
        margin-bottom: 0.8rem;
        width: 2.5rem;
        height: 2.5rem;
        /* filter: drop-shadow(2px 4px 6px black); */
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
        border-radius: 50%;
        margin: auto;
        margin-bottom:0.5rem;
        z-index: 9;
    }

    .design8-wrapper .d8-logo img {
        width: 100%;
        height: 100%;
        border-radius: var(--radius-logo);
        object-fit: cover;
        display: block;
        border: 2px solid var(--white);
    }

    /* ── Headings ── */
    .design8-wrapper .d8-headings {

        flex-shrink: 0;
        margin-bottom: 0.5rem;
        z-index: 9;
    }

    .design8-wrapper .d8-heading1 {
        font-family: var(--primary-font);
        font-weight: 400;
        font-size: clamp(12px, 3vw, 12px);
        margin: 0;
        line-height: 1.2;
        color: var(--text-on-theme);
        text-transform: uppercase;
        letter-spacing: 2px;
    }

    .design8-wrapper .d8-heading2 {
        font-family: var(--primary-font);
        font-size: clamp(20px, 5vw, 30px);
        font-weight: 900;
        line-height: 1.1;
        margin-top: 2px;
        letter-spacing: 1px;

        color: var(--text-on-theme);
    }

    /* ── Body Content ── */
    .design8-wrapper .d8-body {

        z-index: 9;
       
    }




    /* .design8-wrapper .d8-menu-image-inner {
   
    aspect-ratio: 1;
   
    overflow: hidden;
   
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
    margin: auto;
    width: 100%;
    height: 100%;
} */
.design8-wrapper .d8-menu-image-inner 
{
    height: 135px;
    border: 8px solid {{ $themeColor }};
    border-right: 0;
    border-left: 0;
}
    .design8-wrapper .d8-menu-image-inner img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .design8-wrapper .d8-description p {
        font-size: clamp(9px, 1.2vw, 11px);
        font-weight: 500;

        color: var(--text-on-accent);
        margin: 0 auto;
        line-height: 1.5;

    }

    .design8-wrapper .d8-restaurant-name {
    font-size: clamp(9px, 2vw, 12px);
    font-weight: 800;
    color: white;
    background-color: var(--text-on-accent);
    padding: 0.3rem 0;
    font-size: 1rem;
    line-height: 1.2rem;
}

    .design8-wrapper .d8-restaurant-address {
        font-size: clamp(7px, 1.5vw, 9px);
        color: var(--text-on-accent);

        opacity: 0.8;
    }

    /* ── Footer ── */
    .design8-wrapper .d8-footer {

        padding: 0rem 1rem;

        color: var(--text-on-accent);
        gap: 10px;

        z-index: 9;

    }

    .design8-wrapper .email-phone {
        display: flex;
        justify-content: center;
    }

    .design8-wrapper .d8-footer-item {
        display: flex;
        align-items: center;
        gap: 5px;
        font-weight: 600;
        font-size: clamp(7px, 1.5vw, 10px);
    padding: 0 10px;
    }
    .d8-header
    {
        z-index: 9;
        padding-top: 25px;
    }
    .d8-footer-row {
        padding: 8px 0;
        border-bottom: 1px solid var(--text-on-theme);
    }

    .d8-footer-row:last-child {
        border-bottom: none;
    }

    /* ── Download Button ── */
    .design8-wrapper .d8-download-btn {
        margin-top: 15px;
        background-color: var(--btn-bg);
        color: var(--white);
        border: none;
        padding: 10px 20px;
        font-size: 13px;
        font-weight: 600;
        border-radius: var(--radius-button);
        cursor: pointer;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .d8-pattern-1 {
        display: flex;
        flex-wrap: nowrap;
        position: relative;
    }
    .d8-restaurant-details
    {
        font-size: 10px;
    }
    /* .d8-pattern-1::after
    {
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 50%;
        background: var(--text-on-theme);
        content: '';
    } */
    /* .d8-pattern-1::before
    {
        position: absolute;
        left: 0;
       bottom: 0;
        width: 100%;
        height: 50%;
        background: white;
        content: '';
    } */
    svg path {
        fill: var(--text-on-theme);
    }

    .bg-pattern img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        filter: grayscale(1);
    }

    .bg-pattern {
        /* position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        opacity: 0.4;
        z-index: 0; */
    }
    .bg-pattern {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    z-index: 0;
    
    
    /* background-color: var(--text-on-theme); */
    opacity: 0.3; 

/*     
    -webkit-mask-image: url('pattern2.png');
    mask-image: url('pattern2.png');
    
    
    -webkit-mask-size: auto; 
    mask-size: 100%;
    -webkit-mask-repeat: repeat;
    mask-repeat: repeat; */
}
    @font-face {
        font-family: 'Deglion';
         src: url('{{ asset('fonts/Deglion.woff2') }}') format('woff2'),
            url('{{ asset('fonts/Deglion.woff') }}') format('woff');
        font-weight: normal;
        font-style: normal;
        font-display: swap;
    }

    @font-face {
        font-family: 'Sanely';
        src: url('{{ asset('fonts/Sanely-Regular.woff2') }}') format('woff2'),
            url('{{ asset('fonts/Sanely-Regular.woff2') }}') format('woff');
        font-weight: normal;
        font-style: normal;
        font-display: swap;
    }
    .d8-pattern-1 svg{
        transform: scale(1);
    }
</style>

<div class="design8-wrapper">

    <div class="design8-card" id="posterCard8">
        <div class="bg-pattern">
            <img src="{{ asset('img/posters/design8/pattern2.png') }}" alt="">
        </div>

        <div class="d8-header" >
            <div class="d8-logo">
                @if(isset($logourl) && $logourl)
                   <img src="{{ $logourl }}" alt="logo-image" crossorigin="anonymous"> 
                @endif
                
            </div>
            <div class="d8-headings">
                <!--<div class="d8-heading1">Chefs Choice</div>-->
                @if(strlen(@$menu['name']) <= 20)
                    <div class="d8-heading2">{{ @$menu['name'] }}</div>
            
                @endif
                
            </div>
        </div>

        <div class="d8-body">
            <div class="d8-pattern-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="16" viewBox="0 0 256 128" fill="none">
                    <path d="M 128 128 L 64 128 L 64 64 L 128 64 Z M 256 128 L 192 128 L 192 64 L 256 64 Z M 64 64 L 0 64 L 0 0 L 64 0 Z M 192 64 L 128 64 L 128 0 L 192 0 Z" fill="rgb(84, 84, 84)"></path>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="16" viewBox="0 0 256 128" fill="none">
                    <path d="M 128 128 L 64 128 L 64 64 L 128 64 Z M 256 128 L 192 128 L 192 64 L 256 64 Z M 64 64 L 0 64 L 0 0 L 64 0 Z M 192 64 L 128 64 L 128 0 L 192 0 Z" fill="rgb(84, 84, 84)"></path>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="16" viewBox="0 0 256 128" fill="none">
                    <path d="M 128 128 L 64 128 L 64 64 L 128 64 Z M 256 128 L 192 128 L 192 64 L 256 64 Z M 64 64 L 0 64 L 0 0 L 64 0 Z M 192 64 L 128 64 L 128 0 L 192 0 Z" fill="rgb(84, 84, 84)"></path>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="16" viewBox="0 0 256 128" fill="none">
                    <path d="M 128 128 L 64 128 L 64 64 L 128 64 Z M 256 128 L 192 128 L 192 64 L 256 64 Z M 64 64 L 0 64 L 0 0 L 64 0 Z M 192 64 L 128 64 L 128 0 L 192 0 Z" fill="rgb(84, 84, 84)"></path>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="16" viewBox="0 0 256 128" fill="none">
                    <path d="M 128 128 L 64 128 L 64 64 L 128 64 Z M 256 128 L 192 128 L 192 64 L 256 64 Z M 64 64 L 0 64 L 0 0 L 64 0 Z M 192 64 L 128 64 L 128 0 L 192 0 Z" fill="rgb(84, 84, 84)"></path>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="16" viewBox="0 0 256 128" fill="none">
                    <path d="M 128 128 L 64 128 L 64 64 L 128 64 Z M 256 128 L 192 128 L 192 64 L 256 64 Z M 64 64 L 0 64 L 0 0 L 64 0 Z M 192 64 L 128 64 L 128 0 L 192 0 Z" fill="rgb(84, 84, 84)"></path>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="16" viewBox="0 0 256 128" fill="none">
                    <path d="M 128 128 L 64 128 L 64 64 L 128 64 Z M 256 128 L 192 128 L 192 64 L 256 64 Z M 64 64 L 0 64 L 0 0 L 64 0 Z M 192 64 L 128 64 L 128 0 L 192 0 Z" fill="rgb(84, 84, 84)"></path>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="16" viewBox="0 0 256 128" fill="none">
                    <path d="M 128 128 L 64 128 L 64 64 L 128 64 Z M 256 128 L 192 128 L 192 64 L 256 64 Z M 64 64 L 0 64 L 0 0 L 64 0 Z M 192 64 L 128 64 L 128 0 L 192 0 Z" fill="rgb(84, 84, 84)"></path>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="16" viewBox="0 0 256 128" fill="none">
                    <path d="M 128 128 L 64 128 L 64 64 L 128 64 Z M 256 128 L 192 128 L 192 64 L 256 64 Z M 64 64 L 0 64 L 0 0 L 64 0 Z M 192 64 L 128 64 L 128 0 L 192 0 Z" fill="rgb(84, 84, 84)"></path>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="16" viewBox="0 0 256 128" fill="none">
                    <path d="M 128 128 L 64 128 L 64 64 L 128 64 Z M 256 128 L 192 128 L 192 64 L 256 64 Z M 64 64 L 0 64 L 0 0 L 64 0 Z M 192 64 L 128 64 L 128 0 L 192 0 Z" fill="rgb(84, 84, 84)"></path>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="16" viewBox="0 0 256 128" fill="none">
                    <path d="M 128 128 L 64 128 L 64 64 L 128 64 Z M 256 128 L 192 128 L 192 64 L 256 64 Z M 64 64 L 0 64 L 0 0 L 64 0 Z M 192 64 L 128 64 L 128 0 L 192 0 Z" fill="rgb(84, 84, 84)"></path>
                </svg>
            </div>



            <div class="d8-menu-image-inner"
                 @if(isset($menuImageUrl) && $menuImageUrl)
                 style="background-image: url('{{ $menuImageUrl }}');
                        background-size: cover;
                        background-position: center;
                        background-repeat: no-repeat;"
                 @endif>
            </div>
            <div class="d8-pattern-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="16" viewBox="0 0 256 128" fill="none">
                    <path d="M 128 128 L 64 128 L 64 64 L 128 64 Z M 256 128 L 192 128 L 192 64 L 256 64 Z M 64 64 L 0 64 L 0 0 L 64 0 Z M 192 64 L 128 64 L 128 0 L 192 0 Z" fill="rgb(84, 84, 84)"></path>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="16" viewBox="0 0 256 128" fill="none">
                    <path d="M 128 128 L 64 128 L 64 64 L 128 64 Z M 256 128 L 192 128 L 192 64 L 256 64 Z M 64 64 L 0 64 L 0 0 L 64 0 Z M 192 64 L 128 64 L 128 0 L 192 0 Z" fill="rgb(84, 84, 84)"></path>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="16" viewBox="0 0 256 128" fill="none">
                    <path d="M 128 128 L 64 128 L 64 64 L 128 64 Z M 256 128 L 192 128 L 192 64 L 256 64 Z M 64 64 L 0 64 L 0 0 L 64 0 Z M 192 64 L 128 64 L 128 0 L 192 0 Z" fill="rgb(84, 84, 84)"></path>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="16" viewBox="0 0 256 128" fill="none">
                    <path d="M 128 128 L 64 128 L 64 64 L 128 64 Z M 256 128 L 192 128 L 192 64 L 256 64 Z M 64 64 L 0 64 L 0 0 L 64 0 Z M 192 64 L 128 64 L 128 0 L 192 0 Z" fill="rgb(84, 84, 84)"></path>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="16" viewBox="0 0 256 128" fill="none">
                    <path d="M 128 128 L 64 128 L 64 64 L 128 64 Z M 256 128 L 192 128 L 192 64 L 256 64 Z M 64 64 L 0 64 L 0 0 L 64 0 Z M 192 64 L 128 64 L 128 0 L 192 0 Z" fill="rgb(84, 84, 84)"></path>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="16" viewBox="0 0 256 128" fill="none">
                    <path d="M 128 128 L 64 128 L 64 64 L 128 64 Z M 256 128 L 192 128 L 192 64 L 256 64 Z M 64 64 L 0 64 L 0 0 L 64 0 Z M 192 64 L 128 64 L 128 0 L 192 0 Z" fill="rgb(84, 84, 84)"></path>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="16" viewBox="0 0 256 128" fill="none">
                    <path d="M 128 128 L 64 128 L 64 64 L 128 64 Z M 256 128 L 192 128 L 192 64 L 256 64 Z M 64 64 L 0 64 L 0 0 L 64 0 Z M 192 64 L 128 64 L 128 0 L 192 0 Z" fill="rgb(84, 84, 84)"></path>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="16" viewBox="0 0 256 128" fill="none">
                    <path d="M 128 128 L 64 128 L 64 64 L 128 64 Z M 256 128 L 192 128 L 192 64 L 256 64 Z M 64 64 L 0 64 L 0 0 L 64 0 Z M 192 64 L 128 64 L 128 0 L 192 0 Z" fill="rgb(84, 84, 84)"></path>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="16" viewBox="0 0 256 128" fill="none">
                    <path d="M 128 128 L 64 128 L 64 64 L 128 64 Z M 256 128 L 192 128 L 192 64 L 256 64 Z M 64 64 L 0 64 L 0 0 L 64 0 Z M 192 64 L 128 64 L 128 0 L 192 0 Z" fill="rgb(84, 84, 84)"></path>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="16" viewBox="0 0 256 128" fill="none">
                    <path d="M 128 128 L 64 128 L 64 64 L 128 64 Z M 256 128 L 192 128 L 192 64 L 256 64 Z M 64 64 L 0 64 L 0 0 L 64 0 Z M 192 64 L 128 64 L 128 0 L 192 0 Z" fill="rgb(84, 84, 84)"></path>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="16" viewBox="0 0 256 128" fill="none">
                    <path d="M 128 128 L 64 128 L 64 64 L 128 64 Z M 256 128 L 192 128 L 192 64 L 256 64 Z M 64 64 L 0 64 L 0 0 L 64 0 Z M 192 64 L 128 64 L 128 0 L 192 0 Z" fill="rgb(84, 84, 84)"></path>
                </svg>
            </div>





            <!-- <div class="d8-restaurant-details">
                <div class="d8-restaurant-name">ZATO THAI CUISINE</div>
                <div class="d8-restaurant-address">9090 Skillman St, Dallas, TX 75243, USA</div>
            </div> -->
            <!-- <div class="d8-description">
                <p>A Zinger Burger is a popular fast-food burger featuring a crispy, spicy chicken fillet on a sesame seed bun with lettuce, mayo, and often cheese.</p>
            </div> -->
            <div class="d8-restaurant-details">
                <div class="d8-restaurant-name fw-bold">
                     {{ @user()->name ?? ' ' }}
                </div>
                <p>{{ \Illuminate\Support\Str::limit($menu['description'] ?? '', 150, '...') }}</p>

            </div>

            
        </div>

        <div class="d8-footer">
            <div class="email-phone d8-footer-row">
                <div class="d8-footer-item">
                    <i class="bi bi-telephone-fill"></i> {{ @user()->phone ?? '+00 000 000' }}
                </div>
                <div class="d8-footer-item">
                    <i class="bi bi-globe"></i> {{ @user()->website_domain ?? 'www.example.com' }}
                </div>
            </div>
            <div class="d8-restaurant-address d8-footer-row">
                {{ @user()->address ?? ' ' }}
            </div>
        </div>

    </div>

    <!--<button type="button" class="d8-download-btn" onclick="downloadDesign8()">-->
    <!--    <i class="bi bi-download"></i> Download Poster-->
    <!--</button>-->

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

<script>
    function downloadDesign8() {
        var card   = document.getElementById('posterCard8');
        var button = document.querySelector('.d8-download-btn');

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
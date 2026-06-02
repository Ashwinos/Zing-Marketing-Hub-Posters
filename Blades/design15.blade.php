<link href="https://fonts.googleapis.com/css2?family=Anton&family=DM+Sans:wght@400;500;600;700&display=swap"
    rel="stylesheet">

<style>
    .design15-wrapper {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        font-family: 'DM Sans', sans-serif;
    }

    /* ── Card: Instagram 4:5 ratio ── */
    .design15-wrapper .design15-card {
        width: 100%;
        aspect-ratio: 4 / 5;
        max-width: 340px;
        background: #f0ece6;
        overflow: hidden;
        position: relative;
        box-sizing: border-box;
        box-shadow: 0 16px 50px rgba(0, 0, 0, 0.22);
    }

    /* ── Faded background food collage ── */
    .design15-wrapper .d15-bg-collage {
        position: absolute;
        inset: 0;
        z-index: 0;
        overflow: hidden;
    }

    .design15-wrapper .d15-bg-collage img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        opacity: 0.13;
        filter: grayscale(30%);
    }

    /* ── Dot pattern overlays ── */
    .design15-wrapper .d15-dots {
        position: absolute;
        z-index: 1;
        display: grid;
        grid-template-columns: repeat(4, 6px);
        gap: 5px;
        pointer-events: none;
    }

    .design15-wrapper .d15-dots span {
        width: 4px;
        height: 4px;
        background: rgba(0, 0, 0, 0.15);
        border-radius: 50%;
        display: block;
    }

    .design15-wrapper .d15-dots.tl {
        top: 60px;
        left: 14px;
    }

    .design15-wrapper .d15-dots.tr {
        top: 60px;
        right: 14px;
    }

    .design15-wrapper .d15-dots.bl {
        bottom: 80px;
        left: 14px;
    }

    .design15-wrapper .d15-dots.br {
        bottom: 80px;
        right: 14px;
    }

    /* ── Brand name ── */
    .design15-wrapper .d15-brand {
        position: absolute;
        top: 14px;
        left: 0;
        right: 0;
        text-align: center;
        font-size: 8px;
        font-weight: 500;
        letter-spacing: 1.5px;
        color: #444;
        z-index: 10;
        text-transform: uppercase;
    }

    /* ── ARCH PHOTO FRAME ── */
    .design15-wrapper .d15-arch-wrap {
        position: absolute;
        top: 36px;
        left: 62px;
        /*transform: translateX(-50%);*/
        width: 220px;
        height: 250px;
        z-index: 6;
        border-radius: 110px 110px 0 0;
        overflow: hidden;
        border: 4px solid #1a1a1a;
        background: #1a1a1a;
    }

    .design15-wrapper .d15-arch-wrap img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center 30%;
        display: block;
        left: 0;
        transform: translateX(0px);
    }

    /* ── DARK INFO CARD ── */
    .design15-wrapper .d15-info-card {
        position: absolute;
        bottom: 52px;
        left: 18px;
        right: 18px;
        background: #1a1a1a;
        border-radius: 14px;
        padding: 18px 18px 16px;
        z-index: 7;
        text-align: start !important;
    }

    /* Price tag / logo circle */
    .design15-wrapper .d15-price-tag {
        position: absolute;
        top: -12px;
        right: 8px;
        width: auto;
        height: 2rem;
        /* background: #f0ece6; */
        /* border-radius: 50%; */
        display: flex;
        align-items: center;
        justify-content: center;
        /* box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2); */
        /* border: 2px solid #1a1a1a; */
        /*overflow: hidden;*/
    }

    .design15-wrapper .d15-price-tag img {
        width: 100%;
        height: 100%;
        /*object-fit: contain;*/
    }

    .design15-wrapper .d15-dish-name {
        font-family: 'Anton', sans-serif;
        font-size: 26px;
        color: #ffffff;
        text-transform: uppercase;
        letter-spacing: 1.5px;
        margin-bottom: 8px;
        padding-right: 60px;
        line-height: 1.1;
    }

    .design15-wrapper .d15-divider {
        height: 1px;
        background: rgba(255, 255, 255, 0.15);
        margin-bottom: 10px;
    }

    .design15-wrapper .d15-dish-desc {
        font-size: 10.5px;
        color: rgba(255, 255, 255, 0.65);
        line-height: 1.6;
        margin-bottom: 12px;
        /*max-width: 200px;*/
    }

    /* Stars */
    .design15-wrapper .d15-stars {
        display: flex;
        gap: 3px;
    }

    .design15-wrapper .d15-stars span {
        font-size: 8px;
        color: {{ $themeColor ?? '#8cc63f' }};
        text-transform: uppercase;
        font-weight: 800;
    }

    .design15-wrapper .d15-stars span.empty {
        color: rgba(255, 255, 255, 0.3);
    }

    /* ── FOOTER ── */
    .design15-wrapper .d15-footer {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 46px;
        background: #dcdcdc00;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 28px;
        z-index: 8;
        border-top: 1px solid rgba(0, 0, 0, 0.08);
        margin: 0 20px;
    }

    .design15-wrapper .d15-f-item {
        display: flex;
        align-items: center;
        gap: 5px;
        font-size: 9.5px;
        color: #333;
        font-weight: 500;
    }

    .design15-wrapper .d15-f-dot {
        width: 18px;
        height: 18px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        background: #1a1a1a;
    }

    .design15-wrapper .d15-f-dot svg {
        width: 10px;
        height: 10px;
        fill: #fff;
    }

    /* ── Download button ── */
    .design15-wrapper .d15-download-btn {
        margin-top: 10px;
        background: #1a1a1a;
        color: #fff;
        border: none;
        padding: 8px 16px;
        font-size: 12px;
        font-weight: 600;
        border-radius: 6px;
        cursor: pointer;
        font-family: 'DM Sans', sans-serif;
        display: flex;
        align-items: center;
        gap: 8px;
        letter-spacing: 0.04em;
        transition: background 0.2s, transform 0.1s;
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.3);
    }

    .design15-wrapper .d15-download-btn:hover {
        background: #333;
        transform: translateY(-1px);
    }

    .design15-wrapper .d15-download-btn:active {
        transform: translateY(0);
    }

    .design15-wrapper .d15-download-btn:disabled {
        opacity: 0.7;
        cursor: not-allowed;
        transform: none;
    }
</style>

<div class="design15-wrapper">

    <div class="design15-card" id="posterCard15">

        {{-- BG collage --}}
        <div class="d15-bg-collage">
            <img src="{{ $menuImageUrl }}" alt="" crossorigin="anonymous">
        </div>

        {{-- Dot patterns --}}
        <div class="d15-dots tl">
            <span></span><span></span><span></span><span></span>
            <span></span><span></span><span></span><span></span>
            <span></span><span></span><span></span><span></span>
            <span></span><span></span><span></span><span></span>
        </div>
        <div class="d15-dots tr">
            <span></span><span></span><span></span><span></span>
            <span></span><span></span><span></span><span></span>
            <span></span><span></span><span></span><span></span>
            <span></span><span></span><span></span><span></span>
        </div>
        <div class="d15-dots bl">
            <span></span><span></span><span></span><span></span>
            <span></span><span></span><span></span><span></span>
            <span></span><span></span><span></span><span></span>
            <span></span><span></span><span></span><span></span>
        </div>
        <div class="d15-dots br">
            <span></span><span></span><span></span><span></span>
            <span></span><span></span><span></span><span></span>
            <span></span><span></span><span></span><span></span>
            <span></span><span></span><span></span><span></span>
        </div>

        {{-- Brand --}}
        <div class="d15-brand">{{ @user()->name ?? 'Borcelle Restaurant' }}</div>

        {{-- Arch food photo --}}
        <div class="d15-arch-wrap">
            @if (isset($menuImageUrl) && $menuImageUrl)
                <img src="{{ $menuImageUrl }}" alt="{{ @$menu['name'] ?? 'Menu Item' }}" class="js-poster-menu-image"
                    crossorigin="anonymous">
            @endif
        </div>

        {{-- Info card --}}
        <div class="d15-info-card">

            {{-- Logo circle --}}
            <div class="d15-price-tag">
                @if (isset($logourl) && $logourl)
                    <img src="{{ $logourl }}" alt="logo" crossorigin="anonymous">
                @endif
            </div>

            {{-- Dish name --}}
            @if (strlen(@$menu['name']) <= 15)
                <div class="d15-dish-name">{{ @$menu['name'] }}</div>
            @else
                <div class="d15-dish-name">Flavor First </div>
            @endif


            <div class="d15-divider"></div>

            {{-- Description --}}

            <div class="d15-dish-desc">{{ \Illuminate\Support\Str::limit($menu['description'] ?? '', 100, '...') }}
            </div>

            {{-- Stars --}}
            <div class="d15-stars">
                <span>Fan Favorite ★</span>
            </div>

        </div>{{-- /.d15-info-card --}}

        {{-- Footer --}}
        <div class="d15-footer">
            <div class="d15-f-item">{{ @user()->website_domain ?? 'www.reallygreatsite.com' }}</div>
            <div class="d15-f-item">{{ @user()->phone ?? '+123-456-7890' }}</div>
        </div>

    </div>{{-- /.design15-card --}}

    {{-- Download button --}}
    {{-- <button type="button" class="d15-download-btn" onclick="downloadDesign15()">
        Download Poster
    </button> --}}

</div>{{-- /.design15-wrapper --}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

<script>
    function downloadDesign15() {
        var card = document.getElementById('posterCard15');
        var button = document.querySelector('.d15-download-btn');

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
            link.download = 'menu-poster-design15.png';
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

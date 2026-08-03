<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Open+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">

<style>
    .design31-wrapper {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        font-family: 'Open Sans', sans-serif;
    }

    .design31-wrapper .design31-card {
        width: 100%;
        max-width: 340px;
        aspect-ratio: 4 / 5;
        position: relative;
        overflow: hidden;
        background: #f7f6ec;
        box-shadow: 0 20px 60px rgba(0,0,0,0.22);
        container-type: inline-size;
        box-sizing: border-box;
    }

    /* ══ Logo — top-left ══ */
    .design31-wrapper .d31-logo {
        position: absolute;
        top: 3cqw; left: 4cqw;
        z-index: 10;
    }

    .design31-wrapper .d31-logo img {
        height: 2rem;
        width: auto;
        display: block;
    }

    /* ══ Organic blob shapes — background decoration ══ */
    .design31-wrapper .d31-blob-tr {
        position: absolute;
        top: -10cqw; right: -14cqw;
        width: 60cqw; height: 60cqw;
        background: {{ $themeColor }};
        opacity: 0.18;
        border-radius: 42% 58% 65% 35% / 45% 40% 60% 55%;
        z-index: 0;
        pointer-events: none;
    }

    .design31-wrapper .d31-blob-bl {
        position: absolute;
        bottom: -12cqw; left: -16cqw;
        width: 55cqw; height: 55cqw;
        background: {{ $themeColor }};
        opacity: 0.13;
        border-radius: 58% 42% 35% 65% / 55% 60% 40% 45%;
        z-index: 0;
        pointer-events: none;
    }

    /* ══ Decorative leaf accents ══ */
    .design31-wrapper .d31-leaf {
        position: absolute;
        z-index: 1;
        opacity: 0.55;
        pointer-events: none;
    }
    .design31-wrapper .d31-leaf svg { display: block; }

    /* ══ Decorative swirl accents ══ */
    .design31-wrapper .d31-swirl {
        position: absolute;
        z-index: 1;
        opacity: 0.5;
        pointer-events: none;
    }
    .design31-wrapper .d31-swirl svg { display: block; }

    /* ══ Script headline ══ */
    .design31-wrapper .d31-headline {
        position: relative;
        z-index: 5;
        text-align: center;
        padding-top: 15cqw;
    }

    .design31-wrapper .d31-headline h1 {
        font-family: 'Pacifico', cursive;
        font-size: 9cqw;
        color: {{ $themeColor }};
        line-height: 1.8;
        margin: 0;
        overflow: hidden;
        text-overflow: ellipsis;
        /*white-space: nowrap;*/
        adding: 10cqw 6cqw 0 6cqw;
    }

    .design31-wrapper .d31-headline-sub {
        font-family: 'Open Sans', sans-serif;
        font-size: 2.4cqw;
        font-weight: 700;
        color: #d49a1f;
        letter-spacing: 2.5px;
        text-transform: uppercase;
        margin: 0.8cqw 0 0;
    }

    /* ══ Circular food photo ══ */
    .design31-wrapper .d31-photo-wrap {
        position: relative;
        z-index: 4;
        display: flex;
        justify-content: center;
        margin-top: 4cqw;
    }

    .design31-wrapper .d31-photo-circle {
        width: 58cqw; height: 58cqw;
        border-radius: 50%;
        background: #ffffff;
        border: 2cqw solid #ffffff;
        box-sizing: border-box;
        box-shadow: 0 10px 30px rgba(0,0,0,0.18);
        overflow: hidden;
        position: relative;
    }

    .design31-wrapper .d31-photo-circle img {
        width: 100%; height: 100%;
        object-fit: cover; object-position: center;
        display: block;
    }

    .design31-wrapper .d31-photo-placeholder {
        width: 100%; height: 100%;
        background: {{ $themeColor }};
    }

    /* ══ Description ══ */
    .design31-wrapper .d31-desc {
        position: relative;
        z-index: 5;
        text-align: center;
        padding: 5cqw 8cqw 0;
    }

    .design31-wrapper .d31-desc-title {
        font-family: 'Open Sans', sans-serif;
        font-size: 5.4cqw;
        font-weight: 800;
        color: {{ $themeColor }};
        text-transform: uppercase;
        letter-spacing: 0.3px;
        margin: 0 0 1.2cqw;
        line-height: 1.05;
    }

    .design31-wrapper .d31-desc p {
        font-family: 'Open Sans', sans-serif;
        font-size: 2.1cqw;
        font-weight: 400;
        color: #6a6a5a;
        line-height: 1.5;
        margin: 0;
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
    }

    /* ══ FOOTER — two-tone green bar ══ */
    .design31-wrapper .d31-footer {
        position: absolute;
        bottom: 5cqw; left: 5cqw; right: 5cqw;
        z-index: 6;
        display: flex;
        border-radius: 30px;
        overflow: hidden;
        box-shadow: 0 8px 20px rgba(0,0,0,0.18);
    }

    .design31-wrapper .d31-footer-left {
        flex: 1.3;
        background: {{ $themeColor }};
        padding: 2.4cqw 4cqw;
        display: flex;
        flex-direction: column;
        gap: 0.6cqw;
        box-sizing: border-box;
        min-width: 0;
        text-align: start;
    }

    .design31-wrapper .d31-footer-left span {
        font-family: 'Open Sans', sans-serif;
        font-size: 1.9cqw;
        font-weight: 700;
        color: #ffffff;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        letter-spacing: 0.2px;
    }
    
     .design31-wrapper .d31-footer-left span.visit-us {
        font-family: 'Open Sans', sans-serif;
        font-size: 3cqw;
        font-weight: 700;
        color: #ffffff;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        letter-spacing: 0.2px;
        padding-top: 3px;
    }

    .design31-wrapper .d31-footer-right {
        flex: 1;
        background: #53514f;
        padding: 2.4cqw 3.5cqw;
        display: flex;
        flex-direction: column;
        align-items: flex-end;
        justify-content: center;
        gap: 1cqw;
        box-sizing: border-box;
        min-width: 0;
    }

    .design31-wrapper .d31-social-icons {
        display: flex;
        align-items: center;
        gap: 1.4cqw;
    }

    .design31-wrapper .d31-social-icons svg {
        width: 3cqw; height: 3cqw;
        fill: #ffffff;
        flex-shrink: 0;
    }

    .design31-wrapper .d31-footer-right span {
        font-family: 'Open Sans', sans-serif;
        font-size: 1.8cqw;
        font-weight: 700;
        color: #ffffff;
        /*white-space: nowrap;*/
        overflow: hidden;
        text-overflow: ellipsis;
        max-width: 100%;
        text-align: end;
    }

    /* ── Download btn ── */
    .design31-wrapper .d31-download-btn {
        margin-top: 10px;
        background: {{ $themeColor }};
        color: #ffffff;
        border: none;
        padding: 8px 18px;
        font-size: 12px;
        font-weight: 700;
        border-radius: 30px;
        cursor: pointer;
        font-family: 'Open Sans', sans-serif;
        transition: opacity 0.2s;
    }
    .design31-wrapper .d31-download-btn:hover    { opacity: .88; }
    .design31-wrapper .d31-download-btn:disabled { opacity: .5; cursor: not-allowed; }
</style>

<div class="design31-wrapper">
    <div class="design31-card" id="posterCard31">

        {{-- ══ Logo ══ --}}
        @if (!empty($logourl))
            <div class="d31-logo">
                <img src="{{ $logourl }}" alt="logo" crossorigin="anonymous">
            </div>
        @endif

        {{-- ══ Background blobs ══ --}}
        <div class="d31-blob-tr" style="background: {{ $themeColor }};"></div>
        <div class="d31-blob-bl" style="background: {{ $themeColor }};"></div>

        {{-- ══ Decorative leaves ══ --}}
        <div class="d31-leaf" style="top: 3cqw; right: 8cqw;">
            <svg width="22" height="22" viewBox="0 0 22 22" xmlns="http://www.w3.org/2000/svg">
                <path d="M11 1C5 4 3 9 6 15c3 4 8 5 12 2-2-1-5-2-7-5-2-3-2-7 0-11Z" fill="{{ $themeColor }}"/>
            </svg>
        </div>
        <div class="d31-leaf" style="top: 30cqw; left: 3cqw; transform: rotate(-30deg);">
            <svg width="18" height="18" viewBox="0 0 22 22" xmlns="http://www.w3.org/2000/svg">
                <path d="M11 1C5 4 3 9 6 15c3 4 8 5 12 2-2-1-5-2-7-5-2-3-2-7 0-11Z" fill="{{ $themeColor }}"/>
            </svg>
        </div>
        <div class="d31-leaf" style="top: 22cqw; right: 4cqw; transform: rotate(40deg);">
            <svg width="16" height="16" viewBox="0 0 22 22" xmlns="http://www.w3.org/2000/svg">
                <path d="M11 1C5 4 3 9 6 15c3 4 8 5 12 2-2-1-5-2-7-5-2-3-2-7 0-11Z" fill="{{ $themeColor }}"/>
            </svg>
        </div>
        <div class="d31-leaf" style="bottom: 30cqw; left: 6cqw; transform: rotate(20deg);">
            <svg width="20" height="20" viewBox="0 0 22 22" xmlns="http://www.w3.org/2000/svg">
                <path d="M11 1C5 4 3 9 6 15c3 4 8 5 12 2-2-1-5-2-7-5-2-3-2-7 0-11Z" fill="{{ $themeColor }}"/>
            </svg>
        </div>
        <div class="d31-leaf" style="bottom: 36cqw; right: 6cqw; transform: rotate(-15deg);">
            <svg width="18" height="18" viewBox="0 0 22 22" xmlns="http://www.w3.org/2000/svg">
                <path d="M11 1C5 4 3 9 6 15c3 4 8 5 12 2-2-1-5-2-7-5-2-3-2-7 0-11Z" fill="{{ $themeColor }}"/>
            </svg>
        </div>

        {{-- ══ Decorative swirls ══ --}}
        <div class="d31-swirl" style="top: 5cqw; left: 6cqw;">
            <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="{{ $themeColor }}" stroke-width="1.4">
                <path d="M2 8a6 6 0 1 1 6 6"/>
            </svg>
        </div>
        <div class="d31-swirl" style="top: 27cqw; right: 7cqw;">
            <svg width="14" height="14" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="{{ $themeColor }}" stroke-width="1.4">
                <path d="M2 8a6 6 0 1 1 6 6"/>
            </svg>
        </div>
        <div class="d31-swirl" style="bottom: 34cqw; left: 4cqw;">
            <svg width="14" height="14" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="{{ $themeColor }}" stroke-width="1.4">
                <path d="M2 8a6 6 0 1 1 6 6"/>
            </svg>
        </div>

        {{-- ══ Script headline ══ --}}
        <div class="d31-headline">
            @if (!empty($menu['name']) && strlen($menu['name']) <= 20)
            <h1>{{ $menu['name'] }}</h1>
             @else
              <h1>Taste the Best</h1>
              @endif
            <p class="d31-headline-sub">Every Bite a Delight</p>
        </div>

        {{-- ══ Circular food photo ══ --}}
        <div class="d31-photo-wrap">
            <div class="d31-photo-circle">
                @if (!empty($menuImageUrl))
                    <img src="{{ $menuImageUrl }}"
                         alt="{{ $menu['name'] ?? 'Food' }}"
                         class="js-poster-menu-image"
                         crossorigin="anonymous">
                @else
                    <div class="d31-photo-placeholder"></div>
                @endif
            </div>
        </div>

        {{-- ══ Description ══ --}}
        @if (!empty($menu['description']))
            <div class="d31-desc">
                <p>{{ Str::limit($menu['description'], 90, '…') }}</p>
            </div>
        @endif

        {{-- ══ FOOTER ══ --}}
        <div class="d31-footer">

            <div class="d31-footer-left" style="background: {{ $themeColor }};">
                @if (!empty(@user()->phone))
                    <span>Call: {{ @user()->phone }}</span>
                @endif
                @if (!empty(@user()->website_domain))
                    <span>{{ @user()->website_domain }}</span>
                @endif
                @if (empty(@user()->website_domain) && empty(@user()->phone) )
                  @if (!empty(@user()->address))
                  <span class="visit-us">VISIT US</span>
                  @endif
                @endif
            </div>

            <div class="d31-footer-right" style="background: #53514f;">
                @if (!empty(@user()->address))
                    <span>{{ @user()->address }}</span>
                @endif
            </div>

        </div>

    </div>{{-- /.design31-card --}}

    {{-- <button type="button" class="d31-download-btn" onclick="downloadDesign31()">&#8595; Download Poster</button> --}}

</div>{{-- /.design31-wrapper --}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<script>
    function downloadDesign31() {
        var card   = document.getElementById('posterCard31');
        var button = document.querySelector('.d31-download-btn');
        if (!card || !button) return;
        button.innerHTML = 'Generating...';
        button.disabled  = true;
        var exportW = 1080;
        var scale   = exportW / card.offsetWidth;
        Promise.all(Array.from(card.querySelectorAll('img')).map(function(img) {
            return new Promise(function(resolve) {
                if (img.complete && img.naturalWidth > 0) resolve();
                else { img.onload = resolve; img.onerror = resolve; }
            });
        })).then(function() {
            return html2canvas(card, {
                scale: scale, backgroundColor: '#f7f6ec',
                logging: false, useCORS: true, allowTaint: true, imageTimeout: 15000
            });
        }).then(function(canvas) {
            var link = document.createElement('a');
            link.download = 'menu-poster-design31.png';
            link.href = canvas.toDataURL('image/png', 1.0);
            link.click();
            button.innerHTML = 'Download Poster';
            button.disabled = false;
        }).catch(function(error) {
            console.error('Error:', error);
            alert('Failed to generate image.');
            button.innerHTML = 'Download Poster';
            button.disabled = false;
        });
    }
</script>
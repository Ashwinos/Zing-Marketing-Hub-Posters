<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700;900&family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

<style>
    .design28-wrapper {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        font-family: 'Open Sans', sans-serif;
    }

    /* ── Card ── */
    .design28-wrapper .design28-card {
        width: 100%;
        max-width: 380px;
        aspect-ratio: 4 / 5;
        position: relative;
        overflow: hidden;
        background: #fdf3d0;
        box-shadow: 0 16px 48px rgba(0,0,0,0.18);
        container-type: inline-size;
        box-sizing: border-box;
    }

    /* ══ WATERMARK BG ══ */
    .design28-wrapper .d28-watermark {
        position: absolute;
        top: 0; left: 0; right: 0; bottom: 0;
        z-index: 1;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 0;
        pointer-events: none;
        overflow: hidden;
        text-align: center;
    }
    .design28-wrapper .d28-watermark span {
        font-family: 'Oswald', sans-serif;
        font-size: 18cqw;
        font-weight: 900;
        color: #f5e5a0;
        letter-spacing: 2px;
        text-transform: uppercase;
        line-height: 0.95;
        white-space: nowrap;
        display: block;
        text-align: center;
        opacity: 0.55;
    }

    /* ══ RIGHT ACCENT STRIP ══ */
    .design28-wrapper .d28-right-strip {
        position: absolute;
        top: 0; right: 0; bottom: 0;
        width: 3.5cqw;
        background: {{ $themeColor }};
        z-index: 3;
    }

    /* ══ TOP-LEFT LOGO BADGE ══ */
    .design28-wrapper .d28-logo-badge {
        position: absolute;
        top: 2.5cqw;
        left: 2.5cqw;
        z-index: 10;
        background: {{ $themeColor }};
        border-radius: 1.2cqw;
        padding: 1.2cqw 1.8cqw;
        display: flex;
        align-items: center;
        justify-content: center;
        min-width: 12cqw;
        min-height: 7cqw;
        box-sizing: border-box;
        box-shadow: 0 2px 8px rgba(0,0,0,0.22);
    }
    .design28-wrapper .d28-logo-badge img {
        height: 5.5cqw;
        width: auto;
        max-width: 16cqw;
        object-fit: contain;
        display: block;
    }
    .design28-wrapper .d28-logo-badge-text {
        font-family: 'Oswald', sans-serif;
        font-size: 2.8cqw;
        font-weight: 700;
        color: #ffffff;
        letter-spacing: 1px;
        text-transform: uppercase;
        line-height: 1;
    }

    /* ══ HEADLINE ══ */
    .design28-wrapper .d28-headline {
        position: absolute;
        top: 3cqw;
        left: 3cqw;
        right: 6cqw;
        z-index: 5;
        text-align: center;
    }
    .design28-wrapper .d28-hl-main {
            font-family: 'Oswald', sans-serif;
    font-size: 10.5cqw;
    font-weight: 900;
    color: #3a1a00;
    text-transform: uppercase;
    line-height: 0.95;
    margin: 0;
    letter-spacing: 1px;
    display: block;
    margin-top: 22px;
    }
    .design28-wrapper .d28-pill-badge {
        display: block;
        text-align: center;
        background: {{ $themeColor }};
        border-radius: 30px;
       padding: 0.95cqw 2.8cqw 0.95cqw;
        margin: 0.8cqw auto;
        width: fit-content;
        line-height: 0;
    }
    .design28-wrapper .d28-pill-badge span {
        font-family: 'Open Sans', sans-serif;
        font-size: 9px;
        font-weight: 700;
        color: #ffffff;
        letter-spacing: 1px;
        text-transform: uppercase;
        line-height: 1;
        display: inline-block;
        vertical-align: middle;
    }

    /* ══ FOOD IMAGE ══ */
    .design28-wrapper .d28-food {
        position: absolute;
        top: 38cqw;
        left: -4cqw;
        right: -4cqw;
        height: 50cqw;
        z-index: 6;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .design28-wrapper .d28-food img {
        width: 108%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        display: block;
    }
    .design28-wrapper .d28-food-placeholder {
        width: 100%; height: 100%;
       
        border-radius: 50%;
    }

    /* ══ LEFT STAMP BADGE ══ */
    .design28-wrapper .d28-stamp {
        position: absolute;
        top: 41cqw;
        left: 2cqw;
        width: 18cqw;
        height: 18cqw;
        z-index: 8;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        box-sizing: border-box;
    }
    .design28-wrapper .d28-stamp > svg {
        position: absolute;
        top: 0; left: 0;
        width: 100%; height: 100%;
    }
    .design28-wrapper .d28-stamp-inner {
        position: relative;
        z-index: 2;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 0.3cqw;
        padding: 1cqw;
    }
    .design28-wrapper .d28-stamp-icon {
        width: 4.5cqw; height: 4.5cqw;
        display: flex; align-items: center; justify-content: center;
    }
    .design28-wrapper .d28-stamp-icon svg {
        width: 100%; height: 100%; display: block;
    }
    .design28-wrapper .d28-stamp-text {
        font-family: 'Open Sans', sans-serif;
        font-size: 1.6cqw;
        font-weight: 700;
        color: #3a1a00;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        line-height: 1.3;
    }

    /* ══ DISCOUNT BADGE ══ */
    .design28-wrapper .d28-discount {
        position: absolute;
        top: 46cqw;
        right: 5.5cqw;
        width: 20cqw;
        height: 20cqw;
        z-index: 8;
        background: #f5c518;
        border-radius: 1.5cqw;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        box-sizing: border-box;
        padding: 1.5cqw;
        box-shadow: 0 3px 12px rgba(0,0,0,0.18);
    }
    .design28-wrapper .d28-disc-top {
        font-family: 'Open Sans', sans-serif;
        font-size: 1.8cqw;
        font-weight: 700;
        color: #3a1a00;
        letter-spacing: 0.5px;
        text-transform: uppercase;
        line-height: 1;
        margin-bottom: 0.3cqw;
    }
    .design28-wrapper .d28-disc-pct {
        font-family: 'Oswald', sans-serif;
        font-size: 10cqw;
        font-weight: 900;
        color: {{ $themeColor }};
        line-height: 0.9;
        letter-spacing: -1px;
    }
    .design28-wrapper .d28-disc-off {
        font-family: 'Open Sans', sans-serif;
        font-size: 2.2cqw;
        font-weight: 700;
        color: #3a1a00;
        letter-spacing: 2px;
        text-transform: uppercase;
        line-height: 1;
        margin-top: 0.4cqw;
    }

    /* ══ HERB LEAVES ══ */
    .design28-wrapper .d28-leaf {
        position: absolute;
        pointer-events: none;
        z-index: 9;
    }
    .design28-wrapper .d28-leaf svg { display: block; }

    /* ══ DESCRIPTION ══ */
    .design28-wrapper .d28-desc {
        position: absolute;
        top: 87cqw;
        left: 4cqw;
        right: 6cqw;
        z-index: 7;
        text-align: center;
        background: {{$themeColor}};
    }
    .design28-wrapper .d28-desc p {
      font-family: 'Open Sans', sans-serif;
    font-size: 2.3cqw;
    color: #ffffff;
    line-height: 1.6;
    margin: 0;
    }

    /* ══ ORDER NOW BUTTON ══ */
    .design28-wrapper .d28-order-wrap {
        position: absolute;
        bottom: 22cqw;
        left: 3cqw;
        right: 6cqw;
        z-index: 7;
        display: flex;
        justify-content: center;
    }
    .design28-wrapper .d28-order-btn {
        background: {{ $themeColor }};
        border-radius: 30px;
        padding: 2cqw 9cqw;
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }
    .design28-wrapper .d28-order-btn span {
        font-family: 'Oswald', sans-serif;
        font-size: 4cqw;
        font-weight: 700;
        color: #ffffff;
        letter-spacing: 3px;
        text-transform: uppercase;
        line-height: 1;
    }

    /* ══ FOOTER BAR ══ */
    .design28-wrapper .d28-footer {
        position: absolute;
        bottom: 0; left: 0; right: 0;
        height: 20cqw;
        z-index: 7;
        background: rgba(253,243,208,0.96);
        border-top: 1.5px solid rgba(212,43,43,0.18);
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 1.2cqw;
        padding: 0 4cqw;
        box-sizing: border-box;
    }
    /* Top row: website LEFT — phone RIGHT */
    .design28-wrapper .d28-footer-top-row {
        display: flex;
        align-items: center;
        justify-content: space-between;
        width: 100%;
    }
    /* Phone — smaller font, right end */
    .design28-wrapper .d28-footer-phone {
        font-family: 'Oswald', sans-serif;
        font-size: 2.2cqw;
        font-weight: 700;
        color: #3a1a00;
        letter-spacing: 0.8px;
        line-height: 1;
        white-space: nowrap;
        text-align: right;
        flex-shrink: 0;
    }
    /* Website + logo — left end */
    .design28-wrapper .d28-footer-meta {
        display: flex;
        align-items: center;
        justify-content: flex-start;
        gap: 2cqw;
        min-width: 0;
    }
    .design28-wrapper .d28-footer-logo {
        flex-shrink: 0;
        display: flex;
        align-items: center;
    }
    .design28-wrapper .d28-footer-logo img {
        height: 5cqw;
        width: auto;
        max-width: 14cqw;
        object-fit: contain;
        display: block;
    }
    .design28-wrapper .d28-footer-logo-ph {
        background: {{ $themeColor }};
        border-radius: 0.8cqw;
        padding: 0.8cqw 1.8cqw;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .design28-wrapper .d28-footer-logo-ph span {
        font-family: 'Oswald', sans-serif;
        font-size: 2.2cqw;
        font-weight: 700;
        color: #ffffff;
        letter-spacing: 0.5px;
    }
    .design28-wrapper .d28-footer-divider {
        width: 1px;
        height: 4cqw;
        background: rgba(0,0,0,0.15);
        flex-shrink: 0;
    }
    .design28-wrapper .d28-footer-website {
        font-family: 'Open Sans', sans-serif;
        font-size: 2.1cqw;
        font-weight: 700;
        color: #555555;
        letter-spacing: 0.3px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    /* Address — centered below, unchanged */
    .design28-wrapper .d28-footer-address {
        font-family: 'Open Sans', sans-serif;
        font-size: 1.8cqw;
        font-weight: 600;
        color: #999999;
        letter-spacing: 0.3px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        max-width: 100%;
    }

    /* ── Download btn ── */
    .design28-wrapper .d28-download-btn {
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
    .design28-wrapper .d28-download-btn:hover    { opacity: .88; }
    .design28-wrapper .d28-download-btn:disabled { opacity: .5; cursor: not-allowed; }
</style>

<div class="design28-wrapper">
    <div class="design28-card" id="posterCard28">

        {{-- ══ WATERMARK BG ══ --}}
        <div class="d28-watermark" aria-hidden="true">
            @php $wm = !empty($menu['name']) ? mb_strtoupper(mb_substr($menu['name'], 0, 8)) : 'Zest Quest'; @endphp
            <span>{{ $wm }}</span><span>{{ $wm }}</span>
            <span>{{ $wm }}</span><span>{{ $wm }}</span>
            <span>{{ $wm }}</span>
        </div>

        {{-- ══ RIGHT ACCENT STRIP ══ --}}
        <div class="d28-right-strip"></div>

        {{-- ══ TOP-LEFT LOGO BADGE ══ --}}
        <div class="d28-logo-badge">
            @if (!empty($logourl))
                <img src="{{ $logourl }}" alt="logo" crossorigin="anonymous">
            @endif
        </div>

        {{-- ══ HEADLINE ══ --}}
        <div class="d28-headline">

            <span class="d28-hl-main">{{ $menu['name'] }}</span>
            <div class="d28-pill-badge">
                <span style="color: #ffffff;">Bite Into Bliss</span>
            </div>
        </div>

        {{-- ══ FOOD IMAGE ══ --}}
        <div class="d28-food">
            @if (!empty($menuImageUrl))
                <img src="{{ $menuImageUrl }}"
                     alt="{{ $menu['name'] ?? 'Food' }}"
                     class="js-poster-menu-image"
                     crossorigin="anonymous">
            @else
                <div class="d28-food-placeholder"></div>
            @endif
        </div>

        {{-- ══ HERB LEAVES ══ --}}
        <div class="d28-leaf" style="top:1cqw; right:5cqw;">
            <svg viewBox="0 0 40 60" width="10cqw" height="15cqw" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 55 Q2 35 8 15 Q14 2 20 5 Q26 2 32 15 Q38 35 20 55Z" fill="#4caf50"/>
                <path d="M20 55 Q20 30 20 5" stroke="#2e7d32" stroke-width="1.2" fill="none"/>
                <path d="M20 40 Q12 32 8 25" stroke="#2e7d32" stroke-width="0.8" fill="none"/>
                <path d="M20 40 Q28 32 32 25" stroke="#2e7d32" stroke-width="0.8" fill="none"/>
                <path d="M20 28 Q14 22 10 16" stroke="#2e7d32" stroke-width="0.8" fill="none"/>
                <path d="M20 28 Q26 22 30 16" stroke="#2e7d32" stroke-width="0.8" fill="none"/>
            </svg>
        </div>
        <div class="d28-leaf" style="top:5cqw; right:8cqw; transform:rotate(30deg);">
            <svg viewBox="0 0 30 45" width="7cqw" height="10cqw" xmlns="http://www.w3.org/2000/svg">
                <path d="M15 42 Q2 26 6 11 Q10 1 15 4 Q20 1 24 11 Q28 26 15 42Z" fill="#66bb6a"/>
                <path d="M15 42 Q15 22 15 4" stroke="#388e3c" stroke-width="1" fill="none"/>
            </svg>
        </div>
        <div class="d28-leaf" style="bottom:26cqw; left:1cqw; transform:rotate(-40deg);">
            <svg viewBox="0 0 30 45" width="7cqw" height="10cqw" xmlns="http://www.w3.org/2000/svg">
                <path d="M15 42 Q2 26 6 11 Q10 1 15 4 Q20 1 24 11 Q28 26 15 42Z" fill="#4caf50"/>
                <path d="M15 42 Q15 22 15 4" stroke="#2e7d32" stroke-width="1" fill="none"/>
            </svg>
        </div>
        <div class="d28-leaf" style="bottom:24cqw; right:6cqw; transform:rotate(20deg);">
            <svg viewBox="0 0 24 36" width="5cqw" height="8cqw" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 33 Q2 20 5 9 Q8 1 12 3 Q16 1 19 9 Q22 20 12 33Z" fill="#81c784"/>
                <path d="M12 33 Q12 16 12 3" stroke="#388e3c" stroke-width="0.8" fill="none"/>
            </svg>
        </div>

        {{-- ══ DESCRIPTION ══ --}}
        @if (!empty($menu['description']))
            <div class="d28-desc">
                <p>{{ mb_substr($menu['description'], 0, 100) }}{{ mb_strlen($menu['description']) > 100 ? '…' : '' }}</p>
            </div>
        @endif

        {{-- ══ ORDER NOW BUTTON ══ --}}
        <div class="d28-order-wrap">
            <div class="d28-order-btn">
                <span>Order Now</span>
            </div>
        </div>

        {{-- ══ FOOTER BAR ══ --}}
        <div class="d28-footer">

            {{-- Top row: website+logo LEFT — phone RIGHT --}}
            <div class="d28-footer-top-row">

                {{-- Left: logo + website --}}
                <div class="d28-footer-meta">


                    @if (!empty(@user()->website_domain))
                        <span class="d28-footer-website">{{ @user()->website_domain, }}</span>
                    @endif
                </div>

                {{-- Right: phone --}}
                @if (!empty(@user()->phone))
                    <span class="d28-footer-phone">{{ @user()->phone }}</span>
                @endif

            </div>

            {{-- Address — centered below, same position --}}
            @if (!empty(@user()->address))
                <span class="d28-footer-address">{{ @user()->address, 0, 44 }}</span>
            @endif

        </div>

    </div>{{-- /.design28-card --}}

    {{-- <button type="button" class="d28-download-btn" onclick="downloadDesign28()">&#8595; Download Poster</button> --}}

</div>{{-- /.design28-wrapper --}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<script>
    function downloadDesign28() {
        var card   = document.getElementById('posterCard28');
        var button = document.querySelector('.d28-download-btn');
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
                scale: scale, backgroundColor: '#fdf3d0',
                logging: false, useCORS: true, allowTaint: true, imageTimeout: 15000
            });
        }).then(function(canvas) {
            var link = document.createElement('a');
            link.download = 'menu-poster-design28.png';
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
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;700&family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

<style>
    /* ── Wrapper ── */
    .design27-wrapper {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        font-family: 'Open Sans', sans-serif;
    }

    /* ── Card ── */
    .design27-wrapper .design27-card {
        width: 100%;
        max-width: 380px;
        aspect-ratio: 4 / 5;
        position: relative;
        overflow: hidden;
        box-shadow: 0 16px 48px rgba(0,0,0,0.28);
        background: #ffffff;
        container-type: inline-size;
        box-sizing: border-box;
    }

    /* ══ L1: Food photo ══ */
    .design27-wrapper .d27-photo {
        position: absolute;
        top: 0; left: 0; right: 0;
        height: 50%;
        overflow: hidden;
        z-index: 2;
    }

    .design27-wrapper .d27-photo img {
        width: 100%; height: 100%;
        object-fit: cover; object-position: center; display: block;
    }

    .design27-wrapper .d27-photo-placeholder {
        width: 100%; height: 100%;
        background: {{$themeColor}};
    }

    /* Dot grid top-right */
    .design27-wrapper .d27-photo-dots {
        position: absolute;
        top: 5cqw; right: 5cqw;
        width: 14cqw; height: 14cqw;
        z-index: 4; pointer-events: none;
    }

   

    /* ══ L2: Middle split row ══ */
    .design27-wrapper .d27-mid-row {
        position: absolute;
        top: 50%; left: 0; right: 0;
        height: 30%;
        display: flex;
        z-index: 2;
        /* Divider border on top and bottom of entire middle row */
        border-top: 3px solid {{ $themeColor }};
        border-bottom: 3px solid {{ $themeColor }};
        box-sizing: border-box;
    }

    /* Left promo col */
    .design27-wrapper .d27-promo-col {
        width: 44%;
        background: {{ $themeColor }};
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: center;
        padding: 2cqw 4cqw;
        box-sizing: border-box;
        flex-shrink: 0;
        gap: 1.8cqw;
        /* Right border separator between the two columns */
        border-right: 3px solid rgba(0,0,0,0.18);
        text-align: start;
    }

    .design27-wrapper .d27-promo-logo {
        height: 7cqw;
        width: auto;
        max-width: 26cqw;
        object-fit: contain;
        display: block;
        flex-shrink: 0;
    }

    .design27-wrapper .d27-promo-tagline {
        font-family: 'Oswald', sans-serif;
        font-size: 6.2cqw;
        font-weight: 700;
        color: #fff;
        line-height: 1.15;
        margin: 0;
        text-transform: uppercase;
        letter-spacing: 0.3px;
    }

    .design27-wrapper .d27-promo-tagline span {
        font-family: 'Oswald', sans-serif;
        font-size: 6.2cqw;
        font-weight: 700;
        color: {{ $themeColor }};
        line-height: 1.15;
        margin: 0;
        text-transform: uppercase;
        letter-spacing: 0.3px;
    }

    .design27-wrapper .d27-promo-address {
        display: flex;
        align-items: flex-start;
        gap: 1.2cqw;
        width: 100%;
    }

    .design27-wrapper .d27-promo-address svg {
        width: 3cqw; height: 3cqw;
        flex-shrink: 0; margin-top: 0.3cqw; display: block;
    }

    .design27-wrapper .d27-promo-address p {
        font-family: 'Open Sans', sans-serif;
        font-size: 2cqw;
        font-weight: 400;
        color: #1a1a1a;
        line-height: 1.4;
        margin: 0;
        opacity: 0.8;
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
    }

    /* Right dark headline col */
    .design27-wrapper .d27-headline-col {
        flex: 1;
        background: #1a1a1a;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: center;
        padding: 3cqw 4cqw;
        box-sizing: border-box;
        position: relative;
        overflow: hidden;
        gap: 1.5cqw;
        text-align: start;
    }

    .design27-wrapper .d27-headline-col h2 {
        font-family: 'Oswald', sans-serif;
        font-size: 6.5cqw;
        font-weight: 700;
        color: #ffffff;
        line-height: 1.1;
        margin: 0;
        text-transform: uppercase;
        letter-spacing: 0.3px;
        position: relative;
        z-index: 2;
    }

    .design27-wrapper .d27-headline-col h2 span {
        color: {{ $themeColor }};
        font-weight: 900;
    }

    .design27-wrapper .d27-col-desc {
        font-family: 'Open Sans', sans-serif;
        font-size: 2cqw;
        color: rgba(255,255,255,0.6);
        line-height: 1.5;
        margin: 0;
        position: relative;
        z-index: 2;
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
    }

    .design27-wrapper .d27-dark-dots {
        position: absolute;
        right: 3cqw; top: 3cqw;
        width: 10cqw; height: 10cqw;
        z-index: 1; pointer-events: none;
    }

    /* ══ L3: "Best in Chicago" promo strip ══ */
    .design27-wrapper .d27-promo-sect {
        position: absolute;
        top: 80%; left: 0; right: 0;
        height: 10%;
        z-index: 2;
        overflow: hidden;
        /* Top & bottom border for section separation */
        border-top: 2px solid {{ $themeColor }};
        border-bottom: 2px solid {{ $themeColor }};
        box-sizing: border-box;
        /* Off-white base */
        background-color: #F5F0EB;
        /* Diagonal stripe texture */
        background-image:
            repeating-linear-gradient(
                -45deg,
                transparent,
                transparent 6px,
                rgba(0,0,0,0.025) 6px,
                rgba(0,0,0,0.025) 7px
            );
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 0 4cqw;
        box-sizing: border-box;
    }

    /* Faint left decorative rule */
    .design27-wrapper .d27-promo-sect-rule {
        flex: 1;
        height: 1px;
        background: rgba(0,0,0,0.12);
        flex-shrink: 0;
    }

    /* Star/diamond ornament */
    .design27-wrapper .d27-promo-sect-ornament {
        font-size: 2.8cqw;
        color: {{ $themeColor }};
        line-height: 1;
        flex-shrink: 0;
        margin: 0 2cqw;
        opacity: 0.8;
    }

    .design27-wrapper .d27-promo-tagline-text {
        font-family: 'Oswald', sans-serif;
        font-size: 4.2cqw;
        font-weight: 700;
        color: #1a1a1a;
        text-transform: uppercase;
        letter-spacing: 2px;
        line-height: 1;
        white-space: nowrap;
        flex-shrink: 0;
        margin: 0 2cqw;
        display: flex;
        align-items: baseline;
        /*text-align: start;*/
    }

    .design27-wrapper .d27-promo-tagline-text span {
        display: inline-block;
        font-family: 'Oswald', sans-serif;
        font-size: 4.2cqw;
        font-weight: 700;
        line-height: 1;
        vertical-align: baseline;
        color: {{ $themeColor }};
        margin-left: 0.5ch;
    }

    /* ══ L4: Footer ══ */
    .design27-wrapper .d27-footer {
        position: absolute;
        bottom: 0; left: 0; right: 0;
        height: 10%;
        z-index: 3;
        display: flex;
        align-items: stretch;
        overflow: hidden;
        /* Top border on footer */
        border-top: 2px solid {{ $themeColor }};
        box-sizing: border-box;
    }

    .design27-wrapper .d27-footer-band-left {
        width: 50%;
        background: #1a1a1a;
        border-right: 0.8cqw solid {{ $themeColor }};
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: center;
        padding: 0 4cqw;
        box-sizing: border-box;
        flex-shrink: 0;
        gap: 0.5cqw;
    }

    .design27-wrapper .d27-footer-brand {
        font-family: 'Oswald', sans-serif;
        font-size: 2.8cqw;
        font-weight: 700;
        color: {{ $themeColor }};
        letter-spacing: 0.5px;
        text-transform: uppercase;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        line-height: 1;
    }

    .design27-wrapper .d27-footer-address {
        font-family: 'Open Sans', sans-serif;
        font-size: 1.8cqw;
        font-weight: 400;
        color: rgba(255,255,255,0.55);
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        line-height: 1;
        letter-spacing: 0.2px;
    }

    .design27-wrapper .d27-footer-band-right {
        flex: 1;
        background: {{ $themeColor }};
        display: flex;
        flex-direction: column;
        align-items: flex-end;
        justify-content: center;
        padding: 0 4cqw;
        box-sizing: border-box;
        gap: 0.8cqw;
    }

    .design27-wrapper .d27-footer-website {
        font-family: 'Open Sans', sans-serif;
        font-size: 2cqw;
        font-weight: 700;
        color: #1a1a1a;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        letter-spacing: 0.3px;
        line-height: 1;
    }

    .design27-wrapper .d27-footer-phone {
        font-family: 'Oswald', sans-serif;
        font-size: 2.6cqw;
        font-weight: 700;
        color: #1a1a1a;
        white-space: nowrap;
        letter-spacing: 0.5px;
        line-height: 1;
    }

    /* ── Download btn ── */
    .design27-wrapper .d27-download-btn {
        margin-top: 10px;
        background: {{ $themeColor }};
        color: #1a1a1a;
        border: none;
        padding: 8px 18px;
        font-size: 12px;
        font-weight: 700;
        border-radius: 30px;
        cursor: pointer;
        font-family: 'Open Sans', sans-serif;
        transition: opacity 0.2s;
    }
    .design27-wrapper .d27-download-btn:hover    { opacity: .88; }
    .design27-wrapper .d27-download-btn:disabled { opacity: .5; cursor: not-allowed; }
</style>

<div class="design27-wrapper">
    <div class="design27-card" id="posterCard27">

        {{-- ── L1: Food photo ── --}}
        <div class="d27-photo">
            @if (!empty($menuImageUrl))
                <img src="{{ $menuImageUrl }}"
                     alt="{{ $menu['name'] ?? 'Food' }}"
                     class="js-poster-menu-image"
                     crossorigin="anonymous">
            @else
                <div class="d27-photo-placeholder"></div>
            @endif

            {{-- Dot grid --}}
            <div class="d27-photo-dots">
                <svg viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                    <g fill="{{ $themeColor }}" opacity="0.9">
                        <circle cx="6"  cy="6"  r="2.2"/><circle cx="16" cy="6"  r="2.2"/><circle cx="26" cy="6"  r="2.2"/><circle cx="36" cy="6"  r="2.2"/>
                        <circle cx="6"  cy="16" r="2.2"/><circle cx="16" cy="16" r="2.2"/><circle cx="26" cy="16" r="2.2"/><circle cx="36" cy="16" r="2.2"/>
                        <circle cx="6"  cy="26" r="2.2"/><circle cx="16" cy="26" r="2.2"/><circle cx="26" cy="26" r="2.2"/>
                        <circle cx="6"  cy="36" r="2.2"/><circle cx="16" cy="36" r="2.2"/>
                    </g>
                </svg>
            </div>

            
        </div>

        {{-- ── L2: Middle split row ── --}}
        <div class="d27-mid-row">

            {{-- Left: theme colour promo col --}}
            <div class="d27-promo-col">
                @if (!empty($logourl))
                    <img src="{{ $logourl }}" alt="logo" class="d27-promo-logo" crossorigin="anonymous">
                @endif
                <p class="d27-promo-tagline">Freshly Made, Daily Delights</p>
            </div>

            {{-- Right: dark headline col --}}
            <div class="d27-headline-col">
                @if (!empty($menu['name']))
                    <h2>{!! nl2br(e($menu['name'])) !!}</h2>
                @endif
                @if (!empty($menu['description']))
                    <p class="d27-col-desc">{{ Str::limit($menu['description'], 80, '…') }}</p>
                @endif
                <div class="d27-dark-dots">
                    <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                        <g fill="#ffffff" opacity="0.22">
                            <circle cx="6"  cy="6"  r="1.8"/><circle cx="14" cy="6"  r="1.8"/><circle cx="22" cy="6"  r="1.8"/>
                            <circle cx="6"  cy="14" r="1.8"/><circle cx="14" cy="14" r="1.8"/>
                            <circle cx="6"  cy="22" r="1.8"/>
                        </g>
                    </svg>
                </div>
            </div>

        </div>

        {{-- ── L3: "Best in Chicago" strip ── --}}
        <div class="d27-promo-sect">
            <div class="d27-promo-sect-rule"></div>
            <span class="d27-promo-sect-ornament">&#9670;</span>
            <p class="d27-promo-tagline-text">Best In <span>Chicago</span></p>
            <span class="d27-promo-sect-ornament">&#9670;</span>
            <div class="d27-promo-sect-rule"></div>
        </div>

        {{-- ── L4: Footer ── --}}
        <div class="d27-footer">
            <div class="d27-footer-band-left">
                <span class="d27-footer-brand">{{ @user()->name ?? '' }}</span>
                @if (!empty(@user()->address))
                    <span class="d27-footer-address">{{ @user()->address }}</span>
                @endif
            </div>
            <div class="d27-footer-band-right">
                @if (!empty(@user()->website_domain))
                    <span class="d27-footer-website">{{ @user()->website_domain }}</span>
                @endif
                @if (!empty(@user()->phone))
                    <span class="d27-footer-phone">{{ @user()->phone }}</span>
                @endif
            </div>
        </div>

    </div>{{-- /.design27-card --}}

    {{-- <button type="button" class="d27-download-btn" onclick="downloadDesign27()">&#8595; Download Poster</button> --}}

</div>{{-- /.design27-wrapper --}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<script>
    function downloadDesign27() {
        var card   = document.getElementById('posterCard27');
        var button = document.querySelector('.d27-download-btn');
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
                scale: scale, backgroundColor: '#ffffff',
                logging: false, useCORS: true, allowTaint: true, imageTimeout: 15000
            });
        }).then(function(canvas) {
            var link = document.createElement('a');
            link.download = 'menu-poster-design27.png';
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
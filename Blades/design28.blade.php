<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

<style>
    /* ── Wrapper ── */
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
        max-width: 340px;
        aspect-ratio: 17 / 24;
        position: relative;
        overflow: hidden;
        box-shadow: 0 20px 60px rgba(0,0,0,0.25);
        background: {{ $themeColor }};
        container-type: inline-size;
        box-sizing: border-box;
    }

    /* ── Dot grid — top right ── */
    .design28-wrapper .d28-dots {
        position: absolute;
        top: 0;
        right: 0;
        width: 30cqw;
        height: 20cqw;
        z-index: 2;
        pointer-events: none;
    }
    .design28-wrapper .d28-dots svg {
        width: 100%;
        height: 100%;
    }

    /* ── Top bar ── */
    .design28-wrapper .d28-topbar {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 10cqw;
        z-index: 5;
        display: flex;
        align-items: center;
        padding: 0 4cqw;
    }
    .design28-wrapper .d28-logo-box {
        display: flex;
        align-items: center;
        gap: 2cqw;
    }
    .design28-wrapper .d28-logo-icon {
        width: 8cqw;
        height: 8cqw;
        background: #1a1a1a;
        border-radius: 1.5cqw;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }
    .design28-wrapper .d28-logo-icon img {
        width: 5cqw;
        height: 5cqw;
        object-fit: contain;
    }
    .design28-wrapper .d28-logo-icon svg {
        width: 5cqw;
        height: 5cqw;
    }
    .design28-wrapper .d28-logo-text {
        font-family: 'Oswald', sans-serif;
        font-size: 4.5cqw;
        font-weight: 700;
        color: #1a1a1a;
        letter-spacing: 0.5px;
    }

    /* ── Headline block ── */
    .design28-wrapper .d28-headline {
        position: absolute;
        top: 10cqw;
        left: 4cqw;
        right: 4cqw;
        z-index: 5;
    }
    .design28-wrapper .d28-headline h1 {
        font-family: 'Oswald', sans-serif;
        font-size: 13cqw;
        font-weight: 700;
        color: #1a1a1a;
        line-height: 1.0;
        margin: 0 0 2cqw 0;
        text-transform: uppercase;
        letter-spacing: -0.5px;
    }
    .design28-wrapper .d28-headline p {
        font-size: 2.3cqw;
        color: #1a1a1a;
        line-height: 1.55;
        margin: 0;
        opacity: 0.72;
        max-width: 52cqw;
    }

    /* ── Food image circle ── */
    .design28-wrapper .d28-food-circle {
        position: absolute;
        top: 34cqw;
        left: 50%;
        transform: translateX(-50%);
        width: 62cqw;
        height: 62cqw;
        border-radius: 50%;
        overflow: hidden;
        z-index: 4;
        border: 1.5cqw solid #ffffff;
        box-sizing: border-box;
    }
    .design28-wrapper .d28-food-circle img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        display: block;
    }
    .design28-wrapper .d28-food-placeholder {
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, #c8a060, #8a5a20);
    }

    /* ── Discount badge ── */
    .design28-wrapper .d28-discount {
        position: absolute;
        top: 64cqw;
        right: 3cqw;
        width: 20cqw;
        height: 20cqw;
        border-radius: 50%;
        background: {{ $themeColor }};
        border: 0.9cqw solid #1a1a1a;
        z-index: 7;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        box-sizing: border-box;
    }
    .design28-wrapper .d28-disc-pct {
        font-family: 'Oswald', sans-serif;
        font-size: 7cqw;
        font-weight: 700;
        color: #1a1a1a;
        line-height: 1;
    }
    .design28-wrapper .d28-disc-label {
        font-size: 2cqw;
        font-weight: 700;
        color: #1a1a1a;
        letter-spacing: 1px;
        text-transform: uppercase;
        line-height: 1;
        margin-top: 0.3cqw;
    }

    /* ── Doodle icons ── */
    .design28-wrapper .d28-doodle {
        position: absolute;
        z-index: 3;
        opacity: 0.18;
    }
    .design28-wrapper .d28-doodle svg {
        display: block;
    }

    /* ── Dark CTA band ── */
    .design28-wrapper .d28-cta-band {
        position: absolute;
        top: 96cqw;
        left: 0;
        right: 0;
        height: 20cqw;
        background: #1a1a1a;
        z-index: 5;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: center;
        padding: 0 4cqw;
    }
    .design28-wrapper .d28-cta-label {
        font-size: 2.2cqw;
        font-weight: 600;
        color: {{ $themeColor }};
        letter-spacing: 2.5px;
        text-transform: uppercase;
        margin: 0 0 1cqw 0;
    }
    .design28-wrapper .d28-cta-phone {
        font-family: 'Oswald', sans-serif;
        font-size: 9cqw;
        font-weight: 700;
        color: #ffffff;
        line-height: 1;
        letter-spacing: 0.5px;
        margin: 0;
    }

    /* ── Two-column text block ── */
    .design28-wrapper .d28-twocol {
        position: absolute;
        top: 117cqw;
        left: 0;
        right: 0;
        z-index: 5;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 2cqw;
        padding: 0 4cqw;
    }
    .design28-wrapper .d28-twocol p {
        font-size: 2.2cqw;
        color: #1a1a1a;
        line-height: 1.55;
        margin: 0;
        opacity: 0.72;
    }

    /* ── Footer strip ── */
    .design28-wrapper .d28-footer {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 8cqw;
        background: #1a1a1a;
        z-index: 6;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 3cqw;
    }
    .design28-wrapper .d28-footer-label {
        font-size: 2.2cqw;
        color: rgba(255,255,255,0.6);
        letter-spacing: 0.4px;
    }
    .design28-wrapper .d28-footer-socials {
        font-size: 2.2cqw;
        color: rgba(255,255,255,0.45);
        letter-spacing: 1px;
    }
    .design28-wrapper .d28-footer-url {
        font-size: 2.4cqw;
        font-weight: 700;
        color: {{ $themeColor }};
        letter-spacing: 0.4px;
    }

    /* ── Download btn ── */
    .design28-wrapper .d28-download-btn {
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
    .design28-wrapper .d28-download-btn:hover    { opacity: .88; }
    .design28-wrapper .d28-download-btn:disabled { opacity: .5; cursor: not-allowed; }
</style>

<div class="design28-wrapper">
    <div class="design28-card" id="posterCard28">

        {{-- Dot grid top-right --}}
        <div class="d28-dots">
            <svg viewBox="0 0 100 80" xmlns="http://www.w3.org/2000/svg">
                <g fill="#1a1a1a" opacity="0.35">
                    <circle cx="12" cy="12" r="2.5"/><circle cx="28" cy="12" r="2.5"/><circle cx="44" cy="12" r="2.5"/><circle cx="60" cy="12" r="2.5"/><circle cx="76" cy="12" r="2.5"/><circle cx="92" cy="12" r="2.5"/>
                    <circle cx="12" cy="28" r="2.5"/><circle cx="28" cy="28" r="2.5"/><circle cx="44" cy="28" r="2.5"/><circle cx="60" cy="28" r="2.5"/><circle cx="76" cy="28" r="2.5"/><circle cx="92" cy="28" r="2.5"/>
                    <circle cx="12" cy="44" r="2.5"/><circle cx="28" cy="44" r="2.5"/><circle cx="44" cy="44" r="2.5"/><circle cx="60" cy="44" r="2.5"/><circle cx="76" cy="44" r="2.5"/><circle cx="92" cy="44" r="2.5"/>
                    <circle cx="12" cy="60" r="2.5"/><circle cx="28" cy="60" r="2.5"/><circle cx="44" cy="60" r="2.5"/><circle cx="60" cy="60" r="2.5"/><circle cx="76" cy="60" r="2.5"/>
                    <circle cx="12" cy="76" r="2.5"/><circle cx="28" cy="76" r="2.5"/><circle cx="44" cy="76" r="2.5"/>
                </g>
            </svg>
        </div>

        {{-- Top bar: logo --}}
        <div class="d28-topbar">
            <div class="d28-logo-box">
                <div class="d28-logo-icon">
                    @if (!empty($logourl))
                        <img src="{{ $logourl }}" alt="logo" crossorigin="anonymous">
                    @else
                        <svg viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="3" y="10" width="14" height="3" rx="1.5" fill="{{ $themeColor }}"/>
                            <rect x="5" y="7"  width="10" height="3" rx="1.5" fill="{{ $themeColor }}"/>
                            <rect x="2" y="13" width="16" height="2" rx="1"   fill="{{ $themeColor }}"/>
                        </svg>
                    @endif
                </div>
                <span class="d28-logo-text">{{ @user()->name ?? 'Logo' }}</span>
            </div>
        </div>

        {{-- Headline --}}
        <div class="d28-headline">
            <h1>{{ $restaurant->name ?? 'American Food Restaurant' }}</h1>
            @if (!empty($restaurant->description))
                <p>{{ Str::limit($restaurant->description, 120, '…') }}</p>
            @else
                <p>Lorem ipsum dolor sit amet, vis damu sit amet. Sed suis eumod mandamus lorem ipsum.</p>
            @endif
        </div>

        {{-- Food image circle --}}
        <div class="d28-food-circle">
            @if (!empty($menuImageUrl))
                <img src="{{ $menuImageUrl }}"
                     alt="{{ $menu['name'] ?? 'Food' }}"
                     class="js-poster-menu-image"
                     crossorigin="anonymous">
            @else
                <div class="d28-food-placeholder"></div>
            @endif
        </div>

        {{-- Discount badge --}}
        <div class="d28-discount">
            <span class="d28-disc-pct">50%</span>
            <span class="d28-disc-label">Discount</span>
        </div>

        {{-- Doodle: burger icon — left mid --}}
        <div class="d28-doodle" style="top:70cqw; left:1cqw; width:10cqw; height:10cqw;">
            <svg viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg" style="width:100%;height:100%">
                <rect x="6" y="18" width="22" height="10" rx="5" stroke="#1a1a1a" stroke-width="2"/>
                <rect x="10" y="13" width="14" height="6"  rx="3" stroke="#1a1a1a" stroke-width="2"/>
                <rect x="4"  y="28" width="26" height="3"  rx="1.5" stroke="#1a1a1a" stroke-width="1.5"/>
                <ellipse cx="17" cy="11" rx="9" ry="4" stroke="#1a1a1a" stroke-width="1.8"/>
            </svg>
        </div>

        {{-- Doodle: fries icon — right upper --}}
        <div class="d28-doodle" style="top:44cqw; right:1cqw; width:9cqw; height:14cqw;">
            <svg viewBox="0 0 28 44" fill="none" xmlns="http://www.w3.org/2000/svg" style="width:100%;height:100%">
                <rect x="10" y="0"  width="8"  height="22" rx="2" stroke="#1a1a1a" stroke-width="1.8"/>
                <rect x="6"  y="22" width="16" height="8"  rx="2" stroke="#1a1a1a" stroke-width="1.8"/>
                <rect x="4"  y="30" width="20" height="8"  rx="4" stroke="#1a1a1a" stroke-width="1.8"/>
                <rect x="6"  y="38" width="5"  height="6"  rx="1" stroke="#1a1a1a" stroke-width="1.5"/>
                <rect x="17" y="38" width="5"  height="6"  rx="1" stroke="#1a1a1a" stroke-width="1.5"/>
            </svg>
        </div>

        {{-- Doodle: pizza/plate icon — bottom left --}}
        <div class="d28-doodle" style="bottom:16cqw; left:1.5cqw; width:9cqw; height:9cqw;">
            <svg viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg" style="width:100%;height:100%">
                <circle cx="15" cy="15" r="11" stroke="#1a1a1a" stroke-width="2"/>
                <path d="M8 15 Q15 8 22 15" stroke="#1a1a1a" stroke-width="1.5" fill="none"/>
                <circle cx="11" cy="13" r="1.5" fill="#1a1a1a"/>
                <circle cx="19" cy="13" r="1.5" fill="#1a1a1a"/>
                <path d="M11 18 Q15 22 19 18" stroke="#1a1a1a" stroke-width="1.5" fill="none"/>
            </svg>
        </div>

        {{-- Doodle: star — top left decorative --}}
        <div class="d28-doodle" style="top:9cqw; right:32cqw; width:6cqw; height:6cqw;">
            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="width:100%;height:100%">
                <path d="M12 2l2.4 7.4H22l-6.2 4.5 2.4 7.4L12 17l-6.2 4.3 2.4-7.4L2 9.4h7.6z" stroke="#1a1a1a" stroke-width="1.8" fill="none"/>
            </svg>
        </div>

        {{-- Dark CTA band --}}
        <div class="d28-cta-band">
            <p class="d28-cta-label">Call for order now</p>
            <p class="d28-cta-phone">{{ @user()->phone ?? '+1-234-5678' }}</p>
        </div>

        {{-- Two-column text --}}
        <div class="d28-twocol">
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
        </div>

        {{-- Footer --}}
        <div class="d28-footer">
            <span class="d28-footer-label">Follow us on</span>
            <span class="d28-footer-socials">f &nbsp; &#9675; &nbsp; in</span>
            <span class="d28-footer-url">{{ @user()->website_domain ?? 'www.yoursite.com' }}</span>
        </div>

    </div>{{-- /.design28-card --}}

    {{-- <button type="button" class="d28-download-btn" onclick="downloadDesign28()">&#8595; Download Poster</button> --}}

</div>{{-- /.design28-wrapper --}}
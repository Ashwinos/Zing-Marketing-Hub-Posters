<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Jost:wght@300;400;500;600&display=swap"
    rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<style>
    .design17-wrapper {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        font-family: 'Jost', sans-serif;
    }

    .design17-wrapper .design17-card {
        width: 100%;
        aspect-ratio: 4/5;
        max-width: 340px;
        position: relative;
        overflow: hidden;
        flex-shrink: 0;
        box-sizing: border-box;
        background: #faf7f2;
        border: 1px solid rgba(139, 104, 69, .2);
        display: flex;
        flex-direction: column;
        container-type: inline-size;
    }

    .design17-wrapper .design17-card::before {
        content: "";
        position: absolute;
        inset: 0;
        background-image: radial-gradient(rgba(139, 104, 69, .09) 1px, transparent 1px);
        background-size: 18px 18px;
        opacity: .5;
        pointer-events: none;
        z-index: 0;
    }

    /* HEADER */
    .design17-wrapper .design17-header {
        position: relative;
        z-index: 2;
        background: #2c1f14;
        padding: 3% 4%;
        flex-shrink: 0;
    }

    .design17-wrapper .design17-logo-wrap {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 8px;
    }

    .design17-wrapper .design17-logo-ring {
        width: auto;
        height: 2rem;
        overflow: hidden;
        border: 1.5px solid rgba(210, 175, 110, .5);
        flex-shrink: 0;
    }

    .design17-wrapper .design17-logo-ring img {
        width: auto;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    .design17-wrapper .design17-logo-text {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 2px;
    }

    .design17-wrapper .design17-restaurant-name {
        font-family: 'Cormorant Garamond', serif !important;
        color: #f4e7d1 !important;
        font-size: 4cqw !important;
        letter-spacing: 3px !important;
        text-transform: uppercase !important;
        line-height: 1;
        text-align: center;
    }

    .design17-wrapper .design17-tagline {
        color: #d2af6e;
        font-size: 2.2cqw;
        letter-spacing: 3px;
        text-transform: uppercase;
        text-align: center;
    }

    .design17-wrapper .design17-gold-line {
        margin-top: 4%;
        height: 1px;
        background: linear-gradient(to right, transparent, #d2af6e, transparent);
    }

    /* HERO */
    .design17-wrapper .design17-hero {
        position: relative;
        z-index: 2;
        padding: 5% 6.5% 4%;
        flex: 1;
    }

    .design17-wrapper .design17-badge {
        display: inline-block;
        color: #8b6845 !important;
        font-size: 2.1cqw !important;
        letter-spacing: 2.5px !important;
        text-transform: uppercase !important;
        margin-bottom: 3.5%;
    }

    .design17-wrapper .design17-title {
        font-family: 'Cormorant Garamond', serif !important;
        font-size: 10cqw !important;
        line-height: .95;
        color: #2c1f14;
    }

    .design17-wrapper .design17-title em {
        font-style: italic;
        color: #8b6845;
        font-weight: 400;
    }

    .design17-wrapper .design17-description {
        font-size: 10px !important;
        margin-top: 3.5%;
        color: #7a6550;
        font-size: 2.6cqw;
        line-height: 1.85;
    }

    .design17-wrapper .design17-price-row {
        margin-top: 4%;
        display: flex;
        justify-content: flex-end;
    }

    .design17-wrapper .design17-order-btn {
        background: #2c1f14;
        color: #f4e7d1;
        border: none;
        border-left: 3px solid #d2af6e;
        padding: 2.5% 5%;
        font-size: 2.2cqw;
        letter-spacing: 2px;
        text-transform: uppercase;
        cursor: pointer;
        font-family: 'Jost', sans-serif;
    }

    /* SVG */
    .design17-wrapper .design17-food-svg-wrap {
        position: relative;
        z-index: 2;
        padding: 3% 5% 2.5%;
        border-top: 1px solid rgba(139, 104, 69, .15);
        border-bottom: 1px solid rgba(139, 104, 69, .15);
        flex-shrink: 0;
    }

    .design17-wrapper .design17-food-svg-wrap svg {
        width: 100%;
        display: block;
    }

    /* FOOTER */
    .design17-wrapper .design17-footer {
        position: relative;
        z-index: 2;
        background: #2c1f14;
        flex-shrink: 0;
    }

    /* ADDRESS */
    .design17-wrapper .design17-footer-address-bar {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 2%;
        padding: 3% 5%;
        border-bottom: 1px solid rgba(210, 175, 110, .15);
        text-align: center;
        color: #c8a97a;
        font-size: 2.2cqw;
        letter-spacing: .4px;
        line-height: 1.55;
        max-width: 90%;
        margin: 0 auto;
    }

    .design17-wrapper .design17-footer-address-bar i {
        color: #d2af6e;
        font-size: 2.4cqw;
        flex-shrink: 0;
    }

    /* CONTACTS */
    .design17-wrapper .design17-footer-contacts {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 1%;
        gap: 5%;
    }

    .design17-wrapper .design17-contact-item {
        display: flex;
        align-items: center;
        gap: 6px;
        color: #c8a97a !important;
        font-size: 2.2cqw !important;
        letter-spacing: .3px !important;
        text-align: center;
    }

    .design17-wrapper .design17-contact-item i {
        color: #d2af6e;
        font-size: 2.4cqw;
        flex-shrink: 0;
    }

    .design17-wrapper .design17-footer-mid-divider {
        width: 1px;
        height: 5cqw;
        background: rgba(210, 175, 110, .22);
        flex-shrink: 0;
    }
</style>

<div class="design17-wrapper">

    <div class="design17-card" id="posterCard17">

        {{-- HEADER --}}
        <div class="design17-header">

            <div class="design17-logo-wrap">

                {{-- LOGO above --}}
                <div class="design17-logo-ring">
                    @if(isset($logourl) && $logourl)
                        <img src="{{ $logourl }}" alt="logo" crossorigin="anonymous">
                    @endif    
                </div>

                {{-- NAME below --}}
                <div class="design17-logo-text">
                    <div class="design17-restaurant-name">
                        {{ @user()->name ?? ' ' }}
                    </div>

                    @if(@user()->tagline)
                        <div class="design17-tagline">
                            {{ @user()->tagline }}
                        </div>
                    @endif
                </div>

            </div>

            <div class="design17-gold-line"></div>

        </div>

        {{-- HERO --}}
        <div class="design17-hero">

            <div class="design17-badge">
                ★ Fan Favorite ★
            </div>

            <div class="design17-title">
                @if(strlen(@$menu['name']) <= 20)
                    {{ @$menu['name'] }}
                @endif
            </div>

            <div class="design17-description">
                {{ \Illuminate\Support\Str::limit($menu['description'] ?? '', 150, '...') }}
            </div>

            <div class="design17-price-row">
                <button class="design17-order-btn">
                    Order Now
                </button>
            </div>

        </div>

        {{-- SVG --}}
        <div class="design17-food-svg-wrap">
            <svg viewBox="0 0 432 120" xmlns="http://www.w3.org/2000/svg">
                <ellipse cx="216" cy="80" rx="120" ry="20" fill="none" stroke="#c8a97a" stroke-width="1.2"/>
                <path d="M140 45 Q216 105 292 45" fill="none" stroke="#2c1f14" stroke-width="3"/>
                <path d="M185 20 Q175 10 185 0" fill="none" stroke="#8b6845" stroke-width="2" stroke-linecap="round"/>
                <path d="M216 25 Q206 12 216 0" fill="none" stroke="#8b6845" stroke-width="2" stroke-linecap="round"/>
                <path d="M247 20 Q237 10 247 0" fill="none" stroke="#8b6845" stroke-width="2" stroke-linecap="round"/>
                <line x1="300" y1="20" x2="340" y2="70" stroke="#d2af6e" stroke-width="3" stroke-linecap="round"/>
                <ellipse cx="292" cy="13" rx="10" ry="14" fill="none" stroke="#d2af6e" stroke-width="2"/>
                <circle cx="160" cy="72" r="6" fill="none" stroke="#c8a97a" stroke-width="1"/>
                <circle cx="272" cy="68" r="4" fill="none" stroke="#c8a97a" stroke-width="1"/>
            </svg>
        </div>

        {{-- FOOTER --}}
        <div class="design17-footer">

            {{-- ADDRESS --}}
            <div class="design17-footer-address-bar">
                <i class="bi bi-geo-alt-fill"></i>
                {{ @user()->address ?? ' ' }}
            </div>

            {{-- CONTACTS --}}
            <div class="design17-footer-contacts">

                <div class="design17-contact-item">
                    <i class="bi bi-telephone-fill"></i>
                    {{ @user()->phone ?? ' ' }}
                </div>

                <div class="design17-footer-mid-divider"></div>

                <div class="design17-contact-item">
                    <i class="bi bi-globe"></i>
                    {{ @user()->website_domain ?? ' ' }}
                </div>

            </div>

        </div>

    </div>

</div>
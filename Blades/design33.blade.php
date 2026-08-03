<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton&family=Open+Sans:wght@400;600;700;800;900&family=Poppins:wght@400;500&display=swap" rel="stylesheet">

<style>
    .design33-wrapper {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        font-family: 'Open Sans', sans-serif;
    }

    .design33-wrapper .design33-card {
        width: 100%;
        max-width: 340px;
        aspect-ratio: 4 / 5;
        position: relative;
        overflow: hidden;
        background: #fffbf2;
        box-shadow: 0 20px 60px rgba(0,0,0,0.22);
        container-type: inline-size;
        box-sizing: border-box;
        display: flex;
        flex-direction: column;
    }

    /* ══ Header block ══ */
    .design33-wrapper .d33-header {
        position: relative;
        width: 100%;
        height: 47%;
        background: #ffffff;
        overflow: hidden;
        flex-shrink: 0;
    }

    /* ══ Accent stripe — LEFT edge ══ */
    .design33-wrapper .d33-accent-stripe {
        position: absolute;
        top: 0; left: 0;
        width: 2cqw; height: 100%;
        background: {{ $themeColor }};
        z-index: 1;
    }

    /* ══ Top-left corner decoration (texture) ══ */
    .design33-wrapper .d33-corner-decor {
        position: absolute;
        top: 0; left: 0;
        width: 90cqw;
        height: auto;
        z-index: 0;
        pointer-events: none;
        transform: scaleX(-1); /* mirror so the texture still "flows" inward from this side */
    }
    .design33-wrapper .d33-corner-decor img {
        display: block;
        width: 100%;
        height: auto;
    }

    /* ══ Logo — top-RIGHT ══ */
    .design33-wrapper .d33-logo {
           /* position: relative; */
        z-index: 10;
        /* margin: 15cqw 0 4cqw 0; */
        width: 100%;
        display: flex;
        justify-content: flex-end;
        position: absolute;
        right: 17px;
        top: 10px;
    }

    .design33-wrapper .d33-logo img {
        height: 2rem;
        width: auto;
        display: block;
    }

    /* ══ Header content ══ */
    .design33-wrapper .d33-header-content {
        position: relative;
        z-index: 2;
        width: 100%;
        height: 100%;
        padding: 4cqw 6cqw 5cqw 6cqw;
        display: flex;
        flex-direction: column;
        justify-content: center;
        box-sizing: border-box;
    }

    /* ══ Headline — bold editorial, overlapping ══ */
    .design33-wrapper .d33-headline {
        margin: 0 0 2cqw;
        line-height: 0.85;
            position: absolute;
    top: 34px;
    }

    .design33-wrapper .d33-headline-accent {
        display: block;
        font-family: 'Anton', sans-serif;
        font-size: 9cqw;
        font-style: italic;
        letter-spacing: 0.01em;
        color: {{ $themeColor }};
        transform: rotate(-4deg) skewX(-3deg);
        transform-origin: left bottom;
        
        position: absolute;
        bottom: 76px;
        z-index: 2;
    }

    .design33-wrapper .d33-headline-main {
        display: block;
        font-family: 'Anton', sans-serif;
        font-size: 26cqw;
        letter-spacing: -0.01em;
        color: #1a1a1a;
        margin-top: 0;
        position: relative;
        z-index: 1;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        text-shadow: 2px 2px 0 rgba(0,0,0,0.05);
        line-height: 1.4;
    }

    /* ══ Contact row ══ */
    .design33-wrapper .d33-contact-row {
           margin-top: 2.5cqw;
        z-index: 3;
        position: absolute;
        top: 155px;
    }

    .design33-wrapper .d33-contact-item {
        display: flex;
        align-items: center;
        margin-bottom: 1.6cqw;
    }

    .design33-wrapper .d33-contact-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 12px; height: 12px;
        min-width: 12px; min-height: 12px;
        border-radius: 50%;
        background: {{ $themeColor }};
        margin-right: 1.2cqw;
        flex-shrink: 0;
    }
    .design33-wrapper .d33-contact-icon svg { display: block; width: 7px; height: 7px; }

    .design33-wrapper .d33-contact-text {
        font-family: 'Poppins', sans-serif;
        font-size: 7px;
        font-weight: 400;
        color: #1a1a1a;
        letter-spacing: 0.2px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    /* ══ Photo block — full-bleed, no rounding ══ */
    .design33-wrapper .d33-photo-block {
        position: relative;
        width: 100%;
        height: 53%;
        flex-shrink: 0;
        overflow: hidden;
        background: {{ $themeColor }};
    }

    .design33-wrapper .d33-photo-block img {
        position: absolute;
        top: 0; left: 0;
        width: 100%; height: 100%;
        object-fit: cover;
        object-position: center;
        display: block;
        z-index: 1;
    }

    .design33-wrapper .d33-photo-placeholder {
        position: absolute;
        top: 0; left: 0;
        width: 100%; height: 100%;
        background: radial-gradient(circle at 40% 35%, #c1722f 0%, #8a4a1f 60%, #6e3a18 100%);
        z-index: 1;
    }

    /* ══ Darkening overlay so text stays legible over the photo ══ */
    .design33-wrapper .d33-photo-overlay {
        position: absolute;
        bottom: 0; left: 0;
        width: 100%; height: 45%;
        background: linear-gradient(to top, rgba(0,0,0,0.65), rgba(0,0,0,0));
        z-index: 2;
        pointer-events: none;
    }

    .design33-wrapper .d33-menu-name {
        font-size: 4.4cqw;
        font-weight: 800;
        color: #ffffff;
        text-shadow: 0 2px 6px rgba(0,0,0,0.7);
        letter-spacing: 0.3px;
        margin: 0;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    .design33-wrapper .d33-menu-desc {
        font-size: 2.3cqw;
        font-weight: 500;
        color: #f0e8e0;
        text-shadow: 0 2px 5px rgba(0,0,0,0.7);
        margin: 0.8cqw 0 0;
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
    }

    /* ── Download btn ── */
    .design33-wrapper .d33-download-btn {
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
    .design33-wrapper .d33-download-btn:hover    { opacity: .88; }
    .design33-wrapper .d33-download-btn:disabled { opacity: .5; cursor: not-allowed; }
</style>

<div class="design33-wrapper">
    <div class="design33-card" id="posterCard33" style="background: #fffbf2;">

        {{-- ══ HEADER BLOCK ══ --}}
        <div class="d33-header" style="background: #fffbf2;">

            {{-- ══ Top-LEFT corner decoration (texture) ══ --}}
            <div class="d33-corner-decor">
                <img src="{{ asset('img/posters/design33/texture.png') }}" alt="decoration" crossorigin="anonymous" width="600" height="600">
            </div>

            {{-- ══ Accent stripe — left edge ══ --}}
            <div class="d33-accent-stripe" style="background: {{ $themeColor }};"></div>

            <div class="d33-header-content">

                {{-- ══ Logo — top-right ══ --}}
                @if (!empty($logourl))
                    <div class="d33-logo">
                        <img src="{{ $logourl }}" alt="logo" crossorigin="anonymous">
                    </div>
                @endif

                {{-- ══ Headline — bold editorial, overlapping ══ --}}
                <h1 class="d33-headline" style="--d33-accent-color: {{ $themeColor }};">
                    <span class="d33-headline-accent">Eat. Love.</span>
                    <span class="d33-headline-main">Repeat</span>
                </h1>

                {{-- ══ Contact row ══ --}}
                <div class="d33-contact-row">
                    @if (!empty(@user()->phone))
                        <div class="d33-contact-item">
                            <span class="d33-contact-icon" style="background: {{ $themeColor }};">
                                <svg width="7" height="7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.6 10.8c1.4 2.8 3.8 5.2 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.5 2.3.8 3.6.8.6 0 1 .4 1 1v3.4c0 .6-.4 1-1 1C10.6 21.2 2.8 13.4 2.8 4.6c0-.6.4-1 1-1H7.2c.6 0 1 .4 1 1 0 1.3.3 2.5.8 3.6.2.3.1.7-.2 1L6.6 10.8z" fill="#ffffff"/>
                                </svg>
                            </span>
                            <span class="d33-contact-text">{{ @user()->phone }}</span>
                        </div>
                    @endif
                    @if (!empty(@user()->website_domain))
                        <div class="d33-contact-item">
                            <span class="d33-contact-icon" style="background: {{ $themeColor }};">
                                <svg width="7" height="7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="12" cy="12" r="9" stroke="#ffffff" stroke-width="2" fill="none"/>
                                    <path d="M3 12h18M12 3c2.5 2.5 2.5 15.5 0 18M12 3c-2.5 2.5-2.5 15.5 0 18" stroke="#ffffff" stroke-width="1.6" fill="none"/>
                                </svg>
                            </span>
                            <span class="d33-contact-text">{{ @user()->website_domain }}</span>
                        </div>
                    @endif
                </div>

            </div>
        </div>

        {{-- ══ PHOTO BLOCK — full bleed, no rounding ══ --}}
        <div class="d33-photo-block">

            @if (isset($menuImageUrl) && $menuImageUrl)
                <img src="{{ $menuImageUrl }}"
                     alt="{{ $menu['name'] }}"
                     class="js-poster-menu-image"
                     crossorigin="anonymous">
            
            @endif

            {{-- ══ Overlay for text legibility ══ --}}
            <div class="d33-photo-overlay"></div>

        </div>

    </div>{{-- /.design33-card --}}

    {{-- <button type="button" class="d33-download-btn" onclick="downloadDesign33()">&#8595; Download Poster</button> --}}

</div>{{-- /.design33-wrapper --}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<script>
    function downloadDesign33() {
        var card   = document.getElementById('posterCard33');
        var button = document.querySelector('.d33-download-btn');
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
            link.download = 'menu-poster-design33.png';
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
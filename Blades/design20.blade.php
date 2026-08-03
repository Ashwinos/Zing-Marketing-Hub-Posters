<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Bebas+Neue&family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">

<style>
    .design20-wrapper {
        display: flex;
        flex-direction: column;
        align-items: center;
        font-family: "Lato", sans-serif;
    }
    .design20-wrapper .d20-dl-btn {
        margin-top: 16px;
        background: #343a40;
        color: #fff;
        border: none;
        padding: 10px 22px;
        font-size: 13px;
        font-weight: 600;
        font-family: "Lato", sans-serif;
        border-radius: 8px;
        cursor: pointer;
        transition: background .18s;
    }
    .design20-wrapper .d20-dl-btn:hover    { background: #495057; }
    .design20-wrapper .d20-dl-btn:disabled { opacity: .65; cursor: default; }
</style>

<div class="design20-wrapper">

    {{-- ALL structural styles are INLINE — guarantees html2canvas / headless-Chrome export fidelity --}}
    <div id="posterCard20"
         style="position:relative;width:340px;height:425px;overflow:hidden;background-color:#263238;box-shadow:0 28px 80px rgba(0,0,0,.65);flex-shrink:0;font-family:'Lato',sans-serif;">

        {{-- L0: Dark background --}}
        <div style="position:absolute;top:0;left:0;right:0;bottom:0;z-index:0;background-color:#263238;"></div>

        {{-- L1: Crosshatch grid — built from plain <line> elements, NOT a <pattern>/url() fill. --}}
        {{-- Pattern fills depend on the renderer resolving url(#id) references inside <defs>, which is the
             single most failure-prone step in headless/server-side SVG rasterization (timing + isolated-frame
             rendering + occasional id collisions). Plain lines have no indirection, so they paint identically
             in every renderer — html2canvas, headless Chrome/Puppeteer, or a normal browser. --}}
        <svg width="340" height="425"
             style="position:absolute;top:0;left:0;width:340px;height:425px;z-index:1;"
             viewBox="0 0 340 425" xmlns="http://www.w3.org/2000/svg">
                <line x1="0" y1="0" x2="0" y2="425" stroke="#ffffff" stroke-width="1" stroke-opacity="0.15"/>
                <line x1="20" y1="0" x2="20" y2="425" stroke="#ffffff" stroke-width="1" stroke-opacity="0.15"/>
                <line x1="40" y1="0" x2="40" y2="425" stroke="#ffffff" stroke-width="1" stroke-opacity="0.15"/>
                <line x1="60" y1="0" x2="60" y2="425" stroke="#ffffff" stroke-width="1" stroke-opacity="0.15"/>
                <line x1="80" y1="0" x2="80" y2="425" stroke="#ffffff" stroke-width="1" stroke-opacity="0.15"/>
                <line x1="100" y1="0" x2="100" y2="425" stroke="#ffffff" stroke-width="1" stroke-opacity="0.15"/>
                <line x1="120" y1="0" x2="120" y2="425" stroke="#ffffff" stroke-width="1" stroke-opacity="0.15"/>
                <line x1="140" y1="0" x2="140" y2="425" stroke="#ffffff" stroke-width="1" stroke-opacity="0.15"/>
                <line x1="160" y1="0" x2="160" y2="425" stroke="#ffffff" stroke-width="1" stroke-opacity="0.15"/>
                <line x1="180" y1="0" x2="180" y2="425" stroke="#ffffff" stroke-width="1" stroke-opacity="0.15"/>
                <line x1="200" y1="0" x2="200" y2="425" stroke="#ffffff" stroke-width="1" stroke-opacity="0.15"/>
                <line x1="220" y1="0" x2="220" y2="425" stroke="#ffffff" stroke-width="1" stroke-opacity="0.15"/>
                <line x1="240" y1="0" x2="240" y2="425" stroke="#ffffff" stroke-width="1" stroke-opacity="0.15"/>
                <line x1="260" y1="0" x2="260" y2="425" stroke="#ffffff" stroke-width="1" stroke-opacity="0.15"/>
                <line x1="280" y1="0" x2="280" y2="425" stroke="#ffffff" stroke-width="1" stroke-opacity="0.15"/>
                <line x1="300" y1="0" x2="300" y2="425" stroke="#ffffff" stroke-width="1" stroke-opacity="0.15"/>
                <line x1="320" y1="0" x2="320" y2="425" stroke="#ffffff" stroke-width="1" stroke-opacity="0.15"/>
                <line x1="340" y1="0" x2="340" y2="425" stroke="#ffffff" stroke-width="1" stroke-opacity="0.15"/>
                <line x1="0" y1="0" x2="340" y2="0" stroke="#ffffff" stroke-width="1" stroke-opacity="0.15"/>
                <line x1="0" y1="20" x2="340" y2="20" stroke="#ffffff" stroke-width="1" stroke-opacity="0.15"/>
                <line x1="0" y1="40" x2="340" y2="40" stroke="#ffffff" stroke-width="1" stroke-opacity="0.15"/>
                <line x1="0" y1="60" x2="340" y2="60" stroke="#ffffff" stroke-width="1" stroke-opacity="0.15"/>
                <line x1="0" y1="80" x2="340" y2="80" stroke="#ffffff" stroke-width="1" stroke-opacity="0.15"/>
                <line x1="0" y1="100" x2="340" y2="100" stroke="#ffffff" stroke-width="1" stroke-opacity="0.15"/>
                <line x1="0" y1="120" x2="340" y2="120" stroke="#ffffff" stroke-width="1" stroke-opacity="0.15"/>
                <line x1="0" y1="140" x2="340" y2="140" stroke="#ffffff" stroke-width="1" stroke-opacity="0.15"/>
                <line x1="0" y1="160" x2="340" y2="160" stroke="#ffffff" stroke-width="1" stroke-opacity="0.15"/>
                <line x1="0" y1="180" x2="340" y2="180" stroke="#ffffff" stroke-width="1" stroke-opacity="0.15"/>
                <line x1="0" y1="200" x2="340" y2="200" stroke="#ffffff" stroke-width="1" stroke-opacity="0.15"/>
                <line x1="0" y1="220" x2="340" y2="220" stroke="#ffffff" stroke-width="1" stroke-opacity="0.15"/>
                <line x1="0" y1="240" x2="340" y2="240" stroke="#ffffff" stroke-width="1" stroke-opacity="0.15"/>
                <line x1="0" y1="260" x2="340" y2="260" stroke="#ffffff" stroke-width="1" stroke-opacity="0.15"/>
                <line x1="0" y1="280" x2="340" y2="280" stroke="#ffffff" stroke-width="1" stroke-opacity="0.15"/>
                <line x1="0" y1="300" x2="340" y2="300" stroke="#ffffff" stroke-width="1" stroke-opacity="0.15"/>
                <line x1="0" y1="320" x2="340" y2="320" stroke="#ffffff" stroke-width="1" stroke-opacity="0.15"/>
                <line x1="0" y1="340" x2="340" y2="340" stroke="#ffffff" stroke-width="1" stroke-opacity="0.15"/>
                <line x1="0" y1="360" x2="340" y2="360" stroke="#ffffff" stroke-width="1" stroke-opacity="0.15"/>
                <line x1="0" y1="380" x2="340" y2="380" stroke="#ffffff" stroke-width="1" stroke-opacity="0.15"/>
                <line x1="0" y1="400" x2="340" y2="400" stroke="#ffffff" stroke-width="1" stroke-opacity="0.15"/>
                <line x1="0" y1="420" x2="340" y2="420" stroke="#ffffff" stroke-width="1" stroke-opacity="0.15"/>
        </svg>

        {{-- L2: White corner triangle (SVG polygon, clip-path unreliable in some exports) --}}
        <svg width="340" height="425"
             style="position:absolute;top:0;left:0;width:340px;height:425px;z-index:2;pointer-events:none;"
             viewBox="0 0 340 425" xmlns="http://www.w3.org/2000/svg">
            <polygon points="0,0 92,0 0,94" fill="#ffffff"/>
        </svg>

        {{-- LOGO top-left --}}
        <div style="position:absolute;top:8px;left:8px;z-index:22;height:2rem;width:auto;border:1px solid white;overflow:hidden;display:flex;align-items:center;">
            @if (isset($logourl) && $logourl)
                <img src="{{ $logourl }}" alt="logo" crossorigin="anonymous"
                     style="height:100%;width:auto;display:block;object-fit:contain;">
            @endif
        </div>

        {{-- Central content --}}
        <div style="position:absolute;left:50%;top:50%;transform:translate(-50%,-50%);z-index:9;text-align:center;height:100%;display:flex;justify-content:center;align-items:center;flex-direction:column;width:100%;">

            {{-- Food image --}}
            @if (isset($menuImageUrl) && $menuImageUrl)
                <img class="js-poster-menu-image"
                     src="{{ $menuImageUrl }}"
                     crossorigin="anonymous"
                     alt="{{ @$menu['name'] ?? '' }}"
                     style="width:150px;height:150px;z-index:15;object-fit:cover;border-radius:50%;border:2px solid white;margin-bottom:1rem;display:block;box-shadow:0 16px 34px rgba(0,0,0,.85);">
            @endif

            {{-- Headline band --}}
            <div style="position:relative;text-align:center;z-index:8;padding:15px;width:100%;">

                {{-- Solid colour band --}}
                <div style="position:absolute;top:0;left:0;right:0;bottom:0;background-color:{{ $themeColor }};z-index:0;"></div>

                {{-- Crosshatch grid on band — same plain-line approach, no pattern/url() fill. --}}
                <svg width="340" height="120"
                     style="position:absolute;top:0;left:0;width:100%;height:100%;z-index:1;pointer-events:none;"
                     viewBox="0 0 340 120" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
                            <line x1="0" y1="0" x2="0" y2="120" stroke="#ffffff" stroke-width="1" stroke-opacity="0.2"/>
                            <line x1="20" y1="0" x2="20" y2="120" stroke="#ffffff" stroke-width="1" stroke-opacity="0.2"/>
                            <line x1="40" y1="0" x2="40" y2="120" stroke="#ffffff" stroke-width="1" stroke-opacity="0.2"/>
                            <line x1="60" y1="0" x2="60" y2="120" stroke="#ffffff" stroke-width="1" stroke-opacity="0.2"/>
                            <line x1="80" y1="0" x2="80" y2="120" stroke="#ffffff" stroke-width="1" stroke-opacity="0.2"/>
                            <line x1="100" y1="0" x2="100" y2="120" stroke="#ffffff" stroke-width="1" stroke-opacity="0.2"/>
                            <line x1="120" y1="0" x2="120" y2="120" stroke="#ffffff" stroke-width="1" stroke-opacity="0.2"/>
                            <line x1="140" y1="0" x2="140" y2="120" stroke="#ffffff" stroke-width="1" stroke-opacity="0.2"/>
                            <line x1="160" y1="0" x2="160" y2="120" stroke="#ffffff" stroke-width="1" stroke-opacity="0.2"/>
                            <line x1="180" y1="0" x2="180" y2="120" stroke="#ffffff" stroke-width="1" stroke-opacity="0.2"/>
                            <line x1="200" y1="0" x2="200" y2="120" stroke="#ffffff" stroke-width="1" stroke-opacity="0.2"/>
                            <line x1="220" y1="0" x2="220" y2="120" stroke="#ffffff" stroke-width="1" stroke-opacity="0.2"/>
                            <line x1="240" y1="0" x2="240" y2="120" stroke="#ffffff" stroke-width="1" stroke-opacity="0.2"/>
                            <line x1="260" y1="0" x2="260" y2="120" stroke="#ffffff" stroke-width="1" stroke-opacity="0.2"/>
                            <line x1="280" y1="0" x2="280" y2="120" stroke="#ffffff" stroke-width="1" stroke-opacity="0.2"/>
                            <line x1="300" y1="0" x2="300" y2="120" stroke="#ffffff" stroke-width="1" stroke-opacity="0.2"/>
                            <line x1="320" y1="0" x2="320" y2="120" stroke="#ffffff" stroke-width="1" stroke-opacity="0.2"/>
                            <line x1="340" y1="0" x2="340" y2="120" stroke="#ffffff" stroke-width="1" stroke-opacity="0.2"/>
                            <line x1="0" y1="0" x2="340" y2="0" stroke="#ffffff" stroke-width="1" stroke-opacity="0.2"/>
                            <line x1="0" y1="20" x2="340" y2="20" stroke="#ffffff" stroke-width="1" stroke-opacity="0.2"/>
                            <line x1="0" y1="40" x2="340" y2="40" stroke="#ffffff" stroke-width="1" stroke-opacity="0.2"/>
                            <line x1="0" y1="60" x2="340" y2="60" stroke="#ffffff" stroke-width="1" stroke-opacity="0.2"/>
                            <line x1="0" y1="80" x2="340" y2="80" stroke="#ffffff" stroke-width="1" stroke-opacity="0.2"/>
                            <line x1="0" y1="100" x2="340" y2="100" stroke="#ffffff" stroke-width="1" stroke-opacity="0.2"/>
                            <line x1="0" y1="120" x2="340" y2="120" stroke="#ffffff" stroke-width="1" stroke-opacity="0.2"/>
                </svg>

                {{-- Text content --}}
                <div style="position:relative;z-index:2;">
                    <p style="font-family:'Pacifico',cursive;font-style:normal;font-size:30px;font-weight:400;color:#000;line-height:1;margin:0 0 6px 0;letter-spacing:1px;opacity:0.88;">Delicious</p>
                    <p style="font-family:'Bebas Neue',cursive;font-size:32px;font-weight:400;color:#111;letter-spacing:4px;text-transform:uppercase;line-height:1;margin:0 0 6px 0;">
                        @if (!empty($menu['name']) && strlen($menu['name']) <= 20)
                            {{ strtoupper($menu['name']) }}
                        @endif
                    </p>
                    <p style="font-size:9px;font-weight:300;color:#000;line-height:1.3;margin:4px 0 0 0;letter-spacing:0.8px;font-family:'Lato',sans-serif;">
                        {{ \Illuminate\Support\Str::limit(@$menu['description'] ?? '', 80, '...') }}
                    </p>
                </div>
            </div>

            {{-- Address strip --}}
            <div style="background-color:#000000;width:100%;padding:5px 10px;color:white;font-size:11px;font-family:'Lato',sans-serif;text-align:center;position:relative;z-index:2;box-sizing:border-box;">
                {{ @user()->address ?? '' }}
            </div>

        </div>{{-- /central --}}

        {{-- Bottom bar: website + phone --}}
        <div style="position:absolute;left:0;bottom:0;width:100%;display:flex;justify-content:space-between;z-index:9;padding:10px 15px;color:white;font-family:'Lato',sans-serif;box-sizing:border-box;background-color:transparent;">
            <div style="font-size:9px;color:#ffffff;">{{ @user()->website_domain ?? '' }}</div>
            <div style="font-size:9px;color:#ffffff;">{{ @user()->phone ?? '' }}</div>
        </div>

    </div>{{-- /#posterCard20 --}}

    {{-- <button type="button" class="d20-dl-btn" onclick="downloadDesign20()">&#8595; Download Poster</button> --}}

</div>{{-- /.design20-wrapper --}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<script>
    function downloadDesign20() {
        var card   = document.getElementById('posterCard20');
        var button = document.querySelector('.d20-dl-btn');
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
                scale:           scale,
                backgroundColor: '#263238',
                logging:         false,
                useCORS:         true,
                allowTaint:      true,
                imageTimeout:    15000
            });
        }).then(function(canvas) {
            var link      = document.createElement('a');
            link.download = 'menu-poster-design20.png';
            link.href     = canvas.toDataURL('image/png', 1.0);
            link.click();
            button.innerHTML = 'Download Poster';
            button.disabled  = false;
        }).catch(function(error) {
            console.error('Error generating image:', error);
            alert('Failed to generate image. Please try again.');
            button.innerHTML = 'Download Poster';
            button.disabled  = false;
        });
    }
</script>
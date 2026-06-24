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

    {{-- ALL structural styles are INLINE — guarantees html2canvas export fidelity --}}
    <div id="posterCard20"
         style="position:relative;width:340px;height:425px;overflow:hidden;background-color:#263238;box-shadow:0 28px 80px rgba(0,0,0,.65);flex-shrink:0;font-family:'Lato',sans-serif;">

        {{-- L0: Dark background --}}
        <div style="position:absolute;top:0;left:0;right:0;bottom:0;z-index:0;background-color:#263238;"></div>

        {{-- L1: Crosshatch pattern via SVG --}}
        <svg style="position:absolute;top:0;left:0;width:340px;height:425px;z-index:1;opacity:0.15;"
             viewBox="0 0 340 425" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="d20ch" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                    <line x1="0"  y1="0"  x2="0"  y2="20" stroke="#59AF16" stroke-width="1.2"/>
                    <line x1="10" y1="0"  x2="10" y2="20" stroke="#59AF16" stroke-width="1.2"/>
                    <line x1="0"  y1="0"  x2="20" y2="0"  stroke="#59AF16" stroke-width="1.2"/>
                    <line x1="0"  y1="10" x2="20" y2="10" stroke="#59AF16" stroke-width="1.2"/>
                </pattern>
            </defs>
            <rect width="340" height="425" fill="url(#d20ch)"/>
        </svg>

        {{-- L2: White corner triangle (SVG polygon, clip-path unreliable in some exports) --}}
        <svg style="position:absolute;top:0;left:0;width:340px;height:425px;z-index:2;pointer-events:none;"
             viewBox="0 0 340 425" xmlns="http://www.w3.org/2000/svg">
            <polygon points="0,0 92,0 0,94" fill="#ffffff"/>
        </svg>

        {{-- LOGO top-left --}}
        <div style="position:absolute;top:8px;left:8px;z-index:22;height:2rem;width:auto;border:1px solid white;overflow:hidden;display:flex;align-items:center;">
            @if (isset($logourl) && $logourl)
                <img src="{{ $logourl }}" alt="logo" crossorigin="anonymous"
                     style="height:100%;width:auto;display:block;object-fit:contain;">
            
                </div>
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

                {{-- Crosshatch overlay on band --}}
                <svg style="position:absolute;top:0;left:0;width:100%;height:100%;z-index:1;opacity:0.18;pointer-events:none;"
                     viewBox="0 0 340 120" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <pattern id="d20chb" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                            <line x1="0"  y1="0"  x2="0"  y2="20" stroke="#fff" stroke-width="1.2"/>
                            <line x1="10" y1="0"  x2="10" y2="20" stroke="#fff" stroke-width="1.2"/>
                            <line x1="0"  y1="0"  x2="20" y2="0"  stroke="#fff" stroke-width="1.2"/>
                            <line x1="0"  y1="10" x2="20" y2="10" stroke="#fff" stroke-width="1.2"/>
                        </pattern>
                    </defs>
                    <rect width="340" height="120" fill="url(#d20chb)"/>
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
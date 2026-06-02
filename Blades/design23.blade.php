<link
    href="https://fonts.googleapis.com/css2?family=Anton&family=Lato:wght@400;700;900&display=swap"
    rel="stylesheet">

<style>
    .design23-wrapper {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        font-family: 'Lato', sans-serif;
    }

    /* ── Card: Instagram 4:5 ratio ── */
    .design23-wrapper .design23-card {
        width: 100%;
        max-width: 340px;
        aspect-ratio: 4 / 5;
        background: #E8000A;
        overflow: hidden;
        position: relative;
        box-sizing: border-box;
        box-shadow: 0 16px 50px rgba(0, 0, 0, 0.28);
        container-type: inline-size;
        display: flex;
        flex-direction: column;
        border: 3px solid #a100c2;
    }

    /* ══════════════════════════
       TOP FOOD IMAGE — 52% of card height
    ══════════════════════════ */
    .design23-wrapper .d23-image-block {
        position: relative;
        width: 100%;
        height: 52cqw;
        flex-shrink: 0;
        overflow: hidden;
    }

    .design23-wrapper .d23-image-block img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center top;
        display: block;
    }

    .design23-wrapper .d23-image-placeholder {
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, #8B0000 0%, #cc2200 100%);
    }

    /* ══════════════════════════
       BOTTOM RED TEXT AREA
    ══════════════════════════ */
    .design23-wrapper .d23-text-block {
        flex: 1;
        min-height: 0;
        background: #E8000A;
        padding: 3cqw 4cqw 3cqw;
        position: relative;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    /* ── Row 1: LUNCH + ORDER NOW badge ── */
    .design23-wrapper .d23-row1 {
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
        line-height: 1;
    }

    .design23-wrapper .d23-lunch {
        font-family: 'Anton', sans-serif;
        font-size: 21cqw;
        color: #F5E642;
        line-height: 0.88;
        letter-spacing: 1px;
        text-transform: uppercase;
        text-shadow: 2px 2px 0 rgba(0, 0, 0, 0.18);
    }

    .design23-wrapper .d23-order-badge {
        background: #F5E642;
        color: #1a1a1a;
        font-family: 'Lato', sans-serif;
        font-weight: 900;
        font-size: 2.6cqw;
        letter-spacing: 1px;
        text-transform: uppercase;
        padding: 1.2cqw 2cqw;
        white-space: nowrap;
        margin-top: 2cqw;
        flex-shrink: 0;
    }

    /* ── Row 2: FAST & FRESH + TIME + BUY 1 GET 1 FREE ── */
    .design23-wrapper .d23-row2 {
        display: flex;
        align-items: flex-end;
        gap: 2cqw;
        margin-top: -1cqw;
    }

    .design23-wrapper .d23-time-col {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
    }

    .design23-wrapper .d23-fast-tag {
        background: #F5E642;
        color: #1a1a1a;
        font-family: 'Lato', sans-serif;
        font-weight: 900;
        font-size: 2.4cqw;
        letter-spacing: 1px;
        text-transform: uppercase;
        padding: 0.6cqw 1.8cqw;
        margin-bottom: 0.5cqw;
        white-space: nowrap;
    }

    .design23-wrapper .d23-time {
        font-family: 'Anton', sans-serif;
        font-size: 21cqw;
        color: #F5E642;
        line-height: 0.88;
        letter-spacing: 1px;
        text-transform: uppercase;
        text-shadow: 2px 2px 0 rgba(0, 0, 0, 0.18);
    }

    .design23-wrapper .d23-offer {
        flex: 1;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: flex-end;
        padding-bottom: 0.5cqw;
    }

    .design23-wrapper .d23-buy1 {
        font-family: 'Anton', sans-serif;
        font-size: 7.5cqw;
        color: #fff;
        line-height: 1;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        text-shadow: 1px 1px 0 rgba(0, 0, 0, 0.15);
    }

    /* ── Download button ── */
    .design23-wrapper .d23-download-btn {
        margin-top: 10px;
        background: #E8000A;
        color: #fff;
        border: none;
        padding: 8px 16px;
        font-size: 12px;
        font-weight: 700;
        border-radius: 30px;
        cursor: pointer;
        font-family: 'Lato', sans-serif;
        display: flex;
        align-items: center;
        gap: 8px;
        letter-spacing: 0.04em;
        transition: opacity 0.2s, transform 0.15s;
        box-shadow: 0 4px 16px rgba(232, 0, 10, 0.4);
    }

    .design23-wrapper .d23-download-btn:hover { opacity: .88; transform: translateY(-2px); }
    .design23-wrapper .d23-download-btn:active { transform: translateY(0); }
    .design23-wrapper .d23-download-btn:disabled { opacity: 0.5; cursor: not-allowed; transform: none; }
</style>

<div class="design23-wrapper">

    <div class="design23-card" id="posterCard23">

        {{-- ══ TOP FOOD IMAGE ══ --}}
        <div class="d23-image-block">
            @if (isset($menuImageUrl) && $menuImageUrl)
                <img src="{{ $menuImageUrl }}" alt="{{ @$menu['name'] ?? 'Menu Item' }}"
                    class="js-poster-menu-image" crossorigin="anonymous">
            @else
                <div class="d23-image-placeholder"></div>
            @endif
        </div>

        {{-- ══ BOTTOM TEXT AREA ══ --}}
        <div class="d23-text-block">

            {{-- Row 1: LUNCH + ORDER NOW --}}
            <div class="d23-row1">
                <div class="d23-lunch">LUNCH</div>
                <div class="d23-order-badge">ORDER NOW</div>
            </div>

            {{-- Row 2: TIME + BUY 1 GET 1 FREE --}}
            <div class="d23-row2">
                <div class="d23-time-col">
                    <div class="d23-fast-tag">FAST &amp; FRESH</div>
                    <div class="d23-time">TIME</div>
                </div>
                <div class="d23-offer">
                    <div class="d23-buy1">BUY 1</div>
                    <div class="d23-buy1">GET 1</div>
                    <div class="d23-buy1">FREE</div>
                </div>
            </div>

        </div>{{-- /.d23-text-block --}}

    </div>{{-- /.design23-card --}}

    {{-- Download button --}}
    {{-- <button type="button" class="d23-download-btn" onclick="downloadDesign23()">
        Download Poster
    </button> --}}

</div>{{-- /.design23-wrapper --}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

<script>
    function downloadDesign23() {
        var card = document.getElementById('posterCard23');
        var button = document.querySelector('.d23-download-btn');

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
            link.download = 'menu-poster-design23.png';
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
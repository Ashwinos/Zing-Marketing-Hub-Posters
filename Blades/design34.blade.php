<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&family=Sacramento&display=swap" rel="stylesheet">

<style>
    .design34-wrapper {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        font-family: 'Poppins', sans-serif;
    }

    .design34-wrapper .design34-card {
        width: 100%;
        max-width: 340px;
        aspect-ratio: 4 / 5;
        position: relative;
        overflow: hidden;
        background: #f3eee1;
        box-shadow: 0 20px 60px rgba(0,0,0,0.22);
        container-type: inline-size;
        box-sizing: border-box;
        display: flex;
        flex-direction: column;
    }

    /* ══ Decorative dotted border strip — left edge ══ */
    .design34-wrapper .d34-side-deco {
        position: absolute;
        top: 0; left: 0;
        width: 9cqw;
        height: 100%;
        z-index: 1;
        pointer-events: none;
    }
    .design34-wrapper .d34-side-deco svg { display: block; width: 100%; height: 100%; }

    /* ══ Top bar — social dots left, website right ══ */
    .design34-wrapper .d34-topbar {
        position: relative;
        z-index: 6;
        flex-shrink: 0;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 4.5cqw 5.5cqw 2cqw 11cqw;
    }

    .design34-wrapper .d34-social-dots {
        display: flex;
        align-items: center;
        gap: 1.4cqw;
    }

    .design34-wrapper .d34-social-dots span {
        width: 2.6cqw; height: 2.6cqw;
        border-radius: 50%;
        background: #D2691E;
        display: block;
    }

    .design34-wrapper .d34-topbar-website {
        font-family: 'Poppins', sans-serif;
        font-size: 2.1cqw;
        font-weight: 500;
        color: #3a3a3a;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    /* ══ Photo block — large, rounded ══ */
    .design34-wrapper .d34-photo-wrap {
        position: relative;
        z-index: 4;
        flex-shrink: 0;
        margin: 0 0 0 11cqw;
        height: 70%;
        border-radius: 3cqw 0 0 3cqw;
        overflow: hidden;
    }

    .design34-wrapper .d34-photo-wrap img {
        position: absolute;
        top: 0; left: 0;
        width: 100%; height: 100%;
        object-fit: cover;
        object-position: center center;
        display: block;
    }

    .design34-wrapper .d34-photo-placeholder {
        position: absolute;
        top: 0; left: 0;
        width: 100%; height: 100%;
        background: radial-gradient(circle at 50% 60%, #3a3a3a 0%, #1a1a1a 75%);
    }

    /* ══ Logo row — outside the photo, bottom-right, above the footer ══ */
    .design34-wrapper .d34-logo-row {
           position: absolute;
            top: -37px;
            right: -5px;
            display: flex;
            justify-content: flex-end;
            /* margin-top: 2.5cqw; */
       
    }

    .design34-wrapper .d34-logo-img {
        height: auto;
        max-height: 2rem;
        width: auto;
        max-width: 100%;
        display: block;
    }

    /* ══ Lower content — special offer + description ══ */
    .design34-wrapper .d34-lower {
        position: relative;
        z-index: 4;
        flex: 1;
        min-height: 0;
        margin: 0 5.5cqw 0 11cqw;
        padding-top: 4cqw;
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
    }

    .design34-wrapper .d34-offer-label {
        font-family: 'Poppins', sans-serif;
        font-weight: 700;
        font-size: 2.4cqw;
        letter-spacing: 0.12em;
        text-transform: uppercase;
        color: #D2691E;
        margin: 0 0 1.4cqw;
    }

    .design34-wrapper .d34-desc {
        font-family: 'Poppins', sans-serif;
        font-weight: 400;
        font-size: 2.1cqw;
        line-height: 1.6;
        color: #6b6b6b;
        margin: 0;
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
       
    }

    /* ══ Footer — phone / website ══ */
    .design34-wrapper .d34-footer {
        margin-top: auto;
        padding: 3cqw 0 4cqw;
        display: flex;
        align-items: center;
        justify-content: flex-start;
        flex-wrap: wrap;
    }

    .design34-wrapper .d34-contact-item {
        display: flex;
        align-items: center;
        gap: 1.2cqw;
        padding-right: 3cqw;
    }

    .design34-wrapper .d34-contact-item.d34-contact-right {
        margin-left: auto;
        padding-right: 0;
    }

    .design34-wrapper .d34-contact-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 5.4cqw; height: 5.4cqw;
        min-width: 5.4cqw; min-height: 5.4cqw;
        border-radius: 50%;
        background: #D2691E;
        flex-shrink: 0;
        box-sizing: border-box;
    }

    .design34-wrapper .d34-contact-icon svg { display: block; width: 2.6cqw; height: 2.6cqw; }

    .design34-wrapper .d34-contact-text {
        font-family: 'Poppins', sans-serif;
        font-size: 2.1cqw;
        font-weight: 500;
        color: #2a2a2a;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    /* ── Download btn ── */
    .design34-wrapper .d34-download-btn {
        margin-top: 10px;
        background: #D2691E;
        color: #ffffff;
        border: none;
        padding: 8px 18px;
        font-size: 12px;
        font-weight: 700;
        border-radius: 30px;
        cursor: pointer;
        font-family: 'Poppins', sans-serif;
        transition: opacity 0.2s;
    }
    .design34-wrapper .d34-download-btn:hover    { opacity: .88; }
    .design34-wrapper .d34-download-btn:disabled { opacity: .5; cursor: not-allowed; }
</style>

<div class="design34-wrapper">
    <div class="design34-card" id="posterCard34" style="background: #f3eee1;">

        {{-- ══ Decorative dotted-leaf border — left edge, self-contained SVG, unique id scoped to Design 34 ══ --}}
        <div class="d34-side-deco">
            <svg viewBox="0 0 36 400" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">
                @php $dotRows = 50; @endphp
                @for ($i = 0; $i < $dotRows; $i++)
                    @php $y = 6 + $i * 8; @endphp
                    <circle cx="6" cy="{{ $y }}" r="1.4" fill="#D2691E" opacity="0.55"/>
                @endfor
                {{-- corner leaf flourishes --}}
                <path d="M18 14 C28 18 30 28 22 34 C18 24 12 18 18 14Z" fill="#D2691E" opacity="0.3"/>
                <path d="M18 366 C28 362 30 372 22 378 C18 368 12 362 18 366Z" fill="#D2691E" opacity="0.3"/>
            </svg>
        </div>

        {{-- ══ Top bar ══ --}}
        <div class="d34-topbar">
            <div class="d34-social-dots">
                <span></span><span></span><span></span>
            </div>
            @if (!empty(@user()->website_domain))
                <span class="d34-topbar-website">{{ @user()->website_domain }}</span>
            @endif
        </div>

        {{-- ══ Photo block — large, rounded ══ --}}
        <div class="d34-photo-wrap">

            @if (!empty($menuImageUrl))
                <img src="{{ $menuImageUrl }}" alt="{{ $menu['name'] ?? 'Food' }}" class="js-poster-menu-image" crossorigin="anonymous">
            @else
                <div class="d34-photo-placeholder"></div>
            @endif

        </div>

        {{-- ══ Lower content — special offer, description, logo ══ --}}
        <div class="d34-lower">
             @if (strlen(@$menu['name']) <= 20)
            <p class="d34-offer-label"> {{ @$menu['name'] }}</p>
            @if (!empty($menu['description']))
                <p class="d34-desc">{{ Str::limit($menu['description'], 140, '...') }}</p>
            @endif
            @endif

            @if (!empty($logourl))
                <div class="d34-logo-row">
                    <img src="{{ $logourl }}" alt="logo" class="d34-logo-img" style="max-height: 2rem; height: auto; width: auto; max-width: 100%; display: block;" crossorigin="anonymous">
                </div>
            @endif

            {{-- ══ Footer — phone / website ══ --}}
            <div class="d34-footer">
                @if (!empty(@user()->phone))
                    <div class="d34-contact-item">
                        <span class="d34-contact-icon">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.6 10.8c1.4 2.8 3.8 5.2 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.5 2.3.8 3.6.8.6 0 1 .4 1 1v3.4c0 .6-.4 1-1 1C10.6 21.2 2.8 13.4 2.8 4.6c0-.6.4-1 1-1H7.2c.6 0 1 .4 1 1 0 1.3.3 2.5.8 3.6.2.3.1.7-.2 1L6.6 10.8z" fill="#ffffff"/>
                            </svg>
                        </span>
                        <span class="d34-contact-text">{{ @user()->phone }}</span>
                    </div>
                @endif
                @if (!empty(@user()->address))
                    <div class="d34-contact-item d34-contact-right">
                        <span class="d34-contact-icon">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2C8.1 2 5 5.1 5 9c0 5.2 7 13 7 13s7-7.8 7-13c0-3.9-3.1-7-7-7zm0 9.5A2.5 2.5 0 1 1 12 6.5a2.5 2.5 0 0 1 0 5z" fill="#ffffff"/>
                            </svg>
                        </span>
                        <span class="d34-contact-text">{{ @user()->address }}</span>
                    </div>
                @endif
            </div>
        </div>

    </div>{{-- /.design34-card --}}

    {{-- <button type="button" class="d34-download-btn" onclick="downloadDesign34()">&#8595; Download Poster</button> --}}

</div>{{-- /.design34-wrapper --}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<script>
    function downloadDesign34() {
        var card   = document.getElementById('posterCard34');
        var button = document.querySelector('.d34-download-btn');
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
                scale: scale, backgroundColor: '#f3eee1',
                logging: false, useCORS: true, allowTaint: true, imageTimeout: 15000
            });
        }).then(function(canvas) {
            var link = document.createElement('a');
            link.download = 'menu-poster-design34.png';
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
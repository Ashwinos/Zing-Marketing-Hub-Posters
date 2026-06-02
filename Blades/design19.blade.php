<link
     href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Cormorant+Garamond:wght@400;600;700&family=Dancing+Script:wght@700&display=swap"
     rel="stylesheet">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
 <link rel="preconnect" href="https://fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Ol+Chiki:wght@400..700&display=swap" rel="stylesheet">
 <style>
     /* ================================================================
   DESIGN 19 – COMPLETE REDESIGN
   Matches: dark-green poster, central vertical light strip,
   large golden mandala circles on side panels, gold dividers.
   ALL original class names, IDs, and JS are preserved.
   ================================================================ */

     :root {
         --g-bg: #14401a;
         --g-dark: #0d2e12;
         --g-strip: #1e5a28;
         --gold: #c9a843;
         --gold-lt: #e8d080;
         --gold-dk: #9a7420;
         --white: #ffffff;
         --off-wh: #f0ead8;
         /* legacy aliases */
         --cream: #1e5a28;
         --cream2: #0d2e12;
         --navy: #ffffff;
         --tb: #14401a;
         --tb2: #0d2e12;
         --tb3: #091e0c;
         --radius-button: 8px;
         --btn-bg: #111d14;
     }

     @font-face {
         font-family: 'Vastile DEMO';
         src: url('{{ asset('fonts/VastileDEMO-Regular.woff2') }}') format('woff2'),
             url('{{ asset('fonts/VastileDEMO-Regular.woff') }}') format('woff');
         font-weight: normal;
         font-style: normal;
         font-display: swap;
     }

     @font-face {
         font-family: 'Snappy Sketch';
         src: url('{{ asset('fonts/SnappySketchMedium.woff2') }}') format('woff2'),
             url('{{ asset('fonts/SnappySketchMedium.woff') }}') format('woff');
         font-weight: 500;
         font-style: normal;
         font-display: swap;
     }

     .design19-wrapper {
         width: 100%;
         display: flex;
         flex-direction: column;
         align-items: center;

         font-family: "Noto Sans Ol Chiki", sans-serif;
     }

     .design19-wrapper .design13-card {
         width: 100%;
         max-width: 360px;
         aspect-ratio: 4/5;
         background: var(--g-bg);
         border-radius: 5px;
         overflow: hidden;
         position: relative;
         display: flex;
         flex-direction: column;
         box-shadow: 0 28px 80px rgba(0, 0, 0, 0.65);
         box-sizing: border-box;
     }

     /* outer edge strips */
     .design19-wrapper .d19-outer-tile {
         position: absolute;
         top: 0;
         bottom: 0;
         width: 10px;
         z-index: 30;
         pointer-events: none;
     }

     .design19-wrapper .d19-outer-tile.left {
         left: 0;
     }

     .design19-wrapper .d19-outer-tile.right {
         right: 0;
     }

     /* ─── 1. HEADER ─── */
     .design19-wrapper .d19-sky {
        flex-shrink: 0;
    height: 74px;
    background: var(--g-dark);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 4px;
    position: relative;
    z-index: 5;
    width: 100%;
}
     }

     /* ─── 2. HL-WRAP (ornamental divider) ─── */
     .design19-wrapper .d19-hl-wrap {
         flex-shrink: 0;
         background: var(--g-dark);
         padding: 0 20px 5px;
         text-align: center;
         position: relative;
         z-index: 99;
     }

     .design19-wrapper .d19-hl-wrap::before {
         display: none;
     }

     .design19-wrapper .d19-headline {
         display: none;
     }

     /* ─── 3. FOOD SECTION ─── */
     .design19-wrapper .d19-food {
         flex: 1;
         min-height: 0;
         position: relative;
         background: var(--g-bg);
         overflow: hidden;
         display: flex;
         align-items: stretch;
         justify-content: center;
         width: 120%;
         border: 2px solid white;
     }

     /* Central vertical lighter strip */
     .design19-wrapper .d19-food::before {
         content: '';
         position: absolute;
         top: 0;
         bottom: 0;
         left: 17%;
         right: 17%;
         background: linear-gradient(180deg,
                 #2e7838 0%,
                 #265e30 40%,
                 #1e5228 70%,
                 #184a22 100%);
         z-index: 1;
         box-shadow:
             4px 0 20px rgba(0, 0, 0, 0.35),
             -4px 0 20px rgba(0, 0, 0, 0.35);
         opacity: 0;
     }

     /* Food image (sits on top of strip) */
     .design19-wrapper .d19-food img {
         position: relative;
         z-index: 3;
         width: 100%;
         height: 100%;
         object-fit: cover;
         object-position: center 20%;
         display: block;
         margin: 0 auto;
     }

     .design19-wrapper .d19-food-bg {
         position: relative;
         z-index: 3;
         width: 66%;
         height: 100%;
         margin: 0 auto;
         background: linear-gradient(180deg, #2a7035 0%, #0d2e12 100%);
     }

     .design19-wrapper .d19-olive {
         display: none !important;
     }

     /* Mandala layer — behind food image, over green sides */
     .design19-wrapper .d19-mandala-wrap {
         position: absolute;
         inset: 0;
         z-index: 2;
         pointer-events: none;
     }

     /* ─── 4. TAGLINE / HEADLINE ─── */
     .design19-wrapper .d19-tagline-wrap {
         flex-shrink: 0;
         background: var(--g-dark);
         padding: 8px 24px 6px;
         text-align: center;
         position: relative;
     }

     .design19-wrapper .d19-tagline-wrap::before,
     .design19-wrapper .d19-tagline-wrap::after {
         content: '';
         position: absolute;
         left: 16px;
         right: 16px;
         height: 1px;
         background: linear-gradient(90deg, transparent, var(--gold) 35%, var(--gold) 65%, transparent);
         opacity: .5;
     }

     .design19-wrapper .d19-tagline-wrap::before {
         top: 0;
     }

     .design19-wrapper .d19-tagline-wrap::after {
         bottom: 0;
     }

     .design19-wrapper .d19-tagline {
         font-family: "Noto Sans Ol Chiki", sans-serif;
         font-family: 'Vastile DEMO';
         font-size: clamp(15px, 5vw, 21px);
         color: var(--white);
         margin: 0;
         line-height: 1.25;
         letter-spacing: 2.5px;
     }

     /* ─── 5. INFO ROW — collapsed ─── */
     .design19-wrapper .d19-info-row {
         height: 0;
         overflow: hidden;
         min-height: 0;
     }

     .design19-wrapper .d19-tile-col-wide,
     .design19-wrapper .d19-info-center {
         display: none;
     }

     /* ─── 6. CONTACT ROW ─── */
     .design19-wrapper .d19-contact-row {
         flex-shrink: 0;
         display: flex;
         align-items: center;
         justify-content: center;
         background: var(--g-dark);
         min-height: 30px;
         border-top: 1px solid rgba(201, 168, 67, .28);
         width: 100%;
         position: relative;
         z-index: 99;
     }

     .design19-wrapper .d19-tile-col-narrow {
         display: none !important;
     }

     .design19-wrapper .d19-ct-left {
         display: none !important;
     }

     .design19-wrapper .d19-ct-right {
         flex: 1;
         padding: 4px 10px;
         font-size: clamp(8px, 2.2vw, 10px);
         text-align: center;
         letter-spacing: 2.5px;
         border-left: none;
     }

     /* ─── 7. ZING BAR ─── */
     .design19-wrapper .d19-zing {
         flex-shrink: 0;
         display: flex;
         align-items: center;
         justify-content: center;
         background: var(--g-dark);
         min-height: 18px;
         border-top: 1px solid rgba(201, 168, 67, .1);
         width: 100%;
         position: relative;
         z-index: 99;
     }

     .design19-wrapper .d19-zing-tile {
         display: none;
     }

     .design19-wrapper .d19-zing-diamond {
         display: none;
     }

     .design19-wrapper .d19-zing-center span {
         flex: 1;
         display: flex;
         align-items: center;
         justify-content: center;
         gap: 4px;
         font-size: 6px;
         color: rgba(255, 255, 255, .8);
         font-family: 'Cormorant Garamond', serif;
         letter-spacing: 1px;
         text-transform: uppercase;
     }



     /* download button */
     .design19-wrapper .d19-download-btn {
         margin-top: 16px;
         background-color: var(--btn-bg);
         color: #fff;
         border: 1px solid rgba(201, 168, 67, .35);
         padding: 11px 24px;
         font-size: 13px;
         font-weight: 600;
         border-radius: var(--radius-button);
         cursor: pointer;
         display: flex;
         align-items: center;
         gap: 8px;
         letter-spacing: .5px;
         transition: opacity .2s;
     }

     .design19-wrapper .d19-download-btn:hover {
         opacity: .8;
     }

     /* legacy hidden */
     .design19-wrapper .d19-top-header,
     .design19-wrapper .d19-headings,
     .design19-wrapper .d19-heading1,
     .design19-wrapper .d19-heading2,
     .design19-wrapper .d19-body,
     .design19-wrapper .d19-footer,
     .design19-wrapper .d19-footer-1,
     .design19-wrapper .d19-logo,
     .design19-wrapper .patterm-design-1,
     .design19-wrapper .patterm-design-2,
     .design19-wrapper .patterm-design-3,
     .design19-wrapper .bg-pattern,
     .design19-wrapper .d19-menu-image-inner,
     .design19-wrapper .d19-description {
         display: none !important;
     }

     .design19-wrapper .central-box {
         height: 100%;
         width: 100%;
         display: flex;
         align-items: center;
         justify-content: center;
         flex-direction: column;
         width: 75%;
         margin: auto;
         filter: drop-shadow(2px 4px 6px black);
     }

     .design19-wrapper .bg-img img {
         width: 100%;
         height: 100%;
         object-fit: cover;
     }

     .design19-wrapper .bg-img {
         position: absolute;
         width: 100%;
         height: 100%;
         object-fit: cover;
         opacity: 0.2;
     }

     .design19-wrapper img.logo {
             /*width: 100%;*/
            height: 2rem;
     }

     .design19-wrapper .d19-contact-row {
         flex-shrink: 0;
         display: flex;
         align-items: center;
         justify-content: center;
         background: var(--g-dark);
         min-height: 30px;
         border-top: 1px solid rgba(201, 168, 67, .28);
         width: 100%;
         flex-direction: column;
         align-items: center;
         text-align: center;
         font-size: 10px;
         color: white;
         padding: 10px 0;
     }

     .d19-caption {
         position: absolute;
         z-index: 9;
         font-family: 'Snappy Sketch';
         left: 140px;
         bottom: 3px;
         font-size: 35px;
         font-weight: 800;
         transform-origin: center;
         filter: drop-shadow(2px 4px 6px black);
         color: white;
     }

     .d19-caption::before {
             content: '';
            position: absolute;
            left: 0;
            top: 9px;
            background: #00000087;
            width: 120%;
            transform: translateX(-50%);
            height: 100%;
            left: 50%;
            z-index: -1;
            padding: 19px;
     }
     
     .d19-ct-phone span {
         padding: 4px 10px;
        font-family: "Noto Sans Ol Chiki", sans-serif;
        font-size: 8px;
        color: #fff;
        text-align: center;
        letter-spacing: 2.5px;
     }
     
     .d19-hl-wrap{
           background: var(--g-dark);
     }
 </style>

 <div class="design19-wrapper">
     <div class="design13-card" id="posterCard7">

         {{-- Background image --}}
         <div class="bg-img">
             
                 
                 <img src="{{ asset('img/posters/design19/bg11.png') }}" alt="">
             
         </div>

         <!-- outer edge gold strips -->
         <div class="d19-outer-tile left">
             <svg width="10" height="100%" style="display:block">
                 <defs>
                     <linearGradient id="bL" x1="0" x2="1" y1="0" y2="0">
                         <stop offset="0%" stop-color="#8a6818" stop-opacity=".95" />
                         <stop offset="100%" stop-color="#14401a" stop-opacity="0" />
                     </linearGradient>
                 </defs>
                 <rect width="10" height="100%" fill="url(#bL)" />
             </svg>
         </div>
         <div class="d19-outer-tile right">
             <svg width="10" height="100%" style="display:block">
                 <defs>
                     <linearGradient id="bR" x1="1" x2="0" y1="0" y2="0">
                         <stop offset="0%" stop-color="#8a6818" stop-opacity=".95" />
                         <stop offset="100%" stop-color="#14401a" stop-opacity="0" />
                     </linearGradient>
                 </defs>
                 <rect width="10" height="100%" fill="url(#bR)" />
             </svg>
         </div>

         <div class="central-box">

             <!-- ════════════════════════════════════════
               1. HEADER — logo + brand name
             ════════════════════════════════════════ -->
             <div class="d19-sky">
                 @if(isset($logourl) && $logourl)
                     <img src="{{ $logourl }}" alt="logo" class="logo" crossorigin="anonymous">
                 
                 @endif
             </div>

             <!-- ════════════════════════════════════════
               2. HL-WRAP — gold ornamental divider
             ════════════════════════════════════════ -->
             <div class="d19-hl-wrap">
                 <svg width="100%" height="20" viewBox="0 0 320 20" preserveAspectRatio="xMidYMid meet">
                     <line x1="12" y1="10" x2="126" y2="10" stroke="#c9a843" stroke-width=".8" opacity=".6" />
                     <line x1="194" y1="10" x2="308" y2="10" stroke="#c9a843" stroke-width=".8" opacity=".6" />
                     <path d="M130 10 Q138 4 142 10 Q138 16 130 10Z" fill="none" stroke="#c9a843" stroke-width=".9" opacity=".85" />
                     <path d="M190 10 Q182 4 178 10 Q182 16 190 10Z" fill="none" stroke="#c9a843" stroke-width=".9" opacity=".85" />
                     <polygon points="160,3 165,10 160,17 155,10" fill="none" stroke="#c9a843" stroke-width="1.2" />
                     <circle cx="160" cy="10" r="2.5" fill="#c9a843" opacity=".9" />
                     <circle cx="126" cy="10" r="1.8" fill="#c9a843" opacity=".45" />
                     <circle cx="194" cy="10" r="1.8" fill="#c9a843" opacity=".45" />
                 </svg>
                 <p class="d19-headline" style="display:none"></p>
             </div>

             <!-- ════════════════════════════════════════
               3. FOOD SECTION
             ════════════════════════════════════════ -->
             <div class="d19-food">
                 <div class="d19-caption">Purely Savory</div>

                 <div class="d19-mandala-wrap"></div>

                 {{-- Dynamic menu image --}}
                 @if(isset($menuImageUrl) && $menuImageUrl)
                     <img src="{{ $menuImageUrl }}" crossorigin="anonymous" alt="{{ @$menu['name'] ?? 'menu item' }}" class="js-poster-menu-image">
                 
                 @endif
             </div>

             <!-- ════════════════════════════════════════
               4. TAGLINE — menu name
             ════════════════════════════════════════ -->
             <div class="d19-tagline-wrap">
                 <svg width="100%" height="16" viewBox="0 0 320 16" style="display:block;margin-bottom:5px">
                     <line x1="12" y1="8" x2="126" y2="8" stroke="#c9a843" stroke-width=".7" opacity=".58" />
                     <line x1="194" y1="8" x2="308" y2="8" stroke="#c9a843" stroke-width=".7" opacity=".58" />
                     <path d="M130 8 Q138 2 142 8 Q138 14 130 8Z" fill="none" stroke="#c9a843" stroke-width=".9" opacity=".85" />
                     <path d="M190 8 Q182 2 178 8 Q182 14 190 8Z" fill="none" stroke="#c9a843" stroke-width=".9" opacity=".85" />
                     <polygon points="160,2 165,8 160,14 155,8" fill="none" stroke="#c9a843" stroke-width="1.1" />
                     <circle cx="160" cy="8" r="2.5" fill="#c9a843" opacity=".9" />
                 </svg>

                 <p class="d19-tagline">
                     @if(isset($menu['name']) && strlen($menu['name']) <= 20)
                         {{ $menu['name'] }}
                     
                     @endif
                 </p>

                 <svg width="100%" height="16" viewBox="0 0 320 16" style="display:block;margin-top:5px">
                     <line x1="12" y1="8" x2="126" y2="8" stroke="#c9a843" stroke-width=".7" opacity=".58" />
                     <line x1="194" y1="8" x2="308" y2="8" stroke="#c9a843" stroke-width=".7" opacity=".58" />
                     <path d="M130 8 Q138 2 142 8 Q138 14 130 8Z" fill="none" stroke="#c9a843" stroke-width=".9" opacity=".85" />
                     <path d="M190 8 Q182 2 178 8 Q182 14 190 8Z" fill="none" stroke="#c9a843" stroke-width=".9" opacity=".85" />
                     <polygon points="160,2 165,8 160,14 155,8" fill="none" stroke="#c9a843" stroke-width="1.1" />
                     <circle cx="160" cy="8" r="2.5" fill="#c9a843" opacity=".9" />
                 </svg>
             </div>

             <!-- ══ 5. INFO ROW — collapsed (unchanged) ══ -->
             <div class="d19-info-row">
                 <div class="d19-tile-col-wide"></div>
                 <div class="d19-info-center">
                     <div class="d19-r-name">{{ @user()->name ?? '' }}</div>
                     <div class="d19-r-addr">{{ @user()->address ?? '' }}</div>
                 </div>
                 <div class="d19-tile-col-wide"></div>
             </div>

             <!-- ══ 6. CONTACT ROW ══ -->
             <div class="d19-contact-row">
                 <div class="d19-tile-col-narrow"></div>
                 <div class="d19-ct-left"></div>
                 <div class="d19-ct-right">{{ @user()->website_domain ?? '' }}</div>
                 <div class="d19-ct-phone">
                     <span>{{ @user()->phone ?? '' }}</span>
                     <span>{{ @user()->email ?? '' }}</span>
                 </div>
                 <div class="d19-tile-col-narrow"></div>
             </div>

             <!-- ══ 7. ZING BAR ══ -->
             <div class="d19-zing">
                 <div class="d19-zing-tile"></div>
                 <div class="d19-zing-center">
                     
                     <span>{{ @user()->address ?? '' }}</span>
                 </div>
                 <div class="d19-zing-diamond"></div>
             </div>

             <!-- HIDDEN LEGACY (unchanged) -->
             <div class="d19-body" style="display:none">
                 <div class="d19-logo" style="display:none"><img src="" alt="logo" crossorigin="anonymous"></div>
                 <div class="d19-headings" style="display:none">
                     <div class="d19-heading1"></div>
                     <div class="d19-heading2">{{ @$menu['name'] ?? '' }}</div>
                 </div>
                 <div class="d19-description" style="display:none">
                     <p>Still haven't tried our delicious menu?</p>
                 </div>
             </div>
             <div class="d19-footer" style="display:none"></div>
             <div class="d19-footer-1" style="display:none">
                 <div class="d19-footer-item"></div>
                 <div class="d19-footer-item"></div>
                 <div class="d19-footer-item"></div>
             </div>
             <div class="patterm-design-1" style="display:none"></div>
             <div class="patterm-design-2" style="display:none"></div>
             <div class="patterm-design-3" style="display:none"></div>
             <div class="bg-pattern" style="display:none"></div>
             <div class="d19-menu-image-inner" style="display:none"></div>

         </div>
     </div><!-- /.design13-card -->

     <!--<button type="button" class="d19-download-btn" onclick="downloaddesign13()">-->
     <!--    <i class="bi bi-download"></i> Download Poster-->
     <!--</button>-->

 </div><!-- /.design19-wrapper -->

 <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
 <script>
     /* UNCHANGED from original */
     function downloaddesign13() {
         var card = document.getElementById('posterCard7');
         var button = document.querySelector('.d19-download-btn');
         button.innerHTML = '<i class="bi bi-hourglass-split"></i> Generating...';
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
             link.download = 'menu-poster-instagram.png';
             link.href = canvas.toDataURL('image/png', 1.0);
             link.click();
             button.innerHTML = '<i class="bi bi-download"></i> Download Poster';
             button.disabled = false;
         }).catch(function(error) {
             console.error('Error:', error);
             alert('Failed to generate. Please try again.');
             button.innerHTML = '<i class="bi bi-download"></i> Download Poster';
             button.disabled = false;
         });
     }
 </script>
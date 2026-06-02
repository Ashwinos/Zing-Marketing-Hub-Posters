<link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
    rel="stylesheet">
  <link
    href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
  <style>

    @font-face {
      font-family: 'Gummy Twist';
      src: url('{{ asset('fonts/GummyTwist-Regular.woff2') }}') format('woff2'),
        url('{{ asset('fonts/GummyTwist-Regular.woff') }}') format('woff');
      font-weight: normal;
      font-style: normal;
      font-display: swap;
    }

    @font-face {
      font-family: 'PLAYMORE';
      src: url('{{ asset('fonts/PLAYMORE-Regular.woff2') }}') format('woff2'),
        url('{{ asset('fonts/PLAYMORE-Regular.woff') }}') format('woff');
      font-weight: normal;
      font-style: normal;
      font-display: swap;
    }

    .design20-wrapper {
      display: flex;
      flex-direction: column;
      align-items: center;
      font-family: "Lato", sans-serif;
    }

    /* ── 340 × 425 px (4:5) ── */
    .design20-wrapper #posterCard7 {
      position: relative;
      width: 340px;
      height: 425px;
      border-radius: 0px;
      overflow: hidden;
      box-shadow: 0 28px 80px rgba(0, 0, 0, .65);
      flex-shrink: 0;
      background: #263238;
    }

    .design20-wrapper .bg-green {
      position: absolute;
      inset: 0;
      z-index: 0;
    }

    .design20-wrapper .rays {
      position: absolute;
      inset: 0;
      width: 340px;
      height: 425px;
      z-index: 1;
      pointer-events: none;
      opacity: 0.05;
    }

    .design20-wrapper .rays-box {
      position: absolute;
      inset: 0;
      width: 170%;
      height: 100%;
      z-index: 1;
      pointer-events: none;
      opacity: 0.2;
      transform: translate(-50%);
      left: 50%;
    }

    .design20-wrapper .corner-dark {
      position: absolute;
      inset: 0;
      z-index: 2;
      background: #ffffff;
      clip-path: polygon(0 0, 27% 0, 0 22%);
    }

    .design20-wrapper .black-polygon {
      /* unchanged */
    }

    .design20-wrapper .food-img {
      width: 150px;
      height: 150px;
      z-index: 15;
      pointer-events: none;
      object-fit: cover;
      filter: drop-shadow(0 16px 34px rgba(0, 0, 0, .85));
      border-radius: 50%;
      border: 2px solid white;
      margin-bottom: 1rem;
    }

    .design20-wrapper .logo-text {
      position: absolute;
      top: 11px;
      left: 12px;
      z-index: 22;
      font-family: "Lato", sans-serif;
      font-weight: 900;
      font-size: 16px;
      color: #fff;
      line-height: 1.1;
      letter-spacing: 1px;
    }

    .design20-wrapper .site-url {
      position: absolute;
      top: 14px;
      right: 12px;
      z-index: 22;
      font-size: 10px;
      color: white;
    }

    .design20-wrapper .headlines {
      position: relative;
      text-align: center;
      z-index: 22;
      padding: 15px;
    }

    .design20-wrapper .headlines:after {
      position: absolute;
      left: 0;
      top: 0;
      width: 150%;
      height: 100%;
      content: '';
      background: {{ $themeColor }};
      z-index: -1;
      left: 50%;
      transform: translateX(-50%);
      filter: drop-shadow(0 16px 34px rgba(0, 0, 0, .85));
    }

    .design20-wrapper .central-content {
      position: absolute;
      left: 50%;
      top: 50%;
      transform: translate(-50%, -50%);
      z-index: 9;
      text-align: center;
      height: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      width: 100%;
    }

    .design20-wrapper .t-script {
      font-family: 'PLAYMORE';
      font-size: 30px;
      opacity: 0.8;
      font-weight: 700;
      color: #000000;
      line-height: 1;
      margin-bottom: 0.5rem;
      text-shadow: 1px 2px 6px rgba(0, 0, 0, .18);
      letter-spacing: 8px;
    }

    .design20-wrapper .t-label {
      font-family: "Lato", sans-serif;
      font-size: 13px;
      font-weight: 800;
      color: #000000;
      letter-spacing: 4.5px;
      text-transform: uppercase;
      line-height: 1.25;
      margin-top: 1px;
    }

    .design20-wrapper .t-main {
      font-family: 'Gummy Twist';
      font-size: 28px;
      color: #111;
      letter-spacing: 2px;
      text-transform: uppercase;
      line-height: .88;
      margin-bottom: 0.5rem;
    }

    .design20-wrapper .t-sub {
      font-size: 10px;
      font-weight: 300;
      color: #000000;
      line-height: 1;
      margin-top: -2px;
      letter-spacing: 1px;
      text-shadow: 0 1px 5px rgba(0, 0, 0, .35);
    }

    .design20-wrapper .badge-delivery {
      position: absolute;
      top: 174px;
      left: 11px;
      z-index: 22;
    }

    .design20-wrapper .del-text {
      font-family: "Lato", sans-serif;
      font-size: 10px;
      font-weight: 700;
      color: #fff;
      text-transform: uppercase;
      letter-spacing: .3px;
      line-height: 1.3;
    }

    .design20-wrapper .del-text strong {
      display: block;
      font-size: 15px;
      font-weight: 900;
    }

    .design20-wrapper .badge-off-wrap {
      position: absolute;
      top: 160px;
      right: 8px;
      z-index: 22;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .design20-wrapper .badge-off {
      width: 66px;
      height: 66px;
      background: #fff;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      clip-path: polygon(50% 0%, 57% 15%, 73% 7%, 72% 24%, 88% 18%, 83% 34%, 100% 36%, 90% 50%, 100% 64%, 83% 66%, 88% 82%, 72% 76%, 73% 93%, 57% 85%, 50% 100%, 43% 85%, 27% 93%, 28% 76%, 12% 82%, 17% 66%, 0% 64%, 10% 50%, 0% 36%, 17% 34%, 12% 18%, 28% 24%, 27% 7%, 43% 15%);
      filter: drop-shadow(0 2px 8px rgba(0, 0, 0, .2));
    }

    .design20-wrapper .badge-off .pct {
      font-family: "Lato", sans-serif;
      font-size: 21px;
      font-weight: 900;
      color: #111;
      line-height: 1;
    }

    .design20-wrapper .badge-off .off-lbl {
      font-family: "Lato", sans-serif;
      font-size: 10px;
      font-weight: 900;
      color: #111;
      line-height: 1;
      letter-spacing: 1px;
    }

    .design20-wrapper .order-box {
      position: absolute;
      left: 0;
      bottom: 0;
      width: 100%;
      display: flex;
      justify-content: space-between;
      z-index: 9;
      padding: 10px 15px;
      font-size: 10px;
      color: white;
    }

    .design20-wrapper .order-btn {
      background: #6eb614;
      color: #fff;
      letter-spacing: 1.6px;
      text-transform: uppercase;
      padding: 7px 18px;
      border-radius: 22px;
      z-index: 22;
      box-shadow: 0 4px 14px rgba(110, 182, 20, .45);
    }

    .design20-wrapper .social-row {
      position: absolute;
      bottom: 11px;
      left: 11px;
      display: flex;
      align-items: center;
      gap: 5px;
      z-index: 22;
    }

    .design20-wrapper .si {
      width: 18px;
      height: 18px;
      border: 1.5px solid rgba(255, 255, 255, .55);
      border-radius: 4px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #fff;
      font-size: 9.5px;
    }

    .design20-wrapper .soc-handle {
      font-size: 8px;
      font-weight: 600;
      color: rgba(255, 255, 255, .82);
      letter-spacing: .3px;
      margin-left: 3px;
    }

    .design20-wrapper .dl-btn {
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
      display: flex;
      align-items: center;
      gap: 8px;
      transition: background .18s;
    }

    .design20-wrapper .dl-btn:hover { background: #495057; }
    .design20-wrapper .dl-btn:disabled { opacity: .65; cursor: default; }

    /* ── FIXED: logo — width auto, height 2rem, absolute top-left corner ── */
    .design20-wrapper .logo-image {
      position: absolute;
      top: 8px;
      left: 8px;
      z-index: 22;
      width: auto;
      height: 2rem;
      overflow: hidden;
      border: 1px solid white;
      /* removed: border-radius:50%, fixed width/height, left/top via relative */
    }

    .design20-wrapper .logo-image img {
      width: auto;
      height: 100%;
      display: block;
      object-fit: contain;
    }

    .design20-wrapper .white-box-1 {
      width: 20%;
      height: 40%;
      z-index: 9;
      background: #ffffff;
      position: absolute;
      right: 50%;
      transform: translateX(50%);
      top: 0;
    }

    .design20-wrapper .white-box-1:before {
      width: 30%;
      height: 100%;
      z-index: 9;
      background: {{ $themeColor }};
      position: absolute;
      right: 50%;
      transform: translateX(50%);
      top: 0;
      content: '';
    }

    .design20-wrapper .white-box-1:after {
      width: 2px;
      height: 100%;
      z-index: 9;
      background: #ffffff;
      position: absolute;
      right: 50%;
      transform: translateX(50%);
      top: 0;
      content: '';
    }

    .design20-wrapper .box-content {
      position: relative;
      z-index: 9;
    }

    .design20-wrapper .address {
      text-align: center;
      margin: 0 10px;
    }

    .design20-wrapper .headline-header-footer {
      font-size: 11px;
      background: #000000;
      width: 100%;
      padding: 5px 10px;
      color: white;
    }

    .design20-wrapper .email-id,
    .design20-wrapper .phone-num {
      font-size: 10px;
    }
  </style>

  <div class="design20-wrapper">

    <div id="posterCard7">

      <div class="white-box-1"></div>

      {{-- L0: full green base --}}
      <div class="bg-green"></div>

      {{-- L1: crosshatch rays --}}
      <svg class="rays" width="100%" height="100%" viewBox="0 0 680 400" preserveAspectRatio="xMidYMid slice"
        xmlns="http://www.w3.org/2000/svg">
        <defs>
          <pattern id="crosshatch20" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
            <line x1="0" y1="0" x2="0" y2="20" stroke="#59AF16" stroke-width="1.2" />
            <line x1="10" y1="0" x2="10" y2="20" stroke="#59AF16" stroke-width="1.2" />
            <line x1="0" y1="0" x2="20" y2="0" stroke="#59AF16" stroke-width="1.2" />
            <line x1="0" y1="10" x2="20" y2="10" stroke="#59AF16" stroke-width="1.2" />
          </pattern>
        </defs>
        <rect x="0" y="0" width="100%" height="100%" fill="url(#crosshatch20)" />
      </svg>

      <div class="black-polygon"></div>

      {{-- Logo — positioned absolute top-left, width auto, height 2rem --}}
      <div class="logo-image">
        @if(isset($logourl) && $logourl)
          <img src="{{ $logourl }}" alt="logo" crossorigin="anonymous">
        @endif
      </div>

      {{-- Central content --}}
      <div class="central-content">

        {{-- Food image --}}
        @if(isset($menuImageUrl) && $menuImageUrl)
          <img class="food-img js-poster-menu-image"
            src="{{ $menuImageUrl }}"
            crossorigin="anonymous"
            alt="{{ @$menu['name'] ?? '' }}">
        @endif

        {{-- Headline block --}}
        <div class="headlines" style="position: relative;">
          <svg class="rays-box" width="100%" height="100%" viewBox="0 0 680 400" preserveAspectRatio="xMidYMid slice"
            xmlns="http://www.w3.org/2000/svg">
            <defs>
              <pattern id="crosshatch20b" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                <line x1="0" y1="0" x2="0" y2="20" stroke="#59AF16" stroke-width="1.2" />
                <line x1="10" y1="0" x2="10" y2="20" stroke="#59AF16" stroke-width="1.2" />
                <line x1="0" y1="0" x2="20" y2="0" stroke="#59AF16" stroke-width="1.2" />
                <line x1="0" y1="10" x2="20" y2="10" stroke="#59AF16" stroke-width="1.2" />
              </pattern>
            </defs>
            <rect x="0" y="0" width="100%" height="100%" fill="url(#crosshatch20b)" />
          </svg>

          <div class="box-content">
            <p class="t-script">Delicious</p>

            {{-- Menu name --}}
            <p class="t-main">
              @if(isset($menu['name']) && strlen($menu['name']) <= 20)
                {{ strtoupper($menu['name']) }}
              @endif
            </p>

            {{-- Menu description --}}
            <p class="t-sub">
              {{ \Illuminate\Support\Str::limit(@$menu['description'] ?? '', 80, '...') }}
            </p>
          </div>
        </div>

        {{-- Address footer strip --}}
        <div class="headline-header-footer">
          {{ @user()->address ?? '' }}
        </div>

      </div>{{-- /.central-content --}}

      {{-- Bottom bar: website + phone --}}
      <div class="order-box">
        <div class="email-id">{{ @user()->website_domain ?? '' }}</div>
        <div class="phone-num">{{ @user()->phone ?? '' }}</div>
      </div>

    </div>{{-- /#posterCard7 --}}

    {{-- Download button --}}
    {{-- <button type="button" class="dl-btn" onclick="downloaddesign13()">
      <i class="bi bi-download"></i> Download Poster
    </button> --}}

  </div>{{-- /.design20-wrapper --}}

  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
  <script>
    function downloaddesign13() {
      var card = document.getElementById('posterCard7');
      var button = document.querySelector('.dl-btn');
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
        onclone: function (clonedDoc) {
          var images = clonedDoc.querySelectorAll('img');
          return Promise.all(Array.from(images).map(function (img) {
            return new Promise(function (resolve) {
              if (img.complete) {
                resolve();
              } else {
                img.onload = resolve;
                img.onerror = resolve;
              }
            });
          }));
        }
      }).then(function (canvas) {
        var link = document.createElement('a');
        link.download = 'menu-poster-instagram.png';
        link.href = canvas.toDataURL('image/png', 1.0);
        link.click();
        button.innerHTML = '<i class="bi bi-download"></i> Download Poster';
        button.disabled = false;
      }).catch(function (error) {
        console.error('Error:', error);
        alert('Failed to generate. Please try again.');
        button.innerHTML = '<i class="bi bi-download"></i> Download Poster';
        button.disabled = false;
      });
    }
  </script>
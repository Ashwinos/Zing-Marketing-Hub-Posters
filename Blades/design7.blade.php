<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
<style>
    /* ── Configuration: Design Variables ── */
    :root {
        /* Colors */
        --primary-theme: cian;
        /* Red area */
        --accent-bg: red;
        /* Cream area */
        --text-on-theme: #f87a56;
        --text-on-accent: #f87a56;
        --btn-bg: #343a40;
        --white: #ffffff;

        /* Border Radii */
        --radius-card: 10px;
        --radius-image: 50%;
        --radius-logo: 50%;
        --radius-button: 8px;

        /* font Family */
        --primary-font:'Sanely';
    }

    /* ── Wrapper ── */
    .design7-wrapper {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        font-family: "Playfair Display", serif;
        padding: 20px 0;
    }

    /* ── The Poster Card ── */
    .design7-wrapper .design7-card {
        width: 100%;
        max-width: 340px;
        aspect-ratio: 4 / 5;
        border-radius: var(--radius-card);
        background: var(--primary-theme);
        border: none;
        display: flex;
        flex-direction: column;
        overflow: hidden;
        box-sizing: border-box;
        position: relative;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
       
    }

    /* ── Logo ── */
    .design7-wrapper .d7-logo {
        display: flex;
    justify-content: center;
    align-items: center;
    padding: 2px;
    flex-shrink: 0;
    margin-bottom: 0.8rem;
    /* position: absolute;
    right: 264px;
    top: 181px; */
    width: 3rem;
    height: 3rem;
    /* filter: drop-shadow(2px 4px 6px black); */
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
    border-radius: 50%;
}
.d7-top-header
{
    position: relative;
    z-index: 9;
}
.design7-wrapper .d7-logo img {
    width: 100%;
    height: 100%;
    border-radius: var(--radius-logo);
    object-fit: cover;
    display: block;
    border: 2px solid var(--white);
}

    /* ── Headings ── */
    .design7-wrapper .d7-headings {
        
        flex-shrink: 0;
       margin-bottom: 1rem;
    }

    .design7-wrapper .d7-heading1 {
        font-family: var(--primary-font);
        font-weight: 400;
        font-size: clamp(12px, 3vw, 16px);
        margin: 0;
        line-height: 1.2;
        color: var(--text-on-theme);
        text-transform: uppercase;
        letter-spacing: 2px;
    }

    .design7-wrapper .d7-heading2 {
        font-family: var(--primary-font);
        font-size: clamp(20px, 5vw, 38px);
        font-weight: 900;
        line-height: 1.1;
        margin-top: 2px;
        letter-spacing: 1px;
       
        color: var(--text-on-theme);
    }

    /* ── Body Content ── */
    .design7-wrapper .d7-body {
  
        padding: 0.5rem 1.5rem;
    padding-right: 3rem;
    min-height: 0;
    position: absolute;
    bottom: 58px;
}




    .design7-wrapper .d7-menu-image-inner {
    width: clamp(130px, 45%, 200px);
    aspect-ratio: 1;
    border-radius: var(--radius-image);
    overflow: hidden;
    border: 8px solid var(--white);
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
    position: absolute;
    top: 48px;
    right: 34px;
    width: 180px;
    height: 180px;
    /* border: 1px solid #e9e9e9; */
}

    .design7-wrapper .d7-menu-image-inner img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%); 
    min-width: 100%;
    min-height: 100%;
    width: auto;
    height: auto;
    }

    .design7-wrapper .d7-description p {
        font-size: clamp(9px, 1.2vw, 11px);
        font-weight: 500;
       
        color: var(--text-on-accent);
        margin: 0 auto;
        line-height: 1.5;
       
    }

    .design7-wrapper .d7-restaurant-name {
        font-size: clamp(9px, 2vw, 12px);
        font-weight: 800;
        color: var(--text-on-accent);
        
    }

    .design7-wrapper .d7-restaurant-address {
        font-size: clamp(7px, 1.5vw, 9px);
        color: var(--text-on-accent);
        
        opacity: 0.8;
    }

    /* ── Footer ── */
    .design7-wrapper .d7-footer {
    flex-shrink: 0;
    padding: 1rem 1rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
    color: var(--text-on-accent);
    gap: 10px;
    position: absolute;
    bottom: 0;
    left: 0;
}

    .design7-wrapper .d7-footer-item {
        /* display: flex;
        align-items: center;
        gap: 5px;
        font-weight: 600; */
        font-size: clamp(7px, 1.5vw, 10px);
        font-size: clamp(7px, 1.5vw, 10px);
    text-align: right;
    padding-right: 20px;
    padding-top: 0rem;
    color: var(--text-on-theme);
    font-size: 13px;
    background-color: #ffffffba;
    margin-bottom: 4px;
    display: inline-block;
    
    }
    .d7-top-header {
    padding-top: 0.5rem;
    line-height: 1rem;
}

    /* ── Download Button ── */
    .design7-wrapper .d7-download-btn {
        margin-top: 15px;
        background-color: var(--btn-bg);
        color: var(--white);
        border: none;
        padding: 10px 20px;
        font-size: 13px;
        font-weight: 600;
        border-radius: var(--radius-button);
        cursor: pointer;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .patterm-design-1 {
        display: flex;
        flex-direction: column;
        position: absolute;
        left: 0;
        top: 0;
    }

    .patterm-design-2 {
    position: absolute;
    display: flex;
    flex-direction: column;
    right: 0;
    bottom: 0;
}
.patterm-design-3 {
    display: flex;
    flex-direction: column;
    top: -3px;
    right: 109px;
    position: absolute;
    opacity: 0.4;
}
svg path 
{
    fill: var(--text-on-theme);
}
.bg-pattern img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    filter: grayscale(1);
}
.bg-pattern {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    opacity: 0.2;
    z-index: 0;
}
.d7-footer-1 {
    position: absolute;
    bottom: 8px;
    padding-left: 21px;
}
@font-face {
    font-family: 'Deglion';
    src: url('Deglion.woff2') format('woff2'),
        url('Deglion.woff') format('woff');
    font-weight: normal;
    font-style: normal;
    font-display: swap;
}
@font-face {
    font-family: 'Sanely';
    src: url('Sanely-Regular.woff2') format('woff2'),
        url('Sanely-Regular.woff') format('woff');
    font-weight: normal;
    font-style: normal;
    font-display: swap;
}

</style>

<div class="design7-wrapper">

    <div class="design7-card" id="posterCard7">
        <div class="bg-pattern">
            <img src="{{ asset('img/posters/design8/pattern1.png') }}" alt="">
        </div>
        <div class="patterm-design-1">


            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 256 256" fill="none">
                <path d="M 64 192 C 64 227.346 35.346 256 0 256 L 0 192 C 0 156.654 28.654 128 64 128 Z M 128 128 C 163.346 128 192 156.654 192 192 L 192 256 C 156.654 256 128 227.346 128 192 C 128 227.346 99.346 256 64 256 L 64 192 C 64 156.654 92.654 128 128 128 Z M 192 128 C 227.346 128 256 156.654 256 192 L 256 256 C 220.654 256 192 227.346 192 192 Z M 0 0 C 35.346 0 64 28.654 64 64 L 64 128 C 28.654 128 0 99.346 0 64 Z M 192 64 C 192 99.346 163.346 128 128 128 C 92.654 128 64 99.346 64 64 L 64 0 C 99.346 0 128 28.654 128 64 C 128 28.654 156.654 0 192 0 Z M 256 64 C 256 99.346 227.346 128 192 128 L 192 64 C 192 28.654 220.654 0 256 0 Z" fill="rgb(84, 84, 84)"></path>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 256 256" fill="none">
                <path d="M 64 192 C 64 227.346 35.346 256 0 256 L 0 192 C 0 156.654 28.654 128 64 128 Z M 128 128 C 163.346 128 192 156.654 192 192 L 192 256 C 156.654 256 128 227.346 128 192 C 128 227.346 99.346 256 64 256 L 64 192 C 64 156.654 92.654 128 128 128 Z M 192 128 C 227.346 128 256 156.654 256 192 L 256 256 C 220.654 256 192 227.346 192 192 Z M 0 0 C 35.346 0 64 28.654 64 64 L 64 128 C 28.654 128 0 99.346 0 64 Z M 192 64 C 192 99.346 163.346 128 128 128 C 92.654 128 64 99.346 64 64 L 64 0 C 99.346 0 128 28.654 128 64 C 128 28.654 156.654 0 192 0 Z M 256 64 C 256 99.346 227.346 128 192 128 L 192 64 C 192 28.654 220.654 0 256 0 Z" fill="rgb(84, 84, 84)"></path>
            </svg>

            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 256 256" fill="none">
                <path d="M 64 192 C 64 227.346 35.346 256 0 256 L 0 192 C 0 156.654 28.654 128 64 128 Z M 128 128 C 163.346 128 192 156.654 192 192 L 192 256 C 156.654 256 128 227.346 128 192 C 128 227.346 99.346 256 64 256 L 64 192 C 64 156.654 92.654 128 128 128 Z M 192 128 C 227.346 128 256 156.654 256 192 L 256 256 C 220.654 256 192 227.346 192 192 Z M 0 0 C 35.346 0 64 28.654 64 64 L 64 128 C 28.654 128 0 99.346 0 64 Z M 192 64 C 192 99.346 163.346 128 128 128 C 92.654 128 64 99.346 64 64 L 64 0 C 99.346 0 128 28.654 128 64 C 128 28.654 156.654 0 192 0 Z M 256 64 C 256 99.346 227.346 128 192 128 L 192 64 C 192 28.654 220.654 0 256 0 Z" fill="rgb(84, 84, 84)"></path>
            </svg>





        </div>
        <div class="patterm-design-2">


            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 256 256" fill="none">
                <path d="M 64 192 C 64 227.346 35.346 256 0 256 L 0 192 C 0 156.654 28.654 128 64 128 Z M 128 128 C 163.346 128 192 156.654 192 192 L 192 256 C 156.654 256 128 227.346 128 192 C 128 227.346 99.346 256 64 256 L 64 192 C 64 156.654 92.654 128 128 128 Z M 192 128 C 227.346 128 256 156.654 256 192 L 256 256 C 220.654 256 192 227.346 192 192 Z M 0 0 C 35.346 0 64 28.654 64 64 L 64 128 C 28.654 128 0 99.346 0 64 Z M 192 64 C 192 99.346 163.346 128 128 128 C 92.654 128 64 99.346 64 64 L 64 0 C 99.346 0 128 28.654 128 64 C 128 28.654 156.654 0 192 0 Z M 256 64 C 256 99.346 227.346 128 192 128 L 192 64 C 192 28.654 220.654 0 256 0 Z" fill="rgb(84, 84, 84)"></path>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 256 256" fill="none">
                <path d="M 64 192 C 64 227.346 35.346 256 0 256 L 0 192 C 0 156.654 28.654 128 64 128 Z M 128 128 C 163.346 128 192 156.654 192 192 L 192 256 C 156.654 256 128 227.346 128 192 C 128 227.346 99.346 256 64 256 L 64 192 C 64 156.654 92.654 128 128 128 Z M 192 128 C 227.346 128 256 156.654 256 192 L 256 256 C 220.654 256 192 227.346 192 192 Z M 0 0 C 35.346 0 64 28.654 64 64 L 64 128 C 28.654 128 0 99.346 0 64 Z M 192 64 C 192 99.346 163.346 128 128 128 C 92.654 128 64 99.346 64 64 L 64 0 C 99.346 0 128 28.654 128 64 C 128 28.654 156.654 0 192 0 Z M 256 64 C 256 99.346 227.346 128 192 128 L 192 64 C 192 28.654 220.654 0 256 0 Z" fill="rgb(84, 84, 84)"></path>
            </svg>

            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 256 256" fill="none">
                <path d="M 64 192 C 64 227.346 35.346 256 0 256 L 0 192 C 0 156.654 28.654 128 64 128 Z M 128 128 C 163.346 128 192 156.654 192 192 L 192 256 C 156.654 256 128 227.346 128 192 C 128 227.346 99.346 256 64 256 L 64 192 C 64 156.654 92.654 128 128 128 Z M 192 128 C 227.346 128 256 156.654 256 192 L 256 256 C 220.654 256 192 227.346 192 192 Z M 0 0 C 35.346 0 64 28.654 64 64 L 64 128 C 28.654 128 0 99.346 0 64 Z M 192 64 C 192 99.346 163.346 128 128 128 C 92.654 128 64 99.346 64 64 L 64 0 C 99.346 0 128 28.654 128 64 C 128 28.654 156.654 0 192 0 Z M 256 64 C 256 99.346 227.346 128 192 128 L 192 64 C 192 28.654 220.654 0 256 0 Z" fill="rgb(84, 84, 84)"></path>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 256 256" fill="none">
                <path d="M 64 192 C 64 227.346 35.346 256 0 256 L 0 192 C 0 156.654 28.654 128 64 128 Z M 128 128 C 163.346 128 192 156.654 192 192 L 192 256 C 156.654 256 128 227.346 128 192 C 128 227.346 99.346 256 64 256 L 64 192 C 64 156.654 92.654 128 128 128 Z M 192 128 C 227.346 128 256 156.654 256 192 L 256 256 C 220.654 256 192 227.346 192 192 Z M 0 0 C 35.346 0 64 28.654 64 64 L 64 128 C 28.654 128 0 99.346 0 64 Z M 192 64 C 192 99.346 163.346 128 128 128 C 92.654 128 64 99.346 64 64 L 64 0 C 99.346 0 128 28.654 128 64 C 128 28.654 156.654 0 192 0 Z M 256 64 C 256 99.346 227.346 128 192 128 L 192 64 C 192 28.654 220.654 0 256 0 Z" fill="rgb(84, 84, 84)"></path>
            </svg>

            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 256 256" fill="none">
                <path d="M 64 192 C 64 227.346 35.346 256 0 256 L 0 192 C 0 156.654 28.654 128 64 128 Z M 128 128 C 163.346 128 192 156.654 192 192 L 192 256 C 156.654 256 128 227.346 128 192 C 128 227.346 99.346 256 64 256 L 64 192 C 64 156.654 92.654 128 128 128 Z M 192 128 C 227.346 128 256 156.654 256 192 L 256 256 C 220.654 256 192 227.346 192 192 Z M 0 0 C 35.346 0 64 28.654 64 64 L 64 128 C 28.654 128 0 99.346 0 64 Z M 192 64 C 192 99.346 163.346 128 128 128 C 92.654 128 64 99.346 64 64 L 64 0 C 99.346 0 128 28.654 128 64 C 128 28.654 156.654 0 192 0 Z M 256 64 C 256 99.346 227.346 128 192 128 L 192 64 C 192 28.654 220.654 0 256 0 Z" fill="rgb(84, 84, 84)"></path>
            </svg>

            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 256 256" fill="none">
                <path d="M 64 192 C 64 227.346 35.346 256 0 256 L 0 192 C 0 156.654 28.654 128 64 128 Z M 128 128 C 163.346 128 192 156.654 192 192 L 192 256 C 156.654 256 128 227.346 128 192 C 128 227.346 99.346 256 64 256 L 64 192 C 64 156.654 92.654 128 128 128 Z M 192 128 C 227.346 128 256 156.654 256 192 L 256 256 C 220.654 256 192 227.346 192 192 Z M 0 0 C 35.346 0 64 28.654 64 64 L 64 128 C 28.654 128 0 99.346 0 64 Z M 192 64 C 192 99.346 163.346 128 128 128 C 92.654 128 64 99.346 64 64 L 64 0 C 99.346 0 128 28.654 128 64 C 128 28.654 156.654 0 192 0 Z M 256 64 C 256 99.346 227.346 128 192 128 L 192 64 C 192 28.654 220.654 0 256 0 Z" fill="rgb(84, 84, 84)"></path>
            </svg>






        </div>


        <div class="patterm-design-3">


            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 256 256" fill="none">
    <path d="M 64 192 C 64 227.346 35.346 256 0 256 L 0 192 C 0 156.654 28.654 128 64 128 Z M 128 128 C 163.346 128 192 156.654 192 192 L 192 256 C 156.654 256 128 227.346 128 192 C 128 227.346 99.346 256 64 256 L 64 192 C 64 156.654 92.654 128 128 128 Z M 192 128 C 227.346 128 256 156.654 256 192 L 256 256 C 220.654 256 192 227.346 192 192 Z M 0 0 C 35.346 0 64 28.654 64 64 L 64 128 C 28.654 128 0 99.346 0 64 Z M 192 64 C 192 99.346 163.346 128 128 128 C 92.654 128 64 99.346 64 64 L 64 0 C 99.346 0 128 28.654 128 64 C 128 28.654 156.654 0 192 0 Z M 256 64 C 256 99.346 227.346 128 192 128 L 192 64 C 192 28.654 220.654 0 256 0 Z" fill="rgb(84, 84, 84)"></path>
</svg>

            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 256 256" fill="none">
    <path d="M 64 192 C 64 227.346 35.346 256 0 256 L 0 192 C 0 156.654 28.654 128 64 128 Z M 128 128 C 163.346 128 192 156.654 192 192 L 192 256 C 156.654 256 128 227.346 128 192 C 128 227.346 99.346 256 64 256 L 64 192 C 64 156.654 92.654 128 128 128 Z M 192 128 C 227.346 128 256 156.654 256 192 L 256 256 C 220.654 256 192 227.346 192 192 Z M 0 0 C 35.346 0 64 28.654 64 64 L 64 128 C 28.654 128 0 99.346 0 64 Z M 192 64 C 192 99.346 163.346 128 128 128 C 92.654 128 64 99.346 64 64 L 64 0 C 99.346 0 128 28.654 128 64 C 128 28.654 156.654 0 192 0 Z M 256 64 C 256 99.346 227.346 128 192 128 L 192 64 C 192 28.654 220.654 0 256 0 Z" fill="rgb(84, 84, 84)"></path>
</svg>


            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 256 256" fill="none">
    <path d="M 64 192 C 64 227.346 35.346 256 0 256 L 0 192 C 0 156.654 28.654 128 64 128 Z M 128 128 C 163.346 128 192 156.654 192 192 L 192 256 C 156.654 256 128 227.346 128 192 C 128 227.346 99.346 256 64 256 L 64 192 C 64 156.654 92.654 128 128 128 Z M 192 128 C 227.346 128 256 156.654 256 192 L 256 256 C 220.654 256 192 227.346 192 192 Z M 0 0 C 35.346 0 64 28.654 64 64 L 64 128 C 28.654 128 0 99.346 0 64 Z M 192 64 C 192 99.346 163.346 128 128 128 C 92.654 128 64 99.346 64 64 L 64 0 C 99.346 0 128 28.654 128 64 C 128 28.654 156.654 0 192 0 Z M 256 64 C 256 99.346 227.346 128 192 128 L 192 64 C 192 28.654 220.654 0 256 0 Z" fill="rgb(84, 84, 84)"></path>
</svg>

            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 256 256" fill="none">
    <path d="M 64 192 C 64 227.346 35.346 256 0 256 L 0 192 C 0 156.654 28.654 128 64 128 Z M 128 128 C 163.346 128 192 156.654 192 192 L 192 256 C 156.654 256 128 227.346 128 192 C 128 227.346 99.346 256 64 256 L 64 192 C 64 156.654 92.654 128 128 128 Z M 192 128 C 227.346 128 256 156.654 256 192 L 256 256 C 220.654 256 192 227.346 192 192 Z M 0 0 C 35.346 0 64 28.654 64 64 L 64 128 C 28.654 128 0 99.346 0 64 Z M 192 64 C 192 99.346 163.346 128 128 128 C 92.654 128 64 99.346 64 64 L 64 0 C 99.346 0 128 28.654 128 64 C 128 28.654 156.654 0 192 0 Z M 256 64 C 256 99.346 227.346 128 192 128 L 192 64 C 192 28.654 220.654 0 256 0 Z" fill="rgb(84, 84, 84)"></path>
</svg>


           





        </div>
       
@if(isset($menuImageUrl) && $menuImageUrl)
        <div class="d7-menu-image-inner">
    <img src="{{ $menuImageUrl }}" 
         crossorigin="anonymous" 
         style="width: 100%; height: 100%; object-fit: cover; display: block;">
</div>
@endif
        
        <div class="d7-body">
        @if(isset($logourl) && $logourl)
        <div class="d7-logo">
            <img src="{{ $logourl }}" alt="logo" crossorigin="anonymous">
        </div>
        @endif
        <div class="d7-headings">
            <!--<div class="d7-heading1">Chefs Choice</div>-->
            @if(strlen(@$menu['name']) <= 20)
            <div class="d7-heading2">{{ @$menu['name'] }}</div>
            @endif
        </div>
            
            <!-- <div class="d7-restaurant-details">
                <div class="d7-restaurant-name">ZATO THAI CUISINE</div>
                <div class="d7-restaurant-address">9090 Skillman St, Dallas, TX 75243, USA</div>
            </div> -->
            @if(!empty($menu['description']))
            <div class="d7-description">
                <p>{{ \Illuminate\Support\Str::limit($menu['description'] ?? '', 150, '...') }}</p>
            </div>
            @endif

        </div>

        
        
        <div class="d7-footer-1">
           
            <div>
                <div class="d7-footer-item">
                    <i class="bi bi-telephone-fill"></i> {{ @user()->phone ?? ' ' }}
                </div>
                <div class="d7-footer-item">
                    <i class="bi bi-globe"></i> {{ @user()->website_domain ?? ' ' }}
                </div>
            </div>
            <div class="d7-footer-item">
            <i class="bi bi-geo-alt-fill"></i>
        
                  {{ @user()->address ?? ' ' }}
            
            </div>
            
        </div>

    </div>

    <!--<button type="button" class="d7-download-btn" onclick="downloaddesign7()">-->
    <!--    <i class="bi bi-download"></i> Download Poster-->
    <!--</button>-->

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

<script>
function downloaddesign7() {
        var card   = document.getElementById('posterCard7');
        var button = document.querySelector('.d7-download-btn');

        button.innerHTML = '<i class="bi bi-hourglass-split"></i> Generating...';
        button.disabled  = true;

        var exportW = 1080;
        var scale   = exportW / card.offsetWidth;

        html2canvas(card, {
            scale: scale,
            backgroundColor: null,
            logging: false,
            useCORS: true,
            allowTaint: true,
            imageTimeout: 0,
            onclone: function (clonedDoc) {
                var images = clonedDoc.querySelectorAll('img');
                return Promise.all(Array.from(images).map(function(img) {
                    return new Promise(function(resolve) {
                        if (img.complete) { resolve(); }
                        else { img.onload = resolve; img.onerror = resolve; }
                    });
                }));
            }
        }).then(function(canvas) {
            var link      = document.createElement('a');
            link.download = 'menu-poster-instagram.png';
            link.href     = canvas.toDataURL('image/png', 1.0);
            link.click();

            button.innerHTML = '<i class="bi bi-download"></i> Download Poster';
            button.disabled  = false;
        }).catch(function(error) {
            console.error('Error generating image:', error);
            alert('Failed to generate image. Please try again.');
            button.innerHTML = '<i class="bi bi-download"></i> Download Poster';
            button.disabled  = false;
        });
    }
</script>
<!doctype html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
  <meta name="theme-color" content="#06182f" />
  <title>Karya Pilar Nusantara — Hubungi Kami</title>
  <link rel="icon" href="/favicon-kpn.ico">

  <style>
  :root {
    --navy: #061d3b;
    --navy-deep: #031226;
    --navy-soft: #0a2b52;
    --accent: #dd9a13;
    --red: #8f1b17;
    --wa: #25d366;
    --white: #fff;
  }

  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  html,
  body {
    width: 100%;
    height: 100%;
    overflow: hidden;
    overscroll-behavior: none;
  }

  body {
    font-family:
      Inter,
      ui-sans-serif,
      system-ui,
      -apple-system,
      BlinkMacSystemFont,
      "Segoe UI",
      sans-serif;
    background: var(--navy-deep);
    color: #fff;
    -webkit-font-smoothing: antialiased;
    user-select: none;
  }

  img {
    user-select: none;
    -webkit-user-drag: none;
  }

  .page {
    position: relative;
    width: 100vw;
    height: 100dvh;
    min-height: 100vh;
    overflow: hidden;
    isolation: isolate;

    background:
      radial-gradient(circle at 50% 50%,
        rgba(30, 92, 164, 0.32) 0%,
        rgba(6, 29, 59, 0.88) 36%,
        transparent 68%),
      radial-gradient(circle at 10% 12%,
        rgba(37, 124, 234, 0.18),
        transparent 28%),
      radial-gradient(circle at 89% 88%,
        rgba(0, 175, 151, 0.11),
        transparent 28%),
      linear-gradient(145deg, #031226 0%, #061d3b 52%, #03162b 100%);
  }

  /* =========================================================
       BACKGROUND
    ========================================================= */

  .grid {
    position: absolute;
    inset: -18%;
    z-index: -10;
    pointer-events: none;

    background-image:
      linear-gradient(rgba(86, 170, 255, 0.045) 1px, transparent 1px),
      linear-gradient(90deg,
        rgba(86, 170, 255, 0.045) 1px,
        transparent 1px),
      linear-gradient(rgba(86, 170, 255, 0.018) 1px, transparent 1px),
      linear-gradient(90deg, rgba(86, 170, 255, 0.018) 1px, transparent 1px);

    background-size:
      76px 76px,
      76px 76px,
      19px 19px,
      19px 19px;

    transform: perspective(750px) rotateX(60deg) scale(1.45) translateY(13%);

    transform-origin: center bottom;

    opacity: 0.68;

    -webkit-mask-image: linear-gradient(to bottom,
        transparent 4%,
        #000 42%,
        #000 100%);
    mask-image: linear-gradient(to bottom,
        transparent 4%,
        #000 42%,
        #000 100%);
  }

  .noise {
    position: absolute;
    inset: 0;
    z-index: -4;
    opacity: 0.06;
    pointer-events: none;
    background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 180 180' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='.88' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='.35'/%3E%3C/svg%3E");
  }

  .ring,
  .ring::before,
  .ring::after {
    position: absolute;
    border-radius: 50%;
    pointer-events: none;
  }

  .ring {
    width: min(52vw, 680px);
    aspect-ratio: 1;
    left: 50%;
    top: 50%;
    z-index: -6;
    transform: translate(-50%, -50%);
    border: 1px solid rgba(91, 177, 255, 0.12);
    box-shadow:
      0 0 0 52px rgba(67, 149, 255, 0.018),
      0 0 0 104px rgba(67, 149, 255, 0.012);
    animation: ringSpin 50s linear infinite;
  }

  .ring::before {
    content: "";
    inset: 14%;
    border: 1px dashed rgba(91, 177, 255, 0.1);
  }

  .ring::after {
    content: "";
    inset: 30%;
    border: 1px solid rgba(91, 177, 255, 0.08);
  }

  @keyframes ringSpin {
    to {
      transform: translate(-50%, -50%) rotate(360deg);
    }
  }

  .orb {
    position: absolute;
    z-index: -8;
    border-radius: 50%;
    filter: blur(80px);
    pointer-events: none;
  }

  .orb-a {
    width: 430px;
    height: 430px;
    left: -210px;
    top: -180px;
    background: rgba(31, 126, 231, 0.18);
    animation: orbA 11s ease-in-out infinite alternate;
  }

  .orb-b {
    width: 420px;
    height: 420px;
    right: -210px;
    bottom: -190px;
    background: rgba(0, 184, 152, 0.11);
    animation: orbB 13s ease-in-out infinite alternate;
  }

  @keyframes orbA {
    to {
      transform: translate(100px, 70px) scale(1.15);
    }
  }

  @keyframes orbB {
    to {
      transform: translate(-95px, -65px) scale(1.17);
    }
  }

  .cursor-glow {
    position: fixed;
    z-index: -2;
    width: 600px;
    height: 600px;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    pointer-events: none;
    border-radius: 50%;
    background: radial-gradient(circle,
        rgba(64, 148, 245, 0.14),
        rgba(31, 102, 183, 0.05) 35%,
        transparent 68%);
    mix-blend-mode: screen;
    will-change: left, top;
  }

  /* =========================================================
       HEADER
    ========================================================= */

  .header {
    position: absolute;
    z-index: 50;
    left: clamp(20px, 4vw, 64px);
    right: clamp(20px, 4vw, 64px);
    top: clamp(18px, 3vh, 30px);

    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 20px;
  }

  .brand {
    display: flex;
    align-items: center;
    gap: 13px;
    min-width: 0;
  }

  .brand-logo {
    width: 58px;
    height: 42px;
    object-fit: contain;
    flex: 0 0 auto;
  }

  .brand-copy strong {
    display: block;
    font-size: 11px;
    line-height: 1.1;
    font-weight: 800;
    letter-spacing: 0.16em;
    text-transform: uppercase;
    white-space: nowrap;
  }

  .brand-copy span {
    display: block;
    margin-top: 4px;
    color: rgba(255, 255, 255, 0.5);
    font-size: 9px;
    letter-spacing: 0.09em;
  }

  .header-note {
    display: flex;
    align-items: center;
    gap: 10px;
    color: rgba(255, 255, 255, 0.42);
    font-size: 9px;
    letter-spacing: 0.14em;
    text-transform: uppercase;
    white-space: nowrap;
  }

  .header-note::before {
    content: "";
    width: 30px;
    height: 1px;
    background: rgba(255, 255, 255, 0.25);
  }

  /* =========================================================
       CENTER CTA
    ========================================================= */

  .center {
    position: absolute;
    left: 50%;
    top: 50%;
    z-index: 100;
    transform: translate(-50%, -50%);

    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;

    width: min(560px, calc(100vw - 36px));
    text-align: center;
  }

  .center::before {
    content: "";
    position: absolute;
    left: 50%;
    top: 50%;
    z-index: -2;
    width: min(560px, 78vw);
    height: 270px;
    transform: translate(-50%, -50%);
    border-radius: 50%;
    background: radial-gradient(ellipse,
        rgba(28, 103, 187, 0.27),
        transparent 70%);
    filter: blur(28px);
    pointer-events: none;
  }

  .eyebrow {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 13px;
    color: rgba(255, 255, 255, 0.52);
    font-size: 9px;
    font-weight: 700;
    letter-spacing: 0.18em;
    text-transform: uppercase;
  }

  .eyebrow::before,
  .eyebrow::after {
    content: "";
    width: 28px;
    height: 1px;
    background: rgba(221, 154, 19, 0.78);
  }

  .center h1 {
    font-size: clamp(30px, 3.7vw, 54px);
    line-height: 0.96;
    letter-spacing: -0.055em;
    font-weight: 820;
    max-width: 520px;
    text-wrap: balance;
  }

  .center h1 span {
    color: rgba(255, 255, 255, 0.48);
    font-weight: 560;
  }

  .rotating-line {
    display: block;
    min-height: 1.15em;
    margin-top: 0.08em;
  }

  .rotating-word {
    display: inline-block;
    color: #0469e7 !important;
    font-weight: 700 !important;
    font-size: larger;
    letter-spacing: -0.03em;
    text-transform: capitalize;
    text-shadow: 0 0 22px rgba(247, 249, 250, 0.14);
    transition:
      opacity 0.35s ease,
      transform 0.35s ease,
      filter 0.35s ease;
    will-change: opacity, transform;
    /* Stroke tipis + Glow 10% lembut */
  }

  .rotating-word.is-changing {
    opacity: 0;
    transform: translateY(10px);
    filter: blur(4px);
  }

  .contact-button {
    position: relative;
    isolation: isolate;

    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 12px;

    margin-top: 22px;
    min-height: 62px;
    padding: 16px 23px;

    border-radius: 5px;
    border: 1px solid rgba(255, 255, 255, 0.17);

    background: linear-gradient(135deg,
        #2adb6b 0%,
        #22c95f 48%,
        #14ad4d 100%);

    color: #fff;
    text-decoration: none;

    font-size: 14px;
    font-weight: 780;
    letter-spacing: -0.01em;

    box-shadow:
      0 22px 58px rgba(0, 0, 0, 0.4),
      0 10px 32px rgba(37, 211, 102, 0.16),
      inset 0 1px 0 rgba(255, 255, 255, 0.28);

    overflow: hidden;

    transition:
      transform 0.26s ease,
      box-shadow 0.26s ease,
      filter 0.26s ease;
  }

  .contact-button::before {
    content: "";
    position: absolute;
    z-index: -1;
    inset: -9px;
    border-radius: 11px;
    background: #25d366;
    filter: blur(24px);
    opacity: 0;
    transition: opacity 0.28s ease;
  }

  .contact-button::after {
    content: "";
    position: absolute;
    width: 70px;
    height: 160%;
    left: -100px;
    top: -30%;
    transform: rotate(18deg);
    background: linear-gradient(90deg,
        transparent,
        rgba(255, 255, 255, 0.4),
        transparent);
    transition: left 0.6s ease;
  }

  .contact-button:hover {
    transform: translateY(-5px) scale(1.02);
    filter: brightness(1.045);
    box-shadow:
      0 30px 78px rgba(0, 0, 0, 0.52),
      0 15px 42px rgba(37, 211, 102, 0.24);
  }

  .contact-button:hover::before {
    opacity: 0.28;
  }

  .contact-button:hover::after {
    left: 115%;
  }

  .contact-button:active {
    transform: translateY(-1px) scale(0.975);
  }

  .wa {
    width: 27px;
    height: 27px;
    flex: 0 0 27px;
    display: grid;
    place-items: center;
  }

  .wa svg {
    width: 100%;
    height: 100%;
  }

  .arrow {
    font-size: 20px;
    margin-left: 4px;
    transition: transform 0.24s ease;
  }

  .contact-button:hover .arrow {
    transform: translateX(5px);
  }

  .helper {
    margin-top: 10px;
    color: rgba(255, 255, 255, 0.36);
    font-size: 8px;
    letter-spacing: 0.13em;
    text-transform: uppercase;
  }

  /* =========================================================
       PRODUCTS AROUND CENTER
    ========================================================= */

  .product {
    --rotate: 0deg;
    --scale: 1;

    position: absolute;
    z-index: 20;

    width: clamp(150px, 16vw, 240px);
    aspect-ratio: 1;

    padding: 6px;

    border-radius: 8px;
    border: 1px solid rgba(255, 255, 255, 0.12);

    background: linear-gradient(145deg,
        rgba(255, 255, 255, 0.17),
        rgba(255, 255, 255, 0.045));

    box-shadow:
      0 26px 65px rgba(0, 0, 0, 0.34),
      inset 0 1px 0 rgba(255, 255, 255, 0.08);

    backdrop-filter: blur(14px);
    -webkit-backdrop-filter: blur(14px);

    cursor: grab;
    touch-action: none;

    transform: rotate(var(--rotate)) scale(var(--scale));

    transition:
      box-shadow 0.28s ease,
      border-color 0.28s ease,
      opacity 0.28s ease,
      filter 0.28s ease;

    will-change: transform, left, top;
  }

  .product-inner {
    position: relative;
    width: 100%;
    height: 100%;
    overflow: hidden;
    border-radius: 4px;
    background: #fff;
  }

  .product img {
    width: 100%;
    height: 100%;
    display: block;
    object-fit: cover;
    pointer-events: none;
    transition: transform 0.3s ease;
  }

  .product::after {
    content: "";
    position: absolute;
    inset: 6px;
    border-radius: 4px;
    pointer-events: none;
    box-shadow: inset 0 0 0 1px rgba(0, 0, 0, 0.04);
  }

  .product:hover {
    z-index: 60;
    border-color: rgba(255, 255, 255, 0.28);
    box-shadow:
      0 36px 90px rgba(0, 0, 0, 0.5),
      0 0 35px rgba(60, 148, 255, 0.14);
  }

  .product:hover img {
    transform: scale(1.045);
  }

  .product.dragging {
    z-index: 150;
    cursor: grabbing;
    box-shadow:
      0 45px 110px rgba(0, 0, 0, 0.62),
      0 0 55px rgba(61, 149, 255, 0.23);
  }

  .product-label {
    position: absolute;
    z-index: 4;
    left: 12px;
    bottom: 12px;

    padding: 6px 9px;

    border-radius: 3px;
    background: rgba(3, 18, 38, 0.76);
    backdrop-filter: blur(8px);

    color: #fff;
    font-size: 9px;
    font-weight: 700;
    letter-spacing: 0.03em;

    opacity: 0;
    transform: translateY(6px);

    transition:
      opacity 0.22s ease,
      transform 0.22s ease;

    pointer-events: none;
  }

  .product:hover .product-label,
  .product.dragging .product-label {
    opacity: 1;
    transform: translateY(0);
  }

  /* Symmetrical arrangement around CTA */
  .p1 {
    left: 7%;
    top: 16%;
    --rotate: -7deg;
    --scale: 0.93;
    animation: float1 6s ease-in-out infinite;
  }

  .p2 {
    right: 7%;
    top: 15%;
    --rotate: 7deg;
    --scale: 0.93;
    animation: float2 6.8s ease-in-out infinite;
  }

  .p3 {
    left: 11%;
    bottom: 9%;
    --rotate: 5deg;
    --scale: 0.87;
    animation: float3 7.2s ease-in-out infinite;
  }

  .p4 {
    right: 11%;
    bottom: 8%;
    --rotate: -5deg;
    --scale: 0.87;
    animation: float4 6.4s ease-in-out infinite;
  }

  @keyframes float1 {

    0%,
    100% {
      translate: 0 0;
      rotate: -2deg;
    }

    50% {
      translate: 7px -15px;
      rotate: 2deg;
    }
  }

  @keyframes float2 {

    0%,
    100% {
      translate: 0 0;
      rotate: 2deg;
    }

    50% {
      translate: -8px -17px;
      rotate: -2deg;
    }
  }

  @keyframes float3 {

    0%,
    100% {
      translate: 0 0;
      rotate: 1deg;
    }

    50% {
      translate: 9px -12px;
      rotate: -2deg;
    }
  }

  @keyframes float4 {

    0%,
    100% {
      translate: 0 0;
      rotate: -1deg;
    }

    50% {
      translate: -10px -13px;
      rotate: 2deg;
    }
  }

  /* =========================================================
       CONNECTING LINES
    ========================================================= */

  .connector {
    position: absolute;
    z-index: 8;
    height: 1px;
    pointer-events: none;
    opacity: 0.18;
    background: linear-gradient(90deg,
        transparent,
        rgba(112, 190, 255, 0.7),
        transparent);
  }

  .c1 {
    left: 21%;
    top: 34%;
    width: 22%;
    transform: rotate(14deg);
  }

  .c2 {
    right: 21%;
    top: 34%;
    width: 22%;
    transform: rotate(-14deg);
  }

  .c3 {
    left: 23%;
    bottom: 28%;
    width: 20%;
    transform: rotate(-13deg);
  }

  .c4 {
    right: 23%;
    bottom: 28%;
    width: 20%;
    transform: rotate(13deg);
  }

  /* =========================================================
       FOOTER
    ========================================================= */

  .footer {
    position: absolute;
    z-index: 40;
    left: clamp(20px, 4vw, 64px);
    right: clamp(20px, 4vw, 64px);
    bottom: 18px;

    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 18px;

    color: rgba(255, 255, 255, 0.3);
    font-size: 8px;
    letter-spacing: 0.14em;
    text-transform: uppercase;
    pointer-events: none;
  }

  /* =========================================================
       MOBILE
    ========================================================= */

  @media (max-width: 820px) {
    .header {
      top: 16px;
      left: 18px;
      right: 18px;
    }

    .brand-logo {
      width: 46px;
      height: 34px;
    }

    .brand-copy strong {
      font-size: 8.5px;
    }

    .brand-copy span,
    .header-note {
      display: none;
    }

    .center {
      width: calc(100vw - 30px);
    }

    .center h1 {
      font-size: clamp(28px, 9vw, 42px);
      max-width: 430px;
    }

    .eyebrow {
      font-size: 7.5px;
      margin-bottom: 10px;
    }

    .eyebrow::before,
    .eyebrow::after {
      width: 20px;
    }

    .contact-button {
      width: min(430px, calc(100vw - 34px));
      min-height: 56px;
      padding: 13px 14px;
      font-size: 12px;
      gap: 9px;
    }

    .helper {
      font-size: 7px;
    }

    .product {
      width: clamp(90px, 26vw, 128px);
      padding: 4px;
      border-radius: 6px;
    }

    .product-inner,
    .product::after {
      border-radius: 3px;
    }

    .product::after {
      inset: 4px;
    }

    .product-label {
      display: none;
    }

    .p1 {
      left: 5%;
      top: 11%;
    }

    .p2 {
      right: 5%;
      top: 12%;
    }

    .p3 {
      left: 7%;
      bottom: 10%;
    }

    .p4 {
      right: 7%;
      bottom: 10%;
    }

    .connector {
      opacity: 0.09;
    }

    .ring {
      width: 108vw;
    }

    .grid {
      opacity: 0.46;
    }

    .cursor-glow {
      display: none;
    }

    .footer {
      left: 18px;
      right: 18px;
      bottom: 10px;
      font-size: 6.5px;
    }

    .footer span:first-child {
      display: none;
    }

    .footer {
      justify-content: flex-end;
    }
  }

  @media (max-width: 480px) {
    .center {
      top: 51%;
    }

    .center h1 {
      font-size: clamp(27px, 8.8vw, 38px);
    }

    .contact-button {
      font-size: 11.5px;
    }

    .product {
      width: clamp(84px, 25vw, 112px);
    }

    .p1 {
      left: 4%;
      top: 12%;
    }

    .p2 {
      right: 4%;
      top: 13%;
    }

    .p3 {
      left: 5%;
      bottom: 11%;
    }

    .p4 {
      right: 5%;
      bottom: 11%;
    }
  }

  @media (max-height: 620px) and (min-width: 821px) {
    .product {
      width: clamp(120px, 14vw, 185px);
    }

    .center h1 {
      font-size: clamp(28px, 3.2vw, 44px);
    }

    .contact-button {
      margin-top: 16px;
    }

    .helper {
      display: none;
    }
  }

  @media (prefers-reduced-motion: reduce) {

    *,
    *::before,
    *::after {
      animation: none !important;
      transition: none !important;
    }
  }
  </style>
</head>

<body>
  <main class="page" id="page">
    <div class="grid" aria-hidden="true"></div>
    <div class="noise" aria-hidden="true"></div>
    <div class="ring" aria-hidden="true"></div>
    <div class="orb orb-a" aria-hidden="true"></div>
    <div class="orb orb-b" aria-hidden="true"></div>
    <div class="cursor-glow" id="cursorGlow" aria-hidden="true"></div>

    <header class="header">
      <div class="brand">
        <img class="brand-logo" src="https://www.karyapilarnusantara.com/images/white-logo-no-text-high-res.png"
          alt="Karya Pilar Nusantara" />
        <div class="brand-copy">
          <strong>PT. Karya Pilar Nusantara</strong>
          <span>Procurement & Industrial Solutions</span>
        </div>
      </div>

      <div class="header-note">Industrial Solutions · Indonesia</div>
    </header>

    <!-- Connectors -->
    <span class="connector c1" aria-hidden="true"></span>
    <span class="connector c2" aria-hidden="true"></span>
    <span class="connector c3" aria-hidden="true"></span>
    <span class="connector c4" aria-hidden="true"></span>

    <!-- Product 1 -->
    <article class="product p1 draggable" aria-label="Kubus Apung HDPE">
      <div class="product-inner">
        <img src="https://karyapilarnusantara.com/images/kubus-apung.webp" alt="Kubus Apung HDPE" draggable="false" />
        <span class="product-label">Kubus Apung HDPE</span>
      </div>
    </article>

    <!-- Product 2 -->
    <article class="product p2 draggable" aria-label="Pallet HDPE">
      <div class="product-inner">
        <img src="https://karyapilarnusantara.com/images/pallet-hdpe.webp" alt="Pallet HDPE" draggable="false" />
        <span class="product-label">Pallet HDPE</span>
      </div>
    </article>

    <!-- Product 3 -->
    <article class="product p3 draggable" aria-label="Road Barrier">
      <div class="product-inner">
        <img src="https://karyapilarnusantara.com/images/road-barrier.webp" alt="Road Barrier" draggable="false" />
        <span class="product-label">Road Barrier</span>
      </div>
    </article>

    <!-- Product 4 -->
    <article class="product p4 draggable" aria-label="Roof Insulation">
      <div class="product-inner">
        <img src="https://karyapilarnusantara.com/images/roof-insulation.webp" alt="Roof Insulation"
          draggable="false" />
        <span class="product-label">Roof Insulation</span>
      </div>
    </article>

    <!-- True center CTA -->
    <section class="center">
      <div class="eyebrow">Karya Pilar Nusantara</div>

      <h1>
        Butuh Produk
        <span class="rotating-line" aria-live="polite">
          <span id="rotatingWord" class="rotating-word">kubus apung</span>
        </span>
      </h1>

      <a class="contact-button" href="https://wa.me/6282188882225?text=Halo%2C%20saya%20butuh%20informasi"
        target="_blank" rel="noopener noreferrer" aria-label="Hubungi Admin Karya Pilar Nusantara melalui WhatsApp">
        <span class="wa" aria-hidden="true">
          <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
            <path fill="currentColor"
              d="M16.04 3C9.4 3 4 8.32 4 14.87c0 2.1.56 4.15 1.62 5.94L3.9 27l6.38-1.66a12.2 12.2 0 0 0 5.75 1.45h.01C22.68 26.79 28 21.47 28 14.92 28 8.37 22.68 3 16.04 3zm0 21.78a10.1 10.1 0 0 1-5.15-1.4l-.37-.22-3.79.99 1.01-3.64-.24-.38a9.78 9.78 0 0 1-1.52-5.26C5.98 9.43 10.5 5 16.04 5c5.53 0 10.03 4.44 10.03 9.92 0 5.44-4.5 9.86-10.03 9.86zm5.5-7.4c-.3-.15-1.77-.86-2.05-.96-.27-.1-.47-.15-.67.15-.2.3-.77.96-.95 1.16-.17.2-.35.22-.65.07-.3-.15-1.27-.46-2.41-1.48a9.08 9.08 0 0 1-1.67-2.05c-.17-.3-.02-.46.13-.61.14-.14.3-.35.45-.52.15-.18.2-.3.3-.5.1-.2.05-.37-.02-.52-.08-.15-.68-1.61-.93-2.21-.24-.58-.49-.5-.67-.51h-.57c-.2 0-.52.07-.79.37-.27.3-1.04 1-1.04 2.45 0 1.44 1.07 2.84 1.22 3.03.15.2 2.1 3.17 5.09 4.45.71.3 1.27.49 1.7.63.72.22 1.37.19 1.88.12.58-.08 1.77-.72 2.02-1.41.25-.7.25-1.3.17-1.42-.07-.13-.27-.2-.57-.35z" />
          </svg>
        </span>

        <span>Hubungi Admin Karya Pilar Nusantara</span>
        <span class="arrow" aria-hidden="true">→</span>
      </a>

      <div class="helper">Klik tombol untuk terhubung melalui WhatsApp</div>
    </section>

    <footer class="footer">
      <span>PT Karya Pilar Nusantara · 2026</span>
      <span>Kubus Apung · Pallet HDPE · Road Barrier · Roof Insulation · Mainan Anak</span>
    </footer>
  </main>

  <script>
  (() => {
    const page = document.getElementById("page");
    const cursorGlow = document.getElementById("cursorGlow");
    const products = [...document.querySelectorAll(".draggable")];

    function clamp(v, min, max) {
      return Math.max(min, Math.min(v, max));
    }

    function isMobile() {
      return window.matchMedia("(max-width:820px)").matches;
    }

    /* Cursor glow */
    window.addEventListener(
      "pointermove",
      (e) => {
        if (!isMobile() && cursorGlow) {
          cursorGlow.style.left = `${e.clientX}px`;
          cursorGlow.style.top = `${e.clientY}px`;
        }
      }, {
        passive: true
      },
    );

    /* Product tilt */
    products.forEach((product) => {
      product.addEventListener("mousemove", (e) => {
        if (isMobile() || product.classList.contains("dragging")) return;

        const rect = product.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;

        const ry = (x - rect.width / 2) / 18;
        const rx = -(y - rect.height / 2) / 18;

        product.style.transform = `perspective(850px)
             rotateX(${rx}deg)
             rotateY(${ry}deg)
             scale(1.045)`;
      });

      product.addEventListener("mouseleave", () => {
        if (product.classList.contains("dragging")) return;
        product.style.transform = "";
      });
    });

    /* Drag system */
    const state = new WeakMap();

    products.forEach((product) => {
      state.set(product, {
        dragging: false,
        pointerId: null,
        offsetX: 0,
        offsetY: 0,
      });

      product.addEventListener("pointerdown", (e) => {
        e.preventDefault();

        const s = state.get(product);
        const pageRect = page.getBoundingClientRect();
        const rect = product.getBoundingClientRect();

        product.style.left = `${rect.left - pageRect.left}px`;
        product.style.top = `${rect.top - pageRect.top}px`;
        product.style.right = "auto";
        product.style.bottom = "auto";
        product.style.animation = "none";
        product.style.translate = "none";
        product.style.rotate = "0deg";
        product.style.transform = "none";

        s.dragging = true;
        s.pointerId = e.pointerId;
        s.offsetX = e.clientX - rect.left;
        s.offsetY = e.clientY - rect.top;

        product.classList.add("dragging");

        product.setPointerCapture?.(e.pointerId);
      });

      product.addEventListener("pointermove", (e) => {
        const s = state.get(product);
        if (!s.dragging || s.pointerId !== e.pointerId) return;

        const pageRect = page.getBoundingClientRect();

        let x = e.clientX - pageRect.left - s.offsetX;
        let y = e.clientY - pageRect.top - s.offsetY;

        const maxX = pageRect.width - product.offsetWidth;
        const maxY = pageRect.height - product.offsetHeight;

        x = clamp(x, 0, maxX);
        y = clamp(y, 0, maxY);

        product.style.left = `${x}px`;
        product.style.top = `${y}px`;

        const cx = x + product.offsetWidth / 2;
        const pointerLocal = e.clientX - pageRect.left;
        const tilt = clamp((pointerLocal - cx) / 14, -10, 10);

        product.style.transform = `perspective(850px) rotateZ(${tilt}deg) scale(1.055)`;
      });

      function endDrag(e) {
        const s = state.get(product);
        if (!s.dragging) return;
        if (e && s.pointerId !== e.pointerId) return;

        s.dragging = false;
        product.classList.remove("dragging");
        product.style.transform = "none";

        if (e && product.hasPointerCapture?.(e.pointerId)) {
          product.releasePointerCapture(e.pointerId);
        }
      }

      product.addEventListener("pointerup", endDrag);
      product.addEventListener("pointercancel", endDrag);
    });

    /* Animated rotating word in headline */
    const rotatingWord = document.getElementById("rotatingWord");
    const rotatingItems = [
      "kubus apung",
      "roof insulation",
      "road barrier",
      "pallet gudang",
      "mainan anak",
      "dermaga apung",
      "peredam panas",
      "pembatas jalan",
    ];

    let rotatingIndex = 0;

    function changeRotatingWord() {
      if (!rotatingWord) return;

      rotatingWord.classList.add("is-changing");

      setTimeout(() => {
        rotatingIndex = (rotatingIndex + 1) % rotatingItems.length;
        rotatingWord.textContent = rotatingItems[rotatingIndex];
        rotatingWord.classList.remove("is-changing");
      }, 320);
    }

    setInterval(changeRotatingWord, 2200);

    /* Keep dragged cards inside after resize */
    window.addEventListener(
      "resize",
      () => {
        const pageRect = page.getBoundingClientRect();

        products.forEach((product) => {
          if (!product.style.left) return;

          const maxX = Math.max(0, pageRect.width - product.offsetWidth);
          const maxY = Math.max(0, pageRect.height - product.offsetHeight);

          product.style.left = `${clamp(parseFloat(product.style.left) || 0, 0, maxX)}px`;

          product.style.top = `${clamp(parseFloat(product.style.top) || 0, 0, maxY)}px`;
        });
      }, {
        passive: true
      },
    );
  })();
  </script>
</body>

</html>
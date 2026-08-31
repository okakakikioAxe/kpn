<!doctype html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Karya Pilar Nusantara — Katalog & Price List</title>
  <link rel="icon" href="/kpn-icon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="/kpn-icon.ico" type="image/x-icon">

  <meta name="description" content="Akses katalog dan price list Karya Pilar Nusantara." />
  
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Katalog & Pricelist PT Karya Pilar Nusantara" />
  <meta property="og:description" content="Katalog dan Pricelist produk Karya Pilar Nusantara terbaru" />
  <meta property="og:image" content="https://karyapilarnusantara.com/images/katalog-pricelist-og-image-2.webp" />
  <meta property="og:url" content="https://www.karyapilarnusantara.com" />
  <meta property="og:site_name" content="PT Karya Pilar Nusantara" />

  <script src="https://cdn.tailwindcss.com"></script>

  <link rel="icon" href="/favicon-kpn.ico">

  <link
    href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Satoshi:wght@400;500;600;700;800&display=swap"
    rel="stylesheet" />

   <style>
    :root {
      --blue: #1261ff;
      --blue-dark: #073db4;
      --navy: #07152f;
      --light-blue: #eaf2ff;
    }

    * {
      box-sizing: border-box;
    }

    html,
    body {
      margin: 0;
      width: 100%;
      height: 100%;
      overflow: hidden;
    }

    body {
      font-family: "Manrope", sans-serif;
      background: #f7faff;
      color: var(--navy);
    }

    .satoshi {
      font-family: "Satoshi", "Manrope", sans-serif;
    }

    /* =========================================
       BACKGROUND
    ========================================= */

    .page {
      position: relative;
      width: 100%;
      height: 100vh;
      overflow: hidden;

      background:
        radial-gradient(circle at 72% 18%,
          rgba(18, 97, 255, 0.14),
          transparent 28%),
        radial-gradient(circle at 12% 88%,
          rgba(18, 97, 255, 0.08),
          transparent 28%),
        linear-gradient(135deg, #ffffff 0%, #f8fbff 55%, #edf5ff 100%);
    }

    /*
      Technical grid
    */

    .technical-grid {
      position: absolute;
      inset: 0;
      pointer-events: none;

      background-image:
        linear-gradient(rgba(18, 97, 255, 0.035) 1px, transparent 1px),
        linear-gradient(90deg, rgba(18, 97, 255, 0.035) 1px, transparent 1px);

      background-size: 55px 55px;

      mask-image: radial-gradient(circle at center,
          black 20%,
          transparent 85%);
    }

    .technical-lines {
      position: absolute;
      inset: 0;
      pointer-events: none;
      overflow: hidden;
    }

    .technical-lines::before,
    .technical-lines::after {
      content: "";
      position: absolute;

      width: 700px;
      height: 700px;

      border: 1px solid rgba(18, 97, 255, 0.07);
      border-radius: 50%;
    }

    .technical-lines::before {
      left: -400px;
      bottom: -410px;
    }

    .technical-lines::after {
      right: -430px;
      top: -430px;
    }

    /* =========================================
       HEADER
    ========================================= */

    .header {
      position: relative;
      z-index: 10;

      width: min(1240px, calc(100% - 48px));
      margin: auto;

      height: 82px;

      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .brand {
      display: flex;
      align-items: center;
      gap: 12px;
      text-decoration: none;
      color: var(--navy);
    }

    .brand-mark {
      width: 41px;
      height: 41px;

      display: grid;
      place-items: center;

      border-radius: 12px;

      color: white;

      font-weight: 800;
      font-size: 13px;


      box-shadow: 0 12px 30px rgba(18, 97, 255, 0.23);
    }

    .brand-name {
      font-size: 13px;
      font-weight: 800;

      letter-spacing: 0.12em;
    }

    .brand-sub {
      margin-top: 2px;

      color: #8190aa;

      font-size: 8px;
      font-weight: 700;

      letter-spacing: 0.22em;
      text-transform: uppercase;
    }

    .official-link {
      display: flex;
      align-items: center;
      gap: 8px;

      padding: 9px 14px;

      color: #49607f;

      font-size: 11px;
      font-weight: 700;

      border-radius: 999px;

      border: 1px solid #dce7f6;
      background: rgba(255, 255, 255, 0.62);

      backdrop-filter: blur(12px);

      text-decoration: none;

      transition: 0.25s ease;
    }

    .official-link:hover {
      transform: translateY(-2px);

      border-color: #c8d9f2;

      box-shadow: 0 10px 25px rgba(30, 73, 130, 0.08);
    }

    /* =========================================
       HERO
    ========================================= */

    .hero {
      position: relative;
      z-index: 2;

      width: min(1240px, calc(100% - 48px));
      height: calc(100vh - 146px);

      margin: auto;

      display: flex;
      align-items: center;
      justify-content: center;
    }

    .hero-center {
      position: relative;
      z-index: 8;

      width: min(650px, 48vw);

      text-align: center;
    }

    .eyebrow {
      display: inline-flex;
      align-items: center;
      gap: 8px;

      padding: 7px 12px;

      border-radius: 999px;

      color: #225bc4;

      font-size: 10px;
      font-weight: 800;

      letter-spacing: 0.16em;
      text-transform: uppercase;

      background: rgba(18, 97, 255, 0.07);

      border: 1px solid rgba(18, 97, 255, 0.12);

      animation: reveal 0.8s ease both;
    }

    .eyebrow-dot {
      width: 6px;
      height: 6px;

      border-radius: 50%;

      background: var(--blue);

      box-shadow:
        0 0 0 5px rgba(18, 97, 255, 0.08),
        0 0 15px rgba(18, 97, 255, 0.4);

      animation: pulse 2s infinite;
    }

    .title {
      margin-top: 21px;

      font-size: clamp(42px, 5vw, 75px);

      line-height: 0.97;

      letter-spacing: -0.06em;

      font-weight: 900;
    }

    .title-main {
      color: var(--navy);
    }

    .title-blue {
      background: linear-gradient(110deg, #0b4fd6, #1982ff, #0a4cc7);

      -webkit-background-clip: text;
      background-clip: text;

      -webkit-text-fill-color: transparent;

      background-size: 200% auto;

      animation: gradientMove 5s linear infinite;
    }

    .description {
      max-width: 540px;

      margin: 22px auto 0;

      color: #65758f;

      font-size: 14px;
      line-height: 1.75;
    }

    /* =========================================
       BUTTONS
    ========================================= */

    .buttons {
      margin-top: 30px;

      display: flex;
      justify-content: center;

      gap: 12px;
    }

    .button {
      position: relative;

      min-width: 165px;

      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 10px;

      padding: 14px 19px;

      border-radius: 13px;

      text-decoration: none;

      font-size: 18px;
      font-weight: 700;

      overflow: hidden;

      transition:
        transform 0.25s ease,
        box-shadow 0.25s ease;
    }

    .button:hover {
      transform: translateY(-4px);
    }

    .button-primary {
      color: white;

      background: linear-gradient(135deg, #2876ff, #0750d3);

      box-shadow: 0 16px 35px rgba(18, 97, 255, 0.24);
    }

    .button-primary:hover {
      box-shadow: 0 22px 45px rgba(18, 97, 255, 0.32);
    }

    .button-secondary {
      color: #11325e;

      background: rgba(255, 255, 255, 0.8);

      border: 1px solid #d6e2f1;

      box-shadow: 0 10px 28px rgba(39, 75, 122, 0.06);
    }

    .button-secondary:hover {
      border-color: #bfd2eb;

      box-shadow: 0 17px 38px rgba(39, 75, 122, 0.1);
    }

    .button-icon {
      width: 27px;
      height: 27px;

      display: grid;
      place-items: center;

      border-radius: 8px;

      background: rgba(255, 255, 255, 0.15);
    }

    .button-secondary .button-icon {
      background: #edf4ff;
      color: var(--blue);
    }

    .button-shine {
      position: absolute;
      inset: 0;

      transform: translateX(-120%);

      background: linear-gradient(100deg,
          transparent,
          rgba(255, 255, 255, 0.28),
          transparent);

      animation: shine 4s infinite;
    }

    /* =========================================
       PRODUCT FLOATING CARDS
    ========================================= */

    .product {
      position: absolute;

      width: 200px;

      border-radius: 22px;

      background: rgba(255, 255, 255, 0.76);

      border: 1px solid rgba(183, 204, 232, 0.75);

      box-shadow:
        0 28px 65px rgba(26, 66, 120, 0.13),
        inset 0 1px 0 white;

      backdrop-filter: blur(18px);

      overflow: hidden;

      transition: transform 0.25s ease;
    }

    .product-image {
      position: relative;

      width: 100%;
      height: 140px;

      overflow: hidden;
    }

    .product-image img {
      width: 100%;
      height: 100%;

      object-fit: cover;

      transition: transform 0.6s ease;
    }

    .product:hover img {
      transform: scale(1.07);
    }

    .product-image::after {
      content: "";

      position: absolute;
      inset: 0;

      background: linear-gradient(to top,
          rgba(7, 21, 47, 0.2),
          transparent 55%);
    }

    .product-info {
      padding: 13px 14px 14px;
    }

    .product-category {
      color: #6280a7;

      font-size: 8px;
      font-weight: 800;

      letter-spacing: 0.16em;
      text-transform: uppercase;
    }

    .product-name {
      margin-top: 3px;

      color: #0b2347;

      font-size: 13px;
      font-weight: 800;
    }

    .product-number {
      position: absolute;

      top: 10px;
      right: 10px;

      width: 24px;
      height: 24px;

      display: grid;
      place-items: center;

      border-radius: 7px;

      background: rgba(255, 255, 255, 0.84);

      color: #225bc4;

      font-size: 8px;
      font-weight: 900;
    }

    /* Cube */
    .product-cube {
      left: 2%;
      top: 28%;

      transform: rotate(-5deg);

      animation: float1 6s ease-in-out infinite;
    }

    /* Pallet */
    .product-pallet {
      left: 9%;
      bottom: 5%;

      transform: rotate(5deg);

      animation: float2 6.5s ease-in-out infinite;
    }

    /* Barrier */
    .product-barrier {
      right: 3%;
      top: 23%;

      transform: rotate(5deg);

      animation: float3 6.2s ease-in-out infinite;
    }

    /* Roof */
    .product-roof {
      right: 9%;
      bottom: 4%;

      transform: rotate(-5deg);

      animation: float4 7s ease-in-out infinite;
    }

    /* Kids Toy */
    .product-toy {
      left: 50%;
      top: 4%;

      transform: translateX(-50%) rotate(2deg);

      animation: float5 6.8s ease-in-out infinite;
    }


    /* =========================================
       DECORATIVE CONNECTORS
    ========================================= */

    .connector {
      position: absolute;
      z-index: 1;

      height: 1px;

      background: linear-gradient(90deg,
          transparent,
          rgba(18, 97, 255, 0.18),
          transparent);

      transform-origin: left center;
    }

    .connector-1 {
      width: 190px;

      left: 19%;
      top: 43%;

      transform: rotate(9deg);
    }

    .connector-2 {
      width: 180px;

      left: 21%;
      top: 65%;

      transform: rotate(-12deg);
    }

    .connector-3 {
      width: 190px;

      right: 20%;
      top: 42%;

      transform: rotate(-9deg);
    }

    .connector-4 {
      width: 175px;

      right: 21%;
      top: 65%;

      transform: rotate(12deg);
    }

    /* =========================================
       FOOTER
    ========================================= */

    .footer {
      position: relative;
      z-index: 10;

      width: min(1240px, calc(100% - 48px));
      margin: auto;

      height: 64px;

      display: flex;
      align-items: center;
      justify-content: space-between;

      border-top: 1px solid #e1eaf6;

      color: #8a99ae;

      font-size: 9px;
      letter-spacing: 0.08em;
    }

    .footer-right {
      display: flex;
      align-items: center;
      gap: 20px;
    }

    .stat strong {
      color: #36577f;
      margin-right: 4px;
    }

    /* =========================================
       ANIMATIONS
    ========================================= */

    @keyframes reveal {
      from {
        opacity: 0;
        transform: translateY(18px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes pulse {

      0%,
      100% {
        opacity: 1;
      }

      50% {
        opacity: 0.4;
      }
    }

    @keyframes gradientMove {
      to {
        background-position: 200% center;
      }
    }

    @keyframes shine {
      0% {
        transform: translateX(-120%);
      }

      20%,
      100% {
        transform: translateX(120%);
      }
    }

    @keyframes float1 {

      0%,
      100% {
        transform: translateY(0) rotate(-5deg);
      }

      50% {
        transform: translateY(-14px) rotate(-3deg);
      }
    }

    @keyframes float2 {

      0%,
      100% {
        transform: translateY(0) rotate(5deg);
      }

      50% {
        transform: translateY(-10px) rotate(3deg);
      }
    }

    @keyframes float3 {

      0%,
      100% {
        transform: translateY(0) rotate(5deg);
      }

      50% {
        transform: translateY(-16px) rotate(7deg);
      }
    }

    @keyframes float4 {

      0%,
      100% {
        transform: translateY(0) rotate(-5deg);
      }

      50% {
        transform: translateY(-11px) rotate(-7deg);
      }
    }

    @keyframes float5 {

      0%,
      100% {
        transform: translateX(-50%) translateY(0) rotate(2deg);
      }

      50% {
        transform: translateX(-50%) translateY(-12px) rotate(4deg);
      }
    }

    /* =========================================
   RESPONSIVE SYSTEM
========================================= */

    /*
  DESKTOP NORMAL
  >= 1101px
*/
    @media (min-width: 1101px) {
      .hero-center {
        width: min(630px, 50vw);
      }

      .product {
        width: 190px;
      }

      .product-image {
        height: 130px;
      }
    }

    /*
  LAPTOP / SMALL DESKTOP
  851px - 1100px
*/
    @media (min-width: 851px) and (max-width: 1100px) {
      .hero {
        width: min(1000px, calc(100% - 40px));
      }

      .hero-center {
        width: 500px;
      }

      .title {
        font-size: clamp(42px, 5vw, 60px);
      }

      .description {
        max-width: 470px;
        font-size: 13px;
      }

      .product {
        width: 145px;
        border-radius: 18px;
      }

      .product-image {
        height: 100px;
      }

      .product-info {
        padding: 10px 11px;
      }

      .product-name {
        font-size: 11px;
      }

      .product-category {
        font-size: 7px;
      }

      /*
    Jauhkan kartu dari pusat hero
  */

      .product-cube {
        left: -10px;
        top: 28%;
      }

      .product-pallet {
        left: 4%;
        bottom: 3%;
      }

      .product-barrier {
        right: -10px;
        top: 24%;
      }

      .product-roof {
        right: 4%;
        bottom: 3%;
      }

      .product-toy {
        left: 50%;
        top: 2%;
      }

      .connector {
        opacity: 0.5;
      }
    }

    /*
  LAPTOP DENGAN HEIGHT PENDEK
  Contoh:
  1366 x 600
  1440 x 650
*/
    @media (min-width: 851px) and (max-height: 720px) {
      .header {
        height: 64px;
      }

      .hero {
        height: calc(100vh - 120px);
      }

      .hero-center {
        width: 470px;
      }

      .title {
        font-size: 48px;
      }

      .description {
        margin-top: 15px;
        font-size: 12px;
        line-height: 1.6;
      }

      .buttons {
        margin-top: 21px;
      }

      .button {
        min-width: 145px;
        padding: 12px 16px;
      }

      /*
    Kartu diperkecil lagi
  */

      .product {
        width: 125px;
        border-radius: 15px;
      }

      .product-image {
        height: 82px;
      }

      .product-info {
        padding: 8px 9px 9px;
      }

      .product-name {
        font-size: 9px;
      }

      .product-category {
        font-size: 6px;
      }

      .product-number {
        width: 20px;
        height: 20px;

        top: 6px;
        right: 6px;

        font-size: 7px;
      }

      /*
    Geser jauh dari teks
  */

      .product-cube {
        left: -5%;
        top: 25%;
      }

      .product-pallet {
        left: 2%;
        bottom: 2%;
      }

      .product-barrier {
        right: -5%;
        top: 22%;
      }

      .product-roof {
        right: 2%;
        bottom: 2%;
      }

      .product-toy {
        left: 50%;
        top: 1%;
      }

      .connector {
        opacity: 0.3;
      }

      .footer {
        height: 48px;
      }
    }

    /*
  HEIGHT SANGAT PENDEK
  Contoh:
  1366 x 500
  1280 x 550
*/
    @media (min-width: 851px) and (max-height: 590px) {
      .hero-center {
        width: 430px;
      }

      .eyebrow {
        font-size: 8px;
        padding: 5px 9px;
      }

      .title {
        margin-top: 14px;
        font-size: 40px;
      }

      .description {
        margin-top: 12px;
        font-size: 11px;
      }

      .buttons {
        margin-top: 17px;
      }

      .button {
        min-width: 135px;
        padding: 10px 13px;
        font-size: 10px;
      }

      .button-icon {
        width: 23px;
        height: 23px;
      }

      /*
    Product cards jadi dekorasi saja
  */

      .product {
        width: 105px;
        border-radius: 13px;
      }

      .product-image {
        height: 68px;
      }

      .product-info {
        padding: 7px;
      }

      .product-name {
        font-size: 8px;
      }

      .product-category {
        font-size: 5px;
      }

      .product-number {
        width: 17px;
        height: 17px;

        top: 5px;
        right: 5px;

        font-size: 6px;
      }

      .product-cube {
        left: -2%;
        top: 22%;
      }

      .product-pallet {
        left: 3%;
        bottom: 1%;
      }

      .product-barrier {
        right: -2%;
        top: 20%;
      }

      .product-roof {
        right: 3%;
        bottom: 1%;
      }

      .product-toy {
        left: 50%;
        top: 1%;
      }

      .connector {
        display: none;
      }
    }

    /*
  TABLET PORTRAIT
  601px - 850px
*/
    @media (min-width: 601px) and (max-width: 850px) {

      html,
      body {
        overflow: hidden;
      }

      .page {
        min-height: 100vh;
      }

      .header {
        width: calc(100% - 36px);
        height: 70px;
      }

      .hero {
        width: calc(100% - 36px);

        height: calc(100vh - 125px);

        align-items: center;
      }

      .hero-center {
        width: min(520px, 72%);
      }

      .title {
        font-size: clamp(40px, 6vw, 58px);
      }

      .description {
        max-width: 480px;
        font-size: 12px;
      }

      /*
    Kartu tetap ada,
    tapi menjadi jauh lebih kecil.
  */

      .product {
        width: 125px;
        border-radius: 15px;
      }

      .product-image {
        height: 82px;
      }

      .product-info {
        padding: 8px;
      }

      .product-name {
        font-size: 9px;
      }

      .product-category {
        font-size: 6px;
      }

      .product-number {
        width: 19px;
        height: 19px;

        top: 5px;
        right: 5px;

        font-size: 6px;
      }

      .product-cube {
        left: -10px;
        top: 18%;
      }

      .product-pallet {
        left: 0;
        bottom: 3%;
      }

      .product-barrier {
        right: -10px;
        top: 18%;
      }

      .product-roof {
        right: 0;
        bottom: 3%;
      }

      .product-toy {
        left: 50%;
        top: 0.5%;
      }

      .connector {
        display: none;
      }

      .official-link {
        padding: 8px 11px;
        font-size: 9px;
      }
    }

    /*
  MOBILE
  <= 600px

  Pada mobile:
  product tidak lagi menjadi 5 kartu besar.
  Mereka menjadi dekorasi kecil di pinggir.
*/
    @media (max-width: 600px) {

      html,
      body {
        overflow: hidden;
      }

      .page {
        height: 100svh;
        min-height: 0;
      }

      .technical-grid {
        background-size: 38px 38px;
      }

      .header {
        width: calc(100% - 28px);
        height: 65px;
      }

      .brand-mark {
        width: 35px;
        height: 35px;

        font-size: 11px;
      }

      .brand-name {
        font-size: 11px;
      }

      .brand-sub {
        font-size: 6px;
      }

      .official-link {
        display: none;
      }

      .hero {
        width: calc(100% - 28px);

        height: calc(100svh - 115px);

        min-height: 0;

        align-items: center;

        padding: 0;
      }

      /*
    Area hero dibuat lebih lebar,
    tetapi text tetap menjadi prioritas.
  */

      .hero-center {
        width: 100%;

        padding: 0 26px;

        z-index: 10;
      }

      .eyebrow {
        font-size: 7px;
        padding: 6px 9px;
      }

      .title {
        margin-top: 15px;

        font-size: clamp(35px, 10vw, 48px);
      }

      .description {
        max-width: 390px;

        margin-top: 16px;

        font-size: 11px;
        line-height: 1.65;
      }

      .buttons {
        margin-top: 22px;

        gap: 9px;
      }

      .button {
        width: 100%;
        min-width: 0;

        padding: 12px 14px;

        font-size: 10px;
      }

      /*
    Product cards mengecil drastis
  */

      .product {
        width: 92px;

        border-radius: 12px;

        opacity: 0.75;

        filter: saturate(0.85);
      }

      .product-image {
        height: 60px;
      }

      .product-info {
        padding: 6px 7px 7px;
      }

      .product-category {
        font-size: 5px;
      }

      .product-name {
        font-size: 7px;
      }

      .product-number {
        width: 16px;
        height: 16px;

        top: 4px;
        right: 4px;

        font-size: 5px;
      }

      /*
    Posisi dibuat DI LUAR area text
  */

      .product-cube {
        left: -10px;
        top: 8%;
      }

      .product-pallet {
        left: -8px;
        bottom: 7%;
      }

      .product-barrier {
        right: -10px;
        top: 8%;
      }

      .product-roof {
        right: -8px;
        bottom: 7%;
      }

      .product-toy {
        left: 50%;
        top: 0%;
        transform: translateX(-50%) rotate(2deg);
      }

      /*
    Hilangkan garis penghubung
    supaya tidak mengganggu text
  */

      .connector {
        display: none;
      }

      .footer {
        width: calc(100% - 28px);

        height: 50px;

        font-size: 6px;
      }

      .footer-right {
        display: none;
      }
    }

    /*
  MOBILE HEIGHT PENDEK

  Contoh:
  iPhone landscape
  Android kecil
  browser mobile dengan address bar tinggi
*/
    @media (max-width: 600px) and (max-height: 680px) {
      .header {
        height: 55px;
      }

      .hero {
        height: calc(100svh - 100px);
      }

      .hero-center {
        padding: 0 30px;
      }

      .title {
        font-size: 40px;
      }

      .description {
        margin-top: 12px;
        font-size: 9px;
        line-height: 1.5;
      }

      .buttons {
        margin-top: 16px;
      }

      .button {
        padding: 32px 40px;
      }

      /*
    Pada layar super pendek,
    kartu dibuat sangat subtle.
  */

      .product {
        width: 72px;
        opacity: 0.55;
      }

      .product-image {
        height: 46px;
      }

      .product-info {
        padding: 5px;
      }

      .product-name {
        font-size: 6px;
      }

      .product-category {
        display: none;
      }

      .product-number {
        width: 13px;
        height: 13px;

        font-size: 4px;
      }

      .product-cube {
        left: -5px;
        top: 7%;
      }

      .product-pallet {
        left: -5px;
        bottom: 4%;
      }

      .product-barrier {
        right: -5px;
        top: 7%;
      }

      .product-roof {
        right: -5px;
        bottom: 4%;
      }

      .product-toy {
        left: 50%;
        top: 0%;
        transform: translateX(-50%) rotate(2deg);
      }
    }

    /*
  VERY WIDE SCREEN
  Supaya kartu tidak terlalu dekat
*/
    @media (min-width: 1500px) {
      .product-cube {
        left: 5%;
      }

      .product-pallet {
        left: 12%;
      }

      .product-barrier {
        right: 5%;
      }

      .product-roof {
        right: 12%;
      }

      .product-toy {
        left: 50%;
        top: 3%;
      }
    }
  </style>
</head>

<body>
  <div class="page">
    <!-- BACKGROUND -->
    <div class="technical-grid"></div>
    <div class="technical-lines"></div>

    <!-- HEADER -->
    <header class="header">
      <a href="https://www.karyapilarnusantara.com/" class="brand" target="_blank">
        <div class="brand-mark">
          <img src="/images/logo-kpn.png" />
        </div>

        <div>
          <div class="brand-name satoshi">PT. KARYA PILAR NUSANTARA</div>

          <!-- <div class="brand-name satoshi">Nusantara</div> -->
        </div>
      </a>

      <a href="https://www.karyapilarnusantara.com/" target="_blank" class="official-link">
        Website Resmi

        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <path d="M7 17L17 7" />
          <path d="M7 7h10v10" />
        </svg>
      </a>
    </header>

    <!-- HERO -->
    <main class="hero">
      <!-- PRODUCT : KIDS TOY -->
      <article class="product product-toy" data-depth="1.1">
        <div class="product-image">
          <img src="/images/mainan-anak.webp" alt="Mainan anak" />
        </div>

        <div class="product-number">05</div>

        <div class="product-info">
          <div class="product-category">Consumer Product</div>
          <div class="product-name satoshi">Mainan Anak</div>
        </div>
      </article>

      <!-- PRODUCT : CUBE -->
      <article class="product product-cube" data-depth="1.3">
        <div class="product-image">
          <img src="/images/kubus-apung.webp" alt="Kubus apung HDPE" />
        </div>

        <div class="product-number">01</div>

        <div class="product-info">
          <div class="product-category">Water Solution</div>

          <div class="product-name satoshi">Kubus Apung</div>
        </div>
      </article>

      <!-- PRODUCT : PALLET -->
      <article class="product product-pallet" data-depth="1.7">
        <div class="product-image">
          <img src="/images/pallet-hdpe.webp" alt="Pallet HDPE" />
        </div>

        <div class="product-number">02</div>

        <div class="product-info">
          <div class="product-category">Logistics</div>

          <div class="product-name satoshi">Pallet HDPE</div>
        </div>
      </article>

      <!-- PRODUCT : ROAD BARRIER -->
      <article class="product product-barrier" data-depth="1.4">
        <div class="product-image">
          <img src="/images/road-barrier.webp" alt="Road barrier" />
        </div>

        <div class="product-number">03</div>

        <div class="product-info">
          <div class="product-category">Infrastructure</div>

          <div class="product-name satoshi">Road Barrier</div>
        </div>
      </article>

      <!-- PRODUCT : ROOF INSULATION -->
      <article class="product product-roof" data-depth="1.8">
        <div class="product-image">
          <img src="/images/roof-insulation.webp" alt="Roof insulation" />
        </div>

        <div class="product-number">04</div>

        <div class="product-info">
          <div class="product-category">Building Solution</div>

          <div class="product-name satoshi">Roof Insulation</div>
        </div>
      </article>

      <!-- CONNECTOR LINES -->

      <div class="connector connector-1"></div>
      <div class="connector connector-2"></div>
      <div class="connector connector-3"></div>
      <div class="connector connector-4"></div>

      <!-- CENTER CONTENT -->
      <section class="hero-center">
        <div class="eyebrow">
          <span class="eyebrow-dot"></span>

          Procurement & Industrial Solutions
        </div>

        <h1 class="title satoshi">
          <span class="title-main"> Solusi Pengadaan </span>

          <br />

          <span class="title-blue"> Untuk Kebutuhan Nyata. </span>
        </h1>

        <p class="description">
          Jelajahi berbagai produk Karya Pilar Nusantara untuk kebutuhan
          industri, infrastruktur, logistik, konstruksi, mainan anak, hingga proyek
          outdoor.
        </p>

        <div class="buttons">
          <!-- =====================================
             GANTI LINK KATALOG DI SINI
        ====================================== -->

          <a href="https://drive.google.com/drive/folders/1xBwvDbHozU514y6i9x2b-PODtmPBrhLV?usp=sharing" target="_blank"
            class="button button-primary">
            <span class="button-icon">
              <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path
                  d="M4 19.5V5.5A1.5 1.5 0 015.5 4h13A1.5 1.5 0 0120 5.5v13a1.5 1.5 0 01-1.5 1.5h-13A1.5 1.5 0 014 19.5z" />

                <path d="M8 8h8" />
                <path d="M8 12h8" />
                <path d="M8 16h5" />
              </svg>
            </span>

            Katalog

            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M5 12h14" />
              <path d="M13 6l6 6-6 6" />
            </svg>

            <span class="button-shine"></span>
          </a>

          <!-- =====================================
             GANTI LINK PRICE LIST DI SINI
        ====================================== -->

          <a href="https://docs.google.com/spreadsheets/d/1lTph5UguF1Ps0HFL9jnB54Vv6RLebAD8I5GJz-0lCgQ/edit?usp=sharing"
            target="_blank" class="button button-secondary">
            <span class="button-icon">
              <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <rect x="4" y="3" width="16" height="18" rx="2" />

                <path d="M8 8h8" />
                <path d="M8 12h8" />
                <path d="M8 16h5" />
              </svg>
            </span>

            Price List

            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M5 12h14" />
              <path d="M13 6l6 6-6 6" />
            </svg>
          </a>
        </div>
      </section>
    </main>

    <!-- FOOTER -->
    <footer class="footer">
      <div>PT KARYA PILAR NUSANTARA · 2026</div>

      <div class="footer-right">
        <div class="stat">
          <strong>HDPE</strong>
          Solutions
        </div>

        <div class="stat">
          <strong>Industrial</strong>
          Supply
        </div>

        <div class="stat">
          <strong>Indonesia</strong>
          Coverage
        </div>
      </div>
    </footer>
  </div>

  <script>
    /*
  ==========================================
  MOUSE PARALLAX

  Membuat lima produk bergerak berbeda
  sesuai posisi mouse.
  ==========================================
  */

    const products = document.querySelectorAll(".product");

    if (window.innerWidth > 850) {
      window.addEventListener("mousemove", (e) => {
        const x = e.clientX / window.innerWidth - 0.5;

        const y = e.clientY / window.innerHeight - 0.5;

        products.forEach((product) => {
          const depth = Number(product.dataset.depth || 1);

          product.style.marginLeft = `${x * depth * 18}px`;

          product.style.marginTop = `${y * depth * 18}px`;
        });
      });
    }

    /*
    ==========================================
    HOVER EFFECT
    ==========================================
    */

    products.forEach((product) => {
      product.addEventListener("mouseenter", () => {
        product.style.zIndex = "20";

        product.style.transform += " scale(1.05)";
      });

      product.addEventListener("mouseleave", () => {
        product.style.zIndex = "";
      });
    });
  </script>
</body>

</html>
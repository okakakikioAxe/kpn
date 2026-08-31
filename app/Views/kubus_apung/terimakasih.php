<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Terima Kasih | Kubus Apung</title>

  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    :root {
      --navy: #081b33;
      --blue: #1976d2;
      --blue-light: #65b5ff;
      --text: #182638;
      --muted: #718096;
      --white: #ffffff;
    }

    body {
      min-height: 100vh;
      font-family:
        Inter,
        Arial,
        Helvetica,
        sans-serif;

      display: flex;
      align-items: center;
      justify-content: center;

      padding: 20px;

      background:
        linear-gradient(135deg,
          #edf5fc 0%,
          #f7fbff 100%);

      color: var(--text);
    }

    .thankyou-page {
      position: relative;

      width: 100%;
      max-width: 980px;
      min-height: min(650px, calc(100vh - 40px));

      display: grid;
      grid-template-columns: 45% 55%;

      overflow: hidden;

      background: #fff;

      border-radius: 26px;

      box-shadow:
        0 25px 70px rgba(8, 27, 51, .15);
    }


    /* =====================================================
       LEFT IMAGE
    ===================================================== */

    .thankyou-image {
      position: relative;

      min-height: 100%;

      background:
        linear-gradient(145deg,
          rgba(5, 23, 44, .72),
          rgba(13, 58, 96, .56)),
        url('/images/kubus_apung_ditengah_laut.png');

      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;

      display: flex;
      align-items: flex-start;

      padding: 35px;
    }

    .brand-chip {
      display: inline-flex;
      align-items: center;
      gap: 8px;

      padding: 9px 13px;

      border-radius: 999px;

      color: white;

      font-size: 11px;
      font-weight: 800;
      letter-spacing: 1px;
      text-transform: uppercase;

      background: rgba(255, 255, 255, .12);
      border: 1px solid rgba(255, 255, 255, .17);

      backdrop-filter: blur(8px);
    }

    .brand-dot {
      width: 7px;
      height: 7px;

      border-radius: 50%;

      background: #65b5ff;

      box-shadow:
        0 0 0 4px rgba(101, 181, 255, .12);
    }


    /* =====================================================
       RIGHT CONTENT
    ===================================================== */

    .thankyou-content {
      padding: 55px 50px;

      display: flex;
      align-items: center;
      justify-content: center;

      text-align: left;
    }

    .content-inner {
      width: 100%;
      max-width: 430px;
    }


    /* =====================================================
       SUCCESS ICON
    ===================================================== */

    .success-icon {
      width: 76px;
      height: 76px;

      margin-bottom: 24px;

      border-radius: 50%;

      display: grid;
      place-items: center;

      color: white;

      font-size: 28px;
      font-weight: 800;

      background:
        linear-gradient(135deg,
          #1685d8,
          #49adff);

      box-shadow:
        0 14px 30px rgba(25, 118, 210, .22);
    }


    /* =====================================================
       TEXT
    ===================================================== */

    .eyebrow {
      display: block;

      margin-bottom: 9px;

      color: var(--blue);

      font-size: 11px;
      font-weight: 800;

      letter-spacing: 1.5px;

      text-transform: uppercase;
    }

    h1 {
      color: var(--navy);

      font-size: clamp(32px, 5vw, 46px);

      line-height: 1.08;

      letter-spacing: -1.5px;

      margin-bottom: 17px;
    }

    h1 span {
      color: var(--blue);
    }

    .description {
      color: var(--muted);

      font-size: 14px;

      line-height: 1.75;

      margin-bottom: 27px;
    }


    /* =====================================================
       INFO CARD
    ===================================================== */

    .info-card {
      padding: 15px 16px;

      margin-bottom: 25px;

      border-radius: 14px;

      background: #f3f8fd;

      border: 1px solid #dcebf8;

      display: flex;
      align-items: flex-start;
      gap: 12px;
    }

    .info-icon {
      flex: 0 0 auto;

      width: 31px;
      height: 31px;

      border-radius: 9px;

      display: grid;
      place-items: center;

      background: #e0f1ff;

      color: var(--blue);

      font-size: 13px;
    }

    .info-card p {
      color: #53657a;

      font-size: 12px;

      line-height: 1.6;
    }


    /* =====================================================
       BUTTON
    ===================================================== */

    .home-button {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 9px;

      min-height: 51px;

      padding: 0 21px;

      border-radius: 13px;

      color: white;

      text-decoration: none;

      font-size: 13px;
      font-weight: 800;

      background:
        linear-gradient(135deg,
          #1264bb,
          #2184ea);

      box-shadow:
        0 12px 24px rgba(30, 121, 216, .18);

      transition:
        transform .2s ease,
        box-shadow .2s ease;
    }

    .home-button:hover {
      transform: translateY(-2px);

      box-shadow:
        0 16px 28px rgba(30, 121, 216, .24);
    }

    .home-button:active {
      transform: translateY(0);
    }

    .arrow {
      font-size: 17px;

      transition:
        transform .2s ease;
    }

    .home-button:hover .arrow {
      transform: translateX(3px);
    }


    /* =====================================================
       FOOTNOTE
    ===================================================== */

    .footnote {
      margin-top: 17px;

      color: #9aa7b7;

      font-size: 10px;

      line-height: 1.5;
    }


    /* =====================================================
       RESPONSIVE
    ===================================================== */

    @media (max-width: 780px) {

      body {
        padding: 12px;
      }

      .thankyou-page {
        min-height: calc(100vh - 24px);

        grid-template-columns: 1fr;

        border-radius: 20px;
      }

      .thankyou-image {
        min-height: 190px;

        padding: 24px;

        background-position: center 45%;
      }

      .thankyou-content {
        padding: 35px 25px 30px;

        text-align: left;
      }

      .success-icon {
        width: 65px;
        height: 65px;

        font-size: 24px;
      }

      h1 {
        font-size: 34px;
      }

      .description {
        font-size: 13px;
      }

      .home-button {
        width: 100%;
      }
    }


    @media (max-height: 720px) and (min-width: 781px) {

      .thankyou-page {
        min-height: calc(100vh - 24px);
      }

      .thankyou-content {
        padding-top: 35px;
        padding-bottom: 35px;
      }

      .success-icon {
        width: 64px;
        height: 64px;

        margin-bottom: 18px;
      }

      h1 {
        font-size: 37px;
      }

      .description {
        margin-bottom: 20px;
      }

      .info-card {
        margin-bottom: 18px;
      }
    }
  </style>
</head>

<body>

  <main class="thankyou-page">

    <!-- LEFT -->
    <section class="thankyou-image">

      <div class="brand-chip">
        <span class="brand-dot"></span>
        Kubus Apung
      </div>

    </section>


    <!-- RIGHT -->
    <section class="thankyou-content">

      <div class="content-inner">

        <div class="success-icon">
          ✓
        </div>

        <span class="eyebrow">
          Data berhasil dikirim
        </span>

        <h1>
          Terima kasih,<br>
          <span>kami sudah menerimanya.</span>
        </h1>

        <p class="description">
          Data Anda telah berhasil masuk ke sistem kami.
          Tim kami akan meninjau kebutuhan Anda dan segera
          menghubungi untuk memberikan informasi lebih lanjut
          mengenai produk Kubus Apung.
        </p>


        <div class="info-card">

          <div class="info-icon">
            ⏱
          </div>

          <p>
            Mohon tunggu beberapa saat. Tim kami akan
            menghubungi Anda menggunakan informasi yang
            telah diberikan pada form.
          </p>

        </div>


        <a href="<?= site_url('/') ?>" class="home-button">
          Kembali ke Halaman Utama

          <span class="arrow">
            →
          </span>
        </a>


        <p class="footnote">
          Terima kasih telah mempercayakan kebutuhan proyek
          Anda kepada kami.
        </p>

      </div>

    </section>

  </main>

</body>

</html>
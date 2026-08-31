<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Leads Kubus Apung</title>

  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    :root {
      --navy: #081b33;
      --navy-2: #102c4d;
      --blue: #1d74d8;
      --blue-light: #eaf4ff;
      --text: #142033;
      --muted: #718096;
      --border: #dce5ef;
      --error: #dc3545;
      --success: #16a05d;
      --white: #ffffff;
    }

    body {
      min-height: 100vh;
      font-family: Inter, Arial, Helvetica, sans-serif;
      color: var(--text);
      background:
        radial-gradient(circle at top right, rgba(45, 130, 230, .15), transparent 32%),
        linear-gradient(135deg, #f5f9fd 0%, #edf4fb 100%);
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 20px;
    }

    .lead-wrapper {
      width: 100%;
      max-width: 980px;
      min-height: min(700px, calc(100vh - 40px));
      display: grid;
      grid-template-columns: 42% 58%;
      background: var(--white);
      border-radius: 24px;
      overflow: hidden;
      box-shadow: 0 24px 60px rgba(13, 44, 77, .14);
    }

    /* LEFT */
    .lead-info {
      position: relative;
      overflow: hidden;
      padding: 42px;
      color: white;

      background:
        linear-gradient(145deg,
          rgba(6, 25, 47, 0.78),
          rgba(17, 55, 92, 0.72)),
        url('/images/kubus_apung_ditengah_laut.png');

      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;

      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .lead-info::before,
    .lead-info::after {
      content: "";
      position: absolute;
      border-radius: 50%;
      pointer-events: none;
    }

    .lead-info::before {
      width: 260px;
      height: 260px;
      background: rgba(50, 145, 255, .10);
      top: -80px;
      right: -70px;
    }

    .lead-info::after {
      width: 180px;
      height: 180px;
      background: rgba(50, 145, 255, .08);
      bottom: -60px;
      left: -50px;
    }

    .brand-chip {
      position: relative;
      z-index: 2;
      display: inline-flex;
      align-items: center;
      gap: 8px;
      width: fit-content;
      padding: 8px 13px;
      border-radius: 999px;
      font-size: 12px;
      font-weight: 700;
      letter-spacing: .6px;
      text-transform: uppercase;
      background: rgba(255, 255, 255, .10);
      border: 1px solid rgba(255, 255, 255, .12);
    }

    .brand-dot {
      width: 7px;
      height: 7px;
      border-radius: 50%;
      background: #58a9ff;
      box-shadow: 0 0 0 4px rgba(88, 169, 255, .12);
    }

    .info-content {
      position: relative;
      z-index: 2;
      margin-top: auto;
      margin-bottom: auto;
      padding: 35px 0;
    }

    .info-content h1 {
      font-size: clamp(30px, 4vw, 46px);
      line-height: 1.06;
      margin-bottom: 18px;
      letter-spacing: -1.5px;
    }

    .info-content h1 span {
      color: #6eb7ff;
    }

    .info-content p {
      max-width: 340px;
      color: rgba(255, 255, 255, .72);
      line-height: 1.75;
      font-size: 14px;
    }

    .info-footer {
      position: relative;
      z-index: 2;
      display: flex;
      align-items: center;
      gap: 10px;
      color: rgba(255, 255, 255, .52);
      font-size: 12px;
    }

    .secure-icon {
      width: 28px;
      height: 28px;
      border-radius: 8px;
      display: grid;
      place-items: center;
      background: rgba(255, 255, 255, .08);
      font-size: 13px;
    }

    /* RIGHT */
    .form-panel {
      padding: 42px 45px;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .form-header {
      margin-bottom: 25px;
    }

    .eyebrow {
      display: inline-block;
      margin-bottom: 8px;
      font-size: 11px;
      font-weight: 800;
      letter-spacing: 1.3px;
      text-transform: uppercase;
      color: var(--blue);
    }

    .form-header h2 {
      font-size: 28px;
      line-height: 1.2;
      margin-bottom: 8px;
      color: var(--navy);
    }

    .form-header p {
      font-size: 13px;
      line-height: 1.6;
      color: var(--muted);
    }

    .progress-wrap {
      margin-bottom: 22px;
    }

    .progress-top {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 7px;
      font-size: 11px;
      color: var(--muted);
    }

    .progress-track {
      width: 100%;
      height: 5px;
      border-radius: 999px;
      background: #edf2f7;
      overflow: hidden;
    }

    .progress-bar {
      width: 0%;
      height: 100%;
      border-radius: inherit;
      background: linear-gradient(90deg, #2378dc, #62b4ff);
      transition: width .25s ease;
    }

    .form-group {
      margin-bottom: 17px;
    }

    .form-label {
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 10px;
      margin-bottom: 7px;
      font-size: 12px;
      font-weight: 700;
      color: #29384c;
    }

    .required {
      color: var(--error);
    }

    .input-wrap {
      position: relative;
    }

    .input-icon {
      position: absolute;
      left: 15px;
      top: 50%;
      transform: translateY(-50%);
      color: #90a0b4;
      font-size: 14px;
      pointer-events: none;
    }

    .form-control {
      width: 100%;
      height: 51px;
      border: 1px solid var(--border);
      border-radius: 13px;
      outline: none;
      background: #fbfdff;
      padding: 0 44px 0 42px;
      font-size: 14px;
      color: var(--text);
      transition:
        border-color .2s ease,
        box-shadow .2s ease,
        background .2s ease;
    }

    .form-control:hover {
      border-color: #c5d2e0;
      background: white;
    }

    .form-control:focus {
      border-color: var(--blue);
      background: white;
      box-shadow: 0 0 0 4px rgba(29, 116, 216, .10);
    }

    .form-control.input-error {
      border-color: var(--error);
      box-shadow: 0 0 0 4px rgba(220, 53, 69, .07);
    }

    .form-control.input-valid {
      border-color: var(--success);
      box-shadow: 0 0 0 4px rgba(22, 160, 93, .06);
    }

    .status-icon {
      position: absolute;
      right: 14px;
      top: 50%;
      transform: translateY(-50%);
      width: 18px;
      height: 18px;
      border-radius: 50%;
      display: none;
      align-items: center;
      justify-content: center;
      font-size: 10px;
      font-weight: 800;
    }

    .status-icon.valid {
      display: flex;
      color: white;
      background: var(--success);
    }

    .status-icon.error {
      display: flex;
      color: white;
      background: var(--error);
    }

    .error-text {
      min-height: 16px;
      margin-top: 5px;
      font-size: 11px;
      color: var(--error);
      opacity: 0;
      transform: translateY(-2px);
      transition: .2s ease;
    }

    .error-text.show {
      opacity: 1;
      transform: translateY(0);
    }

    .submit-button {
      width: 100%;
      height: 53px;
      margin-top: 4px;
      border: 0;
      border-radius: 14px;
      cursor: pointer;
      color: white;
      font-size: 14px;
      font-weight: 800;
      letter-spacing: .2px;
      background: linear-gradient(135deg, #1264bb, #2184ea);
      box-shadow: 0 12px 22px rgba(30, 121, 216, .20);
      transition:
        transform .2s ease,
        box-shadow .2s ease,
        opacity .2s ease;
    }

    .submit-button:hover {
      transform: translateY(-1px);
      box-shadow: 0 15px 27px rgba(30, 121, 216, .25);
    }

    .submit-button:active {
      transform: translateY(0);
    }

    .submit-button:disabled {
      cursor: not-allowed;
      opacity: .55;
      transform: none;
      box-shadow: none;
    }

    .form-note {
      margin-top: 11px;
      text-align: center;
      color: #8c99aa;
      font-size: 10px;
      line-height: 1.5;
    }

    .server-message {
      margin-bottom: 18px;
      padding: 12px 14px;
      border-radius: 11px;
      font-size: 12px;
      line-height: 1.5;
    }

    .server-success {
      color: #126b42;
      background: #eaf9f1;
      border: 1px solid #c9efd9;
    }

    .server-error {
      color: #a7202e;
      background: #fff0f2;
      border: 1px solid #ffd0d5;
    }

    .server-error ul {
      padding-left: 17px;
      margin: 0;
    }

    .server-info {
      margin-bottom: 18px;
      padding: 13px 15px;
      border-radius: 12px;
      color: #155a85;
      background: #eef8ff;
      border: 1px solid #c9e8fb;
      font-size: 12px;
      line-height: 1.55;
    }

    .server-info strong {
      display: block;
      margin-bottom: 2px;
      color: #0d4d78;
      font-size: 12px;
    }

    @media (max-width: 780px) {
      body {
        padding: 12px;
      }

      .lead-wrapper {
        min-height: calc(100vh - 24px);
        grid-template-columns: 1fr;
        border-radius: 20px;
      }

      .lead-info {
        min-height: 260px;
        padding: 28px;
      }

      .info-content {
        padding: 20px 0;
      }

      .info-content h1 {
        font-size: 30px;
      }

      .info-content p,
      .info-footer {
        display: none;
      }

      .form-panel {
        padding: 30px 24px 25px;
      }
    }

    @media (max-height: 760px) and (min-width: 781px) {
      .lead-wrapper {
        min-height: calc(100vh - 24px);
      }

      .lead-info,
      .form-panel {
        padding-top: 27px;
        padding-bottom: 27px;
      }

      .form-group {
        margin-bottom: 12px;
      }

      .form-header {
        margin-bottom: 17px;
      }
    }
  </style>
</head>

<body>

  <div class="lead-wrapper">

    <!-- LEFT -->
    <section class="lead-info">

      <div class="brand-chip">
        <span class="brand-dot"></span>
        Kubus Apung
      </div>

      <div class="info-content">
        <h1>
          Bangun proyek<br>
          <span>lebih efisien.</span>
        </h1>

        <p>
          Isi data singkat di samping dan tim kami akan membantu
          memberikan informasi produk kubus apung sesuai kebutuhan proyek Anda.
        </p>
      </div>

      <div class="info-footer">
        <div class="secure-icon">✓</div>
        <span>Data Anda digunakan untuk kebutuhan konsultasi produk.</span>
      </div>

    </section>

    <!-- RIGHT -->
    <section class="form-panel">

      <div class="form-header">
        <span class="eyebrow">Form Leads</span>
        <h2>Mulai konsultasi</h2>
        <p>
          Lengkapi data berikut agar tim kami dapat menghubungi Anda.
        </p>
      </div>

      <?php if (session()->getFlashdata('success')): ?>
        <div class="server-message server-success">
          <?= session()->getFlashdata('success') ?>
        </div>
      <?php endif; ?>

      <?php if (session()->getFlashdata('error')): ?>
        <div class="server-message server-error">
          <?= esc(session()->getFlashdata('error')) ?>
        </div>
      <?php endif; ?>

      <?php if (session()->getFlashdata('duplicate')): ?>
        <div class="server-message server-info">
          <strong>Data sudah diterima</strong><br>
          <?= esc(session()->getFlashdata('duplicate')) ?>
        </div>
      <?php endif; ?>

      <?php if (isset($validation)): ?>
        <div class="server-message server-error">
          <?= $validation->listErrors() ?>
        </div>
      <?php endif; ?>

      <div class="progress-wrap">
        <div class="progress-top">
          <span>Progress pengisian</span>
          <span id="progressText">0%</span>
        </div>

        <div class="progress-track">
          <div class="progress-bar" id="progressBar"></div>
        </div>
      </div>

      <form action="<?= site_url('submit-form-kubus-apung') ?>" method="post" id="leadForm" novalidate>

        <?= csrf_field() ?>

        <!-- Honeypot anti-spam -->
        <div style="
            position:absolute;
            left:-9999px;
            width:1px;
            height:1px;
            overflow:hidden;
          " aria-hidden="true">
          <label for="website">Website</label>
          <input type="text" id="website" name="website" value="" tabindex="-1" autocomplete="off">
        </div>

        <!-- Nama -->
        <div class="form-group">
          <label class="form-label" for="nama">
            Nama
            <span class="required">*</span>
          </label>

          <div class="input-wrap">
            <span class="input-icon">👤</span>

            <input type="text" id="nama" name="nama" class="form-control" value="<?= esc(old('nama')) ?>"
              placeholder="Masukkan nama Anda" maxlength="80" autocomplete="name">

            <span class="status-icon" id="namaStatus"></span>
          </div>

          <div class="error-text" id="namaError"></div>
        </div>


        <!-- Nomor Telepon -->
        <div class="form-group">
          <label class="form-label" for="no_telepon">
            Nomor Telepon
            <span class="required">*</span>
          </label>

          <div class="input-wrap">
            <span class="input-icon">📞</span>

            <input type="tel" id="no_telepon" name="no_telepon" class="form-control"
              value="<?= esc(old('no_telepon')) ?>" placeholder="Contoh: 08123456789" maxlength="15" inputmode="numeric"
              autocomplete="tel">

            <span class="status-icon" id="phoneStatus"></span>
          </div>

          <div class="error-text" id="phoneError"></div>
        </div>


        <!-- Tempat Bekerja -->
        <div class="form-group">
          <label class="form-label" for="tempat_bekerja">
            Tempat Bekerja
            <span class="required">*</span>
          </label>

          <div class="input-wrap">
            <span class="input-icon">🏢</span>

            <input type="text" id="tempat_bekerja" name="tempat_bekerja" class="form-control"
              value="<?= esc(old('tempat_bekerja')) ?>" placeholder="Nama perusahaan / Lokasi Bekerja" maxlength="100"
              autocomplete="organization">

            <span class="status-icon" id="workStatus"></span>
          </div>

          <div class="error-text" id="workError"></div>
        </div>


        <button type="submit" class="submit-button" id="submitButton" disabled>
          Kirim Data &nbsp;→
        </button>

        <div class="form-note">
          Dengan mengirim form ini, Anda bersedia dihubungi oleh tim kami.
        </div>

      </form>

    </section>

  </div>


  <script>
    const form = document.getElementById("leadForm");

    const nama = document.getElementById("nama");
    const phone = document.getElementById("no_telepon");
    const work = document.getElementById("tempat_bekerja");

    const submitButton = document.getElementById("submitButton");

    const progressBar = document.getElementById("progressBar");
    const progressText = document.getElementById("progressText");

    const fields = [{
        input: nama,
        error: document.getElementById("namaError"),
        status: document.getElementById("namaStatus"),
        validator: validateName
      },
      {
        input: phone,
        error: document.getElementById("phoneError"),
        status: document.getElementById("phoneStatus"),
        validator: validatePhone
      },
      {
        input: work,
        error: document.getElementById("workError"),
        status: document.getElementById("workStatus"),
        validator: validateWork
      }
    ];


    /* =========================
       VALIDATORS
    ========================= */

    function validateName(value) {
      value = value.trim();

      if (!value) {
        return "Nama wajib diisi.";
      }

      if (value.length < 2) {
        return "Nama minimal 2 karakter.";
      }

      if (/\d/.test(value)) {
        return "Nama tidak boleh berisi angka.";
      }

      if (!/^[A-Za-zÀ-ÿ\s.'-]+$/.test(value)) {
        return "Nama hanya boleh berisi huruf.";
      }

      return "";
    }


    function validatePhone(value) {
      value = value.trim();

      if (!value) {
        return "Nomor telepon wajib diisi.";
      }

      if (!/^\d+$/.test(value)) {
        return "Nomor telepon hanya boleh berisi angka.";
      }

      if (value.length < 10) {
        return "Nomor telepon minimal 10 digit.";
      }

      if (value.length > 15) {
        return "Nomor telepon maksimal 15 digit.";
      }

      if (!/^0/.test(value)) {
        return "Nomor telepon harus diawali angka 0.";
      }

      return "";
    }


    function validateWork(value) {
      value = value.trim();

      if (!value) {
        return "Tempat bekerja wajib diisi.";
      }

      if (value.length < 2) {
        return "Tempat bekerja minimal 2 karakter.";
      }

      return "";
    }


    /* =========================
       UI VALIDATION
    ========================= */

    function setFieldState(field, errorMessage) {

      const {
        input,
        error,
        status
      } = field;

      input.classList.remove("input-error", "input-valid");
      status.classList.remove("valid", "error");

      if (errorMessage) {

        input.classList.add("input-error");

        error.textContent = errorMessage;
        error.classList.add("show");

        status.textContent = "!";
        status.classList.add("error");

        return false;
      }

      if (input.value.trim()) {

        input.classList.add("input-valid");

        error.textContent = "";
        error.classList.remove("show");

        status.textContent = "✓";
        status.classList.add("valid");

        return true;
      }

      error.textContent = "";
      error.classList.remove("show");

      return false;
    }


    function validateField(field) {
      const errorMessage = field.validator(field.input.value);
      return setFieldState(field, errorMessage);
    }


    function validateAll() {

      let valid = true;

      fields.forEach(field => {

        const result = validateField(field);

        if (!result) {
          valid = false;
        }

      });

      updateProgress();

      submitButton.disabled = !valid;

      return valid;
    }


    /* =========================
       PROGRESS
    ========================= */

    function updateProgress() {

      let completed = 0;

      fields.forEach(field => {

        if (!field.validator(field.input.value)) {
          completed++;
        }

      });

      const percentage = Math.round(
        (completed / fields.length) * 100
      );

      progressBar.style.width = percentage + "%";
      progressText.textContent = percentage + "%";

      submitButton.disabled = percentage !== 100;
    }


    /* =========================
       INPUT EVENTS
    ========================= */

    fields.forEach(field => {

      field.input.addEventListener("input", () => {

        // khusus nomor telepon:
        // otomatis buang semua karakter selain angka
        if (field.input === phone) {
          field.input.value =
            field.input.value.replace(/\D/g, "");
        }

        validateField(field);
        updateProgress();

      });


      field.input.addEventListener("blur", () => {

        validateField(field);
        updateProgress();

      });

    });


    /* =========================
       SUBMIT
    ========================= */

    form.addEventListener("submit", function(event) {

      if (!validateAll()) {

        event.preventDefault();

        const firstInvalid =
          fields.find(field =>
            field.validator(field.input.value) !== ""
          );

        if (firstInvalid) {
          firstInvalid.input.focus();
        }

        return;
      }

      submitButton.disabled = true;
      submitButton.textContent = "Mengirim data...";
    });


    /* =========================
       INITIAL STATE
    ========================= */

    updateProgress();
  </script>

</body>

</html>
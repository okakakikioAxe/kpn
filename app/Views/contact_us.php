<?= $this->extend('./template') ?>

<?= $this->section('style') ?>
<link rel="stylesheet" href="css/contact_us_style.css">
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<!-- Hero -->
<section id="hero-section" class="relative h-[90vh] bg-white">
  <div class="relative h-full lg:h-full w-full object-cover">
    <img src="/images/hero background.webp" alt="kantor pt karya pilar nusantara" class="h-full w-full object-cover">
  </div>
  <div class="absolute top-3 sm:top-5 xl:top-8 left-1/2 -translate-x-1/2 max-w-[1600px]">
    <div class="flex justify-center">
      <img loading="lazy" class="h-[15vh] max-h-[100px] sm:max-h-[150px] md:max-h-[150px] xl:max-h-[200px] w-auto flex justify-center" src="colored logo.png" alt="Logo berwarna PT. Karya Pilar Nusantara">
    </div>
  </div>
  <div class="absolute bottom-[20vh] sm:bottom-[180px] md:bottom-[20vh] lg:bottom-[20vh] xl:bottom-[23vh] left-1/2 -translate-x-1/2 w-[80vw] max-w-[1600px] z-20">
    <h1 class="max-w-[600px] md:max-w-[800px] mb-[60px] md:mb-[90px] text-white text-[32px] md:text-[36px] lg:text-[40px] font-humanist-bold leading-[100%] -tracking-[0.02em]" data-lang-group="contact_us_hero" data-lang-key="title">Hubungi Kami</h1>
    <p class="max-w-[800px] mb-[20px] text-white font-trebuchet tracking-[0.025em] leading-4 lg:leading-5 text-[16px] md:text-[18px]" data-lang-group="contact_us_hero" data-lang-key="sub_title">Hubungi kami untuk konsultasi, informasi produk, atau pemesanan. Tim kami siap membantu dengan layanan terbaik dan respons cepat.</p>
    <button id="contactUsHeroButton" class="flex cursor-pointer bg-light-salmon font-trebuchet text-[18px] w-[230px] h-[43px] text-white font-bold rounded-full shadow-lg items-center justify-center hover:bg-dark-salmon hover:scale-105 transform duration-300 ease-in-out " data-lang-group="contact_us_hero" data-lang-key="button">
      Informasi Kontak
    </button>
  </div>
  <div class="hidden lg:block absolute bottom-0 h-[210px] w-full bg-gradient-to-t from-white to-transparent z-10"></div>
</section>

<!-- Kontak -->
<section id="contactSection" class=" relative block w-full px-[40px] md:px-[10%] mt-[120px] lg:mt-[180px] xl:mt-[150px] ">
  <h2 class="flex align-center justify-center text-center text-iron-gray text-[28px] xl:text-[36px] font-trebuchet leading-[135%] -tracking-[0.03em] font-[500]" data-lang-group="contact_us_information" data-lang-key="title">Informasi Kontak</h2>
  <div class="w-full  flex justify-center mt-[20px] sm:mt-[20px] lg:mt-[40px] xl:mt-[50px] ">
    <p class="text-center  text-iron-gray text-[16px] md:text-[18px] xl:text-[20px] font-humanist-normal leading-[135%] tracking-[0.01em] font-[400] w-[600px] lg:w-full " data-lang-group="contact_us_information" data-lang-key="sub_title">Temukan informasi lengkap untuk menghubungi kami, menjalin kerja sama, atau cari tau lebih lanjut tentang layanan dan produk kami.</p>
  </div>
  <div class="mt-[70px] sm:mt-[100px] lg:mt-[90px] xl:mt-[130px] 2xl:mt-[180px] ">
    <div class="w-full flex justify-center ">
      <div class="flex w-full justify-center place-content-center  ">
        <div class="w-[800px] xl:w-full ">
          <div class="grid grid-cols-1 md:grid-cols-2 2xl:grid-cols-4 gap-5 sm:gap-7 md:gap-10 justify-between xl:justify-center h-full">
            <div class="flex items-center justify-start md:bg-gray-100 md:p-7 md:rounded-3xl">
              <div class="bg-[#FAFAFA] rounded-full min-w-[38px] h-[38px] flex justify-center items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                  <path d="M11.986 1.00195C7.15896 1.06795 2.30896 5.80995 2.30896 10.457C2.30896 16.873 11.082 22.603 11.454 22.839C11.926 23.14 12.396 22.943 12.566 22.827C12.934 22.575 21.587 16.577 21.692 10.409C21.546 5.63895 16.842 1.06795 11.987 1.00195H11.986ZM14.812 13.131C13.872 14.071 12.947 14.531 11.995 14.531C11.919 14.531 11.843 14.528 11.766 14.522C10.889 14.455 10.07 14.013 9.18796 13.13C7.32196 11.265 7.32196 9.37195 9.18796 7.50595C11.055 5.63995 12.946 5.64095 14.813 7.50595C16.678 9.37295 16.678 11.265 14.813 13.13L14.812 13.131Z" fill="#0D55C8" />
                  <path d="M12.018 8.10791C11.609 8.10791 11.168 8.35391 10.602 8.91991C9.40597 10.1159 9.63597 10.7489 10.602 11.7159C11.12 12.2349 11.551 12.4989 11.918 12.5279C12.334 12.5729 12.827 12.2879 13.397 11.7159C14.592 10.5209 14.363 9.88691 13.397 8.91991C12.889 8.41091 12.472 8.10791 12.018 8.10791Z" fill="#0D55C8" />
                </svg>
              </div>
              <div class=" pt-[8px] ml-[13px]">
                <h3 class="text-[16px] md:text-[18px] font-trebuchet font-bold text-[#0D55C8]" data-lang-group="contact_us_information" data-lang-key="address_title">Alamat</h3>
                <p class="text-[18px] xl:text-[20px] mt-1 font-humanist-normal font-normal text-[#2F2D2D] leading-6">Pergudangan Safe N Lock (Sidoarjo)</p>
              </div>
            </div>
            <div class="flex items-center justify-start md:bg-gray-100 md:p-7 md:rounded-3xl">
              <div class="bg-[#FAFAFA] rounded-full min-w-[38px] h-[38px] flex justify-center items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                  <g clip-path="url(#clip0_483_288)">
                    <path d="M20.0032 5.20625C20.0032 11.5729 11.5615 20.0062 5.20321 20.0062C3.81154 20.0062 2.51154 19.4812 1.55321 18.5229L0.719874 17.5646C-0.246793 16.5979 -0.246793 14.9646 0.761541 13.9562C0.786541 13.9312 2.79487 12.3896 2.79487 12.3896C3.79487 11.4396 5.36988 11.4396 6.36154 12.3896L7.57821 13.3646C10.2449 12.2312 12.1365 10.3312 13.3532 7.57292L12.3865 6.35625C11.4282 5.36458 11.4282 3.78125 12.3865 2.78958C12.3865 2.78958 13.9282 0.78125 13.9532 0.75625C14.9615 -0.252083 16.5949 -0.252083 17.6032 0.75625L18.4782 1.51458C19.4782 2.50625 20.0032 3.80625 20.0032 5.19792V5.20625Z" fill="#0D55C8" />
                  </g>
                  <defs>
                    <clipPath id="clip0_483_288">
                      <rect width="20" height="20" fill="white" />
                    </clipPath>
                  </defs>
                </svg>
              </div>
              <div class=" pt-[8px] ml-[13px]">
                <h3 class="text-[16px] md:text-[18px] font-trebuchet font-bold text-[#0D55C8]" data-lang-group="contact_us_information" data-lang-key="phone_title">Telepon</h3>
                <p class="text-[18px] xl:text-[20px] mt-1 font-humanist-normal font-normal text-[#2F2D2D] leading-6">+62 821-6005-0005</p>
              </div>
            </div>
            <div class="flex relative w-full items-center justify-start md:bg-gray-100 md:p-7 md:rounded-3xl">
              <div class="bg-[#FAFAFA] rounded-full min-w-[38px] h-[38px]  flex justify-center items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                  <g clip-path="url(#clip0_483_282)">
                    <path d="M19.9617 4.61816L12.9467 11.6332C12.1645 12.4134 11.1048 12.8515 10 12.8515C8.89521 12.8515 7.83552 12.4134 7.05333 11.6332L0.0383333 4.61816C0.0266667 4.74983 0 4.869 0 4.99983V14.9998C0.00132321 16.1045 0.440735 17.1635 1.22185 17.9446C2.00296 18.7258 3.062 19.1652 4.16667 19.1665H15.8333C16.938 19.1652 17.997 18.7258 18.7782 17.9446C19.5593 17.1635 19.9987 16.1045 20 14.9998V4.99983C20 4.869 19.9733 4.74983 19.9617 4.61816Z" fill="#0D55C8" />
                    <path d="M11.7683 10.4552L19.38 2.84266C19.0113 2.23126 18.4912 1.72519 17.87 1.37327C17.2487 1.02135 16.5473 0.835447 15.8333 0.833496H4.16666C3.45268 0.835447 2.75125 1.02135 2.13002 1.37327C1.50879 1.72519 0.988727 2.23126 0.619995 2.84266L8.23166 10.4552C8.70131 10.9229 9.33715 11.1856 10 11.1856C10.6628 11.1856 11.2987 10.9229 11.7683 10.4552Z" fill="#0D55C8" />
                  </g>
                  <defs>
                    <clipPath id="clip0_483_282">
                      <rect width="20" height="20" fill="white" />
                    </clipPath>
                  </defs>
                </svg>
              </div>
              <div class="w-full pt-[8px] ml-[13px]">
                <h3 class="text-[16px] md:text-[18px] font-trebuchet font-bold text-[#0D55C8]">Email</h3>
                <p class=" 2xl:w-[12vw] text-[18px] xl:text-[20px] font-humanist-normal font-normal text-[#2F2D2D] leading-6 overflow-hidden break-words">admin@karyapilarnusantara.com </p>
                <div class="relative w-full flex bg-red-100 over">
                </div>
              </div>
            </div>
            <div class="flex items-center justify-start md:bg-gray-100 md:p-7 md:rounded-3xl">
              <div class="bg-[#FAFAFA] rounded-full min-w-[38px] h-[38px] flex justify-center items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                  <g clip-path="url(#clip0_483_280)">
                    <path d="M10 0C4.48583 0 0 4.48583 0 10C0 15.5142 4.48583 20 10 20C15.5142 20 20 15.5142 20 10C20 4.48583 15.5142 0 10 0ZM12.0833 13.6083C11.9525 13.6842 11.8092 13.72 11.6675 13.72C11.3792 13.72 11.0992 13.5708 10.945 13.3033L9.27833 10.4167C9.205 10.29 9.16667 10.1467 9.16667 10V5C9.16667 4.54 9.53917 4.16667 10 4.16667C10.4608 4.16667 10.8333 4.54 10.8333 5V9.77667L12.3883 12.47C12.6183 12.8683 12.4817 13.3783 12.0833 13.6083Z" fill="#0D55C8" />
                  </g>
                  <defs>
                    <clipPath id="clip0_483_280">
                      <rect width="20" height="20" fill="white" />
                    </clipPath>
                  </defs>
                </svg>
              </div>
              <div class=" pt-[8px] ml-[13px]">
                <h3 class="text-[16px] md:text-[18px] font-trebuchet font-bold text-[#0D55C8]" data-lang-group="contact_us_information" data-lang-key="operational_title">Waktu Operasional</h3>
                <p class="text-[18px] xl:text-[20px] mt-1 font-humanist-normal font-normal text-[#2F2D2D] leading-6" data-lang-group="contact_us_information" data-lang-key="operational_day">Senin - Sabtu / 08.00 - 17.00 WIB</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Form Pertanayaan -->
<section id="questionFormSection" class="relative block w-full  mt-[200px] lg:mt-[240px] xl:mt-[260px] ">
  <div class=" bg-royal-azure w-full px-[40px] md:px-[10%] h-[100vh] min-h-[1000px] max-h-[1200px] flex flex-col justify-center items-center">
    <div class=" grid grid-cols-1 lg:grid-cols-2 gap-[30px] lg:gap-[100px] items-center justify-center w-full max-w-[1200px] ">
      <div class="w-full items-center lg:mb-[100px]">
        <h2 class="flex align-center justify-center text-center text-white text-[28px] xl:text-[36px] font-trebuchet leading-[135%] -tracking-[0.03em] font-[500]" data-lang-group="contact_us_form" data-lang-key="title">Hubungi Kami</h2>
        <div class=" w-full  flex justify-center mt-[20px] sm:mt-[20px] lg:mt-[40px] xl:mt-[50px] ">
          <p class="text-center md:max-w-[600px] text-white text-[16px] md:text-[18px] xl:text-[20px] font-humanist-normal leading-[135%] tracking-[0.01em] font-[400] lg:w-[300px]" data-lang-group="contact_us_form" data-lang-key="sub_title">Tanyakan apapun tentang kami dan produk kami. Admin akan selalu siap memberikan informasi yang Anda butuhkan.</p>
        </div>
      </div>
      <div class="flex justify-center xl:justify-end">
        <div class="w-full md:max-w-[600px]">
          <form id="contactForm">
            <div class="mt-[32px]">
              <h4 class="text-white text-[14px] font-humanist-normal font-bold tracking-[0.03em]" data-lang-group="contact_us_form" data-lang-key="name">NAMA ANDA *</h4>
              <input type="text" name="name" id="name" autocomplete="name" class="w-full focus:outline-none focus:ring-2 focus:ring-blue-400 h-[50px] bg-[#F0F0F0] rounded-[5px] mt-[10px] px-[15px] placeholder:text-gray-500 placeholder:italic placeholder:font-humanist-normal font-humanist-normal tracking-wider" placeholder="Mr Budi">
            </div>
            <div class="mt-[32px]">
              <h4 class="text-white text-[14px] font-humanist-normal font-bold tracking-[0.03em]">EMAIL</h4>
              <input type="text" name="email" id="email" autocomplete="email" class="w-full focus:outline-none focus:ring-2 focus:ring-blue-400 h-[50px] bg-[#F0F0F0] rounded-[5px] mt-[10px] px-[15px] placeholder:text-gray-500 placeholder:italic placeholder:font-humanist-normal font-humanist-normal tracking-wider" placeholder="mail@example.com">
            </div>
            <div class="mt-[32px]">
              <h4 class="text-white text-[14px] font-humanist-normal font-bold tracking-[0.03em]" data-lang-group="contact_us_form" data-lang-key="phone">NOMOR TELEPON ANDA *</h4>
              <input type="tel" name="phone" id="phone" autocomplete="tel" class="w-full focus:outline-none focus:ring-2 focus:ring-blue-400 h-[50px] bg-[#F0F0F0] rounded-[5px] mt-[10px] px-[15px] placeholder:text-gray-500 placeholder:italic placeholder:font-humanist-normal font-humanist-normal tracking-wider" placeholder="+62 8123 4567 891">
            </div>
            <div class="mt-[32px]">
              <h4 class="text-white text-[14px] font-humanist-normal font-bold tracking-[0.03em]" data-lang-group="contact_us_form" data-lang-key="company">NAMA INSTANSI / PERUSAHAAN ANDA *</h4>
              <input type="text" name="instantion" id="instantion" class="w-full focus:outline-none focus:ring-2 focus:ring-blue-400 h-[50px] bg-[#F0F0F0] rounded-[5px] mt-[10px] px-[15px] placeholder:text-gray-500 placeholder:italic placeholder:font-humanist-normal font-humanist-normal tracking-wider" placeholder="PT Bintang Makmur">
            </div>
            <div class="mt-[32px]">
              <h4 class="text-white text-[14px] font-humanist-normal font-bold tracking-[0.03em]" data-lang-group="contact_us_form" data-lang-key="message">PESAN *</h4>
              <textarea rows="3" cols="1" id="message" name="message" class="w-full focus:outline-none focus:ring-2 focus:ring-blue-400 bg-[#F0F0F0] rounded-[5px] mt-[10px] p-[15px] resize-y placeholder:text-gray-500 placeholder:italic placeholder:font-humanist-normal font-humanist-normal tracking-wider text-wrap text-clip" placeholder="Apakah ada harga khusus untuk pesanan banyak?"></textarea>
            </div>
            <div class="flex justify-center mt-[50px] mb-[30px]">
              <button id="sendMessageButton" type="submit" class="flex cursor-pointer bg-[#13BA6E] font-trebuchet text-[18px] w-[230px] h-[43px] text-white font-bold rounded-full shadow-lg transition items-center justify-center hover:bg-[#13ba45] hover:scale-105 transform duration-300 ease-in-out" data-lang-group="contact_us_form" data-lang-key="button">
                Kirim Pesan
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FAQ -->
<section id="faqSection" class="relative flex justify-center w-full pt-[150px] lg:pt-[180px] xl:pt-[150px] pb-[200px] lg:pb-[250px] xl:pb-[290px] px-[40px] lg:px-[10%]">
  <div class=" w-[600px] lg:w-full max-w-[1200px] ">
    <h2 class="flex align-center justify-center text-center text-iron-gray text-[28px] xl:text-[36px] font-trebuchet leading-[135%] -tracking-[0.03em] font-[500]">FAQ</h2>
    <div class="mt-[46px]">

      <div class="mb-0  border-b-[#DEDEDE] border-b-[1.5px]">
        <button class="faq-button w-full flex justify-between items-center pt-[20px] pb-[24px] text-left text-[16px] md:text-[18px] lg:text-[20px] font-trebuchet font-bold" onclick="toggleFAQ(0)" data-lang-group="contact_us_faq" data-lang-key="question_1">
          Apakah produk bebas BPA?
          <span class="icon-container pl-[34px]">
            <svg class="w-6 h-6 plus-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m-8-8h16"></path>
            </svg>
          </span>
        </button>
        <div class="faq-content text-gray-600">
          <p class="pb-[40px] font-humanist-normal text-[16px] md:text-[18px] lg:text-[20px]" data-lang-group="contact_us_faq" data-lang-key="answer_1">Ya, produk kami yang berkaitan dengan anak-anak seperti playmat, perosotan, dan mainan anak, dibuat dari bahan bebas BPA sehingga aman digunakan.</p>
        </div>
      </div>
      <div class="mb-0  border-b-[#DEDEDE] border-b-[1.5px]">
        <button class="faq-button w-full flex justify-between items-center pt-[20px] pb-[24px] text-left text-[16px] md:text-[18px] lg:text-[20px] font-trebuchet font-bold" onclick="toggleFAQ(1)" data-lang-group="contact_us_faq" data-lang-key="question_2">
          Apakah bisa custom merk sendiri?
          <span class="icon-container pl-[34px]">
            <svg class="w-6 h-6 plus-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m-8-8h16"></path>
            </svg>
          </span>
        </button>
        <div class="faq-content text-gray-600">
          <p class="pb-[40px] font-humanist-normal text-[16px] md:text-[18px] lg:text-[20px]" data-lang-group="contact_us_faq" data-lang-key="answer_2">Tentu! Kami menyediakan layanan custom branding sesuai kebutuhan bisnis Anda. Hubungi kami untuk detail lebih lanjut.</p>
        </div>
      </div>
      <div class="mb-0  border-b-[#DEDEDE] border-b-[1.5px]">
        <button class="faq-button w-full flex justify-between items-center pt-[20px] pb-[24px] text-left text-[16px] md:text-[18px] lg:text-[20px] font-trebuchet font-bold" onclick="toggleFAQ(2)" data-lang-group="contact_us_faq" data-lang-key="question_3">
          Apakah pengiriman bisa ke seluruh Indonesia?
          <span class="icon-container pl-[34px]">
            <svg class="w-6 h-6 plus-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m-8-8h16"></path>
            </svg>
          </span>
        </button>
        <div class="faq-content text-gray-600">
          <p class="pb-[40px] font-humanist-normal text-[16px] md:text-[18px] lg:text-[20px]" data-lang-group="contact_us_faq" data-lang-key="answer_3">Ya, kami melayani pengiriman ke seluruh Indonesia dan mendukung semua ekspedisi, termasuk JNE, J&T, SiCepat, POS Indonesia, Indah Cargo, dan lainnya.</p>
        </div>
      </div>
      <div class="mb-0  border-b-[#DEDEDE] border-b-[1.5px]">
        <button class="faq-button w-full flex justify-between items-center pt-[20px] pb-[24px] text-left text-[16px] md:text-[18px] lg:text-[20px] font-trebuchet font-bold" onclick="toggleFAQ(3)" data-lang-group="contact_us_faq" data-lang-key="question_4">
          Apakah ada harga khusus untuk pembelian dalam jumlah besar?
          <span class="icon-container pl-[34px]">
            <svg class="w-6 h-6 plus-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m-8-8h16"></path>
            </svg>
          </span>
        </button>
        <div class="faq-content text-gray-600">
          <p class="pb-[40px] font-humanist-normal text-[16px] md:text-[18px] lg:text-[20px]" data-lang-group="contact_us_faq" data-lang-key="answer_4">Tentu, silakan hubungi tim marketing kami untuk mendapatkan penawaran terbaik. Hubungi kami melalui WhatsApp di +62 821-6005-0005 atau email admin@karyapilarnusantara.com.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<?= $this->endSection() ?>

<?= $this->section('script') ?>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script type="text/javascript" src="js/contact us/contact_us.js"></script>
<script>
  document.addEventListener("DOMContentLoaded", () => {
    const faqContents = document.querySelectorAll('.faq-content');

    faqContents.forEach(content => {
      content.dataset.height = content.scrollHeight + "px"; // Store actual height
      content.style.height = "0px"; // Collapse initially
    });

  });

  function toggleFAQ(index) {
    const content = document.querySelectorAll('.faq-content')[index];
    const iconContainer = document.querySelectorAll('.icon-container')[index];

    if (content.style.height === "0px") {
      content.style.height = content.dataset.height; // Expand
      content.style.opacity = "1"; // Fade in text
      iconContainer.innerHTML = `
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M20 12H4"></path>
                    </svg>`; // Switch to minus
    } else {
      content.style.height = "0px"; // Collapse
      content.style.opacity = "0"; // Fade out text
      iconContainer.innerHTML = `
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m-8-8h16"></path>
                    </svg>`; // Switch back to plus
    }
  }
</script>
<?= $this->endSection() ?>
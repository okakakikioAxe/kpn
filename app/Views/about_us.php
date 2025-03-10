<?= $this->extend('./template') ?>

<?= $this->section('style') ?>
<link rel="stylesheet" href="css/about_us_style.css">
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
    <h1 class="max-w-[600px] md:max-w-[800px] mb-[60px] md:mb-[90px] text-white text-[32px] md:text-[36px] lg:text-[40px] font-humanist-bold leading-[100%] -tracking-[0.02em]">Tentang Kami</h1>
    <p class="max-w-[800px] mb-[20px] text-white font-trebuchet tracking-[0.025em] leading-4 lg:leading-5 text-[16px] md:text-[18px]">Produsen Tangan Pertama Produk HDPE, TPE, dan XPE untuk Mainan Anak, Olahraga, serta Infrastruktur dengan Kualitas Premium dan Harga Terjangkau</p>
    <button id="aboutUsHeroButton" class="flex cursor-pointer bg-light-salmon font-trebuchet text-[18px] w-[230px] h-[43px] text-white font-bold rounded-full shadow-lg transition items-center justify-center">
      Selengkapnya
    </button>
  </div>
  <div class="hidden xl:block absolute bottom-0 h-[210px] w-full bg-gradient-to-t from-white to-transparent z-10"></div>
</section>

<!-- Tentang kami -->
<section id="aboutUsSection" class=" relative w-full mt-[120px] lg:mt-[180px] xl:mt-[300px] ">
  <h2 class="flex align-center justify-center text-iron-gray text-[28px] xl:text-[36px] font-trebuchet leading-[135%] -tracking-[0.03em] font-[500]">Tentang Kami</h2>
  <div class="mt-[40px] sm:mt-[40px] lg:mt-[60px] xl:mt-[130px]  w-full flex justify-center ">
    <div class="w-full max-w-[1600px] flex justify-center items-center px-[30px] md:mx-[10%]">
      <div class="hidden lg:flex h-1 w-[100px] bg-soft-silver mr-10 rounded-full"></div>
      <div class="flex flex-col w-full">
        <p class="font-humanist-normal mt-10 text-[#313030] text-[16px] md:text-[18px] xl:text-[22px] text-center  tracking-[0.03em] xl:tracking-[0.035em] leading-7 animate-about-us">PT Karya Pilar Nusantara adalah produsen tangan pertama yang menghadirkan produk berbahan HDPE, TPE, dan XPE. Kami bergerak di bidang mainan anak, olahraga, dan infrastruktur, menawarkan produk berkualitas tinggi dengan harga terjangkau. Sebagai produsen langsung, kami memastikan setiap produk tahan lama, aman, dan inovatif. Dengan teknologi modern dan standar premium, kami berkomitmen menghadirkan solusi terbaik bagi pelanggan. PT Karya Pilar Nusantara siap menjadi mitra terpercaya dalam menyediakan produk unggulan.</p>

        <p class="font-humanist-normal mt-10 text-[#313030] text-[16px] md:text-[18px] xl:text-[22px] text-center font-bold  tracking-[0.03em] xl:tracking-[0.035em] leading-7 animate-about-us">Pilihan terbaik untuk produk berkualitas, harga bersaing, dan layanan profesional.</p>
      </div>
      <div class="hidden lg:flex h-1 w-[100px] bg-soft-silver ml-10 rounded-full"></div>
    </div>
  </div>
</section>

<!-- Horizontal Divider - Tentang kami -->
<div class="flex justify-center mt-[100px] sm:mt-[140px] lg:mt-[200px] xl:mt-[280px]">
  <div class="border-[1.5px] border-[#F0F0F0] w-full max-w-[1200px] mx-[76px] sm:mx-[20%]"></div>
</div>

<!-- Visi & Misi -->
<section id="aboutUsSection" class=" relative w-full mt-[100px] lg:mt-[180px] xl:mt-[280px] flex justify-center md:px-[10%]">
  <div class="grid grid-cols-1 lg:grid-cols-2 gap-25 lg:gap-8 xl:gap-30 w-full  max-w-[1600px]">
    <div>
      <h2 class="flex align-center justify-center text-iron-gray text-[22px] xl:text-[36px] font-trebuchet leading-[135%] -tracking-[0.03em] font-[500]">Visi</h2>
      <div class="mt-[40px] lg:mt-[60px] xl:mt-[80px] w-full flex justify-center ">
        <div class="w-full max-w-[1600px] flex justify-center items-center px-[30px]">
          <p class="font-humanist-normal text-[#313030] text-[16px] md:text-[18px] xl:text-[22px] text-center  tracking-[0.03em] xl:tracking-[0.035em] leading-7 animate-vision-mission-card">PT Karya Pilar Nusantara adalah produsen tangan pertama untuk produk HDPE, TPE, dan XPE di bidang mainan anak, olahraga, dan infrastruktur. Kami menghadirkan produk berkualitas premium dengan harga terjangkau, mengutamakan daya tahan, keamanan, dan inovasi untuk memenuhi kebutuhan pelanggan dengan solusi terbaik.</p>
        </div>
      </div>
    </div>
    <div>
      <h2 class="flex align-center justify-center text-iron-gray text-[22px] xl:text-[36px] font-trebuchet leading-[135%] -tracking-[0.03em] font-[500]">Misi</h2>
      <div class="mt-[40px] lg:mt-[60px] xl:mt-[80px] w-full flex justify-center ">
        <div class="w-full max-w-[1600px] flex justify-center items-center px-[30px]">
          <p class="font-humanist-normal text-[#313030] text-[16px] md:text-[18px] xl:text-[22px] text-center  tracking-[0.03em] xl:tracking-[0.035em] leading-7 animate-vision-mission-card">PT Karya Pilar Nusantara adalah produsen tangan pertama untuk produk HDPE, TPE, dan XPE di bidang mainan anak, olahraga, dan infrastruktur. Kami menghadirkan produk berkualitas premium dengan harga terjangkau, mengutamakan daya tahan, keamanan, dan inovasi untuk memenuhi kebutuhan pelanggan dengan solusi terbaik.</p>
        </div>
      </div>
    </div>
  </div>

</section>

<!-- Horizontal Divider - Visi & Misi -->
<div class="flex justify-center mt-[130px] sm:mt-[140px] lg:mt-[200px] xl:mt-[300px]">
  <div class="border-[1.5px] border-[#F0F0F0] w-full max-w-[1200px] mx-[76px] sm:mx-[20%]"></div>
</div>

<!-- Mengapa memilih kami -->
<section id="whyUsSection" class=" relative w-full mt-[100px] sm:mt-[140px] lg:mt-[200px] xl:mt-[280px]">
  <h2 class="flex align-center justify-center text-iron-gray text-[28px] xl:text-[36px] font-trebuchet leading-[135%] -tracking-[0.03em] font-[500]">Mengapa Memilih Kami</h2>
  <div class="w-full flex justify-center pt-[130px] lg:pt-[150px] xl:pt-[180px]">
    <div class="relative w-full h-full">
      <div class="xl:hidden relative w-full px-[10%] overflow-hidden whyUsSwiper">
        <div id="normalWhyUsCard" class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="h-auto w-full content-center animate-why-us-card">
              <div class="flex justify-center">
                <img loading="lazy" class="rounded-full w-[130px] h-[130px] sm:w-[100px] sm:h-[100px] xl:w-[120px] xl:h-[120px]" src="good-review.gif" alt="animasi review bagus">
              </div>
              <h3 class="why-us-title">Terpercaya</h3>
              <p class=" why-us-description">Telah dipercaya selama lebih dari 5 tahun untuk memberikan produk berkualitas tinggi.</p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="h-auto w-full content-center animate-why-us-card">
              <div class="flex justify-center ">
                <img loading="lazy" class="rounded-full w-[130px] h-[130px] sm:w-[100px] sm:h-[100px] xl:w-[120px] xl:h-[120px]" src="star.gif" alt="animasi layanan terbaik">
              </div>
              <h3 class="why-us-title">Best Service</h3>
              <p class="relative h-auto why-us-description">Secara profesional, kami selalu memberikan kualitas layanan terbaik karena kepuasan pelanggan adalah salah satu prioritas utama kami.</p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="h-auto w-full content-center animate-why-us-card">
              <div class="flex justify-center ">
                <img loading="lazy" class="rounded-full w-[130px] h-[130px] sm:w-[100px] sm:h-[100px] xl:w-[120px] xl:h-[120px]" src="best-price.gif" alt="animasi harga terbaik">
              </div>
              <h3 class="why-us-title">Harga Kompetitif</h3>
              <p class="why-us-description">Kami menyediakan produk unggulan berkualitas tinggi dengan harga yang kompetitif dan pengiriman tepat waktu.</p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="h-auto w-full content-center animate-why-us-card">
              <div class="flex justify-center ">
                <img loading="lazy" class="rounded-full w-[130px] h-[130px] sm:w-[100px] sm:h-[100px] xl:w-[120px] xl:h-[120px]" src="emerging-industries.gif" alt="animasi jangkauan luas">
              </div>
              <h3 class="why-us-title">Jangkauan Luas</h3>
              <p class="why-us-description">Penjualan produk telah menjangkau pelosok tanah air dan kota-kota besar di Indonesia.</p>
            </div>
          </div>
        </div>
        <div class="xl:hidden pt-[70px] md:pt-[150px]">
          <div class="flex justify-center items-center why-us-swiper-pagination"></div>
        </div>

        <div class="xl:hidden">
          <button onclick="prevWhyUsSlides()" type="button" class="circle-button xl:hidden absolute z-5 left-1 top-[35%] md:top-[35%] -translate-y-1/2 bg-white h-[37px] w-[37px] rounded-full flex justify-center items-center pr-[4px] shadow-[0_35px_35px_rgba(0,0,0,0.25)]"><img loading="lazy" class="h-[28px] w-[28px]" src="arrow-left.svg" alt="panah kiri"></button>
          <button onclick="nextWhyUsSlides()" type="button" class="circle-button xl:hidden absolute z-5 right-1 top-[35%] md:top-[35%] -translate-y-1/2 bg-white h-[37px] w-[37px] rounded-full flex justify-center items-center pl-[2px]"><img loading="lazy" class="h-[28px] w-[28px]" src="arrow-right.svg" alt="panah kanan"></button>
        </div>
      </div>

      <div class="hidden xl:flex justify-center relative w-full px-[5%] overflow-visible h-full">
        <div id="xlWhyUsCard" class=" grid grid-cols-4 gap-5 2xl:gap-10 max-w-[1600px]">
          <div class="h-auto w-full content-start animate-why-us-card">
            <div class="flex justify-center">
              <img loading="lazy" class="rounded-full w-[130px] h-[130px] sm:w-[100px] sm:h-[100px] xl:w-[120px] xl:h-[120px]" src="good-review.gif" alt="animasi review bagus">
            </div>
            <h3 class="why-us-title">Terpercaya</h3>
            <p class=" why-us-description">Telah dipercaya selama lebih dari 5 tahun untuk memberikan produk berkualitas tinggi.</p>
          </div>
          <div class="h-auto w-full content-start animate-why-us-card">
            <div class="flex justify-center ">
              <img loading="lazy" class="rounded-full w-[130px] h-[130px] sm:w-[100px] sm:h-[100px] xl:w-[120px] xl:h-[120px]" src="star.gif" alt="animasi layanan terbaik">
            </div>
            <h3 class="why-us-title">Best Service</h3>
            <p class="relative h-auto why-us-description">Secara profesional, kami selalu memberikan kualitas layanan terbaik karena kepuasan pelanggan adalah salah satu prioritas utama kami.</p>
          </div>
          <div class="h-auto w-full content-start animate-why-us-card">
            <div class="flex justify-center ">
              <img loading="lazy" class="rounded-full w-[130px] h-[130px] sm:w-[100px] sm:h-[100px] xl:w-[120px] xl:h-[120px]" src="best-price.gif" alt="animasi harga terbaik">
            </div>
            <h3 class="why-us-title">Harga Kompetitif</h3>
            <p class="why-us-description">Kami menyediakan produk unggulan berkualitas tinggi dengan harga yang kompetitif dan pengiriman tepat waktu.</p>
          </div>
          <div class="h-auto w-full content-start animate-why-us-card">
            <div class="flex justify-center ">
              <img loading="lazy" class="rounded-full w-[130px] h-[130px] sm:w-[100px] sm:h-[100px] xl:w-[120px] xl:h-[120px]" src="emerging-industries.gif" alt="animasi jangkauan luas">
            </div>
            <h3 class="why-us-title">Jangkauan Luas</h3>
            <p class="why-us-description">Penjualan produk telah menjangkau pelosok tanah air dan kota-kota besar di Indonesia.</p>
          </div>
        </div>

      </div>
    </div>
  </div>

</section>

<!-- Horizontal Divider - Mengapa memilih kami -->
<div class="flex justify-center mt-[130px] sm:mt-[140px] md:mt-[220px] lg:mt-[200px] xl:mt-[300px]">
  <div class="border-[1.5px] border-[#F0F0F0] w-full max-w-[1200px] mx-[76px] sm:mx-[20%]"></div>
</div>

<!-- Bottom CTA -->
<section id="bottomCtaSection" class="relative w-full pt-[180px] lg:pt-[250px]  xl:pt-[330px] pb-[250px] lg:pb-[300px] xl:pb-[450px]">
  <p class="mx-[25px] font-humanist-normal text-[#313030] text-[18px] xl:text-[22px] text-center">Hubungi kami dan dapatkan penawaran khusus untuk kebutuhan Anda!</p>

  <div class="flex align-center justify-center mt-[43px]">
    <a href="#" class="flex bg-light-salmon w-[268px] h-[43px] text-white font-trebuchet text-[18px] rounded-full shadow-lg hover:bg-dark-salmon transition items-center justify-center">
      Hubungi Kami
    </a>
  </div>
</section>

<?= $this->endSection() ?>

<?= $this->section('script') ?>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script type="text/javascript" src="js/homepage/why_us.js"></script>
<script type="text/javascript" src="js/about_us/about_us.js"></script>
<script type="text/javascript" src="js/homepage/vision_mission.js"></script>
<script defer type="text/javascript">
  // ================= Why Us Swiper ================
  var whyUsSwiper = new Swiper(".whyUsSwiper", {
    speed: 700,
    slidesPerView: 1,
    spaceBetween: 40,
    autoplay: {
      delay: 4000,
    },
    loop: true,
    pagination: {
      el: ".why-us-swiper-pagination",
      clickable: true,
    },
    enabled: true,
    breakpoints: {
      768: {
        slidesPerView: 2,
        spaceBetween: 80,
        enabled: true,
      },
      1024: {
        slidesPerView: 2,
        spaceBetween: 100,
        enabled: true,
      },
      1280: {
        enabled: false,
      },
    },
  });

  function nextWhyUsSlides() {
    whyUsSwiper.slideNext();
  }

  function prevWhyUsSlides() {
    whyUsSwiper.slidePrev();
  }
  // ================= End of Why Us Swiper =================
</script>
<?= $this->endSection() ?>
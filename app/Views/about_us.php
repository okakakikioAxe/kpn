<?= $this->extend('./template') ?>

<?= $this->section('head') ?>
<title>PT KPN - Tentang Kami</title>
<meta name="description" content="Tentang KPN - PT Karya Pilar Nusantara (PT KPN), produsen HDPE, XPE, dan TPE terpercaya di Sidoarjo. Spesialis produsen mainan anak dan produk berkualitas dengan layanan kustom merk sesuai kebutuhan." />
<meta name="keywords" content="tentang kpn, pt karya pilar nusantara, pt kpn, kpn sidoarjo, produsen hdpe, produsen xpe, produsen tpe, produsen mainan anak, kustom merk" />
<?= $this->endSection() ?>

<?= $this->section('style') ?>
<link rel="stylesheet" href="css/about_us_style.css">
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<!-- Hero -->
<section id="hero-section" class="relative h-[90vh] bg-white">
  <div class="relative h-full lg:h-full w-full object-cover">
    <img src="/images/hero background.webp" alt="kantor pt karya pilar nusantara" class="h-full w-full object-cover">
  </div>
  <div class="absolute top-3 sm:top-5 lg:top-7 xl:top-8 2xl:top-[4vh]  left-1/2 -translate-x-1/2 max-w-[1600px] z-8">
    <div class="flex justify-center xl:-translate-y-[20px] ">
      <img loading="lazy" class="h-[40vh] max-h-[160px] md:max-h-[180px] lg:max-h-[200px] xl:max-h-[220px] 2xl:max-h-[250px] w-auto flex justify-center" src="kpn-logo.png" alt="Logo berwarna PT. Karya Pilar Nusantara">
    </div>
  </div>
  <div class="absolute bottom-[20vh] sm:bottom-[180px] md:bottom-[20vh] lg:bottom-[20vh] xl:bottom-[23vh] left-1/2 -translate-x-1/2 w-[80vw] max-w-[1600px] z-20">
    <h1 class="max-w-[600px] md:max-w-[800px] mb-[60px] md:mb-[90px] text-white text-[32px] md:text-[36px] lg:text-[40px] font-humanist-bold leading-[100%] -tracking-[0.02em]" data-lang-group="about_us_hero" data-lang-key="title">Tentang Kami</h1>
    <p class="max-w-[800px] mb-[20px] text-white font-trebuchet tracking-[0.025em] leading-4 lg:leading-5 text-[16px] md:text-[18px]" data-lang-group="about_us_hero" data-lang-key="sub_title">Produsen Tangan Pertama Produk HDPE, TPE, dan XPE untuk Mainan Anak, Olahraga, serta Infrastruktur dengan Kualitas Premium dan Harga Terjangkau</p>
    <button id="aboutUsHeroButton" class="flex cursor-pointer bg-light-salmon font-trebuchet text-[18px] w-[230px] h-[43px] text-white font-bold rounded-full shadow-lg items-center justify-center hover:bg-dark-salmon hover:scale-105 transform duration-300 ease-in-out" data-lang-group="about_us_hero" data-lang-key="button">
      Selengkapnya
    </button>
  </div>
  <div class="hidden lg:block absolute bottom-0 h-[210px] w-full bg-gradient-to-t from-white to-transparent z-10"></div>
</section>

<!-- Tentang kami -->
<section id="aboutUsSection" class=" relative w-full mt-[120px] lg:mt-[180px] xl:mt-[300px] ">
  <h2 class="flex align-center justify-center text-iron-gray text-[28px] xl:text-[36px] font-trebuchet leading-[135%] -tracking-[0.03em] font-[500]" data-lang-group="about_us_detail" data-lang-key="title">Tentang Kami</h2>
  <div class="mt-[40px] sm:mt-[40px] lg:mt-[60px] xl:mt-[130px]  w-full flex justify-center ">
    <div class="w-full max-w-[1600px] flex justify-center items-center px-[30px] md:mx-[10%]">
      <div class="hidden lg:flex h-1 w-[100px] bg-soft-silver mr-10 rounded-full"></div>
      <div class="flex flex-col w-full">
        <p class="font-humanist-normal mt-10 text-[#313030] text-[16px] md:text-[18px] xl:text-[22px] text-center  tracking-[0.03em] xl:tracking-[0.035em] leading-7 animate-about-us" data-lang-group="about_us_detail" data-lang-key="description">PT Karya Pilar Nusantara adalah produsen tangan pertama yang menghadirkan produk berbahan HDPE, EVA, TPE, dan XPE. Kami bergerak di bidang mainan anak, olahraga, dan infrastruktur, menawarkan produk berkualitas tinggi dengan harga terjangkau. Sebagai produsen langsung, kami memastikan setiap produk tahan lama, aman, dan inovatif. Dengan teknologi modern dan standar premium, kami berkomitmen menghadirkan solusi terbaik bagi pelanggan. PT Karya Pilar Nusantara siap menjadi mitra terpercaya dalam menyediakan produk unggulan.</p>

        <p class="font-humanist-normal mt-10 text-[#313030] text-[16px] md:text-[18px] xl:text-[22px] text-center font-bold  tracking-[0.03em] xl:tracking-[0.035em] leading-7 animate-about-us" data-lang-group="about_us_detail" data-lang-key="slogan">Pilihan terbaik untuk produk berkualitas, harga bersaing, dan layanan profesional.</p>
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
      <h2 class="flex align-center justify-center text-iron-gray text-[22px] xl:text-[36px] font-trebuchet leading-[135%] -tracking-[0.03em] font-[500]" data-lang-group="about_us_detail" data-lang-key="vision_title">Visi</h2>
      <div class="mt-[40px] lg:mt-[60px] xl:mt-[80px] w-full flex justify-center h-full">
        <div class="w-full max-w-[1600px] flex justify-center items-center px-[30px] bg-gray-100 rounded-2xl animate-vision-mission-card">
          <p class="font-humanist-normal text-[#313030] text-[16px] md:text-[18px] xl:text-[22px] text-center  tracking-[0.03em] xl:tracking-[0.035em] leading-7" data-lang-group="about_us_detail" data-lang-key="vision_description">Menjadi produsen dan distributor terdepan di Indonesia dalam menyediakan produk berkualitas tinggi untuk mainan anak, olahraga, dan infrastruktur, dengan inovasi berkelanjutan serta komitmen terhadap keamanan, daya tahan, dan kepuasan pelanggan.</p>
        </div>
      </div>
    </div>
    <div>
      <h2 class="flex align-center justify-center text-iron-gray text-[22px] xl:text-[36px] font-trebuchet leading-[135%] -tracking-[0.03em] font-[500]" data-lang-group="about_us_detail" data-lang-key="mission_title">Misi</h2>
      <div class="mt-[40px] lg:mt-[60px] xl:mt-[80px] w-full flex justify-center h-full">
        <div class="w-full max-w-[1600px] flex justify-center items-center px-[30px] bg-gray-100 rounded-2xl animate-vision-mission-card">
          <p class="font-humanist-normal text-[#313030] text-[16px] md:text-[18px] xl:text-[22px] text-center  tracking-[0.03em] xl:tracking-[0.035em] leading-7" data-lang-group="about_us_detail" data-lang-key="mission_description">Kami berkomitmen menghadirkan produk berkualitas tinggi yang aman dan ramah lingkungan, menyediakan layanan kustomisasi merek, menawarkan harga kompetitif, memberikan pelayanan profesional, memastikan distribusi luas, serta mengadopsi teknologi modern untuk inovasi dan keberlanjutan.</p>
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
<section id="whyUsSection" class=" relative w-full mt-[30px] sm:mt-[40px] lg:mt-[60px] xl:mt-[100px]">
  <h2 class="flex align-center justify-center h2-title" data-lang-group="homepage_why_us" data-lang-key="title">Mengapa Memilih Kami</h2>
  <div class="w-full  flex justify-center pt-[130px] lg:pt-[210px] xl:pt-[230px]">
    <div class="relative  w-full  h-full">
      <div class="xl:hidden relative w-full px-[10%]  overflow-hidden  whyUsSwiper">
        <div id="normalWhyUsCard" class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="h-auto w-full content-center animate-why-us-card">
              <div class="flex justify-center">
                <img loading="lazy" class="rounded-full w-[130px] h-[130px] sm:w-[100px] sm:h-[100px] xl:w-[120px] xl:h-[120px]" src="custom-logo.gif" alt="animasi review bagus">
              </div>
              <h3 class="why-us-title" data-lang-group="homepage_why_us" data-lang-key="sub_title_1">Custom Merek</h3>
              <p class=" why-us-description" data-lang-group="homepage_why_us" data-lang-key="description_1">Kami menyediakan layanan custom merek, memungkinkan produk disesuaikan dengan logo dan identitas bisnis Anda.</p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="h-auto w-full content-center animate-why-us-card">
              <div class="flex justify-center ">
                <img loading="lazy" class="rounded-full w-[130px] h-[130px] sm:w-[100px] sm:h-[100px] xl:w-[120px] xl:h-[120px]" src="best-price.gif" alt="animasi harga terbaik">
              </div>
              <h3 class="why-us-title" data-lang-group="homepage_why_us" data-lang-key="sub_title_2">Harga Kompetitif</h3>
              <p class="why-us-description" data-lang-group="homepage_why_us" data-lang-key="description_2">Kami menawarkan produk terbaik dengan kualitas tinggi, harga bersaing, dan layanan pengiriman yang tepat waktu.</p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="h-auto w-full content-center animate-why-us-card">
              <div class="flex justify-center ">
                <img loading="lazy" class="rounded-full w-[130px] h-[130px] sm:w-[100px] sm:h-[100px] xl:w-[120px] xl:h-[120px]" src="star.gif" alt="animasi layanan terbaik">
              </div>
              <h3 class="why-us-title" data-lang-group="homepage_why_us" data-lang-key="sub_title_3">Best Service</h3>
              <p class="relative h-auto why-us-description" data-lang-group="homepage_why_us" data-lang-key="description_3">Dengan profesionalisme, kami senantiasa menghadirkan layanan berkualitas terbaik karena kepuasan pelanggan menjadi prioritas utama kami.</p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="h-auto w-full content-center animate-why-us-card">
              <div class="flex justify-center ">
                <img loading="lazy" class="rounded-full w-[130px] h-[130px] sm:w-[100px] sm:h-[100px] xl:w-[120px] xl:h-[120px]" src="emerging-industries.gif" alt="animasi jangkauan luas">
              </div>
              <h3 class="why-us-title" data-lang-group="homepage_why_us" data-lang-key="sub_title_4">Jangkauan Luas</h3>
              <p class="why-us-description" data-lang-group="homepage_why_us" data-lang-key="description_4">Produk telah terdistribusi ke berbagai daerah, termasuk wilayah terpencil dan kota-kota besar di seluruh Indonesia.</p>
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
              <img loading="lazy" class="rounded-full w-[130px] h-[130px] sm:w-[100px] sm:h-[100px] xl:w-[120px] xl:h-[120px]" src="custom-logo.gif" alt="animasi review bagus">
            </div>
            <h3 class="why-us-title" data-lang-group="homepage_why_us" data-lang-key="sub_title_1">Kustom Merek</h3>
            <p class=" why-us-description" data-lang-group="homepage_why_us" data-lang-key="description_1">Kami menyediakan layanan custom merek, memungkinkan produk disesuaikan dengan logo dan identitas bisnis Anda.</p>
          </div>
          <div class="h-auto w-full content-start animate-why-us-card">
            <div class="flex justify-center ">
              <img loading="lazy" class="rounded-full w-[130px] h-[130px] sm:w-[100px] sm:h-[100px] xl:w-[120px] xl:h-[120px]" src="best-price.gif" alt="animasi harga terbaik">
            </div>
            <h3 class="why-us-title" data-lang-group="homepage_why_us" data-lang-key="sub_title_2">Harga Kompetitif</h3>
            <p class="why-us-description" data-lang-group="homepage_why_us" data-lang-key="description_2">Kami menawarkan produk terbaik dengan kualitas tinggi, harga bersaing, dan layanan pengiriman yang tepat waktu.</p>
          </div>
          <div class="h-auto w-full content-start animate-why-us-card">
            <div class="flex justify-center ">
              <img loading="lazy" class="rounded-full w-[130px] h-[130px] sm:w-[100px] sm:h-[100px] xl:w-[120px] xl:h-[120px]" src="star.gif" alt="animasi layanan terbaik">
            </div>
            <h3 class="why-us-title" data-lang-group="homepage_why_us" data-lang-key="sub_title_3">Pelayanan Terbaik</h3>
            <p class="relative h-auto why-us-description" data-lang-group="homepage_why_us" data-lang-key="description_3">Dengan profesionalisme, kami senantiasa menghadirkan layanan berkualitas terbaik karena kepuasan pelanggan menjadi prioritas utama kami.</p>
          </div>
          <div class="h-auto w-full content-start animate-why-us-card">
            <div class="flex justify-center ">
              <img loading="lazy" class="rounded-full w-[130px] h-[130px] sm:w-[100px] sm:h-[100px] xl:w-[120px] xl:h-[120px]" src="emerging-industries.gif" alt="animasi jangkauan luas">
            </div>
            <h3 class="why-us-title" data-lang-group="homepage_why_us" data-lang-key="sub_title_4">Jangkauan Luas</h3>
            <p class="why-us-description" data-lang-group="homepage_why_us" data-lang-key="description_4">Produk telah terdistribusi ke berbagai daerah, termasuk wilayah terpencil dan kota-kota besar di seluruh Indonesia.</p>
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
  <p class="mx-[25px] font-humanist-normal text-[#313030] text-[18px] xl:text-[22px] text-center" data-lang-group="homepage_bottom_cta" data-lang-key="cta">Hubungi kami dan dapatkan penawaran khusus untuk kebutuhan Anda!</p>

  <div class="flex align-center justify-center mt-[43px]">
    <a href="http://wa.me/6282160050005" target="_blank" class="flex bg-light-salmon w-[268px] h-[43px] text-white font-trebuchet text-[18px] rounded-full shadow-lg items-center justify-center hover:bg-dark-salmon hover:scale-105 transform duration-300 ease-in-out" data-lang-group="homepage_bottom_cta" data-lang-key="button">
      Hubungi Kami
    </a>
  </div>
</section>

<?= $this->endSection() ?>

<?= $this->section('script') ?>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script type="text/javascript" src="js/homepage/why_us.js"></script>
<script type="text/javascript" src="js/about us/about_us.js"></script>
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
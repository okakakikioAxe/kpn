<?= $this->extend('./template') ?>

<?= $this->section('head') ?>
<title>PT KPN - Produsen produk HDPE, EVA, XPE, dan TPE</title>
<meta name="description" content="PT Karya Pilar Nusantara adalah produsen tangan pertama produk HDPE, EVA, TPE, dan XPE untuk mainan anak, olahraga, dan infrastruktur. Menawarkan produk berkualitas tinggi, aman, inovatif, dan terjangkau dengan teknologi modern serta standar premium." />
<meta name="keywords" content="toko peralatan terlengkap, toko grosir, produsen HDPE, kubus apung HDPE, EVA mat, matras TPE, mainan anak HDPE, playmat anak, karya pilar, kpn " />
<?= $this->endSection() ?>

<?= $this->section('style') ?>
<link rel="stylesheet" href="css/homepage_style.css">
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<!-- Hero -->
<section id="hero-section" class="relative h-[90vh] bg-white">
  <div class="relative h-full lg:h-full w-full object-cover">
    <img src="/images/hero-background-3.webp" alt="baner pt karya pilar nusantara" class="h-full w-full object-cover ">
    <div class="h-full w-full top-0 left-0 absolute z-5 bg-blue-800/60 bg-blue "></div>
  </div>
  <div class="absolute top-3 sm:top-5 lg:top-7 xl:top-8 2xl:top-[4vh]  left-1/2 -translate-x-1/2 max-w-[1600px] z-8">
    <div class="flex justify-center xl:-translate-y-[20px] ">
      <img loading="lazy" class="h-[40vh] max-h-[160px] md:max-h-[180px] lg:max-h-[200px] xl:max-h-[220px] 2xl:max-h-[250px] w-auto flex justify-center" src="kpn-logo.png" alt="Logo berwarna PT. Karya Pilar Nusantara">
    </div>
  </div>
  <div class="absolute bottom-[20vh] sm:bottom-[32vh] md:bottom-[32vh] lg:bottom-[32vh] left-1/2 -translate-x-1/2 w-[80vw] max-w-[1600px] z-20">
    <h1 class="max-w-[600px] md:max-w-[800px] mb-[60px] md:mb-[40px] lg:mb-[55px] xl:mb-[60px] 2xl:mb-[90px] text-white text-[32px] md:text-[36px] lg:text-[40px] 2xl:text-[40px] font-humanist-bold leading-[100%] -tracking-[0.02em]" data-lang-group="homepage_hero" data-lang-key="title">Mitra Anda Dalam Solusi Mainan Anak, Olahraga dan Infrastruktur</h1>
    <p class="max-w-[600px] mb-[15px] text-white font-trebuchet tracking-[0.01em] leading-4 lg:leading-5 text-[16px] md:text-[18px] 2xl:text-[18px]" data-lang-group="homepage_hero" data-lang-key="sub_title">Dapatkan penawaran menarik untuk berbagai macam kebutuhan anda</p>
    <a href="http://wa.me/6282160050005" target="_blank" class="flex bg-light-salmon font-trebuchet text-[18px] w-[230px] h-[43px] text-white font-bold rounded-full shadow-lg transition items-center justify-center hover:bg-dark-salmon hover:scale-105 transform duration-300 ease-in-out " data-lang-group="homepage_hero" data-lang-key="button">
      Hubungi Kami
    </a>
  </div>
  <div class="absolute bottom-[20px] h-[100px] 2xl:h-[180px] w-full bg-gradient-to-t from-white to-transparent z-10"></div>
  <div class="absolute bottom-0 h-[20px] w-full bg-white z-10"></div>
</section>

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

<!-- Tentang kami -->
<section id="aboutUsSection" class=" relative w-full mt-[140px] lg:mt-[180px] xl:mt-[300px] ">
  <h2 class="flex align-center justify-center text-iron-gray text-[28px] xl:text-[36px] font-trebuchet leading-[135%] -tracking-[0.03em] font-[500]" data-lang-group="homepage_about_us" data-lang-key="title">Tentang Kami</h2>
  <div class="mt-[70px] sm:mt-[40px] lg:mt-[60px] xl:mt-[130px]  w-full flex justify-center ">
    <div class="w-full max-w-[1600px] flex justify-center items-center px-[30px] md:mx-[10%]">
      <div class="hidden lg:flex h-1 w-[200px] bg-soft-silver mr-10 rounded-full"></div>
      <p id="about-us" class="font-humanist-normal text-[#313030] text-[16px] md:text-[18px] xl:text-[22px] text-center  tracking-[0.03em] xl:tracking-[0.035em] leading-7 animate-about-us" data-lang-group="homepage_about_us" data-lang-key="description">PT Karya Pilar Nusantara adalah produsen tangan pertama untuk produk HDPE, EVA, TPE, dan XPE di bidang mainan anak, olahraga, dan infrastruktur. Kami menghadirkan produk berkualitas premium dengan harga terjangkau, mengutamakan daya tahan, keamanan, dan inovasi untuk memenuhi kebutuhan pelanggan dengan solusi terbaik.</p>
      <div class="hidden lg:flex h-1 w-[200px] bg-soft-silver ml-10 rounded-full"></div>
    </div>
  </div>
</section>

<!-- Horizontal Divider - Tentang kami -->
<div class="flex justify-center mt-[100px] sm:mt-[140px] md:mt-[200px] lg:mt-[200px] xl:mt-[300px]">
  <div class="border-[1.5px] border-[#F0F0F0] w-full max-w-[1200px] mx-[76px] sm:mx-[20%]"></div>
</div>

<!-- Produk unggulan kami -->
<section id="topProductSection" class=" relative w-full mt-[125px] xl:mt-[190px]">
  <h2 class="flex align-center justify-center h2-title" data-lang-group="homepage_top_product" data-lang-key="title">Berbagai produk unggulan kami</h2>
  <div class="flex w-full align-center justify-center sm:px-[25px] lg:px-[5%] pt-[121px] xl:pt-[190px]">
    <div class="w-full grid grid-cols-1 sm:grid-cols-2 2xl:grid-cols-4 gap-[126px] sm:gap-[25px] md:gap-8 lg:gap-15 xl:gap-30 2xl:gap-8 max-w-[1600px]">
      <!-- Top product 1   -->
      <?php include APPPATH . 'Views/components/cards/products/hdpe_product_card.php'; ?>

      <!-- Top product 2   -->
      <?php include APPPATH . 'Views/components/cards/products/kid_toy_product_card.php'; ?>

      <!-- Top product 3   -->
      <?php include APPPATH . 'Views/components/cards/products/eva_product_card.php'; ?>

      <!-- Top product 4   -->
      <?php include APPPATH . 'Views/components/cards/products/xpe_product_card.php'; ?>

    </div>
  </div>
  <p class="mx-[25px] font-humanist-normal text-[#313030] text-[18px] xl:text-[22px] text-center mt-[240px] sm:mt-[320px] xl:mt-[300px]" data-lang-group="homepage_top_product" data-lang-key="cta">Belum menemukan produk yang anda cari? Telusuri semua produk yang ditawarkan</p>

  <div class="flex align-center justify-center mt-[43px]">
    <a href="#" class="flex bg-light-salmon font-trebuchet w-[268px] h-[43px] text-white rounded-full shadow-lg hover:bg-dark-salmon hover:scale-105 transform duration-300 ease-in-out items-center justify-center" data-lang-group="homepage_top_product" data-lang-key="button">
      Lihat Semua Produk
    </a>
  </div>


</section>

<!-- Horizontal Divider - Produk unggulan kami -->
<div class="flex justify-center mt-[180px] xl:mt-[200px]">
  <div class="border-[1.5px] border-[#F0F0F0] w-full max-w-[1200px] mx-[76px] sm:mx-[20%]"></div>
</div>

<!-- Proses Produksi -->
<section id="productionGalerySection" class=" relative w-full mt-[130px] xl:mt-[200px]">
  <h2 class="flex align-center justify-center h2-title" data-lang-group="homepage_production_process" data-lang-key="title">Intip Proses Produksinya</h2>
  <div class="xl:hidden relative w-full px-[25px] pt-[120px] max-w-[1600px] overflow-hidden h-full productionGalerySwiper">
    <div id="normalProductionCard" class="swiper-wrapper">
      <div class="w-full swiper-slide">
        <div class="w-full animate-production-galery-card">
          <div class="flex justify-center w-full ">
            <div class="max-h-[366px] aspect-4/3 rounded-[40px] overflow-hidden">
              <img loading="lazy" class="object-cover" src="/images/manufacture/thumbnail/hdpe-product.webp" alt="proses pembuatan tiang kubus apung">
            </div>
          </div>
          <div class="h-auto mt-[41px]">
            <h3 class="production-title" data-lang-group="homepage_production_process" data-lang-key="sub_title_1">Produksi Tiang Kubus Apung</h3>
            <p class="production-description" data-lang-group="homepage_production_process" data-lang-key="description_1">
              Proses pencetakan tiang kubus apung dari bahan HDPE. Mesin berteknologi canggih ini dirancang untuk menghasilkan bentuk yang presisi dan konsisten, mencerminkan standar tinggi dalam setiap proses manufaktur.
            </p>
          </div>
        </div>
      </div>
      <div class="w-full swiper-slide">
        <div class="w-full animate-production-galery-card">
          <div class="flex justify-center w-full ">
            <div class="max-h-[366px] aspect-4/3 rounded-[40px] overflow-hidden">
              <img loading="lazy" class="object-cover" src="/images/manufacture/thumbnail/kid-toy-product.webp" alt="contoh gambar">
            </div>
          </div>
          <div class="h-auto mt-[41px]">
            <h3 class="production-title" data-lang-group="homepage_production_process" data-lang-key="sub_title_2">Pencetakan Mainan Anak</h3>
            <p class="production-description" data-lang-group="homepage_production_process" data-lang-key="description_2">
              Di dalam fasilitas produksi modern, mesin cetak presisi tinggi bekerja dengan akurat untuk menciptakan mainan anak berkualitas. Diawasi oleh operator berpengalaman dengan teliti, memastikan setiap detail produk terbentuk sempurna.
            </p>
          </div>
        </div>
      </div>
      <div class="w-full swiper-slide">
        <div class="w-full animate-production-galery-card">
          <div class="flex justify-center w-full ">
            <div class="max-h-[366px] aspect-4/3 rounded-[40px] overflow-hidden">
              <img loading="lazy" class="object-cover" src="/images/manufacture/thumbnail/eva-product.webp" alt="Proses pembuatan eva mat">
            </div>
          </div>
          <div class="h-auto mt-[41px]">
            <h3 class="production-title" data-lang-group="homepage_production_process" data-lang-key="sub_title_3">Finishing Eva Mat</h3>
            <p class="production-description" data-lang-group="homepage_production_process" data-lang-key="description_3">
              Setiap langkah produksi ditangani oleh tenaga ahli yang berkomitmen menghadirkan kualitas terbaik, didukung oleh teknologi modern untuk memastikan setiap produk memenuhi standar tertinggi.
            </p>
          </div>
        </div>
      </div>
      <div class="w-full swiper-slide">
        <div class="w-full animate-production-galery-card">
          <div class="flex justify-center w-full ">
            <div class="max-h-[366px] aspect-4/3 rounded-[40px] overflow-hidden">
              <img loading="lazy" class="object-cover" src="/images/manufacture/thumbnail/xpe-product.webp" alt="Proses pembuatan playmat">
            </div>
          </div>
          <div class="h-auto mt-[41px]">
            <h3 class="production-title" data-lang-group="homepage_production_process" data-lang-key="sub_title_4">Produksi Playmat Otomatis</h3>
            <p class="production-description" data-lang-group="homepage_production_process" data-lang-key="description_4">
              Proses produksi kami menggunakan mesin otomatis berteknologi tinggi, memastikan efisiensi dan presisi di setiap tahap. Dengan sistem otomatisasi canggih, produksi dapat berjalan tanpa hambatan, memungkinkan kami memenuhi pesanan dalam jumlah berapa pun dengan kualitas yang tetap terjaga.
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="xl:hidden pt-[70px]">
      <div class="flex justify-center items-center production-galery-swiper-pagination">

      </div>
    </div>

    <div class="xl:hidden bg-red-300">
      <button onclick="prevProductionGalerySlides()" type="button" class="circle-button xl:hidden absolute z-5 left-1 top-[40%] sm:top-[43%] md:top-[40%] -translate-y-1/2 bg-white h-[37px] w-[37px] rounded-full flex justify-center items-center pr-[4px] shadow-[0_35px_35px_rgba(0,0,0,0.25)]"><img loading="lazy" class="h-[28px] w-[28px]" src="arrow-left.svg" alt="panah kiri"></button>
      <button onclick="nextProductionGalerySlides()" type="button" class="circle-button xl:hidden absolute z-5 right-1 top-[40%] sm:top-[43%] md:top-[40%] -translate-y-1/2 bg-white h-[37px] w-[37px] rounded-full flex justify-center items-center pl-[2px]"><img loading="lazy" class="h-[28px] w-[28px]" src="arrow-right.svg" alt="panah kanan"></button>
    </div>
  </div>
  <div class="hidden xl:flex justify-center relative w-full px-[10%]">
    <div class="pt-[200px] w-full  max-w-[1600px] overflow-visible h-full">
      <div id="xlProductionCard" class="grid grid-cols-4 gap-15">
        <div class="w-full h-full animate-production-galery-card">
          <div class="flex justify-center w-full ">
            <div class="max-h-[366px] aspect-4/3 rounded-[40px] overflow-hidden">
              <img loading="lazy" class="object-cover" src="/images/manufacture/thumbnail/hdpe-product.webp" alt="Proses pembuatan tiang kubus apung">
            </div>
          </div>
          <div class="h-auto mt-[41px]">
            <h3 class="production-title" data-lang-group="homepage_production_process" data-lang-key="sub_title_1">Produksi Tiang Kubus Apung</h3>
            <p class="production-description" data-lang-group="homepage_production_process" data-lang-key="description_1">
              Proses pencetakan tiang kubus apung dari bahan HDPE. Mesin berteknologi canggih ini dirancang untuk menghasilkan bentuk yang presisi dan konsisten, mencerminkan standar tinggi dalam setiap proses manufaktur.
            </p>
          </div>
        </div>
        <div class="w-full h-full animate-production-galery-card">
          <div class="flex justify-center w-full ">
            <div class="max-h-[366px] aspect-4/3 rounded-[40px] overflow-hidden">
              <img loading="lazy" class="object-cover" src="/images/manufacture/thumbnail/kid-toy-product.webp" alt="proses pembuatan mainan anak">
            </div>
          </div>
          <div class="h-auto mt-[41px]">
            <h3 class="production-title" data-lang-group="homepage_production_process" data-lang-key="sub_title_2">Pencetakan Mainan Anak</h3>
            <p class="production-description" data-lang-group="homepage_production_process" data-lang-key="description_2">
              Di dalam fasilitas produksi modern, mesin cetak presisi tinggi bekerja dengan akurat untuk menciptakan mainan anak berkualitas. Diawasi oleh operator berpengalaman dengan teliti, memastikan setiap detail produk terbentuk sempurna.
            </p>
          </div>
        </div>
        <div class="w-full animate-production-galery-card">
          <div class="flex justify-center w-full ">
            <div class="max-h-[366px] aspect-4/3 rounded-[40px] overflow-hidden">
              <img loading="lazy" class="object-cover" src="/images/manufacture/thumbnail/eva-product.webp" alt="contoh gambar">
            </div>
          </div>
          <div class="h-auto mt-[41px]">
            <h3 class="production-title" data-lang-group="homepage_production_process" data-lang-key="sub_title_3">Finishing Eva Mat</h3>
            <p class="production-description" data-lang-group="homepage_production_process" data-lang-key="description_3">
              Setiap langkah produksi ditangani oleh tenaga ahli yang berkomitmen menghadirkan kualitas terbaik, didukung oleh teknologi modern untuk memastikan setiap produk memenuhi standar tertinggi.
            </p>
          </div>
        </div>
        <div class="w-full animate-production-galery-card">
          <div class="flex justify-center w-full ">
            <div class="max-h-[366px] aspect-4/3 rounded-[40px] overflow-hidden">
              <img loading="lazy" class="object-cover" src="/images/manufacture/thumbnail/xpe-product.webp" alt="contoh gambar">
            </div>
          </div>
          <div class="h-auto mt-[41px]">
            <h3 class="production-title" data-lang-group="homepage_production_process" data-lang-key="sub_title_4">Produksi Playmat Otomatis</h3>
            <p class="production-description" data-lang-group="homepage_production_process" data-lang-key="description_4">
              Produk kami diproduksi menggunakan mesin otomatis berteknologi tinggi. Dengan sistem otomatisasi canggih, memungkinkan kami memenuhi pesanan dalam jumlah berapa pun dengan kualitas yang tetap terjaga.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="flex justify-center mt-[170px] xl:mt-[300px]">
  <div class="border-[1.5px] border-[#F0F0F0] w-full max-w-[1200px] mx-[76px] sm:mx-[20%]"></div>
</div>

<!-- Bottom CTA -->
<section id="bottomCtaSection" class="relative w-full pt-[180px] xl:pt-[330px] pb-[250px] xl:pb-[450px]">
  <p class="mx-[25px] font-humanist-normal text-[#313030] text-[18px] xl:text-[22px] text-center" data-lang-group="homepage_bottom_cta" data-lang-key="cta">Hubungi kami dan dapatkan penawaran khusus untuk kebutuhan Anda!</p>

  <div class="flex align-center justify-center mt-[43px]">
    <a href="/contact-us" class="flex bg-light-salmon w-[268px] h-[43px] text-white font-trebuchet text-[18px] rounded-full shadow-lg hover:bg-dark-salmon hover:scale-105 transform duration-300 ease-in-out  items-center justify-center" data-lang-group="homepage_bottom_cta" data-lang-key="button">
      Hubungi Kami
    </a>
  </div>
</section>

<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Corporation",
    "name": "PT Karya Pilar Nusantara",
    "alternateName": "KPN",
    "description": "Produsen tangan pertama produk HDPE, EVA, TPE, dan XPE untuk mainan anak, olahraga, dan infrastruktur.",
    "url": "https://www.karyapilarnusantara.com",
    "logo": "https://www.karyapilarnusantara.com/kpn-logo.png",
    "contactPoint": {
      "@type": "ContactPoint",
      "telephone": "+62 821-6005-0005",
      "contactType": "customer service",
      "contactOption": "TollFree",
      "areaServed": "ID",
      "availableLanguage": "Indonesian"
    }
  }
</script>
<script type="text/javascript" src="js/homepage/why_us.js"></script>
<script type="text/javascript" src="js/homepage/about_us.js"></script>
<script type="text/javascript" src="js/homepage/top product/top_product.js"></script>
<script type="text/javascript" src="js/homepage/production_galery.js"></script>
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

  // ================= About Us Swiper =================
  var aboutUsSwiper = new Swiper(".aboutUsSwiper", {
    speed: 700,
    slidesPerView: 1,
    spaceBetween: 40,
    loop: true,
    enabled: true,
    pagination: {
      el: ".about-us-swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      // when window width is >= 320px
      768: {
        slidesPerView: 2,
        spaceBetween: 40,
        enabled: true,
      },
      1024: {
        slidesPerView: 2,
        spaceBetween: 130,
        enabled: true,
      },
    },
  });

  function nextAboutUsSlides() {
    aboutUsSwiper.slideNext();
  }

  function prevAboutUsSlides() {
    aboutUsSwiper.slidePrev();
  }
  // ================= End of About Us Swiper =================

  // ================= Product Detail =================
  var floatingCubeDetailSwiper = new Swiper(".floatingCubeDetailSwiper", {
    speed: 700,
    slidesPerView: 1,
    spaceBetween: 0,
    loop: true,
  });

  function nextFloatingCubeSlides() {
    floatingCubeDetailSwiper.slideNext();
  }

  function prevFloatingCubeSlides() {
    floatingCubeDetailSwiper.slidePrev();
  }

  var rockingHorseDetailSwiper = new Swiper(".rockingHorseDetailSwiper", {
    speed: 700,
    slidesPerView: 1,
    spaceBetween: 0,
    loop: true,
  });

  function nextRockingHorseSlides() {
    rockingHorseDetailSwiper.slideNext();
  }

  function prevRockingHorseSlides() {
    rockingHorseDetailSwiper.slidePrev();
  }
  // ================= End of Product Detail ====================

  // ================= Production Galery Swiper =================
  var productionGalerySwiper = new Swiper(".productionGalerySwiper", {
    speed: 700,
    slidesPerView: 1,
    spaceBetween: 40,
    loop: true,
    pagination: {
      el: ".production-galery-swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      768: {
        slidesPerView: 2,
        spaceBetween: 30,
      },
      1280: {
        slidesPerView: 4,
        enabled: false,
      },
    },
  });

  function nextProductionGalerySlides() {
    productionGalerySwiper.slideNext();
  }

  function prevProductionGalerySlides() {
    productionGalerySwiper.slidePrev();
  }
  // ================= End of Production Galery Swiper =================
</script>
<?= $this->endSection() ?>
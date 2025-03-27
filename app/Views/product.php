<?= $this->extend('./template') ?>

<?= $this->section('preload') ?>
<link rel="preload" as="image" href="https://cdn.jsdelivr.net/gh/okakakikioAxe/kpn-storage/hero-background-2.webp" type="image/webp">
<link rel="preload" as="image" href="https://cdn.jsdelivr.net/gh/okakakikioAxe/kpn-storage/kpn-logo.webp" type="image/webp">
<?= $this->endSection() ?>

<?= $this->section('head') ?>
<title>PT KPN - Produk Kami</title>
<meta name="description" content="Temukan berbagai produk KPN berkualitas, termasuk produk HDPE, EVA, TPE, dan XPE. Lihat katalog KPN untuk produk Karya Pilar Nusantara yang inovatif, aman, dan terjangkau. Jelajahi katalog Karya Pilar Nusantara untuk solusi terbaik." />
<meta name="keywords" content="produk kpn, produk HDPE, produk EVA, produk TPE, produk XPE, katalog kpn, produk karya pilar nusantara, katalog karya pilar nusantara " />
<?= $this->endSection() ?>

<?= $this->section('style') ?>
<link rel="stylesheet" href="css/homepage_style.css">
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<!-- Hero -->
<section id="heroSection" class="relative h-screen w-full bg-white">
  <!-- Background Image -->
  <div class="absolute inset-0">
    <img src="https://cdn.jsdelivr.net/gh/okakakikioAxe/kpn-storage/hero-background-2.webp"
      alt="kantor pt karya pilar nusantara"
      class="h-full w-full object-cover">
  </div>
  <div class="absolute top-3 sm:top-5 lg:top-7 xl:top-8 2xl:top-[4vh]  left-1/2 -translate-x-1/2 max-w-[1600px] z-8">
    <div class="flex justify-center xl:-translate-y-[20px] ">
      <img loading="lazy" class="h-[40vh] max-h-[180px] md:max-h-[220px] xl:max-h-[220px] 2xl:max-h-[250px] w-auto flex justify-center" src="https://cdn.jsdelivr.net/gh/okakakikioAxe/kpn-storage/kpn-logo.webp" alt="Logo berwarna PT. Karya Pilar Nusantara">
    </div>
  </div>
  <!-- Centered Button -->
  <div class="absolute inset-0 flex flex-col items-center justify-center px-[40px] md:px-[10%]">
    <h1 class=" text-white text-center text-[32px] md:text-[36px] lg:text-[40px] font-humanist-bold leading-[100%] -tracking-[0.02em]" data-lang-group="product_hero" data-lang-key="title">PRODUK KAMI</h1>

    <p class="mt-[125px] text-white text-center font-humanist-normal leading-4 text-[18px] md:text-[20px] xl:text-[22px]" data-lang-group="product_hero" data-lang-key="sub_title">Jelajahi produk kami dengan pengalaman interaktif dan menyenangkan</p>
    <div class="grid grid-4 gap-8 xl:gap-15 grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 max-w-[1600px] mt-[34px]">

      <a href="https://online.fliphtml5.com/kxrpo/xtvk/" target="_blank" download class="flex bg-light-salmon font-trebuchet text-[18px] w-[230px] h-[43px] text-white font-bold rounded-full shadow-lg items-center justify-center hover:bg-dark-salmon hover:scale-105 transform duration-300 ease-in-out" data-lang-group="homepage_top_product" data-lang-key="product_title_1">
        PRODUK HDPE
      </a>
      <a href="https://online.fliphtml5.com/kxrpo/izka/" target="_blank" download class="flex bg-light-salmon font-trebuchet text-[18px] w-[230px] h-[43px] text-white font-bold rounded-full shadow-lg items-center justify-center hover:bg-dark-salmon hover:scale-105 transform duration-300 ease-in-out" data-lang-group="homepage_top_product" data-lang-key="product_title_2">
        PRODUK MAINAN
      </a>
      <a href="https://online.fliphtml5.com/kxrpo/ewzp/" target="_blank" download class="flex bg-light-salmon font-trebuchet text-[18px] w-[230px] h-[43px] text-white font-bold rounded-full shadow-lg items-center justify-center hover:bg-dark-salmon hover:scale-105 transform duration-300 ease-in-out" data-lang-group="homepage_top_product" data-lang-key="product_title_3">
        PRODUK EVA
      </a>
      <a href="https://online.fliphtml5.com/kxrpo/kisc/" target="_blank" download class="flex bg-light-salmon font-trebuchet text-[18px] w-[230px] h-[43px] text-white font-bold rounded-full shadow-lg items-center justify-center hover:bg-dark-salmon hover:scale-105 transform duration-300 ease-in-out" data-lang-group="homepage_top_product" data-lang-key="product_title_4">
        PRODUK XPE
      </a>
    </div>
  </div>
</section>
<?= $this->endSection() ?>
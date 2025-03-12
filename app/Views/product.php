<?= $this->extend('./template') ?>

<?= $this->section('style') ?>
<link rel="stylesheet" href="css/homepage_style.css">
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<!-- Hero -->
<section id="heroSection" class="relative h-screen w-full bg-white">
  <!-- Background Image -->
  <div class="absolute inset-0">
    <img src="/images/hero background 2.webp"
      alt="kantor pt karya pilar nusantara"
      class="h-full w-full object-cover">
  </div>
  <div class="absolute top-3 sm:top-5 xl:top-8 left-1/2 -translate-x-1/2 max-w-[1600px]">
    <div class="flex justify-center">
      <img loading="lazy" class="h-[15vh] max-h-[100px] sm:max-h-[150px] md:max-h-[150px] xl:max-h-[200px] w-auto flex justify-center" src="colored logo.png" alt="Logo berwarna PT. Karya Pilar Nusantara">
    </div>
  </div>
  <!-- Centered Button -->
  <div class="absolute inset-0 flex flex-col items-center justify-center px-[40px] md:px-[10%]">
    <h1 class=" text-white text-center text-[32px] md:text-[36px] lg:text-[40px] font-humanist-bold leading-[100%] -tracking-[0.02em]">PRODUK KAMI</h1>

    <p class="mt-[100px] text-white text-center font-humanist-normal leading-4 text-[18px] md:text-[20px] xl:text-[22px]">Jelajahi produk kami dengan pengalaman interaktif dan menyenangkan</p>
    <a href="#" class="flex mt-[30px] md:mt-[34px] xl:mt-[40px] bg-[#00AD5E] font-trebuchet text-[18px] w-[230px] h-[43px] text-white font-bold rounded-full shadow-lg transition items-center justify-center">
      Jelajahi Produk
    </a>
  </div>
</section>
<?= $this->endSection() ?>
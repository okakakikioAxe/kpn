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
<section id="galerySection" class="relative pb-[200px] min-h-[100vh] w-full bg-white">
  <!-- Background Image -->
  <div class=" w-full px-[40px] md:px-[10%] bg-[#F2F8FF] flex justify-center">
    <div class="w-full max-w-[1600px] pt-[62px] pb-[40px]">
      <h1 class=" text-[#001F47] text-start text-[32px] md:text-[34px] font-humanist-bold leading-[100%] -tracking-[0.02em]" data-lang-group="gallery" data-lang-key="title">GALERI</h1>
      <p class="mt-[12px] text-[#001F47] text-start font-humanist-normal leading-4 text-[14px] md:text-[16px] xl:text-[18px]" data-lang-group="gallery" data-lang-key="sub_title">Temukan inspirasi lewat kegiatan yang kami bagikan.</p>
    </div>
  </div>
  <div class=" pt-[90px] sm:pt-[150px] px-[40px] md:px-[10%] flex justify-center">
    <div class="w-full max-w-[1600px] h-full ">
      <p class="text-[#001F47] text-center font-humanist-normal leading-4 text-[18px] md:text-[20px] xl:text-[22px]" data-lang-group="product_hero" data-lang-key="sub_title">Jelajahi produk kami dengan pengalaman interaktif dan menyenangkan</p>
      <div class="flex w-full justify-center">
        <div class="grid gap-[15px] xl:gap-5 grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 max-w-[1200px] mt-[34px] xl:mt-[45px] items-center justify-center">
          <div class="flex justify-center">
            <a href="https://online.fliphtml5.com/kxrpo/xtvk/" target="_blank" download class="flex bg-light-salmon font-trebuchet text-[18px] w-[230px] h-[43px] text-white font-bold rounded-full shadow-lg items-center justify-center hover:bg-dark-salmon hover:scale-105 transform duration-300 ease-in-out" data-lang-group="homepage_top_product" data-lang-key="product_title_1">
              PRODUK HDPE
            </a>
          </div>
          <div class="flex justify-center">
            <a href="https://online.fliphtml5.com/kxrpo/izka/" target="_blank" download class="flex bg-light-salmon font-trebuchet text-[18px] w-[230px] h-[43px] text-white font-bold rounded-full shadow-lg items-center justify-center hover:bg-dark-salmon hover:scale-105 transform duration-300 ease-in-out" data-lang-group="homepage_top_product" data-lang-key="product_title_2">
              PRODUK MAINAN
            </a>
          </div>
          <div class="flex justify-center">
            <a href="https://online.fliphtml5.com/kxrpo/ewzp/" target="_blank" download class="flex bg-light-salmon font-trebuchet text-[18px] w-[230px] h-[43px] text-white font-bold rounded-full shadow-lg items-center justify-center hover:bg-dark-salmon hover:scale-105 transform duration-300 ease-in-out" data-lang-group="homepage_top_product" data-lang-key="product_title_3">
              PRODUK EVA
            </a>
          </div>
          <div class="flex justify-center">
            <a href="https://online.fliphtml5.com/kxrpo/kisc/" target="_blank" download class="flex bg-light-salmon font-trebuchet text-[18px] w-[230px] h-[43px] text-white font-bold rounded-full shadow-lg items-center justify-center hover:bg-dark-salmon hover:scale-105 transform duration-300 ease-in-out" data-lang-group="homepage_top_product" data-lang-key="product_title_4">
              PRODUK XPE
            </a>
          </div>
        </div>
      </div>
      <p class="text-[#001F47] pt-[45px] sm:pt-[60px] xl:pt-[75px] text-center font-humanist-normal leading-4 text-[18px] md:text-[20px] xl:text-[22px]">Download katalog lengkap</p>
      <div class="flex w-full justify-center">
        <a href="/Catalog-KPN-2025.zip" target="_blank" download class="flex mt-[35px] sm:mt-[50px] xl:mt-[65px] bg-light-salmon font-trebuchet text-[18px] w-[230px] h-[43px] text-white font-bold rounded-full shadow-lg items-center justify-center hover:bg-dark-salmon hover:scale-105 transform duration-300 ease-in-out">
          DOWNLOAD KATALOG
        </a>
      </div>
      <!-- Horizontal Divider - Produk unggulan kami -->
      <div class="flex justify-center mt-[110px] sm:mt-[160px] xl:mt-[250px]">
        <div class="border-[1.5px] border-[#F0F0F0] w-full max-w-[1200px] mx-[76px] sm:mx-[20%]"></div>
      </div>
      <h2 class="flex align-center justify-center mt-[95px] sm:mt-[115px] md:mt-[150px] h2-title" data-lang-group="homepage_production_process" data-lang-key="title">Proses Produksi</h2>
      <div class="grid gap-[10px] md:gap-[15px] sm:gap-3 grid-cols-2 sm:grid-cols-4 max-w-[600px] mt-[80px] md:mt-[90px] xl:mt-[160px]">
        <button class="flex bg-[#B22222] border-[2px] border-[#B22222] font-trebuchet text-[18px] h-[43px] text-white font-bold rounded-full shadow-lg items-center justify-center hover:bg-light-salmon hover:scale-105 hover:text-white transform duration-300 ease-in-out cursor-pointer">
          HDPE
        </button>
        <button class="flex bg-white border-[2px] border-[#B22222] font-trebuchet text-[18px] h-[43px] text-[#B22222] font-bold rounded-full shadow-lg items-center justify-center hover:bg-light-salmon hover:scale-105 hover:text-white transform duration-300 ease-in-out cursor-pointer">
          MAINAN
        </button>
        <button class="flex bg-white border-[2px] border-[#B22222] font-trebuchet text-[18px] h-[43px] text-[#B22222] font-bold rounded-full shadow-lg items-center justify-center hover:bg-light-salmon hover:scale-105 hover:text-white transform duration-300 ease-in-out cursor-pointer">
          XPE
        </button>
        <button class="flex bg-white border-[2px] border-[#B22222] font-trebuchet text-[18px] h-[43px] text-[#B22222] font-bold rounded-full shadow-lg items-center justify-center hover:bg-light-salmon hover:scale-105 hover:text-white transform duration-300 ease-in-out cursor-pointer">
          EVA
        </button>
      </div>
      <!-- Horizontal Divider - Produk unggulan kami -->
      <div class="border-[1px] border-[#B22222] w-full max-w-[1600px] mt-[30px] sm:mt-[20px] mb-[70px]"></div>
      <div class="relative h-full grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 xl:grid-cols-6 gap-[15px] xl:gap-[20px] 2xl:gap-[25px]">
        <?php for ($i = 0; $i < 5; $i++): ?>
          <div class="w-full relative cursor-pointer aspect-square hover:scale-105 transform duration-200 ease-in-out rounded-[14px] shadow-[1px_2px_2.6px_1px_rgba(0,0,0,0.15)]">
            <div class="w-full aspect-square rounded-t-[14px] p-[9px]">
              <img class="relative w-full h-full object-contain" src="https://picsum.photos/300/300?random=<?= $i ?>">
            </div>
            <div class="px-[8px] pt-[5px] pb-[8px] flex flex-col justify-between rounded-b-[14px] bg-[#FBFBFB] w-full h-[65px]">
              <p class="font-trebuchet text-center font-bold text-[16px] text-[#393939] overflow-ellipsis line-clamp-1">Test Nama panajng banget</p>
              <div class="w-full bg-[#B22222] text-white text-[14px] rounded-full text-center font-trebuchet py-[2px]">Lihat Detail</div>
            </div>
          </div>
        <?php endfor; ?>
      </div>
    </div>
  </div>
</section>
<?= $this->endSection() ?>
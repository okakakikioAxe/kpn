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
  <div class=" w-full px-[25px] md:px-[10%] bg-[#F2F8FF] flex justify-center">
    <div class="w-full max-w-[1600px] pt-[62px] pb-[40px]">
      <h1 class=" text-[#001F47] text-start text-[32px] md:text-[34px] font-humanist-bold leading-[100%] -tracking-[0.02em]" data-lang-group="gallery" data-lang-key="title">GALERI</h1>
      <p class="mt-[12px] text-[#001F47] text-start font-humanist-normal leading-4 text-[14px] md:text-[16px] xl:text-[18px]" data-lang-group="gallery" data-lang-key="sub_title">Temukan inspirasi lewat kegiatan yang kami bagikan.</p>
    </div>
  </div>
  <div class=" pt-[90px] sm:pt-[150px] px-[25px] md:px-[10%] flex justify-center">
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
      <div id="category-menu" class="grid gap-[10px] md:gap-[15px] sm:gap-3 grid-cols-2 sm:grid-cols-4 max-w-[600px] mt-[80px] md:mt-[90px] xl:mt-[160px]">
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
      <div id="grid-container" class="relative h-full grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 xl:grid-cols-6 gap-[15px] xl:gap-[20px] 2xl:gap-[25px]">
        <?php for ($i = 0; $i < 10; $i++): ?>
          <div id="product-<?= $i ?>" class="product-cards w-full relative cursor-pointer aspect-square bg-white hover:scale-105 transform duration-200 ease-in-out rounded-[14px] shadow-[2px_2px_4px_0px_rgba(0,0,0,0.10)]">
            <div class="w-full aspect-square rounded-[14px] p-[12px] bg-gradient-to-tr from-[#F2F8FF] to-[#FFFAFA]">
              <img class="relative w-full h-full object-contain rounded-[14px]" src="/images/hero_compressed/kubus_apung.webp">
            </div>
            <div class="flex justify-center items-center px-[12px] rounded-b-[14px] bg-white w-full h-[39px]">
              <p class="font-trebuchet text-center font-bold text-[16px] text-[#3E3C3C] overflow-ellipsis line-clamp-1">Kubus Apung-<?= $i ?></p>
            </div>
          </div>
        <?php endfor; ?>
      </div>
      <div id="product-detail" class="w-full max-w-[1600px] bg-[#f7faff] h-auto rounded-xl hidden opacity-0 scale-95 transform transition-all duration-300 ease-in-out">
        <button id="closeModal" class=" absolute z-15 top-3 right-3 text-gray-500 hover:text-gray-700 cursor-pointer">
          ✖
        </button>
        <div class="block md:hidden p-4">
          <div class="flex mt-10 mb-6 h-full max-h-[300px] w-full justify-center items-center ">
            <div class="w-full aspect-square grow">
              <img class="relative w-full h-full object-contain rounded-[14px]" src="/images/hero_compressed/kubus_apung.webp">
            </div>
          </div>
          <h3 id="title" class="mb-6 text-stone-800 text-[26px] font-trebuchet leading-[135%] font-bold">Kubus Apung HDPE</h3>
          <div class="flex  w-full justify-start items-start">
            <div class="w-full ">
              <div class="flex mb-4">
                <p class=" mr-4 text-stone-500 text-[18px] font-[500]">Varian :</p>
                <p class=" text-stone-800 text-[18px] font-humanist-bold">Biru </p>
              </div>
              <div class="w-full grid grid-cols-none" style="grid-template-columns: repeat(auto-fill, minmax(35px, 1fr)); gap: 4px;">
                <?php for ($i = 0; $i < 13; $i++): ?>
                  <div class="max-w-[35px] h-auto aspect-square rounded-full bg-red-200"></div>
                <?php endfor; ?>
              </div>
            </div>
          </div>
          <p class="mt-8 mb-4 text-stone-800 text-[18px] font-humanist-normal">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada tristique maximus. Maecenas nec interdum turpis. In hac habitasse platea dictumst. Donec aliquam eu libero vitae eleifend. Integer hendrerit, libero congue tincidunt blandit, urna tortor ullamcorper nunc, a bibendum ante lorem at nibh. Aliquam a vulputate risus, quis faucibus elit. Nunc rhoncus, mi id ullamcorper faucibus, augue ipsum posuere turpis, at venenatis erat dui eu nisi. Ut at metus luctus, consectetur dui consectetur, tincidunt mauris. Fusce dapibus mollis leo, vel. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maxime dignissimos libero architecto repellendus! Blanditiis dolor neque iste dicta necessitatibus culpa magnam maxime, dolores, sit consectetur voluptates laboriosam ex hic aliquid.</p>
        </div>
        <div class="hidden md:block lg:hidden">
          <div class="flex">
            <div class="flex w-3/4 h-full justify-center items-center p-8">
              <div class="w-full aspect-square grow">
                <img class="relative w-full h-full object-contain rounded-[14px]" src="/images/hero_compressed/kubus_apung.webp">
              </div>
            </div>
            <div class="flex flex-col w-1/4 justify-start items-start p-8 ">
              <div class="w-full ">
                <div class="flex flex-col mb-6">
                  <p class=" text-stone-500 text-[18px] font-[500]">Varian :</p>
                  <p class=" text-stone-800 text-[18px] font-humanist-bold">Biru </p>
                </div>
                <div class="w-full grid grid-cols-none" style="grid-template-columns: repeat(auto-fill, minmax(35px, 1fr)); gap: 4px;">
                  <?php for ($i = 0; $i < 13; $i++): ?>
                    <div class="max-w-[35px] h-auto aspect-square rounded-full bg-red-200"></div>
                  <?php endfor; ?>
                </div>
              </div>
            </div>
          </div>
          <div class="w-full p-8">
            <h3 id="title" class="mb-6 text-stone-800 text-[26px] font-trebuchet leading-[135%] font-bold">Kubus Apung HDPE</h3>
            <p class="mt-7 text-stone-800 text-[18px] font-humanist-normal">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada tristique maximus. Maecenas nec interdum turpis. In hac habitasse platea dictumst. Donec aliquam eu libero vitae eleifend. Integer hendrerit, libero congue tincidunt blandit, urna tortor ullamcorper nunc, a bibendum ante lorem at nibh. Aliquam a vulputate risus, quis faucibus elit. Nunc rhoncus, mi id ullamcorper faucibus, augue ipsum posuere turpis, at venenatis erat dui eu nisi. Ut at metus luctus, consectetur dui consectetur, tincidunt mauris. Fusce dapibus mollis leo, vel. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maxime dignissimos libero architecto repellendus! Blanditiis dolor neque iste dicta necessitatibus culpa magnam maxime, dolores, sit consectetur voluptates laboriosam ex hic aliquid.</p>
          </div>
        </div>
        <div class="hidden lg:flex justify-center items-start">
          <div class="flex w-1/2 h-full justify-center flex-col items-center p-10">
            <div class="w-full aspect-square grow">
              <img class="relative w-full h-full object-contain rounded-[14px]" src="/images/hero_compressed/kubus_apung.webp">
            </div>
            <div class="xl:hidden w-full flex-none">
              <div class="flex">
                <p class="mb-3 mr-[4px] text-stone-500 text-[18px] font-[500]">Varian :</p>
                <p class="mb-3 text-stone-800 text-[18px] font-humanist-bold">Biru </p>
              </div>
              <div class="w-full grid grid-cols-none" style="grid-template-columns: repeat(auto-fill, minmax(35px, 1fr)); gap: 4px;">
                <?php for ($i = 0; $i < 20; $i++): ?>
                  <div class="max-w-[35px] h-auto aspect-square rounded-full bg-red-200"></div>
                <?php endfor; ?>
              </div>
            </div>
          </div>
          <div class="flex flex-col w-1/2 justify-start items-start p-10">
            <h3 id="title" class="mb-6 text-stone-800 text-[26px] font-trebuchet leading-[135%] font-bold">Kubus Apung HDPE</h3>
            <div class="hidden xl:block w-full">
              <div class="flex">
                <p class="mb-3 mr-[4px] text-stone-500 text-[18px] font-[500]">Varian :</p>
                <p class="mb-3 text-stone-800 text-[18px] font-humanist-bold">Biru </p>
              </div>
              <div class="w-full grid grid-cols-none" style="grid-template-columns: repeat(auto-fill, minmax(35px, 1fr)); gap: 4px;">
                <?php for ($i = 0; $i < 20; $i++): ?>
                  <div class="max-w-[35px] h-auto aspect-square rounded-full bg-red-200"></div>
                <?php endfor; ?>
              </div>
            </div>
            <p class="mt-7 text-stone-800 text-[18px] font-humanist-normal">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada tristique maximus. Maecenas nec interdum turpis. In hac habitasse platea dictumst. Donec aliquam eu libero vitae eleifend. Integer hendrerit, libero congue tincidunt blandit, urna tortor ullamcorper nunc, a bibendum ante lorem at nibh. Aliquam a vulputate risus, quis faucibus elit. Nunc rhoncus, mi id ullamcorper faucibus, augue ipsum posuere turpis, at venenatis erat dui eu nisi. Ut at metus luctus, consectetur dui consectetur, tincidunt mauris. Fusce dapibus mollis leo, vel. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maxime dignissimos libero architecto repellendus! Blanditiis dolor neque iste dicta necessitatibus culpa magnam maxime, dolores, sit consectetur voluptates laboriosam ex hic aliquid.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script>
  let gridContainer = document.getElementById('grid-container');
  let productDetail = document.getElementById('product-detail');
  let productTitle = document.getElementById("title");
  const closeModal = document.getElementById("closeModal");

  document.querySelectorAll('.product-cards').forEach(element => {
    element.addEventListener('click', function(e) {
      // Log the ID of the clicked element or its closest parent with an ID
      const id = this.id;


      productTitle.innerHTML = id;
      gridContainer.classList.add('invisible');

      setTimeout(() => {
        productDetail.classList.replace('hidden', 'flex');

      }, 150);
      setTimeout(() => {
        productDetail.classList.replace('scale-95', 'scale-100');
        productDetail.classList.replace('opacity-0', 'opacity-100');
        document.querySelectorAll('.product-cards').forEach(p => {
          p.classList.add('hidden');
        });
      }, 300);
    });
  });

  closeModal.addEventListener("click", () => {
    productDetail.classList.replace('scale-100', 'scale-95');
    productDetail.classList.replace('opacity-100', 'opacity-0');
    setTimeout(() => {
      gridContainer.classList.remove('invisible');
      document.querySelectorAll('.product-cards').forEach(p => {
        p.classList.remove('hidden');
      });
      productDetail.classList.add('hidden');
    }, 300);
  });
</script>
<?= $this->endSection() ?>
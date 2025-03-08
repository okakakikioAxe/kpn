<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Hello World</title>
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <!-- <script src="https://unpkg.com/@tailwindcss/browser@4"></script> -->
  <link rel="stylesheet" href="output.css">
  <link href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="style.css">

</head>

<body class="bg-white">
  <header>
    <!-- ---------------------------- Nav Bar ------------------------------------- -->
    <nav class="bg-gray-800 fixed top-0 left-0 w-full h-16 z-50 flex justify-center">
      <div class="w-full max-w-[1600px] sm:mx-[25px]">
        <div class="relative flex h-16 items-center justify-between">
          <div class="flex flex-1 items-center sm:items-stretch sm:justify-start">
            <!-- Logo di kiri -->
            <div class="flex shrink-0 items-center ml-[25px] sm:ml-0">
              <img loading="lazy" class="h-8 w-auto" src="white logo.png" alt="Your Company">
            </div>
            <div class="hidden sm:ml-6 sm:block ">
              <div class="flex space-x-4">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <a href="#" class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white" aria-current="page">Dashboard</a>
                <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Team</a>
                <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Projects</a>
                <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Calendar</a>
              </div>
            </div>
          </div>

          <!-- Mobile menu button (dipindah ke kanan) -->
          <div class="absolute inset-y-0 right-0 flex items-center pr-[25px] sm:hidden">
            <button onclick="toggleMenu()" type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:ring-2 focus:ring-white focus:outline-none focus:ring-inset">
              <span class="absolute -inset-0.5"></span>
              <span class="sr-only">Open main menu</span>
              <!-- Open Menu Icon -->
              <svg id="open-menu-icon" class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
              </svg>
              <!-- Close Menu Icon -->
              <svg id="close-menu-icon" class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
              </svg>
            </button>
          </div>
        </div>
      </div>
    </nav>

    <!-- Mobile Menu -->
    <div
      id="mobile-menu"
      class="fixed top-16 right-0 w-screen h-screen bg-gray-800 shadow-lg sm:hidden translate-x-full transition-transform duration-300 overflow-y-auto z-20">
      <div class="space-y-1 px-4 pt-4">
        <a href="#" class="block rounded-md bg-gray-900 px-4 py-3 text-lg font-medium text-white" aria-current="page">Dashboard</a>
        <a href="#" class="block rounded-md px-4 py-3 text-lg font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Team</a>
        <a href="#" class="block rounded-md px-4 py-3 text-lg font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Projects</a>
        <a href="#" class="block rounded-md px-4 py-3 text-lg font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Calendar</a>
      </div>
    </div>

    <!-- ---------------------------- End of Nav Bar ---------------------------- -->
  </header>

  <div class="h-16"></div>

  <div class="absolute z-10 w-full bg-white">
    <main>
      <!-- Hero -->
      <section id="hero-section" class="relative h-[90vh] bg-white">
        <div class="relative h-full lg:h-full w-full object-cover">
          <img src="/images/hero background.png" alt="kantor pt karya pilar nusantara" class="h-full w-full object-cover">
        </div>
        <div class="absolute top-3 sm:top-5 xl:top-8 left-1/2 -translate-x-1/2 max-w-[1600px]">
          <div class="flex justify-center">
            <img loading="lazy" class="h-[15vh] max-h-[100px] sm:max-h-[150px] md:max-h-[150px] xl:max-h-[200px] w-auto flex justify-center" src="colored logo.png" alt="Logo berwarna PT. Karya Pilar Nusantara">
          </div>
        </div>
        <div class="absolute bottom-[20vh] sm:bottom-[180px] md:bottom-[20vh] lg:bottom-[20vh] xl:bottom-[23vh] left-1/2 -translate-x-1/2 w-[80vw] max-w-[1600px] z-20">
          <h1 class="max-w-[600px] md:max-w-[800px] mb-[60px] md:mb-[90px] text-white text-[32px] md:text-[36px] lg:text-[40px] font-humanist-bold leading-[100%] -tracking-[0.02em]">Mitra Anda Dalam Solusi Mainan Anak, Olahraga dan Infrastruktur</h1>
          <p class="max-w-[600px] mb-[15px] text-white font-trebuchet tracking-[0.01em] leading-4 lg:leading-5 text-[16px] md:text-[18px]">Dapatkan penawaran menarik untuk berbagai macam kebutuhan anda</p>
          <a href="#" class="flex bg-light-salmon font-trebuchet text-[18px] w-[230px] h-[43px] text-white font-bold rounded-full shadow-lg transition items-center justify-center">
            Hubungi Kami
          </a>
        </div>
        <div class="hidden xl:block absolute bottom-0 h-[210px] w-full bg-gradient-to-t from-white to-transparent z-10"></div>
      </section>

      <!-- Mengapa memilih kami -->
      <section id="whyUsSection" class=" relative w-full mt-[30px] sm:mt-[40px] lg:mt-[60px] xl:mt-[100px]">
        <h2 class="flex align-center justify-center h2-title">Mengapa Memilih Kami</h2>
        <!--HTML CODE-->
        <div class="w-full  flex justify-center pt-[130px] lg:pt-[210px] xl:pt-[230px]">
          <div class="relative  w-full  h-full">
            <div class="xl:hidden relative w-full px-[10%]  overflow-hidden  whyUsSwiper">
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

      <!-- Tentang kami -->
      <section id="aboutUsSection" class=" relative w-full mt-[140px] lg:mt-[180px] xl:mt-[300px]">
        <h2 class="flex align-center justify-center text-iron-gray text-[28px] xl:text-[36px] font-trebuchet leading-[135%] -tracking-[0.03em] font-[500]">Tentang Kami</h2>
        <div class=" w-full  flex justify-center mt-[130px] lg:mt-[210px] xl:mt-[190px] xl:px-[5%]">
          <div class="relative  w-full h-full flex justify-center">
            <div class="xl:hidden relative w-full px-[25px] lg:px-[10%] py-[30px]  overflow-hidden h-full aboutUsSwiper">
              <div id="normalAboutUsCard" class="swiper-wrapper">
                <div class="w-full swiper-slide">
                  <div class="h-full rounded-[40px] overflow-hidden bg-[#4AC9E3] shadow-[0px_0px_20px_5px_rgba(74,201,227,0.5)] animate-about-us-card">
                    <div class="relative max-h-[210px]">
                      <img loading="lazy" class="object-cover w-full max-h-[210px]" src="worker working in work.jpg" alt="contoh gambar">
                    </div>
                    <h3 class="about-us-title">Produsen HDPE</h3>
                    <p class="about-us-description">Kami menyediakan produk unggulan berkualitas tinggi dengan harga yang kompetitif dan pengiriman tepat waktu.</p>
                  </div>
                </div>
                <div class="w-full swiper-slide">
                  <div class="h-full rounded-[40px] overflow-hidden bg-[#D48BC8] shadow-[0px_0px_20px_5px_rgba(212,139,200,0.5)] animate-about-us-card">
                    <div class="relative max-h-[210px]">
                      <img loading="lazy" class="object-cover w-full max-h-[210px]" src="worker working in work.jpg" alt="contoh gambar">
                    </div>
                    <h3 class="about-us-title">Produsen HDPE</h3>
                    <p class="about-us-description">Kami menyediakan produk unggulan berkualitas.</p>
                  </div>
                </div>
                <div class="w-full swiper-slide">
                  <div class="h-full  rounded-[40px] overflow-hidden bg-[#FFAE62] shadow-[0px_0px_20px_5px_rgba(255,174,98,0.5)] animate-about-us-card">
                    <div class="relative max-h-[210px]">
                      <img loading="lazy" class="object-cover w-full max-h-[210px]" src="worker working in work.jpg" alt="contoh gambar">
                    </div>
                    <h3 class="about-us-title">Produsen HDPE</h3>
                    <p class="about-us-description">Kami menyediakan produk unggulan berkualitas tinggi dengan harga yang kompetitif dan pengiriman tepat waktu.</p>
                  </div>
                </div>
                <div class="w-full swiper-slide">
                  <div class="h-full  rounded-[40px] overflow-hidden bg-[#7CCC6C] shadow-[0px_0px_20px_5px_rgba(124,204,108,0.5)] animate-about-us-card">
                    <div class="relative max-h-[210px]">
                      <img loading="lazy" class="object-cover w-full max-h-[210px]" src="worker working in work.jpg" alt="contoh gambar">
                    </div>
                    <h3 class="about-us-title">Produsen HDPE</h3>
                    <p class="about-us-description">Kami menyediakan produk unggulan berkualitas tinggi dengan harga yang kompetitif dan pengiriman tepat waktu.</p>
                  </div>
                </div>
              </div>
              <div class="xl:hidden pt-[70px] ">
                <div class="flex justify-center items-center about-us-swiper-pagination"></div>
              </div>

              <div class="xl:hidden">
                <button onclick="prevAboutUsSlides()" type="button" class="circle-button xl:hidden absolute z-5 left-1 top-[45%] -translate-y-1/2 bg-white h-[37px] w-[37px] rounded-full flex justify-center items-center pr-[4px] shadow-[0_35px_35px_rgba(0,0,0,0.25)]"><img loading="lazy" class="h-[28px] w-[28px]" src="arrow-left.svg" alt="panah kiri"></button>
                <button onclick="nextAboutUsSlides()" type="button" class="circle-button xl:hidden absolute z-5 right-1 top-[45%] -translate-y-1/2 bg-white h-[37px] w-[37px] rounded-full flex justify-center items-center pl-[2px]"><img loading="lazy" class="h-[28px] w-[28px]" src="arrow-right.svg" alt="panah kanan"></button>
              </div>
            </div>

            <div class="hidden xl:flex justify-center relative w-full overflow-visible h-full px-[20px] max-w-[1600px] ">
              <div id="xlAboutUsCard" class=" grid grid-cols-4 gap-10 py-[30px]">
                <div class="h-full rounded-[40px] overflow-hidden bg-[#4AC9E3] shadow-[0px_0px_20px_5px_rgba(74,201,227,0.5)] animate-about-us-card">
                  <div class="relative max-h-[210px]">
                    <img loading="lazy" class="object-cover w-full max-h-[210px]" src="worker working in work.jpg" alt="contoh gambar">
                  </div>
                  <h3 class="about-us-title">Produsen HDPE</h3>
                  <p class="about-us-description">Kami menyediakan produk unggulan berkualitas tinggi dengan harga yang kompetitif dan pengiriman tepat waktu.</p>
                </div>
                <div class="h-full rounded-[40px] overflow-hidden bg-[#D48BC8] shadow-[0px_0px_20px_5px_rgba(212,139,200,0.5)] animate-about-us-card">
                  <div class="relative max-h-[210px]">
                    <img loading="lazy" class="object-cover w-full max-h-[210px]" src="worker working in work.jpg" alt="contoh gambar">
                  </div>
                  <h3 class="about-us-title">Produsen HDPE</h3>
                  <p class="about-us-description">Kami menyediakan produk unggulan berkualitas.</p>
                </div>
                <div class="h-full  rounded-[40px] overflow-hidden bg-[#FFAE62] shadow-[0px_0px_20px_5px_rgba(255,174,98,0.5)] animate-about-us-card">
                  <div class="relative max-h-[210px]">
                    <img loading="lazy" class="object-cover w-full max-h-[210px]" src="worker working in work.jpg" alt="contoh gambar">
                  </div>
                  <h3 class="about-us-title">Produsen HDPE</h3>
                  <p class="about-us-description">Kami menyediakan produk unggulan berkualitas tinggi dengan harga yang kompetitif dan pengiriman tepat waktu.</p>
                </div>
                <div class="h-full  rounded-[40px] overflow-hidden bg-[#7CCC6C] shadow-[0px_0px_20px_5px_rgba(124,204,108,0.5)] animate-about-us-card">
                  <div class="relative max-h-[210px]">
                    <img loading="lazy" class="object-cover w-full max-h-[210px]" src="worker working in work.jpg" alt="contoh gambar">
                  </div>
                  <h3 class="about-us-title">Produsen HDPE</h3>
                  <p class="about-us-description">Kami menyediakan produk unggulan berkualitas tinggi dengan harga yang kompetitif dan pengiriman tepat waktu.</p>
                </div>
              </div>

            </div>
          </div>
        </div>
      </section>

      <!-- Horizontal Divider - Tentang kami -->
      <div class="flex justify-center mt-[100px] xl:mt-[250px]">
        <div class="border-[1.5px] border-[#F0F0F0] w-full max-w-[1200px] mx-[76px] sm:mx-[20%]"></div>
      </div>

      <!-- Produk unggulan kami -->
      <section id="topProductSection" class=" relative w-full mt-[125px] xl:mt-[240px]">
        <h2 class="flex align-center justify-center h2-title">Berbagai produk unggulan kami</h2>
        <div class="flex w-full align-center justify-center sm:px-[25px] lg:px-[5%] pt-[121px] xl:pt-[190px]">
          <div class="w-full grid grid-cols-1 sm:grid-cols-2 2xl:grid-cols-4 gap-[126px] sm:gap-[25px] md:gap-8 lg:gap-15 xl:gap-30 2xl:gap-15 max-w-[1600px]">
            <!-- Top product 1   -->
            <?php include APPPATH . 'Views/components/cards/products/floating_cube_card.php'; ?>

            <!-- Top product 2   -->
            <?php include APPPATH . 'Views/components/cards/products/rocking_horse_card.php'; ?>

            <!-- Top product 3   -->
            <?php include APPPATH . 'Views/components/cards/products/floating_cube_card1.php'; ?>

            <!-- Top product 4   -->
            <?php include APPPATH . 'Views/components/cards/products/floating_cube_card2.php'; ?>

          </div>
        </div>
        <p class="mx-[25px] font-humanist-normal text-[#313030] text-[18px] xl:text-[22px] text-center mt-[240px] sm:mt-[320px] xl:mt-[300px]">Belum menemukan produk yang anda cari? telusuri semua produk yang ditawarkan</p>

        <div class="flex align-center justify-center mt-[43px]">
          <a href="#" class="flex bg-light-salmon font-trebuchet w-[268px] h-[43px] text-white rounded-full shadow-lg hover:bg-orange-500 transition items-center justify-center">
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
        <h2 class="flex align-center justify-center h2-title">Intip Proses Produksinya</h2>
        <div class="xl:hidden relative w-full px-[25px] pt-[120px] max-w-[1600px] overflow-hidden h-full productionGalerySwiper">
          <div id="normalProductionCard" class="swiper-wrapper">
            <div class="w-full swiper-slide">
              <div class="w-full animate-production-galery-card">
                <div class="flex justify-center w-full ">
                  <div class="max-h-[366px] aspect-auto rounded-[40px] overflow-hidden">
                    <img loading="lazy" class="object-cover w-full h-full" src="worker working in work.jpg" alt="contoh gambar">
                  </div>
                </div>
                <div class="h-auto mt-[41px]">
                  <h3 class="production-title">Terpercaya</h3>
                  <p class="production-description">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod accusantium rerum obcaecati quis autem vitae impedit minima odit sapiente fugit vel sunt amet esse inventore, ipsam magnam, sequi quidem eius.
                  </p>
                </div>
              </div>
            </div>
            <div class="w-full swiper-slide">
              <div class="w-full animate-production-galery-card">
                <div class="flex justify-center w-full ">
                  <div class="max-h-[366px] aspect-auto rounded-[40px] overflow-hidden">
                    <img loading="lazy" class="object-cover w-full h-full" src="worker working in work.jpg" alt="contoh gambar">
                  </div>
                </div>
                <div class="h-auto mt-[41px]">
                  <h3 class="production-title">Terpercaya</h3>
                  <p class="production-description">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod accusantium rerum obcaecati quis autem vitae impedit minima odit sapiente fugit vel sunt amet esse inventore, ipsam magnam, sequi quidem eius.
                  </p>
                </div>
              </div>
            </div>
            <div class="w-full swiper-slide">
              <div class="w-full animate-production-galery-card">
                <div class="flex justify-center w-full ">
                  <div class="max-h-[366px] aspect-auto rounded-[40px] overflow-hidden">
                    <img loading="lazy" class="object-cover w-full h-full" src="worker working in work.jpg" alt="contoh gambar">
                  </div>
                </div>
                <div class="h-auto mt-[41px]">
                  <h3 class="production-title">Terpercaya</h3>
                  <p class="production-description">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod accusantium rerum obcaecati quis autem vitae impedit minima odit sapiente fugit vel sunt amet esse inventore, ipsam magnam, sequi quidem eius.
                  </p>
                </div>
              </div>
            </div>
            <div class="w-full swiper-slide">
              <div class="w-full animate-production-galery-card">
                <div class="flex justify-center w-full ">
                  <div class="max-h-[366px] aspect-auto rounded-[40px] overflow-hidden">
                    <img loading="lazy" class="object-cover w-full h-full" src="worker working in work.jpg" alt="contoh gambar">
                  </div>
                </div>
                <div class="h-auto mt-[41px]">
                  <h3 class="production-title">Terpercaya</h3>
                  <p class="production-description">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod accusantium rerum obcaecati quis autem vitae impedit minima odit sapiente fugit vel sunt amet esse inventore, ipsam magnam, sequi quidem eius.
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
            <div id="xlProductionCard" class="grid grid-cols-4 gap-10">
              <div class="w-full animate-production-galery-card">
                <div class="flex justify-center w-full ">
                  <div class="max-h-[366px] aspect-auto rounded-[40px] overflow-hidden">
                    <img loading="lazy" class="object-cover w-full h-full" src="worker working in work.jpg" alt="contoh gambar">
                  </div>
                </div>
                <div class="h-auto mt-[41px]">
                  <h3 class="production-title">Terpercaya</h3>
                  <p class="production-description">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod accusantium rerum obcaecati quis autem vitae impedit minima odit sapiente fugit vel sunt amet esse inventore, ipsam magnam, sequi quidem eius.
                  </p>
                </div>
              </div>
              <div class="w-full animate-production-galery-card">
                <div class="flex justify-center w-full ">
                  <div class="max-h-[366px] aspect-auto rounded-[40px] overflow-hidden">
                    <img loading="lazy" class="object-cover w-full h-full" src="worker working in work.jpg" alt="contoh gambar">
                  </div>
                </div>
                <div class="h-auto mt-[41px]">
                  <h3 class="production-title">Terpercaya</h3>
                  <p class="production-description">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  </p>
                </div>
              </div>
              <div class="w-full animate-production-galery-card">
                <div class="flex justify-center w-full ">
                  <div class="max-h-[366px] aspect-auto rounded-[40px] overflow-hidden">
                    <img loading="lazy" class="object-cover w-full h-full" src="worker working in work.jpg" alt="contoh gambar">
                  </div>
                </div>
                <div class="h-auto mt-[41px]">
                  <h3 class="production-title">Terpercaya</h3>
                  <p class="production-description">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod accusantium rerum obcaecati quis autem vitae impedit minima odit sapiente fugit vel sunt amet esse inventore, ipsam magnam, sequi quidem eius.
                  </p>
                </div>
              </div>
              <div class="w-full animate-production-galery-card">
                <div class="flex justify-center w-full ">
                  <div class="max-h-[366px] aspect-auto rounded-[40px] overflow-hidden">
                    <img loading="lazy" class="object-cover w-full h-full" src="worker working in work.jpg" alt="contoh gambar">
                  </div>
                </div>
                <div class="h-auto mt-[41px]">
                  <h3 class="production-title">Terpercaya</h3>
                  <p class="production-description">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod accusantium rerum obcaecati quis autem vitae impedit minima odit sapiente fugit vel sunt amet esse inventore, ipsam magnam, sequi quidem eius.
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

      <!-- Review Pengguna -->
      <section id="userReviewSection" class="mt-[140px]">
        <h2 class=" flex align-center justify-center h2-title">Pendapat mereka tentang produk kami..</h2>
        <div class="xl:hidden relative w-full mt-[120px] px-[25px] pt-[60px] lg:pt-[120px] pb-[50px] max-w-[1600px] overflow-hidden h-full userReviewSwiper ">
          <div class="swiper-wrapper">
            <div class="w-full swiper-slide">
              <div class="h-full px-[35px] py-[35px] rounded-[40px] overflow-hidden bg-white shadow-[1px_3px_5px_3px_rgba(149,143,143,0.15)]">
                <div class="flex justify-center w-full">
                  <div class="w-[104px] h-[104px] rounded-full bg-gray-400 absolute top-0 translate-x-0 -translate-y-1/2">
                    <img loading="lazy" class=" w-full h-full object-cover rounded-full" src="worker working in work.jpg" alt="contoh gambar">
                  </div>
                </div>
                <div class="h-full flex flex-col">
                  <div class="size-auto w-full flex-none ">
                    <div class="mt-[25px]">
                      <h3 class="text-center text-black text-[16px] font-trebuchet font-[500]">Mr. Abigail</h3>
                      <h4 class="text-center text-black text-[14px] font-(family-name:HusmanistNormal) font-[400]">Kepala Desa Muneng</h4>
                    </div>
                  </div>
                  <div class="size-[120px] w-full mt-[23px]">
                    <div class="h-full flex flex-col items-center justify-center">
                      <div class="w-full  fill-[#5E5E5E]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-[18px] w-[18px] rotate-180 fill-[#5E5E5E]" viewBox="0 0 24 24" width="512" height="512">
                          <path d="M8,4H4A4,4,0,0,0,0,8v4a2,2,0,0,0,2,2H7.91A6.006,6.006,0,0,1,2,19a1,1,0,0,0,0,2,8.009,8.009,0,0,0,8-8V6A2,2,0,0,0,8,4Z" />
                          <path d="M22,4H18a4,4,0,0,0-4,4v4a2,2,0,0,0,2,2h5.91A6.006,6.006,0,0,1,16,19a1,1,0,0,0,0,2,8.009,8.009,0,0,0,8-8V6A2,2,0,0,0,22,4Z" />
                        </svg>
                      </div>
                      <p class="block mt-[11px] text-start text-[#5E5E5E] text-[14px] font-humanist-normal italic font-[400]">Kami menyediakan produk unggulan dan pengiriman tepat waktu Kami .</p>
                    </div>
                  </div>
                  <div class="size-auto flex-none mt-[30px]">
                    <div class="grid grid-cols-2 gap-[20px]">
                      <img loading="lazy" class=" w-full h-full rounded-[10px]" src="worker working in work.jpg" alt="contoh gambar">
                      <img loading="lazy" class=" w-full h-full rounded-[10px]" src="worker working in work.jpg" alt="contoh gambar">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="w-full swiper-slide">
              <div class="h-full px-[35px] py-[35px] rounded-[40px] overflow-hidden bg-white shadow-[1px_3px_5px_3px_rgba(149,143,143,0.15)]">
                <div class="flex justify-center w-full">
                  <div class="w-[104px] h-[104px] rounded-full bg-gray-400 absolute top-0 translate-x-0 -translate-y-1/2">
                    <img loading="lazy" class=" w-full h-full object-cover rounded-full" src="worker working in work.jpg" alt="contoh gambar">
                  </div>
                </div>
                <div class="h-full flex flex-col">
                  <div class="size-auto w-full flex-none ">
                    <div class="mt-[25px]">
                      <h3 class="text-center text-black text-[16px] font-trebuchet font-[500]">Mr. Abigail</h3>
                      <h4 class="text-center text-black text-[14px] font-(family-name:HusmanistNormal) font-[400]">Kepala Desa Muneng</h4>
                    </div>
                  </div>
                  <div class="size-[120px] w-full mt-[23px]">
                    <div class="h-full flex flex-col items-center justify-center">
                      <div class="w-full  fill-[#5E5E5E]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-[18px] w-[18px] rotate-180 fill-[#5E5E5E]" viewBox="0 0 24 24" width="512" height="512">
                          <path d="M8,4H4A4,4,0,0,0,0,8v4a2,2,0,0,0,2,2H7.91A6.006,6.006,0,0,1,2,19a1,1,0,0,0,0,2,8.009,8.009,0,0,0,8-8V6A2,2,0,0,0,8,4Z" />
                          <path d="M22,4H18a4,4,0,0,0-4,4v4a2,2,0,0,0,2,2h5.91A6.006,6.006,0,0,1,16,19a1,1,0,0,0,0,2,8.009,8.009,0,0,0,8-8V6A2,2,0,0,0,22,4Z" />
                        </svg>
                      </div>
                      <p class="block mt-[11px] text-start text-[#5E5E5E] text-[14px] font-humanist-normal italic font-[400]">Kami menyediakan produk unggulan dan pengiriman tepat waktu Kami Kami menyediakan produk unggulan dan pengiriman tepat </p>
                    </div>
                  </div>
                  <div class="size-auto flex-none mt-[30px]">
                    <div class="grid grid-cols-2 gap-[20px]">
                      <img loading="lazy" class=" w-full h-full rounded-[10px]" src="worker working in work.jpg" alt="contoh gambar">
                      <img loading="lazy" class=" w-full h-full rounded-[10px]" src="worker working in work.jpg" alt="contoh gambar">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="w-full swiper-slide">
              <div class="h-full px-[35px] py-[35px] rounded-[40px] overflow-hidden bg-white shadow-[1px_3px_5px_3px_rgba(149,143,143,0.15)]">
                <div class="flex justify-center w-full">
                  <div class="w-[104px] h-[104px] rounded-full bg-gray-400 absolute top-0 translate-x-0 -translate-y-1/2">
                    <img loading="lazy" class=" w-full h-full object-cover rounded-full" src="worker working in work.jpg" alt="contoh gambar">
                  </div>
                </div>
                <div class="h-full flex flex-col">
                  <div class="size-auto w-full flex-none ">
                    <div class="mt-[25px]">
                      <h3 class="text-center text-black text-[16px] font-trebuchet font-[500]">Mr. Abigail</h3>
                      <h4 class="text-center text-black text-[14px] font-(family-name:HusmanistNormal) font-[400]">Kepala Desa Muneng</h4>
                    </div>
                  </div>
                  <div class="size-[120px] w-full mt-[23px]">
                    <div class="h-full flex flex-col items-center justify-center">
                      <div class="w-full  fill-[#5E5E5E]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-[18px] w-[18px] rotate-180 fill-[#5E5E5E]" viewBox="0 0 24 24" width="512" height="512">
                          <path d="M8,4H4A4,4,0,0,0,0,8v4a2,2,0,0,0,2,2H7.91A6.006,6.006,0,0,1,2,19a1,1,0,0,0,0,2,8.009,8.009,0,0,0,8-8V6A2,2,0,0,0,8,4Z" />
                          <path d="M22,4H18a4,4,0,0,0-4,4v4a2,2,0,0,0,2,2h5.91A6.006,6.006,0,0,1,16,19a1,1,0,0,0,0,2,8.009,8.009,0,0,0,8-8V6A2,2,0,0,0,22,4Z" />
                        </svg>
                      </div>
                      <p class="block mt-[11px] text-start text-[#5E5E5E] text-[14px] font-humanist-normal italic font-[400]">Kami menyediakan produk unggulan dan pengiriman tepat waktu Kami .</p>
                    </div>
                  </div>
                  <div class="size-auto flex-none mt-[30px]">
                    <div class="grid grid-cols-2 gap-[20px]">
                      <img loading="lazy" class=" w-full h-full rounded-[10px]" src="worker working in work.jpg" alt="contoh gambar">
                      <img loading="lazy" class=" w-full h-full rounded-[10px]" src="worker working in work.jpg" alt="contoh gambar">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="w-full swiper-slide">
              <div class="h-full px-[35px] py-[35px] rounded-[40px] overflow-hidden bg-white shadow-[1px_3px_5px_3px_rgba(149,143,143,0.15)]">
                <div class="flex justify-center w-full">
                  <div class="w-[104px] h-[104px] rounded-full bg-gray-400 absolute top-0 translate-x-0 -translate-y-1/2">
                    <img loading="lazy" class=" w-full h-full object-cover rounded-full" src="worker working in work.jpg" alt="contoh gambar">
                  </div>
                </div>
                <div class="h-full flex flex-col">
                  <div class="size-auto w-full flex-none ">
                    <div class="mt-[25px]">
                      <h3 class="text-center text-black text-[16px] font-trebuchet font-[500]">Mr. Abigail</h3>
                      <h4 class="text-center text-black text-[14px] font-(family-name:HusmanistNormal) font-[400]">Kepala Desa Muneng</h4>
                    </div>
                  </div>
                  <div class="size-[120px] w-full mt-[23px]">
                    <div class="h-full flex flex-col items-center justify-center">
                      <div class="w-full  fill-[#5E5E5E]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-[18px] w-[18px] rotate-180 fill-[#5E5E5E]" viewBox="0 0 24 24" width="512" height="512">
                          <path d="M8,4H4A4,4,0,0,0,0,8v4a2,2,0,0,0,2,2H7.91A6.006,6.006,0,0,1,2,19a1,1,0,0,0,0,2,8.009,8.009,0,0,0,8-8V6A2,2,0,0,0,8,4Z" />
                          <path d="M22,4H18a4,4,0,0,0-4,4v4a2,2,0,0,0,2,2h5.91A6.006,6.006,0,0,1,16,19a1,1,0,0,0,0,2,8.009,8.009,0,0,0,8-8V6A2,2,0,0,0,22,4Z" />
                        </svg>
                      </div>
                      <p class="block mt-[11px] text-start text-[#5E5E5E] text-[14px] font-humanist-normal italic font-[400]">Kami menyediakan produk unggulan dan pengiriman tepat waktu Kami .</p>
                    </div>
                  </div>
                  <div class="size-auto flex-none mt-[30px]">
                    <div class="grid grid-cols-2 gap-[20px]">
                      <img loading="lazy" class=" w-full h-full rounded-[10px]" src="worker working in work.jpg" alt="contoh gambar">
                      <img loading="lazy" class=" w-full h-full rounded-[10px]" src="worker working in work.jpg" alt="contoh gambar">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="w-full swiper-slide">
              <div class="h-full px-[35px] py-[35px] rounded-[40px] overflow-hidden bg-white shadow-[1px_3px_5px_3px_rgba(149,143,143,0.15)]">
                <div class="flex justify-center w-full">
                  <div class="w-[104px] h-[104px] rounded-full bg-gray-400 absolute top-0 translate-x-0 -translate-y-1/2">
                    <img loading="lazy" class=" w-full h-full object-cover rounded-full" src="worker working in work.jpg" alt="contoh gambar">
                  </div>
                </div>
                <div class="h-full flex flex-col">
                  <div class="size-auto w-full flex-none ">
                    <div class="mt-[25px]">
                      <h3 class="text-center text-black text-[16px] font-trebuchet font-[500]">Mr. Abigail</h3>
                      <h4 class="text-center text-black text-[14px] font-(family-name:HusmanistNormal) font-[400]">Kepala Desa Muneng</h4>
                    </div>
                  </div>
                  <div class="size-[120px] w-full mt-[23px]">
                    <div class="h-full flex flex-col items-center justify-center">
                      <div class="w-full  fill-[#5E5E5E]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-[18px] w-[18px] rotate-180 fill-[#5E5E5E]" viewBox="0 0 24 24" width="512" height="512">
                          <path d="M8,4H4A4,4,0,0,0,0,8v4a2,2,0,0,0,2,2H7.91A6.006,6.006,0,0,1,2,19a1,1,0,0,0,0,2,8.009,8.009,0,0,0,8-8V6A2,2,0,0,0,8,4Z" />
                          <path d="M22,4H18a4,4,0,0,0-4,4v4a2,2,0,0,0,2,2h5.91A6.006,6.006,0,0,1,16,19a1,1,0,0,0,0,2,8.009,8.009,0,0,0,8-8V6A2,2,0,0,0,22,4Z" />
                        </svg>
                      </div>
                      <p class="block mt-[11px] text-start text-[#5E5E5E] text-[14px] font-humanist-normal italic font-[400]">Kami menyediakan produk unggulan dan pengiriman tepat waktu Kami .</p>
                    </div>
                  </div>
                  <div class="size-auto flex-none mt-[30px]">
                    <div class="grid grid-cols-2 gap-[20px]">
                      <img loading="lazy" class=" w-full h-full rounded-[10px]" src="worker working in work.jpg" alt="contoh gambar">
                      <img loading="lazy" class=" w-full h-full rounded-[10px]" src="worker working in work.jpg" alt="contoh gambar">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="xl:hidden pt-[70px] lg:pt-[110px]">
            <div class="flex justify-center items-center user-review-swiper-pagination">
            </div>
          </div>

          <div class="xl:hidden">
            <button onclick="prevUserReviewSlides()" type="button" class="circle-button xl:hidden absolute z-5 left-1 top-[45%] -translate-y-1/2 bg-white h-[37px] w-[37px] rounded-full flex justify-center items-center pr-[4px] shadow-[0_35px_35px_rgba(0,0,0,0.25)]"><img loading="lazy" class="h-[28px] w-[28px]" src="arrow-left.svg" alt="panah kiri"></button>
            <button onclick="nextUserReviewSlides()" type="button" class="circle-button xl:hidden absolute z-5 right-1 top-[45%] -translate-y-1/2 bg-white h-[37px] w-[37px] rounded-full flex justify-center items-center pl-[2px]"><img loading="lazy" class="h-[28px] w-[28px]" src="arrow-right.svg" alt="panah kanan"></button>
          </div>
        </div>

        <div class="hidden xl:flex items-center justify-center h-auto mx-[5px] xl:pt-[220px]">
          <div class="relative w-full h-auto overflow-hidden pt-[90px] pb-[5px]">
            <!-- Left blur effect -->
            <div class="absolute left-0 top-0 h-full w-[200px] bg-gradient-to-r from-white to-transparent z-10"></div>

            <!-- Right blur effect -->
            <div class="absolute right-0 top-0 h-full w-[200px] bg-gradient-to-l from-white to-transparent z-10"></div>
            <div id="cardContainer" class="flex">

            </div>
          </div>
        </div>
      </section>

      <div class="flex justify-center mt-[120px] xl:mt-[300px]">
        <div class="border-[1.5px] border-[#F0F0F0] w-full max-w-[1200px]  mx-[76px] sm:mx-[20%]"></div>
      </div>

      <!-- Bottom CTA -->
      <section id="bottomCtaSection" class="relative w-full pt-[180px] xl:pt-[330px]">
        <p class="mx-[25px] font-humanist-normal text-[#313030] text-[18px] xl:text-[22px] text-center">Hubungi kami dan dapatkan penawaran khusus untuk kebutuhan Anda!</p>

        <div class="flex align-center justify-center mt-[43px]">
          <a href="#" class="flex bg-light-salmon w-[268px] h-[43px] text-white font-trebuchet text-[18px] rounded-full shadow-lg hover:bg-dark-salmon transition items-center justify-center">
            Hubungi Kami
          </a>
        </div>
      </section>
    </main>
    <footer class="flex justify-center mt-[250px] xl:mt-[450px] bg-[#07172C]">
      <div class="bg-[#07172C] p-[24px] max-w-[1600px]">
        <img loading="lazy" class="w-[110px] h-auto" src="white logo.png" alt="Logo KPN warna putih">

        <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-[44px] mt-[46px]">
          <p class="text-start text-white text-[18px] font-humanist-normal tracking-wide">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lectus elit, euismod id neque in, luctus ornare nunc. Nullam eu libero sed ipsum blandit mattis id sed nisi. In varius mauris at ante scelerisque commodo. Suspendisse porta velit purus, non mattis tortor elementum ac. Integer ut mi iaculis, dictum lorem vel, rutrum urna. Quisque sit amet</p>
          <div class="grid grid-cols-2">
            <div class="grid grid-flow-col grid-rows-4 gap-[22px] sm:justify-center">
              <h3 class="text-white text-[22px] font-trebuchet -tracking-[0.02em] font-[500]">Perusahaan</h3>
              <a class="text-white text-[18px] font-trebuchet -tracking-[0.02em] font-extralight" src="#">Tentang</a>
              <a class="text-white text-[18px] font-trebuchet -tracking-[0.02em] font-extralight" src="#">Produk</a>
              <a class="text-white text-[18px] font-trebuchet -tracking-[0.02em] font-extralight" src="#">Galery</a>
            </div>
            <div class="grid grid-flow-col grid-rows-4 gap-[22px] sm:justify-center">
              <h3 class="text-white text-[22px] font-trebuchet -tracking-[0.02em] font-[500]">Hubungi Kami</h3>
              <a class="text-white text-[18px] font-trebuchet -tracking-[0.02em] font-extralight" src="#">Kontak</a>
              <a class="text-white text-[18px] font-trebuchet -tracking-[0.02em] font-extralight" src="#">Lokasi Kami</a>
            </div>
          </div>
          <div class="hidden xl:block w-full h-[30px] ">
            <div class="w-full h-auto flex  items-center">
              <img loading="lazy" class="w-[37px] h-[37px] mr-[30px]" src="translate_icon.png" alt="translate icon">
              <div class="relative w-full">

                <button id="dropdownButton1" class="px-[23px] py-[8px] text-white rounded-full border-[1px] border-white w-full">
                  <div class="flex">
                    <p class="grow text-[18px] font-trebuchet -tracking-[0.02em]">Bahasa Indonesia</p>
                    <p class="w-[30px]">
                      <svg id="dropdownIcon1" xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 transition-transform duration-300 transform" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                      </svg>
                    </p>
                  </div>
                </button>


                <div id="dropdownMenu1"
                  class="absolute mt-5 w-full bg-[#182430] shadow-lg rounded-xl opacity-0 scale-95 transition-all duration-300 transform origin-top invisible">
                  <a href="#" class="block px-4 py-3 text-white hover:bg-gray-200 text-[18px] font-trebuchet -tracking-[0.02em] font-[400]">Bahasa Indonesia</a>
                  <a href="#" class="block px-4 py-3 text-white hover:bg-gray-200 text-[18px] font-trebuchet -tracking-[0.02em] font-[400]">English</a>
                  <a href="#" class="block px-4 py-3 text-white hover:bg-gray-200 text-[18px] font-trebuchet -tracking-[0.02em] font-[400]">中文</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="border-[1.5px] border-white mt-[48px]"></div>
        <div class="xl:hidden mt-[29px]">
          <div class="grid grid-cols-1 md:grid-cols-2 gap-[44px]">
            <div class="w-full h-auto flex  items-center">
              <img loading="lazy" class="w-[37px] h-[37px] mr-[30px]" src="translate_icon.png" alt="translate icon">
              <div class="relative w-full">

                <button id="dropdownButton2" class="px-[23px] py-[8px] text-white rounded-full border-[1px] border-white w-full">
                  <div class="flex">
                    <p class="grow text-[18px] font-trebuchet -tracking-[0.02em]">Bahasa Indonesia</p>
                    <p class="w-[30px]">
                      <svg id="dropdownIcon2" xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 transition-transform duration-300 transform" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                      </svg>
                    </p>
                  </div>
                </button>


                <div id="dropdownMenu2"
                  class="absolute w-full bottom-full mb-5 bg-[#182430] shadow-lg rounded-xl opacity-0 scale-95 transition-all duration-300 transform origin-bottom invisible">
                  <a href="#" class="block px-4 py-3 text-white hover:bg-gray-200">Bahasa Indonesia</a>
                  <a href="#" class="block px-4 py-3 text-white hover:bg-gray-200">English</a>
                  <a href="#" class="block px-4 py-3 text-white hover:bg-gray-200">中文</a>
                </div>
              </div>
            </div>
          </div>

        </div>
        <h5 class="mt-[48px] text-white">
          @ 2025 PT. Karya Pilar Nusantara
        </h5>
      </div>
    </footer>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script type="text/javascript" src="js/homepage/why_us.js"></script>
  <script type="text/javascript" src="js/homepage/about_us.js"></script>
  <script type="text/javascript" src="js/homepage/top product/top_product.js"></script>
  <script type="text/javascript" src="js/homepage/top product/floating_cube.js"></script>
  <script type="text/javascript" src="js/homepage/top product/rocking_horse.js"></script>
  <script type="text/javascript" src="js/homepage/production_galery.js"></script>
  <script type="text/javascript" src="js/homepage/user_review.js"></script>
  <script defer type="text/javascript">
    // ================= navbar section =================
    const mobileMenu = document.getElementById("mobile-menu");
    const openIcon = document.getElementById("open-menu-icon");
    const closeIcon = document.getElementById("close-menu-icon");

    function toggleMenu() {
      if (mobileMenu.classList.contains("translate-x-full")) {
        // Slide in dari kanan ke kiri
        mobileMenu.classList.remove("translate-x-full");
        mobileMenu.classList.add("translate-x-0");
        openIcon.classList.add("hidden");
        closeIcon.classList.remove("hidden");
      } else {
        // Slide out ke kanan
        mobileMenu.classList.remove("translate-x-0");
        mobileMenu.classList.add("translate-x-full");
        openIcon.classList.remove("hidden");
        closeIcon.classList.add("hidden");
      }
    }
    // ================= end of navbar section =================

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

    // ================= User Review Swiper =================
    var userReviewSwiper = new Swiper(".userReviewSwiper", {
      speed: 850,
      slidesPerView: 1,
      spaceBetween: 40,
      autoplay: {
        delay: 4000,
      },
      loop: true,
      pagination: {
        el: ".user-review-swiper-pagination",
        clickable: true,
      },
      breakpoints: {
        768: {
          slidesPerView: 2,
          spaceBetween: 30,
        },
        1280: {
          slidesPerView: 6,
          enabled: false,
        },
      },
    });

    function nextUserReviewSlides() {
      userReviewSwiper.slideNext();
    }

    function prevUserReviewSlides() {
      userReviewSwiper.slidePrev();
    }
    // ================= End of User Review Swiper =================
  </script>
</body>

</html>
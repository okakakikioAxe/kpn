<!doctype html>
<html lang="en">

<head>
  <?= $this->renderSection('preload') ?>
  <link rel="preload" as="image" href="https://cdn.jsdelivr.net/gh/okakakikioAxe/kpn-storage/base-background.webp"
    type="image/webp">
  <link rel="preload" as="image" href="https://cdn.jsdelivr.net/gh/okakakikioAxe/kpn-storage/whatsapp-icon.webp"
    type="image/webp">
  <link rel="preload" as="image" href="https://cdn.jsdelivr.net/gh/okakakikioAxe/kpn-storage/kpn-white-logo.png"
    type="image/png">
  <link rel="preload" href="/Font/HumanistNormal.woff" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="/Font/HumanistBold.woff" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="/Font/Trebuchet.woff" as="font" type="font/woff2" crossorigin>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="/favicon-kpn.ico">
  <meta name="author" content="PT Karya Pilar Nusantara" />
  <meta name="robots" content="index, nofollow" />
  <html lang="id">
  <meta property="og:type" content="website" />
  <meta property="og:title" content="PT Karya Pilar Nusantara" />
  <meta property="og:description" content="Perusahaan pengadaan produk berbahan HDPE, XPE, TPE, dan mainan anak." />
  <meta property="og:image" content="https://www.karyapilarnusantara.com/kpn-banner.webp" />
  <meta property="og:url" content="https://www.karyapilarnusantara.com" />
  <meta property="og:site_name" content="PT Karya Pilar Nusantara" />
  <?= $this->renderSection('head') ?>
  <link rel="stylesheet" href="css/global_style-v2-minified.css" async>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4" fetchpriority="high"></script>
  <link href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" rel="stylesheet" async />

  <style>
  .nav-link.active {
    border-color: white;
    /* Add border to selected link */
  }
  </style>
  <?= $this->renderSection('style') ?>
</head>

<body class="bg-white h-auto min-h-[100vh]">
  <header>
    <!-- ---------------------------- Nav Bar ------------------------------------- -->
    <nav class="bg-gray-800 fixed top-0 left-0 w-full h-16 z-50 flex justify-center">
      <div class="w-full max-w-[1600px] sm:mx-[25px]">
        <div class="relative flex h-16 items-center justify-between">
          <div class="flex flex-1 items-center sm:items-stretch sm:justify-start">
            <div class="flex shrink-0 items-center ml-[25px] sm:ml-0">
              <img height="32px" width="62.5px" class="h-8 w-auto"
                src="https://cdn.jsdelivr.net/gh/okakakikioAxe/kpn-storage/kpn-white-logo.png" alt="Your Company"
                fetchpriority="high">
            </div>
            <div class="hidden md:ml-6 md:grid grid-cols-4 w-full ">
              <div class="flex space-x-4 col-span-3">
                <a href="/"
                  class="nav-link rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white"
                  data-lang-group="navbar" data-lang-key="homepage">Beranda</a> </a>
                <a href="/product"
                  class="nav-link rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white"
                  data-lang-group="navbar" data-lang-key="product">Produk</a>
                <a href="/contact-us"
                  class="nav-link rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white"
                  data-lang-group="navbar" data-lang-key="contact_us">Hubungi Kami</a>
                <a href="/about-us"
                  class="nav-link rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white"
                  data-lang-group="navbar" data-lang-key="about_us">Tentang Kami</a>
                <a href="/galeri"
                  class="nav-link rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white"
                  data-lang-group="navbar" data-lang-key="gallery">Galery</a>

              </div>
              <div class="flex w-full justify-end col-span-1 relative">
                <button id="dropdownButton1"
                  class="px-[23px] w-auto text-white rounded-full border-[1px] border-white  cursor-pointer">
                  <div class="flex items-center">
                    <p class="grow text-sm font-medium text-gray-300 selected-language">Bahasa Indonesia</p>
                    <p class="w-[30px]">
                      <svg id="dropdownIcon1" xmlns="http://www.w3.org/2000/svg"
                        class="w-8 h-8 transition-transform duration-300 transform" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                          clip-rule="evenodd" />
                      </svg>
                    </p>
                  </div>
                </button>
              </div>
            </div>

          </div>

          <div class="absolute inset-y-0 right-0 flex items-center pr-[25px] md:hidden">
            <button onclick="toggleMenu()" type="button"
              class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:ring-2 focus:ring-white focus:outline-none focus:ring-inset">
              <span class="absolute -inset-0.5"></span>
              <span class="sr-only">Open main menu</span>
              <svg id="open-menu-icon" class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
              </svg>
              <svg id="close-menu-icon" class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
              </svg>
            </button>
          </div>
        </div>
        <div id="dropdownMenu1Container" class="hidden absolute top-18 right-0 w-full h-[200px] justify-center">
          <div class="w-full max-w-[1600px] flex justify-end sm:mx-[25px] ">
            <div id="dropdownMenu1"
              class="w-[200px] h-[150px] bg-[#182430] shadow-lg rounded-xl opacity-100 scale-95 transition-all duration-300 transform invisible">
              <button onclick="updateLanguage('id')"
                class="block px-4 py-3 text-white hover:bg-gray-200 text-start w-full cursor-pointer">Bahasa
                Indonesia</button>
              <button onclick="updateLanguage('en')"
                class="block px-4 py-3 text-white hover:bg-gray-200 text-start w-full cursor-pointer">English</button>
              <button onclick="updateLanguage('cn')"
                class="block px-4 py-3 text-white hover:bg-gray-200 text-start w-full cursor-pointer">中文</button>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <!-- Mobile Menu -->
    <div id="mobile-menu"
      class="fixed top-16 right-0 w-screen h-screen bg-gray-800 shadow-lg md:hidden translate-x-full transition-transform duration-300 overflow-y-auto z-20">
      <div class="space-y-1 px-4 pt-4">
        <a href="/"
          class="nav-link nav-link-mobile block rounded-md px-4 py-3 text-lg font-medium text-gray-300 hover:bg-gray-700 hover:text-white"
          data-lang-group="navbar" data-lang-key="homepage">Beranda</a>
        <a href="/product"
          class="nav-link nav-link-mobile block rounded-md px-4 py-3 text-lg font-medium text-gray-300 hover:bg-gray-700 hover:text-white"
          data-lang-group="navbar" data-lang-key="product">Produk</a>
        <a href="/contact-us"
          class="nav-link nav-link-mobile block rounded-md px-4 py-3 text-lg font-medium text-gray-300 hover:bg-gray-700 hover:text-white"
          data-lang-group="navbar" data-lang-key="contact_us">Hubungi Kami</a>
        <a href="/about-us"
          class="nav-link nav-link-mobile block rounded-md px-4 py-3 text-lg font-medium text-gray-300 hover:bg-gray-700 hover:text-white"
          data-lang-group="navbar" data-lang-key="about_us">Tentang Kami</a>
        <a href="/galeri"
          class="nav-link nav-link-mobile block rounded-md px-4 py-3 text-lg font-medium text-gray-300 hover:bg-gray-700 hover:text-white"
          data-lang-group="navbar" data-lang-key="gallery">Galery</a>
        <div class="relative mt-[40px] w-full h-auto">
          <button id="dropdownButton2"
            class="ml-4 py-1 px-[23px] w-auto text-white rounded-full border-[1px] border-white  cursor-pointer">
            <div class="flex items-center">
              <p class="grow text-sm font-medium text-gray-300 selected-language">Bahasa Indonesia</p>
              <p class="w-[30px]">
                <svg id="dropdownIcon2" xmlns="http://www.w3.org/2000/svg"
                  class="w-8 h-8 transition-transform duration-300 transform" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd"
                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                    clip-rule="evenodd" />
                </svg>
              </p>
            </div>
          </button>

          <div id="dropdownMenu2"
            class=" w-[200px] h-[150px] ml-4 mt-[10px] bg-[#182430] shadow-lg rounded-xl opacity-100 scale-95 transition-all duration-300 transform origin-bottom invisible">
            <button onclick="updateLanguage('id')"
              class="block px-4 py-3 text-white hover:bg-gray-200 text-start w-full cursor-pointer">Bahasa
              Indonesia</button>
            <button onclick="updateLanguage('en')"
              class="block px-4 py-3 text-white hover:bg-gray-200 text-start w-full cursor-pointer">English</button>
            <button onclick="updateLanguage('cn')"
              class="block px-4 py-3 text-white hover:bg-gray-200 text-start w-full cursor-pointer">中文</button>
          </div>
        </div>
      </div>
    </div>

    <!-- ---------------------------- End of Nav Bar ---------------------------- -->
  </header>

  <div style="min-height: 64px;"></div>

  <div class="absolute z-10 w-full bg-white ">
    <main class="bg-container">
      <?= $this->renderSection('content') ?>
    </main>

    <footer class="flex justify-center  bg-[#07172C]">
      <div class="bg-[#07172C] p-[24px] max-w-[1600px]">
        <img loading="lazy" height="56.3px" width="110px" class="w-[110px] h-auto"
          src="https://cdn.jsdelivr.net/gh/okakakikioAxe/kpn-storage/kpn-white-logo.png" alt="Logo KPN warna putih">

        <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-[44px] mt-[46px]">
          <p class="text-start text-white text-[18px] font-humanist-normal tracking-wide" data-lang-group="footer"
            data-lang-key="description">PT Karya Pilar Nusantara adalah perusahaan yang bergerak dalam pengadaan produk
            berbahan HDPE, EVA, TPE, dan XPE di bidang mainan anak, olahraga, dan infrastruktur. Kami menghadirkan
            produk berkualitas premium dengan harga terjangkau, mengutamakan daya tahan, keamanan, dan inovasi untuk
            memenuhi kebutuhan pelanggan dengan solusi terbaik.</p>
          <div class="grid grid-cols-2">
            <div class="grid grid-flow-col grid-rows-4 gap-[22px] sm:justify-center">
              <h3 class="text-white text-[22px] font-trebuchet -tracking-[0.02em] font-[500]" data-lang-group="footer"
                data-lang-key="company">Perusahaan</h3>
              <a class="text-white text-[18px] font-trebuchet -tracking-[0.02em] font-extralight" href="/about-us"
                data-lang-group="footer" data-lang-key="about">Tentang</a>
              <a class="text-white text-[18px] font-trebuchet -tracking-[0.02em] font-extralight" href="/product"
                data-lang-group="footer" data-lang-key="product">Produk</a>
              <a class="text-white text-[18px] font-trebuchet -tracking-[0.02em] font-extralight" href="/galeri"
                data-lang-group="footer" data-lang-key="gallery">Galeri</a>
            </div>
            <div class="grid grid-flow-col grid-rows-4 gap-[22px] sm:justify-center">
              <h3 class="text-white text-[22px] font-trebuchet -tracking-[0.02em] font-[500]" data-lang-group="footer"
                data-lang-key="contact_us">Hubungi Kami</h3>
              <a class="text-white text-[18px] font-trebuchet -tracking-[0.02em] font-extralight" href="/contact-us"
                data-lang-group="footer" data-lang-key="contact">Kontak</a>
            </div>
          </div>
          <div class="hidden xl:block w-full h-[30px] ">
            <div class="w-full h-auto flex  items-center">
              <img loading="lazy" class="w-[37px] h-[37px] mr-[30px]" src="translate_icon.png" alt="translate icon">
              <div class="relative w-full">

                <button id="dropdownButton3"
                  class="px-[23px] py-[8px] text-white rounded-full border-[1px] border-white w-full  cursor-pointer">
                  <div class="flex">
                    <p class="grow text-[18px] font-trebuchet -tracking-[0.02em] selected-language">Bahasa Indonesia</p>
                    <p class="w-[30px]">
                      <svg id="dropdownIcon3" xmlns="http://www.w3.org/2000/svg"
                        class="w-8 h-8 transition-transform duration-300 transform" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                          clip-rule="evenodd" />
                      </svg>
                    </p>
                  </div>
                </button>

                <div id="dropdownMenu3"
                  class="absolute mt-5 w-full bg-[#182430] shadow-lg rounded-xl opacity-0 scale-95 transition-all duration-300 transform origin-top invisible">
                  <button onclick="updateLanguage('id')"
                    class="block px-4 py-3 text-white hover:bg-gray-200 text-[18px] font-trebuchet -tracking-[0.02em] font-[400] text-start w-full cursor-pointer">Bahasa
                    Indonesia</button>
                  <button onclick="updateLanguage('en')"
                    class="block px-4 py-3 text-white hover:bg-gray-200 text-[18px] font-trebuchet -tracking-[0.02em] font-[400] text-start w-full cursor-pointer">English</button>
                  <button onclick="updateLanguage('cn')"
                    class="block px-4 py-3 text-white hover:bg-gray-200 text-[18px] font-trebuchet -tracking-[0.02em] font-[400] text-start w-full cursor-pointer">中文</button>
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

                <button id="dropdownButton4"
                  class="px-[23px] py-[8px] text-white rounded-full border-[1px] border-white w-full  cursor-pointer">
                  <div class="flex">
                    <p class="grow text-[18px] font-trebuchet -tracking-[0.02em] selected-language">Bahasa Indonesia</p>
                    <p class="w-[30px]">
                      <svg id="dropdownIcon4" xmlns="http://www.w3.org/2000/svg"
                        class="w-8 h-8 transition-transform duration-300 transform" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                          clip-rule="evenodd" />
                      </svg>
                    </p>
                  </div>
                </button>


                <div id="dropdownMenu4"
                  class="absolute w-full bottom-full mb-5 bg-[#182430] shadow-lg rounded-xl opacity-0 scale-95 transition-all duration-300 transform origin-bottom invisible">
                  <button onclick="updateLanguage('id')"
                    class="block px-4 py-3 text-white hover:bg-gray-200 text-start w-full cursor-pointer">Bahasa
                    Indonesia</button>
                  <button onclick="updateLanguage('en')"
                    class="block px-4 py-3 text-white hover:bg-gray-200 text-start w-full cursor-pointer">English</button>
                  <button onclick="updateLanguage('cn')"
                    class="block px-4 py-3 text-white hover:bg-gray-200 text-start w-full cursor-pointer">中文</button>
                </div>
              </div>
            </div>
          </div>

        </div>
        <p class="mt-[48px] text-white">
          @ 2025 PT. Karya Pilar Nusantara
        </p>
      </div>
    </footer>
  </div>

  <div id="waButton" class="fixed bottom-5 right-5 z-50">

    <div
      class="absolute -top-16 right-0 flex items-center bg-white rounded-xl shadow-xl px-4 py-3 border border-gray-100 whitespace-nowrap after:content-[''] after:absolute after:right-6 after:-bottom-2 after:w-4 after:h-4 after:bg-white after:border-r after:border-b after:border-gray-100 after:rotate-45">
      <span class="text-sm font-semibold text-gray-800">
        💬 Hubungi Kami
      </span>
    </div>

    <a href="https://wa.me/6282160050005" target="_blank"
      class="flex items-center justify-center w-20 h-20 bg-[#25D366] rounded-full shadow-xl hover:scale-110 transition-all duration-300">

      <img src="https://cdn.jsdelivr.net/gh/okakakikioAxe/kpn-storage/whatsapp-icon.webp" class="w-10 h-10"
        alt="WhatsApp">
    </a>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


  <?= $this->renderSection('script') ?>
  <script defer type="text/javascript" src="/js/template-minified.js"></script>
  <script defer type="text/javascript" src="/js/translation-v4-minified.js"></script>

</body>

</html>
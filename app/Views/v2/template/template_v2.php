<!doctype html>
<html>

<head>
    <?= $this->renderSection('preload') ?>
    <link rel="preload" as="image" href="https://cdn.jsdelivr.net/gh/okakakikioAxe/kpn-storage/kpn-white-logo.png"
        type="image/png">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="/kpn-icon.ico">
    <meta name="author" content="PT Karya Pilar Nusantara" />
    <meta name="robots" content="<?= esc($robot_index ?? 'index') ?>, follow" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="PT Karya Pilar Nusantara" />
    <meta property="og:description"
        content="<?= esc($og_description ?? 'Perusahaan pengadaan barang mulai dari alat camping, olahraga hingga infrastruktur') ?>" />
    <meta property="og:image" content="https://www.karyapilarnusantara.com/kpn-banner.webp" />
    <meta property="og:url" content="https://www.karyapilarnusantara.com" />
    <meta property="og:site_name" content="PT Karya Pilar Nusantara" />

    <?= $this->renderSection('header') ?>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4" fetchpriority="high"></script>


    <link rel="stylesheet" href="/css/button_style.css">
    <link rel="stylesheet" href="/css/text_style.css">
    <link rel="stylesheet" href="/css/custom_font.css">

    <style>
        html {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        body {
            text-rendering: optimizeLegibility;
        }

        .nav-link {

            text-decoration: none;
            transition: color 0.3s ease;
            font-family: 'Roboto', sans-serif;
            font-weight: 500;
            font-size: 16px;
            word-spacing: 7%;
        }

        .nav-link:hover {
            color: #c0c0c0;
        }

        .nav-link.active {
            color: #c0c0c0;
            font-weight: bold;
        }
    </style>
    <style type="text/tailwindcss">
        @layer utilities {
        @media (min-width: 1700px) {
            .max-w-3xl-custom {
                max-width: 1400px;
            }
        }
    }
    </style>

    <?= $this->renderSection('style') ?>
    <?= $this->renderSection('header-script') ?>
</head>

<body class="bg-white">
    <!-- navbar -->
    <nav id="main-navbar" class="transition-all duration-300 transform fixed top-0 left-0 w-screen z-99 text-white  ">
        <div class="absolute top-0 left-0 w-full h-full z-10 blur-3xl"></div>
        <div id="desktop-navbar"
            class="hidden lg:flex max-w-[1200px] max-w-3xl-custom mx-auto py-[20px] md:px-15 xl:px-[0px] items-center justify-between relative z-20 ">
            <a href="/">
                <div class="flex items-center">
                    <div>
                        <img class="w-auto h-[30px] mr-[20px] logo-navbar" src="/images/white-logo-no-text-high-res.png"
                            alt="logo kpn putih" width="60" height="30">
                    </div>
                    <span class=" roboto-bold text-[16px] tracking-wide hidden xl:flex">PT Karya Pilar Nusantara</span>
                </div>
            </a>
            <div class="flex">
                <ul class="flex items-center justify-center space-x-8 ">
                    <li>
                        <a href="<?= esc($homepage_link ?? '/') ?>" class="nav-link">
                            <?= esc($homepage_link_title ?? 'Beranda') ?>
                        </a>
                    </li>
                    <!-- MENU PRODUK DENGAN DROPDOWN -->
                    <li class="relative group">
                        <a href="<?= esc($product_link ?? '/product') ?>" class="nav-link inline-flex items-center">
                            <?= esc($product_link_title ?? 'Produk') ?>
                            <!-- panah kecil -->
                            <svg class="w-4 h-4 ml-1 transition-transform duration-200 group-hover:rotate-180"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </a>
                        <!-- dropdown -->
                        <ul
                            class="absolute left-0 w-48  opacity-0 group-hover:opacity-100 invisible group-hover:visible transition-all duration-200">
                            <!-- All Products -->
                            <div id="desktop-product-dropdown" class="mt-[30px] bg-black/40 rounded">

                                <li>
                                    <a href="<?= esc($product_link ?? '/product') ?>"
                                        class="block px-4 py-2 rounded hover:bg-gray-100 ">
                                        <?=
                                        (strpos($_SERVER['REQUEST_URI'], '/en/') !== false)
                                            ? 'All Products'
                                            : ((strpos($_SERVER['REQUEST_URI'], '/cn/') !== false)
                                                ? '所有产品'
                                                : 'Semua Produk')
                                        ?>
                                    </a>
                                </li>
                                <div class="border-b-1 border-gray-200"></div>

                                <!-- Loop kategori -->
                                <?php if (! empty($categories)): ?>
                                    <?php foreach ($categories as $cat): ?>
                                        <li>
                                            <a href="<?= site_url((strpos($_SERVER['REQUEST_URI'], '/en/') !== false)
                                                            ? 'en/product-category/'
                                                            : ((strpos($_SERVER['REQUEST_URI'], '/cn/') !== false)
                                                                ? 'cn/product-category/'
                                                                : 'product-category/') . esc($cat['slug'])) ?>"
                                                class="block px-4 py-2 rounded hover:bg-gray-100">
                                                <?= esc($cat['title']) ?>
                                            </a>
                                        </li>
                                    <?php endforeach; ?>

                                <?php endif; ?>
                            </div>
                        </ul>
                    </li>
                    <!-- AKHIR MENU PRODUK -->
                    <li>
                        <a href="<?= esc($about_us_link ?? '/about-us') ?>" class="nav-link">
                            <?= esc($about_us_link_title ?? 'Tentang Kami') ?>
                        </a>
                    </li>
                    <li>
                        <a href="<?= esc($contact_us_link ?? '/contact-us') ?>" class="nav-link">
                            <?= esc($contact_us_link_title ?? 'Hubungi Kami') ?>
                        </a>
                    </li>
                    <li>
                        <a href="<?= esc($gallery_link ?? '/galeri') ?>" class="nav-link">
                            <?= esc($gallery_link_title ?? 'Galeri') ?>
                        </a>
                    </li>
                </ul>
            </div>
            <div id="navbar-language-border"
                class="h-[41px] rounded-[30px] items-center justify-center  border-1 border-white flex">
                <div class="relative inline-block text-left dropdown">
                    <div id="dropdown-selected" class="cursor-pointer nav-link ">
                        <div class="flex w-full h-full items-center space-x-9">

                            <span class="nav-link px-[21px] language-button">Bahasa Indonesia</span>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                version="1.1" x="0px" y="0px" viewBox="0 0 512 512"
                                style="enable-background:new 0 0 512 512;" xml:space="preserve" width="32" height="32"
                                fill="white" class="w-[25px] h-[25px] mr-[21px]" id="navbar-language-icon">
                                <g>
                                    <g>
                                        <polygon points="138.71,137 132.29,137 120.293,197 150.707,197   "></polygon>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M381.374,257c6.477,17.399,15.092,31.483,24.626,43.467c9.534-11.984,19.149-26.069,25.626-43.467H381.374z">
                                        </path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M467,91H280.717l38.842,311.679c0.687,12.748-2.798,24.75-11.118,34.146L242.663,512H467c24.814,0,45-20.186,45-45V137    C512,112.186,491.814,91,467,91z M467,257h-4.006c-8.535,27.383-22.07,48.81-36.136,65.702    c11.019,10.074,22.802,18.338,34.517,27.594c6.46,5.171,7.515,14.604,2.329,21.079c-5.162,6.465-14.632,7.513-21.079,2.329    c-12.729-10.047-24.677-18.457-36.625-29.421c-11.948,10.964-22.896,19.374-35.625,29.421c-6.447,5.184-15.917,4.136-21.079-2.329    c-5.186-6.475-4.131-15.908,2.329-21.079c11.715-9.256,22.498-17.52,33.517-27.594c-14.066-16.891-26.602-38.318-35.136-65.702    H346c-8.291,0-15-6.709-15-15s6.709-15,15-15h45v-15c0-8.291,6.709-15,15-15c8.291,0,15,6.709,15,15v15h46c8.291,0,15,6.709,15,15    S475.291,257,467,257z">
                                        </path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M244.164,39.419C241.366,16.948,222.162,0,199.516,0H45C20.186,0,0,20.186,0,45v332c0,24.814,20.186,45,45,45    c89.67,0,154.177,0,236.551,0c4.376-5.002,8.044-8.134,8.199-14.663C289.788,405.7,244.367,41.043,244.164,39.419z     M183.944,286.707c-7.954,1.637-16.011-3.527-17.651-11.763L156.706,227h-42.411l-9.587,47.944    c-1.611,8.115-9.434,13.447-17.651,11.763c-8.115-1.626-13.389-9.521-11.763-17.651l29.999-150    C106.699,112.054,112.852,107,120,107h31c7.148,0,13.301,5.054,14.707,12.056l30,150    C197.333,277.186,192.06,285.081,183.944,286.707z">
                                        </path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M175.261,452l2.574,20.581c1.716,13.783,10.874,27.838,25.938,34.856c28.428-31.294,11.229-12.362,50.359-55.437H175.261z    ">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <div class="dropdown-content absolute hidden w-full z-10 pt-3">
                            <div class="bg-white rounded-md w-auto text-gray-800 text-[16px]">
                                <div class="px-[21px] py-2 rounded-md cursor-pointer hover:bg-gray-100 language-option"
                                    data-lang='id'>Bahasa Indonesia
                                </div>
                                <div class="px-[21px] py-2 rounded-md cursor-pointer hover:bg-gray-100 language-option"
                                    data-lang='en'>English</div>
                                <div class="px-[21px] py-2 rounded-md cursor-pointer hover:bg-gray-100 language-option"
                                    data-lang='cn'>普通话</div>
                            </div>
                        </div>
                    </div>
                    <!-- Custom dropdown trigger -->
                </div>
            </div>
        </div>
        <div id="mobile-navbar"
            class="h-[60px] w-full px-5 md:px-15 flex justify-between items-center  lg:hidden relative z-99">
            <a href="/">
                <div class="flex items-center">
                    <div>
                        <img class="w-auto h-[30px] mr-[20px] logo-navbar" src="/images/white-logo-no-text-high-res.png"
                            alt="logo kpn putih" width="60" height="30">
                    </div>
                    <div>
                        <span class="roboto-bold text-[16px] tracking-wide">PT Karya</span>
                        <span class="roboto-bold text-[16px] tracking-wide">Pilar</span>
                        <span class="roboto-bold text-[16px] tracking-wide">Nusantara</span>
                    </div>
                </div>
            </a>
            <div class="flex items-center">
                <button id="hamburger-btn">
                    <?= view('components/icons/hamburger', ['class' => 'logo-navbar fill-white']) ?>
                </button>
            </div>
        </div>

        <!-- Hidden mobile menu -->
        <div id="mobile-menu"
            class="fixed top-[60px] left-0 w-full h-0 overflow-hidden bg-white transition-all duration-500 ease-in-out z-95">
            <ul
                class="flex flex-col items-start justify-center space-y-4 text-[18px] text-gray-700 roboto-bold p-5 pt-[40px] md:px-15">
                <li>
                    <a href="<?= esc($homepage_link ?? '/') ?>">
                        <?= esc($homepage_link_title ?? 'Beranda') ?>
                    </a>
                </li>
                <!-- START: Mobile Produk Dropdown -->
                <li class="relative">
                    <div id="mobile-product-trigger"
                        class="flex justify-between items-center w-full nav-link cursor-pointer">
                        <span
                            class="text-[18px] text-gray-700 roboto-bold"><?= esc($product_link_title ?? 'Produk') ?></span>
                        <svg id="mobile-product-icon" xmlns="http://www.w3.org/2000/svg"
                            class="w-5 h-5 transform transition-transform duration-200" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </div>

                    <ul id="mobile-product-dropdown"
                        class="hidden flex-col space-y-1 pl-4 mt-2 ubuntu-regular text-[16px]">
                        <li>
                            <a href="<?= esc($product_link ?? '/product') ?>"
                                class="block px-4 py-1 rounded hover:bg-gray-100">
                                <?=
                                (strpos($_SERVER['REQUEST_URI'], '/en/') !== false)
                                    ? 'All Products'
                                    : ((strpos($_SERVER['REQUEST_URI'], '/cn/') !== false)
                                        ? '所有产品'
                                        : 'Semua Produk')
                                ?>
                            </a>
                        </li>

                        <?php if (! empty($categories)): ?>
                            <?php foreach ($categories as $cat): ?>
                                <li>
                                    <a href="<?= site_url((strpos($_SERVER['REQUEST_URI'], '/en/') !== false)
                                                    ? 'en/product-category/'
                                                    : ((strpos($_SERVER['REQUEST_URI'], '/cn/') !== false)
                                                        ? 'cn/product-category/'
                                                        : 'product-category/') . esc($cat['slug'])) ?>"
                                        class="block px-4 py-1 rounded hover:bg-gray-100">
                                        <?= esc($cat['title']) ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </ul>
                </li>
                <!-- END: Mobile Produk Dropdown -->
                <li>
                    <a href="<?= esc($about_us_link ?? '/about-us') ?>">
                        <?= esc($about_us_link_title ?? 'Tentang Kami') ?>
                    </a>
                </li>
                <li>
                    <a href="<?= esc($contact_us_link ?? '/contact-us') ?>">
                        <?= esc($contact_us_link_title ?? 'Hubungi Kami') ?>
                    </a>
                </li>
                <li>
                    <a href="<?= esc($gallery_link ?? '/galeri') ?>">
                        <?= esc($gallery_link_title ?? 'Galeri') ?>
                    </a>
                </li>
                <div id="navbar-language-border-mobile"
                    class="h-[41px] mt-[40px] rounded-[30px] items-center justify-center border-1 border-gray-700 flex">
                    <div class="relative inline-block text-left dropdown ">
                        <div id="dropdown-selected-mobile" class="nav-link px-[21px] ">
                            <div class="flex w-full h-full items-center space-x-9">

                                <span class="roboto-bold text-[16px] text-gray-700 language-button">
                                    Bahasa Indonesia
                                </span>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    version="1.1" x="0px" y="0px" viewBox="0 0 512 512"
                                    style="enable-background:new 0 0 512 512;" xml:space="preserve" width="32"
                                    height="32" class="fill-gray-700" class="w-[25px] h-[25px]"
                                    id="navbar-language-icon-mobile">
                                    <g>
                                        <g>
                                            <polygon points="138.71,137 132.29,137 120.293,197 150.707,197   ">
                                            </polygon>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path
                                                d="M381.374,257c6.477,17.399,15.092,31.483,24.626,43.467c9.534-11.984,19.149-26.069,25.626-43.467H381.374z">
                                            </path>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path
                                                d="M467,91H280.717l38.842,311.679c0.687,12.748-2.798,24.75-11.118,34.146L242.663,512H467c24.814,0,45-20.186,45-45V137    C512,112.186,491.814,91,467,91z M467,257h-4.006c-8.535,27.383-22.07,48.81-36.136,65.702    c11.019,10.074,22.802,18.338,34.517,27.594c6.46,5.171,7.515,14.604,2.329,21.079c-5.162,6.465-14.632,7.513-21.079,2.329    c-12.729-10.047-24.677-18.457-36.625-29.421c-11.948,10.964-22.896,19.374-35.625,29.421c-6.447,5.184-15.917,4.136-21.079-2.329    c-5.186-6.475-4.131-15.908,2.329-21.079c11.715-9.256,22.498-17.52,33.517-27.594c-14.066-16.891-26.602-38.318-35.136-65.702    H346c-8.291,0-15-6.709-15-15s6.709-15,15-15h45v-15c0-8.291,6.709-15,15-15c8.291,0,15,6.709,15,15v15h46c8.291,0,15,6.709,15,15    S475.291,257,467,257z">
                                            </path>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path
                                                d="M244.164,39.419C241.366,16.948,222.162,0,199.516,0H45C20.186,0,0,20.186,0,45v332c0,24.814,20.186,45,45,45    c89.67,0,154.177,0,236.551,0c4.376-5.002,8.044-8.134,8.199-14.663C289.788,405.7,244.367,41.043,244.164,39.419z     M183.944,286.707c-7.954,1.637-16.011-3.527-17.651-11.763L156.706,227h-42.411l-9.587,47.944    c-1.611,8.115-9.434,13.447-17.651,11.763c-8.115-1.626-13.389-9.521-11.763-17.651l29.999-150    C106.699,112.054,112.852,107,120,107h31c7.148,0,13.301,5.054,14.707,12.056l30,150    C197.333,277.186,192.06,285.081,183.944,286.707z">
                                            </path>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path
                                                d="M175.261,452l2.574,20.581c1.716,13.783,10.874,27.838,25.938,34.856c28.428-31.294,11.229-12.362,50.359-55.437H175.261z    ">
                                            </path>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <div id="dropdown-content-mobile" class="hidden absolute top-[32px] w-full z-100 pt-3 ">
                            <div
                                class="bg-white w-auto text-gray-700 text-[16px] border-1 border-gray-300 rounded-[10px]">
                                <div class="p-2 rounded-md cursor-pointer hover:bg-gray-100 language-option"
                                    data-lang='id'>Bahasa Indonesia</div>
                                <div class="p-2 rounded-md cursor-pointer hover:bg-gray-100 language-option"
                                    data-lang='en'>English</div>
                                <div class="p-2 rounded-md cursor-pointer hover:bg-gray-100 language-option"
                                    data-lang='cn'>普通话</div>
                            </div>
                        </div>
                        <!-- Custom dropdown trigger -->
                    </div>
                </div>
            </ul>
        </div>
    </nav>
    <?= $this->renderSection('content') ?>
    <!-- footer  -->
    <section id="footer-section">
        <div
            class=" py-[30px] w-full bg-gray-700 flex items-center justify-center px-5 md:px-15 text-white/85 flex-col relative">
            <div
                class="grid grid-cols-1 sm:grid-cols-10 md:grid-cols-10 gap-x-10 gap-y-10 w-full h-full max-w-[1200px] max-w-3xl-custom relative mb-[20px]">
                <div class=" sm:col-span-6 flex flex-col items-start justify-start w-full h-full ">
                    <div class="mb-[15px]">
                        <h3 class="ubuntu-bold">PT KARYA PILAR NUSANTARA</h3>
                    </div>
                    <div>
                        <p class="open-sans-regular text-[14px]">
                            <?= esc($footer_description ?? 'PT. Karya Pilar Nusantara adalah perusahaan terpercaya yang berfokus pada pengadaan berbagai kebutuhan instansi dan dunia usaha. Kami berkomitmmen memberikan produk berkualitas, layanan profesional, dan solusi pengadaan yang efisien. Kami siap mendukung kesuksesan bisnis Anda dengan produk lengkap dan layanan terbaik.') ?>
                        </p>
                    </div>
                </div>
                <div class="  sm:col-span-2 w-full h-full ">
                    <div class="flex flex-col gap-y-[10px]">
                        <h3 class="ubuntu-bold text-[16px] mb-[5px]"><?= esc($footer_company_title ?? 'Perusahaan') ?>
                        </h3>
                        <a href="<?= esc($about_us_link ?? '/about-us') ?>"><span
                                class="roboto-regular text-[14px] cursor-pointer"><?= esc($about_us_2_link_title ?? 'Tentang') ?></span></a>
                        <a href="<?= esc($product_link ?? '/product') ?>"><span
                                class="roboto-regular text-[14px] cursor-pointer"><?= esc($product_link_title ?? 'Produk') ?></span></a>
                        <a href="<?= esc($gallery_link ?? '/galeri') ?>"><span
                                class="roboto-regular text-[14px] cursor-pointer"><?= esc($gallery_link_title ?? 'Galeri') ?></span></a>
                    </div>
                </div>
                <div class=" sm:col-span-2 w-full h-full ">
                    <div class="flex flex-col gap-y-[10px]">
                        <h3 class="ubuntu-bold text-[16px] mb-[5px]">
                            <?= esc($contact_us_link_title ?? 'Hubungi Kami') ?></h3>
                        <a href="<?= esc($contact_us_link ?? '/contact-us') ?>"><span
                                class="roboto-regular text-[14px] cursor-pointer"><?= esc($contact_us_2_link_title ?? 'Kontak') ?></span></a>
                    </div>
                </div>
            </div>
            <div class="w-full flex">
                <div class="h-[1px] bg-[#c3c3c3] w-full"></div>
            </div>
            <div class="flex items-start justify-center w-full">
                <p class="ubuntu-regular text-[10px] pt-[25px] text-start">2025 PT KARYA PILAR NUSANTARA</p>
            </div>
        </div>
    </section>

    <!-- sticky WA button -->
    <div id="waButton" class="z-80 sticky bottom-[45px] h-[0] w-full flex justify-end items-end">
        <a href="https://api.whatsapp.com/send?phone=6282160050005&text=Halo%20saya%20butuh%20info">
            <div
                class="h-[60px] lg:h-[70px] aspect-square rounded-full bg-green-500 mr-[20px] flex items-center justify-center cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                    id="Capa_1" x="0px" y="0px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;"
                    xml:space="preserve" width="22" height="22" fill="white" class="w-[30px] lg:w-[35px] h-auto">
                    <g id="WA_Logo">
                        <g>
                            <path style="fill-rule:evenodd;clip-rule:evenodd;"
                                d="M20.463,3.488C18.217,1.24,15.231,0.001,12.05,0 C5.495,0,0.16,5.334,0.157,11.892c-0.001,2.096,0.547,4.142,1.588,5.946L0.057,24l6.304-1.654    c1.737,0.948,3.693,1.447,5.683,1.448h0.005c6.554,0,11.89-5.335,11.893-11.893C23.944,8.724,22.708,5.735,20.463,3.488z     M12.05,21.785h-0.004c-1.774,0-3.513-0.477-5.031-1.378l-0.361-0.214l-3.741,0.981l0.999-3.648l-0.235-0.374    c-0.99-1.574-1.512-3.393-1.511-5.26c0.002-5.45,4.437-9.884,9.889-9.884c2.64,0,5.122,1.03,6.988,2.898    c1.866,1.869,2.893,4.352,2.892,6.993C21.932,17.351,17.498,21.785,12.05,21.785z M17.472,14.382    c-0.297-0.149-1.758-0.868-2.031-0.967c-0.272-0.099-0.47-0.149-0.669,0.148s-0.767,0.967-0.941,1.166    c-0.173,0.198-0.347,0.223-0.644,0.074c-0.297-0.149-1.255-0.462-2.39-1.475c-0.883-0.788-1.48-1.761-1.653-2.059    s-0.018-0.458,0.13-0.606c0.134-0.133,0.297-0.347,0.446-0.521C9.87,9.97,9.919,9.846,10.019,9.647    c0.099-0.198,0.05-0.372-0.025-0.521C9.919,8.978,9.325,7.515,9.078,6.92c-0.241-0.58-0.486-0.501-0.669-0.51    C8.236,6.401,8.038,6.4,7.839,6.4c-0.198,0-0.52,0.074-0.792,0.372c-0.272,0.298-1.04,1.017-1.04,2.479    c0,1.463,1.065,2.876,1.213,3.074c0.148,0.198,2.095,3.2,5.076,4.487c0.709,0.306,1.263,0.489,1.694,0.626    c0.712,0.226,1.36,0.194,1.872,0.118c0.571-0.085,1.758-0.719,2.006-1.413c0.248-0.694,0.248-1.29,0.173-1.413    C17.967,14.605,17.769,14.531,17.472,14.382z">
                            </path>
                        </g>
                    </g>
                </svg>
            </div>
        </a>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const prodTrigger = document.getElementById('mobile-product-trigger');
            const prodDropdown = document.getElementById('mobile-product-dropdown');
            const prodIcon = document.getElementById('mobile-product-icon');

            // Toggle dropdown Produk
            prodTrigger.addEventListener('click', e => {
                e.stopPropagation();
                prodDropdown.classList.toggle('hidden');
                prodIcon.classList.toggle('rotate-180');
            });

            // Klik di luar: tutup dropdown
            document.addEventListener('click', e => {
                if (!prodTrigger.contains(e.target) && !prodDropdown.contains(e.target)) {
                    prodDropdown.classList.add('hidden');
                    prodIcon.classList.remove('rotate-180');
                }
            });
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const languageButton = document.querySelectorAll(".language-button");
            if (!languageButton) return;

            const currentUrl = window.location.href;

            if (currentUrl.includes("/en")) {
                languageButton.forEach(el => {
                    el.textContent = 'English';
                });
            } else if (currentUrl.includes("/cn")) {
                languageButton.forEach(el => {
                    el.textContent = '普通话';
                });
            } else {
                languageButton.forEach(el => {
                    el.textContent = 'Bahasa Indonesia';
                });
            }
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const languageOptions = document.querySelectorAll(".language-option");

            languageOptions.forEach(option => {
                option.addEventListener("click", () => {
                    const selectedLang = option.getAttribute("data-lang");
                    const currentUrl = window.location.href;
                    const pathname = window.location.pathname;
                    const origin = window.location.origin;

                    const parts = pathname.split('/').filter(Boolean);

                    // Known language codes
                    const langCodes = ['id', 'en', 'cn'];

                    // Remove current language code if present
                    if (langCodes.includes(parts[0])) {
                        parts.shift();
                    }

                    // Only prepend selectedLang if not "id"
                    if (selectedLang !== 'id') {
                        parts.unshift(selectedLang);
                    }

                    // Rebuild and redirect
                    const newPath = '/' + parts.join('/');
                    const newUrl = origin + newPath + window.location.search;

                    window.location.href = newUrl;
                });
            });
        });
    </script>




    <script>
        let isInTop = true;

        // hide navbar when scroll down
        let lastScrollY = window.scrollY;

        // Navbar show/hide saat scroll
        window.addEventListener('scroll', () => {
            const currentScrollY = window.scrollY;

            if (currentScrollY > lastScrollY && currentScrollY > 80) {
                // Scroll down → hide navbar
                navbar.classList.add('-translate-y-full');
            } else {
                // Scroll up → show navbar
                navbar.classList.remove('-translate-y-full');
            }

            lastScrollY = currentScrollY;
        });
        // ============================
    </script>
    <script>
        const mainNavbar = document.getElementById('main-navbar');
        const hamburgerBtn = document.getElementById('hamburger-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        let isOpen = false;
        let isHomepage = false;


        hamburgerBtn.addEventListener('click', () => {
            if (!isOpen) {
                mobileMenu.classList.replace('h-0', 'h-auto');
                mobileMenu.classList.add('h-[400px]');
                document.body.classList.add('overflow-hidden');
                mainNavbar.classList.add('bg-white');
                mainNavbar.classList.replace('text-white', 'text-gray-700');
                document.querySelectorAll('.logo-navbar').forEach(el => {
                    el.classList.add('invert', 'brightness-75');
                });
                setTimeout(() => {
                    document.getElementById('mobile-menu').classList.remove('overflow-hidden');
                }, 300);
                isOpen = true;
            } else {
                // cek apakah berada masih berada di observer
                // jika masih, tutup seperti default
                mobileMenu.classList.remove('h-[400px]');
                mobileMenu.classList.replace('h-auto', 'h-0');
                document.body.classList.remove('overflow-hidden');
                if (isInTop == true) {
                    mainNavbar.classList.remove('bg-white');
                    if (isHomepage) {
                        mainNavbar.classList.replace('text-gray-700', 'text-white');
                        document.querySelectorAll('.logo-navbar').forEach(el => {
                            el.classList.remove('invert', 'brightness-75');
                        });
                    }

                } else {
                    // jika tidak, tutup seperti di tengah
                    mainNavbar.classList.add('bg-white');
                    mainNavbar.classList.replace('text-white', 'text-gray-700');
                    document.querySelectorAll('.logo-navbar').forEach(el => {
                        el.classList.add('invert', 'brightness-75');
                    });

                }
                document.getElementById('mobile-menu').classList.add('overflow-hidden');
                isOpen = false;
            }
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const trigger = document.getElementById('dropdown-selected');
            const content = trigger.querySelector('.dropdown-content');

            const triggerMobile = document.getElementById('dropdown-selected-mobile');
            const contentMobile = document.getElementById('dropdown-content-mobile');

            trigger.addEventListener('click', (e) => {
                e.stopPropagation();
                content.classList.toggle('hidden');
            });

            triggerMobile.addEventListener('click', (e) => {
                e.stopPropagation();
                contentMobile.classList.toggle('hidden');
            });

            document.addEventListener('click', () => {
                content.classList.add('hidden');
                contentMobile.classList.add('hidden');
            });
        });
    </script>
    <?= $this->renderSection('body-script') ?>
</body>
<?= $this->renderSection('script') ?>


</html>
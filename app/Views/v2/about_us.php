<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>About Us</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet">
    <!-- <script type="module" src="http://[::1]:5173/@vite/client"></script><link rel="stylesheet" href="http://[::1]:5173/resources/css/app.css"><script type="module" src="http://[::1]:5173/resources/js/app.js"></script>    <link rel="stylesheet" href="/css/custom_font.css"> -->
    <link rel="stylesheet" href="/css/button_style.css">
    <link rel="stylesheet" href="/css/text_style.css">
    <link rel="stylesheet" href="/css/custom_font.css">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style>
        html {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        body {
            text-rendering: optimizeLegibility;
        }
    </style>
    <style>
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
    <style>
        @keyframes drop {
            0% {
                top: -1.5rem;

            }

            30% {
                opacity: 1;
            }

            100% {
                top: 100%;
            }
        }

        .drop-line {
            animation: drop 1.2s infinite ease-in-out;
        }

        .dot-map {
            width: 900px;
            aspect-ratio: 3 / 2;
            display: grid;
            grid-template-columns: repeat(65, 1fr);
            /* sesuaikan dengan maxX */
            grid-template-rows: repeat(55, 1fr);
            /* sesuaikan dengan maxY */
            gap: 2px;
        }

        .dot {
            width: 5px;
            height: 5px;
            border-radius: 50%;
            background: purple;
            opacity: 0;
            transition: transform 0.3s, opacity 0.3s;
        }

        .dot.active {
            opacity: 1;
        }

        .dot:hover {
            transform: scale(1.5);
            animation: wave 0.6s ease-out;
        }

        @keyframes wave {
            0% {
                transform: scale(1.5);
                opacity: 1;
            }

            50% {
                transform: scale(1);
                opacity: 0.7;
            }

            100% {
                transform: scale(1.2);
                opacity: 1;
            }
        }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
</head>

<body class="max-w-screen">
    <!-- Sticky Navbar -->
    <nav id="main-navbar" class="transition-all duration-300 transform fixed top-0 left-0 w-screen z-99 text-white">
        <div class="absolute top-0 left-0 w-full h-full z-10 blur-3xl"></div>
        <div id="desktop-navbar"
            class="hidden xl:flex max-w-[1400px] mx-auto py-[20px] items-center justify-between relative z-20">
            <div class="flex items-center">
                <div>
                    <img id="logo-navbar" class="w-auto h-[30px] mr-[20px]"
                        src="/images/white-logo-no-text-high-res.png" alt="logo kpn putih" width="60" height="30">
                </div>
                <span class="roboto-bold text-[16px] tracking-wide">PT KARYA PILAR NUSANTARA</span>
            </div>
            <div class="flex">
                <ul class="flex items-center justify-center space-x-8 ">
                    <li>
                        <a href="#section-hero" class="nav-link">
                            Beranda
                        </a>
                    </li>
                    <li>
                        <a href="/product" class="nav-link">
                            Produk
                        </a>
                    </li>
                    <li>
                        <a href="#section-contact" class="nav-link">
                            Tentang Kami
                        </a>
                    </li>
                    <li>
                        <a href="#section-contact" class="nav-link">
                            Hubungi Kami
                        </a>
                    </li>
                    <li>
                        <a href="#section-contact" class="nav-link">
                            Galeri
                        </a>
                    </li>
                </ul>

            </div>
            <div id="navbar-language-border"
                class="h-[41px] rounded-[30px] flex items-center justify-center border-1 border-white">
                <div class="relative inline-block text-left dropdown ">
                    <div id="dropdown-selected" class="cursor-pointer nav-link px-[21px] ">
                        <div class="flex w-full h-full items-center space-x-9">

                            <span class="nav-link">Bahasa Indonesia</span>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                version="1.1" x="0px" y="0px" viewBox="0 0 512 512"
                                style="enable-background:new 0 0 512 512;" xml:space="preserve" width="32" height="32"
                                fill="white" class="w-[25px] h-[25px]" id="navbar-language-icon">
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
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                            </svg>
                        </div>
                        <div class="dropdown-content absolute hidden w-full z-10 pt-3">
                            <div class="bg-white rounded-md w-auto text-gray-800 text-[16px]">
                                <div class="p-2 rounded-md cursor-pointer hover:bg-gray-100">Bahasa Indonesia
                                </div>
                                <div class="p-2 rounded-md cursor-pointer hover:bg-gray-100">English</div>
                                <div class="p-2 rounded-md cursor-pointer hover:bg-gray-100">普通话</div>
                            </div>
                        </div>
                    </div>
                    <!-- Custom dropdown trigger -->
                </div>
            </div>
        </div>
        <div id="mobile-navbar" class="h-[60px] w-screen flex bg-gray-700/50 xl:hidden"></div>
    </nav>
    <!-- Dummy content to show scroll -->
    <section id="hero-section" class="relative flex items-center justify-center h-screen w-full bg-cover bg-center">
        <!-- Video Background -->
        <div class="absolute top-0 left-0 -z-1 w-full h-full">
            <video autoplay="" muted="" loop="" class="video-background w-full h-full object-cover">
                <source src="/videos/hero.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>

        <!-- Video Background -->


        <!-- Hero Text -->
        <div id="hero-text" class="w-full flex items-center justify-center mx-auto px-4 py-8 text-white text-center">
            <div class="absolute w-full h-auto">
                <div class="w-full h-auto  flex items-center justify-center">
                    <img src="/images/white-logo-no-text-high-res.png" alt="logo kpn"
                        class="w-[75%] md:w-full h-auto md:max-w-[600px] opacity-40 mix-blend-overlay filter saturate-150 brightness-150">
                </div>
            </div>
            <div class="max-w-[354px] md:max-w-[500px] lg:max-w-[800px]">
                <h1 class="ubuntu-bold text-[32px] md:text-[44px] lg:text-[58px] leading-[110%] text-center pb-[52px]">
                    Solusi Pengadaan Terpercaya Beragam Kebutuhan Anda
                </h1>

            </div>
            <div class="absolute bottom-15 md:bottom-5">
                <div class="flex flex-col w-full items-center justify-center">
                    <div class="relative h-[100px] w-[2px] bg-gray-700 overflow-hidden">
                        <!-- garis putih terjun -->
                        <div class="drop-line absolute top-0 left-0 w-full h-6 bg-white">
                        </div>
                    </div>
                    <p class="mt-2">SCROLL</p>
                </div>
            </div>
        </div>
    </section>

    <section id="about-us-section"
        class="w-full py-[80px] sm:py-[182px] relative min-h-screen flex flex-col items-center justify-center px-5">
        <div id="introduce-section-title-mobile" class="block lg:hidden mb-[60px]">
            <h2
                class="h-[34px] md:h-[40px] ubuntu-bold text-[28px] md:text-[32px] text-[#242424] title-shadow text-center">
                Hadir Sebagai
            </h2>
            <span
                class="h-[40px] ubuntu-bold text-[32px] md:text-[34px] text-[#2563EB] title-shadow text-center w-full flex items-center justify-center">Solusi
                Pengadaan</span>
        </div>
        <div class="w-full max-w-[1400px] grid grid-cols-1 md:grid-cols-2 gap-y-[60px] md:gap-x-[60px] lg:gap-x-[100px] md:px-15">
            <div>
                <img src="/images/about_us_page/aboutus3.png" alt="Produk karya pilar nusantara yang muncul dari box"
                    class="w-full h-auto">
            </div>
            <div class="flex flex-col items-start justify-center">
                <div id="overview-mobile-title" class="hidden lg:block w-full mb-[54px]">
                    <h2
                        class="lg:h-[38px] xl:h-[45px] ubuntu-bold lg:text-[34px] xl:text-[40px] text-[#242424] title-shadow text-start">
                        Hadir Sebagai
                    </h2>
                    <span
                        class="lg:h-[40px] xl:h-[48px] ubuntu-bold lg:text-[38px] xl:text-[46px] text-[#2563EB] title-shadow text-start">Solusi
                        Pengadaan</span>
                </div>
                <p class="open-sans-regular text-[16px] tracking-[4%] text-center md:text-start lg:mb-[60px]">
                    Kami adalah mitra tepercaya dalam pengadaan berbagai produk kebutuhan masyarakat dan institusi,
                    mulai dari alat olahraga, perlengkapan camping, mainan edukatif anak, hingga produk infrastruktur
                    berskala besar. Fokus kami adalah memberikan layanan pengadaan yang efisien dan terpercaya, baik
                    untuk
                    sektor publik maupun swasta. Dukungan dari mitra-mitra manufaktur ternama serta pemahaman mendalam
                    terhadap kebutuhan pasar menjadikan kami pilihan utama dalam setiap proyek pengadaan.
                </p>
                <div class="hidden lg:block"><?= view('components/whatsapp_button') ?></div>
            </div>
        </div>
        <div class="lg:hidden mt-[60px]"><?= view('components/whatsapp_button') ?></div>
    </section>
    <section id="map-section"
        class="relative flex flex-col items-center justify-center w-full min-h-screen py-[0px] md:py-[40px] lg:py-[80px] px-5 md:px-15 ">
        <div class="w-full max-w-[1400px] flex flex-col items-center justify-center relative">
            <div>
                <div id="map-section-title-mobile" class="block md:hidden mb-[40px]">
                    <h2
                        class="h-[38px] ubuntu-bold text-[28px] md:text-[32px] lg:text-[34px] xl:text-[40px] text-[#242424] title-shadow text-center">
                        Menjangkau Seluruh
                    </h2>
                    <span
                        class="h-[40px] ubuntu-bold text-[32px] md:text-[34px] lg:text-[38px] xl:text-[46px] text-[#2563EB] title-shadow text-center w-full flex items-center justify-center">
                        Kota di Indonesia</span>
                </div>
                <div id="map-section-title-section" class="hidden md:block mb-[60px]">
                    <h2
                        class="h-[38px] md:h-[40px] lg:h-[38px] xl:h-[50px] ubuntu-bold text-[28px] md:text-[32px] lg:text-[34px] xl:text-[40px] text-[#242424] title-shadow text-center">
                        Menjangkau
                    </h2>
                    <span
                        class="h-[40px] lg:h-[40px] xl:h-[58px] ubuntu-bold text-[32px] md:text-[34px] lg:text-[38px] xl:text-[46px] text-[#2563EB] title-shadow text-center w-full flex items-center justify-center">Seluruh
                        Kota di Indonesia</span>
                </div>
            </div>
            <p class="open-sans-regular text-[16px] tracking-[4%] text-center max-w-[600px] mb-[40px] md:mb-[46px]">
                Kami hadir di seluruh penjuru negeri, memastikan pengiriman cepat dan layanan terbaik hingga ke
                kota-kota terpencil.
            </p>

            <!-- <div class="dot-map" id="dotMap"></div> -->
            <img src="/images/about_us_page/aboutus4.png" alt="Peta titik Indonesia" class="w-full h-auto" width="1400px" height="933px">
        </div>
    </section>
    <section id="achievement-section" class="w-full min-h-screen py-[110px] px-15 md:px-15 bg-[#202020] flex items-center justify-center">
        <div class="flex flex-col items-center justify-center max-w-[750px]">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-y-[60px] gap-x-[110px] mb-[150px]">
                <div class="flex w-full h-full items-center justify-center">
                    <div id="partner-list" class="w-full max-w-[150px] grid grid-cols-2 gap-[20px]">
                        <div class="flex w-full h-full items-center justify-center">
                            <img src="/images/white-logo-jambore.png" alt="logo jambore" width="28" height="53">
                        </div>
                        <div class="flex w-full h-full items-center justify-center">
                            <img src="/images/white-logo-djp.png" alt="logo jambore" width="71" height="70">
                        </div>
                        <div class="flex w-full h-full items-center justify-center">
                            <img src="/images/white-logo-kb.png" alt="logo jambore" width="53" height="53">
                        </div>
                        <div class="flex w-full h-full items-center justify-center">
                            <img src="/images/white-logo-education.png" alt="logo jambore" width="53" height="53">
                        </div>
                    </div>
                </div>
                <div>
                    <p class="open-sans-regular text-[16px] text-white tracking-[2%] text-center md:text-start">
                        Kami telah bermitra dengan organisasi dan instansi pemerintahan untuk mendukung berbagai kegiatan serta kebutuhan pengadaan mereka secara profesional.
                    </p>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-y-[60px] gap-x-[110px] mb-[150px]">
                <div class="hidden md:flex w-full h-full items-center">
                    <p class=" open-sans-regular text-[16px] text-white tracking-[2%] text-center md:text-start">
                        Kami telah menangani lebih dari 40.000 permintaan pengadaan dari berbagai instansi dengan pelayanan cepat, tepat, dan terpercaya.
                    </p>
                </div>
                <div class="flex w-full h-full items-center justify-center">
                    <div class="text-center" id="total-order" data-target="40000">
                        <div class="h-[50px] mb-[12px] text-white flex items-center justify-center"><span class="value roboto-bold text-[50px] md:text-[70px]">40.000</span><span class="plus roboto-bold text-[45px]">+</span></div>
                        <span class="text-[16px] tracking-[4%] open-sans-regular text-white/80">Permintaan
                            Terpenuhi</span>
                    </div>
                </div>
                <div class="md:hidden flex w-full h-full items-center">
                    <p class=" open-sans-regular text-[16px] text-white tracking-[2%] text-center md:text-start">
                        Kami telah menangani lebih dari 40.000 permintaan pengadaan dari berbagai instansi dengan pelayanan cepat, tepat, dan terpercaya.
                    </p>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-y-[60px] gap-x-[110px]">

                <div class="flex w-full h-full items-center justify-center">
                    <div class="text-center" id="total-order" data-target="200">
                        <div class="h-[50px] mb-[12px] text-white flex items-center justify-center"><span class="value roboto-bold text-[50px] md:text-[70px]">200</span><span class="plus roboto-bold text-[45px]">+</span></div>
                        <span class="text-[16px] tracking-[4%] open-sans-regular text-white/80">Jenis Produk</span>
                    </div>
                </div>
                <div class="flex w-full h-full items-center">
                    <p class=" open-sans-regular text-[16px] text-white tracking-[2%] text-center md:text-start">
                        Menyediakan lebih dari 200 produk pilihan untuk memenuhi kebutuhan pengadaan instansi pemerintah, swasta, dan organisasi nasional lainnya.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section id="vision-mission-section" class="w-full flex flex-col items-center justify-center min-h-screen px-5 md:px-15 py-[166px]">
        <div class="mb-[80px] md:mb-[150px] lg:mb-[180px]">
            <div id="vision-mission-section-title-mobile" class="block md:hidden ">
                <h2
                    class="h-[38px] ubuntu-bold text-[28px] md:text-[32px] lg:text-[34px] xl:text-[40px] text-[#242424] title-shadow text-center">
                    Landasan Berkembang
                </h2>
                <span
                    class="h-[40px] ubuntu-bold text-[32px] md:text-[34px] lg:text-[38px] xl:text-[46px] text-[#2563EB] title-shadow text-center w-full flex items-center justify-center">Visi, Misi dan Nilai</span>
            </div>
            <div id="vision-mission-section-title-desktop" class="hidden md:block ">
                <h2
                    class="h-[38px] md:h-[40px] lg:h-[38px] xl:h-[50px] ubuntu-bold text-[28px] md:text-[32px] lg:text-[34px] xl:text-[40px] text-[#242424] title-shadow text-center">
                    Landasan Kami Berkembang
                </h2>
                <span
                    class="h-[40px] lg:h-[40px] xl:h-[58px] ubuntu-bold text-[32px] md:text-[34px] lg:text-[38px] xl:text-[46px] text-[#2563EB] title-shadow text-center w-full flex items-center justify-center">Visi, Misi, dan Nilai Perusahaan</span>
            </div>
        </div>
        <div class="w-full max-w-[1400px] flex items-center justify-center flex-col">
            <div id="vision-mission" class="w-full grid grid-cols-1 md:grid-cols-2 gap-y-[80px] md:gap-x-[100px] xl:gap-x-[200px] mb-[80px] md:mb-[100px] lg:mb-[210px]">
                <div class="flex items-center justify-start flex-col">
                    <img src="/images/about_us_page/aboutus6.png" alt="Target karya pilar nusantara"
                        class="w-[100px] h-auto">
                    <h3 class="ubuntu-bold text-[38px] md:text-[40px] text-[#585858] mb-[40px]">Visi</h3>
                    <p class=" open-sans-regular text-[16px] text-[#242424] tracking-[2%] text-center">
                        Menjadi perusahaan terdepan di Indonesia dalam menyediakan produk berkualitas tinggi untuk mainan anak, olahraga, hingga infrastruktur, dengan inovasi berkelanjutan serta komitmen terhadap keamanan, daya tahan, dan kepuasan pelanggan.
                    </p>
                </div>
                <div class="flex items-center justify-start flex-col">
                    <img src="/images/about_us_page/aboutus7.png" alt="Target karya pilar nusantara"
                        class="w-[100px] h-auto">
                    <h3 class="ubuntu-bold text-[38px] md:text-[40px] text-[#585858] mb-[40px]">Misi</h3>
                    <p class=" open-sans-regular text-[16px] text-[#242424] tracking-[2%] text-center">
                        Kami berkomitmen menghadirkan produk berkualitas tinggi yang aman dan ramah lingkungan, menyediakan layanan kustomisasi merek, menawarkan harga kompetitif, memberikan pelayanan profesional, memastikan distribusi luas, serta mengadopsi teknologi modern untuk inovasi dan keberlanjutan.
                    </p>
                </div>
            </div>
            <div id="value">
                <div class="flex items-center justify-start flex-col">
                    <img src="/images/about_us_page/aboutus8.png" alt="Target karya pilar nusantara"
                        class="w-[100px] h-auto">
                    <h3 class="ubuntu-bold text-[38px] md:text-[40px] text-[#585858] mb-[40px]">Nilai</h3>
                    <p class=" open-sans-regular text-[16px] text-[#242424] tracking-[2%] text-center max-w-[718px] mb-[60px] md:mb-[70px] lg:mb-[90px]">
                        Kami percaya bahwa kesuksesan jangka panjang dibangun dari nilai-nilai yang kuat. Inilah prinsip yang kami pegang teguh dalam setiap langkah
                    </p>
                    <div>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 md:gap-x-[20px] lg:gap-x-[30px] xl:lg:gap-x-[50px] gap-y-[40px] lg:gap-y-[50px]">
                            <div class="w-full">
                                <div class="flex w-full items-center justify-start mb-[8px]">
                                    <div class="hidden md:block w-[15px] h-[15px] rounded-full bg-[#5c5c5c] mr-[20px]"></div>
                                    <p class="open-sans-bold md:open-sans-regular text-[16px] text-[#242424] tracking-[2%] border-b-1 md:border-b-0">Kualitas adalah Prioritas</p>
                                </div>
                                <div class="w-full md:pl-[35px]">
                                    <p class="open-sans-regular text-[16px] text-[#242424] tracking-[2%]">Kami menghadirkan produk dengan standar tinggi untuk menjamin keamanan, daya tahan, dan kenyamanan.</p>
                                </div>
                            </div>
                            <div class="w-full">
                                <div class="flex w-full items-center justify-start mb-[8px]">
                                    <div class="hidden md:block w-[15px] h-[15px] rounded-full bg-[#5c5c5c] mr-[20px]"></div>
                                    <p class="open-sans-bold md:open-sans-regular text-[16px] text-[#242424] tracking-[2%] border-b-1 md:border-b-0">Kolaborasi yang kuat</p>
                                </div>
                                <div class="w-full md:pl-[35px]">
                                    <p class="open-sans-regular text-[16px] text-[#242424] tracking-[2%]">Kami membangun kemitraan jangka panjang dengan pelanggan, tim internal, dan mitra strategis untuk tumbuh bersama.</p>
                                </div>
                            </div>
                            <div class="w-full">
                                <div class="flex w-full items-center justify-start mb-[8px]">
                                    <div class="hidden md:block w-[15px] h-[15px] rounded-full bg-[#5c5c5c] mr-[20px]"></div>
                                    <p class="open-sans-bold md:open-sans-regular text-[16px] text-[#242424] tracking-[2%] border-b-1 md:border-b-0">Inovasi Berkelanjutan</p>
                                </div>
                                <div class="w-full md:pl-[35px]">
                                    <p class="open-sans-regular text-[16px] text-[#242424] tracking-[2%]">Kami terus berinovasi melalui teknologi dan desain untuk memberikan solusi yang relevan, modern, dan berkelanjutan.</p>
                                </div>
                            </div>
                            <div class="w-full">
                                <div class="flex w-full items-center justify-start mb-[8px]">
                                    <div class="hidden md:block w-[15px] h-[15px] rounded-full bg-[#5c5c5c] mr-[20px]"></div>
                                    <p class="open-sans-bold md:open-sans-regular text-[16px] text-[#242424] tracking-[2%] border-b-1 md:border-b-0">Keberlanjutan Lingkungan</p>
                                </div>
                                <div class="w-full md:pl-[35px]">
                                    <p class="open-sans-regular text-[16px] text-[#242424] tracking-[2%]">Kami peduli terhadap lingkungan dan berupaya mengurangi dampak negatif melalui praktik bisnis yang bertanggung jawab.</p>
                                </div>
                            </div>
                            <div class="w-full">
                                <div class="flex w-full items-center justify-start mb-[8px]">
                                    <div class="hidden md:block w-[15px] h-[15px] rounded-full bg-[#5c5c5c] mr-[20px]"></div>
                                    <p class="open-sans-bold md:open-sans-regular text-[16px] text-[#242424] tracking-[2%] border-b-1 md:border-b-0">Integritas dan Etika</p>
                                </div>
                                <div class="w-full md:pl-[35px]">
                                    <p class="open-sans-regular text-[16px] text-[#242424] tracking-[2%]">Kami menjunjung tinggi kejujuran, transparansi, dan etika dalam seluruh aktivitas bisnis.</p>
                                </div>
                            </div>
                            <div class="w-full">
                                <div class="flex w-full items-center justify-start mb-[8px]">
                                    <div class="hidden md:block w-[15px] h-[15px] rounded-full bg-[#5c5c5c] mr-[20px]"></div>
                                    <p class="open-sans-bold md:open-sans-regular text-[16px] text-[#242424] tracking-[2%] border-b-1 md:border-b-0">Adaptif terhadap Perubahan</p>
                                </div>
                                <div class="w-full md:pl-[35px]">
                                    <p class="open-sans-regular text-[16px] text-[#242424] tracking-[2%]">Kami responsif terhadap dinamika pasar dan siap bertransformasi untuk menjawab tantangan masa depan.</p>
                                </div>
                            </div>
                            <div class="w-full lg:hidden">
                                <div class="flex w-full items-center justify-start mb-[8px]">
                                    <div class="hidden md:block w-[15px] h-[15px] rounded-full bg-[#5c5c5c] mr-[20px]"></div>
                                    <p class="open-sans-bold md:open-sans-regular text-[16px] text-[#242424] tracking-[2%] border-b-1 md:border-b-0">Fokus pada Pelanggan</p>
                                </div>
                                <div class="w-full md:pl-[35px]">
                                    <p class="open-sans-regular text-[16px] text-[#242424] tracking-[2%]">Kami mendengarkan kebutuhan pelanggan dan menjadikannya pusat dari setiap keputusan dan pengembangan produk.</p>
                                </div>
                            </div>
                            <div class="w-full lg:hidden">
                                <div class="flex w-full items-center justify-start mb-[8px]">
                                    <div class="hidden md:block w-[15px] h-[15px] rounded-full bg-[#5c5c5c] mr-[20px]"></div>
                                    <p class="open-sans-bold md:open-sans-regular text-[16px] text-[#242424] tracking-[2%] border-b-1 md:border-b-0">Keunggulan Operasional</p>
                                </div>
                                <div class="w-full md:pl-[35px]">
                                    <p class="open-sans-regular text-[16px] text-[#242424] tracking-[2%]">Kami terus menyempurnakan proses dan sistem kerja untuk memberikan hasil terbaik secara efisien dan konsisten.</p>
                                </div>
                            </div>
                        </div>
                        <div class="hidden lg:grid w-full grid-cols-6 mt-[70px] gap-x-[50px]">
                            <div class="col-span-1"></div>
                            <div class="w-full col-span-2">
                                <div class="flex w-full items-center justify-start mb-[8px]">
                                    <div class="hidden md:block w-[15px] h-[15px] rounded-full bg-[#5c5c5c] mr-[20px]"></div>
                                    <p class="open-sans-bold md:open-sans-regular text-[16px] text-[#242424] tracking-[2%] border-b-1 md:border-b-0">Fokus pada Pelanggan</p>
                                </div>
                                <div class="w-full md:pl-[35px]">
                                    <p class="open-sans-regular text-[16px] text-[#242424] tracking-[2%]">Kami mendengarkan kebutuhan pelanggan dan menjadikannya pusat dari setiap keputusan dan pengembangan produk.</p>
                                </div>
                            </div>
                            <div class="w-full col-span-2">
                                <div class="flex w-full items-center justify-start mb-[8px]">
                                    <div class="hidden md:block w-[15px] h-[15px] rounded-full bg-[#5c5c5c] mr-[20px]"></div>
                                    <p class="open-sans-bold md:open-sans-regular text-[16px] text-[#242424] tracking-[2%] border-b-1 md:border-b-0">Keunggulan Operasional</p>
                                </div>
                                <div class="w-full md:pl-[35px]">
                                    <p class="open-sans-regular text-[16px] text-[#242424] tracking-[2%]">Kami terus menyempurnakan proses dan sistem kerja untuk memberikan hasil terbaik secara efisien dan konsisten.</p>
                                </div>
                            </div>
                            <div class="col-span-1"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="legality-section"
        class="w-full relative min-h-screen flex flex-col items-center justify-center px-5">
        <div id="legality-section-title-mobile" class="block lg:hidden mb-[60px]">
            <h2
                class="h-[34px] md:h-[40px] ubuntu-bold text-[28px] md:text-[32px] text-[#242424] title-shadow text-center">
                Kami Sudah
            </h2>
            <span
                class="h-[40px] ubuntu-bold text-[32px] md:text-[34px] text-[#2563EB] title-shadow text-center w-full flex items-center justify-center">Terdaftar Resmi</span>
        </div>
        <div class="w-full max-w-[1400px] grid grid-cols-1 lg:grid-cols-2 gap-y-[60px] md:gap-x-[60px] lg:gap-x-[100px] md:px-15">
            <div>
                <img src="/images/about_us_page/aboutus9.png" alt="Produk karya pilar nusantara yang muncul dari box"
                    class="w-full h-auto">
            </div>
            <div class="flex flex-col items-start justify-center">
                <div id="legality-mobile-title" class="hidden lg:block w-full mb-[54px]">
                    <h2
                        class="lg:h-[38px] xl:h-[45px] ubuntu-bold lg:text-[34px] xl:text-[40px] text-[#242424] title-shadow text-start">
                        Kami Sudah
                    </h2>
                    <span
                        class="lg:h-[40px] xl:h-[48px] ubuntu-bold lg:text-[38px] xl:text-[46px] text-[#2563EB] title-shadow text-start">Terdaftar Resmi</span>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-1 gap-y-[51px] gap-x-[50px] w-full">
                    <div>
                        <p class="ubuntu-bold text-[18px] text-[#242424] mb-[20px] lg:mb-[30px]">Informasi Perusahaan</p>
                        <div class="flex flex-col space-y-[14px]">
                            <div class="flex flex-col">
                                <div class="flex items-center justify-start">
                                    <div class="w-[12px] h-[12px] bg-[#2563EB] rounded-full mr-[12px]"></div>
                                    <p class="open-sans-regular text-[16px] text-[#242424] ">Nama Badan Usaha:</p>
                                    <p class="hidden lg:block open-sans-bold text-[16px] text-[#242424] pl-[4px]">PT Karya Pilar Nusantara</p>
                                </div>
                                <p class="lg:hidden open-sans-bold text-[16px] text-[#242424] pl-[24px]">PT Karya Pilar Nusantara</p>
                            </div>
                            <div class="flex flex-col">
                                <div class="flex items-center justify-start">
                                    <div class="w-[12px] h-[12px] bg-[#2563EB] rounded-full mr-[12px]"></div>
                                    <p class="open-sans-regular text-[16px] text-[#242424] ">Nomor Induk Berusaha (NIB):</p>
                                    <p class="hidden lg:block open-sans-bold text-[16px] text-[#242424] pl-[4px]">1102250054704</p>
                                </div>
                                <p class="lg:hidden open-sans-bold text-[16px] text-[#242424] pl-[24px]">1102250054704</p>
                            </div>
                            <div class="flex flex-col">
                                <div class="flex items-center justify-start">
                                    <div class="w-[12px] h-[12px] bg-[#2563EB] rounded-full mr-[12px]"></div>
                                    <p class="open-sans-regular text-[16px] text-[#242424] ">Bentuk Usaha:</p>
                                    <p class="hidden lg:block open-sans-bold text-[16px] text-[#242424] pl-[4px]">Perseroan Terbatas (PT)</p>
                                </div>
                                <p class="lg:hidden open-sans-bold text-[16px] text-[#242424] pl-[24px]">Perseroan Terbatas (PT)</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <p class="ubuntu-bold text-[18px] text-[#242424] mb-[20px] lg:mb-[30px]">Kontak & Lokasi</p>
                        <div class="flex flex-col space-y-[14px]">
                            <div class="flex flex-col">
                                <div class="flex items-center justify-start">
                                    <div class="w-[12px] h-[12px] bg-[#2563EB] rounded-full mr-[12px]"></div>
                                    <p class="open-sans-regular text-[16px] text-[#242424] ">Alamat:</p>
                                    <p class="hidden lg:block open-sans-bold text-[16px] text-[#242424] pl-[4px]">Pergudangan Safe n Lock, Sidoarjo</p>
                                </div>
                                <p class="lg:hidden open-sans-bold text-[16px] text-[#242424] pl-[24px]">Pergudangan Safe n Lock, Sidoarjo</p>
                            </div>
                            <div class="flex flex-col">
                                <div class="flex items-center justify-start">
                                    <div class="w-[12px] h-[12px] bg-[#2563EB] rounded-full mr-[12px]"></div>
                                    <p class="open-sans-regular text-[16px] text-[#242424] ">Email:</p>
                                    <p class="hidden lg:block open-sans-bold text-[16px] text-[#242424] pl-[4px]">pt.karyapilarnusantara@gmail.com</p>
                                </div>
                                <p class="lg:hidden open-sans-bold text-[16px] text-[#242424] pl-[24px]">pt.karyapilarnusantara@gmail.com</p>
                            </div>
                            <div class="flex flex-col">
                                <div class="flex items-center justify-start">
                                    <div class="w-[12px] h-[12px] bg-[#2563EB] rounded-full mr-[12px]"></div>
                                    <p class="open-sans-regular text-[16px] text-[#242424] ">Telepon:</p>
                                    <p class="hidden lg:block open-sans-bold text-[16px] text-[#242424] pl-[4px]">+62 821-6005-0005</p>
                                </div>
                                <p class="lg:hidden open-sans-bold text-[16px] text-[#242424] pl-[24px]">+62 821-6005-0005</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="license-section"
        class="w-full relative min-h-screen flex flex-col items-center justify-center px-5">
        <div id="license-section-title-mobile" class="block lg:hidden mb-[60px]">
            <h2
                class="h-[34px] md:h-[40px] ubuntu-bold text-[28px] md:text-[32px] text-[#242424] title-shadow text-center">
                Lisensi & Bidang
            </h2>
            <span
                class="h-[40px] ubuntu-bold text-[32px] md:text-[34px] text-[#2563EB] title-shadow text-center w-full flex items-center justify-center">Operasional</span>
        </div>
        <div class="w-full max-w-[1400px] grid grid-cols-1 lg:grid-cols-2 md:gap-x-[60px] lg:gap-x-[100px] md:px-15">
            <div class="mb-[32px] lg:hidden">
                <img src="/images/about_us_page/aboutus10.png" alt="Produk karya pilar nusantara yang muncul dari box"
                    class="w-full h-auto rounded-[20px]">
            </div>
            <div>
                <div id="license-section-title-desktop" class="hidden lg:block w-full mb-[32px]">
                    <h2
                        class="lg:h-[38px] xl:h-[45px] ubuntu-bold lg:text-[34px] xl:text-[40px] text-[#242424] title-shadow text-start">
                        Lisensi & Bidang
                    </h2>
                    <span
                        class="lg:h-[40px] xl:h-[48px] ubuntu-bold lg:text-[38px] xl:text-[46px] text-[#2563EB] title-shadow text-start">Operasional</span>
                </div>
                <div>
                    <p class="open-sans-regular text-[16px] tracking-[4%] text-center w-full mb-[60px] ">
                        Kami menjalankan usaha sesuai ketentuan resmi dan terdaftar dalam sistem OSS dengan KBLI sebagai berikut.
                    </p>
                </div>
                <div>
                    <div class="flex">
                        <div class="w-[155px] h-[60px] bg-[#2563EB] flex items-center justify-center">
                            <p class="open-sans-bold text-[16px] text-white">Kode KBLI</p>
                        </div>
                        <div class="w-full h-[60px] bg-[#2563EB] flex items-center justify-start">
                            <p class="open-sans-bold text-[16px] text-white">Nama Bidang Usaha</p>
                        </div>
                    </div>
                    <div class="flex bg-[#E7EAFC] py-[15px] pr-1">
                        <div class="w-[155px] h-auto flex items-center justify-center">
                            <p class="open-sans-bold text-[16px] text-[#242424]">46599</p>
                        </div>
                        <div class="w-full h-auto  flex items-center justify-start">
                            <p class="open-sans-regular text-[16px] text-w[#242424]">Perdagangan Besar Mesin, Peralatan Dan Perlengkapan Lainnya</p>
                        </div>
                    </div>
                    <div class="flex py-[15px] border-t-[1px] border-b-[1px] border-[#E1E1E1] pr-1">
                        <div class="w-[155px] h-auto  flex items-center justify-center">
                            <p class="open-sans-bold text-[16px] text-[#242424]">46499</p>
                        </div>
                        <div class="w-full h-auto  flex items-center justify-start">
                            <p class="open-sans-regular text-[16px] text-w[#242424]">Perdagangan Besar Berbagai Barang Dan Perlengkapan Rumah Tangga Lainnya Ytdl</p>
                        </div>
                    </div>
                    <div class="flex bg-[#E7EAFC] py-[15px] pr-1">
                        <div class="w-[155px] h-auto flex items-center justify-center">
                            <p class="open-sans-bold text-[16px] text-[#242424]">46414</p>
                        </div>
                        <div class="w-full h-auto flex items-center justify-start">
                            <p class="open-sans-regular text-[16px] text-w[#242424]">Perdagangan Besar Barang Lainnya Dari Tekstil</p>
                        </div>
                    </div>
                    <div class="flex py-[15px] border-t-[1px] border-b-[1px] border-[#E1E1E1] pr-1">
                        <div class="w-[155px] h-auto flex items-center justify-center">
                            <p class="open-sans-bold text-[16px] text-[#242424]">46495</p>
                        </div>
                        <div class="w-full h-auto flex items-center justify-start">
                            <p class="open-sans-regular text-[16px] text-w[#242424]">Perdagangan Besar Alat Permainan Dan Mainan Anak-anak</p>
                        </div>
                    </div>
                    <div class="flex bg-[#E7EAFC] py-[15px] pr-1">
                        <div class="w-[155px] h-auto flex items-center justify-center">
                            <p class="open-sans-bold text-[16px] text-[#242424]">46631</p>
                        </div>
                        <div class="w-full h-auto flex items-center justify-start">
                            <p class="open-sans-regular text-[16px] text-w[#242424]">Perdagangan Besar Barang Logam Untuk Bahan Konstruksi</p>
                        </div>
                    </div>
                    <div class="flex py-[15px] border-t-[1px] border-b-[1px] border-[#E1E1E1] pr-1">
                        <div class="w-[155px] h-auto flex items-center justify-center">
                            <p class="open-sans-bold text-[16px] text-[#242424]">46900</p>
                        </div>
                        <div class="w-full h-auto flex items-center justify-start">
                            <p class="open-sans-regular text-[16px] text-w[#242424]">Perdagangan Besar Berbagai Macam Barang</p>
                        </div>
                    </div>
                    <div class="flex bg-[#E7EAFC] py-[15px] pr-1">
                        <div class="w-[155px] h-auto flex items-center justify-center">
                            <p class="open-sans-bold text-[16px] text-[#242424]">46492</p>
                        </div>
                        <div class="w-full h-auto flex items-center justify-start">
                            <p class="open-sans-regular text-[16px] text-w[#242424]">Perdagangan Besar Alat Olahraga</p>
                        </div>
                    </div>
                    <div class="flex py-[15px] border-t-[1px] border-b-[1px] border-[#E1E1E1] pr-1">
                        <div class="w-[155px] h-auto flex items-center justify-center">
                            <p class="open-sans-bold text-[16px] text-[#242424]">46491</p>
                        </div>
                        <div class="w-full h-auto flex items-center justify-start">
                            <p class="open-sans-regular text-[16px] text-w[#242424]">Perdagangan Besar Peralatan Dan Perlengkapan Rumah Tangga</p>
                        </div>
                    </div>
                    <div class="flex bg-[#E7EAFC] py-[15px] pr-1">
                        <div class="w-[155px] h-auto flex items-center justify-center">
                            <p class="open-sans-bold text-[16px] text-[#242424]">46639</p>
                        </div>
                        <div class="w-full h-auto flex items-center justify-start">
                            <p class="open-sans-regular text-[16px] text-w[#242424]">Perdagangan Besar Bahan Konstruksi Lainnya</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hidden lg:flex w-full h-auto items-center justify-center">
                <img src="/images/about_us_page/aboutus10.png" alt="Produk karya pilar nusantara yang muncul dari box"
                    class="w-full h-auto rounded-[20px]">
            </div>

        </div>
    </section>
    <script>
        const navbar = document.getElementById('main-navbar');
        const logoNavbar = document.getElementById('logo-navbar');
        const navbarLanguageBorder = document.getElementById('navbar-language-border');
        const navbarLanguageIcon = document.getElementById('navbar-language-icon');
        const blur = navbar.querySelector('.blur-3xl');
        const hero = document.getElementById('hero-section');

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

        // Observer untuk ubah background dan teks saat masuk ke overview
        const observer = new IntersectionObserver(
            ([entry]) => {
                if (entry.isIntersecting) {
                    // Masih di hero
                    navbar.classList.remove('bg-white');
                    navbar.classList.add('text-white');
                    navbar.classList.remove('text-gray-700');
                    logoNavbar.classList.remove('invert', 'brightness-75');
                    navbarLanguageBorder.classList.replace('border-gray-700', 'border-white');
                    navbarLanguageIcon.setAttribute('fill', 'white');

                    if (blur) blur.classList.remove('hidden');


                } else {
                    // Di luar hero
                    navbar.classList.add('bg-white');
                    navbar.classList.remove('text-white');
                    navbar.classList.add('text-gray-700');
                    logoNavbar.classList.add('invert', 'brightness-75');
                    navbarLanguageBorder.classList.replace('border-white', 'border-gray-700');
                    navbarLanguageIcon.setAttribute('fill', '#374151');
                    if (blur) blur.classList.add('hidden');
                }
            }, {
                root: null,
                threshold: 0.1,
            }
        );

        observer.observe(hero);
    </script>
    <section id="footer-section">
        <div
            class=" py-[30px] w-full bg-gray-700 flex items-center justify-center px-5 text-white/85 flex-col relative">
            <div
                class="grid grid-cols-1 sm:grid-cols-10 md:grid-cols-10 gap-x-10 gap-y-10 w-full h-full max-w-[1400px] relative mb-[20px]">
                <div class=" sm:col-span-6 flex flex-col items-start justify-start w-full h-full ">
                    <div class="mb-[15px]">
                        <h3 class="ubuntu-bold">PT KARYA PILAR NUSANTARA</h3>
                    </div>
                    <div>
                        <p class="open-sans-regular text-[14px]">PT. Karya Pilar Nusantara adalah perusahaan terpercaya
                            yang
                            berfokus
                            pada pengadaan berbagai
                            kebutuhan
                            instansi dan dunia usaha. Kami berkomitmmen memberikan produk berkualitas, layanan
                            profesional,
                            dan solusi
                            pengadaan yang efisien. Kami siap mendukung kesuksesan bisnis Anda dengan produk lengkap dan
                            layanan
                            terbaik.</p>
                    </div>
                </div>
                <div class="  sm:col-span-2 w-full h-full ">
                    <div class="flex flex-col gap-y-[10px]">
                        <h3 class="ubuntu-bold text-[16px] mb-[5px]">Perusahaan</h3>
                        <a href="/"><span class="roboto-regular text-[14px] cursor-pointer">Tentang</span></a>
                        <a href="/"><span class="roboto-regular text-[14px] cursor-pointer">Produk</span></a>
                        <a href="/"><span class="roboto-regular text-[14px] cursor-pointer">Galeri</span></a>
                    </div>

                </div>
                <div class=" sm:col-span-2 w-full h-full ">
                    <div class="flex flex-col gap-y-[10px]">
                        <h3 class="ubuntu-bold text-[16px] mb-[5px]">Hubungi Kami</h3>
                        <a href="/"><span class="roboto-regular text-[14px] cursor-pointer">Kontak</span></a>

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
    <div class="z-80 sticky bottom-[45px] h-[0] w-full flex justify-end items-end">
        <a href="/">
            <div
                class="h-[60px] lg:h-[70px] aspect-square rounded-full bg-green-500 mr-[20px] flex items-center justify-center cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                    id="Capa_1" x="0px" y="0px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;"
                    xml:space="preserve" width="22" height="22" fill="white" class="w-[30px] lg:w-[35px] h-auto">
                    <g id="WA_Logo">
                        <g>
                            <path style="fill-rule:evenodd;clip-rule:evenodd;"
                                d="M20.463,3.488C18.217,1.24,15.231,0.001,12.05,0    C5.495,0,0.16,5.334,0.157,11.892c-0.001,2.096,0.547,4.142,1.588,5.946L0.057,24l6.304-1.654    c1.737,0.948,3.693,1.447,5.683,1.448h0.005c6.554,0,11.89-5.335,11.893-11.893C23.944,8.724,22.708,5.735,20.463,3.488z     M12.05,21.785h-0.004c-1.774,0-3.513-0.477-5.031-1.378l-0.361-0.214l-3.741,0.981l0.999-3.648l-0.235-0.374    c-0.99-1.574-1.512-3.393-1.511-5.26c0.002-5.45,4.437-9.884,9.889-9.884c2.64,0,5.122,1.03,6.988,2.898    c1.866,1.869,2.893,4.352,2.892,6.993C21.932,17.351,17.498,21.785,12.05,21.785z M17.472,14.382    c-0.297-0.149-1.758-0.868-2.031-0.967c-0.272-0.099-0.47-0.149-0.669,0.148s-0.767,0.967-0.941,1.166    c-0.173,0.198-0.347,0.223-0.644,0.074c-0.297-0.149-1.255-0.462-2.39-1.475c-0.883-0.788-1.48-1.761-1.653-2.059    s-0.018-0.458,0.13-0.606c0.134-0.133,0.297-0.347,0.446-0.521C9.87,9.97,9.919,9.846,10.019,9.647    c0.099-0.198,0.05-0.372-0.025-0.521C9.919,8.978,9.325,7.515,9.078,6.92c-0.241-0.58-0.486-0.501-0.669-0.51    C8.236,6.401,8.038,6.4,7.839,6.4c-0.198,0-0.52,0.074-0.792,0.372c-0.272,0.298-1.04,1.017-1.04,2.479    c0,1.463,1.065,2.876,1.213,3.074c0.148,0.198,2.095,3.2,5.076,4.487c0.709,0.306,1.263,0.489,1.694,0.626    c0.712,0.226,1.36,0.194,1.872,0.118c0.571-0.085,1.758-0.719,2.006-1.413c0.248-0.694,0.248-1.29,0.173-1.413    C17.967,14.605,17.769,14.531,17.472,14.382z">
                            </path>
                        </g>
                    </g>
                </svg>
            </div>
        </a>
    </div>




</body>
<!-- <script>
    // Data titik: array posisi x dan y (dari gambar SVG atau manual)
    const activeDots = [
        [49, 0],
        [50, 0],
        [45, 1],
        [50, 1],
        [51, 1],
        [43, 5],
        [45, 5],
        [50, 5],
        [51, 5],
        [52, 5],
        [0, 6],
        [1, 6],
        [2, 6],
        [41, 6],
        [42, 6],
        [43, 6],
        [44, 6],
        [45, 6],
        [50, 6],
        [1, 7],
        [2, 7],
        [41, 7],
        [42, 7],
        [43, 7],
        [44, 7],
        [45, 7],
        [50, 7],
        [2, 8],
        [3, 8],
        [34, 11],
        [36, 11],
        [42, 11],
        [43, 11],
        [44, 11],
        [50, 11],
        [51, 11],
        [52, 11],
        [2, 12],
        [9, 12],
        [10, 12],
        [33, 12],
        [34, 12],
        [35, 12],
        [36, 12],
        [42, 12],
        [43, 12],
        [44, 12],
        [50, 12],
        [51, 12],
        [52, 12],
        [53, 12],
        [57, 12],
        [58, 12],
        [59, 12],
        [60, 12],
        [65, 12],
        [66, 12],
        [73, 12],
        [74, 12],
        [8, 13],
        [9, 13],
        [10, 13],
        [11, 13],
        [12, 13],
        [19, 13],
        [28, 13],
        [34, 13],
        [35, 13],
        [36, 13],
        [41, 13],
        [42, 13],
        [43, 13],
        [57, 13],
        [58, 13],
        [59, 13],
        [60, 13],
        [73, 13],
        [74, 13],
        [9, 14],
        [10, 14],
        [11, 14],
        [19, 14],
        [73, 14],
        [75, 14],
        [34, 17],
        [35, 17],
        [36, 17],
        [42, 17],
        [43, 17],
        [59, 17],
        [60, 17],
        [68, 17],
        [73, 17],
        [80, 17],
        [85, 17],
        [91, 17],
        [10, 18],
        [11, 18],
        [18, 18],
        [22, 18],
        [33, 18],
        [34, 18],
        [35, 18],
        [36, 18],
        [42, 18],
        [43, 18],
        [44, 18],
        [45, 18],
        [57, 18],
        [58, 18],
        [59, 18],
        [60, 18],
        [74, 18],
        [80, 18],
        [84, 18],
        [85, 18],
        [86, 18],
        [94, 18],
        [95, 18],
        [9, 19],
        [10, 19],
        [11, 19],
        [12, 19],
        [17, 19],
        [18, 19],
        [19, 19],
        [20, 19],
        [23, 19],
        [34, 19],
        [35, 19],
        [36, 19],
        [42, 19],
        [43, 19],
        [58, 19],
        [59, 19],
        [66, 19],
        [69, 19],
        [94, 19],
        [95, 19],
        [10, 20],
        [12, 20],
        [18, 20],
        [19, 20],
        [20, 20],
        [23, 20],
        [59, 20],
        [43, 23],
        [44, 23],
        [45, 23],
        [58, 23],
        [59, 23],
        [60, 23],
        [71, 23],
        [74, 23],
        [75, 23],
        [78, 23],
        [84, 23],
        [85, 23],
        [86, 23],
        [87, 23],
        [88, 23],
        [93, 23],
        [94, 23],
        [95, 23],
        [96, 23],
        [100, 23],
        [101, 23],
        [102, 23],
        [17, 24],
        [19, 24],
        [20, 24],
        [59, 24],
        [60, 24],
        [79, 24],
        [84, 24],
        [87, 24],
        [88, 24],
        [94, 24],
        [95, 24],
        [100, 24],
        [101, 24],
        [102, 24],
        [17, 25],
        [18, 25],
        [19, 25],
        [20, 25],
        [59, 25],
        [101, 25],
        [18, 26],
        [19, 26],
        [20, 26],
        [86, 28],
        [87, 28],
        [95, 28],
        [96, 28],
        [100, 28],
        [101, 28],
        [36, 29],
        [86, 29],
        [87, 29],
        [95, 29],
        [96, 29],
        [100, 29],
        [101, 29],
        [102, 29],
        [20, 30],
        [21, 30],
        [22, 30],
        [27, 30],
        [28, 30],
        [29, 30],
        [30, 30],
        [34, 30],
        [35, 30],
        [36, 30],
        [41, 30],
        [42, 30],
        [73, 30],
        [76, 30],
        [95, 30],
        [100, 30],
        [101, 30],
        [102, 30],
        [22, 31],
        [23, 31],
        [27, 31],
        [29, 31],
        [34, 31],
        [35, 31],
        [36, 31],
        [41, 34],
        [42, 34],
        [48, 34],
        [58, 34],
        [71, 34],
        [100, 34],
        [101, 34],
        [102, 34],
        [66, 35],
        [100, 35],
        [102, 35],
        [64, 36],
        [66, 36],
    ];
    const map = document.getElementById('dotMap');

    // Tentukan ukuran grid
    const totalCols = 65; // sesuai dengan max x + 1
    const totalRows = 55; // sesuai dengan max y + 1

    for (let y = 0; y < totalRows; y++) {
        for (let x = 0; x < totalCols; x++) {
            const dot = document.createElement('div');
            dot.classList.add('dot');
            if (activeDots.some(([dx, dy]) => dx === x && dy === y)) {
                dot.classList.add('active');
            }
            map.appendChild(dot);
        }
    }
</script> -->


</html>
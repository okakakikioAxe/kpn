<?= $this->extend('v2/template/template_v2') ?>


<?= $this->section('header') ?>
<html lang="id">
<title><?= esc($meta_title ?? 'PT. Karya Pilar Nusantara - Perusahaan Pengadaan Produk') ?></title>
<meta name="description"
    content="<?= esc($meta_description ?? 'PT Karya Pilar Nusantara (KPN) adalah perusahaan pengadaan barang yang menyediakan berbagai macam produk berkualitas tinggi, mulai dari mainan playground indoor, berbagai jenis matras, hingga perlengkapan kebutuhan perairan seperti kubus apung, kincir air, toren, palet, dan masih banyak lagi.') ?>" />
<meta name="keywords"
    content="<?= esc($meta_keyword ?? 'PT Karya Pilar Nusantara, KPN, pengadaan barang, mainan playground indoor, matras, kubus apung, kincir air, toren air, palet plastik, produk perairan, perlengkapan playground, peralatan outdoor, perusahaan pengadaan Indonesia, produk berkualitas tinggi') ?>">
<?= $this->endsection() ?>
<?= $this->section('style') ?>
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
</style>
<style>
    .fade-text {
        transition: opacity 0.4s ease;
    }

    .fade-out {
        opacity: 0;
    }

    .fade-in {
        opacity: 1;
    }
    
    .counter {
        opacity: 0;
        transform: translateY(20px);
        transition: all 0.8s ease;
    }

    .counter.show {
        opacity: 1;
        transform: translateY(0);
    }

    .our-benefit {
        opacity: 0;
        transform: translateX(-40px);
        transition: all 0.8s ease;
    }

    .our-benefit.show {
        opacity: 1;
        transform: translateX(0);
    }
</style>
<?= $this->endsection() ?>
<?= $this->section('header-script') ?>
<link href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
<?= $this->endsection() ?>

<?= $this->section('content') ?>
<section id="hero-section" class="relative flex items-center justify-center h-screen w-full bg-cover bg-center">
    <div id="nav-observer" class="absolute top-0 left-0 z-50 h-[200px] w-full bg-transparent"></div>
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
            <h1 class="ubuntu-bold text-[32px] md:text-[44px] xl:text-[58px] leading-[110%] text-center pb-[52px]">
                <?= esc($hero_title ?? 'Solusi Pengadaan Terpercaya Beragam Kebutuhan Anda') ?>
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
<section id="overview-section"
    class="w-full py-[80px] sm:py-[182px] relative min-h-screen bg-gradient-to-r from-[#EFF6FF] to-white flex items-center justify-center">
    <div id="overview-mobile-content" class="sm:hidden">

        <div class="flex w-full items-center justify-center">

            <div id="image-container-mobile" class="md:hidden w-screen aspect-square relative">
                <?= view('components/texts/title/title_group', ['id' => 'overview-title-default', 'class' => 'block w-full mb-[60px] text-center', 'top_title' => esc($overview_top_title ?? 'Menghadirkan Nilai,'), 'bottom_title' => esc($overview_bottom_title ?? 'Bukan Sekadar Barang')]) ?>
                <div class="w-full">
                    <div class="swiper swiper-initialized swiper-horizontal swiper-backface-hidden">
                        <div class="swiper-wrapper" id="swiper-wrapper-3109a1ff4ed3f18c1" aria-live="polite"
                            style="transition-duration: 0ms; transition-delay: 0ms; transform: translate3d(0px, 0px, 0px);">
                            <!-- Lazy image -->
                            <div class="swiper-slide flex justify-center swiper-slide-active"
                                data-swiper-slide-index="0" role="group" aria-label="1 / 3"
                                style="width: 326px; margin-right: 10px;">
                                <div class=" shadow overflow-hidden flex items-center justify-center">
                                    <div class="w-full mx-10 ">
                                        <img src="/images/overview/mollion_product.jpg"
                                            class="w-full h-2/3 object-cover rounded-3xl aspect-square" alt="produk molion">

                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide flex justify-center swiper-slide-next" data-swiper-slide-index="1"
                                role="group" aria-label="2 / 3" style="width: 326px; margin-right: 10px;">
                                <div class=" shadow overflow-hidden flex items-center justify-center">
                                    <div class="w-full mx-10 ">
                                        <img src="/images/overview/insulation_foam.jpg"
                                            class="w-full h-2/3 object-cover rounded-3xl aspect-square" alt="insulation foam">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide flex justify-center" data-swiper-slide-index="2" role="group"
                                aria-label="3 / 3" style="width: 326px; margin-right: 10px;">
                                <div class=" shadow overflow-hidden flex items-center justify-center">
                                    <div class="w-full mx-10 ">
                                        <img src="/images/overview/mollion_production.jpg"
                                            class="w-full h-2/3 object-cover rounded-3xl aspect-square" alt="molion production">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide"
                            aria-controls="swiper-wrapper-3109a1ff4ed3f18c1"></div>
                        <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide"
                            aria-controls="swiper-wrapper-3109a1ff4ed3f18c1"></div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex items-center md:items-start flex-col justify-center px-8 md:px-10">
            <p
                class="text-[16px] text-center md:text-start font-normal tracking-[4%] mb-[80px] md:mb-[100px] mt-[58px]">
                <?= esc($overview_description ?? 'Kami tidak hanya menyediakan produk, tapi solusi bernilai bagi instansi dan bisnis. Dengan layanan
                        terpercaya, kami mendukung efisiensi, kualitas, dan keberlanjutan dalam setiap pengadaan untuk
                        kemajuan operasional, layanan publik, dan pembangunan jangka panjang.') ?>
            </p>
            <?= view('components/whatsapp_button') ?>
        </div>
    </div>
    <div id="overview-desktop-content" class="hidden sm:block px-15">
        <?= view('components/texts/title/title_group', ['id' => 'overview-title-sm', 'class' => 'flex flex-col w-full items-center justify-center mb-[80px] lg:hidden', 'top_title' => esc($overview_top_title ?? 'Menghadirkan Nilai,'), 'bottom_title' => esc($overview_bottom_title ?? 'Bukan Sekadar Barang')]) ?>

        <div class="md:grid md:grid-cols-2 md:gap-x-[20px] max-w-[1200px] max-w-3xl-custom">
            <div class="flex w-full items-center justify-center">
                <div id="image-container"
                    class="hidden sm:block w-full max-w-[650px] aspect-square relative sm:mx-10 md:mx-0 mb-[60px] sm:mb-[80px] md:mb-0">
                    <img id="img1" alt="BKKBN 1"
                        class="absolute top-0 right-30 w-[60%] z-2 rounded-3xl object-cover hover:scale-105 hover:z-10 transition-all aspect-square"
                        src="/images/overview/product-showcase.jpg" width="455" height="455">
                    <img id="img2" alt="Light green square with rounded corners"
                        class="absolute left-0 top-1/2 transform -translate-y-1/4 w-[60%] z-1 rounded-3xl object-cover hover:scale-105 hover:z-10 transition-all aspect-square"
                        src="/images/overview/product-packing.jpg" width="455" height="455">
                    <img id="img3" alt="Light green square with rounded corners"
                        class="absolute bottom-0 left-1/2 transform -translate-x-1/4 w-[60%] z-3 rounded-3xl object-cover  hover:scale-105 hover:z-10 transition-all aspect-square"
                        src="/images/overview/mollion_production.jpg" width="455" height="455">
                </div>
            </div>
            <div class="flex items-center md:items-start flex-col justify-center px-5 sm:px-8 md:px-10">
                <?= view('components/texts/title/title_group', ['id' => 'overview-title-lg', 'class' => 'hidden lg:block', 'top_title' => esc($overview_top_title ?? 'Menghadirkan Nilai,'), 'bottom_title' => esc($overview_bottom_title ?? 'Bukan Sekadar Barang')]) ?>
                <p
                    class="text-[16px] text-center md:text-start font-normal tracking-[4%] mb-[80px] md:mb-[100px] lg:mt-[58px]">
                    <?= esc($overview_description ?? 'Kami tidak hanya menyediakan produk, tapi solusi bernilai bagi instansi dan bisnis. Dengan layanan
                            terpercaya, kami mendukung efisiensi, kualitas, dan keberlanjutan dalam setiap pengadaan untuk
                            kemajuan operasional, layanan publik, dan pembangunan jangka panjang.') ?>
                </p>
                <?= view('components/whatsapp_button') ?>
            </div>
        </div>
    </div>
</section>
<section id="category-section"
    class="w-full min-h-screen flex items-center justify-center  bg-black py-[120px] md:py-[175px]">
    <div id="claim-container" class="w-full flex flex-col items-center justify-center">
        <div id="claim-number-container-mobile"
            class=" grid sm:hidden grid-cols-2 text-white max-w-[1000px] w-full mb-[85px] px-10 md:mx-0 gap-y-7 gap-x-10">
            <div class="flex flex-col items-center justify-center w-full col-span-2">
                <div class="counter text-center" id="total-order" data-target="40000">
                    <div class="flex items-center justify-center"><span
                            class="value roboto-bold text-[60px]">40.000</span><span
                            class="plus roboto-bold text-[30px]">+</span></div>
                    <span
                        class="text-[14px] tracking-[4%] open-sans-regular text-white/80"><?= esc($order_title ?? 'Permintaan Terpenuhi') ?></span>
                </div>
            </div>
            <div class="flex flex-col items-end justify-start w-full ">
                <div class="counter text-center" id="total-city" data-target="98">
                    <div class="flex items-center justify-center"><span
                            class="value roboto-bold text-[46px]">95</span><span
                            class="plus roboto-bold text-[30px]">+</span></div>
                    <span
                        class="text-[14px] tracking-[4%] open-sans-regular text-white/80"><?= esc($cities_title ?? 'Kota Dijangkau') ?></span>
                </div>
            </div>

            <div class="flex flex-col items-start justify-start w-full">
                <div class="counter text-center" id="total-product" data-target="200">
                    <div class="flex items-center justify-center"><span
                            class="value roboto-bold text-[46px]">200</span><span
                            class="plus roboto-bold text-[30px]">+</span></div>
                    <span
                        class="text-[14px] tracking-[4%] open-sans-regular text-white/80"><?= esc($total_product_title ?? 'Total Produk') ?></span>
                </div>
            </div>
        </div>
        <div id="claim-number-container-desktop"
            class="hidden sm:grid grid-cols-3 text-white max-w-[1000px] w-full mb-[85px] px-10 md:px-20 lg:px-0">
            <div class="flex flex-col items-center justify-center w-full ">
                <div class="counter text-center" id="total-city" data-target="98">
                    <div class="flex items-center justify-center"><span
                            class="value roboto-bold text-[50px] md:text-[70px]">98</span></div>
                    <span
                        class="text-[16px] tracking-[4%] open-sans-regular text-white/80"><?= esc($cities_title ?? 'Kota Dijangkau') ?></span>
                </div>
            </div>
            <div class="flex flex-col items-center justify-center w-full">
                <div class="counter text-center" id="total-order" data-target="40000">
                    <div class="flex items-center justify-center"><span
                            class="value roboto-bold text-[50px] md:text-[70px]">40.000</span><span
                            class="plus roboto-bold text-[45px]">+</span></div>
                    <span
                        class="text-[16px] tracking-[4%] open-sans-regular text-white/80"><?= esc($order_title ?? 'Permintaan Terpenuhi') ?></span>
                </div>
            </div>
            <div class="flex flex-col items-center justify-center w-full">
                <div class="counter text-center" id="total-product" data-target="200">
                    <div class="flex items-center justify-center"><span
                            class="value roboto-bold text-[50px] md:text-[70px]">200</span><span
                            class="plus roboto-bold text-[45px]">+</span></div>
                    <span
                        class="text-[16px] tracking-[4%] open-sans-regular text-white/80"><?= esc($total_product_title ?? 'Total Produk') ?></span>
                </div>
            </div>
        </div>
        <div class=" w-full flex items-center justify-center mb-[27px] px-20">
            <div class="w-full lg:max-w-[600px] bg-white opacity-45 h-[2px]"></div>
        </div>

        <div id="partner-list"
            class="w-full max-w-[450px] flex items-center justify-between mb-[110px] md:mb-[150px] px-10 sm:px-0 scale-70 sm:scale-85 md:scale-95 lg:scale-100">
            <img src="/images/white-logo-jambore.png" alt="logo jambore" width="28" height="53">
            <img src="/images/white-logo-djp.png" alt="logo jambore" width="71" height="70">
            <img src="/images/white-logo-kb.png" alt="logo jambore" width="53" height="53">
            <img src="/images/white-logo-education.png" alt="logo jambore" width="53" height="53">
        </div>
        <div class="h-full w-full ">
            <div class=" relative flex flex-col items-center justify-center">
                <p
                    class="text-[16px] text-center open-sans-regular tracking-[4%] mb-[130px] md:mb-[160px] text-white px-10 w-full max-w-[646px]">
                    <?= esc($claim_description ?? 'Dipercaya oleh berbagai instansi di seluruh Indonesia, kami terus tumbuh dan berkembang untuk memenuhi kebutuhan Anda.') ?>

                </p>
                <a href="/product">
                    <button
                        class="button rounded-[15px] bg-white hover:bg-gray-200 py-[10px] px-[32px] flex items-center justify-center text-[16px] ubuntu-bold cursor-pointer">
                        <?= esc($see_product_button ?? 'Lihat Produk') ?>
                    </button>
                </a>
            </div>
        </div>
    </div>
</section>
<section id="service-section" class="w-full ">
    <div class="w-full flex items-center justify-center bg-white relative">
        <img class="absolute object-cover w-full h-full opacity-23 z-5" src="/images/background/background1.jpg"
            alt="background service">
        <div id="service-section-mobile" class="lg:hidden">
            <div class="w-full max-w-[1200px] max-w-3xl-custom my-[150px] z-20 relative px-10 md:px-15 ">
                <?= view('components/texts/title/title_group', ['id' => 'service-title', 'class' => 'block w-full mb-[60px] md:mb-[90px] text-center sm:hidden', 'top_title' => esc($service_top_title ?? 'Kami Memberikan'), 'bottom_title' => esc($service_bottom_title ?? 'Yang Terbaik')]) ?>
                <?= view('components/texts/title/title_group', ['id' => 'service-title-sm', 'class' => 'hidden sm:block text-center w-full sm:mb-[90px] items-start justify-center', 'top_title' => esc($service_top_title ?? 'Kami Memberikan'), 'bottom_title' => esc($service_bottom_title_2 ?? 'Yang Terbaik Untuk Anda')]) ?>

                <div class="w-full flex items-center justify-center h-auto mb-[60px] sm:mb-[120px]">
                    <img class="w-full h-auto md:w-[80%]" src="/images/service/service4.png" alt="layanan kami"
                        width="744" height="602">
                </div>
                <div class=" mb-[100px] sm:mb-[130px]">
                    <div class="w-full">

                        <div class="w-full  flex flex-col items-start gap-y-[55px] ">
                            <div class="our-benefit w-full leading-[150%]">
                                <div class="flex space-x-[35px] items-center">
                                    <div
                                        class="w-[50px] h-[50px] bg-[#2563EB] rounded-full relative flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1"
                                            viewBox="0 0 24 24" width="24px" height="24px" fill="white" class="">
                                            <path
                                                d="m2,19.49v-5.37c-.914-.734-1.5-1.859-1.5-3.12,0-2.206,1.794-4,4-4s4,1.794,4,4c0,1.261-.586,2.386-1.5,3.12v5.37l-2.5-2.5-2.5,2.5ZM19,.586v4.414h4.414L19,.586Zm-2,6.414V0H7c-1.657,0-3,1.343-3,3v2.021c.165-.014.332-.021.5-.021,3.308,0,6,2.691,6,6,0,.341-.029.675-.084,1h8.584v2h-9.305c-.2.345-.433.667-.695.964v1.036h10v2h-10v3h-3.318l-1.682-1.682v4.682h20V7h-7Z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="flex-1 h-full w-full">
                                        <div class="block">
                                            <h2
                                                class="ubuntu-bold text-[18px] md:text-[20px] tracking-[4%]  text-[#2563EB] title-shadow mb-[20px]">

                                                <?= ($service_1_title ?? 'Pembayaran & Garansi') ?></h2>
                                            <p
                                                class="open-sans-regular text-[14px] md:text-[16px] tracking-[8%] text-[#4E4E4E]">
                                                <?= esc($service_1_description ?? 'Nikmati kemudahan pembayaran dengan pilihan bank apapun serta garansi produk untuk kenyamanan Anda.') ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="our-benefit w-full leading-[150%]">
                                <div class="flex space-x-[35px] items-center">
                                    <div
                                        class="w-[50px] h-[50px] bg-[#2563EB] rounded-full relative flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1"
                                            viewBox="0 0 24 24" width="24px" height="24px" fill="white" class="">
                                            <path xmlns="http://www.w3.org/2000/svg"
                                                d="m5,0C2.243,0,0,2.243,0,5s2.243,5,5,5,5-2.243,5-5S7.757,0,5,0Zm1.216,7.63l-2.216-2.216v-3.414h2v2.586l1.63,1.63-1.414,1.414Zm8.784-3.63v14H0v-8.106c1.271,1.298,3.04,2.106,5,2.106,3.866,0,7-3.134,7-7,0-1.488-.468-2.866-1.26-4h1.26c1.654,0,3,1.346,3,3Zm6.942,16c.034.162.058.328.058.5,0,1.381-1.119,2.5-2.5,2.5s-2.5-1.119-2.5-2.5c0-.172.024-.338.058-.5h4.885Zm-14,0c.034.162.058.328.058.5,0,1.381-1.119,2.5-2.5,2.5s-2.5-1.119-2.5-2.5c0-.172.024-.338.058-.5h4.885Zm9.058-7h7v5h-7v-5Zm7-3v1h-7v-6h2c2.757,0,5,2.243,5,5Z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="flex-1 h-full w-full">
                                        <div class="block">
                                            <h2
                                                class=" ubuntu-bold text-[18px] md:text-[20px] tracking-[4%]  text-[#2563EB] title-shadow mb-[20px]">
                                                <?= ($service_2_title ?? 'Harga, Stok, & Pengiriman') ?>
                                            </h2>
                                            <p
                                                class="open-sans-regular text-[14px] md:text-[16px] tracking-[8%] text-[#4E4E4E]">
                                                <?= esc($service_2_description ?? 'Kami menawarkan harga yang lebih murah dari distributor lain, stok selalu tersedia, dan pengiriman fleksibel sesuai kebutuhan Anda.') ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="our-benefit w-full leading-[150%]">
                                <div class="flex space-x-[35px] items-center">
                                    <div
                                        class="w-[50px] h-[50px] bg-[#2563EB] rounded-full relative flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1"
                                            viewBox="0 0 24 24" width="24px" height="24px" fill="white" class="">
                                            <path xmlns="http://www.w3.org/2000/svg"
                                                d="m0,6.5c0-1.381,1.119-2.5,2.5-2.5s2.5,1.119,2.5,2.5-1.119,2.5-2.5,2.5S0,7.881,0,6.5Zm4,15.5H1c-.552,0-1,.448-1,1s.448,1,1,1h3c.552,0,1-.448,1-1s-.448-1-1-1Zm17.5-13c1.381,0,2.5-1.119,2.5-2.5s-1.119-2.5-2.5-2.5-2.5,1.119-2.5,2.5,1.119,2.5,2.5,2.5Zm-15,9h-1.5v-5.5c0-1.381-1.119-2.5-2.5-2.5s-2.5,1.119-2.5,2.5v4.5c0,1.637,1.318,2.971,2.948,2.999.017,0,3.552.001,3.552.001.276,0,.5.224.5.5v2.5c0,.552.448,1,1,1s1-.448,1-1v-2.5c0-1.378-1.122-2.5-2.5-2.5Zm8.5,2.5v2.5c0,.552.448,1,1,1s1-.448,1-1v-2.5c0-.276.224-.5.5-.5,0,0,3.535,0,3.552-.001,1.63-.028,2.948-1.362,2.948-2.999v-4.5c0-1.381-1.119-2.5-2.5-2.5s-2.5,1.119-2.5,2.5v5.5s-1.5,0-1.5,0c-1.378,0-2.5,1.122-2.5,2.5Zm8,1.5h-3c-.552,0-1,.448-1,1s.448,1,1,1h3c.552,0,1-.448,1-1s-.448-1-1-1Zm-6-8c0-.552-.448-1-1-1h-8c-.552,0-1,.448-1,1s.448,1,1,1h8c.552,0,1-.448,1-1Zm-5.086-4.498c-.362,0-.729-.128-1.021-.387l-1.348-1.116h-.093c-1.378,0-2.5-1.122-2.5-2.5v-3c0-1.378,1.122-2.5,2.5-2.5h5c1.378,0,2.5,1.122,2.5,2.5v3c0,1.378-1.122,2.5-2.5,2.5h-.187l-1.375,1.138c-.272.242-.623.365-.977.365Z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="flex-1 h-full w-full">
                                        <div class="block">
                                            <h2
                                                class=" ubuntu-bold text-[18px] md:text-[20px] tracking-[4%]  text-[#2563EB] title-shadow mb-[20px]">
                                                <?= ($service_3_title ?? 'Layanan Khusus & Konsultasi') ?>
                                            </h2>
                                            <p
                                                class="open-sans-regular text-[14px] md:text-[16px] tracking-[8%] text-[#4E4E4E]">

                                                <?= esc($service_3_description ?? 'Kami menyediakan layanan konsultasi produk, custom merk, gratis sampel untuk produk tertentu.') ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="w-full flex items-center justify-center">
                    <p
                        class="w-full max-w-[600px] open-sans-regular text-[16px] tracking-[4%] text-center text-[#4E4E4E] mb-[48px] sm:mb-[80px] md:mb-[70px]">
                        <?= esc($service_description ?? 'Pengadaan perlengkapan outdoor hingga infrastruktur dengan layanan cepat, terpercaya, dan dukungan profesional.') ?>
                    </p>

                </div>
                <div class="w-full flex items-center justify-center">
                    <?= view('components/whatsapp_button') ?>
                </div>
            </div>
        </div>
        <div id="service-section-desktop" class="hidden lg:block pt-[150px] lg:px-5">
            <div class="flex w-full itemx-center justify-center z-20 relative mb-[80px] xl:hidden">
                <?= view('components/texts/title/title_group', ['id' => 'service-title-lg', 'class' => 'block text-center', 'top_title' => esc($service_top_title ?? 'Kami Memberikan'), 'bottom_title' => esc($service_bottom_title_2 ?? 'Yang Terbaik Untuk Anda')]) ?>
            </div>
            <div class="w-full max-w-[1200px] max-w-3xl-custom pb-[150px] z-20 relative px-10">
                <div class="grid grid-cols-2 gap-x-[50px] mb-[144px]">
                    <div class="w-full">
                        <div>
                            <?= view('components/texts/title/title_group', ['id' => 'service-title-xl', 'class' => 'hidden xl:block text-start', 'top_title' => esc($service_top_title ?? 'Kami Memberikan'), 'bottom_title' => esc($service_bottom_title_2 ?? 'Yang Terbaik Untuk Anda')]) ?>
                        </div>
                        <div class="w-full  flex flex-col items-start gap-y-[55px] mt-[50px] xl:mt-[80px]">
                            <div class="our-benefit w-[90%] ml-0">
                                <div class="flex space-x-[35px] items-center">
                                    <div
                                        class="w-[60px] h-[60px] bg-[#2563EB] rounded-full relative flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1"
                                            viewBox="0 0 24 24" width="24px" height="24px" fill="white" class="">
                                            <path
                                                d="m2,19.49v-5.37c-.914-.734-1.5-1.859-1.5-3.12,0-2.206,1.794-4,4-4s4,1.794,4,4c0,1.261-.586,2.386-1.5,3.12v5.37l-2.5-2.5-2.5,2.5ZM19,.586v4.414h4.414L19,.586Zm-2,6.414V0H7c-1.657,0-3,1.343-3,3v2.021c.165-.014.332-.021.5-.021,3.308,0,6,2.691,6,6,0,.341-.029.675-.084,1h8.584v2h-9.305c-.2.345-.433.667-.695.964v1.036h10v2h-10v3h-3.318l-1.682-1.682v4.682h20V7h-7Z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="flex-1 h-full w-full">
                                        <div class="block">
                                            <h2
                                                class=" ubuntu-bold text-[20px] xl:text-[22px] tracking-[4%]  text-[#2563EB] title-shadow mb-[18px]">
                                                <?= ($service_1_title ?? 'Pembayaran & Garansi') ?></h2>
                                            <p class="open-sans-regular text-[16px] tracking-[8%] text-[#4E4E4E]">
                                                <?= esc($service_1_description ?? 'Nikmati kemudahan pembayaran dengan pilihan bank apapun serta garansi produk untuk kenyamanan Anda.') ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="our-benefit w-[90%] mx-auto">
                                <div class="flex space-x-[35px] items-center">
                                    <div
                                        class="w-[60px] h-[60px] bg-[#2563EB] rounded-full relative flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1"
                                            viewBox="0 0 24 24" width="24px" height="24px" fill="white" class="">
                                            <path xmlns="http://www.w3.org/2000/svg"
                                                d="m5,0C2.243,0,0,2.243,0,5s2.243,5,5,5,5-2.243,5-5S7.757,0,5,0Zm1.216,7.63l-2.216-2.216v-3.414h2v2.586l1.63,1.63-1.414,1.414Zm8.784-3.63v14H0v-8.106c1.271,1.298,3.04,2.106,5,2.106,3.866,0,7-3.134,7-7,0-1.488-.468-2.866-1.26-4h1.26c1.654,0,3,1.346,3,3Zm6.942,16c.034.162.058.328.058.5,0,1.381-1.119,2.5-2.5,2.5s-2.5-1.119-2.5-2.5c0-.172.024-.338.058-.5h4.885Zm-14,0c.034.162.058.328.058.5,0,1.381-1.119,2.5-2.5,2.5s-2.5-1.119-2.5-2.5c0-.172.024-.338.058-.5h4.885Zm9.058-7h7v5h-7v-5Zm7-3v1h-7v-6h2c2.757,0,5,2.243,5,5Z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="flex-1 h-full w-full">
                                        <div class="block">
                                            <h2
                                                class=" ubuntu-bold text-[20px] xl:text-[22px] tracking-[4%]  text-[#2563EB] title-shadow mb-[18px]">
                                                <?= ($service_2_title ?? 'Harga, Stok, & Pengiriman') ?>
                                            </h2>
                                            <p class="open-sans-regular text-[16px] tracking-[8%] text-[#4E4E4E]">
                                                <?= esc($service_2_description ?? 'Kami menawarkan harga yang lebih murah dari distributor lain, stok selalu tersedia, dan pengiriman fleksibel sesuai kebutuhan Anda.') ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="our-benefit w-[90%] mr-0 ml-auto">
                                <div class="flex space-x-[35px] items-center">
                                    <div
                                        class="w-[60px] h-[60px] bg-[#2563EB] rounded-full relative flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1"
                                            viewBox="0 0 24 24" width="24px" height="24px" fill="white" class="">
                                            <path xmlns="http://www.w3.org/2000/svg"
                                                d="m0,6.5c0-1.381,1.119-2.5,2.5-2.5s2.5,1.119,2.5,2.5-1.119,2.5-2.5,2.5S0,7.881,0,6.5Zm4,15.5H1c-.552,0-1,.448-1,1s.448,1,1,1h3c.552,0,1-.448,1-1s-.448-1-1-1Zm17.5-13c1.381,0,2.5-1.119,2.5-2.5s-1.119-2.5-2.5-2.5-2.5,1.119-2.5,2.5,1.119,2.5,2.5,2.5Zm-15,9h-1.5v-5.5c0-1.381-1.119-2.5-2.5-2.5s-2.5,1.119-2.5,2.5v4.5c0,1.637,1.318,2.971,2.948,2.999.017,0,3.552.001,3.552.001.276,0,.5.224.5.5v2.5c0,.552.448,1,1,1s1-.448,1-1v-2.5c0-1.378-1.122-2.5-2.5-2.5Zm8.5,2.5v2.5c0,.552.448,1,1,1s1-.448,1-1v-2.5c0-.276.224-.5.5-.5,0,0,3.535,0,3.552-.001,1.63-.028,2.948-1.362,2.948-2.999v-4.5c0-1.381-1.119-2.5-2.5-2.5s-2.5,1.119-2.5,2.5v5.5s-1.5,0-1.5,0c-1.378,0-2.5,1.122-2.5,2.5Zm8,1.5h-3c-.552,0-1,.448-1,1s.448,1,1,1h3c.552,0,1-.448,1-1s-.448-1-1-1Zm-6-8c0-.552-.448-1-1-1h-8c-.552,0-1,.448-1,1s.448,1,1,1h8c.552,0,1-.448,1-1Zm-5.086-4.498c-.362,0-.729-.128-1.021-.387l-1.348-1.116h-.093c-1.378,0-2.5-1.122-2.5-2.5v-3c0-1.378,1.122-2.5,2.5-2.5h5c1.378,0,2.5,1.122,2.5,2.5v3c0,1.378-1.122,2.5-2.5,2.5h-.187l-1.375,1.138c-.272.242-.623.365-.977.365Z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="flex-1 h-full w-full">
                                        <div class="block">
                                            <h2
                                                class=" ubuntu-bold text-[20px] xl:text-[22px] tracking-[4%]  text-[#2563EB] title-shadow mb-[18px]">
                                                <?= ($service_3_title ?? 'Layanan Khusus & Konsultasi') ?>
                                            </h2>
                                            <p class="open-sans-regular text-[16px] tracking-[8%] text-[#4E4E4E]">
                                                <?= esc($service_3_description ?? 'Kami menyediakan layanan konsultasi produk, custom merk, gratis sampel untuk produk tertentu.') ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full h-full flex flex-col items-center xl:items-end justify-center xl:justify-end">
                        <img class="w-full h-auto" src="/images/service/service4.png" alt="layanan kami" width="744"
                            height="602">
                    </div>
                </div>
                <div class="w-full flex items-center justify-center">
                    <p
                        class="w-full max-w-[600px] open-sans-regular text-[18px] tracking-[4%] text-center text-[#4E4E4E] mb-[48px]">
                        <?= esc($service_description ?? 'Pengadaan perlengkapan outdoor hingga infrastruktur dengan layanan cepat, terpercaya, dan dukungan profesional.') ?>
                    </p>

                </div>
                <div class="w-full flex items-center justify-center">
                    <?= view('components/whatsapp_button') ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="preparation-section"
    class="w-full h-full min-h-screen lg:min-h-0 lg:max-h-[100vh] relative overflow-hidden flex flex-col items-center justify-center bg-gray-200 md:py-[150px] lg:py-0">
    <div class="w-full h-auto">

        <?= view('components/texts/title/title_group', ['id' => 'preparation-title', 'class' => 'block w-full mb-[60px] md:hidden text-center', 'top_title' => $preparation_top_title ?? 'Dari Desain', 'bottom_title' => $preparation_bottom_title ?? 'Sampai Pengiriman']) ?>
        <?= view('components/texts/title/title_group', ['id' => 'preparation-title-md', 'class' => 'hidden md:block lg:hidden w-full mb-[90px] text-center', 'top_title' => $preparation_top_title ?? 'Dari Desain', 'bottom_title' => $preparation_bottom_title ?? 'Sampai Pengiriman']) ?>

        <!-- <p class="open-sans-regular text-center mb-[40px]">Semua permintaan Anda dimulai dari sini</p> -->
        <div
            class="preparation-swiper swiper-initialized swiper-horizontal swiper-backface-hidden mb-[60px] lg:mb-0 relative">
            <div class="swiper-wrapper" id="swiper-wrapper" aria-live="polite">
                <!-- Lazy image -->
                <div class="swiper-slide flex justify-center swiper-slide-active" role="group"
                    style="width: 326px; margin-right: 10px;">
                    <div class="overflow-hidden flex items-center justify-center p-5 lg:p-0">
                        <div class="w-full ">
                            <img loading="lazy" src="/images/preparation/preparation1.webp"
                                class="w-full aspect-3/2 object-cover shadow-lg lg:shadow-none rounded-[20px] lg:rounded-none" alt="persiapan produk">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide flex justify-center swiper-slide-active" role="group"
                    style="width: 326px; margin-right: 10px;">
                    <div class="overflow-hidden flex items-center justify-center p-5 lg:p-0">
                        <div class="w-full ">
                            <img loading="lazy" src="/images/preparation/preparation2.webp"
                                class="w-full aspect-3/2 object-cover shadow-lg lg:shadow-none rounded-[20px] lg:rounded-none" alt="produksi produk">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide flex justify-center swiper-slide-active" role="group"
                    style="width: 326px; margin-right: 10px;">
                    <div class="overflow-hidden flex items-center justify-center p-5 lg:p-0">
                        <div class="w-full ">
                            <img loading="lazy" src="/images/preparation/preparation3.webp"
                                class="w-full aspect-3/2 object-cover shadow-lg lg:shadow-none rounded-[20px] lg:rounded-none" alt="quality controll product">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide flex justify-center swiper-slide-active" role="group"
                    style="width: 326px; margin-right: 10px;">
                    <div class="overflow-hidden flex items-center justify-center p-5 lg:p-0">
                        <div class="w-full ">
                            <img loading="lazy" src="/images/preparation/preparation4.webp"
                                class="w-full aspect-3/2 object-cover shadow-lg lg:shadow-none rounded-[20px] lg:rounded-none"  alt="distribusi produk">
                        </div>
                    </div>
                </div>
            </div>
            <div class="absolute w-full h-full bg-transparent top-0 left-0 flex items-center justify-between px-8">
                <div id="preparation-swiper-prev-button"
                    class="scale-x-[-1] w-[40px] h-[40px] rounded-full flex items-center justify-center bg-blue-100/50 lg:bg-blue-100/80 relative z-60"
                    tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-9c589810a2806319"
                    aria-disabled="false">
                    <?= view('components/icons/arrow', ['fill' => '#242424', 'class' => 'h-[20px]']) ?>
                </div>
                <div id="preparation-swiper-next-button"
                    class="w-[40px] h-[40px] rounded-full flex items-center justify-center bg-blue-100/80 lg:bg-blue-100/50 relative z-60"
                    tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-9c589810a2806319"
                    aria-disabled="false">
                    <?= view('components/icons/arrow', ['fill' => '#242424', 'class' => 'h-[20px]']) ?>
                </div>
            </div>
        </div>
        <div
            class="hidden lg:flex absolute bottom-0 pb-[40px] pt-[10px]  flex-col w-full items-center justify-center px-5 z-30 bg-gradient-to-t from-black to-black/10 backdrop-blur-xs">
            <p id="dynamic-title-desktop" class="fade-text ubuntu-bold text-[24px] text-white mb-[12px]">Perencanaan &
                Desain</p>
            <div id="pagination-desktop" class="w-[250px] h-[10px] flex items-center mb-[30px]">
                <div class="dot w-[10px] h-[10px] bg-white rounded-full"></div>
                <div class="line flex-1 h-[2px] bg-white overflow-hidden relative">
                    <div class="line-fill absolute top-0 left-0 h-full bg-blue-500 w-0 transition-all duration-500">
                    </div>
                </div>
                <div class="dot w-[10px] h-[10px] bg-white rounded-full"></div>
                <div class="line flex-1 h-[2px] bg-white overflow-hidden relative">
                    <div class="line-fill absolute top-0 left-0 h-full bg-blue-500 w-0 transition-all duration-500">
                    </div>
                </div>
                <div class="dot w-[10px] h-[10px] bg-white rounded-full"></div>
                <div class="line flex-1 h-[2px] bg-white overflow-hidden relative">
                    <div class="line-fill absolute top-0 left-0 h-full bg-blue-500 w-0 transition-all duration-500">
                    </div>
                </div>
                <div class="dot w-[10px] h-[10px] bg-white rounded-full"></div>
            </div>
            <p id="dynamic-desc-desktop"
                class="max-w-[428px] fade-text ubuntu-regular text-[16px] text-white text-center">Kami mulai dengan
                perencanaan matang dan desain produk sesuai kebutuhan pelanggan. </p>
        </div>
    </div>
    <div class="lg:hidden flex flex-col w-full items-center justify-center px-5">
        <p id="dynamic-title" class="fade-text ubuntu-bold text-[24px] text-[#242424] mb-[12px]">Perencanaan & Desain
        </p>
        <div id="pagination-mobile" class="w-[150px] h-[10px] flex items-center mb-[30px]">
            <div class="dot w-[10px] h-[10px] bg-blue-500 rounded-full"></div>
            <div class="line flex-1 h-[2px] bg-gray-300 overflow-hidden relative">
                <div class="line-fill absolute top-0 left-0 h-full bg-blue-500 w-0 transition-all duration-500"></div>
            </div>
            <div class="dot w-[10px] h-[10px] bg-gray-500 rounded-full"></div>
            <div class="line flex-1 h-[2px] bg-gray-300 overflow-hidden relative">
                <div class="line-fill absolute top-0 left-0 h-full bg-blue-500 w-0 transition-all duration-500"></div>
            </div>
            <div class="dot w-[10px] h-[10px] bg-gray-500 rounded-full"></div>
            <div class="line flex-1 h-[2px] bg-gray-300 overflow-hidden relative">
                <div class="line-fill absolute top-0 left-0 h-full bg-blue-500 w-0 transition-all duration-500"></div>
            </div>
            <div class="dot w-[10px] h-[10px] bg-gray-500 rounded-full"></div>
        </div>
        <p id="dynamic-desc" class="fade-text ubuntu-regular text-[16px] text-[#242424] text-center">Kami mulai dengan
            perencanaan matang dan desain produk sesuai kebutuhan pelanggan. </p>
    </div>

</section>
<section id="why-us-section" class="w-full">
    <div class="w-full flex flex-col items-center justify-center bg-white relative mt-[150px] ">
        <img loading="lazy" class="absolute object-cover w-full h-full opacity-23 z-5"
            src="/images/background/background1.jpg" alt="background service">
        <div class="w-full flex items-center justify-center relative z-20">

            <?= view('components/texts/title/title_group', ['id' => 'why-us-title', 'class' => 'block w-full mb-[60px] sm:hidden text-center', 'top_title' =>  $why_us_top_title ?? 'Mengapa',
            'bottom_title' => $why_us_bottom_title ?? 'Memilih Kami']) ?>

            <div class="hidden sm:flex w-full mb-[60px] sm:mb-[90px] items-start justify-center">
                <h2
                    class="text-[32px] h-[34px] md:text-[34px] md:h-[38px] xl:text-[38px] xl:h-[40px] 2xl:text-[40px] 2xl:h-[40px] ubuntu-bold text-black title-shadow text-center mr-2">
                    <?= esc($why_us_top_title ?? 'Mengapa') ?>
                </h2>
                <span
                    class="text-[32px] h-[34px] md:text-[34px] md:h-[38px] xl:text-[38px] xl:h-[40px] 2xl:text-[40px] 2xl:h-[40px] ubuntu-bold text-[#2563EB] title-shadow">
                    <?= esc($why_us_bottom_title ?? 'Memilih Kami') ?>
                </span>
            </div>
        </div>
        <div id="why-us-section-mobile" class="lg:hidden">
            <div class="w-full max-w-[1200px] max-w-3xl-custom z-20 relative px-10 md:px-15 ">

                <div class="w-full flex items-center justify-center h-auto mb-[60px] sm:mb-[120px]">
                    <img class="w-[90%] h-auto md:w-[80%]" src="/images/why us/whyus2.png" alt="layanan kami"
                        width="744" height="602">
                </div>
                <div class=" mb-[100px] sm:mb-[120px]">
                    <div class="w-full">
                        <div class="w-full  flex flex-col items-start gap-y-[45px] md:gap-y-[55px] ">
                            <div class="our-benefit w-full leading-[150%]">
                                <div class="flex space-x-[35px] items-center">
                                    <div
                                        class="w-[50px] h-[50px] bg-[#2563EB] rounded-full relative flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 65 65" width="65"
                                            height="65" fill="white" class="w-[28px] h-[28px]">
                                            <g clip-path="url(#clip0_707_53)">
                                                <path
                                                    d="M11.459 36.2518C11.459 34.7856 10.8876 33.4606 9.97547 32.449C10.8876 31.4375 11.459 30.1125 11.459 28.6463C11.459 25.5009 8.9003 22.9421 5.75492 22.9421H0.0507812C0.0507812 24.4018 0.0507812 42.9076 0.0507812 41.9559H5.75492C8.9003 41.9559 11.459 39.3972 11.459 36.2518ZM3.85354 26.7449H5.75492C6.80397 26.7449 7.65629 27.5972 7.65629 28.6463C7.65629 29.6953 6.80397 30.5477 5.75492 30.5477H3.85354V26.7449ZM3.85354 34.3504H5.75492C6.80397 34.3504 7.65629 35.2027 7.65629 36.2518C7.65629 37.3008 6.80397 38.1532 5.75492 38.1532H3.85354V34.3504Z"
                                                    fill="white"></path>
                                                <path
                                                    d="M24.8184 28.6463C24.8184 25.5009 22.2597 22.9421 19.1143 22.9421H13.4102C13.4102 24.4018 13.4102 42.9076 13.4102 41.9559H17.2129V34.3504H17.939L22.0666 42.6058L25.4683 40.905L21.8311 33.6304C23.6013 32.6612 24.8184 30.8029 24.8184 28.6463ZM17.2129 30.5477V26.7449H19.1143C20.1633 26.7449 21.0157 27.5972 21.0157 28.6463C21.0157 29.6953 20.1633 30.5477 19.1143 30.5477H17.2129Z"
                                                    fill="white"></path>
                                                <path
                                                    d="M38.127 41.9559C38.127 40.513 38.127 28.0025 38.127 28.6463C38.127 25.5009 35.5683 22.9421 32.4229 22.9421C29.2775 22.9421 26.7188 25.5009 26.7188 28.6463C26.7188 31.7123 26.7188 42.3465 26.7188 41.9559H30.5215V34.3504H34.3243V41.9559H38.127ZM30.5215 30.5476V28.6463C30.5215 27.5972 31.3738 26.7449 32.4229 26.7449C33.4719 26.7449 34.3243 27.5972 34.3243 28.6463V30.5476H30.5215Z"
                                                    fill="white"></path>
                                                <path
                                                    d="M59.2476 22.9421H53.3398V41.9559H59.2476C62.3929 41.9559 64.9517 39.3972 64.9517 36.2518V28.6463C64.9517 25.5008 62.3929 22.9421 59.2476 22.9421ZM61.1489 36.2518C61.1489 37.3008 60.2966 38.1532 59.2476 38.1532H57.1426V26.7449H59.2476C60.2966 26.7449 61.1489 27.5972 61.1489 28.6463V36.2518Z"
                                                    fill="white"></path>
                                                <path
                                                    d="M46.1474 41.9559H51.4356V22.9421H47.6329V32.215L45.3156 22.9421H40.0273V41.9559H43.8301V32.683L46.1474 41.9559Z"
                                                    fill="white"></path>
                                                <path
                                                    d="M56.5741 15.3366C56.5587 15.2232 56.5279 15.1131 56.533 14.995L56.5311 14.1929C56.5905 12.6387 55.9851 11.1087 54.8749 10.002C53.7645 8.88791 52.227 8.28264 50.7527 8.34018H49.8335C49.0871 8.32168 48.3277 7.88892 48.0139 7.05523L47.7131 6.3663C47.1747 4.86966 46.0104 3.67953 44.5974 3.13915C43.1937 2.52273 41.5579 2.53946 40.1132 3.16882L39.3074 3.51601C38.5553 3.84469 37.7124 3.6775 37.1145 3.04066L36.576 2.50587C34.5112 0.203427 30.2666 0.277707 28.3429 2.43159L27.6893 3.08516C27.1378 3.6756 26.2949 3.84279 25.5336 3.5122L24.7482 3.17617C23.2887 2.53185 21.6492 2.5207 20.3327 3.10379C18.8379 3.6794 17.6736 4.86966 17.1779 6.25665L16.8009 7.14054C16.5205 7.8888 15.7704 8.38277 14.9701 8.34006L14.168 8.34196C12.5749 8.29366 11.0857 8.88968 9.97712 9.99819C8.86304 11.1086 8.25776 12.6386 8.31531 14.1204L8.31721 15.0841C8.32089 15.1628 8.25016 15.2531 8.23989 15.3366H0.0507812V19.1394C1.37427 19.1394 67.0617 19.1394 64.9511 19.1394V15.3366H56.5741Z"
                                                    fill="white"></path>
                                                <path
                                                    d="M0.0497852 45.7588V49.5615H8.27325C8.28858 49.675 8.31939 49.785 8.31432 49.9032L8.31622 50.7053C8.25677 52.2595 8.86217 53.7895 9.97244 54.8962C11.0828 56.0103 12.5868 56.5822 14.0946 56.558H15.0138C15.6636 56.5395 16.5177 57.0073 16.8334 57.8429L17.1342 58.5319C17.6726 60.0285 18.8369 61.2186 20.2499 61.759C21.6518 62.3754 23.2894 62.3606 24.7341 61.7294L25.5399 61.3822C26.2976 61.0535 27.1349 61.2207 27.7328 61.8575L28.2713 62.3923C29.3038 63.5435 30.817 64.2027 32.4232 64.2027C34.0293 64.2027 35.5426 63.5435 36.5044 62.4666L37.158 61.813C37.7113 61.2226 38.5561 61.0536 39.3138 61.386L40.0991 61.722C41.5531 62.3626 43.1926 62.3738 44.5147 61.7944C46.0094 61.2188 47.1737 60.0285 47.6694 58.6415L48.0464 57.7576C48.3268 57.0094 49.0212 56.5265 49.8772 56.5581L50.6793 56.5562C52.2984 56.649 53.7635 56.0103 54.8702 54.9C55.9843 53.7896 56.5895 52.2596 56.532 50.7778L56.5301 49.814C56.5264 49.7353 56.5972 49.6451 56.6074 49.5615H64.95V45.7588C63.6267 45.7588 -2.06074 45.7588 0.0497852 45.7588Z"
                                                    fill="white"></path>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_707_53">
                                                    <rect width="65" height="65" fill="white"></rect>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                    <div class="flex-1 h-full w-full">
                                        <div class="block">
                                            <h2
                                                class="ubuntu-bold text-[18px] tracking-[4%]  text-[#2563EB] title-shadow mb-[10px]">
                                                <?= esc($why_us_1_title ?? 'Kustom Merk') ?></h2>
                                            <p
                                                class="open-sans-regular text-[14px] md:text-[16px] tracking-[8%] text-[#4E4E4E]">
                                                <?= esc($why_us_1_description ?? 'Memungkinkan produk disesuaikan dengan logo dan identitas bisnis Anda.') ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="our-benefit w-full leading-[150%]">
                                <div class="flex space-x-[35px] items-center">
                                    <div
                                        class="w-[50px] h-[50px] bg-[#2563EB] rounded-full relative flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 65 65" width="65"
                                            height="65" fill="white" class="w-[28px] h-[28px]">
                                            <path
                                                d="M27.8264 15.732L11.6881 43.6719C11.0148 44.8382 10.8323 46.2243 11.1808 47.5252C11.5294 48.826 12.3804 49.9352 13.5467 50.6086L28.9436 59.5055C28.6077 58.6692 28.4353 57.7762 28.4358 56.875V24.6086C28.4341 21.7146 29.5556 18.9329 31.5639 16.8492L38.0436 10.1562L33.2092 11.5172C30.9373 12.173 29.008 13.6837 27.8264 15.732Z"
                                                fill="white"></path>
                                            <path
                                                d="M4.92431 34.1047C3.9723 35.057 3.4375 36.3484 3.4375 37.695C3.4375 39.0415 3.9723 40.3329 4.92431 41.2852L8.98681 45.3477C9.1166 44.396 9.43791 43.4804 9.93134 42.6563C12.2977 38.5938 22.7587 20.4446 28.436 10.6946C27.7556 11.2227 28.9946 10.0547 4.92431 34.1047Z"
                                                fill="white"></path>
                                            <path
                                                d="M44.3906 39.6094H44.6852V35.5469H44.3906C43.8519 35.5469 43.3352 35.7609 42.9543 36.1418C42.5734 36.5227 42.3594 37.0394 42.3594 37.5781C42.3594 38.1168 42.5734 38.6335 42.9543 39.0144C43.3352 39.3954 43.8519 39.6094 44.3906 39.6094Z"
                                                fill="white"></path>
                                            <path
                                                d="M51.7969 2.91504C51.3882 5.30588 50.3585 7.54738 48.8109 9.41504C48.3377 8.92826 47.7716 8.54132 47.1462 8.2771C46.5209 8.01288 45.8488 7.87674 45.1699 7.87674C44.491 7.87674 43.819 8.01288 43.1936 8.2771C42.5682 8.54132 42.0022 8.92826 41.5289 9.41504L33.0281 18.2814C31.39 19.981 30.4729 22.2483 30.4688 24.6088V56.8752C30.4688 58.222 31.0038 59.5136 31.9561 60.466C32.9084 61.4183 34.2001 61.9533 35.5469 61.9533H54.8438C56.1906 61.9533 57.4822 61.4183 58.4345 60.466C59.3869 59.5136 59.9219 58.222 59.9219 56.8752V24.6088C59.9177 22.2483 59.0006 19.981 57.3625 18.2814L51.6648 12.3705C50.3916 13.7564 48.8368 14.8541 47.1047 15.59C46.9799 15.941 46.7611 16.2508 46.4721 16.4857C46.1831 16.7207 45.8351 16.8716 45.4661 16.9221C45.0971 16.9725 44.7213 16.9206 44.3799 16.7719C44.0384 16.6232 43.7444 16.3835 43.53 16.079C43.3155 15.7745 43.189 15.4169 43.1641 15.0453C43.1392 14.6737 43.217 14.3024 43.3889 13.972C43.5608 13.6416 43.8202 13.3649 44.1388 13.172C44.4574 12.9791 44.8229 12.8775 45.1953 12.8783C45.477 12.8804 45.7553 12.9411 46.0123 13.0565C46.2693 13.1719 46.4995 13.3395 46.6883 13.5486C47.3123 13.2687 47.9076 12.9285 48.4656 12.533C49.1051 12.0525 49.703 11.5191 50.2531 10.9385C52.1518 8.7364 53.3909 6.04347 53.8281 3.16895L51.7969 2.91504ZM44.393 33.5158H44.6875V31.0479H46.7188V33.5158H47.0133C48.0907 33.5158 49.124 33.9438 49.8859 34.7057C50.6478 35.4676 51.0758 36.5009 51.0758 37.5783H49.0445C49.0445 37.0396 48.8305 36.5229 48.4496 36.142C48.0687 35.7611 47.552 35.5471 47.0133 35.5471H46.7188V39.6096H47.0133C48.0907 39.6096 49.124 40.0376 49.8859 40.7994C50.6478 41.5613 51.0758 42.5946 51.0758 43.6721C51.0758 44.7495 50.6478 45.7828 49.8859 46.5447C49.124 47.3066 48.0907 47.7346 47.0133 47.7346H46.7188V50.2025H44.6875V47.7346H44.393C43.3155 47.7346 42.2822 47.3066 41.5203 46.5447C40.7585 45.7828 40.3305 44.7495 40.3305 43.6721H42.3617C42.3617 44.2108 42.5757 44.7275 42.9567 45.1084C43.3376 45.4893 43.8542 45.7033 44.393 45.7033H44.6875V41.6408H44.393C43.3155 41.6408 42.2822 41.2128 41.5203 40.4509C40.7585 39.6891 40.3305 38.6558 40.3305 37.5783C40.3305 36.5009 40.7585 35.4676 41.5203 34.7057C42.2822 33.9438 43.3155 33.5158 44.393 33.5158Z"
                                                fill="white"></path>
                                            <path
                                                d="M49.0445 43.6719C49.0445 43.1332 48.8305 42.6165 48.4496 42.2356C48.0687 41.8546 47.552 41.6406 47.0133 41.6406H46.7188V45.7031H47.0133C47.552 45.7031 48.0687 45.4891 48.4496 45.1082C48.8305 44.7273 49.0445 44.2106 49.0445 43.6719Z"
                                                fill="white"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1 h-full w-full">
                                        <div class="block">
                                            <h2
                                                class="ubuntu-bold text-[18px] tracking-[4%]  text-[#2563EB] title-shadow mb-[10px]">
                                                <?= esc($why_us_2_title ?? 'Harga Kompetitif') ?></h2>
                                            <p
                                                class="open-sans-regular text-[14px] md:text-[16px] tracking-[8%] text-[#4E4E4E]">
                                                <?= esc($why_us_2_description ?? 'Kami menawarkan harga terbaik yang bersaing di pasar.') ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="our-benefit w-full leading-[150%]">
                                <div class="flex space-x-[35px] items-center">
                                    <div
                                        class="w-[50px] h-[50px] bg-[#2563EB] rounded-full relative flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 65 65" width="65"
                                            height="65" fill="white" class="w-[28px] h-[28px]">
                                            <g clip-path="url(#clip0_707_27)">
                                                <path
                                                    d="M22.4408 50.1621C21.1974 50.1621 20.0396 49.6046 19.2646 48.6325L16.5437 45.2207L14.1499 44.0679L7.89984 56.6386C7.58652 57.269 7.62182 58.0167 7.99328 58.6147C8.36386 59.2113 9.01652 59.5742 9.7187 59.5742H9.72327L15.5207 59.5611L19.0095 64.1912C19.3953 64.7032 19.9975 65.0002 20.6315 65C20.6937 65 20.7561 64.9972 20.8187 64.9914C21.5198 64.9265 22.1373 64.5034 22.4506 63.8731L28.7916 51.1191L26.8046 50.1621H22.4408Z"
                                                    fill="white"></path>
                                                <path
                                                    d="M57.095 56.6386L50.845 44.0679L48.4512 45.2207L45.7303 48.6326C44.9553 49.6046 43.7976 50.1621 42.5541 50.1621H38.1902L36.2031 51.1191L42.5442 63.8731C42.8576 64.5034 43.4751 64.9265 44.176 64.9914C44.2386 64.9971 44.3011 65 44.3633 65C44.9972 65 45.5994 64.7032 45.9852 64.1912L49.474 59.5611L55.2715 59.5742H55.2761C55.9782 59.5742 56.6309 59.2115 57.0015 58.6147C57.3729 58.0167 57.4084 57.269 57.095 56.6386Z"
                                                    fill="white"></path>
                                                <path
                                                    d="M42.5577 48.131C43.1758 48.131 43.7605 47.8495 44.1458 47.3662L47.1557 43.5919L51.5051 41.4973C52.0621 41.229 52.4665 40.7219 52.6041 40.1192L53.6784 35.4127L56.6884 31.6384C57.0738 31.1551 57.2181 30.5226 57.0805 29.9199L56.0064 25.2135L57.0805 20.507C57.218 19.9042 57.0738 19.2719 56.6884 18.7884L53.6784 15.0142L52.6041 10.3077C52.4667 9.70506 52.0621 9.19788 51.5051 8.92963L47.1557 6.83503L44.1458 3.06071C43.7603 2.5774 43.1758 2.29595 42.5577 2.29595H37.7302L33.3807 0.201094C32.8236 -0.0670312 32.175 -0.0670312 31.6179 0.201094L27.2685 2.29569H22.441C21.8228 2.29569 21.2382 2.57715 20.8529 3.06046L17.843 6.83478L13.4936 8.92937C12.9366 9.19763 12.5322 9.70481 12.3945 10.3075L11.3203 15.014L8.31033 18.7882C7.9249 19.2715 7.78056 19.904 7.91817 20.5067L8.99232 25.2133L7.91817 29.9197C7.78068 30.5223 7.9249 31.1548 8.31033 31.6381L11.3203 35.4124L12.3945 40.119C12.532 40.7216 12.9366 41.2288 13.4936 41.497L17.843 43.5916L20.8529 47.366C21.2383 47.8493 21.8228 48.1307 22.441 48.1307H27.2685L31.6179 50.2253C31.8964 50.3594 32.1978 50.4264 32.4992 50.4264C32.8006 50.4264 33.1021 50.3594 33.3805 50.2253L37.7299 48.1307H42.5575L42.5577 48.131ZM32.4993 42.9868C22.6991 42.9868 14.7259 35.0137 14.7259 25.2134C14.7259 15.4131 22.6991 7.43996 32.4993 7.43996C42.2996 7.43996 50.2728 15.4131 50.2728 25.2134C50.2728 35.0137 42.2996 42.9868 32.4993 42.9868Z"
                                                    fill="white"></path>
                                                <path
                                                    d="M32.5 9.47119C23.8197 9.47119 16.7578 16.5331 16.7578 25.2134C16.7578 33.8937 23.8197 40.9556 32.5 40.9556C41.1803 40.9556 48.2422 33.8937 48.2422 25.2134C48.2422 16.5331 41.1803 9.47119 32.5 9.47119ZM32.9206 29.8738C32.5263 30.2681 32.0062 30.4689 31.4839 30.4689C31.0369 30.4689 30.5882 30.322 30.2155 30.0238L25.1374 25.9613L27.6751 22.7891L31.3336 25.7159L37.1574 19.892L40.03 22.7646L32.9206 29.874V29.8738Z"
                                                    fill="white"></path>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_707_27">
                                                    <rect width="65" height="65" fill="white"></rect>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                    <div class="flex-1 h-full w-full">
                                        <div class="block">
                                            <h2
                                                class="ubuntu-bold text-[18px] tracking-[4%]  text-[#2563EB] title-shadow mb-[10px]">
                                                <?= esc($why_us_3_title ?? 'Kualitas Terjamin') ?></h2>
                                            <p
                                                class="open-sans-regular text-[14px] md:text-[16px] tracking-[8%] text-[#4E4E4E]">
                                                <?= esc($why_us_3_description ?? 'Produk kami melewati kontrol kualitas ketat untuk kepuasan Anda.') ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="our-benefit w-full leading-[150%]">
                                <div class="flex space-x-[35px] items-center">
                                    <div
                                        class="w-[50px] h-[50px] bg-[#2563EB] rounded-full relative flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 65 65" width="65"
                                            height="65" fill="white" class="w-[28px] h-[28px]">
                                            <path
                                                d="M59.577 28.3291C59.577 38.461 54.7074 43.3333 44.6839 43.3333H32.4964C28.6261 43.3333 27.0797 41.7868 27.0797 37.9166C27.0797 34.0464 28.6261 32.4999 32.4964 32.4999C35.2805 32.4999 36.8459 33.3178 37.5149 35.2083H44.6839C50.1872 35.2083 51.4547 33.9435 51.4547 28.4374C51.108 15.302 46.3224 10.8333 32.4964 10.8333C18.6703 10.8333 13.8847 15.302 13.5353 28.5458C13.4784 30.7503 11.672 32.4999 9.47823 32.4999C7.1951 32.5026 5.35073 30.6095 5.41573 28.3291C5.88156 10.6085 14.2341 2.70825 32.4964 2.70825C50.7586 2.70825 59.1111 10.6085 59.577 28.3291ZM32.4964 46.0416C24.7722 46.0416 14.1284 47.3714 10.9245 58.8818C10.6997 59.697 10.8784 60.5637 11.412 61.2299C11.9428 61.8989 12.7716 62.2916 13.6464 62.2916H51.3491C52.2239 62.2916 53.0526 61.8989 53.5834 61.2299C54.117 60.5637 54.2957 59.697 54.0709 58.8818C50.867 47.3714 40.2232 46.0416 32.4991 46.0416H32.4964ZM32.4964 27.0833C35.8493 27.0833 38.4926 28.0339 40.3343 29.7916H46.038C46.038 20.5535 41.7345 16.2499 32.4964 16.2499C23.2582 16.2499 18.9547 20.5535 18.9547 29.7916C18.9547 34.0247 19.9053 37.1718 21.7741 39.3953C21.728 38.9078 21.663 38.4393 21.663 37.9166C21.663 31.032 25.6118 27.0833 32.4964 27.0833Z"
                                                fill="white"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1 h-full w-full">
                                        <div class="block">
                                            <h2
                                                class="ubuntu-bold text-[18px] tracking-[4%]  text-[#2563EB] title-shadow mb-[10px]">
                                                <?= esc($why_us_4_title ?? 'Layanan Profesional') ?></h2>
                                            <p
                                                class="open-sans-regular text-[14px] md:text-[16px] tracking-[8%] text-[#4E4E4E]">
                                                <?= esc($why_us_4_description ?? 'Tim kami siap membantu dan memberikan konsultasi terbaik.') ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full flex items-center justify-center">
                    <p
                        class="w-full max-w-[600px] open-sans-regular text-[16px] tracking-[4%] text-center text-[#4E4E4E] mb-[100px] md:mb-[120px]">
                        <?= esc($why_us_description ?? 'Kami selalu mengutamakan kualitas produk dan pelayanan untuk memastikan setiap pelanggan mendapatkan solusi terbaik. Integritas dan kepercayaan menjadi landasan utama dalam setiap langkah kami.') ?>
                    </p>

                </div>
                <div class="w-full flex items-center justify-center">
                    <?= view('components/whatsapp_button') ?>
                </div>
            </div>
        </div>
        <div id="why-us-section-desktop" class="hidden lg:block lg:px-5">
            <div class="w-full max-w-[1200px] max-w-3xl-custom pb-[50px] z-20 relative px-10">
                <div class="grid grid-cols-2 gap-x-[80px] mb-[144px]">
                    <div class="w-full h-full flex flex-col items-center  justify-center">
                        <img class="w-full h-auto" src="/images/service/service4.png" alt="layanan kami" width="744"
                            height="602">
                    </div>
                    <div class="w-full">
                        <div class="w-full  flex flex-col items-start gap-y-[55px]">
                            <div class="our-benefit w-[90%] ml-0">
                                <div class="flex space-x-[35px] items-center">
                                    <div
                                        class="w-[60px] h-[60px] bg-[#2563EB] rounded-full relative flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 65 65" width="65"
                                            height="65" fill="white" class="w-[34px] h-[34px]">
                                            <g clip-path="url(#clip0_707_53)">
                                                <path
                                                    d="M11.459 36.2518C11.459 34.7856 10.8876 33.4606 9.97547 32.449C10.8876 31.4375 11.459 30.1125 11.459 28.6463C11.459 25.5009 8.9003 22.9421 5.75492 22.9421H0.0507812C0.0507812 24.4018 0.0507812 42.9076 0.0507812 41.9559H5.75492C8.9003 41.9559 11.459 39.3972 11.459 36.2518ZM3.85354 26.7449H5.75492C6.80397 26.7449 7.65629 27.5972 7.65629 28.6463C7.65629 29.6953 6.80397 30.5477 5.75492 30.5477H3.85354V26.7449ZM3.85354 34.3504H5.75492C6.80397 34.3504 7.65629 35.2027 7.65629 36.2518C7.65629 37.3008 6.80397 38.1532 5.75492 38.1532H3.85354V34.3504Z"
                                                    fill="white"></path>
                                                <path
                                                    d="M24.8184 28.6463C24.8184 25.5009 22.2597 22.9421 19.1143 22.9421H13.4102C13.4102 24.4018 13.4102 42.9076 13.4102 41.9559H17.2129V34.3504H17.939L22.0666 42.6058L25.4683 40.905L21.8311 33.6304C23.6013 32.6612 24.8184 30.8029 24.8184 28.6463ZM17.2129 30.5477V26.7449H19.1143C20.1633 26.7449 21.0157 27.5972 21.0157 28.6463C21.0157 29.6953 20.1633 30.5477 19.1143 30.5477H17.2129Z"
                                                    fill="white"></path>
                                                <path
                                                    d="M38.127 41.9559C38.127 40.513 38.127 28.0025 38.127 28.6463C38.127 25.5009 35.5683 22.9421 32.4229 22.9421C29.2775 22.9421 26.7188 25.5009 26.7188 28.6463C26.7188 31.7123 26.7188 42.3465 26.7188 41.9559H30.5215V34.3504H34.3243V41.9559H38.127ZM30.5215 30.5476V28.6463C30.5215 27.5972 31.3738 26.7449 32.4229 26.7449C33.4719 26.7449 34.3243 27.5972 34.3243 28.6463V30.5476H30.5215Z"
                                                    fill="white"></path>
                                                <path
                                                    d="M59.2476 22.9421H53.3398V41.9559H59.2476C62.3929 41.9559 64.9517 39.3972 64.9517 36.2518V28.6463C64.9517 25.5008 62.3929 22.9421 59.2476 22.9421ZM61.1489 36.2518C61.1489 37.3008 60.2966 38.1532 59.2476 38.1532H57.1426V26.7449H59.2476C60.2966 26.7449 61.1489 27.5972 61.1489 28.6463V36.2518Z"
                                                    fill="white"></path>
                                                <path
                                                    d="M46.1474 41.9559H51.4356V22.9421H47.6329V32.215L45.3156 22.9421H40.0273V41.9559H43.8301V32.683L46.1474 41.9559Z"
                                                    fill="white"></path>
                                                <path
                                                    d="M56.5741 15.3366C56.5587 15.2232 56.5279 15.1131 56.533 14.995L56.5311 14.1929C56.5905 12.6387 55.9851 11.1087 54.8749 10.002C53.7645 8.88791 52.227 8.28264 50.7527 8.34018H49.8335C49.0871 8.32168 48.3277 7.88892 48.0139 7.05523L47.7131 6.3663C47.1747 4.86966 46.0104 3.67953 44.5974 3.13915C43.1937 2.52273 41.5579 2.53946 40.1132 3.16882L39.3074 3.51601C38.5553 3.84469 37.7124 3.6775 37.1145 3.04066L36.576 2.50587C34.5112 0.203427 30.2666 0.277707 28.3429 2.43159L27.6893 3.08516C27.1378 3.6756 26.2949 3.84279 25.5336 3.5122L24.7482 3.17617C23.2887 2.53185 21.6492 2.5207 20.3327 3.10379C18.8379 3.6794 17.6736 4.86966 17.1779 6.25665L16.8009 7.14054C16.5205 7.8888 15.7704 8.38277 14.9701 8.34006L14.168 8.34196C12.5749 8.29366 11.0857 8.88968 9.97712 9.99819C8.86304 11.1086 8.25776 12.6386 8.31531 14.1204L8.31721 15.0841C8.32089 15.1628 8.25016 15.2531 8.23989 15.3366H0.0507812V19.1394C1.37427 19.1394 67.0617 19.1394 64.9511 19.1394V15.3366H56.5741Z"
                                                    fill="white"></path>
                                                <path
                                                    d="M0.0497852 45.7588V49.5615H8.27325C8.28858 49.675 8.31939 49.785 8.31432 49.9032L8.31622 50.7053C8.25677 52.2595 8.86217 53.7895 9.97244 54.8962C11.0828 56.0103 12.5868 56.5822 14.0946 56.558H15.0138C15.6636 56.5395 16.5177 57.0073 16.8334 57.8429L17.1342 58.5319C17.6726 60.0285 18.8369 61.2186 20.2499 61.759C21.6518 62.3754 23.2894 62.3606 24.7341 61.7294L25.5399 61.3822C26.2976 61.0535 27.1349 61.2207 27.7328 61.8575L28.2713 62.3923C29.3038 63.5435 30.817 64.2027 32.4232 64.2027C34.0293 64.2027 35.5426 63.5435 36.5044 62.4666L37.158 61.813C37.7113 61.2226 38.5561 61.0536 39.3138 61.386L40.0991 61.722C41.5531 62.3626 43.1926 62.3738 44.5147 61.7944C46.0094 61.2188 47.1737 60.0285 47.6694 58.6415L48.0464 57.7576C48.3268 57.0094 49.0212 56.5265 49.8772 56.5581L50.6793 56.5562C52.2984 56.649 53.7635 56.0103 54.8702 54.9C55.9843 53.7896 56.5895 52.2596 56.532 50.7778L56.5301 49.814C56.5264 49.7353 56.5972 49.6451 56.6074 49.5615H64.95V45.7588C63.6267 45.7588 -2.06074 45.7588 0.0497852 45.7588Z"
                                                    fill="white"></path>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_707_53">
                                                    <rect width="65" height="65" fill="white"></rect>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                    <div class="flex-1 h-full w-full">
                                        <div class="block">
                                            <h2
                                                class=" ubuntu-bold text-[20px] xl:text-[22px] tracking-[4%]  text-[#2563EB] title-shadow mb-[10px]">
                                                <?= esc($why_us_1_title ?? 'Kustom Merek') ?></h2>
                                            <p class="open-sans-regular text-[16px] tracking-[8%] text-[#4E4E4E]">
                                                <?= esc($why_us_1_description ?? 'Memungkinkan produk disesuaikan dengan logo dan identitas bisnis Anda.') ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="our-benefit w-[90%] mr-0 ml-auto">
                                <div class="flex space-x-[35px] items-center">
                                    <div
                                        class="w-[60px] h-[60px] bg-[#2563EB] rounded-full relative flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 65 65" width="65"
                                            height="65" fill="white" class="w-[34px] h-[34px]">
                                            <path
                                                d="M27.8264 15.732L11.6881 43.6719C11.0148 44.8382 10.8323 46.2243 11.1808 47.5252C11.5294 48.826 12.3804 49.9352 13.5467 50.6086L28.9436 59.5055C28.6077 58.6692 28.4353 57.7762 28.4358 56.875V24.6086C28.4341 21.7146 29.5556 18.9329 31.5639 16.8492L38.0436 10.1562L33.2092 11.5172C30.9373 12.173 29.008 13.6837 27.8264 15.732Z"
                                                fill="white"></path>
                                            <path
                                                d="M4.92431 34.1047C3.9723 35.057 3.4375 36.3484 3.4375 37.695C3.4375 39.0415 3.9723 40.3329 4.92431 41.2852L8.98681 45.3477C9.1166 44.396 9.43791 43.4804 9.93134 42.6563C12.2977 38.5938 22.7587 20.4446 28.436 10.6946C27.7556 11.2227 28.9946 10.0547 4.92431 34.1047Z"
                                                fill="white"></path>
                                            <path
                                                d="M44.3906 39.6094H44.6852V35.5469H44.3906C43.8519 35.5469 43.3352 35.7609 42.9543 36.1418C42.5734 36.5227 42.3594 37.0394 42.3594 37.5781C42.3594 38.1168 42.5734 38.6335 42.9543 39.0144C43.3352 39.3954 43.8519 39.6094 44.3906 39.6094Z"
                                                fill="white"></path>
                                            <path
                                                d="M51.7969 2.91504C51.3882 5.30588 50.3585 7.54738 48.8109 9.41504C48.3377 8.92826 47.7716 8.54132 47.1462 8.2771C46.5209 8.01288 45.8488 7.87674 45.1699 7.87674C44.491 7.87674 43.819 8.01288 43.1936 8.2771C42.5682 8.54132 42.0022 8.92826 41.5289 9.41504L33.0281 18.2814C31.39 19.981 30.4729 22.2483 30.4688 24.6088V56.8752C30.4688 58.222 31.0038 59.5136 31.9561 60.466C32.9084 61.4183 34.2001 61.9533 35.5469 61.9533H54.8438C56.1906 61.9533 57.4822 61.4183 58.4345 60.466C59.3869 59.5136 59.9219 58.222 59.9219 56.8752V24.6088C59.9177 22.2483 59.0006 19.981 57.3625 18.2814L51.6648 12.3705C50.3916 13.7564 48.8368 14.8541 47.1047 15.59C46.9799 15.941 46.7611 16.2508 46.4721 16.4857C46.1831 16.7207 45.8351 16.8716 45.4661 16.9221C45.0971 16.9725 44.7213 16.9206 44.3799 16.7719C44.0384 16.6232 43.7444 16.3835 43.53 16.079C43.3155 15.7745 43.189 15.4169 43.1641 15.0453C43.1392 14.6737 43.217 14.3024 43.3889 13.972C43.5608 13.6416 43.8202 13.3649 44.1388 13.172C44.4574 12.9791 44.8229 12.8775 45.1953 12.8783C45.477 12.8804 45.7553 12.9411 46.0123 13.0565C46.2693 13.1719 46.4995 13.3395 46.6883 13.5486C47.3123 13.2687 47.9076 12.9285 48.4656 12.533C49.1051 12.0525 49.703 11.5191 50.2531 10.9385C52.1518 8.7364 53.3909 6.04347 53.8281 3.16895L51.7969 2.91504ZM44.393 33.5158H44.6875V31.0479H46.7188V33.5158H47.0133C48.0907 33.5158 49.124 33.9438 49.8859 34.7057C50.6478 35.4676 51.0758 36.5009 51.0758 37.5783H49.0445C49.0445 37.0396 48.8305 36.5229 48.4496 36.142C48.0687 35.7611 47.552 35.5471 47.0133 35.5471H46.7188V39.6096H47.0133C48.0907 39.6096 49.124 40.0376 49.8859 40.7994C50.6478 41.5613 51.0758 42.5946 51.0758 43.6721C51.0758 44.7495 50.6478 45.7828 49.8859 46.5447C49.124 47.3066 48.0907 47.7346 47.0133 47.7346H46.7188V50.2025H44.6875V47.7346H44.393C43.3155 47.7346 42.2822 47.3066 41.5203 46.5447C40.7585 45.7828 40.3305 44.7495 40.3305 43.6721H42.3617C42.3617 44.2108 42.5757 44.7275 42.9567 45.1084C43.3376 45.4893 43.8542 45.7033 44.393 45.7033H44.6875V41.6408H44.393C43.3155 41.6408 42.2822 41.2128 41.5203 40.4509C40.7585 39.6891 40.3305 38.6558 40.3305 37.5783C40.3305 36.5009 40.7585 35.4676 41.5203 34.7057C42.2822 33.9438 43.3155 33.5158 44.393 33.5158Z"
                                                fill="white"></path>
                                            <path
                                                d="M49.0445 43.6719C49.0445 43.1332 48.8305 42.6165 48.4496 42.2356C48.0687 41.8546 47.552 41.6406 47.0133 41.6406H46.7188V45.7031H47.0133C47.552 45.7031 48.0687 45.4891 48.4496 45.1082C48.8305 44.7273 49.0445 44.2106 49.0445 43.6719Z"
                                                fill="white"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1 h-full w-full">
                                        <div class="block">
                                            <h2
                                                class=" ubuntu-bold text-[20px] xl:text-[22px]  tracking-[4%]  text-[#2563EB] title-shadow mb-[10px]">
                                                <?= esc($why_us_2_title ?? 'Harga Kompetitif') ?></h2>
                                            <p class="open-sans-regular text-[16px] tracking-[8%] text-[#4E4E4E]">
                                                <?= esc($why_us_2_description ?? 'Kami menawarkan harga terbaik yang bersaing di pasar.') ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="our-benefit w-[90%] mr-0 ml-auto">
                                <div class="flex space-x-[35px] items-center">
                                    <div
                                        class="w-[60px] h-[60px] bg-[#2563EB] rounded-full relative flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 65 65" width="65"
                                            height="65" fill="white" class="w-[34px] h-[34px]">
                                            <g clip-path="url(#clip0_707_27)">
                                                <path
                                                    d="M22.4408 50.1621C21.1974 50.1621 20.0396 49.6046 19.2646 48.6325L16.5437 45.2207L14.1499 44.0679L7.89984 56.6386C7.58652 57.269 7.62182 58.0167 7.99328 58.6147C8.36386 59.2113 9.01652 59.5742 9.7187 59.5742H9.72327L15.5207 59.5611L19.0095 64.1912C19.3953 64.7032 19.9975 65.0002 20.6315 65C20.6937 65 20.7561 64.9972 20.8187 64.9914C21.5198 64.9265 22.1373 64.5034 22.4506 63.8731L28.7916 51.1191L26.8046 50.1621H22.4408Z"
                                                    fill="white"></path>
                                                <path
                                                    d="M57.095 56.6386L50.845 44.0679L48.4512 45.2207L45.7303 48.6326C44.9553 49.6046 43.7976 50.1621 42.5541 50.1621H38.1902L36.2031 51.1191L42.5442 63.8731C42.8576 64.5034 43.4751 64.9265 44.176 64.9914C44.2386 64.9971 44.3011 65 44.3633 65C44.9972 65 45.5994 64.7032 45.9852 64.1912L49.474 59.5611L55.2715 59.5742H55.2761C55.9782 59.5742 56.6309 59.2115 57.0015 58.6147C57.3729 58.0167 57.4084 57.269 57.095 56.6386Z"
                                                    fill="white"></path>
                                                <path
                                                    d="M42.5577 48.131C43.1758 48.131 43.7605 47.8495 44.1458 47.3662L47.1557 43.5919L51.5051 41.4973C52.0621 41.229 52.4665 40.7219 52.6041 40.1192L53.6784 35.4127L56.6884 31.6384C57.0738 31.1551 57.2181 30.5226 57.0805 29.9199L56.0064 25.2135L57.0805 20.507C57.218 19.9042 57.0738 19.2719 56.6884 18.7884L53.6784 15.0142L52.6041 10.3077C52.4667 9.70506 52.0621 9.19788 51.5051 8.92963L47.1557 6.83503L44.1458 3.06071C43.7603 2.5774 43.1758 2.29595 42.5577 2.29595H37.7302L33.3807 0.201094C32.8236 -0.0670312 32.175 -0.0670312 31.6179 0.201094L27.2685 2.29569H22.441C21.8228 2.29569 21.2382 2.57715 20.8529 3.06046L17.843 6.83478L13.4936 8.92937C12.9366 9.19763 12.5322 9.70481 12.3945 10.3075L11.3203 15.014L8.31033 18.7882C7.9249 19.2715 7.78056 19.904 7.91817 20.5067L8.99232 25.2133L7.91817 29.9197C7.78068 30.5223 7.9249 31.1548 8.31033 31.6381L11.3203 35.4124L12.3945 40.119C12.532 40.7216 12.9366 41.2288 13.4936 41.497L17.843 43.5916L20.8529 47.366C21.2383 47.8493 21.8228 48.1307 22.441 48.1307H27.2685L31.6179 50.2253C31.8964 50.3594 32.1978 50.4264 32.4992 50.4264C32.8006 50.4264 33.1021 50.3594 33.3805 50.2253L37.7299 48.1307H42.5575L42.5577 48.131ZM32.4993 42.9868C22.6991 42.9868 14.7259 35.0137 14.7259 25.2134C14.7259 15.4131 22.6991 7.43996 32.4993 7.43996C42.2996 7.43996 50.2728 15.4131 50.2728 25.2134C50.2728 35.0137 42.2996 42.9868 32.4993 42.9868Z"
                                                    fill="white"></path>
                                                <path
                                                    d="M32.5 9.47119C23.8197 9.47119 16.7578 16.5331 16.7578 25.2134C16.7578 33.8937 23.8197 40.9556 32.5 40.9556C41.1803 40.9556 48.2422 33.8937 48.2422 25.2134C48.2422 16.5331 41.1803 9.47119 32.5 9.47119ZM32.9206 29.8738C32.5263 30.2681 32.0062 30.4689 31.4839 30.4689C31.0369 30.4689 30.5882 30.322 30.2155 30.0238L25.1374 25.9613L27.6751 22.7891L31.3336 25.7159L37.1574 19.892L40.03 22.7646L32.9206 29.874V29.8738Z"
                                                    fill="white"></path>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_707_27">
                                                    <rect width="65" height="65" fill="white"></rect>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                    <div class="flex-1 h-full w-full">
                                        <div class="block">
                                            <h2
                                                class=" ubuntu-bold text-[20px] xl:text-[22px] tracking-[4%]  text-[#2563EB] title-shadow mb-[10px]">
                                                <?= esc($why_us_3_title ?? 'Kualitas Terjamin') ?></h2>
                                            <p class="open-sans-regular text-[16px] tracking-[8%] text-[#4E4E4E]">
                                                <?= esc($why_us_3_description ?? 'Produk kami melewati kontrol kualitas ketat untuk kepuasan Anda.') ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="our-benefit w-[90%] ml-0">
                                <div class="flex space-x-[35px] items-center">
                                    <div
                                        class="w-[60px] h-[60px] bg-[#2563EB] rounded-full relative flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 65 65" width="65"
                                            height="65" fill="white" class="w-[34px] h-[34px]">
                                            <path
                                                d="M59.577 28.3291C59.577 38.461 54.7074 43.3333 44.6839 43.3333H32.4964C28.6261 43.3333 27.0797 41.7868 27.0797 37.9166C27.0797 34.0464 28.6261 32.4999 32.4964 32.4999C35.2805 32.4999 36.8459 33.3178 37.5149 35.2083H44.6839C50.1872 35.2083 51.4547 33.9435 51.4547 28.4374C51.108 15.302 46.3224 10.8333 32.4964 10.8333C18.6703 10.8333 13.8847 15.302 13.5353 28.5458C13.4784 30.7503 11.672 32.4999 9.47823 32.4999C7.1951 32.5026 5.35073 30.6095 5.41573 28.3291C5.88156 10.6085 14.2341 2.70825 32.4964 2.70825C50.7586 2.70825 59.1111 10.6085 59.577 28.3291ZM32.4964 46.0416C24.7722 46.0416 14.1284 47.3714 10.9245 58.8818C10.6997 59.697 10.8784 60.5637 11.412 61.2299C11.9428 61.8989 12.7716 62.2916 13.6464 62.2916H51.3491C52.2239 62.2916 53.0526 61.8989 53.5834 61.2299C54.117 60.5637 54.2957 59.697 54.0709 58.8818C50.867 47.3714 40.2232 46.0416 32.4991 46.0416H32.4964ZM32.4964 27.0833C35.8493 27.0833 38.4926 28.0339 40.3343 29.7916H46.038C46.038 20.5535 41.7345 16.2499 32.4964 16.2499C23.2582 16.2499 18.9547 20.5535 18.9547 29.7916C18.9547 34.0247 19.9053 37.1718 21.7741 39.3953C21.728 38.9078 21.663 38.4393 21.663 37.9166C21.663 31.032 25.6118 27.0833 32.4964 27.0833Z"
                                                fill="white"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1 h-full w-full">
                                        <div class="block">
                                            <h2
                                                class=" ubuntu-bold text-[20px] xl:text-[22px] tracking-[4%]  text-[#2563EB] title-shadow mb-[10px]">
                                                <?= esc($why_us_4_title ?? 'Layanan Profesional') ?></h2>
                                            <p class="open-sans-regular text-[16px] tracking-[8%] text-[#4E4E4E]">
                                                <?= esc($why_us_4_description ?? 'Tim kami siap membantu dan memberikan konsultasi terbaik.') ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="w-full flex items-center justify-center">
                    <p
                        class="w-full max-w-[600px] open-sans-regular text-[18px] tracking-[4%] text-center text-[#4E4E4E] mb-[100px]">
                        <?= esc($why_us_description ?? 'Kami selalu mengutamakan kualitas produk dan pelayanan untuk memastikan setiap pelanggan mendapatkan solusi terbaik. Integritas dan kepercayaan menjadi landasan utama dalam setiap langkah kami.') ?>

                    </p>
                </div>
                <div class="w-full flex items-center justify-center">
                    <?= view('components/whatsapp_button') ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="about-us-section" class="w-full min-h-screen flex items-center justify-center relative overflow-hidden">
    <!-- Background Image -->
    <div class="absolute inset-0 bg-center bg-no-repeat bg-cover"
        style="background-image: url('/images/background/background1.jpg'); opacity: 0.23;"></div>
    <div class="flex flex-col w-full h-full items-center justify-center relative z-10 px-10 my-[200px]">

        <?= view('components/texts/title/title_group', ['id' => 'about-us-title', 'class' => 'block md:hidden w-full items-center justify-center mb-[60px] text-center', 'top_title' => $about_us_top_title ?? 'Sekilas',
        'bottom_title' => $about_us_bottom_title ?? 'Tentang Kami']) ?>

        <div class="hidden md:flex w-full items-center justify-center mb-[60px]">
            <h2
                class="text-[32px] h-[34px] md:text-[34px] md:h-[38px] xl:text-[38px] xl:h-[40px] 2xl:text-[40px] 2xl:h-[40px] ubuntu-bold text-black title-shadow text-center mr-2">
                <?= esc($about_us_top_title ?? 'Sekilas') ?>
            </h2>
            <span
                class="text-[32px] h-[34px] md:text-[34px] md:h-[38px] xl:text-[38px] xl:h-[40px] 2xl:text-[40px] 2xl:h-[40px] ubuntu-bold text-[#2563EB] title-shadow">
                <?= esc($about_us_bottom_title ?? 'Tentang Kami') ?>
            </span>
        </div>
        <p
            class="w-full max-w-[1200px] open-sans-regular text-[16px] lg:text-[18px] tracking-[4%] text-center text-[#4E4E4E] mb-[80px] md:px-10 xl:px-0">
            <?= esc($about_us_description ?? 'PT. Karya Pilar Nusantara adalah perusahaan terpercaya yang berfokus pada pengadaan berbagai kebutuhan
            instansi dan dunia usaha. Kami berkomitmmen memberikan produk berkualitas, layanan profesional, dan solusi
            pengadaan yang efisien. Kami siap mendukung kesuksesan bisnis Anda dengan produk lengkap dan layanan
            terbaik.') ?>
        </p>
        <?= view('components/whatsapp_button') ?>
    </div>
    <div class="absolute bottom-0 left-0 ">
        <img class="h-[80px] md:h-[100px] xl:h-[140px] 2xl:h-[180px] w-auto" src="/images/about us/aboutus3.png"
            alt="Road barrier karya pilar nusantara" height="244" width="466">
    </div>
    <div class="absolute bottom-[-20px] right-0 ">
        <img class="h-[160px] md:h-[200px] xl:h-[240px] 2xl:h-[380px] w-auto" src="/images/about us/aboutus2.png"
            alt="Kursi sekolah karya pilar nusantara" height="482" width="482">
    </div>
    <div class="absolute top-[0] right-[-100px] z-60">
        <img class="h-[160px] md:h-[200px] xl:h-[220px] 2xl:h-[260px] w-auto" src="/images/about us/aboutus5.png"
            alt="Perosotan karya pilar nusantara" height="395" width="557">
    </div>
    <div class="absolute top-[0] left-[-100px] z-30">
        <img class="h-[160px] md:h-[170px] xl:h-[200px] 2xl:h-[240px]  w-auto" src="/images/about us/aboutus4.png"
            alt="Pallete HDPE karya pilar nusantara" height="331" width="343">
    </div>

</section>
<?= $this->endSection() ?>


<?= $this->section('body-script') ?>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    const navbar = document.getElementById('main-navbar');
    const logoNavbar = document.getElementById('logo-navbar');
    const navbarLanguageBorder = document.getElementById('navbar-language-border');
    const navbarLanguageIcon = document.getElementById('navbar-language-icon');
    const blur = navbar.querySelector('.blur-3xl');
    const hero = document.getElementById('nav-observer');
    
    // Observer untuk ubah background dan teks saat masuk ke overview
    const observer = new IntersectionObserver(
        ([entry]) => {
            isHomepage = true;
            if (entry.isIntersecting) {
                // Masih di hero
                navbar.classList.remove('bg-white');
                navbar.classList.add('text-white');
                navbar.classList.remove('text-gray-700');
                document.querySelectorAll('.logo-navbar').forEach(el => {
                    el.classList.remove('invert', 'brightness-75');
                });
                navbarLanguageIcon.setAttribute('fill', 'white');
                navbarLanguageBorder.classList.replace('border-gray-700', 'border-white');
    
                if (blur) blur.classList.remove('hidden');
                isInTop = true;
                document.getElementById('desktop-product-dropdown').classList.replace('bg-white', 'bg-black/40');
    
            } else {
                // Di luar hero
                navbar.classList.add('bg-white');
                navbar.classList.remove('text-white');
                navbar.classList.add('text-gray-700');
                document.querySelectorAll('.logo-navbar').forEach(el => {
                    el.classList.add('invert', 'brightness-75');
                });
                navbarLanguageBorder.classList.replace('border-white', 'border-gray-700');
                navbarLanguageIcon.setAttribute('fill', '#374151');
                if (blur) blur.classList.add('hidden');
                isInTop = false;
                document.getElementById('desktop-product-dropdown').classList.replace('bg-black/40', 'bg-white');
            }
        }, {
            root: null,
            threshold: 0.1,
        }
    );
    
    observer.observe(hero);
</script>

<script>
    document.addEventListener('DOMContentLoaded', () => {

        const counters = document.querySelectorAll('.counter');
        const benefits = document.querySelectorAll('.our-benefit');

        const animateCounter = (el) => {
            const valueElement = el.querySelector('.value');
            const target = parseInt(el.dataset.target);
            let current = 0;
            const duration = 3000;
            const increment = target / (duration / 30);

            const formatter = new Intl.NumberFormat('id-ID');

            const update = () => {
                current += increment;
                if (current < target) {
                    valueElement.textContent = formatter.format(Math.floor(current));
                    requestAnimationFrame(update);
                } else {
                    valueElement.textContent = formatter.format(target);
                }
            };

            update();
        }

        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const el = entry.target;
                    el.classList.add('show');

                    if (!el.classList.contains('counted')) {
                        animateCounter(el);
                        el.classList.add('counted');
                    }
                }
            });
        }, {
            threshold: 0.5
        });

        const benefitObserver = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const el = entry.target;
                    el.classList.add('show');
                }
            });
        }, {
            threshold: 0.5
        });

        counters.forEach(counter => observer.observe(counter));
        benefits.forEach(benefit => benefitObserver.observe(benefit));
    });
</script>

<script>
    const swiper = new Swiper('.swiper', {
        speed: 400,
        spaceBetween: 10,
        loop: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
    const preparationSwiper = new Swiper('.preparation-swiper', {
        speed: 400,
        spaceBetween: 10,
        loop: false,
        navigation: {
            nextEl: "#preparation-swiper-next-button",
            prevEl: "#preparation-swiper-prev-button",
        },
    });

    const dots = document.querySelectorAll('#pagination-mobile .dot');
    const lines = document.querySelectorAll('#pagination-mobile .line-fill');
    const dotsDesktop = document.querySelectorAll('#pagination-desktop .dot');
    const linesDesktop = document.querySelectorAll('#pagination-desktop .line-fill');

    const titles = [
        "<?= ($preparation_1_title ?? 'Perencanaan & Desain') ?>",
        "<?= ($preparation_2_title ?? 'Produksi & Pengolahan') ?>",
        "<?= esc($preparation_3_title ?? 'Kontrol Kualitas') ?>",
        "<?= ($preparation_4_title ?? 'Pengiriman & Distribusi') ?>"
    ];

    const descriptions = [
        "<?= esc($preparation_1_description ?? 'Kami mulai dengan perencanaan matang dan desain produk sesuai kebutuhan pelanggan.') ?>",
        "<?= esc($preparation_2_description ?? 'Proses produksi dilakukan dengan standar kualitas tinggi dan teknologi modern.') ?>",
        "<?= esc($preparation_3_description ?? 'Setiap produk melewati pemeriksaan ketat untuk memastikan kualitas terbaik.') ?>",
        "<?= esc($preparation_4_description ?? 'Produk dikirim tepat waktu dengan layanan pengiriman yang handal dan aman.') ?>"
    ];

    const titleEl = document.getElementById("dynamic-title");
    const descEl = document.getElementById("dynamic-desc");
    const titleDesktop = document.getElementById("dynamic-title-desktop");
    const descDesktop = document.getElementById("dynamic-desc-desktop");

    let previousIndex = 0;

    const updatePagination = (activeIndex) => {
        const direction = activeIndex > previousIndex ? 'next' : 'prev';

        // Reset dots & lines
        dots.forEach(dot => {
            dot.classList.remove('bg-white');
            dot.classList.add('bg-gray-500');
        });
        lines.forEach(line => {
            line.style.width = '0%';
        });

        // Reset dots & lines desktop
        dotsDesktop.forEach(dot => {
            dot.classList.remove('bg-blue-500');
            dot.classList.add('bg-white');
        });
        linesDesktop.forEach(line => {
            line.style.width = '0%';
        });

        // Update dots & lines before current
        for (let i = 0; i < activeIndex; i++) {
            // dots mobile
            dots[i].classList.remove('bg-gray-500');
            dots[i].classList.add('bg-blue-500');
            if (lines[i]) lines[i].style.width = '100%';

            // dots desktop
            dotsDesktop[i].classList.remove('bg-white');
            dotsDesktop[i].classList.add('bg-blue-500');
            if (linesDesktop[i]) linesDesktop[i].style.width = '100%';
        }

        if (activeIndex === 0) {
            // dots mobile
            dots[0].classList.remove('bg-gray-500');
            dots[0].classList.add('bg-blue-500');

            // dots desktop
            dotsDesktop[0].classList.remove('bg-white');
            dotsDesktop[0].classList.add('bg-blue-500');
            // titleEl.textContent = titles[0];
            // descEl.textContent = descriptions[0];
            fadeTransitionText(titleEl, titles[0]);
            fadeTransitionText(descEl, descriptions[0]);
            fadeTransitionText(titleDesktop, titles[0]);
            fadeTransitionText(descDesktop, descriptions[0]);
            previousIndex = activeIndex;
            return;
        }

        const lineIndex = direction === 'next' ? activeIndex - 1 : activeIndex;
        const dotIndex = direction === 'next' ? activeIndex : activeIndex + 1;

        if (direction === 'next') {
            lines[lineIndex].style.width = '0%';
            linesDesktop[lineIndex].style.width = '0%';

            setTimeout(() => {
                lines[lineIndex].style.width = '100%';
                linesDesktop[lineIndex].style.width = '100%';
            }, 10);

            setTimeout(() => {
                // dot mobile
                dots[dotIndex].classList.remove('bg-gray-500');
                dots[dotIndex].classList.add('bg-blue-500');

                // dot desktop
                dotsDesktop[dotIndex].classList.remove('bg-white');
                dotsDesktop[dotIndex].classList.add('bg-blue-500');

                // 🔁 Update text setelah progress
                // titleEl.textContent = titles[activeIndex];
                // descEl.textContent = descriptions[activeIndex];
                fadeTransitionText(titleEl, titles[activeIndex]);
                fadeTransitionText(descEl, descriptions[activeIndex]);
                fadeTransitionText(titleDesktop, titles[activeIndex]);
                fadeTransitionText(descDesktop, descriptions[activeIndex]);
            }, 510);
        } else {
            // dots mobile
            dots[dotIndex].classList.remove('bg-green-500');
            dots[dotIndex].classList.add('bg-blue-500');

            // dots desktop
            // dotsDesktop[dotIndex].classList.remove('bg-white');
            dotsDesktop[dotIndex].classList.add('bg-blue-500');

            setTimeout(() => {
                lines[lineIndex].style.width = '0%';
                linesDesktop[lineIndex].style.width = '0%';
            }, 10);

            // dots mobile
            dots[activeIndex].classList.remove('bg-gray-500');
            dots[activeIndex].classList.add('bg-blue-500');

            // dots desktop
            dotsDesktop[activeIndex].classList.remove('bg-white');
            dotsDesktop[activeIndex].classList.add('bg-blue-500');

            // 🔁 Update text langsung (tidak perlu tunggu)
            // titleEl.textContent = titles[activeIndex];
            // descEl.textContent = descriptions[activeIndex];
            fadeTransitionText(titleEl, titles[activeIndex]);
            fadeTransitionText(descEl, descriptions[activeIndex]);
            fadeTransitionText(titleDesktop, titles[activeIndex]);
            fadeTransitionText(descDesktop, descriptions[activeIndex]);
        }

        previousIndex = activeIndex;
    };

    const fadeTransitionText = (el, newText) => {
        el.classList.add('fade-out');

        setTimeout(() => {
            el.textContent = newText;
            el.classList.remove('fade-out');
            el.classList.add('fade-in');
        }, 200); // waktu tunggu setengah dari transition

        // Hapus class fade-in setelah selesai supaya bisa digunakan lagi nanti
        setTimeout(() => {
            el.classList.remove('fade-in');
        }, 600); // 400ms animasi + buffer
    };

    preparationSwiper.on('slideChange', () => {
        updatePagination(preparationSwiper.activeIndex);
    });

    updatePagination(preparationSwiper.activeIndex);
</script>
<?= $this->endSection() ?>


<?= $this->section('script') ?>
<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Corporation",
    "name": "PT Karya Pilar Nusantara",
    "alternateName": "KPN",
    "description": "PT Karya Pilar Nusantara (KPN) adalah perusahaan pengadaan barang yang menyediakan berbagai macam produk berkualitas tinggi, mulai dari mainan playground indoor, berbagai jenis matras, hingga perlengkapan kebutuhan perairan seperti kubus apung, kincir air, toren, palet, dan masih banyak lagi.",
    "url": "https://www.karyapilarnusantara.com",
    "logo": "https://www.karyapilarnusantara.com/favicon-kpn.ico",
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
<script type="application/ld+json">
  {
    "@context": "https://schema.org/",
    "@type": "BreadcrumbList",
    "itemListElement": [{
      "@type": "ListItem",
      "position": 1,
      "name": "Beranda",
      "item": "https://www.karyapilarnusantara.com"
    }, {
      "@type": "ListItem",
      "position": 2,
      "name": "Produk",
      "item": "https://www.karyapilarnusantara.com/product"
    }, {
      "@type": "ListItem",
      "position": 3,
      "name": "Kontak",
      "item": "https://www.karyapilarnusantara.com/contact-us"
    }, {
      "@type": "ListItem",
      "position": 4,
      "name": "Tentang Kami",
      "item": "https://www.karyapilarnusantara.com/about-us"
    }, {
      "@type": "ListItem",
      "position": 5,
      "name": "Galeri",
      "item": "https://www.karyapilarnusantara.com/galeri"
    }]
  }
</script>

<?= $this->endSection() ?>
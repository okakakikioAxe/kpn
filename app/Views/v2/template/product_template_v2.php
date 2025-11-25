<?= $this->extend('v2/template/template_v2') ?>


<?= $this->section('header') ?>
<html lang="<?= esc($lang ?? 'id') ?>">
<title><?= esc($meta_title ?? 'Produk') ?></title>
<meta name="description"
    content="<?= esc($meta_description ?? 'Jelajahi Beragam Pilihan Produk Berkualitas Kami dan Temukan Solusi Terbaik untuk Kebutuhan Bisnis Anda.') ?>" />
<meta name="keywords"
    content="<?= esc($meta_keyword ?? 'produk kpn, produk HDPE, produk EVA, produk TPE, produk XPE, katalog kpn, produk karya pilar nusantara, katalog karya pilar nusantara, product camping, product infrastruktur, kursi lipat, kubus apung') ?>" />

<?= $this->endsection() ?>
<?= $this->section('header-script') ?>
<link href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" rel="stylesheet" />
<?= $this->endsection() ?>

<?= $this->section('style') ?>
<style>
.skeleton {
    background: linear-gradient(100deg, #f4f4f4 30%, #fafafa 50%, #f4f4f4 70%);
    background-size: 200% 100%;
    animation: shimmer 1.5s infinite;
}


@keyframes shimmer {
    0% {
        background-position: -200% 0;
    }

    100% {
        background-position: 200% 0;
    }
}

/* Default Style for All Devices */
.product-card {
    background-color: #FCFCFF;
    border-radius: 15px;
    height: 100%;
    box-shadow: 1px 4px 5px rgba(0, 0, 0, 0.08);
    transition: transform 0.15s ease-in-out;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    cursor: pointer;
}

.product-image {
    width: 100%;
    height: auto;
    border-radius: 15px;
    transition: opacity 0.3s ease;
}

.product-details {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 6px;
    border-radius: 15px;
    position: absolute;
    bottom: 0;
    width: auto;
    height: 100%;
    background-color: rgba(0, 17, 250, 0.9);
    opacity: 0;
    visibility: hidden;
    transition: opacity 0.3s ease;
}

/* Hover State for Pointer Devices (Mouse) */
@media (pointer: fine) {
    .product-card:hover .product-image {
        opacity: 0.6;
    }

    .product-card:hover .product-details {
        opacity: 1;
        visibility: visible;
    }

    .product-card:hover {
        transform: scale(1.02);
    }
}

@media (pointer: coarse) {
    .product-details {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 10px;
        background-color: rgba(255, 255, 255, 0.9);
        opacity: 1;
    }

    .product-card:hover {
        transform: none;
    }

    .product-image {
        opacity: 1;
    }
}
</style>

<?= $this->endsection() ?>
<?= $this->section('content') ?>
<section id="hero-section" class="relative flex items-center justify-center w-full bg-[#EFF6FF] z-20">
    <div id="nav-observer" class="absolute top-0 left-0 z-50 h-[100px] w-full bg-transparent"></div>
</section>
<section id="product-section" class="w-full relative z-10 pt-[126px] mb-[200px]">
    <style>
    .left-icon {
        position: absolute;
        width: 75px;
        height: 75px;

        transition: height 0.4s ease, width 0.4s ease;
    }

    .left-icon.shrink {
        width: 60px;
        height: 60px;
    }

    .title-container {
        position: relative;
        width: 80%;
        transform: translateY(0);
        margin-bottom: 10px;
        min-height: 28px;
        left: 87px;
        transition:
            min-height 0.15s ease,
            transform 0.3s ease;
    }

    .title-container.expand {
        margin-bottom: 20px;
        /* left: 72px; */
        transform: translateX(-14px);
        min-height: 60px;
    }


    .item-count {
        margin-left: 8px;
        left: 241px;
        position: absolute;
    }

    .small-boxes {
        position: relative;
        left: 87px;
        width: 146px;
    }



    .first-row-items {
        position: relative;
        aspect-ratio: 1 / 1;
        width: 100%;
        /* jarak antar item */
    }

    .second-row-items {
        position: relative;
        aspect-ratio: 1 / 1;
        width: 100%;
        /* jarak antar item */
    }

    @keyframes expandFull {

        0% {
            width: 146px;
            left: 87;
        }


        95% {
            width: 100%;
            left: 87;
        }

        100% {
            width: 100%;
            left: 0px;
        }
    }


    .animate-expand {
        animation: expandFull 0.5s forwards ease;
    }

    @keyframes shrinkBack {
        0% {
            width: 100%;
            left: 0px;
        }


        30% {
            width: 90%;
            left: 87px;
        }

        100% {
            width: 146px;
            left: 87px;
        }
    }

    .animate-shrink {
        animation: shrinkBack 0.5s forwards ease;
    }

    /* ITEM BASE */
    .grid-item {
        opacity: 0;
        transform: scale(0.8);
    }

    .grid-item.animate {
        animation: growFade 0.3s forwards ease;
    }

    @keyframes growFade {
        from {
            opacity: 0;
            transform: scale(0.8);
        }

        to {
            opacity: 1;
            transform: scale(1);
        }
    }

    .top-grid-animated {
        overflow: hidden;
        transition: height 0.5s ease;
        display: grid;
        gap: 20px;
        grid-template-columns: repeat(5, 1fr);
        /* default = 5 kolom */
    }

    @media (max-width: 1024px) {
        .top-grid-animated {
            grid-template-columns: repeat(4, 1fr);
        }
    }

    @media (max-width: 768px) {
        .top-grid-animated {
            grid-template-columns: repeat(3, 1fr);
        }
    }

    @media (max-width: 480px) {
        .top-grid-animated {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    .grid-animated {
        height: 0;
        overflow: hidden;
        transition: height 0.5s ease;
        display: grid;
        gap: 20px;
        grid-template-columns: repeat(5, 1fr);
        /* default = 5 kolom */
    }

    @media (max-width: 1024px) {
        .grid-animated {
            grid-template-columns: repeat(4, 1fr);
        }
    }

    @media (max-width: 768px) {
        .grid-animated {
            grid-template-columns: repeat(3, 1fr);
        }
    }

    @media (max-width: 480px) {
        .grid-animated {
            grid-template-columns: repeat(2, 1fr);
        }
    }




    .right-product-container {
        opacity: 1;
        scale: 1;
        transition: transform 0.3s ease-out, opacity 0.3s ease-out;
    }

    .right-product-container.animate-fade-in {
        /* membesar */
        transform: scale(0.98);
        opacity: 0;
    }

    .gradient-box {
        background: linear-gradient(to bottom,
                transparent 50%,
                #ffffff 50%,
                rgba(13, 50, 156, 0.96) 84.5%);
    }

    .swiper {
        padding: 40px 0;
        /* margin-left: 50px;
            margin-right: 50px; */
    }

    .swiper-slide {
        aspect-ratio: 1/1;
        /* background-color: rgba(13, 50, 156, 0.96); */
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .slide-inner {
        transform: scale(0.80);
        transition: all 0.8s ease;
        /* background-color: rgba(13, 50, 156, 0.96); */
    }

    /* Yang aktif membesar */
    .swiper-slide-active .slide-inner {
        transform: scale(1);
    }
    </style>
    <div class=" w-full justify-center items-center flex px-5 md:px-15">

        <div class="flex w-full max-w-[1200px] relative parent">

            <div id="left-product-container" class="flex w-full mx-auto">

                <!-- ACCORDION LIST -->
                <div class="space-y-2 accordion-item">
                    <?php foreach ($categories as $category): ?>

                    <div data-accordion-header>

                        <!-- HEADER OPEN -->
                        <div class="flex items-start gap-4 cursor-pointer pb-[20px] relative h-full">

                            <!-- LEFT ICON BOX -->
                            <div class="rounded-lg left-icon aspect-square overflow-hidden" data-left-icon>
                                <img src="/images/category/<?= $category['image'] ?>"
                                    class="w-full h-full object-cover rounded-lg" alt="">
                            </div>

                            <!-- TITLE + SMALL BOXES -->
                            <div class="flex-1 ">
                                <div class="flex relative items-center title-container" data-title-container>
                                    <div class="flex">
                                        <h2
                                            class="category-title  text-[18px] xl:text-[20px] 2xl:text-[22px] open-sans-bold text-black/90 transition-colors duration-100 ease-in hover:text-blue-700 max-w-[250px] xl:max-w-[300px] whitespace-nowrap overflow-hidden text-ellipsis">
                                            <?= $category['title'] ?>
                                        </h2>

                                        <img loading="lazy"
                                            class="h-[24px] w-[24px] transition-transform duration-300 ml-[6px] self-center"
                                            src="/arrow-right.svg" alt="panah kanan" data-arrow>
                                    </div>
                                </div>

                                <div class="flex">
                                    <!-- SMALL BOXES -->
                                    <div class="small-boxes grid grid-cols-5 gap-x-[4px]" data-first-row>
                                        <?php foreach ($category['first_row_products'] as $product): ?>
                                        <div class="first-row-items bg-gray-300 rounded-md">
                                            <a href="/product/<?= $product['slug'] ?>"
                                                class="relative first-row-product-link">
                                                <div
                                                    class=" rounded-md h-full drop-shadow-[1px_4px_5px_rgba(0,0,0,0.08)] hover:scale-102 transition-transform duration-150 flex-col items-center cursor-pointer">
                                                    <img src="/images/products/<?= $product['slug'] ?>/<?= $product['thumbnail'] ?>"
                                                        alt="title" class="w-full h-auto rounded-md">
                                                    <div
                                                        class="detail-card-container desktop-product-card absolute flex flex-col px-[5px] xl:px-[19px] py-[19px] justify-between items-center top-0 rounded-md opacity-0 transition-opacity duration-200 ease-in  w-full bg-white aspect-square text-center open-sans-regular">
                                                        <!-- Text wrapper grows to take available space -->
                                                        <div class="flex flex-col flex-grow w-full">
                                                            <h4
                                                                class="open-sans-bold text-[16px] tracking-wide text-[#2563EB] product-title mb-4">
                                                                <?= $product['title'] ?>
                                                            </h4>
                                                            <p
                                                                class="open-sans-regular text-[14px] product-description text-ellipsis overflow-hidden line-clamp-2 xl:line-clamp-3">
                                                                <?= $product['description'] ?>
                                                            </p>
                                                        </div>

                                                        <!-- Button stays at bottom -->
                                                        <button
                                                            class="w-[70%] mt-[12px] open-sans-bold text-[16px] text-white bg-[#2563EB] py-[6px] rounded-[10px] cursor-pointer lg:hover:bg-blue-700 opacity-100 transition-colors duration-100 ease-in product-button">
                                                            <?= esc($see_detail_button_title ?? 'Lihat Detail') ?>
                                                        </button>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <?php endforeach; ?>
                                        <?php foreach ($category['products'] as $index => $product): ?>
                                        <div class="second-row-items bg-gray-300 rounded-md hidden"
                                            data-index="<?= $index ?>">
                                            <a href="/product/<?= $product['slug'] ?>"
                                                class="relative second-row-product-link">
                                                <div
                                                    class=" rounded-md h-full drop-shadow-[1px_4px_5px_rgba(0,0,0,0.08)] hover:scale-102 transition-transform duration-150 flex-col items-center cursor-pointer">
                                                    <img src="/images/products/<?= $product['slug'] ?>/<?= $product['thumbnail'] ?>"
                                                        alt="title" class="w-full h-auto rounded-lg">
                                                    <div
                                                        class="detail-card-container desktop-product-card absolute flex flex-col px-[5px] xl:px-[19px] py-[19px] justify-between items-center top-0 rounded-lg opacity-0 transition-opacity duration-200 ease-in  w-full bg-white aspect-square text-center open-sans-regular">
                                                        <!-- Text wrapper grows to take available space -->
                                                        <div class="flex flex-col flex-grow w-full">
                                                            <h4
                                                                class="open-sans-bold text-[16px] tracking-wide text-[#2563EB] product-title mb-4">
                                                                <?= $product['title'] ?>
                                                            </h4>
                                                            <p
                                                                class="open-sans-regular text-[14px] product-description text-ellipsis overflow-hidden line-clamp-2 xl:line-clamp-3">
                                                                <?= $product['description'] ?>
                                                            </p>
                                                        </div>

                                                        <!-- Button stays at bottom -->
                                                        <button
                                                            class="w-[70%] mt-[12px] open-sans-bold text-[16px] text-white bg-[#2563EB] py-[6px] rounded-[10px] cursor-pointer lg:hover:bg-blue-700 opacity-100 transition-colors duration-100 ease-in product-button">
                                                            <?= esc($see_detail_button_title ?? 'Lihat Detail') ?>
                                                        </button>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <?php endforeach; ?>
                                    </div>
                                    <p class="item-count open-sans-bold text-[16px] text-black/70" data-item-count>
                                        <?php if ($category['total_products'] > 0): ?>
                                        <?= $category['total_products'] ?>+
                                        <?php endif; ?>
                                    </p>
                                </div>
                            </div>
                            <!-- AGE + CHEVRON DOWN -->
                        </div>
                        <div class="grid grid-cols-5 grid-animated" data-grid>
                            <!-- <div class="grid-item w-full aspect-square bg-gray-300 rounded-md hidden">
                                <img src="/" alt="PLAY GROUND SET" class="w-full h-auto rounded-md">
                            </div> -->
                            <?php if (count($category['products']) > 5): ?>
                            <?php foreach ($category['products'] as $index => $product): ?>
                            <div class="grid-item w-full aspect-square bg-gray-300 rounded-md"
                                data-index="<?= $index ?>">
                                <a href="/product/<?= $product['slug'] ?>" class="relative">
                                    <div
                                        class="rounded-md h-full drop-shadow-[1px_4px_5px_rgba(0,0,0,0.08)] hover:scale-102 transition-transform duration-150 flex-col items-center cursor-pointer">
                                        <img src="/images/products/<?= $product['slug'] ?>/<?= $product['thumbnail'] ?>"
                                            alt="title" class="w-full h-auto rounded-md">
                                        <div
                                            class="absolute flex flex-col px-[5px] xl:px-[19px] py-[19px] justify-between items-center top-0 rounded-md opacity-0 transition-opacity duration-200 ease-in lg:hover:opacity-90 w-full bg-white aspect-square text-center open-sans-regular">
                                            <!-- Text wrapper grows to take available space -->
                                            <div class="flex flex-col flex-grow w-full">
                                                <h4
                                                    class="open-sans-bold text-[16px] tracking-wide text-[#2563EB] product-title mb-4">
                                                    <?= $product['title'] ?>
                                                </h4>
                                                <p
                                                    class="open-sans-regular text-[14px] product-description text-ellipsis overflow-hidden line-clamp-2 xl:line-clamp-3">
                                                    <?= $product['description'] ?>
                                                </p>
                                            </div>

                                            <!-- Button stays at bottom -->
                                            <button
                                                class="w-[70%] mt-[12px] open-sans-bold text-[16px] text-white bg-[#2563EB] py-[6px] rounded-[10px] cursor-pointer lg:hover:bg-blue-700 opacity-100 transition-colors duration-100 ease-in product-button">
                                                <?= esc($see_detail_button_title ?? 'Lihat Detail') ?>
                                            </button>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <?php endforeach; ?>
                            <?php endif; ?>
                        </div>

                        <div data-border-bottom></div>
                    </div>

                    <?php endforeach; ?>

                </div>

            </div>
            <div id="right-product-container"
                class=" hidden lg:block absolute right-0 top-0 w-[60%] aspect-[18/11] right-product-container">
                <div id="top-product-container" class="w-full h-full rounded-2xl block">
                    <img src="/images/product_page/product3.png" alt="background produk unggulan"
                        class="absolute top-0 left-0 w-full h-full rounded-2xl bg-cover gradient-box">
                    <div class="w-full flex items-center justify-center relative mt-[20px]">

                        <div class="w-full items-start justify-center">
                            <h1 class="text-[24px] xl:text-[30px] ubuntu-bold text-black title-shadow text-center mr-2">
                                <?= esc($hero_top_title ?? 'Produk') ?> <span
                                    class="text-[24px] xl:text-[30px] ubuntu-bold text-[#2563EB] title-shadow">
                                    <?= esc($hero_top_title_tail ?? 'Unggulan') ?></span></h1>

                        </div>
                    </div>


                    <div class="relative flex justify-center mx-[60px]">
                        <div class="flex items-center"><img loading="lazy"
                                class="slide-prev h-[22px] w-[22px] rotate-180 cursor-pointer" src="/arrow-right.svg"
                                alt="panah kanan" data-arrow=""></div>
                        <div class="swiper mySwiper w-[100%]">
                            <div class="swiper-wrapper">
                                <?php foreach ($top_products as $index => $product): ?>
                                <div class="swiper-slide">
                                    <a href="/product/<?= $product['slug'] ?>"
                                        class="product-card-container slide-inner rounded-[15px] xl:rounded-[20px] h-full drop-shadow-[1px_4px_5px_rgba(0,0,0,0.08)] hover:scale-102 transition-transform duration-150 flex-col items-center cursor-pointer">
                                        <div>
                                            <img src="/images/products/<?= $product['slug'] ?>/<?= $product['thumbnail'] ?>"
                                                alt="Terowongan Anak Indoor"
                                                class="w-full h-auto rounded-[15px] product-image">
                                            <div
                                                class="desktop-product-card absolute flex flex-col px-[5px] xl:px-[19px] py-[19px] justify-between items-center top-0 rounded-[15px] opacity-0 transition-opacity duration-200 ease-in lg:hover:opacity-90 w-full bg-white aspect-square text-center open-sans-regular">
                                                <!-- Text wrapper grows to take available space -->
                                                <div class="flex flex-col flex-grow w-full items-center justify-end">
                                                    <h4
                                                        class="open-sans-bold text-[16px] tracking-wide text-[#2563EB] product-title mb-4">
                                                        <?= $product['title'] ?></h4>
                                                </div>

                                                <!-- Button stays at bottom -->
                                                <button
                                                    class="w-[70%] mt-[12px] open-sans-bold text-[16px] text-white bg-[#2563EB] py-[6px] rounded-[10px] cursor-pointer lg:hover:bg-blue-700 opacity-100 transition-colors duration-100 ease-in product-button">
                                                    <?= esc($see_detail_button_title ?? 'Lihat Detail') ?></button>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <?php endforeach; ?>
                            </div>

                            <div class="swiper-pagination"></div>
                        </div>
                        <div class="flex items-center"><img loading="lazy"
                                class="slide-next h-[22px] w-[22px] cursor-pointer" src="/arrow-right.svg"
                                alt="panah kanan" data-arrow=""></div>

                    </div>

                    <p
                        class="open-sans-regular text-[14px] opacity-100 text-white z-10 absolute mx-[40px] xl:mx-[60px] mt-[20px]">
                        <?= esc($cta_top_product ?? 'Unggulan') ?></p>

                </div>

            </div>
        </div>
    </div>

    <div class="flex w-full justify-center mb-[78px] mt-[100px] xl:mt-[200px] px-5 md:px-15">
        <div class="w-full flex items-center justify-end max-w-[1200px]">

            <div class="w-full max-w-[460px] flex items-center rounded-full border-1 border-[rgba(156,156,156,0.74)]">
                <input id="search-form" type="text" placeholder="<?= esc($search_placeholder ?? 'Cari Produk') ?>"
                    class="py-[12px] px-[24px] open-sans-regular text-[16px] w-full outline-none">
                <button id="search-button" class="h-[28px] w-[28px]  mr-[27px] cursor-pointer">
                    <?= view('components/icons/search', ['class' => 'w-[28px] aspect-square', 'fill' => '#2563EB']) ?>
                </button>
            </div>
        </div>
    </div>
    <div class="flex flex-col items-center justify-center w-full px-5 md:px-15 sm:px-8 min-h-[100vh] sm:min-h-[50vh]">
        <div id="product-grid"
            class="grid grid-cols-2 sm:grid-cols-4 xl:grid-cols-5 gap-7 w-full max-w-[1200px] relative">
            <!-- generate product here -->
        </div>
        <div id="mobile-sekeleton"
            class="hidden grid-cols-2 sm:grid-cols-4 lg:grid-cols-5 gap-6 w-full max-w-[1200px] ">
            <?php for ($i = 1; $i <= 10; $i++): ?>

            <div class="sekeleton-wrapper ">
                <div class="skeleton w-full aspect-square mb-[12px] rounded-[15px]"></div>
                <div class="flex w-full justify-center">
                    <div class="skeleton w-[92%] h-[20px] rounded-[8px]"></div>
                </div>
            </div>

            <?php endfor; ?>
        </div>
        <div id="desktop-sekeleton"
            class="hidden grid-cols-2 sm:grid-cols-4 lg:grid-cols-5 gap-6 w-full max-w-[1200px] ">
            <?php for ($i = 1; $i <= 10; $i++): ?>

            <div class="sekeleton-wrapper ">
                <div class="skeleton w-full aspect-square rounded-[15px]"></div>
            </div>

            <?php endfor; ?>
        </div>

        <div id="pagination" class="flex justify-center mt-24 flex-wrap gap-1">
            <!-- Tombol pagination -->
        </div>
    </div>

</section>
<section id="cta-section" class="mt-[150px]">
    <?= view('/components/cta_banner') ?>
    <div class="mb-[150px]"></div>
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
        navbar.classList.remove('text-white');
        navbar.classList.add('text-gray-700');
        document.querySelectorAll('.logo-navbar').forEach(el => {
            el.classList.add('invert', 'brightness-75');
        });
        navbarLanguageBorder.classList.replace('border-white', 'border-gray-700');
        navbarLanguageIcon.setAttribute('fill', '#374151');
        if (entry.isIntersecting) {
            // Masih di hero
            navbar.classList.remove('bg-white');

            if (blur) blur.classList.remove('hidden');
            isInTop = true;
            document.getElementById('desktop-product-dropdown').classList.replace('bg-black/40', 'bg-white');

        } else {
            // Di luar hero
            navbar.classList.add('bg-white');
            if (blur) blur.classList.add('hidden');
            isInTop = false;


        }
    }, {
        root: null,
        threshold: 0.1,
    }
);

observer.observe(hero);
</script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    let currentPage = 1;
    let totalPages = 20;
    let middleSize = 3;
    const searchForm = document.getElementById('search-form');
    const searchButton = document.getElementById('search-button');
    const mobileSekeleton = document.getElementById('mobile-sekeleton');
    const desktopSekeleton = document.getElementById('desktop-sekeleton');

    let hasCursor = false;

    searchForm.addEventListener("keydown", function(e) {
        if (e.key === "Enter") {
            e.preventDefault(); // opsional, cegah aksi default jika ada
            renderPage(currentPage);
        }
    });

    searchButton.addEventListener("click", function(e) {
        renderPage(currentPage);
    });

    const productGrid = document.getElementById("product-grid");
    let productPerPageLimit = 10;

    // check device type

    function detectMouse() { // Detect mouse interaction (cursor)
        hasCursor = true;
        productPerPageLimit = 20;
        localStorage.setItem('hasCursor', JSON.stringify(true)); // Save to localStorage
        window.removeEventListener('mousemove', detectMouse); // Remove the event listener after detection
    }

    function detectTouch() { // Detect touch interaction (touchscreen)
        hasCursor = false;
        productPerPageLimit = 10;
        localStorage.setItem('hasCursor', JSON.stringify(false)); // Save to localStorage
    }

    if (localStorage.getItem('hasCursor')) {
        hasCursor = JSON.parse(localStorage.getItem('hasCursor'));
        if (hasCursor == true) {
            productPerPageLimit = 20;
        } else {
            productPerPageLimit = 10;
        }
    } else {
        // Add event listeners to detect cursor (mouse) and touch (touchscreen)
        window.addEventListener('mousemove', detectMouse);
        window.addEventListener('touchstart', detectTouch);
    }
    // ======= end checking device type =======

    // fetch data function
    async function fetchData(page = 1) {
        const encodedKeyword = encodeURIComponent(searchForm.value);
        const response = await fetch(
            `/products/list?page=${page}&keyword=${encodedKeyword}&limit=${productPerPageLimit}`);
        const data = await response.json();
        totalPages = data.lastPage;
        return data.products;
    }
    // ======= end fetch data function ========

    // render fetched data
    function renderProduct(products) {
        const children = productGrid.children;
        if (hasCursor) {
            for (let index = 0; index < productPerPageLimit; index++) {
                const productCard = productGrid.children[index]; // Get the corresponding <a> element (child)

                // If there is a product to display
                if (index < products.length) {
                    productCard.querySelector('.sekeleton-wrapper').classList.add('hidden');


                    const product = products[index];
                    productCard.href = `<?= ($product_detail_link_prefix ?? '/product/') ?>${product.slug}`;
                    productCard.querySelector('.product-image').src =
                        `/images/products/${product.slug}/${product.thumbnail}`;
                    productCard.querySelector('.product-image').alt = product.title;
                    productCard.querySelector('.product-title').textContent = product.title;
                    productCard.querySelector('.product-description').textContent = product.meta_description;
                    productCard.style.visibility = 'visible'; // Ensure it's visible

                    productCard.querySelector('.product-card-container').classList.remove('hidden');
                } else {
                    // productCard.querySelector('.sekeleton-wrapper').classList.add('hidden');
                    // Hide remaining product cards (no data for them)
                    productCard.style.visibility = 'hidden'; // Hides the extra product cards but keeps space
                }
            };

        } else {
            // showSekeleton();


            for (let index = 0; index < productPerPageLimit; index++) {
                const productCard = productGrid.children[
                    index]; // Get the corresponding <a> element (child)

                // If there is a product to display
                if (index < products.length) {
                    productCard.querySelector('.sekeleton-wrapper').classList.add('hidden');
                    productCard.style.visibility =
                        'visible';

                    const product = products[index];
                    productCard.href =
                        `<?= ($product_detail_link_prefix ?? '/product/') ?>${product.slug}`;
                    productCard.querySelector('.product-image').src =
                        `/images/products/${product.slug}/${product.thumbnail}`;
                    productCard.querySelector('.product-image').alt = product.title;
                    productCard.querySelector('.product-title').textContent = product.title;
                    productCard.querySelector('.product-card-container').classList.remove('hidden');
                } else {
                    // productCard.querySelector('.sekeleton-wrapper').classList.add('hidden');
                    // Hide remaining product cards (no data for them)
                    productCard.style.visibility =
                        'hidden'; // Hides the extra product cards but keeps space
                }
            };
        }
    }
    // ======= end render fetched data ======

    // initiate product grid
    function initiateProductGrid() {
        let cardTemplate = '';
        if (hasCursor) {
            cardTemplate = `
                <a href="/" class="relative">
                    <div
                        class="hidden product-card-container rounded-[15px] xl:rounded-[20px] h-full drop-shadow-[1px_4px_5px_rgba(0,0,0,0.08)] hover:scale-102 transition-transform duration-150 flex-col items-center cursor-pointer">
                        <img src="/" alt="title" class="w-full h-auto rounded-[15px] product-image">
                        <div class="desktop-product-card absolute flex flex-col px-[5px] xl:px-[19px] py-[19px] justify-between items-center top-0 rounded-[15px] opacity-0 transition-opacity duration-200 ease-in lg:hover:opacity-90 w-full bg-white aspect-square text-center open-sans-regular">
                            <!-- Text wrapper grows to take available space -->
                            <div class="flex flex-col flex-grow w-full">
                                <h4 class="open-sans-bold text-[16px] tracking-wide text-[#2563EB] product-title mb-4">
                                    Product Title
                                </h4>
                                <p class="open-sans-regular text-[14px] product-description text-ellipsis overflow-hidden line-clamp-2 xl:line-clamp-3">
                                    Deskripsi produk yang panjang dan harus dipotong ketika melebihi dua baris agar tetap rapi secara visual.
                                </p>
                            </div>

                            <!-- Button stays at bottom -->
                            <button
                                class="w-[70%] mt-[12px] open-sans-bold text-[16px] text-white bg-[#2563EB] py-[6px] rounded-[10px] cursor-pointer lg:hover:bg-blue-700 opacity-100 transition-colors duration-100 ease-in product-button">
                                <?= esc($see_detail_button_title ?? 'Lihat Detail') ?>
                            </button>
                        </div>
                    </div>
                    <div class="sekeleton-wrapper">
                        <div class="skeleton w-full aspect-square mb-[12px] rounded-[15px]"></div>
                    </div>
                </a>
            `;
        } else {
            cardTemplate = `
            <a href="/">
                <div
                    class="hidden product-card-container rounded-[15px] xl:rounded-[20px] h-full drop-shadow-[1px_4px_5px_rgba(0,0,0,0.08)] hover:scale-102 transition-transform duration-150 flex-col items-center cursor-pointer">
                    <img src="/" alt="title" class="w-full h-auto rounded-[15px] product-image">
                    <div class="flex flex-col justify-start pt-[10px] min-h-[60px] w-full">
                        <h3 class="open-sans-semi-bold text-[16px] tracking-wide text-[#2563EB] product-title"></h3>
                    </div>
                </div>
                <div class="sekeleton-wrapper">
                    <div class="skeleton w-full aspect-square rounded-[15px]"></div>
                    <div class="flex flex-col space-y-[4px] w-full justify-center items-start h-[60px] ">
                        <div class="skeleton w-[92%] h-[14px] rounded-[8px]"></div>
                        <div class="skeleton w-[60%] h-[14px] rounded-[8px]"></div>
                    </div>
                </div>
            </a>
            `;
        }
        for (let i = 0; i < productPerPageLimit; i++) {

            productGrid.innerHTML += cardTemplate;
        }

    }
    // ======= end initiate product grid function =======

    // initiate product function
    // ======= end initiate product function =======

    // update product function

    function renderPage(page = 1) {
        const encodedKeyword = encodeURIComponent(searchForm.value);
        currentPage = page;
        fetchData(currentPage)
            .then(products => {
                renderProduct(products);
                renderPagination(page, totalPages, middleSize, 'pagination', encodedKeyword);
            })
            .catch(error => {
                console.error('Error fetching data:', error);
            });
    }
    // ======= end update product function =======
    function initiateProduct() {
        const encodedKeyword = encodeURIComponent(searchForm.value);
        fetchData()
            .then(products => {
                renderProduct(products);
                renderPagination(currentPage, totalPages, middleSize, 'pagination', encodedKeyword);
            })
            .catch(error => {
                console.error('Error fetching data:', error);
            });
    }

    // pagination
    function renderPagination(selectedPage, totalPages, middleSize, containerId, keyword) {
        const container = document.getElementById(containerId);
        container.innerHTML = ''; // Clear previous buttons

        // Helper: Create link element
        function createLink(page, text = page, isActive = false) {
            const a = document.createElement('a');
            const encodedKeyword = encodeURIComponent(keyword || '');
            a.href = `/products/list?page=${page}&keyword=${encodedKeyword}&limit=${productPerPageLimit}`;
            a.textContent = text;
            a.className = `px-3 py-1 border rounded mx-1 ${
            isActive ? 'bg-blue-500 text-white font-bold' : 'bg-white text-blue-500 hover:bg-blue-100'
        }`;
            // Add click listener
            a.addEventListener('click', (e) => {
                e.preventDefault(); // Prevent default link behavior
                renderPage(page); // Call your custom page rendering function
            });

            return a;
        }

        // Helper: Create ellipsis element
        function createEllipsis() {
            const span = document.createElement('span');
            span.textContent = '...';
            span.className = 'px-3 py-1 text-gray-400';
            return span;
        }

        // Always show page 1
        container.appendChild(createLink(1, '1', currentPage === 1));

        // Determine middle range
        const half = Math.floor(middleSize / 2);
        let start = currentPage - half;
        let end = currentPage + half;

        // Adjust range to avoid overflow
        if (start < 2) {
            end += 2 - start;
            start = 2;
        }
        if (end > totalPages - 1) {
            start -= end - (totalPages - 1);
            end = totalPages - 1;
            if (start < 2) start = 2;
        }

        // Left ellipsis
        if (start > 2) {
            container.appendChild(createEllipsis());
        }

        // Middle numbered links
        for (let i = start; i <= end; i++) {
            container.appendChild(createLink(i, i, currentPage === i));
        }

        // Right ellipsis
        if (end < totalPages - 1) {
            container.appendChild(createEllipsis());
        }

        // Always show last page
        if (totalPages > 1 && end < totalPages) {
            container.appendChild(createLink(totalPages, totalPages, currentPage === totalPages));
        }
    }


    initiateProductGrid();
    initiateProduct();
});
</script>
<script>
function getSkipCount() {
    const width = document.documentElement.clientWidth;
    // if (width <= 480) return 0;
    if (width <= 768) return 0;
    if (width <= 1024) return 2;
    return -1;
}

function filterAllSecondRows() {
    const skip = getSkipCount();
    // loop setiap parent container
    document.querySelectorAll('[data-first-row]').forEach(wrapper => {
        const items = wrapper.querySelectorAll('.second-row-items');
        if (items.length > 5) {
            items.forEach((item, index) => {
                if (index > skip) {
                    item.remove(); // hapus hanya dalam parent ini
                }
            });
        }
    });
}

function applyGridFilter() {
    const skip = getSkipCount() + 1;

    document.querySelectorAll('[data-grid]').forEach(wrapper => {
        const items = wrapper.querySelectorAll('.grid-item');
        if (items.length > 5) {
            items.forEach((item, index) => {
                if (index < skip) {
                    item.remove(); // hapus hanya dalam parent ini
                }
            });
        }
    });
}

document.addEventListener('DOMContentLoaded', applyGridFilter);
document.addEventListener('DOMContentLoaded', filterAllSecondRows);

document.querySelectorAll('[data-accordion-header]').forEach(header => {

    const accordion = header.closest('[data-accordion-header]');
    const grid = accordion.querySelector('.grid-animated');
    const firstRow = header.querySelector('[data-first-row]');
    const secondRow = header.querySelectorAll('.second-row-items');
    const itemCount = header.querySelector('[data-item-count]');
    const arrow = header.querySelector('[data-arrow]');
    const titleContainer = header.querySelector('[data-title-container]');
    const leftIcon = header.querySelector('[data-left-icon]');
    const borderBottom = accordion.querySelector('[data-border-bottom]');

    const leftProductContainer = document.getElementById('left-product-container');
    const rightProductContainer = document.getElementById('right-product-container');
    const topProductContainer = document.getElementById('top-product-container');

    firstRow.querySelectorAll('.first-row-product-link').forEach(link => {
        link.setAttribute('aria-disabled', 'true');
        link.style.pointerEvents = 'none';
        link.tabIndex = -1;
    });

    header.addEventListener('click', async () => {
        await closeAllAccordions(header);
        const isOpen = header.classList.contains('open');

        if (!isOpen) {
            firstRow.querySelectorAll('.first-row-product-link').forEach(link => {
                link.removeAttribute('aria-disabled'); // atau set ke 'false'
                link.style.pointerEvents = 'auto'; // aktifkan kembali klik
                link.tabIndex = 0; // bisa diakses via keyboard
            });
            leftProductContainer.classList.add('z-30');
            rightProductContainer.classList.add('animate-fade-in');

            window.addEventListener('resize', async () => {
                if (window.innerWidth >= 1040) {
                    await delay(300);
                }
            });
            header.classList.add('open');
            itemCount.classList.add('hidden');
            arrow.classList.add('rotate-90');
            titleContainer.classList.add('expand');
            firstRow.classList.replace('gap-x-[4px]', 'gap-x-[20px]');
            leftIcon.classList.add('shrink');
            borderBottom.classList.add('mt-[40px]');
            secondRow.forEach(el => {
                el.classList.remove('hidden');
            });
            firstRow.querySelectorAll('.detail-card-container').forEach(el => {
                el.classList.add('lg:hover:opacity-90');
            });

            firstRow.classList.add('top-grid-animated');

            focusAccordionSmooth(header);


        } else {
            firstRow.querySelectorAll('.first-row-product-link').forEach(link => {
                link.setAttribute('aria-disabled', 'true');
                link.style.pointerEvents = 'none';
                link.tabIndex = -1;
            });
            leftProductContainer.classList.remove('z-30');
            header.classList.remove('open');
            arrow.classList.remove('rotate-90');
            titleContainer.classList.remove('expand');
            firstRow.classList.replace('gap-x-[20px]', 'gap-x-[4px]');
            leftIcon.classList.remove('shrink');
            borderBottom.classList.remove('mt-[40px]');
            secondRow.forEach(el => {
                el.classList.add('hidden');
            });
            firstRow.classList.remove('top-grid-animated');
            firstRow.querySelectorAll('.detail-card-container').forEach(el => {
                el.classList.remove('lg:hover:opacity-90');
            });
        }

        // CLOSE GRID
        if (grid.classList.contains('open')) {

            grid.style.height = grid.scrollHeight + "px";
            requestAnimationFrame(() => {
                grid.style.height = 0;
            });
            grid.classList.remove('open');

            grid.querySelectorAll('.grid-item').forEach(el => {
                el.classList.remove('animate');
            });
        }

        firstRow.addEventListener('animationend', function(event) {
            if (event.animationName === "expandFull") {
                grid.classList.add('open');
                grid.style.height = grid.scrollHeight + "px";
                animateGridItems(grid);
            }
            if (event.animationName === "shrinkBack") {
                // setTimeout(() => resolve(), 50);
                itemCount.classList.remove('hidden');
                rightProductContainer.classList.remove('animate-fade-in');
            }
        }, {
            once: true
        });

        toggleWidth(firstRow);
    });
});

function delay(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}

function closeAllAccordions(exceptHeader) {
    const opened = document.querySelectorAll('[data-accordion-header].open');

    if (opened.length === 0) {
        return Promise.resolve();
    }

    const waits = [];

    opened.forEach(openHeader => {
        if (openHeader === exceptHeader) return;

        const accordion = openHeader.closest('[data-accordion-header]');
        const grid = accordion.querySelector('.grid-animated');
        const firstRow = openHeader.querySelector('[data-first-row]');
        const secondRow = openHeader.querySelectorAll('.second-row-items');
        const arrow = openHeader.querySelector('[data-arrow]');
        const titleContainer = openHeader.querySelector('[data-title-container]');
        const leftIcon = openHeader.querySelector('[data-left-icon]');
        const borderBottom = accordion.querySelector('[data-border-bottom]');
        const itemCount = openHeader.querySelector('[data-item-count]');

        openHeader.classList.remove('open');
        arrow.classList.remove('rotate-90');
        titleContainer.classList.remove('expand');
        firstRow.classList.replace('gap-x-[20px]', 'gap-x-[4px]');
        leftIcon.classList.remove('shrink');
        borderBottom.classList.remove('mt-[40px]');

        // Close grid
        if (grid.classList.contains('open')) {
            grid.style.height = 0;
            grid.classList.remove('open');
            grid.querySelectorAll('.grid-item').forEach(el => {
                el.classList.remove('animate');
            });
            secondRow.forEach(el => {
                el.classList.add('hidden');
            });
            firstRow.classList.remove('top-grid-animated');
            firstRow.querySelectorAll('.first-row-product-link').forEach(link => {
                link.setAttribute('aria-disabled', 'true');
                link.style.pointerEvents = 'none';
                link.tabIndex = -1;
            });
        }

        firstRow.classList.remove("animate-expand");
        firstRow.classList.add("animate-shrink");

        firstRow.querySelectorAll('.first-row-items').forEach(el => {
            el.classList.remove('expand');
        });

        itemCount.classList.remove('hidden');

        // ✅ ONLY resolve when shrink animation finishes
        waits.push(new Promise(resolve => {
            const handler = (e) => {
                if (e.animationName === 'shrinkBack') {
                    resolve();
                }
            };
            firstRow.addEventListener('animationend', handler, {
                once: true
            });
        }));
    });

    return Promise.all(waits);
}

function focusAccordionSmooth(wrapper) {
    const OFFSET = 80; // jarak dari atas (sesuaikan)

    requestAnimationFrame(() => {
        setTimeout(() => {
            const top = wrapper.getBoundingClientRect().top + window.scrollY - OFFSET;

            window.scrollTo({
                top: top,
                behavior: "smooth"
            });
        }, 200); // tunggu animasi expand mulai
    });
}




function getItemsPerRow(wrapper) {
    const style = window.getComputedStyle(wrapper);
    return style.getPropertyValue("grid-template-columns").split(" ").length;
}

function animateGridItems(grid) {
    const items = grid.querySelectorAll('.grid-item');
    const itemsPerRow = getItemsPerRow(grid);

    items.forEach((item, index) => {
        const row = Math.floor(index / itemsPerRow);
        item.style.animationDelay = `${row * 0.15}s`;
        item.classList.add('animate');
    });
}

function toggleWidth(container) {
    if (container.classList.contains("animate-expand")) {
        container.classList.remove("animate-expand");
        container.classList.add("animate-shrink");
        container.classList.remove("absolute", "left-0");
    } else {
        container.classList.remove("animate-shrink");
        container.classList.add("animate-expand");
        container.classList.add("absolute", "left-0");
    }
}
</script>
<script>
const swiper = new Swiper('.mySwiper', {
    slidesPerView: 3,
    spaceBetween: 0,
    centeredSlides: true,
    loop: true,
    autoplay: {
        delay: 4000,
    },
    speed: 800,

    navigation: {
        nextEl: '.slide-next',
        prevEl: '.slide-prev',
    },

    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
});
</script>



<?= $this->endSection() ?>
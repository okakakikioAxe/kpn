<?= $this->extend('v2/template/template_v2') ?>


<?= $this->section('header') ?>
<html lang="<?= esc($lang ?? 'id') ?>">
<title><?= esc($meta_title ?? 'Produk') ?></title>
<meta name="description"
    content="<?= esc($meta_description ?? 'Jelajahi Beragam Pilihan Produk Berkualitas Kami dan Temukan Solusi Terbaik untuk Kebutuhan Bisnis Anda.') ?>" />
<meta name="keywords"
    content="<?= esc($meta_keyword ?? 'produk kpn, produk HDPE, produk EVA, produk TPE, produk XPE, katalog kpn, produk karya pilar nusantara, katalog karya pilar nusantara, product camping, product infrastruktur, kursi lipat, kubus apung') ?>" />

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
    <!-- Hero Text -->
    <!-- <div id="hero-text" class="w-full flex items-center justify-center mx-auto px-4 py-8 text-white text-center">
        <div class="flex flex-col w-full h-full items-center justify-center relative z-10  my-[200px]">
            <div class="block w-full items-center justify-center mb-[40px] md:mb-[60px]">
                <h1
                    class="ubuntu-bold h-[35px] md:h-[45px] text-[30px] md:text-[40px] tracking-[4%] text-center text-black title-shadow mr-2">
                    <-?= esc($hero_top_title ?? 'Produk Unggulan') ?>
                </h1>
                <p
                    class=" ubuntu-bold text-[30px] md:text-[40px] tracking-[4%] text-[#2563EB] title-shadow text-center w-full">
                    Karya Pilar Nusantara</p>
            </div>

            <p
                class="w-full max-w-[600px] open-sans-regular text-[16px] lg:text-[18px] tracking-[4%] text-center text-[#4E4E4E] mb-[90px] md:mb-[120px] px-10 md:px-10 xl:px-0">
                <-?= esc($hero_sub_title ?? 'Jelajahi Beragam Pilihan Produk Berkualitas Kami dan Temukan Solusi Terbaik untuk Kebutuhan Bisnis Anda.') ?>
            </p>
            <button id="scroll-to-product"
                class="cursor-pointer bg-blue-600 hover:bg-blue-700 px-[32px] md:px-[38px] transition-colors basic-contact-us-button py-[10px] md:py-[12px] rounded-[15px] md:rounded-[18px]"
                type="button">
                <div class="flex items-center justify-center w-full space-x-[14px]">

                    <div class="roboto-bold tracking-wide text-[16px] sm:text-[18px] text-white">
                        <-?= esc($hero_button_title ?? 'Jelajahi Produk') ?></div>
                </div>
            </button>
        </div>
    </div>
    <img src="/images/product_page/product2.png" alt="product group" width="505" height="595"
        class="absolute bottom-[-20px] md:bottom-[-40px] right-0 w-[180px] sm:w-[220px] lg:w-[280px] xl:w-[320px] 2xl:w-[380px] h-auto">
    <img src="/images/product_page/product1.png" alt="product group" width="655" height="490"
        class="absolute bottom-[-20px] sm:bottom-[-10px] left-[-80px] xl:left-[-120px] w-[220px] sm:w-[260px] lg:w-[300px] xl:w-[340px] 2xl:w-[440px] h-auto"> -->
</section>
<section id="product-section" class="w-full relative z-10 pt-[126px] mb-[200px]">
    <!-- <div class="flex flex-col w-full items-center justify-center mb-[120px] md:mb-[160px]">
        <div class="block w-full items-center justify-center mb-[40px] md:mb-[60px]">
            <h2
                class="ubuntu-bold h-[35px] md:h-[45px] text-[30px] md:text-[40px] tracking-[4%] text-center text-black title-shadow mr-2">
                <-?= esc($catalog_title ?? 'Katalog Produk') ?></h2>
        </div>
        <p
            class="w-full max-w-[800px] open-sans-regular text-[16px] lg:text-[18px] tracking-[4%] text-center text-[#4E4E4E] px-10 md:px-10 xl:px-0">
            <-?= esc($catalog_sub_title ?? 'Temukan Produk Terbaik yang Sesuai dengan Kebutuhan Anda. Jelajahi Koleksi Kami dan Pilih Solusi Pengadaan yang Tepat untuk Bisnis Anda!.') ?>
        </p>
    </div> -->
    <!-- <div class="flex flex-col items-center justify-center mb-[140px] md:mb-[160px] px-5 md:px-15 w-full">
        <div class="flex w-full items-start justify-start mb-[30px]  max-w-[1200px]">
            <h3
                class="ubuntu-bold h-[35px] md:h-[45px] text-[22px] md:text-[28px] tracking-[4%] text-start text-black title-shadow mr-2">
                <?= esc($category_title ?? 'Kategori') ?></h3>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 w-full max-w-[1200px] relative">
            <?php foreach ($categories as $category): ?>
                <a href="<?=
                            (strpos($_SERVER['REQUEST_URI'], '/en/') !== false)
                                ? '/en/product-category/' . $category['slug']
                                : ((strpos($_SERVER['REQUEST_URI'], '/cn/') !== false)
                                    ? '/cn/product-category/' . $category['slug']
                                    : '/product-category/' . $category['slug'])
                            ?>" class=" w-full rounded-[15px] relative cursor-pointer">
                    <img src="/images/category/<?= $category['image'] ?>" alt="<?= $category['title'] ?>" width="618"
                        height="402" class="object-cover aspect-[5/3] rounded-[15px] mb-[12px]">
                    <div
                        class="absolute top-0 rounded-[15px] opacity-0 transition-opacity duration-200 ease-in lg:hover:opacity-90 h-full w-full text-center open-sans-regular">
                        <div
                            class="rounded-[15px] opacity-[92%] bg-[#f1f1fa] aspect-[5/3] p-5 items-center justify-center w-full text-center open-sans-regular hidden lg:flex">
                            <?= $category['description'] ?>
                        </div>
                    </div>
                    <p class="open-sans-bold text-center text-[16px] md:text-[20px]"><?= $category['title'] ?></p>
                </a>
            <?php endforeach; ?>
        </div>
    </div> -->

    <style>
    @keyframes leftIconShrink {
        0% {
            height: 60px;
        }


        20% {
            height: 30px;
        }

        100% {
            height: 24px;
        }
    }

    .animate-left-icon-shrink {
        animation: leftIconShrink 0.5s forwards ease;
    }

    @keyframes leftIconExpand {

        0% {
            height: 24px;
        }


        40% {
            height: 28px;
        }

        100% {
            height: 60px;
        }
    }

    .animate-left-icon-expand {
        animation: leftIconExpand 0.5s forwards ease;
    }

    .left-icon {
        position: absolute;
        width: 60px;
        height: 60px;
    }


    .small-boxes {
        position: relative;
        left: 72px;
        display: flex;
        grid-template-columns: repeat(auto-fill, minmax(60px, 1fr));
        gap: 12px;
    }



    .first-row-items {
        position: relative;
        aspect-ratio: 1 / 1;
        width: 16px;
        /* transform: scale(0.7); */

        transition: transform 0.4s ease, width 0.4s ease;
        /* jarak antar item */
    }

    .first-row-items.expand {
        /* transform: scale(1); */
        /* membesar */
        width: 100%;
        /* akan melebar sesuai ruang */
    }

    @keyframes expandFull {
        from {
            width: 168.2px;
            left: 72;
        }

        to {
            width: 100%;
            left: 0px;
        }
    }


    .animate-expand {
        animation: expandFull 0.5s forwards ease;
    }

    @keyframes shrinkBack {
        from {
            width: 100%;
            left: 0px;
        }

        to {
            width: 168.2px;
            left: 72px;
        }
    }

    .animate-shrink {
        animation: shrinkBack 0.5s forwards ease;
    }


    /* .grid-animated {
        height: 0;
        overflow: hidden;
        transition: height 0.5s ease;
    } */

    /* ITEM BASE */
    .grid-item {
        opacity: 0;
        transform: scale(0.8);
    }

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

    .grid-animated {
        height: 0;
        overflow: hidden;
        transition: height 0.5s ease;
        display: grid;
        gap: 12px;
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



    /* ROW 1 */
    /* .grid-animated.open .grid-item:nth-child(-n+5) {
        animation: growFade 0.3s forwards ease;
        animation-delay: 0.0s;
    } */

    /* ROW 2 */
    /* .grid-animated.open .grid-item:nth-child(n+6):nth-child(-n+10) {
        animation: growFade 0.3s forwards ease;
        animation-delay: 0.15s;
    } */

    /* ROW 3 */
    /* .grid-animated.open .grid-item:nth-child(n+11):nth-child(-n+15) {
        animation: growFade 0.3s forwards ease;
        animation-delay: 0.30s;
    } */
    </style>


    <div class="max-w-[1200px] mx-auto">

        <!-- ACCORDION LIST -->
        <div class="space-y-4 accordion-item bg-red-100">
            <div data-accordion-header>

                <!-- HEADER OPEN -->
                <div class="flex items-start gap-4 cursor-pointer py-4 bg-green-50 relative h-full">

                    <!-- LEFT ICON BOX -->
                    <div id="left-icon" class=" bg-red-100 rounded-lg left-icon" data-left-icon></div>

                    <!-- TITLE + SMALL BOXES -->
                    <div class="flex-1">
                        <div class="flex relative left-[64px] items-end">

                            <h2 class="  text-xl font-semibold ">Olahraga</h2>

                            <img id="data-arrow" loading="lazy"
                                class="h-[22px] w-[22px] transition-transform duration-300 ml-4" src="arrow-right.svg"
                                alt="panah kanan">
                        </div>

                        <div class="flex bg-orange-100 w-auto">
                            <!-- SMALL BOXES -->
                            <div id="first-row" class=" mt-2 bg-sky-400 small-boxes" data-small-boxes>
                                <div class="first-row-items bg-gray-300 rounded"></div>
                                <div class="first-row-items bg-gray-300 rounded"></div>
                                <div class="first-row-items bg-gray-300 rounded"></div>
                                <div class="first-row-items bg-gray-300 rounded"></div>
                                <div class="first-row-items bg-gray-300 rounded"></div>
                                <span id="item-count">16+</span>
                            </div>
                        </div>
                    </div>

                    <!-- AGE + CHEVRON DOWN -->



                </div>
                <div class="grid grid-cols-5 gap-4 grid-animated" id="myGrid">
                    <div class="grid-item w-full aspect-square bg-gray-300 rounded-lg"></div>
                    <div class="grid-item w-full aspect-square bg-gray-300 rounded-lg"></div>
                    <div class="grid-item w-full aspect-square bg-gray-300 rounded-lg"></div>
                    <div class="grid-item w-full aspect-square bg-gray-300 rounded-lg"></div>
                    <div class="grid-item w-full aspect-square bg-gray-300 rounded-lg"></div>

                    <div class="grid-item w-full aspect-square bg-gray-300 rounded-lg"></div>
                    <div class="grid-item w-full aspect-square bg-gray-300 rounded-lg"></div>
                    <div class="grid-item w-full aspect-square bg-gray-300 rounded-lg"></div>
                    <div class="grid-item w-full aspect-square bg-gray-300 rounded-lg"></div>
                    <div class="grid-item w-full aspect-square bg-gray-300 rounded-lg"></div>

                    <div class="grid-item w-full aspect-square bg-gray-300 rounded-lg"></div>
                    <div class="grid-item w-full aspect-square bg-gray-300 rounded-lg"></div>
                    <div class="grid-item w-full aspect-square bg-gray-300 rounded-lg"></div>
                    <div class="grid-item w-full aspect-square bg-gray-300 rounded-lg"></div>
                    <div class="grid-item w-full aspect-square bg-gray-300 rounded-lg"></div>
                </div>
            </div>

        </div>

    </div>

    <script>
    const grid = document.querySelector('.grid-animated');
    const firstRow = document.getElementById('first-row');
    document.querySelectorAll('.accordion-item').forEach(item => {
        const header = item.querySelector('[data-accordion-header]');
        const itemCount = document.getElementById('item-count');
        header.addEventListener('click', () => {

            const isOpen = header.classList.contains('open');


            if (!isOpen) {
                header.classList.add('open');
                itemCount.classList.add('hidden');
                document.getElementById('data-arrow').classList.add('rotate-90');
                // document.querySelectorAll('[data-arrow]').forEach(a => a.classList.add('rotate-90'));
            } else {
                header.classList.remove('open');
                itemCount.classList.remove('hidden');
                document.getElementById('data-arrow').classList.remove('rotate-90');
                // document.querySelectorAll('[data-arrow]').forEach(a => a.classList.remove(
                //     'rotate-90'));
            }

            if (grid.classList.contains('open')) {
                grid.style.height = grid.scrollHeight + "px";
                requestAnimationFrame(() => {
                    grid.style.height = 0;
                });
                grid.classList.remove('open');

                const items = document.querySelectorAll('.grid-item');
                // const itemsPerRow = getItemsPerRow();

                items.forEach((item, index) => {

                    item.classList.remove('animate');
                });
            }

            firstRow.addEventListener('animationend', function(event) {
                if (event.animationName === "expandFull") {
                    grid.classList.add('open');
                    grid.style.height = grid.scrollHeight + "px";

                    animateGridItems();
                }
            });

            toggleWidth(firstRow);
        });
    });


    function getItemsPerRow() {
        const wrapper = document.querySelector('.grid-animated');
        const style = window.getComputedStyle(wrapper);
        const cols = style.getPropertyValue("grid-template-columns").split(" ").length;
        return cols;
    }

    function animateGridItems() {
        const items = document.querySelectorAll('.grid-item');
        const itemsPerRow = getItemsPerRow();

        items.forEach((item, index) => {
            const row = Math.floor(index / itemsPerRow);
            const delay = row * 0.15; // per-row delay seperti sebelumnya
            item.style.animationDelay = `${delay}s`;
            item.classList.add('animate');
        });
    }

    function toggleWidth(container) {
        if (container.classList.contains("animate-expand")) {
            container.classList.remove("animate-expand");
            container.classList.add("animate-shrink");
            container.classList.remove("absolute", "left-0");

            document.querySelectorAll('.first-row-items').forEach(el => {
                el.classList.remove('expand');
            });
            document.getElementById('left-icon').classList.remove('animate-left-icon-shrink');
            document.getElementById('left-icon').classList.add('animate-left-icon-expand');
        } else {
            container.classList.remove("animate-shrink");
            container.classList.add("animate-expand");
            container.classList.add("absolute", "left-0");


            document.querySelectorAll('.first-row-items').forEach(el => {
                el.classList.add('expand');
            });

            document.getElementById('left-icon').classList.add('animate-left-icon-shrink');
            document.getElementById('left-icon').classList.remove('animate-left-icon-expand');
        }
    }
    </script>



    <!-- ============================================================= -->
    <!-- JAVASCRIPT (PURE, NO DEPENDENCIES) -->
    <!-- ============================================================= -->
    <!-- <script>
    document.querySelectorAll('.accordion-item').forEach(item => {
        const header = item.querySelector('[data-accordion-header]');
        const content = item.querySelector('[data-accordion-content]');
        const arrow = item.querySelector('[data-arrow]');
        const leftIcon = item.querySelector('[data-left-icon]');
        const smallBoxes = item.querySelector('[data-small-boxes]');

        header.addEventListener('click', () => {
            const isOpen = content.classList.contains('open');

            // Tutup semua accordion
            document.querySelectorAll('[data-accordion-content]').forEach(c => c.classList.remove(
                'open'));
            document.querySelectorAll('[data-arrow]').forEach(a => a.classList.remove('rotate-180'));
            document.querySelectorAll('[data-left-icon]').forEach(l => l.classList.remove('shrink'));
            document.querySelectorAll('[data-small-boxes]').forEach(s => s.classList.remove('animate'));

            if (!isOpen) {
                content.classList.add('open');
                arrow.classList.add('rotate-180');
                leftIcon.classList.add('shrink');

                // Panggil animasi baru
                animateSmallBoxesToGrid(smallBoxes, content);
                // Setelah animasi small boxes selesai, hapus animasi agar tetap di grid
                setTimeout(() => {
                    smallBoxes.classList.remove('animate');
                }, 500); // durasi sesuai keyframe
            }
        });
    });

    function animateSmallBoxesToGrid(smallBoxesContainer, gridContainer) {
        const smallBoxes = [...smallBoxesContainer.children];
        const gridTargets = [...gridContainer.children].slice(0, 5);

        smallBoxes.forEach((box, i) => {
            const start = box.getBoundingClientRect();
            const target = gridTargets[i].getBoundingClientRect();

            const fly = box.cloneNode(true);
            fly.classList.add('fly-box');
            fly.style.width = start.width + "px";
            fly.style.height = start.height + "px";
            fly.style.left = start.left + "px";
            fly.style.top = start.top + "px";

            document.body.appendChild(fly);

            requestAnimationFrame(() => {
                const dx = target.left - start.left;
                const dy = target.top - start.top;

                fly.style.transform = `translate(${dx}px, ${dy}px) scale(${target.width/start.width})`;
            });

            // remove clone after animation
            setTimeout(() => fly.remove(), 650);
        });
    }
    </script> -->



    <div class="flex w-full justify-center mb-[78px] px-5 md:px-15">
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
                                <p class="open-sans-regular text-[14px] product-description text-ellipsis overflow-hidden line-clamp-2 xl:line-clamp-3 2xl:line-clamp-4">
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

<?= $this->endSection() ?>
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
</style>
<?= $this->endsection() ?>
<?= $this->section('content') ?>
<section id="hero-section" class="relative flex items-center justify-center h-screen w-full bg-[#EFF6FF] z-20">
    <div id="nav-observer" class="absolute top-0 left-0 z-50 h-[200px] w-full bg-transparent"></div>
    <!-- Hero Text -->
    <div id="hero-text" class="w-full flex items-center justify-center mx-auto px-4 py-8 text-white text-center">
        <div class="flex flex-col w-full h-full items-center justify-center relative z-10  my-[200px]">
            <div class="block w-full items-center justify-center mb-[40px] md:mb-[60px]">
                <h1
                    class="ubuntu-bold h-[35px] md:h-[45px] text-[30px] md:text-[40px] tracking-[4%] text-center text-black title-shadow mr-2">
                    <?= esc($hero_top_title ?? 'Produk Unggulan') ?>
                </h1>
                <p
                    class=" ubuntu-bold text-[30px] md:text-[40px] tracking-[4%] text-[#2563EB] title-shadow text-center w-full">
                    Karya Pilar Nusantara</p>
            </div>

            <p
                class="w-full max-w-[600px] open-sans-regular text-[16px] lg:text-[18px] tracking-[4%] text-center text-[#4E4E4E] mb-[90px] md:mb-[120px] px-10 md:px-10 xl:px-0">
                <?= esc($hero_sub_title ?? 'Jelajahi Beragam Pilihan Produk Berkualitas Kami dan Temukan Solusi Terbaik untuk Kebutuhan Bisnis Anda.') ?>
            </p>
            <button id="scroll-to-product"
                class="cursor-pointer bg-blue-600 hover:bg-blue-700 px-[32px] md:px-[38px] transition-colors basic-contact-us-button py-[10px] md:py-[12px] rounded-[15px] md:rounded-[18px]"
                type="button">
                <div class="flex items-center justify-center w-full space-x-[14px]">

                    <div class="roboto-bold tracking-wide text-[16px] sm:text-[18px] text-white">
                        <?= esc($hero_button_title ?? 'Jelajahi Produk') ?></div>
                </div>
            </button>
        </div>
    </div>
    <img src="/images/product_page/product2.png" alt="product group" width="505" height="595"
        class="absolute bottom-[-20px] md:bottom-[-40px] right-0 w-[180px] sm:w-[220px] lg:w-[280px] xl:w-[320px] 2xl:w-[380px] h-auto">
    <img src="/images/product_page/product1.png" alt="product group" width="655" height="490"
        class="absolute bottom-[-20px] sm:bottom-[-10px] left-[-80px] xl:left-[-120px] w-[220px] sm:w-[260px] lg:w-[300px] xl:w-[340px] 2xl:w-[440px] h-auto">
</section>
<section id="product-section" class="w-full relative z-10 pt-[126px] mb-[200px]">
    <div class="flex flex-col w-full items-center justify-center mb-[120px]">
        <div class="block w-full items-center justify-center mb-[40px] md:mb-[60px]">
            <h2
                class="ubuntu-bold h-[35px] md:h-[45px] text-[30px] md:text-[40px] tracking-[4%] text-center text-black title-shadow mr-2">
                <?= esc($catalog_title ?? 'Katalog Produk') ?></h2>
        </div>
        <p
            class="w-full max-w-[800px] open-sans-regular text-[16px] lg:text-[18px] tracking-[4%] text-center text-[#4E4E4E] px-10 md:px-10 xl:px-0">
            <?= esc($catalog_sub_title ?? 'Temukan Produk Terbaik yang Sesuai dengan Kebutuhan Anda. Jelajahi Koleksi Kami dan Pilih Solusi Pengadaan yang Tepat untuk Bisnis Anda!.') ?>
        </p>
    </div>
    <div class="flex w-full justify-center mb-[78px] px-5 md:px-15">
        <div class="w-full flex justify-end max-w-[1400px]">

            <div class="w-full max-w-[460px] flex items-center rounded-full border-1 border-[rgba(156,156,156,0.74)]">
                <input id="search-form" type="text" placeholder="kubus apung"
                    class="py-[12px] px-[24px] open-sans-regular text-[16px] w-full outline-none">
                <button id="search-button" class="h-[28px] w-[28px]  mr-[27px]">
                    <?= view('components/icons/search', ['class' => 'w-[28px] aspect-square', 'fill' => '#2563EB']) ?>
                </button>
            </div>
        </div>
    </div>
    <div class="flex flex-col items-center justify-center w-full px-5 md:px-15 sm:px-8 ">
        <div id="product-grid" class="grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-5 gap-6 w-full max-w-[1400px] ">

        </div>
        <div id="product-sekeleton" class="grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-5 gap-6 w-full max-w-[1400px] ">
            <?php for ($i = 1; $i <= 8; $i++): ?>
            <div class="skeleton-wrapper ">
                <div class="skeleton w-full aspect-square mb-[4px] rounded-[8px]"></div>
                <div class="flex w-full justify-center">
                    <div class="skeleton w-[92%] h-[20px] rounded-[8px]"></div>
                </div>
            </div>
            <?php endfor; ?>
        </div>
        <div id="pagination" class="flex mt-8 gap-2">
            <!-- Tombol pagination -->
        </div>
    </div>

</section>
<section id="cta-section">
    <x-cta-banner />
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
document.getElementById('scroll-to-product').addEventListener('click', function() {
    const target = document.getElementById('product-section');
    if (target) {
        target.scrollIntoView({
            behavior: 'smooth'
        });
    }
});
</script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    let currentPage = 1;
    const searchForm = document.getElementById('search-form');
    const searchButton = document.getElementById('search-button');
    const productGrid = document.getElementById('product-grid');
    const productSekeleton = document.getElementById('product-sekeleton');



    searchForm.addEventListener("keydown", function(e) {
        if (e.key === "Enter") {
            e.preventDefault(); // opsional, cegah aksi default jika ada
            loadProducts(currentPage);
        }
    });
    searchButton.addEventListener("click", function(e) {
        loadProducts(currentPage);
    });

    function loadProducts(page = 1) {
        productGrid.classList.replace('grid', 'hidden');
        productSekeleton.classList.replace('hidden', 'grid');

        const encodedKeyword = encodeURIComponent(searchForm.value);
        fetch(`/products/list?page=${page}&keyword=${encodedKeyword}`)
            .then(response => response.json())
            .then(data => {
                const grid = document.getElementById("product-grid");
                grid.innerHTML = "";

                data.products.forEach(product => {
                    grid.innerHTML += `
                        <a href="<?= ($product_detail_link_prefix ?? '/product/') ?>${product.slug}">
                            <div class="bg-[#FCFCFF] rounded-[8px] xl:rounded-t-[12px] h-full drop-shadow-[1px_4px_5px_rgba(0,0,0,0.08)] hover:scale-102 transition-transform duration-150 flex flex-col items-center cursor-pointer">
                                <img src="/images/products/${product.slug}/${product.thumbnail}" alt="${product.title}" class="w-full h-auto rounded-t-[8px] xl:rounded-t-[12px]">
                                <div class="flex w-full h-full items-center justify-center p-[6px] ">
                                    <h3 class="open-sans-regular text-[16px] tracking-wide text-[#2563EB]">${product.title}</h3>
                                </div>
                            </div>
                        </a>
                    `;
                });

                const pagination = document.getElementById("pagination");
                pagination.innerHTML = "";

                for (let i = 1; i <= data.lastPage; i++) {
                    pagination.innerHTML += `
                        <button data-page="${i}" class="px-3 py-1 border rounded ${i === data.page ? 'bg-blue-500 text-white' : 'bg-white text-blue-500'}">
                            ${i}
                        </button>
                    `;
                }

                document.querySelectorAll("#pagination button").forEach(button => {
                    button.addEventListener("click", function() {
                        const selectedPage = parseInt(this.getAttribute(
                            "data-page"));
                        currentPage = selectedPage;
                        loadProducts(currentPage);
                    });
                });

                productSekeleton.classList.replace('grid', 'hidden');
                productGrid.classList.replace('hidden', 'grid');
            });

    }

    loadProducts(currentPage);
});
</script>
<?= $this->endSection() ?>
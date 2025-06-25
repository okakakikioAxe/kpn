<?= $this->extend('v2/template/template_v2') ?>


<?= $this->section('header') ?>
<html lang="id">
<?= $this->endsection() ?>

<?= $this->section('content') ?>
<section id="hero-section" class="relative flex items-center justify-center h-screen w-full bg-[#EFF6FF] z-20">
    <!-- Hero Text -->
    <div id="hero-text" class="w-full flex items-center justify-center mx-auto px-4 py-8 text-white text-center">
        <div class="flex flex-col w-full h-full items-center justify-center relative z-10  my-[200px]">
            <div class="block w-full items-center justify-center mb-[40px] md:mb-[60px]">
                <h1
                    class="ubuntu-bold h-[35px] md:h-[45px] text-[30px] md:text-[40px] tracking-[4%] text-center text-black title-shadow mr-2">
                    Produk Unggulan</h1>
                <p
                    class=" ubuntu-bold text-[30px] md:text-[40px] tracking-[4%] text-[#2563EB] title-shadow text-center w-full">
                    Karya Pilar Nusantara</p>
            </div>

            <p
                class="w-full max-w-[600px] open-sans-regular text-[16px] lg:text-[18px] tracking-[4%] text-center text-[#4E4E4E] mb-[90px] md:mb-[120px] px-10 md:px-10 xl:px-0">
                Jelajahi Beragam Pilihan Produk Berkualitas Kami dan Temukan Solusi Terbaik untuk Kebutuhan Bisnis Anda.
            </p>
            <button
                class="cursor-pointer bg-blue-600 hover:bg-blue-700 px-[32px] md:px-[38px] transition-colors basic-contact-us-button py-[10px] md:py-[12px] rounded-[15px] md:rounded-[18px]"
                type="button">
                <div class="flex items-center justify-center w-full space-x-[14px]">

                    <div class="roboto-bold tracking-wide text-[16px] sm:text-[18px] text-white">Jelajahi Produk</div>
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
                Katalog Produk</h2>
        </div>
        <p
            class="w-full max-w-[800px] open-sans-regular text-[16px] lg:text-[18px] tracking-[4%] text-center text-[#4E4E4E] px-10 md:px-10 xl:px-0">
            Temukan Produk Terbaik yang Sesuai dengan Kebutuhan Anda. Jelajahi Koleksi Kami dan Pilih Solusi Pengadaan
            yang Tepat untuk Bisnis Anda!.
        </p>
    </div>
    <div class="flex flex-col items-center justify-center w-full px-4 sm:px-8 ">
        <div class="grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-5 gap-6 w-full max-w-[1400px] ">
            <?php foreach ($products as $product): ?>
                <a href="/product/<?= $product['slug'] ?>">
                    <div
                        class="bg-[#FCFCFF] rounded-[8px] xl:rounded-t-[12px] drop-shadow-[1px_4px_5px_rgba(0,0,0,0.08)] hover:scale-102 transition-transform duration-150 flex flex-col items-center cursor-pointer">
                        <img src="<?= '/images/products/' . $product['slug'] . '/' . $product['thumbnail'] ?>"
                            alt="<?= $product['title'] ?>" class="w-full h-auto rounded-t-[8px] xl:rounded-t-[12px]">
                        <div class="flex h-[40px] w-full items-center justify-center">
                            <h3 class="open-sans-regular text-[16px] tracking-wide text-[#2563EB]"><?= $product['title'] ?>
                            </h3>
                        </div>
                    </div>
                </a>
            <?php endforeach; ?>
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
    const hero = document.getElementById('hero-section');

    // Observer untuk ubah background dan teks saat masuk ke overview
    const observer = new IntersectionObserver(
        ([entry]) => {
            navbar.classList.remove('text-white');
            navbar.classList.add('text-gray-700');
            logoNavbar.classList.add('invert', 'brightness-75');
            navbarLanguageBorder.classList.replace('border-white', 'border-gray-700');
            navbarLanguageIcon.setAttribute('fill', '#374151');

            if (entry.isIntersecting) {
                // Masih di hero
                navbar.classList.remove('bg-white');

                if (blur) blur.classList.remove('hidden');


            } else {
                // Di luar hero
                navbar.classList.add('bg-white');

                if (blur) blur.classList.add('hidden');
            }
        }, {
            root: null,
            threshold: 0.1,
        }
    );

    observer.observe(hero);
</script>
<?= $this->endSection() ?>
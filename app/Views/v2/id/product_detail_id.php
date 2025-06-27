<?= $this->extend('v2/template/template_v2') ?>


<?= $this->section('header') ?>
<html lang="id">
<title>Jual <?= $product->title ?> - Karya Pilar Nusantara</title>
<meta name="description" content="<?= $meta_description ?>" />
<meta name="keywords"
    content="PT Karya Pilar Nusantara, KPN, pengadaan barang, mainan playground indoor, matras, kubus apung, kincir air, toren air, palet plastik, produk perairan, perlengkapan playground, peralatan outdoor, perusahaan pengadaan Indonesia, produk berkualitas tinggi">

<?= $this->endsection() ?>

<?= $this->section('content') ?>
<section id="hero-section"
    class="relative flex flex-col items-center justify-start w-full  z-20 mb-[120px] xl:mb-[200px]">
    <div id="nav-observer" class="absolute top-0 left-0 z-50 h-[60px] w-full bg-transparent"></div>

    <div class="h-[60px] w-full"></div>
    <div class="w-full h-full sm:max-w-[500px] md:max-w-[1400px] md:px-15 2xl:px-0">
        <nav aria-label="Breadcrumb" class="w-full hidden md:flex">
            <ol class="flex  items-center justify-start py-[20px]">
                <li>
                    <a href="/">
                        <p class="roboto-bold text-[16px] text-[#242424] cursor-pointer">Beranda</p>
                    </a>
                </li>
                <li>
                    <?= view('/components/icons/arrow', ['fill' => '#242424', 'class' => 'h-[16px] px:[14px]']) ?>
                </li>
                <li>
                    <a href="/product">
                        <p class="roboto-bold text-[16px] text-[#242424] cursor-pointer">Produk</p>
                    </a>
                </li>
                <li>
                    <?= view('/components/icons/arrow', ['fill' => '#242424', 'class' => 'h-[16px] px:[14px]']) ?>
                </li>
                <li>
                    <p class="roboto-bold text-[16px] text-[#2563EB] cursor-pointer"><?= $product->title ?></p>
                </li>
            </ol>
        </nav>

        <div class="grid grid-cols-1 md:grid-cols-2 md:gap-x-[40px]">

            <div class="relative w-full h-auto">
                <img id="image-container" src="<?= '/images/products/' . $product->slug . '/' . $product->thumbnail ?>"
                    alt="<?= $product->title ?>" class="w-full md:mb-[20px] lg:mb-[40px] md:rounded-[15px]">
                <button id="previous-image-button"
                    class="absolute md:hidden left-[20px] top-1/2 -translate-y-1/2 h-[40px] w-[40px] bg-blue-100/30 shadow-sm flex items-center justify-center rounded-full scale-x-[-1]">
                    <?= view('/components/icons/arrow', ['fill' => '#242424', 'class' => 'h-[16px] px:[14px]']) ?>
                </button>
                <button id="next-image-button"
                    class="absolute md:hidden right-[20px] top-1/2 -translate-y-1/2 h-[40px] w-[40px] bg-blue-100/30 shadow-sm flex items-center justify-center rounded-full">
                    <?= view('/components/icons/arrow', ['fill' => '#242424', 'class' => 'h-[16px] px:[14px]']) ?>
                </button>
                <div class="relative w-full hidden md:block">
                    <!-- Tombol Kiri -->
                    <button id="scrollLeftBtn" onclick="scrollKiri()"
                        class="absolute left-0 top-1/2 -translate-y-1/2  bg-white flex items-center shadow justify-center h-[30px] w-[37px] rounded-[5px] z-10">
                        ←
                    </button>

                    <!-- Container Scroll -->
                    <div id="scrollContainer" class="w-full overflow-x-auto scroll-smooth scrollbar-hide"
                        style="scrollbar-width: none; -ms-overflow-style: none;">
                        <div class="inline-flex gap-x-[5px] lg:gap-x-[10px] pb-[10px]">
                            <?php $imageIndex = 0; ?>
                            <button
                                onclick="changeImage('<?= $product->title ?>','<?= '/images/products/' . $product->slug . '/' . $product->thumbnail ?>')">
                                <div
                                    class="w-[83px] lg:w-[150px] h-[46px] lg:h-[80px] bg-gray-200 rounded-[10px] flex justify-center items-center overflow-hidden shadow lg:shadow-md cursor-pointer transition-transform hover:scale-102 duration-100">
                                    <img loading="lazy"
                                        src="<?= '/images/products/' . $product->slug . '/' . $product->thumbnail ?>"
                                        alt="<?= $product->title ?>" class="w-full object-cover"
                                        data-index="<?= $imageIndex++ ?>">
                                </div>
                            </button>
                            <?php foreach ($variants as $variant): ?>
                                <button
                                    onclick="changeImage('<?= $product->title ?>','<?= '/images/products/' . $product->slug . '/' . $variant['image'] ?>')">
                                    <div
                                        class="w-[83px] lg:w-[150px] h-[46px] lg:h-[80px] bg-gray-200 rounded-[10px] flex justify-center items-center overflow-hidden shadow lg:shadow-md cursor-pointer transition-transform hover:scale-102 duration-100">
                                        <img loading="lazy"
                                            src="<?= '/images/products/' . $product->slug . '/' . $variant['image'] ?>"
                                            alt="<?= $variant['title'] ?>" class="w-full object-cover">
                                    </div>
                                </button data-index="<?= $imageIndex++ ?>">
                            <?php endforeach; ?>


                        </div>
                    </div>
                    <style>
                        div::-webkit-scrollbar {
                            height: 0px;
                        }
                    </style>

                    <!-- Tombol Kanan -->
                    <button id="scrollRightBtn" onclick="scrollKanan()"
                        class="absolute hidden right-0 top-1/2 -translate-y-1/2 z-10 bg-white shadow items-center justify-center h-[30px] w-[37px] rounded-[5px]">
                        →
                    </button>
                </div>
            </div>
            <div class="w-full h-full flex items-center flex-col">
                <div class="w-full p-[20px] md:p-0">
                    <h1 class="ubuntu-bold text-[28px] text-[#242424] leading-[30px] mb-[20px]"><?= $product->title ?>
                    </h1>
                    <div class="flex space-x-[10px] mb-[63px]">
                        <?php foreach ($variants as $variant): ?>
                            <button
                                onclick="changeImage('<?= $product->title ?>', '<?= '/images/products/' . $product->slug . '/' . $variant['image'] ?>')">
                                <div class="rounded-full h-[30px] w-[30px] cursor-pointer transition-transform hover:scale-102 duration-100"
                                    style="box-shadow: 1px 2px 4px 2px rgba(94, 94, 94, 0.15);background-color:<?= $variant['color'] ?>;">
                                </div>
                            </button>
                        <?php endforeach; ?>
                    </div>
                    <div>
                        <p class="roboto-bold text-[16px] text-[#242424] mb-[20px]">Spesifikasi</p>
                        <div class="flex mb-[30px]">
                            <div class="flex flex-col roboto-regular text-[16px] text-[#242424] ">
                                <div class="py-[4px] border-b-1 border-b-[#CCCCCC]">
                                    <p>Berat</p>
                                </div>
                                <div class="py-[4px] border-b-1 border-b-[#CCCCCC]">
                                    <p>Dimensi</p>
                                </div>
                            </div>
                            <div class="flex flex-col roboto-bold text-[16px] text-[#242424]">
                                <div class="py-[4px] border-b-1 border-b-[#CCCCCC] pl-[50px] pr-[40px]">
                                    <p>5KG</p>
                                </div>
                                <div class="py-[4px] border-b-1 border-b-[#CCCCCC] pl-[50px] pr-[40px]">
                                    <p>50x50cm</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- mobile button -->
                    <div class="w-full mb-[40px] md:hidden">
                        <?= view('components/whatsapp_button', ['title' => 'Cek Harga', 'buttonClass' => ' w-full cursor-pointer bg-blue-600 lg:hover:bg-blue-700 px-[32px] md:px-[38px] transition-colors basic-contact-us-button py-[10px] rounded-[15px] wa-button', 'button_url' => 'https://api.whatsapp.com/send?phone=6282160050005&text=Halo%20saya%20butuh%20info%20harga%20' . rawurlencode($product->title)]) ?>
                    </div>
                    <!-- md button  -->
                    <div class="w-full mb-[40px] hidden md:block">
                        <?= view('components/whatsapp_button', ['title' => 'Cek Harga', 'buttonClass' => ' cursor-pointer bg-blue-600 lg:hover:bg-blue-700 px-[32px] md:px-[38px] transition-colors basic-contact-us-button py-[10px] rounded-[15px] wa-button', 'button_url' => 'https://api.whatsapp.com/send?phone=6282160050005&text=Halo%20saya%20butuh%20info%20harga%20' . rawurlencode($product->title)]) ?>
                    </div>
                </div>
                <div class=" w-full p-[20px] md:py-[20px] md:px-0 md:hidden lg:block">
                    <p class="roboto-bold text-[16px] text-[#242424] mb-[20px]">Deskripsi</p>
                    <div class="open-sans-regular text-[14px] text-[#242424] tracking-wide w-full block">
                        <?= str_replace('&nbsp;', ' ', $product->description)  ?></div>
                </div>
            </div>

            <div class="w-full p-[20px] md:py-[60px] md:px-0 hidden md:col-span-2 md:block lg:hidden">
                <p class="roboto-bold text-[16px] text-[#242424] mb-[20px]">Deskripsi</p>
                <div class="open-sans-regular text-[14px] text-[#242424] tracking-wide">
                    <?= str_replace('&nbsp;', ' ', $product->description)  ?>
                </div>
            </div>
        </div>
</section>

<section id="another-product-section" class="w-full flex flex-col items-center justify-start px-5 md:px-15">
    <?= view('components/texts/title/title_group', ['id' => 'another-title-default', 'class' => 'block mb-[60px] text-center', 'top_title' => 'Temukan', 'bottom_title' => 'Produk Lainnya']) ?>

    <div class="grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-5 gap-[20px] w-full 2xl:w-[80vw] max-w-[1400px] xl:px-0">
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
    const imageContainer = document.getElementById('image-container');
    const scrollThumbnails = document.querySelectorAll('#scrollContainer img');
    const imageList = Array.from(scrollThumbnails).map(img => img.src);
    let currentIndex = 0;

    function changeImage(variantTitle, variantImage) {
        imageContainer.src = variantImage;
        let baseUrl = `${window.location.protocol}//${window.location.host}`;
        currentIndex = imageList.indexOf(baseUrl + variantImage);
    }


    document.getElementById('previous-image-button').addEventListener('click', function() {
        if (currentIndex != 0) {
            currentIndex -= 1;
            imageContainer.src = imageList[currentIndex];
        }
    });
    document.getElementById('next-image-button').addEventListener('click', function() {
        if (currentIndex != imageList.length - 1) {
            currentIndex += 1;
            imageContainer.src = imageList[currentIndex];
        }
    });
</script>

<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script>

</script>
<script>
    const container = document.getElementById('scrollContainer');
    const btnLeft = document.getElementById('scrollLeftBtn');
    const btnRight = document.getElementById('scrollRightBtn');

    function updateButtons() {
        const maxScroll = container.scrollWidth - container.clientWidth;
        btnLeft.classList.toggle('hidden', container.scrollLeft <= 0);
        btnRight.classList.toggle('hidden', container.scrollLeft >= maxScroll);
    }

    function scrollKiri() {
        container.scrollBy({
            left: -100,
            behavior: 'smooth'
        });
    }

    function scrollKanan() {
        container.scrollBy({
            left: 100,
            behavior: 'smooth'
        });
    }

    // Update tombol saat scroll atau saat pertama kali halaman dimuat
    container.addEventListener('scroll', updateButtons);
    window.addEventListener('load', updateButtons);
</script>


<?= $this->endSection() ?>
<?= $this->section('script') ?>
<script type="application/ld+json">
    <?= json_encode([
        "@context" => "https://schema.org/",
        "@type" => "Product",
        "name" => $meta_product['name'],
        "image" => [$meta_product['image']],
        "description" => $meta_product['description'],
        "sku" => $meta_product['sku'],
        "brand" => [
            "@type" => "Brand",
            "name" => $meta_product['brand']
        ],
        "manufacturer" => [
            "@type" => "Organization",
            "name" => $meta_product['manufacturer']
        ],
        "offers" => [
            "@type" => "Offer",
            "url" => $meta_product['url'],
            "availability" => $meta_product['in_stock']
                ? "https://schema.org/InStock"
                : "https://schema.org/OutOfStock",
            "itemCondition" => "https://schema.org/NewCondition"
        ]
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) ?>
</script>


<?= $this->endSection() ?>
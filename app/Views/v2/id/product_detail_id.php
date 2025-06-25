<?= $this->extend('v2/template/template_v2') ?>


<?= $this->section('header') ?>
<html lang="id">
<?= $this->endsection() ?>

<?= $this->section('content') ?>
<section id="hero-section" class="relative flex flex-col items-center justify-start min-h-screen w-full  z-20">
    <div class="h-[60px] w-full"></div>
    <div class="w-full h-full 2xl:w-[80vw] sm:max-w-[500px] md:max-w-[1400px] md:px-10 2xl:px-0">
        <div class="h-[60px] w-full bg-orange-200 hidden md:block"></div>
        <div class="grid grid-cols-1 md:grid-cols-2 md:gap-x-[40px]">
            <div class="w-full h-full">
                <img id="image-container" src="<?= '/images/products/' . $product->slug . '/' . $product->thumbnail ?>"
                    alt="<?= $product->title ?>" class="w-full md:mb-[20px] lg:mb-[40px]">
                <div class="relative w-full">
                    <!-- Tombol Kiri -->
                    <button id="scrollLeftBtn" onclick="scrollKiri()"
                        class="absolute left-0 top-1/2 -translate-y-1/2  bg-white flex items-center shadow justify-center h-[30px] w-[37px] rounded-[5px] z-10">
                        ←
                    </button>

                    <!-- Container Scroll -->
                    <div id="scrollContainer" class="w-full overflow-x-auto scroll-smooth scrollbar-hide"
                        style="scrollbar-width: none; -ms-overflow-style: none;">
                        <div class="inline-flex gap-x-[5px] lg:gap-x-[10px] pb-[10px]">
                            <button
                                onclick="changeImage('<?= $product->title ?>','<?= '/images/products/' . $product->slug . '/' . $product->thumbnail ?>')">
                                <div
                                    class="w-[83px] lg:w-[150px] h-[46px] lg:h-[80px] bg-gray-200 rounded-[10px] flex justify-center items-center overflow-hidden shadow lg:shadow-md">
                                    <img src="<?= '/images/products/' . $product->slug . '/' . $product->thumbnail ?>"
                                        alt="<?= $product->title ?>" class="w-full object-cover">
                                </div>
                            </button>
                            <?php foreach ($variants as $variant): ?>
                            <button
                                onclick="changeImage('<?= $product->title ?>','<?= '/images/products/' . $product->slug . '/' . $variant['image'] ?>')">
                                <div
                                    class="w-[83px] lg:w-[150px] h-[46px] lg:h-[80px] bg-gray-200 rounded-[10px] flex justify-center items-center overflow-hidden shadow lg:shadow-md ">
                                    <img src="<?= '/images/products/' . $product->slug . '/' . $variant['image'] ?>"
                                        alt="<?= $variant['title'] ?>" class="w-full object-cover">
                                </div>
                            </button>
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
            <div class="w-full h-full flex items-center lg:flex-col">
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
                        <div class="flex mb-[60px]">
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
                    <div class="w-full mb-[40px]">
                        <?= view('components/whatsapp_button', ['title' => 'Cek Harga', 'buttonClass' => 'md:hidden w-full cursor-pointer bg-blue-600 lg:hover:bg-blue-700 px-[32px] md:px-[38px] transition-colors basic-contact-us-button py-[10px] rounded-[15px] wa-button']) ?>
                    </div>
                    <!-- md button  -->
                    <div class="w-full mb-[40px]">
                        <?= view('components/whatsapp_button', ['title' => 'Cek Harga', 'buttonClass' => 'hidden md:block cursor-pointer bg-blue-600 lg:hover:bg-blue-700 px-[32px] md:px-[38px] transition-colors basic-contact-us-button py-[10px] rounded-[15px] wa-button']) ?>
                    </div>
                </div>
                <div class=" w-full p-[20px] md:py-[20px] md:px-0 md:hidden lg:block">
                    <p class="roboto-bold text-[16px] text-[#242424] mb-[20px]">Deskripsi</p>
                    <div class="open-sans-regular text-[14px] text-[#242424] tracking-wide w-full max-w-[50vw]">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi dolore accusantium quidem, amet
                        ab placeat culpa aliquam dolorem soluta repellendus molestiae magni, iure animi modi sed tempore
                        vel sapiente consequuntur!</div>
                </div>
            </div>
        </div>
        <div class="w-full p-[20px] md:py-[20px] md:px-0 hidden md:block lg:hidden">
            <p class="roboto-bold text-[16px] text-[#242424] mb-[20px]">Deskripsi</p>
            <p class="open-sans-regular text-[14px] text-[#242424] tracking-wide">Lorem ipsum dolor sit, amet
                consectetur adipisicing elit. Praesentium voluptatibus dignissimos possimus ad reprehenderit ipsam omnis
                ipsa voluptatum, delectus iure deserunt quas nostrum eum consequatur perferendis quibusdam officiis sint
                distinctio.
            </p>
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

function changeImage(variantTitle, variantImage) {
    const imageContainer = document.getElementById('image-container');
    imageContainer.src = variantImage;
}
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
<?= $this->extend('v3/layouts/main') ?>

<?= $this->section('custom-head') ?>
<link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<style>
    .swiper-slide {
        height: 220px;
        border-radius: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 18px;
        transition: all .3s ease;
        background: #d1d5db;
    }

    /* aktif (kiri) */
    .swiper-slide-active {
        background: #2563eb;
        color: #fff;
    }

    /* tengah */
    .swiper-slide-next {
        background: #ffffff;
        color: #111;
    }

    /* kanan (non aktif gelap) */
    .swiper-slide-next+.swiper-slide {
        background: #e5e7eb;
    }
</style>
<section class="relative min-h-screen flex items-center justify-center text-center text-white">
    <img
        src="/images/hero.png"
        alt=""
        class="absolute inset-0 w-full h-full object-cover" />
    <div class="absolute inset-0 bg-black/50"></div>

    <div class="relative z-10 max-w-3xl px-4">
        <h1 class="text-3xl md:text-5xl font-bold leading-tight">
            Solusi Pengadaan Terpercaya<br />
            untuk Beragam Kebutuhan Anda
        </h1>
        <p class="mt-4 text-sm md:text-base text-white/80">
            Dari alat olahraga hingga infrastruktur. Kami siap memenuhi kebutuhan
            instansi dan bisnis Anda.
        </p>
    </div>
</section>

<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 grid md:grid-cols-2 gap-10 items-center">
        <img src="/images/logo-big.png" alt="" class="mx-auto w-48" />

        <div>
            <h2 class="text-2xl font-semibold mb-4">
                Menghadirkan nilai, bukan sekedar barang
            </h2>
            <p class="text-gray-600 mb-6">
                Kami tidak hanya menyediakan produk, tetapi solusi bernilai tinggi
                dengan layanan terpercaya dan berkelanjutan.
            </p>
            <a
                href="#"
                class="inline-flex items-center gap-2 px-5 py-2 rounded-full border text-sm hover:bg-gray-100">
                Hubungi Kami →
            </a>
        </div>
    </div>
</section>

<section class="relative py-20 text-white">
    <img
        src="/images/about.png"
        class="absolute inset-0 w-full h-full object-cover"
        alt="" />
    <div class="absolute inset-0 bg-black/60"></div>

    <div class="relative max-w-7xl mx-auto px-4">
        <h2 class="text-2xl font-semibold mb-4">Tentang Kami</h2>
        <p class="text-white/80 mb-6">
            PT Karya Pilar Nusantara adalah perusahaan terpercaya dalam pengadaan
            berbagai kebutuhan instansi dan bisnis.
        </p>
        <a
            href="#"
            class="inline-block px-6 py-2 border rounded-full text-sm hover:bg-white hover:text-black transition duration-300">
            Selengkapnya
        </a>
    </div>
</section>
<section class="py-20 bg-gray-100">
    <div class="max-w-7xl mx-auto px-4 xl:px-0 bg-orange-100">
        <span class="font-heading text-[12px]">Tentang Pengadaan Barang</span>
        <div class="grid grid-cols-1 lg:grid-cols-3 mb-11">
            <div class="col-span-1 bg-red-100">
                <h2 class="text-2xl font-semibold flex-1">
                    Apa Itu Pengadaan Barang?
                </h2>
            </div>
            <div class="col-span-2 bg-green-100">
                <p class="flex-2"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti accusantium dolore, porro incidunt, id ipsa culpa fuga modi exercitationem repellat voluptate doloribus. Natus voluptates asperiores architecto modi quod provident culpa?</p>
            </div>
        </div>
        <span class="font-heading text-[12px]">Tujuan Pengadaan Barang</span>
        <div class="grid md:grid-cols-2 gap-14 text-sm text-gray-600">
            <div class="bg-blue-100">
                <h3 class="font-semibold text-gray-800 mb-2">
                    Memastikan barang tepat kualitas
                </h3>
                <p>Proses seleksi produk sesuai spesifikasi dan kebutuhan.</p>
            </div>

            <div class="bg-purple-100">
                <h3 class="font-semibold text-gray-800 mb-2">Efisiensi biaya</h3>
                <p>Pengadaan yang terencana dan transparan.</p>
            </div>
        </div>
    </div>
</section>
<section class="mb-20 bg-gray-300">
    <div class="max-w-7xl mx-auto px-4 xl:px-0 bg-orange-100">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-x-14 gap-y-12">
            <div class="bg-blue-200">
                <div class="mb-3">
                    <span class="font-heading text-xs font-medium text-[#0B2F9F]">B2G Project Partner</span>
                </div>
                <div class="mb-5 h-[72px] bg-slate-400">
                    <div class="flex justify-between">
                        <div class="bg-red-200 aspect-square">
                            <img src="/images/partners/jambore.png" width="72" height="72" class="rounded-lg" alt="Project partner KPN dengan Jambore">
                        </div>
                        <div class="bg-red-200 aspect-square">
                            <img src="/images/partners/pajak.png" width="72" height="72" class="rounded-lg" alt="Project partner KPN dengan DJI Pajak">
                        </div>
                        <div class="bg-red-200 aspect-square">
                            <img src="/images/partners/peduli_lindungi.png" width="72" class="rounded-lg" height="72" alt="Project partner KPN dengan Peduli Lindungi">
                        </div>
                        <div class="bg-red-200 aspect-square">
                            <img src="/images/partners/dinas_pendidikan.png" width="72" class="rounded-lg" height="72" alt="Project partner KPN Dinas Pendidikan">
                        </div>
                    </div>
                </div>
                <div>
                    <p class="font-sans font-normal text-xl">Dipercaya oleh pemerintahan republik Indonesia</p>
                </div>
            </div>
            <div class="bg-purple-200">
                <div class="mb-3">
                    <span class="font-heading text-xs font-medium text-[#0B2F9F]">Pesanan Terpenuhi</span>
                </div>
                <div class="w-full h-[72px] mb-5 bg-slate-400">
                    <span class="font-heading font-medium text-7xl">1.500.000+</span>
                </div>
                <div>
                    <p class="font-sans font-normal text-xl">Jumlah pesanan yang telah terpenuhi</p>
                </div>
            </div>
            <div class="bg-orange-200">
                <div class="mb-3">
                    <span class="font-heading text-xs font-medium text-[#0B2F9F]">Produk</span>
                </div>
                <div class="w-full h-[72px] mb-5 bg-slate-400">
                    <span class="font-heading font-medium text-7xl">200+</span>
                </div>
                <div>
                    <p class="font-sans font-normal text-xl">Jenis produk dari berbagai kategori</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-20 bg-gray-100">
    <div class="max-w-7xl mx-auto px-4 xl:px-0 bg-orange-100">
        <span class="font-heading text-[12px]">Tentang Pengadaan Barang</span>
        <div class="grid grid-cols-1 lg:grid-cols-3 mb-11">
            <div class="col-span-1 bg-red-100">
                <h2 class="text-2xl font-semibold flex-1">
                    Apa Itu Pengadaan Barang?
                </h2>
            </div>
            <div class="col-span-2 bg-green-100">
                <p class="flex-2"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti accusantium dolore, porro incidunt, id ipsa culpa fuga modi exercitationem repellat voluptate doloribus. Natus voluptates asperiores architecto modi quod provident culpa?</p>
            </div>
        </div>
    </div>
    <div class="bg-slate-400 w-full">
        <div class="relative">
            <div class="flex">
                <div class="w-full">
                    <img src="/images/worker.webp" alt="">
                </div>
                <div class="w-full h-20"></div>
            </div>
            <div class="absolute z-30 w-full left-0 top-0 h-full">
                <div class="h-full flex items-center">
                    <div class="w-full h-full">
                        <div class="flex h-full relative items-center">
                            <div class="w-[40%]"></div>
                            <div class="bg-green-400 w-[60%]">
                                <!-- Slider main container -->
                                <div class="block w-full h-full">
                                    <!-- Slider main container -->
                                    <div class="swiper mySwiper">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">Slide 1</div>
                                            <div class="swiper-slide">Slide 2</div>
                                            <div class="swiper-slide">Slide 3</div>
                                            <div class="swiper-slide">Slide 4</div>
                                            <div class="swiper-slide">Slide 5</div>
                                        </div>

                                    </div>
                                    <div class="slider-nav flex justify-center gap-3">
                                        <button id="btnPrev" class="bg-white w-12 h-12">
                                            <img src="icon-prev.svg" alt="prev">
                                        </button>

                                        <button id="btnNext" class="bg-white w-12 h-12">
                                            <?= view('v3/icons/long_arrow_right') ?>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>


<?= $this->section('custom-scripts') ?>
<script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
<script>
    const swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween: 20,
        loop: true,
    });

    document.getElementById("btnNext").addEventListener("click", () => {
        swiper.slideNext(500);
    });

    document.getElementById("btnPrev").addEventListener("click", () => {
        swiper.slidePrev(500);
    });
</script>
<?= $this->endSection() ?>
<?= $this->extend('v3/layouts/main') ?>

<?= $this->section('custom-head') ?>
<link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<style>
    .swiper-slide {
        min-height: 220px;
        border-radius: 6px;
        transition: all .3s ease;
        background: #ffffff;
        transform: scale(.92);
    }

    /* ACTIVE (TENGAH) */
    .swiper-slide-active {
        background: #0B2F9F;
        color: white;
        transform: scale(1);
        opacity: 1;
    }

    /* ACTIVE (TENGAH) */
    .swiper-slide-active .icon {
        fill: #ffffff;
    }

    /* kiri kanan */
    .swiper-slide-prev,
    .swiper-slide-next {
        background: #ffffff;
    }

    .mySwiper {
        padding-left: 16px;
        padding-right: 16px;
    }

    .arrow-svg {
        width: 100%;
        max-width: 320px;
        height: 40px;
    }

    .arrow-line {
        stroke: #000;
        stroke-width: 3;
        stroke-linecap: round;

        /* trik utama */
        stroke-dasharray: 280;
        stroke-dashoffset: 280;

        animation: drawArrow 5s ease-in-out infinite;
    }

    @keyframes drawArrow {

        /* diam di awal */
        0% {
            stroke-dashoffset: 280;
            opacity: 1;
        }

        /* panah mulai memanjang */
        20% {
            stroke-dashoffset: 280;
        }

        /* selesai memanjang */
        60% {
            stroke-dashoffset: 0;
        }

        /* diam sebentar sebelum loop */
        100% {
            stroke-dashoffset: 0;
        }
    }

    .draw-line {
        stroke-dasharray: 100;
        stroke-dashoffset: 100;
        animation: drawArc 5s infinite;
    }

    @keyframes drawArc {

        /* diam awal */
        0% {
            stroke-dashoffset: 100;
        }

        20% {
            stroke-dashoffset: 100;
        }

        /* gambar */
        60% {
            stroke-dashoffset: 0;
        }

        /* diam akhir */
        100% {
            stroke-dashoffset: 0;
        }
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

<section class="py-16 px-6 md:px-8">
    <div class="max-w-7xl mx-auto grid md:grid-cols-2 lg:grid-cols-5 gap-10 items-center lg:min-h-96">
        <img src="/images/logo-big.png" alt="Logo Karya Pilar Nusantara" class="mx-auto w-[80%] sm:max-w-[75%] lg:col-span-2" />
        <div class="lg:col-span-3">
            <div class="mb-1">
                <span class="font-heading text-[12px] font-semibold text-[#0B2F9F]">SOLUSI UNTUK ANDA</span>
            </div>
            <h2 class="text-3xl font-semibold mb-9 font-heading">
                Menghadirkan nilai, bukan sekedar barang
            </h2>
            <p class="text-gray-600 mb-10 font-sans text-bases">
                Kami tidak hanya menyediakan produk, tapi solusi bernilai bagi instansi dan bisnis. Dengan layanan terpercaya, kami mendukung efisiensi, kualitas, dan keberlanjutan dalam setiap pengadaan untuk kemajuan operasional, layanan publik, dan pembangunan jangka panjang.
            </p>
            <a href="#" class="inline-flex items-center rounded-full border border-[#7F7F7F] hover:bg-[#0B2F9F] hover:border-[#0B2F9F] transform w-44 hover:w-[185px] duration-300">
                <div class="group items-center gap-2 px-5 py-2 text-sm font-medium hover:text-white hover:fill-slate-100 flex justify-around w-full">
                    <span>
                        Hubungi Kami
                    </span>
                    <?= view('v3/icons/long_arrow_right', ['pathClass' => "fill-black group-hover:fill-white"]) ?>
                </div>
            </a>
        </div>
    </div>
</section>

<section class="text-white min-h-[60vh] sm:min-h-0 md:min-h-[50vh] xl:min-h-[80vh] flex">
    <div class="relative flex-1">
        <img
            src="/images/about.png"
            class="absolute inset-0 w-full h-full object-cover"
            alt="" />
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="py-20 px-6 md:px-8 h-full flex items-center justify-center">
            <div class="relative max-w-7xl h-full w-full flex items-center">
                <div class="flex-1">
                    <div class="mb-3">
                        <span class="font-heading text-[12px] font-semibold text-white">SEKILAS KARYA PILAR NUSANTARA</span>
                    </div>

                    <h2 class="text-3xl font-semibold mb-9 font-heading">Tentang Kami</h2>
                    <p class="mb-10 font-sans text-bases md:max-w-[80%] lg:max-w-[50%]">
                        PT Karya Pilar Nusantara adalah perusahaan terpercaya dalam pengadaan
                        berbagai kebutuhan instansi dan bisnis.
                    </p>
                    <a href="#" class="inline-flex items-center rounded-full border border-[#7F7F7F] hover:bg-white hover:border-white transform w-44 hover:w-[185px] duration-300">
                        <div class="group items-center gap-2 px-5 py-2 text-sm font-medium text-white hover:text-black hover:fill-white flex justify-around w-full">
                            <span>
                                Hubungi Kami
                            </span>
                            <?= view('v3/icons/long_arrow_right', ['pathClass' => "fill-white group-hover:fill-black"]) ?>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-20 bg-gray-100 px-6 md:px-8">
    <div class="max-w-7xl mx-auto">
        <div class="mb-2">
            <span class="font-heading text-[12px] font-semibold text-[#0B2F9F]">TENTANG PENGADAAN BARANG</span>
        </div>
        <div class="flex mb-11 gap-x-10 flex-col lg:flex-row">
            <div class="lg:w-2/5 mb-9">
                <h2 class="text-3xl font-semibold font-heading">
                    Apa itu pengadaan barang?
                </h2>
            </div>

            <div class="lg:w-3/5 mb-10">
                <p class="text-gray-600 font-sans text-base">
                    Pengadaan barang adalah serangkaian kegiatan mulai dari perencanaan kebutuhan, pemilihan pemasok, pembelian, penerimaan, hingga pengelolaan barang agar sesuai spesifikasi, waktu, dan anggaran.
                </p>
            </div>
        </div>
        <div class="mb-6">
            <span class="font-heading text-[16px] font-bold mb-8">Tujuan Pengadaan Barang</span>
        </div>
        <div class="grid md:grid-cols-2 gap-y-8 gap-x-14 text-sm text-gray-600">
            <div>
                <h3 class="font-semibold font-heading text-[#0B2F9F] mb-2 text-base">
                    Memastikan Ketersediaan Barang
                </h3>
                <p class="font-sans text-base">Pengadaan bertujuan menjamin barang tersedia tepat waktu agar operasional tidak terganggu.</p>
            </div>

            <div>
                <h3 class="font-semibold font-heading text-[#0B2F9F] mb-2 text-base">
                    Memastikan barang tepat kualitas
                </h3>
                <p class="font-sans text-base">Tujuan pengadaan adalah memperoleh produk dengan spesifikasi teknis yang aman, tahan lama, dan sesuai standar industri.</p>
            </div>

            <div>
                <h3 class="font-semibold font-heading text-[#0B2F9F] mb-2 text-base">
                    Mengoptimalkan Biaya dan Efisiensi Distribusi
                </h3>
                <p class="font-sans text-base">Pengadaan bertujuan mendapatkan produk dengan harga kompetitif tanpa mengorbankan kualitas, serta memastikan efisiensi logistik dan penyimpanan.</p>
            </div>

            <div>
                <h3 class="font-semibold font-heading text-[#0B2F9F] mb-2 text-base">
                    Mendukung Kebutuhan Partner Secara Berkelanjutan
                </h3>
                <p class="font-sans text-base">Pengadaan bertujuan menyediakan solusi produk yang mendukung aktivitas olahraga, rekreasi, konstruksi, dan maritim secara berkelanjutan.</p>
            </div>
        </div>
    </div>
</section>
<section class="py-20 px-6 md:px-8">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-14 gap-y-12">
            <div>
                <div class="mb-3">
                    <span class="font-heading text-xs font-semibold text-[#0B2F9F]">KLIEN B2G</span>
                </div>
                <div class="mb-2 h-[74px] flex items-center">
                    <div class="flex gap-4">
                        <div class="aspect-square">
                            <img src="/images/partners/jambore.png" width="72" height="72" class="rounded-lg" alt="Project partner KPN dengan Jambore">
                        </div>
                        <div class="aspect-square">
                            <img src="/images/partners/pajak.png" width="72" height="72" class="rounded-lg" alt="Project partner KPN dengan DJI Pajak">
                        </div>
                        <div class="aspect-square">
                            <img src="/images/partners/peduli_lindungi.png" width="72" class="rounded-lg" height="72" alt="Project partner KPN dengan Peduli Lindungi">
                        </div>
                        <div class="aspect-square">
                            <img src="/images/partners/dinas_pendidikan.png" width="72" class="rounded-lg" height="72" alt="Project partner KPN Dinas Pendidikan">
                        </div>
                    </div>
                </div>
                <div class="mb-4">
                    <span class="font-heading text-3xl tracking-tight">Goverment</span>
                </div>
                <div>
                    <p class="font-sans font-normal text-base">Dipercaya oleh pemerintahan republik Indonesia</p>
                </div>
            </div>
            <div class="flex lg:justify-center">
                <div>
                    <div class="mb-[10px]">
                        <span class="font-heading text-xs font-semibold text-[#0B2F9F]">PESANAN TERPENUHI</span>
                    </div>
                    <div class="mb-2 h-[74px] flex items-center">
                        <span class="font-heading font-medium text-7xl">1.500k+</span>
                    </div>
                    <div class="mb-4">
                        <span class="font-heading text-3xl tracking-tight">Produk</span>
                    </div>
                    <div>
                        <p class="font-sans font-normal text-base">Jumlah pesanan yang telah terpenuhi</p>
                    </div>
                </div>
            </div>
            <div class="flex xl:justify-center">
                <div>
                    <div class="mb-[10px]">
                        <span class="font-heading text-xs font-semibold text-[#0B2F9F]">PRODUK</span>
                    </div>
                    <div class="w-full mb-2 h-[74px] flex items-center">
                        <span class="font-heading font-medium text-7xl">200+</span>
                    </div>
                    <div class="mb-4">
                        <span class="font-heading text-3xl tracking-tight">Produk</span>
                    </div>
                    <div>
                        <p class="font-sans font-normal text-base">Jenis produk dari berbagai kategori</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-20 bg-gray-100 mb-16 md:mb-0">
    <div class="max-w-7xl mx-auto px-6 md:px-8 xl:px-0">
        <div class="mb-1">
            <span class="font-heading text-[12px] font-semibold text-[#0B2F9F]">LAYANAN</span>
        </div>
        <div class="flex mb-11 gap-x-10 flex-col lg:flex-row">
            <div class="lg:w-2/6 mb-9">
                <h2 class="text-3xl font-semibold font-heading">
                    Layanan Kami
                </h2>
            </div>

            <div class="lg:w-4/6 mb-10">
                <p class="text-gray-600 font-sans text-base">
                    Kami menyediakan layanan pengadaan, distribusi, dan konsultasi produk untuk kebutuhan olahraga, outdoor, mainan anak, serta infrastruktur maritim, dengan standar kualitas tinggi dan dukungan teknis yang andal.
                </p>
            </div>
        </div>
    </div>
    <div class="w-full">
        <div class="relative">
            <div class="flex">
                <div class="w-full h-80">
                    <img class="h-80 md:h-[40vh] xl:h-[65vh] overflow-hidden object-cover" src="/images/worker.webp" alt="">
                </div>
                <div class="w-full h-20 hidden md:block"></div>
            </div>
            <div class="absolute z-30 w-full left-0 top-[260px] md:top-[150px] h-full">
                <div class="h-full flex items-center">
                    <div class="w-full h-full">
                        <div class="flex h-full relative items-center">
                            <div class="w-[40%] md:w-[25%] lg:w-[35%] hidden md:block"></div>
                            <div class="w-full md:w-[75%] lg:w-[65%] overflow-hidden">
                                <!-- Slider main container -->
                                <div class="block w-full h-full">
                                    <!-- Slider main container -->
                                    <div class="swiper mySwiper mb-16">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide p-10">
                                                <div>
                                                    <div class="mb-6">
                                                        <h3 class="font-heading font-bold text-2xl">Pengadaan Olahraga</h3>
                                                    </div>
                                                    <div class="w-10 h-1 rounded-[20px] bg-white mb-6"></div>
                                                    <div class="mb-11">
                                                        <p class="text-base font-sans">Solusi pengadaan alat olahraga lengkap seperti matras yoga, cone latihan, skipping rope, dan gym ball untuk sekolah dan instansi.</p>
                                                    </div>
                                                    <div class="flex justify-end">
                                                        <div class="w-4 h-4">
                                                            <?= view('v3/icons/right_up_arrow', ['pathClass' => "fill-black icon"]) ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide p-10">
                                                <div>
                                                    <div class="mb-6">
                                                        <h3 class="font-heading font-bold text-2xl">Pengadaan Olahraga</h3>
                                                    </div>
                                                    <div class="w-10 h-1 rounded-[20px] bg-white mb-6"></div>
                                                    <div class="mb-11">
                                                        <p class="text-base font-sans">Solusi pengadaan alat olahraga lengkap seperti matras yoga, cone latihan, skipping rope, dan gym ball untuk sekolah dan instansi.</p>
                                                    </div>
                                                    <div class="flex justify-end">
                                                        <div class="w-4 h-4">
                                                            <?= view('v3/icons/right_up_arrow', ['pathClass' => "fill-black icon"]) ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide p-10">
                                                <div>
                                                    <div class="mb-6">
                                                        <h3 class="font-heading font-bold text-2xl">Pengadaan Olahraga</h3>
                                                    </div>
                                                    <div class="w-10 h-1 rounded-[20px] bg-white mb-6"></div>
                                                    <div class="mb-11">
                                                        <p class="text-base font-sans">Solusi pengadaan alat olahraga lengkap seperti matras yoga, cone latihan, skipping rope, dan gym ball untuk sekolah dan instansi.</p>
                                                    </div>
                                                    <div class="flex justify-end">
                                                        <div class="w-4 h-4">
                                                            <?= view('v3/icons/right_up_arrow', ['pathClass' => "fill-black icon"]) ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide p-10">
                                                <div>
                                                    <div class="mb-6">
                                                        <h3 class="font-heading font-bold text-2xl">Pengadaan Olahraga</h3>
                                                    </div>
                                                    <div class="w-10 h-1 rounded-[20px] bg-white mb-6"></div>
                                                    <div class="mb-11">
                                                        <p class="text-base font-sans">Solusi pengadaan alat olahraga lengkap seperti matras yoga, cone latihan, skipping rope, dan gym ball untuk sekolah dan instansi.</p>
                                                    </div>
                                                    <div class="flex justify-end">
                                                        <div class="w-4 h-4">
                                                            <?= view('v3/icons/right_up_arrow', ['pathClass' => "fill-black icon"]) ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide p-10">
                                                <div>
                                                    <div class="mb-6">
                                                        <h3 class="font-heading font-bold text-2xl">Pengadaan Olahraga</h3>
                                                    </div>
                                                    <div class="w-10 h-1 rounded-[20px] bg-white mb-6"></div>
                                                    <div class="mb-11">
                                                        <p class="text-base font-sans">Solusi pengadaan alat olahraga lengkap seperti matras yoga, cone latihan, skipping rope, dan gym ball untuk sekolah dan instansi.</p>
                                                    </div>
                                                    <div class="flex justify-end">
                                                        <div class="w-4 h-4">
                                                            <?= view('v3/icons/right_up_arrow', ['pathClass' => "fill-black icon"]) ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="slider-nav flex justify-end gap-3 px-6">
                                        <button id="btnPrev" class="bg-white w-12 h-12 flex items-center justify-center rotate-180 group border-[2px] hover:bg-[#0B2F9F] rounded-lg transition-colors duration-300">
                                            <?= view('v3/icons/long_arrow_right', ['pathClass' => "fill-black group-hover:fill-white"]) ?>
                                        </button>

                                        <button id="btnNext" class="bg-white w-12 h-12 flex items-center justify-center group border-[2px] hover:bg-[#0B2F9F] rounded-lg transition-colors duration-300">
                                            <?= view('v3/icons/long_arrow_right', ['pathClass' => "fill-black group-hover:fill-white"]) ?>
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
    <div class="mb-52"></div>
</section>
<section class="py-20 px-6 md:px-8">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-14">
            <div>
                <div class="mb-1">
                    <span class="font-heading text-[12px] font-semibold text-[#0B2F9F]">ALUR PENGADAAN</span>
                </div>
                <h2 class="text-3xl font-semibold mb-9 font-heading">
                    Alur Kerja Pengadaan
                </h2>
                <p class="text-gray-600 mb-10 font-sans text-bases">
                    Kami tidak hanya menyediakan produk, tapi solusi bernilai bagi instansi dan bisnis. Dengan layanan terpercaya, kami mendukung efisiensi, kualitas, dan keberlanjutan dalam setiap pengadaan untuk kemajuan operasional, layanan publik, dan pembangunan jangka panjang.
                </p>
                <a href="#" class="inline-flex items-center rounded-full border border-[#7F7F7F] hover:bg-[#0B2F9F] hover:border-[#0B2F9F] transform w-44 hover:w-[185px] duration-300">
                    <div class="group items-center gap-2 px-5 py-2 text-sm font-medium hover:text-white hover:fill-slate-100 flex justify-around w-full">
                        <span>
                            Selengkapnya
                        </span>
                        <?= view('v3/icons/long_arrow_right', ['pathClass' => "fill-black group-hover:fill-white"]) ?>
                    </div>
                </a>
            </div>
            <div class="flex w-full items-center justify-center">
                <img src="/images/alur-pengadaan.png" alt="Alur pengadaan" class="w-full">
            </div>
        </div>
    </div>
</section>
<section class="py-20 bg-gray-100 px-6 md:px-8">
    <div class="max-w-7xl mx-auto">
        <div class="mb-1">
            <span class="font-heading text-[12px] font-semibold text-[#0B2F9F]">MENGAPA MEMILIH KAMI</span>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-3 mb-11">
            <div class="col-span-1 mb-9">
                <h2 class="text-3xl font-semibold font-heading">
                    Alasan Kami Lebih Unggul
                </h2>
            </div>

            <div class="col-span-2 mb-10 lg:pl-14">
                <p class="text-gray-600 font-sans text-base">
                    Kami menyediakan layanan pengadaan, distribusi, dan konsultasi produk untuk kebutuhan olahraga, outdoor, mainan anak, serta infrastruktur maritim, dengan standar kualitas tinggi dan dukungan teknis yang andal.
                </p>
            </div>
        </div>
    </div>
    <div class="max-w-7xl mx-auto">
        <div class="grid md:grid-cols-2 gap-14 text-sm text-gray-600">
            <div class=" flex gap-5">
                <div class="w-5 flex items-start justify-start">
                    <img src="/images/high-quality.png" alt="">
                </div>
                <div class="w-full">
                    <h3 class="font-semibold text-gray-800 mb-2">
                        Memastikan barang tepat kualitas
                    </h3>
                    <p>Proses seleksi produk sesuai spesifikasi dan kebutuhan.</p>
                </div>
            </div>
            <div class=" flex gap-5">
                <div class="w-5 flex items-start justify-start">
                    <img src="/images/high-quality.png" alt="">
                </div>
                <div class="w-full">
                    <h3 class="font-semibold text-gray-800 mb-2">
                        Memastikan barang tepat kualitas
                    </h3>
                    <p>Proses seleksi produk sesuai spesifikasi dan kebutuhan.</p>
                </div>
            </div>
            <div class=" flex gap-5">
                <div class="w-5 flex items-start justify-start">
                    <img src="/images/high-quality.png" alt="">
                </div>
                <div class="w-full">
                    <h3 class="font-semibold text-gray-800 mb-2">
                        Memastikan barang tepat kualitas
                    </h3>
                    <p>Proses seleksi produk sesuai spesifikasi dan kebutuhan.</p>
                </div>
            </div>
            <div class=" flex gap-5">
                <div class="w-5 flex items-start justify-start">
                    <img src="/images/high-quality.png" alt="">
                </div>
                <div class="w-full">
                    <h3 class="font-semibold text-gray-800 mb-2">
                        Memastikan barang tepat kualitas
                    </h3>
                    <p>Proses seleksi produk sesuai spesifikasi dan kebutuhan.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-20 px-6 md:px-8">
    <div class="max-w-7xl mx-auto">
        <div class="mb-1">
            <span class="font-heading text-[12px] font-semibold text-[#0B2F9F]">PRODUK UNGGULAN</span>
        </div>
        <div class="flex gap-x-10 flex-col">
            <div class="lg:w-2/5 mb-9">
                <h2 class="text-3xl font-semibold font-heading">
                    Produk Unggulan Kami
                </h2>
            </div>

            <div class="flex flex-col lg:flex-row lg:gap-14 mb-14">
                <div class="mb-10 lg:mb-0 lg:w-4/5">
                    <p class="text-gray-600 font-sans text-base">
                        Pengadaan barang adalah serangkaian kegiatan mulai dari perencanaan kebutuhan, pemilihan pemasok, pembelian, penerimaan, hingga pengelolaan barang agar sesuai spesifikasi, waktu, dan anggaran.
                    </p>
                </div>
                <div class="lg:w-1/5 lg:flex justify-end">
                    <div class="w-[185px]">
                        <a href="#" class="inline-flex items-center rounded-full border border-[#7F7F7F] hover:bg-[#0B2F9F] hover:border-[#0B2F9F] transform w-44 hover:w-[185px] duration-300">
                            <div class="group items-center gap-2 px-5 py-2 text-sm font-medium hover:text-white hover:fill-slate-100 flex justify-around w-full">
                                <span>
                                    Selengkapnya
                                </span>
                                <?= view('v3/icons/long_arrow_right', ['pathClass' => "fill-black group-hover:fill-white"]) ?>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-3 lg:grid-cols-6 gap-4">
            <div class="w-full h-full aspect-square bg-red-100">t</div>
            <div class="w-full h-full aspect-square bg-red-100">t</div>
            <div class="w-full h-full aspect-square bg-red-100">t</div>
            <div class="w-full h-full aspect-square bg-red-100">t</div>
            <div class="w-full h-full aspect-square bg-red-100">t</div>
            <div class="w-full h-full aspect-square bg-red-100">t</div>
        </div>
    </div>
</section>
<section class="text-white min-h-[60vh] sm:min-h-0 md:min-h-[50vh] xl:min-h-[80vh] flex">
    <div class="relative flex-1">
        <img
            src="/images/about.png"
            class="absolute inset-0 w-full h-full object-cover"
            alt="" />
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="py-20 px-6 md:px-8 h-full flex items-center justify-center">
            <div class="relative max-w-7xl h-full w-full flex items-center">
                <div class="flex-1">
                    <h2 class="text-3xl font-semibold mb-9 font-heading">Siap memenuhi kebutuhan pengadaan Anda</h2>
                    <p class="mb-10 font-sans text-bases md:max-w-[80%] lg:max-w-[50%]">
                        PT Karya Pilar Nusantara adalah perusahaan terpercaya dalam pengadaan
                        berbagai kebutuhan instansi dan bisnis.
                    </p>
                    <a href="#" class="inline-flex items-center rounded-full border border-[#7F7F7F] hover:bg-white hover:border-white transform w-44 hover:w-[185px] duration-300">
                        <div class="group items-center gap-2 px-5 py-2 text-sm font-medium text-white hover:text-black hover:fill-white flex justify-around w-full">
                            <span>
                                Hubungi Kami
                            </span>
                            <?= view('v3/icons/long_arrow_right', ['pathClass' => "fill-white group-hover:fill-black"]) ?>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>


<?= $this->section('custom-scripts') ?>
<script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
<script>
    // const swiper = new Swiper(".mySwiper", {
    //     slidesPerView: 1.2,
    //     slidesPerView: 3,
    //     spaceBetween: 16,
    //     loop: true,
    // });

    document.getElementById("btnNext").addEventListener("click", () => {
        swiper.slideNext(500);
    });

    document.getElementById("btnPrev").addEventListener("click", () => {
        swiper.slidePrev(500);
    });

    const swiper = new Swiper(".mySwiper", {
        loop: true,
        spaceBetween: 20,

        breakpoints: {
            0: {
                slidesPerView: 1.2,
                centeredSlides: true,
            },
            768: {
                slidesPerView: 2,
                centeredSlides: false,
            },
            1280: {
                slidesPerView: 3,
                centeredSlides: false,
            }
        }
    });
</script>
<?= $this->endSection() ?>
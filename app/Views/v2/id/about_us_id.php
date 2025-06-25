<?= $this->extend('v2/template/template_v2') ?>


<?= $this->section('header') ?>
<html lang="id">
<?= $this->endsection() ?>

<?= $this->section('content') ?>
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
        <h2 class="h-[34px] md:h-[40px] ubuntu-bold text-[28px] md:text-[32px] text-[#242424] title-shadow text-center">
            Hadir Sebagai
        </h2>
        <span
            class="h-[40px] ubuntu-bold text-[32px] md:text-[34px] text-[#2563EB] title-shadow text-center w-full flex items-center justify-center">Solusi
            Pengadaan</span>
    </div>
    <div
        class="w-full max-w-[1200px] grid grid-cols-1 md:grid-cols-2 gap-y-[60px] md:gap-x-[60px] lg:gap-x-[100px] md:px-15">
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
    <div class="w-full max-w-[1200px] flex flex-col items-center justify-center relative">
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
        <img src="/images/about_us_page/aboutus4.png" alt="Peta titik Indonesia" class="w-full h-auto" width="1200px"
            height="933px">
    </div>
</section>
<section id="achievement-section"
    class="w-full min-h-screen py-[110px] px-15 md:px-15 bg-[#202020] flex items-center justify-center">
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
                    Kami telah bermitra dengan organisasi dan instansi pemerintahan untuk mendukung berbagai
                    kegiatan serta kebutuhan pengadaan mereka secara profesional.
                </p>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-y-[60px] gap-x-[110px] mb-[150px]">
            <div class="hidden md:flex w-full h-full items-center">
                <p class=" open-sans-regular text-[16px] text-white tracking-[2%] text-center md:text-start">
                    Kami telah menangani lebih dari 40.000 permintaan pengadaan dari berbagai instansi dengan
                    pelayanan cepat, tepat, dan terpercaya.
                </p>
            </div>
            <div class="flex w-full h-full items-center justify-center">
                <div class="text-center" id="total-order" data-target="40000">
                    <div class="h-[50px] mb-[12px] text-white flex items-center justify-center"><span
                            class="value roboto-bold text-[50px] md:text-[70px]">40.000</span><span
                            class="plus roboto-bold text-[45px]">+</span></div>
                    <span class="text-[16px] tracking-[4%] open-sans-regular text-white/80">Permintaan
                        Terpenuhi</span>
                </div>
            </div>
            <div class="md:hidden flex w-full h-full items-center">
                <p class=" open-sans-regular text-[16px] text-white tracking-[2%] text-center md:text-start">
                    Kami telah menangani lebih dari 40.000 permintaan pengadaan dari berbagai instansi dengan
                    pelayanan cepat, tepat, dan terpercaya.
                </p>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-y-[60px] gap-x-[110px]">

            <div class="flex w-full h-full items-center justify-center">
                <div class="text-center" id="total-order" data-target="200">
                    <div class="h-[50px] mb-[12px] text-white flex items-center justify-center"><span
                            class="value roboto-bold text-[50px] md:text-[70px]">200</span><span
                            class="plus roboto-bold text-[45px]">+</span></div>
                    <span class="text-[16px] tracking-[4%] open-sans-regular text-white/80">Jenis Produk</span>
                </div>
            </div>
            <div class="flex w-full h-full items-center">
                <p class=" open-sans-regular text-[16px] text-white tracking-[2%] text-center md:text-start">
                    Menyediakan lebih dari 200 produk pilihan untuk memenuhi kebutuhan pengadaan instansi
                    pemerintah, swasta, dan organisasi nasional lainnya.
                </p>
            </div>
        </div>
    </div>
</section>
<section id="vision-mission-section"
    class="w-full flex flex-col items-center justify-center min-h-screen px-5 md:px-15 py-[166px]">
    <div class="mb-[80px] max-w-[1200px] md:mb-[150px] lg:mb-[180px]">
        <div id="vision-mission-section-title-mobile" class="block md:hidden ">
            <h2
                class="h-[38px] ubuntu-bold text-[28px] md:text-[32px] lg:text-[34px] xl:text-[40px] text-[#242424] title-shadow text-center">
                Landasan Berkembang
            </h2>
            <span
                class="h-[40px] ubuntu-bold text-[32px] md:text-[34px] lg:text-[38px] xl:text-[46px] text-[#2563EB] title-shadow text-center w-full flex items-center justify-center">Visi,
                Misi dan Nilai</span>
        </div>
        <div id="vision-mission-section-title-desktop" class="hidden md:block ">
            <h2
                class="h-[38px] md:h-[40px] lg:h-[38px] xl:h-[50px] ubuntu-bold text-[28px] md:text-[32px] lg:text-[34px] xl:text-[40px] text-[#242424] title-shadow text-center">
                Landasan Kami Berkembang
            </h2>
            <span
                class="h-[40px] lg:h-[40px] xl:h-[58px] ubuntu-bold text-[32px] md:text-[34px] lg:text-[38px] xl:text-[46px] text-[#2563EB] title-shadow text-center w-full flex items-center justify-center">Visi,
                Misi, dan Nilai Perusahaan</span>
        </div>
    </div>
    <div class="w-full max-w-[1200px] flex items-center justify-center flex-col">
        <div id="vision-mission"
            class="w-full grid grid-cols-1 md:grid-cols-2 gap-y-[80px] md:gap-x-[100px] xl:gap-x-[200px] mb-[80px] md:mb-[100px] lg:mb-[210px]">
            <div class="flex items-center justify-start flex-col">
                <img src="/images/about_us_page/aboutus6.png" alt="Target karya pilar nusantara"
                    class="w-[100px] h-auto">
                <h3 class="ubuntu-bold text-[38px] md:text-[40px] text-[#585858] mb-[40px]">Visi</h3>
                <p class=" open-sans-regular text-[16px] text-[#242424] tracking-[2%] text-center">
                    Menjadi perusahaan terdepan di Indonesia dalam menyediakan produk berkualitas tinggi untuk
                    mainan anak, olahraga, hingga infrastruktur, dengan inovasi berkelanjutan serta komitmen
                    terhadap keamanan, daya tahan, dan kepuasan pelanggan.
                </p>
            </div>
            <div class="flex items-center justify-start flex-col">
                <img src="/images/about_us_page/aboutus7.png" alt="Target karya pilar nusantara"
                    class="w-[100px] h-auto">
                <h3 class="ubuntu-bold text-[38px] md:text-[40px] text-[#585858] mb-[40px]">Misi</h3>
                <p class=" open-sans-regular text-[16px] text-[#242424] tracking-[2%] text-center">
                    Kami berkomitmen menghadirkan produk berkualitas tinggi yang aman dan ramah lingkungan,
                    menyediakan layanan kustomisasi merek, menawarkan harga kompetitif, memberikan pelayanan
                    profesional, memastikan distribusi luas, serta mengadopsi teknologi modern untuk inovasi dan
                    keberlanjutan.
                </p>
            </div>
        </div>
        <div id="value">
            <div class="flex items-center justify-start flex-col">
                <img src="/images/about_us_page/aboutus8.png" alt="Target karya pilar nusantara"
                    class="w-[100px] h-auto">
                <h3 class="ubuntu-bold text-[38px] md:text-[40px] text-[#585858] mb-[40px]">Nilai</h3>
                <p
                    class=" open-sans-regular text-[16px] text-[#242424] tracking-[2%] text-center max-w-[718px] mb-[60px] md:mb-[70px] lg:mb-[90px]">
                    Kami percaya bahwa kesuksesan jangka panjang dibangun dari nilai-nilai yang kuat. Inilah prinsip
                    yang kami pegang teguh dalam setiap langkah
                </p>
                <div>
                    <div
                        class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 md:gap-x-[20px] lg:gap-x-[30px] xl:lg:gap-x-[50px] gap-y-[40px] lg:gap-y-[50px]">
                        <div class="w-full">
                            <div class="flex w-full items-center justify-start mb-[8px]">
                                <div class="hidden md:block w-[15px] h-[15px] rounded-full bg-[#5c5c5c] mr-[20px]">
                                </div>
                                <p
                                    class="open-sans-bold md:open-sans-regular text-[16px] text-[#242424] tracking-[2%] border-b-1 md:border-b-0">
                                    Kualitas adalah Prioritas</p>
                            </div>
                            <div class="w-full md:pl-[35px]">
                                <p class="open-sans-regular text-[16px] text-[#242424] tracking-[2%]">Kami
                                    menghadirkan produk dengan standar tinggi untuk menjamin keamanan, daya tahan,
                                    dan kenyamanan.</p>
                            </div>
                        </div>
                        <div class="w-full">
                            <div class="flex w-full items-center justify-start mb-[8px]">
                                <div class="hidden md:block w-[15px] h-[15px] rounded-full bg-[#5c5c5c] mr-[20px]">
                                </div>
                                <p
                                    class="open-sans-bold md:open-sans-regular text-[16px] text-[#242424] tracking-[2%] border-b-1 md:border-b-0">
                                    Kolaborasi yang kuat</p>
                            </div>
                            <div class="w-full md:pl-[35px]">
                                <p class="open-sans-regular text-[16px] text-[#242424] tracking-[2%]">Kami membangun
                                    kemitraan jangka panjang dengan pelanggan, tim internal, dan mitra strategis
                                    untuk tumbuh bersama.</p>
                            </div>
                        </div>
                        <div class="w-full">
                            <div class="flex w-full items-center justify-start mb-[8px]">
                                <div class="hidden md:block w-[15px] h-[15px] rounded-full bg-[#5c5c5c] mr-[20px]">
                                </div>
                                <p
                                    class="open-sans-bold md:open-sans-regular text-[16px] text-[#242424] tracking-[2%] border-b-1 md:border-b-0">
                                    Inovasi Berkelanjutan</p>
                            </div>
                            <div class="w-full md:pl-[35px]">
                                <p class="open-sans-regular text-[16px] text-[#242424] tracking-[2%]">Kami terus
                                    berinovasi melalui teknologi dan desain untuk memberikan solusi yang relevan,
                                    modern, dan berkelanjutan.</p>
                            </div>
                        </div>
                        <div class="w-full">
                            <div class="flex w-full items-center justify-start mb-[8px]">
                                <div class="hidden md:block w-[15px] h-[15px] rounded-full bg-[#5c5c5c] mr-[20px]">
                                </div>
                                <p
                                    class="open-sans-bold md:open-sans-regular text-[16px] text-[#242424] tracking-[2%] border-b-1 md:border-b-0">
                                    Keberlanjutan Lingkungan</p>
                            </div>
                            <div class="w-full md:pl-[35px]">
                                <p class="open-sans-regular text-[16px] text-[#242424] tracking-[2%]">Kami peduli
                                    terhadap lingkungan dan berupaya mengurangi dampak negatif melalui praktik
                                    bisnis yang bertanggung jawab.</p>
                            </div>
                        </div>
                        <div class="w-full">
                            <div class="flex w-full items-center justify-start mb-[8px]">
                                <div class="hidden md:block w-[15px] h-[15px] rounded-full bg-[#5c5c5c] mr-[20px]">
                                </div>
                                <p
                                    class="open-sans-bold md:open-sans-regular text-[16px] text-[#242424] tracking-[2%] border-b-1 md:border-b-0">
                                    Integritas dan Etika</p>
                            </div>
                            <div class="w-full md:pl-[35px]">
                                <p class="open-sans-regular text-[16px] text-[#242424] tracking-[2%]">Kami
                                    menjunjung tinggi kejujuran, transparansi, dan etika dalam seluruh aktivitas
                                    bisnis.</p>
                            </div>
                        </div>
                        <div class="w-full">
                            <div class="flex w-full items-center justify-start mb-[8px]">
                                <div class="hidden md:block w-[15px] h-[15px] rounded-full bg-[#5c5c5c] mr-[20px]">
                                </div>
                                <p
                                    class="open-sans-bold md:open-sans-regular text-[16px] text-[#242424] tracking-[2%] border-b-1 md:border-b-0">
                                    Adaptif terhadap Perubahan</p>
                            </div>
                            <div class="w-full md:pl-[35px]">
                                <p class="open-sans-regular text-[16px] text-[#242424] tracking-[2%]">Kami responsif
                                    terhadap dinamika pasar dan siap bertransformasi untuk menjawab tantangan masa
                                    depan.</p>
                            </div>
                        </div>
                        <div class="w-full lg:hidden">
                            <div class="flex w-full items-center justify-start mb-[8px]">
                                <div class="hidden md:block w-[15px] h-[15px] rounded-full bg-[#5c5c5c] mr-[20px]">
                                </div>
                                <p
                                    class="open-sans-bold md:open-sans-regular text-[16px] text-[#242424] tracking-[2%] border-b-1 md:border-b-0">
                                    Fokus pada Pelanggan</p>
                            </div>
                            <div class="w-full md:pl-[35px]">
                                <p class="open-sans-regular text-[16px] text-[#242424] tracking-[2%]">Kami
                                    mendengarkan kebutuhan pelanggan dan menjadikannya pusat dari setiap keputusan
                                    dan pengembangan produk.</p>
                            </div>
                        </div>
                        <div class="w-full lg:hidden">
                            <div class="flex w-full items-center justify-start mb-[8px]">
                                <div class="hidden md:block w-[15px] h-[15px] rounded-full bg-[#5c5c5c] mr-[20px]">
                                </div>
                                <p
                                    class="open-sans-bold md:open-sans-regular text-[16px] text-[#242424] tracking-[2%] border-b-1 md:border-b-0">
                                    Keunggulan Operasional</p>
                            </div>
                            <div class="w-full md:pl-[35px]">
                                <p class="open-sans-regular text-[16px] text-[#242424] tracking-[2%]">Kami terus
                                    menyempurnakan proses dan sistem kerja untuk memberikan hasil terbaik secara
                                    efisien dan konsisten.</p>
                            </div>
                        </div>
                    </div>
                    <div class="hidden lg:grid w-full grid-cols-6 mt-[70px] gap-x-[50px]">
                        <div class="col-span-1"></div>
                        <div class="w-full col-span-2">
                            <div class="flex w-full items-center justify-start mb-[8px]">
                                <div class="hidden md:block w-[15px] h-[15px] rounded-full bg-[#5c5c5c] mr-[20px]">
                                </div>
                                <p
                                    class="open-sans-bold md:open-sans-regular text-[16px] text-[#242424] tracking-[2%] border-b-1 md:border-b-0">
                                    Fokus pada Pelanggan</p>
                            </div>
                            <div class="w-full md:pl-[35px]">
                                <p class="open-sans-regular text-[16px] text-[#242424] tracking-[2%]">Kami
                                    mendengarkan kebutuhan pelanggan dan menjadikannya pusat dari setiap keputusan
                                    dan pengembangan produk.</p>
                            </div>
                        </div>
                        <div class="w-full col-span-2">
                            <div class="flex w-full items-center justify-start mb-[8px]">
                                <div class="hidden md:block w-[15px] h-[15px] rounded-full bg-[#5c5c5c] mr-[20px]">
                                </div>
                                <p
                                    class="open-sans-bold md:open-sans-regular text-[16px] text-[#242424] tracking-[2%] border-b-1 md:border-b-0">
                                    Keunggulan Operasional</p>
                            </div>
                            <div class="w-full md:pl-[35px]">
                                <p class="open-sans-regular text-[16px] text-[#242424] tracking-[2%]">Kami terus
                                    menyempurnakan proses dan sistem kerja untuk memberikan hasil terbaik secara
                                    efisien dan konsisten.</p>
                            </div>
                        </div>
                        <div class="col-span-1"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="legality-section" class="w-full relative min-h-screen flex flex-col items-center justify-center px-5">
    <div id="legality-section-title-mobile" class="block lg:hidden mb-[60px]">
        <h2 class="h-[34px] md:h-[40px] ubuntu-bold text-[28px] md:text-[32px] text-[#242424] title-shadow text-center">
            Kami Sudah
        </h2>
        <span
            class="h-[40px] ubuntu-bold text-[32px] md:text-[34px] text-[#2563EB] title-shadow text-center w-full flex items-center justify-center">Terdaftar
            Resmi</span>
    </div>
    <div
        class="w-full max-w-[1200px] grid grid-cols-1 lg:grid-cols-2 gap-y-[60px] md:gap-x-[60px] lg:gap-x-[100px] md:px-15">
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
                    class="lg:h-[40px] xl:h-[48px] ubuntu-bold lg:text-[38px] xl:text-[46px] text-[#2563EB] title-shadow text-start">Terdaftar
                    Resmi</span>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-1 gap-y-[51px] gap-x-[50px] w-full">
                <div>
                    <p class="ubuntu-bold text-[18px] text-[#242424] mb-[20px] lg:mb-[30px]">Informasi Perusahaan
                    </p>
                    <div class="flex flex-col space-y-[14px]">
                        <div class="flex flex-col">
                            <div class="flex items-center justify-start">
                                <div class="w-[12px] h-[12px] bg-[#2563EB] rounded-full mr-[12px]"></div>
                                <p class="open-sans-regular text-[16px] text-[#242424] ">Nama Badan Usaha:</p>
                                <p class="hidden lg:block open-sans-bold text-[16px] text-[#242424] pl-[4px]">PT
                                    Karya Pilar Nusantara</p>
                            </div>
                            <p class="lg:hidden open-sans-bold text-[16px] text-[#242424] pl-[24px]">PT Karya Pilar
                                Nusantara</p>
                        </div>
                        <div class="flex flex-col">
                            <div class="flex items-center justify-start">
                                <div class="w-[12px] h-[12px] bg-[#2563EB] rounded-full mr-[12px]"></div>
                                <p class="open-sans-regular text-[16px] text-[#242424] ">Nomor Induk Berusaha (NIB):
                                </p>
                                <p class="hidden lg:block open-sans-bold text-[16px] text-[#242424] pl-[4px]">
                                    1102250054704</p>
                            </div>
                            <p class="lg:hidden open-sans-bold text-[16px] text-[#242424] pl-[24px]">1102250054704
                            </p>
                        </div>
                        <div class="flex flex-col">
                            <div class="flex items-center justify-start">
                                <div class="w-[12px] h-[12px] bg-[#2563EB] rounded-full mr-[12px]"></div>
                                <p class="open-sans-regular text-[16px] text-[#242424] ">Bentuk Usaha:</p>
                                <p class="hidden lg:block open-sans-bold text-[16px] text-[#242424] pl-[4px]">
                                    Perseroan Terbatas (PT)</p>
                            </div>
                            <p class="lg:hidden open-sans-bold text-[16px] text-[#242424] pl-[24px]">Perseroan
                                Terbatas (PT)</p>
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
                                <p class="hidden lg:block open-sans-bold text-[16px] text-[#242424] pl-[4px]">
                                    Pergudangan Safe n Lock, Sidoarjo</p>
                            </div>
                            <p class="lg:hidden open-sans-bold text-[16px] text-[#242424] pl-[24px]">Pergudangan
                                Safe n Lock, Sidoarjo</p>
                        </div>
                        <div class="flex flex-col">
                            <div class="flex items-center justify-start">
                                <div class="w-[12px] h-[12px] bg-[#2563EB] rounded-full mr-[12px]"></div>
                                <p class="open-sans-regular text-[16px] text-[#242424] ">Email:</p>
                                <p class="hidden lg:block open-sans-bold text-[16px] text-[#242424] pl-[4px]">
                                    pt.karyapilarnusantara@gmail.com</p>
                            </div>
                            <p class="lg:hidden open-sans-bold text-[16px] text-[#242424] pl-[24px]">
                                pt.karyapilarnusantara@gmail.com</p>
                        </div>
                        <div class="flex flex-col">
                            <div class="flex items-center justify-start">
                                <div class="w-[12px] h-[12px] bg-[#2563EB] rounded-full mr-[12px]"></div>
                                <p class="open-sans-regular text-[16px] text-[#242424] ">Telepon:</p>
                                <p class="hidden lg:block open-sans-bold text-[16px] text-[#242424] pl-[4px]">+62
                                    821-6005-0005</p>
                            </div>
                            <p class="lg:hidden open-sans-bold text-[16px] text-[#242424] pl-[24px]">+62
                                821-6005-0005</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="license-section"
    class="w-full relative min-h-screen flex flex-col items-center justify-center px-5 lg:px-20">
    <div id="license-section-title-mobile" class="block lg:hidden mb-[60px]">
        <h2 class="h-[34px] md:h-[40px] ubuntu-bold text-[28px] md:text-[32px] text-[#242424] title-shadow text-center">
            Lisensi & Bidang
        </h2>
        <span
            class="h-[40px] ubuntu-bold text-[32px] md:text-[34px] text-[#2563EB] title-shadow text-center w-full flex items-center justify-center">Operasional</span>
    </div>
    <div
        class="w-full 2xl:w-[80vw] max-w-[1400px] grid grid-cols-1 lg:grid-cols-2 md:gap-x-[60px] lg:gap-x-[100px] md:px-15">
        <div class="mb-[32px] lg:hidden">
            <img src="/images/about_us_page/aboutus10.png" alt="Lisensi di atas meja"
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
                <p class="open-sans-regular text-[16px] tracking-[4%] text-start w-full mb-[60px] ">
                    Kami menjalankan usaha sesuai ketentuan resmi dan terdaftar dalam sistem OSS dengan KBLI sebagai
                    berikut.
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
                        <p class="open-sans-regular text-[16px] text-w[#242424]">Perdagangan Besar Mesin, Peralatan
                            Dan Perlengkapan Lainnya</p>
                    </div>
                </div>
                <div class="flex py-[15px] border-t-[1px] border-b-[1px] border-[#E1E1E1] pr-1">
                    <div class="w-[155px] h-auto  flex items-center justify-center">
                        <p class="open-sans-bold text-[16px] text-[#242424]">46499</p>
                    </div>
                    <div class="w-full h-auto  flex items-center justify-start">
                        <p class="open-sans-regular text-[16px] text-w[#242424]">Perdagangan Besar Berbagai Barang
                            Dan Perlengkapan Rumah Tangga Lainnya Ytdl</p>
                    </div>
                </div>
                <div class="flex bg-[#E7EAFC] py-[15px] pr-1">
                    <div class="w-[155px] h-auto flex items-center justify-center">
                        <p class="open-sans-bold text-[16px] text-[#242424]">46414</p>
                    </div>
                    <div class="w-full h-auto flex items-center justify-start">
                        <p class="open-sans-regular text-[16px] text-w[#242424]">Perdagangan Besar Barang Lainnya
                            Dari Tekstil</p>
                    </div>
                </div>
                <div class="flex py-[15px] border-t-[1px] border-b-[1px] border-[#E1E1E1] pr-1">
                    <div class="w-[155px] h-auto flex items-center justify-center">
                        <p class="open-sans-bold text-[16px] text-[#242424]">46495</p>
                    </div>
                    <div class="w-full h-auto flex items-center justify-start">
                        <p class="open-sans-regular text-[16px] text-w[#242424]">Perdagangan Besar Alat Permainan
                            Dan Mainan Anak-anak</p>
                    </div>
                </div>
                <div class="flex bg-[#E7EAFC] py-[15px] pr-1">
                    <div class="w-[155px] h-auto flex items-center justify-center">
                        <p class="open-sans-bold text-[16px] text-[#242424]">46631</p>
                    </div>
                    <div class="w-full h-auto flex items-center justify-start">
                        <p class="open-sans-regular text-[16px] text-w[#242424]">Perdagangan Besar Barang Logam
                            Untuk Bahan Konstruksi</p>
                    </div>
                </div>
                <div class="flex py-[15px] border-t-[1px] border-b-[1px] border-[#E1E1E1] pr-1">
                    <div class="w-[155px] h-auto flex items-center justify-center">
                        <p class="open-sans-bold text-[16px] text-[#242424]">46900</p>
                    </div>
                    <div class="w-full h-auto flex items-center justify-start">
                        <p class="open-sans-regular text-[16px] text-w[#242424]">Perdagangan Besar Berbagai Macam
                            Barang</p>
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
                        <p class="open-sans-regular text-[16px] text-w[#242424]">Perdagangan Besar Peralatan Dan
                            Perlengkapan Rumah Tangga</p>
                    </div>
                </div>
                <div class="flex bg-[#E7EAFC] py-[15px] pr-1">
                    <div class="w-[155px] h-auto flex items-center justify-center">
                        <p class="open-sans-bold text-[16px] text-[#242424]">46639</p>
                    </div>
                    <div class="w-full h-auto flex items-center justify-start">
                        <p class="open-sans-regular text-[16px] text-w[#242424]">Perdagangan Besar Bahan Konstruksi
                            Lainnya</p>
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
<?= view ('components/cta_banner', ['text' => 'Butuh informasi lebih lanjut atau ingin bekerja sama? Kami siap melayani kebutuhan Anda']) ?>
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
<?= $this->endSection() ?>
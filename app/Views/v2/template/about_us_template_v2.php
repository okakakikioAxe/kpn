<?= $this->extend('v2/template/template_v2') ?>


<?= $this->section('header') ?>
<html lang="<?= esc($lang ?? 'id') ?>">
<title><?= esc($meta_title ?? 'Tentang Kami') ?></title>
<meta name="description"
    content="<?= esc($meta_description ?? 'Mitra pengadaan terpercaya untuk berbagai macam kebutuhan Anda, mulai dari alat olahraga hingga infrastruktur dengan kualitas premium') ?>" />
<meta name="keywords"
    content="<?= esc($meta_keyword ?? 'tentang kpn, pt karya pilar nusantara, pt kpn, kpn sidoarjo, produsen hdpe, produsen xpe, produsen tpe, produsen mainan anak, kustom merk') ?>" />

<?= $this->endsection() ?>

<?= $this->section('content') ?>
<section id="hero-section" class="relative flex items-center justify-center h-screen w-full bg-[#AEAAA6] z-20">
    <div id="nav-observer" class="absolute top-0 left-0 z-50 h-[200px] w-full bg-transparent"></div>
    <!-- Hero Text -->
    <div id="hero-text" class="w-full flex items-center justify-center mx-auto px-4 py-8 text-white text-center">
        <div class="flex flex-col w-full h-full items-center justify-center relative z-10  my-[200px]">
            <div class="block w-full items-center justify-center mb-[40px] md:mb-[60px]">
                <h1
                    class="ubuntu-bold h-[35px] md:h-[45px] text-[30px] md:text-[40px] tracking-[4%] text-center text-black title-shadow mr-2">
                    <?= ($hero_top_title ?? 'Tentang') ?></h1>
                <p
                    class=" ubuntu-bold text-[30px] md:text-[40px] tracking-[4%] text-[#2563EB] title-shadow text-center w-full">
                    Karya Pilar Nusantara</p>
            </div>

            <p
                class="w-full max-w-[600px] open-sans-regular text-[16px] lg:text-[18px] tracking-[4%] text-center text-[#4E4E4E] mb-[90px] md:mb-[120px] px-10 md:px-10 xl:px-0">
                <?= ($hero_sub_title ?? 'Mitra pengadaan terpercaya untuk berbagai macam kebutuhan Anda, mulai dari alat olahraga hingga infrastruktur dengan kualitas premium') ?>
            </p>
            <button
                class="cursor-pointer bg-blue-600 hover:bg-blue-700 px-[32px] md:px-[38px] transition-colors basic-contact-us-button py-[10px] md:py-[12px] rounded-[15px] md:rounded-[18px]"
                type="button">
                <div class="flex items-center justify-center w-full space-x-[14px]">
                    <div class="roboto-bold tracking-wide text-[16px] sm:text-[18px] text-white">
                        <?= ($hero_button_title ?? 'Hubungi Kami') ?></div>
                </div>
            </button>
        </div>
    </div>
    <img src="/images/about_us_page/aboutus1.png" alt="product group" width="505" height="595"
        class="absolute right-0  bottom-[-20px] sm:bottom-[-20px] md:bottom-[-25px] lg:bottom-[-30px] xl:bottom-[-40px] 2xl:bottom-[-40px]  w-[40vw] max-w-[350px] lg:max-w-[400px] xl:w-[25vw] xl:max-w-[400px] 2xl:w-[25vw] 2xl:max-w-[500px] h-auto">
    <img src="/images/about_us_page/aboutus2.png" alt="product group" width="655" height="490"
        class="absolute bottom-[-20px] sm:bottom-[-20px] md:bottom-[-25px] lg:bottom-[-30px] xl:bottom-[-40px] 2xl:bottom-[-40px] left-0 w-[40vw] max-w-[350px] lg:max-w-[400px] xl:w-[25vw] xl:max-w-[400px] 2xl:w-[25vw] 2xl:max-w-[500px] h-auto">
</section>

<section id="about-us-section"
    class="w-full py-[80px] sm:py-[182px] relative min-h-screen flex flex-col items-center justify-center px-5">

    <?= view('components/texts/title/title_group', ['id' => 'introduce-title-default', 'class' => 'block lg:hidden mb-[60px] text-center', 'top_title' => ($about_us_top_title ?? 'Hadir Sebagai'), 'bottom_title' => ($about_us_bottom_title ?? 'Solusi Pengadaan')]) ?>

    <div
        class="w-full max-w-[1200px] grid grid-cols-1 md:grid-cols-2 gap-y-[60px] md:gap-x-[60px] lg:gap-x-[100px] md:px-15">
        <div>
            <img src="/images/about_us_page/aboutus3.png" alt="Produk karya pilar nusantara yang muncul dari box"
                class="w-full h-auto">
        </div>
        <div class="flex flex-col items-start justify-center">

            <?= view('components/texts/title/title_group', ['id' => 'introduce-title-lg', 'class' => 'hidden lg:block w-full mb-[54px] text-start', 'top_title' => ($about_us_top_title ?? 'Hadir Sebagai'), 'bottom_title' => ($about_us_bottom_title ?? 'Solusi Pengadaan')]) ?>

            <p class="open-sans-regular text-[16px] tracking-[4%] text-center md:text-start lg:mb-[60px]">
                <?= ($about_us_description ?? 'Kami adalah mitra tepercaya dalam pengadaan berbagai produk kebutuhan masyarakat dan institusi, mulai dari alat olahraga, perlengkapan camping, mainan edukatif anak, hingga produk infrastruktur berskala besar. Fokus kami adalah memberikan layanan pengadaan yang efisien dan terpercaya, baik untuk sektor publik maupun swasta. Dukungan dari mitra-mitra manufaktur ternama serta pemahaman mendalam terhadap kebutuhan pasar menjadikan kami pilihan utama dalam setiap proyek pengadaan.') ?>
            </p>
            <div class="hidden lg:block"><?= view('components/whatsapp_button') ?></div>
        </div>
    </div>
    <div class="lg:hidden mt-[60px]"><?= view('components/whatsapp_button') ?></div>
</section>
<section id="map-section"
    class="relative flex flex-col items-center justify-center w-full md:min-h-screen py-[80px] md:py-[40px] lg:py-[80px] px-5 md:px-15 ">
    <div class="w-full max-w-[1200px] flex flex-col items-center justify-center relative">
        <div>
            <?= view('components/texts/title/title_group', ['id' => 'map-title-default', 'class' => 'block md:hidden mb-[40px] text-center', 'top_title' => ($map_top_title ?? 'Menjangkau Seluruh'), 'bottom_title' => ($map_bottom_title ?? 'Kota di Indonesia')]) ?>
            <?= view('components/texts/title/title_group', ['id' => 'map-title-md', 'class' => 'hidden md:block mb-[60px] text-center', 'top_title' => ($map_top_title ?? 'Menjangkau Seluruh'), 'bottom_title' => ($map_bottom_title ?? 'Kota di Indonesia')]) ?>
        </div>
        <p class="open-sans-regular text-[16px] tracking-[4%] text-center max-w-[600px] mb-[40px] md:mb-[46px]">

            <?= ($map_description ?? 'Kami hadir di seluruh penjuru negeri, memastikan pengiriman cepat dan layanan terbaik hingga ke kota-kota terpencil.') ?>
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
                    <?= ($achievement_1 ?? 'Kami telah bermitra dengan organisasi dan instansi pemerintahan untuk mendukung berbagai kegiatan serta kebutuhan pengadaan mereka secara profesional.') ?>
                </p>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-y-[60px] gap-x-[110px] mb-[150px]">
            <div class="hidden md:flex w-full h-full items-center">
                <p class=" open-sans-regular text-[16px] text-white tracking-[2%] text-center md:text-start">
                    <?= ($achievement_2 ?? 'Kami telah menangani lebih dari 40.000 permintaan pengadaan dari berbagai instansi dengan pelayanan cepat, tepat, dan terpercaya.') ?>
                </p>
            </div>
            <div class="flex w-full h-full items-center justify-center">
                <div class="text-center" id="total-order" data-target="40000">
                    <div class="h-[50px] mb-[12px] text-white flex items-center justify-center"><span
                            class="value roboto-bold text-[50px] md:text-[70px]">40.000</span><span
                            class="plus roboto-bold text-[45px]">+</span></div>
                    <span
                        class="text-[16px] tracking-[4%] open-sans-regular text-white/80"><?= ($achievement_2_sub_title ?? 'Permintaan Terpenuhi') ?></span>
                </div>
            </div>
            <div class="md:hidden flex w-full h-full items-center">
                <p class=" open-sans-regular text-[16px] text-white tracking-[2%] text-center md:text-start">
                    <?= ($achievement_2 ?? 'Kami telah menangani lebih dari 40.000 permintaan pengadaan dari berbagai instansi dengan pelayanan cepat, tepat, dan terpercaya.') ?>
                </p>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-y-[60px] gap-x-[110px]">

            <div class="flex w-full h-full items-center justify-center">
                <div class="text-center" id="total-order" data-target="200">
                    <div class="h-[50px] mb-[12px] text-white flex items-center justify-center"><span
                            class="value roboto-bold text-[50px] md:text-[70px]">200</span><span
                            class="plus roboto-bold text-[45px]">+</span></div>
                    <span
                        class="text-[16px] tracking-[4%] open-sans-regular text-white/80"><?= ($achievement_3_sub_title ?? 'Jenis Produk') ?></span>
                </div>
            </div>
            <div class="flex w-full h-full items-center">
                <p class=" open-sans-regular text-[16px] text-white tracking-[2%] text-center md:text-start">
                    <?= ($achievement_3 ?? 'Menyediakan lebih dari 200 produk pilihan untuk memenuhi kebutuhan pengadaan instansi pemerintah, swasta, dan organisasi nasional lainnya.') ?>
                </p>
            </div>
        </div>
    </div>
</section>
<section id="vision-mission-section"
    class="w-full flex flex-col items-center justify-center min-h-screen px-5 md:px-15 py-[166px] lg:pb-[200px]">
    <div class="mb-[80px] max-w-[1200px] md:mb-[150px] lg:mb-[180px]">
        <?= view('components/texts/title/title_group', ['id' => 'vision-title-default', 'class' => 'block md:hidden text-center', 'top_title' => ($value_1_top_title ?? 'Landasan Berkembang'), 'bottom_title' => ($value_1_bottom_title ?? 'Visi, Misi & Nilai')]) ?>
        <?= view('components/texts/title/title_group', ['id' => 'vision-title-md', 'class' => 'hidden md:block text-center', 'top_title' => ($value_2_top_title ?? 'Landasan Kami Berkembang'), 'bottom_title' => ($value_2_bottom_title ?? 'Visi, Misi & Nilai Perusahaan')]) ?>
    </div>
    <div class="w-full max-w-[1200px] flex items-center justify-center flex-col">
        <div id="vision-mission"
            class="w-full grid grid-cols-1 md:grid-cols-2 gap-y-[80px] md:gap-x-[100px] xl:gap-x-[200px] mb-[80px] md:mb-[100px] lg:mb-[210px]">
            <div class="flex items-center justify-start flex-col">
                <img src="/images/about_us_page/aboutus6.png" alt="Target karya pilar nusantara"
                    class="w-[100px] h-auto">
                <h3 class="ubuntu-bold text-[38px] md:text-[40px] text-[#585858] mb-[40px]">
                    <?= ($vision_title ?? 'Visi') ?></h3>
                <p class=" open-sans-regular text-[16px] text-[#242424] tracking-[2%] text-center">
                    <?= ($vision_description ?? 'Menjadi perusahaan terdepan di Indonesia dalam menyediakan produk berkualitas tinggi untuk mainan anak, olahraga, hingga infrastruktur, dengan inovasi berkelanjutan serta komitmen terhadap keamanan, daya tahan, dan kepuasan pelanggan.') ?>
                </p>
            </div>
            <div class="flex items-center justify-start flex-col">
                <img src="/images/about_us_page/aboutus7.png" alt="Target karya pilar nusantara"
                    class="w-[100px] h-auto">
                <h3 class="ubuntu-bold text-[38px] md:text-[40px] text-[#585858] mb-[40px]">
                    <?= ($mission_title ?? 'Misi') ?></h3>
                <p class=" open-sans-regular text-[16px] text-[#242424] tracking-[2%] text-center">
                    <?= ($mission_description ?? 'Kami berkomitmen menghadirkan produk berkualitas tinggi yang aman dan ramah lingkungan, menyediakan layanan kustomisasi merek, menawarkan harga kompetitif, memberikan pelayanan profesional, memastikan distribusi luas, serta mengadopsi teknologi modern untuk inovasi dan keberlanjutan.') ?>
                </p>
            </div>
        </div>
        <div id="value">
            <div class="flex items-center justify-start flex-col">
                <img src="/images/about_us_page/aboutus8.png" alt="Target karya pilar nusantara"
                    class="w-[100px] h-auto">
                <h3 class="ubuntu-bold text-[38px] md:text-[40px] text-[#585858] mb-[40px]">
                    <?= ($value_title ?? 'Nilai') ?></h3>
                <p
                    class=" open-sans-regular text-[16px] text-[#242424] tracking-[2%] text-center max-w-[718px] mb-[60px] md:mb-[70px] lg:mb-[90px]">
                    <?= ($value_description ?? 'Kami percaya bahwa kesuksesan jangka panjang dibangun dari nilai-nilai yang kuat. Inilah prinsip yang kami pegang teguh dalam setiap langkah') ?>
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
                                    <?= ($value_1_title ?? 'Kualitas adalah Prioritas') ?>
                                </p>
                            </div>
                            <div class="w-full md:pl-[35px]">
                                <p class="open-sans-regular text-[16px] text-[#242424] tracking-[2%]">
                                    <?= ($value_1_description ?? 'Kami menghadirkan produk dengan standar tinggi untuk menjamin keamanan, daya tahan, dan kenyamanan.') ?>
                                </p>
                            </div>
                        </div>
                        <div class="w-full">
                            <div class="flex w-full items-center justify-start mb-[8px]">
                                <div class="hidden md:block w-[15px] h-[15px] rounded-full bg-[#5c5c5c] mr-[20px]">
                                </div>
                                <p
                                    class="open-sans-bold md:open-sans-regular text-[16px] text-[#242424] tracking-[2%] border-b-1 md:border-b-0">
                                    <?= ($value_2_title ?? 'Kolaborasi yang kuat') ?></p>
                            </div>
                            <div class="w-full md:pl-[35px]">
                                <p class="open-sans-regular text-[16px] text-[#242424] tracking-[2%]">
                                    <?= ($value_2_description ?? 'Kami membangun kemitraan jangka panjang dengan pelanggan, tim internal, dan mitra strategis untuk tumbuh bersama.') ?>
                                </p>
                            </div>
                        </div>
                        <div class="w-full">
                            <div class="flex w-full items-center justify-start mb-[8px]">
                                <div class="hidden md:block w-[15px] h-[15px] rounded-full bg-[#5c5c5c] mr-[20px]">
                                </div>
                                <p
                                    class="open-sans-bold md:open-sans-regular text-[16px] text-[#242424] tracking-[2%] border-b-1 md:border-b-0">
                                    <?= ($value_3_title ?? 'Inovasi Berkelanjutan') ?></p>
                            </div>
                            <div class="w-full md:pl-[35px]">
                                <p class="open-sans-regular text-[16px] text-[#242424] tracking-[2%]">
                                    <?= ($value_3_description ?? 'Kami terus berinovasi melalui teknologi dan desain untuk memberikan solusi yang relevan, modern, dan berkelanjutan.') ?>
                                </p>
                            </div>
                        </div>
                        <div class="w-full">
                            <div class="flex w-full items-center justify-start mb-[8px]">
                                <div class="hidden md:block w-[15px] h-[15px] rounded-full bg-[#5c5c5c] mr-[20px]">
                                </div>
                                <p
                                    class="open-sans-bold md:open-sans-regular text-[16px] text-[#242424] tracking-[2%] border-b-1 md:border-b-0">
                                    <?= ($value_4_title ?? 'Keberlanjutan Lingkungan') ?>
                                </p>
                            </div>
                            <div class="w-full md:pl-[35px]">
                                <p class="open-sans-regular text-[16px] text-[#242424] tracking-[2%]">
                                    <?= ($value_4_description ?? 'Kami peduli terhadap lingkungan dan berupaya mengurangi dampak negatif melalui praktik bisnis yang bertanggung jawab.') ?>
                                </p>
                            </div>
                        </div>
                        <div class="w-full">
                            <div class="flex w-full items-center justify-start mb-[8px]">
                                <div class="hidden md:block w-[15px] h-[15px] rounded-full bg-[#5c5c5c] mr-[20px]">
                                </div>
                                <p
                                    class="open-sans-bold md:open-sans-regular text-[16px] text-[#242424] tracking-[2%] border-b-1 md:border-b-0">
                                    <?= ($value_5_title ?? 'Integritas dan Etika') ?></p>
                            </div>
                            <div class="w-full md:pl-[35px]">
                                <p class="open-sans-regular text-[16px] text-[#242424] tracking-[2%]">
                                    <?= ($value_5_description ?? 'Kami menjunjung tinggi kejujuran, transparansi, dan etika dalam seluruh aktivitas bisnis.') ?>
                                </p>
                            </div>
                        </div>
                        <div class="w-full">
                            <div class="flex w-full items-center justify-start mb-[8px]">
                                <div class="hidden md:block w-[15px] h-[15px] rounded-full bg-[#5c5c5c] mr-[20px]">
                                </div>
                                <p
                                    class="open-sans-bold md:open-sans-regular text-[16px] text-[#242424] tracking-[2%] border-b-1 md:border-b-0">
                                    <?= ($value_6_title ?? 'Adaptif terhadap Perubahan') ?>
                                </p>
                            </div>
                            <div class="w-full md:pl-[35px]">
                                <p class="open-sans-regular text-[16px] text-[#242424] tracking-[2%]">
                                    <?= ($value_6_description ?? 'Kami responsif terhadap dinamika pasar dan siap bertransformasi untuk menjawab tantangan masa depan.') ?>
                                </p>
                            </div>
                        </div>
                        <div class="w-full lg:hidden">
                            <div class="flex w-full items-center justify-start mb-[8px]">
                                <div class="hidden md:block w-[15px] h-[15px] rounded-full bg-[#5c5c5c] mr-[20px]">
                                </div>
                                <p
                                    class="open-sans-bold md:open-sans-regular text-[16px] text-[#242424] tracking-[2%] border-b-1 md:border-b-0">
                                    <?= ($value_7_title ?? 'Fokus pada Pelanggan') ?>
                                </p>
                            </div>
                            <div class="w-full md:pl-[35px]">
                                <p class="open-sans-regular text-[16px] text-[#242424] tracking-[2%]">
                                    <?= ($value_7_description ?? 'Kami mendengarkan kebutuhan pelanggan dan menjadikannya pusat dari setiap keputusan dan pengembangan produk.') ?>
                                </p>
                            </div>
                        </div>
                        <div class="w-full lg:hidden">
                            <div class="flex w-full items-center justify-start mb-[8px]">
                                <div class="hidden md:block w-[15px] h-[15px] rounded-full bg-[#5c5c5c] mr-[20px]">
                                </div>
                                <p
                                    class="open-sans-bold md:open-sans-regular text-[16px] text-[#242424] tracking-[2%] border-b-1 md:border-b-0">
                                    <?= ($value_8_title ?? 'Keunggulan Operasional') ?>
                                </p>
                            </div>
                            <div class="w-full md:pl-[35px]">
                                <p class="open-sans-regular text-[16px] text-[#242424] tracking-[2%]">
                                    <?= ($value_8_description ?? 'Kami terus menyempurnakan proses dan sistem kerja untuk memberikan hasil terbaik secara efisien dan konsisten.') ?>
                                </p>
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
                                    <?= ($value_7_title ?? 'Fokus pada Pelanggan') ?></p>
                            </div>
                            <div class="w-full md:pl-[35px]">
                                <p class="open-sans-regular text-[16px] text-[#242424] tracking-[2%]">
                                    <?= ($value_7_description ?? 'Kami mendengarkan kebutuhan pelanggan dan menjadikannya pusat dari setiap keputusan dan pengembangan produk.') ?>
                                </p>
                            </div>
                        </div>
                        <div class="w-full col-span-2">
                            <div class="flex w-full items-center justify-start mb-[8px]">
                                <div class="hidden md:block w-[15px] h-[15px] rounded-full bg-[#5c5c5c] mr-[20px]">
                                </div>
                                <p
                                    class="open-sans-bold md:open-sans-regular text-[16px] text-[#242424] tracking-[2%] border-b-1 md:border-b-0">
                                    <?= ($value_8_title ?? 'Keunggulan Operasional') ?></p>
                            </div>
                            <div class="w-full md:pl-[35px]">
                                <p class="open-sans-regular text-[16px] text-[#242424] tracking-[2%]">
                                    <?= ($value_8_description ?? 'Kami terus menyempurnakan proses dan sistem kerja untuk memberikan hasil terbaik secara efisien dan konsisten.') ?>
                                </p>
                            </div>
                        </div>
                        <div class="col-span-1"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="legality-section"
    class="w-full relative md:min-h-screen flex flex-col items-center justify-center px-5 pb-[200px]">

    <?= view('components/texts/title/title_group', ['id' => 'vision-title-default', 'class' => 'block lg:hidden mb-[60px] text-center', 'top_title' => ($legality_top_title ?? 'Kami Sudah'), 'bottom_title' => ($legality_bottom_title ?? 'Terdaftar Resmi')]) ?>

    <div
        class="w-full 2xl:w-[80vw] max-w-[1200px] grid grid-cols-1 lg:grid-cols-2 gap-y-[60px] md:gap-x-[60px] lg:gap-x-[100px] md:px-15 xl:px-0">
        <div>
            <img src="/images/about_us_page/aboutus9.png" alt="Produk karya pilar nusantara yang muncul dari box"
                class="w-full h-auto">
        </div>
        <div class="flex flex-col items-start justify-center">

            <?= view('components/texts/title/title_group', ['id' => 'vision-title-lg', 'class' => 'hidden lg:block w-full mb-[54px] text-start', 'top_title' => $legality_top_title ?? 'Kami Sudah', 'bottom_title' => $legality_bottom_title ?? 'Terdaftar Resmi']) ?>


            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-1 gap-y-[51px] gap-x-[50px] w-full">
                <div>
                    <p class="ubuntu-bold text-[18px] text-[#242424] mb-[20px] lg:mb-[30px]">
                        <?= ($company_info_title ?? 'Informasi Perusahaan') ?>
                    </p>
                    <div class="flex flex-col space-y-[14px]">
                        <div class="flex flex-col">
                            <div class="flex items-center justify-start">
                                <div class="w-[12px] h-[12px] bg-[#2563EB] rounded-full mr-[12px]"></div>
                                <p class="open-sans-regular text-[16px] text-[#242424] ">
                                    <?= ($company_name_title ?? 'Nama Badan Usaha:') ?></p>
                                <p class="hidden lg:block open-sans-bold text-[16px] text-[#242424] pl-[4px]">PT
                                    Karya Pilar Nusantara</p>
                            </div>
                            <p class="lg:hidden open-sans-bold text-[16px] text-[#242424] pl-[24px]">PT Karya Pilar
                                Nusantara</p>
                        </div>
                        <div class="flex flex-col">
                            <div class="flex items-center justify-start">
                                <div class="w-[12px] h-[12px] bg-[#2563EB] rounded-full mr-[12px]"></div>
                                <p class="open-sans-regular text-[16px] text-[#242424] ">
                                    <?= ($company_id_title ?? 'Nomor Induk Berusaha (NIB):') ?>
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
                                <p class="open-sans-regular text-[16px] text-[#242424] ">
                                    <?= ($company_type_title ?? 'Bentuk Usaha:') ?></p>
                                <p class="hidden lg:block open-sans-bold text-[16px] text-[#242424] pl-[4px]">
                                    Perseroan Terbatas (PT)</p>
                            </div>
                            <p class="lg:hidden open-sans-bold text-[16px] text-[#242424] pl-[24px]">Perseroan
                                Terbatas (PT)</p>
                        </div>
                    </div>
                </div>
                <div>
                    <p class="ubuntu-bold text-[18px] text-[#242424] mb-[20px] lg:mb-[30px]">
                        <?= ($company_contact_title ?? 'Kontak & Lokasi') ?></p>
                    <div class="flex flex-col space-y-[14px]">
                        <div class="flex flex-col">
                            <div class="flex items-center justify-start">
                                <div class="w-[12px] h-[12px] bg-[#2563EB] rounded-full mr-[12px]"></div>
                                <p class="open-sans-regular text-[16px] text-[#242424] ">
                                    <?= ($company_address_title ?? 'Alamat:') ?></p>
                                <p class="hidden lg:block open-sans-bold text-[16px] text-[#242424] pl-[4px]">
                                    Pergudangan Safe n Lock, Sidoarjo</p>
                            </div>
                            <p class="lg:hidden open-sans-bold text-[16px] text-[#242424] pl-[24px]">Pergudangan
                                Safe n Lock, Sidoarjo</p>
                        </div>
                        <div class="flex flex-col">
                            <div class="flex items-center justify-start">
                                <div class="w-[12px] h-[12px] bg-[#2563EB] rounded-full mr-[12px]"></div>
                                <p class="open-sans-regular text-[16px] text-[#242424] ">
                                    <?= ($company_email_title ?? 'Email:') ?></p>
                                <p class="hidden lg:block open-sans-bold text-[16px] text-[#242424] pl-[4px]">
                                    pt.karyapilarnusantara@gmail.com</p>
                            </div>
                            <p class="lg:hidden open-sans-bold text-[16px] text-[#242424] pl-[24px]">
                                pt.karyapilarnusantara@gmail.com</p>
                        </div>
                        <div class="flex flex-col">
                            <div class="flex items-center justify-start">
                                <div class="w-[12px] h-[12px] bg-[#2563EB] rounded-full mr-[12px]"></div>
                                <p class="open-sans-regular text-[16px] text-[#242424] ">
                                    <?= ($company_phone_title ?? 'Telepon:') ?></p>
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
    class="w-full relative min-h-screen flex flex-col items-center justify-center px-5 md:px-15 mb-[200px]">

    <?= view('components/texts/title/title_group', ['id' => 'license-title-default', 'class' => 'lg:hidden w-full mb-[54px] text-center', 'top_title' => ($company_license_top_title ?? 'Lisensi & Bidang'), 'bottom_title' => ($company_license_bottom_title ?? 'Operasional')]) ?>


    <div
        class="w-full max-w-[1200px] 2xl:w-[80vw] 2xl:max-w-[1200px] grid grid-cols-1 lg:grid-cols-2 md:gap-x-[60px] lg:gap-x-[100px]">
        <div class="mb-[32px] lg:hidden ">
            <img src="/images/about_us_page/aboutus10.png" alt="Lisensi di atas meja"
                class="w-full h-auto rounded-[20px] md:aspect-square lg:aspect-auto">
        </div>
        <div>

            <?= view('components/texts/title/title_group', ['id' => 'license-title-default', 'class' => 'hidden lg:block w-full mb-[32px] text-start', 'top_title' => ($company_license_top_title ?? 'Lisensi & Bidang'), 'bottom_title' => ($company_license_bottom_title ?? 'Operasional')]) ?>

            <div>
                <p class="open-sans-regular text-[16px] tracking-[4%] text-start w-full mb-[60px] ">
                    <?= ($company_license_sub_title ?? 'Kami menjalankan usaha sesuai ketentuan resmi dan terdaftar dalam sistem OSS dengan KBLI sebagai berikut.') ?>
                </p>
            </div>
            <div>
                <div class="flex">
                    <div class="w-[155px] h-[60px] bg-[#2563EB] flex items-center justify-center">
                        <p class="open-sans-bold text-[16px] text-white">
                            <?= ($company_kbli_code_title ?? 'Kode KBLI') ?></p>
                    </div>
                    <div class="w-full h-[60px] bg-[#2563EB] flex items-center justify-start">
                        <p class="open-sans-bold text-[16px] text-white">
                            <?= ($company_kbli_sector_title ?? 'Nama Bidang Usaha') ?></p>
                    </div>
                </div>
                <div class="flex bg-[#E7EAFC] py-[15px] pr-1">
                    <div class="w-[155px] h-auto flex items-center justify-center">
                        <p class="open-sans-bold text-[16px] text-[#242424]">46599</p>
                    </div>
                    <div class="w-full h-auto  flex items-center justify-start">
                        <p class="open-sans-regular text-[16px] text-w[#242424]">
                            <?= ($company_kbli_1_sector_title ?? 'Perdagangan Besar Mesin, Peralatan Dan Perlengkapan Lainnya') ?>
                        </p>
                    </div>
                </div>
                <div class="flex py-[15px] border-t-[1px] border-b-[1px] border-[#E1E1E1] pr-1">
                    <div class="w-[155px] h-auto  flex items-center justify-center">
                        <p class="open-sans-bold text-[16px] text-[#242424]">46499</p>
                    </div>
                    <div class="w-full h-auto  flex items-center justify-start">
                        <p class="open-sans-regular text-[16px] text-w[#242424]">
                            <?= ($company_kbli_2_sector_title ?? 'Perdagangan Besar Berbagai Barang Dan Perlengkapan Rumah Tangga Lainnya Ytdl') ?>
                        </p>
                    </div>
                </div>
                <div class="flex bg-[#E7EAFC] py-[15px] pr-1">
                    <div class="w-[155px] h-auto flex items-center justify-center">
                        <p class="open-sans-bold text-[16px] text-[#242424]">46414</p>
                    </div>
                    <div class="w-full h-auto flex items-center justify-start">
                        <p class="open-sans-regular text-[16px] text-w[#242424]">
                            <?= ($company_kbli_3_sector_title ?? 'Perdagangan Besar Barang Lainnya Dari Tekstil') ?></p>
                    </div>
                </div>
                <div class="flex py-[15px] border-t-[1px] border-b-[1px] border-[#E1E1E1] pr-1">
                    <div class="w-[155px] h-auto flex items-center justify-center">
                        <p class="open-sans-bold text-[16px] text-[#242424]">46495</p>
                    </div>
                    <div class="w-full h-auto flex items-center justify-start">
                        <p class="open-sans-regular text-[16px] text-w[#242424]">
                            <?= ($company_kbli_4_sector_title ?? 'Perdagangan Besar Alat Permainan Dan Mainan Anak-anak') ?>
                        </p>
                    </div>
                </div>
                <div class="flex bg-[#E7EAFC] py-[15px] pr-1">
                    <div class="w-[155px] h-auto flex items-center justify-center">
                        <p class="open-sans-bold text-[16px] text-[#242424]">46631</p>
                    </div>
                    <div class="w-full h-auto flex items-center justify-start">
                        <p class="open-sans-regular text-[16px] text-w[#242424]">
                            <?= ($company_kbli_5_sector_title ?? 'Perdagangan Besar Barang Logam Untuk Bahan Konstruksi') ?>
                        </p>
                    </div>
                </div>
                <div class="flex py-[15px] border-t-[1px] border-b-[1px] border-[#E1E1E1] pr-1">
                    <div class="w-[155px] h-auto flex items-center justify-center">
                        <p class="open-sans-bold text-[16px] text-[#242424]">46900</p>
                    </div>
                    <div class="w-full h-auto flex items-center justify-start">
                        <p class="open-sans-regular text-[16px] text-w[#242424]">
                            <?= ($company_kbli_6_sector_title ?? 'Perdagangan Besar Berbagai Macam Barang') ?></p>
                    </div>
                </div>
                <div class="flex bg-[#E7EAFC] py-[15px] pr-1">
                    <div class="w-[155px] h-auto flex items-center justify-center">
                        <p class="open-sans-bold text-[16px] text-[#242424]">46492</p>
                    </div>
                    <div class="w-full h-auto flex items-center justify-start">
                        <p class="open-sans-regular text-[16px] text-w[#242424]">
                            <?= ($company_kbli_7_sector_title ?? 'Perdagangan Besar Alat Olahraga') ?></p>
                    </div>
                </div>
                <div class="flex py-[15px] border-t-[1px] border-b-[1px] border-[#E1E1E1] pr-1">
                    <div class="w-[155px] h-auto flex items-center justify-center">
                        <p class="open-sans-bold text-[16px] text-[#242424]">46491</p>
                    </div>
                    <div class="w-full h-auto flex items-center justify-start">
                        <p class="open-sans-regular text-[16px] text-w[#242424]">
                            <?= ($company_kbli_8_sector_title ?? 'Perdagangan Besar Peralatan Dan Perlengkapan Rumah Tangga') ?>
                        </p>
                    </div>
                </div>
                <div class="flex bg-[#E7EAFC] py-[15px] pr-1">
                    <div class="w-[155px] h-auto flex items-center justify-center">
                        <p class="open-sans-bold text-[16px] text-[#242424]">46639</p>
                    </div>
                    <div class="w-full h-auto flex items-center justify-start">
                        <p class="open-sans-regular text-[16px] text-w[#242424]">
                            <?= ($company_kbli_9_sector_title ?? 'Perdagangan Besar Bahan Konstruksi Lainnya') ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="hidden lg:flex w-full h-full items-end justify-center">
            <img src="/images/about_us_page/aboutus10.png" alt="Produk karya pilar nusantara yang muncul dari box"
                class="w-full h-auto rounded-[20px]">
        </div>

    </div>
</section>
<?= view('components/cta_banner') ?>
<div class="mb-[150px]"></div>
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
<?= $this->endSection() ?>
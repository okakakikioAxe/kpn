<?= $this->extend('v2/template/template_v2') ?>

<?= $this->section('header') ?>
<html lang="<?= esc($lang ?? 'id') ?>">
<title><?= esc($meta_title ?? 'Hubungi Kami') ?></title>
<meta name="description"
    content="<?= esc($meta_description ?? 'Hubungi PT Karya Pilar Nusantara (PT KPN) untuk informasi produk dan layanan. Temukan kontak, alamat, telepon, dan email kami di KPN Sidoarjo. Kami siap membantu Anda!') ?>" />
<meta name="keywords"
    content="<?= esc($meta_keyword ?? 'hubungi KPN, kontak PT Karya Pilar Nusantara, kontak PT KPN, alamat KPN Sidoarjo, telepon KPN, email KPN, layanan pelanggan KPN') ?>" />
<?= $this->endsection() ?>

<?= $this->section('content') ?>
<section id="hero-section"
    class="relative flex items-center justify-center min-h-screen w-full bg-cover bg-center lg:py-[200px] bg-[#EBEFFF]">
    <div id="nav-observer" class="absolute top-0 left-0 z-50 h-[200px] w-full bg-transparent"></div>

    <div class="flex w-full h-full items-center justify-center  px-5 md:px-15">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-[60px] 2xl:gap-x-[100px] w-full 2xl:w-[80vw] max-w-[1200px] max-w-3xl-custom">
            <div>
                <div class="flex flex-col h-screen lg:h-full justify-center">
                    <h1
                        class="text-[32px] h-[34px] md:text-[34px] md:h-[38px] xl:text-[42px] xl:h-[45px] 2xl:text-[48px] 2xl:h-[50px] ubuntu-bold text-[#050505] title-shadow mb-[20px]">
                        <?= ($hero_top_title ?? 'Hubungi') ?><span
                            class="text-[#2563EB]"><?= ($hero_bottom_title ?? ' Kami') ?></span></h1>
                    <p class="open-sans-regular text-[16px] text-[#242424] mb-[50px]">
                        <?= ($hero_sub_title ?? 'Hubungi kami untuk mendapatkan update dan promo menarik lainnya') ?>
                    </p>
                    <div class="flex flex-col space-y-[25px] md:space-y-[35px]">
                        <div class="flex items-center">
                            <div>
                                <?= view('components/icons/phone', ['class' => 'w-[16px] md:w-[20px]', 'fill' => '#2563EB']) ?>
                            </div>
                            <div class="pl-[14px] md:pl-[20px]">
                                <p class="ubuntu-regular text-[16px] text-[#242424]"><?= ($phone_title ?? 'Telepon') ?>
                                </p>
                                <p class="open-sans-bold text-[16px] text-[#242424]">+62 821-6005-0005</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div>
                                <?= view('components/icons/envelope_solid', ['class' => 'w-[16px] md:w-[20px]', 'fill' => '#2563EB']) ?>
                            </div>
                            <div class="pl-[14px] md:pl-[20px]">
                                <p class="ubuntu-regular text-[16px] text-[#242424]"><?= ($email_title ?? 'Email') ?>
                                </p>
                                <p class="open-sans-bold text-[16px] text-[#242424]">pt.karyapilarnusantara@gmail.com
                                </p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div>
                                <?= view('components/icons/map', ['class' => 'w-[16px] md:w-[20px]', 'fill' => '#2563EB']) ?>
                            </div>
                            <div class="pl-[14px] md:pl-[20px]">
                                <p class="ubuntu-regular text-[16px] text-[#242424]"><?= ($address_title ?? 'Alamat') ?>
                                </p>
                                <p class="open-sans-bold text-[16px] text-[#242424]">Pergudangan Safe n Lock, Sidoarjo
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <form id="contactForm">
                <div class="pb-[120px] lg:pb-0">
                    <div class="w-full h-auto bg-white rounded-[20px] px-[20px] py-[50px] md:p-[30px] 2xl:p-[50px] ">
                        <p
                            class="lg:w-[282px] ubuntu-bold text-[20px] lg:text-[24px] text-[#242424] leading-7 title-shadow mb-[57px]">
                            <?= ($form_headline ?? 'Terhubung dengan Kami, Hubungi Kami Kapanpun') ?>
                        </p>
                        <div class="grid grid-cols-2 gap-x-[15px] md:gap-x-[35px] mb-[16px]">
                            <div>
                                <label for="name"
                                    class="open-sans-semi-bold text-[16px] text-[#242424] mb-[4px]"><?= ($form_name_title ?? 'Nama') ?></label>
                                <input type="text" autocomplete="name" name="name" id="name" placeholder="mr x" required
                                    class="w-full placeholder:italic border-[1px] border-[#E0E0E0] focus:ring-2 focus:ring-[#2563EB] focus:outline-none rounded-[10px] p-[6px] text-[16px] open-sans-regular text-[#242424]">
                            </div>
                            <div>
                                <label for="unit"
                                    class="open-sans-semi-bold text-[16px] text-[#242424] mb-[4px]"><?= ($form_unit_title ?? 'Unit') ?></label>
                                <input type="text" autocomplete="unit" name="unit" id="unit" required
                                    placeholder="PT Karya Pilar Nusantara"
                                    class="w-full placeholder:italic border-[1px] border-[#E0E0E0] focus:ring-2 focus:ring-[#2563EB] focus:outline-none rounded-[10px] p-[6px] text-[16px] open-sans-regular text-[#242424]">
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-x-[15px] md:gap-x-[35px] mb-[16px]">
                            <div>
                                <label for="email"
                                    class="open-sans-semi-bold text-[16px] text-[#242424] mb-[4px]"><?= ($form_email_title ?? 'Email') ?></label>
                                <div class="relative w-full">

                                    <div
                                        class="absolute inset-y-0 left-0 pl-3 hidden md:flex items-center pointer-events-none">
                                        <?= view('components/icons/envelope', ['class' => 'h-[15px]', 'fill' =>
                                        'black']) ?>
                                    </div>


                                    <input type="email" autocomplete="email" name="email" id="email"
                                        placeholder="email@gmail.com"
                                        class="w-full placeholder:italic border-[1px] border-[#E0E0E0] focus:ring-2 focus:ring-[#2563EB] focus:outline-none rounded-[10px] p-[6px] md:pl-10 text-[16px] open-sans-regular text-[#242424]" />
                                </div>
                            </div>
                            <div class="w-full">
                                <label for="phone"
                                    class="open-sans-semi-bold text-[16px] text-[#242424] mb-[4px]"><?= ($form_phone_title ?? 'No Telepon') ?></label>
                                <div
                                    class="relative hidden md:flex items-center border border-gray-300 rounded-[12px] px-3 py-[6px] focus-within:ring-2 focus-within:ring-blue-500">

                                    <div class="relative">
                                        <button type="button" id="dropdown-button"
                                            class="flex items-center space-x-1 pr-2 text-black focus:outline-none">
                                            <span id="selected-code">ID</span>
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M19 9l-7 7-7-7" />
                                            </svg>
                                        </button>

                                        <ul id="dropdown-menu"
                                            class="hidden absolute z-10 mt-1 bg-white border border-gray-200 rounded shadow-lg w-[30vw] max-w-[140px] max-h-[250px] overflow-y-auto text-[16px] open-sans-regular text-[#242424]">
                                        </ul>
                                    </div>

                                    <input type="text" name="phone" id="phone-mobile"
                                        class="pl-3 w-full outline-none border-none text-gray-700 placeholder-gray-400 bg-transparent"
                                        placeholder="822xxxx" required>
                                </div>

                                <input type="number" autocomplete="phone" name="phone" id="phone"
                                    placeholder="0822xxxxx"
                                    class="md:hidden w-full placeholder:italic border-[1px] border-[#E0E0E0] focus:ring-2 focus:ring-[#2563EB] focus:outline-none rounded-[10px] p-[6px] text-[16px] open-sans-regular text-[#242424]" />

                            </div>
                        </div>
                        <div class="mb-[16px]">
                            <div>
                                <label for="address"
                                    class="open-sans-semi-bold text-[16px] text-[#242424] mb-[4px]"><?= ($form_address_title ?? 'Alamat') ?></label>
                                <input type="text" autocomplete="address-line1" name="address" id="address" required
                                    class="w-full border-[1px] border-[#E0E0E0] focus:ring-2 focus:ring-[#2563EB] focus:outline-none rounded-[10px] p-[6px] text-[16px] open-sans-regular text-[#242424]">
                            </div>
                        </div>
                        <div class="mb-[32px]">
                            <div>
                                <label for="message"
                                    class="open-sans-semi-bold text-[16px] text-[#242424] mb-[4px]"><?= ($form_message_title ?? 'Pesan') ?></label>
                                <textarea type="text" name="message" id="message" required
                                    class="w-full border-[1px] h-[150px] min-h-[38px] max-h-[250px] overflow-y-auto border-[#E0E0E0] focus:ring-2 focus:ring-[#2563EB] focus:outline-none rounded-[10px] p-[6px] text-[16px] open-sans-regular text-[#242424] placeholder:italic"
                                    placeholder="<?= ($form_message_placeholder ?? 'Tulis pesan Anda di sini...') ?>"></textarea>
                            </div>
                        </div>
                        <button type="button" id="contactSubmit" onclick="submitForm()"
                            class=" cursor-pointer bg-blue-600 lg:hover:bg-blue-700 px-[32px] md:px-[34px] transition-colors basic-contact-us-button py-[8px] rounded-[15px]  wa-button"
                            type="button">
                            <div class="flex items-center justify-center w-full">
                                <div class="roboto-bold tracking-wide text-[16px] text-white">
                                    <?= ($form_submit_button_title ?? 'Kirim Pesan') ?></div>
                            </div>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<section id="faq-section" class="w-full min-h-screen flex items-start justify-center">
    <div
        class="w-full h-full 2xl:w-[80vw] max-w-[1200px] max-w-3xl-custom flex flex-col items-center justify-start py-[150px] px-5 md:px-15 2xl:px-0">
        <h2
            class="text-[32px] h-[34px] md:text-[34px] md:h-[38px] xl:text-[38px] xl:h-[40px] 2xl:text-[40px] 2xl:h-[40px] text-center ubuntu-bold text-[#050505] title-shadow mb-[60px] ld:mb-[80px]">
            <?= ($faq_title ?? 'FAQ') ?></h2>
        <div class="w-full border-[1px] border-[#ECECEC] rounded-[20px] px-[25px] py-[30px] mb-[16px]"
            style="box-shadow: 0 2px 2.5px 0 rgba(101, 101, 101, 0.10);">
            <p class="open-sans-bold text-[18px] text-[#242424] mb-[14px]">
                <?= ($question_1 ?? 'Apakah produk bebas BPA?') ?></p>
            <p class="open-sans-regular text-[16px] text-[#242424]">
                <?= ($answer_1 ?? 'Ya, produk kami yang berkaitan dengan anak-anak seperti playmat, perosotan, dan mainan anak, dibuat dari bahan bebas BPA sehingga aman digunakan.') ?>
            </p>
        </div>
        <div class="w-full border-[1px] border-[#ECECEC] rounded-[20px] px-[25px] py-[30px] mb-[16px]"
            style="box-shadow: 0 2px 2.5px 0 rgba(101, 101, 101, 0.10);">
            <p class="open-sans-bold text-[18px] text-[#242424] mb-[14px]">
                <?= ($question_2 ?? 'Apakah bisa custom merk sendiri?') ?></p>
            <p class="open-sans-regular text-[16px] text-[#242424]">
                <?= ($answer_2 ?? 'Tentu! Kami menyediakan layanan custom logo sesuai kebutuhan bisnis Anda. Hubungi kami untuk detail lebih lanjut.') ?>
            </p>
        </div>
        <div class="w-full border-[1px] border-[#ECECEC] rounded-[20px] px-[25px] py-[30px] mb-[16px]"
            style="box-shadow: 0 2px 2.5px 0 rgba(101, 101, 101, 0.10);">
            <p class="open-sans-bold text-[18px] text-[#242424] mb-[14px]">
                <?= ($question_3 ?? 'Apakah pengiriman bisa ke seluruh Indonesia?') ?>
            </p>
            <p class="open-sans-regular text-[16px] text-[#242424]">
                <?= ($answer_3 ?? 'Ya, kami melayani pengiriman ke seluruh Indonesia dan mendukung semua ekspedisi, termasuk JNE, J&T, SiCepat, POS Indonesia, Indah Cargo, dan lainnya.') ?>
            </p>
        </div>
        <div class="w-full border-[1px] border-[#ECECEC] rounded-[20px] px-[25px] py-[30px] mb-[16px]"
            style="box-shadow: 0 2px 2.5px 0 rgba(101, 101, 101, 0.10);">
            <p class="open-sans-bold text-[18px] text-[#242424] mb-[14px]">
                <?= ($question_4 ?? 'Apakah ada harga khusus untuk pembelian dalam jumlah besar?') ?></p>
            <p class="open-sans-regular text-[16px] text-[#242424]">
                <?= ($answer_4 ?? 'Tentu, silakan hubungi tim marketing kami untuk mendapatkan penawaran terbaik. Hubungi kami melalui WhatsApp di +62 821-6005-0005 atau email pt.karyapilarnusantara@gmail.com.') ?>
            </p>
        </div>
    </div>
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
    // dropdown kode nomor
    const regions = [{
            code: 'AF',
            prefix: '+93'
        },
        {
            code: 'AX',
            prefix: '+358'
        },
        {
            code: 'AL',
            prefix: '+355'
        },
        {
            code: 'DZ',
            prefix: '+213'
        },
        {
            code: 'AS',
            prefix: '+1684'
        },
        {
            code: 'AD',
            prefix: '+376'
        },
        {
            code: 'AO',
            prefix: '+244'
        },
        {
            code: 'AI',
            prefix: '+1264'
        },
        {
            code: 'AQ',
            prefix: '+672'
        },
        {
            code: 'AG',
            prefix: '+1268'
        },
        {
            code: 'AR',
            prefix: '+54'
        },
        {
            code: 'AM',
            prefix: '+374'
        },
        {
            code: 'AW',
            prefix: '+297'
        },
        {
            code: 'AU',
            prefix: '+61'
        },
        {
            code: 'AT',
            prefix: '+43'
        },
        {
            code: 'AZ',
            prefix: '+994'
        },
        {
            code: 'BS',
            prefix: '+1242'
        },
        {
            code: 'BH',
            prefix: '+973'
        },
        {
            code: 'BD',
            prefix: '+880'
        },
        {
            code: 'BB',
            prefix: '+1246'
        },
        {
            code: 'BY',
            prefix: '+375'
        },
        {
            code: 'BE',
            prefix: '+32'
        },
        {
            code: 'BZ',
            prefix: '+501'
        },
        {
            code: 'BJ',
            prefix: '+229'
        },
        {
            code: 'BM',
            prefix: '+1441'
        },
        {
            code: 'BT',
            prefix: '+975'
        },
        {
            code: 'BO',
            prefix: '+591'
        },
        {
            code: 'BA',
            prefix: '+387'
        },
        {
            code: 'BW',
            prefix: '+267'
        },
        {
            code: 'BR',
            prefix: '+55'
        },
        {
            code: 'IO',
            prefix: '+246'
        },
        {
            code: 'BN',
            prefix: '+673'
        },
        {
            code: 'BG',
            prefix: '+359'
        },
        {
            code: 'BF',
            prefix: '+226'
        },
        {
            code: 'BI',
            prefix: '+257'
        },
        {
            code: 'KH',
            prefix: '+855'
        },
        {
            code: 'CM',
            prefix: '+237'
        },
        {
            code: 'CA',
            prefix: '+1'
        },
        {
            code: 'CV',
            prefix: '+238'
        },
        {
            code: 'KY',
            prefix: '+345'
        },
        {
            code: 'CF',
            prefix: '+236'
        },
        {
            code: 'TD',
            prefix: '+235'
        },
        {
            code: 'CL',
            prefix: '+56'
        },
        {
            code: 'CN',
            prefix: '+86'
        },
        {
            code: 'CX',
            prefix: '+61'
        },
        {
            code: 'CC',
            prefix: '+61'
        },
        {
            code: 'CO',
            prefix: '+57'
        },
        {
            code: 'KM',
            prefix: '+269'
        },
        {
            code: 'CK',
            prefix: '+682'
        },
        {
            code: 'CR',
            prefix: '+506'
        },
        {
            code: 'CI',
            prefix: '+225'
        },
        {
            code: 'HR',
            prefix: '+385'
        },
        {
            code: 'CU',
            prefix: '+53'
        },
        {
            code: 'CY',
            prefix: '+357'
        },
        {
            code: 'CZ',
            prefix: '+420'
        },
        {
            code: 'CD',
            prefix: '+243'
        },
        {
            code: 'CG',
            prefix: '+242'
        },
        {
            code: 'DK',
            prefix: '+45'
        },
        {
            code: 'DJ',
            prefix: '+253'
        },
        {
            code: 'DM',
            prefix: '+1767'
        },
        {
            code: 'DO',
            prefix: '+1849'
        },
        {
            code: 'EC',
            prefix: '+593'
        },
        {
            code: 'EG',
            prefix: '+20'
        },
        {
            code: 'SV',
            prefix: '+503'
        },
        {
            code: 'GQ',
            prefix: '+240'
        },
        {
            code: 'ER',
            prefix: '+291'
        },
        {
            code: 'EE',
            prefix: '+372'
        },
        {
            code: 'ET',
            prefix: '+251'
        },
        {
            code: 'FK',
            prefix: '+500'
        },
        {
            code: 'FO',
            prefix: '+298'
        },
        {
            code: 'FJ',
            prefix: '+679'
        },
        {
            code: 'FI',
            prefix: '+358'
        },
        {
            code: 'FR',
            prefix: '+33'
        },
        {
            code: 'GF',
            prefix: '+594'
        },
        {
            code: 'PF',
            prefix: '+689'
        },
        {
            code: 'GA',
            prefix: '+241'
        },
        {
            code: 'GM',
            prefix: '+220'
        },
        {
            code: 'GE',
            prefix: '+995'
        },
        {
            code: 'DE',
            prefix: '+49'
        },
        {
            code: 'GH',
            prefix: '+233'
        },
        {
            code: 'GI',
            prefix: '+350'
        },
        {
            code: 'GR',
            prefix: '+30'
        },
        {
            code: 'GL',
            prefix: '+299'
        },
        {
            code: 'GD',
            prefix: '+1473'
        },
        {
            code: 'GP',
            prefix: '+590'
        },
        {
            code: 'GU',
            prefix: '+1671'
        },
        {
            code: 'GT',
            prefix: '+502'
        },
        {
            code: 'GN',
            prefix: '+224'
        },
        {
            code: 'GW',
            prefix: '+245'
        },
        {
            code: 'GY',
            prefix: '+592'
        },
        {
            code: 'HT',
            prefix: '+509'
        },
        {
            code: 'VA',
            prefix: '+379'
        },
        {
            code: 'HN',
            prefix: '+504'
        },
        {
            code: 'HK',
            prefix: '+852'
        },
        {
            code: 'HU',
            prefix: '+36'
        },
        {
            code: 'IS',
            prefix: '+354'
        },
        {
            code: 'IN',
            prefix: '+91'
        },
        {
            code: 'ID',
            prefix: '+62'
        },
        {
            code: 'IR',
            prefix: '+98'
        },
        {
            code: 'IQ',
            prefix: '+964'
        },
        {
            code: 'IE',
            prefix: '+353'
        },
        {
            code: 'IL',
            prefix: '+972'
        },
        {
            code: 'IT',
            prefix: '+39'
        },
        {
            code: 'JM',
            prefix: '+1876'
        },
        {
            code: 'JP',
            prefix: '+81'
        },
        {
            code: 'JO',
            prefix: '+962'
        },
        {
            code: 'KZ',
            prefix: '+7'
        },
        {
            code: 'KE',
            prefix: '+254'
        },
        {
            code: 'KI',
            prefix: '+686'
        },
        {
            code: 'KW',
            prefix: '+965'
        },
        {
            code: 'KG',
            prefix: '+996'
        },
        {
            code: 'LA',
            prefix: '+856'
        },
        {
            code: 'LV',
            prefix: '+371'
        },
        {
            code: 'LB',
            prefix: '+961'
        },
        {
            code: 'LS',
            prefix: '+266'
        },
        {
            code: 'LR',
            prefix: '+231'
        },
        {
            code: 'LY',
            prefix: '+218'
        },
        {
            code: 'LI',
            prefix: '+423'
        },
        {
            code: 'LT',
            prefix: '+370'
        },
        {
            code: 'LU',
            prefix: '+352'
        },
        {
            code: 'MO',
            prefix: '+853'
        },
        {
            code: 'MK',
            prefix: '+389'
        },
        {
            code: 'MG',
            prefix: '+261'
        },
        {
            code: 'MW',
            prefix: '+265'
        },
        {
            code: 'MY',
            prefix: '+60'
        },
        {
            code: 'MV',
            prefix: '+960'
        },
        {
            code: 'ML',
            prefix: '+223'
        },
        {
            code: 'MT',
            prefix: '+356'
        },
        {
            code: 'MH',
            prefix: '+692'
        },
        {
            code: 'MQ',
            prefix: '+596'
        },
        {
            code: 'MR',
            prefix: '+222'
        },
        {
            code: 'MU',
            prefix: '+230'
        },
        {
            code: 'YT',
            prefix: '+262'
        },
        {
            code: 'MX',
            prefix: '+52'
        },
        {
            code: 'FM',
            prefix: '+691'
        },
        {
            code: 'MD',
            prefix: '+373'
        },
        {
            code: 'MC',
            prefix: '+377'
        },
        {
            code: 'MN',
            prefix: '+976'
        },
        {
            code: 'ME',
            prefix: '+382'
        },
        {
            code: 'MS',
            prefix: '+1664'
        },
        {
            code: 'MA',
            prefix: '+212'
        },
        {
            code: 'MZ',
            prefix: '+258'
        },
        {
            code: 'MM',
            prefix: '+95'
        },
        {
            code: 'NA',
            prefix: '+264'
        },
        {
            code: 'NR',
            prefix: '+674'
        },
        {
            code: 'NP',
            prefix: '+977'
        },
        {
            code: 'NL',
            prefix: '+31'
        },
        {
            code: 'NC',
            prefix: '+687'
        },
        {
            code: 'NZ',
            prefix: '+64'
        },
        {
            code: 'NI',
            prefix: '+505'
        },
        {
            code: 'NE',
            prefix: '+227'
        },
        {
            code: 'NG',
            prefix: '+234'
        },
        {
            code: 'NU',
            prefix: '+683'
        },
        {
            code: 'KP',
            prefix: '+850'
        },
        {
            code: 'MP',
            prefix: '+1670'
        },
        {
            code: 'NO',
            prefix: '+47'
        },
        {
            code: 'OM',
            prefix: '+968'
        },
        {
            code: 'PK',
            prefix: '+92'
        },
        {
            code: 'PW',
            prefix: '+680'
        },
        {
            code: 'PA',
            prefix: '+507'
        },
        {
            code: 'PG',
            prefix: '+675'
        },
        {
            code: 'PY',
            prefix: '+595'
        },
        {
            code: 'PE',
            prefix: '+51'
        },
        {
            code: 'PH',
            prefix: '+63'
        },
        {
            code: 'PL',
            prefix: '+48'
        },
        {
            code: 'PT',
            prefix: '+351'
        },
        {
            code: 'PR',
            prefix: '+1787'
        },
        {
            code: 'QA',
            prefix: '+974'
        },
        {
            code: 'RE',
            prefix: '+262'
        },
        {
            code: 'RO',
            prefix: '+40'
        },
        {
            code: 'RU',
            prefix: '+7'
        },
        {
            code: 'RW',
            prefix: '+250'
        },
        {
            code: 'SH',
            prefix: '+290'
        },
        {
            code: 'KN',
            prefix: '+1869'
        },
        {
            code: 'LC',
            prefix: '+1758'
        },
        {
            code: 'PM',
            prefix: '+508'
        },
        {
            code: 'VC',
            prefix: '+1784'
        },
        {
            code: 'WS',
            prefix: '+685'
        },
        {
            code: 'SM',
            prefix: '+378'
        },
        {
            code: 'ST',
            prefix: '+239'
        },
        {
            code: 'SA',
            prefix: '+966'
        },
        {
            code: 'SN',
            prefix: '+221'
        },
        {
            code: 'RS',
            prefix: '+381'
        },
        {
            code: 'SC',
            prefix: '+248'
        },
        {
            code: 'SL',
            prefix: '+232'
        },
        {
            code: 'SG',
            prefix: '+65'
        },
        {
            code: 'SX',
            prefix: '+1721'
        },
        {
            code: 'SK',
            prefix: '+421'
        },
        {
            code: 'SI',
            prefix: '+386'
        },
        {
            code: 'SB',
            prefix: '+677'
        },
        {
            code: 'SO',
            prefix: '+252'
        },
        {
            code: 'ZA',
            prefix: '+27'
        },
        {
            code: 'KR',
            prefix: '+82'
        },
        {
            code: 'SS',
            prefix: '+211'
        },
        {
            code: 'ES',
            prefix: '+34'
        },
        {
            code: 'LK',
            prefix: '+94'
        },
        {
            code: 'SD',
            prefix: '+249'
        },
        {
            code: 'SR',
            prefix: '+597'
        },
        {
            code: 'SZ',
            prefix: '+268'
        },
        {
            code: 'SE',
            prefix: '+46'
        },
        {
            code: 'CH',
            prefix: '+41'
        },
        {
            code: 'SY',
            prefix: '+963'
        },
        {
            code: 'TW',
            prefix: '+886'
        },
        {
            code: 'TJ',
            prefix: '+992'
        },
        {
            code: 'TZ',
            prefix: '+255'
        },
        {
            code: 'TH',
            prefix: '+66'
        },
        {
            code: 'TG',
            prefix: '+228'
        },
        {
            code: 'TO',
            prefix: '+676'
        },
        {
            code: 'TT',
            prefix: '+1868'
        },
        {
            code: 'TN',
            prefix: '+216'
        },
        {
            code: 'TR',
            prefix: '+90'
        },
        {
            code: 'TM',
            prefix: '+993'
        },
        {
            code: 'TC',
            prefix: '+1649'
        },
        {
            code: 'TV',
            prefix: '+688'
        },
        {
            code: 'UG',
            prefix: '+256'
        },
        {
            code: 'UA',
            prefix: '+380'
        },
        {
            code: 'AE',
            prefix: '+971'
        },
        {
            code: 'GB',
            prefix: '+44'
        },
        {
            code: 'US',
            prefix: '+1'
        },
        {
            code: 'UY',
            prefix: '+598'
        },
        {
            code: 'UZ',
            prefix: '+998'
        },
        {
            code: 'VU',
            prefix: '+678'
        },
        {
            code: 'VE',
            prefix: '+58'
        },
        {
            code: 'VN',
            prefix: '+84'
        },
        {
            code: 'WF',
            prefix: '+681'
        },
        {
            code: 'YE',
            prefix: '+967'
        },
        {
            code: 'ZM',
            prefix: '+260'
        },
        {
            code: 'ZW',
            prefix: '+263'
        }
    ];

    const dropdown = document.getElementById('dropdown-menu');
    dropdown.innerHTML = regions.map(r =>
        `<li class="px-3 py-2 hover:bg-gray-100 cursor-pointer" data-code="${r.code}" data-prefix="${r.prefix}">${r.code} (${r.prefix})</li>`
    ).join('');


    function submitForm() {
        const name = document.getElementById("name").value;
        const email = document.getElementById("email").value;
        const phoneNumber = document.getElementById("phone").value;
        const address = document.getElementById("address").value;
        const instantion = document.getElementById("unit").value;
        const message = document.getElementById("message").value;
        let templateMessage =
            `Halo, saya ` +
            name +
            ` dari ` +
            instantion +
            ` (` + address + `) ` +
            `ingin bertanya tentang ` +
            message +
            `. Untuk menghubungi saya melalui nomor telepon ` +
            phoneNumber;

        email == "" ?
            (templateMessage += ". Terima kasih.") :
            (templateMessage += ` atau email ` + email + `. Terima kasih.`);


        const whatsappURL =
            `https://api.whatsapp.com/send?phone=6282160050005&text=${encodeURIComponent(templateMessage)}`;

        window.open(whatsappURL, "_blank");
        // alert(whatsappURL)
    }
</script>
<?= $this->endSection() ?>


<?= $this->section('script') ?>
<script>
    const dropdownBtn = document.getElementById('dropdown-button');
    const dropdownMenu = document.getElementById('dropdown-menu');
    const selectedCode = document.getElementById('selected-code');
    const phoneInput = document.getElementById('phone');

    // Toggle menu
    dropdownBtn.addEventListener('click', () => {
        dropdownMenu.classList.toggle('hidden');
    });

    // Select country
    dropdownMenu.querySelectorAll('li').forEach(item => {
        item.addEventListener('click', () => {
            const code = item.getAttribute('data-code');
            const prefix = item.getAttribute('data-prefix');

            selectedCode.textContent = code;
            phoneInput.value = prefix + ' ';
            dropdownMenu.classList.add('hidden');
        });
    });

    // Close dropdown when clicking outside
    document.addEventListener('click', (e) => {
        if (!dropdownBtn.contains(e.target) && !dropdownMenu.contains(e.target)) {
            dropdownMenu.classList.add('hidden');
        }
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const faqContents = document.querySelectorAll('.faq-content');

        faqContents.forEach(content => {
            content.dataset.height = content.scrollHeight + "px"; // Store actual height
            content.style.height = "0px"; // Collapse initially
        });
    });

    function toggleFAQ(index) {
        const content = document.querySelectorAll('.faq-content')[index];
        const iconContainer = document.querySelectorAll('.icon-container')[index];

        if (content.style.height === "0px") {
            content.style.height = content.dataset.height; // Expand
            content.style.opacity = "1"; // Fade in text
            iconContainer.innerHTML = `
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M20 12H4"></path>
                    </svg>`; // Switch to minus
        } else {
            content.style.height = "0px"; // Collapse
            content.style.opacity = "0"; // Fade out text
            iconContainer.innerHTML = `
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m-8-8h16"></path>
                    </svg>`; // Switch back to plus
        }
    }

    function smoothScrollTo(targetY, duration = 1000) {
        const startY = window.scrollY;
        const difference = targetY - startY;
        const startTime = performance.now();

        function step(currentTime) {
            const elapsedTime = currentTime - startTime;
            const progress = Math.min(elapsedTime / duration, 1);
            const easedProgress =
                progress < 0.5 ?
                2 * progress * progress :
                1 - Math.pow(-2 * progress + 2, 2) / 2;

            window.scrollTo(0, startY + difference * easedProgress);

            if (elapsedTime < duration) {
                requestAnimationFrame(step);
            }
        }
        requestAnimationFrame(step);
    }
</script>

<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Corporation",
        "name": "PT Karya Pilar Nusantara",
        "alternateName": "KPN",
        "description": "Mitra pengadaan terpercaya untuk berbagai macam kebutuhan Anda, mulai dari alat olahraga hingga infrastruktur dengan kualitas premium",
        "url": "https://www.karyapilarnusantara.com",
        "logo": "https://www.karyapilarnusantara.com/kpn-logo.png",
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+62 821-6005-0005",
            "contactType": "customer service",
            "contactOption": "TollFree",
            "areaServed": "ID",
            "availableLanguage": "Indonesian"
        }
    }
</script>
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [{
            "@type": "Question",
            "name": "Apakah produk bebas BPA?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Ya, produk kami yang berkaitan dengan anak-anak seperti playmat, perosotan, dan mainan anak, dibuat dari bahan bebas BPA sehingga aman digunakan."
            }
        }, {
            "@type": "Question",
            "name": "Apakah bisa custom merk sendiri?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Tentu! Kami menyediakan layanan custom branding sesuai kebutuhan bisnis Anda. Hubungi kami untuk detail lebih lanjut."
            }
        }, {
            "@type": "Question",
            "name": "Apakah pengiriman bisa ke seluruh Indonesia?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Ya, kami melayani pengiriman ke seluruh Indonesia dan mendukung semua ekspedisi, termasuk JNE, J&T, SiCepat, POS Indonesia, Indah Cargo, dan lainnya."
            }
        }, {
            "@type": "Question",
            "name": "Apakah ada harga khusus untuk pembelian dalam jumlah besar?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Tentu, silakan hubungi tim marketing kami untuk mendapatkan penawaran terbaik. Hubungi kami melalui WhatsApp di +62 821-6005-0005 atau email admin@karyapilarnusantara.com."
            }
        }]
    }
</script>
<script>
    // Developed by lukmanmuhamadilham@gmail.com 01/06/2025
</script>
<?= $this->endSection() ?>
<nav id="navbar"
    class="fixed top-0 inset-x-0 z-50 transition-all duration-300 ease-in-out bg-transparent">
    <div class="max-w-7xl mx-auto p-4 lg:px-0 flex justify-between">
        <a href="/" class="font-heading text-xl flex">
            <img id="navbar-logo" width="47" height="30" src="/images/white-logo-no-text-compressed.png"
                alt="Logo Karya Pilar Nusantara tanpa warna"
                class="w-[46px] h-[30px] transition-filter duration-300 ease-in-out filter brightness-0 invert">
            <span class="font-heading font-bold text-[18px]">PT KARYA PILAR NUSANTARA</span>
        </a>
        <div id="navbar-link" class="space-x-4 text-nav-">
            <a href="/"><?= lang('Navbar.home') ?></a>
            <a href="/product"><?= lang('Navbar.product') ?></a>
            <a href="/about"><?= lang('Navbar.about_us') ?></a>
            <a href="/contact"><?= lang('Navbar.contact_us') ?></a>
            <a href="/galery"><?= lang('Navbar.galery') ?></a>
        </div>
    </div>
</nav>
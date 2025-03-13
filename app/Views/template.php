<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hello World</title>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- <script src="https://unpkg.com/@tailwindcss/browser@4"></script> -->
    <link rel="stylesheet" href="output.css">
    <link href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/global_style.css">
    <style>
        .nav-link.active {
            border-color: white;
            /* Add border to selected link */
        }
    </style>
    <?= $this->renderSection('style') ?>
</head>

<body class="bg-white">
    <header>
        <!-- ---------------------------- Nav Bar ------------------------------------- -->
        <nav class="bg-gray-800 fixed top-0 left-0 w-full h-16 z-50 flex justify-center">
            <div class="w-full max-w-[1600px] sm:mx-[25px]">
                <div class="relative flex h-16 items-center justify-between">
                    <div class="flex flex-1 items-center sm:items-stretch sm:justify-start">
                        <!-- Logo di kiri -->
                        <div class="flex shrink-0 items-center ml-[25px] sm:ml-0">
                            <img class="h-8 w-auto" src="white logo.png" alt="Your Company">
                        </div>
                        <div class="hidden sm:ml-6 sm:block ">
                            <div class="flex space-x-4">
                                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                                <a href="/" class="nav-link rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Beranda</a> </a>
                                <a href="/product" class="nav-link rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Produk</a>
                                <a href="/contact-us" class="nav-link rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Hubungi Kami</a>
                                <a href="/about-us" class="nav-link rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Tentang Kami</a>
                                <a href="/galery" class="nav-link rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Galery</a>
                            </div>
                        </div>
                    </div>

                    <!-- Mobile menu button (dipindah ke kanan) -->
                    <div class="absolute inset-y-0 right-0 flex items-center pr-[25px] sm:hidden">
                        <button onclick="toggleMenu()" type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:ring-2 focus:ring-white focus:outline-none focus:ring-inset">
                            <span class="absolute -inset-0.5"></span>
                            <span class="sr-only">Open main menu</span>
                            <!-- Open Menu Icon -->
                            <svg id="open-menu-icon" class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                            <!-- Close Menu Icon -->
                            <svg id="close-menu-icon" class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Mobile Menu -->
        <div
            id="mobile-menu"
            class="fixed top-16 right-0 w-screen h-screen bg-gray-800 shadow-lg sm:hidden translate-x-full transition-transform duration-300 overflow-y-auto z-20">
            <div class="space-y-1 px-4 pt-4">
                <a href="/" class="nav-link nav-link-mobile block rounded-md px-4 py-3 text-lg font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Beranda</a>
                <a href="/product" class="nav-link nav-link-mobile block rounded-md px-4 py-3 text-lg font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Produk</a>
                <a href="/contact-us" class="nav-link nav-link-mobile block rounded-md px-4 py-3 text-lg font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Hubungi Kami</a>
                <a href="/about-us" class="nav-link nav-link-mobile block rounded-md px-4 py-3 text-lg font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Tentang Kami</a>
                <a href="/galery" class="nav-link nav-link-mobile block rounded-md px-4 py-3 text-lg font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Galery</a>
            </div>
        </div>

        <!-- ---------------------------- End of Nav Bar ---------------------------- -->
    </header>

    <div class="h-16"></div>

    <div class="absolute z-10 w-full bg-white">
        <main class="bg-container">
            <?= $this->renderSection('content') ?>
        </main>

        <footer class="flex justify-center  bg-[#07172C]">
            <div class="bg-[#07172C] p-[24px] max-w-[1600px]">
                <img loading="lazy" class="w-[110px] h-auto" src="white logo.png" alt="Logo KPN warna putih">

                <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-[44px] mt-[46px]">
                    <p class="text-start text-white text-[18px] font-humanist-normal tracking-wide">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lectus elit, euismod id neque in, luctus ornare nunc. Nullam eu libero sed ipsum blandit mattis id sed nisi. In varius mauris at ante scelerisque commodo. Suspendisse porta velit purus, non mattis tortor elementum ac. Integer ut mi iaculis, dictum lorem vel, rutrum urna. Quisque sit amet</p>
                    <div class="grid grid-cols-2">
                        <div class="grid grid-flow-col grid-rows-4 gap-[22px] sm:justify-center">
                            <h3 class="text-white text-[22px] font-trebuchet -tracking-[0.02em] font-[500]">Perusahaan</h3>
                            <a class="text-white text-[18px] font-trebuchet -tracking-[0.02em] font-extralight" src="#">Tentang</a>
                            <a class="text-white text-[18px] font-trebuchet -tracking-[0.02em] font-extralight" src="#">Produk</a>
                            <a class="text-white text-[18px] font-trebuchet -tracking-[0.02em] font-extralight" src="#">Galery</a>
                        </div>
                        <div class="grid grid-flow-col grid-rows-4 gap-[22px] sm:justify-center">
                            <h3 class="text-white text-[22px] font-trebuchet -tracking-[0.02em] font-[500]">Hubungi Kami</h3>
                            <a class="text-white text-[18px] font-trebuchet -tracking-[0.02em] font-extralight" src="#">Kontak</a>
                            <a class="text-white text-[18px] font-trebuchet -tracking-[0.02em] font-extralight" src="#">Lokasi Kami</a>
                        </div>
                    </div>
                    <div class="hidden xl:block w-full h-[30px] ">
                        <div class="w-full h-auto flex  items-center">
                            <img loading="lazy" class="w-[37px] h-[37px] mr-[30px]" src="translate_icon.png" alt="translate icon">
                            <div class="relative w-full">

                                <button id="dropdownButton1" class="px-[23px] py-[8px] text-white rounded-full border-[1px] border-white w-full">
                                    <div class="flex">
                                        <p class="grow text-[18px] font-trebuchet -tracking-[0.02em]">Bahasa Indonesia</p>
                                        <p class="w-[30px]">
                                            <svg id="dropdownIcon1" xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 transition-transform duration-300 transform" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                            </svg>
                                        </p>
                                    </div>
                                </button>


                                <div id="dropdownMenu1"
                                    class="absolute mt-5 w-full bg-[#182430] shadow-lg rounded-xl opacity-0 scale-95 transition-all duration-300 transform origin-top invisible">
                                    <a href="#" class="block px-4 py-3 text-white hover:bg-gray-200 text-[18px] font-trebuchet -tracking-[0.02em] font-[400]">Bahasa Indonesia</a>
                                    <a href="#" class="block px-4 py-3 text-white hover:bg-gray-200 text-[18px] font-trebuchet -tracking-[0.02em] font-[400]">English</a>
                                    <a href="#" class="block px-4 py-3 text-white hover:bg-gray-200 text-[18px] font-trebuchet -tracking-[0.02em] font-[400]">中文</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border-[1.5px] border-white mt-[48px]"></div>
                <div class="xl:hidden mt-[29px]">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-[44px]">
                        <div class="w-full h-auto flex  items-center">
                            <img loading="lazy" class="w-[37px] h-[37px] mr-[30px]" src="translate_icon.png" alt="translate icon">
                            <div class="relative w-full">

                                <button id="dropdownButton2" class="px-[23px] py-[8px] text-white rounded-full border-[1px] border-white w-full">
                                    <div class="flex">
                                        <p class="grow text-[18px] font-trebuchet -tracking-[0.02em]">Bahasa Indonesia</p>
                                        <p class="w-[30px]">
                                            <svg id="dropdownIcon2" xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 transition-transform duration-300 transform" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                            </svg>
                                        </p>
                                    </div>
                                </button>


                                <div id="dropdownMenu2"
                                    class="absolute w-full bottom-full mb-5 bg-[#182430] shadow-lg rounded-xl opacity-0 scale-95 transition-all duration-300 transform origin-bottom invisible">
                                    <a href="#" class="block px-4 py-3 text-white hover:bg-gray-200">Bahasa Indonesia</a>
                                    <a href="#" class="block px-4 py-3 text-white hover:bg-gray-200">English</a>
                                    <a href="#" class="block px-4 py-3 text-white hover:bg-gray-200">中文</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <h5 class="mt-[48px] text-white">
                    @ 2025 PT. Karya Pilar Nusantara
                </h5>
            </div>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <?= $this->renderSection('script') ?>
    <script defer type="text/javascript">
        // ================= navbar section =================
        const mobileMenu = document.getElementById("mobile-menu");
        const openIcon = document.getElementById("open-menu-icon");
        const closeIcon = document.getElementById("close-menu-icon");

        function toggleMenu() {
            if (mobileMenu.classList.contains("translate-x-full")) {
                // Slide in dari kanan ke kiri
                mobileMenu.classList.remove("translate-x-full");
                mobileMenu.classList.add("translate-x-0");
                openIcon.classList.add("hidden");
                closeIcon.classList.remove("hidden");
            } else {
                // Slide out ke kanan
                mobileMenu.classList.remove("translate-x-0");
                mobileMenu.classList.add("translate-x-full");
                openIcon.classList.remove("hidden");
                closeIcon.classList.add("hidden");
            }
        }
        // ================= end of navbar section =================

        document.getElementById('dropdownButton1').addEventListener('click', function() {
            if (document.getElementById('dropdownMenu1').classList.contains('opacity-100')) {
                document.getElementById('dropdownMenu1').classList.replace('opacity-100', 'opacity-0');
                document.getElementById('dropdownMenu1').classList.replace('visible', 'invisible');
                // document.getElementById('dropdownIcon1').style.transform = "rotate(180deg)";
                document.getElementById('dropdownIcon1').classList.remove("rotate-180");
            } else {
                document.getElementById('dropdownMenu1').classList.replace('opacity-0', 'opacity-100');
                document.getElementById('dropdownMenu1').classList.replace('invisible', 'visible');
                document.getElementById('dropdownIcon1').classList.add("rotate-180");
            }
        });

        document.getElementById('dropdownButton2').addEventListener('click', function() {
            if (document.getElementById('dropdownMenu2').classList.contains('opacity-100')) {
                document.getElementById('dropdownMenu2').classList.replace('opacity-100', 'opacity-0');
                document.getElementById('dropdownMenu2').classList.replace('visible', 'invisible');
                document.getElementById('dropdownIcon2').classList.remove("rotate-180");
            } else {
                document.getElementById('dropdownMenu2').classList.replace('opacity-0', 'opacity-100');
                document.getElementById('dropdownMenu2').classList.replace('invisible', 'visible');
                document.getElementById('dropdownIcon2').classList.add("rotate-180");
            }
        });

        function resetDropdown() {
            document.getElementById('dropdownMenu1').classList.replace('opacity-100', 'opacity-0');
            document.getElementById('dropdownMenu1').classList.replace('visible', 'invisible');
            document.getElementById('dropdownIcon1').classList.remove("rotate-180");

            document.getElementById('dropdownMenu2').classList.replace('opacity-100', 'opacity-0');
            document.getElementById('dropdownMenu2').classList.replace('visible', 'invisible');
            document.getElementById('dropdownIcon2').classList.remove("rotate-180");
        }
        window.addEventListener("resize", resetDropdown);
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const links = document.querySelectorAll(".nav-link");
            const currentURL = window.location.href;

            links.forEach((link) => {
                if (currentURL === link.href) {
                    link.classList.add("bg-gray-900", "text-white"); // Apply active styles
                    link.classList.remove("text-gray-300", "hover:bg-gray-700", "hover:text-white"); // Remove hover styles
                }
            });
        });

        function beforeNavigate(callback) {
            () => toggleMenu();

            // Simulate an async task (e.g., saving data, API request)
            setTimeout(() => {
                console.log("Function complete. Navigating now...");
                callback();
            }, 1000); // Delay navigation for 1 second
        }

        document.querySelectorAll(".nav-link-mobile").forEach((link) => {
            link.addEventListener("click", function(event) {
                event.preventDefault(); // Stop instant navigation

                beforeNavigate(() => {
                    window.location.href = this.href; // Navigate after function completes
                });
            });
        });
    </script>

</body>

</html>
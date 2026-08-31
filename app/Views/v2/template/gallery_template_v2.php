<?= $this->extend('v2/template/template_v2') ?>


<?= $this->section('header') ?>
<html lang="<?= esc($lang ?? 'id') ?>">
<title><?= esc($meta_title ?? 'Galeri') ?></title>
<meta name="description"
    content="<?= esc($meta_description ?? 'Jelajahi galeri PT Karya Pilar Nusantara (PT KPN) dan temukan foto produk, koleksi terbaru dan perjalanan kami.') ?>" />
<meta name="keywords"
    content="<?= esc($meta_keyword ?? 'galeri KPN, foto produk KPN, gambar produk HDPE, gambar produk EVA, gambar produk TPE, gambar produk XPE, portofolio PT KPN, koleksi produk KPN') ?>" />
<?= $this->endsection() ?>

<?= $this->section('content') ?>
<section id="hero-section"
    class="relative flex items-center justify-center min-h-screen lg:min-h-0 mb-[50px] lg:mb-[10px] w-full z-20">
    <div id="nav-observer" class="absolute top-0 left-0 z-50 h-[200px] w-full bg-transparent"></div>

    <!-- Hero Text -->
    <div id="hero-text" class="w-full flex items-center justify-center mx-auto px-4 py-8 text-white text-center">
        <div class="flex flex-col w-full h-full items-center justify-center relative z-10  my-[150px]">
            <div class="block w-full items-center justify-center mb-[40px] md:mb-[60px]">
                <h1
                    class="ubuntu-bold h-[35px] md:h-[45px] text-[30px] md:text-[40px] tracking-[4%] text-center text-black title-shadow mr-2">
                    <?= esc($hero_top_title ?? 'Galeri') ?></h1>
                <p
                    class=" ubuntu-bold text-[30px] md:text-[40px] tracking-[4%] text-[#2563EB] title-shadow text-center w-full">
                    Karya Pilar Nusantara</p>
            </div>

            <p
                class="w-full max-w-[600px] open-sans-regular text-[16px] lg:text-[18px] tracking-[4%] text-center text-[#4E4E4E] mb-[90px] md:mb-[120px] px-5 md:px-15 xl:px-0">
                <?= esc($hero_sub_title ?? 'jangan lewatkan informasi terbaru dari kami. Temukan inspirasi lewat kegiatan yang kami bagikan.') ?>
            </p>
            <button
                class="cursor-pointer bg-blue-600 hover:bg-blue-700 px-[32px] md:px-[38px] transition-colors basic-contact-us-button py-[10px] md:py-[12px] rounded-[15px] md:rounded-[18px]"
                type="button">
                <div class="flex items-center justify-center w-full space-x-[14px]">
                    <div class="roboto-bold tracking-wide text-[16px] sm:text-[18px] text-white">
                        <?= esc($hero_button_title ?? 'Jelajahi Galeri') ?></div>
                </div>
            </button>
        </div>
    </div>
</section>
<section id="product-section" class="w-full relative z-10 mb-[200px]">
    <div class="flex flex-col items-center justify-center w-full px-5 md:px-15 ">
<<<<<<< HEAD
        <div class="grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-5 gap-6 w-full max-w-[1200px] max-w-3xl-custom ">
            <?php foreach ($galleries as $gallery): ?>
            <div
                class="thumbnail-container bg-[#FCFCFF] rounded-[8px] relative xl:rounded-t-[12px] drop-shadow-[1px_4px_5px_rgba(0,0,0,0.08)] hover:scale-102 transition-transform duration-150 flex flex-col items-center cursor-pointer">
                <img src="<?= '/galery/thumbnail/' . $gallery['thumbnail'] ?>" alt="<?= $gallery['image_alt'] ?>"
                    class="w-full h-auto aspect-square rounded-[8px] xl:rounded-[12px]" data-id="<?= $gallery['id'] ?>"
                    data-image="<?= $gallery['image'] ?>" data-title="<?= $gallery['title'] ?>"
                    data-description="<?= $gallery['description'] ?>" data-status="<?= $gallery['status'] ?>"
                    data-created="<?= $gallery['created_at'] ?>" data-type="<?= $gallery['type'] ?>"
                    src="/galery/thumbnail/<?= $gallery['thumbnail'] ?>" alt="<?= $gallery['image_alt'] ?>">
                <div class="absolute top-[15px] right-[15px] <?= $gallery['type'] == '0' ? 'hidden' : '' ?>">
                    <?= view('/components/icons/video', ['class' => 'scale-140']) ?>
                </div>
            </div>
=======
        <div class="grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-5 gap-6 w-full max-w-[1200px] max-w-3xl-custom">
            <?php foreach ($galleries as $gallery): ?>
                <div
                    class="thumbnail-container bg-[#FCFCFF] rounded-[8px] relative xl:rounded-t-[12px] drop-shadow-[1px_4px_5px_rgba(0,0,0,0.08)] hover:scale-102 transition-transform duration-150 flex flex-col items-center cursor-pointer">
                    <img src="<?= '/galery/thumbnail/' . $gallery['thumbnail'] ?>" alt="<?= $gallery['image_alt'] ?>"
                        class="w-full h-auto aspect-square rounded-[8px] xl:rounded-[12px]" data-id="<?= $gallery['id'] ?>"
                        data-image="<?= $gallery['image'] ?>" data-title="<?= $gallery['title'] ?>"
                        data-description="<?= $gallery['description'] ?>" data-status="<?= $gallery['status'] ?>"
                        data-created="<?= $gallery['created_at'] ?>" data-type="<?= $gallery['type'] ?>"
                        src="/galery/thumbnail/<?= $gallery['thumbnail'] ?>" alt="<?= $gallery['image_alt'] ?>">
                    <div class="absolute top-[15px] right-[15px] <?= $gallery['type'] == '0' ? 'hidden' : '' ?>">
                        <?= view('/components/icons/video', ['class' => 'scale-140']) ?>
                    </div>
                </div>
>>>>>>> b3e526899119848feddc0ba1691280352cade722
            <?php endforeach; ?>
        </div>
    </div>

</section>
<section id="cta-section">
    <x-cta-banner />
    <div class="mb-[150px]"></div>
</section>

<div id="imageModal"
    class="fixed z-120 top-0 left-0 w-full h-[100vh] hidden items-center justify-center bg-black/70 opacity-100 backdrop-blur-0 transition-opacity duration-300 ease-in-out">

    <div id="imageContent"
        class="block sm:flex bg-black rounded-lg shadow-lg h-full w-full sm:max-h-[800px] sm:max-w-[1200px]  transform scale-95 transition-transform duration-300 ease-in-out relative ">

        <button id="closeModal" class=" absolute z-15 top-3 right-3 text-gray-500 hover:text-gray-700 cursor-pointer">
            <?= view('components/icons/cross', ['class' => 'scale-110 fill-white md:fill-[#242424]']) ?>
        </button>

        <div id="topSection"
            class="h-[75%] sm:h-full w-full sm:w-[50%] sm:py-6 bg-black flex items-center justify-center sm:rounded-l-lg">
            <img id="modalImage" src="" class="relative w-full h-full object-contain hidden">
            <video id="modalVideo" src="" controls preload="auto" class="relative w-full h-full object-contain hidden"
                type="video/mp4"></video>
        </div>
        <div id="bottomSection"
            class="relative h-[25%] sm:h-full w-full sm:w-[50%] bg-white sm:py-6 rounded-t-4xl sm:rounded-t-none sm:rounded-r-lg">
            <div class="relative h-[100%] pb-[20px] px-6 w-full ">
                <div id="dragArea"
                    class="sm:hidden relative h-[30px] w-full flex justify-center items-center cursor-pointer touch-none">
                    <div class="h-[5px] w-[100px] rounded-full bg-gray-300 mt-2"></div>
                </div>
                <h2 id="modalTitle"
                    class="overflow-hidden sm:overflow-visible line-clamp-1 sm:line-clamp-none pt-[20px] text-[#242424] text-[18px] xl:text-[20px] roboto-bold">
                    Proses pembuatan playmat</h2>
                <p id="modalDate" class="text-[#242424] mb-[20px] roboto-regular text-[16px]">19 Maret 2025 - 02:44</p>
                <p id="modalDesc"
                    class="h-auto max-h-[65%] sm:max-h-[80%] relative overflow-clip sm:overflow-auto line-clamp-3 sm:line-clamp-none text-[#242424]  text-[16px] open-sans-regular">
                    Galeri PT Karya Pilar Nusantara</p>

            </div>
        </div>

    </div>
</div>

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
                document.getElementById('desktop-product-dropdown').classList.add('text-black');

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
<?= $this->section('script') ?>
<script>
<<<<<<< HEAD
const closeModal = document.getElementById("closeModal");
const waButton = document.getElementById("waButton");
const modal = document.getElementById("imageModal");
const modalContent = document.getElementById("imageContent");
const modalImage = document.getElementById("modalImage");
const modalVideo = document.getElementById("modalVideo");
const modalTitle = document.getElementById("modalTitle");
const modalDesc = document.getElementById("modalDesc");
const modalDate = document.getElementById("modalDate");

function formatDateTime(datetime) {
    // Convert string to Date object
    const date = new Date(datetime.replace(" ", "T")); // Ensure proper parsing

    // Format date to "15 Maret 2025"
    const formattedDate = new Intl.DateTimeFormat('id-ID', {
        day: '2-digit',
        month: 'long',
        year: 'numeric'
    }).format(date);

    // Format time to "00:46"
    const hours = String(date.getHours()).padStart(2, '0');
    const minutes = String(date.getMinutes()).padStart(2, '0');

    return `${formattedDate} - ${hours}:${minutes}`;
}

document.querySelectorAll(".thumbnail-container").forEach(thumbnailContainer => {
    thumbnailContainer.addEventListener("click", async (e) => {
        let contentDetail = thumbnailContainer.firstElementChild;
        waButton.classList.add("hidden");
        modalTitle.textContent = contentDetail.dataset.title;
        modalDesc.textContent = contentDetail.dataset.description;
        modalDate.textContent = formatDateTime(contentDetail.dataset.created);

        modal.classList.replace("hidden", "flex");
        setTimeout(() => {
            modal.classList.replace("opacity-0", "opacity-100");
            modalContent.classList.replace("scale-95", "scale-100");
            modal.classList.replace(
                "backdrop-blur-0",
                "backdrop-blur-sm",
            );
        }, 100);
        
        // console.log('open modal');
        if (contentDetail.dataset.type == 0) {
            // image
            modalImage.src = '/galery/content/' + contentDetail.dataset.image;
            modalImage.classList.remove("hidden");

        } else {
            // video
            let videoUrl = '/video/stream/' + contentDetail.dataset.image; // API URL
            modalVideo.src = videoUrl;
            modalVideo.classList.remove("hidden");
        }


    });
});

// Close Modal
closeModal.addEventListener("click", () => {
    modal.classList.replace("opacity-100", "opacity-0");
    modalContent.classList.replace("scale-100", "scale-95");
    modal.classList.replace(
        "backdrop-blur-sm",
        "backdrop-blur-0",
    );
    if (modalVideo.src != '') {
        modalVideo.pause();
        modalVideo.currentTime = 0; // Reset to start
        URL.revokeObjectURL(modalVideo.src);
    }
    setTimeout(() => {
        modal.classList.replace("flex", "hidden");
        modalImage.classList.add("hidden");
        modalVideo.classList.add("hidden");
        waButton.classList.remove("hidden");

    }, 300);
});

// Close when clicking outside modal
modal.addEventListener("click", (e) => {
    if (e.target === modal) {
=======
    const closeModal = document.getElementById("closeModal");
    const waButton = document.getElementById("waButton");
    const modal = document.getElementById("imageModal");
    const modalContent = document.getElementById("imageContent");
    const modalImage = document.getElementById("modalImage");
    const modalVideo = document.getElementById("modalVideo");
    const modalTitle = document.getElementById("modalTitle");
    const modalDesc = document.getElementById("modalDesc");
    const modalDate = document.getElementById("modalDate");

    function formatDateTime(datetime) {
        // Convert string to Date object
        const date = new Date(datetime.replace(" ", "T")); // Ensure proper parsing

        // Format date to "15 Maret 2025"
        const formattedDate = new Intl.DateTimeFormat('id-ID', {
            day: '2-digit',
            month: 'long',
            year: 'numeric'
        }).format(date);

        // Format time to "00:46"
        const hours = String(date.getHours()).padStart(2, '0');
        const minutes = String(date.getMinutes()).padStart(2, '0');

        return `${formattedDate} - ${hours}:${minutes}`;
    }

    document.querySelectorAll(".thumbnail-container").forEach(thumbnailContainer => {
        thumbnailContainer.addEventListener("click", async (e) => {
            waButton.classList.add("hidden");
            modalTitle.textContent = contentDetail.dataset.title;
            modalDesc.textContent = contentDetail.dataset.description;
            modalDate.textContent = formatDateTime(contentDetail.dataset.created);

            modal.classList.replace("hidden", "flex");
            setTimeout(() => {
                modal.classList.replace("opacity-0", "opacity-100");
                modalContent.classList.replace("scale-95", "scale-100");
                modal.classList.replace(
                    "backdrop-blur-0",
                    "backdrop-blur-sm",
                );
            }, 100);
            let contentDetail = thumbnailContainer.firstElementChild;
            // console.log('open modal');
            if (contentDetail.dataset.type == 0) {
                // image
                modalImage.src = '/galery/content/' + contentDetail.dataset.image;
                modalImage.classList.remove("hidden");

            } else {
                // video
                let videoUrl = '/video/stream/' + contentDetail.dataset.image; // API URL

                try {
                    if (modalVideo.src != '') {
                        URL.revokeObjectURL(modalVideo.src);
                    }
                    let response = await fetch(videoUrl, {
                        method: 'GET',
                        headers: {
                            'Range': 'bytes=0-' // Enable seeking support
                        }
                    });

                    if (!response.ok) throw new Error('Failed to load video');

                    let blob = await response.blob();
                    let objectUrl = URL.createObjectURL(blob);

                    modalVideo.src = objectUrl;
                    modalVideo.classList.remove("hidden");
                } catch (error) {
                    console.error('Error loading video:', error);
                }
            }

            // modalContent.classList.replace("scale-80", "scale-100");

        });
    });

    // Close Modal
    closeModal.addEventListener("click", () => {
>>>>>>> b3e526899119848feddc0ba1691280352cade722
        modal.classList.replace("opacity-100", "opacity-0");
        modalContent.classList.replace("scale-100", "scale-95");
        modal.classList.replace(
            "backdrop-blur-sm",
            "backdrop-blur-0",
        );
        if (modalVideo.src != '') {
            modalVideo.pause();
            modalVideo.currentTime = 0; // Reset to start
            URL.revokeObjectURL(modalVideo.src);
        }
        setTimeout(() => {
            modal.classList.replace("flex", "hidden");
            modalImage.classList.add("hidden");
            modalVideo.classList.add("hidden");
            waButton.classList.remove("hidden");

        }, 300);
<<<<<<< HEAD
    }
});
</script>
<script>
const dragArea = document.getElementById("dragArea");
const topSection = document.getElementById("topSection");
const bottomSection = document.getElementById("bottomSection");

let startY = 0;
let isDragging = false;
let currentHeight = 25; // Awalnya 25%

function disableScroll(e) {
    e.preventDefault();
}

// Prevent scrolling on title and date
modalTitle.addEventListener("touchmove", disableScroll, {
    passive: false
});
modalDate.addEventListener("touchmove", disableScroll, {
    passive: false
});

// Fungsi untuk memperbarui ukuran modal
function updateSize(height, animate = true) {
    if (animate) {
        topSection.style.transition = "height 0.3s ease-in-out";
        bottomSection.style.transition = "height 0.3s ease-in-out";
    } else {
        topSection.style.transition = "none";
        bottomSection.style.transition = "none";
    }

    topSection.style.height = `${100 - height}%`;
    bottomSection.style.height = `${height}%`;

    // Ubah gaya modalDesc & modalTitle jika diubah ke 50%
    if (height === 50) {
        modalDesc.style.overflow = "auto";
        modalDesc.classList.remove("line-clamp-3");
        modalTitle.classList.remove("line-clamp-1");
    } else {
        modalDesc.style.overflow = "clip";
        modalDesc.classList.add("line-clamp-3");
        modalTitle.classList.add("line-clamp-1");
    }
}

// Klik untuk toggle antara 25% dan 50%
dragArea.addEventListener("click", () => {
    currentHeight = currentHeight === 25 ? 50 : 25;
    updateSize(currentHeight);
});

// Saat mulai drag
dragArea.addEventListener("touchstart", (e) => {
    startY = e.touches[0].clientY;
    isDragging = true;

    document.body.addEventListener("touchmove", disableScroll, {
        passive: false
    });
});


bottomSection.addEventListener("touchmove", (e) => {

    let atTop = modalDesc.scrollTop === 0;
    let atBottom = modalDesc.scrollTop + modalDesc.clientHeight >= modalDesc.scrollHeight;
    let scrollingDown = e.touches[0].clientY < startY;
    let scrollingUp = e.touches[0].clientY > startY;

    if ((atTop && scrollingUp) || (atBottom && scrollingDown)) {
        e.preventDefault(); // Prevent page scrolling
    }
});

// Saat drag berlangsung
dragArea.addEventListener("touchmove", (e) => {
    if (!isDragging) return;

    let diff = startY - e.touches[0].clientY; // Perbedaan posisi awal dan sekarang
    let newHeight = currentHeight + (diff / window.innerHeight) * 100;

    // Batasi ukuran antara 25% - 50%
    if (newHeight >= 25 && newHeight <= 50) {
        updateSize(newHeight, false);
    }
});

// Saat drag dilepas
dragArea.addEventListener("touchend", () => {
    isDragging = false;

    // Dapatkan posisi terakhir dan tentukan snap ke 25% atau 50%
    let bottomHeight = parseFloat(bottomSection.style.height);
    currentHeight = bottomHeight >= 37.5 ? 50 : 25;

    updateSize(currentHeight);

    document.body.removeEventListener("touchmove", disableScroll);
});

bottomSection.addEventListener("touchend", () => {
    document.body.removeEventListener("touchmove", disableScroll);
});
=======
    });

    // Close when clicking outside modal
    modal.addEventListener("click", (e) => {
        if (e.target === modal) {
            modal.classList.replace("opacity-100", "opacity-0");
            modalContent.classList.replace("scale-100", "scale-95");
            modal.classList.replace(
                "backdrop-blur-sm",
                "backdrop-blur-0",
            );
            if (modalVideo.src != '') {
                modalVideo.pause();
                modalVideo.currentTime = 0; // Reset to start
                URL.revokeObjectURL(modalVideo.src);
            }
            setTimeout(() => {
                modal.classList.replace("flex", "hidden");
                modalImage.classList.add("hidden");
                modalVideo.classList.add("hidden");
                waButton.classList.remove("hidden");

            }, 300);
        }
    });
</script>
<script>
    const dragArea = document.getElementById("dragArea");
    const topSection = document.getElementById("topSection");
    const bottomSection = document.getElementById("bottomSection");

    let startY = 0;
    let isDragging = false;
    let currentHeight = 25; // Awalnya 25%

    function disableScroll(e) {
        e.preventDefault();
    }

    // Prevent scrolling on title and date
    modalTitle.addEventListener("touchmove", disableScroll, {
        passive: false
    });
    modalDate.addEventListener("touchmove", disableScroll, {
        passive: false
    });

    // Fungsi untuk memperbarui ukuran modal
    function updateSize(height, animate = true) {
        if (animate) {
            topSection.style.transition = "height 0.3s ease-in-out";
            bottomSection.style.transition = "height 0.3s ease-in-out";
        } else {
            topSection.style.transition = "none";
            bottomSection.style.transition = "none";
        }

        topSection.style.height = `${100 - height}%`;
        bottomSection.style.height = `${height}%`;

        // Ubah gaya modalDesc & modalTitle jika diubah ke 50%
        if (height === 50) {
            modalDesc.style.overflow = "auto";
            modalDesc.classList.remove("line-clamp-3");
            modalTitle.classList.remove("line-clamp-1");
        } else {
            modalDesc.style.overflow = "clip";
            modalDesc.classList.add("line-clamp-3");
            modalTitle.classList.add("line-clamp-1");
        }
    }

    // Klik untuk toggle antara 25% dan 50%
    dragArea.addEventListener("click", () => {
        currentHeight = currentHeight === 25 ? 50 : 25;
        updateSize(currentHeight);
    });

    // Saat mulai drag
    dragArea.addEventListener("touchstart", (e) => {
        startY = e.touches[0].clientY;
        isDragging = true;

        document.body.addEventListener("touchmove", disableScroll, {
            passive: false
        });
    });


    bottomSection.addEventListener("touchmove", (e) => {

        let atTop = modalDesc.scrollTop === 0;
        let atBottom = modalDesc.scrollTop + modalDesc.clientHeight >= modalDesc.scrollHeight;
        let scrollingDown = e.touches[0].clientY < startY;
        let scrollingUp = e.touches[0].clientY > startY;

        if ((atTop && scrollingUp) || (atBottom && scrollingDown)) {
            e.preventDefault(); // Prevent page scrolling
        }
    });

    // Saat drag berlangsung
    dragArea.addEventListener("touchmove", (e) => {
        if (!isDragging) return;

        let diff = startY - e.touches[0].clientY; // Perbedaan posisi awal dan sekarang
        let newHeight = currentHeight + (diff / window.innerHeight) * 100;

        // Batasi ukuran antara 25% - 50%
        if (newHeight >= 25 && newHeight <= 50) {
            updateSize(newHeight, false);
        }
    });

    // Saat drag dilepas
    dragArea.addEventListener("touchend", () => {
        isDragging = false;

        // Dapatkan posisi terakhir dan tentukan snap ke 25% atau 50%
        let bottomHeight = parseFloat(bottomSection.style.height);
        currentHeight = bottomHeight >= 37.5 ? 50 : 25;

        updateSize(currentHeight);

        document.body.removeEventListener("touchmove", disableScroll);
    });

    bottomSection.addEventListener("touchend", () => {
        document.body.removeEventListener("touchmove", disableScroll);
    });
>>>>>>> b3e526899119848feddc0ba1691280352cade722
</script>
<?= $this->endSection() ?>
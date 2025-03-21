<?= $this->extend('./template') ?>

<?= $this->section('style') ?>
<link rel="stylesheet" href="css/homepage_style.css">
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<!-- Hero -->
<section id="galerySection" class="relative pb-[200px] min-h-[100vh] w-full bg-white">
  <!-- Background Image -->
  <div class="h-[140px] w-full px-[40px] md:px-[10%] bg-[#F2F8FF] flex justify-center">
    <div class="w-full max-w-[1600px] pt-[30px] ">
      <h1 class=" text-[#001F47] text-start text-[32px] md:text-[34px] font-humanist-bold leading-[100%] -tracking-[0.02em]">GALERY</h1>
      <p class="mt-[12px] text-[#001F47] text-start font-humanist-normal leading-4 text-[14px] md:text-[16px] xl:text-[18px]">Temukan inspirasi lewat kegiatan yang kami bagikan.</p>
    </div>
  </div>
  <div class=" pt-[40px] px-[40px] md:px-[10%] flex justify-center">
    <div class="w-full max-w-[1600px] h-full ">
      <div class="relative h-full  grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 xl:grid-cols-8 gap-[10px]">
        <?php foreach ($images as $image): ?>
          <div class="thumbnail-container w-full relative cursor-pointer aspect-square  hover:scale-105 transform duration-200 ease-in-out">
            <img loading="lazy" data-id="<?= $image['id'] ?>" data-image="<?= $image['image'] ?>" data-title="<?= $image['title'] ?>" data-description="<?= $image['description'] ?>" data-status="<?= $image['status'] ?>" data-created="<?= $image['created_at'] ?>" data-type="<?= $image['type'] ?>" src="/galery/thumbnail/<?= $image['thumbnail'] ?>" alt="<?= $image['image_alt'] ?>"
              class=" thumbnail rounded-lg shadow-lg hover:shadow-xl transition relative object-cover w-full h-full">

            <?php if ($image['type'] == 1): ?>
              <div class="absolute top-0 left-0 h-full w-auto aspect-square flex items-center justify-center mx-auto">
                <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" fill="#ffffff" data-name="Layer 1" viewBox="0 0 24 24" width="50%">
                  <path d="m16.55,10.435l-5.848-3.203c-.562-.316-1.228-.309-1.783.014-.556.325-.888.904-.888,1.548v6.411c0,.644.332,1.223.888,1.548.283.165.595.248.905.248.301,0,.6-.077.873-.23l5.857-3.208c.572-.322.914-.906.914-1.562s-.342-1.241-.919-1.565Zm-.48,2.253l-5.857,3.208c-.249.139-.543.137-.788-.006-.246-.144-.393-.4-.393-.685v-6.411c0-.285.146-.541.393-.685.124-.072.261-.109.398-.109.134,0,.27.035.395.105l5.848,3.203c.253.142.404.4.404.69s-.151.548-.399.688ZM12,0C5.383,0,0,5.383,0,12s5.383,12,12,12,12-5.383,12-12S18.617,0,12,0Zm0,23c-6.065,0-11-4.935-11-11S5.935,1,12,1s11,4.935,11,11-4.935,11-11,11Z" />
                </svg>
              </div>
            <?php endif; ?>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>

  <div id="imageModal" class="fixed z-10 top-0 left-0 w-full pt-16 h-[100vh] hidden items-center justify-center bg-black/70 opacity-100 backdrop-blur-0 transition-opacity duration-300 ease-in-out">
    <div id="imageContent" class="block sm:flex bg-black rounded-lg shadow-lg h-full w-full sm:max-h-[800px] sm:max-w-[1200px]  transform scale-95 transition-transform duration-300 ease-in-out relative ">
      <button id="closeModal" class=" absolute z-15 top-3 right-3 text-gray-500 hover:text-gray-700 cursor-pointer">
        ✖
      </button>

      <div id="topSection" class="h-[75%] sm:h-full w-full sm:w-[50%] sm:py-6 bg-black flex items-center justify-center sm:rounded-l-lg">
        <img id="modalImage" loading="lazy" src="" class="relative w-full h-full object-contain hidden">
        <video loading="lazy" id="modalVideo" src="" controls preload="auto" class="relative w-full h-full object-contain hidden" type="video/mp4"></video>
      </div>
      <div id="bottomSection" class="relative h-[25%] sm:h-full w-full sm:w-[50%] bg-white sm:py-6 rounded-t-4xl sm:rounded-t-none sm:rounded-r-lg">
        <div class="relative h-[100%] pb-[20px] px-6 w-full ">
          <div id="dragArea" class="sm:hidden relative h-[30px] w-full flex justify-center items-center cursor-pointer touch-none">
            <div class="h-[5px] w-[100px] rounded-full bg-gray-300 mt-2"></div>
          </div>
          <h2 id="modalTitle" class="overflow-hidden sm:overflow-visible line-clamp-1 sm:line-clamp-none text-stone-800 text-[20px] xl:text-[22px] font-trebuchet leading-[135%] -tracking-[0.03em] font-[500]">Proses pembuatan playmat test update tes judul yang panjaanang</h2>
          <p id="modalDate" class="text-stone-600 mb-[20px] font-humanist-normal text-[16px] xl:text-[18px]">19 Maret 2025 - 02:44</p>
          <p id="modalDesc" class="h-auto max-h-[65%] sm:max-h-[80%] relative overflow-clip sm:overflow-auto line-clamp-3 sm:line-clamp-none text-stone-500 text-[16px] xl:text-[18px] font-humanist-normal leading-[130%] tracking-[0.02em] font-[400]">Just for the simplification of the mentioned solution on above link, they have used an http handler to solve the problem. But I would like to state that using/implementing an http handler is not a part of the required solution. The solution is that you have to put necessary headers to the response like below Just for the simplification of the mentioned solution on above link, they have used an http handler to solve the problem. But I would like to state that using/implementing an http handler is not a part of the required solution. The solution is that you have to put necessary headers to the response like below Just for the simplification of the mentioned solution on above link, they have used an http handler to solve the problem. But I would like to state that using/implementing an http handler is not a part of the required solution. The solution is that you have to put necessary headers to the response like below Just for the simplification of the mentioned solution on above link, they have used an http handler to solve the problem. But I would like to state that using/implementing an http handler is not a part of the required solution. The solution is that you have to put necessary headers to the response like below</p>
        </div>
      </div>
    </div>
  </div>
</section>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script>
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
      // modalContent.classList.replace("scale-80", "scale-100");

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
      URL.revokeObjectURL(modalVideo.src);
    }
    setTimeout(() => {
      modalImage.classList.add("hidden");
      modalVideo.classList.add("hidden");
      modal.classList.replace("flex", "hidden");
      waButton.classList.remove("hidden");

    }, 300);
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
</script>
<?= $this->endSection() ?>
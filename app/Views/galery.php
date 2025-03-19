<?= $this->extend('./template') ?>

<?= $this->section('style') ?>
<link rel="stylesheet" href="css/homepage_style.css">
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<!-- Hero -->
<section id="galerySection" class="relative h-screen w-full bg-white">
  <!-- Background Image -->
  <div class="h-[140px] w-full px-[40px] md:px-[10%] bg-[#F2F8FF] flex justify-center">
    <div class="w-full max-w-[1600px] pt-[30px] ">
      <h1 class=" text-[#001F47] text-start text-[32px] md:text-[34px] font-humanist-bold leading-[100%] -tracking-[0.02em]">GALERY</h1>
      <p class="mt-[12px] text-[#001F47] text-start font-humanist-normal leading-4 text-[14px] md:text-[16px] xl:text-[18px]">Temukan inspirasi lewat berbagai dokumentasi yang sudah kami rangkum.</p>
    </div>
  </div>
  <div class=" pt-[40px] px-[40px] md:px-[10%] flex justify-center w-full ">
    <div class="w-full max-w-[1600px]">
      <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 xl:grid-cols-8 gap-[10px]">
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
  <div id="imageModal" class="fixed z-10 inset-0 flex items-center justify-center bg-black/70 opacity-100 backdrop-blur-0 transition-opacity duration-300 ease-in-out overflow-scroll">
    <div id="imageContent" class="bg-white rounded-lg shadow-lg p-6 w-full max-w-[1000px] transform scale-95 transition-transform duration-300 ease-in-out relative ">
      <!-- Close Button -->
      <button id="closeModal" class="absolute top-3 right-3 text-gray-500 hover:text-gray-700 cursor-pointer">
        ✖
      </button>

      <!-- Modal Content -->
      <div class="flex flex-row gap-4">
        <!-- Image Section -->
        <div class="h-[700px] w-1/2 bg-black flex relative items-center rounded-lg">
          <!-- <div class="rounded-lg w-full h-full bg-red-100"> -->
          <img loading="lazy" id="modalImage" src="https://picsum.photos/200/100" class="relative w-full h-auto">
          <!-- <video loading="lazy" id="modalVideo" src="" controls preload="auto" class="hidden rounded-lg w-full" type="video/mp4"></video> -->
        </div>

        <!-- Details Section -->
        <div class="w-1/2 flex flex-col justify-between">
          <div>
            <h2 id="modalTitle" class=" text-stone-800 text-[20px] xl:text-[28px] font-trebuchet leading-[135%] -tracking-[0.03em] font-[500]">Proses pembuatan playmat test update</h2>
            <p id="modalDate" class="text-stone-600 font-humanist-normal text-[16px] xl:text-[18px]">19 Maret 2025 - 02:44</p>
            <p id="modalDesc" class=" text-stone-500 text-[16px] xl:text-[18px] font-humanist-normal leading-[130%] tracking-[0.02em] font-[400]">Just for the simplification of the mentioned solution on above link, they have used an http handler to solve the problem. But I would like to state that using/implementing an http handler is not a part of the required solution. The solution is that you have to put necessary headers to the response like below</p>

          </div>

        </div>
      </div>
    </div>
  </div>

</section>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script>
  const closeModal = document.getElementById("closeModal");
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
      // console.log('open modal');
      if (contentDetail.dataset.type == 0) {
        // image
        modalImage.src = '/galery/content/' + contentDetail.dataset.image;
        modalImage.classList.remove("hidden");
      } else {
        // video
        let videoUrl = '/video/stream/' + contentDetail.dataset.image; // API URL

        try {
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
    setTimeout(() => {
      modalImage.classList.add("hidden");
      modalVideo.classList.add("hidden");
      modal.classList.replace("flex", "hidden");
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
      setTimeout(() => {
        modal.classList.replace("flex", "hidden");
        modalImage.classList.add("hidden");
        modalVideo.classList.add("hidden");
      }, 300);
    }
  });
</script>
<?= $this->endSection() ?>
// =============================== Rocking Horse ==========================
// Select elements
const evaMatCard = document.getElementById("evaMatCard");
const evaMatDynamicImageContainer = document.getElementById(
  "evaMatDynamicImageContainer"
);
const evaMatDynamicImage = document.getElementById("evaMatDynamicImage");
const closeEvaMatModalBtn = document.getElementById("closeEvaMatModalBtn");
const evaMatModal = document.getElementById("evaMatModal");
const evaMatModalContent = document.getElementById("evaMatModalContent");

// Open evaMatModal
evaMatCard.addEventListener("click", () => {
  if (window.innerWidth > 1024) {
    evaMatModal.classList.replace("hidden", "flex");
    document.body.style.overflow = "hidden";
    setTimeout(() => {
      evaMatModal.classList.replace("opacity-0", "opacity-100");
      evaMatModal.classList.replace("backdrop-blur-0", "backdrop-blur-sm");
      evaMatModalContent.classList.add("scale-100", "opacity-100");
    }, 100); // Short delay for smooth animation
  }
});

// Close evaMatModal
function closeEvaMatModal() {
  if (window.innerWidth > 1024) {
    evaMatModal.classList.replace("opacity-100", "opacity-0");
    evaMatModalContent.classList.remove("scale-100", "opacity-100");
    document.body.style.overflow = "";
    setTimeout(() => {
      evaMatModal.classList.replace("backdrop-blur-sm", "backdrop-blur-0");
      evaMatModal.classList.replace("flex", "hidden");
    }, 300); // Match duration-300
  }
}

closeEvaMatModalBtn.addEventListener("click", closeEvaMatModal);

// Close evaMatModal if clicking outside content
evaMatModal.addEventListener("click", (e) => {
  if (e.target === evaMatModal) {
    closeEvaMatModal();
  }
});

const evaMatImageList = [
  "/images/eva/basic/belge.webp",
  "/images/eva/basic/black.webp",
  "/images/eva/basic/blue.webp",
  "/images/eva/basic/gray.webp",
  "/images/eva/basic/purple.webp",
  "/images/eva/motif/motif-1.webp",
  "/images/eva/motif/motif-2.webp",
  "/images/eva/motif/motif-3.webp",
  "/images/eva/motif/motif-4.webp",
  "/images/eva/motif/motif-5.webp",
];

// const evaMatBottomOffsets = [
//   "bottom-1",
//   "-bottom-3",
//   "bottom-1",
//   "-bottom-3",
//   "bottom-1",
//   "bottom-1",
// ];

document.querySelectorAll(".eva-color-list").forEach((color) => {
  color.addEventListener("click", function () {
    // var variantNamePrefix = "001-M100";
    // var currentIndex = parseInt(this.getAttribute("data-index")) + 1;
    // var variantName = variantNamePrefix + currentIndex;

    // document.getElementById("evaMatVariantTitle").innerHTML = variantName;

    evaMatDynamicImage.classList.replace("opacity-100", "opacity-0");

    setTimeout(() => {
      if (this.getAttribute("data-index") > 4) {
        evaMatDynamicImage.classList.replace("h-[320px]", "h-[360px]");
        evaMatDynamicImage.classList.add("pb-[20px]");
        evaMatDynamicImageContainer.classList.add("translate-x-[10px]");
      } else {
        evaMatDynamicImage.classList.replace("h-[360px]", "h-[320px]");
        evaMatDynamicImage.classList.remove("pb-[20px]");
        evaMatDynamicImageContainer.classList.remove("translate-x-[10px]");
      }
      evaMatDynamicImage.classList.replace("opacity-0", "opacity-100");
      evaMatDynamicImage.src = evaMatImageList[this.getAttribute("data-index")];
    }, 150);

    document.querySelectorAll(".eva-color-list").forEach((c) => {
      c.classList.remove("scale-150");
    });
    this.classList.add("scale-150");
  });
});

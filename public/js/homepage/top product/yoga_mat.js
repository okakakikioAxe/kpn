// =============================== Rocking Horse ==========================
// Select elements
const yogaMatCard = document.getElementById("yogaMatCard");
const yogaMatDynamicImageContainer = document.getElementById(
  "yogaMatDynamicImageContainer"
);
const yogaMatDynamicImage = document.getElementById("yogaMatDynamicImage");
const closeYogaMatModalBtn = document.getElementById("closeYogaMatModalBtn");
const yogaMatModal = document.getElementById("yogaMatModal");
const yogaMatModalContent = document.getElementById("yogaMatModalContent");

// Open yogaMatModal
yogaMatCard.addEventListener("click", () => {
  if (window.innerWidth > 1024) {
    yogaMatModal.classList.replace("hidden", "flex");
    document.body.style.overflow = "hidden";
    setTimeout(() => {
      yogaMatModal.classList.replace("opacity-0", "opacity-100");
      yogaMatModal.classList.replace("backdrop-blur-0", "backdrop-blur-sm");
      yogaMatModalContent.classList.add("scale-100", "opacity-100");
    }, 100); // Short delay for smooth animation
  }
});

// Close yogaMatModal
function closeYogaMatModal() {
  if (window.innerWidth > 1024) {
    yogaMatModal.classList.replace("opacity-100", "opacity-0");
    yogaMatModalContent.classList.remove("scale-100", "opacity-100");
    document.body.style.overflow = "";
    setTimeout(() => {
      yogaMatModal.classList.replace("backdrop-blur-sm", "backdrop-blur-0");
      yogaMatModal.classList.replace("flex", "hidden");
    }, 300); // Match duration-300
  }
}

closeYogaMatModalBtn.addEventListener("click", closeYogaMatModal);

// Close yogaMatModal if clicking outside content
yogaMatModal.addEventListener("click", (e) => {
  if (e.target === yogaMatModal) {
    closeYogaMatModal();
  }
});

const yogaMatImageList = [
  "/images/yoga/basic/belge.webp",
  "/images/yoga/basic/black.webp",
  "/images/yoga/basic/blue.webp",
  "/images/yoga/basic/gray.webp",
  "/images/yoga/basic/purple.webp",
  "/images/yoga/motif/motif-1.webp",
  "/images/yoga/motif/motif-2.webp",
  "/images/yoga/motif/motif-3.webp",
  "/images/yoga/motif/motif-4.webp",
  "/images/yoga/motif/motif-5.webp",
];

document.querySelectorAll(".yoga-color-list").forEach((color) => {
  color.addEventListener("click", function () {
    yogaMatDynamicImage.classList.replace("opacity-100", "opacity-0");

    setTimeout(() => {
      if (this.getAttribute("data-index") > 4) {
        yogaMatDynamicImage.classList.replace("h-[320px]", "h-[360px]");
        yogaMatDynamicImage.classList.add("pb-[20px]");
        yogaMatDynamicImageContainer.classList.add("translate-x-[10px]");
      } else {
        yogaMatDynamicImage.classList.replace("h-[360px]", "h-[320px]");
        yogaMatDynamicImage.classList.remove("pb-[20px]");
        yogaMatDynamicImageContainer.classList.remove("translate-x-[10px]");
      }
      yogaMatDynamicImage.classList.replace("opacity-0", "opacity-100");
      yogaMatDynamicImage.src =
        yogaMatImageList[this.getAttribute("data-index")];
    }, 150);

    document.querySelectorAll(".yoga-color-list").forEach((c) => {
      c.classList.remove("scale-150");
    });
    this.classList.add("scale-150");
  });
});

const floatingCubeImageList = [
  "/images/kubus apung/kubus-apung-biru.png",
  "/images/kubus apung/kubus-apung-abu.png",
  "/images/kubus apung/kubus-apung-kuning.png",
  "/images/kubus apung/kubus-apung-orange.png",
];

document.querySelectorAll(".product-color-list").forEach((color) => {
  color.addEventListener("click", function () {
    document
      .querySelectorAll(".product-color-list")
      .forEach((c) => c.classList.remove("scale-150"));
    this.classList.add("scale-150");

    document.getElementById("floatingCubeDynamicImage").src =
      floatingCubeImageList[this.getAttribute("data-index")];
    console.log(this.getAttribute("data-index"));
  });
});

// =============================== Kubus Apung ==========================
// Select elements
const floatingCubeCard = document.getElementById("floatingCubeCard");
const closeFloatingCubeModalBtn = document.getElementById(
  "closeFloatingCubeModalBtn",
);
const floatingCubeModal = document.getElementById("floatingCubeModal");
const floatingCubeModalContent = document.getElementById(
  "floatingCubeModalContent",
);

// Open floatingCubeModal
floatingCubeCard.addEventListener("click", () => {
  if (window.innerWidth > 1024) {
    floatingCubeModal.classList.remove("hidden");
    floatingCubeModal.classList.add("flex");
    document.body.style.overflow = "hidden";
    setTimeout(() => {
      floatingCubeModal.classList.replace("opacity-0", "opacity-100");
      floatingCubeModal.classList.replace(
        "backdrop-blur-0",
        "backdrop-blur-sm",
      );
      floatingCubeModalContent.classList.add("scale-100", "opacity-100");
    }, 100); // Short delay for smooth animation
  }
});

// Close floatingCubeModal
function closeFloatingCubeModal() {
  if (window.innerWidth > 1024) {
    floatingCubeModal.classList.replace("opacity-100", "opacity-0");
    floatingCubeModalContent.classList.remove("scale-100", "opacity-100");
    document.body.style.overflow = "";
    setTimeout(() => {
      floatingCubeModal.classList.replace(
        "backdrop-blur-sm",
        "backdrop-blur-0",
      );
      floatingCubeModal.classList.remove("flex");
      floatingCubeModal.classList.add("hidden");
    }, 300); // Match duration-300
  }
}

closeFloatingCubeModalBtn.addEventListener("click", closeFloatingCubeModal);

// Close floatingCubeModal if clicking outside content
floatingCubeModal.addEventListener("click", (e) => {
  if (e.target === floatingCubeModal) {
    closeFloatingCubeModal();
  }
});

// =============================== End Of Kubus Apung ==========================

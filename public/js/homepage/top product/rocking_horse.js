// =============================== Rocking Horse ==========================
// Select elements
const rockingHorseCard = document.getElementById("rockingHorseCard");
const rockingHorseDynamicImage = document.getElementById(
  "rockingHorseDynamicImage",
);
const closeRockingHorseModalBtn = document.getElementById(
  "closeRockingHorseModalBtn",
);
const rockingHorseModal = document.getElementById("rockingHorseModal");
const rockingHorseModalContent = document.getElementById(
  "rockingHorseModalContent",
);

// Open rockingHorseModal
rockingHorseCard.addEventListener("click", () => {
  if (window.innerWidth > 1024) {
    rockingHorseModal.classList.remove("hidden");
    rockingHorseModal.classList.add("flex");
    document.body.style.overflow = "hidden";
    setTimeout(() => {
      rockingHorseModal.classList.replace("opacity-0", "opacity-100");
      rockingHorseModal.classList.replace(
        "backdrop-blur-0",
        "backdrop-blur-sm",
      );
      rockingHorseModalContent.classList.add("scale-100", "opacity-100");
    }, 100); // Short delay for smooth animation
  }
});

// Close rockingHorseModal
function closeRockingHorseModal() {
  if (window.innerWidth > 1024) {
    rockingHorseModal.classList.replace("opacity-100", "opacity-0");
    rockingHorseModalContent.classList.remove("scale-100", "opacity-100");
    document.body.style.overflow = "";
    setTimeout(() => {
      rockingHorseModal.classList.replace(
        "backdrop-blur-sm",
        "backdrop-blur-0",
      );
      rockingHorseModal.classList.remove("flex");
      rockingHorseModal.classList.add("hidden");
    }, 300); // Match duration-300
  }
}

closeRockingHorseModalBtn.addEventListener("click", closeRockingHorseModal);

// Close rockingHorseModal if clicking outside content
rockingHorseModal.addEventListener("click", (e) => {
  if (e.target === rockingHorseModal) {
    closeRockingHorseModal();
  }
});

const rockingHorseImageList = [
  "/images/rocking horse/rocking-horse-1001.png",
  "/images/rocking horse/rocking-horse-1002.png",
  "/images/rocking horse/rocking-horse-1003.png",
  "/images/rocking horse/rocking-horse-1004.png",
  "/images/rocking horse/rocking-horse-1005.png",
  "/images/rocking horse/rocking-horse-1006.png",
];

const rockingHorseBottomOffsets = [
  "bottom-1",
  "-bottom-3",
  "bottom-1",
  "-bottom-3",
  "bottom-1",
  "bottom-1",
];

document.querySelectorAll(".rocking-horse-variant-list").forEach((color) => {
  color.addEventListener("click", function () {
    rockingHorseDynamicImage.classList.replace("opacity-100", "opacity-0");

    setTimeout(() => {
      rockingHorseDynamicImage.classList.remove("bottom-1", "-bottom-3");
      rockingHorseDynamicImage.classList.add(
        rockingHorseBottomOffsets[this.getAttribute("data-index")],
      );

      // Change image source
      rockingHorseDynamicImage.src =
        rockingHorseImageList[this.getAttribute("data-index")];

      // Apply fade-in effect
      rockingHorseDynamicImage.classList.replace("opacity-0", "opacity-100");
    }, 300);

    document.querySelectorAll(".rocking-horse-variant-list").forEach((c) => {
      c.classList.remove("scale-150");
    });
    this.classList.add("scale-150");
  });
});

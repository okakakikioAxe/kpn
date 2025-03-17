const evaProductCard = document.getElementById("eva-product-card");

// Open evaMatModal
evaProductCard.addEventListener("click", () => {
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

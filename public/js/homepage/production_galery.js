// ================= Animation =================
function revealProductionGaleryCards() {
  const cards = document.querySelectorAll(".animate-production-galery-card");
  let delay = 0; // Initial delay

  cards.forEach((card, index) => {
    const cardTop = card.getBoundingClientRect().top;

    if (cardTop < window.innerHeight * 0.9) {
      setTimeout(() => {
        card.classList.add("production-galery-visible");
      }, delay);
      delay += 250; // Delay each card by 150ms
    }
  });
}

window.addEventListener("scroll", revealProductionGaleryCards);
window.addEventListener("load", revealProductionGaleryCards);
// ================= End of Animation =================

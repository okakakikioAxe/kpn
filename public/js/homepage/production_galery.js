// ================= Animation =================
function revealProductionGaleryCards() {
  const normalCards = document
    .querySelector("#normalProductionCard")
    .querySelectorAll(".animate-production-galery-card");
  const xlCards = document
    .querySelector("#xlProductionCard")
    .querySelectorAll(".animate-production-galery-card");
  let delay = 0; // Initial delay

  if (window.innerWidth > 1280) {
    xlCards.forEach((card, index) => {
      const cardTop = card.getBoundingClientRect().top;

      if (cardTop < window.innerHeight * 0.9) {
        setTimeout(() => {
          card.classList.add("production-galery-visible");
        }, delay);
        delay += 250; // Delay each card by 150ms
      }
    });
  } else {
    normalCards.forEach((card, index) => {
      const cardTop = card.getBoundingClientRect().top;

      if (cardTop < window.innerHeight * 0.9) {
        setTimeout(() => {
          card.classList.add("production-galery-visible");
        }, delay);
        delay += 250; // Delay each card by 150ms
      }
    });
  }
}

window.addEventListener("scroll", revealProductionGaleryCards);
window.addEventListener("load", revealProductionGaleryCards);
// ================= End of Animation =================

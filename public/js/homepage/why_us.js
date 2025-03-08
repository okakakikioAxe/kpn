// ================= Animantion =================
function revealWhyUsCards() {
  const normalCards = document
    .querySelector("#normalWhyUsCard")
    .querySelectorAll(".animate-why-us-card");
  const xlCards = document
    .querySelector("#xlWhyUsCard")
    .querySelectorAll(".animate-why-us-card");

  let delay = 0;

  if (window.innerWidth > 1280) {
    xlCards.forEach((card, index) => {
      const cardTop = card.getBoundingClientRect().top;

      if (cardTop < window.innerHeight * 0.9) {
        setTimeout(() => {
          card.classList.add("why-us-visible");
        }, delay);
        delay += 250; // Delay each card by 150ms
      }
    });
  } else {
    normalCards.forEach((card, index) => {
      const cardTop = card.getBoundingClientRect().top;

      if (cardTop < window.innerHeight * 0.9) {
        setTimeout(() => {
          card.classList.add("why-us-visible");
        }, delay);
        delay += 250; // Delay each card by 150ms
      }
    });
  }
}

window.addEventListener("scroll", revealWhyUsCards);
window.addEventListener("load", revealWhyUsCards);
// ================= End of Animation =================

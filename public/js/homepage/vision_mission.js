// ================= Animantion =================
function revealVisionMisionCards() {
  const cards = document.querySelectorAll(".animate-vision-mission-card");

  let delay = 0;

  cards.forEach((card, index) => {
    const cardTop = card.getBoundingClientRect().top;

    if (cardTop < window.innerHeight * 0.9) {
      setTimeout(() => {
        card.classList.add("vision-mission-visible");
      }, delay);
      delay += 250; // Delay each card by 150ms
    }
  });
}

window.addEventListener("scroll", revealVisionMisionCards);
window.addEventListener("load", revealVisionMisionCards);
// ================= End of Animation =================

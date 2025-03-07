// ================= Animation =================
function revealAboutUsCards() {
  const cards = document.querySelectorAll(".animate-about-us-card");
  let delay = 0; // Initial delay

  cards.forEach((card, index) => {
    const cardTop = card.getBoundingClientRect().top;

    if (cardTop < window.innerHeight * 0.9) {
      setTimeout(() => {
        card.classList.add("about-us-visible");
      }, delay);
      delay += 250; // Delay each card by 150ms
    }
  });
}

window.addEventListener("scroll", revealAboutUsCards);
window.addEventListener("load", revealAboutUsCards);
// ================= End of Animation =================

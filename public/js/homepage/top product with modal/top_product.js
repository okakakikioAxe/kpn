function revealTopProductCards() {
  const cards = document.querySelectorAll(".animate-top-product-card");

  if (window.innerWidth < 1536) {
    let delay = 0; // Initial delay

    cards.forEach((card, index) => {
      const cardTop = card.getBoundingClientRect().top;

      if (cardTop < window.innerHeight * 0.9) {
        setTimeout(() => {
          card.classList.add("top-product-visible");
        }, delay);
        delay += 250; // Delay each card by 150ms
      }
    });
  } else {
    let delay = 0; // Initial delay

    for (let i = 1; i < cards.length; i += 4) {
      if (
        cards[i] &&
        cards[i].getBoundingClientRect().top < window.innerHeight * 0.9
      ) {
        setTimeout(() => {
          cards[i].classList.add("top-product-visible"); // Card 2
          if (cards[i + 1]) cards[i + 1].classList.add("top-product-visible"); // Card 3
        }, delay);
        delay += 800;
      }

      if (
        cards[i - 1] &&
        cards[i - 1].getBoundingClientRect().top < window.innerHeight * 0.9
      ) {
        setTimeout(() => {
          cards[i - 1].classList.add("top-product-visible"); // Card 1
          if (cards[i + 2]) cards[i + 2].classList.add("top-product-visible"); // Card 4
        }, delay);
        delay += 800;
      }
    }
  }
}

window.addEventListener("scroll", revealTopProductCards);
window.addEventListener("load", revealTopProductCards);

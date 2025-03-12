function revealMapCards() {
  const mapCard = document.querySelector("#googleMap");

  const cardTop = mapCard.getBoundingClientRect().top;
  if (cardTop < window.innerHeight * 0.9) {
    mapCard.classList.add("animate-triangle");
  }
}

window.addEventListener("scroll", revealMapCards);
window.addEventListener("load", revealMapCards);

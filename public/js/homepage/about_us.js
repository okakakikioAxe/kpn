// ================= Animation =================
function revealAboutUsCards() {
  const aboutUsCard = document.getElementById("about-us");

  const cardTop = aboutUsCard.getBoundingClientRect().top;

  if (cardTop < window.innerHeight * 0.9) {
    aboutUsCard.classList.add("about-us-visible");
  }
}

window.addEventListener("scroll", revealAboutUsCards);
window.addEventListener("load", revealAboutUsCards);
// ================= End of Animation =================

function revealAboutUsCards() {
  const aboutUsCard = document.querySelectorAll(".animate-about-us");

  let delay = 0;

  aboutUsCard.forEach((card, index) => {
    const cardTop = card.getBoundingClientRect().top;

    if (cardTop < window.innerHeight * 0.9) {
      setTimeout(() => {
        card.classList.add("about-us-visible");
      }, delay);
      delay += 250; // Delay each card by 150ms
    }
  });
}

function smoothScrollTo(targetY, duration = 1000) {
  const startY = window.scrollY;
  const difference = targetY - startY;
  const startTime = performance.now();

  function step(currentTime) {
    const elapsedTime = currentTime - startTime;
    const progress = Math.min(elapsedTime / duration, 1); // Progres 0-1

    // Gunakan easing function (easeInOutQuad)
    const easedProgress =
      progress < 0.5
        ? 2 * progress * progress
        : 1 - Math.pow(-2 * progress + 2, 2) / 2;

    window.scrollTo(0, startY + difference * easedProgress);

    if (elapsedTime < duration) {
      requestAnimationFrame(step);
    }
  }

  requestAnimationFrame(step);
}

document
  .getElementById("aboutUsHeroButton")
  .addEventListener("click", function () {
    const target = document.getElementById("aboutUsSection");
    const targetPosition = target.getBoundingClientRect().top + window.scrollY;
    const offset = window.innerHeight / 2 - target.clientHeight / 2;

    smoothScrollTo(targetPosition - offset, 1200); // 1200ms = 1.2 detik
  });

window.addEventListener("scroll", revealAboutUsCards);
window.addEventListener("load", revealAboutUsCards);

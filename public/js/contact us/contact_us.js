function smoothScrollTo(targetY, duration = 1000) {
  const startY = window.scrollY;
  const difference = targetY - startY;
  const startTime = performance.now();

  function step(currentTime) {
    const elapsedTime = currentTime - startTime;
    const progress = Math.min(elapsedTime / duration, 1);
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
  .getElementById("contactUsHeroButton")
  .addEventListener("click", function () {
    const target = document.getElementById("contactSection");
    const targetPosition = target.getBoundingClientRect().top + window.scrollY;
    const offset = window.innerHeight / 2 - target.clientHeight / 2;

    smoothScrollTo(targetPosition - offset, 1200);
  });

document.getElementById("contactForm").addEventListener("submit", function (e) {
  const name = document.getElementById("name").value;
  const email = document.getElementById("email").value;
  const phoneNumber = document.getElementById("phone").value;
  const instantion = document.getElementById("instantion").value;
  const message = document.getElementById("message").value;
  let templateMessage =
    `Halo, saya ` +
    name +
    ` dari ` +
    instantion +
    `ingin bertanya tentang ` +
    message +
    `. Untuk menghubungi saya melalui nomor telepon ` +
    phoneNumber;

  email == ""
    ? (templateMessage += ". Terima kasih.")
    : (templateMessage += ` atau email ` + email + `. Terima kasih.`);

  console.log(templateMessage);
  const whatsappURL = `https://wa.me/+6282160050005?text=${encodeURIComponent(templateMessage)}`;

  window.open(whatsappURL, "_blank");
});

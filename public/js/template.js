// ================= navbar section =================
const mobileMenu = document.getElementById("mobile-menu");
const openIcon = document.getElementById("open-menu-icon");
const closeIcon = document.getElementById("close-menu-icon");

function toggleMenu() {
  if (mobileMenu.classList.contains("translate-x-full")) {
    // Slide in dari kanan ke kiri
    mobileMenu.classList.remove("translate-x-full");
    mobileMenu.classList.add("translate-x-0");
    openIcon.classList.add("hidden");
    closeIcon.classList.remove("hidden");
  } else {
    // Slide out ke kanan
    mobileMenu.classList.remove("translate-x-0");
    mobileMenu.classList.add("translate-x-full");
    openIcon.classList.remove("hidden");
    closeIcon.classList.add("hidden");
  }
}
// ================= end of navbar section =================

document
  .getElementById("dropdownButton1")
  .addEventListener("click", function () {
    if (
      document.getElementById("dropdownMenu1").classList.contains("opacity-100")
    ) {
      document
        .getElementById("dropdownMenu1")
        .classList.replace("opacity-100", "opacity-0");
      document
        .getElementById("dropdownMenu1")
        .classList.replace("visible", "invisible");
      document.getElementById("dropdownIcon1").classList.remove("rotate-180");
      setTimeout(() => {
        document
          .getElementById("dropdownMenu1Container")
          .classList.replace("flex", "hidden");
      }, 300);
    } else {
      document
        .getElementById("dropdownMenu1Container")
        .classList.replace("hidden", "flex");
      setTimeout(() => {
        document
          .getElementById("dropdownMenu1")
          .classList.replace("opacity-0", "opacity-100");
        document
          .getElementById("dropdownMenu1")
          .classList.replace("invisible", "visible");
        document.getElementById("dropdownIcon1").classList.add("rotate-180");
      }, 50);
    }
  });

document
  .getElementById("dropdownButton2")
  .addEventListener("click", function () {
    if (
      document.getElementById("dropdownMenu2").classList.contains("opacity-100")
    ) {
      document
        .getElementById("dropdownMenu2")
        .classList.replace("opacity-100", "opacity-0");
      document
        .getElementById("dropdownMenu2")
        .classList.replace("visible", "invisible");
      document.getElementById("dropdownIcon2").classList.remove("rotate-180");
    } else {
      document
        .getElementById("dropdownMenu2")
        .classList.replace("opacity-0", "opacity-100");
      document
        .getElementById("dropdownMenu2")
        .classList.replace("invisible", "visible");
      document.getElementById("dropdownIcon2").classList.add("rotate-180");
    }
  });

document
  .getElementById("dropdownButton3")
  .addEventListener("click", function () {
    if (
      document.getElementById("dropdownMenu3").classList.contains("opacity-100")
    ) {
      document
        .getElementById("dropdownMenu3")
        .classList.replace("opacity-100", "opacity-0");
      document
        .getElementById("dropdownMenu3")
        .classList.replace("visible", "invisible");
      // document.getElementById('dropdownIcon3').style.transform = "rotate(180deg)";
      document.getElementById("dropdownIcon3").classList.remove("rotate-180");
    } else {
      document
        .getElementById("dropdownMenu3")
        .classList.replace("opacity-0", "opacity-100");
      document
        .getElementById("dropdownMenu3")
        .classList.replace("invisible", "visible");
      document.getElementById("dropdownIcon3").classList.add("rotate-180");
    }
  });

document
  .getElementById("dropdownButton4")
  .addEventListener("click", function () {
    if (
      document.getElementById("dropdownMenu4").classList.contains("opacity-100")
    ) {
      document
        .getElementById("dropdownMenu4")
        .classList.replace("opacity-100", "opacity-0");
      document
        .getElementById("dropdownMenu4")
        .classList.replace("visible", "invisible");
      document.getElementById("dropdownIcon4").classList.remove("rotate-180");
    } else {
      document
        .getElementById("dropdownMenu4")
        .classList.replace("opacity-0", "opacity-100");
      document
        .getElementById("dropdownMenu4")
        .classList.replace("invisible", "visible");
      document.getElementById("dropdownIcon4").classList.add("rotate-180");
    }
  });

function resetDropdown() {
  document
    .getElementById("dropdownMenu1")
    .classList.replace("opacity-100", "opacity-0");
  document
    .getElementById("dropdownMenu1")
    .classList.replace("visible", "invisible");
  document.getElementById("dropdownIcon1").classList.remove("rotate-180");

  document
    .getElementById("dropdownMenu2")
    .classList.replace("opacity-100", "opacity-0");
  document
    .getElementById("dropdownMenu2")
    .classList.replace("visible", "invisible");
  document.getElementById("dropdownIcon2").classList.remove("rotate-180");

  document
    .getElementById("dropdownMenu3")
    .classList.replace("opacity-100", "opacity-0");
  document
    .getElementById("dropdownMenu3")
    .classList.replace("visible", "invisible");
  document.getElementById("dropdownIcon3").classList.remove("rotate-180");

  document
    .getElementById("dropdownMenu4")
    .classList.replace("opacity-100", "opacity-0");
  document
    .getElementById("dropdownMenu4")
    .classList.replace("visible", "invisible");
  document.getElementById("dropdownIcon4").classList.remove("rotate-180");
}
window.addEventListener("resize", resetDropdown);

document.addEventListener("DOMContentLoaded", function () {
  const links = document.querySelectorAll(".nav-link");
  const currentURL = window.location.href;

  links.forEach((link) => {
    if (currentURL === link.href) {
      link.classList.add("bg-gray-900", "text-white"); // Apply active styles
      link.classList.remove(
        "text-gray-300",
        "hover:bg-gray-700",
        "hover:text-white"
      ); // Remove hover styles
    }
  });
});

function beforeNavigate(callback) {
  () => toggleMenu();

  // Simulate an async task (e.g., saving data, API request)
  setTimeout(() => {
    console.log("Function complete. Navigating now...");
    callback();
  }, 1000); // Delay navigation for 1 second
}

document.querySelectorAll(".nav-link-mobile").forEach((link) => {
  link.addEventListener("click", function (event) {
    event.preventDefault(); // Stop instant navigation

    beforeNavigate(() => {
      window.location.href = this.href; // Navigate after function completes
    });
  });
});

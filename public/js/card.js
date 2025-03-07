// ================= navbar section =================
const mobileMenu = document.getElementById("mobile-menu");
const openIcon = document.getElementById("open-menu-icon");
const closeIcon = document.getElementById("close-menu-icon");
// ==================================================

let totalCards = 4;

// ================= why us section =================
let whyUsIndex = 0;
const whyUsCarousel = document.getElementById("whyUsCarousel");

// ==================================================

// ================= about us section =================
let aboutUsIndex = 0;
const aboutUsCarousel = document.getElementById("aboutUsCarousel");
// ==================================================

// ================= production galery section =================
let productionGaleryIndex = 0;
const productionGaleryCarousel = document.getElementById(
  "productionGaleryCarousel",
);
// ==================================================

// ================= user review section =================
let userReviewIndex = 0;
const userReviewCarousel = document.getElementById("userReviewCarousel");
// ==================================================

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

function updateCarousel(carouselElement, carouselIndex) {
  const percentage = -(
    (carouselIndex * (totalCards == 4 ? 100 : 50)) /
    totalCards
  );
  carouselElement.style.transform = `translateX(${percentage}%)`;
}

function updateCarouselIndicator(idPrefix, prevIndex, currentIndex) {
  totalCards = 4;
  document
    .getElementById(idPrefix + prevIndex)
    .classList.remove("bg-royal-azure");
  document.getElementById(idPrefix + prevIndex).classList.add("bg-soft-silver");
  document
    .getElementById(idPrefix + currentIndex)
    .classList.remove("bg-soft-silver");
  document
    .getElementById(idPrefix + currentIndex)
    .classList.add("bg-royal-azure");
}

function prevCarouselButton(carouselName) {
  if (carouselName == "aboutUsCarousel") {
    prevAboutUsindex = aboutUsIndex;
    aboutUsIndex = aboutUsIndex > 0 ? aboutUsIndex - 1 : totalCards - 1;
    updateCarouselIndicator(
      "aboutUsCarouselIndicator",
      prevAboutUsindex,
      aboutUsIndex,
    );
    updateCarousel(aboutUsCarousel, aboutUsIndex);
  } else if (carouselName == "productionGaleryCarousel") {
    prevProductionGaleryindex = productionGaleryIndex;
    productionGaleryIndex =
      productionGaleryIndex > 0 ? productionGaleryIndex - 1 : totalCards - 1;
    updateCarouselIndicator(
      "productionGaleryCarouselIndicator",
      prevProductionGaleryindex,
      productionGaleryIndex,
    );
    updateCarousel(productionGaleryCarousel, productionGaleryIndex);
  } else if (carouselName == "userReviewCarousel") {
    prevUserReviewindex = userReviewIndex;
    userReviewIndex =
      userReviewIndex > 0 ? userReviewIndex - 1 : totalCards - 1;
    updateCarouselIndicator(
      "userReviewCarouselIndicator",
      prevUserReviewindex,
      userReviewIndex,
    );
    updateCarousel(userReviewCarousel, userReviewIndex);
  }
}

function nextCarouselButton(carouselName, customTotalCards = 4) {
  if (customTotalCards != 4) {
    totalCards = customTotalCards;
  }

  if (carouselName == "aboutUsCarousel") {
    prevAboutUsindex = aboutUsIndex;
    aboutUsIndex = aboutUsIndex < totalCards - 1 ? aboutUsIndex + 1 : 0;
    updateCarouselIndicator(
      "aboutUsCarouselIndicator",
      prevAboutUsindex,
      aboutUsIndex,
    );
    updateCarousel(aboutUsCarousel, aboutUsIndex);
  } else if (carouselName == "productionGaleryCarousel") {
    prevProductionGaleryindex = productionGaleryIndex;
    productionGaleryIndex =
      productionGaleryIndex < totalCards - 1 ? productionGaleryIndex + 1 : 0;
    updateCarouselIndicator(
      "productionGaleryCarouselIndicator",
      prevProductionGaleryindex,
      productionGaleryIndex,
    );
    updateCarousel(productionGaleryCarousel, productionGaleryIndex);
  } else if (carouselName == "userReviewCarousel") {
    prevUserReviewindex = userReviewIndex;
    userReviewIndex =
      userReviewIndex < totalCards - 1 ? userReviewIndex + 1 : 0;
    updateCarouselIndicator(
      "userReviewCarouselIndicator",
      prevUserReviewindex,
      userReviewIndex,
    );
    updateCarousel(userReviewCarousel, userReviewIndex);
  }
}

// ==================================== about us section ====================================
function resetAboutUsCarousel() {
  if (window.innerWidth >= 640) {
    updateCarouselIndicator("aboutUsCarouselIndicator", aboutUsIndex, 0);
    aboutUsIndex = 0;
    aboutUsCarousel.style.transform = "translateX(0)";
  }
}
// =========================== end of about us section ===========================

// ==================================== about us section ====================================
function resetProductionGaleryCarousel() {
  if (window.innerWidth >= 640) {
    updateCarouselIndicator(
      "productionGaleryCarouselIndicator",
      productionGaleryIndex,
      0,
    );
    productionGaleryIndex = 0;
    productionGaleryCarousel.style.transform = "translateX(0)";
  }
}
// =========================== end of about us section ===========================

// ==================================== about us section ====================================
function resetUserReviewCarousel() {
  if (window.innerWidth >= 640) {
    updateCarouselIndicator("userReviewCarouselIndicator", userReviewIndex, 0);
    userReviewIndex = 0;
    userReviewCarousel.style.transform = "translateX(0)";
  }
}
// =========================== end of about us section ===========================
window.addEventListener("resize", resetAboutUsCarousel);
window.addEventListener("load", resetAboutUsCarousel);
window.addEventListener("resize", resetProductionGaleryCarousel);
window.addEventListener("load", resetProductionGaleryCarousel);
window.addEventListener("resize", resetUserReviewCarousel);
window.addEventListener("resize", resetUserReviewCarousel);
window.addEventListener("load", resetUserReviewCarousel);
window.addEventListener("resize", closeDropDownMenu);

const dropdownButton1 = document.getElementById("dropdownButton1");
const dropdownButton2 = document.getElementById("dropdownButton2");
const dropdownMenu1 = document.getElementById("dropdownMenu1");
const dropdownMenu2 = document.getElementById("dropdownMenu2");
const dropdownIcon1 = document.getElementById("dropdownIcon1");
const dropdownIcon2 = document.getElementById("dropdownIcon2");

function closeDropDownMenu() {
  dropdownMenu1.classList.remove("opacity-100", "scale-100", "visible");
  dropdownMenu1.classList.add("opacity-0", "scale-95", "invisible");
  dropdownMenu2.classList.remove("opacity-100", "scale-100", "visible");
  dropdownMenu2.classList.add("opacity-0", "scale-95", "invisible");
  dropdownIcon1.classList.remove("rotate-180");
  dropdownIcon2.classList.remove("rotate-180");
  isOpen = false;
}

let isOpen = false;

dropdownButton1.addEventListener("click", () => {
  isOpen = dropdownMenu1.classList.contains("opacity-100");

  if (isOpen) {
    closeDropDownMenu();
  } else {
    dropdownMenu1.classList.remove("opacity-0", "scale-95", "invisible");
    dropdownMenu1.classList.add("opacity-100", "scale-100", "visible");
    dropdownIcon1.classList.add("rotate-180");
  }
});

dropdownButton2.addEventListener("click", () => {
  isOpen = dropdownMenu2.classList.contains("opacity-100");

  if (isOpen) {
    closeDropDownMenu();
  } else {
    dropdownMenu2.classList.remove("opacity-0", "scale-95", "invisible");
    dropdownMenu2.classList.add("opacity-100", "scale-100", "visible");
    dropdownIcon2.classList.add("rotate-180");
  }
});

// Close dropdown when clicking outside
document.addEventListener("click", (event) => {
  if (
    !dropdownButton1.contains(event.target) &&
    !dropdownMenu1.contains(event.target)
  ) {
    dropdownMenu1.classList.add("opacity-0", "scale-95", "invisible");
    dropdownMenu1.classList.remove("opacity-100", "scale-100", "visible");
    dropdownIcon1.classList.remove("rotate-180");
  }
});

// Close dropdown when clicking outside
document.addEventListener("click", (event) => {
  if (
    !dropdownButton2.contains(event.target) &&
    !dropdownMenu2.contains(event.target)
  ) {
    dropdownMenu2.classList.add("opacity-0", "scale-95", "invisible");
    dropdownMenu2.classList.remove("opacity-100", "scale-100", "visible");
    dropdownIcon2.classList.remove("rotate-180");
  }
});

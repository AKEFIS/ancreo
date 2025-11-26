const menuToggle = document.querySelector("#menu-toggle");
const mobileMenu = document.querySelector("#mobile-menu");
const menuIcon = document.querySelector("#menu-icon");
const closeIcon = document.querySelector("#close-icon");

const servicesToggle = document.querySelector("#services-toggle");
const subMenu = document.querySelector("#submenu-mobile");
const chevron = document.querySelector("#chevron");

menuToggle.addEventListener("click", () => {
  mobileMenu.classList.toggle("hidden");
  menuIcon.classList.toggle("hidden");
  closeIcon.classList.toggle("hidden");
});

servicesToggle.addEventListener("click", () => {
  subMenu.classList.toggle("hidden");
  chevron.classList.toggle("rotate-180");
});

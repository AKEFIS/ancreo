// Navbar Mobile

const menuToggle = document.querySelector("#menu-toggle");
const mobileMenu = document.querySelector("#mobile-menu");
const menuIcon = document.querySelector("#menu-icon");
const closeIcon = document.querySelector("#close-icon");

const servicesToggle = document.querySelector("#services-toggle");
const subMenuMobile = document.querySelector("#submenu-mobile");
const chevron = document.querySelector("#chevron");

menuToggle?.addEventListener("click", () => {
  const isOpening = mobileMenu.classList.contains("hidden");

  mobileMenu.classList.toggle("hidden");
  menuIcon.classList.toggle("hidden");
  closeIcon.classList.toggle("hidden");

  if (isOpening) {
    gsap.fromTo(
      mobileMenu,
      { backgroundColor: "rgba(0,0,0,0)" },
      { backgroundColor: "#2b2b2b", duration: 0.4, ease: "power2.out" }
    );

    gsap.from("#mobile-menu > ul > li", {
      x: -100,
      opacity: 0,
      stagger: 0.15,
      duration: 0.5,
      ease: "power2.out",
    });
  } else {}
});

// Submenu Mobile

servicesToggle?.addEventListener("click", () => {
  const isHidden = subMenuMobile.classList.contains("hidden");

  if (isHidden) {
    subMenuMobile.classList.remove("hidden");
    gsap.to(chevron, { rotation: 180, duration: 0.3 });

    gsap.from("#submenu-mobile li", {
      y: -20,
      opacity: 0,
      stagger: 0.1,
      duration: 0.4,
      ease: "back.out(1.7)",
    });

  } else {
    gsap.to(chevron, { rotation: 0, duration: 0.3 });

    gsap.to("#submenu-mobile li", {
      y: -10,
      opacity: 0,
      stagger: 0.05,
      duration: 0.2,
      onComplete: () => {
        subMenuMobile.classList.add("hidden");
        gsap.set("#submenu-mobile li", { clearProps: "all" });
      },
    });
  }
});

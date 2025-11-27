// Submenu Desktop

const submenuDesktop = document.querySelector("#submenu-desktop");
const desktopMenuTrigger = submenuDesktop?.parentElement;

if (submenuDesktop && desktopMenuTrigger) {
  const submenuItems = submenuDesktop.querySelectorAll("li");

  const desktopHover = gsap.timeline({ 
    paused: true,
    defaults: { ease: "power2.out" }
  });

  desktopHover.fromTo(
    submenuDesktop,
    { 
      opacity: 0, 
      y: -15, 
      pointerEvents: "none",
      display: "none"
    },
    {
      opacity: 1,
      y: 0,
      pointerEvents: "auto",
      display: "block",
      duration: 0.15
    }
  );

  desktopHover.fromTo(
    submenuItems,
    {
      opacity: 0,
      x: -10
    },
    {
      opacity: 1,
      x: 0,
      duration: 0.2,
      stagger: 0.1,
    },
  );

  let hoverTimeout;

  desktopMenuTrigger.addEventListener("mouseenter", () => {
    clearTimeout(hoverTimeout);
    desktopHover.play();
  });

  desktopMenuTrigger.addEventListener("mouseleave", () => {
    hoverTimeout = setTimeout(() => {
      desktopHover.reverse();
    });
  });

  submenuDesktop.addEventListener("mouseenter", () => {
    clearTimeout(hoverTimeout);
  });

  submenuDesktop.addEventListener("mouseleave", () => {
    hoverTimeout = setTimeout(() => {
      desktopHover.reverse();
    }, 100);
  });
}
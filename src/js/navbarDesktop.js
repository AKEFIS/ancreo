// Submenu desktop

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
      opacity: 1,
      scaleY: 0,
      transformOrigin: "top",
      pointerEvents: "none",
      display: "none"
    },
    {
      opacity: 1,
      scaleY: 1,
      pointerEvents: "auto",
      display: "block",
      duration: 0.15,
      ease: "power2.out"
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
      duration: 0,
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
    });
  });
}
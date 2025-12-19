if (history.scrollRestoration) {
  history.scrollRestoration = 'manual';
}
window.scrollTo(0, 0);

gsap.registerPlugin(ScrollTrigger);

const items = document.querySelectorAll(".accordion-item");
const defaultOpen = true;

// --- RÉGLAGES ---
const desktopOverlap = 92;  // Superposition sur PC (négatif)
const mobileGap = 30;       // Espace sur Téléphone/Tablette (positif)

// ICI : On augmente la limite pour inclure les tablettes (iPad Pro, etc.)
const mobileBreakpoint = 1025;

// Variables d'état
let currentSelectedItem = null;
let currentSelectedIndex = null;
let isAccordionExpanded = false;
const baseRotation = 0;

let maxOpenHeight = 0;

// --- 1. CALCUL DES HAUTEURS ---
function calculateHeights() {
  maxOpenHeight = 0;

  items.forEach((item) => {
    const content = item.querySelector(".accordion-content");
    const header = item.querySelector("h3");

    const prevHeight = item.style.height;
    item.style.height = 'auto';
    content.style.height = 'auto';

    const itemStyle = getComputedStyle(item);
    const paddingTop = parseFloat(itemStyle.paddingTop) || 0;
    const paddingBottom = parseFloat(itemStyle.paddingBottom) || 0;
    const closedHeight = header.offsetHeight + paddingTop + paddingBottom;
    const contentHeight = content.scrollHeight;
    const openHeight = closedHeight + contentHeight;

    if (openHeight > maxOpenHeight) {
      maxOpenHeight = openHeight;
    }

    item.dataset.closedHeight = closedHeight;
    item.style.height = prevHeight;
  });
}

// --- 2. FONCTION CENTRALE DE MISE EN PAGE ---
function updatePositions() {
  const isMobileOrTablet = window.innerWidth < mobileBreakpoint;

  items.forEach((item, index) => {

    // --- MODE MOBILE & TABLETTE (LISTE SIMPLE) ---
    if (isMobileOrTablet) {
      // Marge positive pour bien séparer les cartes
      const targetMargin = index > 0 ? mobileGap : 0;
      gsap.to(item, { marginTop: targetMargin, duration: 0.5 });
      return; // On s'arrête là
    }

    // --- MODE ORDINATEUR (DECK OF CARDS) ---
    const closedHeight = parseFloat(item.dataset.closedHeight);
    let targetMargin = 0;

    if (index > 0) {
      // 1. Base : Tout le monde est empilé à -92px
      targetMargin = -desktopOverlap;

      // 2. Si une carte est sélectionnée
      if (currentSelectedIndex !== null) {
        // Si la carte est APRÈS la sélectionnée, elle descend
        if (index > currentSelectedIndex) {
          const spacing = maxOpenHeight - closedHeight;
          const extra = 33;
          targetMargin = -desktopOverlap + spacing + extra;
        }
        // Les cartes AVANT ou la carte ACTIVE restent à -92px
      }
    }

    // Mode "Tout ouvert" (ScrollTrigger bas)
    if (isAccordionExpanded) {
      targetMargin = 0;
    }

    gsap.to(item, { marginTop: targetMargin, duration: 0.5, ease: "power2.out" });
  });
}

calculateHeights();

// --- 3. INITIALISATION DES ITEMS ---
items.forEach((item, index) => {
  const content = item.querySelector(".accordion-content");
  const icon = item.querySelector(".icon");
  const isMobileOrTablet = window.innerWidth < mobileBreakpoint;

  gsap.set(item, { opacity: 0 });

  item.style.overflow = "hidden";
  content.style.overflow = "hidden";
  content.classList.remove("h-0");

  // Initialisation des marges
  if (index > 0) {
    item.style.marginTop = isMobileOrTablet ? `${mobileGap}px` : `-${desktopOverlap}px`;
  }

  // Hauteur MAX tout le temps
  gsap.set(item, { height: maxOpenHeight });
  gsap.set(content, { height: content.scrollHeight });
  gsap.set(icon, { rotate: baseRotation });

  // --- 4. GESTION DU CLIC ---
  item.addEventListener("click", () => {
    // SUR MOBILE ET TABLETTE : On ne fait RIEN.
    if (window.innerWidth < mobileBreakpoint) return;

    if (isAccordionExpanded) return;
    if (!item.classList.contains('revealed')) return;

    // --- CAS A : DÉSÉLECTION (Clic sur la même carte) ---
    if (currentSelectedItem === item) {
      gsap.to(icon, { rotate: baseRotation, duration: 0.2 });

      // Reset total
      items.forEach(other => {
        const otherContent = other.querySelector(".accordion-content");
        if (other.classList.contains('revealed')) {
          gsap.to(other, { opacity: 1, duration: 0.4 });
        }
        // Texte visible
        gsap.to(otherContent, { opacity: 1, duration: 0.4 });
      });

      currentSelectedItem = null;
      currentSelectedIndex = null;
      updatePositions();
      return;
    }

    // --- CAS B : SÉLECTION (Nouvelle carte) ---
    const clickedIndex = index;

    items.forEach((other, otherIndex) => {
      const otherContent = other.querySelector(".accordion-content");
      const otherIcon = other.querySelector(".icon");

      // 1. Icônes
      if (other === item) {
        gsap.to(otherIcon, { rotate: baseRotation + 90, duration: 0.2 });
      } else {
        gsap.to(otherIcon, { rotate: baseRotation, duration: 0.2 });
      }

      // 2. Opacité Carte
      let cardOpacity = 0;
      if (other === item) {
        cardOpacity = 1;
      } else if (other.classList.contains('revealed')) {
        cardOpacity = 0.6;
      }
      gsap.to(other, { opacity: cardOpacity, duration: 0.5 });

      // 3. Opacité Texte
      // AVANT = Caché / PENDANT et APRÈS = Visible
      let textOpacity = 1;
      if (otherIndex < clickedIndex) {
        textOpacity = 0;
      } else {
        textOpacity = 1;
      }
      gsap.to(otherContent, { opacity: textOpacity, duration: 0.4 });
    });

    currentSelectedItem = item;
    currentSelectedIndex = index;

    updatePositions();

    item.style.zIndex = 10;
    setTimeout(() => { item.style.zIndex = ""; }, 500);

    ScrollTrigger.refresh();
  });

  // --- SCROLL TRIGGER (Apparition initiale) ---
  const tl = gsap.timeline({
    scrollTrigger: {
      trigger: item,
      start: "top 80%",
      once: true,
    }
  });

  tl.from(item, { y: 60, duration: 1, ease: "power2.out" }, 0);

  tl.add(() => {
    const isMobileNow = window.innerWidth < mobileBreakpoint;

    // Sur mobile/tablette, on affiche tout direct
    let targetOpacity = 1;
    if (!isMobileNow) {
      const isDimmed = currentSelectedItem && currentSelectedItem !== item;
      targetOpacity = isDimmed ? 0.6 : 1;
    }

    gsap.to(item, {
      opacity: targetOpacity,
      duration: 1,
      ease: "power2.out",
      onComplete: () => {
        item.classList.add('revealed');

        // Logique Desktop uniquement
        if (!isMobileNow && currentSelectedItem && currentSelectedItem !== item) {
          // Carte "après" qui apparait -> Texte visible
          gsap.to(item, { opacity: 0.6, duration: 0.2, overwrite: true });
          gsap.to(content, { opacity: 1, duration: 0.2, overwrite: true });
        }
      }
    });
  }, 0);
});

// --- SCROLL TRIGGER GLOBAL ---
const accordion = document.getElementById('accordion');
if (accordion) {
  ScrollTrigger.create({
    trigger: accordion,
    start: 'bottom 50%',
    onEnter: () => {
      // Uniquement utile sur Desktop
      if (window.innerWidth >= mobileBreakpoint) {
        isAccordionExpanded = true;
        items.forEach((it) => {
          it.classList.add('revealed');
          const ic = it.querySelector('.icon');
          const c = it.querySelector('.accordion-content');

          gsap.to(it, { opacity: 1, duration: 0.45, ease: 'power2.out' });
          gsap.to(c, { opacity: 1, duration: 0.45 });
          gsap.to(ic, { rotate: baseRotation + 90, duration: 0.35, ease: 'power2.out' });

          it.classList.add('pointer-events-none');
        });
        updatePositions();
        currentSelectedItem = null;
        currentSelectedIndex = null;
      }
    },
    onLeaveBack: () => {
      if (window.innerWidth >= mobileBreakpoint) {
        isAccordionExpanded = false;
        items.forEach((it) => {
          const ic = it.querySelector('.icon');
          const c = it.querySelector('.accordion-content');

          it.classList.remove('pointer-events-none');

          gsap.to(it, { opacity: 1, duration: 0.35, ease: 'power2.out' });
          gsap.to(c, { opacity: 1, duration: 0.35 });

          gsap.to(ic, { rotate: baseRotation, duration: 0.3, ease: 'power2.out' });
        });
        updatePositions();
      }
    }
  });
}

// --- RESIZE ---
let resizeTimeout;
window.addEventListener("resize", () => {
  clearTimeout(resizeTimeout);
  resizeTimeout = setTimeout(() => {
    calculateHeights();
    items.forEach(item => {
      gsap.set(item, { height: maxOpenHeight });

      // Reset si passage en mode mobile/tablette
      if (window.innerWidth < mobileBreakpoint) {
        gsap.set(item, { opacity: 1 });
        const c = item.querySelector('.accordion-content');
        gsap.set(c, { opacity: 1 });
      }
    });
    updatePositions();
  }, 100);
});
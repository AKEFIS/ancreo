if (history.scrollRestoration) {
  history.scrollRestoration = 'manual';
}
window.scrollTo(0, 0);

gsap.registerPlugin(ScrollTrigger);

const items = document.querySelectorAll(".accordion-item");
const defaultOpen = true;
let currentSelectedItem = null;
let currentSelectedIndex = null;

// nouveau drapeau : true quand le bloc est en mode "tout montré"
let isAccordionExpanded = false;

// rotation de base : afficher un PLUS (0deg)
const baseRotation = 0;

// Calculer la hauteur maximale de toutes les cards
let maxOpenHeight = 0;

items.forEach((item, index) => {
  const content = item.querySelector(".accordion-content");
  const header = item.querySelector("h3");

  item.style.overflow = "hidden";
  content.style.overflow = "hidden";
  content.classList.remove("h-0");

  const itemStyle = getComputedStyle(item);
  const paddingTop = parseFloat(itemStyle.paddingTop) || 0;
  const paddingBottom = parseFloat(itemStyle.paddingBottom) || 0;
  const closedHeight = header.offsetHeight + paddingTop + paddingBottom;

  const contentHeight = content.scrollHeight;
  const openHeight = closedHeight + contentHeight;

  // Trouver la hauteur maximale
  if (openHeight > maxOpenHeight) {
    maxOpenHeight = openHeight;
  }
});

// Maintenant appliquer avec la hauteur uniforme
items.forEach((item, index) => {
  const content = item.querySelector(".accordion-content");
  const icon = item.querySelector(".icon");
  const header = item.querySelector("h3");

  const itemStyle = getComputedStyle(item);
  const paddingTop = parseFloat(itemStyle.paddingTop) || 0;
  const paddingBottom = parseFloat(itemStyle.paddingBottom) || 0;
  const closedHeight = header.offsetHeight + paddingTop + paddingBottom;

  const contentHeight = content.scrollHeight;

  // Superposition modérée
  if (index > 0) {
    item.style.marginTop = "-92px";
  }

  // état initial des hauteurs et icônes
  if (defaultOpen) {
    gsap.set(item, { height: maxOpenHeight });
    gsap.set(content, { height: contentHeight });
  } else {
    gsap.set(item, { height: closedHeight });
    gsap.set(content, { height: 0 });
  }
  // icône = PLUS par défaut
  gsap.set(icon, { rotate: baseRotation });

  item.addEventListener("click", () => {
    // Si l'accordéon est en mode "tout montré", ignorer les clics
    if (isAccordionExpanded) return;

    const curContentHeight = content.scrollHeight;

    // Si on clique sur la même card, la désélectionner -> tout revenir à la position de base
    if (currentSelectedItem === item) {
      items.forEach((otherItem, otherIndex) => {
        const otherIcon = otherItem.querySelector(".icon");
        gsap.to(otherItem, {
          marginTop: otherIndex > 0 ? "-92px" : 0,
          opacity: 1,
          duration: 0.4,
          ease: "power2.out"
        });
        gsap.to(otherIcon, { rotate: baseRotation, duration: 0 });
      });
      currentSelectedItem = null;
      currentSelectedIndex = null;
      return;
    }

    // --- rotation immédiate de l'icône cliquée ---
    gsap.killTweensOf(icon);
    gsap.to(icon, { rotate: "+=90deg", duration: 0.1, ease: "power2.out" });
    // -----------------------------------------------

    // Réinitialiser l'opacity et les icônes des AUTRES items (exclut l'item cliqué)
    items.forEach((otherItem) => {
      if (otherItem !== item) {
        const otherIcon = otherItem.querySelector(".icon");
        gsap.to(otherItem, { opacity: 1, duration: 0.2 });
        // Revenir à la position de base SEULEMENT si ce n'est pas la card sélectionnée
        gsap.to(otherIcon, { rotate: baseRotation, duration: 0.2 });
      }
    });

    // Réinitialiser TOUTES les positions avant de sélectionner la nouvelle
    items.forEach((otherItem, otherIndex) => {
      gsap.to(otherItem, {
        marginTop: otherIndex > 0 ? "-92px" : 0,
        duration: 0.3,
        ease: "power2.out"
      });
    });

    // Sélectionner la nouvelle card
    currentSelectedItem = item;
    currentSelectedIndex = index;

    // Écarter UNIQUEMENT les cards APRÈS la sélectionnée
    items.forEach((otherItem, otherIndex) => {
      const otherIcon = otherItem.querySelector(".icon");
      if (otherItem !== item) {
        const spacing = otherIndex > currentSelectedIndex ? (maxOpenHeight - closedHeight) : 0;
        const extra = otherIndex > currentSelectedIndex ? 33 : 0;
        gsap.to(otherItem, {
          marginTop: otherIndex > 0 ? `calc(-92px + ${spacing}px + ${extra}px)` : 0,
          opacity: 0.6,
          duration: 0.5,
          ease: "power2.out"
        });
        // Revenir à la position de base
        gsap.to(otherIcon, { rotate: baseRotation, duration: 0 });
      } else {
        gsap.to(otherItem, { opacity: 1, duration: 0.5, ease: "power2.out" });
      }
    });

    // Ouvrir la card sélectionnée avec hauteur uniforme
    item.style.zIndex = 10;
    gsap.to(item, {
      height: maxOpenHeight,
      duration: 0.55,
      ease: "power2.out",
      onComplete: () => {
        item.style.zIndex = "";
        ScrollTrigger.refresh();
      }
    });
    gsap.to(content, { height: curContentHeight, duration: 0.5, ease: "power2.out" });
  });

  gsap.timeline({
    scrollTrigger: {
      trigger: item,
      start: "top 80%",
      once: true
    }
  }).from(item, {
    y: 60,
    opacity: 0,
    duration: 1,
    ease: "power2.out"
  });
});

const accordion = document.getElementById('accordion');
if (accordion) {
  ScrollTrigger.create({
    trigger: accordion,
    start: 'bottom 60%',
    // quand on descend et que le bloc atteint 50% => montrer toutes les cards
    onEnter: () => {
      items.forEach((it, i) => {
        const c = it.querySelector('.accordion-content');
        const ic = it.querySelector('.icon');

        // mesurer le contenu actuel
        const contentH = c.scrollHeight;

        // afficher complètement chaque card (hauteur uniforme)
        gsap.to(it, { height: maxOpenHeight, duration: 0.45, ease: 'power2.out' });
        gsap.to(c, { height: contentH, duration: 0.45, ease: 'power2.out' });

        // annuler la superposition pour voir toutes les cards (aligner)
        gsap.to(it, { marginTop: i > 0 ? '0px' : '0px', duration: 0.45, ease: 'power2.out' });

        // icône en "croix"
        gsap.to(ic, { rotate: baseRotation + 90, duration: 0.35, ease: 'power2.out' });

        // s'assurer visibilité
        gsap.to(it, { opacity: 1, duration: 0.25 });
      });

      // Bloquer les clics pendant l'état "tout montré"
      isAccordionExpanded = true;
      items.forEach(it => it.classList.add('pointer-events-none'));

      // marquer qu'aucune card n'est individuellement sélectionnée
      currentSelectedItem = null;
      currentSelectedIndex = null;
    },

    // quand on remonte au-dessus (leaveBack) => restaurer l'état normal
    onLeaveBack: () => {
      items.forEach((it, i) => {
        const c = it.querySelector('.accordion-content');
        const ic = it.querySelector('.icon');
        const header = it.querySelector('h3');

        const style = getComputedStyle(it);
        const padTop = parseFloat(style.paddingTop) || 0;
        const padBottom = parseFloat(style.paddingBottom) || 0;
        const closedH = header.offsetHeight + padTop + padBottom;

        // restaurer superposition et hauteur selon defaultOpen
        gsap.to(it, {
          height: defaultOpen ? maxOpenHeight : closedH,
          duration: 0.35,
          ease: 'power2.out'
        });
        gsap.to(c, {
          height: defaultOpen ? c.scrollHeight : 0,
          duration: 0.35,
          ease: 'power2.out'
        });

        gsap.to(it, {
          marginTop: i > 0 ? '-92px' : 0,
          duration: 0.35,
          ease: 'power2.out'
        });

        // icône revient en "plus"
        gsap.to(ic, { rotate: baseRotation, duration: 0.3, ease: 'power2.out' });

        gsap.to(it, { opacity: 1, duration: 0.2 });
      });

      // réautoriser les clics
      isAccordionExpanded = false;
      items.forEach(it => it.classList.remove('pointer-events-none'));

      currentSelectedItem = null;
      currentSelectedIndex = null;
    }
  });
}
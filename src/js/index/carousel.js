gsap.registerPlugin(ScrollTrigger);

const container = document.getElementById('carousel-container');
const track = document.getElementById('carousel-track');
const cards = Array.from(document.querySelectorAll('.carousel-card'));
const indicators = Array.from(document.querySelectorAll('.carousel-indicator'));
const prevBtn = document.getElementById('carousel-prev');
const nextBtn = document.getElementById('carousel-next');

let currentIndex = 0;
// Espacement (doit correspondre au gap CSS du track, ex: gap-6 ou gap-10)
let gap = window.innerWidth < 640 ? 24 : 40;
let cardWidth = 0;

// Variables pour le Swipe
let startX = 0;
let isDragging = false;
// NOUVEAU : Variable pour empêcher le clic si on est en train de swiper
let isClickBlocked = false;

function init() {
  if (!container || cards.length === 0) return;

  updateDimensions();
  // On force la mise à jour immédiate
  updateCarousel(false);

  // Animation d'entrée du carrousel au scroll
  gsap.from(container, {
    opacity: 0,
    y: 50,
    duration: 1,
    scrollTrigger: {
      trigger: container,
      start: "top 80%"
    }
  });

  // --- NOUVEAU : RENDRE LES CARTES CLIQUABLES ---
  cards.forEach((card, index) => {
    card.addEventListener('click', () => {
      // 1. Si on a détecté un swipe juste avant, on ignore le clic
      if (isClickBlocked) return;

      // 2. Si on clique sur une carte qui n'est pas celle du centre, on y va
      if (currentIndex !== index) {
        goTo(index);
      }
    });
  });

  window.addEventListener('resize', () => {
    updateDimensions();
    updateCarousel(false);
  });
}

function updateDimensions() {
  if (cards[0]) {
    cardWidth = cards[0].offsetWidth;
    gap = window.innerWidth < 640 ? 24 : 40;
  }
}

function updateCarousel(animate = true) {
  // 1. Calcul du centrage
  // Le track est padding-left: 50vw.
  // On décale vers la gauche de : (index * (largeur + gap)) + (largeur / 2)
  const centerOffset = (currentIndex * (cardWidth + gap)) + (cardWidth / 2);
  const x = -centerOffset;

  // Animation du déplacement du track
  if (animate) {
    gsap.to(track, {
      x: x,
      duration: 0.6,
      ease: "power3.out"
    });
  } else {
    gsap.set(track, { x: x });
  }

  // 2. Animation des cartes (Focus / Flou)
  cards.forEach((card, index) => {
    const isActive = index === currentIndex;

    gsap.to(card, {
      scale: isActive ? 1 : 0.9,       // Actif = grand, Autres = petits
      opacity: isActive ? 1 : 0.4,     // Actif = visible, Autres = grisés
      filter: isActive ? "blur(0px)" : "blur(2px)", // Actif = net, Autres = flous
      zIndex: isActive ? 10 : 1,
      duration: 0.6,
      ease: "power3.out"
    });

    // Gestion des bordures (Bleu pour l'actif, Gris pour les autres)
    if (isActive) {
      card.classList.add('border-blue-500');
      card.classList.remove('border-gray');
    } else {
      card.classList.remove('border-blue-500');
      card.classList.add('border-gray');
    }
  });

  // 3. Indicateurs (les petits points)
  indicators.forEach((ind, i) => {
    const isActive = i === currentIndex;
    gsap.to(ind, {
      width: isActive ? 24 : 8,
      backgroundColor: isActive ? '#3b82f6' : 'rgba(156, 163, 175, 0.4)',
      duration: 0.3
    });
  });
}

// --- FONCTION DE NAVIGATION (BOUCLE INFINIE) ---
function goTo(index) {
  // Si on dépasse la fin -> Retour au début
  if (index >= cards.length) {
    currentIndex = 0;
  }
  // Si on recule avant le début -> Aller à la fin
  else if (index < 0) {
    currentIndex = cards.length - 1;
  }
  // Sinon -> Navigation normale
  else {
    currentIndex = index;
  }

  updateCarousel();
}

// --- ÉCOUTEURS D'ÉVÉNEMENTS ---

if (prevBtn) prevBtn.addEventListener('click', () => goTo(currentIndex - 1));
if (nextBtn) nextBtn.addEventListener('click', () => goTo(currentIndex + 1));

indicators.forEach((ind, i) => {
  ind.addEventListener('click', () => goTo(i));
});

// Navigation Clavier
window.addEventListener('keydown', (e) => {
  if (e.key === 'ArrowLeft') goTo(currentIndex - 1);
  if (e.key === 'ArrowRight') goTo(currentIndex + 1);
});


// --- GESTION DU TACTILE (SWIPE) ---

container.addEventListener('mousedown', (e) => {
  isDragging = true;
  startX = e.pageX;
  container.style.cursor = 'grabbing';
});

container.addEventListener('touchstart', (e) => {
  isDragging = true;
  startX = e.touches[0].clientX;
});

window.addEventListener('mouseup', endDrag);
window.addEventListener('touchend', endDrag);

function endDrag(e) {
  if (!isDragging) return;
  isDragging = false;
  container.style.cursor = 'grab';

  let endX = 0;
  if (e.type === 'mouseup') {
    endX = e.pageX;
  } else if (e.changedTouches) {
    endX = e.changedTouches[0].clientX;
  }

  const diff = startX - endX;

  // Si on a glissé de plus de 50px
  if (Math.abs(diff) > 50) {
    // --- CORRECTION ICI : On bloque le clic temporairement ---
    isClickBlocked = true;
    setTimeout(() => { isClickBlocked = false; }, 50); // On débloque après 50ms

    if (diff > 0) {
      // Glissement vers la gauche -> Suivant
      goTo(currentIndex + 1);
    } else {
      // Glissement vers la droite -> Précédent
      goTo(currentIndex - 1);
    }
  }
}

// Démarrage
init();
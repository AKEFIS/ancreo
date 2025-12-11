gsap.registerPlugin(ScrollTrigger);

const container = document.getElementById('carousel-container');
const track = document.getElementById('carousel-track');
const cards = Array.from(document.querySelectorAll('.carousel-card'));
const indicators = Array.from(document.querySelectorAll('.carousel-indicator'));
const prevBtn = document.getElementById('carousel-prev');
const nextBtn = document.getElementById('carousel-next');

let currentIndex = 0;
let gap = window.innerWidth < 640 ? 24 : 40;
let cardWidth = 0;

// Variables pour le Swipe
let startX = 0;
let isDragging = false;
let startTrackX = 0;
let isClickBlocked = false;

function init() {
  if (!container || cards.length === 0) return;

  updateDimensions();
  updateCarousel(false);

  gsap.from(container, {
    opacity: 0,
    y: 50,
    duration: 1,
    scrollTrigger: {
      trigger: container,
      start: "top 80%"
    }
  });

  cards.forEach((card, index) => {
    card.addEventListener('click', () => {
      if (isClickBlocked) return;
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

function getTrackPosition(index) {
  const centerOffset = (index * (cardWidth + gap)) + (cardWidth / 2);
  return -centerOffset;
}

// Fonction dédiée aux styles (appelée pendant le drag aussi)
function updateCardStyles(targetIndex) {
  // On s'assure que l'index est valide (modulo) pour les styles
  // Exemple: si on glisse vers -1, on veut que le style corresponde à la dernière carte
  let visualIndex = targetIndex % cards.length;
  if (visualIndex < 0) visualIndex += cards.length;

  cards.forEach((card, index) => {
    const isActive = index === visualIndex;

    // Transition plus rapide pendant le drag (0.2s) pour la réactivité
    gsap.to(card, {
      scale: isActive ? 1 : 0.9,
      opacity: isActive ? 1 : 0.4,
      filter: isActive ? "blur(0px)" : "blur(2px)",
      zIndex: isActive ? 10 : 1,
      duration: isDragging ? 0.2 : 0.6,
      ease: "power3.out",
      overwrite: "auto" // Important pour ne pas confliter
    });

    if (isActive) {
      card.classList.add('border-blue-500');
      card.classList.remove('border-gray');
    } else {
      card.classList.remove('border-blue-500');
      card.classList.add('border-gray');
    }
  });

  indicators.forEach((ind, i) => {
    const isActive = i === visualIndex;
    gsap.to(ind, {
      width: isActive ? 24 : 8,
      backgroundColor: isActive ? '#3b82f6' : 'rgba(156, 163, 175, 0.4)',
      duration: 0.3
    });
  });
}

function updateCarousel(animate = true) {
  const x = getTrackPosition(currentIndex);

  if (animate) {
    gsap.to(track, { x: x, duration: 0.6, ease: "power3.out" });
  } else {
    gsap.set(track, { x: x });
  }

  // Appliquer les styles à l'index final
  updateCardStyles(currentIndex);
}

function goTo(index) {
  if (!cards.length) return;
  if (index >= cards.length) {
    currentIndex = 0;
  } else if (index < 0) {
    currentIndex = cards.length - 1;
  } else {
    currentIndex = index;
  }
  updateCarousel();
}

// --- BOUTONS ---
if (prevBtn) {
  prevBtn.addEventListener('click', (e) => {
    e.preventDefault();
    goTo(currentIndex - 1);
  });
}
if (nextBtn) {
  nextBtn.addEventListener('click', (e) => {
    e.preventDefault();
    goTo(currentIndex + 1);
  });
}
indicators.forEach((ind, i) => {
  ind.addEventListener('click', (e) => {
    e.preventDefault();
    goTo(i);
  });
});

window.addEventListener('keydown', (e) => {
  if (e.key === 'ArrowLeft') goTo(currentIndex - 1);
  if (e.key === 'ArrowRight') goTo(currentIndex + 1);
});

// --- SWIPE TEMPS RÉEL (DRAG) ---

container.addEventListener('mousedown', startDrag);
container.addEventListener('touchstart', startDrag);

window.addEventListener('mousemove', onDrag);
window.addEventListener('touchmove', onDrag);

window.addEventListener('mouseup', endDrag);
window.addEventListener('touchend', endDrag);

function startDrag(e) {
  isDragging = true;
  isClickBlocked = false;

  if (e.type === 'touchstart') {
    startX = e.touches[0].clientX;
  } else {
    startX = e.clientX;
    e.preventDefault();
  }

  startTrackX = getTrackPosition(currentIndex);
  gsap.killTweensOf(track);
  container.style.cursor = 'grabbing';
}

function onDrag(e) {
  if (!isDragging) return;

  let clientX;
  if (e.type === 'touchmove') {
    clientX = e.touches[0].clientX;
  } else {
    clientX = e.clientX;
  }

  const diff = clientX - startX;

  if (Math.abs(diff) > 5) {
    isClickBlocked = true;
  }

  // 1. Bouger le rail
  gsap.set(track, { x: startTrackX + diff });

  // 2. CALCULER QUELLE CARTE EST AU CENTRE (Mise à jour visuelle immédiate)
  const cardUnit = cardWidth + gap;
  // Combien de cartes on a "parcouru" virtuellement
  // Négatif car glisser à gauche (diff < 0) augmente l'index
  const cardsMoved = Math.round(-diff / cardUnit);
  const projectedIndex = currentIndex + cardsMoved;

  // 3. Appliquer les styles sur l'index projeté
  updateCardStyles(projectedIndex);
}

function endDrag(e) {
  if (!isDragging) return;
  isDragging = false;
  container.style.cursor = 'grab';

  let endX;
  if (e.type === 'mouseup') {
    endX = e.clientX;
  } else if (e.changedTouches) {
    endX = e.changedTouches[0].clientX;
  } else {
    updateCarousel();
    return;
  }

  const diff = startX - endX;
  const cardUnit = cardWidth + gap;

  if (Math.abs(diff) < 50) {
    updateCarousel();
    return;
  }

  let jump = Math.round(diff / cardUnit);
  if (jump === 0) {
    jump = diff > 0 ? 1 : -1;
  }

  goTo(currentIndex + jump);

  setTimeout(() => { isClickBlocked = false; }, 100);
}

init();
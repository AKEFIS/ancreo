gsap.registerPlugin(ScrollTrigger);

const container = document.getElementById('carousel-container');
const track = document.getElementById('carousel-track');
const cards = track ? Array.from(track.querySelectorAll('.carousel-card')) : [];
const prevBtn = document.getElementById('carousel-prev');
const nextBtn = document.getElementById('carousel-next');
const indicators = Array.from(document.querySelectorAll('.carousel-indicator'));

let currentIndex = 0;
let cardWidth = 0;

function recalc() {
  if (!container) return;
  const maxCard = 420;
  // determine card width (never bigger than maxCard)
  // use the viewport width as reference but ensure card is readable
  const containerParentW = container.parentElement ? container.parentElement.clientWidth : window.innerWidth;
  cardWidth = Math.min(maxCard, containerParentW);

  // force container to exactly the card width so only one card is visible
  container.style.width = `${cardWidth}px`;
  container.style.maxWidth = `${cardWidth}px`;
  container.style.overflow = 'hidden';
  container.style.boxSizing = 'content-box';

  // set each card width and prevent flex-grow
  cards.forEach(c => {
    c.style.width = `${cardWidth}px`;
    c.style.flex = '0 0 auto';
    c.style.margin = '0';
    // ensure card doesn't overflow its box (shadows allowed but clipped)
    c.style.boxSizing = 'border-box';
  });

  // when container width equals cardWidth, center active card by translating track
  const offset = 0; // no extra offset needed because container equals card width
  gsap.set(track, { x: offset - currentIndex * cardWidth });
}

function updateState(animate = true) {
  if (!container) return;
  const offset = 0; // container width == cardWidth, active card should align to left of container
  const x = offset - currentIndex * cardWidth;

  if (animate) {
    gsap.to(track, { x, duration: 0.5, ease: 'power2.out' });
  } else {
    gsap.set(track, { x });
  }

  // visual emphasis on active card
  cards.forEach((c, i) => {
    const active = i === currentIndex;
    gsap.to(c, { scale: active ? 1 : 0.98, zIndex: active ? 2 : 1, duration: 0.25, ease: 'power2.out' });
  });

  // indicators
  indicators.forEach((ind, i) => {
    const active = i === currentIndex;
    ind.dataset.active = active ? '1' : '0';
    gsap.to(ind, { scale: active ? 1.25 : 1, backgroundColor: active ? '#0ea5a9' : '#b8b8b8', duration: 0.25 });
  });
}

// wrap-around navigation
function goTo(index) {
  if (cards.length === 0) return;
  currentIndex = ((index % cards.length) + cards.length) % cards.length;
  updateState();
}

window.addEventListener('resize', () => {
  recalc();
  updateState(false);
});

if (prevBtn) prevBtn.addEventListener('click', () => goTo(currentIndex - 1));
if (nextBtn) nextBtn.addEventListener('click', () => goTo(currentIndex + 1));

indicators.forEach(ind => {
  ind.addEventListener('click', () => {
    const idx = parseInt(ind.dataset.index, 10);
    if (!Number.isNaN(idx)) goTo(idx);
  });
});

window.addEventListener('keydown', (e) => {
  if (e.key === 'ArrowLeft') goTo(currentIndex - 1);
  if (e.key === 'ArrowRight') goTo(currentIndex + 1);
});

document.addEventListener('DOMContentLoaded', () => {
  if (!container || !track || cards.length === 0) return;
  // ensure container hides overflow so only the active card is visible
  recalc();
  // small entrance animation
  gsap.from(container, { y: 30, opacity: 0, duration: 0.6, ease: 'power2.out' });
  updateState(false);
});
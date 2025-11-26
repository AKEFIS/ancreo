// GSAP Animations
gsap.registerPlugin(ScrollTrigger);

// Hero title animation
gsap.from(['.hero-title', '.hero-subtitle'], {
  opacity: 0,
  y: 50,
  duration: 1,
  ease: 'power3.out'
});

// Approche card animation
gsap.from('.approche-card', {
  opacity: 0,
  y: 50,
  duration: 1,
  scrollTrigger: {
    trigger: '.approche-card',
    start: 'top 95%',
    toggleActions: 'play none none none'
  }
});

// Service cards animation
gsap.utils.toArray('.service-card, .optional-card, .formule-card').forEach((card, i) => {
  gsap.from(card, {
    opacity: 0,
    y: 50,
    duration: 0.8,
    delay: i * 0.1,
    scrollTrigger: {
      trigger: card,
      start: 'top 95%',
      toggleActions: 'play none none none'
    },
    stagger: 0.2
  });
});

// CTA section animation
gsap.from('.cta-section', {
  opacity: 0,
  scale: 0.95,
  duration: 1,
  scrollTrigger: {
    trigger: '.cta-section',
    start: 'top 95%',
    toggleActions: 'play none none none'
  }
});

// Card hover effects
document.querySelectorAll('.service-card, .optional-card, .formule-card').forEach(card => {
  card.addEventListener('mouseenter', () => {
    gsap.to(card, {
      y: -8,
      boxShadow: '0 0 30px rgba(110, 214, 224, 0.3)',
      duration: 0.3,
      ease: 'power2.out'
    });

    const diamond = card.querySelector('.transform.rotate-45');
    gsap.to(diamond, {
      rotation: 225,
      duration: 0.5,
      ease: 'power2.out'
    });
  });

  card.addEventListener('mouseleave', () => {
    gsap.to(card, {
      y: 0,
      boxShadow: '0 0 0 rgba(0, 0, 0, 0)',
      duration: 0.2,
      ease: 'power2.out'
    });

    const diamond = card.querySelector('.transform.rotate-45');
    gsap.to(diamond, {
      rotation: 45,
      duration: 0.5,
      ease: 'power2.out'
    });
  });
});

// CTA button hover effect
const ctaButton = document.querySelector('.cta-button');
if (ctaButton) {
  ctaButton.addEventListener('mouseenter', () => {
    gsap.to(ctaButton, {
      scale: 1.05,
      boxShadow: '0 10px 30px rgba(110, 214, 224, 0.4)',
      duration: 0.3,
      ease: 'power2.out'
    });
  });

  ctaButton.addEventListener('mouseleave', () => {
    gsap.to(ctaButton, {
      scale: 1,
      boxShadow: '0 0 0 rgba(0, 0, 0, 0)',
      duration: 0.3,
      ease: 'power2.out'
    });
  });
}

// Navigation links hover effect
document.querySelectorAll('.nav-link').forEach(link => {
  link.addEventListener('mouseenter', (e) => {
    if (!e.target.classList.contains('nav-link-active')) {
      gsap.to(e.target, {
        color: '#6ed6e0',
        duration: 0.3,
        y: -2
      });
    }
  });

  link.addEventListener('mouseleave', (e) => {
    if (!e.target.classList.contains('nav-link-active')) {
      gsap.to(e.target, {
        color: '#d0d0d0',
        duration: 0.3,
        y: 0
      });
    }
  });
});

// Footer links hover effect
document.querySelectorAll('.footer-link').forEach(link => {
  link.addEventListener('mouseenter', (e) => {
    gsap.to(e.target, {
      color: '#6ed6e0',
      x: 5,
      duration: 0.3
    });
  });

  link.addEventListener('mouseleave', (e) => {
    gsap.to(e.target, {
      color: '#d0d0d0',
      x: 0,
      duration: 0.3
    });
  });
});
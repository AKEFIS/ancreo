const projects = {
  projet1: {
    image: "/src/assets/realSkateBoard.png",
    title: "SnowBoard",
    tags: ["HTML", "CSS", "UX Design"],
    text: "<strong class='text-accentuationClair font-extrabold'>Intégration d'un design épuré</strong> pour amateurs de glisse. Ce site a servi de support pour une validation technique PHP.",
  },
  projet2: {
    image: "/src/assets/portfolioSean.png",
    title: "Portfolio Sean",
    tags: ["HTML/CSS", "JS", "GSAP"],
    class: "object-cover",
    text: "<strong class='text-accentuationClair font-extrabold'>Conception et développement</strong> du Portfolio de Sean, mettant en avant ses réalisations via une <strong class='text-accentuationClair font-extrabold'>interface interactive</strong>.",
  },
  projet3: {
    image: "/src/assets/AncreoV1.png",
    title: "Ancreo - Genèse",
    tags: ["HTML/CSS", "BEM", "TreeJS"],
    text: "La <strong class='text-accentuationClair font-extrabold'>première version fondatrice</strong> d'Ancreo. Elle marque le point de départ technique et visuel de cette grande aventure.",
  },
  projet4: {
    image: "/src/assets/steamLike.png",
    title: "SteamLike",
    tags: ["Symfony", "VueJS"],
    text: "Développée en licence, cette plateforme est une <strong class='text-accentuationClair font-extrabold'>reproduction de Steam</strong> gérant bibliothèque de jeux et profils utilisateurs.",
  },
  projet5: {
    image: "/src/assets/quizListGrand.png",
    title: "QuizList",
    tags: ["Figma"],
    class: "object-fill",
    text: "<strong class='text-accentuationClair font-extrabold'>Maquettage complet</strong> d'une application de quiz, axée sur l'expérience utilisateur, la progression et la <strong class='text-accentuationClair font-extrabold'>gamification</strong>.",
  },
  projet6: {
    image: "/src/assets/PodlyGrand.png",
    title: "Podly",
    tags: ["Figma"],
    class: "object-fill",
    text: "<strong class='text-accentuationClair font-extrabold'>Concept UI/UX</strong> pour une plateforme audio immersive permettant d'écouter des podcasts avec une <strong class='text-accentuationClair font-extrabold'>navigation intuitive</strong>.",
  },
  projet7: {
    image: "/src/assets/biblio.png",
    title: "Projet Bibliotheque",
    tags: ["Symfony", "Twig", "Faker"],
    class: "bg-top object-cover",
    text: "<strong class='text-accentuationClair font-extrabold'>Architecture backend</strong> simulant le système numérique complet d'une bibliothèque : gestion des stocks, emprunts et usagers.",
  },
  projet8: {
    image: "/src/assets/AtlasGrand.png",
    title: "Atlas",
    tags: ["Figma"],
    class: "bg-top object-cover",
    text: "Design d'un <strong class='text-accentuationClair font-extrabold'>guide touristique</strong> de poche, adaptant dynamiquement les recommandations et itinéraires selon la ville explorée.",
  },
  projet9: {
    image: "/src/assets/MagicGrand.png",
    title: "Magic Companion",
    tags: ["Figma"],
    class: "bg-top object-cover",
    text: "<strong class='text-accentuationClair font-extrabold'>Application utilitaire</strong> conçue pour les joueurs afin de suivre les matchs de Magic et visualiser les scores en <strong class='text-accentuationClair font-extrabold'>temps réel</strong>.",
  },
  projet10: {
    image: "/src/assets/BgCollectGrand.png",
    title: "BGCollect",
    tags: ["Figma"],
    class: "bg-top object-cover",
    text: "<strong class='text-accentuationClair font-extrabold'>Solution de gestion</strong> pour passionnés, permettant d'organiser sa collection de jeux de société et de suivre l'actualité ludique.",
  },
};

function openModal(key, cardElement) {
  const proj = projects[key];
  if (!proj) return;

  const modal = document.querySelector(".modal");
  const modalContent = document.querySelector(".modal-content");
  const modalImage = document.querySelector(".modal-image");

  modalImage.className = "modal-image w-full max-h-[40vh] rounded-b-xl mb-4";
  modalImage.src = proj.image;

  if (proj.class) {
    (Array.isArray(proj.class) ? proj.class : proj.class.split(" ")).forEach((c) => modalImage.classList.add(c));
  }

  document.querySelector(".modal-title").textContent = proj.title;

  const tagsContainer = document.querySelector(".modal-tags");
  tagsContainer.innerHTML = "";
  proj.tags.forEach((tag) => {
    const span = document.createElement("span");
    span.className = "bg-gray text-black px-4 py-1 rounded-xl";
    span.textContent = tag;
    tagsContainer.appendChild(span);
  });

  document.querySelector(".modal-text").innerHTML = proj.text;

  modal.classList.remove("hidden");

  const rect = cardElement.getBoundingClientRect();

  gsap.set(modalContent, {
    opacity: 0,
    scale: 0.3,
    x: rect.left + rect.width / 2 - window.innerWidth / 2,
    y: rect.top + rect.height / 2 - window.innerHeight / 2,
  });

  gsap.to(modalContent, {
    duration: 0.8,
    opacity: 1,
    scale: 1,
    x: 0,
    y: 0,
    ease: "power1.out",
  });
}

const track = document.querySelector(".carouselTrack");
const slides = document.querySelectorAll(".carousel-slide");

function updateActiveSlide() {
  const center = window.innerWidth / 2;

  // On cherche la slide la plus proche du centre de l'écran
  // On initialise la closestDist à Infinity pour que la première distance calculée soit forcément plus petite
  let closest = null;
  let closestDist = Infinity;

  slides.forEach((slide) => {
    const rect = slide.getBoundingClientRect();
    const slideCenter = rect.left + rect.width / 2;
    const dist = Math.abs(slideCenter - center);

    if (dist < closestDist) {
      closestDist = dist;
      closest = slide;
    }
  });

  // On met à jour les classes des slides
  slides.forEach((slide) => {
    slide.classList.remove("scale-[1.10]", "opacity-100", "blur-none");
    slide.classList.add("scale-[0.85]", "opacity-50", "blur-sm", "filter", "grayscale");
  });

  // On agrandit la slide la plus proche du centre
  if (closest) {
    closest.classList.add("scale-[1.10]", "opacity-100", "blur-none");
    closest.classList.remove("scale-[0.85]", "opacity-50", "blur-sm", "filter", "grayscale");
  }
}

function closeModal() {
  const modal = document.querySelector(".modal");
  const modalContent = document.querySelector(".modal-content");

  gsap.to(modalContent, {
    duration: 0.3,
    opacity: 0,
    scale: 0.7,
    ease: "power3.in",
    onComplete: () => modal.classList.add("hidden"),
  });
}

// Fermeture de la modal au clic sur la croix
document.querySelector(".modal-close").addEventListener("click", closeModal);
// Fermeture de la modal au clic en dehors
document.querySelector(".modal").addEventListener("click", (e) => {
  const modalContent = document.querySelector(".modal-content");

  if (!modalContent.contains(e.target)) {
    closeModal();
  }
});
// Fermeture de la modal à l'appui de la touche Échap
document.addEventListener("keydown", (e) => {
  if (e.key === "Escape") {
    const modal = document.querySelector(".modal");
    if (!modal.classList.contains("hidden")) {
      closeModal();
    }
  }
});

track.addEventListener("scroll", () => {
  requestAnimationFrame(updateActiveSlide);
});

window.addEventListener("load", updateActiveSlide);

const projects = {
    projet1: {
        image: "assets/realSkateBoard.png",
        title: "SnowBoard",
        tags: ["HTML", "CSS", "UX Design"],
        text: "Tout petit site réalisé avec un modèle. A eu l'objet d'un contrôle PHP."
    },
    projet2: {
        image: "assets/portfolioSean.png",
        title: "Portfolio Sean",
        tags: ["HTML/CSS", "JS", "GSAP"],
        class: "object-cover",
        text: "Portfolio de Sean."
    },
    projet3: {
        image: "assets/AncreoV1.png",
        title: "Ancreo Premier du Nom",
        tags: ["HTML/CSS", "BEM", "TreeJS"],
        text: "Première version de Ancreo marque le début d'une grande aventure. Paix à son âme."
    },
    projet4: {
        image: "assets/steamLike.png",
        title: "SteamLike",
        tags: ["Symfony", "VueJS"],
        text: "Projet réalisé en 2nd année de licence informatique, c'est une reproduction de steam."
    },
    projet5: {
        image: "assets/quizListGrand.png",
        title: "QuizList",
        tags: ["Figma"],
        class: "object-fill",
        text: "Projet réalisé dans le cadre du cours de Figma, c'est une application de quiz."
    },
    projet6: {
        image: "assets/PodlyGrand.png",
        title: "Podly",
        tags: ["Figma"],
        class: "object-fill",
        text: "Projet réalisé dans le cadre du cours de Figma, elle sert à écouter des podcasts."
    },
    projet7: {
        image: "assets/biblio.png",
        title: "Projet Bibliotheque",
        tags: ["Symfony", "Twig", "Faker"],
        class: "bg-top object-cover",
        text: "Projet réalisé en 2024, a pour but de reproduire un système numérique d'une vraie bibliothèque."
    },
    projet8: {
        image: "assets/AtlasGrand.png",
        title: "Atlas",
        tags: ["Figma"],
        class: "bg-top object-cover",
        text: "Projet réalisé dans le cadre du cours de Figma, c'est une application guide touristique dans n'importe quelle ville sélectionnée."
    },
    projet9: {
        image: "assets/MagicGrand.png",
        title: "Magic",
        tags: ["Figma"],
        class: "bg-top object-cover",
        text: "Projet réalisé dans le cadre du cours de Figma, elle sert a suivre les matchs de magic et regarder les scores en direct."
    },
    projet10: {
        image: "assets/BgCollectGrand.png",
        title: "BGCollect",
        tags: ["Figma"],
        class: "bg-top object-cover",
        text: "Projet réalisé dans le cadre du cours de Figma, cette application a pour but de permettre aux gens de renseigner leur collection de jeux de société et de se tenir au courant des avis et des dernières sorties."
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
        (Array.isArray(proj.class) ? proj.class : proj.class.split(" "))
            .forEach(c => modalImage.classList.add(c));
    }

    document.querySelector(".modal-title").textContent = proj.title;

    const tagsContainer = document.querySelector(".modal-tags");
    tagsContainer.innerHTML = "";
    proj.tags.forEach(tag => {
        const span = document.createElement("span");
        span.className = "bg-gray text-black px-4 py-1 rounded-xl";
        span.textContent = tag;
        tagsContainer.appendChild(span);
    });

    document.querySelector(".modal-text").textContent = proj.text;

    modal.classList.remove("hidden");

    const rect = cardElement.getBoundingClientRect();

    gsap.set(modalContent, {
        opacity: 0,
        scale: 0.3,
        x: rect.left + rect.width / 2 - window.innerWidth / 2,
        y: rect.top + rect.height / 2 - window.innerHeight / 2
    });

    gsap.to(modalContent, {
        duration: 0.8,
        opacity: 1,
        scale: 1,
        x: 0,
        y: 0,
        ease: "power1.out"
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

    slides.forEach(slide => {
        const rect = slide.getBoundingClientRect();
        const slideCenter = rect.left + rect.width / 2;
        const dist = Math.abs(slideCenter - center);

        if (dist < closestDist) {
            closestDist = dist;
            closest = slide;
        }
    });

    // On met à jour les classes des slides
    slides.forEach(slide => {
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
        onComplete: () => modal.classList.add("hidden")
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

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
        title: "Première Version",
        tags: ["Figma"],
        class: "object-fill",
        text: "Projet réalisé dans le cadre du cours de Figma, c'est une application de quiz."
    },
    projet6: {
        image: "assets/PodlyGrand.png",
        title: "Première Version",
        tags: ["Figma"],
        class: "object-fill",
        text: "Projet réalisé dans le cadre du cours de Figma, elle sert à écouter des podcasts."
    },
    projet7: {
        image: "assets/biblio.png",
        title: "Première Version",
        tags: ["Symfony", "Twig", "Faker"],
        class: "bg-top object-cover",
        text: "Projet réalisé en 2024, a pour but de reproduire un système numérique d'une vraie bibliothèque."
    },
    projet8: {
        image: "assets/AtlasGrand.png",
        title: "Première Version",
        tags: ["Figma"],
        class: "bg-top object-cover",
        text: "Projet réalisé dans le cadre du cours de Figma, c'est une application guide touristique dans n'importe quelle ville sélectionnée."
    },
    projet9: {
        image: "assets/MagicGrand.png",
        title: "Première Version",
        tags: ["Figma"],
        class: "bg-top object-cover",
        text: "Projet réalisé dans le cadre du cours de Figma, elle sert a suivre les matchs de magic et regarder les scores en direct."
    },
    projet10: {
        image: "assets/BgCollectGrand.png",
        title: "Première Version",
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

    // RESET CLASSES BEFORE APPLYING NEW ONES
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

    // ---- ANIMATION GSAP ---- //

    // On montre la modale
    modal.classList.remove("hidden");

    // Position de départ = card cliquée
    const rect = cardElement.getBoundingClientRect();

    gsap.set(modalContent, {
        opacity: 0,
        scale: 0.3,
        x: rect.left + rect.width / 2 - window.innerWidth / 2,
        y: rect.top + rect.height / 2 - window.innerHeight / 2
    });

    // Animation d'ouverture
    gsap.to(modalContent, {
        duration: 0.8,
        opacity: 1,
        scale: 1,
        x: 0,
        y: 0,
        ease: "power1.out"
    });
}

document.querySelector(".modal-close").addEventListener("click", () => {
    const modal = document.querySelector(".modal");
    const modalContent = document.querySelector(".modal-content");

    gsap.to(modalContent, {
        duration: 0.3,
        opacity: 0,
        scale: 0.7,
        ease: "power3.in",
        onComplete: () => modal.classList.add("hidden")
    });
});

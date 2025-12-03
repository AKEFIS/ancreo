<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Ancreo</title>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="stylesheet" href="./src/css/output.css" />
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@100..900&family=Montserrat:wght@100..900&display=swap"
    rel="stylesheet" />

  <!-- THREE.JS -->
  <script type="importmap">
    {
      "imports": {
        "three": "https://unpkg.com/three@0.169.0/build/three.module.js",
        "three/addons/": "https://unpkg.com/three@0.169.0/examples/jsm/"
      }
    }
  </script>

  <!-- GSAP -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

  <!-- SCRIPTS -->
  <script type="module" src="./src/js/index/hero.js" defer></script>
  <script type="module" src="./src/js/index/index.js" defer></script>
  <script type="module" src="./src/js/index/carousel.js" defer></script>

  <!-- SEO -->
  <meta name="description"
    content="Ancreo, agence web spécialisée dans l’accompagnement des auto-entrepreneurs : démarches, business plan, conseils, création de sites web et web apps.">

  <!-- Ajuster les infos   -->
  <!-- <script type="application/ld+json">
    [
      {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Ancreo",
        "url": "https://agence-ancreo.lpmiaw.univ-lr.fr"
      },
      {
        "@context": "https://schema.org",
        "@type": "Service",
        "name": "Accompagnement auto-entrepreneur",
        "provider": {
          "@type": "Organization",
          "name": "Ancreo"
        },
        "description": "Accompagnement complet des auto-entrepreneurs : démarches, business plan et conseils juridiques et comptables."
      },
      {
        "@context": "https://schema.org",
        "@type": "Service",
        "name": "Création de sites web",
        "provider": {
          "@type": "Organization",
          "name": "Ancreo"
        },
        "description": "Création de sites vitrines et web apps sur mesure pour entreprises et auto-entrepreneurs."
      },
      {
        "@context": "https://schema.org",
        "@type": "Service",
        "name": "Refonte de sites web",
        "provider": {
          "@type": "Organization",
          "name": "Ancreo"
        },
        "description": "Refonte complète de sites web pour moderniser votre présence en ligne et améliorer l’expérience utilisateur."
      }
    ]
    </script> -->
</head>

<body class="bg-dark-black flex flex-col min-h-screen text-white overflow-x-hidden">

  <!-- HERO -->
  <section class="w-full min-h-screen p-4 sm:pl-20 flex flex-col justify-center relative">
    <!-- ASCII ANCRE (à droite via ton script) -->
    <div id="container" class="hidden md:block absolute inset-0 overflow-hidden pointer-events-none"></div>

    <!-- Contenu texte à gauche -->
    <div class="w-full sm:w-1/2 relative z-10">
      <h1 class="title64 mb-4">Ancreo</h1>
      <h2 class="title32 font-bold mb-4">Votre nouvelle agence web à La Rochelle</h2>
      <p class="text-lg leading-relaxed">
        Notre agence propose un accompagnement personnalisé et adapté pour les
        <strong class="text-blue-300 font-extrabold">entreprises, start-up, futurs entrepreneurs</strong>
        et bien plus !
      </p>
    </div>
  </section>

  <!-- QUI SOMMES-NOUS -->
  <section id="qui-sommes-nous" class="px-6 sm:px-20 py-20 bg-black">

    <h2 class="title48 mb-6">Qui sommes-nous ?</h2>

    <p class="text20 leading-relaxed max-w-2xl mb-12">
      Notre agence propose un accompagnement personnalisé et adapté pour les
      <strong class="text-accentuationSombre">entreprises, start-up, futurs entrepreneurs</strong>
      et bien plus !
    </p>

    <div id="accordion" class="space-y-4">

      <!-- CARD 1 -->
      <div class="accordion-item bg-lightBlack border border-gray rounded-xl p-6 cursor-pointer">
        <h3 class="title24 flex justify-between items-center">
          Marques & Identité
          <span class="icon transition-transform duration-300 mb-4">+</span>
        </h3>
        <div class="accordion-content overflow-hidden h-0">
          <p class="text16 mt-4 text-gray leading-relaxed">
            Ancreo vous accompagne dans la création d’identité de marque claire, stratégique et évolutive.
            Votre nom, identité visuelle et stratégie vous suivront dans votre croissance.
          </p>
        </div>
      </div>

      <!-- CARD 2 -->
      <div class="accordion-item bg-lightBlack border border-gray rounded-xl p-6 cursor-pointer">
        <h3 class="title24 flex justify-between items-center">
          Développement Web
          <span class="icon transition-transform duration-300 mb-4">+</span>
        </h3>
        <div class="accordion-content overflow-hidden h-0">
          <p class="text16 mt-4 text-gray leading-relaxed">
            Nous donnons vie à vos idées grâce à un code performant, évolutif et maintenable.
            Sites vitrines, applications sur mesure... notre développement favorise votre croissance.
          </p>
        </div>
      </div>

      <!-- CARD 3 -->
      <div class="accordion-item bg-lightBlack border border-gray rounded-xl p-6 cursor-pointer">
        <h3 class="title24 flex justify-between items-center">
          E-Commerce
          <span class="icon transition-transform duration-300 mb-4">+</span>
        </h3>
        <div class="accordion-content overflow-hidden h-0">
          <p class="text16 mt-4 text-gray leading-relaxed">
            Confiance-nous votre projet e-commerce : optimisation des ventes, intégration ERP, boutique
            personnalisée… Nous maximisons votre efficacité.
          </p>
        </div>
      </div>

      <!-- CARD 4 -->
      <div class="accordion-item bg-lightBlack border border-gray rounded-xl p-6 cursor-pointer">
        <h3 class="title24 flex justify-between items-center">
          Accompagnement
          <span class="icon transition-transform duration-300 mb-4">+</span>
        </h3>
        <div class="accordion-content overflow-hidden h-0">
          <p class="text16 mt-4 text-gray leading-relaxed">
            Grâce à notre accompagnement sur mesure, nous vous guidons de A à Z : juridique, comptabilité,
            business plan, création de site web et conseils personnalisés.
          </p>
        </div>
      </div>

    </div>

  </section>

  <!-- NOS FORMULES -->
  <section id="nos-formules" class="px-6 sm:px-20 py-20 bg-black">
    <div class="text-center mb-12">
      <h2 class="title48 mb-4">Nos formules d'accompagnement personnalisé</h2>
      <p class="text20 text-gray">Choisissez la formule la plus adaptée à votre projet</p>
    </div>

    <div class="flex justify-center">
      <div class="relative w-full max-w-2xl flex flex-col items-center">

        <!-- CAROUSEL CONTAINER -->
        <div id="carousel-container" class="overflow-hidden">
          <div id="carousel-track" class="flex items-center relative">

            <!-- CARD 1 - GLOBALE -->
            <div class="carousel-card bg-lightBlack border-2 border-blue-500 rounded-xl p-6 shadow-xl">
              <div class="flex justify-between items-start mb-4">
                <h3 class="title32 text-blue-400">Formule Globale</h3>
                <span class="text-sm text-gray">1/7</span>
              </div>

              <div class="mb-6">
                <h4 class="text20 font-bold mb-3 text-white">Services inclus :</h4>
                <ul class="text16 text-gray space-y-2 list-disc list-inside">
                  <li>L'intégralité des services des formules Premium, Avancée et Basique</li>
                  <li>Élaboration d'un business plan</li>
                  <li>Consultations régulières avec des experts (juridiques, comptables, marketing)</li>
                  <li>Accès à une communauté d'entrepreneur</li>
                </ul>
              </div>

              <div class="mb-6">
                <h4 class="text20 font-bold mb-3 text-white">Services optionnels :</h4>
                <ul class="text16 text-gray space-y-2 list-disc list-inside">
                  <li>Mentorat</li>
                  <li>Formation continue</li>
                </ul>
              </div>

              <div class="flex justify-between items-center mt-6">
                <button class="bg-blue-500 text-white px-6 py-3 rounded-full hover:bg-blue-600 transition-colors text16 font-semibold">
                  En savoir plus
                </button>

              </div>
            </div>

            <!-- CARD 2 - PREMIUM -->
            <div class="carousel-card bg-lightBlack border-2 border-blue-500 rounded-xl p-6 shadow-xl">
              <div class="flex justify-between items-start mb-4">
                <h3 class="title32 text-blue-400">Formule Premium</h3>
                <span class="text-sm text-gray">2/7</span>
              </div>

              <div class="mb-6">
                <h4 class="text20 font-bold mb-3 text-white">Services inclus :</h4>
                <ul class="text16 text-gray space-y-2 list-disc list-inside">
                  <li>Création d'une boutique e-commerce</li>
                  <li>Analyse des besoins et étude de marché</li>
                  <li>Intégration des solutions de paiement (Carte Bancaire, PayPal, etc)</li>
                  <li>Hébergement</li>
                  <li>Nom de domaine offert pendant un 1 an</li>
                  <li>Formation à la gestion de la boutique</li>
                </ul>
              </div>

              <div class="mb-6">
                <h4 class="text20 font-bold mb-3 text-white">Services optionnels :</h4>
                <ul class="text16 text-gray space-y-2 list-disc list-inside">
                  <li>Conseils juridiques (RGPD, politique d'expédition et de retour, etc)</li>
                  <li>Assistance comptable pour la gestion des ventes et des taxes</li>
                </ul>
              </div>

              <div class="flex justify-between items-center mt-6">
                <button class="bg-blue-500 text-white px-6 py-3 rounded-full hover:bg-blue-600 transition-colors text16 font-semibold">
                  En savoir plus
                </button>

              </div>
            </div>

            <!-- CARD 3 - AVANCÉE -->
            <div class="carousel-card bg-lightBlack border-2 border-blue-500 rounded-xl p-6 shadow-xl">
              <div class="flex justify-between items-start mb-4">
                <h3 class="title32 text-blue-400">Formule Avancée</h3>
                <span class="text-sm text-gray">3/7</span>
              </div>

              <div class="mb-6">
                <h4 class="text20 font-bold mb-3 text-white">Services inclus :</h4>
                <ul class="text16 text-gray space-y-2 list-disc list-inside">
                  <li>Développement d'une application web sur mesure</li>
                  <li>Atelier d'idéation pour définir les fonctionnalités</li>
                  <li>Nom de domaine offert pendant 1 an</li>
                  <li>Hébergement</li>
                </ul>
              </div>

              <div class="mb-6">
                <h4 class="text20 font-bold mb-3 text-white">Services optionnels :</h4>
                <ul class="text16 text-gray space-y-2 list-disc list-inside">
                  <li>Support juridique pour la conformité réglementaire</li>
                  <li>Aide à la mise en place d'un plan de marketing digital</li>
                </ul>
              </div>

              <div class="flex justify-between items-center mt-6">
                <button class="bg-blue-500 text-white px-6 py-3 rounded-full hover:bg-blue-600 transition-colors text16 font-semibold">
                  En savoir plus
                </button>

              </div>
            </div>

            <!-- CARD 4 - BASIQUE -->
            <div class="carousel-card bg-lightBlack border-2 border-blue-500 rounded-xl p-6 shadow-xl">
              <div class="flex justify-between items-start mb-4">
                <h3 class="title32 text-blue-400">Formule Basique</h3>
                <span class="text-sm text-gray">4/7</span>
              </div>

              <div class="mb-6">
                <h4 class="text20 font-bold mb-3 text-white">Services inclus :</h4>
                <ul class="text16 text-gray space-y-2 list-disc list-inside">
                  <li>Création d'un site vitrine optimisé</li>
                  <li>Formulaire de contact et intégration des réseaux sociaux</li>
                  <li>Formation à la gestion du site</li>
                  <li>Hébergement</li>
                  <li>Nom de domaine offert pendant 1 an</li>
                </ul>
              </div>

              <div class="mb-6">
                <h4 class="text20 font-bold mb-3 text-white">Services optionnels :</h4>
                <ul class="text16 text-gray space-y-2 list-disc list-inside">
                  <li>Maintenance technique pendant 6 mois</li>
                  <li>Options de mise à jour du contenu</li>
                </ul>
              </div>

              <div class="flex justify-between items-center mt-6">
                <button class="bg-blue-500 text-white px-6 py-3 rounded-full hover:bg-blue-600 transition-colors text16 font-semibold">
                  En savoir plus
                </button>

              </div>
            </div>

            <!-- CARD 5 - SUR MESURE -->
            <div class="carousel-card bg-lightBlack border-2 border-blue-500 rounded-xl p-6 shadow-xl">
              <div class="flex justify-between items-start mb-4">
                <h3 class="title32 text-blue-400">Formule Sur mesure</h3>
                <span class="text-sm text-gray">5/7</span>
              </div>

              <div class="mb-6">
                <p class="text20 text-gray mb-4 font-semibold">Vous avez d'autres besoins ?</p>
                <p class="text16 text-gray leading-relaxed">
                  Prenez contact avec notre équipe et nous vous proposerons une formule sur mesure qui répond au mieux à toutes vos attentes !
                </p>
              </div>

              <div class="flex justify-between items-center mt-6">
                <button class="bg-blue-500 text-white px-6 py-3 rounded-full hover:bg-blue-600 transition-colors text16 font-semibold">
                  Nous contacter
                </button>

              </div>
            </div>

            <!-- CARD 6 - REFONTE -->
            <div class="carousel-card bg-lightBlack border-2 border-blue-500 rounded-xl p-6 shadow-xl">
              <div class="flex justify-between items-start mb-4">
                <h3 class="title32 text-blue-400">Formule Refonte</h3>
                <span class="text-sm text-gray">6/7</span>
              </div>

              <div class="mb-6">
                <p class="text20 text-gray mb-4 font-semibold">Votre application se fait vieillissante ?</p>
                <p class="text16 text-gray leading-relaxed">
                  Contactez-nous et nous déterminerons les meilleurs choix pour votre business !
                </p>
              </div>

              <div class="flex justify-between items-center mt-6">
                <button class="bg-blue-500 text-white px-6 py-3 rounded-full hover:bg-blue-600 transition-colors text16 font-semibold">
                  Nous contacter
                </button>

              </div>
            </div>

            <!-- CARD 7 - MAINTENANCE -->
            <div class="carousel-card bg-lightBlack border-2 border-blue-500 rounded-xl p-6 shadow-xl">
              <div class="flex justify-between items-start mb-4">
                <h3 class="title32 text-blue-400">Formule Maintenance</h3>
                <span class="text-sm text-gray">7/7</span>
              </div>

              <div class="mb-6">
                <p class="text20 text-gray mb-4 font-semibold">Vous avez besoin d'un suivi régulier ?</p>
                <p class="text16 text-gray leading-relaxed">
                  Prenez contact avec notre équipe et nous vous proposerons une formule de maintenance adaptée à vos besoins !
                </p>
              </div>

              <div class="flex justify-between items-center mt-6">
                <button class="bg-blue-500 text-white px-6 py-3 rounded-full hover:bg-blue-600 transition-colors text16 font-semibold">
                  Nous contacter
                </button>

              </div>
            </div>

          </div>
        </div>

        <!-- NAVIGATION BUTTONS -->
        <button id="carousel-prev" aria-label="Précédent"
          class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-12 bg-lightBlack border border-gray text-white rounded-full w-12 h-12 flex items-center justify-center shadow-lg hover:bg-gray/20 transition-colors text-2xl">
          <span class="mb-2">‹</span>
        </button>

        <button id="carousel-next" aria-label="Suivant"
          class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-12 bg-lightBlack border border-gray text-white rounded-full w-12 h-12 flex items-center justify-center shadow-lg hover:bg-gray/20 transition-colors text-2xl">
          <span class="mb-2">›</span>
        </button>

        <!-- INDICATORS -->
        <div id="carousel-indicators" class="flex justify-center gap-3 mt-8">
          <button class="carousel-indicator w-3 h-3 rounded-full bg-gray/40 transition-all" data-index="0"></button>
          <button class="carousel-indicator w-3 h-3 rounded-full bg-gray/40 transition-all" data-index="1"></button>
          <button class="carousel-indicator w-3 h-3 rounded-full bg-gray/40 transition-all" data-index="2"></button>
          <button class="carousel-indicator w-3 h-3 rounded-full bg-gray/40 transition-all" data-index="3"></button>
          <button class="carousel-indicator w-3 h-3 rounded-full bg-gray/40 transition-all" data-index="4"></button>
          <button class="carousel-indicator w-3 h-3 rounded-full bg-gray/40 transition-all" data-index="5"></button>
          <button class="carousel-indicator w-3 h-3 rounded-full bg-gray/40 transition-all" data-index="6"></button>
        </div>

      </div>
    </div>
  </section>

  <!-- FOOTER (toujours en bas) -->
  <footer class="mt-auto text-center pb-8 bg-black">
    <h2>Site en cours de construction - Ancreo</h2>
    <h4 class="text-blue-600"><a href="mailto:ancreo17@gmail.com">ancreo17@gmail.com</a></h4>
  </footer>

</body>


</html>
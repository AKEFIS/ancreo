<?php include 'components/header.php'; ?>
<title>Accueil</title>
<!-- THREE.JS -->
<script type="importmap">
    {
    "imports": {
        "three": "https://unpkg.com/three@0.169.0/build/three.module.js",
        "three/addons/": "https://unpkg.com/three@0.169.0/examples/jsm/"
    }
    }
</script>

<!-- SCRIPTS -->
<script type="module" src="./src/js/index/hero.js" defer></script>
<script type="module" src="./src/js/index/index.js" defer></script>
<script type="module" src="./src/js/index/carousel.js" defer></script>
<?php include 'components/navbar.php'; ?>

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
  <section id="nos-formules" class="px-0 sm:px-0 py-20 bg-black overflow-hidden relative">
    <div class="px-6 sm:px-20 text-center mb-12">
      <h2 class="title48 mb-4">Nos formules d'accompagnement</h2>
      <p class="text20 text-gray">Une offre adaptée à chaque étape de votre croissance</p>
    </div>

    <div class="relative w-full flex flex-col items-center">

      <div id="carousel-container" class="w-full relative cursor-grab active:cursor-grabbing perspective-1000">

        <div id="carousel-track" class="flex items-center gap-6 sm:gap-10 px-[50vw]">

          <div class="carousel-card w-[85vw] sm:w-[400px] flex-shrink-0 bg-lightBlack border-2 border-blue-500 rounded-xl p-6 shadow-2xl cursor-pointer">
            <div class="flex justify-between items-start mb-4">
              <h3 class="title32 text-blue-400">Formule Globale</h3>
              <span class="text-sm text-gray">1/7</span>
            </div>
            <div class="mb-6">
              <h4 class="text16 font-bold text-white mb-2">Services inclus :</h4>
              <ul class="text14 text-gray space-y-1 list-disc list-inside mb-4">
                <li>L'intégralité des services des formules Premium, Avancée et Basique</li>
                <li>Élaboration d'un business plan</li>
                <li>Consultations régulières avec des experts (juridiques, comptables, marketing)</li>
                <li>Accès à une communauté d'entrepreneur</li>
              </ul>
              <h4 class="text16 font-bold text-white mb-2">Services optionnels :</h4>
              <ul class="text14 text-gray space-y-1 list-disc list-inside">
                <li>Mentorat</li>
                <li>Formation continue</li>
              </ul>
            </div>
            <a href="/formule-globale">
            <button class="w-full bg-blue-500 text-white py-3 rounded-full hover:bg-blue-600 font-semibold mt-auto transition-colors">
              En savoir plus
            </button>
            </a>
          </div>

          <div class="carousel-card w-[85vw] sm:w-[400px] flex-shrink-0 bg-lightBlack border-2 border-blue-500 rounded-xl p-6 shadow-2xl cursor-pointer">
            <div class="flex justify-between items-start mb-4">
              <h3 class="title32 text-blue-400">Formule Premium</h3>
              <span class="text-sm text-gray">2/7</span>
            </div>
            <div class="mb-6">
              <h4 class="text16 font-bold text-white mb-2">Services inclus :</h4>
              <ul class="text14 text-gray space-y-1 list-disc list-inside mb-4">
                <li>Création d’une boutique e-commerce</li>
                <li>Analyse des besoins et étude de marché</li>
                <li>Intégration des solutions de paiement (Carte Bancaire, PayPal, etc)</li>
                <li>Hébergement</li>
                <li>Nom de domaine offert pendant 1 an</li>
                <li>Formation à la gestion de la boutique</li>
              </ul>
              <h4 class="text16 font-bold text-white mb-2">Services optionnels :</h4>
              <ul class="text14 text-gray space-y-1 list-disc list-inside">
                <li>Conseils juridiques (RGPD, politique d’expédition et de retour, etc)</li>
                <li>Assistance comptable pour la gestion des ventes et des taxes</li>
              </ul>
            </div>
            <a href="/formule-premium">
            <button class="w-full bg-blue-500 text-white py-3 rounded-full hover:bg-blue-600 font-semibold mt-auto transition-colors">
              En savoir plus
            </button>
            </a>
          </div>

          <div class="carousel-card w-[85vw] sm:w-[400px] flex-shrink-0 bg-lightBlack border-2 border-blue-500 rounded-xl p-6 shadow-2xl cursor-pointer">
            <div class="flex justify-between items-start mb-4">
              <h3 class="title32 text-blue-400">Formule Avancée</h3>
              <span class="text-sm text-gray">3/7</span>
            </div>
            <div class="mb-6">
              <h4 class="text16 font-bold text-white mb-2">Services inclus :</h4>
              <ul class="text14 text-gray space-y-1 list-disc list-inside mb-4">
                <li>Développement d’une application web sur mesure</li>
                <li>Atelier d’idéation pour définir les fonctionnalités</li>
                <li>Hébergement</li>
                <li>Nom de domaine offert pendant 1 an</li>
              </ul>
              <h4 class="text16 font-bold text-white mb-2">Services optionnels :</h4>
              <ul class="text14 text-gray space-y-1 list-disc list-inside">
                <li>Support juridique pour la conformité réglementaire</li>
                <li>Aide à la mise en place d’un plan de marketing digital</li>
              </ul>
            </div>
            <a href="formule-avancee">
            <button class="w-full bg-blue-500 text-white py-3 rounded-full hover:bg-blue-600 font-semibold mt-auto transition-colors">
              En savoir plus
            </button>
            </a>
          </div>

          <div class="carousel-card w-[85vw] sm:w-[400px] flex-shrink-0 bg-lightBlack border-2 border-blue-500 rounded-xl p-6 shadow-2xl cursor-pointer">
            <div class="flex justify-between items-start mb-4">
              <h3 class="title32 text-blue-400">Formule Basique</h3>
              <span class="text-sm text-gray">4/7</span>
            </div>
            <div class="mb-6">
              <h4 class="text16 font-bold text-white mb-2">Services inclus :</h4>
              <ul class="text14 text-gray space-y-1 list-disc list-inside mb-4">
                <li>Création d’un site vitrine optimisé</li>
                <li>Formulaire de contact et intégration des réseaux sociaux</li>
                <li>Formation à la gestion du site</li>
                <li>Hébergement</li>
                <li>Nom de domaine offert pendant 1 an</li>
              </ul>
              <h4 class="text16 font-bold text-white mb-2">Services optionnels :</h4>
              <ul class="text14 text-gray space-y-1 list-disc list-inside">
                <li>Maintenance technique pendant 6 mois</li>
                <li>Options de mise à jour du contenu</li>
              </ul>
            </div>
            <a href="formule-basique">
            <button class="w-full bg-blue-500 text-white py-3 rounded-full hover:bg-blue-600 font-semibold mt-auto transition-colors">
              En savoir plus
            </button>
            </a>
          </div>

          <div class="carousel-card w-[85vw] sm:w-[400px] flex-shrink-0 bg-lightBlack border-2 border-blue-500 rounded-xl p-6 shadow-2xl cursor-pointer">
            <div class="flex justify-between items-start mb-4">
              <h3 class="title32 text-blue-400">Formule Sur mesure</h3>
              <span class="text-sm text-gray">5/7</span>
            </div>
            <div class="mb-6">
              <p class="text16 text-gray mb-4 font-semibold">Vous avez d’autres besoins ?</p>
              <p class="text14 text-gray leading-relaxed">
                Prenez contact avec notre équipe et nous vous proposerons une formule sur mesure qui répondra au mieux à toutes vos attentes !
              </p>
            </div>
            <a href="/formules-autres">
            <button class="w-full bg-blue-500 text-white py-3 rounded-full hover:bg-blue-600 font-semibold mt-auto transition-colors">
              Nous contacter
            </button>
            </a>
          </div>

          <div class="carousel-card w-[85vw] sm:w-[400px] flex-shrink-0 bg-lightBlack border-2 border-blue-500 rounded-xl p-6 shadow-2xl cursor-pointer">
            <div class="flex justify-between items-start mb-4">
              <h3 class="title32 text-blue-400">Formule Refonte</h3>
              <span class="text-sm text-gray">6/7</span>
            </div>
            <div class="mb-6">
              <p class="text16 text-gray mb-4 font-semibold">Votre application se fait vieillissante ?</p>
              <p class="text14 text-gray leading-relaxed">
                Contactez-nous et nous déterminerons les meilleurs choix pour votre business !
              </p>
            </div>
            <a href="/formules-autres">
            <button class="w-full bg-blue-500 text-white py-3 rounded-full hover:bg-blue-600 font-semibold mt-auto transition-colors">
              Nous contacter
            </button>
            </a>
          </div>

          <div class="carousel-card w-[85vw] sm:w-[400px] flex-shrink-0 bg-lightBlack border-2 border-blue-500 rounded-xl p-6 shadow-2xl cursor-pointer">
            <div class="flex justify-between items-start mb-4">
              <h3 class="title32 text-blue-400">Formule Maintenance</h3>
              <span class="text-sm text-gray">7/7</span>
            </div>
            <div class="mb-6">
              <p class="text16 text-gray mb-4 font-semibold">Vous avez d’autres besoins ?</p>
              <p class="text14 text-gray leading-relaxed">
                Prenez contact avec notre équipe et nous vous proposerons une formule sur mesure qui répondra au mieux à toutes vos attentes !
              </p>
            </div>
            <a href="/formules-autres">
            <button class="w-full bg-blue-500 text-white py-3 rounded-full hover:bg-blue-600 font-semibold mt-auto transition-colors">
              Nous contacter
            </button>
            </a>
          </div>

        </div>
      </div>

      <div class="flex flex-col items-center mt-10 gap-6 w-full px-6">

        <div class="flex gap-4">
          <button id="carousel-prev" aria-label="Précédent"
            class="bg-lightBlack border border-gray text-white rounded-full w-12 h-12 flex items-center justify-center shadow-lg hover:bg-blue-500 hover:border-blue-500 transition-all active:scale-95">
            <span class="mb-1">‹</span>
          </button>
          <button id="carousel-next" aria-label="Suivant"
            class="bg-lightBlack border border-gray text-white rounded-full w-12 h-12 flex items-center justify-center shadow-lg hover:bg-blue-500 hover:border-blue-500 transition-all active:scale-95">
            <span class="mb-1">›</span>
          </button>
        </div>

        <div id="carousel-indicators" class="flex justify-center items-center gap-2 flex-wrap">
          <button class="carousel-indicator w-2 h-2 rounded-full bg-gray/40 transition-all" data-index="0"></button>
          <button class="carousel-indicator w-2 h-2 rounded-full bg-gray/40 transition-all" data-index="1"></button>
          <button class="carousel-indicator w-2 h-2 rounded-full bg-gray/40 transition-all" data-index="2"></button>
          <button class="carousel-indicator w-2 h-2 rounded-full bg-gray/40 transition-all" data-index="3"></button>
          <button class="carousel-indicator w-2 h-2 rounded-full bg-gray/40 transition-all" data-index="4"></button>
          <button class="carousel-indicator w-2 h-2 rounded-full bg-gray/40 transition-all" data-index="5"></button>
          <button class="carousel-indicator w-2 h-2 rounded-full bg-gray/40 transition-all" data-index="6"></button>
        </div>
      </div>

    </div>
  </section>
  <?php include 'components/footer.php'; ?>
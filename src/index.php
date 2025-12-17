<?php
// ==========================================
// 1. CONFIGURATION DES STYLES (CLASSES)
// ==========================================

// Style des items de l'accordéon
$style_acc_item = "accordion-item bg-lightBlack border border-gray rounded-xl p-6 cursor-pointer";
$style_acc_title = "title24 flex justify-between items-center";
$style_acc_content = "accordion-content overflow-hidden h-0";

// Style des cartes du carrousel
// Note : 'flex flex-col' pour la structure verticale, 'w-[85vw] sm:w-[400px]' pour la taille
$style_card = "carousel-card w-[85vw] sm:w-[400px] flex-shrink-0 bg-lightBlack border-2 border-blue-500 rounded-xl p-6 shadow-2xl cursor-pointer flex flex-col";

// Style du bouton dans la carte (MODIFIÉ : ajout de 'block text-center' pour la balise <a>)
$style_card_btn = "w-full bg-blue-500 text-white py-3 rounded-full hover:bg-blue-600 font-semibold mt-auto transition-colors block text-center";

// Style des boutons de navigation (< >)
$style_nav_btn = "bg-lightBlack border border-gray text-white rounded-full w-12 h-12 flex items-center justify-center shadow-lg hover:bg-blue-500 hover:border-blue-500 transition-all active:scale-95";

// ==========================================
// 2. DONNÉES
// ==========================================

$accordionItems = [
  [
    "title" => "Marques & Identité",
    "desc" => "<strong class='text-accentuationSombre font-extrabold'>Ancreo</strong> vous accompagne dans la création d’<strong class='text-accentuationSombre font-extrabold'>identité de marque claire</strong>, stratégique et évolutive. Votre nom, identité visuelle et stratégie vous suivront dans votre croissance."
  ],
  [
    "title" => "Développement Web",
    "desc" => "Nous donnons vie à vos idées grâce à un <strong class='text-accentuationSombre font-extrabold'>code performant</strong>, évolutif et maintenable. <strong class='text-accentuationSombre font-extrabold'>Sites vitrines, applications sur mesure</strong>... notre développement favorise votre croissance."
  ],
  [
    "title" => "E-Commerce",
    "desc" => "<strong class='text-accentuationSombre font-extrabold'>Confiez-nous</strong> votre projet e-commerce : <strong class='text-accentuationSombre font-extrabold'>optimisation des ventes</strong>, intégration ERP, boutique personnalisée… Nous maximisons votre efficacité."
  ],
  [
    "title" => "Accompagnement",
    "desc" => "Grâce à notre <strong class='text-accentuationSombre font-extrabold'>accompagnement sur mesure</strong>, nous vous guidons <strong class='text-accentuationSombre font-extrabold'>de A à Z</strong> : juridique, comptabilité, business plan, création de site web et conseils personnalisés."
  ]
];

$carouselCards = [
  [
    "title" => "Formule Globale",
    "type" => "list",
    "inclus" => [
      "<strong class='text-accentuationSombre font-extrabold'>L'intégralité des services</strong> des formules Premium, Avancée et Basique",
      "Élaboration d'un <strong class='text-accentuationSombre font-extrabold'>business plan</strong>",
      "Consultations régulières avec des <strong class='text-accentuationSombre font-extrabold'>experts</strong> (juridiques, comptables, marketing)",
      "Accès à une <strong class='text-accentuationSombre font-extrabold'>communauté</strong> d'entrepreneur"
    ],
    "optionnels" => ["Mentorat", "Formation continue"],
    "cta" => "En savoir plus",
    "link" => "formule-globale"
  ],
  [
    "title" => "Formule Premium",
    "type" => "list",
    "inclus" => [
      "Création d’une <strong class='text-accentuationSombre font-extrabold'>boutique e-commerce</strong>",
      "Analyse des besoins et étude de marché",
      "Intégration des solutions de paiement (Carte Bancaire, PayPal, etc)",
      "Hébergement",
      "<strong class='text-accentuationSombre font-extrabold'>Nom de domaine offert</strong> pendant 1 an",
      "<strong class='text-accentuationSombre font-extrabold'>Formation</strong> à la gestion de la boutique"
    ],
    "optionnels" => [
      "Conseils juridiques (RGPD, politique d’expédition et de retour, etc)",
      "Assistance comptable pour la gestion des ventes et des taxes"
    ],
    "cta" => "En savoir plus",
    "link" => "formule-premium"
  ],
  [
    "title" => "Formule Avancée",
    "type" => "list",
    "inclus" => [
      "Développement d’une <strong class='text-accentuationSombre font-extrabold'>application web sur mesure</strong>",
      "<strong class='text-accentuationSombre font-extrabold'>Atelier d’idéation</strong> pour définir les fonctionnalités",
      "Hébergement",
      "<strong class='text-accentuationSombre font-extrabold'>Nom de domaine offert</strong> pendant 1 an"
    ],
    "optionnels" => [
      "Support juridique pour la conformité réglementaire",
      "Aide à la mise en place d’un plan de marketing digital"
    ],
    "cta" => "En savoir plus",
    "link" => "formule-avancee"
  ],
  [
    "title" => "Formule Basique",
    "type" => "list",
    "inclus" => [
      "Création d’un <strong class='text-accentuationSombre font-extrabold'>site vitrine optimisé</strong>",
      "Formulaire de contact et intégration des réseaux sociaux",
      "<strong class='text-accentuationSombre font-extrabold'>Formation</strong> à la gestion du site",
      "Hébergement",
      "<strong class='text-accentuationSombre font-extrabold'>Nom de domaine offert</strong> pendant 1 an"
    ],
    "optionnels" => [
      "<strong class='text-accentuationSombre font-extrabold'>Maintenance technique</strong> pendant 6 mois",
      "Options de mise à jour du contenu"
    ],
    "cta" => "En savoir plus",
    "link" => "formule-basique"
  ],
  [
    "title" => "Formule Sur mesure",
    "type" => "text",
    "subtitle" => "Vous avez d’autres besoins ?",
    "desc" => "Prenez contact avec notre équipe et nous vous proposerons une formule <strong class='text-accentuationSombre font-extrabold'>sur mesure</strong> qui répondra au mieux à toutes vos attentes !",
    "cta" => "En savoir plus",
    "link" => "formules-autres"
  ],
  [
    "title" => "Formule Refonte",
    "type" => "text",
    "subtitle" => "Votre application se fait vieillissante ?",
    "desc" => "Contactez-nous et nous déterminerons les <strong class='text-accentuationSombre font-extrabold'>meilleurs choix</strong> pour votre business !",
    "cta" => "En savoir plus",
    "link" => "formules-autres"
  ],
  [
    "title" => "Formule Maintenance",
    "type" => "text",
    "subtitle" => "Vous avez d’autres besoins ?",
    "desc" => "Prenez contact avec notre équipe et nous vous proposerons une formule de <strong class='text-accentuationSombre font-extrabold'>maintenance adaptée</strong> à vos besoins !",
    "cta" => "En savoir plus",
    "link" => "formules-autres"
  ]
];

// NOTE: J'ai mis à jour les liens "link" ci-dessus pour qu'ils pointent vers des pages différentes si nécessaire. 
// Assurez-vous que les fichiers (ex: formule-premium.php) existent bien.

include 'components/header.php';

?>
<title>Accueil</title>
<meta name="description" content="Ancreo, agence web à La Rochelle : création de sites web, refonte, e-commerce, développement sur mesure et accompagnement complet pour entrepreneurs, start-up et entreprises. Découvrez nos formules adaptées à chaque étape de votre croissance.">
<script type="importmap">
  {
    "imports": {
        "three": "https://unpkg.com/three@0.169.0/build/three.module.js",
        "three/addons/": "https://unpkg.com/three@0.169.0/examples/jsm/"
    }
    }
</script>

<script type="module" src="./src/js/index/hero.js" defer></script>
<script type="module" src="./src/js/index/index.js" defer></script>
<script type="module" src="./src/js/index/carousel.js" defer></script>
<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@graph": [{
        "@type": "Service",
        "name": "Accompagnement auto-entrepreneur",
        "provider": {
          "@type": "ProfessionalService",
          "name": "Ancreo"
        },
        "description": "Accompagnement complet des auto-entrepreneurs : démarches, business plan, conseils juridiques et comptables."
      },
      {
        "@type": "Service",
        "name": "Création de sites web",
        "provider": {
          "@type": "ProfessionalService",
          "name": "Ancreo"
        },
        "description": "Création de sites vitrines et web apps sur mesure."
      },
      {
        "@type": "Service",
        "name": "Refonte de sites web",
        "provider": {
          "@type": "ProfessionalService",
          "name": "Ancreo"
        },
        "description": "Refonte pour moderniser votre présence en ligne et améliorer l'expérience utilisateur."
      }
    ]
  }
</script>
<?php include 'components/navbar.php'; ?>

<body class="bg-dark-black flex flex-col min-h-screen text-white overflow-x-hidden">

  <section class="w-full min-h-screen p-4 sm:pl-20 flex flex-col justify-center relative">
    <div id="container" class="hidden md:block absolute inset-0 overflow-hidden pointer-events-none"></div>
    <div class="w-full sm:w-1/2 relative z-10">
      <h1 class="title64 mb-4">Ancreo</h1>
      <h2 class="title32 font-bold mb-4">Votre nouvelle agence web à La Rochelle</h2>
      <p class="text-lg leading-relaxed">
        Notre agence propose un accompagnement personnalisé et adapté pour les
        <strong class="text-accentuationSombre font-extrabold">entreprises, start-up, futurs entrepreneurs</strong>
        et bien plus !
      </p>
    </div>
  </section>

  <section id="qui-sommes-nous" class="px-6 sm:px-20 py-20 bg-lightBlack">
    <h2 class="title48 mb-6">Qui sommes-nous ?</h2>
    <p class="text20 leading-relaxed max-w-2xl mb-12">
      Donnez vie à vos ambitions : nous offrons un <strong class="text-accentuationSombre">suivi unique</strong> adapté à tous les porteurs de projets, des grands groupes aux <strong class="text-accentuationSombre">futurs entrepreneurs</strong>.
    </p>

    <div id="accordion" class="space-y-4">
      <?php foreach ($accordionItems as $item): ?>
        <div class="<?= $style_acc_item; ?>">
          <h3 class="<?= $style_acc_title; ?>">
            <?= $item['title']; ?>
            <span class="icon transition-transform duration-300 mb-4">+</span>
          </h3>
          <div class="<?= $style_acc_content; ?>">
            <p class="text16 mt-4 text-gray leading-relaxed">
              <?= $item['desc']; ?>
            </p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </section>

  <section id="nos-formules" class="px-0 sm:px-0 py-20 bg-lightBlack overflow-hidden relative">
    <div class="px-6 sm:px-20 text-center mb-12">
      <h2 class="title48 mb-4">Nos formules d'accompagnement</h2>
      <p class="text20 text-gray">Une offre adaptée à chaque étape de votre croissance</p>
    </div>

    <div class="relative w-full flex flex-col items-center">

      <div id="carousel-container" class="w-full relative cursor-grab active:cursor-grabbing perspective-1000">
        <div id="carousel-track" class="flex items-stretch gap-6 sm:gap-10 px-[50vw]">

          <?php foreach ($carouselCards as $index => $card): ?>
            <div class="<?= $style_card; ?>">

              <div class="flex justify-between items-start mb-4">
                <h3 class="title32 text-blue-400"><?= $card['title']; ?></h3>
                <span class="text-sm text-gray"><?= ($index + 1) . '/' . count($carouselCards); ?></span>
              </div>

              <div class="mb-6 flex-1 flex flex-col">
                <?php if ($card['type'] === 'list'): ?>
                  <h4 class="text16 font-bold text-white mb-2">Services inclus :</h4>
                  <ul class="text14 text-gray space-y-1 list-disc list-inside mb-4">
                    <?php foreach ($card['inclus'] as $li): ?>
                      <li><?= $li; ?></li>
                    <?php endforeach; ?>
                  </ul>
                  <?php if (!empty($card['optionnels'])): ?>
                    <h4 class="text16 font-bold text-white mb-2">Services optionnels :</h4>
                    <ul class="text14 text-gray space-y-1 list-disc list-inside">
                      <?php foreach ($card['optionnels'] as $li): ?>
                        <li><?= $li; ?></li>
                      <?php endforeach; ?>
                    </ul>
                  <?php endif; ?>

                <?php else: ?>
                  <?php if (isset($card['subtitle'])): ?>
                    <p class="text16 text-gray mb-4 font-semibold"><?= $card['subtitle']; ?></p>
                  <?php endif; ?>
                  <p class="text14 text-gray leading-relaxed">
                    <?= $card['desc']; ?>
                  </p>
                <?php endif; ?>
              </div>

              <a href="<?= $card['link'] ?>" class="<?= $style_card_btn; ?>">
                <?= $card['cta']; ?>
              </a>

            </div>
          <?php endforeach; ?>

        </div>
      </div>

      <div class="flex flex-col items-center mt-10 gap-6 w-full px-6">
        <div class="flex gap-4">
          <button id="carousel-prev" aria-label="Précédent" class="<?= $style_nav_btn; ?>">
            <span class="mb-1">‹</span>
          </button>
          <button id="carousel-next" aria-label="Suivant" class="<?= $style_nav_btn; ?>">
            <span class="mb-1">›</span>
          </button>
        </div>

        <div id="carousel-indicators" class="flex justify-center items-center gap-2 flex-wrap">
          <?php for ($i = 0; $i < count($carouselCards); $i++): ?>
            <button class="carousel-indicator w-2 h-2 rounded-full bg-gray/40 transition-all" data-index="<?= $i; ?>"></button>
          <?php endfor; ?>
        </div>
      </div>

    </div>
  </section>
  <?php include 'components/footer.php'; ?>
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

// Style du bouton dans la carte
$style_card_btn = "w-full bg-blue-500 text-white py-3 rounded-full hover:bg-blue-600 font-semibold mt-auto transition-colors";

// Style des boutons de navigation (< >)
$style_nav_btn = "bg-lightBlack border border-gray text-white rounded-full w-12 h-12 flex items-center justify-center shadow-lg hover:bg-blue-500 hover:border-blue-500 transition-all active:scale-95";

// ==========================================
// 2. DONNÉES
// ==========================================

$accordionItems = [
  [
    "title" => "Marques & Identité",
    "desc" => "Ancreo vous accompagne dans la création d’identité de marque claire, stratégique et évolutive. Votre nom, identité visuelle et stratégie vous suivront dans votre croissance."
  ],
  [
    "title" => "Développement Web",
    "desc" => "Nous donnons vie à vos idées grâce à un code performant, évolutif et maintenable. Sites vitrines, applications sur mesure... notre développement favorise votre croissance."
  ],
  [
    "title" => "E-Commerce",
    "desc" => "Confiance-nous votre projet e-commerce : optimisation des ventes, intégration ERP, boutique personnalisée… Nous maximisons votre efficacité."
  ],
  [
    "title" => "Accompagnement",
    "desc" => "Grâce à notre accompagnement sur mesure, nous vous guidons de A à Z : juridique, comptabilité, business plan, création de site web et conseils personnalisés."
  ]
];

$carouselCards = [
  [
    "title" => "Formule Globale",
    "type" => "list",
    "inclus" => [
      "L'intégralité des services des formules Premium, Avancée et Basique",
      "Élaboration d'un business plan",
      "Consultations régulières avec des experts (juridiques, comptables, marketing)",
      "Accès à une communauté d'entrepreneur"
    ],
    "optionnels" => ["Mentorat", "Formation continue"],
    "cta" => "En savoir plus"
  ],
  [
    "title" => "Formule Premium",
    "type" => "list",
    "inclus" => [
      "Création d’une boutique e-commerce",
      "Analyse des besoins et étude de marché",
      "Intégration des solutions de paiement (Carte Bancaire, PayPal, etc)",
      "Hébergement",
      "Nom de domaine offert pendant 1 an",
      "Formation à la gestion de la boutique"
    ],
    "optionnels" => [
      "Conseils juridiques (RGPD, politique d’expédition et de retour, etc)",
      "Assistance comptable pour la gestion des ventes et des taxes"
    ],
    "cta" => "En savoir plus"
  ],
  [
    "title" => "Formule Avancée",
    "type" => "list",
    "inclus" => [
      "Développement d’une application web sur mesure",
      "Atelier d’idéation pour définir les fonctionnalités",
      "Hébergement",
      "Nom de domaine offert pendant 1 an"
    ],
    "optionnels" => [
      "Support juridique pour la conformité réglementaire",
      "Aide à la mise en place d’un plan de marketing digital"
    ],
    "cta" => "En savoir plus"
  ],
  [
    "title" => "Formule Basique",
    "type" => "list",
    "inclus" => [
      "Création d’un site vitrine optimisé",
      "Formulaire de contact et intégration des réseaux sociaux",
      "Formation à la gestion du site",
      "Hébergement",
      "Nom de domaine offert pendant 1 an"
    ],
    "optionnels" => [
      "Maintenance technique pendant 6 mois",
      "Options de mise à jour du contenu"
    ],
    "cta" => "En savoir plus"
  ],
  [
    "title" => "Formule Sur mesure",
    "type" => "text",
    "subtitle" => "Vous avez d’autres besoins ?",
    "desc" => "Prenez contact avec notre équipe et nous vous proposerons une formule sur mesure qui répondra au mieux à toutes vos attentes !",
    "cta" => "Nous contacter"
  ],
  [
    "title" => "Formule Refonte",
    "type" => "text",
    "subtitle" => "Votre application se fait vieillissante ?",
    "desc" => "Contactez-nous et nous déterminerons les meilleurs choix pour votre business !",
    "cta" => "Nous contacter"
  ],
  [
    "title" => "Formule Maintenance",
    "type" => "text",
    "subtitle" => "Vous avez d’autres besoins ?",
    "desc" => "Prenez contact avec notre équipe et nous vous proposerons une formule de maintenance adaptée à vos besoins !",
    "cta" => "Nous contacter"
  ]
];
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Ancreo</title>

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="stylesheet" href="./src/css/output.css" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@100..900&family=Montserrat:wght@100..900&display=swap" rel="stylesheet" />

  <script type="importmap">
    {
      "imports": {
        "three": "https://unpkg.com/three@0.169.0/build/three.module.js",
        "three/addons/": "https://unpkg.com/three@0.169.0/examples/jsm/"
      }
    }
  </script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

  <script type="module" src="./src/js/index/hero.js" defer></script>
  <script type="module" src="./src/js/index/index.js" defer></script>
  <script type="module" src="./src/js/index/carousel.js" defer></script>

  <meta name="description" content="Ancreo, agence web spécialisée dans l’accompagnement des auto-entrepreneurs : démarches, business plan, conseils, création de sites web et web apps.">

  <script type="application/ld+json">
    [{
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
  </script>
</head>

<body class="bg-dark-black flex flex-col min-h-screen text-white overflow-x-hidden">

  <section class="w-full min-h-screen p-4 sm:pl-20 flex flex-col justify-center relative">
    <div id="container" class="hidden md:block absolute inset-0 overflow-hidden pointer-events-none"></div>
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

  <section id="qui-sommes-nous" class="px-6 sm:px-20 py-20 bg-black">
    <h2 class="title48 mb-6">Qui sommes-nous ?</h2>
    <p class="text20 leading-relaxed max-w-2xl mb-12">
      Notre agence propose un accompagnement personnalisé et adapté pour les
      <strong class="text-accentuationSombre">entreprises, start-up, futurs entrepreneurs</strong>
      et bien plus !
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

  <section id="nos-formules" class="px-0 sm:px-0 py-20 bg-black overflow-hidden relative">
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

              <button class="<?= $style_card_btn; ?>">
                <?= $card['cta']; ?>
              </button>
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

  <footer class="mt-auto text-center pb-8 bg-black">
    <h2>Site en cours de construction - Ancreo</h2>
    <h4 class="text-blue-600"><a href="mailto:ancreo17@gmail.com">ancreo17@gmail.com</a></h4>
  </footer>

</body>

</html>
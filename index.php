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

<body class="bg-black flex flex-col min-h-screen text-white">

  <!-- ASCII ANCRE (à droite via ton script) -->
  <div id="container" class="invisible sm:visible"></div>

  <!-- HERO -->
  <section class="w-full min-h-screen sm:w-1/2 p-4 sm:pl-20 flex flex-col justify-center">
    <h1 class="title64 mb-4">Ancreo</h1>
    <h2 class="title32 font-bold mb-4">Votre nouvelle agence web à La Rochelle</h2>
    <p class="text-lg leading-relaxed">
      Notre agence propose un accompagnement personnalisé et adapté pour les
      <strong class="text-blue-300 font-extrabold">entreprises, start-up, futurs entrepreneurs</strong>
      et bien plus !
    </p>
  </section>

  <!-- QUI SOMMES-NOUS -->
  <section id="qui-sommes-nous" class="px-6 sm:px-20 py-20">

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
          <span class="icon transition-transform duration-300">+</span>
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
          <span class="icon transition-transform duration-300">+</span>
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
          <span class="icon transition-transform duration-300">+</span>
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
          <span class="icon transition-transform duration-300">+</span>
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

  <!-- FOOTER (toujours en bas) -->
  <footer class="mt-auto text-center pb-8">
    <h2>Site en cours de construction - Ancreo</h2>
    <h4 class="text-blue-600"><a href="mailto:ancreo17@gmail.com">ancreo17@gmail.com</a></h4>
  </footer>

</body>


</html>
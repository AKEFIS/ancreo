<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ancreo</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <script type="importmap">
      {
        "imports": {
          "three": "https://unpkg.com/three@0.169.0/build/three.module.js",
          "three/addons/": "https://unpkg.com/three@0.169.0/examples/jsm/"
        }
      }
    </script>
    <script type="module" src="/src/js/hero.js"></script>
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />
    <!-- TAILWIND -->
    <link rel="stylesheet" href="/src/css/output.css" />
    <style>
      #container {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
      }
    </style>

    <!-- REFERENCEMENT -->
    <meta
      name="description"
      content="Ancreo, agence web spécialisée dans l’accompagnement des auto-entrepreneurs : démarches, business plan, conseils, création de sites web, web apps et refontes.">

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
  <body class="bg-black h-svh flex">
    <div id="container" class="invisible sm:visible"></div>
    
    <!-- Contenu à gauche -->
    <div class="w-full sm:w-1/2 p-4 sm:pl-20 text-white flex flex-col justify-center relative z-10 pb-60">
      <h1 class="title64 mb-4">Ancreo</h1>
      <h2 class="title32 font-bold mb-4">Votre nouvelle agence web à La Rochelle</h2>
      <p class="text-lg leading-relaxed">Notre agence propose un accompagnement personalisé et adapté pour les <strong class="text-blue-300 font-extrabold">entreprises, start-up, futurs entrepreneurs</strong> et bien plus !</p>
    </div>

    <div class="absolute bottom-0 left-0 right-0 text-center text-white pb-8 z-10">
      <h2>Site en cours de construction - Ancreo</h2>
      <h4 class="text-blue-600"><a href="mailto:ancreo17@gmail.com">ancreo17@gmail.com</a></h4>
    </div>
  </body>
</html>

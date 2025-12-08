<?php http_response_code(404); ?>
<?php include('components/header.php') ?>
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
<script type="module" src="./js/index/hero.js" defer></script>
<script type="module" src="./js/index/index.js" defer></script>
<script type="module" src="./js/index/carousel.js" defer></script>
<?php include 'components/navbar.php'; ?>

<section class="w-full min-h-screen p-4 sm:pl-20 flex flex-col justify-center relative">
    <!-- ASCII ANCRE (à droite via ton script) -->
    <div id="container" class="hidden md:block absolute inset-0 overflow-hidden pointer-events-none"></div>

    <!-- Contenu texte à gauche -->
    <div class="w-full sm:w-1/2 relative z-10">
      <h1 class="title32 font-bold mb-4">Oups… cette page n’existe pas (404)</h1>
      <p class="text-lg leading-relaxed">
        La page que vous recherchez est introuvable ou a été déplacée.
            Pas d’inquiétude, vous pouvez revenir à l’accueil ou continuer votre navigation.
      </p>
    </div>
  </section>

  <?php include 'components/footer.php'; ?>
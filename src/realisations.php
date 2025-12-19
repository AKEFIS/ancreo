<?php
$bodyClass = "bg-lightBlack text-gray flex flex-col justify-between min-h-[100vh]";
$carousel = "carousel md:hidden relative overflow-hidden w-full";
$carouselTrack = "carouselTrack flex gap-4 overflow-x-auto overflow-y-hidden snap-x snap-mandatory px-4 py-4 h-[50vh]";
$carouselSlide = "carousel-slide flex-shrink-0 snap-center w-[70%] transition-transform duration-300 ease-in-out";
$carouselImage = "w-full h-[50vh] object-cover rounded-xl";
$carouselImageGrande = "w-full h-[50vh] object-cover object-top rounded-xl";
$carouselMobile = "hidden md:flex gap-5 justify-center max-w-full";
$card = "card cursor-pointer overflow-hidden rounded-1xl group transform transition-transform duration-500 hover:scale-105";
$card__image ="w-[84px] h-[50vh] object-cover rounded-1xl transition-transform duration-500 group-hover:scale-120 filter grayscale group-hover:filter-none brightness-90 group-hover:brightness-110";

$modal = "modal fixed inset-0 pb-2 bg-black bg-opacity-50 backdrop-blur-sm flex justify-center items-center hidden z-10";
$modalContent = "modal-content bg-[#FAFAFA]/90 rounded-xl w-[70%] max-h-[90vh] p-5 overflow-y-auto";
$modalContent__bouton = "modal-close text-black text32 font-bold float-right cursor-pointer";
$modalContent__image = "modal-image w-full max-h-[40vh] rounded-b-xl mb-4";
$modalContent__title = "modal-title title32 tracking-[.25em] text-black border-b-1 border-black pb-1 mb-4 inline-block";
$modalContent__tag = "modal-tags flex flex-wrap gap-3 mb-8";
$modalContent__texte = "modal-text text16 text-black leading-relaxed mb-8";

?>
<?php include 'components/header.php'; ?>
<title>Réalisation</title>
    <script src="/src/js/modal.js" defer></script>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "CollectionPage",
      "name": "Réalisation - Ancreo",
      "description": "Découvrez nos différents projets réalisés : sites web, applications, designs et créations digitales.",
      "url": "https://agence-ancreo.lpmiaw.univ-lr.fr/realisation"
    }
    </script>
<?php include 'components/navbar.php'; ?>

  <main class="lg:py-12 py-6 px-4">
    <h1 class="hidden">Nos Réalisations</h1>
    <section class="<?= $carousel ?>">
      <div class="<?= $carouselTrack ?>"> 
        <div class="<?= $carouselSlide ?>" onclick="openModal('projet1', this)">
          <img loading="lazy" src="/src/assets/realSkateBoardCrop.webp" class="<?= $carouselImage ?>" />
        </div>

        <div class="<?= $carouselSlide ?>" onclick="openModal('projet2', this)">
          <img loading="lazy" src="/src/assets/portfolioSean.webp" class="<?= $carouselImage ?>" />
        </div>

        <div class="<?= $carouselSlide ?>" onclick="openModal('projet3', this)">
          <img loading="lazy" src="/src/assets/AncreoV1.webp" class="<?= $carouselImage ?>" />
        </div>

        <div class="<?= $carouselSlide ?>" onclick="openModal('projet4', this)">
          <img loading="lazy" src="/src/assets/steamLike.webp" class="<?= $carouselImage ?>" />
        </div>

        <div class="<?= $carouselSlide ?>" onclick="openModal('projet5', this)">
          <img loading="lazy" src="/src/assets/quizList.webp" class="<?= $carouselImage ?>" />
        </div>

        <div class="<?= $carouselSlide ?>" onclick="openModal('projet6', this)">
          <img loading="lazy" src="/src/assets/podly.webp" class="<?= $carouselImage ?>" />
        </div>

        <div class="<?= $carouselSlide ?>" onclick="openModal('projet7', this)">
          <img loading="lazy" src="/src/assets/biblio.webp" class="<?= $carouselImage ?>" />
        </div>

        <div class="<?= $carouselSlide ?>" onclick="openModal('projet8', this)">
          <img loading="lazy" src="/src/assets/Atlas.webp" class="<?= $carouselImage ?>" />
        </div>

        <div class="<?= $carouselSlide ?>" onclick="openModal('projet9', this)">
          <img loading="lazy" src="/src/assets/Magic.webp" class="<?= $carouselImage ?>" />
        </div>

        <div class="<?= $carouselSlide ?>" onclick="openModal('projet10', this)">
          <img loading="lazy" src="/src/assets/BgCollect.webp" class="<?= $carouselImageGrande ?>"/>
        </div>
      </div>
    </section>

    <section class="<?= $carouselMobile ?>">
      <div class="<?= $card ?>" onclick="openModal('projet1', this)">
        <img loading="lazy" src="/src/assets/realSkateBoardCrop.webp" class="<?= $card__image ?>">
      </div>

      <div class="<?= $card ?>" onclick="openModal('projet2', this)">
        <img loading="lazy" src="/src/assets/portfolioSean.webp" class="<?= $card__image ?>">
      </div>

      <div class="<?= $card ?>" onclick="openModal('projet3', this)">
        <img loading="lazy" src="/src/assets/AncreoV1.webp" class="<?= $card__image ?>">
      </div>

      <div class="<?= $card ?>" onclick="openModal('projet4', this)">
        <img loading="lazy" src="/src/assets/steamLike.webp" class="<?= $card__image ?>">
      </div>

      <div class="<?= $card ?>" onclick="openModal('projet5', this)">
        <img loading="lazy" src="/src/assets/quizList.webp" class="<?= $card__image ?>">
      </div>

      <div class="<?= $card ?>" onclick="openModal('projet6', this)">
        <img loading="lazy" src="/src/assets/podly.webp" class="<?= $card__image ?>">
      </div>
                
      <div class="<?= $card ?>" onclick="openModal('projet7', this)">
        <img loading="lazy" src="/src/assets/biblio.webp" class="<?= $card__image ?>">
      </div>

      <div class="<?= $card ?>" onclick="openModal('projet8', this)">
        <img loading="lazy" src="/src/assets/Atlas.webp" class="<?= $card__image ?>">
      </div>

      <div class="<?= $card ?>" onclick="openModal('projet9', this)">
        <img loading="lazy" src="/src/assets/Magic.webp" class="<?= $card__image ?>">
      </div>

      <div class="<?= $card ?>" onclick="openModal('projet10', this)">
        <img loading="lazy" src="/src/assets/BgCollect.webp" class="<?= $card__image ?>">
      </div>
    </section>
  </main>

  <div class="<?= $modal ?>">
    <div class="<?= $modalContent ?>">
      <button class="<?= $modalContent__bouton?>">×</button>
      <img loading="lazy" class="<?= $modalContent__image ?>" src="">
      <h3 class="<?= $modalContent__title ?>"></h3>
      <div class="<?= $modalContent__tag ?>"></div>
      <p class="<?= $modalContent__texte ?>"></p>
    </div>
  </div>
  <?php include('components/footer.php') ?>
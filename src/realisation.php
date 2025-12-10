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
  
  <main class="p-4">

    <section class="carousel md:hidden relative overflow-hidden w-full">
      <div class="carouselTrack flex gap-4 overflow-x-auto overflow-y-hidden snap-x snap-mandatory px-4 py-4 h-[50vh]"> 
        <div class="carousel-slide flex-shrink-0 snap-center w-[70%] transition-transform duration-300 ease-in-out" onclick="openModal('projet1', this)">
          <img src="/srcassets/realSkateBoardCrop.png" class="w-full h-[50vh] object-cover rounded-xl" />
        </div>

          <div class="carousel-slide flex-shrink-0 snap-center w-[70%] transition-transform duration-300 ease-in-out" onclick="openModal('projet2', this)">
                <img src="/src/assets/portfolioSean.png" class="w-full h-[50vh] object-cover rounded-xl" />
            </div>

            <div class="carousel-slide flex-shrink-0 snap-center w-[70%] transition-transform duration-300 ease-in-out" onclick="openModal('projet3', this)">
                <img src="/src/assets/AncreoV1.png" class="w-full h-[50vh] object-cover rounded-xl" />
            </div>

            <div class="carousel-slide flex-shrink-0 snap-center w-[70%] transition-transform duration-300 ease-in-out" onclick="openModal('projet4', this)">
                <img src="/src/assets/steamLike.png" class="w-full h-[50vh] object-cover rounded-xl" />
            </div>

            <div class="carousel-slide flex-shrink-0 snap-center w-[70%] transition-transform duration-300 ease-in-out" onclick="openModal('projet5', this)">
                <img src="/src/assets/quizList.png" class="w-full h-[50vh] object-cover rounded-xl" />
            </div>

            <div class="carousel-slide flex-shrink-0 snap-center w-[70%] transition-transform duration-300 ease-in-out" onclick="openModal('projet6', this)">
                <img src="/src/assets/podly.png" class="w-full h-[50vh] object-cover rounded-xl" />
            </div>

            <div class="carousel-slide flex-shrink-0 snap-center w-[70%] transition-transform duration-300 ease-in-out" onclick="openModal('projet7', this)">
                <img src="/src/assets/biblio.png" class="w-full h-[50vh] object-cover rounded-xl" />
            </div>

            <div class="carousel-slide flex-shrink-0 snap-center w-[70%] transition-transform duration-300 ease-in-out" onclick="openModal('projet8', this)">
                <img src="/src/assets/Atlas.png" class="w-full h-[50vh] object-cover rounded-xl" />
            </div>

            <div class="carousel-slide flex-shrink-0 snap-center w-[70%] transition-transform duration-300 ease-in-out" onclick="openModal('projet9', this)">
                <img src="/src/assets/Magic.png" class="w-full h-[50vh] object-cover rounded-xl" />
            </div>

            <div class="carousel-slide flex-shrink-0 snap-center w-[70%] transition-transform duration-300 ease-in-out" onclick="openModal('projet10', this)">
                <img src="/src/assets/BgCollect.png" class="w-full h-[50vh] object-cover object-top rounded-xl"/>
            </div>
        </div>
    </section>

      <section class="hidden md:flex gap-5 justify-center max-w-full">
        <div class="card cursor-pointer overflow-hidden rounded-1xl group transform transition-transform duration-500 hover:scale-105" onclick="openModal('projet1', this)">
          <img src="/src/assets/realSkateBoardCrop.png" class="w-[84px] h-[50vh] object-cover rounded-1xl transition-transform duration-500 group-hover:scale-120 filter grayscale group-hover:filter-none brightness-90 hover:border-white hover:bg-white/10 ">
        </div>

        <div class="card cursor-pointer overflow-hidden rounded-1xl group transform transition-transform duration-500 hover:scale-105" onclick="openModal('projet2', this)">
          <img src="/src/assets/portfolioSean.png" class="w-[84px] h-[50vh] object-cover rounded-1xl transition-transform duration-500 group-hover:scale-120 filter grayscale group-hover:filter-none brightness-90 group-hover:brightness-110">
        </div>

        <div class="card cursor-pointer overflow-hidden rounded-1xl group transform transition-transform duration-500 hover:scale-105" onclick="openModal('projet3', this)">
          <img src="/src/assets/AncreoV1.png" class="w-[84px] h-[50vh] object-cover rounded-1xl transition-transform duration-500 group-hover:scale-105 filter grayscale group-hover:filter-none brightness-90 group-hover:brightness-110">
        </div>

        <div class="card cursor-pointer overflow-hidden rounded-1xl shadow-lg transform transition duration-500 ease-in-out hover:scale-105 hover:-translate-y-2 hover:shadow-2xl group" onclick="openModal('projet4', this)">
          <img src="/src/assets/steamLike.png" class="w-[84px] h-[50vh] object-cover rounded-1xl transition-transform duration-500 group-hover:scale-120 filter grayscale group-hover:filter-none">
        </div>

        <div class="card cursor-pointer overflow-hidden rounded-1xl shadow-lg transform transition duration-500 ease-in-out hover:scale-105 hover:-translate-y-2 hover:shadow-2xl group" onclick="openModal('projet5', this)">
          <img src="/src/assets/quizList.png" class="w-[84px] h-[50vh] object-cover rounded-1xl transition-transform duration-500 group-hover:scale-120 filter grayscale group-hover:filter-none">
        </div>

        <div class="card cursor-pointer overflow-hidden rounded-1xl shadow-lg transform transition duration-500 ease-in-out hover:scale-105 hover:-translate-y-2 hover:shadow-2xl group" onclick="openModal('projet6', this)">
          <img src="/src/assets/podly.png" class="w-[84px] h-[50vh] object-cover rounded-1xl transition-transform duration-500 group-hover:scale-120 filter grayscale group-hover:filter-none">
        </div>
                
        <div class="card cursor-pointer overflow-hidden rounded-1xl group transform transition-transform duration-500 hover:scale-105" onclick="openModal('projet7', this)">
          <img src="/src/assets/biblio.png" class="w-[84px] h-[50vh] object-cover rounded-1xl transition-transform duration-500 group-hover:scale-120 filter grayscale group-hover:filter-none">
        </div>

        <div class="card cursor-pointer overflow-hidden rounded-1xl group transform transition-transform duration-500 hover:scale-105" onclick="openModal('projet8', this)">
          <img src="/src/assets/Atlas.png" class="w-[84px] h-[50vh] object-cover rounded-1xl transition-transform duration-500 group-hover:scale-120 filter grayscale group-hover:filter-none">
        </div>

        <div class="card cursor-pointer overflow-hidden rounded-1xl group transform transition-transform duration-500 hover:scale-105" onclick="openModal('projet9', this)">
          <img src="/src/assets/Magic.png" class="w-[84px] h-[50vh] object-cover rounded-1xl transition-transform duration-500 group-hover:scale-120 filter grayscale group-hover:filter-none">
        </div>

        <div class="card cursor-pointer overflow-hidden rounded-1xl group transform transition-transform duration-500 hover:scale-105" onclick="openModal('projet10', this)">
          <img src="/src/assets/BgCollect.png" class="w-[84px] h-[50vh] object-cover rounded-1xl transition-transform duration-500 group-hover:scale-120 filter grayscale group-hover:filter-none">
        </div>
      </section>
    </main>

  <div class="modal fixed inset-0 pb-2 bg-black bg-opacity-50 backdrop-blur-sm flex justify-center items-center hidden z-10">
    <div class="modal-content bg-[#FAFAFA]/90 rounded-xl w-[70%] max-h-[90vh] p-5 overflow-y-auto">
      <button class="modal-close text-black text32 font-bold float-right">×</button>
      <img class="modal-image w-full max-h-[40vh] rounded-b-xl mb-4" src="">
      <h3 class="modal-title title32 tracking-[.25em] text-black border-b-1 border-black pb-1 mb-4 inline-block"></h3>
      <div class="modal-tags flex flex-wrap gap-3 mb-8"></div>
      <p class="modal-text text16 text-black leading-relaxed mb-8"></p>
    </div>
  </div>
  <?php include('components/footer.php') ?>
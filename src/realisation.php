<?php include('components/header.php') ?>
  
  <main class="p-4">

    <section class="carousel md:hidden relative overflow-hidden w-full">
      <div class="carouselTrack flex gap-4 overflow-x-auto overflow-y-hidden snap-x snap-mandatory px-4 py-4 h-[50vh]"> 
        <div class="carousel-slide flex-shrink-0 snap-center w-[70%] transition-transform duration-300 ease-in-out" onclick="openModal('projet1', this)">
          <img src="assets/realSkateBoardCrop.png" class="w-full h-[50vh] object-cover rounded-xl" />
        </div>

          <div class="carousel-slide flex-shrink-0 snap-center w-[70%] transition-transform duration-300 ease-in-out" onclick="openModal('projet2', this)">
                <img src="assets/portfolioSean.png" class="w-full h-[50vh] object-cover rounded-xl" />
            </div>

            <div class="carousel-slide flex-shrink-0 snap-center w-[70%] transition-transform duration-300 ease-in-out" onclick="openModal('projet3', this)">
                <img src="assets/AncreoV1.png" class="w-full h-[50vh] object-cover rounded-xl" />
            </div>

            <div class="carousel-slide flex-shrink-0 snap-center w-[70%] transition-transform duration-300 ease-in-out" onclick="openModal('projet4', this)">
                <img src="assets/steamLike.png" class="w-full h-[50vh] object-cover rounded-xl" />
            </div>

            <div class="carousel-slide flex-shrink-0 snap-center w-[70%] transition-transform duration-300 ease-in-out" onclick="openModal('projet5', this)">
                <img src="assets/quizList.png" class="w-full h-[50vh] object-cover rounded-xl" />
            </div>

            <div class="carousel-slide flex-shrink-0 snap-center w-[70%] transition-transform duration-300 ease-in-out" onclick="openModal('projet6', this)">
                <img src="assets/podly.png" class="w-full h-[50vh] object-cover rounded-xl" />
            </div>

            <div class="carousel-slide flex-shrink-0 snap-center w-[70%] transition-transform duration-300 ease-in-out" onclick="openModal('projet7', this)">
                <img src="assets/biblio.png" class="w-full h-[50vh] object-cover rounded-xl" />
            </div>

            <div class="carousel-slide flex-shrink-0 snap-center w-[70%] transition-transform duration-300 ease-in-out" onclick="openModal('projet8', this)">
                <img src="assets/Atlas.png" class="w-full h-[50vh] object-cover rounded-xl" />
            </div>

            <div class="carousel-slide flex-shrink-0 snap-center w-[70%] transition-transform duration-300 ease-in-out" onclick="openModal('projet9', this)">
                <img src="assets/Magic.png" class="w-full h-[50vh] object-cover rounded-xl" />
            </div>

            <div class="carousel-slide flex-shrink-0 snap-center w-[70%] transition-transform duration-300 ease-in-out" onclick="openModal('projet10', this)">
                <img src="assets/BgCollect.png" class="w-full h-[50vh] object-cover object-top rounded-xl"/>
            </div>
        </div>
    </section>

      <section class="hidden md:flex gap-5 justify-center max-w-full">
        <div class="card cursor-pointer overflow-hidden rounded-1xl group transform transition-transform duration-500 hover:scale-105" onclick="openModal('projet1', this)">
          <img src="assets/realSkateBoardCrop.png" class="w-[84px] h-[50vh] object-cover rounded-1xl transition-transform duration-500 group-hover:scale-120 filter grayscale group-hover:filter-none brightness-90 hover:border-white hover:bg-white/10 ">
        </div>

        <div class="card cursor-pointer overflow-hidden rounded-1xl group transform transition-transform duration-500 hover:scale-105" onclick="openModal('projet2', this)">
          <img src="assets/portfolioSean.png" class="w-[84px] h-[50vh] object-cover rounded-1xl transition-transform duration-500 group-hover:scale-120 filter grayscale group-hover:filter-none brightness-90 group-hover:brightness-110">
        </div>

        <div class="card cursor-pointer overflow-hidden rounded-1xl group transform transition-transform duration-500 hover:scale-105" onclick="openModal('projet3', this)">
          <img src="assets/AncreoV1.png" class="w-[84px] h-[50vh] object-cover rounded-1xl transition-transform duration-500 group-hover:scale-105 filter grayscale group-hover:filter-none brightness-90 group-hover:brightness-110">
        </div>

        <div class="card cursor-pointer overflow-hidden rounded-1xl shadow-lg transform transition duration-500 ease-in-out hover:scale-105 hover:-translate-y-2 hover:shadow-2xl group" onclick="openModal('projet4', this)">
          <img src="assets/steamLike.png" class="w-[84px] h-[50vh] object-cover rounded-1xl transition-transform duration-500 group-hover:scale-120 filter grayscale group-hover:filter-none">
        </div>

        <div class="card cursor-pointer overflow-hidden rounded-1xl shadow-lg transform transition duration-500 ease-in-out hover:scale-105 hover:-translate-y-2 hover:shadow-2xl group" onclick="openModal('projet5', this)">
          <img src="assets/quizList.png" class="w-[84px] h-[50vh] object-cover rounded-1xl transition-transform duration-500 group-hover:scale-120 filter grayscale group-hover:filter-none">
        </div>

        <div class="card cursor-pointer overflow-hidden rounded-1xl shadow-lg transform transition duration-500 ease-in-out hover:scale-105 hover:-translate-y-2 hover:shadow-2xl group" onclick="openModal('projet6', this)">
          <img src="assets/podly.png" class="w-[84px] h-[50vh] object-cover rounded-1xl transition-transform duration-500 group-hover:scale-120 filter grayscale group-hover:filter-none">
        </div>
                
        <div class="card cursor-pointer overflow-hidden rounded-1xl group transform transition-transform duration-500 hover:scale-105" onclick="openModal('projet7', this)">
          <img src="assets/biblio.png" class="w-[84px] h-[50vh] object-cover rounded-1xl transition-transform duration-500 group-hover:scale-120 filter grayscale group-hover:filter-none">
        </div>

        <div class="card cursor-pointer overflow-hidden rounded-1xl group transform transition-transform duration-500 hover:scale-105" onclick="openModal('projet8', this)">
          <img src="assets/Atlas.png" class="w-[84px] h-[50vh] object-cover rounded-1xl transition-transform duration-500 group-hover:scale-120 filter grayscale group-hover:filter-none">
        </div>

        <div class="card cursor-pointer overflow-hidden rounded-1xl group transform transition-transform duration-500 hover:scale-105" onclick="openModal('projet9', this)">
          <img src="assets/Magic.png" class="w-[84px] h-[50vh] object-cover rounded-1xl transition-transform duration-500 group-hover:scale-120 filter grayscale group-hover:filter-none">
        </div>

        <div class="card cursor-pointer overflow-hidden rounded-1xl group transform transition-transform duration-500 hover:scale-105" onclick="openModal('projet10', this)">
          <img src="assets/BgCollect.png" class="w-[84px] h-[50vh] object-cover rounded-1xl transition-transform duration-500 group-hover:scale-120 filter grayscale group-hover:filter-none">
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

  <footer class="p-8 bg-black">
        <div class="flex flex-col gap-5 text20 mb-8 sm:flex-row sm:justify-between sm:gap-0">
            <ul>
              <li>Ancreo</li>
              <li>44 Boulevard Ablert Einstein</li>
              <li>17000 La Rochelle - France</li>
              <li>Tél : 06 50 02 17 35</li>
              <li><a href="mailto:ancreo17@gmail.com">Email : ancreo17@gmail.com</a></li>
            </ul>
            <ul>
              <li><a href="index.html">Accueil</a></li>
              <li><a href="realisation.html">Réalisation</a></li>
              <li><a href="services.html">Services</a></li>
              <li><a href="contact.html">Contact</a></li>
            </ul>
            <iframe class="sm:w-[33%]" 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2764.116873402291!2d-1.1593534242005934!3d46.148418787527866!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480153b92a04c73b%3A0xdb42e82ff25e37ce!2s44%20Av.%20Albert%20Einstein%2C%2017000%20La%20Rochelle!5e0!3m2!1sfr!2sfr!4v1763989853042!5m2!1sfr!2sfr"
                width="100%" height="100%" style="border:0;">
            </iframe>
        </div>
        <p class="text16 text-center">Copyright Ancreo © 2025 All rights reserved</p>
  </footer>

</body>
</html>
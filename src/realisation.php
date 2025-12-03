<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réalisations</title>
    <link rel="stylesheet" href="css/output.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/Draggable.min.js"></script>
    <script src="js/modal.js" defer></script>
</head> 

<body class="bg-lightBlack text-gray flex flex-col justify-between min-h-[100vh]">

  <header class="sticky top-0">
    <nav
      class="flex justify-between items-center md:px-8 pr-0 pl-4 bg-black z-50">
      <a href="index.html" class="logo">Ancreo</a>

      <!-- Menu Desktop -->
      <ul class="hidden md:flex text20">
        <li
          class="relative py-8 transition-colors duration-300 hover:bg-gray-300 hover:text-black group">
          <a class="p-8" href="index.html">Accueil</a>
          <div
            class="absolute bottom-0 left-1/2 -translate-x-1/2 w-0 h-0 border-l-[4rem] border-l-transparent border-r-[4rem] border-r-transparent border-b-[1.5rem] b-black opacity-0 group-hover:opacity-100 transition-all duration-300"></div>
        </li>
        <li
          class="relative py-8 transition-colors duration-300 hover:bg-gray-300 hover:text-black group">
          <a class="p-8" href="#.html">Réalisation</a>
          <div
            class="absolute bottom-0 left-1/2 -translate-x-1/2 w-0 h-0 border-l-[5rem] border-l-transparent border-r-[5rem] border-r-transparent border-b-[1.5rem] b-black opacity-0 group-hover:opacity-100 transition-all duration-300"></div>
        </li>
        <li
          class="relative group py-8 transition-colors duration-300 cursor-pointer hover:bg-gray-300 hover:text-black">
          <span class="p-8"> Formules </span>
          <div
            class="absolute bottom-0 left-1/2 -translate-x-1/2 w-0 h-0 border-l-[4.5rem] border-l-transparent border-r-[4.5rem] border-r-transparent border-b-[1.5rem] b-black opacity-0 group-hover:opacity-100 transition-all duration-300"></div>
          <ul
            id="submenu-desktop"
            class="absolute left-0 top-full opacity-0 pointer-events-none bg-white text-black shadow-lg w-48">
            <li class="hover:bg-gray-200 px-4 py-2">
              <a href="#">Formule Global</a>
            </li>
            <li class="hover:bg-gray-200 px-4 py-2">
              <a href="#">Formule Premium</a>
            </li>
            <li class="hover:bg-gray-200 px-4 py-2">
              <a href="#">Formule Avancée</a>
            </li>
            <li class="hover:bg-gray-200 px-4 py-2">
              <a href="#">Formule Basique</a>
            </li>
            <li class="hover:bg-gray-200 px-4 py-2">
              <a href="#">Autre formules</a>
            </li>
          </ul>
        </li>
        <li
          class="relative py-8 transition-colors duration-300 hover:bg-gray-300 hover:text-black group">
          <a class="p-8" href="contact.html">Contact</a>
          <div
            class="absolute bottom-0 left-1/2 -translate-x-1/2 w-0 h-0 border-l-[4rem] border-l-transparent border-r-[4rem] border-r-transparent border-b-[1.5rem] b-black opacity-0 group-hover:opacity-100 transition-all duration-300"></div>
        </li>
      </ul>
      <!-- Menu Burger -->
      <button id="menu-toggle" class="p-2 md:hidden relative z-50">
        <!-- Icon menu ouvert -->
        <svg
          id="menu-icon"
          class="w-10 h-10"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 640 640">
          <path
            fill="#d0d0d0"
            d="M96 160C96 142.3 110.3 128 128 128L512 128C529.7 128 544 142.3 544 160C544 177.7 529.7 192 512 192L128 192C110.3 192 96 177.7 96 160zM96 320C96 302.3 110.3 288 128 288L512 288C529.7 288 544 302.3 544 320C544 337.7 529.7 352 512 352L128 352C110.3 352 96 337.7 96 320zM544 480C544 497.7 529.7 512 512 512L128 512C110.3 512 96 497.7 96 480C96 462.3 110.3 448 128 448L512 448C529.7 448 544 462.3 544 480z" />
        </svg>
        <!-- Icon menu fermé -->
        <svg
          id="close-icon"
          class="w-10 h-10 hidden"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 640 640">
          <path
            fill="#d0d0d0"
            d="M183.1 137.4C170.6 124.9 150.3 124.9 137.8 137.4C125.3 149.9 125.3 170.2 137.8 182.7L275.2 320L137.9 457.4C125.4 469.9 125.4 490.2 137.9 502.7C150.4 515.2 170.7 515.2 183.2 502.7L320.5 365.3L457.9 502.6C470.4 515.1 490.7 515.1 503.2 502.6C515.7 490.1 515.7 469.8 503.2 457.3L365.8 320L503.1 182.6C515.6 170.1 515.6 149.8 503.1 137.3C490.6 124.8 470.3 124.8 457.8 137.3L320.5 274.7L183.1 137.4z" />
        </svg>
      </button>

      <!-- Menu Mobile -->
      <div
        id="mobile-menu"
        class="hidden fixed top-0 left-0 w-full h-screen z-40">
        <ul class="overflow-y-auto h-full w-full">
          <li class="border-b border-gray px-4 py-3">
            <a href="index.html" class="text48 text-white">Accueil</a>
          </li>
          <li class="border-b border-gray px-4 py-3">
            <a href="#.html" class="text48 text-white">Réalisation</a>
          </li>
          <li class="border-b border-gray py-3">
            <button
              id="services-toggle"
              class="w-full text-left px-4 flex justify-between items-center text-white">
              <span class="text48">Formules</span>
              <svg
                id="chevron"
                class="w-5 h-5"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M19 9l-7 7-7-7"></path>
              </svg>
            </button>
            <ul id="submenu-mobile" class="hidden bg-black">
              <li class="block border-b border-gray px-4 py-3">
                <a href="#" class="text-white text24">Formule Global</a>
              </li>
              <li class="border-b border-gray px-4 py-3">
                <a href="#" class="text-white text24">Formule Premium</a>
              </li>
              <li class="border-b border-gray px-4 py-3">
                <a href="#" class="text-white text24">Formule Avancée</a>
              </li>
              <li class="border-b border-gray px-4 py-3">
                <a href="#" class="text-white text24">Formule Basique</a>
              </li>
              <li class="px-4 py-3">
                <a href="#" class="text-white text24">Autre formules</a>
              </li>
            </ul>
          </li>
          <li class="border-b border-gray px-4 py-3">
            <a href="contact.html" class="text48 text-white">Contact</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  
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
</head> 

<body class="bg-lightBlack text-gray flex flex-col justify-between min-h-[100vh]">

  <header class="sticky top-0 z-45">
<nav
      class="flex justify-between items-center md:px-8 pr-0 pl-4 bg-black">
      <a href="/" class="logo">Ancreo</a>

      <!-- Menu Desktop -->
      <ul class="hidden md:flex text20">
        <li
          class="relative py-8 transition-colors duration-300 hover:bg-gray-300 hover:text-black group">
          <a class="p-8" href="/">Accueil</a>
          <div
            class="absolute bottom-0 left-1/2 -translate-x-1/2 w-0 h-0 border-l-[4rem] border-l-transparent border-r-[4rem] border-r-transparent border-b-[1.5rem] b-black opacity-0 group-hover:opacity-100 transition-all duration-300"></div>
        </li>
        <li
          class="relative py-8 transition-colors duration-300 hover:bg-gray-300 hover:text-black group">
          <a class="p-8" href="/realisation">Réalisation</a>
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
            <a href="/formule-globale"><li class="hover:bg-gray-200 px-4 py-2">
              <p>Formule Globale</p>
            </li></a>
            <a href="/formule-premium"><li class="hover:bg-gray-200 px-4 py-2">
              <p>Formule Premium</p>
            </li></a>
            <a href="/formule-avancee"><li class="hover:bg-gray-200 px-4 py-2">
              <p>Formule Avancée</p>
            </li></a>
            <a href="/formule-basique"><li class="hover:bg-gray-200 px-4 py-2">
              <p>Formule Basique</p>
            </li></a>
            <a href="/formules-autres"><li class="hover:bg-gray-200 px-4 py-2">
              <p>Autre formules</p>
            </li></a>
          </ul>
        </li>
        <li
          class="relative py-8 transition-colors duration-300 hover:bg-gray-300 hover:text-black group">
          <a class="p-8" href="/contact">Contact</a>
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
            <a href="/" class="text48 text-white">Accueil</a>
          </li>
          <li class="border-b border-gray px-4 py-3">
            <a href="/realisations" class="text48 text-white">Réalisation</a>
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
              <a href="/formule-globale" class="text-white text24"><li class="block border-b border-gray px-4 py-3">
                <p>Formule Globale</p>
              </li></a>
              <a href="/formule-premium" class="text-white text24"><li class="border-b border-gray px-4 py-3">
                <p>Formule Premium</p>
              </li></a>
              <a href="/formule-avancee" class="text-white text24"><li class="border-b border-gray px-4 py-3">
                <p>Formule Avancée</p>
              </li></a>
              <a href="/formule-basique" class="text-white text24"><li class="border-b border-gray px-4 py-3">
                <p>Formule Basique</p>
              </li></a>
              <a href="/formules-autres" class="text-white text24"><li class="px-4 py-3">
                <p>Autre formules</p>
              </li></a>
            </ul>
          </li>
          <li class="border-b border-gray px-4 py-3">
            <a href="/contact" class="text48 text-white">Contact</a>
          </li>
        </ul>
      </div>
    </nav>
    </header>
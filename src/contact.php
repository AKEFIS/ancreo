<?php include 'components/header.php'; ?>
<title>Contact</title>
<?php include 'components/navbar.php'; ?>

  <main class="p-4 my-4">
    <hgroup class="text-center mb-24">
      <h1 class="title32 text-accentuationSombre">Contactez-nous !</h1>
      <h2 class="title32">Nous sommes là pour vous aider</h2>
    </hgroup>
    <form
      class="flex flex-col gap-6 text24 sm:flex-row sm:flex-wrap sm:gap-0 sm:justify-between lg:max-w-5xl lg:mx-auto">
      <div class="flex flex-col sm:w-[48%] sm:mb-8">
        <label for="nom">Nom et prénom :</label>
        <input
          class="bg-white text-black rounded-2xl p-4"
          type="text"
          id="nom"
          name="nom"
          placeholder="Ex: John Smith" />
      </div>

      <div class="flex flex-col sm:w-[48%] sm:mb-8">
        <label for="email">Email :</label>
        <input
          class="bg-white text-black rounded-2xl p-4"
          type="email"
          id="email"
          name="email"
          placeholder="Ex: example@gmail.com" />
      </div>

      <div class="flex flex-col sm:w-[48%] sm:mb-8">
        <label for="telephone">Numéro de téléphone :</label>
        <input
          class="bg-white text-black rounded-2xl p-4"
          type="tel"
          id="telephone"
          name="telephone"
          placeholder="Ex: 07 37 94 27 65" />
      </div>

      <div class="flex flex-col sm:w-[48%] sm:mb-8">
        <label for="objet">Objet :</label>
        <input
          class="bg-white text-black rounded-2xl p-4"
          type="text"
          id="objet"
          name="objet"
          placeholder="Ex: Demande de stage" />
      </div>

      <div class="flex flex-col sm:basis-full sm:mb-8">
        <label for="message">Message :</label>
        <textarea
          class="bg-white text-black rounded-2xl p-4 min-h-40"
          id="message"
          name="message"
          placeholder="Dites nous comment nous pouvons vous aider"></textarea>
      </div>

      <button
        class="bg-white cursor-pointer text-black rounded-3xl px-8 py-4 self-center"
        type="submit">
        Envoyer le message
      </button>
    </form>
  </main>
  <?php include('components/footer.php') ?>


<!DOCTYPE html>
<html lang="en">



<?php require_once '../components/Header.php'  ?>
<body>





    <main>

    <!-- 1ere section -->

    <section class="bg-imageun w-full h-[200px] bg-cover bg-center relative flex flex-col justify-center items-start pl-8 pr-8 sm:h-[300px] lg:h-[400px] xl:h-[690px]">
  <h1 class="text-black text-2xl font-principale font-semibold text-left xl:text-6xl">Bienvenue sur BookMarket</h1>
  <p class="font-principale text-white text-lg text-left mt-2 xl:text-4xl">BookMarket - Plongez dans chaque page</p>
</section>
<!-- Fin de la première section -->

<!-- Deuxième section -->
<section class="bg-[#FDEDD5] flex flex-col gap-8 items-center p-4 lg:items-center">
  <h2 class="font-principale font-semibold text-2xl lg:text-center">Recommandez pour vous</h2>

  <!-- Container des articles -->
  <div class="flex flex-col gap-8 items-center lg:flex-row lg:justify-center lg:gap-12 lg:w-full">
    <!-- Article 1 -->
    <article class="flex gap-6 justify-center items-center bg-white rounded-lg p-4 shadow-md lg:flex-col lg:gap-4 lg:items-center lg:w-[300px]">
      <img src="../assets/img/livre.jpg" alt="Livre" class="w-[150px] h-auto rounded-lg shadow-lg">
      <div class="flex flex-col items-start lg:items-center lg:text-center">
        <h3 class="font-principale text-[18px] font-semibold">Les Couloirs du Destin</h3>
        <p class="font-principale text-[15px] text-gray-600">AUTEUR: Arthur Belmont</p>
        <a href="./livre.php" class="bg-[#F5702B] w-[120px] text-white text-sm h-8 flex justify-center items-center rounded-lg hover:bg-[#e25e00] transition duration-300 mt-2">
          En savoir plus
        </a>
      </div>
    </article>

    <!-- Article 2 -->
    <article class="flex gap-6 justify-center items-center bg-white rounded-lg p-4 shadow-md lg:flex-col lg:gap-4 lg:items-center lg:w-[300px]">
      <img src="../assets/img/livre.jpg" alt="Livre" class="w-[150px] h-auto rounded-lg shadow-lg">
      <div class="flex flex-col items-start lg:items-center lg:text-center">
        <h3 class="font-principale text-[18px] font-semibold">Les Couloirs du Destin</h3>
        <p class="font-principale text-[15px] text-gray-600">AUTEUR: Arthur Belmont</p>
        <a href="#" class="bg-[#F5702B] w-[120px] text-white text-sm h-8 flex justify-center items-center rounded-lg hover:bg-[#e25e00] transition duration-300 mt-2">
          En savoir plus
        </a>
      </div>
    </article>

    <!-- Article 3 -->
    <article class="flex gap-6 justify-center items-center bg-white rounded-lg p-4 shadow-md lg:flex-col lg:gap-4 lg:items-center lg:w-[300px]">
      <img src="../assets/img/livre.jpg" alt="Livre" class="w-[150px] h-auto rounded-lg shadow-lg">
      <div class="flex flex-col items-start lg:items-center lg:text-center">
        <h3 class="font-principale text-[18px] font-semibold">Les Couloirs du Destin</h3>
        <p class="font-principale text-[15px] text-gray-600">AUTEUR: Arthur Belmont</p>
        <a href="#" class="bg-[#F5702B] w-[120px] text-white text-sm h-8 flex justify-center items-center rounded-lg hover:bg-[#e25e00] transition duration-300 mt-2">
          En savoir plus
        </a>
      </div>
    </article>
  </div>
</section>



<!-- fin de code -->

    </main>


 
    <?php require_once '../components/Footer.php'   ?>





</body>

</html>
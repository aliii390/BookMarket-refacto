<?php
require_once '../utils/autoloader.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <?php require_once '../components/Header.php'; ?>
</head>
<body class="bg-[#FDEDD5] flex flex-col min-h-screen">

<main class="p-3 lg:mt-36">
  <section class="flex flex-col justify-center items-center lg:flex-row lg:gap-10 lg:items-start">
  
    <img src="../assets/img/livre.jpg" alt="Livre" class="w-32 sm:w-40 md:w-48 lg:w-64 lg:mr-10">
    
  
    <article class="flex flex-col items-center lg:items-start gap-6 lg:w-1/2">
      <h1 class="font-principale text-xl md:text-2xl lg:text-3xl text-center lg:text-left">
        Les Couloirs du Destin
      </h1>
      <h3 class="font-principale text-xl md:text-2xl lg:text-3xl text-[#F5702B]">
        $25.99
      </h3>
      <p class="w-56 sm:w-64 md:w-80 lg:w-full font-principale text-justify">
        <span class="font-bold text-black">Résumé: </span>
        Camille découvre un passage secret qui lui permet de voir les vies qu'elle aurait pu vivre en fonction de ses choix. 
        À chaque couloir franchi, elle explore des versions alternatives de son existence, mais chaque choix la rapproche d'un destin 
        qu'elle ne pourra plus changer. Elle doit alors choisir son dernier couloir, celui qui déterminera définitivement sa destinée.
      </p>
      <div>
        <a href="./inscription.php" class="w-[150px] h-8 bg-[#F5702B] text-white font-principale flex items-center justify-center hover:bg-[#d45920] transition rounded">
          Ajouter au panier
        </a>
      </div>
    </article>
  </section>
</main>

<footer class="bg-[#2A3D37] flex  items-center lg:flex-row justify-between p-4 mt-auto">

  <img src="../assets/img/footer.png" alt="Logo" class="w-20  mb-2 lg:mb-0">

  <p class="text-white text-center lg:text-right lg:w-[50%]">
    © 2025 BookMarket, <span class="text-cyan-600">coded by</span> Ali
  </p>
</footer>

</body>
</html>

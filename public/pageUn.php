

<?php 


require_once '../utils/autoloader.php';
session_start();
$postLivreRepo = new PostLivreRepository();
$livres = $postLivreRepo->getAllLivres();
?>

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
    <?php foreach($livres as $livre): ?>
    <article class="flex gap-6 justify-center items-center bg-white rounded-lg p-4 shadow-md lg:flex-col lg:gap-4 lg:items-center lg:w-[300px]">
      
    <img src="<?php echo $livre['img_path']; ?>" alt="Livre" class="w-[150px] h-auto rounded-lg shadow-lg">
      <div class="flex flex-col items-start lg:items-center lg:text-center">
        <h3 class="font-principale text-[18px] font-semibold"><?php echo $livre['titre'] ?></h3>
        <p class="font-principale text-[15px] text-gray-600">AUTEUR: <?php echo $livre['auteur']?></p>
        <a href="./livre.php?id=<?php echo $livre['id']?>" class="bg-[#F5702B] w-[120px] text-white text-sm h-8 flex justify-center items-center rounded-lg hover:bg-[#e25e00] transition duration-300 mt-2">
          En savoir plus
        </a>
      </div>
    </article>
    <?php endforeach; ?>

   
  </div>
</section>



<!-- fin de code -->

    </main>


 
    <?php require_once '../components/Footer.php'   ?>





</body>

</html>
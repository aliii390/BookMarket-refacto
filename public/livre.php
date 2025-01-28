<?php
require_once '../utils/autoloader.php';
session_start();



$livreId = $_GET['id'];
$postLivreRepo = new PostLivreRepository();
$livre = $postLivreRepo->findById($livreId);


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <?php require_once '../components/Header.php'; ?>
</head>
<body class="bg-[#FDEDD5] flex flex-col min-h-screen">

<main class="p-3 lg:mt-36">
  <section class="flex flex-col justify-center items-center lg:flex-row lg:gap-10 lg:items-start">
    <!-- Image à gauche -->
    <img src="<?php echo $livre['img_path']; ?>" alt="Livre" class="w-32 sm:w-40 md:w-48 lg:w-64 lg:mr-10">
    
    <!-- Texte et bouton à droite -->
    <article class="flex flex-col items-center lg:items-start gap-6 lg:w-1/2">
      <h1 class="font-principale text-xl md:text-2xl lg:text-3xl text-center lg:text-left">
        <?php echo $livre['titre']; ?>
      </h1>
      <h3 class="font-principale text-xl md:text-2xl lg:text-3xl text-[#F5702B]">
        € <?php echo $livre['prix']; ?>
      </h3>
      <p class="w-56 sm:w-64 md:w-80 lg:w-full font-principale text-justify">
        <span class="font-bold text-black">Résumé: </span>
        <?php echo $livre['description']; ?>
      </p>
      <div>
        <a href="./inscription.php" class="w-[150px] h-8 bg-[#F5702B] text-white font-principale flex items-center justify-center hover:bg-[#d45920] transition rounded">
          Ajouter au panier
        </a>
      </div>
    </article>
  </section>
</main>

<footer class="bg-[#2A3D37] flex items-center lg:flex-row justify-between p-4 mt-auto">
  <!-- Votre contenu de pied de page -->
</footer>
</body>
</html>
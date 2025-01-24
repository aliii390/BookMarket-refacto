<?php 

// // require_once '../utils/autoloader.php';
// session_start();
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookMarket</title>
   
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script defer src="../assets/js/burger.js"></script>
    <link rel="stylesheet" href="../assets/css/output.css">
</head>




<header class="bg-[#FDEDD5]  flex items-center p-3 justify-between gap-4 sm:justify-between sm:px-6 xl:justify-around ">
  <!-- Logo -->
  <img src="../assets/img/LogoItem.png" alt="Logo" class="w-32">

  <!-- Input de recherche -->
  
   <input type="text" name="recherche" placeholder="Recherchez" 
         class="bg-[#F5702B] px-5 placeholder-white w-[180px] text-white text-sm 
                rounded-3xl h-7 placeholder:text-sm sm:w-[250px] sm:h-8 md:w-[150px] lg:w-[250px] xl:w-[350px]">

 
                <div class="md:flex md:items-center">
  <ul class="hidden md:flex md:gap-8 md:items-center">
    <!-- Liens de navigation -->
    <li>
      <a href="#" class="font-principale text-gray-700 hover:text-[#F5702B] transition">Livre</a>
    </li>
    <li>
      <a href="#" class="font-principale text-gray-700 hover:text-[#F5702B] transition">Support</a>
    </li>
    <li>
      <a href="#" class="font-principale text-gray-700 hover:text-[#F5702B] transition">Contact</a>
    </li>
  </ul>

  <!-- Bouton Connectez-vous -->
  <div class="hidden md:flex md:ml-6">
    <a href="../public/profilPro.php" class="w-[130px] h-8 bg-[#F5702B] text-white font-principale flex items-center justify-center  hover:bg-[#d45920] transition">
    <i class="fa-solid fa-user mr-2" style="color: #ffffff;"></i>
    <?php  echo null !== $_SESSION['user']->getPrenom() ? $_SESSION['user']->getPrenom() : 'sa marche ap';   ?>
    </a>
  </div>

  <!--  panier -->
  <div class="hidden md:flex md:ml-4">
    
    <a href="#">
      <i class="fa-solid fa-cart-shopping text-black text-lg hover:text-[#F5702B] transition"></i>
    </a>
  </div>
</div>

 

  <!--  menu burger -->
  <a id="openBtn" href="#" class="text-xl text-black md:hidden">
    <i class="fa-solid fa-bars"></i>
  </a>
</header>

<!-- Partie menu burger -->
<div id="mySidenav" 
     class="fixed h-full w-[250px] bg-[#F5702B] z-10 -left-[250px] top-0 
            transition-all duration-500 shadow-lg">
  <!-- Bouton de fermeture -->
  <a id="closeBtn" href="#" 
     class="absolute top-4 right-4 text-xl font-bold cursor-pointer text-gray-600 
            hover:text-gray-800">
    ×
  </a>

  <!-- Logo dans le menu -->
  <div class="text-center py-6 border-b border-gray-300">
    <!-- <img src="../assets/img/logo.png" alt="Logo" class="w-36"> -->
     <img src="../assets/img/logo.png" alt="" class="w-36">
  </div>

  <!-- Liens du menu -->
  <ul class="list-none p-0 m-0 mt-4 space-y-2">
    <li>
      <a href="#" 
         class="flex items-center p-4 text-lg text-white hover:text-gray-800 
                hover:bg-gray-100 transition rounded-lg font-principale sm:font-principale">
        Livres
      </a>
    </li>
    <li>
      <a href="#" 
         class="flex items-center p-4 text-lg text-white hover:text-gray-800 
                hover:bg-gray-100 transition rounded-lg font-principale sm:font-principale">
        Support
      </a>
    </li>
    <li>
      <a href="#" 
         class="flex items-center p-4 text-lg text-white hover:text-gray-800 
                hover:bg-gray-100 transition rounded-lg font-principale sm:font-principale">
        Contact
      </a>
    </li>
    <li class="flex justify-center">
      <a href="../public/profilPro.php" 
         class="flex justify-center items-center h-10 w-40 px-3 py-2 text-sm 
                text-white bg-[#2A3D37] hover:bg-[#109133] hover:text-white 
                transition rounded-lg">
                <i class="fa-solid fa-user mr-2" style="color: #ffffff;"></i>
        <span class="font-principale sm:font-principale"> <?php  echo null !== $_SESSION['user']->getPrenom() ? $_SESSION['user']->getPrenom() : 'sa marche ap'; ?></span>
      </a>
    </li>
  </ul>
</div>


<!-- fin du header -->
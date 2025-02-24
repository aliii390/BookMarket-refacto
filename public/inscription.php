<?php


session_start();


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../assets/css/output.css">

</head>

<body class="bg-[#FDEDD5] min-h-screen flex items-center justify-center">
    <main class="flex flex-col items-center w-full max-w-md px-6 sm:px-8 lg:px-12">
        <form action="../process/inscription-process.php" method="post" class="w-full bg-white p-6 rounded-lg shadow-lg">
            <section class="flex flex-col items-center gap-6">
                <!-- Logo -->
                <img src="../assets/img/LogoItem.png" alt="Logo" class="w-32 sm:w-40">


                <input
                    type="text"
                    placeholder="Nom"
                    name="nom"
                    class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-400 placeholder:font-principale">


                <input
                    type="text"
                    name="prenom"
                    placeholder="Prénom"
                    class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-400 placeholder:font-principale">


                   
                <input
                    type="email"
                    name="email"
                    placeholder="Adresse Mail"
                    class="w-full p-3 border   <?php echo isset($_GET['error'])  && $_GET['error'] === "emailexiste" ?  "border-red-600" :  "border-gray-300 "?>  rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-400 placeholder:font-principale">

                <input
                    type="text"
                    name="telephone"
                    placeholder="Numéro de téléphone"
                    class="w-full p-3 border  border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-400 placeholder:font-principale">


                <input
                    type="password"
                    name="mdp"
                    placeholder="Mot de passe"
                    class="w-full p-3 border  border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-400 placeholder:font-principale">

                <select
                    name="role"
                    id="role"
                    class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-400 font-principale">
                    <option value="">Choisissez votre rôle</option>
                    <option  value="Client">Client</option>
                    <option value="Vendeur">Vendeur</option>
                </select>

                <!-- Conteneur pour les champs dynamiques -->
                <div id="dynamicFields" class="mt-4"></div>



                <p class="w-full  ">Si vous avez déja un compte <a href="./connexion.php" class="text-sky-500  ">Connectez vous</a></p>
                <!-- Bouton de connexion -->
                <button
                    type="submit"
                    class="w-full p-3 bg-orange-400  text-white font-semibold rounded-lg hover:bg-orange-500 transition duration-300 placeholder:font-principale">
                    S'inscrire
                </button>
            </section>
        </form>
    </main>
    <script defer src="../assets/js/adress.js"></script>
</body>

</html>
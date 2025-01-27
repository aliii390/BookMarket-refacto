

<?php

require_once '../utils/autoloader.php';
// session_start();
?>




  <!-- Section pour les vendeurs -->
  <?php if ($_SESSION['user']->getRole() === "Vendeur"): ?>
    <section class="mt-10 bg-gray-100 p-6 rounded-lg shadow-md">
      <h2 class="text-lg font-semibold text-gray-800 mb-4 font-principale">Publier un livre</h2>
      <form action="../process/postLivre-process.php" method="post" enctype="multipart/form-data" class="space-y-6">
        <div>
          <label for="titre" class="block text-gray-700 mb-1 font-principale">Titre du livre</label>
          <input type="text" id="titre" name="titre" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-400">
        </div>
        <div>
          <label for="description" class="block text-gray-700 mb-1 font-principale">Description</label>
          <textarea id="description" name="description" rows="4" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-400"></textarea>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
          <div>
            <label for="prix" class="block text-gray-700 mb-1 font-principale">Prix (€)</label>
            <input type="number" step="0.01" id="prix" name="prix" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-400">
          </div>
          <div>
            <label for="etat-livre" class="block text-gray-700 mb-1 font-principale">Etat du livre</label>
            <input type="text" step="0.01" id="etat-livre" name="etat-livre" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-400">
          </div>
          <div>
            <label for="image" class="block text-gray-700 mb-1 font-principale">Image de couverture</label>
            <input type="file" id="img_path" name="img_path" accept="image/*" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-400">
          </div>
        </div>
        <button type="submit" class="bg-[#F5702B] text-white px-6 py-2 rounded-lg hover:bg-[#d45920] transition font-principale">
          Publier
        </button>
      </form>
    </section>
  <?php endif; ?>
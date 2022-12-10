<?php
if (!isset($recipes)) {
    echo '$recipes variable is not defined. Please check the code.';
}
?>
<div class="table-container">
  <table class="min-w-full divide-y divide-gray-300">
    <thead class="bg-gray-50">
      <tr>
        <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">ID</th>
        <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">Title
        </th>
        <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">Image
        </th>
        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Description</th>
        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Cook Time</th>
        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Tools</th>
        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Ingredients</th>
        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Directions</th>
        <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
          <span class="sr-only">Edit</span>
        </th>
      </tr>
    </thead>
    <tbody class="divide-y divide-gray-200 bg-white">
      <?php
      // Cant combine functions with string so we have to assign the function to a variable here.
      $site_url = site_url();
      while ($recipe = mysqli_fetch_array($recipes)) {
          // var_dump($recipe);
          $cookTimeLabel = $recipe['cook_time'] . " min";
          echo "
            <tr>
              <td class='whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6'>{$recipe['id']}</td>
              <td class='whitespace-nowrap px-3 py-4 text-sm text-gray-500'><a href='{$site_url}/recipe/index.php?id={$recipe['id']}' target='_blank'>{$recipe['recipe_title']}</a></td>
              <td class='whitespace-nowrap px-3 py-4 text-sm text-gray-500'>{$recipe['img_path']}</td>
              <td class='whitespace-nowrap px-3 py-4 text-sm text-gray-500'>{$recipe['description']}</td>
              <td class='whitespace-nowrap px-3 py-4 text-sm text-gray-500'>{$cookTimeLabel}</td>
              <td class='whitespace-nowrap px-3 py-4 text-sm text-gray-500'>{$recipe['tools']}</td>
              <td class='whitespace-nowrap px-3 py-4 text-sm text-gray-500'>{$recipe['ingredients']}</td>
              <td class='whitespace-nowrap px-3 py-4 text-sm text-gray-500'>{$recipe['directions']}</td>
              <td class='relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6 admin-buttons'>
                <a href='{$site_url}/admin/recipes/edit.php?id={$recipe['id']}' class='text-indigo-600 hover:text-indigo-900'>Edit</a>
                <a href='{$site_url}/admin/recipes/delete.php?id={$recipe['id']}' class='text-indigo-600 hover:text-indigo-900'>Delete</a>
              </td>
            </tr>";
      }
  ?>
    </tbody>
  </table>
</div>
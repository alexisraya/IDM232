<?php
include_once __DIR__ . '/../../app.php';
$page_title = 'Recipe';
include_once __DIR__ . '/../../_components/header.php';
include_once __DIR__ . '/../../_components/navbar.php';
$recipes = get_recipes();
?>

<div class="mx-auto my-16 max-w-7xl px-4">
  <div class="px-4 sm:px-6 lg:px-8">
    <div class="sm:flex sm:items-center">
      <div class="sm:flex-auto">
        <h1 class="text-xl font-semibold text-gray-900">Recipes</h1>
        <p class="mt-2 text-sm text-gray-700">A list of all the recipes in your account including their title, cook time, ingredients
          and directions.</p>
        <?php
        // If error query param exist, show error message
          if (isset($_GET['error'])) {
              echo '<p class="text-red-500">' . $_GET['error'] . '</p>';
          }
        ?>
      
      <form action="<?php echo site_url(); ?>/search" method="GET">
          <input class=" border-black border-2" type="text" name="search" id="search" placeholder="Search">
          <button class="btn btn-outline-success search-button" type="submit">Search</button>
      </form>

      </div>
      <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
        <button type="button"
          class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto">
          <a href="<?php echo site_url() . '/admin/recipes/create.php' ?>">
            Add Recipe</a></button>
      </div>
    </div>
    <div class="mt-8 flex flex-col">
      <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
          <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
            <?php include __DIR__ . '/../../_components/table_recipes.php'; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
        </div>



<?php include_once __DIR__ . '/../../_components/footer.php';
<?php
    include_once __DIR__ . '/../app.php';
    $page_title = 'Services';
    include_once __DIR__ . '/../_components/header.php';
    include __DIR__ . '/../_components/navbar.php';
    $recipes = get_recipes();

    // Check if search exist in query
    if (isset($_GET['search'])) {
        $search = $_GET['search'];
    } else {
        $search = '';
    }

    $query = 'SELECT *';
    $query .= ' FROM recipes';
    $query .= " WHERE recipe_title LIKE '%{$search}%'";
    $query .= " OR cook_time LIKE '%{$search}%'";
    $query .= " OR ingredients LIKE '%{$search}%'";
    $query .= " OR directions LIKE '%{$search}%'";

    $results = mysqli_query($db_connection, $query);
    if ($results->num_rows > 0) {
        $recipes_results = true;
    } else {
        $recipes_results = false;
    }

?>

<div class="mx-auto my-16 max-w-7xl px-4">
  <div class="px-4 sm:px-6 lg:px-8">
    <div class="sm:flex sm:items-center">
      <div class="sm:flex-auto">
        <h1 class="text-xl font-semibold text-gray-900">Search Results</h1>
        <form action="<?php echo site_url(); ?>/search" method="GET">
          <input class=" border-black border-2" type="text" name="search" id="search" placeholder="Search"
            value="<?php echo $search; ?>">
          <button class = "btn btn-outline-success search-button" type="submit">Search</button>
        </form>
        <h2>You searched for "<?php echo $search; ?>"</h2>
        <?php
            // If no results, echo no results
            if (!$recipes_results) {
                echo '<p>No results found</p>';
            }
        ?>
        <?php
// If error query param exist, show error message
            if (isset($_GET['error'])) {
                echo '<p class="text-red-500">' . $_GET['error'] . '</p>';
            }
        ?>
        </div>
        <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none search-area">
            <button type="button"
            class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto">
            <a href="<?php echo site_url() . '/admin/recipes/create.php' ?>">
                Add Recipes</a></button>
        </div>
        </div>
        <div class = "recipes-container">
        <?php
            $site_url = site_url();
            if ($recipes_results) {
                while ($recipes_results = mysqli_fetch_assoc($results)) {
                    echo "
                        <a class='recipes_link' href='{$site_url}/recipe/index.php?id={$recipes_results['id']}'>
                            <div class ='recipe-card'>
                            <div class = 'recipe-card-img-container'>
                                <img class = 'recipe-card-img' src='{$site_url}/{$recipes_results['img_path']}'>
                            </div>
                            <h2>{$recipes_results['recipe_title']}</h2>
                            <h3>{$recipes_results['cook_time']} min</h3>
                            </div>
                        </a>
                    ";
                }
            }
        ?>
        </div>

  </div>
</div>



<?php include_once __DIR__ . '/../_components/footer.php';
?>
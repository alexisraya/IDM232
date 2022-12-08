<?php
  if (!isset($recipes)) {
      echo '$recipes variable is not defined. Please check the code.';
  }
?>

<div class = "recipes-container">
  <?php
    // Cant combine functions with string so we have to assign the function to a variable here.
    $site_url = site_url();
    while ($recipe = mysqli_fetch_array($recipes)) {
        // var_dump($recipe);
        $cookTimeLabel = $recipe['cook_time'] . " min";
        echo "
          <a class='recipes_link' href='{$site_url}/recipe/index.php?id={$recipe['id']}'>
            <div class ='recipe-card'>
              <div class = 'recipe-card-img-container'>
                <img class = 'recipe-card-img' src='{$site_url}/{$recipe['img_path']}'>
              </div>
              <h2>{$recipe['recipe_title']}</h2>
              <h3>{$cookTimeLabel}</h3>
            </div>
          </a>";
    }
  ?>
</div>
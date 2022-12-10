<?php
include_once __DIR__ . '/../app.php';

// get recipes data from database
$query = "SELECT * FROM recipes WHERE id = {sanitize_value($_GET['id'])}";
$result = mysqli_query($db_connection, $query);
if ($result->num_rows > 0) {
    // Get row from results and assign to $recipe variable;
    $recipe = mysqli_fetch_assoc($result);
} else {
    $error_message = 'Recipe does not exist';
}

$page_title = $recipe['recipe_title'];

include_once __DIR__ . '/../_components/header.php';
include_once __DIR__ . '/../_components/navbar.php';
?>
<?php
    $site_url = site_url();
    echo "
        <div class = 'main'>
            <div class = 'recipe_holder'>
                <div class = 'recipe_intro'>
                    <h1 class = 'recipe_title'>{$recipe['recipe_title']}</h1>
                    <h3 class = 'cook_text'>{$recipe['cook_time']} minute</h3>
                    <h2 class = 'description_title'>Description</h2>
                    <p class = 'description_text'>{$recipe['description']}</p>
                </div>
                <div class = 'recipe_holder__image'>
                    <img class = 'recipe_holder__image--image' src='{$site_url}/{$recipe['img_path']}' alt='Recipe Image'/>
                </div>
            </div>
            <div class = 'recipe_body'>
                <h2 class = 'description_title'>Tools</h2>
                <p class = 'tools_text'>{$recipe['tools']}</p>

                <h2 class = 'ingredients_title'>Ingredients</h2>
                <p class = 'ingredients__text'>{$recipe['ingredients']}</p>

                <h2 class = 'ingredients_title'>Directions</h2>
                <p class = 'directionss__text'>{$recipe['directions']}</p>
            </div>
        </div>
    ";
?>

<!-- <img class = 'recipe_holder__image--image' src="../dist/images/recipe-image.jpg" alt="Recipe Image"> -->

<?php include_once __DIR__ . '/../_components/footer.php';
?>
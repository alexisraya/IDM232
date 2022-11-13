<?php
include __DIR__ . '/../app.php';

if (!$_POST) {
    die('Unauthorized');
}

// Store $_POST data to variables for readability
$recipe_title_value = $_POST['recipe_title'];
$cook_time_value = $_POST['cook_time'];
$ingredients_value = $_POST['ingredients'];
$directions_value = $_POST['directions'];

$result = add_recipe(
    $recipe_title_value,
    $cook_time_value,
    $ingredients_value,
    $directions_value
);

// Check there are no errors with our SQL statement
if ($result) {
    redirect_to('/admin/recipes');
} else {
    $error_message = 'Sorry there was an error creating the recipe';
    redirect_to('/admin/recipes?error=' . $error_message);
}
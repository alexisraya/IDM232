<?php
include __DIR__ . '/../app.php';

if (!$_POST) {
    die('Unauthorized');
}

// Store $_POST data to variables for readability
$id_value = sanitize_value($_POST['id']);
$recipe_title_value = sanitize_value($_POST['recipe_title']);
$img_path_value = sanitize_value($_POST['img_path']);
$description_value = sanitize_value($_POST['description']);
$cook_time_value = sanitize_value($_POST['cook_time']);
$tools_value = sanitize_value($_POST['tools']);
$ingredients_value = sanitize_value($_POST['ingredients']);
$directions_value = sanitize_value($_POST['directions']);

// Create a SQL statement to insert the data into the database
$query = "UPDATE recipes SET recipe_title = '{$recipe_title_value}', img_path = '{$img_path_value}', description = '{$description_value}', cook_time = '{$cook_time_value}', tools = '{$tools_value}', ingredients = '{$ingredients_value}', directions = '{$directions_value}' WHERE id = '{$id_value}'";

// Run the SQL statement
$result = mysqli_query($db_connection, $query);

// Check there are no errors with our SQL statement
if ($result) {
    redirect_to('/admin/recipes');
} else {
    $error_message = 'Recipe was not updated';
    redirect_to('/admin/recipes?error=' . $error_message);
}
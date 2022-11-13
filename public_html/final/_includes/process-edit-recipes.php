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
$id_value = $_POST['id'];

// Create a SQL statement to insert the data into the database
$query = "UPDATE recipes SET recipe_title = '{$recipe_title_value}', cook_time = '{$cook_time_value}', ingredients = '{$ingredients_value}', directions = '{$directions_value}' WHERE id = {$id_value}";

// Run the SQL statement
$result = mysqli_query($db_connection, $query);

// Check there are no errors with our SQL statement
if ($result) {
    redirect_to('/admin/recipes');
} else {
    $error_message = 'Recipe was not updated';
    redirect_to('/admin/recipes?error=' . $error_message);
}
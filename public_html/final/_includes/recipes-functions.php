<?php

/**
 * get all recipes from the database
 * @return object - mysqli_result
 */
function get_recipes()
{
    global $db_connection;
    $query = 'SELECT * FROM recipes';
    $result = mysqli_query($db_connection, $query);
    return $result;
}

/**
 * Insert a recipe into the database
 * @param  string $recipe_title - title of the recipe
 * @param  string $cook_time - cook time of the recipe
 * @param  string $ingredients - ingredients for the recipe
 * @param  string $directions - direcetions for the recipe
 * @return object - mysqli_result
 */
function add_recipe($recipe_title, $cook_time, $ingredients, $directions)
{
    global $db_connection;
    $query = 'INSERT INTO recipes';
    $query .= ' (recipe_title, cook_time, ingredients, directions)';
    $query .= " VALUES ('$recipe_title', '$cook_time', '$ingredients', '$directions')";
    
    // var_dump($query);
    // die();

    $result = mysqli_query($db_connection, $query);
    return $result;
}
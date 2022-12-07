<?php
include_once __DIR__ . '/../app.php';
$page_title = 'Home';
include_once __DIR__ . '/../_components/header.php';
include_once __DIR__ . '/../_components/navbar.php';
$recipes = get_recipes();
?>

<div class = "main">
    <h1>All Recipes<h1>
    <?php include_once __DIR__ . '/../_components/recipe-cards.php';?>
</div>

<?php include_once __DIR__ . '/../_components/footer.php';
?>
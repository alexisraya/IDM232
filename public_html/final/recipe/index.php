<?php
include_once __DIR__ . '/../app.php';
$page_title = 'Home';
include_once __DIR__ . '/../_components/header.php';
include_once __DIR__ . '/../_components/navbar.php';
?>

<div class = "main">
    <?php include_once __DIR__ . '/../_components/recipe.php';?>
    <?php include_once __DIR__ . '/../_components/page-break.php';?>
    <?php include_once __DIR__ . '/../_components/directions.php';?>
</div>

<?php include_once __DIR__ . '/../_components/footer.php';
?>
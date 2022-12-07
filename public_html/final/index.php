<?php
include_once __DIR__ . '/app.php';
$page_title = 'Home';
include_once __DIR__ . '/_components/header.php';
include_once __DIR__ . '/_components/navbar.php';
?>

<div class = "main">
    <h1>Welcome to La Cocina!</h1>
    <div class = "welcome_container">
        <div class = "welcome_text-container">
            <h2>Meet Nana Molina</h2>
            <p class = "welcome_text">
                This is Nana Molina. She is the matriarch and sweetheart of the Molina family.
            </p>
            <p class = "welcome_text">
                Back in the early 70's, Nana Molina moved to the US from El Salvador. She raised 3 daughters and 3 grandchildren. In each of their ubringing, she taught her family the power of food and how food an be healing and a joy. This is what always brought her family together.
            </p>
            <p class = "welcome_text">
                She now wants to share her food with everyone else! This is the first time her dishes have ever been written down and translated from Spanish. She and her family hopes you can enjoy her food and recipes!
            </p>
        </div>
        <div class = "welcome_image-contatiner">
            <img class = "welcome_image" src="dist/images/nana_photo.jpg" alt="Nana Molina">
        </div>
    </div>
</div>

<?php include_once __DIR__ . '/_components/footer.php';
?>
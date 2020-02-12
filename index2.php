<?php
require '../bootloader.php';

use App\App;

$createForm = new \App\Participants\Views\CreateForm();
$updateForm = new \App\Participants\Views\UpdateForm();
$navigation = new \App\Views\Navigation();
$footer = new \App\Views\Footer();

if (!App::$session->userLoggedIn()) {
    header('Location: /login.php');
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="media/css/normalize.css">
    <link rel="stylesheet" href="media/css/milligram.min.css">
    <link rel="stylesheet" href="media/css/style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
<header>
    <?php print $navigation->render(); ?>
</header>
<main>
    <section class="wrapper2">

    </section>
    <div class="container-mid">
        <div class="offers-container">
            <img class="img" src="babyseat.png" alt="baby seat">
            <div >
                <h3 class="description">Baby seats</h3>
                <p class="txt">We offer a taxi service with the child seat 24 hours. Homologated seats, comfortable and above all safe, making journeys are as pleasant as possible.</p>
            </div>
        </div>
        <div class="offers-container">
            <img class="img" src="airport.jpg" alt="airport pick up">
            <div >
                <h3 class="description">Airport pick up</h3>
                <p class="txt">Whether you’re travelling for business or leisure, you can count on us for a comfortable and safe ride to and from airport.</p>
            </div>
        </div>
        <div class="offers-container">
            <img class="img" src="vip.jpg" alt="vip cars">
            <div >
                <h3 class="description">VIP car service</h3>
                <p class="txt">Our luxury cars will transport you in comfort and style to meetings, parties and events as well as your airport transfers. Our drivers can recommend the best restaurants and tourist attractions to make your visit more enjoyable.</p>
            </div>
        </div>
    </div>


</main>

<!-- Footer -->
<footer>
    <?php print $footer->render(); ?>
</footer>

<script defer src="media/js/app.js"></script>
</body>
</html>

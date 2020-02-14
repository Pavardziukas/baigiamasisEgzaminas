<?php
require '../bootloader.php';

use App\App;

$createForm = new \App\Participants\Views\CreateForm();
$updateForm = new \App\Participants\Views\UpdateForm();
$navigation = new \App\Views\Navigation();
$footer = new \App\Views\Footer();

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
            <img class="img" src="media/img/babyseat.png" alt="baby seat">
            <div >
                <h3 class="description">Baby seats</h3>
                <p class="txt">We offer a taxi service with the child seat 24 hours. Homologated seats, comfortable and above all safe.</p>
            </div>
        </div>
        <div class="offers-container">
            <img class="img" src="media/img/airport.jpg" alt="airport pick up">
            <div >
                <h3 class="description">Airport pick up</h3>
                <p class="txt">Whether you’re travelling for business or leisure, you can count on us for a comfortable and safe ride to and from airport.</p>
            </div>
        </div>
        <div class="offers-container">
            <img class="img" src="media/img/vip.jpg" alt="vip cars">
            <div >
                <h3 class="description">VIP car service</h3>
                <p class="txt">Our luxury cars will transport you in comfort and style to meetings, parties and events as well as your airport transfers.</p>
            </div>
        </div>
    </div>


    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2304.2194261566747!2d25.33569661534373!3d54.723355078378496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dd96e7d814e149%3A0xdd7887e198efd4c7!2sSaul%C4%97tekio%20al.%2015%2C%20Vilnius%2010221!5e0!3m2!1sen!2slt!4v1581540742301!5m2!1sen!2slt" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
</main>

<!-- Footer -->
<footer>
    <?php print $footer->render(); ?>
</footer>

<script defer src="media/js/app.js"></script>
</body>
</html>

<?php

use App\App;

require '../bootloader.php';

$createForm = new \App\Reviews\Views\CreateForm();
$updateForm = new \App\Reviews\Views\UpdateForm();
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
    <section class="wrapper">
        <h1>Feedback:</h1>
        <div class="block">
            <div id="feedback-table">
                <table>
                    <thead>
                    <tr>
                        <th>Komentaras</th>
                        <th>Data</th>
                        <th>Vardas Pavarde</th>

                    </tr>
                    </thead>
                    <tbody>
                    <!-- Rows Are Dynamically Populated -->
                    </tbody>
                </table>
            </div>
        </div>

<!--        --><?php //if (!App::$session->userLoggedIn()); ?>
        <div class="block">
            <?php print $createForm->render(); ?>
        </div>
<!--        --><?php //endif: ?>
<!--        --><?php //else <p>“​Norite parašyti komentarą? Užsiregistruokite <a href</p> ?>
    </section>

    <!-- Update Modal -->
    <div id="update-modal" class="modal">
        <div class="wrapper">
            <span class="close">&times;</span>
            <?php print $updateForm->render(); ?>
        </div>
    </div>
</main>


<!-- Footer -->
<footer>
    <?php print $footer->render(); ?>
</footer>

<script defer src="media/js/app2.js"></script>
</body>
</html>

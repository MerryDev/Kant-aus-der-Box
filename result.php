<?php
include_once 'backend/classes/Evaluator.php';
include_once 'backend/includes/functions.php';
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap-grid.css">
    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap-utilities.css">
    <link rel="stylesheet" href="assets/css/custom/style.css">
    <link rel="stylesheet" href="assets/css/custom/progressbar.scss">

    <title>Kant aus der Box</title>
</head>
<body>
<div class="container">
    <div class="stage-spacer"></div>
    <h2 class="headline">Dein Ergebnis</h2>
    <div class="stage-spacer"></div>
    <div class="stage-spacer"></div>
    <div class="stage-spacer"></div>
    <div class="evaluation">

        <?php

        for ($i = 1; $i <= 4; $i++) {
            Evaluator::getInstance()->printActionbar($i);
        }

        ?>

    </div>
    <div class="content-justify-center btn-conatiner">
        <form method="post" action="index">
            <button type="submit" class="end-game btn">Spiel beenden</button>
        </form>
    </div>
</div>
</body>
</html>
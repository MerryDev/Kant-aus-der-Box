<?php
include_once '../backend/StageLoader.php';
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="../assets/css/custom/style.css">
    <link rel="stylesheet" href="../assets/css/custom/checkboxes.scss">

    <title>Kant aus der Box</title>
</head>
<body>
<div class="container">
    <?php
    $stageLoader = new StageLoader();

    $stageId = $stageLoader->getCurrentStage();

    if ($stageLoader->isIntro()) {
        $stageLoader->loadTextContent($stageId);
    } else {
        $stageLoader->loadStage($stageId);
    }
    ?>
</div>
</body>
</html>
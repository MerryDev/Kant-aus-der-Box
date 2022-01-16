<?php

use JetBrains\PhpStorm\NoReturn;

include_once '../includes/functions.php';
include_once '../classes/Evaluator.php';

if (isset($_POST['next-state-btn'])) {
    $nextStage = $_GET['next-stage'];
    $currentStage = $nextStage - 1;

    $eval = getCurrentEval();

    $eval = Evaluator::getInstance()->evaluate($currentStage, $_POST, $eval);

    nextStage($nextStage, $eval);

} else if (isset($_POST['show-result-btn'])) {
    $eval = getCurrentEval();
    $eval = Evaluator::getInstance()->evaluate(16, $_POST, $eval);

    header("Location: ../../result?eval=" . encode($eval));
    exit();
}

#[NoReturn] function error(int $currentStage, string $error, array $eval)
{
    header("Location: ../../stage/stage?id=" . $currentStage . "&showIntro=false&error=" . $error . "&eval=" . encode($eval));
    exit();
}

#[NoReturn] function nextStage(int $nextStage, array $eval): void
{
    if (($nextStage !== 12) && ($nextStage !== 15) && ($nextStage !== 16)) {
        header("Location: ../../stage/stage?id=" . $nextStage . "&showIntro=true&eval=" . encode($eval));
    } else {
        header("Location: ../../stage/stage?id=" . $nextStage . "&showIntro=false&eval=" . encode($eval));
    }
    exit();
}
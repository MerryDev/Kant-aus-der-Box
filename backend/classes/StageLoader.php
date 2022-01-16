<?php

use JetBrains\PhpStorm\ArrayShape;
use JetBrains\PhpStorm\Pure;

include_once 'TextLoader.php';

class StageLoader
{

    public function isIntro(): bool
    {
        if (!(isset($_GET['showIntro']))) return false;
        return ($_GET['showIntro'] === 'true');
    }

    public function getCurrentStage(): int
    {
        if (!(isset($_GET['id']))) return -1;
        return $_GET['id'];
    }

    #[Pure] public function getNextStage(): int
    {
        if (!(isset($_GET['id']))) return -1;
        return $this->getCurrentStage() + 1;
    }

    public function loadTextContent($stageId): void
    {
        echo('<p class="intro-text paragraph1">');

        $textLoader = new TextLoader();
        $text = $textLoader->getStageIntoText($stageId);

        echo($text);

        echo('</p><br><br><br><br><div class="content-justify-center btn-conatiner"><form action="stage?id=' . $stageId . '&showIntro=false&eval=' . $this->encode($this->getCurrentEval()) . '" method="post"><button class="current-stage btn" name="next-stage-btn">Weiter</button></form></div>');
    }

    public function loadStage(int $stageId): void
    {
        $nextStage = $this->getNextStage();

        $this->loadImage($stageId);

        echo('<div class="stage-spacer"></div>');

        echo('<form action="../backend/includes/evaluation.php?next-stage=' . $nextStage . '&eval=' . $this->encode($this->getCurrentEval()) . '" method="post"><div class="stage-overlay stage-' . $stageId . ' dynamic-line-break"><br>');


        $this->loadAnswers($this->getCurrentStage());

        if ($nextStage == 17) {
            echo('<div class="content-justify-center"><br><br><br><br><button class="show-result btn" name="show-result-btn">Ergebnis ansehen</button></div>');

        } else if ($nextStage == 12) {
            echo('<div class="content-justify-center"><br><br><br><br><button class="next-stage btn" name="next-state-btn">Weiter</button></div>');

        } else if ($nextStage == 15) {
            echo('<div class="content-justify-center"><br><br><br><br><button class="next-stage btn" name="next-state-btn">Weiter</button></div>');

        } else if ($nextStage == 16) {
            echo('<div class="content-justify-center"><br><br><br><br><button class="next-stage btn" name="next-state-btn">Weiter</button></div>');

        } else {
            echo('<div class="content-justify-center"><br><br><br><br><button class="next-stage btn" name="next-state-btn">Weiter</button></div>');

        }

        echo('</form></div>');
    }

    private function loadAnswers($stageId): void
    {
        $textLoader = new TextLoader();
        $answers = $textLoader->getAnswers($stageId);

        foreach ($answers as $answer) {
            echo($answer);
        }

    }

    private function loadImage($stageId): void
    {
        echo('<img src="../assets/img/stages/stage-' . $stageId . '.png" class="stage-image" alt="">');
    }

    private function encode(array $eval): string
    {
        return base64_encode(json_encode($eval));
    }

    #[ArrayShape(['Consequentialism' => "int", 'Deontology' => "int", 'Determinism' => "int", 'Indeterminism' => "int", 'Stoicism' => "int", 'Hedonism' => "int", 'Rationalism' => "int", 'Empiricism' => "int"])] private function getCurrentEval(): array
    {
        if (!(isset($_GET['eval']))) {
            return array(
                'Consequentialism' => 0,
                'Deontology' => 0,
                'Determinism' => 0,
                'Indeterminism' => 0,
                'Stoicism' => 0,
                'Hedonism' => 0,
                'Rationalism' => 0,
                'Empiricism' => 0
            );
        } else {
            return json_decode(base64_decode($_GET['eval']), true);
        }
    }

}
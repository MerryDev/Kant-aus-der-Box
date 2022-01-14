<?php

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

    public function getNextStage(): int
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

        echo('</p><br><br><br><br><div class="content-justify-center btn-conatiner"><form action="stage?id=' . $stageId . '&showIntro=false" method="post"><button class="current-stage btn">Weiter</button></form></div>');
    }

    public function loadStage($stageId): void
    {
        $this->loadImage($stageId);
        echo('<div class="stage-spacer"></div>');
        echo('<div class="stage-overlay stage-' . $stageId . ' dynamic-line-break"><br>');

        $this->loadAnswers($stageId);   /* Load answers based on current stageId */

        echo('</div>');

        $nextStage = $this->getNextStage();

        if (($nextStage != 12) && ($nextStage != 15) && ($nextStage != 16) && ($nextStage != 17)) { /* Stages 12, 15 & 16 have no intro texts */
            echo('<div class="content-justify-center"><form action="stage?id=' . $nextStage . '&showIntro=true" method="post"><br><br><button class="next-stage btn">Weiter</button></form></div>');

        } else {
            if ($nextStage == 17) {
                echo('<div class="content-justify-center"><form action="../result" method="post"><br><br><button class="show-result btn">Ergebnis ansehen</button></form></div>');


            } else {
                echo('<div class="content-justify-center"><form action="stage?id=' . $nextStage . '&showIntro=false" method="post"><br><br><button class="next-stage btn">Weiter</button></form></div>');

            }
        }
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

}
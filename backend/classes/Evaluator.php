<?php

final class Evaluator
{

    private static ?Evaluator $instance = null;

    public static function getInstance(): Evaluator
    {
        if (Evaluator::$instance === null) {
            Evaluator::$instance = new Evaluator();
        }

        return Evaluator::$instance;
    }

    private function __construct()
    {
    }

    public function printActionbar(int $actionbarId): void
    {

        $percentages = calcAllPercentages(getCurrentEval());

        switch ($actionbarId) {
            case 1:
            {
                echo('<h6 style="font-size: 1.2em"><span style="float: left">Konsequentalismus (' . $percentages[0][0] * 100 . '%)</span><span style="float: right">Deontologie (' . $percentages[0][1] * 100 . '%)</span></h6><br><div class="progress" style="height: 2em; border-radius: 20px; font-size: 1em;"><div class="progress-bar" style="width: ' . $percentages[0][0] * 100 . '%; background-color: #c21010; animation: playAnimation 3s;"></div><div class="progress-bar" style="width: ' . $percentages[0][1] * 100 . '%; background-color: #ffe600; animation: playAnimation 3s;"></div></div><div class="stage-spacer"></div>');
                break;
            }
            case 2:
            {
                echo('<h6 style="font-size: 1.2em"><span style="float: left">Determinismus (' . $percentages[1][0] * 100 . '%)</span><span style="float: right">Indeterminismus (' . $percentages[1][1] * 100 . '%)</span></h6><br><div class="progress" style="height: 2em; border-radius: 20px; font-size: 1em;"><div class="progress-bar" style="width: ' . $percentages[1][0] * 100 . '%; background-color: #0e9e11; animation: playAnimation 3s;"></div><div class="progress-bar" style="width: ' . $percentages[1][1] * 100 . '%; background-color: #a30883; animation: playAnimation 3s;"></div></div><div class="stage-spacer"></div>');
                break;
            }
            case 3:
            {
                echo('<h6 style="font-size: 1.2em"><span style="float: left">Stoizismus (' . $percentages[2][0] * 100 . '%)</span><span style="float: right">Hedonismus (' . $percentages[2][1] * 100 . '%)</span></h6><br><div class="progress" style="height: 2em; border-radius: 20px; font-size: 1em;"><div class="progress-bar" style="width: ' . $percentages[2][0] * 100 . '%; background-color: #0ca3fa; animation: playAnimation 3s;"></div><div class="progress-bar" style="width: ' . $percentages[2][1] * 100 . '%; background-color: #fa9b0c; animation: playAnimation 3s;"></div></div><div class="stage-spacer"></div>');
                break;
            }
            case 4:
            {
                echo('<h6 style="font-size: 1.2em"><span style="float: left">Rationalismus (' . $percentages[3][0] * 100 . '%)</span><span style="float: right">Empirismus (' . $percentages[3][1] * 100 . '%)</span></h6><br><div class="progress" style="height: 2em; border-radius: 20px; font-size: 1em;"><div class="progress-bar" style="width: ' . $percentages[3][0] * 100 . '%; background-color: #0c0cfa; animation: playAnimation 3s;"></div><div class="progress-bar" style="width: ' . $percentages[3][1] * 100 . '%; background-color: #12ff16; animation: playAnimation 3s;"></div></div><div class="stage-spacer"></div>');
                break;
            }
        }
    }

    public function evaluate(int $stageId, array $postArray, array $eval): array
    {
        $newEval = $eval;

        self::handleErrors($stageId, $postArray, $eval); /* Error-Handling */

        switch ($stageId) { /* Only one answer was given (only allowed way to answer) */
            case 1:
            {
                if (isset($postArray['answer-1'])) {
                    $newEval['Deontology'] += 100;

                } else if (isset($postArray['answer-2'])) {
                    $newEval['Deontology'] += 100;

                } else if (isset($postArray['answer-3'])) {
                    $newEval['Consequentialism'] += 100;

                } else {
                    error($stageId, "SomethingWentWrong", $eval);
                }

                break;
            }
            case 2:
            {
                if (isset($postArray['answer-1'])) {
                    $newEval['Determinism'] += 100;

                } else if (isset($postArray['answer-2'])) {
                    $newEval['Determinism'] += 40;
                    $newEval['Indeterminism'] += 60;

                } else if (isset($postArray['answer-3'])) {
                    $newEval['Consequentialism'] += 100;

                } else {
                    error($stageId, "SomethingWentWrong", $eval);
                }
                break;
            }
            case 3:
            {
                if (isset($postArray['answer-1'])) {
                    $newEval['Determinism'] += 66;
                    $newEval['Indeterminism'] += 34;

                } else if (isset($postArray['answer-2'])) {
                    $newEval['Indeterminism'] += 100;

                } else if (isset($postArray['answer-3'])) {
                    $newEval['Determinism'] += 100;

                } else {
                    error($stageId, "SomethingWentWrong", $eval);
                }
                break;
            }
            case 4:
            {
                if (isset($postArray['answer-1'])) {
                    $newEval['Deontology'] += 100;

                } else if (isset($postArray['answer-2'])) {
                    $newEval['Consequentialism'] += 100;

                } else {
                    error($stageId, "SomethingWentWrong", $eval);
                }
                break;
            }
            case 5:
            {
                if (isset($postArray['answer-1'])) {
                    $newEval['Consequentialism'] += 100;

                } else if (isset($postArray['answer-2'])) {
                    $newEval['Consequentialism'] += 66;
                    $newEval['Deontology'] += 34;

                } else if (isset($postArray['answer-3'])) {
                    $newEval['Deontology'] += 100;

                } else {
                    error($stageId, "SomethingWentWrong", $eval);
                }
                break;
            }
            case 6:
            {
                if (isset($postArray['answer-1'])) {
                    $newEval['Stoicism'] += 100;

                } else if (isset($postArray['answer-2'])) {
                    $newEval['Stoicism'] += 50;
                    $newEval['Hedonism'] += 50;

                } else if (isset($postArray['answer-3'])) {
                    $newEval['Hedonism'] += 100;

                } else {
                    error($stageId, "SomethingWentWrong", $eval);
                }
                break;
            }
            case 7:
            {
                if (isset($postArray['answer-1'])) {
                    $newEval['Stoicism'] += 50;
                    $newEval['Hedonism'] += 50;

                } else if (isset($postArray['answer-2'])) {
                    $newEval['Stoicism'] += 100;

                } else if (isset($postArray['answer-3'])) {
                    $newEval['Hedonism'] += 100;

                } else {
                    error($stageId, "SomethingWentWrong", $eval);
                }
                break;
            }
            case 8:
            {
                if (isset($postArray['answer-1'])) {
                    $newEval['Consequentialism'] += 100;

                } else if (isset($postArray['answer-2'])) {
                    $newEval['Deontology'] += 34;
                    $newEval['Consequentialism'] += 66;

                } else if (isset($postArray['answer-3'])) {
                    $newEval['Deontology'] += 100;

                } else {
                    error($stageId, "SomethingWentWrong", $eval);
                }
                break;
            }
            case 9:
            {
                if (isset($postArray['answer-1'])) {
                    $newEval['Hedonism'] += 100;

                } else if (isset($postArray['answer-2'])) {
                    $newEval['Stoicism'] += 100;

                } else if (isset($postArray['answer-3'])) {
                    $newEval['Hedonism'] += 45;
                    $newEval['Stoicism'] += 55;

                } else {
                    error($stageId, "SomethingWentWrong", $eval);
                }
                break;
            }
            case 10:
            {
                if (isset($postArray['answer-1'])) {
                    $newEval['Hedonism'] += 100;

                } else if (isset($postArray['answer-2'])) {
                    $newEval['Hedonism'] += 66;
                    $newEval['Stoicism'] += 34;

                } else if (isset($postArray['answer-3'])) {
                    $newEval['Stoicism'] += 100;

                } else if (isset($postArray['answer-4'])) {
                    $newEval['Hedonism'] += 34;
                    $newEval['Stoicism'] += 66;

                } else {
                    error($stageId, "SomethingWentWrong", $eval);
                }
                break;
            }
            case 11:
            {
                if (isset($postArray['answer-1'])) {
                    $newEval['Rationalism'] += 100;

                } else if (isset($postArray['answer-2'])) {
                    $newEval['Empiricism'] += 100;

                } else if (isset($postArray['answer-3'])) {
                    $newEval['Rationalism'] += 50;
                    $newEval['Empiricism'] += 50;

                } else {
                    error($stageId, "SomethingWentWrong", $eval);
                }
                break;
            }
            case 12:
            {
                if (isset($postArray['answer-1'])) {
                    $newEval['Empiricism'] += 100;

                } else if (isset($postArray['answer-2'])) {
                    $newEval['Rationalism'] += 50;
                    $newEval['Empiricism'] += 50;

                } else if (isset($postArray['answer-3'])) {
                    $newEval['Rationalism'] += 100;

                } else {
                    error($stageId, "SomethingWentWrong", $eval);
                }
                break;
            }
            case 13:
            {
                if (isset($postArray['answer-1'])) {
                    $newEval['Indeterminism'] += 100;

                } else if (isset($postArray['answer-2'])) {
                    $newEval['Indeterminism'] += 50;
                    $newEval['Determinism'] += 50;

                } else if (isset($postArray['answer-3'])) {
                    $newEval['Determinism'] += 100;

                } else {
                    error($stageId, "SomethingWentWrong", $eval);
                }
                break;
            }
            case 14:
            {
                if (isset($postArray['answer-1'])) {
                    $newEval['Rationalism'] += 34;
                    $newEval['Empiricism'] += 66;

                } else if (isset($postArray['answer-2'])) {
                    $newEval['Empiricism'] += 100;

                } else if (isset($postArray['answer-3'])) {
                    $newEval['Rationalism'] += 100;

                } else {
                    error($stageId, "SomethingWentWrong", $eval);
                }
                break;
            }
            case 15:
            {
                if (isset($postArray['answer-1'])) {
                    $newEval['Empiricism'] += 100;

                } else if (isset($postArray['answer-2'])) {
                    $newEval['Rationalism'] += 100;

                } else {
                    error($stageId, "SomethingWentWrong", $eval);
                }
                break;
            }
            case 16:
            {
                if (isset($postArray['answer-1'])) {
                    $newEval['Determinism'] += 100;

                } else if (isset($postArray['answer-2'])) {
                    $newEval['Indeterminism'] += 100;

                } else if (isset($postArray['answer-3'])) {
                    $newEval['Determinism'] += 60;
                    $newEval['Indeterminism'] += 40;

                } else {
                    error($stageId, "SomethingWentWrong", $eval);
                }
                break;
            }
        }
        return $newEval;
    }

    private function handleErrors(int $stageId, array $postArray, array $eval): void
    {
        if ((!isset($postArray['answer-1'])) && (!isset($postArray['answer-2'])) && (!isset($postArray['answer-3']))) { /* No answer was given */
            error($stageId, "NoAnswer", $eval);

        } else if (isset($postArray['answer-1']) && isset($postArray['answer-2']) && isset($postArray['answer-3'])) { /* All three checkboxes were checked */
            error($stageId, "OnlyOneAnswerAllowed", $eval);

        } else if (isset($postArray['answer-1']) && isset($postArray['answer-2']) && (!isset($postArray['answer-3']))) { /* Answer 1,2 were checked */
            error($stageId, "OnlyOneAnswerAllowed", $eval);

        } else if (isset($postArray['answer-1']) && isset($postArray['answer-3']) && (!isset($postArray['answer-2']))) { /* Answer 1,3 were checked */
            error($stageId, "OnlyOneAnswerAllowed", $eval);

        } else if (isset($postArray['answer-2']) && isset($postArray['answer-3']) && (!isset($postArray['answer-1']))) { /* Answer 2,3 were checked */
            error($stageId, "OnlyOneAnswerAllowed", $eval);

        }
    }

}
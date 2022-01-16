<?php

use JetBrains\PhpStorm\ArrayShape;
use JetBrains\PhpStorm\Pure;

function calcPercentages(int $param1, int $param2): array
{
    if ($param2 === 0) {
        return array(1, 0);

    } else {
        $sum = $param1 + $param2;

        $ratio1 = $param1 / $sum;
        $ratio2 = $param2 / $sum;

        return array($ratio1, $ratio2);
    }
}

#[Pure] function calcAllPercentages(array $eval): array
{
    return array(
        calcPercentages($eval['Consequentialism'], $eval['Deontology']),
        calcPercentages($eval['Determinism'], $eval['Indeterminism']),
        calcPercentages($eval['Stoicism'], $eval['Hedonism']),
        calcPercentages($eval['Rationalism'], $eval['Empiricism'])
    );
}

function encode(array $eval): string
{
    return base64_encode(json_encode($eval));
}

#[ArrayShape(['Consequentialism' => "int", 'Deontology' => "int", 'Determinism' => "int", 'Indeterminism' => "int", 'Stoicism' => "int", 'Hedonism' => "int", 'Rationalism' => "int", 'Empiricism' => "int"])] function getCurrentEval(): array
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
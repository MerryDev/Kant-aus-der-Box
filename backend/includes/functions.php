<?php

use JetBrains\PhpStorm\ArrayShape;

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
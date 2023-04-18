<?php

$notas = [
    'flavio' => 8,
    'vinicius' => 5,
    'maria' => 5,
    'joao' => 10,
    'felipe' => 8
];


usort($notas, function (int $a, int $b): int {
    return $a <=> $b;
});

var_dump($notas);
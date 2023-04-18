<?php

// $notas = [10, 9, 8, 7, 6, 5];
// $notasOrdenadas = $notas;

// echo "Desordenadas" . PHP_EOL;

// var_dump($notas);

// echo "Ordenadas" . PHP_EOL;
// sort($notasOrdenadas);
// var_dump($notasOrdenadas);

$notas = [
    [
        'aluno' => 'flavio',
        'nota' => 8
    ],
    [
        'aluno' => 'felipe',
        'nota' => 9
    ],
    [
        'aluno' => 'Fernando',
        'nota' => 5
    ]
];

function orderDesc(array $a, array $b): int
{
    if ($a['nota'] > $b['nota'])
        return -1;
    if ($b['nota'] > $a['nota'])
        return 1;
    return 0;
}
function orderAsc(array $a, array $b): int
{
    if ($a['nota'] > $b['nota'])
        return 1;
    if ($b['nota'] > $a['nota'])
        return -1;
    return 0;
}
function orderAscRefatorada(array $a, array $b): int
{
    return $a['nota'] <=> $b['nota'];
}
function orderDescRefatorada(array $a, array $b): int
{
    return $b['nota'] <=> $a['nota'];
}
usort($notas, 'orderDesc');
var_dump($notas);

usort($notas, 'orderAsc');
//uksort($notas, 'orderAsc');
var_dump($notas);

rsort($notas); //redefini keys
asort($notas); //mantem keys
ksort($notas); //ordena utilizando keys
var_dump($notas);
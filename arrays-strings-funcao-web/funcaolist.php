<?php

$dados = ['Flavio', 10, 38];

list($nome, $nota, $idade) = $dados;
[$nome, $nota, $idade] = $dados;

echo $nome . PHP_EOL;
echo $nota . PHP_EOL;
echo $idade . PHP_EOL;


$dadosAssociativo = [
    'nome' => 'Flavio',
    'nota' => 10,
    'idade' => 38
];

['nome' => $nome, 'nota' => $nota, 'idade' => $idade] = $dados;


var_dump($nome, $nota, $idade);

$contas = [
    [
        'titular' => 'Vinicius Dias',
        'saldo' => 100
    ],
    [
        'titular' => 'Maria Joaquina',
        'saldo' => 1000
    ],
    [
        'titular' => 'João da Silva',
        'saldo' => 800
    ],
];

foreach ($contas as ['titular' => $titular, 'saldo' => $saldo]) {
    echo "$titular possui $saldo reais" . PHP_EOL;
}


$dadosAssociativo = [
    'a' => 'Flavio',
    'b' => 10,
    'c' => 38
];
extract($dadosAssociativo);

var_dump($a, $b, $c);
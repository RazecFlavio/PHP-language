<?php

$notas = [
    'flavio' => 8,
    'vinicius' => 5,
    'maria' => 5,
    'joao' => 10,
    'felipe' => 8
];


$notas2 = [
    'flavio' => 8,
    'vinicius' => 5,
    'maria' => 5,
    'joao' => 9
];


var_dump(array_diff($notas, $notas2)); // retorn os valores que nao existe os valores
var_dump(array_diff_key($notas, $notas2)); //retorna keys diferentes
var_dump(array_diff_assoc($notas, $notas2)); //retorna quem tem key ou valores deferentes


$array1 = [1, 2, 3];
$array2 = [3, 4, 5];
$array3 = [1, 7, 13];

$diferenca = array_diff($array1, $array2, $array3);

var_dump(array_keys($notas2));

var_dump(array_diff($array1, $array2, $array3));

//var_dump(array_combine(key, value))
var_dump(array_flip($notas)); /// retorna um array com a keys invertida com o values

echo "extract" . PHP_EOL;
extract($notas); // pega o array e cria varias variaveis;
var_dump($flavio, $maria, $joao);

echo "compact" . PHP_EOL;
var_dump(compact('flavio', 'maria', 'joao')); //pega varias variaveis e cria um array;
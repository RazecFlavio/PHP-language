<?php

$notas = [
    'flavio' => 8,
    'vinicius' => 5,
    'maria' => 5,
    'joao' => 10
];

ksort($notas);
//ksort($notas); reverse
var_dump($notas);

echo gettype($notas) . PHP_EOL;

var_dump(array_is_list($notas));

$list = [
    'flavio',
    'vinicius',
    'maria',
    'joao'
];

var_dump(array_is_list($list)); //verifica se o array esta indexado por numero sequencial

var_dump(array_key_exists('flavio', $notas)); //verificar se existe uma key 'flavio' no array
var_dump(isset($notas['flavio'])); //verifica se o a key 'flavio' contem um valor definido ou se esta null

var_dump(in_array(9, $notas)); // irá verificar se dentro do array exite valor = 10
var_dump(in_array('10', $notas)); // irá verificar se dentro do array exite valor = 10 exatamente 10
var_dump(array_search('10', $notas)); // irá verificar se dentro do array exite valor = 10 exatamente 10
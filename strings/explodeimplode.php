<?php

$nomeSobrenome = 'Flávio Cezar';
var_dump(explode(' ', $nomeSobrenome));
[$a, $b] = explode(' ', $nomeSobrenome);

echo 'Nome: ' . $a . PHP_EOL;
echo 'Sobrenome: ' . $b . PHP_EOL;

$nomeSobrenome = 'Flávio de Paula Cezar';
var_dump(explode(' ', $nomeSobrenome, 2));

$telefones = ['1199999999', '11111111111', '22222222222', '3333333333333'];
echo implode(PHP_EOL, $telefones);
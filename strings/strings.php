<?php

$nome = 'Flavio Cezar';
var_dump(str_contains($nome, 'Cezar'));


$url = 'https://alura.com.br';

var_dump(str_starts_with($url, 'https'));
var_dump(str_ends_with($url, '.br'));


$email = 'flaviocezar@gmail.com';
var_dump(substr($email, 0, 11));


$posicao = strpos($email, '@');

var_dump(substr($email, 0, $posicao));
var_dump(substr($email, $posicao));
var_dump(strtoupper(substr($email, 0, $posicao)));
var_dump(strtolower(substr($email, 0, $posicao)));
var_dump(strlen($email));

$string = 'Flavio';
$stringAcentuada = 'Flávio';

var_dump(strlen($string));
var_dump(strlen($stringAcentuada));
var_dump(mb_strlen($stringAcentuada));
var_dump(mb_strlen($string));

var_dump(mb_strtoupper($stringAcentuada));
$nomeSobrenome = 'Flávio Cezar';

var_dump(explode(' ', $nomeSobrenome));

[$a, $b] = explode(' ', $nomeSobrenome);

echo 'Nome: ' . $a . PHP_EOL;
echo 'Sobrenome: ' . $b . PHP_EOL;



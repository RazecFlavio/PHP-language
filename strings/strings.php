<?php

$nome = 'Flavio Cezar';
var_dump(str_contains($nome, 'Cezar'));

$url = 'https://alura.com.br';
var_dump(str_starts_with($url, 'https'));
var_dump(str_ends_with($url, '.br'));

$string = 'Flavio';
$stringAcentuada = 'Flávio';
var_dump(strlen($string));
var_dump(strlen($stringAcentuada));
var_dump(mb_strlen($stringAcentuada));
var_dump(mb_strlen($string));

var_dump(mb_strtoupper($stringAcentuada));


$email = ' flaviocezar@gmail.com ';
var_dump(trim($email));
var_dump(trim($email, 'gmail.com '));

var_dump(ltrim($email));
var_dump(rtrim($email));

$anoNascimento = '1985';
$idade = 2023 - $anoNascimento;
echo $idade . PHP_EOL;


function geraEmail2(): void
{
    $texto = '
        que baguio louco,
        ne
        nao ?
        ou é claro ?

        kkkkk


        Flavio
    ';

    echo $texto . PHP_EOL;
}
geraEmail2();
function geraEmail(): void
{
    $texto = <<<fim
        que baguio louco,
        ne
        nao ?
        ou é claro ?

        kkkkk


        Flavio
    fim;

    echo $texto . PHP_EOL;
}

geraEmail();
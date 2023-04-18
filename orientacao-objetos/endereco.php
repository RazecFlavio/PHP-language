<?php
use Alura\banco\model\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco('Guarulhos', 'macedo', 'rua1', '1');
$doisEndereco = new Endereco('Guarulhos', 'bairro1', 'rua2', '2');
$tresEndereco = new Endereco('Guarulhos', 'bairro2', 'rua3', '3');



echo $umEndereco . PHP_EOL;
echo $doisEndereco . PHP_EOL;
echo $tresEndereco . PHP_EOL;

echo $umEndereco->cidade . PHP_EOL;
echo $doisEndereco->bairro . PHP_EOL;
echo $tresEndereco->rua . PHP_EOL;
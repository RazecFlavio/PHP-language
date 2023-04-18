<?php

use Alura\banco\model\conta\Titular;
use Alura\banco\model\CPF;
use Alura\banco\model\Endereco;
use Alura\banco\model\funcionario\Diretor;
use Alura\banco\model\funcionario\Gerente;
use Alura\banco\service\Autenticador;

require_once 'autoload.php';

$autenticador = new Autenticador();

$umDiretor = new Diretor('Flavio', new CPF('338.888.118-99'), 8000);
$umGerente = new Gerente('Flavio', new CPF('338.888.118-99'), 4000);
$umTitular = new Titular(new CPF('337.123.123-12'), 'Flavio Cezar', new Endereco('guarulhos', 'macedo', 'francisco rodrigues', '58'));

echo "umDiretor ok:" . PHP_EOL;
$autenticador->tentaLogin($umDiretor, '1111');
echo PHP_EOL;
echo "umDiretor não" . PHP_EOL;
$autenticador->tentaLogin($umDiretor, '1112');
echo PHP_EOL;
echo "umGerente ok:" . PHP_EOL;
$autenticador->tentaLogin($umGerente, '2222');
echo PHP_EOL;
echo "umGerente nao" . PHP_EOL;
$autenticador->tentaLogin($umGerente, '2223');
echo PHP_EOL;
echo "umTitular ok:" . PHP_EOL;
$autenticador->tentaLogin($umTitular, '3333');
echo PHP_EOL;
echo "umTitular" . PHP_EOL;
$autenticador->tentaLogin($umTitular, '2222');
echo PHP_EOL;
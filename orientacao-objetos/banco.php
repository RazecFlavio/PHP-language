<?php

require_once 'autoload.php';

use Alura\banco\model\conta\Titular;
use Alura\banco\model\Endereco;
use Alura\banco\model\CPF;
use Alura\banco\model\conta\Conta;
use Alura\banco\model\conta\ContaCorrente;

$endereco = new Endereco(cidade: 'Guarulhos', bairro: 'Macedo', rua: 'francisco rodrigues gasques', numero: '58 apt 22C');

$flavio = new Titular(new CPF('338.888.118-99'), nome: 'Flavio Cezar', endereco: $endereco);

$contaFlavio = new ContaCorrente($flavio, 1);

$contaFlavio->depositar(450);

$contaFelipe = new ContaCorrente(new Titular(new CPF('543.444.118-99'), nome: 'Felipe Cezar', endereco: $endereco), 1);


echo $contaFelipe->getTitularCidade() . PHP_EOL;

echo "Quantidade: " . Conta::getCount() . PHP_EOL;

// echo $contaFlavio->getTitularNome() . PHP_EOL;
// echo $contaFlavio->getTitularCPF() . PHP_EOL;
// echo $contaFlavio->getSaldo() . PHP_EOL;

// echo $contaFelipe->getTitularNome() . PHP_EOL;
// echo $contaFelipe->getTitularCPF() . PHP_EOL;
// echo $contaFelipe->getSaldo() . PHP_EOL;

// echo "Quantidade: " . Conta::getCount() . PHP_EOL;
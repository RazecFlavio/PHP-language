<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';

$flavio = new Titular(cpf: '338.888.118-99', nome: 'Flavio Cezar');

$contaFlavio = new Conta($flavio);

$contaFlavio->depositar(450);

$contaFelipe = new Conta(new Titular(cpf: '543.444.118-9', nome: 'Felipe Cezar'));

echo "Quantidade: " . Conta::getCount() . PHP_EOL;

echo $contaFlavio->getTitularNome() . PHP_EOL;
echo $contaFlavio->getTitularCPF() . PHP_EOL;
echo $contaFlavio->getSaldo() . PHP_EOL;

echo $contaFelipe->getTitularNome() . PHP_EOL;
echo $contaFelipe->getTitularCPF() . PHP_EOL;
echo $contaFelipe->getSaldo() . PHP_EOL;

echo "Quantidade: " . Conta::getCount() . PHP_EOL;
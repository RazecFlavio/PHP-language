<?php

use Alura\Banco\Modelo\Conta\{ContaPoupanca, ContaCorrente, Titular};
use Alura\Banco\Modelo\{CPF, Endereco};
use Alura\Banco\Modelo\Conta\erros\SaldoInsuficienteException;

require_once 'autoload.php';

$conta = new ContaPoupanca(
    new Titular(
        new CPF('123.456.789-10'),
        'Vinicius Dias',
        new Endereco('Petrópolis', 'bairro Teste', 'Rua lá', '37')
    )
);
$conta->deposita(500);
try {
    $conta->saca(500);
} catch (SaldoInsuficienteException $th) {
    echo "Erro ao tentar sacar." . PHP_EOL;
    echo $th->getMessage() . PHP_EOL;
}

echo $conta->recuperaSaldo();
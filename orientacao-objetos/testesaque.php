<?php
require_once 'autoload.php';

use Alura\banco\model\conta\{ContaCorrente, ContaPoupanca, Titular};
use Alura\banco\model\CPF;
use Alura\banco\model\Endereco;



$corrente =
    new ContaCorrente(
        new Titular(
            new CPF('338.888.118-99'),
            'Flavio Cezar',
            new Endereco('Guarulhos', 'Macedo', 'francisco rodrigues gasques', '58 apt 22C')
        )
    );

$poupanca =
    new ContaPoupanca(
        new Titular(
            new CPF('338.888.118-99'),
            'Flavio Cezar',
            new Endereco('Guarulhos', 'Macedo', 'francisco rodrigues gasques', '58 apt 22C')
        )
    );
$corrente->depositar(500);
$corrente->sacar(100);

$poupanca->depositar(500);
$poupanca->sacar(100);

echo "Saldo atual: " . $corrente->getSaldo() . PHP_EOL;
echo "Saldo atual: " . $poupanca->getSaldo();
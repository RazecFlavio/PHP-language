<?php
namespace Alura\banco\model\conta;

require_once 'autoload.php';

class ContaPoupanca extends Conta
{
    protected function percentTax(): float
    {
        return 0.03;
    }
}
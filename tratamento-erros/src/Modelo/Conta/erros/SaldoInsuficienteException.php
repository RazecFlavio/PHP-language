<?php
namespace Alura\Banco\Modelo\Conta\erros;

class SaldoInsuficienteException extends \DomainException
{
    public function __construct(float $saque, float $saldo)
    {
        $message = "Você tentou sacar $saque mas seu saldo é de: $saldo em conta.";
        parent::__construct($message);
    }
}
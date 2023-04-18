<?php

namespace Alura\banco\model\conta;

abstract class Conta
{
    private Titular $titular;
    protected float $saldo;
    private static int $count = 0;

    public static function getCount(): int
    {
        return self::$count;
    }

    abstract protected function percentTax(): float;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;
        self::$count++;
    }
    // public function __destruct()
    // {
    //     echo "Codigo executara todas as vezes que a instancia deixar de existir.";
    //     self::$count--;
    // }

    public function getSaldo(): float
    {
        return $this->saldo;
    }

    public function sacar(float $valor): void
    {

        $tarifa = $valor * $this->percentTax();


        $saque = $valor + $tarifa;

        if ($saque > $this->saldo) {
            echo "Saldo insuficiente! ";
            return;
        }

        $this->saldo -= $saque;
    }
    public function depositar(float $valor): void
    {
        if ($valor < 0) {
            echo "Valor inválido! ";
            return;
        }
        $this->saldo += $valor;
    }

    public function getTitularNome(): string
    {
        return $this->titular->getNome();
    }
    public function getTitularCPF(): string
    {
        return $this->titular->getCPF();
    }

    public function getTitularCidade(): string
    {
        return $this->titular->getEnderco()->getCidade();
    }

}
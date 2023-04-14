<?php

require_once 'src/Titular.php';

class Conta
{
    private Titular $titular;
    private float $saldo;
    private static int $count = 0;

    public static function getCount(): int
    {
        return self::$count;
    }

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;
        self::$count++;
    }
    public function __destruct()
    {
        echo "Codigo executara todas as vezes que a instancia deixar de existir.";
        self::$count--;
    }

    public function getSaldo(): float
    {
        return $this->saldo;
    }

    public function sacar(float $valor): void
    {
        if ($valor > $this->saldo) {
            echo "Saldo insuficiente! ";
            return;
        }

        $this->saldo -= $valor;
    }
    public function depositar(float $valor): void
    {
        if ($valor < 0) {
            echo "Valor inválido! ";
            return;
        }
        $this->saldo += $valor;
    }

    public function transferir(float $valor, Conta $destino): void
    {
        $this->sacar($valor);
        $destino->depositar($valor);
    }

    public function getTitularNome(): string
    {
        return $this->titular->getNome();
    }
    public function getTitularCPF(): string
    {
        return $this->titular->getCPF();
    }

}
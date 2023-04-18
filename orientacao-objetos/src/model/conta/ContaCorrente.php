<?php
namespace Alura\banco\model\conta;

class ContaCorrente extends Conta
{
    protected function percentTax(): float
    {
        return 0.05;
    }

    public function transferir(float $valor, Conta $destino): void
    {
        $this->sacar($valor);
        $destino->depositar($valor);
    }
}
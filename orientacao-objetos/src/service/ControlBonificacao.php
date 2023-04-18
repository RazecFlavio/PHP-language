<?php
namespace Alura\banco\service;

require_once 'autoload.php';

use Alura\banco\model\funcionario\Funcionario;

class ControlBonificacao
{
    private float $total = 0;
    public function addBonificacao(Funcionario $funcionario)
    {
        $this->total += $funcionario->getBonificacao();
    }

    public function getTotal(): float
    {
        return $this->total;
    }
}
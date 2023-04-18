<?php
namespace Alura\banco\model\funcionario;

use Alura\banco\model\funcionario\Funcionario;

class Desenvolvedor extends Funcionario
{
    public function getBonificacao(): float
    {
        return 500;
    }
    public function sobeNivel()
    {
        $this->recebeAumento($this->getSalario() * 0.75);
    }
}
<?php
namespace Alura\banco\model\funcionario;

use Alura\banco\model\Autenticavel;
use Alura\banco\model\funcionario\Funcionario;

class Diretor extends Funcionario implements Autenticavel
{
    public function getBonificacao(): float
    {
        return $this->getSalario() * 2;
    }
    function podeAutenticar(string $senha): bool
    {
        return $senha === '1111';
    }
}
<?php
namespace Alura\banco\model\funcionario;

use Alura\banco\model\Autenticavel;
use Alura\banco\model\funcionario\Funcionario;

class Gerente extends Funcionario implements Autenticavel
{
    public function getBonificacao(): float
    {
        return $this->getSalario();
    }
    function podeAutenticar(string $senha): bool
    {
        return $senha === '2222';
    }
}
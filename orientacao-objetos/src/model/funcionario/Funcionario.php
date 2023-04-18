<?php
namespace Alura\banco\model\funcionario;

use Alura\banco\model\CPF;
use Alura\banco\model\Pessoa;

require_once 'autoload.php';

abstract class Funcionario extends Pessoa
{
    private float $salario;

    abstract public function getBonificacao(): float;

    public function __construct(string $nome, CPF $cpf, float $salario)
    {
        parent::__construct(cpf: $cpf, nome: $nome);
        $this->salario = $salario;
    }

    public function getNome(): string
    {
        return parent::getNome();
    }
    public function getCPF(): string
    {
        return parent::getCPF();
    }
    public function getSalario(): float
    {
        return $this->salario;
    }


    public function recebeAumento(float $aumento)
    {
        if ($aumento < 0) {
            echo "tem q ser positiov";
            return;
        }
        $this->salario += $aumento;
    }
}
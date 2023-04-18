<?php

namespace Alura\banco\model;

use AcessoPropriedades;

abstract class Pessoa
{
    use AcessoPropriedades;
    private CPF $cpf;
    private string $nome;

    final protected function validaNome(string $nome) //nao pode sobreescrever um metodo final
    {
        if (strlen($nome) < 5) {
            echo "Nome precisa ser maior que 5 caracters";
            exit();
        }
    }
    public function __construct(CPF $cpf, string $nome)
    {
        $this->cpf = $cpf;
        $this->validaNome($nome);
        $this->nome = $nome;
    }
    public function getNome(): string
    {
        return $this->nome;
    }
    public function getCPF(): string
    {
        return $this->cpf->getCPF();
    }
}
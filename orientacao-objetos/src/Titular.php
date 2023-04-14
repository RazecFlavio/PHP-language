<?php

require_once 'src/CPF.php';

class Titular
{
    private CPF $cpf;
    private string $nome;

    private function validaNome(string $nome)
    {
        if (strlen($nome) < 5) {
            echo "Nome precisa ser maior que 5 caracters";
            exit();
        }
    }
    public function __construct(string $cpf, string $nome)
    {
        $this->cpf = new CPF($cpf);
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
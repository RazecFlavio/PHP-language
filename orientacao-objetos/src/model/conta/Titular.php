<?php

namespace Alura\banco\model\conta;

use Alura\banco\model\Autenticavel;
use Alura\banco\model\CPF;
use Alura\banco\model\Endereco;
use Alura\banco\model\Pessoa;

class Titular extends Pessoa implements Autenticavel
{
    function podeAutenticar(string $senha): bool
    {
        return $senha === '3333';
    }
    private Endereco $endereco;

    private function validaNome(string $nome)
    {
        if (strlen($nome) < 5) {
            echo "Nome precisa ser maior que 5 caracters";
            exit();
        }
    }
    public function __construct(CPF $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($cpf, $nome);
        $this->endereco = $endereco;
    }

    public function getNome(): string
    {
        return parent::getNome();
    }
    public function getCPF(): string
    {
        return parent::getCPF();
    }
    public function getEnderco(): Endereco
    {
        return $this->endereco;
    }
}
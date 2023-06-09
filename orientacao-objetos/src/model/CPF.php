<?php

namespace Alura\banco\model;

final class CPF //nao consegue herdar.... ninguem consegue extender ela;
{
    private string $cpf;

    public function __construct(string $numero)
    {
        $numero = filter_var($numero, FILTER_VALIDATE_REGEXP, [
            'options' => [
                'regexp' => '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/'
            ]
        ]);

        if ($numero === false) {
            echo "CPF inválido";
            exit();
        }

        $this->cpf = $numero;
    }

    public function getCPF(): string
    {
        return $this->cpf;
    }
}
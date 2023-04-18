<?php

namespace Alura\banco\service;

use Alura\banco\model\Autenticavel;

class Autenticador
{
    public function tentaLogin(Autenticavel $autenticavel, string $senha): bool
    {
        if ($autenticavel->podeAutenticar($senha)) {
            echo "logado";
            return true;
        } else {
            echo "senha incorreta";
            return false;
        }

    }
}
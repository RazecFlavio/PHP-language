<?php

namespace Alura\banco\model;

interface Autenticavel
{
    public function podeAutenticar(string $senha): bool;
}
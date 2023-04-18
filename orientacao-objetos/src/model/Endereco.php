<?php

namespace Alura\banco\model;

use AcessoPropriedades;

/**
 * @property-read string $cidade; 
 * @property-read string $rua; 
 * @property-read string $bairro; 
 */

final class Endereco
{
    use AcessoPropriedades;
    private string $cidade;
    private string $bairro;
    private string $rua;
    private string $numero;

    public function __construct(string $cidade, string $bairro, string $rua, string $numero)
    {
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
    }

    public function getCidade(): string
    {
        return $this->cidade;
    }
    public function getBairro(): string
    {
        return $this->bairro;
    }
    public function getRua(): string
    {
        return $this->rua;
    }
    public function getNumero(): string
    {
        return $this->numero;
    }

    public function __toString(): string
    {
        return "{$this->rua}, {$this->numero} - bairro: {$this->bairro} {$this->cidade}";
    }
}
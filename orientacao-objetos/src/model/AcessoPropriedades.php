<?php

trait AcessoPropriedades
{

    public function __get(string $attr)
    {
        $metodo = "get" . ucfirst($attr);
        return $this->$metodo();
    }
}
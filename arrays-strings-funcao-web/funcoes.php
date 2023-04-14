<?php
function exibeMensagem(string $mensagem)
{
    echo $mensagem . PHP_EOL;
}

function sacar(array $conta, float $valor): array
{
    if ($valor > $conta['saldo'])
        exibeMensagem("Saldo insuficiente! ");
    $conta['saldo'] -= $valor;

    return $conta;
}

function depositar(array $conta, float $valor)
{
    if ($valor > 0)
        $conta['saldo'] += $valor;
    else
        exibeMensagem("valor invalido! ");

    return $conta;
}

function toUpper(array &$conta) //por referencia
{
    exibeMensagem(strtoupper($conta['nome']));
}
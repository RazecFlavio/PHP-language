<?php

//include 'funcoes.php';
//require 'funcoes.php';
require_once 'funcoes.php';


$contas = [
    33888811899 => [
        "nome" => "Flavio",
        "saldo" => 14000
    ]
    ,
    99999999999 => [
        "nome" => "Felipe",
        "saldo" => 80000
    ]
];
$contas[88888888888] = [
    "nome" => "Fernando",
    "saldo" => 80000
];
$contas[] = [
    "nome" => "Index automatico",
    "saldo" => 80000
];

$contas[33888811899]['saldo'] -= 4000;
$contas[88888888888]['saldo'] -= 200;
$contas[33888811899] = sacar($contas[33888811899], 150);
$contas[33888811899] = depositar($contas[33888811899], 151);

var_dump($contas[33888811899]);

echo count($conta);

// toUpper($contas[33888811899]);

// foreach ($contas as $idx => $conta) {
//     exibeMensagem(mensagem: "Dona da conta " . $conta['nome']);
//     exibeMensagem(mensagem: "Dona da conta $conta[nome]");

//     exibeMensagem(mensagem: "Dona da conta {$conta['nome']}");

//     exibeMensagem(mensagem: "saldo: " . $conta['saldo']);
//     exibeMensagem(mensagem: $idx);
// }
// unset($contas[100000000000]);

// foreach ($contas as $cpf => $conta) {
//     ['nome' => $nome, 'saldo' => $saldo] = $conta;
//     exibeMensagem("conta: $nome => saldo: $saldo");
// }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Contas Correntes</h1>
    <dl>
        <?php foreach ($contas as $cpf => $conta) {
            ['nome' => $nome, 'saldo' => $saldo] = $conta; ?>
            <dt>
                <h3>
                    <?= $nome ?> -
                    <?= $cpf ?>
                </h3>
            </dt>
            <dd>
                Saldo:
                <?= $saldo ?>
            </dd>
        <?php } ?>
    </dl>
</body>

</html>
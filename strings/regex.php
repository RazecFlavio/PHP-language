<?php

$telefones = ['(11) 99790-7394', '(11) 4858-5432', '(11)98880-6694', '(11) 96790-9994'];


foreach ($telefones as $idx => $telefone) {
    $isValid = preg_match('/(\([0-9]{2}\)) 9?[0-9]{4}-[0-9]{4}$/', $telefone, $matched);

    //var_dump($matched);

    if ($isValid)
        echo "Este telefone: $telefone é válido! " . PHP_EOL;


    echo preg_replace(
        '/\(([0-9]{2})\) (9?[0-9]{4}-[0-9]{4})$/',
        '(XX) \2',
        $telefone
    ) . PHP_EOL;
}
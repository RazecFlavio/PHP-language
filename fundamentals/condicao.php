<?php

$idade = 38;
$nome = 'Flavio';

echo "voce tem 18 anos pode entrar" . PHP_EOL;

if (($idade >= 18 || $idade != 0) && $nome == 'Flavio') {
    echo "voce tem $idade";
} else {
    echo "você não é permitido";
}

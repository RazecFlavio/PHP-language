<?php

//$idadeList = array(36, 38, 40, 50, 80); // antigo antes v. 5.4

$idadeList = [36, 38, 40, 50, 80];

echo "Primeira idade: $idadeList[0]" . PHP_EOL;
echo "Quantidade de idades: " . count($idadeList) . PHP_EOL;

for ($i = 0; $i <= 4; $i++) {
    echo "Idade atual: $idadeList[$i]" . PHP_EOL;
}
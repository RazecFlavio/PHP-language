<?php

$arquivo = fopen('lista-cursos.txt', 'r');

$count = 1;
while (!feof($arquivo)) {
    //$line = fgets($arquivo, 3) // com o parametro 3 eu iria ler apenas os 3 primeiros de cada linha
    $line = fgets($arquivo);

    echo "Linha $count: $line" . PHP_EOL;
    $count++;
}
fclose($arquivo);
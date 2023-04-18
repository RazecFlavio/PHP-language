<?php

$arquivoCursos = new SplFileObject('cursos.csv');

while (!$arquivoCursos->eof()) {
    $linha = $arquivoCursos->fgetcsv(';');
    if ($linha[0] !== null)
        echo mb_convert_encoding($linha[0], 'UTF-8', 'Windows-1252') . PHP_EOL;
}

$date = new DateTime();
$date->setTimestamp($arquivoCursos->getCTime());

echo $date->format('d/m/Y') . PHP_EOL;
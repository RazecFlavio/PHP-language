<?php

//$cursos = file_get_contents('lista-cursos.txt');
//$cursos2 = file_get_contents('cursos.txt');

$cursos = file('lista-cursos.txt'); // vem em arrays
$cursos2 = file('cursos.txt');

$arquivoCSV = fopen('cursos.csv', 'w');

foreach ($cursos as $key => $curso) {
    $linha = [$curso, "Sim\n"];
    fwrite($arquivoCSV, implode(',', $linha));
}

foreach ($cursos2 as $key => $curso) {
    $linha = [$curso, 'Nao'];
    fwrite($arquivoCSV, implode(',', $linha));
}

fclose($arquivoCSV);
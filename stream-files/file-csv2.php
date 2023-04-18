<?php

//$cursos = file_get_contents('lista-cursos.txt');
//$cursos2 = file_get_contents('cursos.txt');

$cursos = file('lista-cursos.txt'); // vem em arrays
$cursos2 = file('cursos.txt');

$arquivoCSV = fopen('cursos.csv', 'w');

foreach ($cursos as $key => $curso) {
    $linha = [trim(mb_convert_encoding($curso, 'Windows-1252', 'UTF-8')), "Sim"];
    fputcsv($arquivoCSV, $linha, ';');
}

foreach ($cursos2 as $key => $curso) {
    $linha = [trim(mb_convert_encoding($curso, 'Windows-1252', 'UTF-8')), "Nao"];
    fputcsv($arquivoCSV, $linha, ';');
}

fclose($arquivoCSV);
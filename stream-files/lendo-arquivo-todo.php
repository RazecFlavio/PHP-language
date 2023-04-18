<?php

$arquivo = fopen('lista-cursos.txt', 'r');

$totalfile = filesize('lista-cursos.txt');

$cursos = fread($arquivo, $totalfile); //limite de tamanho do php é de 128 mega

echo $cursos;

fclose($arquivo);
<?php

$alllines = file_get_contents('lista-cursos.txt');
echo $alllines;
$arraylines = file('lista-cursos.txt');
var_dump($arraylines);
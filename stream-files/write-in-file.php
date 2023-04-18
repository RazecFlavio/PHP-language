<?php

//$arquivo = fopen('arquiv1.txt', 'w'); //escrita
// $arquivo = fopen('arquiv1.txt', 'a'); //append 
// $curso = "\nDesign Patterns PHP I: Boas práticas de programação";
// fwrite($arquivo, $curso, 21); ///insere apenas os 21 primeiros caracterres;
//fwrite($arquivo, $curso);


$curso = "\nDesign Patterns PHP I: Boas práticas de programação";
file_put_contents('lista-cursos.txt', $curso, FILE_APPEND);
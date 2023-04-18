<?php

$novo = trim(fgets(STDIN));

file_put_contents('lista-cursos.txt', "\n$novo", FILE_APPEND);
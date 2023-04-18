<?php

$aluno = [
    'flavio',
    'vinicius',
    'maria',
];

$aluno2 = [
    'joao',
    'felipe'
];


$alunos = [...$aluno, 'Flavio cezar', ...$aluno2];


var_dump(array_merge($aluno, $aluno2));
var_dump($alunos);

array_push($aluno, 'jane', 'jorge', 'thais');
array_unshift($aluno, 'inseri na frente');
array_shift($aluno2);
array_pop($aluno);
var_dump($aluno);

$aluno[] = 'outra forma de add';
<?php

$email = 'flaviocezar@gmail.com';
var_dump(substr($email, 0, 11));

$posicao = strpos($email, '@');

var_dump(substr($email, 0, $posicao));
var_dump(substr($email, $posicao));
var_dump(strtoupper(substr($email, 0, $posicao)));
var_dump(strtolower(substr($email, 0, $posicao)));
var_dump(strlen($email));
<?php

$text = "Texto com qualquer coisa. Porra e caralho";
var_dump(str_replace('Porra', '***', $text));
var_dump(str_replace(['Porra', 'caralho'], ['***', 'XXXX'], $text));
var_dump(strtr($text, 'ae', '43'));
var_dump(strtr($text, ['Poxa' => 'p', 'caralho']));
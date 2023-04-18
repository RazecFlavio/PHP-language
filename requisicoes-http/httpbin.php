<?php

$contexto = stream_context_create([
    'http' => [
        'method' => 'POST',
        'header' => ['X-From: PHP', 'Content-Type: text/plain'],
        'content' => 'Teste do corpo da'
    ]
]);

echo file_get_contents('http://httpbin.org/post', false, $contexto);
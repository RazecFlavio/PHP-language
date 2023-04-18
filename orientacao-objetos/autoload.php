<?php
spl_autoload_register(function (string $nomeClase) {
    $path = str_replace('Alura\\banco', 'src', $nomeClase);
    $path = str_replace('\\', DIRECTORY_SEPARATOR, $path);
    $path .= '.php';
    if (file_exists($path)) {
        require_once $path;
    }
});
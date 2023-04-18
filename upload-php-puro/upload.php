<?php

//var_dump('estou no upload.php');

var_dump($_FILES['arquivo']);

var_dump(__DIR__);

if (is_uploaded_file($_FILES['arquivo']['tmp_name']))
    move_uploaded_file($_FILES['arquivo']['tmp_name'], __DIR__ . '/a.jpg');
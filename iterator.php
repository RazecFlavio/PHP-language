<?php

$contador = 1;

while ($contador <= 15) {
    echo "# $contador" . PHP_EOL;
    $contador++;
}

$contador = 15;

for ($i = 0; $i < $contador; $i++) {
    echo "# " . $i + 1 . PHP_EOL;
}


for ($i = 0; $i < $contador; $i++) {
    if ($i == 3)
        continue;
    echo "# " . $i + 1 . PHP_EOL;
}

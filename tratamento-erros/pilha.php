<?php

function funcao1()
{
    echo 'Entrei na função 1' . PHP_EOL;
    try {
        $divisao = intdiv(5, 0);
        $arrayFixo = new SplFixedArray(2);
        $arrayFixo[3] = 'asdfasd';
    } catch (Exception $th) {
        if ($th instanceof RuntimeException) {
            echo "Aconteceu uma execeção de runtime" . PHP_EOL;
        }
        echo $th->getMessage() . PHP_EOL;
        echo "Aconteceu um erro na funcao 1" . PHP_EOL;
        echo $th->getTraceAsString() . PHP_EOL;
    } catch (Error $th) {
        echo "Aconteceu um erro " . PHP_EOL;
    } catch (Throwable $th) {
        echo "qualquer erro";
    }


    funcao2();
    echo 'Saindo da função 1' . PHP_EOL;
}

/**
 * @throws RuntimeException
 */
function funcao2()
{
    echo 'Entrei na função 2' . PHP_EOL;

    $exception = new RuntimeException();
    throw $exception;

    echo 'Saindo da função 2' . PHP_EOL;
}

echo 'Iniciando o programa principal' . PHP_EOL;
funcao1();
echo 'Finalizando o programa principal' . PHP_EOL;
<?php


function funcao1()
{
    echo "Entrei na função 1" . PHP_EOL;

    try {
        funcao2();
    } catch (Throwable $e) {
        echo "Erro: " . $e->getMessage() . PHP_EOL
            . "Linha: " . $e->getLine() . PHP_EOL
            . "Trilha de execução: " . $e->getTraceAsString() . PHP_EOL;
    }

    echo "Sai da função 1" . PHP_EOL;
}

function funcao2()
{
    echo "Entrei na função 2" . PHP_EOL;
    // throw new PharException("Phar Exception");

    echo "Sai da função 2" . PHP_EOL;
}

echo "Início do programa." . PHP_EOL;
funcao1();
echo "Término do programa." . PHP_EOL;
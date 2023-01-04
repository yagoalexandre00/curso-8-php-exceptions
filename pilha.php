<?php

function funcao1()
{
    echo "Entrei na função 1" . PHP_EOL;

    try {
        funcao2();
    } catch (RuntimeException | DivisionByZeroError $e) {
        echo "Erro: " . $e->getMessage() . PHP_EOL
            . "Linha: " . $e->getLine() . PHP_EOL
            . "Trilha de execução: " . $e->getTraceAsString();
    }

    echo "Sai da função 1" . PHP_EOL;
}

function funcao2()
{
    echo "Entrei na função 2" . PHP_EOL;
    intdiv(2, 0);
    $arrayFixo = new SplFixedArray(2);
    $arrayFixo[3] = "Oi";
    echo "Sai da função 2" . PHP_EOL;
}

echo "Início do programa." . PHP_EOL;
funcao1();
echo "Término do programa." . PHP_EOL;
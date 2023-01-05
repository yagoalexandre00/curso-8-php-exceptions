<?php

use Cassandra\Exception\ExecutionException;

error_reporting(E_ALL); # mostra todos os ERROS da aplicação
ini_set('display_errors', 1); # mostra os erros na tela

set_error_handler(function ($errno, $errstr, $errfile, $errline) {
// $errno - numero do erro
// $errstr - mensagem do erro
// $errfile - arquivo onde está o erro
// $errline - numero da linha onde se encontra o erro
    var_dump($errno, $errstr, $errfile, $errline);

    return true;
});

echo $variavel_inexistente;
echo $array[2];

echo UMA_CONSTANTE;
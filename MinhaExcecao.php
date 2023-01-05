<?php

class MinhaExcecao extends Exception
{
    public function exibeErro()
    {
        echo "erro no cadastro";
    }
}

try {
    throw new MinhaExcecao();
} catch (MinhaExcecao $e) {
    $e->exibeErro();
}
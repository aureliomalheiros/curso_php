<div class="titulo">Escopo</div>


<?php
function imprimirMensagem(){
    echo "Olá";
    echo "Até a próxima!<br>";
}
imprimirMensagem();
imprimirMensagem();
imprimirMensagem();

$variavel = 1;

function trocaVariavel(){
    $variavel = 2;
    echo "Durante a função: $variavel <br>";
}

trocaVariavel();
echo "Antes: $variavel <br>";

function trocaValorDeVerdade(){
    global $variavel;
    $variavel = 10;
    echo "Durante a função: $variavel <br>";
}

trocaValorDeVerdade();
echo "Valor atual da Variavel: $variavel";

var_dump(trocaValorDeVerdade());

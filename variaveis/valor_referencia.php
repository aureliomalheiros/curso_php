<div class="titulo">Valor vs Referencia</div>


<?php
    $variavel = 'valor inicial';
    echo $variavel;

    //Atribuição por Valor
    $variavelValor = $variavel;
    echo "<br> $variavelValor";
    $variavelValor = 'novo valor';
    echo "<br> $variavel";
    echo "- $variavelValor";

    //Atribuição por referência

    $variavelReferencia = &$variavel;
    $variavelReferencia = 'mesma referencia';

    echo "<br> $variavel";
    echo "<br> $variavelReferencia";


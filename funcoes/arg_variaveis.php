<div class="titulo">Argumento Variaveis</div>

<?php
function soma($a, $b){
    return $a + $b;
}
echo soma(14, 15) . '<br>';
echo soma(6, 5, 4) . '<br>';

function somaCompleta(...$numeros){
    $soma=0;
    foreach($numeros as $num){
        $soma += $num;
    }
    return $soma;
}
echo somaCompleta(1,2,3,4,5);
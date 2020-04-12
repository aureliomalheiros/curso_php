<div class="titulo">Desafio Impressão</div>

<!--
    -Imprimira apenas os valores do array que contém indice par
    -Utilizar for e foreach
    -Resultado esperado AAA, CCC e EEE
-->

<?php

$desafio = [
    'AAA',
    'BBB',
    'CCC',
    'DDD',
    'EEE',
    'FFF'
];

for($i = 0; $i < count($desafio); $i++){
    if($i % 2 === 0){
        echo "<br> $desafio[$i]";
    }
}
echo '<hr>';
foreach($desafio as $chave => $valor){
    if($chave % 2 === 0){
        echo "<br> $valor";
    }
}
<div class="titulo">Foreach</div>

<?php

$semana = [
    'sabado',
    'domingo',
    'segunda',
    'terça',
    'quarta',
    'quinta',
    'sexta'
];

foreach($semana as $valor){
    echo "$valor <br>";
}

$meses = [
    1 => 'Janeiro',
    'Fevereiro',
    'Março',
    'Abril',
    'Maio',
    'Junho',
    'Julho',
    'Agosto',
    'Setembro',
    'Outubro',
    'Novembro',
    'Dezembro'
];

print_r($meses);
echo '<hr>';
foreach($meses as $indice => $valor){
    echo "$indice => $valor <br>";
}
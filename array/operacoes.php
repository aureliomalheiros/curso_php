<div class="titulo">Operações</div>

<?php
    $dados1 = [
        "nome" => "Jose",
        "idade" => 28
    ];
    $dados2 = [
        "naturalidade" => "Fortaleza"
    ];

    $dadosCompletos = $dados1 + $dados2;
    print_r($dadosCompletos);

    echo '<br>' . is_array($dadosCompletos);
    echo '<br>' . count($dadosCompletos);
    $indice = array_rand($dadosCompletos);
    echo "$indice = $dadosCompletos[$indice]";
    echo '<br>';
    echo "{$dadosCompletos['idade']}";
    echo '<br>';
    echo "${dadosCompletos['idade']}";

    $impares = [1,3,5,7,9];
    $pares = [0,2,4,6,8];

    $decimais = $pares + $impares;
    echo '<br>';
    print_r($decimais);

    sort($decimais);
    


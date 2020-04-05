<div class="titulo">Desafio Equação</div>

<?php
    $numero_1=1;
    $numero_2=2;
    $numero_3=3;
    $numero_5=5;
    $numero_6=6;
    $numero_7=7;
    $numero_8=8;
    $numero_10=10;

    $denominador_a=($numero_6 * ($numero_3+$numero_2))**$numero_2;
    $numerador_a = ($numero_3*$numero_2);

    $denominador_b=($numero_1-$numero_5)*($numero_2-$numero_7);
    $numerador_b = $numero_2;

    $fracao_1 = $denominador_a/$numerador_a;
    $fracao_2 = ($denominador_b/$numerador_b)**$numero_2;

    $ultima_operacao = ($fracao_1 - $fracao_2)**$numero_3/$numero_10**$numero_3; 

    echo $ultima_operacao;

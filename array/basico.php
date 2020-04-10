<div class="titulo">Array</div>

<?php
    $lista = array(1, 2, 3.4, "texto");

    var_dump($lista);
    echo '<br>';
    echo $lista[3];
    echo '<br>';
    print_r($lista);

    $lista[0] = 123; //alteramos o valor do array;
    echo '<br>';
    print_r($lista);

    $texto ='Esse é um texto de teste';
    //podemos ter problemas para extrair quando temos palavras com acentos.
<div class="titulo">Interpolação</div>
<?php

    //Uma forma de interpretar o valor de uma váriavel dentro de uma string
    $numero=10;
    echo $numero;

    echo '<br>  $numero';
    echo "<br> $numero";

    $objeto = 'caneta';

    echo "<br> Eu tenho 5 $objetos";
    echo "<br> Eu tenho 5 {$objeto}s";
    echo "<br> eu tinha 5 {$objeto}s mas perdi 3 {$objeto}s";
    
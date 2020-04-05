<div class="titulo">Atribuições</div>

<?php
    $numero_a=1;
    $numero_b=2;
    $numero_c=20;

    $soma = $numero_a + $numero_b;

    echo '<br>' . $soma;
    echo '<br>' . $numero_c--;
    echo '<br>' . $numero_c--;
    echo '<br>' . $numero_c--;
    echo '<br>' . $numero_c--;
    echo '<br>' . --$numero_c;
    echo '<br>' . $numero_c++;
    echo '<br>' . $numero_c++;
    echo '<br>' . ++$numero_c;

    $numero_b *= 5;
    echo '<br>' . $numero_b;

    $texto = 'Esse é um texto';
    echo '<br>' . $texto;
    $texto = $texto . 'qualquer';
    echo '<br>' . $texto;




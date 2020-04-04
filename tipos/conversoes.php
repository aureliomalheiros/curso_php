<div class="titulo">conversões</div>

<?php
    echo is_int(PHP_INT_MAX);
    echo '<br>';
    var_dump(1 + 1.0);
    echo '<p>Float para inteiro</p>';
    var_dump((float) 3); //Inteiro para float
    echo '<p>Inteiro para float</p>';
    var_dump((int) 2.8); //Float para inteiro
    echo '<br>';
    var_dump((int) round(2.8));


    //operações com string
    echo '<p> Strings</p>';
    var_dump(3 + "2"); //PHP não faz concatenação nesses casos e sim soma
    echo '<br>';
    echo '<br>';
    var_dump("3" . 2);
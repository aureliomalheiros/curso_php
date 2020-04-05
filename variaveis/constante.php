<div class="titulo">Constantes</div>

<?php
    define('TAXA_DE_JUROS', 5.9);
    const NOVA_TAVA = 2.5;
    
    echo TAXA_DE_JUROS;

    echo '<br>' . NOVA_TAVA;

    $valorVariavel = 2.8;
    define('NOVISSIMA_TAXA', $valorVariavel);
    echo '<br>' . NOVISSIMA_TAXA;

    echo '<br>' . PHP_VERSION;
    echo '<br>' . PHP_INT_MAX;
    echo '<br>' . __LINE__;
 

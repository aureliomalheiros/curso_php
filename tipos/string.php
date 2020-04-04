<div class="titulo">tipo String</div>

<?php
    echo "Eu sou uma String";
    echo "<br>";
    var_dump("Eu tambem");
    echo '<br>';


    //concatenação
    echo "Nós tambem" . ' somos';
    echo '<br>', "Tambem aceito", " virgulas";

    echo "'Teste'" . '" Teste"' . '\'teste\'';

    print("<br> Existe a função print");
    print "<br> Também existe a função print";

    echo '<br>' . strtoupper('maximizado');    
    echo '<br>' . strtolower("MINIMIZADO");
    echo '<br>' . ucfirst('só a primeira letra');
    echo '<br>' . ucwords('todas as primeiras letras');
    echo '<br>' . strlen('Quantas letras?');
    echo '<br>' . mv_strlen('só a primeira letra', "uft-8");
    echo '<br>' . substr('Só uma parte mesmo', 7,6);


    
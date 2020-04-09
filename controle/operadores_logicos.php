<div class="titulo">Operadores Lógicos</div>

<?php
    echo "<p class='divisao'> V Ou F</p>";
    var_dump(true);
    echo '<br>';
    var_dump(!!true);

    echo "<p class='divisao'>Tabela verdade 'AND' (E)</p>";
    var_dump(true && true);
    var_dump(5 <> 5 && 6 > 1);
    var_dump(2 > 2 && 1 ==1);
    var_dump(false && false);
    echo '<br>';
    var_dump(true and true);
    var_dump(5 <> 5 and 6 > 1);
    var_dump(2 > 2 and 1 ==1);
    var_dump(false and false);
    
    echo "<p class='divisao'>Tabela verdade 'OR' (E)</p>";
    
    var_dump(true || true);
    var_dump(true || false);
    var_dump(false || true);
    var_dump(false || false);

    echo '<br>';

    var_dump(true or true);
    var_dump(true or false);
    var_dump(false or true);
    var_dump(false or false);

    
    echo "<p class='divisao'>Tabela verdade 'XOR' (OU Exclusivo)</p>";

    var_dump(true xor true);
    var_dump(true xor false);
    var_dump(false xor true);
    var_dump(false xor false);

    var_dump(true != true);
    var_dump(true != false);
    var_dump(false != true);
    var_dump(false != false);

    echo "<p class='divisao'>Exemplo</p>";

    $idade = 62;
    $sexo = 'F';

    $criterioHomem = ($idade >= 65 && $sexo = 'M');
    $criterioMulher = ($idade >=65 && $sexo = 'F');
    $atingiuCriterio = $criterioHomem || $criterioMulher;
    $podeSeAposentar = $pagouPrevidencia && $atingiuCriterio;

    echo "POde se aponsentar -> $podeSeAposentar. <br>";
    
    if(($idade >= 60 && $sexo === 'F')){
        echo "Pode se aposentar -> $sexo";
    }
    else if($idade >= 65 && $sexo === 'M'){
        echo "Pode se aposentar -> $sexo";
    }
    else {
        echo "Vai ter que trabalhar mais um pouco...";
    }

?>

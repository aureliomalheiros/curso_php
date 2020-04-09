<div class="titulo">Operadores Relacionais</div>

<?php
    var_dump(1 == 1); //true
    echo '<br>';
    var_dump(1 > 2); //false
    echo '<br>';
    var_dump(2 == 3); //false
    echo '<br>';
    var_dump(3 >= 1); //true
    echo '<br>';
    var_dump(10 <= 10); //true
    echo '<br>';
    var_dump(1 <> 1); //false
    echo '<br>';
    var_dump(3 != 3); //false

    echo '<br>';
    var_dump(111 == '111');//true
    echo '<br>';
    var_dump(111 === '111'); //false - ele analisa tanto o valor quanto o tipo da variavel
    echo '<br>';
    echo '<br>';
    

    echo "<p class='divisao'>Relacionais no If/Else</p><hr>";
    $idade = 15;
    if($idade < 18){
        echo "Menor de idade <br>";
    }
    else if($idade <=65){
        echo "Adulto <br>";
    }
    else{
        echo "Terceira idade!";
    }

    echo '<p class="divisao">Spaceship</p><hr>';
    var_dump(5 <=> 3);
    echo '<br>';
    var_dump(500 <=> 50);
    echo '<br>';
    var_dump(50 <=> 50);
    echo '<br>';
    var_dump(5 <=> 10);

    echo '<p class="divisao">Valores pode ser V ou F</p><hr>';
    var_dump(!!5);
    var_dump(!!0);
    var_dump(!!"");
    var_dump(!!" ");
    ?>
   
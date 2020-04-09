<div class="titulo">Desafio PI</div>


<?php
    echo pi();
    $pi = 3.14;
    
    if($pi == pi()){
        echo "<br> Iguais";
    }
    else{ 
        echo "<br> Diferentes";
    }

    //Resposta
    echo "<br>" . ($pi - pi());

    if($pi - pi() <= 0.01){
        echo "<br> Praticamente iguais";
    }
    else{ 
        echo "<br> Valor errado!!";
    }
<div class="titulo">If Else</div>

<?php
    if(true){
        echo "Serei impresso?";
    
    }
    if(false){
        echo "Verdadeiro - Parte A<br>";
        echo "Verdadeiro - Parte B<br>";
    }
    else if(false){
        echo "Paso B<br>";
    }
    else if(false){
        echo "Passo C<br>";
    }
    else{
        echo "Último passo";
    }
    echo "Fim<br>";
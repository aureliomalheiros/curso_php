<div class="titulo">Laço FOR</div>

<?php
for($cont = 1; $cont <= 5; $cont++){
    echo $cont . " - Repeticao";
    echo '<br>';
}

$cont2 = 0;

for(;$cont2 <= 10; $cont2++){
    echo $cont2 . " - Nova repetição";
    echo '<br>';
}

for(; $cont2 <= 12; $cont2++){
    echo '<br>';
    echo $cont2;
}
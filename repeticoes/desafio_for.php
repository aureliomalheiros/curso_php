<div class="titulo">Desafio Laço FOR</div>


<?php

$impressao = '';
for($cont = 0; $cont <= 5; $cont++){
    $impressao .= '#';
    echo "$impressao <br>";
}

echo '<hr>';

for($impressao='$'; $impressao!='$$$$$$'; $impressao.='$'){
    echo "$impressao <br>";
}
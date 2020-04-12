<div class="titulo">While | do While</div>

<?php
const VALOR_LIMITE = 5;
$contador = 0;

while($contador < VALOR_LIMITE){
    echo "while $contador <br>";
    $contador++;
}

echo '<hr>';

do {
    echo "While $contador <br>";
    $contador++;
}while($contador < VALOR_LIMITE);
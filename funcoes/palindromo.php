<div class="titulo">Palindromo</div>

<?php
function palindromo($palavra){
    $ultimoIndice = strlen($palvra) - 1;
    for($i = 0; $i <= $ultimoIndice; $i++){
        if($palavra[$i] !== $palavra[$ultimoIndice-$i]){
            return 'Não';
        }
    }
    return 'Sim';
}

echo palindromo('foi') . '<br>';
echo palindromo('arara') . '<br>';
echo palindromo('bola') . '<br>';
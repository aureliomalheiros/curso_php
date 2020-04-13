<div class="titulo">Argumento & retorno</div>

<?php
function obterMensagem(){
    return "Seja bem vindo";
}

$mensagem = obterMensagem();
echo $mensagem;
echo '<br>';
var_dump(obterMensagem());
echo '<br>';

function somaDoisValores($number1, $number2){
    return $number1 +$number2;
}

echo '<br>' . somaDoisValores(40, 1);
$x = 10;
$y = 5;
echo '<br>' . somaDoisValores($x, $y);
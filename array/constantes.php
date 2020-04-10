<div class="titulo">Array Constantes</div>

<?php
const FRUTAS = ['laranja', 'abacaxi'];

//não será possível alterar os valores do array

echo FRUTAS[0];

const CARROS = ['fiat' => 'uno', 'Ford' => 'Fiesta'];
echo '<br>' . CARROS["Fiat"];

define('CIDADES', array('Belo Horizonte', 'Recife'));
echo '<br>' . CIDADES[1];
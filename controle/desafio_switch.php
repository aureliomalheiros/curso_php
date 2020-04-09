<div class="titulo">Desafio Switch</div>

<form action="#" method = "post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">KM > Milha</option>
        <option value="milha-km">Milha > Km</option>
        <option value="metro-km">Metro > KM</option>
        <option value="km-metro">Km > Metros</option>
        <option value="fahrenheit-celsius">Fahrenheit > Celsius</option>
        <option value="celsius-fahrenheit">Celsius > Fahrenheit</option>
    </select>
    <button>Calcular</button>
</form>

<style>
    form > *{
        font-size: 1.8rem;
    }
</style>

<?php
    define('CONVER_KM_MILHA', 1.609);
    define('CONVER_METRO_KM', 1000);
    
    switch ($_POST['conversao']){
        case 'km-milha':
            $valor = ($_POST['param']);
            $conversaoValor = $valor/CONVER_KM_MILHA;
            echo "$valor Km(s) = $conversaoValor Milha(s)";
            break;
        case 'milha-km':
            $valor = floatval($_POST['param']);
            $conversaoValor = $valor*CONVER_KM_MILHA;
            echo "$valor Milha(s) = $conversaoValor Km";
            break;
        case 'metro-km':
            $valor = floatval($_POST['param']);
            $conversaoValor = $valor/CONVER_METRO_KM;
            echo "$valor Metro(s) = $conversaoValor Km";
            break;
        case 'km-metro':
            $valor = floatval($_POST['param']);
            $conversaoValor = $valor*CONVER_METRO_KM;
            echo "$valor Km = $conversaoValor Metro(s)";
            break;
        case 'fahrenheit-celsius':
            $valor = floatval($_POST['param']);
            $conversaoValor = ($valor-32)/1.8;
            echo "$valor F = $conversaoValor C"; 
            break;
        case 'celsius-fahrenheit':
            $valor = floatval($_POST['param']);
            $conversaoValor = $valor*1.8+32;
            echo "$valor C = $conversaoValor F";
            break;
    }
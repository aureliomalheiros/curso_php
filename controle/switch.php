<div class="titulo">Switch</div>

<?php   
    $categoria = 'Luxo';

    switch(strtolower($categoria)){
        case 'luxo': 
            $carro = 'Mercedes';
            $preco = 250000;
            break;
        case 'SUV':
        case 'SUV Básico':
            $carro='Renegade';
            $preco= 8000;
            break;
        case 'sedan':
            $carro = 'Etios';
            $preco = 55000;
            break;
        default:
            $carro = 'Mobi';
            $preco = 33000;
    }

    $precoFormatado = number_format($preco, 2, ',', '.');

    echo "<p>Carro: $carro<br>Preço: $precoFormatado</p>";

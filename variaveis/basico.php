<div class="titulo">Variáveis</div>

<?php
    $numeroA = 13;
    echo $numeroA, '<br>';

    var_dump($numeroA);

    echo '<br>';

    $a = 3;
    $b = 16;
    $soma = $a + $b;
    echo $soma, '<br>';

    print "Primeira váriavel $numeroA"; 
    unset($somadosNumeros);
    var_dump($somaDosNumeros);

    $variavel = 10;
    echo '<br>' . $variavel;

    //PHP é uma linguagem de tipagem fraca
    //Linguagens de tipagem fraca é quando vocẽ não precisa adicionar
    //o tipo da variavel

    echo '<p>Regras para variáveis</p>';

    echo 'Sem utilizar $ antes e junto com a variavel';
    echo '<br>', 'Exemplo de variaveis:', '<br>';
    echo '$var - $var2 - $VAR3 - $_VAR_4';
    echo '<br>', 'Variaveis invalidas', '<br>';

    //https://www.php.net/manual/pt_BR/reserved.variables.php
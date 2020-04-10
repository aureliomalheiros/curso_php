<div class="titulo">Desafio Sorteio</div>

<?php
    $nomes = ["Elza", "Rapunzel", "Branca de neve", "Cinderela"];

    $index = array_rand($nomes);
    echo $nomes[$index];
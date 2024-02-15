<?php
    # Ordem da execução do cálculo em expressões:
    # Segue a regra da matemática
    
    # Multplicação > soma/subtração
    echo 1 + 2 * 10; # = 21
    echo "<br>";
    
    # Divisão > Multplicação > soma/subtração
    echo 1 + 2 * 10 / 2; # = 11
    echo "<br>";

    # Parênteses > Divisão > Multplicação
    echo (1 + 2) * 10 / 2; # = 15
    echo "<br>";

    # Aplicando variáveis 1
    $a = 1;
    $b = 2;
    $c = 10;
    echo ($a + $b) * $c / $b; # = 15
    echo "<br>";
    echo ($a + $a) * $b / $c; # = 0.4
    echo "<br>";

    # Aplicando variáveis 2
    $d = $a + $b;
    echo $c * $d; # = 30
?>
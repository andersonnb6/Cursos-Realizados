<?php 
    # Escopo global
    $x = 10;
    echo "$x global <br>";
    
    # Escopo local
    function teste() { 
        $x = 5;
        echo "$x local <br>";
    }
    teste()

    /* 
    
    Escopo global e local não inteferem em suas variáveis. Ou seja, pode trabalhar com variáveis com o mesmo nome que elas não serão afetadas se estiverem em escopos diferentes. 
    
    De outra forma, variáveis globais não são acessadas normalmente dentro de uma função
    
    */
?>
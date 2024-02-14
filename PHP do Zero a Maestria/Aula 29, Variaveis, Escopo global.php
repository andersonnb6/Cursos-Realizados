<?php 
    /* 
        Variáveis em escopo global são aquelas
        que estão fora de funções.

        Normalmente, não é possível acessar 
        variáveis globais de dentro de uma função.
        
        Mas existe maneira de acessar e alterar como mostra abaixo
    */

    # Variável global
    $nome = "Anderson";
    echo "$nome (Escopo Global) <br>";

    # Chamando variável global, em ambiente local
    function chamandoGlobal() {
        global $nome;
        echo "$nome (Escopo Local) <br>";
    }
    chamandoGlobal();

    # Alterando valor da variável global, em ambiente local
    function alterandoGlobal() {
        global $nome;
        $nome = "Sabrina";
        echo "$nome (Escopo Local alterada) <br>";
    }
    alterandoGlobal();
    
    echo "$nome (Escopo Global alterada) <br>";
?>
<?php 
    
    # Declarando arrays
    $nome = ["Anderson", "Sabrina", "Michel"];
    $idade = [30, 32, 13];

    # Imprimir/Acessar todo o array
    print_r($nome); echo "<br><br>";
    
    # Imprimir/Acessar apenas um item do array
    print_r($nome[1]); echo "<br>";
    echo $nome[0]; echo "<br><br>";
    
    
    # Imprimir/Acessar em string
    echo "O indivíduo $nome[0] tem $idade[0] anos."
?>
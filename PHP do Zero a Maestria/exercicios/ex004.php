<?php 
    // Checando numeros float
    
    // Declarando variável
    $num1 = 1.23;
    $num2 = 2.56;
    $num3 = 3.41;

    // Imprimindo
    echo $num1;
    echo "<br>";
    echo $num2;
    echo "<br>";
    echo $num3;
    echo "<br>";

    // Condição para imprimir resultado
    if(is_float($num3)) {
        echo "A variável <strong>num3</strong> com valor $num3 é um float.";
    }
?>
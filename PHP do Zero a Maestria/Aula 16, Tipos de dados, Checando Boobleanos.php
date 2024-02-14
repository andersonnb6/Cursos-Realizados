<?php 
    
    $var = true;
    
    if (is_bool($var)){ // true
        echo 'A variável $var é booleano! <br>';
    }

    if (is_bool(true)){ // true
        echo 'true é booleano! <br>';
    }

    if (is_bool(false)){ // true
        echo 'False é booleano! <br>';
    }

    if (is_bool(0)){ //false pois é inteiro
        echo 'O numero 0 é booleano! <br>';
    }

    if (is_bool(1)){ //false pois é inteiro
        echo 'O numero 1 é booleano! <br>';
    }

?>
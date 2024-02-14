<?php 

    # Variável x recebe 2
    $x = 2;

    # Variável y se torna igual a x, portanto 2.
    $y =& $x;

    # Alterando valor de y
    $y = 5;

    echo "y = $y e x = $x";

    /*
        Dessa forma, as variáveis x e y passam a compartilhar o mesmo ponto na memória. Isso significa, por exemplo, que ao alterar o valor de qualquer uma delas a outra também será alterada.
    */

?>
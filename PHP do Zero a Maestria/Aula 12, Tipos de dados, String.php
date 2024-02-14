<?php 
    /*
        String são sequencias de caracteres (textos)
        São representados sempre entre aspas

        Tanto aspas simples quanto duplas podem ser 
        utilizadas para texto.
    */
    echo 'Texto com aspas simples. <br>';
    echo "Texto com aspas duplas. <br><br>";
    
    /*
        Defina se será aspas simples ou duplas e use em todo o projeto. Isso influenciará na manutenção e uso de aspas dentro do texto.

        Por exemplo, você pode ter aspas simples dentro do texto quando colocar a string entre aspas duplas e vice-versa.
    */
    echo "Utilizando 'aspas simples'. <br>";
    echo 'Utilizando "aspas duplas". <br><br>';

    /*
        SOMENTE aspas DUPLAS interpretam variáveis.
    */
    $num1 = 10;
    echo "O número é igual a $num1"
?>
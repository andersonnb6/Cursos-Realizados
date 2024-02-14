

<?php 
    /* 
        Variáveis em escopo local, dentro de funções, tem
        tem seus valores resetados/apagados após execução 
        da função.
        
        Variável estática é aquela que preserva o valor
        de uma variável após execução da função.
        
    */

    /*
        Função normal, reseta os valores ao terminar.
        Ao executar 3x a função, $num terá sempre o mesmo
        valor (1).
    */
    function semStatic() {
        $num = 0;
        $num++;
        echo "$num sem Static <br>";
    }
    semStatic();
    semStatic();
    semStatic();

    echo "<br>";

    /*
        Função Static, reseta os valores ao terminar.
        Ao executar 3x a função, $num resultará em 3.
    */
    function comStatic() {
        static $num = 0;
        $num++;
        echo "$num com Static <br>";
    }
    comStatic();
    comStatic();
    comStatic();
   
?>












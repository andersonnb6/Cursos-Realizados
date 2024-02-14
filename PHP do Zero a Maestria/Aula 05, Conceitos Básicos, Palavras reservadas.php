<?php 
    /* 
        Palavras reservadas são aquelas que já pertencem a linguagem, não podendo usar em variáveis, por exemplo. São algumas delas:
        echo, insteadof, else, interface, etc.
    */

    /* 
        A função abaixo retornará. Esse erro ocorre pois estamos tentando nomer a função com a palavra echo, que já é reservada da linguagem.
    */     
    function echo() {
        return true
    }
?>
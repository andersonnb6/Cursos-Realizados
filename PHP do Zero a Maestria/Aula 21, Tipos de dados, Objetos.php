<?php 
      
   class Pessoa { # classe é o molde        
        function falar() { # método
            echo "Olá pessoal!";
        }
    }

    # Criando objeto (pessoa) a partir do molde
    $anderson = new Pessoa();

    # Adicionando propriedades ao objeto (pessoa)
    $anderson -> nome = 'Anderson';
    $anderson -> idade = 30;

    # Acessando propriedade do Objeto (pessoa)
    echo $anderson -> nome;
    echo $anderson -> idade;
    echo "<br>";

    # Invocando um método (função) desse objeto
    $anderson -> falar();
?>
<?php 
    $pessoa = [
        'nome' => 'Anderson',
        'idade' => 30,
        'profissao' => 'Estudante',
        'escolaridade' => 'Doutorado'
    ];

    $nome = $pessoa['nome'];
    $idade = $pessoa['idade'];

    if ($idade >= 18) {
        echo "$nome é maior de idade e possui $idade anos.";
    }

    if ($idade < 18) {
        echo "$nome é menor de idade e possui $idade anos.";
    }
?>
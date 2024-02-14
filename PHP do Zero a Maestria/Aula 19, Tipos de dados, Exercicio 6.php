<?php 
    $carro = [
        'marca' => 'Fiat',
        'cor' => 'verde',
        'combustivel' => 'gasolina',
        'blindagem' => true,
        'rodas' => 4
    ];

    $marca = $carro['marca'];
    $cor = $carro['cor'];
    $combustivel = $carro['combustivel'];

    print_r($carro);
    echo "<br><br>";

    echo "O carro é da marca $marca, tem cor $cor e utiliza $combustivel.";
?>
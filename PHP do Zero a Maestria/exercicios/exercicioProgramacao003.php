<?php
    function calcularDesconto($valor, $categoria){
        switch ($categoria) {
            case 'eletrônicos':
                return $valor - $valor*10/100;
                break;
                
            case 'vestuário':
                return $valor - $valor*20/100;
                break;
            
            case 'alimentos':
                return $valor - $valor*5/100;
                break;
            
            default:
                return $valor;
                break;
        }
    }
?>
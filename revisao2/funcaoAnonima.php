<?php
    //exemplo1
    $greet = function($name){
        echo("$name </br>");
    };
    
    $greet('World');
    $greet('PHP');

    //exmeplo2
    $mensagem = "teste";
    $imprimir2 = function($string){
        echo "$string <br>";
    };

    $imprimir2($mensagem);

    //exemplo3
    $array = [50,10,30,25,50];
    $novo_array = array_filter($array, function($valor){
        if($valor <= 25){
            return true;
        }else{
            return false;
        }
    });

    print_r($array);
    echo "<br>";
    print_r($novo_array);

?>
<?php

    include("funcoes2.php");

    $produtos = [
        "produtoA" => 50.0,
        "produtoB" => 150.0,
        "produtoC" => 60.0,
        "produtoD" => 80.0,
        "produtoE" => 120.0,
        "produtoF" => 15.0,
        "produtoG" => 25.0,
        "produtoH" => 35.0,
        "produtoI" => 40.0
    ];        

    $inferior = inferior($produtos);
    $entre = entre($produtos); 
    $superior = superior($produtos);    
    
    foreach($inferior as $elemento){
        echo "preco inferior a R$ 50: R$ $elemento <br>";
    }
    echo "<br>";
    foreach($entre as $elemento){
        echo "preco entre 50 e 100: R$ $elemento <br> ";
    }
    echo "<br>";
    foreach($superior as $elemento){
        echo "preco  superior a 100: R$ $elemento <br>";
    }
        
?>
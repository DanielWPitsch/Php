<?php

    $nome = "   Teste Nome    ";

    echo "Tamanho: " . strlen($nome);
    echo "<br>";

    $nome = trim($nome);
    echo "$nome <br>";
    echo "Tamanho: " . strlen($nome);
    echo "<br>";

    //padrão de 0 para inicio
    $nome2 = substr($nome, 5);
    echo $nome2;
    echo "<br>";

    //onde começa e quantas letras pega
    $nome3 = substr($nome, -4, 4);
    echo $nome3;
    echo "<br>";

    $nome3 = substr($nome, 0, 3);
    echo $nome3;
    echo "<br>";

    echo strtoupper($nome);
    echo "<br>";

    echo strtolower($nome);
    echo "<br>";

    //posicão de onde está o segundo parametro, no caso aqui um espaço
    echo strpos($nome, " ");
    echo "<br>";

    //string vira array
    var_dump(str_split($nome));
    echo "<br>";
    
    echo str_shuffle($nome);
    echo "<br>";
    
    echo htmlspecialchars("<b>Teste</b>"); 
?>
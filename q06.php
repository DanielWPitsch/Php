<?php
    
    $pessoas = [
        "João" => 35,
        "Maria" => 22,
        "Pedro" => 88,
        "José" => 55
    ];
    $somaIdades = 0;

    foreach($pessoas as $nome => $idade){
        echo "$nome <br>";
        $somaIdades +=$idade;
    }
    $media=$somaIdades/count($pessoas);
    echo "A soma das idades eh: $somaIdades e a media das idades eh: $media <br>";
?>
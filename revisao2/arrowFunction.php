<?php

    $n1 = 2;
    $n2 = 2;

    $calcular_media = fn($n1,$n2) => ($n1+$n2)/2;
    $situacao = fn($media) => $media >= 7 ? "Aprovado" : ($media >= 4 ? "Recuperação" : "Reprovado");

    function resultado($calcular_media, $situacao, $n1, $n2){
        $media = $calcular_media($n1,$n2);
        $resultado = $situacao($media);
        echo "Situação: $resultado <br>";
    }

    resultado($calcular_media, $situacao, $n1, $n2);    
?>
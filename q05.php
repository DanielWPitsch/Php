<?php
    $notas = [10, 5, 6.5, 8.5, 9, 5.5, 4.5, 8, 7.5];
    $somaNotas = $notasMaiorSete = 0;

    for ($i = 0; $i < count($notas); $i++){
        $somaNotas =+ $notas[$i];
        if ($notas[$i] >=7){
            $notasMaiorSete+=1;
        }
    }

    $media=$somaNotas/count($notas);
    echo "A soma das notas eh: $somaNotas <br>";
    echo "A media das notas eh: $media <br>";
    echo "As notas maior que 7 são: $notasMaiorSete";
?>
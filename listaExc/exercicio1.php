<?php
    $valor = (float) $_POST["valor"];
    $valor_vista = $valor * 0.8;
    $descontos = [0.97, 0.94, 0.91, 0.88, 0.85, 0.82, 0.79, 0.76, 0.73, 0.70];
    $parcelas = [6, 12, 18, 24, 30, 36, 42, 48, 52, 60];
    $valor_parcela = [0, 0, 0, 0,0, 0, 0, 0, 0,0];
    $tabela2 = []; 
    $cabecalho = ["Quantidade de parcelas", "Valor Final", "Valor da parcela"];
    
    array_push($tabela2, $cabecalho);
    for($i = 0; $i < 10; $i++){
        $descontos[$i] = number_format(($descontos[$i] * $valor), 2, '.', '');
        $valor_parcela[$i] = number_format(($descontos[$i] / $parcelas[$i]), 2, '.', '');
        array_push($tabela2, [$parcelas[$i], $descontos[$i], $valor_parcela[$i]]);
    }

    echo "Valor do carro que você escolheu, à vista tem 20% de desconto e fica: R$ $valor_vista. <br><br>";
    $tabela = '<table border="1">';
    $tabela .='<tbody>';
    foreach ($tabela2 as $array => $atributos){
        $tabela .= '<tr>'; 
        foreach($atributos as $atributo){
            $tabela .= "<td>$atributo</td>";
        }
        $tabela .= '</tr>'; 
    }
    $tabela .='</tbody>'; 
    $tabela .= '</table>';
    echo $tabela; 
?>
<?php
    $valor = (float) $_POST["valor"];
    $valor_vista = $valor * 0.8;

    $tabela2 = [  
        1 => [6, number_format(($valor*0.97), 2, '.', ''), number_format((($valor*0.97)/6), 2, '.', '')],
        2 => [12, number_format(($valor*0.94), 2, '.', ''), number_format((($valor*0.94)/12), 2, '.', '')],
        3 => [18, number_format(($valor*0.91), 2, '.', ''), number_format((($valor*0.91)/18), 2, '.', '')],
        4 => [24, number_format(($valor*0.88), 2, '.', ''), number_format((($valor*0.88)/24), 2, '.', '')],
        5 => [30, number_format(($valor*0.85), 2, '.', ''), number_format((($valor*0.85)/30), 2, '.', '')],
        6 => [36, number_format(($valor*0.82), 2, '.', ''), number_format((($valor*0.82)/36), 2, '.', '')],
        7 => [42, number_format(($valor*0.79), 2, '.', ''), number_format((($valor*0.79)/42), 2, '.', '')],
        8 => [48, number_format(($valor*0.76), 2, '.', ''), number_format((($valor*0.76)/48), 2, '.', '')],
        9 => [52, number_format(($valor*0.73), 2, '.', ''), number_format((($valor*0.73)/52), 2, '.', '')],
        10 => [60, number_format(($valor*0.70), 2, '.', ''), number_format((($valor*0.70)/60), 2, '.', '')]
    ];

    echo "Valor do carro que você escolheu, à vista tem 20% de desconto e fica: R$ $valor_vista. <br><br>";
    $tabela = '<table border="1">';
    $tabela .='<tbody>';
    $tabela .='<thead>';
    $tabela .= '<tr>';
    $tabela .= '<th>Quantidade de parcelas</th>'; 
    $tabela .= '<th>Valor final</th>';
    $tabela .= '<th>Valor da parcela</th>';
    $tabela .= '</tr>';
    $tabela .='</thead>';
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
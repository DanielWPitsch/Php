<?php
    $codigo = $_POST["codigo"]; 
    $quantidade = (float) $_POST["quantidade"];
    $preco_total = 0.0;
    $tabela2 = [];

    if($codigo > 0 and $codigo < 11){
        $preco_uni = 10.0;
        $preco_total = $quantidade * 10.0;
    }else if($codigo > 10 and $codigo < 21){
        $preco_uni = 15.0;
        $preco_total = $quantidade * 15.0;
    }else if($codigo > 20 and $codigo < 31){
        $preco_uni = 20.0;
        $preco_total = $quantidade * 20.0;
    }else if($codigo > 30 and $codigo < 41){
        $preco_uni = 30.0;
        $preco_total = $quantidade * 30.0;
    }else{
        echo "código inválido!";
    }

    if($preco_total < 251){
        $desconto = $preco_total * 5 / 100;
    }else if($preco_total < 500){
        $desconto = $preco_total * 10 / 100;
    }else if($preco_total >499){
        $desconto = $preco_total * 15 / 100;
    }else{
        echo "valor inválido!";
    }

    array_push($tabela2, ["Preço Unitário", $preco_uni]);
    array_push($tabela2, ["Preço Total", $preco_total]);
    array_push($tabela2, ["Desconto", $desconto]);
    array_push($tabela2, ["Preço Final", $preco_total - $desconto]);

    $tabela = '<table border="1">';
    $tabela .='<tbody>';
    $tabela .='<thead align= "center">';
    $tabela .='<tr>';
    $tabela .='<th> Dados da Compra </th> ';
    $tabela .='<tr>';
    $tabela .='</head>';
    foreach($tabela2 as $array){
        $tabela .= '<tr>';
        $i = 1;
        foreach($array as $elemento){
            $i = $i % 2;
            if( $i == 0){
                $elemento = number_format(($elemento), 2, '.', '');
                $tabela .= "<td>$elemento</td>";
                
            }else{
                $tabela .= "<td>$elemento</td>";
            }
            $i += 1;
        }
        $tabela .= '</tr>';
    }
    $tabela .='</tbody>'; 
    $tabela .= '</table>';
    echo $tabela;
    
?>
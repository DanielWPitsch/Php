<?php
    $codigo = $_POST["codigo"]; 
    $quantidade = (float) $_POST["quantidade"];
    $preco_total = 0.0;

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

    $preco_final = number_format(($preco_total - $desconto), 2, '.', '');
    $desconto = number_format($desconto, 2, '.', '');
    $preco_total = number_format($preco_total, 2, '.', '');
    $preco_uni = number_format($preco_uni, 2, '.', '');

    $tabela = '<table border="1">';
    $tabela .='<tbody>';
    $tabela .='<thead>';
    $tabela .= '<tr>';
    $tabela .= '<th colspan="2"> Dados da Compra </th> '; 
    $tabela .= '</tr>';
    $tabela .='</thead>';
    $tabela .='<tbody>';
    $tabela .= '<tr>';
    $tabela .= "<td>Preço unitário</td>";
    $tabela .= "<td>R$ $preco_uni</td>";
    $tabela .= '</tr>';
    $tabela .= '<tr>';
    $tabela .= "<td>Preço Total</td>";
    $tabela .= "<td>R$ $preco_total</td>";
    $tabela .= '</tr>'; 
    $tabela .= '<tr>';
    $tabela .= "<td>Desconto</td>";
    $tabela .= "<td>R$ $desconto</td>";
    $tabela .= '</tr>'; 
    $tabela .= '<tr>';
    $tabela .= "<td>Preço Final</td>";
    $tabela .= "<td>R$ $preco_final</td>";
    $tabela .= '</tr>'; 
    $tabela .='</tbody>'; 
    $tabela .= '</table>';
    echo $tabela;
?>
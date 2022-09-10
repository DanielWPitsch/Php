<?php
    $livros = [
        "Introdução a Linguagem C" => ["qtdePaginas"=>350, "preco"=>150],
         "Introdução a Linguagem Python" => ["qtdePaginas"=>300, "preco"=>99.50],
         "Entendendo PHP" => ["qtdePaginas"=>290, "preco"=>105.90],
         "Introdução ao SQL" => ["qtdePaginas"=>150, "preco"=>85.90],
    ];
    $somaPrecos = $maiorPreco = 0;
    $maiorPrecoString="nenhum";

    foreach($livros as $nome => $informacoes){
        echo "$nome <br>";
        $somaPrecos+=$livros[$nome]["preco"];
        if($livros[$nome]["preco"] > $maiorPreco){
            $maiorPreco = $livros[$nome]["preco"];
            $maiorPrecoString = $nome;
        }
    }
    echo "A soma dos precos é: $somaPrecos <br>";
    echo "O livro com maior preço é: $maiorPrecoString <br>";
?>
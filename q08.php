<?php
    $turma = [
        "A" => [10,8,6],
        "B" => [5,3,8],
        "C" => [10,10,10],
        "D" => [8,6,3],
        "E" => [9,9,9],
        "F" => [2,3,5]
    ];
    $somaTodasNotas= $alunosAprovados = $alunoMaiorMedia = 0;
    $alunoString= "nenhum";

    foreach($turma as $alunos => $notas){
        $somaNotas=0;
        foreach($notas as $array ) {
            $somaNotas+=$array;
            $somaTodasNotas+=$array;
            if($array >=7){
                $alunosAprovados++;
            }
            
        }
        $media=$somaNotas/3;
        if($media > $alunoMaiorMedia){
            $alunoMaiorMedia = $media;
            $alunoString= $alunos;
        }
        echo "A media do aluno $alunos é $media <br>";
    }
    $quantidadeNotas=count($turma)*3;
    $mediaGeral=$somaTodasNotas/$quantidadeNotas;
    echo "A media da turma é: $mediaGeral <br>";
    echo "A quantidade de alunos que passou por média é: $alunosAprovados <br>";
    echo "O aluno com maior media é: $alunoString";
?>
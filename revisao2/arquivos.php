<?php

    //abrindo arquivo com append
    $fluxo = fopen("teste.txt", "a");
    fwrite($fluxo, "Palavra 1\n");
    fclose($fluxo);

    //lendo todo o arquivo
    if(file_exists("teste.txt")){
        $fluxo = fopen("teste.txt", "r");
        echo fread($fluxo, filesize("teste.txt"));
        fclose($fluxo);
    }else{
        echo "O Arquivo não existe! <br>";
    }

    //imprimindo até o fim do arquivo quebrando linha
    $fluxo = fopen("teste.txt", "r");
    while(!feof($fluxo)){
        echo "<br>" . fgets($fluxo);
        echo "<br>";
    }
    fclose($fluxo);

    //contando a quantidade de linhas no arquivo
    $cont = 0;
    $fluxo = fopen("teste.txt", "r");
    while(!feof($fluxo)){
        if(fgetc($fluxo) == "\n"){
            $cont++;
        }
    }
    fclose($fluxo);
    echo "Qtde linhas no arquivo: $cont <br>";

?>
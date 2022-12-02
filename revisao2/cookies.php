<?php

    //criar
    setcookie("nome", "nome teste", time()+60);

    //acessar
    if(isset($_COOKIE["nome"])){
        echo $_COOKIE["nome"];
    }else{
        echo "Não existe existe essa chave no cookie!";
    }
    
    //deletar
    setcookie("nome", "nome teste", time()-60);

?>
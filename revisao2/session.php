<?php

    $_SESSION["name"] = "Thiago";
    $_SESSION["email"] = "thiago@email.com";
    
    //criando session
    session_start();

    //acessando session
    echo isset($_SESSION["name"]) ? $_SESSION["name"] : "Não existe session para esse nome!";
    echo "<br>";

    if(isset($_SESSION["email"])){
        echo $_SESSION["email"];
    }else{
        echo "Não existe session para esse email!";
    }

    //deletar session
    session_destroy();
?>






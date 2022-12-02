<?php
    session_start();
    $login = "daniel";
    $senha = "123";
    $senha2 = $_POST["senha"];
    $login2 = $_POST["nome"];
    $_SESSION['erro'] = "";

    echo "login: $login e senha: $senha <br>";
    echo "login: $login2 e senha: $senha2 <br>";
    if( $_POST["nome"] == $login AND $_POST["senha"] == $senha){
        $_SESSION['logou'] = 1;
        header('location: login.php');
    }else{
        $_SESSION['erro'] = 1;
        header('location: form.php');
    }

?>
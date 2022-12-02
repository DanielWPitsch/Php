<?php
    session_start();
    if($_SESSION['logou'] == 1){
        echo("Deu certo!");
    }else{
        $_SESSION['erro'] = 2;
        header('location: index.php');
    }

    session_destroy();
?>
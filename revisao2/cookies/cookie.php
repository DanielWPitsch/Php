<?php
    setcookie("nome", $_POST["nome"] , time()+3600);
    setcookie("idade", $_POST["idade"], time()+3600);

    header('location: certo.php');
?>
<?php
    $nome = $_POST["nome"];
    $matricula = (int) $_POST["mat"];
    $nota1 = (float) $_POST["nota1"];
    $nota2 = (float) $_POST["nota2"];

    $media = ($nota1+$nota2)/2;

    echo "<b>Nome</b>: $nome, Matricula: $matricula<br>";
    echo "Sua primeira nota: $nota1, sua segunda nota: $nota2 e sua média: $media";
?>
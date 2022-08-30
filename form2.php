<?php
    $salario = (float) $_GET["salario"];
    $vtv = (float) $_GET["vtv"];

    $salario_total= $salario+($vtv*4/100);

    echo "<b>Salario</b>: $salario, <br> <b>Valor total de vendas</b>: $vtv<br>";
    echo "<b>Salario Total</b>: $salario_total";
?>
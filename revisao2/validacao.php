<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
</head>
<body>
    <?php 
    
        include_once "./html/header.html";

        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $idade = $_POST["idade"];
        $peso = $_POST["peso"];
    
        
        if(!filter_var($idade, FILTER_VALIDATE_INT)){
            header("location: erro.php?erro=Informe uma idade válida!");
        }
    
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            header("location: erro.php?erro=Informe uma email válido!");
        }
    
        if(!filter_var($peso, FILTER_VALIDATE_FLOAT)){
            header("location: erro.php?erro=Informe uma email válido!");
        }
    
    ?>
    <main>
        <h2>Dados Digitados</h2>
        <p><strong>Nome</strong> <?= $nome ?></p>
        <p><strong>Email</strong> <?= $email ?></p>
        <p><strong>Idade</strong> <?= $idade ?></p>
        <p><strong>Email</strong> <?= $peso ?></p>
    </main>
    <?php include_once "./html/footer.html" ?>
</body>
</html>
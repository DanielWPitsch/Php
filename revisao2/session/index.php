<?php
    session_start();
?>
<html>
<body>
    <form action="form.php" method="POST">
        <label for=nome>Login: </label>
        <input type="text" name="nome" id="nome"><br><br>
        <label for="senha">Senha: </label>
        <input type="text" name="senha" id="senha"><br><br>
        <button> Logar </button>
    </form>
    
    <?php
        if(isset($_SESSION["erro"])){
            if($_SESSION["erro"] == 1){
                echo "Usuário ou senha incorreto";
            }else if($_SESSION["erro"] == 2){
                echo "fazer login";
            }else{
                echo "Aconteceu algum erro";
            }
        }
    ?>
</body>
</html>
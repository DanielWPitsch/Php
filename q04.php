<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $lista=[10.50, 50, 35, 58, 65, 99.9, 105, 305, 2.50];
        $soma=0;

        for ($i=0;$i<9;$i++){
            if($i==0){
                $maior=$lista[$i];
                $menor=$lista[$i];
            }
            $soma += $lista[$i];
            if($lista[$i] > $maior){
                $maior=$lista[$i];
            }
            if($lista[$i] < $menor){
                $menor=$lista[$i];
            }

        }
        $media=$soma/9;
        echo "A soma é: $soma <br> A media é: $media <br>";
        echo "O maior numero é: $maior <br> O menor numero é: $menor<br>";
    ?>
</body>
</html>
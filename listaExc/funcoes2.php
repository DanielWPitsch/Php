<?php
    #funcoes
    #A quantidade de produtos com o preço inferior a R$ 50,00
    #O nome dos produtos com preço entre R$ 50,00 e R$ 100,00
    #A média dos preços dos produtos com preço superior a R$ 100,00

    function inferior($produtos) {
        $inferior = [];
        foreach($produtos as $valor){
            if($valor < 50){
                array_push($inferior, $valor);
            }
        }   
        return $inferior;
    }

    function entre($produtos) {
        $entre = [];
        foreach($produtos as $valor){
            if($valor > 49 and $valor < 100){
                array_push($entre, $valor);
            }
        }   
        return $entre;
    }
    
    function superior($produtos) {
        $superior = [];
        foreach($produtos as $valor){
            if($valor > 100){
                array_push($superior, $valor);
            }
        }   
        return $superior;
    }

?>
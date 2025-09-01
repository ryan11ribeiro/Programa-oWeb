<?php

    function tabuada($num) {
        $resultado = "";

        if($num > 0 ){

            for ($i = 1; $i <= 10; $i ++){

                $valor = $num * $i;


                $resultado .= " $num * $i = $valor <br>";
            }
            
        } else{

            echo " O numero digitado deve ser maior que zero!";
        } 

        return $resultado;
    }

    $numero = $_POST['numero'];

    $arquivo = fopen("tabuada.txt", "w");

    fwrite($arquivo,tabuada($numero));

    echo "Arquivo gerado \n <br>";

    $arquivo = fopen("tabuada.txt", "r");
    while (!feof($arquivo)){
        $linha =fgets($arquivo);
        echo "$linha \n";
    }


        

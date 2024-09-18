<?php

    function L_nome($nom){

        $nomes = array ("ailton","bonifacio","artico","anne","ambrosio");
        $encontrado = false;

        foreach ($nomes as $nome){

            if ($nome == $nom) {
                $encontrado = true;

                break;          
            }
        
        }
        if($encontrado == true){
            echo " O nome está na lista.";
        }
        else{
            echo "O nome não está na lista ";
        }
    }

    $nome = $_POST['nome'];

    echo L_nome($nome);
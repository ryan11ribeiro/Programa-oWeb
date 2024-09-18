<?php

    $f1 = $_POST['f1'];
    $f2 = $_POST['f2'];
    $f3 = $_POST['f3'];

    $arquivo = fopen("arquivo.txt", "w");

    fwrite($arquivo, ("$f1 \n $f2 \n $f3 \n "));

    echo "Arquivo gerado \n <br>";

    $arquivo = fopen("arquivo.txt", "r");
    while (!feof($arquivo)){
        $linha =fgets($arquivo);
        echo "$linha \n";
    }
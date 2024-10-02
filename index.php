<?php

    include_once("template/topo.php");
    include_once("template/menu.php");
    if (empty($_SERVER['QUERY_STRING'])) {
        $var = "conteudo.php";
        include_once($var);
    }else {
        $pg = $_GET["pg"];
        include_once("$pg.php");
    }

    include_once("template/rodape.php");

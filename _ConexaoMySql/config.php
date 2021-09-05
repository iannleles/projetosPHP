<?php

define("SERVIDOR", "localhost");
define("USUARIO", "root");
define("SENHA", "");
define("BANCO", "bandas");

function BDConnect($servidor, $usuario, $senha, $bd) {
    if ($bd == "") {
        $conn = mysqli_connect($servidor, $usuario, $senha);
    } else {
        $conn = mysqli_connect($servidor, $usuario, $senha, $bd);
    }
    if (!$conn) {
        die("Falha ao conectar com o servidor: " . mysqli_connect_error());
    } 
    return $conn;
}



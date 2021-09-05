<?php

include "./config.php";

$conn = BDConnect(SERVIDOR, USUARIO, SENHA, "");

$sql = 'CREATE DATABASE bandas';

if (mysqli_query($conn, $sql)) {
    echo "Banco de dados 'bandas' criado com sucesso\n";
} else {
    echo 'Erro criando banco de dados: ' . mysqli_error() . "\n";
}
?>


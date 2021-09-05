<?php

include "./config.php";

$conn = BDConnect(SERVIDOR, USUARIO, SENHA, "bandas");

$sql = "CREATE TABLE tb_bandas ("
        . "id        INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, "
        . "nome      VARCHAR(30) NOT NULL, "
        . "descricao VARCHAR(50) NOT NULL, "
        . "email     VARCHAR(200)"
        . ")";

echo "<br>" . $sql . "<br>";


if (mysqli_query($conn, $sql)) {
    echo "Tabela 'tb_bandas' criado com sucesso\n";
} else {
    echo 'Erro criando tabela: ' . $conn->error . "\n";
}


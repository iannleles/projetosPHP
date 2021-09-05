<?php

$nome = $_POST['nome'];
$n1 = $_POST['nota1'];
$n2 = $_POST['nota2'];
$media = ($n1 + $n2) / 2;


echo "Olá $nome, você teve média: $media ";



?>
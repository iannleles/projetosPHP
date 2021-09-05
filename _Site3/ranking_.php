<?php
    include_once ("conexao.php");
    $usuario = $_POST['usuario'];
    $pontos = $_POST['pontos'];
    $sql = ("UPDATE usuarios SET pontos ='$pontos' WHERE usuario='$usuario'");
    $salvar = mysqli_query($conexao,$sql);
    $linhas = mysqli_affected_rows($conexao);
    include_once("ranking.php");
?>
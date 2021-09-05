<?php

include_once("conexao.php");
$nome = $_POST['nome'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$email = $_POST['email'];
$data_nasc = $_POST ['data_nasc'];
$sql = "insert into usuarios (nome,usuario,senha,email,data_nasc) values ('$nome','$usuario','$senha','$email','$data_nasc')";
$salvar = mysqli_query($conexao,$sql);
$linhas = mysqli_affected_rows($conexao);
mysqli_close($conexao);

?>
               
                <?php
                
                if($linhas == 1){
                        include_once("confirmacao.php");
                    } else{
                        include_once("erro.php");
                    }
                
                ?>

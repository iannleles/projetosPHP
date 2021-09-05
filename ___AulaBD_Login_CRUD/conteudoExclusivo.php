<?php
session_start();
include "conexao.php";
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Sistema de Login e Senha Criptografados</title>
        <link href="css/style.css" rel="stylesheet" />
    </head>
    <body>
        <div id="conteudo">
            <?php
            if ($_SESSION['login']) {
                ?>
                <h1><span class="destaca"><?php echo $_SESSION['nome_usuario']; ?></span>, seja bem-vindo ao Conteúdo Exclusivo</h1>
                <div class="borda"></div>
                <div class="logout">
                    <p class="sairSistema"><a href="logout.php">Clique aqui</a> para sair do sistema</p>
                </div>
                <div class="clear"></div>

                <?php include './conteudo.php' ?>

                <div class="borda"></div>
            <?php } else { ?>
                <h1>Sistema de login e senha criptografados</h1>
                <div class="borda"></div>
                <p>Proibido o acesso por esse meio. Volte e informe os dados corretamente!</p>
                <p><a href="index.php">Página inicial</a></p>
            <?php } ?>
        </div>
    </body>
</html>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login</title>
        <link rel="stylesheet" href="css/estilo.css">
    </head>
    <body>
        <div class="container">
            <section>
                <br><br><hr>
                <h1>Login</h1>
                <hr><br>
                    <form method="post" action="consulta.php">
                    <div form>
                        Usuário: <input type="text" name="usuario" class="campo" maxlength="20" required ><br>
                        Senha: <input type="password" name="senha" class="campo" maxlength="20" required ><br>
                        <input type="submit" value="Logar" class="btn">
                        <a href="cadastro.php" class="btn">Cadastrar</a>
                    </div>
                    </form>
            </section>
        </div>
    </body>
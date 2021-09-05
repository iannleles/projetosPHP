<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login</title>
        <link rel="stylesheet" href="_css/estilo.css">
    </head>
    <body>
        <div class="container">
            <section>
                <br><br><hr>
                <h1>Cadastro</h1>
                <hr><br>
                    <form method="post" action="processa.php">
                    <div form>
                        Nome: <input type="text" name="nome" class="campo" maxlength="40" required autofocus><br>
                        Usuário: <input type="text" name="usuario" class="campo" maxlength="20" required ><br>
                        Senha: <input type="password" name="senha" class="campo" maxlength="20" required ><br>
                        Email: <input type="email" name="email" class="campo" maxlength="50" required ><br>
                        Data de Nascimento: <input type="date" name="data_nasc" class="campo" required ><br>

                        <input type="submit" value="Cadastrar" class="btn">
                        <a href="login.php">Logar</a>
                    </div>
                    </form>
            </section>
        </div>
    </body>
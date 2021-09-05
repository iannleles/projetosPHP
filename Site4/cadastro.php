<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
</head>
<style>
    body {

        background-image: url("img/final.png");

        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
    }

    .form {

        padding: 190px 0px;

    }

    .form1 {
        background-color: lightsalmon;
    }

    .font {
        font-size: 30px;
        color: white;
        padding: 0px 0px 0px 183px;
    }
</style>

<body>
    <div class="form">
        <div class="modal-dialog" role="document">
            <div class="modal-content form1">
                <form method="post" action="processa.php">
                    <label class="font"><strong>Cadastro</strong></label>
                    <div class="form-group col-md-12">
                        <input type="text" name="nome" placeholder="Nome" class="form-control" maxlength="40" required autofocus>
                    </div>
                    <div class="form-group col-md-12">
                        <input type="text" name="usuario" placeholder="Usuario" class="form-control" maxlength="20" required autofocus>
                    </div>
                    <div class="form-group col-md-12">
                        <input type="password" name="senha" placeholder="Senha" class="form-control" maxlength="20" required autofocus>
                    </div>
                    <div class="form-group col-md-12">
                        <input type="email" name="email" placeholder="E-mail" class="form-control" maxlength="50" required autofocus>
                    </div>
                    <div class="form-group col-md-12">
                        <input type="date" class="form-control" name="data_nasc" placeholder="Data de nascimento" required>
                    </div>
                    <div class="form-group" style="text-align:center">
                        <div class="col-sm-12">
                            <a href="login.php" class="btn btn-primary">Logar</a>
                            <input type="submit" value="Cadastrar" class="btn btn-primary"></input>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
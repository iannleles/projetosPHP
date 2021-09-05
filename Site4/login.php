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
        padding: 0px 0px 0px 198px;
    }
</style>

<body>
    <div class="imgs">
        <div class="form">

            <div class="modal-dialog" role="document">
                <div class="modal-content form1">
                    <form method="post" action="consulta.php">
                        <label for="usuario"><strong class="font">Login</strong></label>
                        <div class="form-group col-md-12">
                            <input type="text" class="form-control" name="usuario" placeholder="Usuario" maxlength="20" required>
                        </div>
                        <div class="form-group col-md-12">
                            <input type="password" class="form-control" name="senha" placeholder="Senha" maxlength="20" required>
                        </div>
                        <div class="form-group" style="text-align:center">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary" style=color:floralwhite>Logar</button>
                                <a href="cadastro.php" class="btn btn-primary" style=color:floralwhite>Cadastrar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>
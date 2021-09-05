<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>
        Ranking - Ninja Go
    </title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <header>
        <div class="caixa">
            <h1><img src="img/logo.png" alt="Logo Ninja Go"></h1>
            <nav>

                <ul>
                    <li><a href="jogo.html">Jogo</a></li>
                    <li><a href="integrantes.html">Integrantes</a></li>
                    <li><a href="login.php">Ranking</a></li>
                </ul>
            </nav>
        </div>        
    </header>
    <main>
        <form method="post" action="ranking_.php">
            <label for="pontos">Usuário</label>
            <input type="text" name="usuario" class="input-padrao">
            
            <label for="pontos">Pontos</label>
            <input type="number" name="pontos" class="input-padrao">



            <!-- <fieldset>
                <legend>Qual o seu personagem favorito?</legend>
                <label for="radio-email"><input type="radio" name="personagem" value="1"
                        id="radio-personagem1">Personagem
                    1</label>
                <label for="radio-email"><input type="radio" name="personagem" value="2"
                        id="radio-personagem2">Personagem
                    2</label>
                <label for="radio-email"><input type="radio" name="personagem" value="3"
                        id="radio-personagem3">Personagem
                    3</label>
            </fieldset> -->


            <input type="submit" value="Enviar" class="enviar">

        </form>

        <?php
            include("conexao.php");            
            $consulta = "SELECT usuario, pontos FROM usuarios";                     
            $con = $conexao->query($consulta) or die ($mysqli->error);
            ?>
        <table>
            <thead>
                <tr>
                    <th>Usuario</th>                    
                    <th>Pontos</th>                    
                </tr>
            </thead>
            <?php while($dado = $con->fetch_array()){ ?>
            <tbody>
                <tr>
                <td><?php echo $dado["usuario"]; ?></td>                
                <td><?php echo $dado["pontos"]; ?></td>
                </tr>                
            </tbody>
            <?php }?>
        </table>
        
    </main>

    <footer>

        <img src="./img/personagem1.png" alt="">
        <p class="copyright">&copy; Copyrigth Ninja Go - 2020</p>

    </footer>

</body>

</html>
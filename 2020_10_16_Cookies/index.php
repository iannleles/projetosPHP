<!DOCTYPE html>
<html>
    <head>
        <style type="text/css">
            * {font-size:32px; }
        </style>
        <meta charset="UTF-8">
        <title>Votação Banda</title>
    </head>
    <body>
        <?php
        if (($_SERVER["REQUEST_METHOD"] == "POST") || (isset($_COOKIE["voto"]))) {
            if (!isset($_COOKIE["voto"])) {
                setcookie('voto', 'true', (time() + (2 * 24 * 3600)));
                $voto = $_POST["musica"];
                echo "Você votou em: $voto <br>";
                echo "Obrigado pelo seu voto";
            } else {
                echo "Você não pode votar mais de uma vez!";
            }
        } else {
            ?>
            <form method="post">
                Vote no seu estilo de música preferido:<br/>
                <br/>
                <label>Forró</label><input type="radio" name="musica" value="forro" /><br />
                <label>Lambada</label><input type="radio" name="musica" value="lambada" /><br />
                <label>Pagode</label><input type="radio" name="musica" value="Pagode" /><br />
                <label>Rock</label><input type="radio" name="musica" value="rock" /><br />
                <label>Sertanejo</label><input type="radio" name="musica" value="sertanejo" /><br />
                <label>Samba</label><input type="radio" name="musica" value="samba" /><br />
                <input type="submit" value="Votar"/>
            </form>
        <?php } ?>
    </body>
</html>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Teste - Condicionais</title>
    </head>
    <body>
        <a href="lacos1.php">Teste Laços </a>
        <hr>
        <?php
            $a = 8;
            $b = 6;
            
            if($a==$b){
                echo 'As variáveis $a e $b são iguais';
            }
            elseif(($a+$b) == 11){
                echo 'A soma de $a com $b é igual a 11';
            }
            else{
                echo "As variávis são diferentes ";
            }
          echo "<BR> <HR>";
            $mes  = 3;
            
           switch ($mes) {
    case 1:
        echo "Janeiro";
        break;
    case 2:
        echo "Fevereiro";
        break;
    case 3:
        echo "Março";
        break;
    default:
        echo "Mes inexistente";
            }
        ?>
    </body>
</html>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $NomeDoAluno = "Iann Marcos";
        $nota1 = 10;
        $nota2 = 8;
        $nota3 = 6;
        
        $med = ($nota1+$nota2+$nota3)/ 3;
        echo "<hr>";
        echo "Nome: " . $NomeDoAluno;
        echo "<br>";
        echo "Notas: $nota1, $nota2, $nota3<br>";
        
        echo "Media: $med ";
        echo "<hr>";
        ?>
    </body>
</html>

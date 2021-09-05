<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        echo "teste de Arrays... SEXTA! <hr>";
        
     
        
        $dados = array("Santos", "Iann Marcos Leles", 23, 10 , 8 , 6);
                
       // print_r($dados);
        
        echo "Nome: " . $dados[1] . $dados[0] . "<BR>";
        
        $media = ($dados[3] + $dados[4] + $dados [5]) / 4;
        
        echo "Media: " . $media ;
        
        
        $pessoa = array();
        
        $pessoa ["nome"] = "João Wictor";
        $pessoa ["sobrenome"] = "Leles Santos";
        $pessoa["altura"] = 1.77;
        
        echo "<hr>";
        echo "<br>Nome: " . $pessoa["nome"] ." ". $pessoa["sobrenome"];
        echo "<br>Altura: " . $pessoa["altura"];
        
        
        ?>
        <hr>
       <a href="Formulario.html"> Abrir o FORMULÁRIO para calculo de IMC </a>
       <hr>
    </body>
</html>

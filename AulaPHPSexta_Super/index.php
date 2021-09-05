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
        echo "Nome do servidor: " . $_SERVER['SERVER_NAME'] . "<br>";
        echo "Informação do host: " . $_SERVER['HTTP_HOST'] . "<br>";
        echo "Informações do navegador/ SO: " . $_SERVER['HTTP_USER_AGENT'] . "<br>";
        echo "Nome do arquivo: " . $_SERVER['SCRIPT_NAME'] . "<br>";
        echo "Caminho do site: " . $_SERVER['CONTEXT_DOCUMENT_ROOT'];
        
        //echo "<hr>";
//        print_r($_SERVER); 
        //echo"<hr>";
        //echo '<hr>= $_SERVER<hr>';
        
        //foreach ($_SERVER as $key => $value) {            
          //  echo $key . ": " . $value . "<br><br>";            
       // }
        echo "<BR>";
        ?>        
        <a href="form.html">Exemplo de FORMULÁRIO</a>
        <br>
        <br>        
        <a href="upload.html">Exemplo de FORMULÁRIO de UPLOAD</a>
    </body>
</html>

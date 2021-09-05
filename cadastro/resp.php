<?php

    $nome  = $_POST["Nome"];
    $idade = $_POST["Idade"];    
    $sexo  = $_POST["Sexo"];    
    
    echo "Olá " . $nome . "<br>";
    echo "Parabéns, de acordo com sua idade: " . $idade . "<br>";
    echo "Você está matriculado(a) na categoria: ";

    if ($sexo == "masculino") {

        if ($idade <= 14){
            echo "Sem categoria";

        }
        
        else if ($idade <=18 ) {
            echo "Juvenil";
        
        }

        else {
            echo "Adulto";
        
        }
    }
    else {

        if ($idade <= 14){
            echo "Sem categoria";

        } 
        
        else if ($idade <=16 ) {
            echo "Juvenil A";
        
        }

        else if ($idade <=18 ) {
            echo "Juvenil B";

        }
        else {
            
            echo "Adulta";
        
        }

    }
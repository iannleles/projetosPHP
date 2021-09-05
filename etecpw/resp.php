<?php

    $pessoa = array();
    $pessoa["n"] = $_POST["Nome"];
    $pessoa["i"] = $_POST["Idade"];    
    $pessoa["s"] = $_POST["Sexo"];    
    
    echo "Olá" . $pessoa["n"]. "<br>";
    echo "Parabéns, de acordo com sua idade:" . $pessoa["i"] . "<br>";
    echo "Você está matriculado(a) na categoria";

    if ($pessoa["s"] == "masculino") {

        if ($pessoa["i"] <= 14){
            echo "Sem categoria";

        } 
        
        else if ($pessoa["i"] <=18 ) {
            echo "Juvenil";
        
        }

        else {
            echo "Adulto";
        
        }

    }
    else {

        if ($pessoa["i"] <= 14){
            echo "Sem categoria";

        } 
        
        else if ($pessoa["i"] <=16 ) {
            echo "Juvenil A";
        
        }

        else if ($pessoa["i"] <=18 ) {
            echo "Juvenil B";

        }
        else {
            
            echo "Adulto!";
        
        }

    }



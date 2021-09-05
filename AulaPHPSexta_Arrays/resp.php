<?php

    $pessoa = array();
    $pessoa["n"] = $_POST["nome"];
    $pessoa["s"] = $_POST["sobrenome"];    
    $pessoa["p"] = $_POST["peso"];
    $pessoa["a"] = $_POST["altura"];
    $pessoa["imc"] = round($pessoa["p"] / ($pessoa["a"] * $pessoa["a"]), 2);
    $pessoa["diagnostico"] = "Você está";
    
    
    
    
    if($pessoa["imc"]< 18) {
        $pessoa["diagnostico"] = $pessoa["diagnostico"] + " ABAIXO do peso ";
    }else if($pessoa["imc"] <= 25){
        
        $pessoa["diagnostico"] .= " PESO NORMAL.";
    }else {
        $pessoa["diagnostico"] .= " ACIMA DO PESO.";
    }
    echo "Olá " . $pessoa["n"] ." " . $pessoa["s"] ."!<br>";
    echo "Você tem um IMC de: " . $pessoa["imc"] . "<br>";
    echo $pessoa["diagnostico"];
          
     


<?php
echo "<h1>Teste de: Enquanto (while) </h3>";
$contador = 1;
$tabuada = 5;
$resultado = 0;
while($contador<=10){
    $resultado = $contador * $tabuada ;
    echo "$contador X $tabuada =  $resultado   <BR>";
    $contador++;
    
}
echo "<h3>Teste de: Faça {do.....while}<h3>";
$tab = 3;
$cont = 1;
do{
    $res = $cont * $tab ;
    echo "$cont X $tab =  $res  <BR>";
    $cont++;
}while($cont <= 10);
echo "<h3>Teste de: For (PARA) <h3>";
$tab = 7;
echo "Tabuada do: <font color='red'><b>$tab</b></font> <br>";
for($cont=1; $cont<=10; $cont++){
    $res = $cont * $tab;
    echo "$cont x $tab = $res <br>"; 
}
echo "<hr>";
?>
echo "<h3>Teste de: PARA (for)</h3>";
for ($tab = 1; $tab <= 10; $tab++) {    
    if($tab%2==0){
        echo "<font color=green>";        
    } else {
        echo "<font color=blue>";        
    }
    echo "Tabuada do: <font color='red'><b>$tab</b></font> <br>";
    for ($cont = 1; $cont <= 10; $cont++) {
        $res = $cont * $tab;
        echo "$cont x $tab = $res <br>";
    }
    echo "<hr>";
    echo"</font>";
}
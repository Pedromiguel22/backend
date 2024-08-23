<?php

//defina um numero alto pois o progama mostrará todos os numeros pares menores//

echo 'insira um numero par';
$numero = 30;

// se o numero for positivo ira mostrar os numeros pares anteriores//
if ($numero > 0 ){
    $i =  0;

    while($i <= $numero){
        echo $i. '<br/>';
        $i += 2;
//Se for negativo ira mandar digitar um numero possitivo//
}
}else {
    echo 'Insira um número positivo';
}

?>
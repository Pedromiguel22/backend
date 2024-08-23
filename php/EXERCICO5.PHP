<?php

function multiplicacao ($chorro) {
    for ($i = 1; $i <= 10; $i++){
        $resultado = $chorro * $i;
        echo " $chorro x $i = $resultado<br>";
    }
}

$chorro =2;
multiplicacao($chorro);
?>

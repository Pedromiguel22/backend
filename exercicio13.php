<?php

$nome = array("pedro", "neto de propicio", "tigrinho", "ratinho", "tourinho", "pablo", "");

$procurar = "tigrinho";

$indice = array_search($procurar, $nome);

if ($indice !== false){
    echo " $procurar foi encontrada na pocição:" . $indice;
}else{
    echo " $procurar nao fi encontrado na listas de frutas  ";
}
?>
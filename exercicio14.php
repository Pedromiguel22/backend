<?php

$usuarios = [
[   "cidade" => "ipero",
    "nome" => "joao",
    "estado"=> "SP"],
[   "cidade"=> "cerquilho",
    "nome"=> "maria",
    "estado"=> "sp"],
[   "cidade"=> "piraquara",
    "nome"=> "pedro",
    ""=> "PA"]

];

$busca = "";

echo '<pre>';
print_r ($usuarios);
echo '</pre>';


$indice = array_search ($busca, array_column($usuarios, 'estado'));


if($indice !== false) {
    echo "$busca foi encontrada com o cidade:" . $usuarios[$indice]['cidade'];
} else {
    echo "$busca nao encontrada na lista de usuarios.";
}
?>

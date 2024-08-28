<?php

$numero = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

echo '<pre>';
print_r ($numero);
echo $numero [0];
echo "<br>";
echo $numero [4];
echo "<br>";
echo $numero [9];
echo"<hr>";
echo '</pre>';


echo '<pre>';
$numero[0] = "100";
$numero[4] = "500";
$numero[9] = "900";
print_r ($numero);
echo'</pre>';

echo $numero [0] = 100;
echo "<br>";
echo $numero [4] = 500;
echo "<br>";
echo $numero [9] = 1000;
echo"<hr>";
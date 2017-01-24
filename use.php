<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Gimnasio</title>
  </head>
  <body>

<?php

include "gym.php";


$gestor=new gym();


$gestor->nuevoHombre($_POST["Lhombres"]);
$gestor->nuevoMujer($_POST["Lmujeres"]);
$gestor->nuevoHombre($_POST["Mhombres"]);
$gestor->nuevoMujer($_POST["Mmujeres"]);
$gestor->nuevoHombre($_POST["Xhombres"]);
$gestor->nuevoMujer($_POST["Xmujeres"]);
$gestor->nuevoHombre($_POST["Jhombres"]);
$gestor->nuevoMujer($_POST["Jmujeres"]);
$gestor->nuevoHombre($_POST["Vhombres"]);
$gestor->nuevoMujer($_POST["Vmujeres"]);
$gestor->nuevoHombre($_POST["Shombres"]);
$gestor->nuevoMujer($_POST["Smujeres"]);

echo "<h1> GIMNASIO </H1> <hr> <br>";

echo "Número total de hombres es: ".$gestor->calcularmediaHombres();
echo "<br>";
echo "Número total de mujeres es: ".$gestor->calcularmediaMujeres();
 ?>


  </body>
</html>

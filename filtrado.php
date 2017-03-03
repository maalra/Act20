<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>NBA</title>
  </head>
  <body>
<?php

include "dbnba.php";
$nba = new dbnba();

$resultado=$nba->mostrarequipos($_POST["equipo_local"],$_POST["equipo_visitante"],$_POST["temporada"]);

  while($fila=$resultado->fetch_assoc()){

  echo "<br>";
  echo "EQUIPO LOCAL: ".$fila["equipo_local"];
  echo "<br>";
  echo "PUNTOS LOCAL: ".$fila["puntos_local"];
  echo "<br>";
  echo "<hr>";
  echo "EQUIPO VISITANTE: ".$fila["equipo_visitante"];
  echo "<br>";
  echo "PUNTOS VISITANTE: ".$fila["puntos_visitante"];
  echo "<br>";
  echo "<hr>";
  echo "TEMPORADA: ".$fila["temporada"];
  echo "<br>";
  
  }


 ?>

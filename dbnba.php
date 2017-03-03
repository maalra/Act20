<?php
class dbnba
{
  private $host="localhost";
  private $user="root";
  private $pass="";
  private $name="nba";


  private $conexion;
  private $error=false;



  function __construct(){
      $this->conexion = new mysqli($this->host,$this->user,$this->pass, $this->name);
      if($this->conexion->connect_errno) {
        $this->error=true;
      }
}
    function geterror(){
    return $this->error;
    }

      function mostrarequipos($equipo_local, $equipo_visitante, $temporada){
   $resultado = $this->conexion->query("SELECT equipo_local, puntos_local, puntos_visitante, equipo_visitante, temporada FROM partidos WHERE equipo_local= '".$equipo_local."' AND equipo_visitante='".$equipo_visitante."' AND temporada='".$temporada."'");
return $resultado;
}
}
?>

<?php
require "conexion.php";
#$id = $GET_['id'];
$id = 1;
$q = "SELECT nombre FROM museos WHERE id_museo = '$id'";

$r =  mysqli_query($con, $q);

while ($valores = mysqli_fetch_assoc($r))
    {
      $array[]= $valores;
      $titulo = implode($valores);
      echo "xd". $titulo;
    }
    
?>
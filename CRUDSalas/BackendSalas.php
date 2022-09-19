<?php
require 'conexion.php';

$funcion = $_POST['funcion'];

if($funcion < 5)
{
  $q = "SELECT * FROM museos ";
  
  $r = mysqli_query($con, $q);
  
  if (mysqli_num_rows($r) > 0){
    
    while ($valores = mysqli_fetch_assoc($r))
      {
        $array[]= $valores;
        
      }
      
      echo (json_encode($array)); 
      
      
    }
  
  mysqli_close($con);
}



if($funcion > 5)
{
  $museo = $_POST['id_museo'];

  $q = "SELECT * FROM salas,museos WHERE museos.id_museo = salas.id_museo";

  if($museo != 0)
  {
    $q = $q." AND salas.id_museo = $museo";
  }

  $r = mysqli_query($con, $q);

  if (mysqli_num_rows($r) > 0){
    
    while ($valores = mysqli_fetch_assoc($r))
      {
        $array[]= $valores;
        
      }
      
      echo (json_encode($array)); 
      
      
    }

  mysqli_close($con);
}  


?>

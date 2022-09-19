<?php
require 'conexion.php';

$funcion = $_POST['funcion'];

if($funcion < 5)
{
  $q = "SELECT id_museo,nombre FROM museos ";
  
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
  $id = $_POST['id_museo'];

  $q = "SELECT * FROM salas WHERE id_museo = '$id'";

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

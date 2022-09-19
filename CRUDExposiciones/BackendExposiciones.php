<?php
require 'conexion.php';

$funcion = $_POST['funcion'];

if ($funcion < 5)
{
  #$idSala = $_POST['id_sala'];
  $museo = $_POST['museo'];
  $orderBy =  $_POST['orderBy'];
  
  
  $q = "SELECT * FROM exposicion, salas WHERE exposicion.id_sala = salas.id_sala ";

  if($museo != 0)
  {
    $q = $q."AND salas.id_museo = '$museo' ";
  }
  if($orderBy == 1)
  {
    $q = $q."AND exposicion.estado = '0'";
  }
  if($orderBy == 2)
  {
    $q = $q."AND exposicion.estado = '1'";
  }
  if($orderBy == 3)
  {
    $q = $q."AND exposicion.estado = '2'";
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
if ($funcion == 5)
{
  $museo = $_POST['museo'];

  $q = "SELECT * FROM salas WHERE id_museo = $museo";

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

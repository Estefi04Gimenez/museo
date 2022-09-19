<?php
require 'conexion.php';


$museo = $_POST['museo'];

$q = "SELECT * FROM usuarios,museos WHERE museos.id_museo = usuarios.id_museo ";

if($museo != 0)
{
  $q = $q."AND usuarios.id_museo = '$museo'";
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


?>

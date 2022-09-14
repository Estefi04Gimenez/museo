<?php
require 'conexion.php';


#$id = $_POST['id_museo'];

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


?>

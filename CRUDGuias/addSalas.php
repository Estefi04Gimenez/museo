<?php

require 'conexion.php';



$sala = $_POST['sala'];
$piso = $_POST['piso'];
$sector = $_POST['sector'];
$punto_inteligente = $_POST['PuntoInteligente'];
$id_museo = $_POST['idMuseo'];


$q = "INSERT INTO `salas`(`sala`, `piso`, `sector`, `punto_inteligente`, `id_museo`) VALUES ('$sala','$piso','$sector','$punto_inteligente','$id_museo')";


echo mysqli_query($con, $q)





















































/*$alumnos3 = $_POST['alumnos3'];
$opcion = $_POST['opcion'];

$q = "select * from alumnos3 where UPPER(nombre) like '%" . strtoupper($alumnos3) . "%'";
//$q = "select * from alumnos3";



if($opcion == 1)
{
  $q = $q."ORDER BY fecha_de_nacimiento ASC";
}
if($opcion == 2)
{
  $q = $q."ORDER BY fecha_de_nacimiento DESC";
}
if($opcion == 3)
{
  $q = $q."ORDER BY id_alumno ASC";
}
if($opcion == 4)
{
  $q = $q."ORDER BY id_alumno DESC";
}

$r = mysqli_query($con, $q);
//se arma un array asociativo(nombre campo , valor) que despues se
//va a trasformar en un json para devolver

if (mysqli_num_rows($r) > 0){
  
  while ($valores = mysqli_fetch_assoc($r)){
     $array[]= $valores;
     //echo($array[1]);
    }
    //envio respuesta a ajax como json
    echo (json_encode($array)); 
    
    
  }

  

 

mysqli_close($con);


*/
?>

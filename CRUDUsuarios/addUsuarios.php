<?php

require 'conexion.php';



#$id = $_POST['idUsuario'];
$nombre = $_POST['nombreUsuario'];
$email = $_POST['emailUsuario'];
$contra = $_POST['contrasennaUsuario'];
$dni = $_POST['dniUsuario'];
$tel = $_POST['telUsuario'];
$tipo = $_POST['tipoUsuario'];
$museo = $_POST['idMuseoUsuario'];


$q = "INSERT INTO `usuarios`(`nombre_completo`, `contraseña`, `dni`, `tel`, `email`, `tipo_user`, `id_museo`) VALUES ('$nombre','$contra','$dni','$tel','$email','$tipo','$museo')";


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

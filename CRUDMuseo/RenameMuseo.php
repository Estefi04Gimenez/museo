<?php

require 'conexion.php';

$id = $_POST['idUDMuseo'];
$nombre = $_POST['nombreMuseoUD'];
$ubicacion = $_POST['ubicacionUD'];
$tipo = $_POST['tipoMuseoUD'];


$q = "UPDATE museos SET nombre='$nombre',ubicacion='$ubicacion',tipo_museo='$tipo' WHERE id_museo = '$id'";

echo mysqli_query($con, $q);


?>

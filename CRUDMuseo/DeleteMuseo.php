<?php
require 'conexion.php';

$id = $_POST['idUD'];
$nombre = $_POST['nombreMuseoUD'];
$ubicacion = $_POST['ubicacionUD'];
$tipo = $_POST['tipoMuseoUD'];




$q = "DELETE FROM museos WHERE id_museo = '$id'";

echo mysqli_query($con, $q);


?>
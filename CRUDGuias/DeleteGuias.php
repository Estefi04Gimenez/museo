<?php
require 'conexion.php';

$id = $_POST['idUD'];
$tipo = $_POST['tipoUD'];
$idioma = $_POST['idiomaUD'];
$costo = $_POST['costoUD'];
$descripcion = $_POST['descripcionUD'];
$fecha = $_POST['fechaUD'];
$hora = $_POST['horaUD'];
$guia = $_POST['guiaUD'];
$cantidad_registrado = $_POST['sala'];
$cupo_max = $_POST['cupoMaximoUD'];
$estado = $_POST['estadoUD'];



$q = "DELETE FROM guias WHERE id_guias = '$id'";

echo mysqli_query($con, $q);


?>
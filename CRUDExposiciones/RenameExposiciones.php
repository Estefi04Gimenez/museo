<?php
require 'conexion.php';

$funcion = $_POST['funcion'];

if ($funcion < 2)
{

$id = $_POST['idExposicionesUD'];
$fch_inicio = $_POST['fechaInicioUD'];
$fch_finalizacion = $_POST['fechaFinalizacionUD'];
$descripcion = $_POST['descripcionUD'];
$nro = $_POST['numeroUD'];
$estado = $_POST['estadoUD'];
$sala = $_POST['idSalaSelectUD'];




$q = "UPDATE exposicion SET fecha_inicio='$fch_inicio',fecha_finalizacion='$fch_finalizacion',descripcion='$descripcion',numero='$nro',estado='$estado',id_sala='$sala' WHERE id_exposicion = '$id'";

echo mysqli_query($con, $q);

}
if ($funcion == 5)
{

$fecha = $_POST['fechaActual'];


$q = "UPDATE exposicion SET estado='1' WHERE fecha_finalizacion > '$fecha' AND fecha_inicio <= '$fecha' ";

echo mysqli_query($con, $q);

$q = "UPDATE exposicion SET estado='2' WHERE fecha_finalizacion <= '$fecha'";

echo mysqli_query($con, $q);

$q = "UPDATE exposicion SET estado='0' WHERE fecha_inicio > '$fecha'";

echo mysqli_query($con, $q);

}


?>

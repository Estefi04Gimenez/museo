<?php
require 'conexion.php';

$id = $_POST['idExposicionesUD'];
$fch_inicio = $_POST['fechaInicioUD'];
$fch_finalizacion = $_POST['fechaFinalizacionUD'];
$descripcion = $_POST['descripcionUD'];
$nro = $_POST['numeroUD'];
$estado = $_POST['estadoUD'];
$sala = $_POST['idSalaSelectUD'];



$q = "DELETE FROM exposicion WHERE id_exposicion = '$id'";

echo mysqli_query($con, $q);


?>
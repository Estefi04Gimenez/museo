<?php
require 'conexion.php';

$id = $_POST['idUDGuias'];
$tipo = $_POST['tipoUDGuias'];
$idioma = $_POST['idiomaUDGuias'];
$costo = $_POST['costoUDGuias'];
$descripcion = $_POST['descripcionUDGuias'];
$fecha = $_POST['fechaUDGuias'];
$hora = $_POST['horaUDGuias'];
$guia = $_POST['guiaUDGuias'];
$cantidad_registrado = $_POST['cantidadRegistradaUDGuias'];
$cupo_max = $_POST['cupoMaximoUDGuias'];
$estado = $_POST['estadoUDGuias'];



$q = "DELETE FROM guias WHERE id_guias = '$id'";

echo mysqli_query($con, $q);


?>
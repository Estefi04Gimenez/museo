<?php

require 'conexion.php';

$funcion = $_POST['funcion'];

if($funcion == 1)
{
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




$q = "UPDATE guias SET tipo='$tipo',idioma='$idioma',costo='$costo',descripcion='$descripcion',guia='$guia',fecha='$fecha',hora='$hora',cantidad_registrado='$cantidad_registrado',cupo_max='$cupo_max',estado='$estado'  WHERE id_guia = '$id'";

echo mysqli_query($con, $q);
}
if($funcion == 5)
{

    $fecha = $_POST['fechaActual'];

    $q = "UPDATE guias SET estado='1'  WHERE fecha < '$fecha'";

echo mysqli_query($con, $q);
}

?>

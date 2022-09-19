<?php

require 'conexion.php';

$tipo = $_POST['tipo'];
$idioma = $_POST['idioma'];
$costo = $_POST['costo'];
$descripcion = $_POST['descripcion'];
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];
$guia = $_POST['guia'];
#$cantidad_registrado = $_POST['sala'];
$cupo_max = $_POST['cupoMaximo'];
$estado = "0";


$q = "INSERT INTO `guias`(`tipo`, `idioma`, `costo`, `descripcion`, `guia`, `fecha`, `hora`, `cantidad_registrado`, `cupo_max`, `estado`) VALUES ('$tipo','$idioma','$costo','$descripcion','$guia','$fecha','$hora','','$cupo_max','$estado')";


echo mysqli_query($con, $q)







?>

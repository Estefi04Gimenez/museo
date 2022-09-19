<?php

require 'conexion.php';

$id = $_POST['idUDSalas'];
$sala = $_POST['salaUD'];
$piso = $_POST['pisoUD'];
$sector = $_POST['sectorUD'];
$punto_inteligente = $_POST['PuntoInteligenteUD'];
$id_museo = $_POST['idMuseoUD'];




$q = "UPDATE salas SET sala='$sala',piso='$piso',sector='$sector',punto_inteligente='$punto_inteligente',id_museo='$id_museo' WHERE id_sala = '$id'";

echo mysqli_query($con, $q);


?>

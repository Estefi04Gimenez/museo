<?php
require 'conexion.php';

$id = $_POST['idUD'];
$sala = $_POST['salaUD'];
$piso = $_POST['pisoUD'];
$sector = $_POST['sectorUD'];
$punto_inteligente = $_POST['PuntoInteligenteUD'];
$id_museo = $_POST['idMuseoUD'];




$q = "DELETE FROM salas WHERE id_salas = '$id'";

echo mysqli_query($con, $q);


?>
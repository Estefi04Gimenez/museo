<?php
require 'conexion.php';


$id = $_POST['idUDUsuario'];
$nombre = $_POST['nombreUsuarioUD'];
$email = $_POST['emailUsuarioUD'];
$contra = $_POST['contrasennaUsuarioUD'];
$dni = $_POST['dniUsuarioUD'];
$tel = $_POST['telUsuarioUD'];
$tipo = $_POST['tipoUsuarioUD'];
$museo = $_POST['idMuseoUsuarioUD'];





$q = "DELETE FROM usuarios WHERE id_user = '$id'";

echo mysqli_query($con, $q);


?>
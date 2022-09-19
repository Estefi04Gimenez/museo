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


$q = "UPDATE usuarios SET nombre_completo='$nombre',contraseña='$contra',dni='$dni',tel='$tel',email='$email',tipo_user='$tipo',id_museo='$museo' WHERE id_user = '$id'";

echo mysqli_query($con, $q);


?>

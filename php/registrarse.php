
    <?php
    require'conexion.php'; 
    $nombre=$_POST['reg_nombre_completo'];
    $dni=$_POST['reg_dni'];
    $tel=$_POST['reg_tel'];
    $email= $_POST['reg_email']; 
    $cont= MD5( $_POST['reg_contraseña']);
    $tipo="U";
    
    $q="INSERT INTO usuarios (nombre_completo, contraseña, dni, tel, email, tipo_user) VALUES ('$nombre','$cont','$dni','$tel','$email','$tipo')";
    $r = mysqli_query ($con,$q); 

    ?>

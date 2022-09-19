
    <?php
    require'conexion.php';
    $email= $_POST['email']; 
    
    $cont= MD5($_POST['contraseña']);
    
    $q="SELECT * FROM usuarios WHERE email = '$email' AND contraseña = '$cont' ";
    
    $r = mysqli_query ($con,$q); 

    if (mysqli_num_rows($r)>0) {
        session_start();
        $_SESSION ['nombre-usuarios']=$u;
        header("location: index.php");
        
    }
    else
    {
        header("location: login-modal.html");
        
    }

    ?>

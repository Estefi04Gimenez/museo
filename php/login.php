
    <?php
    require'conexion.php';
    $email= $_POST['email']; 
    
    $cont= $_POST['contraseña'];
    
    $q="SELECT * FROM usuarios WHERE email = '$email' AND contraseña = '$cont' ";
    
    $r = mysqli_query ($con,$q); 

    if (mysqli_num_rows($r)>0) {
        session_start();
        $_SESSION ['nombre-usuarios']=$u;
        header("location: index.html");
        
    }
    else
    {
        header("location: #.html");
        
    }

    ?>

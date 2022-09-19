<?php
#al acceder a la pagina una de estas variables deberia completarse con el id del museo correspondiente
#$id = $GET_['id'];
#$id = $POST_['id'];

#por el momento trabajamos con esta variable. hasta crear una pagina para acceder a distintos museos
$id = 1;

$q = "SELECT nombre FROM museos WHERE id_museo = '$id'";

$r =  mysqli_query($con, $q);

while ($valores = mysqli_fetch_assoc($r))
    {
      $array[] = $valores;
      $titulo = implode($valores);
    }
    

?>
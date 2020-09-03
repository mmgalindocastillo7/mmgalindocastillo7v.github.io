<?php

include 'conexion_be.php';

$nombre_completo = $_POST['nombre_completo'];
$contrasena = $_POST['password'];
$correo_electronico = $_POST['correo_electronico'];
$telefono = $_POST['telefono'];
$contrasena = hash('sha512', $contrasena);

$query = "INSERT INTO usuario(`nombre_completo`, `password`, `correo_electronico`, `telefono`)
          VALUES('$nombre_completo','$contrasena','$correo_electronico','$telefono')";

//verificar que el correo no se repita en la base de datos          
$verificar_correo_electronico = mysqli_query($conexion, "SELECT * FROM usuario WHERE correo_electronico = '$correo_electronico'");

if(mysqli_num_rows($verificar_correo_electronico)>1){
   echo '
       <script>
            alert("este correo ya esta registrado, intenta con otro diferente");
            window.location.href="..//index.php
       </script>     
   ';
   exit();
}

$ejecutar = mysqli_query($conexion, $query); 


if($ejecutar){
	echo'
        <script>
            alert("usuario almacenado exitosamente");
            window.location.href="..//index.php" 
        </script>    

	';
}
mysqli_close($conexion);         
?>       


<?php 
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
require "conexion_be.php";
   //INICIALIZAR LA SESION
if(isset($_SESSION["loggedin"])&& $_SESSION["loggedin"]=== true){
   	  header("location: Bienvenida.php");
   	  exit;
   }


$nombre_completo = $password ="";
$nombre_completo_err =$password_err ="";

if($_SERVER["REQUEST_METHOD"] === "POST"){

	if(empty(trim($_POST["nombre_completo"]))){
		$nombre_completo_err = "Por favor, ingrese el Nombre Completo";
    }else{	
    	$nombre_completo = trim($_POST["nombre_completo"]);

    }if(empty(trim($_POST["password"]))){
		$password_err = "Por favor, ingrese una contraseña";
    }else{
    	$password = trim($_POST["password"]);
    }


$query="SELECT id,  nombre_completo, password FROM usuario WHERE nombre_completo='$nombre_completo' AND password='$password' LIMIT 1";
$resultado = mysqli_query($conexion,$query);
$rows = mysqli_num_rows($resultado);
if($rows>0)
{
    $r=mysqli_fetch_assoc($resultado);
     $_SESSION["loggedin"] = true;
     $_SESSION["id"] = $r["id"];
     $_SESSION["nombre_completo"] = $nombre_completo;
      header("Location: Bienvenida.php");
   
}else
{

    echo "UPS! algo salio mal, intentalo mas tarde";
}
 


//die(0);

    //VALIDAR
  /*  if(empty($nombre_completo_err) && empty($password_err)){
        
        $sql = "SELECT id,  nombre_completo, password FROM usuario WHERE nombre_completo = ?";
        
        if($stmt = mysqli_prepare($conexion, $sql)){
            
            mysqli_stmt_bind_param($stmt, "s", $param_nombre_completo);
            
            $param_nombre_completo = $nombre_completo;
            
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
            }
            
            if(mysqli_stmt_num_rows($stmt) == 1){

                mysqli_stmt_bind_result($stmt, $id, $usuario, $nombre_completo, $hashed_password);
                if(mysqli_stmt_fetch($stmt)){
                    

             //       echo $password." ".$hashed_password;
                                        
                    if(password_verify($password, $hashed_password)){
                         
                        // ALMACENAR DATOS EN VARABLES DE SESION
                        $_SESSION["loggedin"] = true;
                        $_SESSION["id"] = $id;
                        $_SESSION["nombre_completo"] = $nombre_completo;
                       
                        header("Location: Bienvenida.php");
                    }else{
                        $password_err = "La contraseña que has introducido no es valida";
                    }
                    
                } 
            }else{
                    $nombre_completo_err = "No se ha encontrado usuario con ese nombre.";
                }
            
        }else{
                    echo "UPS! algo salio mal, intentalo mas tarde";
                }
    }*/
    
    mysqli_close($conexion);
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login |mmgalindo|</title>
    <link rel="stylesheet" href="css/estilos.css">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0,
     maximun-scale=1.0, minimun-scale=1.0">
</head>
<body>
    <div class="contenedor-form">
        <div class="toggle">
            <span> Crear Cuenta</span>
        </div>
        
        <div class="formulario">
            <h2>Iniciar Sesión</h2>
            <form action="code_login.php" method = "POST" class="formulario">
                <input type="text" placeholder="Nombre Completo" name="nombre_completo"required>
            
                <input type="password" placeholder="Contrasena" name="password" required>
        
                <input type="submit" value="Iniciar Sesión">
            </form>
        </div>
        
        <div class="formulario">
            <h2>Crea tu Cuenta</h2>
            <form action="registro_usuario_be.php" method = "POST" class="formulario-login">
                <input type="text" placeholder="Nombre completo" name="nombre_completo" id="nombre_completo" required>
                
                <input type="password" placeholder="Contrasena" name="password" id="password" required>
                
                <input type="email" placeholder="Correo Electronico" name="correo_electronico" id="correo_electronico" required>
                
                <input type="text" placeholder="Teléfono" name="telefono" id="telefono" required>
                
                <input type="submit" value="Registrarse">
            </form>
        </div>
        <div class="reset-password">
            <a href="#">Olvide mi Contraseña?</a>
        </div>
    </div>
    <script src="js/jquery-3.1.1.min.js"></script>    
    <script src="js/main.js"></script>
</body>
</html>
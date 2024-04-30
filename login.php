<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FEPADE</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    
    <div class = "login-box">
        
        <h1>Login Here</h1>
        <?php
            include("conexion_bd.php");
            include("controlador.php");
        ?>
        <form action="" method="post">
            <!----USUARIO--->
            <label for="username">Usuario</label>
            <input type="text" placeholder="usuario" name = "usuario">
            <!----CONTRASEÑA--->
            <label for="password">Contraseña</label>
            <input type="password" placeholder="contraseña" name = "password">
            
            <input type="submit" value="INICIAR SESION" name= "btningresar" class ="btn">

            <a href="#">Olvide mi contraseña</a><br>
            <a href="#">Soporte Tecnico</a>
        </form>
    </div>
</body>
</html>
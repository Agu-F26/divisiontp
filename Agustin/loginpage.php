<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>

</head>
<body>
    <div class="container-cartel">
        <div class="cartel">
            <h2>Iniciar sesión</h2>
            <form action="" method="post">
                <input type="text" name="username" placeholder="Nombre de usuario"><br>
                <input type="password" name="pass" placeholder="Contraseña"><br>
                <input type="submit" name="submit" value="Continuar">
            </form>
            <p><a href="registerpage.php">No tenes cuenta? Registrate!</a></p>
        </div>
    </div>
</body>
</html>

<?php
    require("login.php");
?>
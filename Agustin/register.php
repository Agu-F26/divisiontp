<?php
    require("con_sql.php");

    if(isset($_POST["submit"])){
        $username = $_POST["username"];
        $pass = md5($_POST["pass"] . $username);
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $dni = $_POST["dni"];

        $query = "SELECT id FROM tablausuarios WHERE username = '$username'";
        $check = mysqli_query($conex, $query);
        $existe = mysqli_num_rows($check);
        if($existe == 0){
            $query = "INSERT INTO tablausuarios (username, pass, nombre, apellido, dni) 
                VALUES ('$username','$pass','$nombre','$apellido',$dni)";
            $registro = mysqli_query($conex, $query);
            if($registro){
                ?>
                <script>
                    document.cookie="isLogged=true; Secure";
                    document.cookie="username=<?php echo $username;?>; Secure";
                    window.location.href="index.php";
                </script>
                <?php
            }
        }
        else{
            ?><script>alert("Usuario ya existe")</script><?php
        }
    }
?>
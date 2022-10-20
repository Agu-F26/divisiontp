<?php
    require("con_sql.php");

    if(isset($_POST["submit"])){
        $username = $_POST["username"];
        $pass = md5($_POST["pass"] . $username);

        $query = "SELECT id FROM tablausuarios WHERE username = '$username' AND pass = '$pass'";
        $log = mysqli_query($conex, $query);
        $correct = mysqli_num_rows($log);

        if($correct){
            ?>
            <script>
                    document.cookie="isLogged=true; Secure";
                    document.cookie="username=<?php echo $username;?>; Secure";
                    window.location.href="index.php";
            </script>
            <?php
        }
        else{
            ?>
            <script>
                alert("No existe una cuenta con esas credenciales.")
            </script>
            <?php
        }
    }
?>
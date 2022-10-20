<?php
    require("con_sql.php");
    $usuario = $_COOKIE["username"];
    $query = file_get_contents("./sql/getidusuario.sql")."'".$usuario."'";
    $iduserq = mysqli_query($conex, $query);
    $iduser = mysqli_fetch_assoc($iduserq);
    $query = file_get_contents("./sql/getAutoAlquilado.sql").$iduser["id"];
    $tieneAutoq = mysqli_query($conex, $query);
    $tieneAuto = mysqli_fetch_assoc($tieneAutoq);


    if(isset($_POST["submit"]) && $tieneAuto["idauto"] == NULL){
        $query = file_get_contents("./sql/alquila.sql")."'".$usuario."'".file_get_contents("./sql/whereid.sql").$_POST["id"];
        $editar = mysqli_query($conex, $query);
        $query = file_get_contents("./sql/useralquila.sql")."'".$_POST["id"]."'"." ".file_get_contents("./sql/whereiduser.sql").$iduser["id"];
        $editar = mysqli_query($conex, $query);
        ?><script>window.location.href="index.php";</script>
        <?php
    }

    else{
        echo "
        <script>
            alert(\"Ya tenes un auto alquilado\");
            window.location.href=\"index.php\";
        </script>
        ";
    }
?>
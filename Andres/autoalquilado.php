<?php
require("con_sql.php");
$usuario = $_COOKIE["username"];
$query = file_get_contents("./sql/getidusuario.sql")."'".$usuario."'";
$iduserq = mysqli_query($conex, $query);
$iduser = mysqli_fetch_assoc($iduserq);
$query = file_get_contents("./sql/getAutoAlquilado.sql").$iduser["id"];
$tieneAutoq = mysqli_query($conex, $query);
$tieneAuto = mysqli_fetch_assoc($tieneAutoq);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php
    if($tieneAuto["idauto"] != NULL){
        $query = file_get_contents("./sql/getAutos.sql") . $tieneAuto["idauto"];
        $getAutos = mysqli_query($conex, $query);
        $auto = $getAutos->fetch_array();
        $id = $iduser["id"];
        echo "
        <p>Tenes alquilado:</p>
        <p>Marca: $auto[1]</p>
        <p>Modelo: $auto[2]</p>
        <p>Año: $auto[3]</p>
        <p>Color: $auto[4]</p>
        <br>
        <p>Por un valor de: $$auto[6]</p>
        <form action=\"\" method=\"post\">
        <input type=\"hidden\" name=\"id\" value=\"$id\">
        <input type=\"submit\" name=\"submit\" value=\"Devolver\">
        <br>
    </form>
        ";
    }

    else{
        echo "No tenes un auto alquilado";
        echo "<p><a href=\"index.php\">Volver atrás.</a></p>";
    }
    
    if(isset($_POST["submit"])){
        $query = file_get_contents("./sql/alquila.sql")."NULL"." ".file_get_contents("./sql/whereid.sql").$auto[5];
        $editar = mysqli_query($conex, $query);
        $query = file_get_contents("./sql/useralquila.sql")."NULL"." ".file_get_contents("./sql/whereiduser.sql").$iduser["id"];
        $editar = mysqli_query($conex, $query);
        ?><script>window.location.href="index.php";</script>
        <?php

    }

    ?>

</body>
</html>
<?php
    require("con_sql.php");

    if(isset($_POST["submit"])){
        $patente = $_POST["patente"];
        $marca = $_POST["marca"];
        $modelo = $_POST["modelo"];
        $anio = $_POST["anio"];
        $color = $_POST["color"];
        $precio = $_POST["precio"];

        $query = "INSERT INTO `tablaautos` (`id`, `patente`, `marca`, `modelo`, `anio`, `color`, `pathImagen`, `usuario`, `precio`) VALUES (NULL, '$patente', '$marca', '$modelo', '$anio', '$color', NULL, NULL, '$precio') ";
        $agregar = mysqli_query($conex, $query);
        ?><script>window.location.href="index.php";</script>
        <?php
    }
?>

<?php
    require("con_sql.php");

    if(isset($_POST["submit"])){
        $patente = $_POST["patente"];
        $marca = $_POST["marca"];
        $modelo = $_POST["modelo"];
        $anio = $_POST["anio"];
        $color = $_POST["color"];
        $precio = $_POST["precio"];

        if($patente != ""){
            $query = file_get_contents("./sql/editPatente.sql")."'".$patente."'".file_get_contents("./sql/whereid.sql").$_POST["id"];
            $editar = mysqli_query($conex, $query);

        }
        if($marca != ""){
            $query = file_get_contents("./sql/editMarca.sql")."'".$marca."'"." ".file_get_contents("./sql/whereid.sql").$_POST["id"];
            $editar = mysqli_query($conex, $query);
        }
        if($modelo != ""){
            $query = file_get_contents("./sql/editModelo.sql")."'".$modelo."'"." ".file_get_contents("./sql/whereid.sql").$_POST["id"];
            $editar = mysqli_query($conex, $query);
        }
        if($anio != ""){
            $query = file_get_contents("./sql/editAnio.sql")."'".$anio."'"." ".file_get_contents("./sql/whereid.sql").$_POST["id"];
            $editar = mysqli_query($conex, $query);
        }
        if($color != ""){
            $query = file_get_contents("./sql/editColor.sql")."'".$color."'"." ".file_get_contents("./sql/whereid.sql").$_POST["id"];
            echo $query;
            $editar = mysqli_query($conex, $query);
        }
        if($precio != ""){
            $query = file_get_contents("./sql/editPrecio.sql")."'".$precio."'"." ".file_get_contents("./sql/whereid.sql").$_POST["id"];
            $editar = mysqli_query($conex, $query);
        }

        ?><script>window.location.href="index.php";</script>
        <?php
    }
?>
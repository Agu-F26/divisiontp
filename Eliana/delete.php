<?php
    require("con_sql.php");


    $patente = "";
    $marca = "";
    $modelo = "";
    $anio = "";
    $color = "";
    $precio = "0.00";

    if(isset($_POST["submit"])){


        $query = file_get_contents("./sql/editPatente.sql")."'".$patente."'".file_get_contents("./sql/whereid.sql").$_POST["id"];
        $editar = mysqli_query($conex, $query);

        $query = file_get_contents("./sql/editMarca.sql")."'".$marca."'"." ".file_get_contents("./sql/whereid.sql").$_POST["id"];
        $editar = mysqli_query($conex, $query);

        $query = file_get_contents("./sql/editModelo.sql")."'".$modelo."'"." ".file_get_contents("./sql/whereid.sql").$_POST["id"];
        $editar = mysqli_query($conex, $query);

        $query = file_get_contents("./sql/editAnio.sql")."'".$anio."'"." ".file_get_contents("./sql/whereid.sql").$_POST["id"];
        $editar = mysqli_query($conex, $query);
        
        $query = file_get_contents("./sql/editColor.sql")."'".$color."'"." ".file_get_contents("./sql/whereid.sql").$_POST["id"];
        $editar = mysqli_query($conex, $query);

        $query = file_get_contents("./sql/editPrecio.sql")."'".$precio."'"." ".file_get_contents("./sql/whereid.sql").$_POST["id"];
        $editar = mysqli_query($conex, $query);

        $query = file_get_contents("./sql/deleteAuto.sql")." ".file_get_contents("./sql/whereid.sql").$_POST["id"];
        $editar = mysqli_query($conex, $query);
        
        ?><script>window.location.href="index.php";</script><?php
    }
    ?>



        

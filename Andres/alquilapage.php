<?php 
require("con_sql.php");

$id = $_GET["id"];
$query = file_get_contents("./sql/getAutos.sql") . $id;
$getAutos = mysqli_query($conex, $query);
$auto = $getAutos->fetch_array();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h3>Alquiler</h3>
    <p>Vas a alquilar:</p>
    <p>Marca: <?php echo $auto[1]?></p>
    <p>Modelo: <?php echo $auto[2]?></p>
    <p>Año: <?php echo $auto[3]?></p>
    <p>Color: <?php echo $auto[4]?></p>
    <br>
    <p>Por un valor de: $<?php echo $auto[6]?></p>
    <br>
    <p>¿Estás seguro?</p>
    <form action="alquilar.php" method="post">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
        <input type="submit" name="submit" value="Alquilar">
    </form>

</body>
</html>
<?php require("con_sql.php");
$id = $_GET["id"];
$query = file_get_contents("./sql/getAutos.sql") . $id;
$getAutos = mysqli_query($conex, $query);
$auto = $getAutos->fetch_array();

?>
<!DOCTYPE html>
<html>
<head>
    <title>Editar auto</title>
</head>
<body>
    <h3>Editar auto:</h3>
    <form action="edit.php" method="post">
        <label>Patente: </label><input type="text" name="patente" placeholder="<?php echo $auto[0]?>">
        <label>Marca: </label><input type="text" name="marca" placeholder="<?php echo $auto[1]?>">
        <label>Modelo: </label><input type="text" name="modelo" placeholder="<?php echo $auto[2]?>">
        <label>Año: </label><input type="text" name="anio" placeholder="<?php echo $auto[3]?>">
        <label>Color: </label><input type="text" name="color" placeholder="<?php echo $auto[4]?>">
        <label>Precio (formato 0.00): </label><input type="text" name="precio" placeholder="<?php echo $auto[6]?>">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <br>
        <input type="submit" name="submit" value="Guardar">
    </form>
</body>
</html>

<?php
    require("edit.php");
?>
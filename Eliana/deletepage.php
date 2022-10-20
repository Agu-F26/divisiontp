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
    <h3>Eliminar?</h3>
    <form action="delete.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <input type="submit" name="submit" value="Eliminar">
        <br>
    </form>
</body>
</html>

<?php
    require("delete.php");
?>
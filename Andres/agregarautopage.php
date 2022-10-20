<!DOCTYPE html>
<html>
<head>
    <title>Agregar auto</title>
</head>
<body>
    <h3>Agregar auto:</h3>
    <form action="add.php" method="post">
        <label>Patente: </label><input type="text" name="patente">
        <label>Marca: </label><input type="text" name="marca">
        <label>Modelo: </label><input type="text" name="modelo">
        <label>Año: </label><input type="text" name="anio">
        <label>Color: </label><input type="text" name="color">
        <label>Precio (formato 0.00): </label><input type="text" name="precio">
        <br>
        <input type="submit" name="submit" value="Guardar">
    </form>
</body>
</html>
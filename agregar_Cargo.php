<?php
require 'Conexion.php';

$objConexion = Getconexion();

    $Sentencia_Consulta = "select carNombre, carSueldo from cargos";

    $Resultado = $objConexion -> query ($Sentencia_Consulta);


?>

<html>
    <head>
        <br>
        <title>Agregar Cargo</title>
    </head>
    <link rel="stylesheet" href="./css/styles.css">
    <form action="Validar_Cargo.php" method="Post">

        <h1>Por favor agregue el cargo y el salario del empleado</h1>

        <label for="Cargo">Cargo: </label>
            <input type="text" id="Cargo" name="Cargo_Usuario">
            <br>
        <label for="Sueldo">Sueldo Empleado: </label>
            <input type="text" id="Sueldo" name="Sueldo_Usuario">
            <br>

        <input type="submit" value="Enviar">
    </form>
</html>
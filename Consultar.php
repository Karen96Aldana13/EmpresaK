<?php

require 'Conexion.php';

$objConexion = Getconexion();


$Sentencia_Consulta = "select * from empleados";

$Resultado = $objConexion->query($Sentencia_Consulta);

$Cantidad_Empleados = $Resultado->num_rows;

echo "<br> La cantidad de empleados registrados es: ".$Cantidad_Empleados;
echo "<br>";

// IMPRIMIR DATOS EN PANTALLA DE LOS EMPLEADOS

while($empleados=$Resultado->fetch_object())
{
    echo "<br> Nombre del empleado: ".$empleados->empNombre;
    echo "<br> Fecha de ingreso: ".$empleados->empFechaIngreso;
    echo "<br> Genero del empleado: ".$empleados->empGenero;
}


?>
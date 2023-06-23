<?php
    require 'Conexion.php';

    extract($_REQUEST);

    $objConexion = Getconexion();

    $Sentencia_Consulta = "INSERT INTO empleados (empIdentifiacion, empNombre, empFechaIngreso, 
    empCorreo, empGenero, empCargo) VALUES ('$_REQUEST[Identificacion_Usuario]','$_REQUEST[Nombre_Usuario]','$_REQUEST[Fecha_Ingreso]',
    '$_REQUEST[Correo]','$_REQUEST[genero]','$_REQUEST[cargo]')";

    $Resultado = $objConexion->query($Sentencia_Consulta);

    if($Resultado)
    {
        echo "Empleado registrado";
    }
    else
    {
        echo "Problemas al registrar el empleado";
    }
?>
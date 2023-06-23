<?php
    require 'Conexion.php';

    extract($_REQUEST);

    $objConexion = Getconexion();

    $Sentencia_Consulta = "INSERT INTO cargos (carNombre, carSueldo) VALUES ('$_REQUEST[Cargo_Usuario]',
    '$_REQUEST[Sueldo_Usuario]')";

    $Resultado = $objConexion->query($Sentencia_Consulta);
    if($Resultado)
    {
        echo "Cargo registrado";
    }
    else
    {
        echo "Problemas al registrar el cargo";
    }
?>
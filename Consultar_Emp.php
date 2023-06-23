<?php
    require 'Conexion.php';

    $objConexion = Getconexion();

    extract($_REQUEST);

    $Sentencia_Consulta = "SELECT * FROM empleados WHERE empIdentifiacion = $_REQUEST[Documento_Usuario]"

    $Resultado = $objConexion->query($Sentencia_Consulta);

    while($empleados=$Resultado->fetch_object())
    {
        echo "<br> Identificación del empleado: ".$empleados->empIdentifiacion;
        echo "<br> Nombre del empleado: ".$empleados->empNombre;
        echo "<br> Correo del empleado: ".$empleados->empCorreo;
        echo "<br> Genero del empleado: ".$empleados->empGenero;
        echo "<br> Cargo del empleado: ".$empleados->empCargo;
        echo "<br> Fecha de ingreso del empleado: ".$empleados->empFechaIngreso;
    }


?>

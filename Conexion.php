<?php

    function Getconexion()
    {

    $conexion = new mysqli ("localhost", "root", "123456", "empresa");

    if ($conexion-> connect_errno)
    {
        echo "Error al conectarse a la base de datos".$conexion->connect_error;
    }
    else
    {
        
        return $conexion;
    }

    

    }
    

?>
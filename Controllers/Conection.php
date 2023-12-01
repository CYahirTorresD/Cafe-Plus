<?php
    $serverName = "localhost";
    $connectionOptions = array(
        "Database" => "DESKTOP-57UCK6C\MSSQLSERVER01",
        "Uid" => "ssme",
        "PWD" => "ssme"
    );

    // Establecer la conexión
    $conn = sqlsrv_connect($serverName, $connectionOptions);

    // Verificar la conexión
    if (!$conn) {
        die(print_r(sqlsrv_errors(), true));
    }
    ?>
<!-- DATABASE CONFIG -->
<<?php
    $servername = "localhost";
    $username = "ubuntu";
    $password = "ubuntu";
    $dbname = "ventas";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error)
    {
        die("Conexión fallida: " . $conn->connect_error);
    }
?>

<!-- DATABASE CONFIG -->
<?php
    $servername = "mysql";
    $username = "usuario";
    $password = "P@ssw0rd";
    $dbname = "ventas";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error)
    {
        die("Conexión fallida: " . $conn->connect_error);
    }
?>

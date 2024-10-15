<?php
    $host = "localhost";
    $database = "banco_chuleta";
    $user = "root";
    $pass = "";
    $charset = "utf8";
    $port = "3306";

    try
    {
        $conn = new mysqli ($host, $user, $pass, $database);
        mysqli_set_charset ($conn, $charset);
    }

    catch (Throwable $th)
    {
        die("Atenção rolou um erro!" .$th);
    }
?>
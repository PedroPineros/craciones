<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $database = "shop";

    $conn = mysqli_connect($host,  $user, $pass, $database);
        if(!$conn){
            die("conexion fallida".mysqli_connect_error());
        }
        echo "conexion exitosa";
        mysqli_close($conn);
?>
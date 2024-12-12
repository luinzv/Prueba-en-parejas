<?php
    $db_host = "localhost";
    $db_name = "bd_pokemon";
    $db_user = "root";
    $db_pass = "";

    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name); // HUPN

    if(!$conn){
        die("Conexión Fallida" . mysqli_connect_errno());
    }
?>


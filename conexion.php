<?php

function conectar() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "encuesta_producto";
    // Create connection
    $con = mysqli_connect($servername, $username, $password);
    mysqli_select_db($con, $database);
   
    $con->query("SET NAMES 'utf8'");
    return $con;
}
?>
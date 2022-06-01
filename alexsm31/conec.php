<?php

$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'tienda';

$conexion = mysqli_connect($hostname, $username, $password, $database);

if(mysqli_connect_error()) {
    echo 'Conexión fallida';
}
else {
    //echo 'Conexión éxitosa';
}
?>


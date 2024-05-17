<?php
$servidor = "localhost";
$db = "empleado1";
$user = "root";
$password = "";
// Create connection
$conexion = mysqli_connect($servidor, $user, $password, $db);
// Check connection
if (!$conexion) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "";
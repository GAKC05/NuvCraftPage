<?php
//Conexión Parametros
$servername="localhost";
$username="gabriel";
$password="tu_contraseña";
$dbname="formacion";

//Conexión
$conn = new mysqli($servername,$username,$password,$dbname);

//Comprobar conexión
if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}

//echo "Conexión Establecida.";
?>

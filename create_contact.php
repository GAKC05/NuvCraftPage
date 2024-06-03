<?php

include 'db.php';

if($_SERVER['REQUEST_METHOD']=="POST"){
    echo "CREANDO CONTACTO NUEVO <br>";
    $nombre=$_POST['nombre'];
    $telefono=$_POST['telefono'];
    $correo=$_POST['correo'];
    $mensaje=$_POST['mensaje'];

    echo "NOMBRE: " .$nombre. "<br>";
    echo "TELEFONO: " .$telefono. "<br>";
    echo "CORREO: " .$correo. "<br>";
    echo "MENSAJE: " .$mensaje. "<br>";
    $sql="INSERT INTO contactos (nombre,telefono,correo,mensaje) VALUES ('$nombre','$telefono','$correo','$mensaje')";
    
    $stmt = $conn->prepare($sql);
    $result = $ $stmt->execute();

}else{
    echo "ERROR EN METODO POST";
}

?>

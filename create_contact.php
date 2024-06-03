<?php

include 'db.php';

if($_SERVER['REQUEST_METHOD']=="POST"){
    echo "CREANDO CONTACTO NUEVO <BR>";
    $nombre=$_POST['nombre'];
    $phone=$_POST['telefono'];
    $email=$_POST['correo'];
    $mensaje=$_POST['mensaje'];

    echo "NOMBRE: ".$nombre."<br>";
    echo "TELEFONO: ".$phone."<br>";
    echo "CORREO: ".$email."<br>";
    echo "MENSAJE: ".$mensaje."<br>";
    $sql="INSERT INTO contactos (nombre,telefono,correo,mensaje) VALUES ('$nombre','$phone','$email','$mensaje')";
    echo $sql."<br>";
    $stmt = $conn->prepare($sql);
    $result = $stmt->execute();

    if($result){
        echo "CONTACTO CREADO EXITOSAMENTE";
    }else{
        echo "ERROR AL CREAR CONTACTO";
    }

}else{
    echo "ERROR EN METODO POST";
}
?>
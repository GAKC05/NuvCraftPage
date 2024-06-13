<?php
    include 'db.php';
    include "header.php";
    $sql = "SELECT id, nombre, telefono, correo, mensaje FROM contactos";
    $result=$conn->query($sql);
?>

<h2>Mensajes</h2>

<div class="contenedor listado">
    <div class="fila listado">
        <div class="campoCabecera textonormal">
            id
        </div>
        <div class="campoCabecera textonormal">
            Nombre
        </div>
        <div class="campoCabecera textonormal">
            Telefono
        </div>
        <div class="campoCabecera textonormal">
            Correo
        </div>
        <div class="campoCabecera textonormal">
            Mensaje
        </div>
        <div class="campoCabecera textonormal">
            Acción
        </div>
    </div>
    <?php
    $num=0;
    while($row = $result->fetch_assoc()){
        $num++;
        $paridad='impar';
        if($num%2==0){
            $paridad='par';
        }
        //PARIDAD INDICA SI ES PAR O IMPAR
        ?>
            <div class="fila textonormal <?=$paridad?>">
                <div class="campo"><?=$row['id']?></div>
                <div class="campo"><?=$row['nombre']?></div>
                <div class="campo"><?=$row['telefono']?></div>
                <div class="campo"><?=$row['correo']?></div>
                <div class="campo"><?=$row['mensaje']?></div>
                <div class="btm-borrar">
                    <a href="borrar.php?id=<?=$row['id']?>">Borrar</a>
                </div>
            </div>
        <?php
    }
?>

<?php
    include "footer.php";
?>

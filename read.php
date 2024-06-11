<?php
    include 'db.php';
    include "header.php";
    $sql = "SELECT id, nombre, telefono, correo, mensaje FROM contactos";
    $result=$conn->query($sql);

    echo "<pre>";
    var_dump($result);
    echo $result->num_rows;
    echo "</pre>";
?>

<h2>Mensajes</h2>

<div class="contenedor listado">
    <div class="fila cabecera">
        <div class="campocabeccera textonormal">
            id
        </div>
        <div class="campocabeccera textonormal">
            Nombre
        </div>
        <div class="campocabeccera textonormal">
            Telefono
        </div>
        <div class="campocabeccera textonormal">
            Correo
        </div>
        <div class="campocabeccera textonormal">
            Mensaje
        </div>
    </div>
    <?php
    while($row = $result->fetch_assoc()){
        ?>
            <div class="fila contenedor textonormal">
                <div class="campo"><?=$row['id']?></div>
                <div class="campo"><?=$row['nombre']?></div>
                <div class="campo"><?=$row['telefono']?></div>
                <div class="campo"><?=$row['correo']?></div>
                <div class="campo"><?=$row['mensaje']?></div>
            </div>
        <?php
    }
?>

<?php
    include "footer.php";
?>

<?php
    include "header.php";
    if(isset($_GET['status'])){
        $status=$_GET['status'];
        $msg=$_GET['msg'];
        ?>

        <div class="contenedor textonormal <?php echo $status; ?>">
            <p><?php echo $msg ?></p>
        </div>

        <?php
    }
?>

<main>
    <section><!--contacto-->
            <h3 class="textonormal">Contacto</h3>
            <form class="formulario" action="create_contact.php" method="POST">
                <fieldset>
                    <legend>Contáctame Rellenando Tus Datos</legend>
                    <div class="contenedor-campos">
                        <div class="campo">
                            <div>
                                <label for="">Nombre:</label>
                                <input class="input-text" type="text" name="nombre" placeholder="Tu nombre y apellido">        
                            </div>
                        </div>
                        <div class="campo">
                            <div>
                                <label for="">Telefono:</label>
                                <input class="input-text" type="tel" name="telefono" id="" placeholder="Tu número de teléfono">
                            </div>
                        </div>
                        <div class="campo">
                            <div>
                                <label for="">Correo:</label>
                                <input class="input-text" type="email" name="correo" id="" placeholder="Tu correo eléctronico">
                        </div>
                        <div class="campo">
                            <div>
                                <label for="">Mensaje:</label>
                                <textarea class="input-text" type="text" name="mensaje" id="" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        <div>
                            <input class="boton campo1"type="submit" value="Enviar">
                        </div>
                    </div><!--contenedor campos-->
                </fieldset>
            </form>
    </section><!--pie-->
</main>

<?php
    include "footer.php";
?>
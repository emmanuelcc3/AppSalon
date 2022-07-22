<h1 class="nombre-pagina">Servicio</h1>
<p class="descripcion-pagina">Administración de Servicio</p>

<?php

    include_once __DIR__ . '/../templates/barra.php';

?>

<ul class="servicios">

    <?php foreach ($servicios as $servicio) { ?>
        <li>
            <p>Nombre: <span><?php echo $servicio->nombre; ?></span></p>
            <p>Precio: <span>$<?php echo $servicio->precio; ?></span></p>

            <di class="acciones">
                <a class="boton" href="/servicios/actualizar?id=<?php echo $servicio->id;?>">Actualizar</a>

                <form action="/servicios/eliminar" method="POST">
                    
                    <input type="hidden" name="id" value="<?php echo $servicio->id; ?>" >

                    <input type="submit" value="Borrar" class="boton-eliminar">
                </form>
            </di>
        </li>
    <?php }?>
</ul>
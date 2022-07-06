<h1 class="nombre-pagina">Panel de Administrator</h1>


<?php include_once __DIR__ . '/../templates/barra.php' ?>

<h2>Buscar cita</h2>
<div class="busqueda">
    <form class="formulario">
        <div class="campo">
            <label class="fecha">Fecha</label>
            <input type="date" id="fecha" name="fecha" />

    </form>
</div>

<div id="citas-admin">
    <ul class="citas">
        <?php
        $idCita = 0;
        foreach ($citas as $cita) {
            if ($idCita !== $cita->id) {
        ?>
                <li>
                    <p>ID: <span><?php echo $cita->id; ?></span></p>
                    <p>Hora: <span><?php echo $cita->hora; ?></span></p>
                    <p>Nombre: <span><?php echo $cita->cliente; ?></span></p>
                    <p>Email: <span><?php echo $cita->email; ?></span></p>
                    <p>Teléfono: <span><?php echo $cita->telefono; ?></span></p>

                    <h3>Servicios</h3>

                <?php
                $idCita = $cita->id;
            } //Fin de IF 
                ?>
                <p class="servicio"><?php echo $cita->servicio . " " . "$" . $cita->precio; ?></p>
                </li>
            <?php } //Fin de Foreach 
            ?>
    </ul>
</div>
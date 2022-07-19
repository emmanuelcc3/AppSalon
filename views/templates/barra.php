
<div class="barra">

<p>Hola: <?php echo $nombre ?? ''; ?></p>
<a class = 'boton' href="/logout">Cerrar Seccion</a>

</div>

<?php if (isset($_SESSION['admin'])){ ?>
   <div class = 'barra-servicios'>
    <a class = "boton" href="/admin">Ver citas</a>
    <a class = "boton" href="/servicios">Ver Servicios</a>
    <a class = "boton" href="/servicios/crear">Nuevo Servicios</a>
   </div>
<?php } ?>
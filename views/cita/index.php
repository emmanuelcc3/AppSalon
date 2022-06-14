<h1 class="nombre-pagina">Crear Nuevo Cita</h1>

<p class="descripcion-pagina">Elige tus servicios y coloca tus datos</p>

<div id="app">
    <nav class = "tabs">
        <button class="actual" type="button" data-paso="1">Servicios</button>
        <button type="button" data-paso="2">Informacion Cita</button>
        <button type="button" data-paso="3">Resumen</button>
    </nav>
    <div id="paso-1" class="seccion">
        <h2>Servicios</h2>
        <p class="text-center">Elige tus servicios a continuacion</p>
        <div id="servicios" class="listado-servicios"></div>
    </div>
    <div id="paso-2" class="seccion">
        <h2>Tus Datos y Cita</h2>
        <p class="text-center">Coloca tus datos y fecha de tu cita</p>

        <form class="formulario"></form>
         <div class="campo">
          <label for="nombre">Nombre:</label>
          <input
              id="nombre"
              type="text"
              placeholder="Tu Nombre"
              value="<?php echo $nombre; ?>"
              disabled
          />
         </div>
         <div class="campo">
          <label for="fecha">Fecha:</label>
          <input
              id="fecha"
              type="date"
          />
         </div>
         <div class="campo">
          <label for="hora">Hora:</label>
          <input
              id="hora"
              type="time"
          />
         </div>
    </div>
    <div id="paso-3" class="seccion">
        <h2>Resumen</h2>
        <p class="text-center">Verifica que la informacion sea correcta</p>
    </div>

    <div class="paginacion">
        <button class="boton" id="anterior">&laquo; Anterior</button>
        <button class="boton" id="siguiente">Siguiente &raquo;</button>
    </div>
</div>

<?php echo $script = "
  <script src='build/js/app.js'></script>
"; ?>
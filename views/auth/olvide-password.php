<h1 class="nombre-pagina">Olvidates tu password</h1>
<p class="descripcion-pagina">Restablece tu password escribiendo tu email a continuación</p>

<?php
  include_once __DIR__ ."/../templates/alertas.php";
?>

<form class="formulario" method="post" action="/olvide">
    <div class="campo">
        <label class="email">Email</label>
        <input type="email" name="email" id="email" placeholder="Tu Email">
    </div>

    <input type="submit" class="boton" value="Recuperar Password">
</form>

<div class="acciones">
    <a href="/">¿Ya tienes una cuenta? Inicia Sesión</a>
    <a href="/crear-cuenta">¿Aún no tienes una cuenta? Crear una</a>
</div>
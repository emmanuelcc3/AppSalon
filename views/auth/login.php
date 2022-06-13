<h1 class="nombre-pagina">Login</h1>
<p class="descripcion-pagina">Inicia sesión con tus datos</p>

<?php
  include_once __DIR__ ."/../templates/alertas.php";
?>

<form class="formulario" method="post" action="/">
    <div class="campo">
        <label class="email">Email</label>
        <input type="email" name="email" id="email" placeholder="Tu Email" value="<?php echo s($auth->email); ?>">
    </div>

    <div class="campo">
        <label class="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Tu Password">
    </div>

    <input type="submit" class="boton" value="Iniciar Seccion">
</form>

<div class="acciones">
    <a href="/crear-cuenta">¿Aún no tienes una cuenta? Crear una</a>
    <a href="/olvide">¿Olvidaste tus password?</a>
</div>
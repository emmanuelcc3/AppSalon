<h1 class="nombre-pagina">Crear Cuenta</h1>
<p class="descripcion-pagina">Llena el siguiente formulario para crear una cuenta</p>

<?php
  include_once __DIR__ ."/../templates/alertas.php";
?>

<form class="formulario" method="post" action="/crear-cuenta">
<div class="campo">
        <label class="nombre">Nombre</label>
        <input 
        type="text" 
        name="nombre" 
        id="nombre" 
        placeholder="Tu Nombre"
        value="<?php echo s($usuario->nombre);?>"
        
        >
    </div>

<div class="campo">
        <label class="apellido">Apellido</label>
        <input 
        type="text" 
        name="apellido" 
        id="apellido" 
        placeholder="Tu Apellido"
        value="<?php echo s($usuario->apellido); ?>"
        
        >
    </div>

<div class="campo">
        <label class="telefono">Teléfono</label>
        <input 
        type="tel" 
        name="telefono" 
        id="telefono" 
        placeholder="Tu Teléfono"
        value="<?php echo s($usuario->telefono);?>"
        
        >
    </div>

<div class="campo">
        <label class="email">E-mail</label>
        <input 
        type="email" 
        name="email" 
        id="email" 
        placeholder="Tu E-mail"
        value="<?php echo s($usuario->email);?>"
        
        >
    </div>

<div class="campo">
        <label class="password">Password</label>
        <input 
        type="password" 
        name="password" 
        id="password" 
        placeholder="Tu Password"
        
        >
    </div>  

    <input type="submit" class="boton" value="Crear Cuenta">
</form>

<div class="acciones">
    <a href="/">¿Ya tienes una cuenta? Inicia Sesión</a>
    <a href="/olvide">¿Olvidaste tus password?</a>
</div>
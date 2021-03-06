<?php 

require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\APIController;
use Controllers\CitaController;
use Controllers\AdminController;
use Controllers\LoginController;
use Controllers\ServicioController;



$router = new Router();

//Iniciar Sesion

$router->get('/', [LoginController::class,'login']);
$router->post('/', [LoginController::class,'login']);
$router->get('/logout', [LoginController::class,'logout']);

//Recuperar Password

$router->get('/olvide', [LoginController::class,'olvide']);
$router->post('/olvide', [LoginController::class,'olvide']);
$router->get('/recuperar', [LoginController::class,'recuperar']);
$router->post('/recuperar', [LoginController::class,'recuperar']);

//Crear cuenta

$router->get('/crear-cuenta', [LoginController::class,'crear']);
$router->post('/crear-cuenta', [LoginController::class,'crear']);

//Confimar cuenta 

$router->get('/confirmar-cuenta', [LoginController::class,'confirmar']);
$router->get('/mensaje', [LoginController::class,'mensaje']);

//Area privada
$router->get('/cita',[CitaController::class,'index']);
$router->get('/admin',[AdminController::class,'index']);

//API de citas
$router->get('/api/servicios',[APIController::class,'index']);
$router->post('/api/citas',[APIController::class,'guardar']);
$router->post('/api/eliminar', [APIController::class, 'eliminar']);

//CRUD de servicios para
$router->get('/servicios', [ServicioController::class, 'index']);
$router->get('/servicios/crear', [ServicioController::class, 'crear']);
$router->post('/servicios/crear', [ServicioController::class, 'crear']);
$router->get('/servicios/actualizar', [ServicioController::class, 'actualizar']);
$router->post('/servicios/actualizar', [ServicioController::class, 'actualizar']);
$router->post('/servicios/eliminar', [ServicioController::class, 'eliminar']);


// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();

//Para correr el proyecto hay que abrirlo desde la termina 
//La carpeta que queres el usuario vea es el public tenes que arracar el sistema desde es la carpecta
// en la termina pones (cd public)
//para ver que tiene es carpecta pones ls
//para arracar el sistema sin el php usamos php -S localhost:3000

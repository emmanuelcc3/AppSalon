<?php

namespace Controllers;

use Model\AdminCita;
use MVC\Router;

class AdminController {

    public static function index(Router $router) {
        isSession();

        //Consultar la base de datos de la base
        $consulta = "SELECT citas.id, citas.hora, CONCAT( usuarios.nombre, ' ', usuarios.apellido) as cliente, ";
$consulta .= " usuarios.email, usuarios.telefono, servicios.nombre as servicio, servicios.precio  ";
$consulta .= " FROM citas  ";
$consulta .= " LEFT OUTER JOIN usuarios ";
$consulta .= " ON citas.usuarioId=usuarios.id  ";
$consulta .= " LEFT OUTER JOIN citasservicio ";
$consulta .= " ON citasservicio.citaId=citas.id ";
$consulta .= " LEFT OUTER JOIN servicios ";
$consulta .= " ON servicios.id=citasservicio.servicioId ";
// $consulta .= " WHERE fecha =  '${fecha}' ";

$citas = AdminCita::SQL($consulta);



        $router->render('admin/index',[
            'nombre' => $_SESSION['nombre'],
            'citas'  => $citas
        ]);

    }

}
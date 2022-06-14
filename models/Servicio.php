<?php

namespace Model;

class Servicio extends ActiveRecord {
    //Base de datos 
    protected static $tabla = 'servicios';
    protected static $columnasDB = ['id', 'nombre', 'precio'];

    //Atributos
    public $id;
    public $nombre;
    public $precio;

    //Constructor
    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->precio = $args['precio'] ?? '';
    }
}
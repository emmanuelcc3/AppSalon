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

    public function validar() {
        if (!$this->nombre) {
            self::$alertas['error'][] = 'El Nombre del servicio es Obligatorio'; 
            # code...
        }
        if (!$this->precio) {
            self::$alertas['error'][] = 'El Precio del servicio es Obligatorio'; 
            # code...
        }

        if (!is_numeric($this->precio)) {
            self::$alertas['error'][] = 'El Precio no es valido'; 
            # code...
        }

        return self::$alertas;
    }
}
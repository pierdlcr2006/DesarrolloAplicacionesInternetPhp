<?php

namespace Model;

class Generos extends ActiveRecord {
    protected static $table = "generos";
    protected static $columns = ['id', 'nombre','fechaCreacion'];
    public $id;
    public $nombre;
    public $fechaCreacion;

    function __construct($args = []) {
        $this->id = $args['idgeneros'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->fechaCreacion = date('YY-m-d');
    }

}
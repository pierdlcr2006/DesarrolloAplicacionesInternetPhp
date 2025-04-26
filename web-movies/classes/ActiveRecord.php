<?php

namespace Model;

class ActiveRecord{
    protected static $db;
    protected static $table = '';
    protected static $errores = [];
    protected static $columns = [];
    public static function setDB($db){
        self::$db = $db;
    }
    public static function getErrores(){
        return static::$errores;
    }
    public function save(){
        $atributos = $this->sanitizarAtributos();

        $query = "INSERT INTO ".static::$table;
        $query .= " (".join(', ',array_keys($atributos))." )";
        $query .= " VALUES ('".join("','", array_values($atributos))."')";
        $resultado = self::$db->query($query);
        return $resultado;
    }
    public static function all(){
        $query = "SELECT * FROM ".static::$table;
        $resultado = self::consultarSQL($query);
        return $resultado;
    }
    public static function find($id){
        $query = "SELECT * FROM ".static::$table." WHERE id = ".$id;
        $resultado = self::consultarSQL($query);
        return array_shift($resultado);
    }
    public static function consultarSQL($query){
        $resultado = self::$db->query($query);
        $array = [];
        while($registro = $resultado->fetch_assoc()){
            $array[] = self::crearObjeto($registro);
        }
        $resultado->free();
        return $array;
    }
    protected static function crearObjeto($array){
        $objeto = new static;
        foreach($array as $key => $value){
            if (property_exists($objeto, $key)){
                $objeto->$key = $value;
            }
        }return $objeto;
    }
    public function atributos(){
        $atributos = [];
        foreach (static::$columns as $column) {
            if($column == 'id')continue;
            $atributos[$column] = $this->$column;
        }
        return $atributos;
    }
    public function sanitizarAtributos(){
        $atributos = $this->atributos();
        $sanitizado = [];
        foreach($atributos as $key => $value){
            $sanitizado[$key] = self::$db->escape_string($value);
        }return $sanitizado;
    }
    public function sincronizar(){
        return $this;
    }

}
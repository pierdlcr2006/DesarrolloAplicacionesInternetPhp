<?php

namespace Model;

class Peliculas extends ActiveRecord {
    protected static $table = "peliculas";
    protected static $columns = ['id', 'titulo', 'rating','premio','lanzamiento','duracion','imagen','idGenero'];
    public $id;
    public $titulo;
    public $rating;
    public $premio;
    public $lanzamiento;
    public $duracion;
    public $imagen;
    public $idGenero;

    public function __construct($array = []){
        $this->id = $array["idpeliculas"] ?? null;
        $this->titulo = $array["titulo"] ?? '';
        $this->rating = $array["rating"] ?? '';
        $this->premio = $array["premios"] ?? '';
        $this->lanzamiento = $array["anolanzamiento"]??'';
        $this->duracion = $array["duracion"] ?? '';
        $this->imagen = '';
        $this->idGenero = $array["idgenero"] ?? '';

    }
    function validar(){
        if(!$this->titulo && !$this->premio && !$this->rating && !$this->lanzamiento && !$this->duracion && !$this->idGenero ){
            self::$errores[] = "Los campos son obligatorios";
        }
        else{
            if(!$this->titulo){
                self::$errores[] = "El titulo es requerido";
            }
            if(!$this->premio){
                self::$errores[] = "El premios es requerido";
            }else{
                if (!filter_var($this->premio, FILTER_VALIDATE_INT)) {
                    self::$errores[] = "Escriba un formato válido para los premios";
                }
            }
            if(!$this->duracion){
                self::$errores[] = "La duracion es requerida";
            } else{
                if (!filter_var($this->duracion, FILTER_VALIDATE_INT)) {
                    self::$errores[] = "Escriba un formato válido para la duración";
                }
            }
            if(!$this->idGenero){
                self::$errores[] = "El genero es requerido";
            }
            if(!$this->rating){
                self::$errores[] = "El rating es requerido";
            }else{
                if (!filter_var($this->rating, FILTER_VALIDATE_INT)) {
                    self::$errores[] = "Escriba un formato válido para el rating";
                }
            }
            if(!$this->lanzamiento){
                self::$errores[] = "El lanzamiento es requerido";
            }
            if(!$this->imagen){
                self::$errores[] = "La imagen es requerida";
            }
        }
        return self::$errores;
    }
    public function setImagen($imagen){
        $this->imagen = $imagen;
    }


}
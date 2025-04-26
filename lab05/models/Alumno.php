<?php
require_once 'Persona.php';

class Alumno extends Persona{
    private float $nota1;
    private float $nota2;
    private static float $promedio;
    public function __construct(float $nota1, float $nota2,string $nombre, string $apellido){
        parent::__construct($nombre, $apellido);
        $this->nota1 = $nota1;
        $this->nota2 = $nota2;
    }
    public function promedio() : float{
        self::$promedio = ($this->nota1 + $this->nota2)/2;
        return self::$promedio;
    }

    public function getNota1(): float
    {
        return $this->nota1;
    }

    public function setNota1(float $nota1): void
    {
        $this->nota1 = $nota1;
    }

    public function getNota2(): float
    {
        return $this->nota2;
    }

    public function setNota2(float $nota2): void
    {
        $this->nota2 = $nota2;
    }

}
<?php
require_once 'Persona.php';
class Docente extends Persona{
    private int $horas;
    private float $tarifa;
    private static float $pagoTotal;
    public function __construct(int $horas, float $tarifa,string $nombre,string $apellido){
        parent::__construct($nombre,$apellido);
        $this->horas = $horas;
        $this->tarifa = $tarifa;
    }
    public function calcularTarifa() : float{
        self::$pagoTotal = $this->tarifa * $this->horas;
        return self::$pagoTotal;
    }

    public function getHoras(): int
    {
        return $this->horas;
    }

    public function setHoras(int $horas): void
    {
        $this->horas = $horas;
    }

    public function getTarifa(): float
    {
        return $this->tarifa;
    }

    public function setTarifa(float $tarifa): void
    {
        $this->tarifa = $tarifa;
    }

}
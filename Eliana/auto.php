<?php
require("con_sql.php");

class Auto{

    protected $patente;
    protected $marca;
    protected $modelo;
    protected $anio;
    protected $color;
    protected $pathImagen;
    protected $id;
    protected $precio;

    public function __construct($patente, $marca, $modelo, $anio, $color, $pathImagen, $id, $precio)
    {
        $this->patente = $patente;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->anio = $anio;
        $this->color = $color;
        $this->pathImagen = $pathImagen;
        $this->id = $id;
        $this->precio = $precio;
    }

    public function getPatente(){
        return $this->patente;
    }
    
    public function getMarca(){
        return $this->marca;
    }

    public function getModelo(){
        return $this->modelo;
    }

    public function getAnio(){
        return $this->anio;
    }

    public function getColor(){
        return $this->color;
    }

    public function getImagen(){
        return $this->imagen;
    }

    public function getId(){
        return $this->id;
    }

    public function getPrecio(){
        return $this->precio;
    }


}
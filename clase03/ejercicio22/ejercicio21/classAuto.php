<?php

class Auto
{

    //contiene un string del color
    private $_color;

    //contiene un Double del precio
    private $_precio;

    //contiene un string con la marca del Vehiculo
    private $_marca;

    //contiene un DateTime
    private $_fecha;

    public function __constructor($marca, $color = NULL, $precio = 10000,  $fecha = NULL)
    {
        $this->_color = $color;
        $this->_precio = $precio;
        $this->_marca = $marca;
        $this->_fecha = $fecha;

    }


    //tiene que pasarle algo de tipo Auto
    public static function AgregarImpuesto($auto)
    {
        if($auto != NULL) $auto->precio *= 1.25;

        return $auto;
    }

    //solo compara autos
    public function Equals($auto)
    {
        $returnAux = false;

        if($this->_marca === $auto->_marca && $this->_fecha === $this->_fecha) $returnAux;

        return $returnAux;
    }

}



?>
<?php


abstract class FiguraGeometrica
{
    protected $_color;
    protected $_superficie;
    protected $_perimetro;

    public function __construct($color)
    {
        $this->_color;
        $this->_superficie = 0;
        $this->_perimetro = 0;
        
    }

    public function Color()
    {
        return $this->_color;
    }

    public function Superficie()
    {
        return $this->_superficie;
    }

    public function Perimetro()
    {
        return $this->_perimetro;
    }



    public function toString()
    {

        //return $this->Color();

    }

    public abstract function Dibujar();
    

    protected abstract function CalcularDatos();
    
}

?>
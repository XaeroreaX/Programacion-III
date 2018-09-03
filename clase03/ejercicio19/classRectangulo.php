<?php
include_once "classFiguraGeometrica.php";

class Rectangulo extends FiguraGeometrica
{

    private $_altura;
    private $_ancho;


    public function __construct($color, $altura, $ancho)
    {
        parent::__construct($color);
        $this->_altura = $altura;
        $this->_ancho = $ancho;
        $this->CalcularDatos();
    }

    public function Dibujar()
    {
        $i; 
        $j;
        $forma = "<p style='color:". $this->_color ."'>";


        //<p style = $color;

        for($i = 0; $i < $this->_altura;$i++)
        {
            for($j = 0; $j < $this->_ancho; $j++)
            {
                $forma .= "*";
            }
            $forma .= "<br>";
            
        }
        

        return $forma . "<\p>";
    }


    protected function CalcularDatos()
    {
        $this->_superficie = $this->_altura * $this->_ancho;
        $this->_perimetro = 2 * ($this->_altura + $this->_ancho);
    }


}


?>
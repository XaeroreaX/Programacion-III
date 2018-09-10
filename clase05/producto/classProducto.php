<?php

class Producto
{

    //string
    private $_codBarra;

    //string
    private $_nombre;


    public function GetCodBarra()
    {

        return $this->_codBarra;
    }

    public function getNombre()
    {
        return $this->_nombre;
    }

    public function SetCodBarra($codBarra)
    {
        $this->_codBarra = $codBarra;
    }

    public function SetNombre($nombre)
    {

        $this->_nombre = $nombre;
    }

    public function __construct($codBarra = null, $nombre = null)
    {
        $this->_codBarra = $codBarra;
        $this->_nombre = $nombre;
    
    }


    public function toString()
    {
        $show = null;

        if($this->_codBarra != null && $this->_nombre)
        {
            
            $show = $this->_nombre." - ". $this->_codBarra;
        
        }
        
        return $show;
    }

    public static function Guardar($producto)
    {
        $pFile = fopen("Producto.txt", "a+");

        fwrite($pFile, $producto->toString(). "\n");
    }


    public static function GetArryOfProductos()
    {

        $productos = array();

        $pFile = fopen("Producto.txt", "r+");

        $linea;

        $auxExplode;

        while(!feof($pFile))
        {
            $linea = fgets($pFile);

            $auxExplode = explode("-", $linea);

            $auxExplode[0] = trim($auxExplode[0]);
            $auxExplode[1] = trim($auxExplode[1]);


            array_push($productos, new Producto($auxExplode[1], $auxExplode[0]));

        }


        fclose($pFile);


        return $productos;

    }

}






?>
<?php

include_once "classProducto.php";

$productos = Producto::GetArryOfProductos();

//$producto = new Producto($_POST["codigoDeBarra"], $_POST["nombre"]);

//

//Producto::Guardar($producto);

foreach($productos as $producto)    
    echo $producto->toString() . "<br>" ;



?>
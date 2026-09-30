<?php 
namespace Cafeteria\app\Modelos;

use Cafeteria\app\Modelos\Producto;
use Cafeteria\app\Enums\Tamano;


class Bebida extends Producto {

public function __construct($nombre, $precioBase)
{
    parent::__construct($nombre,$precioBase);
}

	public function precioFinal(int $cantidad): float
    {
        
    }
}


?>
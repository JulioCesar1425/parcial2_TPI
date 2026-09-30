<?php 
namespace Cafeteria\app\Modelos;

use Cafeteria\app\Modelos\Producto;
use Cafeteria\app\Enums\Tamano;

class Bebida extends Producto {

public function __construct()
{
    parent::__construct($nombre,$precioBase);
}


}


?>
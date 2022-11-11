<?php
namespace App;

use Exception;

interface FichaInter{
    public function fichaColor();
}

class Ficha implements FichaInter{
    protected string $color;

    public function __construct(string $color){
        if (!($color == 'blanco' || $color == 'rojo' || $color == 'azul')) {
			throw new \Exception("El color de la ficha es erroneo\n");
			return;
		}
    }

    public function fichaColor(){
        return $this->$color;
    }
}
?>
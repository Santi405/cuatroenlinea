<?php
namespace App;

use Exception;

interface FichaInter{
    public function fichaColor();
}

class Ficha implements FichaInter{
    protected String $color;

    public function __construct(String $color){
        if (!($color == 'blanco' || $color == 'rojo' || $color == 'azul')) {
			throw new \Exception("El color de la ficha es erroneo\n");
			return;
		}

        $this->color = $color;
    }

    public function fichaColor(){
        return $this->color;
    }
}
?>
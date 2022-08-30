<?php
namespace App;

interface FichaInter{
    public function fichaColor();
}

class Ficha implements FichaInter{
    protected int $color;
    function __construct(int $color){
        $this->$color = $color
    }

    public function fichaColor(){
        return $this->$color;
    }
}
?>
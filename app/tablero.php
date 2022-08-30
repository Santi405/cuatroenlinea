<?php
    namespace App;

interface TableInter{
    public function TirarFicha(Ficha $ficha, int $posX) : ?bool;
    public function LecturaPos(int $posX, int $posY) : ?Ficha; // El signo de pregunta permite devolver NULL
    public function Vaciar() : NULL;
}

class Tablero implements TableInter{
    protected array $cuadricul;
    protected int $tamañoX;
    protected int $tamañoY;
     
    function __construct(int $tamañoX, int $tamañoY){
        $this->$tamañoX = $tamañoX;
        $this->$tamañoY = $tamañoY;
    }

    public function Vaciar() : NULL{
        for($i = 0; $i < $tamañoX, $i++){
            for($j = 0; $j < $tamañoY, $j++){
                $this->$cuadricul[$i][$j] = NULL;
            }
        }
    }

    public function TirarFicha(Ficha $ficha, int $posX) : ?bool{
        $this->$cuadr[][]
    }

}

?>
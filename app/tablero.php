<?php
    namespace App;

use Exception;

interface TableInter{
    public function TirarFicha(Ficha $ficha, int $coordX);
    public function TableroLimpio();
    public function LecturaPos(int $coordX, int $coordY); // El signo de pregunta permite devolver NULL
    public function imprimirTablero();
    public function getHeight();
    public function getWidth();
}

class Tablero implements TableInter{
    public array $cuadricul;
    protected int $anchura;
    protected int $altura;
     
    function __construct(int $tamañoX, int $tamañoY){
        if($tamañoX < 4 || $tamañoY < 4){
            throw new Exception("Dimenisones erroneas, valor minimo = 4");
            return;
        }

        $this->anchura = $tamañoX;
        $this->altura = $tamañoY;
        $this->TableroLimpio();
    }

    public function getHeight()
    {
        return $this->altura;
    }

    public function getWidth()
    {
        return $this->anchura;
    }

    public function TableroLimpio(){
        for($i = 0; $i <= $this->altura; $i++){
            for($j = 0; $j <= $this->anchura; $j++){
                $this->cuadricul[$j][$i] = new Ficha("blanco");
            }
        }
    }

    public function LecturaPos(int $coordX, int $coordY){
        if($coordX > $this->anchura || $coordY > $this->altura){
            throw new Exception("Dimenisones erroneas, valor minimo = 4");
            return;
        }
        return (($this->cuadricul[$coordX][$coordY]->fichaColor() == 'rojo') || ($this->cuadricul[$coordX][$coordY]->fichaColor() == 'azul'));
    }

    public function TirarFicha(Ficha $ficha, int $coordX){
        if($coordX < 0 || $coordX > $this->anchura-1){
            throw new Exception("La posición de la ficha está fuera del area del tablero");
            return;
        }

        $j = 0;

        while($j <= $this->altura){
            if($this->LecturaPos($coordX, $j)){
                $this->cuadricul[$coordX][$j] = $ficha;
                break;
            }
            $j++;
        }
    }

    public function imprimirTablero(){
        $title="TABLERO";
        echo $title;
		echo "\n" . str_repeat('_', strlen($title)) . "\n";

        for($j = 0; $j < $this->altura; $j++){
            echo $j . "\t";
            for($i =0 ; $i<$this->anchura; $i++){
                echo $this->cuadricul[$i][$j]->fichaColor() . "\t";
            }
        }

        for($j = 0; $j < $this->anchura; $j++){
            if ($j == 0){
                echo "\t" . $j . "\t";
            }
            else 
                echo $j . "\t";
        }   

    }

}

?>
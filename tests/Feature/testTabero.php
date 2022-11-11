<?php
namespace Tests\Feature;
namespace App;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class TableroTest extends TestCase{
/** @test */
public function TestearTablero(){

// Creo un tablero de (x,y) dimensiones y dos variables con los colores de la ficha
$tablero = new Tablero(5,5);
$FichaRoja = new Ficha('rojo');
$FichaAzul = new Ficha('azul');

// Suelto fichas en posiciones al azar
$tablero->TirarFicha($FichaRoja, 3);
$tablero->TirarFicha($FichaAzul, 3);
$tablero->TirarFicha($FichaRoja, 3);
$tablero->TirarFicha($FichaAzul, 5);
$tablero->TirarFicha($FichaRoja, 3);
$tablero->TirarFicha($FichaAzul, 4);
$tablero->TirarFicha($FichaRoja, 3);
$tablero->TirarFicha($FichaAzul, 4);

$redAmount = 0;
$blueAmount = 0;
$whiteAmount = 0;

// Cuento fichas rojas y azules en el tablero
for ($x=0; $x<$tablero->getHeight(); $x++) {
    for ($y=0; $y<$tablero->getWidth(); $y++) {
    if(($tablero->ATablero[$x][$y]->ConseguirColor()) == 'azul'){
    $blueAmount++;
    }else if(($tablero->ATablero[$x][$y]->ConseguirColor()) == 'rojo'){
            $redAmount++;
    }else $whiteAmount++;
    }
}

$this->assertTrue($whiteAmount == (25-($redAmount+$blueAmount)));

}
}
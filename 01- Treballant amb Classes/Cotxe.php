<?php
include_once 'Vehicle.php';

class Cotxe extends Vehicle
{

   private $numPortes;
   
   public function setNumPortes($numero)
   {
       $this->numPortes=$numero;
   }

   public function getNumPortes()
   {

       return $this->numPortes;

   }

}

?>

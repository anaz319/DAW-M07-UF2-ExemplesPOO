<?php
// carreguem el sistema per carregar les classes automàticament.
// Hem de tenir instal·lat el composer!
require_once __DIR__ . '/vendor/autoload.php';

// No posem cap include més!

// utilitzant els alias amb use
use Granja\Tractor;
use Vehicles\Tractor as Tractor2;
 
$t1 = new Tractor();
$t2 = new Tractor2();

// de forma directa!
$animal = new Granja\Animal();
$granger = new Granja\Granger();
$granja = new Granja\Granja();

$cotxe = new Vehicles\Cotxe();
$moto = new  Vehicles\Moto();
$tren = new  Vehicles\Tren();
?>
  
  
<?php
include_once 'Vehicle.php';
include_once 'Cotxe.php';
include_once 'Tractor.php';

  $v = new Vehicle('Nissan','Cascai');
  echo $v->marca." ";
  $v->setColor('vermell');
  echo $v->getColor();

  $c = new Cotxe;
  $c->setNumPortes(5);
  $c->setColor('blau');
  echo $c->getNumPortes();
  echo $c->marca;
  echo $c->arrancar();

  $t = new Tractor(1000,'John Deere');
  echo $t->marca;
  echo $t->arrancar();

  ?>
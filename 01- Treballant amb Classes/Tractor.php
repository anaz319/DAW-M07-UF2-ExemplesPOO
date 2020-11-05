<?php
include_once 'Vehicle.php';

class Tractor extends Vehicle {

	private $potencia;


	// Sobrescriptura de mètodes

	public function __construct($potencia,$marca=null,$model=null)
	{	  
	  	  echo '<br>Has creat un objecte Tractor<br>';

	  	  // Si es vol cridar el constructor del pare!
	  	  parent::__construct($marca,$model);

	  	  $this->potencia = $potencia;	  

	}


	public function arrancar() {
		// Si es vol cridar el mètode que es sobreescriu del pare!
		parent::arrancar();
		
		echo "<br>Troc troc!!<br>";
	}

}

?>
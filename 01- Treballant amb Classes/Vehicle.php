<?php

class Vehicle
{
	// atributs: public  o private
	public $marca;
	protected $model;
	private $color;
    

	// metodes per accedir a l'atribut private
	public function setColor($valor)
	{
		$this->color = $valor;
		
	}
	public function getColor()
	{
		return $this->color;
	}


	// S'executa quan es crea un objecte de la classe
	public function __construct($marca=null,$model=null)
	{
	  
  	  echo '<br>Has creat un objecte Vehicle<br>';
	  $this->marca=$marca;
	  $this->model=$model;
	}

	// S'executa quan es destrueix un objecte de la classe
	public function __destruct()
	{
	  
  	  echo '<br>Adeu vehicle!!<br>';
	}

	public function arrancar() {
		echo "<br>Brumm brumm<br>";
	}
}



?>


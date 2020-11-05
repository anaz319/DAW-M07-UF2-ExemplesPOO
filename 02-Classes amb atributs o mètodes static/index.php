<?php
class mates {
  
  public static $pi=3.14159;
  public static function suma($a,$b) {
  		return $a + $b ;
  }

}

echo mates::$pi;
echo "<br>";
echo mates::suma(10,20);

?>
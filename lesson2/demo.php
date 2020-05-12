<?php 

/**
 * 
 */
class Demo
{
	
	public function getName(){
		return $this->name;
	}
}


$nam = new Demo();
$nam->name = "Someone";

$loan = new Demo();
$loan->name = "loan beo";

echo $nam->getName();

 ?>
<?php

class man{
	public $name;
	public $age = 23;
	public $height= 5.6;

    function __construct($name,$age,$height){
	$this->name = $name;
	$this->age = $age;
	$this->height = $height;
	}	
    protected function info(){
	  return "Name: ".$this->name."age: ".$this->age."height: ".$this->height;
	}
}
class monjur extends man{
	public function message(){
	return $this->info();
	}
}

$monjur = new monjur("monjur",16,5.4);

echo $monjur->message();


?>


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
	function __destruct(){
	echo "Name:".$this->name."<br/>"."Age:".$this->age."<br/>"."Height".$this->height; 
	}
}

$obj = new man("munna",23,5.6);

?>


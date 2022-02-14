<?php

class man{
	public $name;
	public $age = 23;
	public $height= 5.6;
	
	function info($m){
	$this->name = $m;
	echo $this->name;
	}
}

$obj = new man();

$obj->info("munna vai");
?>


<?php

class bubt{
	const cse = "Welcome to Cse Department";
	
	function showDept(){
		return self :: cse;
	}

}
//echo bubt :: cse;
//without object we can access properties and show

$obj = new bubt();
echo $obj->showDept();
  

?>


<?php
require 'results1.php';

class Maths{
	public $average;
	
	public function mathfunc()
	{
	
		$average=($_POST['max']+$_POST['min'])/2;
		return $average;
		
	
	}

	mathfunc();
}
         
?>
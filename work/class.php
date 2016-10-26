<?php
require 'maths.php';

class Maths{
	public $average;
	public function mathfunc( )
	{
	
		$average=($_POST['max']+$_POST['min'])/2;
		return  $average;
	
	
	}
}

          
?>
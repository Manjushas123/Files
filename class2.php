<?php
require 'maths2.php';
//require 'results2.php';

class Maths
{
	public $average;

	public function mathfunc()
	{
	
		//$average=($_POST['max']+$_POST['min'])/2;
		//return  $average;
		if(isset($_POST['sub']))

		{
			$average = new Maths();

            $average->mathfunc();
		if(empty($_POST['max']) || empty($_POST['min']))

     {
     	//$average = new Maths();

    //  $average->mathfunc();
  echo "<i>";
	$comment="Error: Fields cannot be empty.";
	echo $comment;
  echo "</i>";
	   }











	 //condition to check the max and min limits
//else if($_POST['max']<10 ||$_POST['min']>10 )
    
    //{
  //echo "<i> ";
	//echo "Error:Max value should not be less than 10 and Min value should not exceed 10.";
 // echo "</i>";
    }

else
  //calculation part  
    { 
      $average=($_POST['max']+$_POST['min'])/2;
      echo "<b>";
      echo "Average of the two numbers is ".$average ;
      echo "</b>";

    }
	
	}
}
}
mathfunc();
//$average = new Maths();

    //  $average->mathfunc();   
          
?>
<?php
//require 'maths2.php';
class Maths{
public function mathfunc()
{
if(empty($_POST['max']) || empty($_POST['min']))

     {
     	//$average = new Maths();

    //  $average->mathfunc();
  echo "<i>";
	$comment="Error: Fields cannot be empty.";
	echo $comment;
  echo "</i>";
      }

/*if (!filter_var($comment, FILTER_VALIDATE_EMAIL) === false) {
    echo("$email is a valid email address");
} else {
    echo("$email is not a valid email address");
}



	   }

/*if (filter_var($_POST['max'], FILTER_VALIDATE_INT) >10 || !filter_var($_POST['min'], FILTER_VALIDATE_INT) >10) {
    echo("Integer is valid");
} else {
    echo("Integer is not valid");
}*/
/*else if($_POST['max'] >10 || $_POST['min']<10)
 {
  $error = " !";
  $code = 3;
 }*/





	 //condition to check the max and min limits
else if($_POST['max']<10 ||$_POST['min']>10 )
    
    {
  echo "<i> ";
$comm= "Error:Max value should not be less than 10 and Min value should not exceed 10.";
echo $comm;
 echo "</i>";
 /*if (!filter_var($comm, FILTER_VALIDATE_EMAIL) === false) {
    echo("$email is a valid email address");
} else {
    echo("$email is not a valid email address");
}*/
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
if(isset($_POST['sub']))
{
	$average=new Maths();
    $average->mathfunc();
}
require 'maths2.php';
?>
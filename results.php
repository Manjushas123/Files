
<?php
//condition to check if the fields are empty
if(empty($_POST['max']) || empty($_POST['min']))

     {
	$comment="Error: Fields cannot be empty";
	echo $comment;
	 }

	 //condition to check the max and min limits
else if($_POST['max']<10 ||$_POST['min']>10 )
    
    {
	echo "Error:Max value should not be less than 10 and Min value should not exceed 10.";
    }

else
  //calculation part  
    { 
      $average=($_POST['max']+$_POST['min'])/2;
      echo "Average of the two numbers is ".$average;

    }
    
?>

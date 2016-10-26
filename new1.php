<?php
//require 'maths2.php';
class Maths
{
    public function mathfunc()
        {

             $max=$_POST['max'];
             $min=$_POST['min'];

             

              if($max<10|| $min>10){
                $this->error="invalid";
                 // $error="invalid";
                  //echo $error;
                  $code=1;
//echo "<p class='error'> enter a valid number </p>";
              } 
             else { 
             $average=($_POST['max']+$_POST['min'])/2;
             echo "<b>";
             echo "Average of the two numbers is ".$average ;
             echo "</b>";
             }
          } 
} 
    if(isset($_POST['sub'])){
	      $average=new Maths();
        $average->mathfunc();
        //var_dump($average->error);
        $error=$average->error;
    }
require 'maths2.php';
?>
<?php
require 'total.html';
    if(isset($_POST['btn_submit']))
    {
        $english = $_POST['num1'];
        $kannada= $_POST['num2'];
        $hindi = $_POST['num3'];
        $maths= $_POST['num4'];
        $science=$_POST['num5'];
        $total=$_POST['total'];

        $total =  $english+$kannada+$hindi+$maths+$science;
        if($_POST['num1']>100 || $_POST['num2'] >100||$_POST['num3']>100 ||$_POST['num4']>100)
                {
                    echo "Subject marks cannot be greater than 100";
                }
              
                
                
               else if($_POST['num1']<0  || $_POST['num2']<0 || $_POST['num3'] <0 || $_POST['num4']<0)
            
               
                {
                    echo "value cannot be negative";


                   
 }
 else 
    echo "total value is ".$total;
}
?>
    	 
    	      

    	   
    

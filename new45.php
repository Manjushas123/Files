<?php

$max=$_POST['max'];
$min=$_POST['min'];
$max = range(10,100);
$min=range(1,10);




if(!filter_var($max, FILTER_VALIDATE_INT))
 {
 echo("Integer is not valid");
 }
else
 {
 echo("Integer is valid");
 }

 if(!filter_var($min, FILTER_VALIDATE_INT))
 {
 echo("Integer is not valid");
 }
else
 {
 echo("Integer is valid");
 }
?>




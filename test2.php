<?php
$input=array(1=>array("who is the father of php?"=>

	         array('text1'=>"Rasmus Lerdorf",
		     'correct_answer'=>true),
	         array("text1"=>"Dennis M Ritchie",
             "correct_answer"=>false)),
    2=>array("What is the full form of php?"=>
    	array("text1"=>"Personal Homepage",
    		      "correct_answer"=>true),
    	array("text1"=>"Preprocessor Homepage",
    		      "correct_answer"=>false)));
//print_r($input[0]["who is the father of php?"]['text1']);

foreach($input as $key=>$value)
{   //echo "<input type= radio name=name>";
	echo $key;

     //exit();
	foreach($value as $k=>$v)
	{
		if($k) { 
			//echo "<input type=radio name=name>";
			echo $k;
		echo "<br>"; }
		$isSec=0;
		foreach($v as $k1=>$v1){
			if(!$isSec) { 
				echo "<input type=radio name=name checked>";
				echo $v1;
				//echo "<input type=submit name=sub value=Submit>";
			echo "<br>"; $isSec=1;
		             }
		                       }
	}
	echo "<br>";echo "<br>";
}
echo "<input type=submit value=submit>";








?>
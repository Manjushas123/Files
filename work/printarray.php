<html>

<?php

$input=array(a=>array("1)Who is the father of php?"=>array(a=>

	array('text1'=>"a)Rasmus Lerdorf",
		'correct_answer'=>true),
	b=> array("text1"=>"b)Dennis M Ritchie",
		"correct_answer"=>false))),
b=>array("2)What is the full form of php?"=>array(a=>
	array("text1"=>"a)Personal Homepage",
		"correct_answer"=>true),
	b=>array("text1"=>"b)Preprocessor Homepage",
		"correct_answer"=>false))));
var_dump($_GET[a][]);
exit();
//session_start();
//if( isset( $_SESSION['counter'] ) ) {
      //$_SESSION['counter'] += 1;
  // }else {
     // $_SESSION['counter'] = 1;
   
foreach ($input[1] as $key=>$value){   
	echo $key;
	echo "<br>";
	
foreach ($value as $k1=>$v1){

   echo "<input type=radio name=quest1 value=a>";
   //echo "<input type=radio name=quest value=b>";
    print_r($v1["text1"]);
    echo "<br>";
    echo "<form method=post action=#>";
}
 echo "<input type=submit name=sub value=Submit>";
 echo "<br>";	
 echo "<br>";
}


if (isset($_POST["sub"])){
//$_SESSION['counter'] += 1;

foreach ($input[2] as $key=>$value) {   //echo "<input type= radio name=name>";
	echo $key;
	echo "<br>";
foreach($value as $k1=>$v1)
 {
echo "<input type=radio name=quest2 >";
print_r($v1["text1"]);
echo "<br>";
echo "<form method=post action=#>";
 }
 echo "<input type=submit name=sub value=Submit>";	
}

//print($_POST["quest1"]);
}


//if(isset($_POST["sub1"])) {
	//echo $_POST["quest1"];

	//echo $_POST["quest2"];




//}
//{


//}









?>
</html>

<?php

$array=array($_POST['question1'],$_POST['question2']);
if ($array[0] == 'a)Personal Homepage') {
    echo "You have entered ".$array[0];
    echo "<br>";
    echo "<b>";
    echo "Answer entered is correct.";
    echo "</b>";
    echo "<br>";
}

else {

    echo "You have entered ".$array[0];
	echo " <br>";
	echo "<b>";
	echo "Answer entered is incorrect.";
	echo "</b>";
	echo "<br>";
}
if ($array[1] == 'a)Rasmus Lerdorf'){
    echo "You have entered ".$array[1];
	echo "<br>";
	echo "<b>";
    echo "Answer entered is correct.";
    echo "</b>";
    echo "<br>";
}
else {

	echo "You have entered ".$array[1];
	echo "<br>";
	echo "<b>";
	echo "Answer entered is incorrect.";
	echo "</b>";
	echo "<br>";
}

?>
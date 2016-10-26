<?php
require 'manju.php';
if($_POST['password']== $_POST['cpassword'])
                                       
                                          	# code...
                                         {
                                         	echo '<meta http-equiv="refresh" content="0; URL=localhost/manju.php">';

                                         }
/*
		<meta http-equiv="refresh" content="0; Location='manju.php'" />
	
header('Location:/manju.php');
}*/
	
	else {
		die("invalid password");
	}


	require 'valid.php';

	
?>
<?php
<html>
<head>
<title>
Form To Display The Answers
</title>
</head>
<body bgcolor=white>
<form action="multiarray2.php" method="post">
<h1 align="center"> PHP Multiple Choice Questions</h1>
<tr><th><p>1.What does PHP Stands For ?</p></th></tr>
<tr><td><input type="radio" name="question1" value="Personal Homepage" checked> Personal Homepage<br>
 <input type="radio" name="question1" value="Preprocessor Homepage"> Preprocessor Homepage<br></td></tr>







  <tr><th><p>2.What is the father of PHP ?</p></th></tr>
<tr><td><input type="radio" name="question2" value="Rasmus Lerdorf" checked> Rasmus Lerdorf<br>
  <input type="radio" name="question2" value="List Barley"> List Barley<br></td></tr>
  <p align="center"> <input type="submit" name="submit" value=" Submit the Answers"/></p>
  foreach($array as $x)
{ 

    echo "You Have Entered ".$x;
	echo "<br>";
}

  </table>
  </form>
  </body>
  </html>
  ?>

<?php

$i=array("1.Which of the following type of class allows only one object of it to be created?"=>array(
   	
   	"<input type=radio name=quest1  value=ab class>(1)Abstract class"=>true,
   	"<input type=radio name=quest1  value=abclass>(1)Abstract cl"=>true,
   	"<input type=radio name=quest1  value=ab class>(1)Abstract"=>true));
foreach($i as $key=>$value)

{
	echo $key;
	echo "<br>";
	echo $value;

}
foreach($value as $ans=>$bool)
{
	echo $ans;
	echo "<br>";
	echo $bool;
}

  /*Which of the following is not a type of constructor?"=>array(
   	"Copy constructor"=>false,
   	"Friend constructor"=>true,
   	"Default constructor"=>false,
   	"Parameterized constructor"=>false
   	));


/*for ($i = 1; $i <= 1; $i++) {
    ?>
        <input type="radio" name="num1<?php echo $i[0]; ?>" value="$i['1.Which of the following type of class allows only one object of it to be created?']['$i']"> Ab cl<br>
        <input type="radio" name="num1<?php echo $i[0]; ?>" value="Singleton class">Singleton class  <br>
         <input type="radio" name="num1<?php echo $i[0]; ?>" value="Friend Class"> Friend Class<br>

    <?php
}
?>
<input type = 'submit' value = 'Go'>
</form>


<?php
for ($i = 1; $i <= 3; $i++) {
    echo $_POST['num' . $i];
}
?>*/
echo $i;
?>
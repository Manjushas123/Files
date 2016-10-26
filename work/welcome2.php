
<?php
//<input type="radio" name="answer[1][correct]" value="1" />
$input=array("1.Which of the following type of class allows only one object of it to be created?"=>array(
   	
    "<input type=radio name=quest1 value=ab cl checked>(1)Abstract class"=>false,
    " <input type=radio name=quest1 value=singleton class checked>(2)Singleton class"=>true,
    "<input type=radio name=quest1 value=friend class>(3)Friend class"=>false),

    "2.Which of the following is not a type of constructor?"=>array(
    "<input type=radio name=quest2 value=Copy constructor>(1)Copy Constructor"=>false,
    "<input type=radio name=quest2 value=Abstract  Class >(2)Abstract Class"=>true),
    "3.What is the full form of PHP?"=>array( 
    "<input type=radio name=quest3 value=Personal Homepage>(1)Personal Homepage"=>true,
    "<input type=radio name=quest3 value=Preprocessor Homepage>(2)Preprocessor Homepage"=>false));
$keys=array_keys($input);
for ($i=0;$i<=count($input)-3;$i++) {
    echo $keys[$i];
    echo "<br>";
    foreach($input[$keys[$i]] as $key => $value) {
        echo $key.":" .$value."<br>";
    }
    echo "<br>";
    echo "<form action=# method=post>";
    echo "<input type=submit name=sub value=Submit>";
    echo "<br>";
    }
if (isset($_POST['sub'])) {
    for($i=1;$i<=count($input)-2;$i++) {
        echo $keys[$i];
        echo "<br>";
    foreach($input[$keys[$i]] as $key => $value){
        echo $key.":" .$value."<br>";
        
    }
      echo "<br>";
      echo "<input type=submit name=sub1 value=Submit>";
      echo "<br>";
   }

}
if (isset($_POST['sub1'])) {
    for($i=2;$i<=count($input)-1;$i++){
        echo $keys[$i];
        echo "<br>";
    foreach ($input[$keys[$i]] as $key => $value) {
         echo $key.":" .$value."<br>";
    }
      echo "<br>";
      echo "<input type=submit name=sub2 value=Submit>";
      echo "<br>";
   }



}

   ?>
   
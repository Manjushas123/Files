<?php

    if(isset($_POST['submit2'])){
         $row = $_POST['rows'];
         $col = $_POST['columns'];
         $x = $row * $col;
    }

?>

<form action="script.php" method="post">
    <input type="text" name="content[]"> 
    <?php
         if(isset($x)){
             for ($i = 1; $i <= $x; $i++) {
                 echo "<input type='text' name='content[]' required><br>";
             }

         }

    ?>
    <input type="submit" name="submit3" value="Submit"/>
    <input type="hidden" name="method" value="post"/>
</form>
<ul>
<?php
foreach ($results as $result) {
	<li>
	 if($result->completed)
	 	echo "$result->description";
        else
      echo "$result->description"; 
       endif
        </li>
     ?>
        </ul>
  

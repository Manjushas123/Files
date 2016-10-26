<html>
<head>
<title>
form
</title>
<link rel="stylesheet" href="style.css" type="text/css" />

<style type="text/css" >
<?php
if(isset($error))
{
 ?>

 input:focus
 {
  border:solid blue 1px;
 }
 
 <?php
}
?>

</style>
</head>
<body bgcolor=pink>


<?php
if(isset($error))
{
 ?>
    <tr>
    <td id="error"><?php echo $error; ?></td>
    </tr>
    <?php
}
?>
<form action="#" method="post">
<font color=blue><i><h1 align="center"> Average Calculation </h1></font></i>

<h2>
<font color= blue>
Maximum:<input type="number" name="max"  value="<?php if(isset($max)){echo $max;} ?>"  <?php if(isset($code) && $code == 1){ echo "autofocus"; }  ?> required/>
</font>
</h2>
<h2>
<font color=blue>
Minimum:<input type="number" name="min" value="<?php if(isset($min)){echo $min;} ?>"  <?php if(isset($code) && $code == 1){ echo "autofocus"; }  ?> required/>
</font>
</h2>
<p align="center">
<input type="submit" name="sub" value="Submit The Values"/>
</p>

</form>
</body>

</html





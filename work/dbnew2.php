<?php     //start php tag
 ///require 'dbnew.html';
Include('dbnew1.php');
//if submit is not blanked i.e. it is clicked.
If(isset($_POST['Submit'])!='')
{
If($_POST['name']=='' || $_POST['age']==''  ||  $_POST['phone']=='' || $_POST['password']==''|| $_POST['cpassword']=='')
{
Echo "please fill the empty field.";
}
Else
{
$sql="insert into user(name,age,phone,password,cpassword) values('".$_POST['name']."', '".$_POST['age']."', '".$_POST['phone']."','".$_POST['password']."' ,'".$_POST['cpassword']."')";
$res=mysql_query($sql);
If($res)
{
Echo "Record successfully inserted";
}
Else
{
Echo "There is some problem in inserting record";
}

}
}

?>
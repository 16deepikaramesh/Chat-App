<?php

include_once 'db.php';


$Message=$_POST['m'];
$Name=$_POST['n'];
$Fromusername=$_POST['fu'];
$q=$_POST['fu'];
$w=$_POST['m'];
$p=$_POST['n'];

$g=mysqli_query($conn,"SELECT * FROM signin where username='$q'");
//$res=mysqli_query($conn,"INSERT into details values('$username','$password')");
//$x="select * from enter_stock where product_number='$o'";

if(mysqli_num_rows($g)!=0)
{
	
		mysqli_query($conn,"INSERT into compose values('$Name','$Fromusername','$Message',NOW())");
	echo "<script type='text/javascript'>alert('Message Sent..!!');</script>";
	include "message.php";	
}
elseif(empty($w)){

	echo "<script type='text/javascript'>alert('Enter a message..!!');</script>";
	include "message.php";	
}

else
{
	echo "<script type='text/javascript'>alert('Enter the name correctly..!!');</script>";
	include "message.php";	
}



/*($res)
{
	echo "<script type='text/javascript'>alert('Registered Sucessfully..!!');</script>";
	include "registeradmin.php";
}*/



?>
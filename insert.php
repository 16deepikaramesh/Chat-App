<?php
include_once 'db.php';
$Name=$_POST['n'];
$Email=$_POST['e'];
$Password=$_POST['p'];
$Confirm_password=$_POST['c'];
$Birthday=$_POST['b'];
$Gender=$_POST['g'];
$Mobile=$_POST['m'];
$Location=$_POST['l'];
$a=$_POST['n'];
$b=$_POST['e'];
$c=$_POST['p'];
$d=$_POST['c'];
$e=$_POST['b'];
$f=$_POST['g'];
$g=$_POST['m'];
$h=$_POST['l'];
$i = strlen((string)$g);


//$res=mysqli_query($conn,"INSERT into ecsignupp values('$Name','$Email','$Password','$Confirm_password','$Birthday','$Gender','$Mobile','$Location')");

if(empty($a&&$b&&$c&&$d&&$e&&$f&&$g&&$h))
{
	echo "<script type='text/javascript'>alert('Fill all the Details..!!');</script>";
	include "signupp.php";
}
elseif($c==$d)
{
	mysqli_query($conn,"INSERT into ecsignupp values('$Name','$Email','$Password','$Confirm_password','$Birthday','$Gender','$Mobile','$Location')");
	echo "<script type='text/javascript'>alert('Signed Up Sucessfully..!!');</script>";
	include "signupp.php";
}
else
{

	if($i!=10)
	{
		echo "<script type='text/javascript'>alert('Please enter a valid Mobile Number..!!');</script>";
		include "signupp.php";
	}
	else

	{
	   echo "<script type='text/javascript'>alert('Passwords Mismatched..!!');</script>";
	   include "signupp.php";
    }
}


  


?>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     
<?php
include_once 'db.php';

$username=$_POST['u'];
$email=$_POST['e'];
$password=$_POST['p'];

$d=$_POST['u'];


//$res=mysqli_query($conn,"INSERT into details values('$username','$password')");
$c = mysqli_query($conn,"SELECT * FROM signupp WHERE username='$d'");

if (mysqli_num_rows($c)!=0) 
{
	echo "<script type='text/javascript'>alert('Username already exists..!!');</script>";
	include "register.php";	
}
elseif(empty($d)){

	echo "<script type='text/javascript'>alert('Not Registered Sucessfully..!!');</script>";
	include "register.php";	
}
else{

	mysqli_query($conn,"INSERT into signupp values('$username','$email','$password')");
	echo "<script type='text/javascript'>alert('Registered Sucessfully..!!');</script>";
	include "register.php";
}	

/*($res)
{
	echo "<script type='text/javascript'>alert('Registered Sucessfully..!!');</script>";
	include "registeradmin.php";
}*/



?>
<?php
if(isset($_POST['signin']))
{

include_once "db.php";
$Name=$_POST['p'];
$Password=$_POST['n'];
$a=trim($_POST['p']);
$b=trim($_POST['n']);


$res=mysqli_query($conn,"SELECT * FROM signin WHERE username='$a' AND password='$b'") or die("Signed Out unSucessfully..!!");
if($res){
	mysqli_query($conn,"DELETE FROM signin WHERE username='$a' AND password='$b'");
	echo "<script type='text/javascript'>alert('Signed Out Sucessfully..!!');</script>";
	include "signin.php";
	
}

 else
{
	echo "<script type='text/javascript'>alert('Signed Out unSucessfully..!!');</script>";
	include "signout.php";
}

}
?>
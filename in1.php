<?php
if(isset($_POST['signin']))
{

include_once "db.php";
$Name=$_POST['p'];
$n=$_POST['p'];

$r=mysqli_query($conn,"SELECT * FROM signin WHERE username='$n'");

if(empty($n))
{
	echo "<script type='text/javascript'>alert('Enter the Name..!!');</script>";
	include "inbox.php";
}
elseif(mysqli_num_rows($r)!=0)
{
	include "in2.php";
}

}
?>
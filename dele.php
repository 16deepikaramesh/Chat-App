<?php
if(isset($_POST['delete']))
{

include_once "db.php";

//$Message=$_POST['m'];
$Name=$_POST['n'];
$Fromusername=$_POST['fu'];

$q=$_POST['fu'];
//$w=$_POST['m'];
$p=$_POST['n'];
$i=$_POST['t'];

$res=mysqli_query($conn,"SELECT * FROM compose WHERE Fromusername='$q' AND Name='$p' AND time='$i'");

if(empty($q&&$p&&$i))
{
	echo "<script type='text/javascript'>alert('Fill all the Details..!!');</script>";
	include "delete1.php";
}
elseif(mysqli_num_rows($res)!=0)
{
		mysqli_query($conn,"DELETE FROM compose WHERE Name='$p' AND Fromusername='$q' AND time='$i'");
		echo "<script type='text/javascript'>alert('Message deleted  Sucessfully..!!');</script>";
include "message.php";
}
else
{
		echo "<script type='text/javascript'>alert('Message not deleted..!!');</script>";
}
	
}
?>
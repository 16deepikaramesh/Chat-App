<?php

include_once 'db.php';


//$Message=$_POST['m'];
$Name=$_POST['n'];
$Fromusername=$_POST['fu'];
$q=$_POST['fu'];
//$w=$_POST['m'];
$p=$_POST['n'];

$res=mysqli_query($conn,"SELECT * FROM compose where Name='$p'AND Fromusername='$q'");
//$y=$conn->query($g);

//$res=mysqli_query($conn,"INSERT into details values('$username','$password')");
//$x="select * from enter_stock where product_number='$o'";

//if(mysqli_num_rows($y)==$g)
	if($res)

{
	
		mysqli_query($conn,"DELETE * from compose where Name='$p' AND Fromusername='$q'");
	echo "<script type='text/javascript'>alert('Message Deleted..!!');</script>";
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
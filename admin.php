<?php
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>
</head>
<body>
  <style>
body{
  background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url("db.jpg");
   height: 150vh; 


    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>

</html>
<?php
if(isset($_POST['signin']))
{

include_once "db.php";
$username=$_POST['a'];
$password=$_POST['ap'];
$a=trim($_POST["a"]);
$b=trim($_POST["ap"]);
$x="select * from admin where Admin_name='$a' and BINARY Password='$b'";
$y=$conn->query($x);
if($y->num_rows>0)
{
  $row = $y->fetch_assoc();
  $_SESSION["a"] = $row["Admin_name"];
  $_SESSION["ap"]=$row["Password"];
  echo "<script type='text/javascript'>alert('Welcome Admin..!!');</script>";
  include "checkadmin.php";
}
elseif(empty($a&&$b))
{
  echo "<script type='text/javascript'>alert('Fill all the Details..!!');</script>";
  include "adminpg.php";
}
else
{

  echo "<script type='text/javascript'>alert('Wrong Username or Password!!!');</script>";
  include "adminpg.php";
}
$conn->close();
}
?>   
 

  
  
  
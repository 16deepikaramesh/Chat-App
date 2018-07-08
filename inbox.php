<?php
?>
<!DOCTYPE html>
<html>
<head>
	<title>Inbox Page</title>
</head>
<body>
  <style>
body{
  background-image:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url("back5.jpg");
   height: 150vh; 


    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
<nav>
<ul>
<li><a href="signin.php" style="margin-left: 550px; color: #66ffff; font-family: 'Lucida Calligraphy', sans-serif;font-size: 18px;">Signin</a></li></ul>
<ul>
<li><a href="message.php" style="margin-left: 550px; color: #66ffff; font-family: 'Lucida Calligraphy', sans-serif;font-size: 18px;">Message</a></li></ul>
<ul>
<li><a href="inbox.php" style="margin-left: 550px; color: #66ffff; font-family: 'Lucida Calligraphy', sans-serif;font-size: 18px;">Check Inbox</a></li></ul>

<ul>
<li><a href="delete1.php" style="margin-left: 550px; color: #66ffff; font-family: 'Lucida Calligraphy', sans-serif;font-size: 18px;">Delete msg</a></li></ul>
<ul>
<li><a href="signout.php" style="margin-left: 550px; color: #66ffff; font-family: 'Lucida Calligraphy', sans-serif;font-size: 18px;">Sign Out</a></li></ul>



</nav>
<div style="color: #66ffff; font-family: 'Lucida Calligraphy', sans-serif;font-size: 22px;">

	<center><h1>Check your Inbox..!!!</h1></center>
	<form action="inbox.php" method="post" name="form" type="text/plain">
	<center>Name : <input type="text" name="p" placeholder="Enter the Username.."></center><br>	
	
	
	<center><button type="submit" name="signin" class="button_1">Check Inbox</button> <button>Cancel</button></center><br>
	</form>
</body>
</html>


<div class="table-title">

<h3>Inbox</h3>
</div>
<table class="table-fill" border="3px">
<thead>
<tr>
<th class="text-left">From</th>
<th class="text-left">Message</th>
<th class="text-left">Time</th>

</tr>
</thead>
<?php
if(isset($_POST['signin']))
{

include_once "db.php";
$Name=$_POST['p'];
$n=$_POST['p'];
$t=mysqli_query($conn,"SELECT * FROM signin WHERE username='$n'");
$res=mysqli_query($conn,"SELECT * from compose where Name='$n'") or die('error');
if(mysqli_num_rows($t)!=0)
{
  while($r=mysqli_fetch_array($res))
  {
    $Fromusername=$r['Fromusername'];
    $Message=$r['Message'];
    $time=$r['time'];
    echo '<tr>
        
        <td>'.$Fromusername.'</td>
        <td>'.$Message.'</td>
        <td>'.$time.'</td>
        </tr>';

  }
  exit();
}
}
?>
</table>
  

  </body>
  
  
  
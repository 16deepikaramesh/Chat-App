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
	background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url("restiction.jpg");
   height: 100vh; 


    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
<nav>
<ul>
<li><a href="start.php"  style="color: #99ffcc; font-family: 'Lucida Calligraphy', sans-serif;font-size: 18px;">Start Page</a></li></ul>
</nav>
<div  style="color: #99ffcc; font-family: 'Lucida Calligraphy', sans-serif;font-size: 22px;">
	<center><h1>Signin Details..!!!</h1></center>
	<form action="admin.php" method="post" name="form" type="text/plain"><br><br>
	<center>Name : <input type="text" name="a" placeholder="Enter the Admin name.."></center><br>	
	<center>Password : <input type="password" name="ap" placeholder="Enter your Password.."></center><br>
	
	<center><button type="submit" name="signin" class="button_1">Check details</button> <button>Cancel</button></center><br>
</div>
	</form>
</body>
</html>
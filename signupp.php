<?php
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign Up Page</title>
</head>
<body>
	<style>
body{
	background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url("back1.jpg");
   height: 100vh; 


    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
<nav>
<ul>
<li><a href="signin.php" style="color: #ffff66; font-family: 'Lucida Calligraphy', sans-serif;font-size: 18px;">Signin</a></li>
</ul>
</nav>
<div style="color: #ffff66; font-family: 'Lucida Calligraphy', sans-serif;font-size: 22px;">

	<center><h1>Please Sign Up here..!!!</h1></center>
	<form action="insert.php" method="post" name="form" type="text/plain" >
	<center>Name: <input type="Name" name="n" placeholder="Enter your Name.."></center><br>
	<center>Email : <input type="email" name="e" placeholder="Enter your Email id.."></center><br>
	<center>Password : <input type="Password" name="p" placeholder="Enter your Password.."></center><br>
	<center>Confirm_password: <input type="Password" name="c" placeholder=" Confirm your Password.."></center><br>
	<center>Birthday: <input type="Birthday" name="b" placeholder="Enter your DOB.."></center><br>
	<center>Gender: <input type="Gender" name="g" placeholder="Enter the gender.."></center><br>
	<center>Mobile: <input type="Mobile" name="m" placeholder="Enter 10 digit Mobile number.."></center><br>
	<center>Location: <input type="Location" name="l" placeholder="Enter your location.."></center><br></div>

	
	<center><button type="submit" class="button_1">SignUp</button> <button>Cancel</button></center><br>
	
	

	</form>
</body>
</html>
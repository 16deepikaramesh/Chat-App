<?php
?>
<!DOCTYPE html>
<html>
<head>
	<title>Message Page</title>
</head>
<body>
	<style>
body{
	background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url("back7.jpg");
   height: 100vh; 


    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
<nav>
<ul>
<li><a href="signin.php" style="margin-left: 550px; color: #cc66ff; font-family: 'Lucida Calligraphy', sans-serif;font-size: 18px;">Signin</a></li></ul>
<ul>
<li><a href="message.php" style="margin-left: 550px; color: #cc66ff; font-family: 'Lucida Calligraphy', sans-serif;font-size: 18px;">Message</a></li></ul>
<ul>
<li><a href="inbox.php" style="margin-left: 550px; color: #cc66ff; font-family: 'Lucida Calligraphy', sans-serif;font-size: 18px;">Check Inbox</a></li></ul>
<ul>
<li><a href="signout.php" style="margin-left: 550px; color: #cc66ff; font-family: 'Lucida Calligraphy', sans-serif;font-size: 18px;">Sign Out</a></li></ul>
<ul>
<li><a href="delete1.php" style="margin-left: 550px; color: #cc66ff; font-family: 'Lucida Calligraphy', sans-serif;font-size: 18px;">Delete msg</a></li></ul>




</nav>
<div style="color: #cc66ff; font-family: 'Lucida Calligraphy', sans-serif;font-size: 22px;">
	<center><h1>Please leave your message here..!!!</h1></center>
	<form action="insertmsg.php" method="post" name="form" type="text/plain" >
		<center>From Username : <input type="text" name="fu" placeholder="Enter your Email id.."></center><br>
	<center>To Username : <input type="text" name="n" placeholder="Enter recipient's Email id.."></center><br>
	<div1 style="margin-left: 500px;">
	<label for="message">Message :</label><br>
			<textarea style="margin-left: 650px;" name="m" placeholder="Enter Your Message Here..." required></textarea><br></div1>
	<center><button type="submit" name="signin" class="button_1">Send</button> <button>Cancel</button></center><br>
		
</div>
	</form>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Delete message Page</title>
</head>
<body>
	<style>
body{
	background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url("back9.jpg");
   height: 100vh; 


    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
<div  style="color: #00e6e6; font-family: 'Lucida Calligraphy', sans-serif;font-size: 22px;">
<center><h1>Please Delete your message here..!!!</h1></center>
	<form action="dele.php" method="post" name="form" type="text/plain">
	<center>Fromusername : <input type="text" name="fu" placeholder="Enter the fromusername.."></center><br>	
		<center>To username : <input type="text" name="n" placeholder="Enter the Username.."></center><br>	
    <center>Time : <input type="text" name="t" placeholder="Enter the time.."></center><br>	
	
	
	<center><button type="submit" name="delete" class="button_1">Delete</button> <button>Cancel</button></center><br>
	</form>
</body>
</html>



  


  
  
  

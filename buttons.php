<html>
<body><center><button type="button" name="inbox" onclick="alert('Inbox opened!')">Inbox</button></center></body><br>
<form action="email.php" method="post" name="form" type="text/plain" >
</form>
<?php
if(isset($_POST['inbox']))
{
session_start();
include_once "db.php";
//echo "<script type='text/javascript'>window.top.location.href='email.php';</script>";
//include "email.php";
}
?>
</html>
<html>
<body><center><button type="button" name="message" onclick="alert('Leave your message!')">Message</button></center>
</body>
<form action="insertmsg.php" method="post" name="form" type="text/plain" >
</form>
<?php
if(isset($_POST['message']))
{
session_start();
include_once "db.php";
//echo "<script type='text/javascript'>window.top.location.href='message.php';</script>";
//include "message.php";
}
?>
</html>





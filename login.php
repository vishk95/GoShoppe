<!--Login -->
<!DOCTYPE html>
<html>

<head>
  <title>Log-in</title>
 <link rel="cascade styleSheet" type="text/css" href="login.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0"/> 
</head>
<body style="background-color:#CFCBCB">
  <div class="login-card">
    <h1>Log-in</h1><br>
  <form method="post" action="login2.php">
    <input type="text" name="user" placeholder="Username/Email" required >
    <input type="password" name="pass" placeholder="Password" required>
    <input type="submit" name="login" class="login login-submit" value="login">
  </form>
  <div class="login-help">
    <a href="signUp.php">Register</a> • <a href="forgot.php">Forgot Password</a>
  </div>
</div>

<div style="border:1px solid grey;position:relative;right:0px;bottom:0px;display:block;margin:20px;text-align:right;font-size:60%;font-family:arial;color:grey;">
	<?php
	include 'include.php';
	?>
</div>

</body>

</html>
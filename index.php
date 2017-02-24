<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>ShopNow</title>
	<link rel="icon" type="image/jpg" href="usepics/shoping cart.jpg">
	<link rel="cascade styleSheet" type="text/css" href="index.css">
</head>

<body style="margin:0px;max-width:100%;height:auto;">
	
	<div id="menu0">
		<ul>
			<li><a href="#">Track Order</a></li>
			<li><a href="signUp.php">Sign Up</a></li>
			<li><a href="login.php">Sign In</a></li>
		</ul>
	</div>
	
	<div id="menu1">
			<a href="index.php" style="color:white;text-decoration:none;box-sizing:border-box;width:20%;font-size:100%;display:block;padding:5px;">ShopNow.com</a>
			<form style="width:60%;box-sizing:border-box;">
				<input id="searching" type="text" name="search" placeholder="Search Products">
				<input id="searchButtom" type="submit" name="submit" value="Search" >
			</form>
			<a href="checkOut.php" style="width:20%;box-sizing:border-box;"><img src="usepics/cart.png" alt="cart" style="max-width:30%;"></img></a>
	</div>
	
	<div id="menu2">
		<div id="ani">
		</div>
		<div style="display:flex;flex-direction:column;width:40%;box-sizing:border-box;">
			<div id="im" >
			<a  href="#"><img src="usepics/bulb.jpg" alt="bulb" width="100%" height="100%" ></img></a>
			</div>
			<div  id="im" >
			<a  href="#"><img src="usepics/hour.gif" alt="hour" width="100%" height="100%" ></img></a>
			</div>
		</div>
	</div>
	
	<div style="border:1px solid grey;margin:20px">
		<h1 style="display:inline;margin:3px;text-weight:bold;font-size:150%">Trending</h1>
		<div id="menu3">
			<div id="trending">
				<a  href="#"><img src="usepics/t1.png" alt="t1" width="100%" height="100%" ></img></a>
			</div>
			<div id="trending">
				<a  href="place.php"><img src="usepics/t2.png" alt="t2" width="100%" height="100%" ></img></a>
			</div>
			<div id="trending">
				<a  href="#"><img src="usepics/t3.png" alt="t3" width="100%" height="100%" ></img></a>
			</div>
			<div id="trending">
				<a  href="#"><img src="usepics/t4.png" alt="t4" width="100%" height="100%" ></img></a>
			</div>
		</div>
	</div>
	
	<div style="border:1px solid grey;margin:20px">
		<h2 style="display:inline;margin:3px;text-weight:bold;font-size:150%">Smart Watches</h2>
		<div id="menu4">
			<div id="smartWatch">
				<a  href="#"><img src="usepics/sw1.png" alt="sw1" width="100%" height="100%" ></img></a>
			</div>
			<div id="smartWatch">
				<a  href="#"><img src="usepics/sw2.png" alt="sw2" width="100%" height="100%" ></img></a>
			</div>
			<div id="smartWatch">
				<a  href="#"><img src="usepics/sw3.png" alt="sw3" width="100%" height="100%" ></img></a>
			</div>
			<div id="smartWatch">
				<a  href="#"><img src="usepics/sw4.png" alt="sw4" width="100%" height="100%" ></img></a>
			</div>
		</div>
	</div>
	<div style="border:1px solid grey;position:relative;right:0px;bottom:0px;display:block;margin:20px;text-align:right;font-size:60%;font-family:arial;color:grey;">
	<?php
	include 'include.php';
	?>
</div>
	
	
		
</body>

</html>

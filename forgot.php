<!doctype html>
<html>
<head>
<script>
	function check()
	{    var x=document.getElementById("mf").value;
		//var x=document.myForm.forgotText.value;
		if(x==null || x=="")
		{
		window.alert("Email and Password Can't Be Empty");
		}
		else
		{

		alert("The Password Send To The Registered Email ID");
		}
		
		
	}
	
</script>
<title>
Forgot
</title>
</head>
<body style="background-color:#CFCBCB">
	<div style="margin: 0 auto 10px;border:1px solid grey;width:50%;padding:10px;border-radius:20px;background-color:rgb(23,123,135);">
		<h1 style="color:white;font-size:100%;margin:0px;text-align:center;padding:0px;">Enter Your Email/Phone Number<h1></br>
		<form name="myForm" style="text-align:center">
			<input type="text" id="mf" name="forgotText" placeholder="Email/Phone" style="margin:2px;width:60%;border-radius:10px;height:40px;text-align:center;border:2px solid rgb(23,45,66);"><br>
			<input type="submit"  id="fButtom" name="forgotButton" value="Verify" onclick="check()" style="border-radius:10px;margin:2px;text-align:center;width:60%;height:40px;color:white;background-color:green;">
		</form>
	</div>
	<div style="border:1px solid grey;position:relative;right:0px;bottom:0px;display:block;margin:20px;text-align:right;font-size:60%;font-family:arial;color:grey;">
	<?php
	include 'include.php';
	?>
</div>
</body>
</html>
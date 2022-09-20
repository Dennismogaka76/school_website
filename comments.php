<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body{
			text-align: center;
			background-color: maroon;
			color: white;
			font-style: italic;
			font-size: 30px;
			margin: 40vh auto auto auto;
		}
	</style>
</head>
<body>

<?php
$name=$_POST['name'];
$email=$_POST['email'];
echo "Thank you $name for your comments we wil get back to you shortly at $email!";
  ?>
  </body>
</html
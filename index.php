<!DOCTYPE html>
<html>
<head>

	<meta charset="UTF-8">
	<title>Swithin's System</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "demo";


mysql_connect ($host,$user,$password);
mysql_select_db($db);

if(isset($_POST['username'])){

	$uname=$_POST['username'];
	$password=$_POST['password'];

	$sql ="select * from loginform where user = '" .$uname."' AND Pass='".$password."' limit 1";

	$result = mysql_query($sql);
	if(mysql_num_rows($result)==1){
	echo "You Have Successfully Logged in";
	header('location:admin.php');
	exit();
	}

	else{
	echo "You Have Entered An Incorrect Password";
	
	exit();
	}
}


?>




<!DOCTYPE html>
<html>
	<head>
		<title>Form in Design</title>
		<link rel="stylesheet" type="text/css" href="style.css">

	</head>
	<body>
		<div class="container">
			
			<p>  LOGIN  </p>
				<form method="POST" action="">
					<div class="form_input">
					<p>
						<label>USERNAME:</label>
						<input type="text" name="username" placeholder="Enter Username" required>
					</p>
					</div>
					<div class="form_input">
						<label>PASSWORD:</label>
						<input type="password" name="password" placeholder="Enter Your Password" required>
					</div>
					
					<p>
					<button type="submit" id="btnSub">Login</button>
					</p>
				</form>
			
		</div>
	</body>
</html> 


	<div class="boxforlogin"> 
		

			<h1>Please Sign In </h1>
		
			<form method="POST" action="dashboard.html">

				<p>Username or E-mail</p>
				<input type="text" name="Enter your Username or E-mail" placeholder="E-mail or Username" id="username">
				<p>Password</p>
				<input type="Password" name="Enter Password" placeholder="Password" id="password">
				<input type="submit" name="" value="Log In" onclick="validate()">
				


				<a href="#">Forgot Password?</a>
				<br>
				<a href="#">Create An Account With Us</a>
			

			</form>

	</div>

</body>
</html> 
<?php

$inputuser = $_POST['user'];
$inputpass = $_POST['pass'];

$user ="root";
$password = "";
$Database="tutorial";

$connect = mysql_connect("localhost",$user,$password);
@mysql_select_db($tutorial) or ("Database Not Found");

$query = "SELECT * FROM `users` WHERE `user` = '$inputuser'";
$querypass = "SELECT * FROM `users` WHERE `password` = '$inputpass'";

$result = mysql_query($query);
$resultpass=mysql_query($querypass);

$row =mysql_fetch_array($result);
$rowpass =mysql_fetch_array($resultpass);

$serveruser = $row["user"];
$serverpass = $row["password"];

if($serveruser&&$serverpass){
	if(!$result){
		die("Username or password is invalid");
	}
	echo "<br><center>Database output</b><center><br><br>";/
	
	mysql_close();
}

echo $query
echo $querypass

mysql_close();



?>
<?php
$servername = "localhost";
$username = "username";
$password = "";
$dbname = "addstud";

$conn = new mysql_connect($servername, $username, $password $dbname);

if ($conn->connect_error){
	die("Connection failed: ".$conn->connect_error);
}

$sql = "SELECT * FROM data";
$result = $conn->query($sql);

if (result->num_rows > 0){
	while ($row = $result->fetch_assoc()) {
		# code...
		echo $row["ID: "]. " - Name: ".$row["firstname"]. " ". $row["lastname"]. "<br>";

	}else{
		echo "0 results";
	}
}

mysql_close();




?>
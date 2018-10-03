<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Add A Student</title>
	<link rel="stylesheet" type="text/css" href="addstudent.css">
</head>

<body>
	<div class="addstudent">
		<h1>Enter Student Details </h1>
		<form id="registration" action="process.php" method="POS">
			
			<input type="text" name="stuID" id="button" placeholder="Student ID"> <br><br>

			<input type="text" name="lname" id="button" placeholder="Last Name"> <br><br>

			<input type="text" name="fname" id="button" placeholder="First Name"> <br><br>

			<input type="date" name="dob" id="button" placeholder="Date Of Birth"> <br><br>

			<input type="text" name="programme" id="button" placeholder="Programme of study"> <br><br>

			<input type="text" name="nationality" id="button" placeholder="nationality"><br><br>

			<input type="text" name="email" id="button" placeholder="E-Mail Address"> <br><br>

			<select is ="phone"><option>+233</option><option>+234</option><option>+1</option><option>+44</option></select>
			<input type="number" name="num" placeholder="Enter Your Mobile Number" id="phone"> <br><br>

			<input type="radio" name="Gender" id="rd"><span id="but">Male</span> <input type="radio" name="Gender" id="rd"><span id="but">Female</span><br><br>

			<input type="submit" value="Add Student" id="butt">
		
		</form>
	</div>
</body>
</html>
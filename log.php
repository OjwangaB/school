<!DOCTYPE html>
<html>
<head>
	<title>Student Login</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f0f0f0;
		}
		
		.login-form {
			width: 300px; 
			margin: 40px auto;
			padding: 20px;
			border: 1px solid #ccc;
			border-radius: 50px; 
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
		}
		
		.login-form input[type="text"], .login-form input[type="password"] {
			width: 100%;
			padding: 10px;
			margin-bottom: 20px;
			border: 1px solid #ccc;
		}
		
		.login-form input[type="submit"] {
			width: 100%;
			padding: 10px;
			background-color: #4CAF50;
			color: #fff;
			border: none;
			border-radius: 10px;
			cursor: pointer;
		}
		
		.login-form input[type="submit"]:hover {
			background-color: #3e8e41;
		}
	</style>

</head>
<?php
//start session
session_start();
if(isset($_POST['submit'])){
$name=$_POST['name'];
$password=$_POST['password'];
//create connection to the database engine 
$con=mysqli_connect("localhost","root","");
if(!$con){
	echo "connection to the databse engine has failed";
}
//select database school   for use
mysqli_select_db($con,"school");
//select from tables signup 
$users = mysqli_query($con,"select * from signup");
while($row=mysqli_fetch_array($users,MYSQLI_ASSOC)){
	if($row['username'] == $name & $row['password'] == $password){
		$_SESSION['user'] = $name;
		header('location:profile.php');
	}else{
		echo "alert('Invalid Username or Password')";
	}
}
}


?>
<body>
	<div class="login-form">
		<h1>GOD BER SECONDARY SCHOOL</h1>
		<h2>STUDENT CENTER</h2>
		<form method="POST" action="log.php">
			<label for="username">Username:</label>
			<input type="text" id="username" name="name" required><br><br>
			<label for="password">Password:</label>
			<input type="password" id="password" name="password" required><br><br>
			<input type="submit" name="submit" value="Login">
			<i><p>Please sign-up if you have not have account</p></i>
			<a href="signup.php">SIGN-UP Here</a> 
			<a href="mailto:tmc00024022@student.maseno.ac.ke" >Contact us</a>
		</form>
	</div>
</body>
</html>
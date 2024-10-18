<!DOCTYPE html>
<html>
<head>
	<title>Student Profile</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f0f0f0;
		}
		
		.profile-form {
			width: 300px;
			margin: 40px auto;
			padding: 20px;
			border: 1px solid #ccc;
			border-radius: 10px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
		}
		
		.profile-form input[type="text"], .profile-form input[type="date"], .profile-form input[type="tel"], .profile-form input[type="email"] {
			width: 100%;
			padding: 10px;
			margin-bottom: 20px;
			border: 1px solid #ccc;
		}
		
		.profile-form select {
			width: 100%;
			padding: 10px;
			margin-bottom: 20px;
			border: 1px solid #ccc;
		}
		
		.profile-form textarea {
			width: 100%;
			padding: 10px;
			margin-bottom: 20px;
			border: 1px solid #ccc;
			resize: vertical;
		}
		
		.profile-form input[type="submit"] {
			width: 100%;
			padding: 10px;
			background-color: #4CAF50;
			color: #fff;
			border: none;
			border-radius: 10px;
			cursor: pointer;
		}
		
		.profile-form input[type="submit"]:hover {
			background-color: #3e8e41;
		}
		
	</style>
</head>
<?php
session_start();
if(!isset($_SESSION['user'])){
	header('location:log.php');
}
//create connection to the database engine
$con=mysqli_connect("localhost","root","");
if(!$con){
	echo "connection to the database engine has failed";
}else{
	//echo "connection to the database engine successful";
}
//select the database school for use in the script
mysqli_select_db($con,"school");
//process form data for use in the script
if(isset($_POST['submit'])) {
  $admNo =$_POST['admissionnumber'];
  $names =$_POST['name'];
  $dob =$_POST['dateofbirth'];
  $gender =$_POST['gender'];
  $class =$_POST['class'];
  $section =$_POST['section'];
  $address =$_POST['address'];
  $parentNames =$_POST['parentname'];
  $parentContact =$_POST['parentcontact'];
  $parentEmail =$_POST['parentemail'];
  //insert data into the table profile for storage by the script
  mysqli_query($con,"insert into profile values ('$admNo','$names','$dob','$gender','$class','$section','$address',' $parentNames','$parentContact','$parentEmail')");
  echo "<script> alert('your application has been received')</script>";
  //close connection for the execution of the script
  mysqli_close($con);

}
?>
<body>
	<div class="profile-form">
		<h2>Student Profile</h2>
		<form method="POST" action="profile.php">
			<label for="admissionnumber">Admission Number:</label>
			<input type="text" id="admissionnumber" name="admissionnumber" required><br><br>
			<label for="name">Name:</label>
			<input type="text" id="name" name="name" required><br><br>
			<label for="dateofbirth">Date of Birth:</label>
			<input type="date" id="dateofbirth" name="dateofbirth" required><br><br>
			<label for="gender">Gender:</label>
			<select id="gender" name="gender" required>
				<option value="">Select</option>
				<option value="Male">Male</option>
				<option value="Female">Female</option>
				<option value="Other">Other</option>
			</select><br><br>
			<label for="class">Class:</label>
			<select id="class" name="class" required>
				<option value="">Select</option>
				<option value="Nursery">Form One </option>
				<option value="KG">Form Two</option>
				<option value="1">Form Three</option>
				<option value="2">Form Four</option>
				<!-- Add more options as needed -->
			</select><br><br>
			<label for="section">Section:</label>
			<select id="section" name="section" required>
				<option value="">Select</option>
				<option value="A">A</option>
				<option value="B">B</option>
				<option value="C">C</option>
				<!-- Add more options as needed -->
			</select><br><br>
			<label for="address">Address:</label>
			<textarea id="address" name="address" required></textarea><br><br>
			<label for="parentname">Parent/Guardian Name:</label>
			<input type="text" id="parentname" name="parentname" required><br><br>
			<label for="parentcontact">Parent/Guardian Contact Number:</label>
			<input type="tel" id="parentcontact" name="parentcontact" required><br><br>
			<label for="parentemail">Parent/Guardian Email:</label>
			<input type="email" id="parentemail" name="parentemail" required><br><br>
			<input type="submit" name="submit" value="Save Profile">
			<p></p>
			<button type="refresh" name="refresh" value="refresh">REFRESH</button>
		</form>
	</div>
</body>
</html>
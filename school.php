<!DOCTYPE html>
<html>
<head>
  <title>School </title>
  <style>
  body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  background-color: #f0f0f0;
}

.container {
  width: 80%;
  margin: 0 auto;
  padding: 20px;
  background-color: #fff;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
  text-align: center;
  margin-bottom: 30px;
}

label {
  display: block;
  margin-bottom: 10px;
  font-weight: bold;
}
//to style the text area for the input fields
input[type="text"],
input[type="number"],
input[type="tel"],
input[type="email"],
textarea {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-sizing: border-box;
  margin-bottom: 20px;
}
.school {
            width: 100%;
            height: 40px;
            margin-bottom: 20px;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
}
input[type="submit"],
input[type="reset"],a {
  width: 100%;
  padding: 10px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

input[type="submit"]:hover,
input[type="reset"]:hover, {
  background-color: #0062cc;
}

button,a {
  width: 100%;
  padding: 10px;
  background-color: #dc3545;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  margin-top: 10px;
}

button:hover {
  background-color: #c82333;
}
      .logo {
            width: 5%;
            height: auto;
            margin-bottom: 20px;
  width: 100px;
  height: 100px;
  border-radius: 60%;
			object-fit: cover;
			}
			
  </style>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<?php
//establish connection to the database engine
$con=mysqli_connect("localhost","root","");
if(!$con){
	echo "connection to the database engine has failed";
}
//select database dala for use
mysqli_select_db($con,"dala");
//accept and receive form data 
if(isset($_POST['submit'])){
	$name =$_POST['fullnames'];
	$adm =$_POST['admissionnumber'];
	$primary =$_POST['primaryschool'];
	$kcpe =$_POST['kcpe'];
	$county =$_POST['county'];
	$subcounty =$_POST['subcounty'];
	$district=$_POST['district'];
	$location =$_POST['location'];
	$village =$_POST['village'];
	$chief =$_POST['chief'];
	$parent =$_POST['parent'];
	$fathername =$_POST['fathersname'];
	$fatherphone=$_POST['fathersphone'];
	$fatheremail=$_POST['fathersemail'];
	$fatherid =$_POST['fathersnationalid'];
	$mothername=$_POST['mothersname'];
	$motherphone=$_POST['mothersphone'];
	$motheremail=$_POST['mothersemail'];
	$guardian =$_POST['guardianname'];
	$guardianphone =$_POST['guardianphone'];
	$guardianemail =$_POST['guardianemail']; 
	$year =$_POST['yearofadmission'];
	$dateadmission=$_POST['dateofadmission'];
	$timeadmission=$_POST['timeofadmission'];
	$datebirth=$_POST['dateofadmission'];
	$recommendation =$_POST['recommendations'];
	//insert data into tables management 
	if(isset($_POST['submit'])){
	mysqli_query($con,"insert into management values('$name','$adm','$primary','$kcpe','$county','$subcounty','$district','$location','$village','$chief','$parent','$fathername','$fatherphone','$fatheremail','$fatherid','$mothername','$motherphone','$motheremail','$guardian','$guardianphone','$guardianemail','$year','$dateadmission','$timeadmission','$datebirth','$recommendation')");
	echo "<script> alert ('Congratulations You have been admitted to God-Ber High School')</script>";
	//close connection 
	mysqli_close($con);
	}
}
?>
<body>
<script>
// Validate form input on submit
document.querySelector('form').addEventListener('submit', function(event) {
  // Get all form input elements
  var inputs = document.querySelectorAll('form input[type="text"], form input[type="number"], form input[type="tel"], form input[type="email"], form textarea');

  // Loop through all input elements and check if they are empty
  for (var i = 0; i < inputs.length; i++) {
    if (inputs[i].value.trim() === '') {
      // If an input is empty, show an error message and prevent form submission
      inputs[i].style.borderColor = 'red';
      alert('Please fill in all required fields.');
      event.preventDefault();
      return false;
    } else {
      inputs[i].style.borderColor = '';
    }
  }
});
</script>
  <div class="container">
    <h2>ADMISSION FORM</h2>
	<head>
  <title>School Management System Registration</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <script src="script.js"></script>
</head>
  <img src="logo.png" alt="BRIGHTONE OJWANG FOUNDATION" class="logo">
    <form action="school.php" method="post">
	
      <label for="fullnames">Full Names:</label>
      <input type="text" id="fullnames" name="fullnames" class="school"required>
      <label for="admissionnumber">Admission Number:</label>
      <input type="text" id="admissionnumber" name="admissionnumber" class="school"required>
      <label for="primaryschool">Former Primary School:</label>
      <input type="text" id="primaryschool" name="primaryschool" class="school"required>
      <label for="kcpe">KCPE Marks:</label>
      <input type="number" id="kcpe" name="kcpe" class="school"required>
      <label for="county" >County:</label>
	  <!--<input type="text" name="county" id="county" required>-->
	<select  name="county" id="county" required class="school" ><option></option>
  <option value="Baringo">Baringo</option>
  <option value="Bomet">Bomet</option>
  <option value="Bungoma">Bungoma</option>
  <option value="Busia">Busia</option>
  <option value="Elgeyo-Marakwet">Elgeyo-Marakwet</option>
  <option value="Embu">Embu</option>
  <option value="Garissa">Garissa</option>
  <option value="Homa Bay">Homa Bay</option>
  <option value="Isiolo">Isiolo</option>
  <option value="Kajiado">Kajiado</option>
  <option value="Kakamega">Kakamega</option>
  <option value="Kericho">Kericho</option>
  <option value="Kiambu">Kiambu</option>
  <option value="Kilifi">Kilifi</option>
  <option value="Kirinyaga">Kirinyaga</option>
  <option value="Kisii">Kisii</option>
  <option value="Kisumu">Kisumu</option>
  <option value="Kitui">Kitui</option>
  <option value="Kwale">Kwale</option>
  <option value="Laikipia">Laikipia</option>
  <option value="Lamu">Lamu</option>
  <option value="Machakos">Machakos</option>
  <option value="Makueni">Makueni</option>
  <option value="Mandera">Mandera</option>
  <option value="Marsabit">Marsabit</option>
  <option value="Meru">Meru</option>
  <option value="Migori">Migori</option>
  <option value="Mombasa">Mombasa</option>
  <option value="Murang'a">Murang'a</option>
  <option value="Nairobi City">Nairobi City</option>
  <option value="Nakuru">Nakuru</option>
  <option value="Nandi">Nandi</option>
  <option value="Narok">Narok</option>
  <option value="Nyamira">Nyamira</option>
  <option value="Nyandarua">Nyandarua</option>
  <option value="Nyeri">Nyeri</option>
  <option value="Samburu">Samburu</option>
  <option value="Siaya">Siaya</option>
  <option value="Taita-Taveta">Taita-Taveta</option>
  <option value="Tana River">Tana River</option>
  <option value="Tharaka-Nithi">Tharaka-Nithi</option>
  <option value="Trans-Nzoia">Trans-Nzoia</option>
  <option value="Turkana">Turkana</option>
  <option value="Uasin Gishu">Uasin Gishu</option>
  <option value="Vihiga">Vihiga</option>
  <option value="Wajir">Wajir</option>
  <option value="West Pokot">West Pokot</option>
</select>
         <label for="subcounty">Sub-County:</label>
      <input type="text" id="subcounty" name="subcounty"class="school" required>
      <label for="district">District:</label>
      <input type="text" id="district" name="district" class="school"required>
      <label for="location">Location:</label>
      <input type="text" id="location" name="location" class="school" required>
      <label for="village">Village:</label>
      <input type="text" id="village" name="village" class="school"required>
      <label for="chief">Name of Area Chief:</label>
      <input type="text" id="chief" name="chief" class="school" required>
      <label for="parent">Parent:</label>
      <input type="text" id="parent" name="parent" class="school" required>
      <label for="fathersname">Father's Full Name:</label>
      <input type="text" id="fathersname" name="fathersname" class="school" required>
      <label for="fathersphone">Father's Phone Number:</label>
      <input type="tel" id="fathersphone" name="fathersphone" class="school" required>
      <label for="fathersemail">Father's Email Address:</label>
      <input type="email" id="fathersemail" name="fathersemail"class="school" required>
      <label for="fathersnationalid">Father's National ID Number:</label>
      <input type="text" id="fathersnationalid" name="fathersnationalid" class="school" required>
      <label for="mothersname">Mother's Full Name:</label>
      <input type="text" id="mothersname" name="mothersname" class="school"required>
      <label for="mothersphone">Mother's Phone Number:</label>
      <input type="tel" id="mothersphone" name="mothersphone" class="school"required>
      <label for="mothersemail">Mother's Email Address:</label>
      <input type="email" id="mothersemail" name="mothersemail" class="school"required>
      <label for="guardianname">Guardian Full Name:</label>
      <input type="text" id="guardianname" name="guardianname" class="school"required>
      <label for="guardianphone">Guardian Phone Number:</label>
      <input type="tel" id="guardianphone" name="guardianphone" class="school" required>
      <label for="guardianemail">Guardian Email Address:</label>
      <input type="email" id="guardianemail" name="guardianemail" class="school"required>
      <label for="yearofadmission">Year of Admission:</label>
      <input type="number" id="yearofadmission" name="yearofadmission"class="school" required>
	    <label for="classofadmission">Class of Admission:</label>
      <input type="text" id="classofadmission" name="classofadmission" class="school"required>
	  <label for="dateofadmission">Date of Admission:</label>
       <input type="date" id="dateofadmission" name="dateofadmission" class="school"required>
		<label for="timeofadmission">Time of Admission:</label>
		<input type="time" id="timeofadmission" name="timeofadmission" class="school"required>
		<label for="dateofbirth">Date of Birth</label>
		<input type="date" id="dateofbirth" name="dateofbirth" class="school"required>
      <label for="recommendations">Recommendations:</label>
      <textarea id="recommendations" name="recommendations" rows="4" cols="50"class="school" required></textarea>
      <input type="submit" name="submit"value="Submit">
      <input type="reset" name="refresh" value="Refresh">
	  <a href="schooltable.php">VIEW DATA</a>
      <button onclick="location.href='edit.php';">Edit</button>
      <button onclick="location.href='delete.php';">Delete</button>
	  <a href="log.php">BACK TO LOG IN PAGE</a>
    </form>
	<footer>
	<address>
	Brightone Ojwang. All Rights Reserved
	</address>
	</footer>
  </div>
</body>
</html>
<!DOCTYPE HTML>
<html>
<head>
<title>retrieve back</title>
</head>
<body>
<?php
//establish connection to the database engine
$connect=mysqli_connect("localhost","root","");
if(!$connect){
	echo "connection to the database engine is not succeesfull";
}
//select the database dala for use in the script
mysqli_select_db($connect,"dala");
//remove data from table called management from the managent tabke
$result=mysqli_query($connect,"select * from management");
?>
<table border="1" ,color="black">
<tr>
<th>STUDENT NAME </th>
<th> ADMISSION NUMBER</th>
<th>PRIMARY SCHOOL </th>
<th> KCPE MARKS</th>
<th> COUNTY</th>
<th> SUB-COUNTY</th>
<th> DISTRICT</th>
<th> LOCATION</th>
<th> VILLAGE</th>
<th> AREA CHIEF</th>
<th>GRAND PARENT </th>
<th> FATHERS NAME</th>
<th> FATHERS PHONE</th>
<th> FAHERS EMAIL</th>
<th> FATHERS ID NUMBER</th>
<th> MOTHERS NAME</th>
<th> MOTHERS PHONE</th>
<th> MOTHERS EMAIL</th>
<th> GUARDIAN </th>
<th> GUARDIAN PHONE</th>
<th> GUARDIAN EMAIL</th>
<th> YEAR OF ADMISSION</th>
<th>CLASS OF ADMISSION </th>
<th> DATE OF ADMISSON</th>
<th> DATE OF BIRTH</th>
<th> RECOMMENDATIONS</th>
</tr>
<?php
//a while loop to feed data into tables
while(($row=mysqli_fetch_row($result))!=FALSE){
	?>
	<tr>
	<td><?php echo $row[0];?></td>
	<td><?php echo $row[1];?></td>
	<td><?php echo $row[2];?></td>
	<td><?php echo $row[3];?></td>
	<td><?php echo $row[4];?></td>
	<td><?php echo $row[5];?></td>
	<td><?php echo $row[6];?></td>
	<td><?php echo $row[7];?></td>
	<td><?php echo $row[8];?></td>
	<td><?php echo $row[9];?></td>
	<td><?php echo $row[10];?></td>
	<td><?php echo $row[11];?></td>
	<td><?php echo $row[12];?></td>
	<td><?php echo $row[13];?></td>
	<td><?php echo $row[14];?></td>
	<td><?php echo $row[15];?></td>
	<td><?php echo $row[16];?></td>
	<td><?php echo $row[17];?></td>
	<td><?php echo $row[18];?></td>
	<td><?php echo $row[19];?></td>
	<td><?php echo $row[20];?></td>
	<td><?php echo $row[21];?></td>
	<td><?php echo $row[22];?></td>
	<td><?php echo $row[23];?></td>
	<td><?php echo $row[24];?></td>
	<td><?php echo $row[25];?></td>
	</tr>
	<?php
}
?>
</table>
<?php
//close connection
mysqli_close($connect);
?>
<button onclick="window.print()">Print page</button>
<button><a href="mailto:ojwangbrightone08@gmail.com">send to email</a></button>
</body>
</html>
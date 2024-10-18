<!DOCTYPE html>
<html>
<head>
	<title>Student Academic Profile </title>
	<style>
		table {
			border-collapse: collapse;
			width: 100%;
		}
		th, td {
			border: 1px solid #ddd;
			padding: 8px;
			text-align: left;
		}
	</style>
</head>
<body>
	<h1>Student Academic Profile</h1>
	<form>
		<h2>Register Courses</h2>
		<table>
			<tr>
				<th>Subject</th>
				<th>Register</th>
			</tr>
			<tr>
				<td>English</td>
				<td><input type="checkbox" name="subjects[]" value="English" checked></td>
			</tr>
			<tr>
				<td>Kiswahili</td>
				<td><input type="checkbox" name="subjects[]" value="Kiswahili" checked></td>
			</tr>
			<tr>
				<td>Mathematics</td>
				<td><input type="checkbox" name="subjects[]" value="Mathematics" checked></td>
			</tr>
			<tr>
				<td>Chemistry</td>
				<td><input type="checkbox" name="subjects[]" value="Chemistry" checked></td>
			</tr>
			<tr>
				<td>Physics</td>
				<td><input type="checkbox" name="subjects[]" value="Physics" checked></td>
			</tr>
			<tr>
				<td>Biology</td>
				<td><input type="checkbox" name="subjects[]" value="Biology" checked></td>
			</tr>
			<tr>
				<td>Agriculture</td>
				<td><input type="checkbox" name="subjects[]" value="Agriculture" checked></td>
			</tr>
			<tr>
				<td>Business</td>
				<td><input type="checkbox" name="subjects[]" value="Business" checked></td>
			</tr>
			<tr>
				<td>French</td>
				<td><input type="checkbox" name="subjects[]" value="French" checked></td>
			</tr>
			<tr>
				<td>Germany</td>
				<td><input type="checkbox" name="subjects[]" value="Germany" checked></td>
			</tr>
			<tr>
				<td>Technical Drawing</td>
				<td><input type="checkbox" name="subjects[]" value="Technical Drawing" checked></td>
			</tr>
			<tr>
				<td>Metal Works</td>
				<td><input type="checkbox" name="subjects[]" value="Metal Works" checked></td>
			</tr>
			<tr>
				<td>Christian Religious Education</td>
				<td><input type="checkbox" name="subjects[]" value="Christian Religious Education" checked></td>
			</tr>
			<tr>
				<td-Islamic Religious Education</td>
				<td><input type="checkbox" name="subjects[]" value="Islamic Religious Education" checked></td>
			</tr>
			<tr>
				<td>Hindus</td>
				<td><input type="checkbox" name="subjects[]" value="Hindus" checked></td>
			</tr>
			<tr>
				<td>History and Government</td>
				<td><input type="checkbox" name="subjects[]" value="History and Government" checked></td>
			</tr>
			<tr>
				<td>Geography</td>
				<td><input type="checkbox" name="subjects[]" value="Geography" checked></td>
			</tr>
			<tr>
				<td>Aviation Technology</td>
				<td><input type="checkbox" name="subjects[]" value="Aviation Technology" checked></td>
			</tr>
			<tr>
				<td>Computer Studies</td>
				<td><input type="checkbox" name="subjects[]" value="Computer Studies" checked></td>
			</tr>
		</table>
		<input type="submit" value="Save Changes">
	</form>
	
	<h2>Academic Report</h2>
	<table>
		<tr>
			<th>Subject</th>
			<th>Marks</th>
			<th>Grade</th>
		</tr>
		<!-- Display assignments, exams schedules, and results here -->
	</table>
	
	<h2>Generate Report Form</h2>
	<a href="#" onclick="generateReport()">Download Report Form</a>
	
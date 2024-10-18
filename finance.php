<!DOCTYPE html>
<html>
<head>
	<title>Student Details</title>
	<style>
		.container {
			width: 80%;
			margin: 40px auto;
			padding: 20px;
			border: 1px solid #ddd;
			border-radius: 10px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
		}
		.label {
			font-weight: bold;
			margin-bottom: 10px;
		}
		.value {
			margin-bottom: 20px;
		}
		table {
			border-collapse: collapse;
			width: 100%;
		}
		th, td {
			border: 1px solid #ddd;
			padding: 10px;
			text-align: left;
		}
		th {
			background-color: #f0f0f0;
		}
	</style>
</head>
<body>
	<div class="container">
		<h2>Student Details</h2>
		<p class="label">Admission Number:</p>
		<p class="value">ADMT001</p>
		<p class="label">Name:</p>
		<p class="value">John Doe</p>
		<p class="label">Form/Class:</p>
		<p class="value">Form 2A</p>
		<h3>Fee Statement</h3>
		<table>
			<tr>
				<th>Fee Item</th>
				<th>Amount (KSH)</th>
				<th>Balance (KSH)</th>
			</tr>
			<tr>
				<td>Total Fee for the Year</td>
				<td>55,980</td>
				<td id="balance">{{ total_fee - last_payment }}</td>
			</tr>
			<tr>
				<td>Last Payment</td>
				<td id="last_payment">{{ last_payment }}</td>
				<td></td>
			</tr>
			<tr>
				<td>Fee Balance</td>
				<td></td>
				<td id="balance">{{ total_fee - last_payment }}</td>
			</tr>
		</table>
		<button>Download Fee Statement (PDF)</button>
		<button>Pay Fee using M-Pesa Paybill</button>
	</div>
	
	<script>
		// assume last_payment is retrieved from the database
		var last_payment = 10,000;
		var total_fee = 55,980;
		
		// update the balance and last payment amounts dynamically
		document.getElementById("balance").innerHTML = total_fee - last_payment;
		document.getElementById("last_payment").innerHTML = last_payment;
	</script>
</body>
</html>
<html>
<head>
	<title>Building Log Book</title>
	<link href="../lib/logbook.css" rel="stylesheet" type="text/css">
	<script src="signout.js"></script>
	<?php
		include('../models/dbconnect.php');
		include('../controllers/signin.php');
		include('showlog.php');
	?>
</head>

<body>
<h1>Building Log Book</h1>
<form method="POST" action="logbook.php">
	<table>
		<tr>
			<th>Name: </th>
			<td><input type="text" name="visitor">
			<th>Person You Are Visiting: </th>
			<td><input type="text" name="visiting">
		</tr>
	</table>
	<br>
	<input type="submit" value="Sign In">
</form>
<br>
<?=$output?>
</body>
</html>

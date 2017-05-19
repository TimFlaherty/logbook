<?php
// If input is POSTed, assign variables & input into database
	if(isset($_POST['visitor'])) {
		$visitor = $_POST['visitor'];
		$visiting = $_POST['visiting'];
		$timein = date("Y-m-d H:i:s");
		//Insert into database
		$insert = "INSERT INTO log (name, visiting) VALUES ('".$visitor."', '".$visiting."')";
		$conn->query($insert);
	}
?>

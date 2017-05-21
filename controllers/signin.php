<?php
	include("../lib/val.php");
// If input is POSTed, assign variables & input into database
	if(isset($_POST['visitor'])) {
		$visitor = $_POST['visitor'];
		$visitor = noInject($visitor);
		$visiting = $_POST['visiting'];
		$visiting = noInject($visiting);
		$timein = date("Y-m-d H:i:s");
		//Insert into database
		$insert = "INSERT INTO log (name, visiting) VALUES ('".$visitor."', '".$visiting."')";
		$conn->query($insert);
	}
?>

<?php
	include('../models/dbconnect.php');
	include("../lib/val.php");
	//Grab data sent by AJAX
	$x = $_REQUEST["x"];
	$x = noInject($x);
	$outtime = date("Y-m-d H:i:s");
	//Insert out time into database
	$insertOut = "UPDATE log SET timeout ='".$outtime."' WHERE name = '".$x."'";
	$conn->query($insertOut);
	//Send out time back over AJAX
	echo $outtime;
?>

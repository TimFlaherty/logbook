<?php 
// Declare ouput variable with table header
	    $output = "<table><tr><th>Visitor</th><th>Visiting</th><th>Time In</th><th>Time Out</th></tr>";
	    
	    // Assign variable to query
	    $sql = "SELECT name, visiting, timein, timeout FROM log ORDER BY timein ASC";
		$result = $conn->query($sql);
	    //Declare variable to keep track of table cells
	    $cell = 1;
	    // If there are results, append them to table
	    if ($result->num_rows > 0) {
	        while($row = $result->fetch_assoc()) {
	        	//If not signed out, display sign out button
	        	if ($row["timeout"] == "") {
	        		$outtime = "<button type='button' onclick='out(".$cell.")'>Sign Out</button>";
	        	} else {
	        		$outtime = $row["timeout"];
	        	}
	        	//Print table rows & give cells unique IDs
	        	$output .= "<tr><td id='name".$cell."'>".$row["name"]."</td><td>".$row["visiting"]."</td><td class='cell'>".$row["timein"]."</td><td class='cell' id='out".$cell."'>".$outtime."</td></tr>";
	        	$cell++;
		    }
	    }
		
	    $output .= "</table>";
?>

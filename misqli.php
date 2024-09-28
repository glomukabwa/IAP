<?php
	$servername = "localhost";
	$username = "root";
	$password = "b@bad1ana";
	$bdname = "api_d";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $bdname);

	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}
	echo "Connected successfully";
?> 
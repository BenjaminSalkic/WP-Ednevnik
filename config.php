<?php
	$servername = "localhost";
	$username = "root"; 
	$password = ""; 
	$dbname = "proj"; 
	$konekcija = new mysqli($servername, $username, $password, $dbname);
	if ($konekcija->connect_error) {
	    die("Connection failed: " . $konekcija->connect_error);
	}
?> 
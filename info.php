<?php 
	$host = "srvdbm.ufc.br";
	$user = "enepetce18";
	$pass = "B{vu9bwD6[2Y";
	$db = "enepetce18";

	$conn = new mysqli_connect($host,$user,$pass,$db);
	if($conn->connect_error){
		die("Connection failed: " . $conn->connection_error);
	}

	//phpinfo();
?>
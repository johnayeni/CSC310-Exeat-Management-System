<?php

	require_once "functions.php";
	$id = $_POST['exeat_id'];

	db_connect();


// change the status of an exeat to declined
	$update = "UPDATE exeats SET status = \"declined\" WHERE id='$id'";

	if(mysqli_query($conn, $update)){
		echo "200";
	}
	else{
		echo "400";
	}

	mysqli_close($conn);
?>
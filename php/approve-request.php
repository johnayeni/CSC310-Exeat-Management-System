<?php

	require_once "functions.php";
	$id = $_POST['exeat_id'];
	$staff_id = $_POST['staffId'];

	db_connect();

// change the status of an exeat to approved 
	$update = "UPDATE exeats SET status = \"approved\", staff_id = '$staff_id' WHERE id='$id'";

	if(mysqli_query($conn, $update)){
		echo "200";
	}
	else{
		echo "400";
	}

	mysqli_close($conn);
?>
<?php

	require_once "functions.php";
	session_start();
	$reason = $_POST['reason'];
	$type = $_POST['type'];
	$leave_date = date($_POST['leave-date']);
	$return_date = date($_POST['return-date']);
	$student_id = $_SESSION['student_id'];

	db_connect();

// change the status of an exeat to approved 
	$insert = "INSERT INTO exeats(student_id, type, reason, leave_date,
	return_date) VALUES ('$student_id','$type', '$reason','$leave_date', '$return_date')";

	if(mysqli_query($conn, $insert)){
		echo "200";
	}
	else{
		echo "400";
	}

	mysqli_close($conn);
?>
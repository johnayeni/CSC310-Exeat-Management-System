<?php

	require_once "functions.php";
	$number = $_POST['number'];
	$password = $_POST['password'];

	db_connect();

	session_start();

	$select = "SELECT * FROM students WHERE mat_num='$number' AND password='$password'";
	$select2 = "SELECT * FROM staffs WHERE staff_num='$number' AND password='$password'";

	$result = mysqli_query($conn, $select);
	$student_row_count =  mysqli_num_rows($result);

	$result2 = mysqli_query($conn, $select2);
	$staff_row_count =  mysqli_num_rows($result2);

	if($student_row_count > 0){
		$student = mysqli_fetch_assoc($result);
		$_SESSION['student_id'] = $student['id'];
		$_SESSION['student_name'] = $student['first_name']." ".$student['last_name'];
		header("location: ../views/student");
	}

	else if($staff_row_count > 0){
		$staff = mysqli_fetch_assoc($result2);
		$_SESSION['staff_id'] = $staff['id'];
		$_SESSION['staff_name'] = $staff['first_name']." ".$staff['last_name'];
		header("location: ../views/staff");
	}
	else{
		$msg = "<p class=\"bg-danger\">Invalid Login</p>";
		$_SESSION['msg'] = $msg;
		header("location: ../");		
	}

	mysqli_close($conn);
?>
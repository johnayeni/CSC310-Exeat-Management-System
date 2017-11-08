<?php

// function to connect to database
	function db_connect(){

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "exeat_db";

	global $conn;
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection Error");
	
	}

	function is_student_auth() {
	    return isset($_SESSION['student_id']);
  	}

  	function is_staff_auth() {
	    return isset($_SESSION['staff_id']);
  	}

// function to check if a student ia authorized
  	function check_student_auth() {
		    if(!is_student_auth()) {
		      header("location: ../../index.php?login=false");
	    }
	}

// function to check if a staff ia authorized

    function check_staff_auth() {
		    if(!is_staff_auth()) {
		      header("location: ../../index.php?login=false");
	    }
	}

<?php
	
// Get the details of the staff that is logged in
	db_connect();

	$student_id = $_SESSION['student_id'];

	$select = "SELECT * FROM students WHERE id='$student_id'";

	$result = mysqli_query($conn, $select);

	$row = mysqli_fetch_assoc($result);
	$firstname = $row['first_name'];
	$lastname = $row['last_name'];
	$mat_num = $row['mat_num'];
	$hall = $row['hall'];
	$room = $row['room_no'];

	mysqli_close($conn);
?>


<!-- Student info list group -->
<div class="list-group">
  <a href="#" class="list-group-item active">First Name: <?php echo $firstname;?></a>
  <a href="#" class="list-group-item">Last Name: <?php echo $lastname;?></a>
  <a href="#" class="list-group-item">Matric Number: <?php echo $mat_num;?></a>
  <a href="#" class="list-group-item">Hall: <?php echo $hall;?></a>
  <a href="#" class="list-group-item">Room Number: <?php echo $room;?></a>
</div>
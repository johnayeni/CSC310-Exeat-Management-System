<?php
	
// Get the details of the staff that is logged in
	db_connect();

	$staff_id = $_SESSION['staff_id'];

	$select = "SELECT * FROM staffs WHERE id='$staff_id'";

	$result = mysqli_query($conn, $select);

	$row = mysqli_fetch_assoc($result);
	$firstname = $row['first_name'];
	$lastname = $row['last_name'];
	$staff_num = $row['staff_num'];
	$hall = $row['hall'];

	mysqli_close($conn);
?>


<!-- Staff info list group -->
<div class="list-group">
  <a href="#" class="list-group-item active">First Name: <?php echo $firstname;?></a>
  <a href="#" class="list-group-item">Last Name: <?php echo $lastname;?></a>
  <a href="#" class="list-group-item">Staff Number: <?php echo $staff_num;?></a>
  <a href="#" class="list-group-item">Hall: <?php echo $hall;?></a>
</div>
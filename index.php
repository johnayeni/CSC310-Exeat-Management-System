<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">	
	<title>Exeat  System</title>
</head>
<body>
<div class="container-fliud">
	<div class="jumbotron">
		<h1 class="text-center" style="display: none;" id="head-text">Covenant University Exeat Portal</h1>
	</div>		
</div>

<!-- Login Form -->
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<form action="php/login.php" method="POST" id="loginForm">
			<h1 class="text-center">Login</h1>
			<?php
				session_start();
				if(isset($_SESSION['msg'])){
					echo $_SESSION['msg'];
				}
				session_destroy();
			?>
			  <div class="form-group">
			    <input type="text" class="form-control" placeholder="Matric Number or Staff Number" name="number" id="number">
			  </div>
			  <div class="form-group">
			    <input type="password" class="form-control" placeholder="Password" name="password" id="password">
			  </div>
			  <center><button type="submit" class="btn btn-success">Log In</button></center>
			</form>		
		</div>
	</div>
</div>



<script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#head-text").fadeIn(100);
	});
</script>
</body>
</html>
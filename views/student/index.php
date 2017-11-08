<?php
	require_once '../../php/functions.php';
	include '../header.php';
	include '../nav-bar.php';

	check_student_auth();

?>
<div class="container" style="margin-top: 100px;">
	<ul class="nav nav-pills">
	    <li class="active"><a data-toggle="pill" href="#home">Exeat Status</a></li>
	    <li><a data-toggle="pill" href="#menu1">Apply for Exeat</a></li>
	    <li><a data-toggle="pill" href="#menu2">Profile</a></li>
	  </ul>

	  <div class="tab-content">
	    <div id="home" class="tab-pane fade in active">
	      <h3>EXEAT STATUS</h3>
	      <?php
	      	include_once 'exeat-status-tab.php';
	      ?>
	    </div>
	    <div id="menu1" class="tab-pane fade">
	      <h3>APPLY FOR EXEAT</h3>
	      <?php
	      	include_once 'apply-for-exeat-tab.php';
	      ?>
	    </div>
	    <div id="menu2" class="tab-pane fade">
	      <h3>PROFILE</h3>
	      <?php
	      	include_once 'profile-tab.php';
	      ?>
	    </div>
	  </div>

</div>



<?php
	include '../footer.php';
?>

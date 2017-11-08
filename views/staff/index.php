<?php
	include '../header.php';
	include '../nav-bar.php';

	require_once '../../php/functions.php';

	check_staff_auth();
?>
<div class="container" style="margin-top: 100px;">
	<ul class="nav nav-pills">
	    <li class="active"><a data-toggle="pill" href="#home">Exeat Applications</a></li>
	    <li><a data-toggle="pill" href="#menu1">Approved Exeats</a></li>
	    <li><a data-toggle="pill" href="#menu2">Declined Exeats</a></li>
	    <li><a data-toggle="pill" href="#menu3">Profile</a></li>
	  </ul>

	  <div class="tab-content">
	  <!-- Exeats not yet approved or declined -->
	    <div id="home" class="tab-pane fade in active">
	      <h3>EXEAT APPLICATIONS</h3>
	      <?php
	      	include_once 'exeat-application-tab.php';
	      ?>
	    </div>
	    <!-- Exeats that have been approved -->
	    <div id="menu1" class="tab-pane fade">
	      <h3>APPROVED EXEATS</h3>
	      <?php
	      	include_once 'approved-exeat-tab.php';
	      ?>
	    </div>
	    <!-- Exeats that have been declined -->
	    <div id="menu2" class="tab-pane fade">
	      <h3>DECLINED EXEATS</h3>
	      <?php
	      	include_once 'declined-exeat-tab.php';
	      ?>
	    </div>
	    <!-- Staff profile details -->
	    <div id="menu3" class="tab-pane fade">
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
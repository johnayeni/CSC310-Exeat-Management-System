<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">
        <?php
        session_start();
          if(isset($_SESSION['student_name'])){
            echo $_SESSION['student_name'];
          }
          if(isset($_SESSION['staff_name'])){
            echo $_SESSION['staff_name'];
          }
        ?>
      </a>
    </div>
  <ul class="nav navbar-nav navbar-right">
      <!-- <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> -->
      <li><a href="../../php/logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>
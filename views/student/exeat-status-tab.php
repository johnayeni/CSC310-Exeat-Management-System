<?php

// get all exeats that have neither been approved or declined
  db_connect();
  $id = $_SESSION['student_id'];
  $select = "SELECT * FROM exeats WHERE student_id='$id'";

  $result = mysqli_query($conn, $select) or die("Could not connect");
  $row_count =  mysqli_num_rows($result);

  if($row_count > 0){
    while($row = $result->fetch_assoc()){
?>            
            <div class="panel-group">
              <div class="panel panel-primary">
                <div class="panel-heading" data-toggle="tooltip" data-placement="bottom" title="Click to see more">
                  <h4 class="spanel-title">
                    <a style="color: white;" data-toggle="collapse" class="text-uppercase" href=<?php echo "#collapse".$row['id'];?> > <?php echo $row['type']; ?> Exeat
                    <?php
                      if($row['status'] == "none"){
                        echo "<h4>Status:  <span class=\"label label-warning\">Pending</span></h4>";
                      }
                      else if($row['status'] == "approved"){
                        echo "<h4>Status:  <span class=\"label label-success\">Approved</span></h4>";
                      }
                      else if($row['status'] == "declined"){
                        echo "<h4>Status:  <span class=\"label label-danger\">Declined</span></h4>";
                      }
                      else{
                        echo "<h4>Status:  <span class=\"label label-info\">Unknown</span></h4>";
                      }
                    ?>
                    </a>
                  </h4>
                </div>
                <div id= <?php echo "collapse".$row['id'];?> class="panel-collapse collapse">
                  <div class="panel-body">
                  <p>Reason:  <kbd><?php echo $row['reason'];?> </kbd></p>
                  <p>Intended Depart Date:  <kbd><?php echo $row['leave_date']?></kbd></p>
                  <p>Intended Return Date:  <kbd><?php echo $row['return_date']?></kbd></p>
                  </div>
                  <div class="panel-footer">
                    <?php
                      if($row["status"] == "approved"){
                              $select2 = "SELECT * FROM staffs WHERE id=".$row['staff_id']."";

                              $result2 = mysqli_query($conn, $select2);

                              $row2 = mysqli_fetch_assoc($result2);
                              $staffFirstName = $row2['first_name'];
                              $staffLastName = $row2['last_name'];
                              $staffNum = $row2['staff_num'];
                              echo "<h4>Approved By: ".$staffFirstName." ".$staffLastName." ".$staffNum;
                      }
                      if($row["status"] == "declined"){
                              $select2 = "SELECT * FROM staffs WHERE id=".$row['staff_id']."";

                              $result2 = mysqli_query($conn, $select2);

                              $row2 = mysqli_fetch_assoc($result2);
                              $staffFirstName = $row2['first_name'];
                              $staffLastName = $row2['last_name'];
                              $staffNum = $row2['staff_num'];
                              echo "<h4>Declined By: ".$staffFirstName." ".$staffLastName." ".$staffNum;
                      }
                    ?>
                  </div>
                </div>
              </div>
            </div>
<?php
    }
  }

  else{
    echo "<p class=\"bg-info\">You have no exeat applcations</p>";   
  }
  mysqli_close($conn);
?>

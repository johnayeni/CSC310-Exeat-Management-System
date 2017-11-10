<?php

// get all exeats that have neither been approved or declined
  db_connect();
  $select = "SELECT * FROM exeats WHERE status=\"none\"";

  $result = mysqli_query($conn, $select) or die("Could not connect");
  $row_count =  mysqli_num_rows($result);
  $staffId = $_SESSION['staff_id'];

  if($row_count > 0){
    while($row = $result->fetch_assoc()){
            $select2 = "SELECT * FROM students WHERE id=".$row['student_id']."";

            $result2 = mysqli_query($conn, $select2);

            $row2 = mysqli_fetch_assoc($result2);
            $studentFirstName = $row2['first_name'];
            $studentLastName = $row2['last_name'];
            $studentMatNum = $row2['mat_num'];

      echo "<div class=\"panel-group\">
              <div class=\"panel panel-info\">
                <div class=\"panel-heading\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Click to see more\">
                  <h4 class=\"panel-title\">
                    <a data-toggle=\"collapse\" class=\"text-uppercase\" href=\"#collapse".$row['id']."\">".$row['type']." Exeat
                    <p class=\"pull-right\">Application From:  ".$studentFirstName." ".$studentLastName." ".$studentMatNum."</p></a>
                  </h4>
                </div>
                <div id=\"collapse".$row['id']."\" class=\"panel-collapse collapse\">
                  <div class=\"panel-body\">
                  <p>Reason:  <kbd>".$row['reason']."</kbd></p>
                  <p>Intended Depart Date:  <kbd>".$row['leave_date']."</kbd></p>
                  <p>Intended Return Date:  <kbd>".$row['return_date']."</kbd></p>
                  </div>
                  <div class=\"panel-footer\">
                  <button class=\"btn btn-success\" onclick=\"approve_request(".$row['id'].", ".$staffId.")\">Approve</button>
                  <button class=\"btn btn-danger pull-right\" onclick=\"decline_request(".$row['id'].", ".$staffId.")\">Decline</button>
                  </div>
                </div>
              </div>
            </div>";
    }
  }

  else{
    echo "<p class=\"bg-info\">No current exeat applcations</p>";   
  }
  mysqli_close($conn);
?>

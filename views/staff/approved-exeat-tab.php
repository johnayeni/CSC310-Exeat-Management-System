<?php
  db_connect();


  // get all exeats that have been approved
  $select = "SELECT * FROM exeats WHERE status=\"approved\"";

  $result = mysqli_query($conn, $select) or die("Could not connect");
  $row_count =  mysqli_num_rows($result);

  if($row_count > 0){
    while($row = $result->fetch_assoc()){

      $select2 = "SELECT * FROM staffs WHERE id=".$row['staff_id']."";

      $result2 = mysqli_query($conn, $select2);

      $row2 = mysqli_fetch_assoc($result2);
      $staffFirstName = $row2['first_name'];
      $staffLastName = $row2['last_name'];
      $staffNum = $row2['staff_num'];
      echo "<div class=\"panel-group\">
              <div class=\"panel panel-success\">
                <div class=\"panel-heading\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Click to see more\">
                  <h4 class=\"panel-title\">
                    <a data-toggle=\"collapse\" class=\"text-uppercase\" href=\"#collapse".$row['id']."\">".$row['type']." Exeat
                  </h4></a>
                </div>
                <div id=\"collapse".$row['id']."\" class=\"panel-collapse collapse\">
                  <div class=\"panel-body\">
                  <p>Reason:  <kbd>".$row['reason']."</kbd></p>
                  <p>Intended Depart Date:  <kbd>".$row['leave_date']."</kbd></p>
                  <p>Intended Return Date:  <kbd>".$row['return_date']."</kbd></p>
                  </div>
                  <div class=\"panel-footer\">
                  <h4>Approved by:  ".$staffFirstName." ".$staffLastName." ".$staffNum."</h4>
                </div>
              </div>
            </div>
          </div>";
    }
  }

  else{
    echo "<p class=\"bg-info\">No approved exeats</p>";   
  }
  mysqli_close($conn);
?>

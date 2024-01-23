<?php
  include 'process/session.php';
   $pendingc= "Pending";
  $rejectc = "Rejected";
  $approvedc = "Approved";
  $sqlquery = "SELECT * FROM users WHERE id = $tempcode;";
     $result= $con->query($sqlquery);
     while($row = $result->fetch_assoc()) {
        $temp_type = $row['user_type'];
    }
?>

<!doctype html>
<html lang="en-US">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>


<body>

  <?php

    if ($temp_type == "admin") { ?>
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 class="m-2 font-weight-bold text-primary">Request For Cancellation&nbsp;</h4>
            </div>
            
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"> 
                  <thead>
                   <tr>
                    <th width="12%">Schedule</th>
                     <th width="15%">Note</th>
                   
                     <th width="8%">Status</th>
                     <th width="8%">Action</th>

                   
                   </tr>
               </thead>
                    <tbody>
                <?php 
  $sqlpending = " SELECT  * FROM transacttable WHERE  request = 'Cancellation Request'; ";
$resultpending = $con->query($sqlpending);
             while($row = $resultpending->fetch_assoc()) {
                $tempd = $row['transact_sched'];
                 $mydate = strtotime($tempd);
               echo "<tr>";
                 echo "<td>";
                 echo date('F, jS, Y', $mydate);
                 echo "</td>";
                echo "<td>".$row['transact_schedinfo']."</td>";
            
              
              echo "<td  class='text-center font-weight-bold'>Requesting For Cancellation</td>";
               echo '<td><button href="process/process.php?deletebookings='.$row['transid']. '" type="button"  class="cancels btn btn-danger bg-gradient-btn-danger btn-block" style="border-radius: 0px;" >
                                    <i class="fas fa-fw fa-check "></i> Confirm
                                  </button></td>';
                echo "</tr>";
            
             
  }
     ?>
                                    
                    </tbody>
                </table>
              </div>
            </div>
          </div>
      <?php } else { ?>
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 class="m-2 font-weight-bold text-primary">Pending Cancellation&nbsp;</h4>
            </div>
            
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"> 
                  <thead>
                   <tr>
                    <th width="12%">Schedule</th>
                     <th width="15%">Note</th>
                    
                    
                     <th>Note</th>
                     
 <th width="8%">Status</th>
                   
                   </tr>
               </thead>
                    <tbody>
                <?php 
  $sqlpending = " SELECT  * FROM transacttable WHERE custid = '$tempcode' AND request = 'Cancellation Request'; ";
$resultpending = $con->query($sqlpending);
             while($row = $resultpending->fetch_assoc()) {
                $tempd = $row['transact_sched'];
                 $mydate = strtotime($tempd);
               echo "<tr>";
                 echo "<td>";
                 echo date('F, jS, Y', $mydate);
                 echo "</td>";
                echo "<td>".$row['transact_schedinfo']."</td>";
               
            
             
              echo "<td  class='text-center font-weight-bold'>Cancellation Request</td>";
             echo "<td  class='text-center font-weight-bold'>Pending</td>";
            
             
  }
     ?>
                                    
                    </tbody>
                </table>
              </div>
            </div>
          </div> 
        <?php } ?>
              
  </body>
  </html>
<script src="css/city.js"></script>

<?php
include ('footer.php');
 ?>
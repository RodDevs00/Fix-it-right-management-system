<?php
  include 'process/session.php';
$tempids = $_GET['editId'];
 $sqluser = " SELECT  * FROM users WHERE id = '$tempids'";
$resultuser = $con->query($sqluser);
             while($row = $resultuser->fetch_assoc()) {
                $tempnam = $row['firstname'];
                $templnam = $row['lastname']; 
        }

 $pendingc= "Pending";
  $rejectc = "Rejected";
  $approvedc = "Approved";
  $completedc = "Completed";
?>
 
  
<!doctype html>
<html lang="en-US">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<!-- Approved-->
<div class="card shadow mb-4">
            <div class="card-header py-3">
            <h4 class="m-2 font-weight-bold "><?php echo $tempnam; echo " ",$templnam," : Transactions";?>&nbsp;</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"> 
               <thead>
                   <tr>
                    <th width="12%">Schedule</th>
                     <th width="15%">Note</th>
                     <th width="10%">Payment Type</th>

                     <th width="8%">Status</th>
                 <th width="8%">Action</th> 

                   
                   </tr>
               </thead>
          <tbody>
  <?php 
  $sqlpending = " SELECT  * FROM transacttable WHERE custid = '$tempids' AND status = 'Completed'; ";
$resultpending = $con->query($sqlpending);
             while($row = $resultpending->fetch_assoc()) {
                $tempd = $row['transact_sched'];
                 $mydate = strtotime($tempd);
               
               
            
               if ($row['status'] === $completedc){
                    echo "<tr>";
                 echo "<td>";
                 echo date('F, jS, Y', $mydate);
                 echo "</td>";
                echo "<td>".$row['transact_schedinfo']."</td>";
                echo "<td>".$row['payment_type']."</td>";
                  

              echo "<td bgcolor='orange' class='font-weight-bold'>".$row['status']."</td>";
                 echo '<td align="right">
             
            
            <a type="button" class="btn btn-danger" href="transact_view.php?editId='.$row['transid'] . '"><i class="fas fa-fw fa-th-list"></i> View</a>
           
             </td>';
             }elseif($row['status'] === $approvedc){
                    echo "<tr>";
                 echo "<td>";
                 echo date('F, jS, Y', $mydate);
                 echo "</td>";
                echo "<td>".$row['transact_schedinfo']."</td>";
                echo "<td>".$row['payment_type']."</td>";
                
              echo "<td bgcolor='green' class='font-weight-bold'>".$row['status']."</td>";
             }else{
                  echo "<tr>";
                 echo "<td>";
                 echo date('F, jS, Y', $mydate);
                 echo "</td>";
                echo "<td>".$row['transact_schedinfo']."</td>";
                echo "<td>".$row['payment_type']."</td>";
            
              echo "<td bgcolor='red'  class='text-center font-weight-bold'>".$row['status']."</td>";
             
             }
            
             
  }
     ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                  </div>

</body>

  
</html>
<?php
include ('footer.php');
 ?>
<?php
  include 'process/session.php';
 $tempids = $_GET['editId'];
 $querys = "SELECT * FROM cardata WHERE id = '$tempids'";
                        $results = mysqli_query($con, $querys) or die (mysqli_error($db));
                        while ($row = mysqli_fetch_assoc($results)) {
                          $tempbrand = $row['carbrand'];
                          $tempcarmodel = $row['carmodel'];
                          $tempcarid = $row['id'];
                        }
?>

<!doctype html>
<html lang="en-US">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

   
            <div class="card shadow mb-4">
            <div class="card-header py-3">
               <h4 class="m-2 font-weight-bold">Transactions for Vehicle : <?php echo $tempbrand;echo " - ",$tempcarmodel;?>&nbsp;</h4>
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
                       $sqlpending = " SELECT  * FROM transacttable WHERE carid = '$tempcarid' AND status = 'Completed'; ";
$resultpending = $con->query($sqlpending);
             while($row = $resultpending->fetch_assoc()) {
                $tempd = $row['transact_sched'];
                 $mydate = strtotime($tempd);
                    echo "<tr>";
                 echo "<td>";
                 echo date('F j, Y', $mydate);
                 echo "</td>";
                echo "<td>".$row['transact_schedinfo']."</td>";
                
                  

              echo "<td class='font-weight-bold'>".$row['status']."</td>";
                 echo '<td align="right">
             
            
            <a type="button" class="btn btn-danger" href="transact_view.php?editId='.$row['transid'] . '"><i class="fas fa-fw fa-th-list"></i> View</a>
           
             </td>';
           
            
             
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
<?php
  include 'process/session.php';
    $pendingc= "Pending";
  $rejectc = "Rejected";
  $approvedc = "Approved";
  $sql2 = " SELECT  * FROM   cardata  JOIN users ON cardata.plateid = users.id JOIN transacttable ON cardata.plateid = transacttable.custid  WHERE transacttable.status = 'Approved'    ORDER BY cardata.id ASC" ;

?>
<!doctype html>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="robots" content="index,follow">
  </head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&family=Nunito+Sans:opsz,wght@6..12,300&display=swap" rel="stylesheet">
<style>

body{
    font-family: 'Kanit', sans-serif;
font-family: 'Nunito Sans', sans-serif;
  }

</style>

<body>

       
            <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 class="m-2 font-weight-bold">Next&nbsp;  <i class="fas fa-fw fa-arrow-right"></i></h4>
            </div>
            
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-sm" id="nextTable" width="100%" cellspacing="0"> 
               <thead>
                   <tr>
                    <th width="20%">Name</th>
                     <th width="20%">Schedule</th>
                     <th width="20%">Note</th>
                     <th width="8%">Status</th>
                     <th width="32%">Action</th>
                   </tr>
               </thead>
          <tbody>
  <?php 

              $query = 'SELECT * FROM transacttable JOIN users on transacttable.custid = users.id WHERE status = "Approved"  ORDER BY transdate ASC LIMIT 1';
              $result = mysqli_query($con, $query) or die (mysqli_error($db));
              while ($row = mysqli_fetch_assoc($result)) {
              $hello = $row['transact_sched'];
               $mydate = strtotime($hello);
               $fn = $row['firstname'];
               $ln = $row['lastname'];
               $full = $fn . ' ' . $ln; 
               echo "<tr>";
                  echo "<td>".$full."</td>";
             echo "<td>";
            echo date('F, jS, Y', $mydate);
             echo"</td>";
              echo "<td>".$row['transact_schedinfo']."</td>";
           
              
              
              if ($row['status'] === $pendingc){


              echo "<td bgcolor='yellow' class='font-weight-bold'>".$row['status']."</td>";
             }elseif($row['status'] === $approvedc){
              echo "<td bgcolor='green' class='font-weight-bold'>".$row['status']."</td>";
             }else{
              echo "<td bgcolor='red' class='text-center font-weight-bold'>".$row['status']."</td>";
             }
             echo '<td align="right">
               
             <a type="button" class="btn btn-danger" href="joborder2.php?editId='.$row['transid'] . '"><i class="fas fa-fw fa-th-list"></i> Process</a>  
            

         </td>';    
           // Add a Delete button
    
echo "</tr>";
                        }


     ?>
                                </tbody>
                            </table>
              </div>
            </div>


         

            <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 class="m-2 font-weight-bold">Queues&nbsp;  <i class="fas fa-fw fa-list"></i></h4>
            </div>
            
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"> 
               <thead>
                   <tr>
                    <th width="20%">Name</th>
                     <th width="20%">Schedule</th>
                     <th width="20">Note</th>
                     
                     
                     <th width="8%">Status</th>
                    

                    
                   </tr>
               </thead>
          <tbody>
  <?php 

              $query = 'SELECT * FROM transacttable JOIN users on transacttable.custid = users.id WHERE status = "Approved"  ORDER BY transdate ASC LIMIT 18446744073709551615 OFFSET 1';
              $result = mysqli_query($con, $query) or die (mysqli_error($db));
              while ($row = mysqli_fetch_assoc($result)) {
              $hello = $row['transact_sched'];
               $mydate = strtotime($hello);
               $fn = $row['firstname'];
               $ln = $row['lastname'];
               $full = $fn . ' ' . $ln; 
               echo "<tr>";
                  echo "<td>".$full."</td>";
             echo "<td>";
            echo date('F, jS, Y', $mydate);
             echo"</td>";
              echo "<td>".$row['transact_schedinfo']."</td>";
           
              
              
              if ($row['status'] === $pendingc){


              echo "<td bgcolor='yellow' class='font-weight-bold'>".$row['status']."</td>";
             }elseif($row['status'] === $approvedc){
              echo "<td bgcolor='green' class='font-weight-bold'>".$row['status']."</td>";
             }else{
              echo "<td bgcolor='red' class='text-center font-weight-bold'>".$row['status']."</td>";
             }
              
                        }


     ?>
                                </tbody>
                            </table>
              </div>
            </div>


          </div>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script>
    function deleteTransaction(transactionId) {
        if (confirm("Are you sure you want to delete this transaction?")) {
            // Redirect to the page that handles the deletion
            window.location.href = 'delete_transaction.php?transid=' + transactionId;
        }
    }
</script>


          <script>
  $(document).ready(function() {
    $('#nextTable').DataTable({
      searching: false, // Disable search
      paging: false,     // Disable pagination
      info: false 
    });
  });
</script>
 </body>
</html>
<?php 
include ('footer.php');
?>
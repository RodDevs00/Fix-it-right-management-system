  <?php

  include 'process/session.php';
  $tempid = $_GET['editId'];

  $sql48 = "SELECT * FROM transacttable WHERE transid = '$tempid'";
  $result48 = $con->query($sql48);
  if(mysqli_num_rows($result48)>0){
      while($row = $result48->fetch_assoc()) {
        $reservenumber = $row['prioritynumber'];
        $reservesched = $row['transact_sched'];
        $reservepay = $row['payment_type'];
        
        $myreservedate = strtotime($reservesched);
      
      }
  }else{

  }
  $pendingdata = "SELECT * FROM transacttable where transid=$tempid";
$resultpendingdata = $con->query($pendingdata);
 if ($resultpendingdata->num_rows > 0) {
 
             while($row = $resultpendingdata->fetch_assoc()) {
                echo "<tr>";
                 $pendingcarID = $row['carid'];   
                $pendinguserID = $row['custid'];
                $pendingtransactdate = $row['transact_sched'];
                $pendingpaymentype = $row['payment_type'];
                $pendingtransactschedinfo = $row['transact_schedinfo'];
                $pendingstats = $row['status'];
                $pendingnumofitems = $row['numofitem'];
                $pendingpr = $row['prioritynumber'];
                $md = strtotime($pendingtransactdate);
                     
           
  }}
  $resultcountsql = "SELECT count(*) as total FROM transaction_table WHERE transaction_id = $tempid";

$resultsq= mysqli_query($con,$resultcountsql);
$data = mysqli_fetch_assoc($resultsq);
//echo $data['total'];
$numofservice = $data['total'];
 
$sqlerr = "SELECT * FROM employee ";
$resulterr = mysqli_query($con, $sqlerr) or die ("Bad SQL: $sql2");
if($resulterr->num_rows>0){
  $options = mysqli_fetch_all($resulterr,MYSQLI_ASSOC);
}
$sqltransid  = "SELECT transid FROM transacttable ORDER BY transid DESC LIMIT 1";

$resulttransid = $con->query($sqltransid);
             while($row = $resulttransid->fetch_assoc()) {
                echo "<tr>";
            
        
            $tempo = $row['transid'];
            $temporaryid = $tempo;
               
  }
$sqlcheck = "SELECT * FROM transacttable WHERE custid = '$tempcode' AND status='Approved';";
                    $resultcheck = $con->query($sqlcheck);
                    if(mysqli_num_rows($resultcheck)>0){
                           $_SESSION['stats'] ='Request Approved, Please be there on time!';
                           $_SESSION['stats_code'] ="success";
                           
                     }else{
                            
                           
                     }
$currentdate = date("Y-m-d");

$tommorowdate = new DateTime('tomorrow');
$sql2 = "SELECT * FROM service_category ORDER by service_id ASC";
$result2 = mysqli_query($con, $sql2) or die ("Bad SQL: $sql2");
$sqltransaction= "SELECT * FROM transaction_table WHERE car_id_labor ='$tempid'";
$sup = "<select class='form-control' id='product_encoder[]' id='SelectA'  name='product_category[]' onchange='my_fun(this.value);'>
        <option disabled selected>Select Services</option>";
  while ($row = mysqli_fetch_assoc($result2)) {
    $sup .= "<option value='".$row['service_name']."'>".$row['service_name']."</option>";
  }

$sup .= "</select>";
$sqlcardata = "SELECT * FROM cardata where id=$tempid";
$resultcardata = $con->query($sqlcardata);
 if ($resultcardata->num_rows > 0) {
 
             while($row = $resultcardata->fetch_assoc()) {
               
              
                $tempcarid = $row['plateid'];
              

  }



} else {
 
}
$sqltransid  = "SELECT transid FROM transacttable ORDER BY transid DESC LIMIT 1";

$resulttransid = $con->query($sqltransid);
             while($row = $resulttransid->fetch_assoc()) {
                echo "<tr>";
            
        
            $tempo = $row['transid'];
            $temporaryid = $tempo;
               
  }
 


$sqluserinfos  = "SELECT * FROM users WHERE id = '$pendinguserID';";
$sqlresultinfos = $con->query($sqluserinfos);
             while($row = $sqlresultinfos->fetch_assoc()) {
            $tempname = $row['firstname'];
            $templname = $row['lastname'];}




       

 ?>
<!doctype html>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="robots" content="index,follow">
  </head>

<body>

       
            
            <?php 
            
            $sqlcarinfos = "SELECT * FROM cardata WHERE id = $pendingcarID;";
            $resultcarinfos = $con->query($sqlcarinfos);
             while($row = $resultcarinfos->fetch_assoc()) {
               $tempcarname= $row['carbrand'];
               $tempcarmodel = $row['carmodel'];
               
  }
 

            ?>
            <div class="card shadow mb-4">
            <div class="card-header py-3">
               <h4 class="m-2 font-weight-bold">Information&nbsp;</h4>
            </div>
            
            <div class="card-body">
              
            <div class="row">
              <div class="col-md-2 mb-3">
            <label style="font-weight: bold;">Transaction ID</label>
             <input readonly type = "text" value = "<?php echo $tempid?>"class="bg-white form-control" required>
              

          </div>
          <div class="col-md-4 mb-3">
            <label style="font-weight: bold;">Customer's Name</label>
            <input type = "text" readonly value = "<?php echo $tempname," ",$templname?>"class="bg-white form-control" required>

               

          </div>
          <div class="col-md-4 mb-3">
            <label style="font-weight: bold;">Vehicle</label>
                                 <input readonly type = "text" value = "<?php echo $tempcarname,"  - ",$tempcarmodel?>"class="bg-white form-control" required>
                

                

          </div>
          <div class="col-md-2 mb-3">
                  <label style="font-weight: bold;">Status</label>
                  <?php
                  if($pendingstats == 'Approved'){
                    echo '<input style="color:green;"readonly type = "text" value = "';
                    echo $pendingstats;
                    echo '"class="bg-white form-control" required>';
                  }else{

                  }
                  ?>
                  
                  </div>
                  </div>
            </div>
          </div>
            <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 class="m-2 font-weight-bold">Schedule Informations&nbsp;</h4>
            </div>
            
            <div class="card-body">
              
            <div class="row">
              <div class="col-md-2 mb-3">
            <label style="font-weight: bold;">Scheduled Date</label>
             <input readonly type = "text" value = "<?php echo date('F j, Y', $md);?>"class="bg-white form-control" required>
              

          </div>
          <div class="col-md-4 mb-3">
            <label style="font-weight: bold;">Payment Type</label>
            <input type = "text" readonly value = "<?php echo $pendingpaymentype?>"class="bg-white form-control" required>

               

          </div>
          <div class="col-md-4 mb-3">
            <label style="font-weight: bold;">Priority Number</label>
                                 <input readonly type = "text" value = "<?php echo $pendingpr?>"class="bg-white form-control" required>
                

                

          </div>
         
                  </div>
            </div>
          </div>

             <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 class="m-2 font-weight-bold">Requested Services&nbsp;</h4>
            </div>
            
            <div class="card-body">
                <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"> 
                 
                 
                    
                          
                            <?php                  
                        $query = "SELECT * FROM booking_table WHERE transaction_id = $tempid;";
                        $result = mysqli_query($con, $query) or die (mysqli_error($db));
                        $resultcountsql = "SELECT count(*) as total FROM booking_table WHERE transaction_id = '$tempid'";
                        $resultsq= mysqli_query($con,$resultcountsql);
                        $data = mysqli_fetch_assoc($resultsq);
                        $numleft = $data['total'];
                        if($numleft==1){
                           echo '<thead>
                        <tr>
                          <th>Category</th>
                          <th>Services</th>
                       </tr>
                     </thead>
                    <tbody>';
                          while ($row = mysqli_fetch_assoc($result)) {
                        echo '<tr>';
                        echo '<td>'. $row['transact_category'].'</td>';
                        echo '<td>'. $row['name'].'</td>';
                        echo '</tr> ';
                        }
                        }else{
                            echo '<thead>
                        <tr>
                          <th>Category</th>
                          <th>Services</th>
                        
                       
                        </tr>
                     </thead>
                    <tbody>';
                          while ($row = mysqli_fetch_assoc($result)) {
                        echo '<tr>';
                        echo '<td>'. $row['transact_category'].'</td>';
                        echo '<td>'. $row['name'].'</td>';
                            
                        echo '</tr> ';
                        }
                        }
                        
                    ?> 
                               
                   
                </table>
              </div>
            </div>
          </div>
        
        

            

         

            
       


  </body>

</html>

<?php 
include ('footer.php');
?>
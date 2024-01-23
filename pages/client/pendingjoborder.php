<?php
  include 'process/session.php';
  $tempid = $_GET['editId'];
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
                $pendingnumofitems = $row['numofitem'];
                 $pendingstats = $row['status'];
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
              <h4 class="m-2 font-weight-bold text-primary">Client's Information&nbsp;</h4>
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
                  <input readonly type = "text" value = "<?php echo $pendingstats; ?>"class="bg-white form-control" required>
                  </div>
                  </div>
            </div>
          </div>
            
      
       
              
  <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 class="m-2 font-weight-bold text-primary">Schedule Informations&nbsp;</h4>
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
              <h4 class="m-2 font-weight-bold text-primary">Requested Services&nbsp;</h4>
            </div>
            
            <div class="card-body">
                <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"> 
                  <thead>
                        <tr>
                          <th>Category</th>
                          <th>Services</th>
                         
                       
                        </tr>
                     </thead>
                    <tbody>
                    
                            <?php                  
                        $query = "SELECT * FROM booking_table WHERE transaction_id = $tempid GROUP by name";
                        $result = mysqli_query($con, $query) or die (mysqli_error($db));
                        while ($row = mysqli_fetch_assoc($result)) {
                        echo '<tr>';
                        echo '<td>'. $row['transact_category'].'</td>';
                        echo '<td>'. $row['name'].'</td>';
                      
                      


                   
                        echo '</tr> ';
                        }
                    ?> 
                               
                    </tbody>
                </table>
              </div>
            </div>
          </div>
        
       
         
          </div>

        

         

            <div class="container">
  
            
              <div class="modal hide fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                
      <div class="modal-dialog">
        <div class="modal-content">
          

         

          
   <center><div class="card shadow mb-4 col-xs-12 col-md-12 border-bottom-primary">
            <div class="card-header py-3">
              <h4 class="m-2 font-weight-bold text-primary">Booking Details</h4>
            </div>
            <div class="card-body">
         
          <form  method="post" action="process/process.php">
              <input type="hidden" name="transid" value="<?php echo $tempid; ?>" />
              <div  hidden class="form-group row text-left font-weight-bold">
                <div class="col-sm-3" style="padding-top: 5px;">
                Number of Services
                </div>
                <div class="col-sm-9">
                  
                   
                  <input type="text" class="form-control" name="numofitem" value="<?php echo $numofservice;?>"  required>
                </div>
              </div>
               <hr>
               <div  class="form-group row text-left font-weight-bold">
                <div class="col-sm-3" style="padding-top: 5px;">
                Current Status
                </div>
                <div class="col-sm-9">
                  <select class="form-control" name="status"  value="" >
                  <option disabled selected>Pending</option>
                  <option value="Approved">Approve</option>
                  <option value="Rejected">Reject</option>
                  </select>
                </div>
              </div>
                  <div hidden class="form-group row text-left font-weight-bold">
                <div class="col-sm-3" style="padding-top: 5px;">
                Scheduled Date
                </div>
                <div class="col-sm-9">
                  
                   
                  <input type="date" min = "<?php echo $currentdate; ?>"class="form-control" name="transact_sched" value ="<?php echo $pendingtransactdate;?>" id="transact_sched"   required>
                </div>
              </div>
              <div  hidden class="form-group row text-left font-weight-bold">
                <div class="col-sm-3" style="padding-top: 5px;">
                Payment Type
                </div>
                <div class="col-sm-9">
                  
                   <select class="form-control" name="payment_type" id="payment_type" >
        <option value="<?php echo $pendingpaymentype ?>"disabled selected><?php echo $pendingpaymentype ?></option>
        <option value="Over the Counter">Over the Counter</option>
        <option value="Gcash">Gcash</option>
        <option value="Credit Card">Credit</option>
      </select>

                </div>
              </div>
               <div  class="form-group row text-left font-weight-bold">
                <div class="col-sm-3" style="padding-top: 5px;">
                Scheduled Date
                </div>
                <div class="col-sm-9">
                  
                   <?php

                   $mycur2 = strtotime($pendingtransactdate);
                    ?>
                  <input type="text" readonly class="bg-white form-control"  value ="<?php echo date('F j, Y', $mycur2);?>" id="transact_sched"   required>
                </div>
              </div>

              <div  class="form-group row text-left font-weight-bold">
                <div class="col-sm-3" style="padding-top: 5px;">
                Note
                </div>
                <div class="col-sm-9">
                  
                    <textarea readonly rows="5" cols="50" textarea class="bg-white form-control" placeholder="Optional" name="transact_schedinfo" ><?php echo $pendingtransactschedinfo;?></textarea>
                  
                </div>
              </div>
              <button type="submit" name="bookingupdate" value="submit" id="submit" class="btn btn-primary btn-block"><i class="fa fa-edit fa-fw"></i>Confirm</button> 
              </form>  
              


              
        
             
       
              
        
             
          </div>

  </div>


          </div>
        
        
      </div>
      
    </div>
 


    
    <td class="font-weight-bold">   <a type="button"  ; data-toggle="modal" data-target="#modal1" class="btn btn-primary bg-gradient-primary btn-block" href="transact-bill2.php"><i class="fas fa-fw fa-list-alt"></i> Proceed</a> </td>

  
  </div>
       


 
<br>
 </body>

</html>

<?php 
include ('footer.php');
?>
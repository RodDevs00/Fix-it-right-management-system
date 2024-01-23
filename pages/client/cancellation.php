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
               <h4 class="m-2 font-weight-bold">Information&nbsp;
               <a  href="checkStatus.php?editId=<?php echo $tempid ;?>" type="button" class="float-right btn btn-danger m-2 ">Check status<i class="fa-solid fa-bars-progress"></i></a>
                <a  href="joborderupate.php?editId=<?php echo  $pendingcarID;?>" type="button" class="float-right btn btn-primary m-2">Update<i class="fas fa-fw fa-edit"></i></a>
              </h4>
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
                         <th width="5%">Action</th>
                       
                        </tr>
                     </thead>
                    <tbody>';
                          while ($row = mysqli_fetch_assoc($result)) {
                        echo '<tr>';
                        echo '<td>'. $row['transact_category'].'</td>';
                        echo '<td>'. $row['name'].'</td>';
                        echo '<td>  <button href="process/process.php?DELETE1='.$row['id']. '" type="button"  class="btndel btn btn-danger bg-gradient-btn-danger " style="border-radius: 0px;" >
                                    <i class="fas fa-fw fa-trash"></i>
                                  </button></td>';         
                        echo '</tr> ';
                        }
                        }
                        
                    ?> 
                               
                   
                </table>
              </div>
            </div>
          </div>
        
        

            

         

            <div class="container">
  
            
              <div class="modal hide fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                
      <div class="modal-dialog">
        <div class="modal-content">
          

         

          
   <center><div class="card shadow mb-4 col-xs-12 col-md-12 ">
            <div class="card-header py-3">
              <h4 class="m-2 font-weight-bold">Cancellation </h4>
            </div>
            <div class="card-body">
         
            <form  method="post" action="process/process.php">
              <input type="hidden" name="transid" value="<?php echo $tempid; ?>" />
              <div  hidden class="form-group row text-left font-weight-bold">
             
                <div class="col-sm-9">
                  
                   
                  <input type="text" class="form-control" name="numofitem" value="<?php echo $numofservice;?>"  required>
                </div>
              </div>
               
             
              

              
               <button href="process/process.php?deletebookings=<?php echo $tempid?>" type="button"  class="cancels btn btn-danger bg-gradient-btn-danger btn-block" style="border-radius: 0px;" >
                <i class="fas fa-fw fa-check "></i> Confirm
                                  </button>
              </form>  
              


              
        
             
       
              
        
             
          </div>
  </div>


          </div>
        
        
      </div>
    </div>
 


    
    

  
  </div>
       


  <td class="font-weight-bold">
    <div class="text-center ">
        <a type="button" data-toggle="modal" data-target="#modal1" class="btn btn-danger px-5" href="transact-bill2.php">
            <i class="fas fa-fw fa-clock"></i> Cancel
        </a>
    </div>
</td>
<br>
 </body>

</html>

<?php 
include ('unfooted.php');
?>
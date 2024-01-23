
<?php
 include 'process/session.php';
  
?>
<?php

   $tempids = $_GET['editId'];

  $sqlcurid = "SELECT * FROM transacttable WHERE transid = $tempids";
  $resultcurid = $con->query($sqlcurid);
     while($row = $resultcurid->fetch_assoc()) {
     
      $tempid = $row['carid'];
      
               
  }
   $pendingdata = "SELECT * FROM transacttable where transid=$tempids";
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

   $sqlcarinfos = "SELECT * FROM cardata WHERE id = $pendingcarID;";
            $resultcarinfos = $con->query($sqlcarinfos);
             while($row = $resultcarinfos->fetch_assoc()) {
               $tempcarname= $row['carbrand'];
               $tempcarmodel = $row['carmodel'];
               
  }
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
            $temporaryid = $tempo ;
               
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
$sql3 = "SELECT * FROM category ORDER by c_id ASC";
$result3 = mysqli_query($con, $sql3) or die ("Bad SQL: $sql3");

$sup3 = "<select class='form-control' id='itemcategory[]' id='SelectA'  name='itemcategory[]' onchange='my_fun2(this.value);'>
        <option disabled selected>Select Item Type</option>";
  while ($row = mysqli_fetch_assoc($result3)) {
    $sup3 .= "<option value='".$row['c_name']."'>".$row['c_name']."</option>";
  }

$sup3 .= "</select>";
$sqlcardata = "SELECT * FROM cardata where id=$tempid";
$resultcardata = $con->query($sqlcardata);
 if ($resultcardata->num_rows > 0) {
 
             while($row = $resultcardata->fetch_assoc()) {
                echo "<tr>";
              
                $tempcarid = $row['plateid'];   

  }



} else {
  echo "0 results";
}
$sqltransid  = "SELECT transid FROM transacttable ORDER BY transid DESC LIMIT 1";

$resulttransid = $con->query($sqltransid);
             while($row = $resulttransid->fetch_assoc()) {
                echo "<tr>";
            
        
            $tempo = $row['transid'];
            $temporaryid = $tempo ;
               
  }
  $temponumber = "2";
  $sqluserinfos  = "SELECT * FROM users WHERE id = '$pendinguserID';";
$sqlresultinfos = $con->query($sqluserinfos);
             while($row = $sqlresultinfos->fetch_assoc()) {
            $tempname = $row['firstname'];
            $templname = $row['lastname'];}



?>





    <script src="includes/assets/js/jquery.min.js"></script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
 



<!doctype html>

<html lang="en-US">

<head>

  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <meta name="description" content="PHP CRUD with search and pagination in bootstrap 4">
  <meta name="keywords" content="PHP CRUD, CRUD with search and pagination, bootstrap 4, PHP">
  <meta name="robots" content="index,follow">



    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">



</head>



<body onload="multiply();">

     <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 class="m-2 font-weight-bold text-primary">Client's Information&nbsp;<a  href="joborder2.php?editId=<?php echo  $tempids;?>" type="button" class="float-right btn btn-primary bg-gradient-primary" style="border-radius: 0px;">Update<i class="fas fa-fw fa-edit"></i></a></h4>
            </div>
            
            <div class="card-body">
              
            <div class="row">
              <div class="col-md-2 mb-3">
            <label style="font-weight: bold;">Transaction ID</label>
             <input readonly type = "text" value = "<?php echo $tempids?>"class="bg-white form-control" required>
              

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
              <h4 class="m-2 font-weight-bold text-primary">Schedule Information&nbsp;</h4>
            </div>
            
            <div class="card-body">
              
            <div class="row">
              <div class="col-md-4 mb-3">
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
              <h4 class="m-2 font-weight-bold text-primary">Labors & Services&nbsp;</h4>
            </div>
            
            <div class="card-body">
              <div id="magic1">
            <?php
            $sqlsum = "SELECT SUM(price) FROM transaction_table WHERE transaction_id ='$tempids'";
                  $resultsum = mysqli_query($con, $sqlsum) or die(mysqli_error($db));
             while ($row = mysqli_fetch_array($resultsum)) {
                $totalsum = $row['SUM(price)'];
            }
            $resultcountsql = "SELECT count(*) as total FROM transaction_table WHERE transaction_id = '$tempids'";
              $resultsq= mysqli_query($con,$resultcountsql);
              $data = mysqli_fetch_assoc($resultsq);
              //echo $data['total'];
              $numofservice = $data['total'];
$sqltransaction5= "SELECT * FROM transaction_table WHERE transaction_id ='$tempids'";
           $result5 = $con->query($sqltransaction5);
           if(mysqli_num_rows($result5)>0){
               echo '<div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"> 
                  <thead>
                        <tr>
                          <th>Category</th>
                          <th>Services Name</th> 
                          <th>Mechanic</th> 
                          <th width="">Price</th>
                           <th width="">Rate</th>
                          <th width="">Hour</th>
                          <th width="">Total</th>
                         
                        </tr>
                     </thead>
                    <tbody>';
                    
        while($row = $result5->fetch_assoc()) {
           $magicsum = $row['price'];
           $magicrate = $row['rate'];
           $magichour = $row['transact_total'];
           $magictotal = $magicsum * $magicrate;
           $magictotalrate = $magictotal * $magichour; 
                         echo '<tr>';
                        echo '<td>'. $row['transact_category'].'</td>';
                        echo '<td>'. $row['name'].'</td>';
                        echo '<td>'. $row['encoder'].'</td>';
                         echo '<td>';
                        echo number_format($magicsum, 2);
                        echo '</td>';
                         echo '<td>'. $row['rate'].'</td>';
                        echo '<td>'. $row['hour'].'</td>';
                        echo '<td>';
                        echo number_format($magichour, 2);
                        echo '</td>';
                       
                   }
                
                               
                   echo' </tbody>
                </table>
              </div>';

        
      

           }else{

           }
             ?>
             </div>
            
             

            </div>
          </div>
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 class="m-2 font-weight-bold text-primary">Parts and Materials&nbsp;</h4>
            </div>
            
            <div class="card-body">
                 <div id="magic2">
            <?php
            $sqlsum = "SELECT SUM(item_total) FROM parts_table WHERE item_transaction_id ='$tempids'";
                  $resultsum = mysqli_query($con, $sqlsum) or die(mysqli_error($db));
             while ($row = mysqli_fetch_array($resultsum)) {
                $totalsum = $row['SUM(item_total)'];
            }
            $resultcountsql = "SELECT SUM(item_amount) as total FROM parts_table WHERE item_transaction_id = '$tempids'";
              $resultsq= mysqli_query($con,$resultcountsql);
              $data = mysqli_fetch_assoc($resultsq);
              //echo $data['total'];
              $numofservice = $data['total'];
$sqltransaction5=  "SELECT SUM(item_total) as item_total,SUM(item_amount) as item_amount,item_price,item_name,item_category,item_id,item_product_id FROM parts_table WHERE item_transaction_id ='$tempids' GROUP by item_name";
           $result5 = $con->query($sqltransaction5);
           if(mysqli_num_rows($result5)>0){
               echo '<div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"> 
                  <thead>
                        <tr>
                          
                          <th width="18%">Product Code</th>
                          <th width="22%">Materials</th>  
                          <th width="">Price</th>
                          <th width="6%">Qty</th>
                          <th width="">Total</th>
                         
                        </tr>
                     </thead>
                    <tbody>';
                    
        while($row = $result5->fetch_assoc()) {
           $magicsum3 = $row['item_price'];
           $magicsum2 = $row['item_total'];
                         echo '<tr>';
                        echo '<td>'. $row['item_product_id'].'</td>';
                        echo '<td>'. $row['item_name'].'</td>';
                      
                       
                        echo '<td>';
                        echo number_format($magicsum3, 2);
                        echo '</td>';
                          echo '<td>'. $row['item_amount'].'</td>';
                           echo '<td>';
                        echo number_format($magicsum2, 2);
                        echo '</td>';
                        
                       
                   }
             
                               
                   echo' </tbody>
                </table>
              </div>';

        
      

           }else{

           }
             ?>
             </div>
             
            </div>
          </div>

          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 class="m-2 font-weight-bold text-primary">Payment Details&nbsp;</h4>
            </div>
            
            <div class="card-body">

                    <?php 
                    $sql21 = "SELECT SUM(transact_total) FROM transaction_table WHERE transaction_id = '$tempids';";
                    $result21 = mysqli_query($con, $sql21) or die(mysqli_error($db));

                  while ($row = mysqli_fetch_array($result21)) {


                    $sumlabor = $row['SUM(transact_total)'];
                      }
                    ?>
                     <?php 
                     $sqltrans = "SELECT * FROM transacttable WHERE transid = '$tempids';";
                     $resulttrans = mysqli_query($con,$sqltrans) or die(mysqli_error($db));
                     while ($row = mysqli_fetch_array($resulttrans)){
                      $totalcash = $row['cashtotal'];

                     }
                     $sqlparts = "SELECT SUM(item_total) FROM parts_table WHERE item_transaction_id ='$tempids';";
                    $resultparts = mysqli_query($con, $sqlparts) or die(mysqli_error($db));

                  while ($row = mysqli_fetch_array($resultparts)) {


                    $sumparts = $row['SUM(item_total)'];
                      }
                      $totalsum = $sumparts + $sumlabor;

                    ?>
    

                
            
                <?php
                if($sumlabor >0){
                        echo ' <div class="row">
              <div class="col-md-2 mb-3 col-sm-5 text-left text-primary py-2">
              <label style="font-weight: bold;">Labors and Services</label>
              </div>
              <div class="col-md-2 mb-3">
                 <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <span class="input-group-text">₱</span>
                </div>';

                echo '<input readonly type = "text" value = "';
                echo number_format($sumlabor, 2);
                echo ' "class="bg-white form-control" required>';

              echo '</div>
                  
                  </div>

                </div>';
                        

                      }else{

                      }
                if($sumparts >0){
                        echo ' <div class="row">
              <div class="col-md-2 mb-3 col-sm-5 text-left text-primary py-2">
              <label style="font-weight: bold;">Parts and Materials</label>
              </div>
              <div class="col-md-2 mb-3">
                 <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <span class="input-group-text">₱</span>
                </div>';

                echo '<input readonly type = "text" value = "';
                echo number_format($sumparts, 2);
                echo ' "class="bg-white form-control" required>';

              echo '</div>
                  
                  </div>

                </div>';
                        

                      }else{

                      }
                if($totalsum >0){
                        echo ' <div class="row">
              <div class="col-md-2 mb-3 col-sm-5 text-left text-primary py-2">
              <label style="font-weight: bold;">Total</label>
              </div>
              <div class="col-md-2 mb-3">
                 <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <span class="input-group-text">₱</span>
                </div>';

                echo '<input readonly type = "text" value = "';
                echo number_format($totalsum, 2);
                echo ' "class="bg-white form-control" required>';

              echo '</div>
                  
                  </div>

                </div>';
                        

                      }else{

                      }
                if($totalcash >0){
                        echo ' <div class="row">
              <div class="col-md-2 mb-3 col-sm-5 text-left text-primary py-2">
              <label style="font-weight: bold;">Cash Amount</label>
              </div>
              <div class="col-md-2 mb-3">
                 <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <span class="input-group-text">₱</span>
                </div>';

                echo '<input readonly type = "text" value = "';
                echo number_format($totalcash, 2);
                echo ' "class="bg-white form-control" required>';

              echo '</div>
                  
                  </div>

                </div>';
                        

                      }else{

                      }

                 ?>
               
                 <div class="row">
             
              <div class="col-md-4 mb-3">
              
                
                 <td class="font-weight-bold">    <a type="button"  ; data-toggle="modal" data-target="#modal1" class="btn btn-primary bg-gradient-primary " href="#"><i class="fas fa-arrow-right"></i>Proceed to Payment</a> </td>

            
                  
                  </div>
                  
                </div>
           
         
      
          
                </div>
          </div>
           
         
          
      
       
             
           
              
            


            
          
              
        

            
              
          
           
                 
              


              


                 
                 
                
                 
                </div>

              </div>
           
              
              <div>
                
               
              </div>
          

           



 
<br>

    <div class="container">
  
            
              <div class="modal hide fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                
      <div class="modal-dialog">
        <div class="modal-content">
          

         

          
   <center><div class="card shadow mb-4 col-xs-12 col-md-12 border-bottom-primary">
            <div class="card-header py-3">
              <h4 class="m-2 font-weight-bold text-primary">Payment</h4>
            </div>
            <div class="card-body">
           <?php
                  $resultcountsql = "SELECT count(*) as total FROM transaction_table WHERE transaction_id = '$temporaryid'";
                  $resultsq= mysqli_query($con,$resultcountsql);
                  $data = mysqli_fetch_assoc($resultsq);
                  //echo $data['total'];
                  $numofservice = $data['total'];
                  $resultcountsql1 = "SELECT count(*) as total1 FROM parts_table WHERE item_transaction_id = '$temporaryid'";
                  $resultsq1= mysqli_query($con,$resultcountsql1);
                  $data1 = mysqli_fetch_assoc($resultsq1);
                  //echo $data['total'];
                  $numofservice1 = $data1['total1'];
                   ?>
            <form  method="post" action="process/process.php">
             <div class="form-group row text-left mb-2">

                    <div class="col-sm-12 text-center">
                      <h3 class="py-0">
                        GRAND TOTAL
                      </h3>
                      <h3 class="font-weight-bold py-3 bg-light">
                        ₱ <?php echo number_format($totalsum, 2); ?>
                      </h3>
                    </div>

                  </div> <input hidden type="text" name="transid" value="<?php echo $tempids; ?>" />

                    <input hidden type="text" class="form-control text-right" name="transact1" value="<?php echo $totalsum; ?>"   >
                    
                  <div class="col-sm-12 mb-2">
                      <div class="input-group mb-2">
                        <div class="input-group-prepend">
                          <span class="input-group-text">₱</span>
                        </div>
                        <?php
                            if ($totalcash > 0){
                                 ?>   

                                 <input type="number" class="form-control text-right" value="<?php echo $totalcash; ?>" name="cashtotal" min="<?php echo $totalsum;?>"  placeholder="ENTER CASH"  >

                                        <?php
                                    }else{
                                  echo '<input type="number" class="form-control text-right" name="cashtotal" min="'.$totalsum.'"  placeholder="ENTER CASH"  >   '; 
                        }
                        ?>
                          
                    </div>
                  </div>
                 
                  <div class="col-sm-12 mb-2">
                      <div hidden class="input-group mb-2">
                        
                          <input type="text" class="form-control text-right" name="status" value="Completed"  placeholder="Status"  >
                    </div>
                  </div>

                   <div hidden class="col-sm-12 mb-2">
                      <div class="input-group mb-2">
                        <?php 

$sqlquery = "SELECT * FROM users WHERE id = $tempcode;";
     $result= $con->query($sqlquery);
     while($row = $result->fetch_assoc()) {
        $temp_type = $row['user_type'];}?>
                          <input type="text" class="form-control text-right" name="encoder" value="<?php echo $temp_type;?>"  >
                    </div>
                  </div>
                   <div hidden class="col-sm-12 mb-2">
                      <div class="input-group mb-2">
                        
                          <input type="text" class="form-control text-right" name="numofitem" value="<?php echo $numofservice;?>"  >
                    </div>
                  </div>
                    <!-- 
                  <div   class="col-sm-12 mb-2">
                      <div class="input-group mb-2">
                        
                          <input type="text" class="form-control text-right" name="numofmaterials" value="<?php echo $numofservice1;?>"   >
                    </div>
                  </div>
                 
              -->
              
             
              

                <button type="submit" name="submitfinal" value="submit" id="submitfinal" class="btn btn-warning btn-block"><i class="fa fa-edit fa-fw"></i>Confirm</button> 
              </form>  
          </div>
  </div>


          </div>
        
        
      </div>
    </div>
 


    
    

  
  </div>
       
          
       
         
            
          


        
              


         

  
</body>
</html>
<?php
include 'unfooted.php'; ?>
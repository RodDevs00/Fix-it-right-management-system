
<?php
 include 'process/session.php';
  
?>
<script>
  
  function my_fun(str){
    if(window.XMLHttpRequest){
      xmlhttp = new XMLHttpRequest();
    }else{
      xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange= function(){
      if(this.readyState ==4 && this.status ==200){
        document.getElementById('poll3').innerHTML = this.responseText;

      }
    }
    xmlhttp.open("GET","process/helper.php?value="+str, true);
    xmlhttp.send();
  }
</script>
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
   $sqlcarinfos = "SELECT * FROM cardata WHERE id = $pendingcarID;";
            $resultcarinfos = $con->query($sqlcarinfos);
             while($row = $resultcarinfos->fetch_assoc()) {
               $tempcarname= $row['carbrand'];
               $tempcarmodel = $row['carmodel'];
               
  }
$sqlerr = "SELECT * FROM employee WHERE employee_job ='Mechanic'";
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

  $sqltemp = "SELECT * FROM transacttable WHERE transid ='$temporaryid'";
  $resulttemp = $con->query($sqltemp);
             while($row = $resulttemp->fetch_assoc()) {
            $temporayssched = $row['transact_sched'];
          
               
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
//echo $tempcarid;


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


  <script src="css/jquery.min.js"></script>
    <script src="css/popper.min.js"></script>

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


<!-- INFORMATION -->
  <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 class="m-2 font-weight-bold text-primary">Information&nbsp;</h4>
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



  <!--  REQUESTED SERVICES -->


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
                        $query = "SELECT * FROM booking_table WHERE transaction_id = $tempids GROUP by name";
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
                          <th width=""> Action</th>
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
                        echo '<td>  <button href="process/process.php?DELETE12='.$row['id']. '" type="button"  class="btndel btn btn-danger  " style="border-radius: 10px;" >
                                    <i class="fas fa-fw fa-trash"></i>
                                  </button></td>';
                        echo '</tr> ';
                   }
                
                               
                   echo' </tbody>
                </table>
              </div>';

        
      

           }else{

           }
             ?>
             </div>
             <br>
              <div id ="show_alert"></div>
            <form action ="#" method="POST" id ="add_form">
              <div id="show_item">
                
                 
                <div class="row">

                  <div class="col-md-3 mb-3">
                  <label style="font-weight: bold;">Services</label>
                    <input type = "text"  style="font-size: 15px;font-display: auto;"id="customername" name="product_name[]" class="form-control" placeholder="Services Name" required>
                  </div>

                <div hidden class="col-md-2 mb-3">
                  <label style="font-weight: bold;">Services Category</label>
                    <input type = "text" id="sname" name="product_category[]" class="form-control" placeholder="Code" required>
                  </div>
                  
                  
                  <div class="col-sd-2 mb-3">
                  <label style="font-weight: bold;">Mechanic</label>
                   <select name='product_encoder[]' class='form-control' required>
                       <option value="">Mechanics</option>
                          <?php foreach ($options as $options){ ?> 
                       <option><?php echo $options['employee_fname']; echo " ",$options['employee_lname']; ?></option>
                        <?php }?>
                      </select>

                  </div>
                   <div class="col-md-2 mb-3">
                    <label style="font-weight: bold;">Price</label>
                    <input type = "number" name="product_price[]" id = "sprice" class="form-control"  required onclick="multiply();">
                  </div>
                   
                  <div hidden class="col-md-1 mb-3">
                      <label style="font-weight: bold;">transid</label>
                    <input type = "number" value="<?php echo $temporaryid;?>" name="product_ids[]" class="form-control" placeholder="Rate" required>
                  </div>

                  <div hidden class="col-md-1 mb-3">
                    <label style="font-weight: bold;">ID NUMBER</label>
                    <input type = "number" name="producttemp[]" value = "<?php echo $temponumber;?>"class="form-control" placeholder="TEMP" required>
                  </div> 
                 

                    <div  hidden class="col-md-0 mb-3">
                    <input type = "number" name="producttrans" value = "<?php echo $tempids ?>"class="form-control" placeholder=" User ID" required>
                  </div>
                  <div  hidden class="col-md-0 mb-3">
                    <input type = "number" name="productss[]" value = "<?php echo $tempids ?>"class="form-control" placeholder=" User ID" required>
                  </div>
                  <div  class="col-md-0 mb-3">
                    <input type = "number" hidden name="product_transact[]" value = "<?php echo $tempids ?>"class="form-control" placeholder=" Transaction Number" required>
                  </div>
                  <div hidden class="col-md-0 mb-3">
                    <input type = "number" name="product_qty[]" value = "<?php echo $tempid ?>"class="form-control" placeholder=" Item Quantity" required>
                  </div>
                  <div  hidden class="col-md-0 mb-3">
                    <input type = "number" name="product_user[]" value = "<?php echo $tempcarid ?>"class="form-control" placeholder=" User ID" required>
                  </div>
                  <div  hidden class="col-md-0 mb-3">
                    <input type = "date" name="product_date[]" value = "<?php echo $temporayssched ?>"class="form-control" placeholder=" User ID" required>
                  </div>
                 <div class="col-md-1 mb-3">
                      <label style="font-weight: bold;">Rate</label>
                    <input type = "number" name="product_rate[]" min ="1" class="form-control" id="rateadd" required onclick="multiply();">
                  </div>
                  
                   <div class="col-md-1 mb-3">
                    <label style="font-weight: bold;">Hour</label>
                    <input type = "number" name="product_hour[]" min ="1" class="form-control" id="houradd"  required onclick="multiply();">
                  </div> 
                  <div class="col-md-2 mb-3">
                    <label style="font-weight: bold;">Total</label>
                    <input type = "number" name="product_totals[]" min ="1" value = "0" id = "servicetotal" class="form-control"  required>
                  </div>
                  <div class="col-md-1 mb-3">
                    <label style="font-weight: bold;color:transparent;">Hour</label>
                    <input type="submit" name="" value="Add" class="form-control btn btn-primary" id="add_btn">
                  </div> 
                </div>

              </div>
             
           
            </form>

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
                          <th width="5%"> Action</th>
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
                        
                        echo '<td>  <button href="process/process.php?DELETE13='.$row['item_id']. '" type="button"  class="btndel btn btn-danger  " style="border-radius: 10px;" >
                                    <i class="fas fa-fw fa-trash"></i>
                                  </button></td>';
                        echo '</tr> ';
                   }
             
                               
                   echo' </tbody>
                </table>
              </div>';

        
      

           }else{

           }
             ?>
             </div>
             <br>
              <div id ="show_alert1"></div>
            <form action ="#" method="POST" id ="add_form1">
              <div id="show_item1">
               
                 
                <div class="row">

                  <div class="col-md-3 mb-3">
                  <label style="font-weight: bold;">Product Code</label>
                    <input type = "text" id="customer_name" name="itemproductid[]" class="form-control" placeholder="Code" required>
                  </div>
                  <div hidden class="col-md-3 mb-3">
                  <label style="font-weight: bold;">Item Type</label>
                    <input type = "text"  name='itemcategory[]' id="pctg" class="form-control" placeholder="ID" required>
                  </div>

                  <div  class="col-md-3 mb-3">
                     <label style="font-weight: bold;">Materials</label>
                     <input type = "text" class="form-control" name ="itemname[]" id="email" placeholder="Materials" required>
         
                
                  </div>
                                    
                   <div class="col-md-2 mb-3">
                    <label style="font-weight: bold;">Price</label>
                    <input type = "number" name="itemprice[]" min ="1" id="phone" value="0" class="form-control"  required onclick="multiply();">
                  </div>                 
                  
                  <div class="col-md-1 mb-3">
                    <label style="font-weight: bold;">Amount</label>
                    <input type = "number" name="itemamount[]" value="0" min="1" id="qty1" class="form-control"  required onclick="multiply();">
                  </div>
                  <div class="col-md-2 mb-3">
                    <label style="font-weight: bold;">Total</label>
                    <input type = "number" name="itemtotal[]" id="total" value="0" min="1" class="form-control"  required>
                  </div>
                
                  <div hidden class="col-md-3 mb-3">
                    <input type = "number"  name="itemtran" value = "<?php echo $tempids ?>"class="form-control" placeholder=" Transaction Number" required>
                  </div>

                  <div hidden class="col-md-3 mb-3">
                    <input type = "number"  name="itemtransactionid[]" value = "<?php echo $tempids ?>"class="form-control" placeholder=" Transaction Number" required>
                  </div>
                  <div  hidden class="col-md-3 mb-3">
                    <input type = "number" name="itemcarid[]" value = "<?php echo $tempid ?>"class="form-control" placeholder=" Item Quantity" required>
                  </div>
                  <div  hidden class="col-md-3 mb-3">
                    <input type = "number" name="itemuserid[]" value = "<?php echo $tempcarid ?>"class="form-control" placeholder=" User ID" required>
                  </div>
                  <div hidden class="col-md-3 mb-3">
                    <input type = "date" name="items[]" value = "<?php echo $temporayssched ?>"class="form-control" placeholder=" User ID" required>
                  </div>
                  <div hidden class="col-md-3 mb-3">
                    <input type = "text" name="product_ids[]" value = "<?php echo $temporaryid ?>"class="form-control" placeholder=" User ID" required>
                  </div>
                 <div class="col-md-1 mb-3">
                    <label style="font-weight: bold;color: transparent;">Total</label>
                    <input type="submit" name="" value="Add" class="form-control btn btn-primary" id="add_btn1">
                  </div>
                </div>
              </div>
              
            
              <div>
                
               
              </div>
            </form>
            </div>
          </div>
            <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 class="m-2 font-weight-bold text-primary">Recommendations&nbsp;</h4>
            </div>
            
            <div class="card-body">
                 <div id="magic3">
           <?php 
           $sqlrecommend=  "SELECT * FROM recommend WHERE recoomendtransid   ='$tempids';";
           $resultrecommend = $con->query($sqlrecommend);
           if(mysqli_num_rows($resultrecommend)>0){
               echo '<div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"> 
                  
                    <tbody>';
                    
        while($row = $resultrecommend->fetch_assoc()) {
          
                         echo '<tr>';
                        echo '<td>'. $row['recommendmsg'].'</td>';
                        echo '<td width="5%">  <button href="process/process.php?DL4='.$row['recommendid']. '" type="button"  class="btndel btn btn-danger  " style="border-radius: 10px;" >
                                    <i class="fas fa-fw fa-trash"></i>
                                  </button></td>';
                        echo '</tr> ';
                   }
             
                               
                   echo' </tbody>
                </table>
              </div>';

        
      

           }else{

           }
           ?>
          
             </div>
            
              <div id ="show_alert3"></div>
            <form action ="#" method="POST" id ="add_form3">
              <div id="show_item3">
               
                 
                <div class="row">

                  <div class="col-md-3 mb-3">
                  
                     <textarea rows="5" style="width:330%;"cols="100" textarea class="form-control" placeholder="Recommendations" name="recommendmsg[]" required></textarea>
                      <input hidden type = "text" name="recommendtransid[]" value = "<?php echo $temporaryid ?>"class="form-control" placeholder=" Transaction ID" required>
                      <input hidden type = "number" name="recommenduserid[]" value = "<?php echo $tempcarid ?>"class="form-control" placeholder=" User ID" required>
                      <input hidden type = "number" name="recommendcarid[]" value = "<?php echo $tempid ?>"class="form-control" placeholder=" Car ID" required>
                  </div>
                 <div class="col-md-2 mb-3">
                    <label style="font-weight: bold;color: transparent;">Total</label>
                    <input type="submit"  name="" value="+" style="position: absolute;margin-left: 495px;padding-bottom: 85px;padding-top: 50px;font-size: 30px;" class="form-control btn btn-primary" id="add_btn2">
                  </div>
                </div>

              </div>
              
            
              <div>
                
               
              </div>
            </form>
            </div>
          </div>
            
         <td class="font-weight-bold">   <a type="button"   class="btn btn-primary bg-gradient-primary btn-block" href="valuechecker.php?editId=<?php echo $tempids;?>"><i class="fas fa-arrow-right"></i> Proceed</a> </td>
          
          </div>
        
          
            
            


          
          
       
         
            
          


        
              


         

  


</body>
  <script>
    
    $(document).ready(function(){
    
     
      $(document).on('click','.remove_item_btn', function(e){
        e.preventDefault();
        let row_item = $(this).parent().parent();
        $(row_item).remove();
      });
      $("#add_form").submit(function(e){
        e.preventDefault();
        $("#add_btn").val('Adding...');
        $.ajax({
          url: 'process/action3.php',
          method: 'post',
          data: $(this).serialize(),
          success: function(response){
            $("#add_btn").val('Add');
            $("#add_form")[0].reset();
            $(".append.item").remove();
            $("#show_alert").html(`<div>${response} </div>`);
            $("#magic1").hide();
          }
        });
      });
    });
  </script>
  <script>
    
    $(document).ready(function(){
    
     
     
      $("#add_form1").submit(function(e){
        e.preventDefault();
        $("#add_btn1").val('Adding...');
        $.ajax({
          url: 'process/action4.php',
          method: 'post',
          data: $(this).serialize(),
          success: function(response){
            $("#add_btn1").val('Add1');
            $("#add_form1")[0].reset();
            $(".append.item1").remove();
            $("#show_alert1").html(`<div class=" role="alert">${response} </div>`);
            $("#magic2").hide();
          }
        });
      });
    });
  </script>
    <script>
    
    $(document).ready(function(){
    
     
     
      $("#add_form3").submit(function(e){
        e.preventDefault();
        $("#add_btn3").val('Adding...');
        $.ajax({
          url: 'process/action8.php',
          method: 'post',
          data: $(this).serialize(),
          success: function(response){
            $("#add_btn3").val('Add1');
            $("#add_form3")[0].reset();
            $(".append.item3").remove();
            $("#show_alert3").html(`<div class=" role="alert">${response} </div>`);
            $("#magic3").hide();
          }
        });
      });
    });
  </script>
<script >
  function multiply() {
   var one = document.getElementById("phone").value;
   var two = document.getElementById("qty1").value;
   var total = parseFloat(one)*parseFloat(two);
   document.getElementById("total").value = total;
   var price = document.getElementById('sprice').value;
   var rate = document.getElementById('rateadd').value;
   var hour = document.getElementById('houradd').value;
   var gross = parseFloat(price)*parseFloat(rate);
   var grossincome = parseFloat(gross)*parseFloat(hour);
   document.getElementById("servicetotal").value = grossincome;

  }
</script>
<script type="text/javascript">
   $( function() {
    $( "#customer_name" ).autocomplete({
    source: 'backend-script.php'  
    });
});
</script>
<script type="text/javascript">
   $( function() {
    $( "#customername" ).autocomplete({
    source: 'backend-script1.php'  
    });
});
</script>
<script type="text/javascript">
 $(document).ready(function(){
 $('#customer_name').on('change',function(){
 var user = $(this).val();
 $.ajax({
    url : "get1.php",
    dataType: 'json',
    type: 'POST',
    async : true,
    data : { user : user},
    success : function(data) {    
        $('#phone').val(data.p_price);
        $('#email').val(data.p_name);
        $('#qty').val(data.p_on_hand);
        $('#pctg').val(data.p_category);
    }
}); 
});
});
</script>
<script type="text/javascript">
 $(document).ready(function(){
 $('#customername').on('change',function(){
 var user = $(this).val();
 $.ajax({
    url : "get4.php",
    dataType: 'json',
    type: 'POST',
    async : true,
    data : { user : user},
    success : function(data) {    
        $('#sprice').val(data.service_price);
        $('#sname').val(data.service_category);
       
    }
}); 
});
});
</script>


</html>


<?php
include 'unfooted.php'; ?>
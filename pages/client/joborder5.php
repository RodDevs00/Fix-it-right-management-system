
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
<script>
  
  function my_fun2(str){
    if(window.XMLHttpRequest){
      xmlhttp = new XMLHttpRequest();
    }else{
      xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange= function(){
      if(this.readyState ==4 && this.status ==200){
        document.getElementById('poll2').innerHTML = this.responseText;

      }
    }
    xmlhttp.open("GET","process/helper2.php?value="+str, true);
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

            
            
            
            <div class="card-header py-3">
            <h4>JOB ORDER</h4>
         
          </div>
          <br>
          <div class="card-header py-3">
            <h4>Information</h4>
            <div class="row">
              <div class="col-md-2 mb-3">
            <label style="font-weight: bold;">Transaction ID</label>
            <select class="form-control" >
                  <option disabled selected><?php echo $tempids?></option>
                  </select>
              

          </div>
          <div class="col-md-4 mb-3">
            <label style="font-weight: bold;">Customer's Name</label>
            <select class="form-control" >
                  <option disabled selected><?php echo $tempname," ",$templname?></option>
                  </select>
              

          </div>
          <div class="col-md-4 mb-3">
            <label style="font-weight: bold;">Vehicle</label>
                   <select class="form-control" >
                  <option disabled selected><?php echo $tempcarname,"  - ",$tempcarmodel?></option>
                  </select>
                

          </div>
          <div class="col-md-2 mb-3">
                  <label style="font-weight: bold;">Status</label>
                   <select class="form-control" >
                  <option disabled selected>Approved</option>
                  </select>
                  </div>
        </div>
         
          </div>
          <hr>
          
            <div class="card-body">
               <div class="card-header py-3">
            <h4>Requested Services</h4>
          
         
          </div>
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
                        $query = "SELECT * FROM booking_table WHERE transaction_id = $tempids;";
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
        


            <br>
        



<br><br>
 <td class="font-weight-bold">   <a type="button" data-toggle="modal" data-target="#modal1" class="btn btn-primary bg-gradient-primary btn-block" href="#"><i class="fas fa-bell  "></i> Proceed</a> </td>
<br>

   
          
       
            <div class="container">
  
            
              <div class="modal hide fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                
      <div class="modal-dialog">
        <div class="modal-content">
          

         

          
   <center><div class="card shadow mb-4 col-xs-12 col-md-12 border-bottom-primary">
            <div class="card-header py-3">
              <h4 class="m-2 font-weight-bold text-primary">Details</h4>
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

                   

                  </div> <input hidden type="text" name="bookingid" value="<?php echo $tempids; ?>" />

                   
                    
                  <div  hidden  class="col-sm-12 mb-2">
                      <div class="input-group mb-2">
                        <div class="input-group-prepend">
                        
                        </div>
                          <input type="text" class="form-control text-right" name="statusbooking" value="Cancelled" placeholder="Status "  >
                    </div>
                  </div>
                 
                 

                
             
              

                <button type="submit" name="submitfinall" value="submit" id="submitfinal" class=" btn btn-danger btn-block"><i class="fa fa-check fa-fw"></i>Request for Cancellation</button> 
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
include 'footer.php'; ?>
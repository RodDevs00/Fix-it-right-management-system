<?php
  include 'process/session.php';
  

$tempids = $_GET['editId'];
 $query = "SELECT * FROM transacttable JOIN users on custid = users.id JOIN cardata ON custid = cardata.plateid WHERE transid = '$tempids'";
                        $result = mysqli_query($con, $query) or die (mysqli_error($db));
                        while ($row = mysqli_fetch_assoc($result)) {
                        $transched = $row['transact_sched'];
                        $fname = $row['firstname'];
                        $lname = $row['lastname'];
                        $phone = $row['phone'];
                        $tid = $row['transid'];
                        $encder = $row['encoder'];
                        $grand = $row['transact1'];
                        $cashamount = $row['cashtotal'];
                         $hello = $row['transact_sched'];
                          $mydate = strtotime($hello);
                          $transids = $row['transid'];
                          $brands = $row['carbrand'];
                          $model = $row['carmodel'];  
                          $ser = $row['carserialnumber'];
}

?>

<!doctype html>
<html lang="en-US">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style type="text/css">
    
  </style>

   <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.css">
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="css/all.css">
   <link href="css/jquery-ui.css" rel="stylesheet" />
   <script src="css/jquery-3.6.4.min.js"></script>
    <script src="css/popper.min.js"></script>
    <script src="css/bootstrap.min.js"></script>
    <script src="css/jquery-ui.min.js"></script>
    <!-- Bootstrap core JavaScript-->
      <script src="css/sweetalert.min.js"></script>
  
</head>

<body>

               <div class="card shadow mb-4">
            <div class="card-body">
              <?php
$sqlquery = "SELECT * FROM users WHERE id = $tempcode;";
     $result= $con->query($sqlquery);
     while($row = $result->fetch_assoc()) {
        $temp_type = $row['user_type'];
    }
    if ($temp_type == "admin") { ?>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Sales and Inventory</h1>
                         <li class="nav-item dropdown " >
                                              
                                                <a class=" dropdown-toggle btn btn-danger" href="#" id="navbarDropdown"
                                                    role="button" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false"><i
                                class="fas fa-cog fa-sm text-white-50"></i> 
                                                     
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-left animated--fade-in"
                                                    aria-labelledby="navbarDropdown">
                                                    
                                                
                                                    <a  href="joborder2.php?editId=<?php echo $transids;?>" class="btn btn-danger bg-light  dropdown-item"><i class="fas fa-edit fa-sm text-dark-50">&nbsp;&nbsp;&nbsp;&nbsp;</i>Update</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="../reciept/print-details.php?id=<?php echo $transids;?>" class="btn btn-danger bg-light  dropdown-item"><i class="fas fa-file-alt fa-sm text-dark-50">&nbsp;&nbsp;&nbsp;&nbsp</i>Reciept</a>
                                                    <div class="dropdown-divider"></div>
                                                   
                                                  
                                                   
                                                </div>
                                            </li>
                        
                    </div>

               <?php }elseif($temp_type='Cashier'){?>

 <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Sales and Inventory</h1>
                         <li class="nav-item dropdown " >
                                              
                                                <a class=" dropdown-toggle btn btn-danger" href="#" id="navbarDropdown"
                                                    role="button" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false"><i
                                class="fas fa-cog fa-sm text-white-50"></i> 
                                                     
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-left animated--fade-in"
                                                    aria-labelledby="navbarDropdown">
                                                    
                                                
                                                    <a  href="joborder2.php?editId=<?php echo $transids;?>" class="btn btn-danger bg-light  dropdown-item"><i class="fas fa-edit fa-sm text-dark-50">&nbsp;&nbsp;&nbsp;&nbsp;</i>Update</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="../reciept/print-details.php?id=<?php echo $transids;?>" class="btn btn-danger bg-light  dropdown-item"><i class="fas fa-file-alt fa-sm text-dark-50">&nbsp;&nbsp;&nbsp;&nbsp</i>Reciept</a>
                                                    <div class="dropdown-divider"></div>
                                                   
                                                  
                                                   
                                                </div>
                                            </li>
                        
                    </div>

      <?php } else { ?>
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Sales and Inventory</h1>
                         <li class="nav-item dropdown " >
                                              
                                                <a class=" dropdown-toggle btn btn-danger" href="#" id="navbarDropdown"
                                                    role="button" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false"><i
                                class="fas fa-cog fa-sm text-white-50"></i> 
                                                     
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-left animated--fade-in"
                                                    aria-labelledby="navbarDropdown">
                                                    
                                                
                                                    
                                                    <div class="dropdown-divider"></div>
                                                    <a href="../reciept/print-details.php?id=<?php echo $transids;?>" class="btn btn-danger bg-light  dropdown-item"><i class="fas fa-file-alt fa-sm text-dark-50">&nbsp;&nbsp;&nbsp;&nbsp</i>Reciept</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="../reciept/print-download.php?id=<?php echo $transids;?>" class="btn btn-danger bg-light  dropdown-item"><i class="fas fa-download fa-sm text-dark-50">&nbsp;&nbsp;&nbsp;&nbsp</i>Reciept</a>
                                                  
                                                   
                                                </div>
                                            </li>
                        
                    </div>
         <?php } ?>
              
<hr>
              <div class="form-group row text-left mb-0 py-2">
                <div class="col-sm-4 py-1">
                  <h6 class="font-weight-bold">Name: 
                    <?php echo $fname; ?> <?php echo $lname; ?>
                  </h6>
                  <h6>
                    Phone: <?php echo $phone; ?>
                  </h6>
                  <h6>
                    Vehicle: <?php echo $brands; ?> <?php echo ' - ', $model; ?>
                  </h6>
                </div>
                <div class="col-sm-4 py-1"></div>
                <div class="col-sm-4 py-1">
                  <h6>
                    Transaction #<?php echo $tid; ?>
                  </h6>
                  <h6 class="font-weight-bold">
                    Encoder: <?php echo $encder;?>
                  </h6>
                  
                   <h6>
                    Plate # : <?php echo $ser; ?>
                  </h6>
                </div>
              </div>
              <div class="card-header py-3">
            <h4>Labors & Services</h4>
          </div>
           
          <table class="table table-bordered" width="100%" cellspacing="0">
            <thead>
              <tr>
                 <th>Category</th>
                <th>Labors & Services</th>
              
                <th width="20%">Total</th>
           <!--     <th width="20%">Subtotal</th> -->
              </tr>
            </thead>
            <tbody>
<?php  
          $querys = "SELECT * FROM transaction_table  WHERE transaction_id = '$tempids' GROUP by name";
                        $results = mysqli_query($con, $querys) or die (mysqli_error($db));
                        while ($rows = mysqli_fetch_assoc($results)) {
                        $itemname = $rows['name'];
                        $item_price = $rows['transact_total'];
                     echo '<tr>';
                     echo '<td>'. $rows['transact_category'].'</td>';
                echo '<td>'. $rows['name'].'</td>';
              
                 echo '<td>';
                echo number_format($item_price, 2);
                 echo '</td>';
                echo '</tr> ';
                        }

?>
            </tbody>
          </table>
             
         
            
               
         
           
<?php  
          $querys = "SELECT item_name,item_price,SUM(item_amount) as totalamount, SUM(item_total) as totalcost,item_category,item_product_id FROM parts_table  WHERE item_transaction_id = '$tempids' GROUP by item_product_id";
                        $results = mysqli_query($con, $querys) or die (mysqli_error($db));

                        if(mysqli_num_rows($results)>0){
                          echo '  <div class="card-header py-3">';
                echo '  <h4>Parts & Materials</h4>';
                echo '  </div>';
                echo '<div class="table-responsive">';
                echo '<table class="table table-bordered" width="100%" cellspacing="0">';
                  echo '<thead>';
                     echo '<tr>';
                     echo '<th>Product Code</th>';

                     echo '<th>Name</th>';
                     echo '<th>Category</th>';
                     echo '<th width="8%">Qty</th>';
                    
                     echo '<th width="20%">Subtotal</th>';
                     echo '</tr>';
                  echo '</thead>';   
                           echo '<tbody>';
                           while ($rows = mysqli_fetch_assoc($results)) {
                             $item_product_id = $rows['item_product_id'];
                        $itemname = $rows['item_name'];
                        $item_price = $rows['item_price'];
                        $item_total = $rows['totalcost'];
                
                              echo '<tr>';
                               echo '<td>'. $item_product_id.'</td>';
                              
                                   echo '<td>'. $itemname.'</td>';
                                    echo '<td>'. $rows['item_category'].'</td>';
                                   echo '<td>'. $rows['totalamount'].'</td>';
                                   
                                   echo '<td>';
                                   echo number_format($rows['totalcost'], 2);
                                   echo '</td>';
                              echo '</tr> ';
                           
                        }
              echo '</tbody>';
                echo '</table>';
                echo '</div>';
                        }else{

                        }
                       

?>
           
          </table>
             
            
              
             <?php 
                     $sql21 = "SELECT SUM(transact_total) FROM transaction_table WHERE transaction_id = '$tempids'";
                    $result21 = mysqli_query($con, $sql21) or die(mysqli_error($db));

                  while ($row = mysqli_fetch_array($result21)) {


                    $sumlabor = $row['SUM(transact_total)'];
                      }
                    ?>
                      <?php 
                     $sqlparts = "SELECT SUM(item_total) FROM parts_table WHERE item_transaction_id = '$tempids'";
                    $resultparts = mysqli_query($con, $sqlparts) or die(mysqli_error($db));

                  while ($row = mysqli_fetch_array($resultparts)) {


                    $sumparts = $row['SUM(item_total)'];
                      }
                      $totalsum = $sumparts + $sumlabor;

                    ?>
                    <?php 
                     $sql211 = "SELECT * FROM transacttable WHERE transid = $tempids";
                    $result211 = mysqli_query($con, $sql211) or die(mysqli_error($db));

                  while ($row = mysqli_fetch_array($result211)) {


                    $payment = $row['cashtotal'];
                      }
                         $totalcharge = $payment - $totalsum;

                         $totalyeah = $sumparts + $sumlabor

                    ?>

            <div class="form-group row text-left mb-0 py-2">
                <div class="col-sm-4 py-1"></div>
                <div class="col-sm-3 py-1"></div>
                <div class="col-sm-4 py-1">
                  <h4>
                    Cash Amount: ₱ <?php echo number_format($cashamount, 2); ?>
                  </h4>
                  <table width="100%">
                  
                    <?php
                     if($sumlabor>0){
                      echo '<tr>';
                      echo '<td class="font-weight-bold">Labor & Services</td>';
                      echo '<td class="text-right">₱';
                      echo number_format($sumlabor,2);
                      echo '</td>';
                      echo '</tr>';
                    }else{

                    }
                    if($sumparts>0){
                      echo '<tr>';
                      echo '<td class="font-weight-bold">Parts & Materials</td>';
                      echo '<td class="text-right">₱';
                      echo number_format($sumparts,2);
                      echo '</td>';
                      echo '</tr>';
                    }
                     ?>
                    
                    
               
                    <tr>
                      <td class="font-weight-bold">Total</td>
                      <td class="font-weight-bold text-right">₱ <?php echo number_format($totalyeah,2); ?></td>
                    </tr>
                      <tr>
                      <td class="font-weight-bold">Change</td>
                      <td class="text-right">₱ <?php echo number_format($totalcharge,2); ?></td>
                    </tr>
                  </table>
                </div>
                <div class="col-sm-1 py-1"></div>
              </div>
            </div>
          </div>


  </body>
  <?php

   if(isset($_SESSION['stats']) && $_SESSION['stats'] !='')
      {
        ?>
        <script>
          swal({
            title: "<?php echo $_SESSION['stats']; ?>",
            
            icon: "<?php echo $_SESSION['stats_code'];?>",

            button: "Close!",
          });
        </script>
        <?php
        unset($_SESSION['stats']);

      }

   if(isset($_SESSION['stats1']) && $_SESSION['stats1'] !='')
      {
        ?>
        <script>
          swal({
            title: "<?php echo $_SESSION['stats1']; ?>",
            text: "<?php echo $_SESSION['stats1_text']; ?>",
            icon: "<?php echo $_SESSION['stats1_code'];?>",
            button: "Close!",
          });
        </script>
        <?php
        unset($_SESSION['stats1']);

      }
    ?>
  </html>


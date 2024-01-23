<?php
  include_once('../../../include/config.php');
  include_once('../../../include/config2.php');

$conn = new PDO('mysql:host=localhost;dbname=fix-it-right', 'root','');
$newcodes = $_POST['producttrans'];
foreach($_POST['product_name'] as $key => $value){
    $tempname = $_POST['product_name'][$key];
    $tempcat = $_POST['product_category'][$key];
    $tempi = $_POST['productss'][$key];

  $sql1 = "SELECT * FROM transaction_table WHERE name ='$tempname' AND transact_category = '$tempcat' AND transaction_id = '$tempi'";
        $result1 = mysqli_query($con,$sql1);
        if(mysqli_num_rows($result1)>0){
             echo "<div class='alert alert-warning'>";
             echo ''.$tempcat.' - '.$tempname.' Services already exist';
             echo '</div> ';
    $tempo = $newcodes;
            $temporaryid = $tempo;
               
  
   
                        // SUM TOTAL

$sqlsum = "SELECT SUM(price) FROM transaction_table WHERE transaction_id ='$temporaryid'";
      $resultsum = mysqli_query($con, $sqlsum) or die(mysqli_error($db));
 while ($row = mysqli_fetch_array($resultsum)) {
    $totalsum = $row['SUM(price)'];
}

    $sum = $_POST['product_qty'][$key];
    $sqlcardata = "SELECT * FROM cardata where id=$sum";
    $resultcardata = $con->query($sqlcardata);
    if ($resultcardata->num_rows > 0) {
            while($row = $resultcardata->fetch_assoc()) {
            $tempcarid = $row['plateid'];   
    }

} else { echo "0 results"; }
$sqltransaction1= "SELECT * FROM transaction_table WHERE transaction_id ='$temporaryid'";
           $result1 = $con->query($sqltransaction1);
           if(mysqli_num_rows($result1)>0){
        
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
                    
        while($row = $result1->fetch_assoc()) {
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



        }else{
             $sql = 'INSERT INTO transaction_table(transact_total,transact_category,name, rate, hour, chance, price, transaction_user_id, transaction_id,car_id_labor,encoder,transaction_sched) VALUES (:transact_total,:transact_category, :name, :rate, :hour, :chance, :price, :transaction_user_id, :transaction_id, :car_id_labor, :encoder, :transaction_sched)';
    $stmt = $conn->prepare($sql);
    $stmt->execute([
    'transact_total' => $_POST['product_totals'][$key],
    'transact_category' => $_POST['product_category'][$key],
    'name' => $_POST['product_name'][$key],
    'rate' => $_POST['product_rate'][$key],
    'hour' => $_POST['product_hour'][$key],
    'chance' => $_POST['producttemp'][$key],
    'price' => $_POST['product_price'][$key],
    'transaction_user_id' => $_POST['product_user'][$key],
    'transaction_id' => $_POST['product_transact'][$key],
    'car_id_labor' => $_POST['product_qty'][$key],
    'encoder' => $_POST['product_encoder'][$key],
     'transaction_sched' => $_POST['product_date'][$key]
           
    ]);
        $tempo = $newcodes;
            $temporaryid = $tempo;
               
  
   
                        // SUM TOTAL

$sqlsum = "SELECT SUM(price) FROM transaction_table WHERE transaction_id ='$temporaryid'";
      $resultsum = mysqli_query($con, $sqlsum) or die(mysqli_error($db));

 while ($row = mysqli_fetch_array($resultsum)) {


    $totalsum = $row['SUM(price)'];


}

    $sum = $_POST['product_qty'][$key];
    $sqlcardata = "SELECT * FROM cardata where id=$sum";
    $resultcardata = $con->query($sqlcardata);
    if ($resultcardata->num_rows > 0) {
            while($row = $resultcardata->fetch_assoc()) {
            $tempcarid = $row['plateid'];   
    }

} else { echo "0 results"; }
//Status

    mysqli_query($con, "UPDATE transacttable set status_no = 3   WHERE transid = '".$tempi."'"  );

$sqltransaction5= "SELECT * FROM transaction_table WHERE transaction_id ='$temporaryid'";
           $result = $con->query($sqltransaction5);
           if(mysqli_num_rows($result)>0){
             echo "<div class='alert alert-success'>";
             echo ''.$tempcat.' - '.$tempname.' Services has been added';
             echo '</div> ';
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
                    
        while($row = $result->fetch_assoc()) {
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

              
 
        



        }
   


}


        
        

?>
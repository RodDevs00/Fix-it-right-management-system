<?php
include_once('../../include/config.php');
  include_once('../../include/config2.php');


$cur = date("Y-m-d");
 $mycur = strtotime($cur);
 
 ?>s

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Details PDF</title>
    
   
 
</head>

<body>
    <style type="text/css">
        table {
    width: 100%;
    border: none;
    border-collapse: collapse;
    border-spacing: 0;
    border-bottom: 2px solid #d2d6dd;
}

th {
    
}
.footer{
    position: absolute;
    right: 0;
    bottom: 0;
    left: 0;
    padding: 1rem;

}
td {
    padding: .8rem 0.4rem;
}

thead {
    border-top: 2px solid #d2d6dd;
    border-bottom: 2px solid #d2d6dd;
    background-color: #efefef;
}

tfoot {
    border-top: 2px solid #d2d6dd;
    border-bottom: 2px solid #d2d6dd;
}

table.striped tr:nth-of-type(2n) {
    background-color: #f3f3f6;
}
    </style>
           <table style="border: none;" > 
              <thead style="background-color: transparent;border: none;">
                   <th width="70.5%"></th>
                    <th></th>   
              </thead>
             <tbody>
            <td style="padding: none;">Daily Reports</td>
            <td><?php echo date('F, jS, Y', $mycur);?></td>
            </tbody>
                </table> 
    <table border="1" width="100%" > 
               <thead>
                   <tr >
                     <th>Labor & Services</th>
                      <th width="25%">Mechanic</th>
                     <th width="20%">Cost</th>
                     <th width="20%">Date</th>
                     
                     
                     </tr>
               </thead>
             <tbody>
                <?php 
                    $currentdate = date("Y-m-d");
                     $sqlinventory = "SELECT * FROM transaction_table JOIN employee on encoder = employee.employee_fname WHERE transaction_sched = '$cur' ORDER BY price ASC";
                     $resultinventory = mysqli_query($con, $sqlinventory) or die(mysqli_error($db));

                     if(mysqli_num_rows($resultinventory)>0){
                        while ($row = mysqli_fetch_array($resultinventory)) {
                      $prodname = $row['name'];
                       $prodprice = $row['price'];
                       $tempdate = $row['transaction_sched'];
                        $myrealdate = strtotime($tempdate);
                        $fn = $row['employee_fname'];
                        $ln = $row['employee_lname'];
                        $full = $fn . ' ' . $ln;
                      echo '<tr>';
                      echo '<td>'.$prodname.'</td>';
                      echo "<td>".$full."</td>";
                      echo '<td>';echo number_format($prodprice,'2');echo'</td>';
                      echo "<td>"; 
                      echo date('F, jS, Y', $myrealdate);
                      echo"</td>";
                      echo '</tr>';
                      }
                     }else{
                         echo '<tr>';
                      echo '<td>No Records Found</td>';
                      echo '<td>No Records Found</td>';
                      echo '<td>No Records Found</td>';
                      echo '<td>No Records Found</td>';
                      echo '</tr>';
                     }
                     
                      ?>

                      
                     </tbody>
                </table>
                <table border="1" width="100%" > 
               <thead>
                   <tr >
                     <th>Parts & Materials</th>
                     <th width="10%">Amount</th>
                     <th width="10%">Price</th>
                     <th width="15%">Cost</th>
                     <th width="30%">Date</th>
                     
                     
                     </tr>
               </thead>
             <tbody>
                <?php 
                    $currentdate = date("Y-m-d");
                     
                     $sqlinventory = "SELECT * FROM parts_table WHERE item_transaction_sched = '$currentdate' AND item_status != 'Pending' ORDER BY item_total ASC";
                     $resultinventory = mysqli_query($con, $sqlinventory) or die(mysqli_error($db));
                     if(mysqli_num_rows($resultinventory)>0){
                        while ($row = mysqli_fetch_array($resultinventory)) {
                         $tempdate = $row['item_transaction_sched'];
                        $myrealdate = strtotime($tempdate);
                      $itemname = $row['item_name'];
                       $itemprice = $row['item_price'];
                       $itemamount = $row['item_amount'];
                        $itemtotal = $row['item_total'];
                      echo '<tr>';
                      echo '<td>'.$itemname.'</td>';
                      echo '<td>'.$itemamount.'</td>';
                      echo '<td>';echo number_format($itemprice,'2');echo'</td>';
                      echo '<td>';echo number_format($itemtotal,'2');echo'</td>';
                      echo "<td>"; 
                      echo date('F, jS, Y', $myrealdate);
                      echo"</td>";

                      echo '</tr>';
                      }
                      }else{
                         echo '<tr>';
                      echo '<td>No Records Found</td>';
                      echo '<td>Empty</td>';
                      echo '<td>Empty</td>';
                      echo '<td>Empty</td>';
                      echo '<td>No Records Found</td>';
                      echo '</tr>';
                      }
                     
                      ?>

                      
                     </tbody>
                </table>
           <table border="1" width="100%" > 
               <thead>
                   <tr >
                     <th width="35%">Expense Name</th>
                     <th>Expense Cost</th>
                     
                     <th width="30%">Date Spend</th>
                     </tr>
               </thead>
             <tbody>
                <?php 
                    $cur = date("Y-m-d");
                      $sqlinventory = "SELECT * FROM expense_table  WHERE expense_date = '$cur;'";
                     $resultinventory = mysqli_query($con, $sqlinventory) or die(mysqli_error($db));
                     if(mysqli_num_rows($resultinventory)>0){
                        while ($row = mysqli_fetch_array($resultinventory)) {
                      $prodname = $row['expense_name'];
                      $prodprice = $row['expense_price'];
                     
                      $proddatestock = $row['expense_date'];
                      $mydate = strtotime($proddatestock);
                      echo '<tr>';
                      echo '<td>'.$prodname.'</td>';
                      echo '<td>';echo number_format($prodprice,'2');echo'</td>';
                     
                      echo "<td>";
                      echo date('F, jS, Y', $mydate);
                      echo"</td>";
                      echo '</tr>';
                      }
                    }else{
                          echo '<tr>';
                      echo '<td>No Records Found</td>';
                      echo '<td>No Records Found</td>';
                      echo '<td>No Records Found</td>';
                      echo '</tr>';
                    }
                     
                      ?>

                      
                     </tbody>
                </table>
                <table border="1" width="100%" > 
            
                 <?php
                            $totalsql = "SELECT SUM(expense_price) as totals FROM expense_table WHERE expense_date = '$cur';";
                            $totalresult= mysqli_query($con,$totalsql);
                            $totaldata = mysqli_fetch_assoc($totalresult);
                            //echo $data['total'];
                            $totalsum = $totaldata['totals'];
                            $totallabor = "SELECT SUM(price) as totalpricelabor FROM transaction_table WHERE transaction_sched = '$cur';";
                            $totalresultlabor= mysqli_query($con,$totallabor);
                            $totallabordata = mysqli_fetch_assoc($totalresultlabor);
                            //echo $data['total'];
                            $totallabor = $totallabordata['totalpricelabor'];
                            $totalparts = "SELECT SUM(item_total) as totalpriceprart FROM parts_table WHERE item_transaction_sched = '$cur' AND item_status !='Pending';";
                            $resultparts= mysqli_query($con,$totalparts);
                            $totalpartsdata = mysqli_fetch_assoc($resultparts);
                            //echo $data['total'];
                            $totalpartsum = $totalpartsdata['totalpriceprart'];
                            $totalihap = $totallabor + $totalpartsum;
                            $totalihap2 = $totalihap - $totalsum;
                           
                        echo '<thead style="border: none;">';
                        echo '<tr style="border: none;">';
                        echo '<th width="35%"></th>';
                        echo '<th>';
                        echo '</tr>';
                        echo '</thead>';
                        echo '<tbody>';
                        echo '<tr>';
                        echo '<td>Total Labor & Services</td>';
                        echo '<td>';echo number_format($totallabor,'2');echo'</td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td>Total Parts & Materials<</td>';
                        echo '<td>';echo number_format($totalpartsum,'2');echo'</td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td>Total Expenses<</td>';
                        echo '<td>';echo number_format($totalsum,'2');echo'</td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td>Total Income<</td>';
                        echo '<td>';echo number_format($totalihap2,'2');echo'</td>';
                        echo '</tr>';
                        echo '</tbody>';
                  
                    
                            ?>


                  
                </table>
               
                         <div class="footer">
                                <table style="text-align: center;border: none;">
                                <tbody>
                                    <tr>
                                    <td>____________________</td>
                                    <td>____________________</td>
                                    </tr>
                                    <tr>
                                    <td>ROJEY GARCIA</td>
                                    <td>MECHANIC SIGNATURE</td>
                                    </tr>     
                                </tbody>
                            </table>
                        </div>

    
  
  
  

</body>
</html>
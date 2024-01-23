<?php
include_once('../../include/config.php');
  include_once('../../include/config2.php');


$cur = date("Y-m-d");
 $mycur = strtotime($cur);
 ?>

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
                   <th width="82.5%"></th>
                    <th></th>   
              </thead>
             <tbody>
            <td style="padding: none;">YEARLY Reports</td>
            <td><?php echo date('F, Y', $mycur);?></td>
            </tbody>
                </table>

    

           <table border="1" width="100%" > 
               <thead>
                   <tr >
                     <th>Labor & Services</th>
                    <th width="10%">Amount</th>
                     <th width="25%">Cost</th>
                     
                     
                     
                     </tr>
               </thead>
             <tbody>
                <?php 
                    $currentdate = date("Y-m-d");
                     
                     $sqlinventory = "SELECT COUNT(name) as countamount,name,SUM(price) as price,transaction_sched FROM transaction_table  WHERE YEAR(`transaction_sched`)=YEAR( CURRENT_DATE ) GROUP BY name ORDER BY price";
                     $resultinventory = mysqli_query($con, $sqlinventory) or die(mysqli_error($db));
                     while ($row = mysqli_fetch_array($resultinventory)) {
                      $prodname = $row['name'];
                       $prodprice = $row['price'];
                      $prodmount = $row['countamount'];
                      
                      echo '<tr>';
                      echo '<td>'.$prodname.'</td>';
                     echo '<td>'.$prodmount.'</td>';
                      echo '<td>';echo number_format($prodprice,'2');echo'</td>';
                      
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
                     

                     <th width="25%">Cost</th>
                     
                     
                     </tr>
               </thead>
             <tbody>
                <?php 
                    $currentdate = date("Y-m-d");
                     
                     $sqlinventory = "SELECT SUM(item_total) as item_total, SUM(item_amount) as item_amount,item_name,item_transaction_sched FROM parts_table WHERE YEAR(`item_transaction_sched`)=YEAR( CURRENT_DATE ) AND item_status !='Pending' GROUP BY item_name";
                     $resultinventory = mysqli_query($con, $sqlinventory) or die(mysqli_error($db));
                     while ($row = mysqli_fetch_array($resultinventory)) {
                      $itemname = $row['item_name'];
                     
                       $itemamount = $row['item_amount'];
                        $itemtotal = $row['item_total'];
                      echo '<tr>';
                      echo '<td>'.$itemname.'</td>';
                      echo '<td>'.$itemamount.'</td>';
                     
                      echo '<td>';echo number_format($itemtotal,'2');echo'</td>';
                     

                      echo '</tr>';
                      }
                      ?>

                      
                     </tbody>
                </table>
                <table border="1" width="100%" > 
               <thead>
                   <tr >
                     <th>Expenses</th>
                     <th width="10%">Amount</th>
                     <th width="25%">Cost</th>
                     
                     
                     </tr>
               </thead>
             <tbody>
                <?php 
                    $currentdate = date("Y-m-d");
                     
                     $sqlinventory = "SELECT expense_date,SUM(expense_price) as expense_price,expense_name,COUNT(expense_id) as expense_amount FROM expense_table WHERE YEAR(`expense_date`)=YEAR( CURRENT_DATE ) GROUP by expense_name ORDER by expense_price";
                     $resultinventory = mysqli_query($con, $sqlinventory) or die(mysqli_error($db));
                     while ($row = mysqli_fetch_array($resultinventory)) {
                      $prodname = $row['expense_name'];
                       $prodprice = $row['expense_price'];
                        $prodamount = $row['expense_amount'];
                      echo '<tr>';
                      echo '<td>'.$prodname.'</td>';
                      echo '<td>'.$prodamount.'</td>';
                      echo '<td>';echo number_format($prodprice,'2');echo'</td>';
                      
                      echo '</tr>';
                      }
                      ?>

                      
                     </tbody>
                </table>
                <table border="1" width="100%" > 
            
                 <?php
                            $totalsql = "SELECT SUM(expense_price) as totals FROM expense_table WHERE YEAR(`expense_date`)=YEAR( CURRENT_DATE )";
                            $totalresult= mysqli_query($con,$totalsql);
                            $totaldata = mysqli_fetch_assoc($totalresult);
                            //echo $data['total'];
                            $totalsum = $totaldata['totals'];
                            $totallabor = "SELECT SUM(price) as totalpricelabor FROM transaction_table WHERE YEAR(`transaction_sched`)=YEAR( CURRENT_DATE )";
                            $totalresultlabor= mysqli_query($con,$totallabor);
                            $totallabordata = mysqli_fetch_assoc($totalresultlabor);
                            //echo $data['total'];
                            $totallabor = $totallabordata['totalpricelabor'];
                            $totalparts = "SELECT SUM(item_total) as totalpriceprart FROM parts_table WHERE YEAR(`item_transaction_sched`)=YEAR( CURRENT_DATE ) AND item_status !='Pending';";
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
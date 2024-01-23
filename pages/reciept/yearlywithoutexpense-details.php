<?php
include_once('../../include/config.php');
  include_once('../../include/config2.php');


$cur = date("Y-m-d");
 $mycur = strtotime($cur);
 $monthlyquery = "SELECT SUM(`item_total`) as monthtotal FROM parts_table WHERE YEAR(`dt`)=YEAR( CURRENT_DATE ) AND YEAR(`dt`)=YEAR( CURRENT_DATE )";
$monthlyresult= mysqli_query($con,$monthlyquery);
$monthlydata = mysqli_fetch_assoc($monthlyresult);
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
            <td style="padding: none;">YEARLY Parts & Materials</td>
            <td><?php echo date('F, Y', $mycur);?></td>
            </tbody>
                </table>

        
                <table border="1" width="100%" > 
               <thead>
                   <tr >
                     <th>Parts & Materials</th>
                    

                     <th width="10%">Amount</th>
                     
                     <th width="30%">Cost</th>
                  
                     
                     </tr>
               </thead>
             <tbody>
                <?php 
                    $currentdate = date("Y-m-d");
                     
                     $sqlinventory = "SELECT SUM(item_total) as item_total, SUM(item_amount) as item_amount, item_name, item_price,item_transaction_sched FROM parts_table WHERE YEAR(`item_transaction_sched`)=YEAR( CURRENT_DATE ) GROUP by item_name ORDER BY item_total ASC";
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
                     <th width="60%"></th>
                     <th></th>
                     
                    
                     </tr>
               </thead>
             <tbody>
                <?php 
                 
                $sqltotal = "SELECT SUM(item_total) as totals, SUM(item_amount) as count FROM parts_table WHERE YEAR(`item_transaction_sched`)=YEAR( CURRENT_DATE )";
                            $totalresult= mysqli_query($con,$sqltotal);
                            $totaldata = mysqli_fetch_assoc($totalresult);
                            $totalsum = $totaldata['totals'];
                            $totalcount = $totaldata['count'];
                     if($totalsum > 0){
                            echo '<tr>';
                            echo '<td>Total Items</td>';
                            echo '<td>'.$totalcount.'</td>';
                            echo '</tr>';
                            echo '<tr>';
                            echo '<td>Total Amount</td>';
                            echo '<td>';echo number_format($totalsum,'2');echo'</td>';
                            echo '</tr>';
                       }else{

                       }

                      ?>

                     
                        
                                            
                     </tbody>
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
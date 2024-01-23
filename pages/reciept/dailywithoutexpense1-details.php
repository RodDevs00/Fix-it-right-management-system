<?php
include_once('../../include/config.php');
  include_once('../../include/config2.php');


$cur = date("Y-m-d");
 $mycur = strtotime($cur);
 if(isset($_POST['specificdailyexpense']))
{   
    
    $chosendate = $_POST['expense_date'];
    $chosendate2 = $_POST['expense_date1'];
    $mycur2 = strtotime($chosendate);
    $mycur3 = strtotime($chosendate2);
    
}
 ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daily Income</title>

    
 
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
            <th width="60%"></th>
            <th></th>   
        </thead>
             <tbody>
                <td style="padding: none;">Daily Income for Parts & Materials</td>
                <td><?php echo date('F, jS, Y', $mycur2); echo " - "; echo date('F, jS, Y', $mycur3);?></td>
            </tbody>
                </table> 
                <table border="1" width="100%" > 
               <thead>
                   <tr >
                     <th>Parts & Materials</th>
                     <th width="10%">Amount</th>
                     <th width="25%">Price</th>

                     <th width="20%">Cost</th>
                     <th width="20%">Date</th>
                     
                     </tr>
               </thead>
             <tbody>
                <?php 
                    $currentdate = date("Y-m-d");
                     
                     $sql = "SELECT * FROM parts_table WHERE item_transaction_sched >= '$chosendate' AND item_transaction_sched <= '$chosendate2' ORDER BY item_total ASC";
                     $result = mysqli_query($con, $sql) or die(mysqli_error($db));
                     if(mysqli_num_rows($result)>0){
                        while ($row = mysqli_fetch_array($result)) {
                      $itemname = $row['item_name'];
                       $itemprice = $row['item_price'];
                       $itemamount = $row['item_amount'];
                        $itemtotal = $row['item_total'];
                        $tempdate = $row['item_transaction_sched'];
                        $myrealdate = strtotime($tempdate);
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
                            $totalsql = "SELECT SUM(item_total) as totals, COUNT(item_id) as count FROM parts_table WHERE item_transaction_sched >= '$chosendate' AND item_transaction_sched <= '$chosendate2';";
                            $totalresult= mysqli_query($con,$totalsql);
                            $totaldata = mysqli_fetch_assoc($totalresult);
                            //echo $data['total'];
                            $totalsum = $totaldata['totals'];
                            $totalcount = $totaldata['count'];
                if($totalsum > 0){
                        echo '<thead style="border: none;">';
                        echo '<tr style="border: none;">';
                        echo '<th width="60%"></th>';
                        echo '<th>';
                        echo '</tr>';
                        echo '</thead>';
                        echo '<tbody>';
                        echo '<tr>';
                        echo '<td>Total Cost</td>';
                        echo '<td>';echo number_format($totalsum,'2');echo'</td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td>Total Number of Parts & Materials<</td>';
                        echo '<td>';echo number_format($totalcount,'2');echo'</td>';
                        echo '</tr>';
                        echo '</tbody>';
                    }else{

                    } 
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
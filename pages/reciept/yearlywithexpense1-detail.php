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
    $test =date('Y', $mycur2);
    $test2 =date('Y', $mycur3);
 
    
}
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

td {
    padding: .8rem 0.4rem;
}
.footer{
    position: absolute;
    right: 0;
    bottom: 0;
    left: 0;
    padding: 1rem;

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
            <td style="padding: none;">Yearly Labors & Services</td>
            <td><?php echo date('Y', $mycur2); echo " - "; echo date('Y', $mycur3);?></td>
            </tbody>
                </table> 
           <table border="1" width="100%" > 
               <thead>
                    <tr >
                     <th>Labor & Services</th>
                        <th width="10%">Amount</th>
                     <th width="30%">Cost</th>
                       
                   
                     
                     </tr>
               </thead>
             <tbody>
             <?php 
                    $currentdate = date("Y-m-d");
                     
                     $sqlinventory = "SELECT COUNT(name) as countamount,name,SUM(price) as price,transaction_sched FROM transaction_table  WHERE YEAR(`transaction_sched`)>= '$test' AND YEAR(`transaction_sched`) <= '$test2' GROUP BY name ORDER BY price";
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
                     <th width="60%"></th>
                     <th></th>
                     
                    
                     </tr>
               </thead>
             <tbody>
                <?php 
                 
$sqltotal = "SELECT SUM(price) as totals, COUNT(name) as count FROM transaction_table WHERE YEAR(`transaction_sched`)>= '$test' AND YEAR(`transaction_sched`) <= '$test2'";
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
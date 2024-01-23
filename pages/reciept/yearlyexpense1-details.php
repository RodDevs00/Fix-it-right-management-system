<?php
include_once('../../include/config.php');
  include_once('../../include/config2.php');

$cur1 = date("Y-m-d");
 $mycur1 = strtotime($cur1);
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
            <td style="padding: none;">Yearly Expenses</td>
            <td><?php echo date(' Y', $mycur2); echo " - "; echo date(' Y', $mycur3);?></td>
            </tbody>
                </table> 
           <table border="1" width="100%" > 
               <thead>
                   <tr >
                     <th>Expense Name</th>
                     <th>Amount</th>
                     <th width="25%">Expense Cost</th>
                     <th>Date Spend</th>
                    
                     </tr>
               </thead>
             <tbody>
                <?php 
                   

                    //  $sqlinventory = "SELECT SUM(expense_price) as totalp, expense_name, expense_date,COUNT(expense_id) as magiccount FROM expense_table  WHERE YEAR(`expense_date`)>= '$test' AND YEAR(`expense_date`) <= '$test2' GROUP BY expense_name ORDER by expense_date";
                   $sqlinventory = "SELECT SUM(expense_price) as totalp, expense_name, expense_date,COUNT(expense_id) as magiccount FROM expense_table  WHERE YEAR(`expense_date`)>= '$test' AND YEAR(`expense_date`) <= '$test2' GROUP BY expense_name ORDER by expense_date";
                      // 
                     

                    //
                     $resultinventory = mysqli_query($con, $sqlinventory) or die(mysqli_error($db));
                     while ($row = mysqli_fetch_array($resultinventory)) {
                      $prodname = $row['expense_name'];
                      $prodprice = $row['totalp'];
                        $prodcount = $row['magiccount'];
                      $proddatestock = $row['expense_date'];
                      $mydate = strtotime($proddatestock);
                      echo '<tr>';
                      echo '<td>'.$prodname.'</td>';
                      echo '<td>'.$prodcount.'</td>';
                      echo '<td>';echo number_format($prodprice,'2');echo'</td>';
                     
                      echo "<td>";
                      echo date('F, jS, Y', $mydate);
                      echo"</td>";
                      echo '</tr>';
                      }


                      ?>

                      
                     </tbody>
                </table>

                <table border="1" width="100%" > 
               <thead>
                   <tr >
                     <th width="50%"></th>
                     <th></th>
                     
                    
                     </tr>
               </thead>
             <tbody>
                <?php 
                 $sqlrun = "SELECT date_format(expense_date, '%M'),expense_date,SUM(expense_price) as totalexpenseprice FROM expense_table WHERE YEAR(`expense_date`) >= '$test' AND YEAR(`expense_date`) <= '$test2' GROUP BY date_format(expense_date,'%Y')";
                  $resultrun = mysqli_query($con, $sqlrun) or die(mysqli_error($db));
                  if(mysqli_num_rows($resultrun)>0){
                    while ($row = mysqli_fetch_array($resultrun)) {
                      $prodprice = $row['totalexpenseprice'];
                      $proddatestock = $row['expense_date'];
                      $mydate = strtotime($proddatestock);
                      echo '<tr>';
                      echo '<td>Expenses of ';
                          echo date('Y', $mydate);
                          echo '</td>';
                      echo '<td>';echo number_format($prodprice,'2');echo'</td>';
                     
                    
                      echo '</tr>';

                  }
              }else{
                  
              }


            $sqltotal = "SELECT SUM(expense_price) as totals, COUNT(expense_id) as count FROM expense_table WHERE YEAR(`expense_date`)>= '$test' AND YEAR(`expense_date`) <= '$test2'";
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
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
    $test =date('m', $mycur2);
    $test2 =date('m', $mycur3);
 
    
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
            <td style="padding: none;">Monthly Expenses</td>
            <td><?php echo $chosendate; echo " - "; echo $chosendate2;?></td>
            </tbody>
                </table> 
           <table border="1" width="100%" > 
               <thead>
                   <tr >
                     <th>Expense Name</th>
                     <th>Expense Cost</th>
                     
                     <th>Date Spend</th>
                     </tr>
               </thead>
             <tbody>
                <?php 
                    $cur = date("Y-m-d");

                      $sqlinventory = "SELECT date_format(expense_date, '%M'),expense_date,SUM(expense_price) as totalexpenseprice FROM expense_table GROUP BY date_format(expense_date,'%M')";

                     $resultinventory = mysqli_query($con, $sqlinventory) or die(mysqli_error($db));
                     while ($row = mysqli_fetch_array($resultinventory)) {
                    
                     
                     echo '<tr>';
                     echo '<td>';
                     
                     echo '</td>';
                    echo '<td>'.$row['totalexpenseprice'];
                    echo '<td>'.$row['expense_date'];
                      echo '</tr>';
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
</html>  <?php
                     $sqlmonth = "SELECT date_format(expense_date, '%M'),expense_date,SUM(expense_price) as totalexpenseprice FROM expense_table GROUP BY date_format(expense_date,'%M') ORDER by expense_date";
                            $resultmonth = mysqli_query($con, $sqlmonth) or die(mysqli_error($db));
                     $sqltotal = "SELECT SUM(expense_price) as totals, COUNT(expense_id) as count FROM expense_table WHERE MONTH(`expense_date`)>= '$test' AND MONTH(`expense_date`) <= '$test2'";
                            $totalresult= mysqli_query($con,$sqltotal);
                            $totaldata = mysqli_fetch_assoc($totalresult);
                            $totalsum = $totaldata['totals'];
                            $totalcount = $totaldata['count'];
                            if($totalsum > 0){
                        echo '<thead style="border: none;">';
                        echo '<tr style="border: none;">';
                        echo '<th width="32.3%"></th>';
                        echo '<th>';
                        echo '</tr>';

                        echo '</thead>';
                        echo '<tbody>';
                        while ($row = mysqli_fetch_array($resultmonth)) {
                            $proddatestock = $row['expense_date'];
                             $mydate = strtotime($proddatestock);
                             $myprice = $row['totalexpenseprice'];
                          echo '<tr>';
                          echo '<td>Total Expenses of ';
                          echo date('F Y', $mydate);
                          echo '</td>';
                          echo '<td>';echo number_format($myprice,'2');echo'</td>';

                          echo '</tr>';
                        }
                        echo '<tr>';
                        echo '<td>Total Expenses</td>';
                        echo '<td>';echo number_format($totalsum,'2');echo'</td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td>Total Items</td>';
                        echo '<td>';echo number_format($totalcount,'2');echo'</td>';
                        echo '</tr>';
                        echo '</tbody>';
                    }else{

                    }
                    ?>

                    $cur = date("Y-m-d");

                     $sqlinventory = "SELECT date_format(expense_date, '%M'),expense_date,SUM(expense_price) as totalexpenseprice FROM expense_table WHERE MONTH(`expense_date`) >= '$test' AND MONTH(`expense_date`) <= '$test2' GROUP BY date_format(expense_date,'%M')";
                      // 
                     

                    //
                     $resultinventory = mysqli_query($con, $sqlinventory) or die(mysqli_error($db));
                     while ($row = mysqli_fetch_array($resultinventory)) {
                      
                      $prodprice = $row['totalexpenseprice'];
                     
                      $proddatestock = $row['expense_date'];
                      $mydate = strtotime($proddatestock);
                      echo '<tr>';
                      
                      echo '<td>';echo number_format($prodprice,'2');echo'</td>';
                     
                     echo '<td>'.$row['expense_date'].'</td>';
                      echo '</tr>';
                      }
                      ?>